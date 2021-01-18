<?php


class Engine
{
    private $isStarted;
    private $numOfCylinders;

    /**
     * Engine constructor.
     */
    public function __construct()
    {
        $this->isStarted = false;
        $this->numOfCylinders = 0;
    }

    // Start the engine
    public function startEngine(){
        $this->isStarted = true;
    }

    // Stop the engine
    public function  stopEngine(){
        $this->isStarted = false;
    }

    /*
     * Accessor and Mutators below
     */

    /**
     * @return false
     */
    public function getIsStarted()
    {
        return $this->isStarted;
    }

    /**
     * @param false $isStarted
     */
    public function setIsStarted($isStarted)
    {
        $this->isStarted = $isStarted;
    }

    /**
     * @return int
     */
    public function getNumOfCylinders()
    {
        return $this->numOfCylinders;
    }

    /**
     * @param int $numOfCylinders
     */
    public function setNumOfCylinders($numOfCylinders)
    {
        $this->numOfCylinders = $numOfCylinders;
    }

}
