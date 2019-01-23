<?php
declare(strict_types=1);

namespace AbstractFactory;

class MarsFactory implements AbstractFactory
{

    public function createRobot(): Robot
    {
        return new MarsRobot();
    }

    public function createRocket(): Rocket
    {
        return new MarsRocket();
    }
}