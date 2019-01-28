<?php
declare(strict_types=1);

namespace PizzaDecorator\Decorators;

class Sauce extends AbstractPizzaDecorator
{
    public function __construct()
    {
        parent::__construct(100);
    }
}