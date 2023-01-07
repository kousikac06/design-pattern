<?php

namespace App\Pattern\Facade;

class Gas implements GasInterface
{
    public function gasOn(): string
    {
        return '打開瓦斯';
    }

    public function gasOff(): string
    {
        return '關閉瓦斯';
    }
}
