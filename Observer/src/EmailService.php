<?php
declare(strict_types=1);

namespace EventObserver;

class EmailService implements Observer
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
        echo nl2br("Sending email event with id: {$event->id()->asString()}" . PHP_EOL);
    }
}