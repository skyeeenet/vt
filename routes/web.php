<?php

Route::group(['prefix' => 'admin', 'namespace' => 'Admin'], function () {
   Route::get('/', 'DashboardController@dashboard');
});

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
