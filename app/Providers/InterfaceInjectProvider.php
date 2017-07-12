<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class InterfaceInjectProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //Web
        $this->app->bind('App\Code\IService\IUserService','App\Code\Service\UserService');
        $this->app->bind('App\Code\IService\ILoginLogService','App\Code\Service\LoginLogService');
        $this->app->bind('App\Code\IService\IVerifyCodeService','App\Code\Service\VerifyCodeService');
        $this->app->bind('App\Code\IService\ISellCategoryService','App\Code\Service\SellCategoryService');
        $this->app->bind('App\Code\IService\ISellService','App\Code\Service\SellService');
    }
}
