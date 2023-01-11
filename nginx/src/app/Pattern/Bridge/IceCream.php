<?php

namespace App\Pattern\Bridge;

abstract class IceCream
{
    protected $butterfatStrategy;

    public function setButterfatStrategy($type): void
    {
        app()->bind(ButterfatStrategy::class, "App\Pattern\Bridge\\$type");
        $this->butterfatStrategy = app()->make(ButterfatStrategy::class);
    }

    abstract function butterfatContentInfo(): string;
}
