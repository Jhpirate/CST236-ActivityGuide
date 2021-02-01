<?php


class Database
{
    //Private class attributes
    private $host = "localhost";
    private $user = "root";
    private $pass = "root";
    private $db_name = "";
    private $db_port = 3306;

    // Create a new connection
    public function getConnected() {
        $mysqli_conn = new mysqli($this->host, $this->user, $this->pass, $this->db_name, $this->db_port);

        // If error, echo error number and exit
        if($mysqli_conn->connect_errno) {
            echo "DB Connect Error!" . $mysqli_conn->connect_errno;
            exit();
        }

        //return db connection
        return $mysqli_conn;
    }
}