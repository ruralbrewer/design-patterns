<?php
declare(strict_types=1);

namespace PizzaDecorator;

class Pizza
{
    /**
     * @var PizzaRecipe
     */
    private $recipe;

    /**
     * @var string
     */
    private $monetary_format;


    public function __construct(PizzaRecipe $recipe, string $monetary_format = 'en_US')
    {
        $this->recipe = $recipe;
        $this->monetary_format = $monetary_format;
    }

    public function cost(): string
    {
        setlocale(LC_MONETARY, $this->monetary_format);

        $combinedIngredients = $this->recipe->decorate();

        return money_format(' %i', $combinedIngredients->cost() / 100);
    }
}