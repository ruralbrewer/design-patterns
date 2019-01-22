<?php
declare(strict_types=1);

namespace BurgerBuilder;

class CondimentCollection implements \IteratorAggregate
{
    /**
     * @var array
     */
    private $condiments;

    public static function fromArray($condiments)
    {
        $collection = new static();

        foreach($condiments as $condiment) {
            $collection->addCondiment($condiment);
        }

        return $collection;
    }

    public function addCondiment(Condiment $condiment)
    {
        $this->condiments[] = $condiment;
    }

    public function getIterator(): \Traversable
    {
        return new \ArrayIterator($this->condiments);
    }
}