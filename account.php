<?php
// File: account.php
session_start();

// 1. Check if user is logged in
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php"); // Redirect to login if not logged in
    exit();
}

// 2. Include Database Connection
require 'db_connect.php'; // $conn variable is available

// 3. Get User Info from Session
$user_id = $_SESSION['user_id'];
$username = isset($_SESSION['username']) ? htmlspecialchars($_SESSION['username']) : 'User';

// 4. Fetch User's Bookings from Database
$bookings = []; // Initialize empty array
$sql = "SELECT
            b.booking_id, b.package_id, b.booking_date, b.travel_date,
            b.num_people, b.total_price, b.status,
            p.title AS package_title, p.image_url AS package_image_url
        FROM bookings b
        LEFT JOIN packages p ON b.package_id = p.id
        WHERE b.user_id = ?
          AND b.status != 'cancelled' -- <<< ADD THIS LINE TO EXCLUDE CANCELLED
        ORDER BY b.booking_date DESC"; // Order by most recent booking

$stmt = mysqli_prepare($conn, $sql);

if ($stmt) {
    mysqli_stmt_bind_param($stmt, "i", $user_id);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    if ($result) {
        while ($row = mysqli_fetch_assoc($result)) {
            $bookings[] = $row; // Add each booking to the array
        }
    } else {
        // Handle query error (log it, show generic message)
        error_log("Error fetching bookings: " . mysqli_error($conn));
    }
    mysqli_stmt_close($stmt);
} else {
    // Handle statement preparation error (log it)
    error_log("Error preparing statement: " . mysqli_error($conn));
}
mysqli_close($conn); // Close DB connection

// --- Page Setup ---
$page_title = "My Account - TripNE";
$page_specific_css = 'css/account.css'; // Link the NEW specific CSS

include 'header.php'; // Include header (make sure path is correct)
?>

<main id="account-page">
    <section class="account-header">
        <div class="container">
            <h1>Welcome, <?php echo $username; ?>!</h1>
            <p>Manage your bookings and account details here.</p>
        </div>
    </section>

    <section class="account-content">
        <div class="container account-layout">

            <!-- Sidebar/Menu -->
            <aside class="account-menu">
                <h2>Navigation</h2>
                <ul>
                    <li><a href="account.php" class="active"><i class="fas fa-suitcase-rolling icon"></i> My Bookings</a></li>
                    <li><a href="#"><i class="fas fa-user-edit icon"></i> Edit Profile</a></li> <!-- Placeholder -->
                    <li><a href="#"><i class="fas fa-shield-alt icon"></i> Security</a></li>   <!-- Placeholder -->
                    <li><a href="index.php"><i class="fas fa-home icon"></i> Main Menu</a></li>
                    <li><a href="logout.php"><i class="fas fa-sign-out-alt icon"></i> Logout</a></li>
                </ul>
            </aside>

            <!-- Main Content Area -->
            <div class="account-main">
                <h2>My Bookings</h2>

                <?php // Display feedback messages if redirected from cancel_booking.php ?>
                <?php if (isset($_GET['cancel_status']) && $_GET['cancel_status'] == 'success'): ?>
                    <div class="status-message success">Booking successfully cancelled.</div>
                <?php elseif (isset($_GET['cancel_status']) && $_GET['cancel_status'] == 'error'): ?>
                    <div class="status-message error">Could not cancel booking. Please try again or contact support.</div>
                <?php elseif (isset($_GET['cancel_status']) && $_GET['cancel_status'] == 'notfound'): ?>
                    <div class="status-message error">Booking not found or you do not have permission to cancel it.</div>
                 <?php elseif (isset($_GET['cancel_status']) && $_GET['cancel_status'] == 'notcancellable'): ?>
                    <div class="status-message info">This booking cannot be cancelled at this stage.</div>
                <?php endif; ?>


                <?php if (empty($bookings)): ?>
                    <div class="no-bookings-message">
                        <p>You haven't booked any packages yet.</p>
                        <a href="packages.php" class="btn primary-btn">Explore Packages</a>
                    </div>
                <?php else: ?>
                    <div class="booking-list" id="booking-list-container"> <!-- Add ID for event delegation -->
                        <?php foreach ($bookings as $booking): ?>
                            <?php
                                // Determine if the booking is in a state that allows cancellation
                                $cancellable_statuses = ['pending_payment', 'confirmed']; // Define which statuses can be cancelled
                                $can_cancel = in_array($booking['status'], $cancellable_statuses);
                            ?>
                            <div class="booking-item status-<?php echo htmlspecialchars($booking['status']); ?>">
                                <div class="booking-image">
                                    <img src="<?php echo !empty($booking['package_image_url']) ? htmlspecialchars($booking['package_image_url']) : 'images/placeholder-package.jpg'; ?>"
                                         alt="<?php echo htmlspecialchars($booking['package_title']); ?>"
                                         loading="lazy">
                                </div>
                                <div class="booking-details">
                                    <h3><?php echo htmlspecialchars($booking['package_title']); ?></h3>
                                    <p><strong>Booking ID:</strong> #<?php echo htmlspecialchars($booking['booking_id']); ?></p>
                                    <p><strong>Booked On:</strong> <?php echo date("M d, Y", strtotime($booking['booking_date'])); ?></p>
                                    <?php if (!empty($booking['travel_date'])): ?>
                                    <p><strong>Travel Date:</strong> <?php echo date("M d, Y", strtotime($booking['travel_date'])); ?></p>
                                    <?php endif; ?>
                                    <p><strong>People:</strong> <?php echo htmlspecialchars($booking['num_people']); ?></p>
                                    <p><strong>Total Price:</strong> ₹<?php echo number_format($booking['total_price'], 2); ?></p>
                                </div>
                                <div class="booking-status-action">
                                     <span class="booking-status"><?php echo ucfirst(str_replace('_', ' ', htmlspecialchars($booking['status']))); ?></span>
                                     <div class="booking-actions">
                                         <?php if ($booking['status'] == 'pending_payment'): ?>
                                             <a href="checkout.php?booking_id=<?php echo $booking['booking_id']; ?>" class="btn primary-btn payout-button">Proceed to Payment</a>
                                         <?php elseif ($booking['status'] == 'confirmed'): ?>
                                              <a href="#" class="btn outline-btn view-voucher-button">View Details/Voucher</a>
                                          <?php elseif ($booking['status'] == 'completed'): ?>
                                               <a href="#" class="btn outline-btn leave-review-button">Leave Review</a>
                                         <?php endif; ?>

                                         <!-- ****** ADD CANCEL BUTTON CONDITIONALLY ****** -->
                                         <?php if ($can_cancel): ?>
                                             <button class="btn destructive-btn cancel-booking-btn" data-booking-id="<?php echo $booking['booking_id']; ?>">
                                                 Cancel Booking
                                             </button>
                                         <?php endif; ?>
                                         <!-- ****** END CANCEL BUTTON ****** -->

                                     </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>
            </div>

        </div> <!-- End account-layout -->
    </section>
</main>

<?php
// Optional: Include a footer partial
// include 'footer.php';
?>

<!-- Link Global/Navbar JS -->
<script src="js/navbar.js"></script>
<script src="js/account-interactions.js"></script>
<!-- No specific JS needed for this static view unless adding interactions -->

</body>
</html>