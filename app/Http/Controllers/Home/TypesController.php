<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

//分类控制器
class TypesController extends Controller
{
    //分类页
    public function index(){
    	return view('home.types');
    }
}
