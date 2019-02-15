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

       Route::group(['prefix' => 'slider'], function() {

           Route::get('/', 'Content\SliderController@index')->name('admin.content.slider');
           Route::get('/create', 'Content\SliderController@create')->name('admin.content.slider.create');
           Route::get('/edit/{slider}', 'Content\SliderController@edit');
           Route::post('/store', 'Content\SliderController@store')->name('admin.content.slider.store');
           Route::post('/update/{slider}', 'Content\SliderController@update');
           Route::post('/delete/{slider}', 'Content\SliderController@destroy');
       });

       Route::group(['prefix' => 'slider_image'], function () {

           Route::get('/edit/{slider_Image}', 'Content\SliderImageController@edit');
           Route::post('/delete/{slider_Image}', 'Content\SliderImageController@destroy');
           Route::post('/update/{slider_Image}', 'Content\SliderImageController@update');
       });

       Route::group(['prefix' => 'adverts'], function () {

           Route::get('/', 'Content\AdvertController@index')->name('admin.content.adverts');
           Route::post('/create', 'Content\AdvertController@store')->name('admin.content.adverts.create');
           Route::post('/delete/{advert}', 'Content\AdvertController@destroy');
           Route::get('/edit/{advert}', 'Content\AdvertController@edit');
           Route::post('/update/{advert}', 'Content\AdvertController@update');
       });

       Route::group(['prefix' => 'posts'], function () {

           Route::get('/', 'Content\PostController@index')->name('admin.content.posts');
           Route::get('/create', 'Content\PostController@create')->name('admin.content.posts.create');
           Route::get('/edit/{post}', 'Content\PostController@edit');
           Route::get('/{post}', 'Content\PostController@show');
           Route::post('/update/{post}', 'Content\PostController@update');
           Route::post('/store', 'Content\PostController@store')->name('admin.content.posts.store');
           Route::post('/delete/{post}', 'Content\PostController@destroy');

       });

   });

   Route::group(['prefix' => 'pages'], function () {

       Route::get('/', 'Pages\PageController@index')->name('admin.pages');
       Route::get('/{page}', 'Pages\PageController@show');
       Route::get('/create', 'Pages\PageController@create')->name('admin.pages.create');
       Route::get('/edit/{page}', 'Pages\PageController@edit');
       Route::post('/store', 'Pages\PageController@store')->name('admin.pages.store');
       Route::post('/update/{page}', 'Pages\PageController@update');
       Route::post('/delete/{page}', 'Pages\PageController@destroy');

       Route::group(['prefix' => 'index'], function () {

            Route::get('/', 'Pages\Index\IndexController@index')->name('admin.pages.index.index');
       });
   });

   Route::group(['prefix' => 'schedule'], function () {

       Route::get('/','Schedule\ScheduleController@index')->name('admin.schedule');
       Route::get('/create','Schedule\ScheduleController@create')->name('admin.schedule.create');
       Route::get('/{id}','Schedule\ScheduleController@show');
       Route::get('/edit/{schedule}','Schedule\ScheduleController@edit');
       Route::post('/store','Schedule\ScheduleController@store')->name('admin.schedule.store');
       Route::post('/update/{schedule}','Schedule\ScheduleController@update');
       Route::post('/delete/{schedule}','Schedule\ScheduleController@destroy');
   });

   Route::group(['prefix' => 'groups'], function () {

       Route::get('/','Group\GroupController@index')->name('admin.groups');
       Route::get('/create','Group\GroupController@create')->name('admin.groups.create');
       Route::get('/{group}','Group\GroupController@show');
       Route::get('/edit/{group}','Group\GroupController@edit');
       Route::post('/store','Group\GroupController@store')->name('admin.groups.store');
       Route::post('/update/{group}','Group\GroupController@update');
       Route::post('/delete/{group}','Group\GroupController@destroy');
   });

    Route::group(['prefix' => 'subjects'], function () {

        Route::get('/','Subject\SubjectController@index')->name('admin.subjects');
        Route::get('/create','Subject\SubjectController@create')->name('admin.subjects.create');
        Route::get('/{subject}','Subject\SubjectController@show');
        Route::get('/edit/{subject}','Subject\SubjectController@edit');
        Route::post('/store','Subject\SubjectController@store')->name('admin.subjects.store');
        Route::post('/update/{subject}','Subject\SubjectController@update');
        Route::post('/delete/{subject}','Subject\SubjectController@destroy');
    });

    Route::group(['prefix' => 'weeks'], function () {

        Route::get('/','Week\WeekController@index')->name('admin.weeks');
        Route::get('/create','Week\WeekController@create')->name('admin.weeks.create');
        Route::get('/{week}','Week\WeekController@show');
        Route::get('/edit/{week}','Week\WeekController@edit');
        Route::post('/store','Week\WeekController@store')->name('admin.weeks.store');
        Route::post('/update/{week}','Week\WeekController@update');
        Route::post('/delete/{week}','Week\WeekController@destroy');
    });


});

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
