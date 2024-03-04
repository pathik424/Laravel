<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class adminmiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response // a middleware ena mate che ke role as check karse ke 0 hoy to user 1 hoy to admin
    {
        if( Auth::user()->role_as !='1')
        {
            return redirect('/home')->with('status','Access Denied As You Are Not An Admin');
        }
        return $next($request);

    }
}
