<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

//后台分类广告控制器
class TypesAdsController extends Controller
{
    public function index(Request $request){
    	//多表查询
    	$data = DB::table('typesads')->select('typesads.*','types.name')->join('types','types.id','=','typesads.cid')->paginate(1);
    	//加载页面
    	return view('admin.sys.types.index')->with('data',$data);
    }

    //分类广告的添加页面
    public function create(){
    	$data = DB::table('types')->where('pid','0')->get();
    	return view('admin.sys.types.add')->with('data',$data);
    }

    //分类广告的处理方法
    public function store(Request $request){
    	$arr = $request->except('_token');
    	if(DB::table('typesads')->insert($arr)){
    		return redirect('/admin/sys/types');
    	}else{
    		return back();
    	}
    }
}
