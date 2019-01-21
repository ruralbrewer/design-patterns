<?php


namespace EventObserver;


interface Observer
{
    public function id(): ObserverId;

    public function update(Event $event);
}