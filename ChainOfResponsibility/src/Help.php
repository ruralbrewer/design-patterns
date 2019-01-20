<?php


namespace HelpChain;


class Help
{
    /**
     * @var string
     */
    private $solution;

    public function __construct(string $solution)
    {
        $this->solution = $solution;
    }

    public function asString()
    {
        return $this->solution;
    }
}