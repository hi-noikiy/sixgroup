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
<<<<<<< HEAD
		 //判断搜索
		 //  if(!empty($startDate) & $adress=="" & !empty($endDate)){
			// 	  $data = DB::table('room')
			// 	->where('r_starttime',$startDate)
			// 	->where('r_endtime',$endDate)
			// 	->paginate(3);
		 // }
		 //if(!empty($adress) & $startDate=="" & $endDate==""){
=======
		 $data = DB::table('room')
				->where('r_type',$adress)
				->paginate(3);
		 /*判断搜索
		  if(!empty($startDate) & $adress=="" & !empty($endDate)){
				  $data = DB::table('room')
				->where('r_starttime',$startDate)
				->where('r_endtime',$endDate)
				->paginate(3);
		 }
		 if(!empty($adress) & $startDate=="" & $endDate==""){
>>>>>>> d3923c8b0c077bb119c8081c36086dc27209a54f
				 $data = DB::table('room')
				//->where('ty_name',$adress)
				->paginate(3);
				//dd($data);
			 
<<<<<<< HEAD
		// }
		 // if(!empty($startDate) & !empty($adress) & !empty($endDate)){
			// 	$data = DB::table('room')
			// 	->join('type', 'room.r_type', '=', 'type.ty_id')
			// 	->where('r_starttime',$startDate)
			// 	->where('r_endtime',$endDate)
			// 	->where('ty_name',$adress)
			// 	->paginate(3);
		 // }
=======
		 }
		 if(!empty($startDate) & !empty($adress) & !empty($endDate)){
				$data = DB::table('room')
				->join('type', 'room.r_type', '=', 'type.ty_id')
				->where('r_starttime',$startDate)
				->where('r_endtime',$endDate)
				->where('ty_name',$adress)
				->paginate(3);
		 }*/
>>>>>>> d3923c8b0c077bb119c8081c36086dc27209a54f
		return view('Main/main',['room' => $data,'startDate'=>$startDate,'endDate'=>$endDate,'adress'=>$adress]);
	}


	/*多条件搜索*/
	public function search()
	{
		$site=Request::get('site');		//区域
		$r_price=Request::get('price');	//价格
		$rom=Request::get('room');	//房型
		$layout=Request::get('layout');	//房型
		//$price=explode('-',$r_price);
		//dd($price);
		$room=new \App\Room;	//实例化Model层
		$row=$room->search($site,$r_price,$rom,$layout);
		//dd($row);
		return view('Main/main',['room' => $row,'site'=>$site,'rom'=>$rom,'price'=>$r_price,'layout'=>$layout]);
	}

}