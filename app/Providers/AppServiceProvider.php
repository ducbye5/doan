<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Schema;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        // Admin
        $this->app->bind(
            'App\Repository\Interfaces\UserRepositoryInterface',
            'App\Repository\UserRepository'
        );
        $this->app->bind(
            'App\Repository\Interfaces\ProfilesRepositoryInterface',
            'App\Repository\ProfilesRepository'
        );
        $this->app->bind(
            'App\Repository\Interfaces\Social_linksRepositoryInterface',
            'App\Repository\Social_linksRepository'
        );

        //Site
        $this->app->bind(
            'App\Repository\Interfaces\CustomersRepositoryInterface',
            'App\Repository\CustomersRepository'
        );
        $this->app->bind(
            'App\Repository\Interfaces\New_detailsRepositoryInterface',
            'App\Repository\New_detailsRepository'
        );
        $this->app->bind(
            'App\Repository\Interfaces\New_infosRepositoryInterface',
            'App\Repository\New_infosRepository'
        );
        $this->app->bind(
            'App\Repository\Interfaces\Post_news_historiesRepositoryInterface',
            'App\Repository\Post_news_historiesRepository'
        );
        $this->app->bind(
            'App\Repository\Interfaces\Company_informationsRepositoryInterface',
            'App\Repository\Company_informationsRepository'
        );
        $this->app->bind(
            'App\Repository\Interfaces\Company_brokersRepositoryInterface',
            'App\Repository\Company_brokersRepository'
        );
    }
}
