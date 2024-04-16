<?php

use Illuminate\Support\Facades\Route;


//
//  !!!!!middleware verified не сработал + есть еще в коде этот момент
// ищи по 15031049
Route::group(['namespace' => 'ADMIN','middleware' => ['auth','admin','verified']], function () {
    Route::get('/', function() {return view('zADMIN.Morda');})->name('morda');




 


    
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



 


 
 


    //




 
    
    ////

    Route::group(['namespace' => 'CRM', 'prefix' => 'crm'], function(){

        Route::get('/', function() {return 'crm';})->name('crm.index');


        Route::group(['namespace' => 'Face', 'prefix' => 'faces'], function(){
            Route::get('/', 'IndexController')->name('crm.face.index');
            Route::get('/create', 'CreateController')->name('crm.face.create');
            Route::post('/', 'StoreController')->name('crm.face.store');
            Route::get('/{face}/edit', 'EditController')->name('crm.face.edit');
            Route::patch('/{face}', 'UpdateController')->name('crm.face.update');
            // // Route::get('/trash', 'IndexTrashedController')->name('crm.face.trash');
            // Route::delete('/{face}', 'DeleteController')->name('crm.customer.delete');
        });



        Route::group(['namespace' => 'Customer', 'prefix' => 'customers'], function(){
            Route::get('/', 'IndexController')->name('crm.customer.index');
            // // Route::get('/trash', 'IndexTrashedController')->name('crm.customer.trash');
            Route::get('/create', 'CreateController')->name('crm.customer.create');
            Route::post('/', 'StoreController')->name('crm.customer.store');
            // // // // // Route::get('/{face}', 'ShowController')->name('crm.customer.show');
            Route::get('/{face}/edit', 'EditController')->name('crm.customer.edit');
            Route::patch('/{face}', 'UpdateController')->name('crm.customer.update');
            // Route::delete('/{face}', 'DeleteController')->name('crm.customer.delete');
    
            // Route::group(['namespace' => 'Category', 'prefix' => 'categories'], function(){
            //     Route::get('/', function() {return view('zADMIN.PAGE.Customer.CATEGORY');})->name('customer.category.index');
            // });
            // Route::group(['namespace' => 'Discount', 'prefix' => 'discounts'], function(){
            //     Route::get('/', function() {return view('zADMIN.PAGE.Customer.DISCOUNT');})->name('customer.discount.index');
            // });
        });
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

require __DIR__.'/CRM/web.php';
require __DIR__.'/sherpa/web.php';
 
 



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




 

 


