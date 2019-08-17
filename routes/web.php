<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('fotograferIndex');
// });

Route::get('/', 'FotograferController@index')->name('fotograferIndex');

Route::get('/register', function () {
    return view('auth.register');
});

Route::get('/login', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Show Fotografer
Route::prefix('fotografer')->group(function() {
    Route::get('/', 'FotograferController@index')->name('fotograferIndex');
  });

// CRUD Biodata Fotografer
Route::prefix('cmsFotografer')->group(function() {
    Route::get('/', 'cmsFotograferController@index')->name('cmsFotograferIndex');
    Route::get('/detail/{id}', 'cmsFotograferController@detail')->name('cmsFotograferDetail');
    Route::post('/create', 'cmsFotograferController@create')->name('cmsFotograferCreate');
    Route::get('/edit/{id}', 'cmsFotograferController@edit')->name('cmsFotograferEdit');
    Route::post('/update', 'cmsFotograferController@update')->name('cmsFotograferUpdate');
    Route::get('/delete/{id}', 'cmsFotograferController@delete')->name('cmsFotograferDelete');
  });
