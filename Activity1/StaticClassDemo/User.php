<?php


class User
{
    public $username;
    public $password;

    // Same for all instances
    public static $minimumPasswordLength = 5;

    public static function validatePasswordLength($p_pass) {
        $isValidPass = false;

        // We uses self to refer to the static variable
        if(strlen($p_pass) < self::$minimumPasswordLength){
            $isValidPass = false;
        } else {
            $isValidPass = true;
        }

        return $isValidPass;
    }
}