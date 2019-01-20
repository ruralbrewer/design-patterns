<?php


namespace HelpChain;


class HelpRequest
{
    /**
     * @var string
     */
    private $problem;

    public function __construct(string $problem)
    {
        $this->problem = $problem;
    }

    public function asString(): string
    {
        return $this->problem;
    }
}