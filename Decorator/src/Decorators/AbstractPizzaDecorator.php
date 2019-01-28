<?php
declare(strict_types=1);

namespace PizzaDecorator\Decorators;

use PizzaDecorator\PizzaDecorator;

abstract class AbstractPizzaDecorator implements PizzaDecorator
{
    /**
     * @var int
     */
    protected $costInCents;

    /**
     * @var PizzaDecorator
     */
    protected $decorator;


    protected function __construct(int $costInCents)
    {
        $this->costInCents = $costInCents;
    }

    public function addDecorator(PizzaDecorator $decorator): PizzaDecorator
    {
        $this->decorator = $decorator;
        $this->costInCents += $decorator->costInCents();

        return $this;
    }

    public function costInCents(): int
    {
        return $this->costInCents;
    }
}