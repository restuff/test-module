<?php

namespace Epic\ResponseModule;

use Epic\ResponseModule\service\ResponseService;
use Illuminate\Support\ServiceProvider;

class ResponseModuleServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     *
     * @throws \Illuminate\Contracts\Container\BindingResolutionException
     */
    public function register()
    {
        $this->app->make(ResponseService::class);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
