<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class DemoMiddleware
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




        // $key=$request->header("Api-key");
        // if($key== "xyz123"){
        //     return $next($request);
        // }
        // else{
        //     return response()->json("Unathourize",401);
        // }
/*
        $key=$request->key;
        if($key=="xyz123"){
            return $next($request);
        }
        else{
            return response()->json("invalid",401);
        }

    */
             //$request->headers->add(["email"=>"mhantor@gmail.com"]);
             $request->headers->remove("email");
            return $next($request);

}
}
