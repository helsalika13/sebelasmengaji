<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class Role
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $user = Auth::user();

        if (Auth::check() && Auth::user()->role == 'superadmin') {
            return $next($request);
        } else if (Auth::check() && Auth::user()->role == 'admin') {
            return $next($request);
        } else if (Auth::check() && Auth::user()->role == 'srohani') {
            return $next($request);
        }

        return redirect('/quran')->with('error', "Only admin can access!");
    }
}
