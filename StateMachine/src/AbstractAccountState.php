<?php
declare(strict_types=1);

namespace StateMachine;

class AbstractAccountState implements AccountState
{
    protected $loggedIn;

    /**
     * @throws IllegalStateException
     */
    public function logIn(): AccountState
    {
        throw new IllegalStateException('You are already logged in.' . PHP_EOL);
    }

    /**
     * @throws IllegalStateException
     */
    public function logOut(): AccountState
    {
        throw new IllegalStateException('You cannot currently log out.' . PHP_EOL);
    }

    /**
     * @throws IllegalStateException
     */
    public function goToOptions(): AccountState
    {
        throw new IllegalStateException('You are not logged in.' . PHP_EOL);
    }

    /**
     * @throws IllegalStateException
     */
    public function checkBalance(): AccountState
    {
        throw new IllegalStateException('You cannot currently check your balance.' . PHP_EOL);
    }

    /**
     * @throws IllegalStateException
     */
    public function makeDeposit(): AccountState
    {
        throw new IllegalStateException('You cannot currently make a deposit.' . PHP_EOL);
    }

    /**
     * @throws IllegalStateException
     */
    public function makeWithdrawal(): AccountState
    {
        throw new IllegalStateException('You cannot currently make a withdrawal.' . PHP_EOL);
    }

    /**
     * @throws IllegalStateException
     */
    public function makeTransfer(): AccountState
    {
        throw new IllegalStateException('You cannot currently make a transfer.' . PHP_EOL);
    }
}
