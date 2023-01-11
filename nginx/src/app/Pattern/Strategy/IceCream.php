<?php

namespace App\Pattern\Strategy;

class IceCream
{
    protected $butterfatStrategy;

    public function __construct(ButterfatStrategy $butterfatStrategy)
    {
        $this->butterfatStrategy = $butterfatStrategy;
    }

    public function setButterfatStrategy($type): void
    {
        app()->bind(ButterfatStrategy::class, "App\Pattern\Strategy\\$type");
        $this->butterfatStrategy = app()->make(ButterfatStrategy::class);
    }

    public function getIceCreamButterfatContent(): string
    {
        return $this->butterfatStrategy->butterfatContentInfo();
    }
}
