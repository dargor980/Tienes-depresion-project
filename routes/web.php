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



Route::get('/','PagesController@index')->name('home');


Route::get('/proyecto','PagesController@proyecto')->name('proyecto');

Route::get('/galeria','PagesController@galeria')->name('galeria');

Route::get('/contacto','PagesController@contacto')->name('contacto');