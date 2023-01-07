<?php

namespace App\Providers;

use App\Pattern\Facade\Gas;
use App\Pattern\Facade\GasInterface;
use App\Pattern\Facade\GasStove;
use App\Pattern\Facade\GasStoveInterface;
use App\Pattern\Facade\Knife;
use App\Pattern\Facade\KnifeInterface;
use App\Pattern\Facade\Stockpot;
use App\Pattern\Facade\StockpotInterface;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //Facade pattern
        $this->app->bind(GasInterface::class, Gas::class);
        $this->app->bind(GasStoveInterface::class, GasStove::class);
        $this->app->bind(KnifeInterface::class, Knife::class);
        $this->app->bind(StockpotInterface::class, Stockpot::class);
    }
}
