<?php

namespace App\Providers;

use App\Category;
use App\Observers\UserObserver;
use App\Post;
use App\User;
use Illuminate\Support\ServiceProvider;

use function GuzzleHttp\Promise\all;

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
            $latest_post =Post::with(['images','videos'])->take(15)->get()->all();
            $view->with(compact('categories','latest_post'));
        });
    }
}
