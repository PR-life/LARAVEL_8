<?php

use Illuminate\Support\Facades\Route;
//
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Artisan;
// use Illuminate\Support\Facades\App;
//
 
// Route::get('/asnonehome', function () {
//     return redirect('/home');
// })->name('home');

// function () {return redirect('/home');}

// App::currentLocale();
// App::setLocale($locale);
// App::isLocale('en');

Route::group(['prefix' => 'asnone'], function(){

    Route::group(['prefix' => 'sms'], function(){

        Route::post('/store', [App\Http\Controllers\sms\SmsController::class, 'store'])->name('sms.store');

        Route::post('/storeask', [App\Http\Controllers\sms\SmsController::class, 'storeAsk'])->name('sms.storeask');
        Route::get('/storeask', [App\Http\Controllers\sms\SmsController::class, 'storeAskGet']);

        Route::post('/storephone', [App\Http\Controllers\sms\SmsController::class, 'storePhone'])->name('sms.storephone');
        Route::post('/storephonename', [App\Http\Controllers\sms\SmsController::class, 'storePhoneName'])->name('sms.storephonename');
        Route::post('/storecallback', [App\Http\Controllers\sms\SmsController::class, 'storeCallBack'])->name('sms.storecallback');


        Route::post('/storeorder', [App\Http\Controllers\sms\SmsController::class, 'storeOrder'])->name('sms.storeorder');

        Route::post('/storequiz', [App\Http\Controllers\sms\SmsController::class, 'storeQuiz'])->name('sms.storequiz');

        Route::get('/manager', [App\Http\Controllers\sms\SmsManagerController::class, 'manager'])->name('sms.manager');
        Route::post('/update', [App\Http\Controllers\sms\SmsManagerController::class, 'update'])->name('sms.update');
        // Route::patch('/asnone/sms/update', [App\Http\Controllers\sms\SmsController::class, 'update'])->name('sms.update');
    });

    Route::group(['prefix' => 'brief'], function(){
        // Route::get('/', [App\Http\Controllers\BriefController::class, 'index'])->name('brief.morda');
        Route::post('/', [App\Http\Controllers\BriefController::class, 'store'])->name('brief.store');
    });

});







Route::group(['namespace' => 'Landing', 'prefix' => 'asnone'], function(){
    Route::get('/', [App\Http\Controllers\BriefController::class, 'index'])->name('morda');
});



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



