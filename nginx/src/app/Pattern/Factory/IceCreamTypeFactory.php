<?php

namespace App\Pattern\Factory;

interface IceCreamTypeFactory
{
    public function getButterfatStrategy(string $type): ButterfatStrategy;
}
