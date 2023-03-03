<?php

namespace App\Pattern\Singleton;

class IceCreamShop
{
    private $count;

    private static $instance;

    private function __construct(){}

    public static function getInstance(): IceCreamShop
    {
        if (!isset(self::$instance)) {
            self::$instance = new IceCreamShop();
            self::$instance->count = 100;
        }

        return self::$instance;
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
