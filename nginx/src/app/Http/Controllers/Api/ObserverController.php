<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Pattern\Observer\Competitor;
use App\Pattern\Observer\Fan;
use App\Pattern\Observer\IceCreamFanPage;
use App\Pattern\Observer\Subject;

class ObserverController extends Controller
{
    public function notify()
    {
        app()->bind(Subject::class, IceCreamFanPage::class);
        $IceCreamFanPage = app()->make(Subject::class);

        $IceCreamFanPage->attach(new Fan());
        $IceCreamFanPage->attach(new Competitor());
        $response = $IceCreamFanPage->notify();

        return response()
            ->json([
                'data' => $response,
            ])
            ->setStatusCode(200);
    }
}
