<?php

namespace StateMachine;

require 'vendor/autoload.php';

$application = new Account(new LoggedOutState());

$application->logIn();
$application->logIn(); // This should fail
$application->goToOptions();
$application->makeDeposit();
$application->makeTransfer(); // This should fail
$application->goToOptions();
$application->makeTransfer();
$application->makeWithdrawal(); // This should fail
$application->goToOptions();
$application->makeWithdrawal();
$application->checkBalance(); // This should fail
$application->goToOptions();
$application->checkBalance();
$application->logOut(); // This should fail
$application->goToOptions();
$application->logOut();
$application->logOut(); // This should fail