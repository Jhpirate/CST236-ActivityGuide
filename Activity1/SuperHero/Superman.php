<?php
require_once "SuperHero.php";

class Superman extends SuperHero
{

    /**
     * Superman constructor.
     */
    public function __construct()
    {
        // Use parent constructor and initialize Superman with random health
        parent::__construct("Superman", rand(0,1001));
    }
}