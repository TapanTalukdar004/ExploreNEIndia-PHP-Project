<?php
// File: cancel_booking.php
session_start();

// 1. Check if user is logged in
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php?error=loginrequired");
    exit();
}

// 2. Check if it's a POST request and booking_id is provided
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['booking_id'])) {

    // 3. Include Database Connection
    require 'db_connect.php'; // $conn variable

    // 4. Get Data
    $user_id = $_SESSION['user_id'];
    $booking_id_to_cancel = filter_var(trim($_POST['booking_id']), FILTER_VALIDATE_INT);

    // Validate booking ID
    if ($booking_id_to_cancel === false || $booking_id_to_cancel <= 0) {
        mysqli_close($conn);
        header("Location: account.php?cancel_status=error&reason=invalidid");
        exit();
    }

    // --- Security Check: Verify Ownership and Cancellable Status ---
    $sql_check = "SELECT user_id, status FROM bookings WHERE booking_id = ?";
    $stmt_check = mysqli_prepare($conn, $sql_check);
    $cancellation_successful = false; // Flag to track success

    if ($stmt_check) {
        mysqli_stmt_bind_param($stmt_check, "i", $booking_id_to_cancel);
        mysqli_stmt_execute($stmt_check);
        $result_check = mysqli_stmt_get_result($stmt_check);

        if ($result_check && $booking_row = mysqli_fetch_assoc($result_check)) {
            // Check if the booking belongs to the logged-in user
            if ($booking_row['user_id'] == $user_id) {
                // Check if the status allows cancellation
                $cancellable_statuses = ['pending_payment', 'confirmed']; // Define allowed statuses
                if (in_array($booking_row['status'], $cancellable_statuses)) {

                    // --- Proceed with Cancellation ---
                    $sql_update = "UPDATE bookings SET status = 'cancelled' WHERE booking_id = ? AND user_id = ?";
                    $stmt_update = mysqli_prepare($conn, $sql_update);

                    if ($stmt_update) {
                        mysqli_stmt_bind_param($stmt_update, "ii", $booking_id_to_cancel, $user_id);
                        if (mysqli_stmt_execute($stmt_update)) {
                            // Check if any row was actually updated
                            if (mysqli_stmt_affected_rows($stmt_update) > 0) {
                                $cancellation_successful = true;
                            } else {
                                // Update command ran but didn't change anything (rare case)
                                error_log("Cancel booking: No rows affected for booking ID {$booking_id_to_cancel} and user ID {$user_id}");
                            }
                        } else {
                            // Handle UPDATE execution error
                            error_log("Cancel Booking UPDATE Error: " . mysqli_stmt_error($stmt_update));
                        }
                        mysqli_stmt_close($stmt_update);
                    } else {
                        // Handle UPDATE statement preparation error
                        error_log("Cancel Booking Prepare UPDATE Error: " . mysqli_error($conn));
                    }
                } else {
                    // Status does not allow cancellation
                    mysqli_stmt_close($stmt_check);
                    mysqli_close($conn);
                    header("Location: account.php?cancel_status=notcancellable&id=" . $booking_id_to_cancel);
                    exit();
                }
            } else {
                // User does not own this booking (Security)
                mysqli_stmt_close($stmt_check);
                mysqli_close($conn);
                header("Location: account.php?cancel_status=error&reason=auth"); // Generic auth error
                exit();
            }
        } else {
            // Booking ID not found
            mysqli_stmt_close($stmt_check);
            mysqli_close($conn);
            header("Location: account.php?cancel_status=notfound");
            exit();
        }
        mysqli_stmt_close($stmt_check);
    } else {
        // Handle CHECK statement preparation error
        error_log("Cancel Booking Prepare CHECK Error: " . mysqli_error($conn));
    }

    mysqli_close($conn);

    // --- Redirect based on success flag ---
    if ($cancellation_successful) {
        header("Location: account.php?cancel_status=success&id=" . $booking_id_to_cancel);
    } else {
        header("Location: account.php?cancel_status=error");
    }
    exit();

} else {
    // --- Invalid Access ---
    // If not POST or booking_id missing, redirect
    header("Location: account.php?cancel_status=error&reason=invalidrequest");
    exit();
}
?>