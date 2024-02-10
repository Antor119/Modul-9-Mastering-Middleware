<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class TestMiddleware
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
        //echo "Test Middlewate" . PHP_EOL;
        // if($request->path() == "index") {
        //     return redirect("/show");
        // }
        // $token= $request->header("Token");
        // if($token==123){
        //     return $next($request);
        // }
        // return response()->json(['Unathorized'],401);
        $request->headers->add(["Token1"=> "12345"]);
        return $next($request);
    }
}
