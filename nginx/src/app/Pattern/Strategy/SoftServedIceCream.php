<?php

namespace App\Pattern\Strategy;

class SoftServedIceCream implements ButterfatStrategy
{
    public function butterfatContentInfo(): string
    {
        return '乳脂肪含量3～6%';
    }
}
