<?php
/*
 * @User Center  用户中心页面
 * @class   Center
 * @Author   张苗霞
 * @Time    2016-05-17
 */
namespace App\Http\Controllers;
use App\Http\Controllers\controller;
use Illuminate\Support\Facades\Redirect;
use Paginate;
use Session;
use Cookie;
use DB;
use Input;
use Request;
/*
 * @Center   个人用户中心
 */
class CenterController extends Controller
{
    /*
     * @index  显示个人中心页面
     */
    public function index()
    {
        //获取session
        $u_name=Session::get('u_name');
        $u_id=Session::get('u_id');
        $status=Session::get('status');
        //判断房客、房源
        if($status==1)
        {
            //执行sql语句
            $data=DB::table('orde')
                ->join('user', 'orde.u_id', '=', 'user.u_id')
                ->join('room', 'orde.r_id', '=', 'room.r_id')
                ->select('user.u_id', 'room.r_id','room.r_img','room.r_title','orde.o_id','orde.o_start_time','orde.o_price','orde.o_end_time','orde.o_state')
                ->where('user.u_id', '=',$u_id)->paginate(3);
            return view('Center/center',['data'=>$data]);
        }
        else if($status==0)
        {
            $u_id=Session::get('u_id');
            //执行sql语句
            $data=DB::table('user')
                ->join('room', 'user.u_id', '=', 'room.u_id')
                ->select('user.u_id', 'room.r_id','room.r_img','room.r_title','room.r_checkin','room.r_checkout','room.r_price','room.state','room.r_pattem','room.r_people','room.r_coordinate')
                ->where('user.u_id', '=',$u_id)->paginate(3);
            return view('Center/release',['data'=>$data]);
        }
    }
    /*
     * @delorder   订单删除
     */
    public function delorder()
    {
        //接收表单提交的数据
        $o_id=Input::get('o_id');
        //执行sql语句
        $sql=DB::table('orde')->where('o_id', '=', [$o_id])->delete();
        //判断删除是否成功
        if($sql)
        {
            echo 1;
        }
        else
        {
            echo 0;
        }
    }
    /*
     * @person   显示个人信息
     */
    public function person()
    {
        //取出session
        $u_name=Session::get('u_name');
        $u_id=Session::get('u_id');
        //查询个人信息
        $data = DB::table('user')->where('u_id', '=', [$u_id])->get();
        return view('Center/person',['data'=>$data]);
    }
    /*
     * @updateperson  添加个人资料
     */
    public function updateperson()
    {
        //获取session
        Session::get('u_name');
        $u_id=Session::get('u_id');
        //接收表单提交的数据
        $u_real_name=Input::get('u_real_name');
        $u_sex=Input::get('u_sex');
        $year = Input::get('year');
        $month = Input::get('month');
        $date = Input::get('date');
        $year = $year;
        $month = $month;
        $day = $date;
        $u_birthdy= $year."-".$month."-".$day;
        $u_city=Input::get('u_city');
        $u_study=Input::get('u_study');
        $u_hang=Input::get('u_hang');
        //执行sql语句
        $sql=DB::update('update user set u_real_name="'.$u_real_name.'",u_sex="'.$u_sex.'",u_city="'.$u_city.'",u_birthdy="'.$u_birthdy.'",u_study="'.$u_study.'",u_hang="'.$u_hang.'" where u_id = ?', [$u_id]);
        //判断添加成功
        if($sql)
        {
            return Redirect::action('CenterController@personal');
        }
    }
    /*
     * @personal  添加个人资料成功
     */
    public function personal()
    {
        //获取session
        Session::get('u_name');
        Session::get('u_id');
        return view('Center/personal');
    }
    /*
     * @order    订单管理页面
     */
    public function order()
    {
        //获取session
        Session::get('u_name');
        $u_id=Session::get('u_id');
        $status=Session::get('status');
        //用户表、房间表、订单表联查，判断房客，房源
        if($status==1)
        {
            //执行sql语句
            $data=DB::table('orde')
                ->join('user', 'orde.u_id', '=', 'user.u_id')
                ->join('room', 'orde.r_id', '=', 'room.r_id')
                ->select('user.u_id', 'room.r_id','room.r_img','room.r_title','orde.o_id','orde.o_start_time','orde.o_price','orde.o_end_time','orde.o_state')
                ->where('user.u_id', '=',$u_id)->paginate(3);
            return view('Center/order',['data'=>$data]);
        }
        else if($status==0)
        {
            $u_id=Session::get('u_id');
            //执行sql语句
            $data=DB::table('user')
                ->join('room', 'user.u_id', '=', 'room.u_id')
                ->select('user.u_id', 'room.r_id','room.r_img','room.r_title','room.r_checkin','room.r_checkout','room.r_price','room.state','room.r_pattem','room.r_people','room.r_coordinate')
                ->where('user.u_id', '=',$u_id)->paginate(3);
            return view('Center/housing',['data'=>$data]);
        }
    }
    /*
     * @orderdel    删除订单
     */
    public function orderdel()
    {
        //接收表单提交的数据
        $o_id=Input::get('o_id');
        //执行sql语句
        $sql=DB::table('orde')->where('o_id', '=', [$o_id])->delete();
        //判断删除是否成功
        if($sql)
        {
            echo 1;
        }
        else
        {
            echo 0;
        }
    }
    /*
     * @updpwd    修改密码页面
     */
    public function updpwd()
    {
        //获取session
        Session::get('u_name');
        $u_id=Session::get('u_id');
        //查询用户信息
        $data = DB::table('user')->where('u_id', '=', [$u_id])->get();
        return view('Center/updpwd',['data'=>$data]);
    }
    /*
     * @updatepwd  修改密码成功
     */
    public function updatepwd()
    {
        //获取session
        $u_id=Session::get('u_id');
        //接收表单提交的数据
        $npwd=Input::get('npwd');
        //修改密码
        $sql=DB::update('update user set u_pwd="'.$npwd.'" where u_id = ?', [$u_id]);
        //判断修改是否成功
        if($sql)
        {
            return Redirect::action('CenterController@pwdupdate');
        }
    }
    /*
     * @pwdupdate  修改密码成功
     */
    public function pwdupdate()
    {
        //获取session
        Session::get('u_name');
        Session::get('u_id');
        return view('Center/pwdupdate');
    }
    /*
     * @orderadd    订单添加订单添加页面
     */
    public function orderadd()
    {
        //接收表单提交的数据
        $r_id=Input::get('r_id');
        //查询房源表信息
        $data = DB::table('room')->where('r_id', '=', [$r_id])->get();
        return view('Center/orderadd',['data'=>$data]);
    }
    /*
     * @orderad  订单添加成功
     */
    public function orderad()
    {
        //获取session
        $u_id=Session::get('u_id');
        $status=Session::get('status');
        //接收表单提交的数据
        $r_id=Input::get('r_id');
        $r_price=Input::get('r_price');
        $o_people=Input::get('o_people');
        $u_name=Input::get('u_name');
        $u_phone=Input::get('u_phone');
        $u_email=Input::get('u_email');
        //执行sql语句
        $sql=DB::update('update user set u_name="'.$u_name.'",u_phone="'.$u_phone.'",u_email="'.$u_email.'" where u_id = ?', [$u_id]);
        $sql=DB::table('orde')->insert(['u_id'=>$u_id,'r_id'=>$r_id,'o_price' =>$r_price, 'o_people' =>$o_people]);
        if($status==1)
        {
            return Redirect::action('CenterController@order');
        }
        else if($status==0)
        {
            $u_id=Session::get('u_id');
            //执行sql语句
            $data=DB::table('user')
                ->join('room', 'user.u_id', '=', 'room.u_id')
                ->select('user.u_id', 'room.r_id','room.r_img','room.r_title','room.r_checkin','room.r_checkout','room.r_price','room.state','room.r_pattem','room.r_people','room.r_coordinate')
                ->where('user.u_id', '=',$u_id)->paginate(3);
            return view('Center/housing',['data'=>$data]);
        }
    }
    /*
     * @payorder    支付
     */
    public function payment()
    {
        // ******************************************************配置 start*************************************************************************************************************************
//↓↓↓↓↓↓↓↓↓↓请在这里配置您的基本信息↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓
//合作身份者id，以2088开头的16位纯数字
        $alipay_config['partner']		= '2088002075883504';
//收款支付宝账号
        $alipay_config['seller_email']	= 'li1209@126.com';
//安全检验码，以数字和字母组成的32位字符
        $alipay_config['key']			= 'y8z1t3vey08bgkzlw78u9cbc4pizy2sj';
//↑↑↑↑↑↑↑↑↑↑请在这里配置您的基本信息↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑
//签名方式 不需修改
        $alipay_config['sign_type']    = strtoupper('MD5');
//字符编码格式 目前支持 gbk 或 utf-8
//$alipay_config['input_charset']= strtolower('utf-8');
//ca证书路径地址，用于curl中ssl校验
//请保证cacert.pem文件在当前文件夹目录中
        $alipay_config['cacert']    = getcwd().'\\cacert.pem';
//访问模式,根据自己的服务器是否支持ssl访问，若支持请选择https；若不支持请选择http
        $alipay_config['transport']    = 'http';
// ******************************************************配置 end*************************************************************************************************************************

// ******************************************************请求参数拼接 start*************************************************************************************************************************
        $parameter = array(
            "service" => "create_direct_pay_by_user",
            "partner" => $alipay_config['partner'], // 合作身份者id
            "seller_email" => $alipay_config['seller_email'], // 收款支付宝账号
            "payment_type"	=> '1', // 支付类型
            "notify_url"	=> "http://bw.com133.com/notify_url.php", // 服务器异步通知页面路径
            "return_url"	=> "http://bw.com133.com/return_url.php", // 页面跳转同步通知页面路径
            "out_trade_no"	=> "2013145203 344500345763475347", // 商户网站订单系统中唯一订单号
            "subject"	=> "订单", // 订单名称
            "total_fee"	=> "0.01", // 付款金额
            "body"	=> "", // 订单描述 可选
            "show_url"	=> "", // 商品展示地址 可选
            "anti_phishing_key"	=> "", // 防钓鱼时间戳  若要使用请调用类文件submit中的query_timestamp函数
            "exter_invoke_ip"	=> "", // 客户端的IP地址
            "_input_charset"	=> 'utf-8', // 字符编码格式
        );
// 去除值为空的参数
        foreach ($parameter as $k => $v) {
            if (empty($v)) {
                unset($parameter[$k]);
            }
        }
// 参数排序
        ksort($parameter);
        reset($parameter);

// 拼接获得sign
        $str = "";
        foreach ($parameter as $k => $v) {
            if (empty($str)) {
                $str .= $k . "=" . $v;
            } else {
                $str .= "&" . $k . "=" . $v;
            }
        }
        $parameter['sign'] = md5($str . $alipay_config['key']);
        $parameter['sign_type'] = $alipay_config['sign_type'];
// ******************************************************请求参数拼接 end*************************************************************************************************************************


// ******************************************************模拟请求 start*************************************************************************************************************************
        $sHtml = "<form id='alipaysubmit' name='alipaysubmit' action='https://mapi.alipay.com/gateway.do?_input_charset=utf-8' method='get'>";
        foreach ($parameter as $k => $v) {
            $sHtml.= "<input type='hidden' name='" . $k . "' value='" . $v . "'/>";
        }

        $sHtml = $sHtml."<script>document.forms['alipaysubmit'].submit();</script>";

// ******************************************************模拟请求 end*************************************************************************************************************************
        echo $sHtml;

    }
    /*
     * @headp  上传头像
     */
    public function headp()
    {
        //获取session
        $u_id=Session::get('u_id');
        $u_name=Session::get('u_name');
        //查询用户信息
        $data = DB::table('user')->where('u_id', '=', [$u_id])->get();
        return view('Center/headp',['data'=>$data]);
    }
    /*
     * @headsuccess   上传头像成功
     */
    public function headsuccess()
    {
        //获取session
        $u_id=Session::get('u_id');
        //接收表单提交的数据
        $data =Request::all();
        //图片名字
        $clientName = $data['u_img'] ->  getClientOriginalName();
        //存储路径
        $path = $data['u_img'] -> move('uploads/',$clientName);
        //执行sql语句
        $sql= DB::update('update user set u_img="'.$clientName.'" where u_id = ?', [$u_id]);
        return Redirect::action('CenterController@headlist');
    }
    /*
     * @headlist  显示头像
     */
    public function headlist()
    {
        //获取session
        $u_id=Session::get('u_id');
        //查询用户信息
        $data = DB::table('user')->where('u_id', '=', [$u_id])->get();
        return view('Center/person',['data'=>$data]);
    }
    /*
     * @comment   评论
     */
    public function comment()
    {
        //获取session
        Session::get('u_name');
        $u_id=Session::get('u_id');
        //接收表单提交的数据
        $r_id=Input::get('r_id');
        $data = DB::table('room')->where('r_id', '=', [$r_id])->get();
        return view('Center/comment',['data'=>$data]);
    }
    /*
     * @commentsuc  评论成功
     */
    public function commentsuc()
    {
        //获取session
        $u_id=Session::get('u_id');
        $r_id=Input::get('r_id');
        $c_content=Input::get('c_content');
        $c_time=date('Y-m-d H:i:s',time());
        $sql=DB::table('comment')->insert(
            ['r_id' => $r_id, 'u_id' => $u_id,'c_content'=>$c_content,'c_time'=>$c_time]);
        if($sql)
        {
            return view('Center/personals');
        }
    }
}
?>