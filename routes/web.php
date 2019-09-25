<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/about_us', function () {
    return view('about_us');
});

Route::get('/application', function () {
    return view('application'); //留学申请
});

Route::get('/education_planning', function () {
    return view('education_planning'); //升学规划
});

Route::get('/visa_services', function () {
    return view('visa_services'); //签证服务
});

Route::get('/overseas_services', function () {
    return view('overseas_services'); //境外服务
});

Route::get('/career_training', function () {
    return view('career_training'); //职业培训
});

Route::get('/summer_camp', function () {
    return view('summer_camp'); //特色夏令营
});

Route::get('/elite_program', function () {
    return view('elite_program'); //特色夏令营
});


Route::post('/sendMessage', 'MessageController@store');


Route::prefix('admin')->group(function(){


	Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
	Route::get('/logout', 'Auth\AdminLoginController@logout')->name('admin.logout');
	
	Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
	Route::get('/' ,'AdminController@index')->name('admin.dashboard');


    Route::get('/messages', 'MessageController@index');
    Route::get('/messages/unread', 'MessageController@unread');
    Route::get('/messages/view/{id}', 'MessageController@view');
    Route::post('/reply/{id}', 'MessageController@sendEmail');
    
    Route::resource('/galleries' , 'GalleryController');
});

