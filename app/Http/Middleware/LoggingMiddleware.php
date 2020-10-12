<?php

namespace App\Http\Middleware;

use Closure;

use App\RequestLog;

class LoggingMiddleware
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
        //insert database
        $log = new RequestLog();
        $log->account_id = session("user")["id"];
        $log->endpoint = $request->path();
        $log->extra = json_encode($request->header());
        $log->save();
        return $next($request);
    }
}
