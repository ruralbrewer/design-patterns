<?php
declare(strict_types=1);

namespace AbstractFactory;

class EarthRobot implements Robot
{
    public function walk()
    {
        echo "Moving Forward ... ";
    }

    public function talk()
    {
        echo "I am from Earth. ";
    }

    public function fireLaserFinger()
    {
        echo "zoooooiiiiiiinnnng ";
    }
}