<?php
declare(strict_types=1);

namespace AbstractFactory;

interface Robot
{
    public function walk();
    public function talk();
    public function fireLaserFinger();
}