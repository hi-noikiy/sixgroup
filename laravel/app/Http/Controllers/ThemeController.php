<?php

namespace App\Http\Controllers;
use App\Http\Requests;
use Session;
use Cookie;
use DB;
use App\Http\Controllers\ThemeController;
use Request;

/**
 *	@Modular 	主题选择
 *	@Class 		Theme
 *	@Author 	薛佳琪
 *	@Time 		2016/05/25
**/
class ThemeController extends Controller
{  
	//展示首页（情侣主题）
	public function love()
	{
		 $love= DB::select("select * from  room  where r_theme='情侣套餐'");
		 return view('Theme/love',['love'=>$love]);
	}
	
	//展示首页（美景主题）
	public function scenery()
	{
		 $meijing= DB::select("select * from  room where r_theme='北京美景'");
		 //print_r($meijing);die;
		 return view('Theme/meijing',['meijing'=>$meijing]);
	}

	//展示首页（欢乐谷主题）
	public function kursaal()
	{
		 $hlg= DB::select("select * from  room where r_theme='欢乐谷'");
		 return view('Theme/hlg',['hlg'=>$hlg]);
	}
	//展示首页（房车主题）
	public function carhome()
	{
		 $carhome= DB::select("select * from  room where r_theme='家庭出游房车'");
		 
		 return view('Theme/carhome',['carhome'=>$carhome]);
	}
   
   //展示首页（精品主题）
	public function boutique()
	{
		 $jin= DB::select("select * from  room where r_theme='精品订购'");
		// print_r($jin);die;
		 return view('Theme/jing',['jin'=>$jin]);
	}
   

}
