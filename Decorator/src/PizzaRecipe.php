<?php


namespace PizzaDecorator;


class PizzaRecipe
{
    /**
     * @var array
     */
    private $toppings;

    /**
     * @var PizzaIngredient
     */
    private $combinedIngredients;

    public function __construct(PizzaIngredient $baseIngredient, array $toppings)
    {
        $this->combinedIngredients = $baseIngredient;
        $this->toppings = $toppings;
    }

    public function decorate(): PizzaIngredient
    {
        $this->combineIngredients();

        return $this->combinedIngredients;
    }

    private function combineIngredients()
    {
        /** @var PizzaIngredient $topping */
        foreach ($this->toppings as $topping)
        {
            $this->combinedIngredients = $topping->addTopping($this->combinedIngredients);
        }
    }
}