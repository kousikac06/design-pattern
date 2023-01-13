<?php

namespace App\Pattern\AbstractFactory;

abstract class IceCreamTypeFactory
{
    abstract function getButterfatStrategy(): ButterfatStrategy;

    abstract function getCalorieStrategy(): CalorieStrategy;
}
