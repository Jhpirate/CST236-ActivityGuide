<?php

require_once "Database.php";
require_once "UserBusinessService.php";

// This class directly accesses our SQL database and queries it for results
// DataAccess Layer

class UserDataService
{
    // Private attributes
    //private $dataConnection;

    public function findByFirstName($pattern) {
        //New database connection instance
        $dataConnection = new Database();
        $dataLink = $dataConnection->getConnected();

        //Sql statement to query
        $sql_query = "SELECT * FROM cst236_activity_guide.users WHERE first_name LIKE '%$pattern%'";


        //Execute the query
        $result = $dataLink->query($sql_query);

        $index = 0;
        $users = array();

        while($row = $result->fetch_assoc()) {
            $users[$index] = array($row["ID"], $row["first_name"], $row["last_name"]);
            $index++;
        }

        return $users;
    }
}