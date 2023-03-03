<?php

namespace App\Pattern\Singleton;

class Purchaser
{
    public $iceCreamShop;

    public function setIceCreamShop(IceCreamShop $iceCreamShop): void
    {
        $this->iceCreamShop = $iceCreamShop;
    }

    public function setIceCreamShopNoSing(IceCreamShopNoSing $iceCreamShop): void
    {
        $this->iceCreamShop = $iceCreamShop;
    }

    public function addCount(int $count): void
    {
        $origCount = $this->iceCreamShop->getCount();
        $origCount += $count;
        $this->iceCreamShop->setCount($origCount);
    }

    public function subCount(int $count): void
    {
        $origCount = $this->iceCreamShop->getCount();
        $origCount -= $count;
        $this->iceCreamShop->setCount($origCount);
    }
}
