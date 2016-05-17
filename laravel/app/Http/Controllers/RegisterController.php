<?php

namespace App\Http\Controllers;
use App\Http\Requests;
use Session;
use Cookie;

class RegisterController extends Controller
{
	/*注册表单展示页*/
	public function index(){
		 return view('Register/register');
	}

	/*注册*/
	public function add(){
		
		$data = ['email'=>$email, 'name'=>$name, 'uid'=>$uid, 'activationcode'=>$code];
		Mail::send('activemail', $data, function($message) use($data)
		{
		    $message->to($data['email'], $data['name'])->subject('欢迎注册我们的网站，请激活您的账号！');
		});
	}
}