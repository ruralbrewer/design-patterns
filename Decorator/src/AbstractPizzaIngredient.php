<?php
declare(strict_types=1);

namespace PizzaDecorator;

abstract class AbstractPizzaIngredient implements PizzaDecorator
{
    /**
     * @var int
     */
    protected $cost;

    /**
     * @var PizzaDecorator
     */
    protected $topping;

    public function addTopping(PizzaDecorator $topping): PizzaDecorator
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