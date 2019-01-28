<?php
declare(strict_types=1);

namespace PizzaDecorator\Decorators;

class Cheese extends AbstractPizzaDecorator
{
    public function __construct()
    {
        parent::__construct(250);
    }
}