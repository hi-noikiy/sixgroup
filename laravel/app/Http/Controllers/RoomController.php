<?php

namespace App\Http\Controllers;
use App\Http\Requests;
use Session;
use Cookie;
use DB,Input,Redirect,url,Validator,Request;


class RoomController extends Controller
{
    //展示登陆页面
	public function index()
	{
		//判断用户是否登录
		if (session()->has('u_name')) {
		 	return view('Room/apply');
        }else{
        	//展示登陆页面
			return redirect("login");
		}
       
	}

	/*接收数据入库*/
	public function Store()
	{
		$data=Input::all();
		//var_dump($data);
		$r_Img='';
		for($i=0; $i<count($data['roomImg']); $i++) 
		{ 
			 $tmpFilePath = $data['roomImg'][$i];
			 $tmpName= $tmpFilePath->getClientOriginalName();
			 $tmpFilePath->move('uploads',$tmpName);
			 $r_Img.=$tmpName.'|';
			 //var_dump($tmpName);
		}
		$r_title=$data['roomTitle'];
		$r_pattem=$data['roomPattern'];
		$r_people=$data['peopleNumber'];
		$r_price=$data['roomPrice'];
		$r_coordinate=$data['roomLandmark'];
		$r_theme=$data['roomTheme'];
		$r_area=$data['roomSize'];
		$r_air_conditioner=$data['roomCond'];
		$r_elevator=$data['roomEle'];
		$r_introduce=$data['roomIntroduce'];

		//添加入库
		$db=DB::table('room')->insert(array('r_title'=>"$r_title",'r_pattem'=>"$r_pattem",'r_people'=>"$r_people",'r_price'=>"$r_price",'r_coordinate'=>"$r_coordinate",'r_theme'=>"$r_theme",'r_area'=>"$r_area",'r_air_conditioner'=>"$r_air_conditioner",'r_elevator'=>"$r_elevator",'r_img'=>"$r_Img",'r_introduce'=>"$r_introduce"));
		if ($db) {
			echo "<script>alert('添加成功')</script>";
		}else{
			echo "<script>alert('添加失败')</script>";
		}

		
	}

	
    
}

