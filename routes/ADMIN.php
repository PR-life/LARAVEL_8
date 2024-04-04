<?php

use Illuminate\Support\Facades\Route;

//
//  !!!!!middleware verified не сработал + есть еще в коде этот момент
// ищи по 15031049

Route::group(['namespace' => 'ADMIN','middleware' => ['auth','admin','verified']], function () {
    Route::get('/', function() {return view('zADMIN.Morda');})->name('morda');


    Route::group(['namespace' => 'Paper', 'prefix' => 'papers'], function(){
        Route::get('/', 'IndexController')->name('paper.index');
        Route::get('/trash', 'IndexTrashedController')->name('paper.trash');
        Route::get('/create', 'CreateController')->name('paper.create');
        Route::post('/', 'StoreController')->name('paper.store');
        // // // // // Route::get('/{paper}', 'ShowController')->name('paper.show');
        Route::get('/{paper}/edit', 'EditController')->name('paper.edit');
        Route::patch('/{paper}', 'UpdateController')->name('paper.update');
        Route::delete('/{paper}', 'DeleteController')->name('paper.delete');
    });
    Route::group(['namespace' => 'Post', 'prefix' => 'posts'], function(){
        Route::get('/', 'IndexController')->name('post.index');
        Route::get('/trash', 'IndexTrashedController')->name('post.trash');
        Route::get('/create', 'CreateController')->name('post.create');
        Route::post('/', 'StoreController')->name('post.store');
        // // // Route::get('/{post}', 'ShowController')->name('post.show');
        Route::get('/{post}/edit', 'EditController')->name('post.edit');
        Route::patch('/{post}', 'UpdateController')->name('post.update');
        Route::delete('/{post}', 'DeleteController')->name('post.delete');
    });


    Route::group(['namespace' => 'Category', 'prefix' => 'categories'], function(){
        Route::get('/', 'IndexController')->name('category.index');
        Route::get('/create', 'CreateController')->name('category.create');
        Route::post('/', 'StoreController')->name('category.store');
        // // Route::get('/{category}', 'ShowController')->name('category.show');
        Route::get('/{category}/edit', 'EditController')->name('category.edit');
        Route::patch('/{category}', 'UpdateController')->name('category.update');
        Route::delete('/{category}', 'DeleteController')->name('category.delete');
    });


});

// require __DIR__.'/CRM/index.php';
 