<?php


namespace PizzaDecorator;


class MeatPizza extends PizzaRecipe
{
    public function __construct()
    {
        $baseIngredient = new Dough(500);

        $toppings = [
            new Sauce(100),
            new Cheese(250),
            new Pepperoni(200),
            new Sausage(200)
        ];

        parent::__construct($baseIngredient, $toppings);
    }
}