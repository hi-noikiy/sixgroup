<?php

namespace App\Http\Controllers;
use App\Http\Requests;
use Session;
use Cookie;
use DB,Input,Redirect,url,Validator,Request;
use App\Room;
/**
 *	@Modular 	列表页面
 *	@Class 		Main
 *	@Author 	薛佳琪
 *	@Time 		2016/05/25
**/


class MainController extends Controller{


	/*列表*/
	public function index()
	{
		//列表信息
		 $startDate=Input::get('startDate');
		 //echo $startDate;die;
	     $endDate=Input::get('endDate');
		 $adress=Input::get('adress');
		 if ($adress) {
		 	 $data = DB::table('room')
				->where('r_type',$adress)
				->paginate(3);	
		 }else{
		 	 $data = DB::table('room')
				->paginate(3);
		 }	
		

		return view('Main/main',['room' => $data]);
	}


	/*多条件搜索*/
	public function search()
	{
		$site=Request::get('site');		//区域
		$r_price=Request::get('price');	//价格
		$rom=Request::get('room');	//房型
		$layout=Request::get('layout');	//房型
		//dd($price);
		$room=new \App\Room;	//实例化Model层
		$row=$room->search($site,$r_price,$rom,$layout);
		//dd($row);
		return view('Main/main',['room' => $row,'site'=>$site,'rom'=>$rom,'price'=>$r_price,'layout'=>$layout]);
	}

}