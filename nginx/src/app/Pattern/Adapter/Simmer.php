<?php

namespace App\Pattern\Adapter;

class Simmer implements CookMethodInterface
{
    protected $ingredients;

    public function action(): string
    {
        return '開始燉';
    }

    public function isDryBurning(): bool
    {
        return count($this->ingredients) === 0;
    }

    public function addIngredient(Ingredient $ingredient): void
    {
        $this->ingredients[] = $ingredient;
    }

    public function getIngredients(): array
    {
        return $this->ingredients;
    }
}
