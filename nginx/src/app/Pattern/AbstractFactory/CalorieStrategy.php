<?php

namespace App\Pattern\AbstractFactory;

interface CalorieStrategy
{
    public function calorieInfo(): int;
}
