<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Pattern\Adapter\Broil;
use App\Pattern\Adapter\Ingredient;
use App\Pattern\Adapter\Saute;

class AdapterController extends Controller
{
    public function saute(Saute $saute)
    {
        $ingredient = new Ingredient('青菜');
        $saute->addIngredient($ingredient);
        $action      = $saute->action();
        $result      = $saute->isDryBurning();
        $ingredients = $saute->getIngredients();

        $ingredientContent = [];

        foreach ($ingredients as $ingredient) {
            $ingredientContent[] = $ingredient->getName();
        }

        return [
            'action'         => $action,
            'ingredients'    => implode(',', $ingredientContent),
            'is_dry_burning' => $result,
        ];
    }

    public function broil(Broil $broil)
    {
        $ingredient = new Ingredient('豆腐');
        $broil->addIngredient($ingredient);
        $action      = $broil->action();
        $result      = $broil->isDryBurning();
        $ingredients = $broil->getIngredients();

        $ingredientContent = [];

        foreach ($ingredients as $ingredient) {
            $ingredientContent[] = $ingredient->getName();
        }

        return [
            'action'         => $action,
            'ingredients'    => implode(',', $ingredientContent),
            'is_dry_burning' => $result,
        ];
    }
}
