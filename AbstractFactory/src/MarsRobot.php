<?php
declare(strict_types=1);

namespace AbstractFactory;

class MarsRobot implements Robot
{

    public function walk()
    {
        echo "Moving forward ... ";
    }

    public function talk()
    {
        echo "I am from Mars ";
    }

    public function fireLaserFinger()
    {
        echo "fluuuuuuuuunnnnngaaaaaaa ";
    }
}