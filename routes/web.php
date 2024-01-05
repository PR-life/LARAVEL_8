<?php

use Illuminate\Support\Facades\Route;
//
// use Illuminate\Support\Facades\App;
//
use App\Http\Controllers\zLaravelController;
use App\Http\Controllers\MY\IndexController as My;
use App\Http\Controllers\Lara\IndexController as Lara;
use App\Http\Controllers\Lara\Js\IndexController as Js;

// App::currentLocale();
// App::setLocale($locale);
// App::isLocale('en');

Route::get('/tornado-v2', [App\Http\Controllers\zTornadoController::class, 'index'])->name('tornado.morda');



 


// Route::post('/asnone/postman/store', [App\Http\Controllers\PostmanController::class, 'store'])->name('postman.store');





// Route::group(['namespace' => 'Imago', 'prefix' => 'imago'], function(){



//     Route::get('/test_2308', [App\Http\Controllers\zImagoController::class, 'test_2308'])->name('var.26081326');



//     Route::get('/', [App\Http\Controllers\zImagoController::class, 'index'])->name('imago.morda');
    Route::get('/my', [App\Http\Controllers\zImagoController::class, 'index'])->name('my.morda');
//     Route::get('/about', [App\Http\Controllers\zImagoController::class, 'about'])->name('imago.about');

//     Route::get('/imprinting', [App\Http\Controllers\zImagoController::class, 'index'])->name('imago.seo.imprinting');

    // Route::get('/equipment', [App\Http\Controllers\zImagoController::class, 'index'])->name('imago.equipment.index');

//     Route::get('/feedback', [App\Http\Controllers\PAGE\Feedback\IndexController::class, 'index'])->name('imago.feedback.index');

//     Route::get('/feedback/news', [App\Http\Controllers\PAGE\Feedback\IndexController::class, 'news'])->name('imago.feedback.news');
//     Route::get('/feedback/reviews', [App\Http\Controllers\PAGE\Feedback\IndexController::class, 'reviews'])->name('imago.feedback.reviews');
//     Route::get('/feedback/sms', [App\Http\Controllers\PAGE\Feedback\IndexController::class, 'reviews'])->name('imago.feedback.sms');
//     Route::get('/feedback/imago', [App\Http\Controllers\PAGE\Feedback\IndexController::class, 'reviews'])->name('imago.feedback.imago');
//     Route::get('/feedback/courses', [App\Http\Controllers\PAGE\Feedback\IndexController::class, 'reviews'])->name('imago.feedback.learning');
//     Route::get('/feedback/{paper}', [App\Http\Controllers\PAGE\Feedback\ShowController::class, 'show'])->name('imago.feedback.show');

//     Route::get('/support/statistics', [App\Http\Controllers\zImagoController::class, 'statistics'])->name('imago.support.statistics');
//     Route::get('/support/faq', [App\Http\Controllers\zImagoController::class, 'faq'])->name('imago.support.faq');
//     Route::get('/support/business', [App\Http\Controllers\zImagoController::class, 'business'])->name('imago.support.business');
    

//     Route::group(['namespace' => 'Contacts', 'prefix' => 'contacts'], function(){
//         Route::get('/', [App\Http\Controllers\zImagoController::class, 'contacts'])->name('imago.contacts');
//         Route::get('/consultants', [App\Http\Controllers\zImagoController::class, 'consultants'])->name('imago.contacts.consultants');
//         Route::get('/distributors', [App\Http\Controllers\zImagoController::class, 'distributors'])->name('imago.contacts.distributors');
//         Route::get('/test-the-device', [App\Http\Controllers\zImagoController::class, 'test'])->name('imago.landing.checkup');
    
//     });


// });

 



Route::group(['namespace' => 'Lara', 'prefix' => 'lara'], function(){

    Route::get('/', [zLaravelController::class, 'index'])->name('morda');




    Route::group(['prefix' => 'posts'], function(){
        Route::get('/posts', [zLaravelController::class, 'posts'])->name('lara.posts');
    
        // Route::group(['prefix' => '{category}'], function(){
        //     Route::get('/', [zLaravelController::class, 'category'])->name('lara.category.index');
        // });
    });


    // Route::group(['namespace' => 'Main'], function(){
    //     Route::group(['namespace' => 'Post', 'prefix' => 'posts'], function(){
    
    //         Route::get('/', 'IndexController')->name('post.index');
    //         Route::get('/{post}', 'ShowController')->name('post.show');
    
    //         Route::group(['namespace' => 'Comment', 'prefix' => '{post}/comments'], function(){
    //             Route::post('/', 'StoreController')->name('post.comment.store');
    //         });
    
    //         Route::group(['namespace' => 'Like', 'prefix' => '{post}/likes'], function(){
    //             Route::post('/', 'StoreController')->name('post.like.store');
    //         });
    //     });
    // });



    // Route::group(['namespace' => 'Category', 'prefix' => 'categories'], function(){
    Route::group(['prefix' => 'categories'], function(){
        Route::get('/categories', [zLaravelController::class, 'categories'])->name('lara.categories');
    
        Route::group(['prefix' => '{category}'], function(){
        // Route::group(['namespace' => 'Post', 'prefix' => '{category}'], function(){
            Route::get('/', [zLaravelController::class, 'category'])->name('lara.category.index');
        });
    });









    Route::group(['namespace' => 'File', 'prefix' => 'file'], function(){
        Route::get('/', function () {return view('zLara.PAGE.file.Morda');})->name('lara.file.index');
        Route::get('/foto', [Lara::class, 'foto'])->name('lara.file.foto');
        Route::get('/video', [Lara::class, 'video'])->name('lara.file.video');
    });



    Route::group(['namespace' => 'Sandbox', 'prefix' => 'sandbox'], function(){


        Route::group(['namespace' => 'Html', 'prefix' => 'html'], function(){
            Route::get('/', function () {return view('zLara.PAGE.sandbox.html.Morda');})->name('lara.sandbox.html.index');
            Route::get('/nav', function () {return view('zLara.PAGE.sandbox.html.nav');})->name('lara.sandbox.html.nav');
            Route::get('/manager', function () {return view('zLara.PAGE.sandbox.html.manager');})->name('lara.sandbox.html.manager');
            Route::get('/btn', function () {return view('zLara.PAGE.sandbox.html.btn');})->name('lara.sandbox.html.btn');
            Route::get('/popup', function () {return view('zLara.PAGE.sandbox.html.popup');})->name('lara.sandbox.html.popup');
            Route::get('/an', function () {return view('zLara.PAGE.sandbox.html.an');})->name('lara.sandbox.html.an');
            Route::get('/bg', function () {return view('zLara.PAGE.sandbox.html.bg');})->name('lara.sandbox.html.bg');
            Route::get('/bgtext', function () {return view('zLara.PAGE.sandbox.html.bgtext');})->name('lara.sandbox.html.bgtext');
            Route::get('/bgan', function () {return view('zLara.PAGE.sandbox.html.bgan');})->name('lara.sandbox.html.bgan');
            Route::get('/shadow', function () {return view('zLara.PAGE.sandbox.html.shadow');})->name('lara.sandbox.html.shadow');
            Route::get('/svg', function () {return view('zLara.PAGE.sandbox.html.svg');})->name('lara.sandbox.html.svg');
            Route::get('/ico', function () {return view('zLara.PAGE.sandbox.html.ico');})->name('lara.sandbox.html.ico');
        });

        Route::group(['namespace' => 'Text', 'prefix' => 'text'], function(){
            Route::get('/', function () {return view('zLara.PAGE.sandbox.text.Morda');})->name('lara.sandbox.text.index');
            Route::get('/font', function () {return view('zLara.PAGE.sandbox.text.font');})->name('lara.sandbox.text.font');
            Route::get('/formcomponent', function () {return view('zLara.PAGE.sandbox.text.Form');})->name('lara.sandbox.text.formcomponent');
            Route::get('/dl', function () {return view('zLara.PAGE.sandbox.text.dl');})->name('lara.sandbox.text.dl');
            Route::get('/details', function () {return view('zLara.PAGE.sandbox.text.details');})->name('lara.sandbox.text.details');
            Route::get('/citation', function () {return view('zLara.PAGE.sandbox.text.citation');})->name('lara.sandbox.text.citation');
            Route::get('/info', function () {return view('zLara.PAGE.sandbox.text.info');})->name('lara.sandbox.text.info');
            Route::get('/table', function () {return view('zLara.PAGE.sandbox.text.table');})->name('lara.sandbox.text.table');
            Route::get('/form', function () {return view('zLara.PAGE.sandbox.text.form');})->name('lara.sandbox.text.form');
        });



    });





    Route::group(['namespace' => 'Lib', 'prefix' => 'lib'], function(){



        Route::group(['namespace' => 'Outside', 'prefix' => 'outside'], function(){
            Route::get('/', function () {return view('zLara.PAGE.lib.outside.Morda');})->name('lara.lib.outside.index');
            Route::get('/map', function () {return view('zLara.PAGE.lib.outside.map');})->name('lara.lib.outside.map');
        });




        Route::group(['namespace' => 'HangJs', 'prefix' => 'hangjs'], function(){
            Route::get('/', function () {return view('zLara.PAGE.lib.hang.Js.Morda');})->name('lara.lib.hangjs.index');
            Route::get('/menufield', function () {return view('zLara.PAGE.lib.hang.Js.menufield');})->name('lara.lib.hangjs.menufield');
            Route::get('/sapfir', function () {return view('zLara.PAGE.lib.hang.Js.sapfir');})->name('lara.lib.hangjs.sapfir');
        });



        Route::group(['namespace' => 'Hang', 'prefix' => 'hang'], function(){
            Route::get('/', function () {return view('zLara.PAGE.lib.hang.Morda');})->name('lara.lib.hang.index');
            Route::get('/fluid', function () {return view('zLara.PAGE.lib.hang.fluid');})->name('lara.lib.hang.fluid');
            Route::get('/post', function () {return view('zLara.PAGE.lib.hang.post');})->name('lara.lib.hang.post');
            Route::get('/poster', function () {return view('zLara.PAGE.lib.hang.poster');})->name('lara.lib.hang.poster');
            Route::get('/noise', function () {return view('zLara.PAGE.lib.hang.noise');})->name('lara.lib.hang.noise');
        });


        Route::group(['namespace' => 'Deep', 'prefix' => 'deep'], function(){
            Route::get('/', function () {return view('zLara.PAGE.lib.deep.Morda');})->name('lara.lib.deep.index');
            Route::get('/chat', function () {return view('zLara.PAGE.lib.deep.chat');})->name('lara.lib.deep.chat');
            Route::get('/chatFlaber', function () {return view('zLara.PAGE.lib.deep.chatFlaber');})->name('lara.lib.deep.chatFlaber');
        });

        Route::group(['namespace' => 'Skeleton', 'prefix' => 'skeleton'], function(){
            Route::get('/', function () {return view('zLara.PAGE.lib.skeleton.Morda');})->name('lara.lib.skeleton.index');
            Route::get('/boxes', function () {return view('zLara.PAGE.lib.skeleton.boxes');})->name('lara.lib.skeleton.boxes');
            Route::get('/space', function () {return view('zLara.PAGE.lib.skeleton.space');})->name('lara.lib.skeleton.space');
        });
	});


    Route::group(['namespace' => 'Shema', 'prefix' => 'shema'], function(){

        Route::get('/', function () {return view('zLara.PAGE.lib.skeleton.shema.def');})->name('shema.def');
        Route::get('/category', function () {return view('zLara.PAGE.lib.skeleton.shema.category');})->name('shema.category');
        Route::get('/aside', function () {return view('zLara.PAGE.lib.skeleton.shema.aside');})->name('shema.aside');
        Route::get('/flaber', function () {return view('zLara.PAGE.lib.skeleton.shema.flaber');})->name('shema.flaber');
        Route::get('/asideflaber', function () {return view('zLara.PAGE.lib.skeleton.shema.asideFlaber');})->name('shema.asideflaber');


    
    });


    Route::group(['namespace' => 'Js', 'prefix' => 'js'], function(){

        Route::get('/', [Js::class, 'morda'])->name('js.morda');

        Route::group(['namespace' => 'Lavrik', 'prefix' => 'lavrik'], function(){
            Route::get('/', function () {return view('zLara.PAGE.JS.Lavrik.Morda');})->name('js.lavrik.morda');
            Route::get('/calculator', function () {return view('zLara.PAGE.JS.Lavrik.calculator');})->name('js.lavrik.calculator');
        });
    
        // Route::group(['namespace' => 'Test', 'prefix' => 'test'], function(){
        //     Route::get('/src', function () {return view('zLara.PAGE.JS.Test.src');})->name('js.test.src');
        // });


    });

});


//
//
 

Route::group(['namespace' => 'Form', 'prefix' => 'form'], function(){


    Route::get('/map', [App\Http\Controllers\zImagoController::class, 'form_map'])->name('form.imago.map');
    // Route::post('/map', [App\Http\Controllers\SmsController::class, 'store'])->name('sms.store');
    // Route::post('/asnone/sms/ask', [App\Http\Controllers\SmsController::class, 'ask'])->name('sms.ask');
    // Route::get('/asnone/sms/manager', [App\Http\Controllers\SmsController::class, 'manager'])->name('sms.manager');
    

});

Route::post('/asnone/sms/store', [App\Http\Controllers\SmsController::class, 'store'])->name('sms.store');
Route::post('/asnone/sms/ask', [App\Http\Controllers\SmsController::class, 'ask'])->name('sms.ask');

Route::get('/asnone/sms/manager', [App\Http\Controllers\SmsController::class, 'manager'])->name('sms.manager');

// Route::patch('/asnone/sms/update', [App\Http\Controllers\SmsController::class, 'update'])->name('sms.update');
Route::post('/asnone/sms/update', [App\Http\Controllers\SmsController::class, 'update'])->name('sms.update');



Route::get('/fz-152', function () {
    return view('z.Fz');
})->name('fz');

Auth::routes();
//
//
Route::get('/asnone/clear', function () {
    Artisan::call('cache:clear');
    Artisan::call('config:cache');
    Artisan::call('view:clear');
    Artisan::call('route:clear');
 
    return "Кэш очищен.";
});



