<?php

namespace App\Http\Controllers;
use App\Http\Requests;
use Session;
use Cookie;
use DB;

/**
 *	@Modular 	列表页面
 *	@Class 		Main
 *	@Author 	宁铭杰
 *	@Time 		2016/05/25
**/


class MainController extends Controller{


	/*列表*/
	public function index()
	{
		//列表信息
		$data = DB::table('room')
			->join('type', 'room.r_type', '=', 'type.ty_id')
			->paginate(3);
		return view('Main/main',['room'=>$data]);
	}


	/*多条件搜索*/
	public function roomSearch()
	{
		
	}

}