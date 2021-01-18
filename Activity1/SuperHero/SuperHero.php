<?php


class SuperHero
{
    private $name;
    private $health;
    private $isDead;

    /**
     * SuperHero constructor.
     * @param $name
     * @param $health
     */
    public function __construct($name, $health)
    {
        $this->name = $name;
        $this->health = $health;
        $this->isDead = false;
    }

    public function Attack()
    {
        $damageVal = rand(0, 11);
        SuperHero::DetermineHealth($damageVal);
    }

    public function DetermineHealth($damageVal)
    {
        // If health is <= 0 then health = 0 and isDead flag is set
        if ($this->health - $damageVal <= 0) {
            $this->health = 0;
            $this->isDead = true;
        } else {
            $this->health -= $damageVal;
        }
    }

    public function isDead()
    {
        return $this->isDead;
    }


}