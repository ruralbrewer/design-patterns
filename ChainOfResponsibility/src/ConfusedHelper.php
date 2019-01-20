<?php


namespace HelpChain;


class ConfusedHelper extends AbstractHelper
{
    function canHelp(HelpRequest $request): bool
    {
        if (strtolower($request->asString()) === 'i am confused') {
            return true;
        }

        return false;
    }

    function doHelp(HelpRequest $request): Help
    {
        return new Help('To understand recursion, you must first understand recursion.');
    }
}