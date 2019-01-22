<?php
declare(strict_types=1);

namespace StateMachine;

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

    /**
     * @throws AccountException
     */
    public function logIn()
    {
        try {
            $this->applicationState = $this->applicationState->logIn();
        }
        catch(\Throwable $throwable) {
            throw new AccountException($throwable->getMessage());
        }
    }

    /**
     * @throws AccountException
     */
    public function logOut()
    {
        try {
            $this->applicationState = $this->applicationState->logOut();
        }
        catch(\Throwable $throwable) {
            throw new AccountException($throwable->getMessage());
        }
    }

    /**
     * @throws AccountException
     */
    public function goToOptions()
    {
        try {
            $this->applicationState = $this->applicationState->goToOptions();
        }
        catch(\Throwable $throwable) {
            throw new AccountException($throwable->getMessage());
        }
    }

    /**
     * @throws AccountException
     */
    public function checkBalance()
    {
        try {
            $this->applicationState = $this->applicationState->checkBalance();
        }
        catch(\Throwable $throwable) {
            throw new AccountException($throwable->getMessage());
        }
    }

    /**
     * @throws AccountException
     */
    public function makeDeposit()
    {
        try {
            $this->applicationState = $this->applicationState->makeDeposit();
        }
        catch(\Throwable $throwable) {
            throw new AccountException($throwable->getMessage());
        }
    }

    /**
     * @throws AccountException
     */
    public function makeWithdrawal()
    {
        try {
            $this->applicationState = $this->applicationState->makeWithdrawal();
        }
        catch(\Throwable $throwable) {
            throw new AccountException($throwable->getMessage());
        }
    }

    /**
     * @throws AccountException
     */
    public function makeTransfer()
    {
        try {
            $this->applicationState = $this->applicationState->makeTransfer();
        }
        catch(\Throwable $throwable) {
            throw new AccountException($throwable->getMessage());
        }
    }
}