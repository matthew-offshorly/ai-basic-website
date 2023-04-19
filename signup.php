<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];
    $confirm_password = $_POST["confirm_password"];
    if ($password != $confirm_password) {
        echo "Passwords do not match";
    } else {
        // TODO: Add code to create user account
        echo "User account created successfully";
    }
}

?>