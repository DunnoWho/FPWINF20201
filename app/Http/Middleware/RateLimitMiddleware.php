<?php

namespace App\Http\Middleware;

use Closure;

use App\RequestLog;

class RateLimitMiddleware
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
        $x = RequestLog::whereRaw("created_at > date_sub(now(), interval 421 minute)")
            ->where("account_id", session("user")["id"])
            ->count();
        if($x > 3){
            return redirect("/err");
        }
        else{
            return $next($request);
        }
    }
}
