<?php


namespace PizzaDecorator;


class Cheese extends AbstractPizzaDecorator
{
    public function __construct(int $cost)
    {
        $this->cost = $cost;
    }
}