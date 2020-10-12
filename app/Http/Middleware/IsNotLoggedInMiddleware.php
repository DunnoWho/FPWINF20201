<?php

namespace App\Http\Middleware;

use Closure;

class IsNotLoggedInMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $a, $b = null)
    {
        $arr = array();
        for ($i = 0; $i < func_num_args(); $i++) {
            $arr[] = func_get_arg($i);
        }
        dd($arr);
        return $next($request);
    }
}
