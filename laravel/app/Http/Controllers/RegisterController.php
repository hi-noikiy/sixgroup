<?php

namespace App\Http\Controllers;
use Session;
use Cookie;
use Request;
use DB;
use Mail;

class RegisterController extends Controller
{
	/*注册表单展示页*/
	public function index(){
		 return view('Register/register');
	}

	/*注册*/
	// public function send(){
		
	// 	//echo 1;
	// 	$data = ['email'=>'3215237686@qq.com', 'name'=>'激活', 'uid'=>'1', 'activationcode'=>'1'];
	// 	Mail::send('Register/activation', $data, function($message) use($data)
	// 	{
	// 	    $message->to($data['email'], $data['name'])->subject('欢迎注册我们的网站,请激活您的账号！');
	// 	});


	// }

	public function send()
  {
    $name = '学院君';
    $flag = Mail::send('Register/activation',['name'=>$name],function($message){
      $to = '249936876@qq.com';
      $message ->to($to)->subject('测试邮件');
    });
    if($flag){
      echo '发送邮件成功，请查收！';
    }else{
      echo '发送邮件失败，请重试！';
    }
  }

  	/*注册*/
	public function add(){
		
		$Mobile= Request::get('Mobile');
		$Password=Request::get('Password');
		$FromId=Request::get('FromId');
		$Email=Request::get('Email');
		$operation=DB::insert("insert into user (u_phone,u_pwd,u_email) value('$Mobile','$Password','$Email')");
		if ($operation) {
			return view('welcome');
		}else{
			echo "0";
		}
	}


	/*手机验证码验证*/
	public function phone(){
		$phone= Request::get('phone');	//获取手机号
		$yz= Request::get('yz');	//获取验证码
		$url="http://api.k780.com:88/?app=sms.send&tempid=50510&param=code%3d{$yz}&phone={$phone}&appkey=18342&sign=54dde18295f570014b9f0486d16f1c2b&format=json";
		$re=file_get_contents($url);
		$ar=json_decode($re,true);	//对接口返回数据进行数组转换
		if ($ar['success']==1) {	//判断状态是否成功
			echo 1;
		}
	}
}