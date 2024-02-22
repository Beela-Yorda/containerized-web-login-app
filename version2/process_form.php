<?php
session_start();

// Define a hardcoded list of valid usernames and passwords
$validCredentials = array(
    "kali-g2" => "password1"
);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve the submitted username and password
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Validate the submitted credentials
    if (isset($validCredentials[$username]) && $validCredentials[$username] === $password) {
        // If the credentials are valid, set the username in the session
        $_SESSION["username"] = $username;
        // Optionally, you can set a separate session variable for the password
        $_SESSION["password"] = $password;
        header("Location: welcome.php");
        exit;
    } else {
        // If the credentials are invalid, redirect to the error page
        header("Location: error.php");
        exit;
    }
} else {
    // If the form submission method is not POST, redirect back to the login page
    header("Location: index.html");
    exit;
}
?>
