<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

//购物车控制器
class CarController extends Controller
{
    //购物车页
    public function index(){
    	//获取session中的商品
    	$shop = session('shop');



    	//加载页面
    	return view('home.car')->with('shop',$shop);
    }

    //加入购物车
    public function addCar(Request $request){
    	// 数据处理

    	$data=session('shop')?session('shop'):array();

    	$a=0;
    	if ($data) {
    		foreach ($data as $key => &$value) {
    			# code...
    			if ($value['id']==$_GET['id']) {

    				$value['num']=$value['num']+$_GET['num'];

    				$a=1;
    			}
    		}
    	}

    	if (!$a) {
    		$data[]=array(
    			"id"=>$_GET['id'],
    			"num"=>$_GET['num'],
    			"goodsInfo"=>\DB::table("goods")->where("id",$_GET['id'])->first(),
    			);
    	}
    	

    	// session中追加数据
    	$request->session()->put('shop', $data);

    	return redirect("car");
    }
}
