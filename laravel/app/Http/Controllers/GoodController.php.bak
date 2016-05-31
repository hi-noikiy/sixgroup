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
 *	@Author 	田渊博
 *	@Time 		2016/05/20
**/


class GoodController extends Controller{
	/*商品详情*/
	public function index(){
		$r_id=Input::get('r_id');
		
		$room=DB::table('room')	//房源信息
           // ->where('room.r_id', '=',$r_id)
            ->get();
        //查询房主其他房源
        $rooms=DB::table('room')->join('user','user.u_id','=','room.u_id')
        ->where('room.u_id', '=',$r_id)->get();

        //dd($rooms);

        $num=count($rooms); //获取房源数量
        //dd($num);
        $com=DB::table('comment')->join('room', 'room.r_id', '=', 'comment.r_id')->join('user','user.u_id','=','comment.u_id')
        	->where('room.r_id', '=',$r_id)
        	->get();
        	//dd($com);
       	$u_name=$com['0']->u_name;
       	$u_phone=$com['0']->u_phone;
        $sum=count($com);	//评论条数
        $img=$room[0]->r_img;	//获取图片字符串
        $imgs=explode('|',$img);	//转换数组
        //dd($room);
		return view('Good/good',['room'=>$room[0],'rooms'=>$rooms,'com'=>$com,'u_name'=>$u_name,'u_phone'=>$u_phone,'img'=>$imgs,'sum'=>$sum,'num'=>$num]);

	}

	/*商品添加*/
	public function add(){
        $sess=Session::get('u_name');
		if($sess){
			$r_id=Request::get('r_id');
            $startDate=Request::get('startDate');
            $endDate=Request::get('endDate');
            $re=DB::table('orde')->insert(
                    ['u_id' => 1, 'r_id' => $r_id,'o_start_time' => $startDate, 'o_end_time' => $endDate,]);
		}else{
           
            echo 1; 
        }

	}


    /*收藏*/
    public function coll(){
        $sess=Session::get('u_name');
        if($sess){
            $coll=Request::get('coll');
            //$re=DB::update('update user set coll=coll'.'|'.$coll."where u_name=".$sess);
            $cl=DB::table('user')
                ->where('u_name','=' ,$sess)
                ->select('coll')
                ->first();
            $col=$cl->coll;
            $colls=$col.'|'.$coll;
            $re=DB::update("update user set coll='$colls' where u_name='$sess'");
            if ($re) {
                echo 2;
            }
        }else{
            echo 1; 
        }

    }




    /*收藏*/
    public function cll(){
        $sess=Session::get('u_name');
        if($sess){
           echo 0;
        }else{
        echo 1; 
        }

    }

    /*我的收藏*/
    public function cl(){
        $sess=Session::get('u_name');
        $cl=DB::table('user')
                ->where('u_name','=',$sess)
                ->select('coll')
                ->first();
        $col=$cl->coll;
        $coll=explode('|',$col);
        //dd($coll);
        $data='';
        foreach ($coll as  $v) {
            $rom=DB::table('room')  //房源信息
            ->where('r_id', '=',$v)
            ->get();
            $data[]=$rom;
            
        }
        //dd($data);

        return view('Good/coll',['data'=>$data]);
        
    }

    public function wn(){
        $sess=Session::get('u_name');
       if ($sess) {
            echo 1;
       }else{
            echo 0;
       }

        
    }


    /*房源信息*/
	public function users(){
		$rooms=DB::table('room')->join('user','user.u_id','=','room.u_id')->select('u_name')	//房源信息
            ->where('room.u_id', '=',1)
            ->get();
        $num=count($room);
        return view('Good/good',['users'=>$rooms,'num'=>$num]);
	}
}