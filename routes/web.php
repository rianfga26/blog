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

Route::get('/Completed' , 'Home@completed');
Route::get('/' , 'Home@home');
Route::get('/tentang-kami' , 'Home@about');
Route::get('/hubungi-kami' , 'Home@contact');
Route::get('/News' , 'Home@news');
Route::get('/cari' , 'Home@search');
Route::get('/kategori/{nama}' , 'Home@kategori');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/article/{slug}', 'Posts@show');

Route::get('/admin/post-coming-soon', 'ComingSoon@index');
Route::get('/admin/com/del/{id}', 'ComingSoon@destroy');
Route::get('/admin/post', 'HomeController@post');
Route::get('/admin/post/del/{id}', 'HomeController@postdel');
Route::get('/admin/catagory', 'HomeController@catagory');
Route::get('/admin/post/up/{id}', 'Posts@edit');
Route::get('/admin/com/up/{id}', 'ComingSoon@edit');


Route::post('/admin/post-coming-soon', 'ComingSoon@store');
Route::post('/admin/catagory', 'Home@store');
Route::post('/admin/post/update/{id}', 'Posts@update');
Route::post('/admin/post', 'Posts@store');
Route::post('/admin/com/update/{id}', 'ComingSoon@update');


