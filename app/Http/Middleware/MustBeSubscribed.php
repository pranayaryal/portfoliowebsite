<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class MustBeSubscribed
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        //if the user is currently logged in
        $user = $request->user();

        if ($user && $user->isSubscribed()) {
            return $next($request);
        }
        //user is currently subscribed to the site

        return redirect('/');
    }
}
