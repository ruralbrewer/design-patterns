<?php


namespace PizzaDecorator;


class PlainPizza extends PizzaRecipe
{
    public function __construct()
    {
        $baseIngredient = new Dough(500);

        $toppings = [
            new Sauce(100),
            new Cheese(250)
        ];

        parent::__construct($baseIngredient, $toppings);
    }
}