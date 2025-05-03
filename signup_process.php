<?php
session_start();
require 'db_connect.php'; // Assumes $conn is the mysqli connection variable from this file

// Check if the form was submitted using POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // --- !!! Basic Input Retrieval (SANITIZE IN REAL APP) !!! ---
    $username = trim($_POST['username']);
    $email = trim($_POST['email']);
    $password = $_POST['password'];

    // --- !!! Basic Validation (ADD MORE IN REAL APP) !!! ---
    if (empty($username) || empty($email) || empty($password)) {
         header("Location: login.php?error=emptyfields");
         exit();
    }
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
          header("Location: login.php?error=invalidemail");
         exit();
    }
    // --- Add checks for password strength, existing user/email etc. ---

    // Hash the password
    $password_hash = password_hash($password, PASSWORD_DEFAULT);

    // --- Prepare SQL statement using procedural style placeholders ---
    $sql = "INSERT INTO users (username, email, password_hash) VALUES (?, ?, ?)";
    $stmt = mysqli_prepare($conn, $sql); // Use mysqli_prepare

    if ($stmt) {
        
        mysqli_stmt_bind_param($stmt, "sss", $username, $email, $password_hash);

        // Execute the statement
        if (mysqli_stmt_execute($stmt)) {
            // Signup successful! Log the user in.
            $new_user_id = mysqli_insert_id($conn); // Get last inserted ID from the connection

            $_SESSION['user_id'] = $new_user_id;
            $_SESSION['username'] = $username;

            // Redirect to the main page
            mysqli_stmt_close($stmt); // Close statement here
            mysqli_close($conn);      // Close connection here
            header("Location: login.php?signup=success");
            exit();
        } else {
            // Signup failed (e.g., duplicate username/email)
            // In a real app, check mysqli_error($stmt) for specifics
            mysqli_stmt_close($stmt);
            mysqli_close($conn);
            header("Location: login.php?error=sqlerror_execute");
            exit();
        }
    } else {
        // SQL preparation failed
        // In a real app, check mysqli_error($conn)
        mysqli_close($conn);
        header("Location: login.php?error=sqlerror_prepare");
        exit();
    }

} else {
    // If not a POST request, redirect back
    header("Location: login.php");
    exit();
}
?>