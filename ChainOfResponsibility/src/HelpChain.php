<?php
declare(strict_types=1);

namespace HelpChain;

class HelpChain
{

    /**
     * @var Helper
     */
    private $first;

    /**
     * @var Helper
     */
    private $last;

    public function addHelper(Helper $helper)
    {
        if ($this->first === null) {
            $this->first = $helper;
        }

        if ($this->last !== null) {
            $this->last->setNext($helper);
        }

        $this->last = $helper;
    }

    /**
     * @param HelpRequest $request
     * @return Help
     * @throws NoExistingHelpersException
     */
    public function getHelp(HelpRequest $request): Help
    {
        if ($this->first === null) {
            throw new NoExistingHelpersException("You are on your own");
        }

        return $this->first->findHelp($request);
    }

}
