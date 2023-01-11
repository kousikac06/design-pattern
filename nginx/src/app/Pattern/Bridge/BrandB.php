<?php

namespace App\Pattern\Bridge;

class BrandB extends IceCream
{
    public function butterfatContentInfo(): string
    {
        return $this->butterfatStrategy->butterfatContentInfo() . ' - barndB';
    }
}
