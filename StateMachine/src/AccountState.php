<?php

namespace StateMachine;


interface AccountState
{
    public function logIn(): AccountState;
    public function logOut(): AccountState;
    public function goToOptions(): AccountState;
    public function checkBalance(): AccountState;
    public function makeDeposit(): AccountState;
    public function makeWithdrawal(): AccountState;
    public function makeTransfer(): AccountState;
}
