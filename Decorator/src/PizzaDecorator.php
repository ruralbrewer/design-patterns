<?php
declare(strict_types=1);

namespace PizzaDecorator;

interface PizzaDecorator
{
    public function cost(): int;
    public function addTopping(PizzaDecorator $topping): PizzaDecorator;
}