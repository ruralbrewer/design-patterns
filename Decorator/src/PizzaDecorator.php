<?php
declare(strict_types=1);

namespace PizzaDecorator;

interface PizzaDecorator
{
    public function costInCents(): int;
    public function addDecorator(PizzaDecorator $decorator): PizzaDecorator;
}