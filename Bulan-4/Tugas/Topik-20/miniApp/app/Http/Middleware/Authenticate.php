<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\Middleware\Authenticate as Middleware;


class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */
    protected function redirectTo($request)
    {
        if (! $request->expectsJson()) {
            return route('login');
        }
    }

    // public function handle($request, Closure $next, ...$guards)
    // {
    //     if ($this->auth->guard(null)->guest()) {
    //         if ($request->session()->has('remember')) {
    //             $remember_token = $request->session()->get('remember');
    //             $user = User::where('remember_token', $remember_token)->first();
    //             if ($user) {
    //                 Auth::login($user);
    //             }
    //         }
    //     }
    //     return $next($request);
    // }

}
