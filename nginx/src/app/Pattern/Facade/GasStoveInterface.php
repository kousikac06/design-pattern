<?php

namespace App\Pattern\Facade;

interface GasStoveInterface
{
    public function fireOn(): string;

    public function fireOff(): string;
}
