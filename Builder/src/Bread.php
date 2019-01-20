<?php

namespace BurgerBuilder;

class Bread
{
    private $type;

    private const POPPY_SEED = 'poppy seed';
    private const CIABATTA = 'ciabatta';
    private const BRIOCHE = 'brioche';

    private function __construct(string $type)
    {
        $this->type = $type;
    }

    public static function poppySeed(): Bread
    {
        return new static(Bread::POPPY_SEED);
    }

    public static function ciabatta(): Bread
    {
        return new static(Bread::CIABATTA);
    }

    public static function brioche(): Bread
    {
        return new static(Bread::BRIOCHE);
    }

    public function asString(): string
    {
        return $this->type;
    }
}