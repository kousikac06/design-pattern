<?php

namespace App\Pattern\Decorator;

class IceCream implements TotalPrice
{
    const UNIT_PRICE = 60;

    public $price;

    public function __construct()
    {
        $this->price = self::UNIT_PRICE;
        dump('IceCream: +' . $this->price);
    }

    public function calPrice(): int
    {
        return $this->price;
    }
}
