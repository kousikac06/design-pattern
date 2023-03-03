<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Pattern\Singleton\IceCreamShop;
use App\Pattern\Singleton\IceCreamShopNoSing;
use App\Pattern\Singleton\Purchaser;

class SingletonController extends Controller
{
    public function iceCreamCount()
    {
        $iceCreamShop1 = IceCreamShop::getInstance();
        $iceCreamShop2 = IceCreamShop::getInstance();

        $purchaser1 = new Purchaser();
        $purchaser2 = new Purchaser();

        $purchaser1->setIceCreamShop($iceCreamShop1);
        $purchaser2->setIceCreamShop($iceCreamShop2);

        $purchaser1->addCount(30);
        $purchaser2->subCount(50);

        $count = $purchaser1->iceCreamShop->getCount();

        return response()
            ->json([
                'count' => $count,
            ])
            ->setStatusCode(200);
    }

    public function iceCreamCountByProvider()
    {
        $iceCreamShop1 = app()->make(IceCreamShopNoSing::class);
        $iceCreamShop2 = app()->make(IceCreamShopNoSing::class);

        $purchaser1 = new Purchaser();
        $purchaser2 = new Purchaser();

        $purchaser1->setIceCreamShopNoSing($iceCreamShop1);
        $purchaser2->setIceCreamShopNoSing($iceCreamShop2);

        $purchaser1->addCount(30);
        $purchaser2->subCount(50);

        $count  = $purchaser1->iceCreamShop->getCount();

        return response()
            ->json([
                'count' => $count,
            ])
            ->setStatusCode(200);
    }
}
