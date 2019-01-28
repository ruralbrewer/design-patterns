<?php
declare(strict_types=1);

namespace PizzaDecorator;

class Pizza
{
    /**
     * @var PizzaDecorator
     */
    private $combinedIngredients;

    public function __construct(PizzaDecorator $baseIngredient)
    {
        $this->combinedIngredients = $baseIngredient;
    }

    public function addIngredient(PizzaDecorator $topping)
    {
        $this->combinedIngredients->addDecorator($topping);
    }

    public function cost()
    {
        $price = round(($this->combinedIngredients->costInCents()/100), 2);

        return sprintf("%.2f", $price);
    }
}