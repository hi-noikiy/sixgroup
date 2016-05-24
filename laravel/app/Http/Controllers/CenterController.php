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
use Illuminate\Pagination\Paginator;
use Session;
use Cookie;
use DB;
use Input;

class CenterController extends Controller
{
    /*
     * @index  显示个人中心页面
     */
    public function index()
    {
        //存储session
        $u_name=Session::get('u_name');
        $u_id=Session::get('u_id');
        $sql = "select * from orde inner join user on orde.u_id=user.u_id inner join room on orde.r_id=room.r_id where user.u_id='$u_id'";
        $data = DB::select($sql);
        return view('Center/center',['data'=>$data]);
    }
    /*
     * @delorder   订单删除
     */
    public function delorder()
    {
        //接收id
        $o_id=Input::get('o_id');
        //删除sql语句
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
        //添加sql语句
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
        //用户表、房间表、订单表联查
        $sql = "select * from orde inner join user on orde.u_id=user.u_id inner join room on orde.r_id=room.r_id where user.u_id='$u_id'";
        $data = DB::select($sql);
        return view('Center/order',['data'=>$data]);
    }
    /*
     * @orderdel    删除订单
     */
    public function orderdel()
    {
        //接收id
        $o_id=Input::get('o_id');
        //删除sql语句
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
        Session::get('u_id');
        return view('Center/updpwd');
    }
    /*
     * @updatepwd  修改密码成功
     */
    public function updatepwd()
    {
        $u_id=Session::get('u_id');
        $npwd=Input::get('npwd');
        $sql=DB::update('update user set u_pwd="'.$npwd.'" where u_id = ?', [$u_id]);
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
        Session::get('u_name');
        Session::get('u_id');
        return view('Center/pwdupdate');
    }
    /*
     * @room    显示房间信息
     */
    public function room()
    {
        return view('Center/room');
    }
    /*
     * @orderadd    订单添加订单添加页面
     */
    //
    public function orderadd()
    {
        $r_id=Input::get('r_id');
        Session::put('r_id');
        $r_id=Session::get('r_id');
        $data = DB::table('room')->where('r_id', '=', [$r_id])->get();
        return view('Center/orderadd',['data'=>$data]);
    }
    /*
     * @orderad  订单添加成功
     */
    public function orderad()
    {
        Session::get('u_id');
        $u_id=Session::get('u_id');
        $r_id=Session::get('r_id');
        //接收数据
        $r_price=Input::get('r_price');
        $o_people=Input::get('o_people');
        $u_name=Input::get('u_name');
        $u_phone=Input::get('u_phone');
        $u_email=Input::get('u_email');
        //执行sql语句
        DB::update('update user set u_name="'.$u_name.'",u_phone="'.$u_phone.'",u_email="'.$u_email.'" where u_id = ?', [$u_id]);
        DB::table('orde')->insert(['u_id'=>$u_id,'r_id'=>$r_id,'o_price' =>$r_price, 'o_people' =>$o_people]);
            return Redirect::action('CenterController@payment');
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
        $u_id=Session::get('u_id');
        return view('Center/headp');
    }
    public function headsuccess()
    {
        $result = array();
        $result['success'] = false;
        $success_num = 0;
        $msg = '';
//上传目录
        $dir = $_SERVER['DOCUMENT_ROOT']."/web/snail/laravel/public/upload/data";
// 取服务器时间+8位随机码作为部分文件名，确保文件名无重复。
        //$filename = date("YmdHis").'_'.floor(microtime() * 1000).'_'.createRandomCode(8);
//upload_url中传递的额外的参数，如果定义的method为get请换为$_GET
        $result["u_id"]	= $_POST["u_id"];
// 处理原始图片开始------------------------------------------------------------------------>
//默认的 file 域名称是__source，可在插件配置参数中自定义。参数名：src_field_name
        $source_pic = $_FILES["__source"];
//如果在插件中定义可以上传原始图片的话，可在此处理，否则可以忽略。
        if ($source_pic)
        {
            if ( $source_pic['error'] > 0 )
            {
                $msg .= $source_pic['error'];
            }
            else
            {
                //原始图片的文件名，如果是本地或网络图片为原始文件名、如果是摄像头拍照则为 *FromWebcam.jpg
                $sourceFileName = $source_pic["name"];
                //原始文件的扩展名(不包含“.”)
                $sourceExtendName = substr($sourceFileName, strripos($sourceFileName, "."));
                //保存路径
                $savePath = "$dir\php_source_$filename.".$sourceExtendName;
                //当前头像基于原图的初始化参数（只有上传原图时才会发送该数据，且发送的方式为POST），用于修改头像时保证界面的视图跟保存头像时一致，提升用户体验度。
                //修改头像时设置默认加载的原图url为当前原图url+该参数即可，可直接附加到原图url中储存，不影响图片呈现。
                $init_params = $_POST["__initParams"];
                $result['sourceUrl'] = toVirtualPath($savePath).$init_params;
                move_uploaded_file($source_pic["tmp_name"], $savePath);
                $success_num++;
            }
        }
//<------------------------------------------------------------------------处理原始图片结束
// 处理头像图片开始------------------------------------------------------------------------>
//头像图片(file 域的名称：__avatar1,2,3...)。
        $avatars = array("__avatar1", "__avatar2", "__avatar3");
        $avatars_length = count($avatars);
        for ( $i = 0; $i < $avatars_length; $i++ )
        {
            $avatar = $_FILES[$avatars[$i]];
            $avatar_number = $i + 1;
            if ( $avatar['error'] > 0 )
            {
                $msg .= $avatar['error'];
            }
            else
            {
                $savePath = "$dir\\" . $avatar_number . "_".$result["u_id"].".jpg";
                $result['avatarUrls'][$i] = toVirtualPath($savePath);
                move_uploaded_file($avatar["tmp_name"], $savePath);
                $success_num++;
            }
        }
//<------------------------------------------------------------------------处理头像图片结束


        $result['msg'] = $msg;
        if ($success_num > 0)
        {
            $result['success'] = true;
        }
//返回图片的保存结果（返回内容为json字符串）
        print json_encode($result);
    }
}