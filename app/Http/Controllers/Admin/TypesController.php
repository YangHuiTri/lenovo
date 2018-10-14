<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;


//后台分类控制器
class TypesController extends Controller
{
//分类首页
    public function index(){
    	//查询数据
    	$data = DB::table('types')->orderBy('sort','desc')->get();

    	//加载页面
        return view('admin.types.index')->with("data",$data);
    }

    //添加分类  admin/types/create
    public function create(){
    	return view('admin.types.add');
    }

    //插入操作  admin/types   post
    public function store(Request $request){
    	//处理数据
    	$data = $request->except('_token');

    	//插入数据
    	if(DB::table('types')->insert($data)){
    		//插入成功跳转到展示页面
    		return redirect('admin/types');
    	}else{
    		//添加失败 回到上一个页面
    		return back();
    	}
    }

    //修改页面  admin/types/{types}/edit  get
    public function edit(){
    	return view('admin.types.edit');
    }

    //更新操作  admin/types/{types}   put
    public function update(){

    }

    //删除操作  admin/types/{types}   delete
    public function destroy($id){
    	if(DB::delete("delete from types where id=$id or path like '%,$id,%'")){
    		return "1";
    	}else{
    		return "0";
    	}
    }
}
