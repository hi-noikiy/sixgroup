<?php

namespace App\Http\Controllers;
use App\Http\Requests;
use Session;
use Cookie;
use DB,Input,Redirect,url,Validator,Request;

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
		 //判断搜索
		  if(!empty($startDate) & $adress=="" & !empty($endDate)){
				  $data = DB::table('room')
				->where('r_starttime',$startDate)
				->where('r_endtime',$endDate)
				->paginate(3);
		 }
		 if(!empty($adress) & $startDate=="" & $endDate==""){
				 $data = DB::table('room')
				->join('type', 'room.r_type', '=', 'type.ty_id')
				->where('ty_name',$adress)
				->paginate(3);
			 
		 }
		 if(!empty($startDate) & !empty($adress) & !empty($endDate)){
				$data = DB::table('room')
				->join('type', 'room.r_type', '=', 'type.ty_id')
				->where('r_starttime',$startDate)
				->where('r_endtime',$endDate)
				->where('ty_name',$adress)
				->paginate(3);
		 }
		return view('Main/main',['room' => $data,'startDate'=>$startDate,'endDate'=>$endDate,'adress'=>$adress]);
	}


	/*多条件搜索*/
	public function roomSearch()
	{
		
	}

}