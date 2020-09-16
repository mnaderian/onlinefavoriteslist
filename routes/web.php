<?php

Route::get('/', 'HomeController@index')->name('home');

Route::redirect('/home', '/');

Route::post('/add', 'FavoriteController@store')->name('favorite.store');

Auth::routes();
