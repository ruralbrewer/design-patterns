<?php


namespace PizzaDecorator;


interface PizzaIngredient
{
    public function cost(): int;
    public function addTopping(PizzaIngredient $topping): PizzaIngredient;
}