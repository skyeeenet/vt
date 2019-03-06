<?php

Route::group(['prefix' => 'admin', 'namespace' => 'Admin', 'middleware' => ['auth', 'CheckAdmin']], function () {
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
           Route::get('/edit/{image}', 'Content\ImageController@edit');
           Route::post('/create', 'Content\ImageController@store')->name('admin.content.images.store');
           Route::post('/update/{image}', 'Content\ImageController@update');
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

       Route::group(['prefix' => 'text'], function () {

           Route::get('/', 'Content\TextController@index')->name('admin.content.text');
           Route::get('/create', 'Content\TextController@create')->name('admin.content.text.create');
           Route::get('/edit/{text}', 'Content\TextController@edit');
           Route::post('/store', 'Content\TextController@store')->name('admin.content.text.store');
           Route::post('/update/{text}', 'Content\TextController@update');
           Route::post('/delete/{text}', 'Content\TextController@destroy');
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

    Route::group(['prefix' => 'roles'], function () {

        Route::get('/','User\RoleController@index')->name('admin.roles');
        Route::get('/create','User\RoleController@create')->name('admin.roles.create');
        Route::get('/{role}','User\RoleController@show');
        Route::get('/edit/{role}','User\RoleController@edit');
        Route::post('/store','User\RoleController@store')->name('admin.roles.store');
        Route::post('/update/{role}','User\RoleController@update');
        Route::post('/delete/{role}','User\RoleController@destroy');
    });

    Route::group(['prefix' => 'lecturers'], function () {

        Route::get('/','Lecturer\LecturerController@index')->name('admin.lecturers');
        Route::get('/create','Lecturer\LecturerController@create')->name('admin.lecturers.create');
        Route::get('/{role}','Lecturer\LecturerController@show');
        Route::get('/edit/{role}','Lecturer\LecturerController@edit');
        Route::post('/store','Lecturer\LecturerController@store')->name('admin.lecturers.store');
        Route::post('/update/{role}','Lecturer\LecturerController@update');
        Route::post('/delete/{role}','Lecturer\LecturerController@destroy');
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

    Route::group(['prefix' => 'occupations'], function () {

        Route::get('/', 'Schedule\OccupationTypeController@index')->name('admin.occupation');
        Route::get('/create', 'Schedule\OccupationTypeController@create')->name('admin.occupation.create');
        Route::get('/edit/{occupation}', 'Schedule\OccupationTypeController@edit');
        Route::post('/store', 'Schedule\OccupationTypeController@store')->name('admin.occupation.store');
        Route::post('/update/{occupation}', 'Schedule\OccupationTypeController@update');
        Route::post('/delete/{occupation}', 'Schedule\OccupationTypeController@destroy');
    });

    Route::group(['prefix' => 'socials'], function () {

        Route::get('/', 'User\SocialController@index')->name('admin.socials');
        Route::get('/create', 'User\SocialController@create')->name('admin.socials.create');
        Route::get('/edit/{social}', 'User\SocialController@edit');
        Route::post('/store', 'User\SocialController@store')->name('admin.socials.store');
        Route::post('/update/{social}', 'User\SocialController@update');
        Route::post('/delete/{social}', 'User\SocialController@destroy');
    });

    Route::group(['prefix' => 'graphics'], function () {

        Route::get('/', 'Graphics\GraphicsController@index')->name('admin.graphics');
        Route::get('/create', 'Graphics\GraphicsController@create')->name('admin.graphics.create');
        Route::get('/edit/{graphic}', 'Graphics\GraphicsController@edit');
        Route::post('/store', 'Graphics\GraphicsController@store')->name('admin.graphics.store');
        Route::post('/update/{graphic}', 'Graphics\GraphicsController@update');
        Route::post('/delete/{graphic}', 'Graphics\GraphicsController@destroy');
    });

    Route::group(['prefix' => 'users'], function () {

        Route::get('/', 'User\UserController@index')->name('admin.users');
        Route::get('/create', 'User\UserController@create')->name('admin.users.create');
        Route::get('/edit/{user}', 'User\UserController@edit');
        Route::get('/{user}', 'User\UserController@show');
        Route::post('/store', 'User\UserController@store')->name('admin.users.store');
        Route::post('/update/{user}', 'User\UserController@update');
        Route::post('/delete/{user}', 'User\UserController@destroy');
        Route::get('/deleteProfileImage/{user}', 'User\UserController@destroyProfileImage');
    });

    Route::group(['prefix' => 'bests'], function () {

        Route::get('/', 'Bests\BestController@index')->name('admin.bests');
        Route::get('/create', 'Bests\BestController@create')->name('admin.bests.create');
        Route::get('/edit/{best}', 'Bests\BestController@edit');
        Route::post('/store', 'Bests\BestController@store')->name('admin.bests.store');
        Route::post('/update/{best}', 'Bests\BestController@update');
        Route::post('/delete/{best}', 'Bests\BestController@destroy');
    });

    Route::group(['prefix' => 'categories'], function () {

        Route::get('/', 'Category\CategoryController@index')->name('admin.categories');
        Route::get('/create', 'Category\CategoryController@create')->name('admin.categories.create');
        Route::get('/edit/{category}', 'Category\CategoryController@edit');
        Route::post('/store', 'Category\CategoryController@store')->name('admin.categories.store');
        Route::post('/update/{category}', 'Category\CategoryController@update');
        Route::post('/delete/{category}', 'Category\CategoryController@destroy');
    });

    Route::group(['prefix' => 'administration'], function () {

        Route::get('/', 'Administration\AdministrationController@index')->name('admin.administration');
        Route::get('/create', 'Administration\AdministrationController@create')->name('admin.administration.create');
        Route::get('/edit', 'Administration\AdministrationController@edit')->name('admin.administration.edit');
        Route::post('/store', 'Administration\AdministrationController@store')->name('admin.administration.store');
        Route::post('/update', 'Administration\AdministrationController@update');
        Route::post('/delete/{admin}', 'Administration\AdministrationController@destroy');
    });

    Route::group(['prefix' => 'albums'], function () {

        Route::get('/', 'Album\AlbumController@index')->name('admin.albums');
        Route::get('/create', 'Album\AlbumController@create')->name('admin.albums.create');
        Route::get('/edit/{album}', 'Album\AlbumController@edit');
        Route::post('/store', 'Album\AlbumController@store')->name('admin.albums.store');
        Route::post('/update/{album}', 'Album\AlbumController@update');
        Route::post('/delete/{album}', 'Album\AlbumController@destroy');
    });

    Route::group(['prefix' => 'message'], function () {

        Route::get('/','Week\WeekController@index')->name('message');
        Route::get('/create','Week\WeekController@create')->name('message.create');
        Route::get('/{week}','Week\WeekController@show');
        Route::get('/edit/{week}','Week\WeekController@edit');
        Route::post('/store','Week\WeekController@store')->name('message.store');
        Route::post('/update/{week}','Week\WeekController@update');
        Route::post('/delete/{week}','Week\WeekController@destroy');
    });

    Route::group(['prefix' => 'albums_images'], function () {

        Route::post('/store', 'Album_Image\AlbumImageController@store')->name('admin.albums.images.store');
        Route::post('/delete/{id}', 'Album_Image\AlbumImageController@destroy');
    });

    Route::group(['prefix' => 'albums_categories'], function () {

        Route::post('/store', 'Album_Category\AlbumCategoryController@store');
        Route::post('/delete/{id}', 'Album_Category\AlbumCategoryController@destroy');
    });
});

Route::get('/w', function () {
    return view('welcome');
});

Route::get('/', 'Publics\Index\IndexController@index');

Route::group(['prefix' => 'user', 'middleware' => 'auth'], function() {

    Route::get('/', 'Publics\User\IndexController@index')->name('user');
    Route::get('/edit', 'Publics\User\IndexController@edit')->name('user.edit');
    Route::post('/', 'UserController@update')->name('user.update');
    Route::post('/delete', 'UserController@destroy')->name('user.delete');
});

Route::get('/ads', 'Publics\Pages\PagesController@ads');
Route::get('/album', 'Publics\Pages\PagesController@album');
Route::get('/conf/stud', 'Publics\Pages\PagesController@confstud');
Route::get('/conf/univ', 'Publics\Pages\PagesController@confuniv');
Route::get('/enroll', 'Publics\Pages\PagesController@enroll');
Route::get('/history', 'Publics\Pages\PagesController@history');
Route::get('/news', 'Publics\Pages\PagesController@news');
Route::get('/plan', 'Publics\Pages\PagesController@plan');
Route::get('/schedule', 'Publics\Pages\PagesController@schedule');
Route::get('/certification', 'Publics\Pages\PagesController@certification');
Route::get('/speciality', 'Publics\Pages\PagesController@speciality');
Route::get('/team', 'Publics\Pages\PagesController@team');
Route::get('/contacts', 'Publics\Pages\PagesController@contacts');

Auth::routes();

Route::get('/get_captcha/{config?}', function (\Mews\Captcha\Captcha $captcha, $config = 'default') {
    return $captcha->src($config);
});

Route::get('/home', 'HomeController@index')->name('home');
