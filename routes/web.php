<?php

use Illuminate\Support\Facades\Route;

Route::get('/','AppController@home')->name('homepage');
Route::get('/kontakt','AppController@kontakt')->name('kontakte');

Route::get('/profile/{id}','AppController@profile')->name('profile');

Route::get('/bestellung','AppController@bestellung')->name('bestellung');

Route::get('/allOrders','AppController@fetchAllData');

Route::resource('/Bestellung/create','OrderController');

Route::get('/anmeldung','AppController@anmeldung')->name('anmeldung');
Route::post('/anmeldung','AppController@anmeldungStore');

Auth::routes();
//Route::get('/admin', 'HomeController@index')->name('home');

Route::middleware(['auth'])->group(function () {
    Route::get('/admin/home','AdminController@home')->name('home');
    Route::get('/admin/users','AdminController@viewuser');
    Route::get('/admin/allUsers','AdminController@allusers');
    Route::post('/admin/users/store','AdminController@store');
    Route::resource('/admin/bestellungen','OrderController');
    Route::resource('/admin/uuids','UidTableController');
});
