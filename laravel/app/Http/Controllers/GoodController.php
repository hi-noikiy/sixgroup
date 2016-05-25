<?php

namespace App\Http\Controllers;
use App\Http\Requests;
use Session;
use Cookie;
use DB;
use Request;

/**
 *	@Modular 	商品详情页面
 *	@Class 		Good
 *	@Author 	宁铭杰
 *	@Time 		2016/05/20
**/


class GoodController extends Controller
{

	/*商品详情*/
	public function index(){
		$r_id=Request::get('r_id');
		$room=DB::table('room')	//房源信息
            ->where('room.r_id', '=',$r_id)
            ->get();
        $com=DB::table('comment')	//评论信息
        	->join('room', 'room.r_id', '=', 'comment.r_id')
        	->where('room.r_id', '=',$r_id)
        	->get();
        //var_dump($com);exit;
		return view('Good/good',['room'=>$room[0],'com'=>$com]);

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


}