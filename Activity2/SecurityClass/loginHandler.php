<?php

//Import our security class (now using Autoloader)
//require_once "SecurityService.php";
require_once "Autoloader.php";
require_once "header.php";

// Get values from login form
$username = $_POST["username"];
$password = $_POST["password"];

//echo "Attempting login as: " . $username . "....";

// New SecurityService instance
$service = new SecurityService("admin", "pass");

// Bool to see if login was successful or not
$loggedIn = $service->authUser($username, $password);

if($loggedIn){
    //echo "Login Successful!";
    $_SESSION["principle"] = true;
    include "loginPassed.php";
} else {
    //echo "Login FAILED!";
    $_SESSION["principle"] = false;
    include "loginFailed.php";
}