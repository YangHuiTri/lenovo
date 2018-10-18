<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Cache;

//缓存控制器
class HuancunController extends Controller
{
    public function index(){
    	// $data = DB::table('user')->get();
    	// Cache::put('data',$data,10);
    	$data = Cache::get('data');
    	dd($data);
    }
}
