<?php
declare(strict_types=1);

namespace PizzaDecorator;

use PizzaDecorator\Decorators\Cheese;
use PizzaDecorator\Decorators\Dough;
use PizzaDecorator\Decorators\Mushroom;
use PizzaDecorator\Decorators\Pepperoni;
use PizzaDecorator\Decorators\Sauce;
use PizzaDecorator\Decorators\Sausage;

require 'vendor/autoload.php';

$toppingList = [
    new Sauce(),
    new Cheese(),
    new Pepperoni(),
    new Mushroom(),
    new Sausage()
];

$pizza = new Pizza(new Dough());

foreach ($toppingList as $topping) {
    $pizza->addIngredient($topping);
}

echo "The cost of the pizza is: $" . $pizza->cost() . "\n";


