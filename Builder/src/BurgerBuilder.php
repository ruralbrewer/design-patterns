<?php
declare(strict_types=1);

namespace BurgerBuilder;

interface BurgerBuilder
{
    public function setType(BurgerType $burgerType): BurgerBuilder;
    public function setCookTemperature(Temperature $temperature): BurgerBuilder;
    public function setBread(Bread $bread): BurgerBuilder;
    public function setCheese(Cheese $cheese): BurgerBuilder;
    public function addTopping(Topping $topping): BurgerBuilder;
    public function addCondiment(Condiment $condiment): BurgerBuilder;

    public function title(): string;
    public function type(): BurgerType;
    public function cookTemperature(): Temperature;
    public function bread(): Bread;
    public function cheese(): Cheese;
    public function toppings(): ToppingCollection;
    public function condiments(): CondimentCollection;
}