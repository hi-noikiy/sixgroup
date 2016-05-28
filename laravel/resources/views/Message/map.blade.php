<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>蜗牛短租</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    
    <link rel="shortcut icon" href="http://staticfile.tujia.com/PortalSite/Images/favicon.ico" type="image/x-icon" />
    <link rel="bookmark" href="http://staticfile.tujia.com/PortalSite/Images/favicon.ico" type="image/x-icon" />
    
    <meta name="mobile-agent" content="format=html5;url=http://m.tujia.com">
    <link rel="stylesheet" type="text/css" href="http://staticfile.tujia.com/portalsite2/styles/css_home?v=6b40c9a" />

    
    <link rel="stylesheet" type="text/css" href="http://staticfile.tujia.com/portalsite2/styles/im.css?v=6b40c9a" />
    <script type="text/javascript" src="http://staticfile.tujia.com/portalsite2/scripts/base/jquery.js?v=6b40c9a"></script>
    <script type="text/javascript" src="http://staticfile.tujia.com/portalsite2/scripts/js_common_head?v=6b40c9a"></script>
    
</head>
<body>

    <!-- head  start-->

<style>
    .site-logo-cont img{
        display: block;
        margin-top: 8px;
        text-indent: -999px;  
    }
</style>
   
    


<div class="hd-wrap-fluid ">
    <div class="m-hd">
        <div class="site-logo-cont">
             <img  height="45px" width="130px" src="images/logo1.png" alt="蜗牛logo">
             <!--<span class="logo-text"></span>-->
        </div>
        <div class="nav-list">
            <ul>
                <li class="first"><a href="{{URL('index')}}" class="home-link " target="_blank">首页</a></li>
                <li><a href="http://www.tujia.com/changzu/se0/"  target="_blank">周租月租</a></li>
                <li><a href="http://www.tujia.com/Experience/"  target="_blank">体验房</a></li>
                <li><a href="http://www.tujia.com/photowall/" target="_blank" >特色房</a></li>
                
                <li><a href="http://travel.tujia.com" target="_blank">社区</a></li>
                <li><a href="http://www.tujia.com/EntrustTreasure/"  target="_blank">买楼收租</a></li>
                <li><a href="http://www.tujia.com/TuYuan/"  target="_blank">途远度假</a></li>
            </ul>
        </div>

        <div class="sub-link" >
    @if($name=Session::get('u_name'))
    <a href="{{URL('center')}}">欢迎<font style="color: red">{{$name}}</font>来到蜗牛家!</a>
    <a href="{{URL('login/del')}}" rel="nofollow">退出</a>
    @else
    <a href="{{URL('register')}}" rel="nofollow" class="link-btn">注册</a>
    <a href="{{URL('login')}}" rel="nofollow">登录</a>
    @endif
    <a href="{{URL('room')}}" target="_blank" rel="nofollow" class="t-link-btn">免费发布房屋</a>
        </div>
    </div>
</div>
 <!-- head  end -->
    <div class="f-clear"></div>
    <script type="text/javascript">
        window["WEB_XHR_POLLING"] = true;

        var staticFileRoot = "http://staticfile.tujia.com";

        var MESSAGE_RADIO="http://staticfile.tujia.com/PortalSite2/radio/message.wav";
        var ORDERNOTICE_RADIO = "http://staticfile.tujia.com/PortalSite2/radio/ordernotice.wav";
    </script>
    



<script type="text/javascript" src="http://staticfile.tujia.com/worldsite/scripts/keywordsearch.js?v=6b40c9a"></script>
<script type="text/javascript">
    var TJ = TJ || {};
    TJ.IndexVariable = TJ.IndexVariable || {};
    TJ.IndexVariable.StaticFileRoot = 'http://staticfile.tujia.com';

   
    var worldUrl = "http://international.tujia.com";

    var travelGuidTotalCount=5;

</script>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
	<style type="text/css">
	body, html,#allmap {width: 100%;height: 100%;overflow: hidden;margin:0;font-family:"微软雅黑";}
	</style>
	<script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=hpB3Bmen6mtKKiSKOwj9h2U4lfdVrQwn
"></script>
	<title>地图展示</title>
</head>
<body>
	<div id="allmap"></div>
</body>
</html>
<script type="text/javascript">
	// 百度地图API功能
	var map = new BMap.Map("allmap");    // 创建Map实例
	map.centerAndZoom(new BMap.Point(116.417004,40.162472), 11);  // 初始化地图,设置中心点坐标和地图级别
	map.addControl(new BMap.MapTypeControl());   //添加地图类型控件
	map.setCurrentCity("北京");          // 设置地图显示的城市 此项是必须设置的
	map.enableScrollWheelZoom(true);     //开启鼠标滚轮缩放
</script>
