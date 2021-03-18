<?php


class DatabaseConnection
{
    private $server = "localhost";
    private $username = "root";
    private $password = "root";
    private $database = "cst236_activity_guide";

    public function getConnected() {
        $connection = new mysqli($this->server, $this->username, $this->password, $this->database);

        if($connection->connect_errno) {
            die("Connection to DB Failed! " . $connection->connect_error);
        }

        return $connection;
    }
}