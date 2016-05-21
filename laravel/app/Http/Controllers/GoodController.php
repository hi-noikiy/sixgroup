<?php

namespace App\Http\Controllers;
use App\Http\Requests;
use Session;
use Cookie;
use DB;

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
		$r_id='7';
		$room=DB::table('room')
            ->join('comment', 'room.r_id', '=', 'comment.r_id')
            ->where('room.r_id', '=',$r_id)
            ->get();
        var_dump($room);exit;
		return view('Good/good',['room'=>$room[0]]);

	}


}