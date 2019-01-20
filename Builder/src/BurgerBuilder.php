<?php

namespace BurgerBuilder;

interface BurgerBuilder
{
    public function setType(BurgerType $burgerType);
    public function setCookTemperature(Temperature $temperature);
    public function setBread(Bread $bread);
    public function setCheese(Cheese $cheese);
    public function addTopping(Topping $topping);
    public function addCondiment(Condiment $condiment);

    public function type();
    public function cookTemperature();
    public function bread();
    public function cheese();
    public function toppings();
    public function condiments();
}