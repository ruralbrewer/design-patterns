<?php
declare(strict_types=1);

namespace AbstractFactory;

class ControlCenter
{
    /**
     * @var AbstractFactory
     */
    private $factory;

    public function __construct(AbstractFactory $factory)
    {
        $this->factory = $factory;
    }

    private function createRocket(): Rocket
    {
        return $this->factory->createRocket();
    }

    private function createRobot(): Robot
    {
        return $this->factory->createRobot();
    }

    public function followProcedure()
    {
        $rocket = $this->createRocket();
        $rocket->fly();
        $rocket->land();
        $rocket->fireLaserBlaster();

        $robot = $this->createRobot();
        $robot->walk();
        $robot->talk();
        $robot->fireLaserFinger();
    }
}