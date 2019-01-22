<?php
declare(strict_types=1);

namespace PizzaDecorator;

class PizzaRecipe
{
    /**
     * @var array
     */
    private $toppings;

    /**
     * @var PizzaDecorator
     */
    private $combinedIngredients;

    public function __construct(PizzaDecorator $baseIngredient, array $toppings)
    {
        $this->combinedIngredients = $baseIngredient;
        $this->toppings = $toppings;
    }

    public function decorate(): PizzaDecorator
    {
        $this->combineIngredients();

        return $this->combinedIngredients;
    }

    private function combineIngredients()
    {
        /** @var PizzaDecorator $topping */
        foreach ($this->toppings as $topping)
        {
            $this->combinedIngredients = $topping->addTopping($this->combinedIngredients);
        }
    }
}