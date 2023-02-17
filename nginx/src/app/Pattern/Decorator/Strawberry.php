<?php

namespace App\Pattern\Decorator;

class Strawberry extends Fruit
{
    const UNIT_PRICE = 15;
    public $price;

    public function __construct(TotalPrice $totalPrice)
    {
        parent::__construct($totalPrice);
        $this->price = self::UNIT_PRICE;
        dump('Add Strawberry: +' . $this->price);
    }

    public function calPrice() : int
    {
        $this->totalPrice->price += $this->price;
        return $this->totalPrice->calPrice();
    }
}
