<?php

// use Illuminate\Support\Facades\Route;
//

Route::get('/', [App\Http\Controllers\JJ\IndexController::class, 'morda'])->name('morda');



Route::group(['namespace' => 'Js', 'prefix' => 'js'], function(){

   Route::get('/', [App\Http\Controllers\JJ\Js\IndexController::class, 'morda'])->name('js.morda');
   Route::get('/src', [App\Http\Controllers\JJ\Js\IndexController::class, 'src'])->name('js.src');
   Route::get('/sapfir', [App\Http\Controllers\JJ\Js\IndexController::class, 'sapfir'])->name('js.sapfir');

   //
   Route::get('/menufield', function () {return view('zJJ.zJS.solo.menufield');})->name('js.solo.menufield');
   // Route::group(['namespace' => 'Lavrik', 'prefix' => 'lavrik'], function(){
   //     Route::get('/', function () {return view('zLara.PAGE.JS.Lavrik.Morda');})->name('js.lavrik.morda');
   //     Route::get('/calculator', function () {return view('zLara.PAGE.JS.Lavrik.calculator');})->name('js.lavrik.calculator');
   // });

   // Route::group(['namespace' => 'Test', 'prefix' => 'test'], function(){
   //     Route::get('/src', function () {return view('zLara.PAGE.JS.Test.src');})->name('js.test.src');
   // });


});




Route::group(['prefix' => 'hang'], function(){
   Route::get('/', function () {return view('zJJ.PAGE.hang.index');})->name('hang.index');
   Route::get('/opportunities', function () {return view('zJJ.PAGE.hang.opportunities');})->name('hang.opportunities');
   Route::get('/audio', function () {return view('zJJ.PAGE.hang.audio');})->name('hang.audio');
   // Route::get('/fluid', function () {return view('zJJ.PAGE.deep.fluid');})->name('deep.fluid');
   // Route::get('/post', function () {return view('zJJ.PAGE.deep.post');})->name('deep.post');
   // Route::get('/poster', function () {return view('zJJ.PAGE.deep.poster');})->name('deep.poster');
   // Route::get('/wrap', function () {return view('zJJ.PAGE.deep.wrap');})->name('deep.wrap');
});



Route::group(['prefix' => 'deep'], function(){
   Route::get('/', function () {return view('zJJ.PAGE.deep.index');})->name('deep.index');
   Route::get('/chat', function () {return view('zJJ.PAGE.deep.chat');})->name('deep.chat');
   Route::get('/fluid', function () {return view('zJJ.PAGE.deep.fluid');})->name('deep.fluid');
   Route::get('/post', function () {return view('zJJ.PAGE.deep.post');})->name('deep.post');
   Route::get('/poster', function () {return view('zJJ.PAGE.deep.poster');})->name('deep.poster');
   Route::get('/wrap', function () {return view('zJJ.PAGE.deep.wrap');})->name('deep.wrap');
});

Route::group(['prefix' => 'file'], function(){
   Route::get('/', function () {return view('zJJ.PAGE.file.index');})->name('file.index');
   Route::get('/foto', [App\Http\Controllers\JJ\srcController::class, 'foto'])->name('file.foto');
   Route::get('/video', [App\Http\Controllers\JJ\srcController::class, 'video'])->name('file.video');

});

Route::group(['namespace' => 'Html', 'prefix' => 'html'], function(){

   Route::get('/', function () {return view('zJJ.PAGE.html.index');})->name('html.index');

   Route::group(['prefix'=>'sandbox'], function(){
      Route::get('/', function () {return view('zJJ.PAGE._sandbox.html.index');})->name('html.sandbox.index');
   });

   Route::group(['prefix'=>'nav'], function(){
      Route::get('/', function () {return view('zJJ.PAGE.html.nav.index');})->name('html.nav.index');
   });

   Route::group(['prefix'=>'manager'], function(){
      Route::get('/', function () {return view('zJJ.PAGE.html.manager.index');})->name('html.manager.index');
   });

   Route::group(['prefix'=>'btn'], function(){
      Route::get('/', function () {return view('zJJ.PAGE.html.btn.index');})->name('html.btn.index');
   });

   Route::group(['prefix'=>'an'], function(){
      Route::get('/', function () {return view('zJJ.PAGE.html.an.index');})->name('html.an.index');
   });

   Route::group(['prefix'=>'bg'], function(){
      Route::get('/', function () {return view('zJJ.PAGE.html.bg.index');})->name('html.bg.index');
      Route::get('/text', function () {return view('zJJ.PAGE.html.bg.text');})->name('html.bg.text');
      Route::get('/an', function () {return view('zJJ.PAGE.html.bg.an');})->name('html.bg.an');
      Route::get('/noise', function () {return view('zJJ.PAGE.html.bg.noise');})->name('html.bg.noise');
   });

   Route::group(['prefix'=>'svg'], function(){
      Route::get('/', function () {return view('zJJ.PAGE.html.svg.index');})->name('html.svg.index');
      Route::get('/ico', function () {return view('zJJ.PAGE.html.svg.ico');})->name('html.svg.ico');
   });


      //   Route::get('/nav', function () {return view('zLara.PAGE.sandbox.html.nav');})->name('lara.sandbox.html.nav');
   //         Route::get('/manager', function () {return view('zLara.PAGE.sandbox.html.manager');})->name('lara.sandbox.html.manager');
   //         Route::get('/btn', function () {return view('zLara.PAGE.sandbox.html.btn');})->name('lara.sandbox.html.btn');
   //         Route::get('/popup', function () {return view('zLara.PAGE.sandbox.html.popup');})->name('lara.sandbox.html.popup');
   //         Route::get('/an', function () {return view('zLara.PAGE.sandbox.html.an');})->name('lara.sandbox.html.an');
   //         Route::get('/bg', function () {return view('zLara.PAGE.sandbox.html.bg');})->name('lara.sandbox.html.bg');
   //         Route::get('/bgtext', function () {return view('zLara.PAGE.sandbox.html.bgtext');})->name('lara.sandbox.html.bgtext');
   //         Route::get('/bgan', function () {return view('zLara.PAGE.sandbox.html.bgan');})->name('lara.sandbox.html.bgan');
   //         Route::get('/shadow', function () {return view('zLara.PAGE.sandbox.html.shadow');})->name('lara.sandbox.html.shadow');
   //         Route::get('/svg', function () {return view('zLara.PAGE.sandbox.html.svg');})->name('lara.sandbox.html.svg');
   //         Route::get('/ico', function () {return view('zLara.PAGE.sandbox.html.ico');})->name('lara.sandbox.html.ico');


});

Route::group(['namespace' => 'Text', 'prefix' => 'text'], function(){
    Route::get('/', function () {return view('zJJ.PAGE.text.index');})->name('text.index');
    Route::get('/select', function () {return view('zJJ.PAGE.text.select');})->name('text.select');
    Route::get('/font', function () {return view('zJJ.PAGE.text.Font');})->name('text.font');
    Route::get('/form', function () {return view('zJJ.PAGE.text.form');})->name('text.form');
    Route::get('/dl', function () {return view('zJJ.PAGE.text.dl');})->name('text.dl');
    Route::get('/details', function () {return view('zJJ.PAGE.text.details');})->name('text.details');
    Route::get('/citation', function () {return view('zJJ.PAGE.text.citation');})->name('text.citation');
    Route::get('/info', function () {return view('zJJ.PAGE.text.info');})->name('text.info');
    Route::get('/table', function () {return view('zJJ.PAGE.text.table');})->name('text.table');
});

Route::group(['namespace' => 'Dali', 'prefix' => 'dali'], function(){
   Route::get('/', function () {return view('zJJ.PAGE.dali.index');})->name('dali.index');
   Route::get('/shadow', function () {return view('zJJ.PAGE.dali.shadow');})->name('dali.shadow');
   Route::get('/yandexmap', function () {return view('zJJ.PAGE.dali.yandexmap');})->name('dali.yandexmap');
});

Route::group(['prefix' => 'shema'], function(){

    Route::get('/', function () {return view('zJJ.PAGE.Shema.index');})->name('shema.index');
    Route::get('/flaber', function () {return view('zJJ.PAGE.Shema.flaber');})->name('shema.flaber');

    Route::get('/category', function () {return view('zJJ.PAGE.Shema.category');})->name('shema.category');
   //  Route::get('/aside', function () {return view('zJJ.PAGE.Shema.aside');})->name('shema.aside');
   //  Route::get('/flaber', function () {return view('zJJ.PAGE.Shema.flaber');})->name('shema.flaber');
   //  Route::get('/asideflaber', function () {return view('zJJ.PAGE.Shema.asideFlaber');})->name('shema.asideflaber');



});

Route::group(['prefix' => 'skeleton'], function(){
   Route::get('/', function () {return view('zJJ.PAGE.skeleton.index');})->name('skeleton.index');
   Route::get('/boxes', function () {return view('zJJ.PAGE.skeleton.boxes');})->name('skeleton.boxes');
   Route::get('/space', function () {return view('zJJ.PAGE.skeleton.space');})->name('skeleton.space');
});






// Route::group(['namespace' => 'Lib', 'prefix' => 'lib'], function(){



//     Route::group(['namespace' => 'Outside', 'prefix' => 'outside'], function(){
//         Route::get('/', function () {return view('zLara.PAGE.lib.outside.Morda');})->name('lara.lib.outside.index');
//         Route::get('/map', function () {return view('zLara.PAGE.lib.outside.map');})->name('lara.lib.outside.map');
//     });




//     Route::group(['namespace' => 'HangJs', 'prefix' => 'hangjs'], function(){
//         Route::get('/', function () {return view('zLara.PAGE.lib.hang.Js.Morda');})->name('lara.lib.hangjs.index');
//         Route::get('/menufield', function () {return view('zLara.PAGE.lib.hang.Js.menufield');})->name('lara.lib.hangjs.menufield');
//         Route::get('/sapfir', function () {return view('zLara.PAGE.lib.hang.Js.sapfir');})->name('lara.lib.hangjs.sapfir');
//     });



//     Route::group(['namespace' => 'Hang', 'prefix' => 'hang'], function(){
//         Route::get('/', function () {return view('zLara.PAGE.lib.hang.Morda');})->name('lara.lib.hang.index');
//         Route::get('/fluid', function () {return view('zLara.PAGE.lib.hang.fluid');})->name('lara.lib.hang.fluid');
//         Route::get('/post', function () {return view('zLara.PAGE.lib.hang.post');})->name('lara.lib.hang.post');
//         Route::get('/poster', function () {return view('zLara.PAGE.lib.hang.poster');})->name('lara.lib.hang.poster');
//         Route::get('/noise', function () {return view('zLara.PAGE.lib.hang.noise');})->name('lara.lib.hang.noise');
//     });


// });


