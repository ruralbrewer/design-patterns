<?php

namespace BurgerBuilder;

require 'vendor/autoload.php';

$builder = new BasicBurgerBuilder();
$builder->setType(BurgerType::veggie())
    ->setCookTemperature(Temperature::medium())
    ->setCheese(Cheese::swiss())
    ->setBread(Bread::poppySeed())
    ->addCondiment(Condiment::ketchup())
    ->addCondiment(Condiment::mustard())
    ->addCondiment(Condiment::mayo())
    ->addTopping(Topping::lettuce())
    ->addTopping(Topping::tomato())
    ->addTopping(Topping::onion());

// $director = new BurgerDirector($builder);

$burger = new Burger($builder);

$burger->output();
