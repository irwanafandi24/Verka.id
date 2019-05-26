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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/register', function () {
    return view('auth.register');
});

Route::get('/login', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// CRUD Biodata Fotografer
Route::prefix('cmsFotografer')->group(function() {
    Route::get('/', 'FotograferController@index')->name('fotograferIndex');
    Route::get('/detail/{id}', 'FotograferController@detail')->name('fotograferDetail');
    Route::post('/create', 'FotograferController@create')->name('fotograferCreate');
    Route::get('/edit/{id}', 'FotograferController@edit')->name('fotograferEdit');
    Route::post('/update', 'FotograferController@update')->name('fotograferUpdate');
    Route::get('/delete/{id}', 'FotograferController@delete')->name('fotograferDelete');
  });
