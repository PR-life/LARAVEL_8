<?php

use Illuminate\Support\Facades\Route;


//
//  !!!!!middleware verified не сработал + есть еще в коде этот момент
// ищи по 15031049
Route::group(['namespace' => 'ADMIN','middleware' => ['auth','admin','verified']], function () {
    Route::get('/', function() {return view('zADMIN.Morda');})->name('morda');

 

    Route::group(['namespace' => 'CRM', 'prefix' => 'crm'], function(){


    Route::group(['namespace' => 'OOGWAY', 'prefix' => 'oogway'], function(){

        Route::group(['namespace' => 'Manager', 'prefix' => 'manager'], function(){
            Route::get('/', 'IndexController')->name('oogway.manager.index');
            Route::get('/create', 'CreateController')->name('oogway.manager.create');
            Route::patch('/', 'StoreController')->name('oogway.manager.store');
            // // Route::get('/{category}', 'ShowController')->name('oogway.manager.show');
            Route::get('/{oogway}/edit', 'EditController')->name('oogway.manager.edit');
            Route::patch('/{oogway}', 'UpdateController')->name('oogway.manager.update');
            Route::patch('/btn/{oogway}', 'btnController')->name('oogway.manager.btn');
            // Route::delete('/{oogway}', 'DeleteController')->name('oogway.manager.delete');
        });


        Route::group(['namespace' => 'Task', 'prefix' => 'task'], function(){
            Route::get('/', 'IndexController')->name('oogway.task.index');
            Route::get('/create', 'CreateController')->name('oogway.task.create');
            Route::patch('/', 'StoreController')->name('oogway.task.store');
            // Route::get('/{task}', 'ShowController')->name('oogway.task.show');
            Route::get('/{task}/edit', 'EditController')->name('oogway.task.edit');
            Route::patch('/{category}', 'UpdateController')->name('oogway.task.update');
            // Route::delete('/{category}', 'DeleteController')->name('oogway.task.delete');
        });


        Route::group(['namespace' => 'pivot', 'prefix' => 'pivot'], function(){
            Route::group(['namespace' => 'Task', 'prefix' => 'task'], function(){
                Route::get('/', 'IndexController')->name('oogway.pivot.task.index');
                Route::get('/create', 'CreateController')->name('oogway.pivot.task.create');
                Route::patch('/', 'StoreController')->name('oogway.pivot.task.store');
            });
        });

        Route::get('/morda', 'IndexController')->name('oogway.morda');
        Route::get('/{oogway}', 'ShowController')->name('oogway.show');

    //     Route::get('/branch/1735', [App\Http\Controllers\OOGWAYController::class, 'f_1735'])->name('oogway.branch.f_1735');
    //     Route::get('/branch/1851', [App\Http\Controllers\OOGWAYController::class, 'f_1851'])->name('oogway.branch.f_1851');
    //     Route::get('/branch/1932', [App\Http\Controllers\OOGWAYController::class, 'f_1932'])->name('oogway.branch.f_1932');
    //     Route::get('/branch/2002', [App\Http\Controllers\OOGWAYController::class, 'f_2002'])->name('oogway.branch.f_2002');
    //     Route::get('/branch/0953', [App\Http\Controllers\OOGWAYController::class, 'f_0953'])->name('oogway.branch.f_0953');
    });



});
