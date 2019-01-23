<?php
declare(strict_types=1);

namespace AbstractFactory;

class Environment
{
    /**
     * @var array
     */
    private $environment;


    public function __construct(array $environment)
    {
        $this->environment = $environment;
    }

    public function planet(): string
    {
        return (string) $this->environment['planet'];
    }

    /** ... and other environmental settings */
}