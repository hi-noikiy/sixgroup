<?php

namespace App\Http\Controllers;
use App\Http\Requests;
use Session;
use Cookie;
use DB,Input,Redirect,url,Validator,Request;


class LoginController extends Controller
{
    //展示登陆页面
	public function index(){
        //展示登陆页面
		 return view('Login/login');
	}
	//普通会员登陆
	public function register(){
		//接收表单值
		if(Input::has('_token')){
			$u_name=Input::get('username');
			$u_pwd=Input::get('pwd');
			//$users = DB::table('user')->get()->where("u_name='$u_name'");
			$user = DB::table('user')->where('u_name', $u_name)->first();
            if($user){
				//得到用户上次登陆的时间戳
				$time=$user->u_time;
				//转换成时间戳
				$s_time=strtotime($time);
				//当前时间
				$n_time=date('Y-m-d H:i:s',time());
				//转换成时间戳
				$n_times=strtotime($n_time);
                 //得到用户名登陆失败的次数
                   $u_aut=$user->u_aut;
					if($u_aut<3){
					  //查询用户名密码是否正确
					 $pwd = DB::table('user')->where('u_name', $u_name)->Where('u_pwd',$u_pwd)->first();
					 //登陆成功
						  if($pwd){
                             echo "<script>alert('登陆成功');</script>";
							   // 存储数据到session...
                              session(['u_name' => $u_name]);
							 $up=DB::table('user')->where('u_name', $u_name)->update(['u_aut' =>0]);
							 return redirect("index");                                                                      
						  }
						  //登陆失败
						  else{
							 echo "<script>alert('密码输入错误，请重新登录');</script>";
							  $ups=DB::table('user')->where('u_name', $u_name)->update(['u_aut' =>$u_aut+1]);
							 return redirect("login");
							 
						 }
					}
					else{

							//判断最后一次密码登陆错误和本次登陆相差时间是否大一1天
							 if(($n_times-$s_time)<86400){
								 
								  $u_time=date('Y-m-d H:i:s',time());
						          echo "<script>alert('登陆错误三次,请24小时后登录');</script>";
						          $up2=DB::table('user')->where('u_name', $u_name)->update(['u_time' =>$u_time]);
						          return redirect("login");
								  
							 }
							 else{ 
					              //查询用户名密码是否正确
					              $pwd = DB::table('user')->where('u_name', $u_name)->Where('u_pwd',$u_pwd)->first();
					                      //登陆成功
										   if($pwd){
										   echo "<script>alert('登陆成功');</script>";
										     // 存储数据到session...
                                             session(['u_name' => $u_name]);
										  $up=DB::table('user')->where('u_name', $u_name)->update(['u_aut' =>0]);
										  return redirect("index");                                 
										  }
										  //登陆失败
										  else{
											 echo "<script>alert('密码输入错误，请重新登录');</script>";
											  $ups=DB::table('user')->where('u_name', $u_name)->update(['u_aut' =>$u_aut+1]);
											 return redirect("login");
											 
										 }

								
							 }
						
					}
				
			}else{
              echo "<script>alert('不存在此用户，请重新登录');</script>";
			  //友好提示
             // return redirect(refresh);
			  return redirect("login");
			    		       
				
			}
			
		
			
			//return view('user.index', ['users' => $users]);

		}
	}
	//手机验证码发送
	public function phone(){
       $u_phone=Request::get('phone');
	   $u_pwd=rand(1000,9999);
	   // 存储数据到session...
        session(['$u_phone' => $u_pwd]);
	   $url="http://api.k780.com:88/?app=sms.send&tempid=50440&param=code%3d{$u_pwd}&phone={$u_phone}&appkey=18344&sign=dad46c34aa774a64f14ca21819f6c9a2&format=json";
	   $str=file_get_contents($url);
	   $re=json_decode($str,true);
	    if($re['result']['status']=="OK"){
			echo 1;
		}else{
			echo 0;
			
		}
	}
	//手机登陆
	public function cellphone(){
		//得到发送给手机的动态密码
		  // 从session中获取数据...
            $value = session('$u_phone');
			$u_name=Input::get('Mobile');
			$u_pwd=Input::get('smsCode');
			//手机密码输入正确
            if($u_pwd==$value){
               $user = DB::table('user')->where('u_name', $u_name)->first();
			//如果有此数据
			if($user){
                 //得到用户上次登陆的时间戳
				$time=$user->u_time;
				//转换成时间戳
				$s_time=strtotime($time);
				//当前时间
				$n_time=date('Y-m-d H:i:s',time());
				//转换成时间戳
				$n_times=strtotime($n_time);
                 //得到用户名登陆失败的次数
                   $u_aut=$user->u_aut;
					if($u_aut<3){
					  //查询用户名密码是否正确
					 $pwd = DB::table('user')->where('u_name', $u_name)->Where('u_pwd',$u_pwd)->first();
					 //登陆成功
						  if($pwd){
                             echo "<script>alert('登陆成功');</script>";
							  // 存储数据到session...
                              session(['u_name' => $u_name]);
							 $up=DB::table('user')->where('u_name', $u_name)->update(['u_aut' =>0]);
							 return redirect("index");                                                                      
						  }
						  //登陆失败
						  else{
							 echo "<script>alert('密码输入错误，请重新登录');</script>";
							  $ups=DB::table('user')->where('u_name', $u_name)->update(['u_aut' =>$u_aut+1]);
							 return redirect("login");
							 
						 }
					}
					else{

							//判断最后一次密码登陆错误和本次登陆相差时间是否大一1天
							 if(($n_times-$s_time)<86400){
								 
								  $u_time=date('Y-m-d H:i:s',time());
						          echo "<script>alert('登陆错误三次,请24小时后登录');</script>";
						          $up2=DB::table('user')->where('u_name', $u_name)->update(['u_time' =>$u_time]);
						          return redirect("login");
								  
							 }
							 else{ 
					              //查询用户名密码是否正确
					              $pwd = DB::table('user')->where('u_name', $u_name)->Where('u_pwd',$u_pwd)->first();
					                      //登陆成功
										   if($pwd){
										   echo "<script>alert('登陆成功');</script>";
                                             // 存储数据到session...
                                            session(['u_name' => $u_name]);
										  $up=DB::table('user')->where('u_name', $u_name)->update(['u_aut' =>0]);
										  return redirect("index");                                 
										  }
										  //登陆失败
										  else{
											 echo "<script>alert('密码输入错误，请重新登录');</script>";
											  $ups=DB::table('user')->where('u_name', $u_name)->update(['u_aut' =>$u_aut+1]);
											 return redirect("login");
											 
										 }

								
							 }
						
					}
				

			}
			//添加该用户到数据库
			else{
				$se=DB::table('user')->insert(
                ['u_name' => $u_name, 'u_pwd' => $value, 'u_phone' => $u_name]);
				//添加成功
				if($se){
					return redirect("index");
				}
				//添加失败
				else{
                   return redirect("login");
				}
			}

		}else{
			echo "错误";
		}
				
	}

	//退出登录
	public function del(){
		Session::forget('u_name');
		return redirect("index");

	}
    
}