<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('welcome');
});

/*登录*/
Route::get('login','LoginController@index');

/*列表*/
Route::get('main','MainController@index');

/*商品详情页*/
Route::any('good','GoodController@index');

/*注册*/
Route::any('register','RegisterController@index');
//注册添加
Route::any('register/add','RegisterController@add');