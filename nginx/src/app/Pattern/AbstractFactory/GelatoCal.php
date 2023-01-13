<?php

namespace App\Pattern\AbstractFactory;

class GelatoCal implements CalorieStrategy
{
    public function calorieInfo(): int
    {
        return 120;
    }
}
