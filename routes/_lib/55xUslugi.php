<?php

use Illuminate\Support\Facades\Route;
//
use App\Http\Controllers\xAsgruppController as Asgrupp;
use App\Http\Controllers\xSvarkaController as Svarka;


Route::group(['namespace' => 'xUslugi', 'prefix' => 'uslugi'], function(){
    Route::get('/', [App\Http\Controllers\zAsgrupp\Uslugi\IndexController::class, 'index'])->name('uslugi.index');
    Route::get('/delivery', [App\Http\Controllers\zAsgrupp\Uslugi\IndexController::class, 'delivery'])->name('uslugi.delivery');
    Route::get('/kovka', [App\Http\Controllers\zAsgrupp\Uslugi\IndexController::class, 'kovka'])->name('uslugi.kovka');
    Route::get('/remont-ballonov', [App\Http\Controllers\zAsgrupp\Uslugi\IndexController::class, 'rb'])->name('uslugi.rb');
    Route::get('/obsluzhivanie-ballonov', [App\Http\Controllers\zAsgrupp\Uslugi\IndexController::class, 'ob'])->name('uslugi.ob');

    Route::get('/{service}', [ShowService::class, 'index'])->name('uslugi.show');
});