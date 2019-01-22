<?php
declare(strict_types=1);

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

try {
    echo "<strong>{$builder->title()}</strong><br/>";
    $burger = $builder->build();
    $burger->output();
} catch (IncompleteBurgerException $exception) {
    echo "*** {$exception->getMessage()}";
}

echo "<br /><br />";

$builder = new BamBurgerBuilder();

try {
    echo "<strong>{$builder->title()}</strong><br/>";
    $burger = $builder->build();
    $burger->output();
} catch (IncompleteBurgerException $exception) {
    echo "*** {$exception->getMessage()}";
}

echo "<br /><br />";

$builder = new BasicBurgerBuilder();

try {
    echo "<strong>{$builder->title()}</strong><br/>";
    $burger = $builder->build();
    $burger->output();
} catch (IncompleteBurgerException $exception) {
    echo "*** {$exception->getMessage()}";
}