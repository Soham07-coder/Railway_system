<?php
    session_start(); // Start the session if it hasn't been started already

// Check if the log out button is clicked
if (isset($_POST['logout'])) {
    // Clear all session variables
    $_SESSION = array();

    // Destroy the session
    session_destroy();

    // Redirect to the login page or any other desired page
    header("Location: index.php");
    exit();
}