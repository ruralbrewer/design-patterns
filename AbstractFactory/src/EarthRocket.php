<?php
declare(strict_types=1);

namespace AbstractFactory;

class EarthRocket implements Rocket
{

    public function fly()
    {
        echo "wizzzzzzzzzz! ";
    }

    public function land()
    {
        echo "Landing ... ";
    }

    public function fireLaserBlaster()
    {
        echo "Kablowwwwww! ";
    }
}