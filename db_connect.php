<?php
$dbHost = 'localhost'; // Usually correct for XAMPP
$dbUser = 'root';      // Default XAMPP username (change if needed)
$dbPass = '';          // Default XAMPP password is empty (change if needed)
$dbName = 'tripne_db'; // The database you created

$conn = new mysqli($dbHost, $dbUser, $dbPass, $dbName);

// Check connection
if ($conn->connect_error) {
    // Don't show detailed errors in production! Log them instead.
    die("Connection failed: " . $conn->connect_error);
}
// Optional: Set character set for better compatibility
$conn->set_charset("utf8mb4");
?>