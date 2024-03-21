<?php
session_start();

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Simulate user authentication (replace with actual authentication logic)
    $username = $_POST["raffaelganteng"];
    $password = $_POST["raffaelganteng123"];

    // Check if username and password are correct (example only)
    if ($username === "admin" && $password === "password") {
        // Authentication successful, redirect to dashboard or home page
        $_SESSION["username"] = $username;
        header("Location: dashboard.php");
        exit;
    } else {
        // Authentication failed, redirect back to login page with error message
        $error_message = "Invalid username or password";
        header("Location: login.php?error=" . urlencode($error_message));
        exit;
    }
}
?>
