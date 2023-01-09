<?php

namespace App\Pattern\Strategy;

class IceCream
{
    protected $butterfatStrategy;

    public function __construct(ButterfatStrategy $butterfatStrategy)
    {
        $this->butterfatStrategy = $butterfatStrategy;
    }

    public function getIceCreamButterfatContent(): string
    {
        return $this->butterfatStrategy->butterfatContentInfo();
    }
}
