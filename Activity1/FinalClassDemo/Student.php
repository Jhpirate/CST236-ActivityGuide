<?php
require_once "Human.php";

class Student extends Human
// Can also make class final to prevent it from being extended
{
    public function ageUp($years)
    {
        // Add 10 years to the students age
        $this->age += ($years * 2);
    }

    //public function ageDown() {}
}