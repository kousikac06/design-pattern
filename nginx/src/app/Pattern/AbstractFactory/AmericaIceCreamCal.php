<?php

namespace App\Pattern\AbstractFactory;

class AmericaIceCreamCal implements CalorieStrategy
{
    public function calorieInfo(): int
    {
        return 180;
    }
}
