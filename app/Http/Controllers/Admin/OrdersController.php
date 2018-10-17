<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

//订单管理路由
class OrdersController extends Controller
{
	//订单首页
    public function index(Request $request){
    	//查询数据
    	return view('admin.orders.index');
    }
}
