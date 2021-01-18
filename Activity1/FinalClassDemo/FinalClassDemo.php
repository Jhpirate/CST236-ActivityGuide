<?php

//import classes
require_once "Human.php";
require_once "Student.php";

$human1= new Human();
$human2 = new Student();

$human1->ageUp(5);
$human2->ageUp(5);

echo "Age of Human 1: " . $human1->age . "<br>";
echo "Age of Human 2: " . $human2->age . "<br>";
