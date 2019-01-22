<?php
declare(strict_types=1);

namespace EventObserver;

interface Event
{
    public function id(): EventId;
}