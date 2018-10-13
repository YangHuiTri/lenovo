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


//前台路由
	//主页
	Route::get('/','Home\IndexController@index');

	//分类页面
	Route::get('/types/{id}','Home\TypesController@index');

	//商品详情页面
	Route::get('/goods/{id}', 'Home\GoodsController@index');






//后台路由

//登录页面
Route::get('admin/login','Admin\LoginController@index');

//验证码
Route::get('admin/yzm', 'Admin\LoginController@yzm');




Route::group(['namespace' => 'Admin', 'prefix' => 'admin'], function(){
	//1.后台首页路由
	Route::get('/','IndexController@index');

	//2.后台管理员管理
	Route::resource('admin','AdminController');

	//3.后台用户管理
	Route::resource('user','UserController');


});


