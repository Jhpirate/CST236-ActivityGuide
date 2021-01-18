<?php


class Tire
{
    private $tirePressure = 0;

    /**
     * Tire constructor.
     * @param $tirePressure
     */
    public function __construct($tirePressure)
    {
        $this->tirePressure = $tirePressure;
    }

    /**
     * @return mixed
     */
    public function getTirePressure()
    {
        return $this->tirePressure;
    }

    /**
     * @param mixed $tirePressure
     */
    public function setTirePressure($tirePressure)
    {
        $this->tirePressure = $tirePressure;
    }

}
