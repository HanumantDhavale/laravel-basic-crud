<?php

namespace App\Listeners;

use App\Events\LoginUser;
use App\Mail\UserLogin;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;

class LoginUserListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  LoginUser  $event
     * @return void
     */
    public function handle(LoginUser $event)
    {
        $user = $event->user;
        $ip = $event->ip;

        $user->logs()->create([
            "ip" => $ip
        ]);

        Mail::to($user->email)->send(new UserLogin($user, $ip));
    }
}
