<?php

namespace App\Providers;

use App\Services\DemoService;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\ServiceProvider;
use Psr\Log\LoggerInterface;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->when(DemoService::class)
            ->needs(LoggerInterface::class)
            ->give(function () {
                debug_print_backtrace();
                return Log::channel('single');
            });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
