<?php


namespace HelpChain;


class TiredHelper extends AbstractHelper
{
    function canHelp(HelpRequest $request): bool
    {
        if (strtolower($request->asString()) === 'i am tired') {
            return true;
        }

        return false;
    }

    function doHelp(HelpRequest $request): Help
    {
        return new Help('A wise man knows that he who runs behind a bus gets exhausted.');
    }
}