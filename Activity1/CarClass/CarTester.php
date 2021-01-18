<?php

require_once "Car.php";

$car = new Car();

echo "--- Starting Car --- <br>";
$car->startCar();

echo "--- Restarting Car --- <br>";
$car->restartCar();

echo "--- Accelerating Car --- <br>";
$car->accelerate();