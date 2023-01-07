<?php

namespace App\Pattern\Facade;

class Knife implements KnifeInterface
{
    protected $ingredient;

    public function putIngredient(Ingredient $ingredient): void
    {
        $this->ingredient = $ingredient;
    }

    public function peel(): Ingredient
    {
        $this->ingredient->setName('削皮的' . $this->ingredient->getName());
        return $this->ingredient;
    }

    public function cut(): Ingredient
    {
        $this->ingredient->setName('切塊的' . $this->ingredient->getName());
        return $this->ingredient;
    }

    public function wash(): string
    {
        return '刀具已清洗乾淨';
    }
}
