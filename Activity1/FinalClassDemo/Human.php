<?php


class Human
{
    public $name;
    public $age;

    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }


    public function ageUp($years) {
        $this->age += $years;
    }

    // This method cannot be overridden in any extending class
    final public function ageDown() {
        $this->age -= 1;
    }
}