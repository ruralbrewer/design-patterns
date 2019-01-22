<?php
declare(strict_types=1);

namespace BurgerBuilder;

class Temperature
{
    private $type;

    private const RARE = 'rare';
    private const MEDIUM_RARE = 'medium rare';
    private const MEDIUM = 'medium';
    private const MEDIUM_WELL = 'medium well';
    private const WELL_DONE = 'well done';

    private function __construct(string $type)
    {
        $this->type = $type;
    }

    public static function rare(): Temperature
    {
        return new static(Temperature::RARE);
    }

    public static function mediumRare(): Temperature
    {
        return new static(Temperature::MEDIUM_RARE);
    }

    public static function medium(): Temperature
    {
        return new static(Temperature::MEDIUM);
    }

    public static function mediumWell(): Temperature
    {
        return new static(Temperature::MEDIUM_WELL);
    }

    public static function wellDone(): Temperature
    {
        return new static(Temperature::WELL_DONE);
    }

    public function asString(): string
    {
        return $this->type;
    }
}