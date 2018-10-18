<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;


//前台首页控制器
class IndexController extends Controller
{
	//前台首页
    public function index(){
    	//查询轮播图
    	if ($slider=\Cache::get('slider')) {
    		# code...
    	}else{
    		$slider=\DB::table("slider")->orderBy("orders","desc")->get();

    		\Cache::put("slider",$slider);
    	}

    	

    	// 查询广告

    	if ($ads=\Cache::get('ads')) {
    		# code...
    	}else{
    		$ads=\DB::table("ads")->orderBy("sort","desc")->get();
    		\Cache::put("ads",$ads);

    	}

    	//格式化数据
    	$data=array(
    		"slider"=>$slider,
    		"ads"=>$ads,
    		);


    	//加载页面
    	return view("home.index")->with($data);
    }

    //
}
