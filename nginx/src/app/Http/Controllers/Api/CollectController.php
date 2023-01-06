<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Model\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\LazyCollection;

class CollectController extends Controller
{
    protected $testDeadLockTwoService;

    public function __construct()
    {
    }

    public function test(Request $request)
    {
        $data = [
            [
                'name' => 'Andy',
                'age'  => 13,
            ],
            [
                'name' => 'Linda',
                'age'  => 25,
            ],
        ];

        //高階消息傳遞
        $sum = collect($data)->sum->age;

        $users = User::get();
        $users->each->test();
        dd($users->toArray());
    }
}
