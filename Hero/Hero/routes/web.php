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

Route::get('/create', 'App\Http\Controllers\MainController@create')->name('create');

Route::get('/review', 'App\Http\Controllers\MainController@review')->name('review');

Route::get('/review/{id}', 'App\Http\Controllers\MainController@showOneMessage')->name('contact-data-one');

Route::get('/review/{id}/update', 'App\Http\Controllers\MainController@updateMessage')->name('contact-update');

Route::get('/review/{id}/delete', 'App\Http\Controllers\MainController@deleteMessage')->name('contact-delete');

Route::post('/review/{id}/update', 'App\Http\Controllers\MainController@updateMessageSubmit')->name('contact-update-submit');

Route::resource('products', 'App\Http\Controllers\MainController');
