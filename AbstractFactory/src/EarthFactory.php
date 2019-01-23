<?php
declare(strict_types=1);

namespace AbstractFactory;

class EarthFactory implements AbstractFactory
{

    public function createRobot(): Robot
    {
        return new EarthRobot();
    }

    public function createRocket(): Rocket
    {
        return new EarthRocket();
    }
}