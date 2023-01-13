<?php

namespace App\Pattern\AbstractFactory;

class SoftServedIceCreamCal implements CalorieStrategy
{
    public function calorieInfo(): int
    {
        return 150;
    }
}
