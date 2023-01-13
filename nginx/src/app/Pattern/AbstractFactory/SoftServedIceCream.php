<?php

namespace App\Pattern\AbstractFactory;

class SoftServedIceCream extends IceCreamTypeFactory
{
    public function getButterfatStrategy(): ButterfatStrategy
    {
        return app()->make(SoftServedIceCreamBuf::class);
    }

    public function getCalorieStrategy(): CalorieStrategy
    {
        return app()->make(SoftServedIceCreamCal::class);
    }
}
