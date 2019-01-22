<?php
declare(strict_types=1);

namespace StateMachine;


class CheckingBalanceState extends AbstractAccountState
{
    public function goToOptions(): AccountState
    {
        $this->loggedIn = true;

        echo nl2br('Here are your options:' . PHP_EOL);
        echo nl2br('You can check your balance, make a deposit, make a withdrawal, or make a transfer.' . PHP_EOL);

        return new OptionsState();
    }
}