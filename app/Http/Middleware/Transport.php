<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class Transport
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (Auth::check())
        {
            if (Auth::user()->transport())
            {
               // $expiresAt = Carbon::now()->addMinutes(1);
             //   Cache::put('user-is-online-' . Auth::user()->id, true, $expiresAt);
                return $next($request);
            }
        }
//        return $next($request);
        return redirect(404);
    }
}
