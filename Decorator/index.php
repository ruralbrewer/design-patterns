<?php

namespace PizzaDecorator;

require 'vendor/autoload.php';

$toppingList = [
    new Sauce(100),
    new Cheese(250),
    new Pepperoni(200),
    new Mushroom(150)
];

$recipe = new PizzaRecipe(new Dough(500), $toppingList);

//$recipe = new PlainPizza();

//$recipe = new MeatPizza();

$pizza = new Pizza($recipe);

echo "The cost of the pizza is: " . $pizza->cost() . "\n";


