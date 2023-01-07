<?php

namespace App\Pattern\Facade;

class SoupFacade
{
    protected $gas;
    protected $gasStove;
    protected $knife;
    protected $stockpot;

    public function __construct(
        GasInterface $gas,
        GasStoveInterface $gasStove,
        KnifeInterface $knife,
        StockpotInterface $stockpot
    ) {
        $this->gas      = $gas;
        $this->gasStove = $gasStove;
        $this->knife    = $knife;
        $this->stockpot = $stockpot;
    }

    public function cookSoup(): array
    {
        $descriptions = [];

        $this->knife->putIngredient(new Ingredient('白蘿菠'));
        $this->knife->peel();
        $whiteRadish = $this->knife->cut();

        $this->knife->putIngredient(new Ingredient('豆腐'));
        $tofu = $this->knife->cut();

        $this->knife->putIngredient(new Ingredient('鮭魚'));
        $salmon = $this->knife->cut();

        $miso = new Ingredient('味噌');

        $this->stockpot->addIngredient($whiteRadish);
        $this->stockpot->addIngredient($tofu);
        $this->stockpot->addIngredient($salmon);
        $this->stockpot->addIngredient($miso);

        $ingredients = $this->stockpot->getIngredients();

        foreach ($ingredients as $ingredient) {
            $descriptions[] = '放入 (' . $ingredient->getName() . ') 進鍋中';
        }

        $descriptions[] = $this->stockpot->addWater(500);
        $descriptions[] = $this->gas->gasOn();
        $descriptions[] = $this->gasStove->fireOn();
        $descriptions[] = $this->stockpot->scramble(10);
        $descriptions[] = $this->stockpot->dishOut(5);

        return $descriptions;
    }

    public function afterCookClean(): array
    {
        $description = [];

        $description[] = $this->gasStove->fireOff();
        $description[] = $this->gas->gasOff();
        $description[] = $this->knife->wash();
        $description[] = $this->stockpot->wash();

        return $description;
    }
}
