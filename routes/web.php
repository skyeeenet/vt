<?php

Route::group(['prefix' => 'admin', 'namespace' => 'Admin', 'middleware' => 'auth'], function () {
   Route::get('/', 'DashboardController@dashboard')->name('admin.index');

   Route::get('/header/text', 'Header\HeaderTextController@index')->name('admin.header.text');
   Route::post('/header/text', 'Header\HeaderTextController@update')->name('admin.header.text.update');

   Route::get('/header/menu', 'Header\HeaderMenuController@index')->name('admin.header.menu');
   Route::post('/header/menu/create', 'Header\HeaderMenuController@create')->name('admin.header.menu.create');
   Route::post('/header/menu/destroy/{menu}', 'Header\HeaderMenuController@destroy')->name('admin.header.menu.destroy');
   Route::post('/header/menu/update/{menu}', 'Header\HeaderMenuController@update')->name('admin.header.menu.update');

   Route::get('/header/submenu/{menu}', 'Header\SubmenuController@show')->name('admin.header.submenu.update');
   Route::post('/header/submenu/create/{menu}','Header\SubmenuController@store');
   Route::post('/header/submenu/delete/{submenu}','Header\SubmenuController@destroy');
   Route::post('/header/submenu/update/{submenu}','Header\SubmenuController@update');
   Route::get('/header/submenu/update/{submenu}', 'Header\SubmenuController@showPageUpdate');

   Route::group(['prefix' => 'content'], function () {

       Route::group(['prefix' => 'images'], function () {

           Route::get('/', 'Content\ImageController@index')->name('admin.content.images');
           Route::post('/create', 'Content\ImageController@store')->name('admin.content.images.create');
           Route::post('/delete/{image}', 'Content\ImageController@destroy');
       });

       Route::group(['prefix' => 'upper-slider'], function() {

           Route::get('/', 'Content\UpperSliderController@index')->name('admin.content.upper-slider');
           Route::post('/create', 'Content\UpperSliderController@store')->name('admin.content.upper-slider.create');
           Route::post('/delete/{upper}', 'Content\UpperSliderController@destroy');
           Route::post('/update/{upper}', 'Content\UpperSliderController@update');
           Route::get('/edit/{upper}', 'Content\UpperSliderController@edit');
       });

       Route::group(['prefix' => 'adverts'], function () {

           Route::get('/', 'Content\AdvertController@index')->name('admin.content.adverts');
           Route::post('/create', 'Content\AdvertController@store')->name('admin.content.adverts.create');
           Route::post('/delete/{advert}', 'Content\AdvertController@destroy');
           Route::get('/edit/{advert}', 'Content\AdvertController@edit');
           Route::post('/update/{advert}', 'Content\AdvertController@update');
       });

   });

});

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
