<?php


namespace PizzaDecorator;


abstract class AbstractPizzaDecorator implements PizzaIngredient
{
    /**
     * @var int
     */
    protected $cost;

    /**
     * @var PizzaIngredient
     */
    protected $topping;

    public function addTopping(PizzaIngredient $topping): PizzaIngredient
    {
        $this->topping = $topping;

        return $this;
    }

    public function cost(): int
    {
        return $this->cost + $this->toppingCost();
    }

    private function toppingCost(): int
    {
        if ((is_null($this->topping))) {
            return 0;
        }

        return $this->topping->cost();
    }
}