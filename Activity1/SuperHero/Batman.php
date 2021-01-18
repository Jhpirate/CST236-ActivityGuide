<?php
require_once "SuperHero.php";

class Batman extends SuperHero
{

    /**
     * Batman constructor.
     */
    public function __construct()
    {
        // Use parent constructor and initialize Batman with random health
        parent::__construct("Batman", rand(0,1001));
    }
}