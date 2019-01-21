<?php


namespace StateMachine;


use Exception;

class Account
{
    /**
     * @var AccountState
     */
    private $applicationState;

    public function __construct(AccountState $applicationState)
    {
        $this->applicationState = $applicationState;
    }

    public function logIn()
    {
        try {
            $this->applicationState = $this->applicationState->logIn();
        }
        catch(Exception $exception) {
            echo nl2br($exception->getMessage());
        }
    }

    public function logOut()
    {
        try {
            $this->applicationState = $this->applicationState->logOut();
        }
        catch(Exception $exception) {
            echo nl2br($exception->getMessage());
        }
    }

    public function goToOptions()
    {
        try {
            $this->applicationState = $this->applicationState->goToOptions();
        }
        catch(Exception $exception) {
            echo nl2br($exception->getMessage());
        }
    }

    public function checkBalance()
    {
        try {
            $this->applicationState = $this->applicationState->checkBalance();
        }
        catch(Exception $exception) {
            echo nl2br($exception->getMessage());
        }
    }

    public function makeDeposit()
    {
        try {
            $this->applicationState = $this->applicationState->makeDeposit();
        }
        catch(Exception $exception) {
            echo nl2br($exception->getMessage());
        }
    }

    public function makeWithdrawal()
    {
        try {
            $this->applicationState = $this->applicationState->makeWithdrawal();
        }
        catch(Exception $exception) {
            echo nl2br($exception->getMessage());
        }
    }

    public function makeTransfer()
    {
        try {
            $this->applicationState = $this->applicationState->makeTransfer();
        }
        catch(Exception $exception) {
            echo nl2br($exception->getMessage());
        }
    }
}