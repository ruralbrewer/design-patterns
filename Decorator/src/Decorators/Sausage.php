<?php
declare(strict_types=1);

namespace PizzaDecorator\Decorators;

class Sausage extends AbstractPizzaDecorator
{
    public function __construct()
    {
        parent::__construct(200);
    }
}