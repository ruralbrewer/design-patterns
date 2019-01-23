<?php
declare(strict_types=1);

namespace AbstractFactory;

require "vendor/autoload.php";

$config = require "config.php";

$environment = new Environment($config);

$factory = null;

try {
    switch ($environment->planet()) {
        case PlanetEnum::EARTH:
            $factory = new EarthFactory();
            break;
        case PlanetEnum::MARS:
            $factory = new MarsFactory();
            break;
        default:
            throw new InvalidPlanetException(
                sprintf('%s is not a planet', $environment->planet())
            );
    }
} catch (InvalidPlanetException $exception) {
    echo $exception->getMessage();
    exit;
}

$controlCenter = new ControlCenter($factory);

$controlCenter->followProcedure();


