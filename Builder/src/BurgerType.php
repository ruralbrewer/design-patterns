<?php

namespace BurgerBuilder;

class BurgerType
{
    private $type;

    private const BEEF = 'beef';
    private const VEGGIE = 'vegetarian';
    private const CHICKEN = 'chicken';

    private function __construct(string $type)
    {
        $this->type = $type;
    }

    public static function beef(): BurgerType
    {
        return new static(BurgerType::BEEF);
    }

    public static function veggie(): BurgerType
    {
        return new static(BurgerType::VEGGIE);
    }

    public static function chicken(): BurgerType
    {
        return new static(BurgerType::CHICKEN);
    }

    public function asString(): string
    {
        return $this->type;
    }
}