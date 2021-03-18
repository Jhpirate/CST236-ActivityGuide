<?php

require_once "DatabaseConnection.php";
require_once "CheckingAccountDataService.php";
require_once "SavingsAccountDataService.php";

class BankingBusinessService {

    public function getCheckingBalance()
    {
        // set up new connection in business service
        $database = new DatabaseConnection();
        $connection = $database->getConnected();

        // pass db connection from here to the data access
        $checkingAccess = new CheckingAccountDataService($connection);

        // get the balance
        $checkingBalance = $checkingAccess->getBalance();

        // close the connection
        $connection->close();

        // return the checking balance
        return $checkingBalance;
    }

    public function getSavingsBalance()
    {
        $database = new DatabaseConnection();
        $connection = $database->getConnected();

        $savingsAccess = new SavingsAccountDataService($connection);

        $savingsBalance = $savingsAccess->getBalance();

        $connection->close();

        return $savingsBalance;
    }

    // Main transaction function to transfer money from checking to savings
    public function transferFromCheckingToSavings($transfer_amount) {
        // main DB connection vars to be passed on DataAccess
        $database = new DatabaseConnection();
        $connection = $database->getConnected();

        // dont commit to the db until we know all transactions have completed successfully
        $connection->autocommit(false);

        // begin the data transactions??? (not explained)
        $connection->begin_transaction();

        // -----
        // BEGIN PROCESS OF TRANSFERRING from checking to savings
        $checkingBalance = $this->getCheckingBalance();

        //check if checking has enough to move out to savings
        if($checkingBalance >= $transfer_amount) {
            // new checking account access
            $checkingAccess = new CheckingAccountDataService($connection);

            // will return true or false if the query succeeded
            $checkingDeductionStatus = $checkingAccess->updateBalance(-$transfer_amount);

            // new savings account access
            $savingsAccess = new SavingsAccountDataService($connection);

            // will return true or false if adding to savings was successful
            $savingsAdditionStatus = $savingsAccess->updateBalance($transfer_amount);


            // check if both statements returned true
            // if so then we can commit the changes to the db
            if($checkingDeductionStatus && $savingsAdditionStatus) {
                //both statements complete successfully, commit
                $connection->commit();
            } else {
                // statements fail, rollback the changes
                $connection->rollback();
            }
        } else {
            echo "INSUFFICIENT FUNDS IN CHECKING TO TRANSFER TO SAVINGS!<br>";
        }
        //close connection at end of function
        $connection->close();
    }
}
