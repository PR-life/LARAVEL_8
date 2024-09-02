<?php

use Illuminate\Support\Facades\Route;

//
//  !!!!!middleware verified не сработал + есть еще в коде этот момент
// ищи по 15031049

// Route::group(['namespace' => 'ADMIN','middleware' => ['auth','admin','verified']], function () {
Route::group(['namespace' => 'ADMIN','middleware' => ['auth']], function () {
    Route::get('/', function() {return view('zADMIN.Morda');})->name('morda');



    Route::group(['namespace' => 'Lego', 'prefix' => 'lego'], function(){
        Route::get('/', 'IndexController')->name('lego.index');
        // // Route::get('/trash', 'IndexTrashedController')->name('lego.trash');
        Route::get('/create', 'CreateController')->name('lego.create');
        Route::post('/', 'StoreController')->name('lego.store');
        // // // // Route::get('/{lego}', 'ShowController')->name('lego.show');
        Route::get('/{lego}/edit', 'EditController')->name('lego.edit');
        Route::patch('/{lego}', 'UpdateController')->name('lego.update');
        Route::delete('/{lego}', 'DeleteController')->name('lego.delete');
        //
        Route::get('/trash', 'IndexTrashedController')->name('lego.trash');
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
        //
        Route::get('/trash', 'IndexTrashedController')->name('faq.trash');
    });

    Route::group(['namespace' => 'Landing', 'prefix' => 'landing'], function(){
        Route::get('/', 'IndexController')->name('landing.index');
        // // Route::get('/trash', 'IndexTrashedController')->name('landing.trash');
        Route::get('/create', 'CreateController')->name('landing.create');
        Route::post('/', 'StoreController')->name('landing.store');
        // // // // Route::get('/{landing}', 'ShowController')->name('faq.show');
        Route::get('/{landing}/edit', 'EditController')->name('landing.edit');
        Route::patch('/{landing}', 'UpdateController')->name('landing.update');
        Route::delete('/{landing}', 'DeleteController')->name('landing.delete');
    });


    Route::group(['namespace' => 'Item', 'prefix' => 'items'], function(){
        Route::get('/', 'IndexController')->name('item.index');
        Route::get('/trash', 'IndexTrashedController')->name('item.trash');
        Route::get('/create', 'CreateController')->name('item.create');
        Route::post('/', 'StoreController')->name('item.store');
        // // // // // Route::get('/{item}', 'ShowController')->name('item.show');
        Route::get('/{item}/edit', 'EditController')->name('item.edit');
        Route::patch('/{item}', 'UpdateController')->name('item.update');
        Route::delete('/{item}', 'DeleteController')->name('item.delete');
    });


    Route::group(['namespace' => 'Product', 'prefix' => 'products'], function(){
        Route::get('/', 'IndexController')->name('product.index');
        Route::get('/trash', 'IndexTrashedController')->name('product.trash');
        Route::get('/create', 'CreateController')->name('product.create');
        Route::post('/', 'StoreController')->name('product.store');
        // // Route::get('/{product}', 'ShowController')->name('product.show');
        Route::get('/{product}/edit', 'EditController')->name('product.edit');
        Route::patch('/{product}', 'UpdateController')->name('product.update');
        Route::delete('/{product}', 'DeleteController')->name('product.delete');
    });


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


    Route::group(['namespace' => 'Detail', 'prefix' => 'details'], function(){
        Route::get('/', 'IndexController')->name('detail.index');
        Route::get('/create', 'CreateController')->name('detail.create');
        // Route::post('/', 'StoreController')->name('detail.store');
        // // // Route::get('/{detail}', 'ShowController')->name('detail.show');
        // Route::get('/{detail}/edit', 'EditController')->name('detail.edit');
        // Route::patch('/{detail}', 'UpdateController')->name('detail.update');
        // Route::delete('/{detail}', 'DeleteController')->name('detail.delete');
        // //
        // Route::get('/trash', 'IndexTrashedController')->name('detail.trash');
    });



    Route::group(['namespace' => 'Feature', 'prefix' => 'features'], function(){
        Route::get('/', 'IndexController')->name('feature.index');
        Route::get('/create', 'CreateController')->name('feature.create');
        Route::post('/', 'StoreController')->name('feature.store');
        // // Route::get('/{feature}', 'ShowController')->name('feature.show');
        Route::get('/{feature}/edit', 'EditController')->name('feature.edit');
        Route::patch('/{feature}', 'UpdateController')->name('feature.update');
        Route::delete('/{feature}', 'DeleteController')->name('feature.delete');
        //
        Route::get('/trash', 'IndexTrashedController')->name('feature.trash');
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
        //
        Route::get('/trash', 'IndexTrashedController')->name('tag.trash');
    });


    Route::group(['namespace' => 'Group', 'prefix' => 'groups'], function(){
        Route::get('/', 'IndexController')->name('group.index');
        Route::get('/create', 'CreateController')->name('group.create');
        Route::post('/', 'StoreController')->name('group.store');
        // // Route::get('/{tag}', 'ShowController')->name('tag.show');
        Route::get('/{group}/edit', 'EditController')->name('group.edit');
        Route::patch('/{group}', 'UpdateController')->name('group.update');
        Route::delete('/{group}', 'DeleteController')->name('group.delete');
        //
        Route::get('/trash', 'IndexTrashedController')->name('group.trash');
    });



    //
    Route::group(['namespace' => 'User', 'prefix' => 'users'], function(){
		Route::get('/', 'IndexController')->name('user.index');
		Route::get('/create', 'CreateController')->name('user.create');
		Route::post('/', 'StoreController' )->name('user.store');
		// // Route::get('/{user}', 'ShowController')->name('user.show');
		Route::get('/{user}/edit', 'EditController')->name('user.edit');
		Route::patch('/{user}', 'UpdateController')->name('user.update');
		// Route::delete('/{user}', 'DeleteController')->name('user.delete');
	});

    //

    Route::group(['namespace' => 'Sms', 'prefix' => 'sms'], function(){
        Route::get('/', 'IndexController')->name('sms.index');
        
        // Route::group(['namespace' => 'Conversion', 'prefix' => 'conversion'], function(){
        //     Route::get('/', 'IndexController')->name('sms.conversion.index');
        // });

        // Route::group(['namespace' => 'Lead', 'prefix' => 'lead'], function(){
        //     Route::get('/', 'IndexController')->name('sms.lead.index');
        // });

        Route::get('/trash', 'IndexTrashedController')->name('sms.trash');
        // Route::get('/create', 'CreateController')->name('sms.create');
        // Route::post('/', 'StoreController')->name('sms.store');
        // // // Route::get('/{sms}', 'ShowController')->name('admin.sms.show');
        Route::get('/{sms}/edit', 'EditController')->name('sms.edit');
        Route::patch('/{sms}', 'UpdateController')->name('sms.update');
        Route::delete('/{sms}', 'DeleteController')->name('sms.delete');
    });


});

require __DIR__.'/_lib/index.php';
require __DIR__.'/sherpa/index.php';
require __DIR__.'/CRM/index.php';
require __DIR__.'/CRM/this.php';
 