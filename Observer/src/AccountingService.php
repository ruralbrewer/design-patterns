<?php


namespace EventObserver;


class AccountingService implements Observer
{
    /**
     * @var ObserverId
     */
    private $id;

    public function __construct(ObserverId $id)
    {
        $this->id = $id;
    }

    public function id(): ObserverId
    {
        return $this->id;
    }

    public function update(Event $event)
    {
        echo nl2br("Persisting data from event with id: {$event->id()->asString()}" . PHP_EOL);
    }
}