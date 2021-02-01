<?php


class SecurityService
{
    //Attributes
    private $username;
    private $password;

    /**
     * SecurityService constructor.
     * @param $username
     * @param $password
     */
    public function __construct($username, $password)
    {
        $this->username = $username;
        $this->password = $password;
    }

    // return true or false
    // true = authed
    // false = no auth
    public function authUser($user, $pass){
        //validate user

        // If either are blank, return false
        if($user == "" || $pass == "") {
            return false;
        }

        // If both match, then user is valid
        if($user == $this->username && $pass == $this->password) {
            return true;
        } else {
            return false;
        }
    }


}