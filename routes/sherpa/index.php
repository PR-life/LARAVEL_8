<?php

use Illuminate\Support\Facades\Route;
 
Route::group(['namespace' => 'ADMIN','middleware' => ['auth','admin','verified']], function () {
    Route::group(['namespace' => '_sherpa', 'prefix' => 'sherpa'], function(){
        Route::group(['namespace' => 'Excel', 'prefix' => 'excel'], function(){
    
            Route::get('/', 'IndexController')->name('sherpa.excel.index');
            Route::get('/export', 'ExportController')->name('sherpa.excel.export');
            Route::get('/download/{slug}', 'DownloadController')->name('sherpa.excel.download');
            Route::post('/',[App\Http\Controllers\ADMIN\_sherpa\Excel\ImportController::class, 'import'])->name('sherpa.excel.import');
            Route::post('update', 'UpdateController')->name('sherpa.excel.update');
        });
    });
});