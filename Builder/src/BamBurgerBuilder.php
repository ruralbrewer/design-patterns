<?php
declare(strict_types=1);

namespace BurgerBuilder;

class BamBurgerBuilder implements BurgerBuilder
{
    /**
     * @var BurgerType
     */
    private $type;

    /**
     * @var Temperature
     */
    private $cookTemperature;

    /**
     * @var Bread
     */
    private $bread;

    /**
     * @var Cheese
     */
    private $cheese;

    /**
     * @var array
     */
    private $toppings = [];

    /**
     * @var array
     */
    private  $condiments = [];

    public function __construct()
    {
        // Adds Recipe Defaults
        $this->type = BurgerType::beef();
        $this->cookTemperature = Temperature::medium();
        $this->bread = Bread::ciabatta();
        $this->cheese = Cheese::cheddar();
        $this->toppings = [
            Topping::lettuce(),
            Topping::tomato(),
            Topping::onion(),
            Topping::pickle()
        ];
        $this->condiments = [
            Condiment::mayo()
        ];

    }


    public function setType(BurgerType $burgerType): BurgerBuilder
    {
        $this->type = $burgerType;

        return $this;
    }

    public function setCookTemperature(Temperature $temperature): BurgerBuilder
    {
        $this->cookTemperature = $temperature;

        return $this;
    }

    public function setBread(Bread $bread): BurgerBuilder
    {
        $this->bread = $bread;

        return $this;
    }

    public function setCheese(Cheese $cheese): BurgerBuilder
    {
        $this->cheese = $cheese;

        return $this;
    }

    public function addTopping(Topping $topping): BurgerBuilder
    {
        $this->toppings[] = $topping;

        return $this;
    }

    public function addCondiment(Condiment $condiment): BurgerBuilder
    {
        $this->condiments[] = $condiment;

        return $this;
    }

    public function type(): BurgerType
    {
        return $this->type;
    }

    public function cookTemperature(): Temperature
    {
        return $this->cookTemperature;
    }

    public function bread(): Bread
    {
        return $this->bread;
    }

    public function cheese(): Cheese
    {
        return $this->cheese;
    }

    public function toppings(): ToppingCollection
    {
        return ToppingCollection::fromArray($this->toppings);
    }

    public function condiments(): CondimentCollection
    {
        return CondimentCollection::fromArray($this->condiments);
    }

    /**
     * @throws IncompleteBurgerException
     */
    public function build()
    {
        $this->assertHasType();
        $this->assertHasCookTemperature();
        $this->assertHasBread();
        $this->assertHasCheese();
        // Toppings and Condiments are optional

        return new Burger(
            $this->type(),
            $this->cookTemperature(),
            $this->bread(),
            $this->cheese(),
            $this->toppings(),
            $this->condiments()
        );
    }

    /**
     * @throws IncompleteBurgerException
     */
    private function assertHasType()
    {
        if ($this->type === null) {
            throw new IncompleteBurgerException("Burger type is missing.");
        }
    }

    /**
     * @throws IncompleteBurgerException
     */
    private function assertHasCookTemperature()
    {
        if ($this->type === null) {
            throw new IncompleteBurgerException("Cook temperature is missing.");
        }
    }

    /**
     * @throws IncompleteBurgerException
     */
    private function assertHasBread()
    {
        if ($this->type === null) {
            throw new IncompleteBurgerException("Bread is missing.");
        }
    }

    /**
     * @throws IncompleteBurgerException
     */
    private function assertHasCheese()
    {
        if ($this->type === null) {
            throw new IncompleteBurgerException("Cheese is missing.");
        }
    }

    public function title(): string
    {
        return "The Bam Burger";
    }
}