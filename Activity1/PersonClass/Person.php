<?php


class Person
{
    // Attributes
    private $fullName;
    private $username;
    private $password;

    /**
     * Human constructor.
     * @param $fullName
     * @param $username
     * @param $password
     */
    public function __construct($fullName, $username, $password)
    {
        echo "Hi there, " . $fullName . "<br>";

        $this->fullName = $fullName;
        $this->username = $username;
        $this->password = $password;
    }

    // Methods
    public function walk(){
        echo "Currently walking..." . "<br>";
    }

    public function greeting_en(){
        echo "Hello there, " . $this->fullName . "<br>";
    }

    public function greeting_sp(){
        echo "Hola, " . $this->fullName . "<br>";
    }

    public function greeting_funny(){
        echo "Howdy " . $this->fullName . "<br>";
    }

    public function login($user, $pass) {
        if ($user == $this->username && $pass == $this->password){
            echo "Login successful" . "<br>";
        } else {
            echo "Login Failed!" . "<br>";
        }
    }
}