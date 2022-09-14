<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Braintree\Gateway;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->singleton(Gateway::class, function($app){
            return new Gateway([
                
                'environment' => 'sandbox',
                'merchantId' => '4sjx493rm6vt8q2c',
                'publicKey' => 'vxcgrmnyyzb54s38',
                'privateKey' => 'e349ea0792ea4553bbb724c4fd7a924e'
            ]);
        });
    }
}
