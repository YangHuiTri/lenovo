<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;


//后台评论控制器
class CommentController extends Controller
{
	//评论首页
    public function index(Request $request){
    	//多表查询，查询数据
    	$data = DB::table('comment')
    			->select('comment.*','user.name','goods.title','goods.img as gimg')
    			->join('user','user.id','=','comment.uid')
    			->join('goods','goods.id','=','comment.gid')
    			->get();
		    

	    //加载页面
	    return view('admin.comment.index')->with('data',$data);
    }

    //修改评论状态ajax
    public function ajaxStatu(Request $request){

        $arr=$request->except("_token");

        $sql="update comment set statu=$arr[statu] where id=$arr[id]";

        if (\DB::update($sql)) {
            # code...

            return 1;
        }else{
            return 0;
        }
    }
}
