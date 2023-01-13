<?php

namespace App\Pattern\AbstractFactory;

class GelatoBuf implements ButterfatStrategy
{
    public function butterfatContentInfo(): string
    {
        return '乳脂肪含量低於8%';
    }
}
