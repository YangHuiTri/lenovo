<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

//注册控制器
class RegController extends Controller
{
    //注册页
    public function index(){
    	//加载视图
    	return view('home.reg');
    }

    //验证码
    public function yzm(){
    	require_once("../resources/code/Code.class.php");
    	//实例化
    	$code = new \Code();
    	//生成验证码
    	$code->make();
    }

    //处理操作
    public function check(Request $request){
    	//接收数据
    	$arr = $request->except('_token');

    	//检测验证码是否正确
        require_once("../resources/code/Code.class.php");

        // 实例化
        $code=new \Code();

        // 获取session
        $ocode=$code->get();

        // 检测验证码
        if (strtoupper($arr['code'])==$ocode) {
        	//验证密码位数
        	if(strlen($arr['pass']) >= 6 && strlen($arr['pass']) <= 12){
        		//判断是否是邮箱
        		if(preg_match('/\w+@\w+\.\w+/', $arr['email'])){
        			//判断邮箱是否注册
        			if(DB::table('user')->where('email','=',$arr['email'])->first()){
        				return back()->with('error','邮箱已被注册');
        			}else{
        				//判断密码
        				if($arr['pass'] == $arr['repass']){
        					//注册
                            $data=array();

                            $email = $arr['email'];
                            $data['email']=$arr['email'];
                            $data['time']=time();
                            $data['status']=0;
                            $data['token']=str_random(50);
                            $data['pass']=\Crypt::encrypt($arr['pass']);

                            if ($id=DB::table("user")->insertGetID($data)) {
                                \Mail::send('mail.index',["id"=>$id,"token"=>$data['token']],function($message) use($email){
                                	$message->to($email);
                                	$message->subject("亲爱的用户,恭喜您注册成功");
                                });

                                //加载立即激活的提示页面
                                $mailArr = explode('@', $email);
                                $href = 'mail.'.$mailArr[1];
                                // dd($href);
                                return view('home.jihuo')->with('href',$href);
                            }else{
                                return back()->with("error","注册失败");
                            }        					
        				}else{
        					return back()->with('error','；两次密码不一致');
        				}
        			}
        		}else{
        			return back()->with('error','邮箱有误');
        		}
        	}else{
        		return back()->with('error','密码长度不够');
        	}
        }else{
        	return back()->with('error','验证码错误');
        }

    }

    //发送邮件
    public function fasong(){
    	// \Mail::raw('这是一封测试邮件',function($message){
    	// 	$message->to('913603802@qq.com')->subject('亲爱的用户，恭喜您注册成功');
    	// });

    	\Mail::send('mail.index',[],function($message){
    		$message->to('913603802@qq.com');
    		$message->subject('亲爱的用户，恭喜您注册成功');
    	});
    }

    //激活账户
    public function jihuo($id, $token){
    	//查询用户存在
    	$data = DB::table('user')->where('id','=',$id)->first();
    	//判断token
    	if($token == $data->token){
    		$arr = array();
    		$arr['status'] = 1;
    		$arr['token'] = str_random(50);
    		//进行数据库状态的修改 ，激活成功跳转到登录页面
    		if(DB::table('user')->where('id','=',$id)->update($arr)){
    			return redirect('/login');
    		}

    	}else{
    		echo "您的token已经过期";
    	}
    }




}
