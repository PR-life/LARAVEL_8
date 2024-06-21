<?php

use Illuminate\Support\Facades\Route;

Route::group(['namespace' => 'ADMIN','middleware' => ['auth','admin','verified']], function () {
    Route::group(['namespace' => '_lib'], function(){
        
        Route::group(['namespace' => 'Service', 'prefix' => 'services'], function(){
            Route::get('/', 'IndexController')->name('service.index');
            Route::get('/create', 'CreateController')->name('service.create');
            Route::patch('/{service}', 'UpdateController')->name('service.update');
            Route::post('/', 'StoreController')->name('service.store');
            Route::get('/{service}/edit', 'EditController')->name('service.edit');
            Route::delete('/{service}', 'DeleteController')->name('service.delete');
        });
        Route::group(['namespace' => 'Telegram', 'prefix' => 'telegram'], function(){
            Route::get('/', 'IndexController')->name('telegram.index');
            Route::get('/create', 'CreateController')->name('telegram.create');
            Route::patch('/{telegram}', 'UpdateController')->name('telegram.update');
            Route::post('/', 'StoreController')->name('telegram.store');
            Route::get('/{telegram}/edit', 'EditController')->name('telegram.edit');
            Route::delete('/{telegram}', 'DeleteController')->name('telegram.delete');
        });

    });

});