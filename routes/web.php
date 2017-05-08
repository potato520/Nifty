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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');




// 后台
Route::group(['prefix'=>'backend'], function(){
    // 登录后
    Route::group(['middleware' => ['auth']], function(){
        Route::resource('home', 'Backend\HomeController');  //后台首页
        Route::resource('category', 'Backend\CategoryController');  //后台首页
        Route::resource('article', 'Backend\ArticleController');  //后台首页

    });
});

