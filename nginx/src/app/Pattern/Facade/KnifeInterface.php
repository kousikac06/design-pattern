<?php

namespace App\Pattern\Facade;

interface KnifeInterface
{
    public function putIngredient(Ingredient $ingredient): void;

    public function peel(): Ingredient;

    public function cut(): Ingredient;

    public function wash(): string;
}
