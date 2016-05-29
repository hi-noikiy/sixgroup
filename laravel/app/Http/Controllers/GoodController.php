<?php

namespace App\Http\Controllers;
use App\Http\Requests;
use Session;
use Cookie;
use DB;
use Request;
use Input;

/**
 *	@Modular 	商品详情页面
 *	@Class 		Good
 *	@Author 	宁铭杰
 *	@Time 		2016/05/20
**/


class GoodController extends Controller{
	/*商品详情*/
	public function index(){
		$r_id=Input::get('r_id');
		
		$room=DB::table('room')	//房源信息
            //->where('room.u_id', '=',1)
            ->get();
        //查询房主其他房源
        $rooms=DB::table('room')->join('user','user.u_id','=','room.u_id')
        ->where('room.u_id', '=',1)->get();
        //dd($rooms);
        $num=count($rooms); //获取房源数量
        //dd($num);
        $com=DB::table('comment')->join('room', 'room.r_id', '=', 'comment.r_id')->join('user','user.u_id','=','comment.u_id')
        	->where('room.r_id', '=',1)
        	->get();
        	//dd($com['0']->u_name);
       	$u_name=$com['0']->u_name;
       	$u_phone=$com['0']->u_phone;
        $sum=count($com);	//评论条数
        $img=$room[0]->r_img;	//获取图片字符串
        $imgs=explode('|',$img);	//转换数组
        //var_dump($img);die;
		return view('Good/good',['room'=>$room[0],'rooms'=>$rooms,'com'=>$com,'u_name'=>$u_name,'u_phone'=>$u_phone,'img'=>$imgs,'sum'=>$sum,'num'=>$num]);

	}

	/*商品添加*/
	public function add(){
		$r_id=Request::get('r_id');
		$startDate=Request::get('startDate');
		$endDate=Request::get('endDate');
		$re=DB::table('orde')->insert(
                ['u_id' => 1, 'r_id' => $r_id,'o_start_time' => $startDate, 'o_end_time' => $endDate,]);
		if($re){
        
			echo 1;
		}

	}
	public function users(){
		$rooms=DB::table('room')->join('user','user.u_id','=','room.u_id')->select('u_name')	//房源信息
            ->where('room.u_id', '=',1)
            ->get();
        $num=count($room);
        return view('Good/good',['users'=>$rooms,'num'=>$num]);
	}
}