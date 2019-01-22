<?php
declare(strict_types=1);

namespace HelpChain;

class LostHelper extends AbstractHelper
{
    function canHelp(HelpRequest $request): bool
    {
        if (strtolower($request->asString()) === 'i am lost') {
            return true;
        }

        return false;
    }

    function doHelp(HelpRequest $request): Help
    {
        return new Help('We are all here, because we are not all there.');
    }
}