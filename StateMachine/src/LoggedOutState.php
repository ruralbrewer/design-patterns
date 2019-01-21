<?php

namespace StateMachine;

class LoggedOutState extends AbstractAccountState
{
    public function logIn(): AccountState
    {
        $this->loggedIn = true;

        echo nl2br('Logging in. Hello!' . PHP_EOL);

        return new LoggedInState();
    }
}
