<?php
declare(strict_types=1);

namespace HelpChain;

interface Helper
{
    public function findHelp(HelpRequest $request): Help;

    public function setNext(Helper $router);
}