<?php

require_once "CheckingAccountDataService.php";
require_once "SavingsAccountDataService.php";
require_once "BankingBusinessService.php";

// ========================================
// PART 1 TESTING

/*
// Test Checking Account Data Access
$checkingAccess = new CheckingAccountDataService();
$currentChecking = $checkingAccess->getBalance();

echo "Current Checking: " . $currentChecking . "</br>";

// set initial balance to 2400
echo "setting checking to 2400: ";
$checkingAccess->setBalance(2400);
echo $checkingAccess->getBalance() . "<br>";

echo "Adding 400 to checking: ";
$checkingAccess->updateBalance(400);
echo $checkingAccess->getBalance();
echo "<br><br>";


// Test Savings
$savingsAccess = new SavingsAccountDataService();

$currentSavings = $savingsAccess->getBalance();
echo "Current Savings: " . $currentSavings . "</br>";

echo "setting saving to 30,000: ";
$savingsAccess->setBalance(30000);
echo $savingsAccess->getBalance() . "<br>";

echo "removing 23000: ";
$savingsAccess->updateBalance(-23000);
echo $savingsAccess->getBalance() . "<br>";
*/

// END PART 1
// ========================================


// ========================================
// START PART 2

/*
// Account variables
$checkingAccess = new CheckingAccountDataService();
$savingsAccess = new SavingsAccountDataService();

//set default balances for subsequent reruns
$checkingAccess->setBalance(2800);
$savingsAccess->setBalance(7500);

//print current account balances
echo "<br>=== Current Account Balances ===<br>";
echo "Checking: " . money_format("$%i", $checkingAccess->getBalance()) . "<br>";
echo "Savings: " . money_format("$%i", $savingsAccess->getBalance()) . "<br>";

// Move money from checking to savings ($100)
$checkingAccess->updateBalance(-100);
$savingsAccess->updateBalance(100);

//print current account balances
echo "<br>=== Current Account Balances ===<br>";
echo "Checking: " . money_format("$%i", $checkingAccess->getBalance()) . "<br>";
echo "Savings: " . money_format("$%i", $savingsAccess->getBalance()) . "<br>";
*/

// END PART 2
// ========================================


// ========================================
// START PART 3

$bankingAccess = new BankingBusinessService();

// print current account balances
echo "<br>=== Current Account Balances ===<br>";
echo "Checking: $" . number_format($bankingAccess->getCheckingBalance(), 2) . "<br>";
echo "Savings: $" . number_format($bankingAccess->getSavingsBalance(), 2) . "<br>";


// Move $100 from checking to savings
$bankingAccess->transferFromCheckingToSavings(100);

// print balance after transfer
echo "<br>=== Current Account Balances (After Transfer) ===<br>";
echo "Checking: $" . number_format($bankingAccess->getCheckingBalance(), 2) . "<br>";
echo "Savings: $" . number_format($bankingAccess->getSavingsBalance(), 2) . "<br>";

// END PART 3
// ========================================