<?php

use Illuminate\Support\Facades\Route;

Route::group(['namespace' => 'ADMIN','middleware' => ['auth','admin','verified']], function () {
    Route::group(['namespace' => '_lib'], function(){
        
        Route::group(['namespace' => 'Service', 'prefix' => 'services'], function(){
            Route::get('/', 'IndexController')->name('lib.service.index');
            Route::get('/create', 'CreateController')->name('lib.service.create');
            Route::patch('/{service}', 'UpdateController')->name('lib.service.update');
            Route::post('/', 'StoreController')->name('lib.service.store');
            Route::get('/{service}/edit', 'EditController')->name('lib.service.edit');
            Route::delete('/{service}', 'DeleteController')->name('lib.service.delete');
        });
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