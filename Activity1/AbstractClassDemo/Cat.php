<?php
require_once "Animal.php";

class Cat extends Animal
{
    // Child class of Animal
    // talk method implemented
    public function talk()
    {
        echo "Meow. Meow. Meow." . "<br>";
    }

    public function trick()
    {
        echo ".........." . "<br>";
    }

}