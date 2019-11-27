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

//Route::get('/', function () {
//    return view('welcome');
//});

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::get('/contactus', 'contactController@index')->name('contactus');
Route::get('/aboutus', 'HomeController@aboutus')->name('aboutus');

Route::get('/adminhome', 'adminController@index')->name('admin')->middleware('admin');

