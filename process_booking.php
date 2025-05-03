<?php
// File: process_booking.php
session_start(); // Start session to access logged-in user ID

// --- Security Check 1: User Logged In? ---
if (!isset($_SESSION['user_id'])) {
    // Not logged in. Redirect to login page.
    // We can optionally pass the package ID so they can be redirected back after login
    // (Requires extra logic on login_process.php not covered here)
    $return_package = isset($_POST['package_id']) ? trim($_POST['package_id']) : '';
    header("Location: login.php?error=loginrequired" . ($return_package ? "&return_to=" . urlencode($return_package . ".php") : ''));
    exit();
}

// --- Security Check 2: Correct Method and Data? ---
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['package_id']) && isset($_POST['package_price'])) {

    // --- Database Connection ---
    require 'db_connect.php'; // Provides the $conn variable

    // --- Get and Validate Submitted Data ---
    $user_id = $_SESSION['user_id']; // Get user ID from session
    $package_id = trim($_POST['package_id']);
    $base_price = filter_var(trim($_POST['package_price']), FILTER_VALIDATE_FLOAT);

    // --- Basic Data Validation ---
    // Add more robust validation as needed (e.g., check if package_id exists in packages table)
    if (empty($package_id) || $base_price === false || $base_price <= 0) {
        mysqli_close($conn);
        // Redirect back to the referring package page (if possible) or a generic error page
        header("Location: " . (isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : 'packages.php') . "?booking_error=invaliddata");
        exit();
    }

    // --- Set Initial Booking Details ---
    $num_people = 1; // Default to 1 person for this simple process
    $total_price = $base_price * $num_people; // Calculate total (simple example)
    $status = 'pending_payment'; // Set initial status
    $travel_date = null; // Travel date not collected in this basic form

    // --- Prepare SQL INSERT Statement ---
    // Using placeholders (?) prevents SQL injection
    $sql = "INSERT INTO bookings (user_id, package_id, num_people, total_price, status, travel_date, booking_date)
            VALUES (?, ?, ?, ?, ?, ?, NOW())"; // Use NOW() for current timestamp

    $stmt = mysqli_prepare($conn, $sql);

    // Check if statement preparation was successful
    if ($stmt) {
        // --- Bind Parameters ---
        // 'isidss' corresponds to the data types: i=integer, s=string, d=double/decimal
        mysqli_stmt_bind_param($stmt, "isidss",
            $user_id,       // i - integer
            $package_id,    // s - string
            $num_people,    // i - integer
            $total_price,   // d - double
            $status,        // s - string
            $travel_date    // s - string (or null) - DATE type accepts string 'YYYY-MM-DD' or NULL
        );

        // --- Execute the Statement ---
        if (mysqli_stmt_execute($stmt)) {
            // --- Booking Successful ---
            $new_booking_id = mysqli_insert_id($conn); // Get the ID of the booking just created

            // Close statement and connection
            mysqli_stmt_close($stmt);
            mysqli_close($conn);

            // --- Redirect User ---
            // Redirect to the account page to show the new booking
            header("Location: account.php?booking_status=success&bid=" . $new_booking_id);
            exit();

        } else {
            // --- Execution Failed ---
            // Log the detailed error for debugging (don't show to user)
            error_log("Booking INSERT Execution Error: " . mysqli_stmt_error($stmt));

            // Close statement and connection
            mysqli_stmt_close($stmt);
            mysqli_close($conn);

            // Redirect back to the package page with a generic error
            $redirect_page = !empty($package_id) ? $package_id . ".php" : 'packages.php';
            header("Location: " . $redirect_page . "?booking_error=failed");
            exit();
        }
    } else {
        // --- Statement Preparation Failed ---
        // Log the detailed error
        error_log("Booking INSERT Prepare Error: " . mysqli_error($conn));

        // Close connection
        mysqli_close($conn);

        // Redirect back with a generic error
        $redirect_page = !empty($package_id) ? $package_id . ".php" : 'packages.php';
        header("Location: " . $redirect_page . "?booking_error=preparefailed");
        exit();
    }

} else {
    // --- Invalid Access Method or Missing Data ---
    // Redirect to the main packages page if accessed directly or without required data
    header("Location: packages.php?error=invalidaccess");
    exit();
}
?>