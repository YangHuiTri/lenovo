<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;


//轮播图控制器
class SliderController extends Controller
{
    // 轮播图首页

    public function index(Request $request){
        // 获取数据总数

        $tot=\DB::table("slider")->count();
        $data=\DB::table("slider")->paginate(10);


        
        // 加载页面

        return view("admin.sys.slider.index")->with('tot',$tot)->with("data",$data);

    }

    // 新建处理方法

    public function store(Request $request){
        // 获取数据
        $arr=$request->except('_token');

        // 表单验证的规则

        $rules=[
            'title' => 'required',
            'href' => 'required',
            'orders' => 'required',
            'img' => 'required',

        ];


        // 表单验证的提示信息

        $message=[

            "title.required"=>"请输入Title",
            "href.required"=>"请输入href",
            "orders.required"=>"请输入排序",
            "img.required"=>"请选择图片",

        ];

        // 使用laravel的表单验证
        $validator = \Validator::make($arr,$rules,$message);

        // 开始验证

        if ($validator->passes()) {
            
            // 验证通过添加数据库

            // 插入数据库

            if (\DB::table("slider")->insert($arr)) {


                return redirect('/admin/sys/slider');
            }else{
                return back();
            }

        }else{
            // 具体查看laravel的核心类
            return back()->withInput()->withErrors($validator);
        }

    }
}
