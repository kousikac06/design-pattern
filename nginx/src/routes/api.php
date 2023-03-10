<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['prefix' => 'facade'], function () {
    Route::get('/cooke-soup', 'Api\FacadeController@cookSoup');
    Route::get('/after-cooke-clean', 'Api\FacadeController@AfterCookClean');
});

Route::group(['prefix' => 'adapter'], function () {
    Route::group(['prefix' => '/cook-method'], function () {
        Route::get('/saute', 'Api\AdapterController@saute');
        Route::get('/broil', 'Api\AdapterController@broil');
    });
});

Route::group(['prefix' => 'strategy'], function () {
    Route::group(['prefix' => '/ice-cream'], function () {
        Route::get('/info', 'Api\StrategyController@iceCreamInfo');
    });
});

Route::group(['prefix' => 'bridge'], function () {
    Route::group(['prefix' => '/ice-cream'], function () {
        Route::get('/info', 'Api\BridgeController@iceCreamInfoByBrand');
    });
});

Route::group(['prefix' => 'decorator'], function () {
    Route::group(['prefix' => '/ice-cream'], function () {
        Route::get('/price', 'Api\DecoratorController@iceCreamPrice');
    });
});

Route::group(['prefix' => 'template-method'], function () {
    Route::get('/drink', 'Api\TemplateMethodController@makeDrink');
});

Route::group(['prefix' => 'observer'], function () {
    Route::get('/notify', 'Api\ObserverController@notify');
});

Route::group(['prefix' => 'singleton'], function () {
    Route::get('/count', 'Api\SingletonController@iceCreamCount');
    Route::get('/count-by-provider', 'Api\SingletonController@iceCreamCountByProvider');
});

Route::group(['prefix' => 'abstract-factory'], function () {
    Route::group(['prefix' => '/ice-cream'], function () {
        Route::get('/info', 'Api\AbstractFactoryController@iceCreamInfo');
    });
});

Route::group(['prefix' => 'factory'], function () {
    Route::group(['prefix' => '/ice-cream'], function () {
        Route::get('/info', 'Api\FactoryController@iceCreamButterfatInfo');
    });
});

Route::group(['prefix' => 'builder'], function () {
    Route::group(['prefix' => '/ice-maker'], function () {
        Route::get('/info', 'Api\BuilderController@getMakerInfo');
    });
});









