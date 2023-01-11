<?php

namespace App\Pattern\Bridge;

class BrandA extends IceCream
{
    public function butterfatContentInfo(): string
    {
        return $this->butterfatStrategy->butterfatContentInfo() . ' - barndA';
    }
}
