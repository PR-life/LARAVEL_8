<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\User;

class AdminPanelMiddleware
{
    public function handle(Request $request, Closure $next)
    {


        // dd(User::ROLE_OWNER);
        // dd(auth()->user()->role);
        // dd(auth()->user()->role == User::ROLE_OWNER || auth()->user()->role == User::ROLE_ADMIN);


		// if(auth()->user()->role !== '0') { // ниже сделал корректнее
        // if((int) auth()->user()->role !== User::ROLE_ADMIN) { // (int) приведение типов

            // if((int) auth()->user()->role > 10) {
            //     return redirect()->route('home');
            // }

            // if(auth()->user()->role == User::ROLE_OWNER || auth()->user()->role == User::ROLE_ADMIN) { // (int) приведение типов
            //     return $next($request);
            // }

            return $next($request);

    }
}
