<?php

// Import classes
require_once "Dog.php";
require_once "Cat.php";

// new dog & cat instance
$dog = new Dog("Callie", "Black");
$cat = new Cat("Lucky", "Grey");

//$animal = new Animal("Animal", "Orange"); //abstract

// Access methods
$dog->talk();
$dog->trick();

$cat->talk();
$cat->trick();
