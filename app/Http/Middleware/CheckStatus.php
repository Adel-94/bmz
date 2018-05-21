<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class CheckStatus
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next,$guard = null)
    {   
       if (Auth::guard($guard)->check()) {
            if (Auth::user()->role == 1) {
                return $next($request);
            }
            else {
                return redirect('/login');
            }
        }
        return $next($request);
    }
}
