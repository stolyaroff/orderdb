<?php

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/order', function () {
    return view('order');
})->name('order');

Route::get('/', 'OrderController@orderList')->name('home');

Route::post('/order/submitOrder', 'OrderController@submitOrder')->name('order-form');
Route::get('/', 'OrderController@orderList')->name('home');
Route::get('/order/all/{id}', 'OrderController@orderItem')->name('order-item');
Route::get('/order/all/{id}/update', 'OrderController@orderUpdate')->name('order-update');
Route::post('/order/all/{id}/update', 'OrderController@orderUpdateSubmit')->name('order-update-submit');
Route::get('/order/all/{id}/delete', 'OrderController@orderDelete')->name('order-delete');

