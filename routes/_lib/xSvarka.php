<?php

use Illuminate\Support\Facades\Route;
//
use App\Http\Controllers\xAsgruppController as Asgrupp;
use App\Http\Controllers\xSvarkaController as Svarka;


Route::group(['namespace' => 'Svarka', 'prefix' => 'svarka'], function(){
    Route::get('/', [Svarka::class, 'morda'])->name('svarka.morda');
});
