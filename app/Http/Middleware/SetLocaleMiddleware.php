<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\URL;

use Closure;
use Illuminate\Http\Request;

class SetLocaleMiddleware
{
    public function handle(Request $request, Closure $next)
    {

        // dd($request->segments());

        //локаль приложения на значение сегмента URL
        app()->setLocale($request->segment(1));

        // Этот вызов устанавливает значение по умолчанию для параметра locale в URL-адресах, создаваемых с помощью фасада URL. Это гарантирует, что генерируемые ссылки будут содержать текущую локаль.
        URL::defaults(['locale' => $request->segment(1)]);

        return $next($request);
    }
}
