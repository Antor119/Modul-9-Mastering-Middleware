<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class ResponseMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $response= $next($request);
        //$response->setContent("Bangladesh");
        $currentConten= $response->getContent();
        $newConten= $currentConten . " Have A Nice Day";
        $response->setContent($newConten);
        return $response;
    }
}
