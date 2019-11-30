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
Route::get('/lomba', 'HomeController@lomba')->name('lomba');
Route::get('/detaillomba/{id}', 'HomeController@detaillomba');
Route::get('/formpendaftaran/{id}', 'HomeController@formpendaftaran');
Route::post('/daftarlomba', 'HomeController@daftarlomba')->name('daftarlomba');
Route::post('/contactus', 'HomeController@contactus')->name('contactus');
Route::get('/addcontactus', 'HomeController@addcontactus')->name('addcontactus');


Route::get('/adminhome', 'adminController@index')->name('admin')->middleware('admin');
route::get('/formlomba', 'adminController@lomba')->name('formlomba');
route::post('/addlomba', 'adminController@store')->name('addlomba');
Route::get('/formupdate/{id}', 'adminController@formupdate');
Route::post('/updatelomba/{id}', 'adminController@update');
Route::get('/deletelomba/{id}', 'adminController@destroy');


