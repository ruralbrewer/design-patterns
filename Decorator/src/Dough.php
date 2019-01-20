<?php


namespace PizzaDecorator;


class Dough extends AbstractPizzaDecorator
{
    public function __construct(int $cost)
    {
        $this->cost = $cost;
    }
}