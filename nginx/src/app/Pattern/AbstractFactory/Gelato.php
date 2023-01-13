<?php

namespace App\Pattern\AbstractFactory;

class Gelato extends IceCreamTypeFactory
{
    public function getButterfatStrategy(): ButterfatStrategy
    {
        return app()->make(GelatoBuf::class);
    }

    public function getCalorieStrategy(): CalorieStrategy
    {
        return app()->make(GelatoCal::class);
    }
}
