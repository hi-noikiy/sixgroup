<?php

namespace App\Http\Controllers;
use App\Http\Requests;
use Session;
use Cookie;
use DB;
use App\Http\Controllers\ThemeController;
use Request;

class ThemeController extends Controller
{  
	//展示首页（情侣主题）
	public function love()
	{
		 $love= DB::select('select * from room where t_id=5');
		 $area= DB::select('select * from area limit 7');
		 //print_r($love);die;
		 return view('Theme/love',['love'=>$love,'area'=>$area]);
	}
	
	//展示首页（美景主题）
	public function meijing()
	{
		 $meijing= DB::select('select * from room where t_id=2');
		 $area= DB::select('select * from area limit 7');
		 //print_r($love);die;
		 return view('Theme/meijing',['lmeijing'=>$meijing,'area'=>$area]);
	}

	//展示首页（欢乐谷主题）
	public function hlg()
	{
		 $hlg= DB::select('select * from room where t_id=4');
		 $area= DB::select('select * from area limit 7');
		 //print_r($love);die;
		 return view('Theme/hlg',['hlg'=>$hlg,'area'=>$area]);
	}
	//展示首页（房车主题）
	public function carhome()
	{
		 $carhome= DB::select('select * from room where t_id=1');
		 $area= DB::select('select * from area limit 7');
		 //print_r($love);die;
		 return view('Theme/carhome',['carhome'=>$carhome,'area'=>$area]);
	}
   
   //展示首页（精品主题）
	public function jing()
	{
		 $jing= DB::select('select * from room where t_id=3');
		 $area= DB::select('select * from area limit 7');
		 //print_r($love);die;
		 return view('Theme/jing',['jing'=>$jing,'area'=>$area]);
	}
   

}
