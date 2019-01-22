<?php
declare(strict_types=1);

namespace BurgerBuilder;

class ToppingCollection implements \IteratorAggregate
{
    /**
     * @var array
     */
    private $toppings;

    public static function fromArray($toppings)
    {
        $collection = new static();

        foreach($toppings as $topping) {
            $collection->addTopping($topping);
        }

        return $collection;
    }

    public function addTopping(Topping $topping)
    {
        $this->toppings[] = $topping;
    }

    public function getIterator(): \Traversable
    {
        return new \ArrayIterator($this->toppings);
    }
}