<?php

namespace App\Pattern\Factory;

class SoftServedIceCreamBuf implements ButterfatStrategy
{
    public function butterfatContentInfo(): string
    {
        return '乳脂肪含量3～6%';
    }
}
