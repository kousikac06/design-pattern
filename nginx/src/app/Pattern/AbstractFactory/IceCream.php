<?php

namespace App\Pattern\AbstractFactory;

class IceCream
{
    protected $iceCreamTypeFactory;

    public function setIceCreamTypeFactory($type): void
    {
        app()->bind(IceCreamTypeFactory::class, "App\Pattern\AbstractFactory\\$type");
        $this->iceCreamTypeFactory = app()->make(IceCreamTypeFactory::class);
    }

    public function getButterfatContentInfo(): string
    {
        return $this->iceCreamTypeFactory->getButterfatStrategy()->butterfatContentInfo();
    }

    public function getCalorieInfo(): int
    {
        return $this->iceCreamTypeFactory->getCalorieStrategy()->calorieInfo();
    }
}
