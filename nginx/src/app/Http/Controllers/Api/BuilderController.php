<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Pattern\Builder\ICMMakerBuilder;
use App\Pattern\Builder\ICMShop;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class BuilderController extends Controller
{
    const NO_CP  = 0;
    const HAS_CP = 1;

    public function getMakerInfo(Request $request, ICMShop $icmShop, ICMMakerBuilder $icmMakerBuilder)
    {
        $data = $request->only(['has_cp']);

        $validator = Validator::make(
            $data,
            [
                'has_cp' => ['required', Rule::in([self::NO_CP, self::HAS_CP])],
            ]
        );

        if ($validator->fails()) {
            return response()
                ->json([
                    'data' => $validator->errors()->first(),
                ])
                ->setStatusCode(400);
        }

        $icmShop->setICMMakerBuilder($icmMakerBuilder);

        if ((int)$data['has_cp'] === self::NO_CP) {
            $icmMaker = $icmShop->makerNoCP();
        } else {
            $icmMaker = $icmShop->makerHasCP();
        }

        return response()
            ->json([
                'info' => $icmMaker->info(),
            ])
            ->setStatusCode(200);
    }
}
