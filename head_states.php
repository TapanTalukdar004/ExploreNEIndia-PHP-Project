<?php
// Start session if not already started
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Check login status
$is_logged_in = isset($_SESSION['user_id']) && isset($_SESSION['username']);
if ($is_logged_in) {
    $username = $_SESSION['username'];
}

// You might want to set a default title or pass one in later
$page_title = "TripNE - Your Northeast Adventure"; // Example default

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php echo htmlspecialchars($page_title); ?>
    </title>
    <?php // Use a variable for flexibility ?>
    <!-- === LINK YOUR CSS FILE HERE === -->
    <link rel="stylesheet" href="css/head_states.css">


    <!-- Link Font Awesome (if you use it) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- Other meta tags, favicons, etc. -->

</head>

<body>
    <?php // Open body tag here ?>

    <!-- Header: Contains the navigation -->

    <header class="main-header"> <!-- Keep class for styling/scroll -->
        <nav>
            <div class="navbar-container">
                <!-- Logo -->
                <a href="index.php" class="logo" title="TripNE Home">TRIP<span>NE</span></a>

                <!-- Navigation Links -->
                <ul class="nav-links">
                    <li><a href="#destinations">Destinations</a></li>
                    <li><a href="#why-us">Why Choose Us</a></li>
                    <li><a href="#packages">Packages</a></li>
                    <li><a href="#Blogs">Blogs</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>

                <!-- Conditional Display Area (Sign Up OR User Info) -->
                <div class="nav-action-area">
                    <?php if ($is_logged_in): ?>
                    <!-- Logged-in User View -->
                    <div class="nav-user-account">
                        <a href="account.php" class="username-link" title="My Account">
                            <i class="fas fa-user-circle"></i>
                            <?php echo htmlspecialchars($username); ?>
                        </a>
                        <a href="logout.php" class="btn-icon logout-btn" title="Logout">
                            <i class="fas fa-sign-out-alt"></i>
                        </a>
                    </div>
                    <?php else: ?>
                    <!-- Logged-out User View -->
                    <a href="login.php" class="btn nav-signup-btn">Account</a>
                    <?php endif; ?>
                </div>
               

            </div> 
        </nav>
    </header>

   