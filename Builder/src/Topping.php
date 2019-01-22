<?php
declare(strict_types=1);

namespace BurgerBuilder;

class Topping
{
    private $type;

    private const LETTUCE = 'lettuce';
    private const TOMATO = 'tomato';
    private const ONION = 'onion';
    private const PICKLE = 'pickle';

    private function __construct(string $type)
    {
        $this->type = $type;
    }

    public static function lettuce(): Topping
    {
        return new static(Topping::LETTUCE);
    }

    public static function tomato(): Topping
    {
        return new static(Topping::TOMATO);
    }

    public static function onion(): Topping
    {
        return new static(Topping::ONION);
    }

    public static function pickle(): Topping
    {
        return new static(Topping::PICKLE);
    }

    public function asString(): string
    {
        return $this->type;
    }
}