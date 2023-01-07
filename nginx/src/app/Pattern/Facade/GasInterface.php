<?php

namespace App\Pattern\Facade;

interface GasInterface
{
    public function gasOn(): string;

    public function gasOff(): string;
}
