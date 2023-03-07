<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Pattern\Factory\IceCreamTypeFactory;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class FactoryController extends Controller
{
    public function iceCreamButterfatInfo(Request $request, IceCreamTypeFactory $iceCreamTypeFactory)
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

        try {
            $butterfatStrategy        = $iceCreamTypeFactory->getButterfatStrategy($request->type);
            $iceCreamButterfatContent = $butterfatStrategy->butterfatContentInfo();

            return response()
                ->json([
                    'data' => $iceCreamButterfatContent,
                ])
                ->setStatusCode(200);
        } catch (Exception $e) {
            return response()
                ->json([
                    'message' => $e->getMessage(),
                ])
                ->setStatusCode(400);
        }
    }
}
