<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    //管理员首页
    public function index(){
        return view('admin.user.index');
    }

    //添加页面  admin/user/create
    public function create(){
    	return view('admin.user.add');
    }

    //插入操作  admin/user   post
    public function store(){

    }

    //修改页面  admin/user/{user}/edit  get
    public function edit(){
    	return view('admin.user.edit');
    }

    //更新操作  admin/user/{user}   put
    public function update(){

    }

    //删除操作  admin/user/{user}   delete
    public function destroy(){

    }





}
