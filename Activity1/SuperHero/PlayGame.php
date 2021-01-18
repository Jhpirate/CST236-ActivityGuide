<?php

// Import Batman & Superman classes
require_once "Batman.php";
require_once "Superman.php";

// New batman & superman instances
$batman = new Batman();
$superman = new Superman();
$iterationVar = 0;

// Play game while characters are not dead
while (!$batman->isDead() && !$superman->isDead()) {
    echo "Round #" . strval((int)$iterationVar+1) . "<br>";
    $superman->Attack();


    $batman->Attack();

    if($superman->isDead()){
        echo "<b>Batman Won</b>";
    } elseif ($batman->isDead()){
        echo "<b>Superman Won</b>";
    }

    $iterationVar++;
}
