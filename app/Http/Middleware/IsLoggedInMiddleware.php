<?php

namespace App\Http\Middleware;

use Closure;

class IsLoggedInMiddleware
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
        // dd(session("user"));
        if(session("user")){ //kalau sudah login
            //lanjut ke halaman yang dituju aslinya
            return $next($request);
        }
        else{ //else
            //redirect ke halaman login
            return redirect("/login");
        }
    }
}
