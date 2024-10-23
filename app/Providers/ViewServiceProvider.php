<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Http\ViewComposers\BreadcrumbComposer;

class ViewServiceProvider extends ServiceProvider
{

    public function boot()
    {
        View::composer('*', BreadcrumbComposer::class);
    }


    public function register()
    {
        //
    }
}
