<?php

namespace App\Pattern\Facade;

interface StockpotInterface
{
    public function addIngredient(Ingredient $ingredient): void;

    public function getIngredients(): array;

    public function addWater(int $ml): string;

    public function scramble(int $second): string;

    public function dishOut(int $bowl): string;

    public function wash(): string;
}
