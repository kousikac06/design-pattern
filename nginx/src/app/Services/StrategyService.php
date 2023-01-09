<?php

namespace App\Services;

use App\Pattern\Strategy\ButterfatStrategy;

class  StrategyService
{
    protected $butterfatStrategy;

    public function __construct(ButterfatStrategy $butterfatStrategy)
    {
        $this->butterfatStrategy = $butterfatStrategy;
    }

    public function setInitialService($type)
    {
        app()->bind(ButterfatStrategy::class, "App\Pattern\Strategy\\$type");
        $this->butterfatStrategy = app()->make(ButterfatStrategy::class);
    }

    public function getIceCreamButterfatContent(): string
    {
        return $this->butterfatStrategy->butterfatContentInfo();
    }
}
