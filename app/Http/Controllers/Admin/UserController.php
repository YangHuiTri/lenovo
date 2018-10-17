<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class UserController extends Controller
{
    //管理员首页
    public function index(Request $request){
        $search = $request -> input('search');
        if($search){
            //查询数据总数
            $tot = DB::table('user') -> where('tel',$search) -> count();
            //查询数据库
            $data = DB::table('user') -> where('tel',$search) -> paginate(10);
            return view('admin.user.index')->with('data',$data) -> with('tot',$tot);
        }else{
            //查询数据总数
            $tot = DB::table('user') -> count();
            //查询数据库
            $data = DB::table('user')->paginate(10);
            return view('admin.user.index')->with('data',$data) -> with('tot',$tot);
        }

        
    }

}


