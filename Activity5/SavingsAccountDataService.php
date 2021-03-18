<?php
require_once "DatabaseConnection.php";

class SavingsAccountDataService
{
    private $dataConnection;

    /**
     * CheckingAccountDataService constructor.
     */
    public function __construct($connection)
    {
        $this->dataConnection = $connection;
    }

    public function getBalance() {
        // get DB connection
//        $database = new DatabaseConnection();
//        $connection = $database->getConnected();

        //Run query to get the user balance
        $sql_statement = "SELECT account_balance from cst236_activity_guide.account_savings where ID=1";
        $result = $this->dataConnection->query($sql_statement);

        if($result->num_rows == 0) {
            // no rows found (rows == 0)
            return -1;
        } else {
            $row = $result->fetch_assoc();
            //$this->dataConnection->close();
            return $row["account_balance"];
        }

    }

    public function setBalance($newBalance) {
        // get DB connection
//        $database = new DatabaseConnection();
//        $connection = $database->getConnected();

        //Run query to get the user balance
        $sql_statement = "UPDATE cst236_activity_guide.account_savings SET account_balance=$newBalance WHERE ID=1";
        $result = $this->dataConnection->query($sql_statement);

        if($result > 0) {
            // any positive number is a positive result
            //$connection->close();
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
        $sql_statement = "UPDATE cst236_activity_guide.account_savings SET account_balance=$balance WHERE ID=1";
        $result = $this->dataConnection->query($sql_statement);

        if($result > 0) {
            // any positive number is a positive result
            //$connection->close();
            return 1;
        } else {
            return 0;
        }
    }
}