<?php

namespace App\Pattern\AbstractFactory;

class AmericaIceCream extends IceCreamTypeFactory
{
    public function getButterfatStrategy(): ButterfatStrategy
    {
        return app()->make(AmericaIceCreamBuf::class);
    }

    public function getCalorieStrategy(): CalorieStrategy
    {
        return app()->make(AmericaIceCreamCal::class);
    }
}
