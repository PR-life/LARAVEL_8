<?php

use Illuminate\Support\Facades\Route;
 
Route::group(['namespace' => 'ADMIN','middleware' => ['auth','admin','verified']], function () {
    Route::group(['namespace' => '_sherpa', 'prefix' => 'sherpa'], function(){
        Route::group(['namespace' => 'Excel', 'prefix' => 'excel'], function(){
    
            Route::get('/', 'IndexController')->name('sherpa.excel.index');
            Route::get('/export', 'ExportController')->name('sherpa.excel.export');
            // Route::get('/', [App\Http\Controllers\ADMIN\sherpa\Excel\IndexController::class, 'index'])->name('admin.sherpa.excel.index');
            // Route::get('/export', [App\Http\Controllers\ADMIN\sherpa\Excel\export::class, 'index'])->name('admin.sherpa.excel.export');

        });
    });
});
