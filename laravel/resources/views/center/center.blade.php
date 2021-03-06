<!DOCTYPE HTML>
<html>
<head>
    <meta http-equiv="Cache-Control" content="no-transform" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="
" />
    <meta name="keywords" content="
" />
    <meta http-equiv="X-UA-Compatible" content="IE=8">
    <link rel="shortcut icon" href="http://staticfile.tujia.com/PortalSite/Images/favicon.ico" type="image/x-icon" />
    <link rel="bookmark" href="http://staticfile.tujia.com/PortalSite/Images/favicon.ico" type="image/x-icon" />
    <title>
        我的订单- 蜗牛短租
    </title>

    <link rel="stylesheet" type="text/css" href="http://staticfile.tujia.com/portalsite2/styles/css_user?v=405bfdc" />
    <link rel="stylesheet" href="http://staticfile.tujia.com/bookingSite/Styles/common.css">
    <link href="http://staticfile.tujia.com/Common/styles/powerFloat.css" rel="stylesheet" type="text/css" />
    <style>
        /*从商户拷贝过来的样式，以后请统一化*/
        .toTips {
            font: 12px/1.6 '微软雅黑';
            color: #353535;
            background: #fff;
            width: 300px;
            padding: 10px;
            border: 1px #ccc solid;
            border-top: 2px solid #fe6601;
        }
    </style>

    <link rel="stylesheet" type="text/css" href="http://staticfile.tujia.com/portalsite2/styles/im.css?v=405bfdc" />
    <link rel="stylesheet" type="text/css" href="http://staticfile.tujia.com/portalsite2/styles/menu.css?v=405bfdc" />
    <script type="text/javascript" src="http://staticfile.tujia.com/portalsite2/scripts/base/jquery.js?v=405bfdc"></script>
    <link rel="stylesheet" type="text/css" href="http://staticfile.tujia.com/portalsite2/styles/colorbox.css?v=405bfdc" />
    <script type="text/javascript" src="http://staticfile.tujia.com/portalsite2/scripts/base/colorbox.js?v=405bfdc"></script>

    <script type="text/javascript" src="http://staticfile.tujia.com/portalsite2/scripts/js_user_head?v=405bfdc"></script>
    <script src="http://staticfile.tujia.com/PortalSite2/Scripts/Base/validator.unobtrusive.js" type="text/javascript"></script>
    <script src="http://staticfile.tujia.com/Common/Scripts/jquery.unobtrusive-ajax.js" type="text/javascript"></script>
    <script src="http://staticfile.tujia.com/Common/Scripts/jquery.powerFloat.js" type="text/javascript"></script>

    <script type="text/javascript">
        //window["WEB_XHR_POLLING"] = true;
        var MESSAGE_RADIO = "http://staticfile.tujia.com/PortalSite2/radio/message.wav", ORDERNOTICE_RADIO = "http://staticfile.tujia.com/PortalSite2/radio/ordernotice.wav";
    </script>
</head>
<body>
<!--M-81-140-->
<!-- head  start-->
    @include('components.head');
<!-- head  end -->
<div  class="container_24">
    <div class="grid_24" id="dir"><a href="http://localhost/web/snail/laravel/public/">蜗牛短租</a><em>&gt;</em>我的订单</div>
</div>
<div class="container_24 clearfix" id="orderWrapper">
    <div class="grid_5">

        <div remindsummaryurl="/WebParts/Portal/UserMessageSummary"></div>
        <div class="userInfoWrapper">
            <p>
        <span class="fb" style="font-size: 15px">
        <?php echo Session::get('u_name')?>
        </span>
                <br />

                <br />
            </p>
        </div>

        <div class="navWrapper">
            <h5>我的订单</h5>
            <ul>
                <li><a id="myorders" href="order" class="current" onclick="_gaq.push(['_trackEvent', 'pcUserInfo', '订单管理']);">订单管理<span></span></a></li>
            </ul>
        </div>
        <div class="navWrapper">
            <h5>
                个人中心
            </h5>
            <ul>
                <li><a id="myUserInfoInfo" href="person" onclick="_gaq.push(['_trackEvent', 'pcUserInfo', '个人资料']);">个人资料</a></li>
                <li><a id="mypassword" href="updpwd" onclick="_gaq.push(['_trackEvent', 'pcUserInfo', '修改密码']);">修改密码</a></li>
                <li><a id="myUserInfoInfo" href="headp" onclick="_gaq.push(['_trackEvent', 'pcUserInfo', '头像上传']);">头像上传</a></li>
            </ul>
        </div>
    </div>
    <div class="grid_19" id="order">

        <div class="orderHead">
            <h4>我的订单</h4>

        </div>
        <div class="order-list">
            @foreach($data as $v)
            <div class="order-content">
                <table class="order-table">
                    <thead>
                    <tr>
                        <th colspan="5">
                            <div class="order-head">
                                <p class="order-info">
                                    订单号：<span class="order-number"><?php
                                        $arr=range(1,10);
                                        shuffle($arr);
                                        foreach($arr as $values)
                                        {
                                            echo $values." ";
                                        }
                                        ?></span><span class="prepaid-rules">
                            </span>
                                </p>
                                <a href="payorder" target="_blank" class="link-btn"><strong></strong></a>
                                <span>
                                <input name="_token" value="{{csrf_token()}}" type="hidden"/>
                                <a href="javascript:void(0)" onclick="deleteorder({{$v->o_id}})">删除订单</a></span>
                            </div>
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                        <tr class="first">
                            <td rowspan="2" class="pic-box">
                                <?php $img=explode('|',$v->r_img) ?>
                                <a href="{{URL('good')}}" target="_blank"><img src="../public/uploads/{{$img[0]}}" alt="" width="70" height="43" /></a>
                            </td>
                            <td colspan="4">
                                <a href="{{URL('good')}}" target="_blank">{{$v->r_title}}</a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p class="p-item">入住：<span class="date-box">{{$v->o_start_time}}</span></p>
                                <p class="p-item">订金：<span class="price-box"><dfn class="">¥</dfn>{{$v->o_price}}</span></p>
                            </td>
                            <td>
                                <p class="p-item">退房：<span class="date-box">{{$v->o_end_time}}</span></p>
                            </td>
                            <td>
                                <p class="p-item">房费：<span class="price-box"><dfn class="">¥</dfn>{{$v->o_price}}</span><span class="divItem">
                                        @if($v->o_state==0)
                                            <a href="payment">未付款</a>
                                        @else
                                            付款成功<br/>
                                            <a href="comment?r_id={{$v->r_id}}">我要评论</a>
                                        @endif
                                    </span>
                                </p>

                            </td>
                        <tr></tr>
                    </tbody>
                </table>
            </div>
            @endforeach
            <center>
                {!! $data->render() !!}
            </center>
        </div>

    </div>
</div>

<!-- footer Start -->
@include('components.foot');
<!-- footer  End -->
<div class="edm-pop " id="dialog" style="display: none">
    <div class="edm-hd"><h2>订阅邮件</h2><a class="close-btn" title="关闭"></a></div>
    <div class="edm-bd">
        <div class="msg-box">
            <img src="http://staticfile.tujia.com/portalsite2/images/loading.gif"/>正在提交订阅
        </div>
    </div>
</div>
<script type="text/javascript">
    var _mvq = _mvq || [];
    _mvq.push(
            ['$setAccount', 'm-21039-1'],
            ['$logConversion']
    );
    (function () {
        var mvjs = document.createElement('script');
        mvjs.type = 'text/javascript';
        mvjs.async = true;
        mvjs.src = ('https:' == document.location.protocol ? 'https://static-ssl' : 'http://static') + ".mediav.com/mv.js";
        (document.getElementsByTagName('head')[0] ||
        document.getElementsByTagName('body')[0]).appendChild(mvjs);
    })();
</script>

<script type="text/javascript">
    setTimeout(function(){var a=document.createElement("script");
        var b=document.getElementsByTagName("script")[0];
        a.src=document.location.protocol+"//script.crazyegg.com/pages/scripts/0025/8248.js?"+Math.floor(new Date().getTime()/3600000);
        a.async=true;a.type="text/javascript";b.parentNode.insertBefore(a,b)}, 1);
</script>




<script>
    (function () {

        var bp = document.createElement('script');
        bp.async = 'async';
        bp.src = '//push.zhanzhang.baidu.com/push.js';
        var s = document.getElementsByTagName("script")[0];
        s.parentNode.insertBefore(bp, s);
    })();
</script>



<script type="text/javascript">
    var staticFileRoot = "http://staticfile.tujia.com",
            minDate = "2016-05-17",
            mindate =  new Date(2016,4,17),
            maxDate = "2016-11-13",
            maxdate= new Date(2016,10,13),
            houseId,
            ServerDomain = "tujia.com",
            TUJIA_CLIENTID = 'cd78a727-75e2-4084-9fe2-2dde71b85ac8';

    var portalUrl = "http://www.tujia.com";
    var imUrl = "http://im.tujia.com";
    var customerUrl =  "http://vip.tujia.com";

    var favoriteUrl = "http://vip.tujia.com";
    var cityInfo = {"citys":[{"id":1,"name":"三亚","pinyin":"sanya","scenicspot":"","scenicspotId":0,"keyword":["sy"]},{"id":2,"name":"博鳌(琼海)","pinyin":"boao","scenicspot":"","scenicspotId":0,"keyword":["ba","qionghai","qh"]},{"id":3,"name":"五指山","pinyin":"wuzhishan","scenicspot":"","scenicspotId":0,"keyword":["wzs"]},{"id":4,"name":"文昌","pinyin":"wenchang","scenicspot":"","scenicspotId":0,"keyword":["wc"]},{"id":5,"name":"陵水(三亚)","pinyin":"lingshui","scenicspot":"","scenicspotId":0,"keyword":["ls","sanya","sy"]},{"id":6,"name":"黄山","pinyin":"huangshan","scenicspot":"","scenicspotId":0,"keyword":["hs"]},{"id":7,"name":"杭州","pinyin":"hangzhou","scenicspot":"","scenicspotId":0,"keyword":["hz"]},{"id":8,"name":"青岛","pinyin":"qingdao","scenicspot":"","scenicspotId":0,"keyword":["qd"]},{"id":9,"name":"南京","pinyin":"nanjing","scenicspot":"","scenicspotId":0,"keyword":["nj"]},{"id":10,"name":"成都","pinyin":"chengdu","scenicspot":"","scenicspotId":0,"keyword":["cd"]},{"id":11,"name":"苏州","pinyin":"suzhou","scenicspot":"","scenicspotId":0,"keyword":["sz"]},{"id":12,"name":"丽江","pinyin":"lijiang","scenicspot":"","scenicspotId":0,"keyword":["lj"]},{"id":13,"name":"周庄","pinyin":"zhouzhuang","scenicspot":"","scenicspotId":0,"keyword":["zz"]},{"id":14,"name":"无锡","pinyin":"wuxi","scenicspot":"","scenicspotId":0,"keyword":["wx"]},{"id":15,"name":"九寨沟","pinyin":"jiuzhaigou","scenicspot":"","scenicspotId":0,"keyword":["jzg"]},{"id":16,"name":"宁波","pinyin":"ningbo","scenicspot":"","scenicspotId":0,"keyword":["nb"]},{"id":17,"name":"西安","pinyin":"xian","scenicspot":"","scenicspotId":0,"keyword":["xa"]},{"id":18,"name":"大连","pinyin":"dalian","scenicspot":"","scenicspotId":0,"keyword":["dl"]},{"id":19,"name":"济南","pinyin":"jinan","scenicspot":"","scenicspotId":0,"keyword":["jn"]},{"id":20,"name":"舟山","pinyin":"zhoushan","scenicspot":"","scenicspotId":0,"keyword":["zs"]},{"id":22,"name":"重庆","pinyin":"chongqing","scenicspot":"","scenicspotId":0,"keyword":["cq"]},{"id":21,"name":"常州","pinyin":"changzhou","scenicspot":"","scenicspotId":0,"keyword":["cz"]},{"id":23,"name":"上海","pinyin":"shanghai","scenicspot":"","scenicspotId":0,"keyword":["sh"]},{"id":25,"name":"延安","pinyin":"yanan","scenicspot":"","scenicspotId":0,"keyword":["ya"]},{"id":27,"name":"镇江","pinyin":"zhenjiang","scenicspot":"","scenicspotId":0,"keyword":["zj"]},{"id":26,"name":"扬州","pinyin":"yangzhou","scenicspot":"","scenicspotId":0,"keyword":["yz"]},{"id":28,"name":"西塘","pinyin":"xitang","scenicspot":"","scenicspotId":0,"keyword":["xt"]},{"id":30,"name":"威海","pinyin":"weihai","scenicspot":"","scenicspotId":0,"keyword":["wh"]},{"id":35,"name":"营口","pinyin":"yingkou","scenicspot":"","scenicspotId":0,"keyword":["yk"]},{"id":29,"name":"蓬莱","pinyin":"penglai","scenicspot":"","scenicspotId":0,"keyword":["pl"]},{"id":38,"name":"枣庄","pinyin":"zaozhuang","scenicspot":"","scenicspotId":0,"keyword":["zz"]},{"id":37,"name":"平遥","pinyin":"pingyao","scenicspot":"","scenicspotId":0,"keyword":["py"]},{"id":32,"name":"桂林","pinyin":"guilin","scenicspot":"","scenicspotId":0,"keyword":["gl"]},{"id":33,"name":"厦门","pinyin":"xiamen","scenicspot":"","scenicspotId":0,"keyword":["xm"]},{"id":36,"name":"大理","pinyin":"dali","scenicspot":"","scenicspotId":0,"keyword":["dl"]},{"id":39,"name":"连云港","pinyin":"lianyungang","scenicspot":"","scenicspotId":0,"keyword":["lyg"]},{"id":40,"name":"峨眉山","pinyin":"emeishan","scenicspot":"","scenicspotId":0,"keyword":["ems"]},{"id":43,"name":"万宁","pinyin":"wanning","scenicspot":"","scenicspotId":0,"keyword":["wn"]},{"id":42,"name":"庐山","pinyin":"lushan","scenicspot":"","scenicspotId":0,"keyword":["ls"]},{"id":44,"name":"烟台","pinyin":"yantai","scenicspot":"","scenicspotId":0,"keyword":["yt"]},{"id":31,"name":"昆明","pinyin":"kunming","scenicspot":"","scenicspotId":0,"keyword":["km"]},{"id":45,"name":"广州","pinyin":"guangzhou","scenicspot":"","scenicspotId":0,"keyword":["gz"]},{"id":46,"name":"昆山","pinyin":"kunshan","scenicspot":"","scenicspotId":0,"keyword":["ks"]},{"id":48,"name":"北京","pinyin":"beijing","scenicspot":"","scenicspotId":0,"keyword":["bj"]},{"id":47,"name":"栖霞(烟台)","pinyin":"qixia","scenicspot":"","scenicspotId":0,"keyword":["qx","yantai","yt"]},{"id":49,"name":"深圳","pinyin":"shenzhen","scenicspot":"","scenicspotId":0,"keyword":["sz"]},{"id":50,"name":"合肥","pinyin":"hefei","scenicspot":"","scenicspotId":0,"keyword":["hf"]},{"id":51,"name":"珠海","pinyin":"zhuhai","scenicspot":"","scenicspotId":0,"keyword":["zh"]},{"id":52,"name":"南通","pinyin":"nantong","scenicspot":"","scenicspotId":0,"keyword":["nt"]},{"id":54,"name":"盐城","pinyin":"yancheng","scenicspot":"","scenicspotId":0,"keyword":["yc"]},{"id":55,"name":"武汉","pinyin":"wuhan","scenicspot":"","scenicspotId":0,"keyword":["wh"]},{"id":56,"name":"腾冲","pinyin":"tengchong","scenicspot":"","scenicspotId":0,"keyword":["tc"]},{"id":59,"name":"婺源","pinyin":"wuyuan","scenicspot":"","scenicspotId":0,"keyword":["wy"]},{"id":58,"name":"西双版纳","pinyin":"xishuangbanna","scenicspot":"","scenicspotId":0,"keyword":["xsbn"]},{"id":61,"name":"普洱市","pinyin":"puer","scenicspot":"","scenicspotId":0,"keyword":["pe"]},{"id":57,"name":"香格里拉","pinyin":"xianggelila","scenicspot":"","scenicspotId":0,"keyword":["xgll"]},{"id":62,"name":"武夷山","pinyin":"wuyishan","scenicspot":"","scenicspotId":0,"keyword":["wys"]},{"id":60,"name":"张家口","pinyin":"zhangjiakou","scenicspot":"","scenicspotId":0,"keyword":["zjk"]},{"id":63,"name":"长沙","pinyin":"changsha","scenicspot":"","scenicspotId":0,"keyword":["cs"]},{"id":64,"name":"哈尔滨","pinyin":"haerbin","scenicspot":"","scenicspotId":0,"keyword":["heb"]},{"id":65,"name":"秦皇岛","pinyin":"qinhuangdao","scenicspot":"","scenicspotId":0,"keyword":["qhd"]},{"id":66,"name":"天津","pinyin":"tianjin","scenicspot":"","scenicspotId":0,"keyword":["tj"]},{"id":67,"name":"千岛湖","pinyin":"qiandaohu","scenicspot":"","scenicspotId":0,"keyword":["qdh"]},{"id":68,"name":"佛山","pinyin":"foshan","scenicspot":"","scenicspotId":0,"keyword":["fs"]},{"id":396,"name":"香港","pinyin":"xianggang","scenicspot":"","scenicspotId":0,"keyword":["xg"]},{"id":126,"name":"沈阳","pinyin":"shenyang","scenicspot":"","scenicspotId":0,"keyword":["sy"]},{"id":346,"name":"南昌","pinyin":"nanchang","scenicspot":"","scenicspotId":0,"keyword":["nc"]},{"id":287,"name":"兰州","pinyin":"lanzhou","scenicspot":"","scenicspotId":0,"keyword":["lz"]},{"id":216,"name":"泰安","pinyin":"taian","scenicspot":"","scenicspotId":0,"keyword":["ta"]},{"id":168,"name":"洛阳","pinyin":"luoyang","scenicspot":"","scenicspotId":0,"keyword":["ly"]},{"id":167,"name":"郑州","pinyin":"zhengzhou","scenicspot":"","scenicspotId":0,"keyword":["zz"]},{"id":145,"name":"福州","pinyin":"fuzhou","scenicspot":"","scenicspotId":0,"keyword":["fz"]},{"id":158,"name":"承德","pinyin":"chengde","scenicspot":"","scenicspotId":0,"keyword":["cd"]},{"id":400,"name":"满洲里","pinyin":"manzhouli","scenicspot":"","scenicspotId":0,"keyword":["mzl"]},{"id":262,"name":"呼伦贝尔","pinyin":"hulunbeier","scenicspot":"","scenicspotId":0,"keyword":["hlbe","manzhouli","mzl"]},{"id":401,"name":"乌镇","pinyin":"wuzhen","scenicspot":"","scenicspotId":0,"keyword":["wz"]},{"id":189,"name":"长春","pinyin":"changchun","scenicspot":"","scenicspotId":0,"keyword":["cc"]},{"id":398,"name":"敦煌","pinyin":"dunhuang","scenicspot":"","scenicspotId":0,"keyword":["dh"]},{"id":72,"name":"惠州","pinyin":"huizhou","scenicspot":"","scenicspotId":0,"keyword":["hz"]},{"id":255,"name":"海口","pinyin":"haikou","scenicspot":"","scenicspotId":0,"keyword":["hk"]},{"id":402,"name":"绥中","pinyin":"suizhongln","scenicspot":"","scenicspotId":0,"keyword":["szln"]},{"id":389,"name":"拉萨","pinyin":"lasa","scenicspot":"","scenicspotId":0,"keyword":["ls"]},{"id":403,"name":"青海湖","pinyin":"qinghaihu","scenicspot":"","scenicspotId":0,"keyword":["qhh"]},{"id":309,"name":"西宁","pinyin":"xining","scenicspot":"","scenicspotId":0,"keyword":["xn"]},{"id":282,"name":"银川","pinyin":"yinchuan","scenicspot":"","scenicspotId":0,"keyword":["yc"]},{"id":404,"name":"西昌","pinyin":"xichang","scenicspot":"","scenicspotId":0,"keyword":["xc"]},{"id":405,"name":"凤凰(湘西)","pinyin":"fenghuang","scenicspot":"","scenicspotId":0,"keyword":["fh"]},{"id":92,"name":"绵阳","pinyin":"mianyang","scenicspot":"","scenicspotId":0,"keyword":["my"]},{"id":369,"name":"乌鲁木齐","pinyin":"wulumuqi","scenicspot":"","scenicspotId":0,"keyword":["wlmq"]},{"id":77,"name":"肇庆","pinyin":"zhaoqing","scenicspot":"","scenicspotId":0,"keyword":["zq"]},{"id":406,"name":"亚布力","pinyin":"yabuli","scenicspot":"","scenicspotId":0,"keyword":["ybl"]},{"id":342,"name":"张家界","pinyin":"zhangjiajie","scenicspot":"","scenicspotId":0,"keyword":["zjj"]},{"id":115,"name":"台州","pinyin":"taizhou1","scenicspot":"","scenicspotId":0,"keyword":["tz"]},{"id":303,"name":"咸阳","pinyin":"xianyang","scenicspot":"","scenicspotId":0,"keyword":["xy"]},{"id":217,"name":"日照","pinyin":"rizhao","scenicspot":"","scenicspotId":0,"keyword":["rz"]},{"id":149,"name":"漳州","pinyin":"zhangzhou","scenicspot":"","scenicspotId":0,"keyword":["zz"]},{"id":407,"name":"琼海","pinyin":"qionghai","scenicspot":"","scenicspotId":0,"keyword":["qh"]},{"id":359,"name":"玉溪","pinyin":"yuxi","scenicspot":"","scenicspotId":0,"keyword":["yx"]},{"id":108,"name":"甘孜","pinyin":"ganzi","scenicspot":"","scenicspotId":0,"keyword":["gz"]},{"id":179,"name":"许昌","pinyin":"xuchangh","scenicspot":"","scenicspotId":0,"keyword":["xc"]},{"id":98,"name":"攀枝花","pinyin":"panzhihua","scenicspot":"","scenicspotId":0,"keyword":["pzh"]},{"id":408,"name":"长白山","pinyin":"changbaishan","scenicspot":"","scenicspotId":0,"keyword":["cbs"]},{"id":249,"name":"来宾","pinyin":"laibin","scenicspot":"","scenicspotId":0,"keyword":["lb"]},{"id":117,"name":"贵阳","pinyin":"guiyang","scenicspot":"","scenicspotId":0,"keyword":["gy"]},{"id":74,"name":"中山","pinyin":"zhongshan","scenicspot":"","scenicspotId":0,"keyword":["zs"]},{"id":73,"name":"东莞","pinyin":"dongguan","scenicspot":"","scenicspotId":0,"keyword":["dg"]},{"id":304,"name":"渭南","pinyin":"weinan","scenicspot":"","scenicspotId":0,"keyword":["wn"]},{"id":250,"name":"南宁","pinyin":"nanning","scenicspot":"","scenicspotId":0,"keyword":["nn"]},{"id":409,"name":"海螺沟","pinyin":"hailuogou","scenicspot":"","scenicspotId":0,"keyword":["hlg"]},{"id":140,"name":"淮安","pinyin":"huaian","scenicspot":"","scenicspotId":0,"keyword":["ha"]},{"id":154,"name":"唐山","pinyin":"tangshan","scenicspot":"","scenicspotId":0,"keyword":["ts"]},{"id":148,"name":"泉州","pinyin":"quanzhou","scenicspot":"","scenicspotId":0,"keyword":["qz"]},{"id":139,"name":"徐州","pinyin":"xuzhou","scenicspot":"","scenicspotId":0,"keyword":["xz"]},{"id":258,"name":"乌海","pinyin":"wuhai","scenicspot":"","scenicspotId":0,"keyword":["wh"]},{"id":269,"name":"太原","pinyin":"taiyuan","scenicspot":"","scenicspotId":0,"keyword":["ty"]},{"id":251,"name":"北海","pinyin":"beihai","scenicspot":"","scenicspotId":0,"keyword":["bh"]},{"id":129,"name":"丹东","pinyin":"dandong","scenicspot":"","scenicspotId":0,"keyword":["dd"]},{"id":237,"name":"池州","pinyin":"chizhou","scenicspot":"","scenicspotId":0,"keyword":["cz"]},{"id":109,"name":"温州","pinyin":"wenzhou","scenicspot":"","scenicspotId":0,"keyword":["wz"]},{"id":539,"name":"阳朔","pinyin":"yangshuo","scenicspot":"guilin|yangshuo","scenicspotId":124,"keyword":["ysx"]},{"id":680,"name":"从化","pinyin":"conghua","scenicspot":"guangzhou|conghua","scenicspotId":282,"keyword":["ch"]},{"id":682,"name":"增城","pinyin":"zengcheng","scenicspot":"guangzhou|zengcheng","scenicspotId":284,"keyword":["zcs"]},{"id":533,"name":"都江堰","pinyin":"dujiangyan","scenicspot":"chengdu|dujiangyan","scenicspotId":117,"keyword":["djy"]},{"id":3904,"name":"青城山","pinyin":"qingchengshan","scenicspot":"chengdu|qingchengshan","scenicspotId":3570,"keyword":[]},{"id":395,"name":"林芝","pinyin":"linzhi","scenicspot":"","scenicspotId":0,"keyword":["lz"]},{"id":111,"name":"湖州","pinyin":"huzhou","scenicspot":"","scenicspotId":0,"keyword":["hz"]},{"id":355,"name":"抚州","pinyin":"fuzhou2","scenicspot":"","scenicspotId":0,"keyword":["fz"]},{"id":243,"name":"梧州","pinyin":"wuzhou","scenicspot":"","scenicspotId":0,"keyword":["wz"]},{"id":218,"name":"临沂","pinyin":"linyi2","scenicspot":"","scenicspotId":0,"keyword":["ly"]},{"id":3960,"name":"九华山","pinyin":"jiuhuashan","scenicspot":"chizhou|jiuhuashan","scenicspotId":3629,"keyword":[]},{"id":232,"name":"六安","pinyin":"liuan","scenicspot":"","scenicspotId":0,"keyword":["la"]},{"id":157,"name":"保定","pinyin":"baoding","scenicspot":"","scenicspotId":0,"keyword":["bd"]},{"id":82,"name":"清远","pinyin":"qingyuan2","scenicspot":"","scenicspotId":0,"keyword":["qy2"]},{"id":81,"name":"阳江","pinyin":"yangjiang","scenicspot":"","scenicspotId":0,"keyword":["yj"]},{"id":3969,"name":"白洋淀","pinyin":"baiyangdian","scenicspot":"baoding|baiyangdian","scenicspotId":3969,"keyword":["byd"]},{"id":360,"name":"保山","pinyin":"baoshan","scenicspot":"","scenicspotId":0,"keyword":["bs"]},{"id":75,"name":"韶关","pinyin":"shaoguan","scenicspot":"","scenicspotId":0,"keyword":["sg"]},{"id":347,"name":"景德镇","pinyin":"jingdezhen","scenicspot":"","scenicspotId":0,"keyword":["jdz"]},{"id":110,"name":"嘉兴","pinyin":"jiaxing","scenicspot":"","scenicspotId":0,"keyword":["jx"]},{"id":356,"name":"上饶","pinyin":"shangrao","scenicspot":"","scenicspotId":0,"keyword":["sr"]},{"id":352,"name":"赣州","pinyin":"ganzhou","scenicspot":"","scenicspotId":0,"keyword":["gz"]},{"id":69,"name":"汕头","pinyin":"shantou","scenicspot":"","scenicspotId":0,"keyword":["st"]},{"id":112,"name":"绍兴","pinyin":"shaoxing","scenicspot":"","scenicspotId":0,"keyword":["sx"]},{"id":153,"name":"石家庄","pinyin":"shijiazhuang","scenicspot":"","scenicspotId":0,"keyword":["sjz"]},{"id":160,"name":"廊坊","pinyin":"langfang","scenicspot":"","scenicspotId":0,"keyword":["lf"]},{"id":353,"name":"吉安","pinyin":"jian","scenicspot":"","scenicspotId":0,"keyword":["ja"]},{"id":3500,"name":"井冈山","pinyin":"jinggangshan","scenicspot":"jian|jinggangshan","scenicspotId":3162,"keyword":["jgs"]},{"id":328,"name":"咸宁","pinyin":"xianning","scenicspot":"","scenicspotId":0,"keyword":["xn"]},{"id":1608,"name":"北戴河","pinyin":"beidaihe","scenicspot":"qinhuangdao|beidaihe","scenicspotId":1244,"keyword":["bdh"]},{"id":2304,"name":"泰山","pinyin":"taishanqu","scenicspot":"taian|taishanqu","scenicspotId":1953,"keyword":["tsq"]},{"id":577,"name":"鼓浪屿","pinyin":"gulangyu","scenicspot":"xiamen|gulangyu","scenicspotId":169,"keyword":["gly"]},{"id":215,"name":"济宁","pinyin":"jining","scenicspot":"","scenicspotId":0,"keyword":["jn"]},{"id":128,"name":"抚顺","pinyin":"fushunl","scenicspot":"","scenicspotId":0,"keyword":["fsl"]},{"id":1082,"name":"桐庐","pinyin":"tonglu","scenicspot":"hangzhou|tonglu","scenicspotId":697,"keyword":["tlx"]},{"id":169,"name":"平顶山","pinyin":"pingdingshan","scenicspot":"","scenicspotId":0,"keyword":["pds"]},{"id":142,"name":"宿迁","pinyin":"suqian","scenicspot":"","scenicspotId":0,"keyword":["sq"]},{"id":252,"name":"防城港","pinyin":"fangchenggang","scenicspot":"","scenicspotId":0,"keyword":["fcg"]},{"id":124,"name":"黔东南","pinyin":"qiandongnan","scenicspot":"","scenicspotId":0,"keyword":["qdn"]},{"id":78,"name":"梅州","pinyin":"meizhou","scenicspot":"","scenicspotId":0,"keyword":["mz"]},{"id":70,"name":"江门","pinyin":"jiangmen","scenicspot":"","scenicspotId":0,"keyword":["jm"]},{"id":116,"name":"丽水","pinyin":"lishuiz","scenicspot":"","scenicspotId":0,"keyword":["ls"]},{"id":80,"name":"河源","pinyin":"heyuan","scenicspot":"","scenicspotId":0,"keyword":["hy"]},{"id":272,"name":"长治","pinyin":"changzhi","scenicspot":"","scenicspotId":0,"keyword":["cz"]},{"id":94,"name":"南充","pinyin":"nanchong","scenicspot":"","scenicspotId":0,"keyword":["nc"]},{"id":960,"name":"阆中(南充)","pinyin":"langzhongshi","scenicspot":"nanchong|langzhongshi","scenicspotId":572,"keyword":["lzs"]},{"id":233,"name":"淮南","pinyin":"huainan","scenicspot":"","scenicspotId":0,"keyword":["hn"]},{"id":190,"name":"吉林","pinyin":"jilinj","scenicspot":"","scenicspotId":0,"keyword":["jl"]},{"id":113,"name":"金华","pinyin":"jinhua","scenicspot":"","scenicspotId":0,"keyword":["jh"]},{"id":220,"name":"聊城","pinyin":"liaocheng","scenicspot":"","scenicspotId":0,"keyword":["lc"]},{"id":363,"name":"文山","pinyin":"wenshan","scenicspot":"","scenicspotId":0,"keyword":["ws"]},{"id":202,"name":"大庆","pinyin":"daqing","scenicspot":"","scenicspotId":0,"keyword":["dq"]},{"id":366,"name":"德宏","pinyin":"dehong","scenicspot":"","scenicspotId":0,"keyword":["dh"]},{"id":3662,"name":"瑞丽(德宏)","pinyin":"ruilishi","scenicspot":"dehong|ruilishi","scenicspotId":3326,"keyword":["rls"]},{"id":177,"name":"开封","pinyin":"kaifeng","scenicspot":"","scenicspotId":0,"keyword":["kf"]},{"id":286,"name":"中卫","pinyin":"zhongwei","scenicspot":"","scenicspotId":0,"keyword":["zw"]},{"id":1801,"name":"登封","pinyin":"dengfengshi","scenicspot":"zhengzhou|dengfengshi","scenicspotId":1438,"keyword":["dfs"]},{"id":151,"name":"龙岩","pinyin":"longyan","scenicspot":"","scenicspotId":0,"keyword":["ly"]},{"id":1144,"name":"天台","pinyin":"tiantaixian","scenicspot":"taizhou1|tiantaixian","scenicspotId":765,"keyword":["ttx"]},{"id":576,"name":"崇礼","pinyin":"chonglixian","scenicspot":"zhangjiakou|chonglixian","scenicspotId":167,"keyword":["clx"]},{"id":125,"name":"黔南","pinyin":"qiannan","scenicspot":"","scenicspotId":0,"keyword":["qn"]},{"id":53,"name":"芜湖","pinyin":"wuhu","scenicspot":"","scenicspotId":0,"keyword":["wh"]},{"id":3993,"name":"乐东","pinyin":"ledongxian","scenicspot":"","scenicspotId":0,"keyword":["ldx"]},{"id":3996,"name":"高雄","pinyin":"gaoxiong","scenicspot":"","scenicspotId":0,"keyword":["gx"]},{"id":3997,"name":"花莲","pinyin":"hualian","scenicspot":"","scenicspotId":0,"keyword":["hl"]},{"id":4001,"name":"苗栗","pinyin":"miaoli","scenicspot":"","scenicspotId":0,"keyword":["ml"]},{"id":4013,"name":"宜兰","pinyin":"yilant","scenicspot":"","scenicspotId":0,"keyword":["yl"]},{"id":4010,"name":"新北","pinyin":"xinbei","scenicspot":"","scenicspotId":0,"keyword":["xb"]},{"id":4009,"name":"桃园","pinyin":"taoyuant","scenicspot":"","scenicspotId":0,"keyword":["tyt"]},{"id":4008,"name":"台中","pinyin":"taizhong","scenicspot":"","scenicspotId":0,"keyword":["tz"]},{"id":4007,"name":"台南","pinyin":"tainan","scenicspot":"","scenicspotId":0,"keyword":["tn"]},{"id":4006,"name":"台东","pinyin":"taidong","scenicspot":"","scenicspotId":0,"keyword":["td"]},{"id":4005,"name":"台北","pinyin":"taibei","scenicspot":"","scenicspotId":0,"keyword":["tb"]},{"id":4003,"name":"澎湖","pinyin":"penghu","scenicspot":"","scenicspotId":0,"keyword":["ph"]},{"id":4002,"name":"南投","pinyin":"nantout","scenicspot":"","scenicspotId":0,"keyword":["ntt"]},{"id":4012,"name":"新竹","pinyin":"xinzhu","scenicspot":"","scenicspotId":0,"keyword":["xz"]},{"id":4000,"name":"嘉义","pinyin":"jiayixian","scenicspot":"","scenicspotId":0,"keyword":["jy"]},{"id":321,"name":"宜昌","pinyin":"yichang","scenicspot":"","scenicspotId":0,"keyword":["yc"]},{"id":114,"name":"衢州","pinyin":"quzhouzj","scenicspot":"","scenicspotId":0,"keyword":["qz"]},{"id":141,"name":"泰州","pinyin":"taizhou","scenicspot":"","scenicspotId":0,"keyword":["tz"]},{"id":79,"name":"汕尾","pinyin":"shanwei","scenicspot":"","scenicspotId":0,"keyword":["sw"]},{"id":364,"name":"红河州","pinyin":"honghezhou","scenicspot":"","scenicspotId":0,"keyword":["hhz"]},{"id":4027,"name":"金门","pinyin":"jinment","scenicspot":"","scenicspotId":0,"keyword":["jm"]},{"id":76,"name":"湛江","pinyin":"zhanjiang","scenicspot":"","scenicspotId":0,"keyword":["zj"]},{"id":71,"name":"茂名","pinyin":"maoming","scenicspot":"","scenicspotId":0,"keyword":["mm"]},{"id":307,"name":"安康","pinyin":"ankang","scenicspot":"","scenicspotId":0,"keyword":["ak"]},{"id":306,"name":"榆林","pinyin":"yulinshi","scenicspot":"","scenicspotId":0,"keyword":["yls"]},{"id":146,"name":"莆田","pinyin":"putian","scenicspot":"","scenicspotId":0,"keyword":["pt"]},{"id":4004,"name":"屏东(垦丁)","pinyin":"pingdong","scenicspot":"","scenicspotId":0,"keyword":["pd"]},{"id":319,"name":"十堰","pinyin":"shiyan","scenicspot":"","scenicspotId":0,"keyword":["sy"]},{"id":4031,"name":"襄阳","pinyin":"xiangyang","scenicspot":"","scenicspotId":0,"keyword":["xy"]},{"id":330,"name":"恩施","pinyin":"enshih","scenicspot":"","scenicspotId":0,"keyword":["esh"]},{"id":332,"name":"神农架","pinyin":"shennongjia","scenicspot":"","scenicspotId":0,"keyword":["snj"]},{"id":283,"name":"石嘴山","pinyin":"shizuishan","scenicspot":"","scenicspotId":0,"keyword":["szs"]},{"id":284,"name":"吴忠","pinyin":"wuzhong","scenicspot":"","scenicspotId":0,"keyword":["wz"]},{"id":305,"name":"汉中","pinyin":"hanzhong","scenicspot":"","scenicspotId":0,"keyword":["hz"]},{"id":254,"name":"崇左","pinyin":"chongzuo","scenicspot":"","scenicspotId":0,"keyword":["cz"]},{"id":133,"name":"葫芦岛","pinyin":"huludao","scenicspot":"","scenicspotId":0,"keyword":["hld"]},{"id":3992,"name":"横店","pinyin":"hengdianzhen","scenicspot":"jinhua|hengdianzhen","scenicspotId":3992,"keyword":["hdz"]},{"id":99,"name":"广元","pinyin":"guangyuan","scenicspot":"","scenicspotId":0,"keyword":["gy"]},{"id":211,"name":"东营","pinyin":"dongying","scenicspot":"","scenicspotId":0,"keyword":["dy"]},{"id":219,"name":"德州","pinyin":"dezhou","scenicspot":"","scenicspotId":0,"keyword":["dz"]},{"id":213,"name":"莱芜","pinyin":"laiwu","scenicspot":"","scenicspotId":0,"keyword":["lw"]},{"id":221,"name":"菏泽","pinyin":"heze","scenicspot":"","scenicspotId":0,"keyword":["hz"]},{"id":302,"name":"宝鸡","pinyin":"baoji","scenicspot":"","scenicspotId":0,"keyword":["bj"]},{"id":375,"name":"喀什","pinyin":"kashi","scenicspot":"","scenicspotId":0,"keyword":["ks"]},{"id":371,"name":"吐鲁番","pinyin":"tulufan","scenicspot":"","scenicspotId":0,"keyword":["tlf"]},{"id":377,"name":"巴音郭楞","pinyin":"bayinguoleng","scenicspot":"","scenicspotId":0,"keyword":["bygl"]},{"id":212,"name":"潍坊","pinyin":"weifang","scenicspot":"","scenicspotId":0,"keyword":["wf"]},{"id":4054,"name":"保亭","pinyin":"baoting","scenicspot":"","scenicspotId":0,"keyword":["bt"]},{"id":311,"name":"海北","pinyin":"haibeiqh","scenicspot":"","scenicspotId":0,"keyword":["hb"]},{"id":349,"name":"九江","pinyin":"jiujiangjx","scenicspot":"","scenicspotId":0,"keyword":["jj"]},{"id":351,"name":"鹰潭","pinyin":"yingtan","scenicspot":"","scenicspotId":0,"keyword":["yt"]},{"id":350,"name":"新余","pinyin":"xinyu","scenicspot":"","scenicspotId":0,"keyword":["xy"]},{"id":354,"name":"宜春","pinyin":"yichunj","scenicspot":"","scenicspotId":0,"keyword":["ycj"]},{"id":152,"name":"宁德","pinyin":"ningde","scenicspot":"","scenicspotId":0,"keyword":["nd"]},{"id":147,"name":"三明","pinyin":"sanming","scenicspot":"","scenicspotId":0,"keyword":["sm"]},{"id":210,"name":"淄博","pinyin":"zibo","scenicspot":"","scenicspotId":0,"keyword":["zb"]},{"id":348,"name":"萍乡","pinyin":"pingxiang2","scenicspot":"","scenicspotId":0,"keyword":["px2"]},{"id":292,"name":"张掖","pinyin":"zhangye","scenicspot":"","scenicspotId":0,"keyword":["zy"]},{"id":290,"name":"天水","pinyin":"tianshui","scenicspot":"","scenicspotId":0,"keyword":["ts"]},{"id":300,"name":"嘉峪关","pinyin":"jiayuguan","scenicspot":"","scenicspotId":0,"keyword":["jyg"]},{"id":294,"name":"酒泉","pinyin":"jiuquan","scenicspot":"","scenicspotId":0,"keyword":["jq"]},{"id":382,"name":"阿勒泰","pinyin":"aletai","scenicspot":"","scenicspotId":0,"keyword":["alt"]},{"id":107,"name":"阿坝","pinyin":"aba","scenicspot":"","scenicspotId":0,"keyword":["ab"]},{"id":1366,"name":"宜兴","pinyin":"yixingshi","scenicspot":"wuxi|yixingshi","scenicspotId":994,"keyword":["yx"]},{"id":85,"name":"云浮","pinyin":"yunfu","scenicspot":"","scenicspotId":0,"keyword":["yf"]},{"id":308,"name":"商洛","pinyin":"shangluo","scenicspot":"","scenicspotId":0,"keyword":["sl"]},{"id":227,"name":"安庆","pinyin":"anqing","scenicspot":"","scenicspotId":0,"keyword":["aq"]},{"id":238,"name":"宣城","pinyin":"xuancheng","scenicspot":"","scenicspotId":0,"keyword":["xc"]},{"id":225,"name":"蚌埠","pinyin":"bengbu","scenicspot":"","scenicspotId":0,"keyword":["bb"]},{"id":95,"name":"宜宾","pinyin":"yibin","scenicspot":"","scenicspotId":0,"keyword":["yb"]},{"id":104,"name":"雅安","pinyin":"yaan","scenicspot":"","scenicspotId":0,"keyword":["ya"]},{"id":103,"name":"眉山","pinyin":"meishan","scenicspot":"","scenicspotId":0,"keyword":["ms"]},{"id":93,"name":"乐山","pinyin":"leshan","scenicspot":"","scenicspotId":0,"keyword":["ls"]},{"id":273,"name":"晋城","pinyin":"jincheng","scenicspot":"","scenicspotId":0,"keyword":["jc"]},{"id":278,"name":"临汾","pinyin":"linfen","scenicspot":"","scenicspotId":0,"keyword":["lf"]},{"id":276,"name":"运城","pinyin":"yunchengsx","scenicspot":"","scenicspotId":0,"keyword":["yc"]},{"id":277,"name":"忻州","pinyin":"xinzhousx","scenicspot":"","scenicspotId":0,"keyword":["xz"]},{"id":275,"name":"晋中","pinyin":"jinzhong","scenicspot":"","scenicspotId":0,"keyword":["jz"]},{"id":119,"name":"遵义","pinyin":"zunyi","scenicspot":"","scenicspotId":0,"keyword":["zy"]},{"id":380,"name":"伊犁","pinyin":"yili","scenicspot":"","scenicspotId":0,"keyword":["yl"]},{"id":256,"name":"呼和浩特","pinyin":"huhehaote","scenicspot":"","scenicspotId":0,"keyword":["hhht"]},{"id":120,"name":"安顺","pinyin":"anshun","scenicspot":"","scenicspotId":0,"keyword":["as"]},{"id":122,"name":"毕节","pinyin":"bijie","scenicspot":"","scenicspotId":0,"keyword":["bj"]},{"id":4053,"name":"琼中","pinyin":"qiongzhong","scenicspot":"","scenicspotId":0,"keyword":["qz"]},{"id":260,"name":"通辽","pinyin":"tongliao","scenicspot":"","scenicspotId":0,"keyword":["tl"]},{"id":265,"name":"兴安盟","pinyin":"xinganmeng","scenicspot":"","scenicspotId":0,"keyword":["xam"]},{"id":317,"name":"黄石","pinyin":"huangshi","scenicspot":"","scenicspotId":0,"keyword":["hs"]},{"id":339,"name":"郴州","pinyin":"chenzhou","scenicspot":"","scenicspotId":0,"keyword":["cz"]},{"id":372,"name":"哈密","pinyin":"hami","scenicspot":"","scenicspotId":0,"keyword":["hm"]},{"id":100,"name":"遂宁","pinyin":"suiningsc","scenicspot":"","scenicspotId":0,"keyword":["sn"]},{"id":97,"name":"凉山","pinyin":"liangshan","scenicspot":"","scenicspotId":0,"keyword":["ls"]},{"id":392,"name":"日喀则","pinyin":"rikaze","scenicspot":"","scenicspotId":0,"keyword":["rkz"]},{"id":132,"name":"盘锦","pinyin":"panjin","scenicspot":"","scenicspotId":0,"keyword":["pj"]},{"id":267,"name":"阿拉善","pinyin":"alashan","scenicspot":"","scenicspotId":0,"keyword":["als"]},{"id":236,"name":"亳州","pinyin":"bozhou","scenicspot":"","scenicspotId":0,"keyword":["bz"]},{"id":229,"name":"阜阳","pinyin":"fuyanga","scenicspot":"","scenicspotId":0,"keyword":["fya"]},{"id":344,"name":"怀化","pinyin":"huaihua","scenicspot":"","scenicspotId":0,"keyword":["hh"]},{"id":338,"name":"常德","pinyin":"changde","scenicspot":"","scenicspotId":0,"keyword":["cd"]},{"id":84,"name":"揭阳","pinyin":"jieyang","scenicspot":"","scenicspotId":0,"keyword":["jy"]},{"id":253,"name":"贺州","pinyin":"hezhou","scenicspot":"","scenicspotId":0,"keyword":["hz"]},{"id":259,"name":"赤峰","pinyin":"chifeng","scenicspot":"","scenicspotId":0,"keyword":["cf"]},{"id":246,"name":"玉林","pinyin":"yulin","scenicspot":"","scenicspotId":0,"keyword":["yl"]},{"id":161,"name":"衡水","pinyin":"hengshui","scenicspot":"","scenicspotId":0,"keyword":["hs"]},{"id":156,"name":"邢台","pinyin":"xingtai","scenicspot":"","scenicspotId":0,"keyword":["xt"]},{"id":155,"name":"邯郸","pinyin":"handan","scenicspot":"","scenicspotId":0,"keyword":["hd"]},{"id":335,"name":"衡阳","pinyin":"hengyang","scenicspot":"","scenicspotId":0,"keyword":["hy"]},{"id":270,"name":"大同","pinyin":"datong","scenicspot":"","scenicspotId":0,"keyword":["dt"]},{"id":194,"name":"白山","pinyin":"baishan","scenicspot":"","scenicspotId":0,"keyword":["bs"]},{"id":2830,"name":"五台山","pinyin":"wutaixian","scenicspot":"xinzhousx|wutaixian","scenicspotId":2483,"keyword":["wtx"]},{"id":299,"name":"甘南","pinyin":"gannan","scenicspot":"","scenicspotId":0,"keyword":["gn"]},{"id":91,"name":"德阳","pinyin":"deyang","scenicspot":"","scenicspotId":0,"keyword":["dy"]},{"id":4047,"name":"澄迈","pinyin":"chengmai","scenicspot":"","scenicspotId":0,"keyword":["cm"]},{"id":173,"name":"安阳","pinyin":"anyang","scenicspot":"","scenicspotId":0,"keyword":["ay"]},{"id":118,"name":"六盘水","pinyin":"liupanshui","scenicspot":"","scenicspotId":0,"keyword":["lps"]},{"id":197,"name":"延边","pinyin":"yanbian1","scenicspot":"","scenicspotId":0,"keyword":["yb"]},{"id":242,"name":"柳州","pinyin":"liuzhou","scenicspot":"","scenicspotId":0,"keyword":["lz"]},{"id":279,"name":"吕梁","pinyin":"lvliang","scenicspot":"","scenicspotId":0,"keyword":["ll"]},{"id":105,"name":"巴中","pinyin":"bazhong","scenicspot":"","scenicspotId":0,"keyword":["bz"]},{"id":123,"name":"黔西南","pinyin":"qianxinan","scenicspot":"","scenicspotId":0,"keyword":["qxn"]},{"id":4049,"name":"定安","pinyin":"dingan","scenicspot":"","scenicspotId":0,"keyword":["da"]}],"lettergroups":[{"id":60,"name":"A B C D E F","cityids":[107,382,267,307,227,120,173,48,2,251,157,360,3969,1608,214,225,302,377,263,257,194,4052,236,134,4054,122,105,10,22,189,63,408,576,21,158,272,680,339,338,259,4051,4047,228,237,159,83,254,36,18,398,73,533,202,129,366,1801,3973,211,91,219,270,4049,4062,40,323,261,330,252,145,68,229,128,355,405]},{"id":61,"name":"G H I J K","cityids":[45,577,32,117,352,285,108,3996,299,99,64,7,50,80,72,6,140,255,234,233,409,364,256,262,685,305,317,111,3997,133,327,3992,344,221,161,253,155,311,171,372,335,19,15,3960,347,110,215,190,3500,300,294,113,4027,170,70,353,275,273,349,84,1046,176,3998,4000,31,46,177,375,370]},{"id":62,"name":"L M N O P Q","cityids":[389,287,12,39,5,116,42,395,168,218,151,960,93,3993,90,278,232,118,160,249,220,242,213,92,97,103,71,78,400,226,4001,9,52,346,94,250,16,152,175,4002,29,98,37,169,348,132,146,178,4003,61,4004,67,65,8,148,47,3904,125,124,123,82,403,114,407,4053,279]},{"id":65,"name":"R S T U V W","cityids":[392,217,3662,1,23,356,49,11,126,75,69,79,112,142,153,332,100,319,147,230,308,283,329,336,402,3995,56,66,115,1144,216,2304,269,1082,260,290,121,235,141,193,4050,4005,4008,4007,4006,4009,371,43,30,304,4,55,14,62,59,3,2830,401,369,258,243,53,109,363,284,212,264]},{"id":63,"name":"X Y Z","cityids":[33,17,58,28,309,404,396,57,303,328,238,139,277,350,156,265,266,334,179,182,172,4031,4010,4012,25,54,26,406,44,380,35,282,539,359,351,321,104,81,276,271,306,85,95,1366,197,337,354,4013,4014,246,38,60,27,20,13,51,167,342,74,77,682,149,210,76,333,292,286,106,184,119,4015]}],"hotgroup":{"name":"热门","cityids":[48,1,23,10,9,7,45,8,33,49,22,36,18,17,66,11,31,65,32,19,12,6,396,4005]}};


    var traceData = window.traceData || {};
    traceData.logService = 'http://api.tujia.com';
    traceData.prevId = '';
    traceData.pageId = '48e32e4e-4356-4f54-9dd9-78cfe5d9d02a';
    traceData.url = '/UserInfo/OrderList/';
    traceData.params = '';
</script>
<script type="text/javascript" src="http://staticfile.tujia.com/portalsite2/scripts/RongIMLib-2.1.0.min.js?v=405bfdc"></script>
<script type="text/javascript" src="http://staticfile.tujia.com/portalsite2/scripts/im_v2.js?v=405bfdc"></script>

<script type="text/javascript" src="http://staticfile.tujia.com/portalsite2/scripts/js_common_foot?v=405bfdc"></script>
<script type="text/javascript">

    $().ready(function () {
        var id = "SurroundingIntroductionHelperContent";
        var $t = $("#" + id);
        $(".time").powerFloat({
            eventType: "hover",
            offsets: { x: 0, y: 0 },
            hoverHold: false,
            position: "6-8",
            targetMode: null,
            targetAttr: "targ",
            container: $t,
            reverseSharp: true,
            edgeAdjust: false
        });
    });

    $("#myorders").addClass("current");

    $(".formBox input[name=order]").bind("click", function () {
        if ($(this).attr("checked")) {
            window.location.href = $(this).attr("link");
        }
    });
    $(".j-detail-freepickupreturntastevoucher").powerFloat({
        container: "plugin",
        reverseSharp: true,
        position: "6-8"
    });

    $(".divItem a").each(function () {
        $(this).overlay({
            top: "20%",
            mask: {
                color: '#000',
                loadSpeed: 100,
                opacity: 0.5
            },
            target: "#orderDayRateDiv",
            closeOnClick: false,
            close: ".close-btn",
            onBeforeLoad: function () {
                var wrap = this.getOverlay();
                var trigger = this.getTrigger();
                var loaded = trigger.data("loaded");

                $("#orderDayRateDiv").empty();
                wrap.load(trigger.attr("ref"));

            },
            onLoad: function (self) {
            }
        });
    });

    $("a[data-cancelorder-btn]").each(function () {
        $(this).overlay({
            top: "20%",
            mask: {
                color: '#000',
                loadSpeed: 100,
                opacity: 0.5
            },
            target: "#maskWrap",
            closeOnClick: false,
            close: ".closeBtn",
            onBeforeLoad: function () {
                var wrap = this.getOverlay();
                CurrentOverLay = wrap;
                wrap.load(this.getTrigger().attr("ref") + '?' + new Date().getTime(), function () {
                    if ($('#saveUserLongTime').attr("name") != null) {
                        window.location.href = "/account/login/";
                    }
                    $('#cancelbtn').bind('click', function () {
                        //var link = $(this).attr("link");
                        if ($(this).val() != '取消中') {
                            $(this).val('取消中')
                        } else {
                            return false;
                        }
                        /*
                         $.post(link, { 'remark': $('#cancelremark').val() }, function (data) {
                         if (data.IsSucces) {
                         window.location.reload();
                         } else {
                         CurrentOverLay.find("div.maskContent").html('<p>' + data.Message + '<span><a href="#" class="button button03 closeLayer">关 闭</a></span></p>');
                         }
                         });
                         */
                    })
                });
            },
            onLoad: function (self) {
            }
        });
    });

    var CurrentOverLay = null;
    function cancelOrderFinish(data) {
        if (data.IsSucces) {

            if ($("#refund").val() == 2) {
                alert("您的订单已取消，途家将在1个工作日内操作退款，具体到账时间，以银行到账时间为准。")
            }
            else if ($("#refund").val() == 1) {
                alert("您的订单已取消，根据取消规则，您的预付款不能退还。")
            }
            window.location.reload();
        } else {
            CurrentOverLay.find("div.maskContent").html('<p align="center">' + data.Message + '<br/><span><a href="javascript:closeLayer();" class="button button03 closeLayer">关 闭</a></span></p>');

            //alert(data.Message);
        }
    }

    function closeLayer() {
        if (CurrentOverLay) {
            CurrentOverLay.find(".closeBtn").click();
        }
    }
    (function () {
        if (traceLog) {
            traceLog("Common", {
                pageName: "OrderListIndex",
                pageId: traceData.pageId,
                prevId: getPrevId(),
                url: traceData.url,
                params: traceData.params
            });
        }
    })();

</script>


<script type='text/javascript' src='http://webchat.7moor.com/javascripts/7moorInit.js?accessId=797098a0-b29d-11e5-b3b1-49764155fe50&autoShow=false' async='async'></script>

<!--底部 Google analytics访问分析代码/ 百度统计 -->
<script type="text/javascript">
    var _gaq = _gaq || [];
    var _bdhmProtocol = (("https:" == document.location.protocol) ? " https://" : " http://");
    _gaq.push(['_setAccount', 'UA-30952525-1']);
    _gaq.push(['_setDomainName', 'tujia.com']);
    //_gaq.push(['_setAllowHash', false]);
    _gaq.push(['_addIgnoredRef', 'tujia.com']);
    _gaq.push(['_addOrganic', 'soso', 'w']);
    _gaq.push(['_addOrganic', 'youdao', 'q']);
    _gaq.push(['_addOrganic', 'sogou', 'query']);
    _gaq.push(['_addOrganic', 'baidu', 'wd']);
    _gaq.push(['_addOrganic', 'baidu', 'word']);
    _gaq.push(['_addOrganic', 'bing', 'q']);
    _gaq.push(['_addOrganic', '360', 'q']);
    _gaq.push(['_addOrganic', '360', 'wd']);
    _gaq.push(['_addOrganic', 'so.com', 'q']);
    _gaq.push(['_addOrganic', 'so.com', 'wd']);
    if ($("#btnDianzan").length > 0) {
        $("#btnDianzan").click(function () {
            if ($(this).hasClass("active")) {
                _gaq.push(['_trackEvent', 'pcDetail', '取消点赞']);
            } else {
                _gaq.push(['_trackEvent', 'pcDetail', '点赞']);
            }
        });
    }
    if ($("#favorite").length > 0) {
        $("#favorite").click(function () {
            if ($(this).hasClass("active")) {
                _gaq.push(['_trackEvent', 'pcDetail', '取消收藏']);
            } else {
                _gaq.push(['_trackEvent', 'pcDetail', '收藏']);
            }
        });
    }
    if (typeof selectedConditionInfos != "undefined") {
        var arrList = selectedConditionInfos.split("|");
        _gaq.push(['_setCustomVar', 1, 'City', arrList[0], 3]);
        _gaq.push(['_setCustomVar', 2, 'District', arrList[1], 3]);
        _gaq.push(['_setCustomVar', 3, 'Circle', arrList[2], 3]);
        _gaq.push(['_setCustomVar', 4, 'Price', arrList[3], 3]);
    }

    if (typeof (ServerDomain) != 'undefined' && $.cookie && (($.cookie(ServerDomain + "_ABTest") && $.cookie(ServerDomain + "_ABTest") != "None") || typeof (specialcityabtest) != 'undefined')) {
        var abCode = "";
        if ($.cookie(ServerDomain + "_ABTest") && $.cookie(ServerDomain + "_ABTest") != "None")
            abCode = $.cookie(ServerDomain + "_ABTest");
        if (typeof (specialcityabtest) != 'undefined') {
            if (abCode != "")
                abCode += ",";
            abCode += specialcityabtest;
        }
        _gaq.push(['_trackPageview', window.location.pathname + window.location.search + (window.location.search == "" ? "?" : "&") + "abtest=" + abCode]);
    }
    else {
        _gaq.push(['_trackPageview']);
    }

    _gaq.push(['_trackPageLoadTime']);
    if (typeof (trackTrans) != "undefined") { trackTrans(); }
    setTimeout(function () {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        //ga.src = ('https:' == document.location.protocol ? ' https://ssl' : ' http://www') + '.google-analytics.com/ga.js';
        ga.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'stats.g.doubleclick.net/dc.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
    }, 800);

    var _hmt = _hmt || [];
//    (function () {
//        var hm = document.createElement("script");
//        hm.src = "//hm.baidu.com/hm.js?405c96e7f6bed44fb846abfe1f65c6f5";
//        var s = document.getElementsByTagName("script")[0];
//        s.parentNode.insertBefore(hm, s);
//    })();
</script>


<!-- Google Code for Remarketing Tag -->
<script type="text/javascript">
    var google_tag_params = {
        ecomm_prodid: '',
        ecomm_pagetype: 'member',
        ecomm_totalvalue: ''
    };
    var google_tag_params
    /* <![CDATA[ */
    var google_conversion_id = 964995166;
    var google_custom_params = window.google_tag_params;
    var google_remarketing_only = true;
    /* ]]> */
</script>
<script type="text/javascript">
//    function asyncLoadScript(url, delayTime) {
//        setTimeout(function () {
//            var bd = document.createElement('script'); bd.type = 'text/javascript'; bd.async = true;
//            bd.src = unescape(_bdhmProtocol + url);
//            var b = document.getElementsByTagName('script')[0]; b.parentNode.insertBefore(bd, b);
//        }, delayTime);
//    }
//    asyncLoadScript("www.googleadservices.com/pagead/conversion.js", 200);
</script>
<noscript>
    <div style="display:inline;">
        <img height="1" width="1" style="border-style:none;" alt="" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/964995166/?value=0&amp;guid=ON&amp;script=0" />
    </div>
</noscript>

<!--网易有道DSP跟踪代码 -->
<script type="text/javascript">var youdao_conv_id = 273380;</script>
<script type="text/javascript">
    (function () {
        setTimeout(function () {
            var a = document.createElement("script");
            var b = document.getElementsByTagName("script")[0];
            a.src = document.location.protocol + "//conv.youdao.com/pub/conv.js";
            a.async = true; a.type = "text/javascript"; b.parentNode.insertBefore(a, b)
        }, 1);
    }());
</script>


</body>
</html>
<script src="../public/js/jquery-2.1.4.min.js"></script>
<script>
    //删除订单
    function deleteorder(o_id)
    {
        if (!confirm('删除后将无法恢复，确认删除？')) return false;
        $.ajax({
            url:'delorder',
            data:'o_id='+o_id,
            type:'get',
            success:function(msg)
            {
                if(msg==1)
                {
                    alert("删除成功");
                    window.location.reload();
                }
                else
                {
                    alert("删除失败");
                }
            }
        });
    }
</script>

