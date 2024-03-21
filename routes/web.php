<?php

use Illuminate\Support\Facades\Route;
//
// use Illuminate\Support\Facades\App;
//

// App::currentLocale();
// App::setLocale($locale);
// App::isLocale('en');


Route::group(['prefix' => 'asnone'], function(){

    Route::group(['prefix' => 'sms'], function(){
        Route::post('/store', [App\Http\Controllers\SmsController::class, 'store'])->name('sms.store');
        Route::post('/ask', [App\Http\Controllers\SmsController::class, 'ask'])->name('sms.ask');
        Route::get('/manager', [App\Http\Controllers\SmsController::class, 'manager'])->name('sms.manager');
        // Route::patch('/asnone/sms/update', [App\Http\Controllers\SmsController::class, 'update'])->name('sms.update');
        Route::post('/update', [App\Http\Controllers\SmsController::class, 'update'])->name('sms.update');
    });

    Route::group(['prefix' => 'brief'], function(){
        // Route::get('/', [App\Http\Controllers\BriefController::class, 'index'])->name('brief.morda');
        Route::post('/', [App\Http\Controllers\BriefController::class, 'store'])->name('brief.store');
    });

});







Route::group(['namespace' => 'Landing', 'prefix' => 'asnone'], function(){
    Route::get('/', [App\Http\Controllers\BriefController::class, 'index'])->name('morda');
});






Route::get('/fz-152', function () {
    return view('zPAGE.Doc.Fz');
})->name('fz');


// !! verify  15031049
// ниже добавил ['verify' => true], до этого не было,
Auth::routes(['verify' => true]);
//
//
Route::get('/asnone/clear', function () {
    Artisan::call('cache:clear');
    Artisan::call('config:cache');
    Artisan::call('view:clear');
    Artisan::call('route:clear');
 
    return "Кэш очищен.";
});



