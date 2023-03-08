<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Pattern\Bridge\BrandA;
use App\Pattern\Strategy\IceCream;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class BridgeController extends Controller
{
    public function iceCreamInfoByBrand(Request $request)
    {
        $data = $request->only(['type', 'brand']);

        $validator = Validator::make(
            $data,
            [
                'type'  => ['required', Rule::in(['AmericaIceCream', 'SoftServedIceCream', 'Gelato'])],
                'brand' => ['required', Rule::in(['brandA', 'brandB'])],
            ]
        );

        if ($validator->fails()) {
            return response()
                ->json([
                    'data' => $validator->errors()->first(),
                ])
                ->setStatusCode(400);
        }

        app()->bind(IceCream::class, "App\Pattern\Bridge\\$request->brand");
        $brand = app()->make(IceCream::class);

        $brand->setButterfatStrategy($request['type']);
        $iceCreamButterfatContent = $brand->getIceCreamButterfatContent();

        return response()
            ->json([
                'data' => $iceCreamButterfatContent,
            ])
            ->setStatusCode(200);
    }
}
