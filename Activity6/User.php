<?php

// Implementing JsonSerializable may not be necessary?
class User implements JsonSerializable
{
    // Class attributes
    private $ID;
    private $firstName;
    private $lastName;

    /**
     * User constructor.
     * @param $ID
     * @param $firstName
     * @param $lastName
     */
    public function __construct($ID, $firstName, $lastName)
    {
        $this->ID = $ID;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
    }

    /**
     * @return mixed
     */
    public function getID()
    {
        return $this->ID;
    }

    /**
     * @param mixed $ID
     */
    public function setID($ID)
    {
        $this->ID = $ID;
    }

    /**
     * @return mixed
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * @param mixed $firstName
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
    }

    /**
     * @return mixed
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * @param mixed $lastName
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
    }

    public function jsonSerialize()
    {
        //Implement jsonSerialize() that returns the value from a call to get_object_vars($this).
        return get_object_vars($this);
    }
}