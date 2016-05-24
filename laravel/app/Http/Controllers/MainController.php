<?php

namespace App\Http\Controllers;
use App\Http\Requests;
use Session;
use Cookie;
use DB;
class MainController extends Controller{
	public function index(){
		//列表信息
		$sql="select * from room join type on room.r_type=type.ty_id";
		$arr=DB::select($sql);
		return view('Main/main',['room'=>$arr]);
	}


}