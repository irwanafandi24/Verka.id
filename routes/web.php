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

Route::get('/', function () {
    return view('index');
});

Route::get('/register', function () {
    return view('auth.register');
});

Route::get('/login', function () {
    return view('auth.login');
});

Auth::routes();

// Router Login dan Register
Route::get('/login', 'AuthController@login')->name('login');
Route::post('/postlogin', 'AuthController@postlogin')->name('postlogin');
Route::get('/register', 'AuthController@register')->name('register');
Route::post('/postregister', 'AuthController@postregister')->name('postregister');
Route::post('/logout', 'AuthController@logout')->name('logout');

Route::get('/underMaintenance', 'GeneralController@underMaintenance')->name('underMaintenance');

// Show Fotografer
Route::prefix('Photographer')->group(function() {
    Route::get('/', 'PhotographerController@index')->name('PhotographerIndex');
    Route::post('/book', 'PhotographerController@book')->name('PhotographerBook');
  });

// CRUD Biodata Fotografer
Route::prefix('cmsPhotographer')->group(function() {
    Route::get('/', 'cmsPhotographerController@index')->name('cmsPhotographerIndex');
    Route::get('/detail/{id}', 'cmsPhotographerController@detail')->name('cmsPhotographerDetail');
    Route::post('/create', 'cmsPhotographerController@create')->name('cmsPhotographerCreate');
    Route::get('/edit/{id}', 'cmsPhotographerController@edit')->name('cmsPhotographerEdit');
    Route::post('/update', 'cmsPhotographerController@update')->name('cmsPhotographerUpdate');
    Route::get('/delete/{id}', 'cmsPhotographerController@delete')->name('cmsPhotographerDelete');
  });
