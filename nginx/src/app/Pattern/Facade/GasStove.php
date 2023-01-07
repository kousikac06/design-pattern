<?php

namespace App\Pattern\Facade;

class GasStove implements GasStoveInterface
{
    public function fireOn(): string
    {
        return '開火';
    }

    public function fireOff(): string
    {
        return '關火';
    }
}
