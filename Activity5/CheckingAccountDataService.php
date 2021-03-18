<?php
require_once "DatabaseConnection.php";

class CheckingAccountDataService
{

    private $dataConnection;

    /**
     * CheckingAccountDataService constructor.
     * @param $connection
     */
    public function __construct($connection)
    {
        $this->dataConnection = $connection;
    }


    public function getBalance() {
        // get DB
//        $database = new DatabaseConnection();
//        $ = $database->getConnected();

        //Run query to get the user balance
        $sql_statement = "SELECT current_balance from cst236_activity_guide.account_checking";
        $result = $this->dataConnection->query($sql_statement);

        if($result->num_rows == 0) {
            // no rows found (rows == 0)
            return -1;
        } else {
            $row = $result->fetch_assoc();
            //$this->dataConnection->close();
            return $row["current_balance"];
        }

    }

    public function setBalance($newBalance) {

        // get DB connection
//        $database = new DatabaseConnection();
//        $connection = $database->getConnected();

        //Run query to get the user balance
        $sql_statement = "UPDATE cst236_activity_guide.account_checking SET current_balance=$newBalance WHERE ID=1";
        $result = $this->dataConnection->query($sql_statement);

        if($result > 0) {
            // any positive number is a positive result
            //$this->dataConnection->close();
            return 1;
        } else {
            return 0;
        }
    }

    public function updateBalance($num_to_add) {

        // get DB connection
//        $database = new DatabaseConnection();
//        $connection = $database->getConnected();

        //get current balance
       $balance = $this->getBalance();
       $balance += $num_to_add;

        //Run query to get the user balance
        $sql_statement = "UPDATE cst236_activity_guide.account_checking SET current_balance=$balance WHERE ID=1";
        $result = $this->dataConnection->query($sql_statement);

        if($result > 0) {
            // any positive number is a positive result
            //$this->dataConnection->close();
            return 1;
        } else {
            return 0;
        }
    }
}