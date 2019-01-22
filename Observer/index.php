<?php
declare(strict_types=1);

namespace EventObserver;

use Exception;

require 'vendor/autoload.php';

$eventSource = new EventSource();

try {
    $observer1 = new AccountingService(new ObserverId());
    $observer2 = new EmailService(new ObserverId());
    $observer3 = new PersistenceService(new ObserverId());

    $eventSource->registerObserver($observer1);
    $eventSource->registerObserver($observer2);
    $eventSource->registerObserver($observer3);

    $event = new AccountCreated(new EventId());
    $eventSource->registerEvent($event);
}
catch(Exception $exception) {
    echo $exception->getMessage();
}
