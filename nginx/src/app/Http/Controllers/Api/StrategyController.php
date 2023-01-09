<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Pattern\Strategy\IceCream;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class StrategyController extends Controller
{
    public function iceCreamInfo(Request $request, IceCream $iceCream)
    {
        $request->only(['type']);

        $validator = Validator::make(
            $request->all(),
            [
                'type' => ['required', Rule::in(['AmericaIceCream', 'SoftServedIceCream', 'Gelato'])],
            ]
        );

        if ($validator->fails()) {
            return response()
                ->json([
                    'data' => $validator->errors()->first(),
                ])
                ->setStatusCode(400);
        }

        $iceCream->initial($request->type);
        $iceCreamButterfatContent = $iceCream->getIceCreamButterfatContent();

        return response()
            ->json([
                'data' => $iceCreamButterfatContent,
            ])
            ->setStatusCode(200);
    }
}
