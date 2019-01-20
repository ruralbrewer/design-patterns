<?php


namespace PizzaDecorator;


class Pepperoni extends AbstractPizzaDecorator
{
    public function __construct(int $cost)
    {
        $this->cost = $cost;
    }
}