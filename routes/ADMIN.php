<?php

use Illuminate\Support\Facades\Route;

// use App\Http\Livewire\Admin\Dashboard;

//
Route::group(['namespace' => 'ADMIN','middleware' => ['auth','admin']], function () {
    Route::get('/', function() {return view('zADMIN.Morda');})->name('morda');




    Route::group(['namespace' => 'User', 'prefix' => 'users'], function(){
		Route::get('/', 'IndexController')->name('user.index');
		Route::get('/create', 'CreateController')->name('user.create');
		Route::post('/', 'StoreController' )->name('user.store');
		// // Route::get('/{user}', 'ShowController')->name('user.show');
		Route::get('/{user}/edit', 'EditController')->name('user.edit');
		Route::patch('/{user}', 'UpdateController')->name('user.update');
		// Route::delete('/{user}', 'DeleteController')->name('user.delete');
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





    Route::group(['namespace' => 'Sms', 'prefix' => 'sms'], function(){
        Route::get('/', 'IndexController')->name('sms.index');
        
        Route::group(['namespace' => 'Conversion', 'prefix' => 'conversion'], function(){
            Route::get('/', 'IndexController')->name('sms.conversion.index');
        });

        Route::group(['namespace' => 'Lead', 'prefix' => 'lead'], function(){
            Route::get('/', 'IndexController')->name('sms.lead.index');
        });

        
        // Route::get('/trash', 'IndexTrashedController')->name('admin.sms.trash');
        // Route::get('/create', 'CreateController')->name('sms.create');
        // Route::post('/', 'StoreController')->name('sms.store');
        // // // Route::get('/{sms}', 'ShowController')->name('admin.sms.show');
        Route::get('/{sms}/edit', 'EditController')->name('sms.edit');
        Route::patch('/{sms}', 'UpdateController')->name('sms.update');
        Route::delete('/{sms}', 'DeleteController')->name('sms.delete');
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


    Route::group(['namespace' => 'zItem', 'prefix' => 'items'], function(){
        Route::get('/', 'IndexController')->name('item.index');
        Route::get('/trash', 'IndexTrashedController')->name('item.trash');
        Route::get('/create', 'CreateController')->name('item.create');
        Route::post('/', 'StoreController')->name('item.store');
        // // // // // Route::get('/{item}', 'ShowController')->name('item.show');
        Route::get('/{item}/edit', 'EditController')->name('item.edit');
        Route::patch('/{item}', 'UpdateController')->name('item.update');
        Route::delete('/{item}', 'DeleteController')->name('item.delete');
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



    //

    Route::group(['namespace' => 'Group', 'prefix' => 'groups'], function(){
        Route::get('/', 'IndexController')->name('group.index');
        Route::get('/create', 'CreateController')->name('group.create');
        Route::post('/', 'StoreController')->name('group.store');
        // // Route::get('/{tag}', 'ShowController')->name('tag.show');
        Route::get('/{group}/edit', 'EditController')->name('group.edit');
        Route::patch('/{group}', 'UpdateController')->name('group.update');
        Route::delete('/{group}', 'DeleteController')->name('group.delete');
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

    Route::group(['namespace' => 'Category', 'prefix' => 'categories'], function(){
        Route::get('/', 'IndexController')->name('category.index');
        Route::get('/create', 'CreateController')->name('category.create');
        Route::post('/', 'StoreController')->name('category.store');
        // // Route::get('/{category}', 'ShowController')->name('category.show');
        Route::get('/{category}/edit', 'EditController')->name('category.edit');
        Route::patch('/{category}', 'UpdateController')->name('category.update');
        Route::delete('/{category}', 'DeleteController')->name('category.delete');
    });

    
    ////
    Route::group(['namespace' => 'Customer', 'prefix' => 'customers'], function(){
        Route::get('/', 'IndexController')->name('customer.index');
        // // Route::get('/trash', 'IndexTrashedController')->name('customer.trash');
        Route::get('/create', 'CreateController')->name('customer.create');
        Route::post('/', 'StoreController')->name('customer.store');
        // // // // // Route::get('/{face}', 'ShowController')->name('customer.show');
        Route::get('/{face}/edit', 'EditController')->name('customer.edit');
        Route::patch('/{face}', 'UpdateController')->name('customer.update');
        // Route::delete('/{face}', 'DeleteController')->name('customer.delete');

        Route::group(['namespace' => 'Category', 'prefix' => 'categories'], function(){
            Route::get('/', function() {return view('zADMIN.PAGE.Customer.CATEGORY');})->name('customer.category.index');
        });
        Route::group(['namespace' => 'Discount', 'prefix' => 'discounts'], function(){
            Route::get('/', function() {return view('zADMIN.PAGE.Customer.DISCOUNT');})->name('customer.discount.index');
        });
    });


	Route::group(['namespace' => 'Face', 'prefix' => 'faces'], function(){
		// Route::get('/', 'IndexController')->name('face.index');
		// Route::get('/create', 'CreateController')->name('face.create');
		// Route::post('/', 'StoreController' )->name('face.store');
		// // Route::get('/{face}', 'ShowController')->name('face.show');
		// Route::get('/{face}/edit', 'EditController')->name('face.edit');
		// Route::patch('/{face}', 'UpdateController')->name('face.update');
		Route::delete('/{face}', 'DeleteController')->name('face.delete');
	});








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




    Route::group(['namespace' => '_sherpa', 'prefix' => 'sherpa'], function(){


        Route::group(['namespace' => 'Excel', 'prefix' => 'excel'], function(){

            Route::get('/', 'IndexController')->name('sherpa.excel.index');
            Route::get('/export', 'ExportController')->name('sherpa.excel.export');
            // Route::get('/', [App\Http\Controllers\ADMIN\sherpa\Excel\IndexController::class, 'index'])->name('admin.sherpa.excel.index');
            // Route::get('/export', [App\Http\Controllers\ADMIN\sherpa\Excel\export::class, 'index'])->name('admin.sherpa.excel.export');


        });


    });

});


 
 



// Route::group(['namespace' => 'ADMIN', 'prefix' => 'admin', 'middleware' => ['auth','admin']], function () {
    
//     Route::get('/', function () {
//         return view('zADMIN.Morda');
//     })->name('admin.morda');


// });


 

 


    

    // Route::group(['namespace' => 'postman', 'prefix' => 'postman'], function(){
        
    //     Route::get('/', 'IndexController')->name('admin.postman.index');

	// 	Route::group(['namespace' => 'Post', 'prefix' => 'post'], function(){
	// 		Route::get('/', 'IndexController')->name('admin.postman.post.index');
	// 		Route::get('/{postmanItem}/edit', 'EditController')->name('admin.postman.post.edit');
	// 		Route::patch('/{postmanItem}', 'UpdateController')->name('admin.postman.post.update');
	// 		Route::delete('/{postmanItem}', 'DeleteController')->name('admin.postman.commentpost.delete');		
	// 	});

	// 	Route::group(['namespace' => 'Paper', 'prefix' => 'paper'], function(){
	// 		Route::get('/', 'IndexController')->name('admin.postman.paper.index');
	// 		Route::get('/{postmanItem}/edit', 'EditController')->name('admin.postman.paper.edit');
	// 		Route::patch('/{postmanItem}', 'UpdateController')->name('admin.postman.paper.update');
	// 		Route::delete('/{postmanItem}', 'DeleteController')->name('admin.postman.commentpaper.delete');		
	// 	});

	// 	// Route::group(['namespace' => 'Course', 'prefix' => 'course'], function(){
	// 	// 	Route::get('/', 'IndexController')->name('admin.postman.course.index');
	// 	// 	Route::get('/{postmanCourse}/edit', 'EditController')->name('admin.postman.course.edit');
	// 	// 	Route::patch('/{postmanCourse}', 'UpdateController')->name('admin.postman.course.update');
	// 	// 	Route::delete('/{postmanCourse}', 'DeleteController')->name('admin.postman.course.delete');
	// 	// });


    //     // Route::get('/create', 'CreateController')->name('admin.postman.create');
    //     // Route::post('/', 'StoreController')->name('admin.postman.store');
    //     // Route::get('/{post}', 'ShowController')->name('admin.postman.show');
    //     // Route::get('/{sms}/edit', 'EditController')->name('admin.postman.edit');
    //     // Route::patch('/{sms}', 'UpdateController')->name('admin.postman.update');
    //     // Route::delete('/{sms}', 'DeleteController')->name('admin.postman.delete');
    // });




 

 


