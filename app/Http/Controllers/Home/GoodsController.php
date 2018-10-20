<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

//商品控制器
class GoodsController extends Controller
{
    //商品页面
    public function index($id){

    	// 设置cookie

    	\Cookie::queue("name","id");

    	// 获取商品相关数据
    	$goods=\DB::table("goods")->where("id",$id)->first();

    	// 商品图片表

    	$goodsImg=\DB::table("goodsImg")->where("gid",$id)->get();

    	// 查询商品对应品论

    	$commentTot=\DB::table("comment")->where("gid",$id)->count();//总评论数
    	$goodTot=\DB::table("comment")->where("star",">",4)->count();//好评数
    	$chaTot=\DB::table("comment")->where("star","<=",2)->count();//差评数
    	$zhongTot=$commentTot-$goodTot-$chaTot;//中评数

    	$arr=array(
    		"commentTot"=>$commentTot,
    		"goodTot"=>$goodTot,
    		"chaTot"=>$chaTot,
    		"zhongTot"=>$zhongTot,

    		);

    	$comment=\DB::table("comment")->where("gid",$id)->get();

    	// 格式化数据

    	$data=array(

    		"goods"=>$goods,
    		"goodsImg"=>$goodsImg,
    		"arr"=>$arr,
    		"comment"=>$comment,
    		);
    	// 加载页面

    	return view("home.goods")->with($data);
    }
}
