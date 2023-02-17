<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Pattern\Decorator\Apple;
use App\Pattern\Decorator\IceCream;
use App\Pattern\Decorator\Strawberry;

class DecoratorController extends Controller
{
    public function iceCreamPrice(IceCream $iceCream)
    {
        /*
         * orig set
         *
         * "IceCream: +60"
         * "Add Apple: +10"
         * "Add Strawberry: +15"
         * "Add Strawberry: +15"
         */
        $fruitIceCream = new Strawberry(new Strawberry(new Apple($iceCream)));

        /*
         * cal workflow
         *
         * step 1. "Strawberry + Strawberry = 30"
         * step 2. "step 1 + Apple = 40"
         * step 3. "step 2 + IceCream = 100"
         */
        $totalPrice    = $fruitIceCream->calPrice();

        return response()
            ->json([
                'total_price' => $totalPrice,
            ])
            ->setStatusCode(200);
    }
}
