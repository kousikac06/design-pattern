<?php

namespace App\Pattern\Factory;

class ButterfatFactory implements IceCreamTypeFactory
{
    public function getButterfatStrategy(string $type): ButterfatStrategy
    {
        app()->bind(ButterfatStrategy::class, "App\Pattern\Factory\\$type");
        $butterfatStrategy = app()->make(ButterfatStrategy::class);

        return $butterfatStrategy;
    }
}
