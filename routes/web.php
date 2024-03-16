<?php

use Illuminate\Support\Facades\Route;
//
// use Illuminate\Support\Facades\App;
//

// App::currentLocale();
// App::setLocale($locale);
// App::isLocale('en');

Route::post('/asnone/sms/store', [App\Http\Controllers\SmsController::class, 'store'])->name('sms.store');
Route::post('/asnone/sms/ask', [App\Http\Controllers\SmsController::class, 'ask'])->name('sms.ask');
Route::get('/asnone/sms/manager', [App\Http\Controllers\SmsController::class, 'manager'])->name('sms.manager');
// Route::patch('/asnone/sms/update', [App\Http\Controllers\SmsController::class, 'update'])->name('sms.update');
Route::post('/asnone/sms/update', [App\Http\Controllers\SmsController::class, 'update'])->name('sms.update');



Route::get('/fz-152', function () {
    return view('z.Fz');
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



