<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

//后台首页控制器
class IndexController extends Controller
{
    //后台首页
    public function index(){
        //加载页面
        return view('admin.index');
    }
}
