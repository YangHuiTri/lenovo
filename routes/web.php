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

	// 登录页面
	Route::get('/login','Home\LoginController@index');

	// 注册页面
	Route::get('/reg','Home\RegController@index');

	//  处理注册操作
	Route::post('/regCheck',"Home\RegController@check");

	// 验证码
	Route::get('/yzm','Home\RegController@yzm');

	//发送邮件
	// Route::get('fasong','Home\RegController@fasong');

	//激活地址
	Route::get('jihuo/{id}/{token}','Home\RegController@jihuo');

	//处理登录
	Route::post('/check','Home\LoginController@check');

	//退出登录
	Route::get('/logout','Home\LoginController@logout');

	//找回密码
	Route::any('/zhaohui','Home\LoginController@zhaohui');

	//修改密码
	Route::any('/savePass/{id}/{token}','Home\LoginController@savePass');




//后台路由

	//登录页面
	Route::get('/admin/login','Admin\LoginController@index');

	//验证码
	Route::get('/admin/yzm', 'Admin\LoginController@yzm');

	//登录的处理操作
	Route::post('/admin/check','Admin\LoginController@check');

	//后台退出
	Route::get('/admin/logout','Admin\LoginController@logout');

	//文件上传
	Route::any('/admin/shangchuan','Admin\CommonController@upload');

	//清除缓存
	Route::get('/admin/flush','Admin\IndexController@flush');




	Route::group(['namespace' => 'Admin', 'prefix' => 'admin','middleware'=>'adminLogin'], function(){
		//1.后台首页路由
		Route::get('/','IndexController@index');

		//2.后台管理员管理
		Route::resource('admin','AdminController');
		//后台管理员状态修改路由
		Route::post('admin/ajaxStatu','AdminController@ajaxStatu');
		//3.后台用户管理
		Route::get('user','UserController@index');

		//后台商品管理
		Route::resource('goods','GoodsController');

		//后台订单管理
		Route::get('orders','OrdersController@index');
			//查看订单详情
			Route::get('orders/list','OrdersController@lists');
			//查看收货地址
			Route::get('orders/addr','OrdersController@addr');
			//修改订单状态
			Route::any('orders/edit','OrdersController@edit');
			//订单状态
			Route::get('orders/statu','OrdersController@statuList');
			Route::post('orders/statu/edit','OrdersController@statuEdit');


		//缓存
		Route::get('huancun','HuancunController@index');



		//评论管理
		Route::get('comment','CommentController@index');
		Route::post('comment/ajaxStatu','CommentController@ajaxStatu');




		//后台分类管理
		Route::resource('types','TypesController');


		//后台的系统管理
		//系统管理
		Route::resource('sys/config','ConfigsController');
		//轮播图管理
		Route::resource('sys/slider','SliderController');
		//广告管理
		Route::resource('sys/ads','AdsController');
		//广告分类管理
		Route::resource('sys/types','TypesAdsController');


	});


