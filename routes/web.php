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

Route::get('login', function () {
    return view('login');
});

Route::resource('guest', 'barangsController');

Route::get('/guest', 'barangsController@userbarang')->name('guest');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('posts', 'PostsController');

Route::resource('barangs', 'barangsController');

Route::get('/barangs', 'barangsController@index')->name('barang');

Route::get('/barangs.userbarang', 'barangsController@userbarang')->name('userbarang');