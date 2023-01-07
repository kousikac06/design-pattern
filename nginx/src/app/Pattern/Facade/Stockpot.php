<?php

namespace App\Pattern\Facade;

class Stockpot implements StockpotInterface
{
    protected $ingredients;

    public function addIngredient(Ingredient $ingredient): void
    {
        $this->ingredients[] = $ingredient;
    }

    public function getIngredients(): array
    {
        return $this->ingredients;
    }


    public function addWater(int $ml): string
    {
        return "加入 $ml 毫升的水";
    }

    public function scramble(int $second): string
    {
        return "攪拌 $second 秒";
    }

    public function dishOut(int $bowl): string
    {
        return "盛出 $bowl 碗";
    }

    public function wash(): string
    {
        return '鍋子已清洗乾淨';
    }
}
