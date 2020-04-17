<?php

use Illuminate\Support\Facades\Route;

Route::get('/','AppController@home')->name('homepage');
Route::get('/kontakt','AppController@kontakt')->name('kontakte');

Route::get('/bestellung','AppController@bestellung')->name('bestellung');
Route::post('/bestellung','AppController@bestellungStore');

Route::get('/anmeldung','AppController@anmeldung')->name('anmeldung');
Route::post('/anmeldung','AppController@anmeldungStore');

Auth::routes();
Route::get('/admin', 'HomeController@index')->name('home');

