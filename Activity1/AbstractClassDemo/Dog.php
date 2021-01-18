<?php
require_once "Animal.php";

class Dog extends Animal
{

    // talk() must be implemented in Dog
    public function talk()
    {
        echo "Woof. Woof. Woof." . "<br>";;
    }

    public function trick()
    {
        echo "*Dog Jumps*" . "<br>";;
    }


}