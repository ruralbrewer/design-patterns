<?php

namespace BurgerBuilder;

class Burger
{
    /**
     * @var BurgerType
     */
    private $type;

    /**
     * @var Temperature
     */
    private $temperature;

    /**
     * @var Bread
     */
    private $bread;

    /**
     * @var Cheese
     */
    private $cheese;

    /**
     * @var ToppingCollection
     */
    private $toppings;
    /**
     * @var CondimentCollection
     */
    private $condiments;


    public function __construct(BurgerBuilder $builder)
    {
        $this->type = $builder->type();
        $this->temperature = $builder->cookTemperature();
        $this->bread = $builder->bread();
        $this->cheese = $builder->cheese();
        $this->toppings = $builder->toppings();
        $this->condiments = $builder->condiments();
    }

    /**
     * @return BurgerType
     */
    public function type()
    {
        return $this->type;
    }

    /**
     * @return Temperature
     */
    public function temperature()
    {
        return $this->temperature;
    }

    /**
     * @return Bread
     */
    public function bread()
    {
        return $this->bread;
    }

    /**
     * @return CondimentCollection
     */
    public function condiments()
    {
        return $this->condiments;
    }

    /**
     * @return ToppingCollection
     */
    public function toppings()
    {
        return $this->toppings;
    }

    public function output()
    {
        $toppingsList = '';
        foreach ($this->toppings->getIterator() as $topping) {
            /** @var $topping Topping */
            $toppingsList .= ' ' . $topping->asString() . ',';
        }
        $condimentsList = '';
        foreach ($this->condiments->getIterator() as $condiment) {
            /** @var $condiment Condiment */
            $condimentsList .= ' ' . $condiment->asString() . ',';
        }
        echo "A {$this->type->asString()} burger cooked {$this->temperature->asString()} " .
            "on a {$this->bread->asString()} bun, " .
            "with {$this->cheese->asString()} cheese, $toppingsList " .
            "$condimentsList and a smile.";
    }
}