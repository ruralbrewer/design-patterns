<?php


namespace HelpChain;


interface Helper
{
    public function findHelp(HelpRequest $request): Help;

    public function setNext(Helper $router);
}