<?php

namespace BurgerBuilder;

class BasicBurgerBuilder implements BurgerBuilder
{
    /**
     * @var BurgerType
     */
    private $type;
    /**
     * @var Temperature
     */
    private $cookTemperature;

    /**
     * @var Bread
     */
    private $bread;

    /**
     * @var Cheese
     */
    private $cheese;

    /**
     * @var array
     */
    private $toppings;

    /**
     * @var array
     */
    private  $condiments;


    public function setType(BurgerType $burgerType): BasicBurgerBuilder
    {
        $this->type = $burgerType;

        return $this;
    }

    public function setCookTemperature(Temperature $temperature): BasicBurgerBuilder
    {
        $this->cookTemperature = $temperature;

        return $this;
    }

    public function setBread(Bread $bread): BasicBurgerBuilder
    {
        $this->bread = $bread;

        return $this;
    }

    public function setCheese(Cheese $cheese): BasicBurgerBuilder
    {
        $this->cheese = $cheese;

        return $this;
    }

    public function addTopping(Topping $topping): BasicBurgerBuilder
    {
        $this->toppings[] = $topping;

        return $this;
    }

    public function addCondiment(Condiment $condiment): BasicBurgerBuilder
    {
        $this->condiments[] = $condiment;

        return $this;
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
    public function cookTemperature()
    {
        return $this->cookTemperature;
    }

    /**
     * @return Bread
     */
    public function bread()
    {
        return $this->bread;
    }

    /**
     * @return Cheese
     */
    public function cheese()
    {
        return $this->cheese;
    }

    /**
     * @return array
     */
    public function toppings()
    {
        return ToppingCollection::fromArray($this->toppings);
    }

    /**
     * @return array
     */
    public function condiments()
    {
        return CondimentCollection::fromArray($this->condiments);
    }
}