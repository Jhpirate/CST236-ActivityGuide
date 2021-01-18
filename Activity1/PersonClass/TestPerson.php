<?php

// Import our class file
require_once "Person.php";

// New person instance
$person = new Human("Jared H", "user123", "pass123");

// Test class methods
$person->login("user", "pass"); // Wrong login
$person->login("user123", "pass123"); // Correct login

$person->walk();

$person->greeting_en();

$person->greeting_sp();
