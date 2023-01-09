<?php

namespace App\Pattern\Strategy;

class Gelato implements ButterfatStrategy
{
    public function butterfatContentInfo(): string
    {
        return '乳脂肪含量低於8%';
    }
}
