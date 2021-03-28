<?php

require_once "User.php"; // local User class

// Create 5 users and add them to an array
$IDNum = 0;

$user1 = new User(++$IDNum, "Homer", "Simpson");
$user2 = new User(++$IDNum, "James", "Farnsworth");
$user3 = new User(++$IDNum, "Tom", "Winston");
$user4 = new User(++$IDNum, "Julia", "True");
$user5 = new User(++$IDNum, "Vanessa", "Born");

$userArray = array($user1, $user2, $user3, $user4, $user5);

// Serialize the array of User to JSON using json_encode()
// JSON_PRETTY_PRINT used to tidy up the output
$userJSON = json_encode($userArray, JSON_PRETTY_PRINT);

//set the page header content type to json and echo the json
header('Content-Type: application/json');
echo $userJSON;