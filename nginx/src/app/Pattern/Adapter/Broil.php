<?php

namespace App\Pattern\Adapter;

class Broil implements CookMethodInterface
{
    private $otherBroil;

    public function __construct(OtherBroil $otherBroil)
    {
        $this->otherBroil = $otherBroil;
    }

    public function action(): string
    {
        return $this->otherBroil->description();
    }

    public function isDryBurning(): bool
    {
        return $this->otherBroil->isEmpty();
    }

    public function addIngredient(Ingredient $ingredient): void
    {
        $food = new Food($ingredient->getName());
        $this->otherBroil->addFood($food);
    }

    public function getIngredients(): array
    {
        $foods       = $this->otherBroil->getFoods();
        $ingredients = [];

        foreach ($foods as $food) {
            $ingredients[] = new Ingredient($food->getName());
        }

        return $ingredients;
    }
}
