<?php

namespace App\Providers;

use App\Category;
use App\Observers\UserObserver;
use App\User;
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
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        User::observe(UserObserver::class);
        view()->composer('*', function ($view) {
            $categories = Category::all();
            $view->with(compact('categories'));
        });
    }
}
