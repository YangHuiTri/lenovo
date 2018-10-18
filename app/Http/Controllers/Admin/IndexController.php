<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Cache;

//后台首页控制器
class IndexController extends Controller
{
    //后台首页
    public function index(){
        //加载页面
        return view('admin.index');
    }

    //删除文件的方法
    public function delDir($path){
    	//读取路径
    	$arr = scandir($path);

    	//遍历并删除
    	foreach ($arr as $value) {
    		//过滤.和..
    		if($value != '.' && $value != '..'){
    			unlink($path.'/'.$value);
    		}
    	}
    }

    //清除缓存
    public function flush(){

    	$this -> delDir("../storage/framework/views");
    	// $this -> delDir("../storage/framework/cache");
    	Cache::flush();
    	return redirect('admin');

    }
}
