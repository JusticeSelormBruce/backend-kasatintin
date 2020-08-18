<?php

namespace App\Providers;

use App\Category;
use App\Contact;
use App\Observers\UserObserver;
use App\Poll;
use App\Post;
use App\Result;
use App\Sbscription;
use App\User;
use Carbon\Carbon;
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
            $year = Carbon::now()->format('Y');
            $categories = Category::all();
            $latest_post = Post::with(['images', 'videos'])->orderByDesc('id')->take(9)->get()->all();
            $polls  = Poll::OrderByDesc('id')->get()->toArray();
            if ($polls != null) {
                $polls = $polls[0];
                $results = Result::where('poll_id', $polls['id'])->get();
            } else {
                $polls = null;
                $results = null;
            }

            $subscribers = Sbscription::count();
            $emails = Contact::orderByDesc('id')->get();
            if ($latest_post == null) {
                $recomendation = null;
            } else {
                if ( sizeof($latest_post)== 1) {
                    $recomendation = Post::all()->random(1);
                } elseif (sizeof($latest_post) == 2) {
                    $recomendation = Post::all()->random(2);
                } else {
                    $recomendation = Post::all()->random(3);
                }
            }

            $view->with(compact('categories', 'latest_post', 'year', 'polls', 'results', 'subscribers', 'emails', 'recomendation'));
        });
    }
}
