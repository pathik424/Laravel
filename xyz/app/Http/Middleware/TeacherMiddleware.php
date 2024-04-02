<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class TeacherMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
              // a middleware ena mate banavyu bcz url ma jaine teacher ni jagya e student lakhse to automatic logout thai jase ek bijana koine access nai male

        if(!empty(Auth::check()))
        {
            if(Auth::user()-> role_as == 2)
            {
            return $next($request);
            }
        else
            {
            Auth::logout();
            return redirect(url('admin/login'))->with('accessdenied',"Access Denied Please Valid Login");
            }
        }
        else
        {
            Auth::logout();
            return redirect(url('admin/login'))->with('accessdenied',"Access Denied Please Valid Login");

        }

    }
}
