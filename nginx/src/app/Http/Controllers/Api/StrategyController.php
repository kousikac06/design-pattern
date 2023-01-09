<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Services\StrategyService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class StrategyController extends Controller
{
    protected $strategyService;

    public function iceCreamInfo(Request $request, StrategyService $strategyService)
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

        $strategyService->setInitialService($request->type);
        $iceCreamButterfatContent = $strategyService->getIceCreamButterfatContent();

        return response()
            ->json([
                'data' => $iceCreamButterfatContent,
            ])
            ->setStatusCode(200);
    }
}
