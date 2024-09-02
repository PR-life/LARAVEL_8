<?php

use Illuminate\Support\Facades\Route;
//
use App\Http\Controllers\xAsgruppController as Asgrupp;
use App\Http\Controllers\xKovkaController as Kovka;


Route::group(['namespace' => 'Kovka'], function(){

 
    Route::group(['prefix' => 'kovka'], function(){
        Route::get('/', [Kovka::class, 'morda'])->name('kovka.morda');
        Route::get('/arhitektyrnye-elementy', [Kovka::class, 'kae'])->name('kovka.kae');
        Route::get('/izdeliya-dlya-doma', [Kovka::class, 'kidd'])->name('kovka.kidd');
    });

    Route::group(['prefix' => 'kovanye-vorota'], function(){
        Route::get('/', [Kovka::class, 'kovkaVorotaAll'])->name('kovkaVorota.all');
        Route::get('/about', [Kovka::class, 'kovkaVorota'])->name('kovkaVorota.main');
        Route::get('/{item}', [Asgrupp::class, 'showItem'])->name('kovkaVorota.show');
    });

    Route::group(['prefix' => 'kovanye-zabory'], function(){
        Route::get('/', [Kovka::class, 'kovkaZaboraAll'])->name('kovkaZabor.all');
        Route::get('/about', [Kovka::class, 'kovkaZabor'])->name('kovkaZabor.main');
        Route::get('/{item}', [Asgrupp::class, 'showItem'])->name('kovkaZabor.show');
    });
    Route::group(['prefix' => 'kovanye-kozyrki'], function(){
        Route::get('/', [Kovka::class, 'kovkaKozyrkiAll'])->name('kovkaKozyrki.all');
        Route::get('/about', [Kovka::class, 'kovkaKozyrki'])->name('kovkaKozyrki.main');
        Route::get('/{item}', [Asgrupp::class, 'showItem'])->name('kovkaKozyrki.show');
    });
    Route::group(['prefix' => 'kovanye-perila'], function(){
        Route::get('/', [Kovka::class, 'kovkaPerilaAll'])->name('kovkaPerila.all');
        Route::get('/about', [Kovka::class, 'kovkaPerila'])->name('kovkaPerila.main');
        Route::get('/{item}', [Asgrupp::class, 'showItem'])->name('kovkaPerila.show');
    });
    Route::group(['prefix' => 'kovanye-reshetki'], function(){
        Route::get('/', [Kovka::class, 'kovkaReshetkiAll'])->name('kovkaReshetki.all');
        Route::get('/about', [Kovka::class, 'kovkaReshetki'])->name('kovkaReshetki.main');
        Route::get('/{item}', [Asgrupp::class, 'showItem'])->name('kovkaPerila.show');
    });



    Route::group(['prefix' => '/kovanaya-mebel'], function(){
        Route::get('/', [Kovka::class, 'kovkaMebelAll'])->name('kovkaMebel.all');
        // Route::get('/about', [Kovka::class, 'kovkaReshetki'])->name('kovkaReshetki.main');
        // kovanoe-dlya-kamina
        // kovanaya-krovat
        // kovanye-stoly-stulya
        // kovanye-lyustry
        // kovanye-divany
        // /kovanye-polki
        // kovanye-podstavki-dlya-zontov
        // kovanye-podsvechniki
        // panno
        Route::get('/{item}', [Asgrupp::class, 'showItem'])->name('kovkaPerila.show');
    });

});


// Route::get('/kovanye-izdeliya', [App\Http\Controllers\zAsgrupp\IndexController::class, 'kovanye-izdeliya'])->name('ki');
 