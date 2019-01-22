<?php
declare(strict_types=1);

namespace StateMachine;

require 'vendor/autoload.php';

$application = new Account(new LoggedOutState());

try {
    $application->logIn();
} catch (AccountException $e) {
    echo "*** " . nl2br($e->getMessage());
}
try {
    $application->logIn(); // This should fail
} catch (AccountException $e) {
    echo "*** " . nl2br($e->getMessage());
}
try {
    $application->goToOptions();
} catch (AccountException $e) {
    echo "*** " . nl2br($e->getMessage());
}
try {
    $application->makeDeposit();
} catch (AccountException $e) {
    echo "*** " . nl2br($e->getMessage());
}
try {
    $application->makeTransfer(); // This should fail
} catch (AccountException $e) {
    echo "*** " . nl2br($e->getMessage());
}
try {
    $application->goToOptions();
} catch (AccountException $e) {
    echo "*** " . nl2br($e->getMessage());
}
try {
    $application->makeTransfer();
} catch (AccountException $e) {
    echo "*** " . nl2br($e->getMessage());
}
try {
    $application->makeWithdrawal(); // This should fail
} catch (AccountException $e) {
    echo "*** " . nl2br($e->getMessage());
}
try {
    $application->goToOptions();
} catch (AccountException $e) {
    echo "*** " . nl2br($e->getMessage());
}
try {
    $application->makeWithdrawal();
} catch (AccountException $e) {
    echo "*** " . nl2br($e->getMessage());
}
try {
    $application->checkBalance(); // This should fail
} catch (AccountException $e) {
    echo "*** " . nl2br($e->getMessage());
}
try {
    $application->goToOptions();
} catch (AccountException $e) {
    echo "*** " . nl2br($e->getMessage());
}
try {
    $application->checkBalance();
} catch (AccountException $e) {
    echo "*** " . nl2br($e->getMessage());
}
try {
    $application->logOut(); // This should fail
} catch (AccountException $e) {
    echo "*** " . nl2br($e->getMessage());
}
try {
    $application->goToOptions();
} catch (AccountException $e) {
    echo "*** " . nl2br($e->getMessage());
}
try {
    $application->logOut();
} catch (AccountException $e) {
    echo "*** " . nl2br($e->getMessage());
}
try {
    $application->logOut(); // This should fail
} catch (AccountException $e) {
    echo "*** " . nl2br($e->getMessage());
}