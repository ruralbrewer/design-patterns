<?php


namespace PizzaDecorator;


class Sausage extends AbstractPizzaDecorator
{
    public function __construct(int $cost)
    {
        $this->cost = $cost;
    }
}