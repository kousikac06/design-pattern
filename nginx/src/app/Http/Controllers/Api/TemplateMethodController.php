<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Pattern\TemplateMethod\ShakeDrink;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class TemplateMethodController extends Controller
{
    public function makeDrink(Request $request)
    {
        $request->only(['type']);

        $validator = Validator::make(
            $request->all(),
            [
                'type' => ['required', Rule::in(['MilkGreenTea', 'LemonBlackTea'])],
            ]
        );

        if ($validator->fails()) {
            return response()
                ->json([
                    'data' => $validator->errors()->first(),
                ])
                ->setStatusCode(400);
        }

        app()->bind(ShakeDrink::class, "App\Pattern\TemplateMethod\\$request->type");
        $shakeDrink = app()->make(ShakeDrink::class);

        $flow = $shakeDrink->makeDrink();

        return response()
            ->json([
                'data' => $flow,
            ])
            ->setStatusCode(200);
    }
}
