<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class AdminController extends Controller
{
    //管理员首页
    public function index(){
        return view('admin.admin.index');
    }

    //添加页面  admin/admin/create
    public function create(){
    	return view('admin.admin.add');
    }

    //插入操作  admin/admin   post
    public function store(Request $request){
        parse_str($_POST['str'], $arr);
        // var_dump($arr);
        //移出repass
        unset($arr['repass']);

        $arr['time'] = time();
        //插入数据库

        if(DB::table('admin')->insert($arr)){
            echo "1";
        }else{
            echo "0";
        }

    }

    //修改页面  admin/admin/{admin}/edit  get
    public function edit(){
    	return view('admin.admin.edit');
    }

    //更新操作  admin/admin/{admin}   put
    public function update(){

    }

    //删除操作  admin/admin/{admin}   delete
    public function destroy(){

    }





}
