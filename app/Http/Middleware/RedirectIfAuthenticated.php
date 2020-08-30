<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Request;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param Request $request
     * @param Closure $next
     * @param string|null $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        if (Auth::guard($guard)->check() && Auth::user()->role->id == '1') {
            //die("logged in");

            return redirect()->route('admin.dashboard');
        }elseif(Auth::guard($guard)->check() && Auth::user()->role->id == '2') {
            return redirect()->route('author.dashboard');
        }else{ return $next($request); }
    }
}
