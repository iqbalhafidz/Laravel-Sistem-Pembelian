<?php

use Illuminate\Support\Facades\Route;

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

// //contoh dari aang 
// Route::get('/','FrontController@index');
// Route::get('about','FrontController@about');
// Auth::routes();

// // Route::get('/home', 'HomeController@index')->name('home');
// Route::group(['middleware' => ['auth']], function () {
//     Route::get('/home','HomeController@index');
//     Route::resource('aboutme','AboutController');
//     Route::resource('info','InfoController');

// //end dari aang

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/','FrontController@index');
Route::get('about','FrontController@about');
Auth::routes();

// // sebelum di middleware atau login
// Route::get('/home', 'HomeController@index')->name('home');
// Route::resource('product','ProductController');
// Route::resource('info','InfoController');
// Route::resource('testi','TestimoniController');


Route::group(['middleware' => ['auth']], function() {
    Route::get('/home', 'HomeController@index')->name('home');
    Route::resource('product','ProductController');
    Route::resource('info','InfoController');
    Route::resource('testi','TestimoniController');
    Route::resource('unggul','KeunggulanController');
    Route::resource('transfer','TransferController');

});





// //al falah

// Route::get('/','FrontController@index');
// Route::get('about','FrontController@about');
// Auth::routes();

// // Route::get('/home', 'HomeController@index')->name('home');
// Route::group(['middleware' => ['auth']], function () {
//     Route::get('/home','HomeController@index');
//     Route::resource('aboutme','AboutController');
//     Route::resource('info','InfoController');
// });
