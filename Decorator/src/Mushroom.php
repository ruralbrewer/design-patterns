<?php


namespace PizzaDecorator;


class Mushroom extends AbstractPizzaDecorator
{
    public function __construct(int $cost)
    {
        $this->cost = $cost;
    }
}