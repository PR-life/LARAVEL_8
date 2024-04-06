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

    Route::group(['namespace' => 'Faq', 'prefix' => 'faq'], function(){
        Route::get('/', 'IndexController')->name('faq.index');
        // // Route::get('/trash', 'IndexTrashedController')->name('faq.trash');
        Route::get('/create', 'CreateController')->name('faq.create');
        Route::post('/', 'StoreController')->name('faq.store');
        // // // // Route::get('/{faq}', 'ShowController')->name('faq.show');
        Route::get('/{faq}/edit', 'EditController')->name('faq.edit');
        Route::patch('/{faq}', 'UpdateController')->name('faq.update');
        Route::delete('/{faq}', 'DeleteController')->name('faq.delete');
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

    Route::group(['namespace' => 'Tag', 'prefix' => 'tags'], function(){
        Route::get('/', 'IndexController')->name('tag.index');
        Route::get('/create', 'CreateController')->name('tag.create');
        Route::post('/', 'StoreController')->name('tag.store');
        // // Route::get('/{tag}', 'ShowController')->name('tag.show');
        Route::get('/{tag}/edit', 'EditController')->name('tag.edit');
        Route::patch('/{tag}', 'UpdateController')->name('tag.update');
        Route::delete('/{tag}', 'DeleteController')->name('tag.delete');
    });


    Route::group(['namespace' => 'Group', 'prefix' => 'groups'], function(){
        Route::get('/', 'IndexController')->name('group.index');
        Route::get('/create', 'CreateController')->name('group.create');
        Route::post('/', 'StoreController')->name('group.store');
        // // Route::get('/{tag}', 'ShowController')->name('tag.show');
        Route::get('/{group}/edit', 'EditController')->name('group.edit');
        Route::patch('/{group}', 'UpdateController')->name('group.update');
        Route::delete('/{group}', 'DeleteController')->name('group.delete');
    });


});

 

require __DIR__.'/sherpa/index.php';
// require __DIR__.'/CRM/index.php';
 