<?php

use Illuminate\Support\Facades\Route;

Route::get('/','AppController@home')->name('homepage');
Route::get('/kontakt','AppController@kontakt')->name('kontakte');
Route::post('/kontakt','AppController@postmessage')->name('kontakt.post');

Route::get('/profile/{id}','AppController@profile')->name('profile')->middleware('order');

Route::get('/bestellung','AppController@bestellung')->name('bestellung');

Route::get('/allOrders','AppController@fetchAllData');
Route::get('/finder/{uid}','AppController@finder');
Route::resource('/Bestellung/create','OrderController');

Route::get('/anmeldung','ClientController@login')->name('anmeldung');
Route::post('/anmeldung','ClientController@postdata')->name('anmeldung');
Route::get('/logout','ClientController@logout')->name('logout');
Route::get('/paypal','PaymentController@paymentpaypal')->name('paypal.form');
Route::get('/saydanke','PaymentController@saydanke')->name('saydanke');
Route::get('/cancel','PaymentController@cancel')->name('cancel');

Auth::routes();

Route::middleware(['auth'])->group(function () {
    Route::get('/admin/home','AdminController@home')->name('home');
    Route::get('/admin/users','AdminController@viewuser');
    Route::get('/admin/allUsers','AdminController@allusers');
    Route::post('/admin/users/store','AdminController@store');
    Route::put('/admin/users/update/{id}','AdminController@update');
    Route::resource('/admin/bestellungen','OrderController');
    Route::resource('/admin/uuids','UidTableController');
    Route::get('/admin/paypal','PaymentController@setpaypalamount');
    Route::get('/admin/notifications','AdminController@getAllMessages');
    Route::post('/admin/message/delete/{id}','MessagesController@destroy');
    Route::post('/admin/paypal','PaymentController@postpayment');
});
