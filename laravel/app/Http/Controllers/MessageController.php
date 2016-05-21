<?php

namespace App\Http\Controllers;
use App\Http\Requests;
use Session;
use Cookie;
use DB;
use App\Http\Controllers\MessageController;
use Request;

class MessageController extends Controller
{  
	//展示首页
	public function index(){
		 $re= DB::select('select * from area limit 7');
		 $room= DB::select('select * from type inner join room on type.ty_id=room.r_type inner join area on room.r_id=area.a_id');
		 //print_r($room);die;
		 return view('Message/welcome',['re' => $re,'room'=>$room]);
	}
   //多条件搜索
   public function sreach(){
	     $room= DB::select('select * from room');
		 return view('Message/beijing_home',['room' => $room]);
	}
   //商品详情页
   public function goods(){
	     
         $room= DB::select('select * from room');
		 return view('Message/goods',['room' => $room]);
   }
}
