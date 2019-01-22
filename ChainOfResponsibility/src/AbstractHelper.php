<?php
declare(strict_types=1);

namespace HelpChain;

abstract class AbstractHelper implements Helper
{
    /**
     * @var Helper
     */
    private $next;

    /**
     * @param HelpRequest $request
     * @return Help
     * @throws NoExistingHelpersException
     */
    final public function findHelp(HelpRequest $request): Help
    {
        if ($this->canHelp($request)) {
            return $this->doHelp($request);
        }

        if ($this->next !== null) {
            return $this->next->findHelp($request);
        }

        throw new NoExistingHelpersException("You are on your own.");
    }

    final public function setNext(Helper $helper)
    {
        $this->next = $helper;
    }

    abstract function canHelp(HelpRequest $request): bool;

    abstract function doHelp(HelpRequest $request): Help;
}