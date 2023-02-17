<?php

namespace App\Pattern\Decorator;

abstract class Fruit implements TotalPrice
{
    protected $totalPrice;

    public function __construct(TotalPrice $totalPrice)
    {
        $this->totalPrice = $totalPrice;
    }

    public function calPrice() : int
    {
        return $this->totalPrice->calPrice();
    }
}
