<?php

use Illuminate\Support\Facades\Route;
//
// use Illuminate\Support\Facades\App;
//
use App\Http\Controllers\MY\IndexController as My;


Route::get('/main', [My::class, 'morda'])->name('morda');



Route::get('/bookmarks', [My::class, 'blank'])->name('bookmarks');
Route::get('/reviews', [My::class, 'blank'])->name('reviews');
Route::get('/comments', [My::class, 'blank'])->name('comments');


Route::get('/paper', [My::class, 'blank'])->name('paper');
Route::get('/course', [My::class, 'blank'])->name('course');
Route::get('/author_comments', [My::class, 'blank'])->name('author_comments');


Route::get('/orderlist', [My::class, 'blank'])->name('orderlist');
Route::get('/cart', [My::class, 'blank'])->name('cart');

// Route::group(['namespace' => 'Support', 'prefix' => 'support'], function(){
    // Route::get('/statistics', [App\Http\Controllers\zImago\PAGE\Support\IndexController::class, 'statistics'])->name('support.statistics');
    // Route::get('/faq', [App\Http\Controllers\zImago\PAGE\Support\IndexController::class, 'faq'])->name('support.faq');
    // Route::get('/business', [App\Http\Controllers\zImago\PAGE\Support\IndexController::class, 'business'])->name('support.business');
// });




 
// Route::group(['namespace' => 'MY', 'prefix' => 'my', 'middleware' => ['auth']], function () {

 
 


 

//     Route::get('/notifications', [My::class, 'blank'])->name('my.notifications');



// 	Route::group(['namespace' => 'Form', 'prefix' => 'form'], function(){
//         Route::group(['namespace' => 'distributor', 'prefix' => 'distributor'], function(){
//             Route::get('/', 'IndexController')->name('my.form.distributor');
//         });
//         Route::group(['namespace' => 'map', 'prefix' => 'map'], function(){
//             Route::get('/', 'IndexController')->name('my.form.map');
//         });
//         Route::group(['namespace' => 'paper', 'prefix' => 'paper'], function(){
//             Route::get('/', 'IndexController')->name('my.form.paper');
//         });
//         Route::group(['namespace' => 'consultant', 'prefix' => 'consultant'], function(){
//             Route::get('/', 'IndexController')->name('my.form.consultant');
//         });
// 	});


// });
