<?php

namespace App\Pattern\Singleton;

class IceCreamShopNoSing
{
    private $count;

    public function __construct()
    {
        $this->count = 100;
    }

    public function setCount(int $count): void
    {
        $this->count = $count;
    }

    public function getCount(): int
    {
        return $this->count;
    }
}
