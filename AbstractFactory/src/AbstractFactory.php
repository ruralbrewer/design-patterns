<?php
declare(strict_types=1);

namespace AbstractFactory;

interface AbstractFactory
{
    public function createRobot(): Robot;
    public function createRocket(): Rocket;
}