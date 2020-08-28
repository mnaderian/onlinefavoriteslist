<?php

Route::get('/', 'HomeController@index')->name('home');

Route::redirect('/home', '/');

Auth::routes();
