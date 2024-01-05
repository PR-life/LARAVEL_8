<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\URL;

use Closure;
use Illuminate\Http\Request;

class SetLocaleMiddleware
{
    public function handle(Request $request, Closure $next)
    {

        app()->setLocale($request->segment(2));
        URL::defaults(['locale' => $request->segment(2)]);

        return $next($request);
    }
}
