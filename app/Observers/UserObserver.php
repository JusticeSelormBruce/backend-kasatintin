<?php

namespace App\Observers;

use App\user;

class UserObserver
{

 public function creating(User $user)
 {
     $user->api_token =  bin2hex(openssl_random_pseudo_bytes(30));
 }
    /**
     * Handle the user "created" event.
     *
     * @param  \App\user  $user
     * @return void
     */
    public function created(user $user)
    {
        //
    }

    /**
     * Handle the user "updated" event.
     *
     * @param  \App\user  $user
     * @return void
     */
    public function updated(user $user)
    {
        //
    }

    /**
     * Handle the user "deleted" event.
     *
     * @param  \App\user  $user
     * @return void
     */
    public function deleted(user $user)
    {
        //
    }

    /**
     * Handle the user "restored" event.
     *
     * @param  \App\user  $user
     * @return void
     */
    public function restored(user $user)
    {
        //
    }

    /**
     * Handle the user "force deleted" event.
     *
     * @param  \App\user  $user
     * @return void
     */
    public function forceDeleted(user $user)
    {
        //
    }
}
