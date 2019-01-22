<?php
declare(strict_types=1);

namespace PizzaDecorator;

class Pepperoni extends AbstractPizzaIngredient
{
    public function __construct(int $cost)
    {
        $this->cost = $cost;
    }
}