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

    //ajax购物车添加
    public function CarAdd(Request $request){
    	//获取修改的id
    	$id = $request->get('id');
    	//获取session中的商品数据
    	$shop = session('shop');
    	//遍历数据
    	foreach ($shop as $key => $value) {
    		if($value['id'] == $id){
    			$shop[$key]['num'] = ++$shop[$key]['num'];
    		}
    	}
    	//写入session
    	$request->session()->put('shop',$shop);
    	echo 1;
    }

    //ajax购物车减少
    public function CarJian(Request $request){
    	//获取修改的id
    	$id = $request->get('id');
    	//获取session中的商品数据
    	$shop = session('shop');
    	//遍历数据
    	foreach ($shop as $key => $value) {
    		if($value['id'] == $id){
    			$shop[$key]['num'] = --$shop[$key]['num'];
    		}
    	}
    	//写入session
    	$request->session()->put('shop',$shop);
    	echo 1;
    }

    //ajax购物车删除
    public function CarDel(Request $request){
    	//接收id
    	$id = $request->get('id');
    	//获取购物车中所有的商品数据
    	$shop = session('shop');
    	//遍历数据
    	foreach ($shop as $key => $value) {
    		//判断需要删除的数据
    		if($value['id'] == $id){
    			unset($shop[$key]);
    		}
    	}
    	//写入session
    	$request->session()->put('shop',$shop);
    	//返回
    	echo 1;
    }

    //结算页面
    public function jiesuan(Request $request){
    	//查询当前用户的收货地址
    	$uid = session('lenovoHomeUserInfo.id');
    	//查询数据
    	$addr = DB::table('addr')->where('uid','=',$uid)->get();




    	//接收商品数据
    	$idArr = $request->get('goods');

    	//读取session
    	$shop = session('shop');
    	//声明新数组
    	$newArr = array();
    	//遍历购物车中所有的商品
    	foreach ($idArr as $key => $value) {
    		foreach ($shop as $k => $v) {
    			//判断是否是用户选择的商品
    			if($v['id'] == $value){
    				$newArr[] = $v;
    			}
    		}
    	}

    	//加载结算页面
    	return view('home.jiesuan')->with('newShop',$newArr)->with('addr',$addr);
    }





}
