<?php

use Illuminate\Support\Facades\Route;

Route::get('/','AppController@home')->name('homepage');
Auth::routes();
Route::get('/admin', 'HomeController@index')->name('home');

