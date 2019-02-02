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

Route::get('/beranda', function (){
    return view('beranda');
});

Route::get('/profile', function(){
    return view('profile');
});

Route::get('/portofolio', function(){
    return view('portofolio');
});

Route::get('/article',function(){
    return view('article');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
