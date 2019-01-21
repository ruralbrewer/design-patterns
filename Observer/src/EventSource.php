<?php


namespace EventObserver;


class EventSource implements Observable
{
    /**
     * @var array Observer[]
     */
    private $observers = [];


    public function registerEvent(Event $event)
    {
        $this->notifyObservers($event);
    }

    public function registerObserver(Observer $observer)
    {
        $this->observers[$observer->id()->asString()] = $observer;
    }

    public function removeObserver(Observer $observer)
    {
        unset($this->observers[$observer->id()->asString()]);
    }

    public function notifyObservers(Event $event)
    {
        foreach($this->observers as $observer) {
            $observer->update($event);
        }
    }
}