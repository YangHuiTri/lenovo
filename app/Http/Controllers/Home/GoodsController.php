<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

//商品控制器
class GoodsController extends Controller
{
    //商品页面
    public function index(){
    	return view('home.goods');
    }
}
