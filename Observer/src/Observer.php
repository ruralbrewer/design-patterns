<?php
declare(strict_types=1);

namespace EventObserver;

interface Observer
{
    public function id(): ObserverId;

    public function update(Event $event);
}