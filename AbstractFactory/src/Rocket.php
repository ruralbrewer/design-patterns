<?php
declare(strict_types=1);

namespace AbstractFactory;

interface Rocket
{
    public function fly();
    public function land();
    public function fireLaserBlaster();
}