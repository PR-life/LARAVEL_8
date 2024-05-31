<?php

use Illuminate\Support\Facades\Route;
//
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Utin\IndexController as Utin;
//

 
Route::get('/', [Utin::class, 'morda'])->name('home');