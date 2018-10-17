<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

//商品控制器
class GoodsController extends Controller
{
    //
    public function index(Request $request){
    	//从数据库查询数据
    	$data = DB::table('goods')->orderBy('id', 'desc')->paginate(2);

    	//处理小图
    	foreach ($data as $key => $value) {
    		# code...
    		$value->tupian = DB::table('goodsimg')->where('gid',$value->id)->get();
    	}
    	// dd($data);



    	//加载页面
    	return view('admin.goods.index')->with('data',$data);
    }

    //商品添加页面
    public function create(){

        // 查询分类

        $data=\DB::select("select types.*,concat(path,id) p from types order by p");

        // 数据处理
        foreach ($data as $key => $value) {
            # code...

            $arr=explode(',', $value->path);

            $size=count($arr);

            $value->size=$size-2;

            $value->html=str_repeat('|----', $size-2).$value->name;
        }


        // 加载添加页面

        return view('admin.goods.add')->with("data",$data);
    }

    // 处理商品的插入操作

    public function store(Request $request){
        // 获取多图

        $imgs=$request->input("imgs");

        // 移除不需要的字符

        $data=$request->except("_token","imgs");



        // 插入数据库

        if ($id=\DB::table("goods")->insertGetId($data)) {
            # code...

            // 处理商品多图片
            $arr=explode(',', $imgs);

            foreach ($arr as $key => $value) {
                $brr=array();

                $brr['gid']=$id;
                $brr['img']=$value;

                \DB::table("goodsimg")->insert($brr);
            }

            return redirect('admin/goods');
        }else{
            return back();
        }
    }
}
