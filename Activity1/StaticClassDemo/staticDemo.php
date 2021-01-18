<?php
// Import class
require_once "User.php";

// Sample local password vars
$password1 = "pass123";
$password2 = "123";

// No need to create instance if we use a static method
if(User::validatePasswordLength($password2)) {
    echo "Password is valid and greater than 5 characters" . "<br>";
} else {
    echo "Password invalid. Less than 5 characters" . "<br>";
}
