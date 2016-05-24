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
		$r_id=isset($_GET['r_id'])?$_GET['r_id']:'';
		//$r_id=1;
		$room=DB::table('room')
            ->where('room.r_id', '=',$r_id)
            ->get();
        $com=DB::table('comment')
        	->join('room', 'room.r_id', '=', 'comment.r_id')
        	->where('room.r_id', '=',$r_id)
        	->get();
        //var_dump($com);exit;
		return view('Good/good',['room'=>$room[0],'com'=>$com]);

	}

	/*商品添加*/
	public function add(){
		$r_id=$_GET['r_id']?$_GET['r_id']:'';
		$startDate=$_GET['startDate']?$_GET['startDate']:'';
		$endDate=$_GET['endDate']?$_GET['endDate']:'';
		$re=DB::table('orde')->insert(
                ['u_id' => 1, 'r_id' => $r_id,'o_start_time' => $startDate, 'o_end_time' => $endDate,]);
		if($re){
        
			echo 1;
		}

	}


}