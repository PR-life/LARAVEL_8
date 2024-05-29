<?php

use Illuminate\Support\Facades\Route;

Route::group(['namespace' => 'ADMIN','middleware' => ['auth','admin','verified']], function () {
    Route::group(['namespace' => '_lib'], function(){

        Route::group(['namespace' => 'Telegram', 'prefix' => 'telegram'], function(){
            Route::get('/', 'IndexController')->name('lib.telegram.index');
            Route::get('/create', 'CreateController')->name('lib.telegram.create');
            Route::patch('/{telegram}', 'UpdateController')->name('lib.telegram.update');
            Route::post('/', 'StoreController')->name('lib.telegram.store');
            Route::get('/{telegram}/edit', 'EditController')->name('lib.telegram.edit');
            Route::delete('/{telegram}', 'DeleteController')->name('lib.telegram.delete');
        });


    });

});