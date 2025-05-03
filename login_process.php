<?php
session_start();
require 'db_connect.php'; // Assumes $conn is the mysqli connection variable

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // --- !!! Basic Input Retrieval (SANITIZE IN REAL APP) !!! ---
    $username = trim($_POST['username']);
    $password = $_POST['password'];

    // --- !!! Basic Validation (ADD MORE IN REAL APP) !!! ---
    if (empty($username) || empty($password)) {
         header("Location: login.php?error=emptyfields");
         exit();
    }

    // --- Prepare SQL statement using procedural style placeholders ---
    $sql = "SELECT id, username, password_hash FROM users WHERE username = ?";
    $stmt = mysqli_prepare($conn, $sql);

    if ($stmt) {
        // Bind the username parameter
        mysqli_stmt_bind_param($stmt, "s", $username);

        // Execute the query
        mysqli_stmt_execute($stmt);

        // Get the result set from the prepared statement
        $result = mysqli_stmt_get_result($stmt);

        // Check if exactly one user was found
        if ($result && mysqli_num_rows($result) === 1) {
            // Fetch the user data as an associative array
            $user = mysqli_fetch_assoc($result);

            // Verify the submitted password against the stored hash
            if (password_verify($password, $user['password_hash'])) {
                // Password is correct! Login successful.
                $_SESSION['user_id'] = $user['id'];
                $_SESSION['username'] = $user['username'];

                // Redirect to the main page
                mysqli_stmt_close($stmt);
                mysqli_close($conn);
                header("Location: index.php?login=success");
                exit();
            } else {
                // Wrong password
                mysqli_stmt_close($stmt);
                mysqli_close($conn);
                header("Location: login.php?error=wrongpwd");
                exit();
            }
        } else {
            // User not found or multiple users found (shouldn't happen with UNIQUE constraint)
            mysqli_stmt_close($stmt);
            mysqli_close($conn);
            header("Location: login.php?error=nouser");
            exit();
        }
    } else {
        // SQL preparation failed
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