<?php
require_once "Engine.php";
require_once "Tire.php";

class Car
{
    private $carEngine;
    private $isStarted;
    private $carTires;

    function __construct()
    {
        // New instance of Engine class
        $this->carEngine = new Engine();

        // 4 New instances of Tire class
        $this->carTires[] = new Tire(32);
        $this->carTires[] = new Tire(32);
        $this->carTires[] = new Tire(32);
        $this->carTires[] = new Tire(32);

    }

    // Method to start the car
    public function startCar(){

        // Pressure check before starting
        $pressureOk = true;

        // Check and make sure all tires are > 32 psi
        foreach ($this->carTires as $tire) {
          if($tire->getTirePressure() < 32){
              $pressureOk = false;
          }
        }

        // Pressure check passed, start the car
        if($pressureOk){
            $this->carEngine->startEngine();
            echo "Engine started!" . "<br>";
            $this->isStarted = true;
        }

    }

    public function stopCar(){
        $this->carEngine->stopEngine();
    }

    public function restartCar(){
        echo "Stopping...." . "<br>";
        $this->stopCar();

        echo "Starting...." . "<br>";
        $this->startCar();
    }

    public function accelerate(){
        for ($i=0; $i<=60; $i++) {
            echo "Going " . $i . "mph <br>";
        }
    }
}