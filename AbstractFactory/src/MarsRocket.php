<?php
declare(strict_types=1);

namespace AbstractFactory;

class MarsRocket implements Rocket
{
    public function fly()
    {
        echo "Whoosh! ";
    }

    public function land()
    {
        echo "Landing ... ";
    }

    public function fireLaserBlaster()
    {
        echo "Blam!!! ";
    }
}