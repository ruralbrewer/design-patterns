<?php


namespace EventObserver;


class AccountCreated implements Event
{
    /**
     * @var EventId
     */
    private $id;

    public function __construct(EventId $id)
    {
        $this->id = $id;
    }

    public function id(): EventId
    {
        return $this->id;
    }
}