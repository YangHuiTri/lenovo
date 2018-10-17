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
    	//查询相关数据
    	$data = DB::table('orders')->select('orders.*','user.name','orderstatu.name as ssname')
    			->join('user','user.id','=','orders.uid')
    			->join('orderstatu','orders.sid','=','orderstatu.id')
    			->get();

		$newArr = Array();
		foreach ($data as $key => $value) {
			# code...
			$newArr[$value->code] = $value;
		}

    	//查询数据
    	return view('admin.orders.index')->with('data',$newArr);
    }

    //查看订单详情
    public function lists(Request $request){
    	//获取订单号
    	$code = $request->get('code');
    	//查询订单号下的所有商品
    	$data = DB::table('orders')->select('orders.*','goods.title','goods.img')
    			->join('goods','goods.id','=','orders.gid')
    			->where('code',$code)
    			->get();

		//数据展示到页面
		return view('admin.orders.lists')->with('data',$data);

    }

    //查看收货地址
    public function addr(Request $request){
    	//获取数据
    	$id = $request->get('id');
    	//查询订单收货地址信息
    	$data = DB::table('addr')->find($id);

		//加载页面
		return view('admin.orders.addr')->with('data',$data);
    }
}
