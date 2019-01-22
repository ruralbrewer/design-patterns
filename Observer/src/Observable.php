<?php
declare(strict_types=1);

namespace EventObserver;

interface Observable
{
    public function registerObserver(Observer $observer);
    public function removeObserver(Observer $observer);
    public function notifyObservers(Event $event);
}