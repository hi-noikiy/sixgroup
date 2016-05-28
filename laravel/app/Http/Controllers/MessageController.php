<?php

namespace App\Http\Controllers;
use App\Http\Requests;
use Session;
use Cookie;
use DB;
use App\Http\Controllers\MessageController;
use Request;

/**
 *	@Modular 	首页展示
 *	@Class 		Message
 *	@Author 	薛佳琪
 *	@Time 		2016/05/25
**/
class MessageController extends Controller
{  
	//展示首页
	public function index(){
		 $re= DB::select('select * from area limit 7');
		 $room= DB::select('select * from type inner join room on type.ty_id=room.r_type inner join area on room.r_id=area.a_id');
		 //print_r($room);die;
		 return view('Message/welcome',['re' => $re,'room'=>$room]);
	}
   //商品详情页
   public function goods(){
	     
         $room= DB::select('select * from room');
		 return view('Message/goods',['room' => $room]);
   }
   //底部处理
   public function about(){
	   //关于我们
	      return view('Message/about');
         
   }
   public function customer(){
	   //我是房客
	      return view('Message/customer');
	     
         
   }
   public function joins(){
	   //加入我们
	      return view('Message/join');
	     
         
   }
    public function map(){
	   //城市地图
	      return view('Message/map');
	     
         
   }

}
