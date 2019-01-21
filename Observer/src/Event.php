<?php


namespace EventObserver;


interface Event
{
    public function id(): EventId;
}