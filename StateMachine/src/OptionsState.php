<?php
declare(strict_types=1);

namespace StateMachine;

class OptionsState extends AbstractAccountState
{
    public function checkBalance(): AccountState
    {
        $this->loggedIn = true;

        echo nl2br('Checking your balance!' . PHP_EOL);

        return new CheckingBalanceState();
    }

    public function makeDeposit(): AccountState
    {
        $this->loggedIn = true;

        echo nl2br('Making a deposit!' . PHP_EOL);

        return new MakingDepositState();
    }

    public function makeTransfer(): AccountState
    {
        $this->loggedIn = true;

        echo nl2br('Making a transfer!' . PHP_EOL);

        return new MakingTransferState();
    }

    public function makeWithdrawal(): AccountState
    {
        $this->loggedIn = true;

        echo nl2br('Making a withdrawal!' . PHP_EOL);

        return new MakingWithdrawalState();
    }

    public function logOut(): AccountState
    {
        $this->loggedIn = true;

        echo nl2br('Logging out! Goodbye' . PHP_EOL);

        return new LoggedOutState();
    }
}
