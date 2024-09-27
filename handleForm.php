<?php 

session_start();

// Check if submitBtn exists
if (isset($_POST['submitBtn'])) {

    // Check if a user is already logged in
    $checkLogin = $_SESSION['checkLogin'] ? $_SESSION['checkLogin'] : false;

    // If the user is already logged in
    if ($checkLogin) {
        $_SESSION['showLoginMessage'] = true; // Set the flag to show the message
    } else {
        // Get the first name from index.php
        $firstName = $_POST['firstName'];

        // Get the password from the input field
        $password = md5($_POST['password']);

        // Set the session variables
        $_SESSION['firstName'] = $firstName;
        $_SESSION['password'] = $password;

        // Mark user as logged in
        $_SESSION['checkLogin'] = true;

        // No need to show login message if login is successful
        $_SESSION['showLoginMessage'] = false;
    }

    // Go back to index.php
    header('Location: index.php');
    exit();
}
