<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

//
use Illuminate\Support\Facades\App;


// https://www.jhanley.com/blog/laravel-redirecting-http-to-https/

class HttpRedirect
{
    public function handle(Request $request, Closure $next)
    {
        return 5555;


        // if (!$request->secure() && App::environment('production') {
        //         return 5555;
        //         // return redirect()->secure($request->getRequestUri());
        // }
 
        return $next($request);
    }
}
