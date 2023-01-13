<?php

namespace App\Pattern\AbstractFactory;

class AmericaIceCreamBuf implements ButterfatStrategy
{
    public function butterfatContentInfo(): string
    {
        return '乳脂肪含量大於8%';
    }
}
