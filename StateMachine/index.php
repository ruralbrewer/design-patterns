<?php

namespace StateMachine;

require 'vendor/autoload.php';

$application = new Account(new LoggedOutState());

$application->logIn();
$application->logIn();
$application->goToOptions();
$application->makeDeposit();
$application->makeTransfer();
$application->goToOptions();
$application->makeTransfer();
$application->makeWithdrawal();
$application->goToOptions();
$application->makeWithdrawal();
$application->checkBalance();
$application->goToOptions();
$application->checkBalance();
$application->logOut();
$application->goToOptions();
$application->logOut();
$application->logOut();