<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

//后台广告控制器
class AdsController extends Controller
{
	public function index(Request $request){
		//从数据库查询数据
		$data = DB::table('ads')->orderBy('sort','desc')->paginate(10);
	    //加载页面
    	return view('admin.sys.ads.index')->with('data',$data);
	}

	//广告添加
	public function create(){
		//加载页面
		return view('admin.sys.ads.add');
	}

	public function store(Request $request){
		//去除字段
		$arr = $request->except('_token');

		//插入数据库
		if(DB::table('ads')->insert($arr)){
			return redirect('admin/sys/ads');
		}else{
			return back();
		}
	}

}
