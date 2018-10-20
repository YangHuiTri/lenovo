<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;


//前台首页控制器
class IndexController extends Controller
{
	//分类数据的处理
	public function checkTypeData($data,$pid=0){
		//新建数组
		$newArr = array();
		//获取数据
        foreach ($data as $key => $value) {
            
            if ($value->pid==$pid) {
                # code...

                $newArr[$value->id]=$value;

                $newArr[$value->id]->zi=$this->checkTypeData($data,$value->id);
            }
        }
		//返回数据
		return $newArr;
	}
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

    	//处理左侧数据分类
    	$types = DB::table('types')->get();
    	//递归处理数据
    	$type = $this->checkTypeData($types);

    	//处理右侧广告
    	foreach ($type as $key => $value) {
    		$value->rightAds=DB::table("typesads")->where([["cid",'=',$value->id],['type','=',0]])->limit(2)->get();
    		$value->leftAds=\DB::table("typesads")->where([["cid",'=',$value->id],['type','=',1]])->first();
    	}

    	//处理楼层的商品
        // 遍历一级分类
        foreach ($type as $key => $value) {

            // 新建新的数组

            $newArr=[];
            
            // 遍历二级分类

            foreach ($value->zi as $two) {

                // 遍历三级分类

                foreach ($two->zi as  $three) {

                    $newArr[]=$three->id;
                }
            }


            // 查询对应的商品

            $value->goods=\DB::table("goods")->whereIn("cid",$newArr)->limit(8)->get();
        }

    	//明星单品
    	$goods = DB::table('goods')->limit(6)->orderBy('id','desc')->get();




    	//格式化数据
    	$data=array(
    		"slider"=>$slider,
    		"ads"=>$ads,
    		'type' => $type,
    		'goods' => $goods

    		);


    	//加载页面
    	return view("home.index")->with($data);
    }

    //
}
