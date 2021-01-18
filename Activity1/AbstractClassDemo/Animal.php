<?php


abstract class Animal
{
    public $name;
    public $color;

    // Arg-based constructor
    public function __construct($name, $color) {
        $this->name = $name;
        $this->color = $color;
    }

    // No need for a body because this method will be overridden in child classes
    // Basically a blueprint for classes that inherit it
    public abstract function talk();

    public abstract function trick();
}