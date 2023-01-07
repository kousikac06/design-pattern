<?php

namespace App\Pattern\Adapter;

interface CookMethodInterface
{
    public function action(): string;

    public function isDryBurning(): bool;

    public function addIngredient(Ingredient $ingredient): void;

    public function getIngredients(): array;
}
