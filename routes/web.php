<?php

Route::group(['middleware' => 'web'], function () {
    Route::get('/', 'HomeController@index')->name('index');
    Route::get('/menu', 'HomeController@menu')->name('menu');
    Route::get('/contacts', 'HomeController@contacts')->name('contacts');
    Route::get('/gallery', 'HomeController@gallery')->name('gallery');
    Route::get('/chat', 'HomeController@chat')->name('chat');
    Route::post('/auth', '\App\Http\Controllers\Auth\AuthController@custom_auth')->name('custom.auth');
    Route::resource('review', 'ReviewController');
});