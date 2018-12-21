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

Route::get('/test', function(){
    Artisan::call('migrate');
//    Artisan::call('db:seed');
});


Route::get('/', 'IndexController@index')->name('home');
Route::get('login', 'IndexController@formLogin')->name('form_login');
Route::post('login', 'IndexController@login')->name('login');


Route::group(['middleware' => 'auth'], function () {
    Route::get('/top', 'IndexController@top')->name('top');
    Route::get('/logout', 'IndexController@logout')->name('logout');
    Route::post('/download', 'IndexController@download')->name('download');
});

