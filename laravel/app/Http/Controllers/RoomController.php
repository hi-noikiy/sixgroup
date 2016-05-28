<?php

namespace App\Http\Controllers;
use App\Http\Requests;
use Session;
use Cookie;
//引入模型
//use   App\user
use DB,Input,Redirect,url,Validator,Request;

/**
 * 发布房源功能
 * ============================================================================
 * *http://localhost/snail/laravel/public/room
 * ----------------------------------------------------------------------------
 * @controller     RoomController
 * ============================================================================
 * $Author: 耿文龙
 * 2016/5/19
*/
class RoomController extends Controller
{
    //展示登陆页面
	public function index(){
		//判断用户是否登录
		if (session()->has('u_name')) {
			//查询景点
           $users = DB::table('area')->get();
			//展示发布房源信息页面
		 return view('Room/release',['users'=>$users]);
     
        }else{
			 //展示登陆页面
			return redirect("login");
		}
       
	}
	//房源基本信息入库
	public function room_message(){
		 // 从session中获取数据用户名...
         $u_name = session('u_name');
		 $user = DB::table('user')->where('u_name', $u_name)->first();
		 //房东ID
		 $u_id=$user->u_id;
		$r_type=Input::get('type');
		 $a_id=Input::get('a_id');
		$r_area=Input::get('area');
		//几室几厅几厨房几阳台
		$roomnum=Input::get('roomnum');
		$parlor=Input::get('parlor');
		$cookhouse=Input::get('cookhouse');
		$balcony=Input::get('balcony');
        $r_pattem=$roomnum."室".$parlor."厅".$cookhouse."厨房".$balcony."阳台";
		$r_people=Input::get('guestnum');
		//房源别名
		$r_alias=Input::get('alias');
         //房源地址
		$r_coordinate=Input::get('stock');
		$se=DB::table('room')->insert(
                ['u_id' => $u_id, 'r_title' => $r_alias,'r_type' => $r_type, 'r_pattem' => $r_pattem,'r_coordinate' => $r_coordinate, 'r_people' => $r_people, 'r_area' => $r_area,'a_id' => $a_id]);
		if($se){
			//跳到路由
			return redirect("room/particulars");
		}else{
			echo "失败";
		}
        
	}
	//展示房源照片视图层
	public function room_photo(){

		 return view('Room/photo');
       
	}
	//接收图片入库
	public function room_photos(){
		    //得到上条添加的id
		    $re=DB::select("select * from room  order by r_id desc");
		    $r_id=$re[0]->r_id;
            //多文件上传
			$data=Input::all();
			  $r_Img='';
             for($i=0; $i<count($data['roomImg']); $i++) 
            { 
             $tmpFilePath = $data['roomImg'][$i];
             $tmpName= $tmpFilePath->getClientOriginalName();
             $tmpFilePath->move('uploads',$tmpName);
             $r_Img.=$tmpName.'|';
             //var_dump($tmpName);
            }
			$sql="update room set r_img='$r_Img' where r_id='$r_id'";
			$se=DB::insert($sql);
			if($se){
                     //跳到路由
					return redirect("room/price");
			}else{
					echo "失败";
				 }
		    //单文件上传
			//$file = Input::file('myfile');
			///$time = date('Y-m-d H:i:s',time());
			//if($file -> isValid())
			//{
			//	$clientName =  $file ->  getClientOriginalName();
			//	 $tmpName    = $file ->  getFileName();     //缓存在tmp文件夹中的文件名例如php8933.tmp 这种类型的.
			//	 $realPath   = $file ->  getRealPath();    //
			//	 $entension = $file -> getClientOriginalExtension();   //上传文件的后缀
			//	 $mimeTye   = $file -> getMimeType();    //大家对mimeType应该不陌生了. 我得到的结果是 image/jpeg.
				 // echo $mimeTye;die;
			//	$newName = "img".rand(111,999).'.'.$entension;
				// echo $newName;die;
			//	$path = $file -> move('storage/lun',$newName);
			//	$paths = 'storage/lun/'.$newName;
			//	$sql="update room set r_img='$paths' where r_id='$r_id'";
			//	$se=DB::insert($sql);

			//	if($se){
                     //跳到路由
			//		return redirect("room/price");
			//	}else{
			//		echo "失败";
			//	}

				//return Redirect::action('admin\LunController@img_list');
			
	}
	//展示价格页面
	public function room_price(){
		//判断用户是否登录
		if (session()->has('u_name')) {
			//展示价格页面
		 return view('Room/price');
     
        }else{
			 //展示登陆页面
			return redirect("login");
		}
       
	}
	//房源价格审核入库
	public function room_prices(){
            //得到上条添加的id
		    $re=DB::select("select * from room  order by r_id desc");
		    $r_id=$re[0]->r_id;
			//接收表单值		
		   $r_price=Input::get('dayprice');
		   $r_checkin=Input::get('weekpriceRet');
		   $r_checkout=Input::get('monthpriceRet');
		   $r_seven=Input::get('checkintimeStr');
		   $r_days=Input::get('checkouttimeStr');
		   $sql="update room set r_price='$r_price',r_checkin='$r_checkin',r_checkout='$r_checkout',r_seven='$r_seven',r_days='$r_days' where r_id='$r_id'";
		   $se=DB::insert($sql);
		   if($se){
              //跳到路由
					return redirect("room/personage");
		   }else{
			   echo "错误";
		   }


	}
	//房源个人信息页面展示
	public function room_personage(){
		//判断用户是否登录
		if (session()->has('u_name')) {
			//展示价格页面
		 return view('Room/personage');
     
        }else{
			 //展示登陆页面
			return redirect("login");
		}

	}
	//房源个人信息表单值入库
	public function room_personages(){
           //得到上条添加的id
		    $re=DB::select("select * from room  order by r_id desc");
		    $r_id=$re[0]->r_id;
            //得到用户id
           $u_id=$re[0]->u_id;
			//接收表单值		
		   $r_uickname=Input::get('nickname');
		   $u_introduce=Input::get('introduce');
		   $qq=Input::get('qq');
		   $u_phone=Input::get('mobile');
           //身份证
		   $u_card=Input::get('paperno');
        $sql="update room set r_uickname='$r_uickname' where r_id='$r_id'";
        $se=DB::insert($sql);
        if($se){
            //user表入库
            $sql="update user set u_card='$u_card',u_evaluate='$u_introduce',qq='$qq',u_phone='$u_phone' where u_id='$u_id'";
            $re=DB::insert($sql);
            if($re){
                //跳到路由
                return redirect("room/success");
            }else{
                echo "失败";
            }
        }else{
            echo "失败";
        }
        //echo $r_nickname.$u_introduce.$u_phone.$u_card;

	}
    //房源发布成功页面
    public function room_success(){
        //判断用户是否登录
        if (session()->has('u_name')) {
            //展示价格页面
            return view('Room/basicinfo_5');

        }else{
            //展示登陆页面
            return redirect("login");
        }
    }
	//房源详情页面
	public function room_particulars(){
             //判断用户是否登录
		if (session()->has('u_name')) {
			//展示价格页面
		 return view('Room/basicinfo_2');
     
        }else{
			 //展示登陆页面
			return redirect("login");
		}
	}
	//房源详情页面入库
	public function room_particularse(){
		
		 //得到上条添加的id
		    $re=DB::select("select * from room  order by r_id desc");
		    $r_id=$re[0]->r_id;
			//接收表单值		
		   $r_district=Input::get('r_district');
		   $r_theme=Input::get('r_theme');
		   $r_lightspot=Input::get('intro');
		   $r_traffic=Input::get('traffic');
		   $r_facility=Input::get('surroundings');
		    $sql="update room set r_district='$r_district',r_theme='$r_theme',r_lightspot='$r_lightspot',r_traffic='$r_traffic',r_facility='$r_facility' where r_id='$r_id'";
		   $se=DB::insert($sql);
		   if($se){
              //跳到路由
					return redirect("room/photo");
		   }else{
			   echo "错误";
		   }
		  
	}

	
    
}

