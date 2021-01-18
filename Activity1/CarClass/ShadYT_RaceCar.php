<?php


class ShadYTRaceCar
{
    private $tires;
    private $hasEngine;
    private $tirePressure;
    private $isRunning;

    // Add new tires to the car
    public function addTire($numOfTires)
    {
        if ($numOfTires > 0 && $numOfTires <= 4) {
            if ($numOfTires > 4) {
                // More than 4 tires error
                echo "Car can only have a maximum of 4 tires" . "<br>";
            } else {
                // Valid amount of tires entered
                $this->tires = $numOfTires;
                echo "Installed " . $this->tires . " Tires" . "<br>";
                echo "Total tires installed = " . $this->tires . "<br>";
            }
        } else {
            echo "Tire count is invalid" . "<br>";
        }
    }

    public function addEngine() {

    }


}