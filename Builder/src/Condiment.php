<?php
declare(strict_types=1);

namespace BurgerBuilder;

class Condiment
{
    private $type;

    private const KETCHUP = 'ketchup';
    private const MUSTARD = 'mustard';
    private const MAYO = 'mayo';

    private function __construct(string $type)
    {
        $this->type = $type;
    }

    public static function ketchup(): Condiment
    {
        return new static(Condiment::KETCHUP);
    }

    public static function mustard(): Condiment
    {
        return new static(Condiment::MUSTARD);
    }

    public static function mayo(): Condiment
    {
        return new static(Condiment::MAYO);
    }

    public function asString(): string
    {
        return $this->type;
    }
}