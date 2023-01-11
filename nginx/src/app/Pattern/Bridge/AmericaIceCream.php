<?php

namespace App\Pattern\Bridge;

class AmericaIceCream implements ButterfatStrategy
{
    public function butterfatContentInfo(): string
    {
        return '乳脂肪含量大於8%';
    }
}
