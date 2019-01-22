<?php
declare(strict_types=1);

namespace BurgerBuilder;

class Cheese
{
    private $type;

    private const CHEDDAR = 'cheddar';
    private const SWISS = 'swiss';
    private const COLBY = 'colby';
    private const NONE = 'no';

    private function __construct(string $type)
    {
        $this->type = $type;
    }

    public static function cheddar(): Cheese
    {
        return new static(Cheese::CHEDDAR);
    }

    public static function swiss(): Cheese
    {
        return new static(Cheese::SWISS);
    }

    public static function colby(): Cheese
    {
        return new static(Cheese::COLBY);
    }

    public static function none(): Cheese
    {
        return new static(Cheese::NONE);
    }

    public function asString(): string
    {
        return $this->type;
    }
}