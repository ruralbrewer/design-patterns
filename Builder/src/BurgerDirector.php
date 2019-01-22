<?php
declare(strict_types=1);

namespace BurgerBuilder;

class BurgerDirector
{
    /**
     * @var BurgerBuilder
     */
    private $burgerBuilder;

    public function __construct(BurgerBuilder $burgerBuilder)
    {
        $this->burgerBuilder = $burgerBuilder;
    }

    public function burger()
    {
        return $this->burgerBuilder->build();
    }
}