<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;
//
use App\Models\User;
use App\Policies\AdminPolicy;

class AuthServiceProvider extends ServiceProvider
{

    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
        User::class => AdminPolicy::class,
    ];

    public function boot()
    {
        $this->registerPolicies();
    }
}
