<?php


namespace PizzaDecorator;


class Sauce extends AbstractPizzaDecorator
{
    public function __construct(int $cost)
    {
        $this->cost = $cost;
    }
}