<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><html xmlns:wb="http://open.weibo.com/wb">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=8,chrome=1" />
    <meta name="keywords" content=""/>
    <meta name="description" content="" />
    <link href="http://staticnew.mayi.com/resourcesWeb/v201510/css/public_element.css" rel="stylesheet"  type="text/css">
    <link href="http://staticnew.mayi.com/resourcesWeb/css/account.css" rel="stylesheet" type="text/css" />
    <link href="http://staticnew.mayi.com/resourcesWeb/css/PCenter.css?V=201310081852" rel="stylesheet" type="text/css" />
    <link href="http://staticnew.mayi.com/resourcesWeb/css/room_userinfo.css" rel="stylesheet" type="text/css" />
    <title>房源-个人信息</title>
    <script type="text/javascript" src="http://staticnew.mayi.com/resourcesWeb/js/jquery-1.9.1.min.js"></script>
    <script type="text/javascript" src="http://staticnew.mayi.com/resourcesWeb/js/account/ajaxfileupload.js"></script>
    <script type="text/javascript" src="http://staticnew.mayi.com/resourcesWeb/js/account/CutPic.js?V=201508051200"></script>
    <script type="text/javascript" src="http://staticnew.mayi.com/resourcesWeb/js/account/ui/jquery-ui-1.9.2.custom.min.js" ></script>
    <script type="text/javascript" src="http://staticnew.mayi.com/resourcesWeb/js/room_userinfo.js"></script>
    <script type="text/javascript" src="http://staticnew.mayi.com/resourcesWeb/js/regx/idcard.js"></script>

</head>
<body>
<!-- Header -->
<script type="text/javascript" src="http://staticnew.mayi.com/resourcesWeb/js/searchlist/index_searchlist_public.js"></script>

<style>
    .logo58{background:url(http://staticnew.mayi.com/resourcesWeb/images/index/58logo.png) no-repeat;left:14px !important;top:16px !important;}
    .logomayi{left:200px !important;}
    .alert-box1{width:100%;height: 100%;z-index: 300000;position: absolute;display:none;line-height:40px;}
    .surveYY1{background: #000;width:100%;height:100%;opacity: 0.7;position: fixed;top: 0px;left: 0px;}
    .offmax_no{width:400px;height:186px;position:fixed;top:50%;margin-top:-93px;left:50%;margin-left:-200px;background-color:#fff;z-index:999;text-align:center;box-shadow:0px 0px 4px #ccc;border-radius:2px;}
    .offmax_no p{padding:0 20px;line-height:25px;}
    .alert_tit1{border-bottom:1px solid #e0e0e0;font-size:18px;margin-bottom:20px;}
    .close-alert1{cursor:pointer;width:50%;margin:20px auto;background-color:#22bb62;text-align:center;color:#fff;border-radius:2px;}
	#baseSave{width:100px;height:50px;background-color:#22bb62;text-align:center;color:#fff;
</style>
<input  type="hidden" name="ctx" id="ctx" value="" />
<div class='header relave'>
    <a href="/"><div class='asote head_left'><img src="../images/logo1.png" width="125px"  height="50px"/></div></a>
    <div class='head_cnt relave'>
        <span class='search'></span>
        <ul class="nav_R asote nav_right">
            <li>
                <div class="showinfo">
                    <a href="javascript:menufrozen(851688281,'/tenant/851688281/orders','user')" target="_self"><img src="http://i1.mayi.com/gjfs21/M00/B2/D6/CgEHFVcxdQeR0,YLAABZ61lXbWE653.jpg_35x35c.jpg" id="aaa" class="user_img">
                        <span class="name" id="head_nickname"><?php  $value = session('u_name');
						echo $value;
						?></span></a>
                    <div class="head_pop">
                        <div class="pop_column">
                            <p><a href="javascript:menufrozen(851688281,'/tenant/851688281/orders','user')" target="_self" id="myorder" rel="nofollow">我的订单</a></p>
                            <p><a href="javascript:menufrozen(851688281,'/user/tenant/accountmanager','user')" target="_self" id="myorder" rel="nofollow" class="slideactive">我的账户</a></p>
                            <p><a href="javascript:menufrozen(851688281,'/user/tenant/mycollection','user')" target="_self" id="mycollect" rel="nofollow">我的收藏</a></p>
                            <p><a href="javascript:menufrozen(851688281,'/user/tenant/msgmanager','user')" target="_self" id="mymsg" rel="nofollow">消息通知</a></p>
                            <p class="textCt"><a href="javascript:void(0)" id="loginoutbut" target="_self" class="stclick" clicktag="1_6">退出登录</a></p>
                        </div>
                    </div>
                </div>
            </li>
            <li>
                <div class="showinfo">
                    <a href="javascript:loginowner(851688281)" target="_self" class="stclick">我是房东</a>
                    <div class="head_pop">
                        <div class="pop_column plr10">
                            <p><a href="javascript:menufrozen(851688281,'/landlord/851688281/orders','landlord')">订单管理</a></p>
                            <p><a href="javascript:menufrozen(851688281,'/user/landlord/roommanager','landlord')">房源管理</a></p>
                            <p><a href="javascript:menufrozen(851688281,'/landlord/851688281/settlements','landlord')">结算管理</a></p>
                            <p><a href="javascript:menufrozen(851688281,'/user/landlord/msgmanager','landlord')">消息通知</a></p>
                            <p><a href="javascript:menufrozen(851688281,'/user/landlord/accountmanager','landlord')">账户管理</a></p>
                            <p><a href="/user/landlord/landlordhelper/">下载房东助手</a></p>
                        </div>
                    </div>
                </div>
            </li>
            <li>
                <div class="showinfo">
                    <a href="/activity/app50" target="_blank">APP下单立送55元</a>
                    <div class="b-app-img head_pop"><img src="http://staticnew.mayi.com/resourcesWeb/v201510/images/commom/mark_quick.jpg"></div>
                </div>
            </li>
            <li>
                <a class="recruit" href="/landlord/recruit" target="_blank">房东招募</a>
            </li>
            <li>
                <a rel="nofollow" href="javascript:publish(851688281)" class="room-btn f16 t-center" >免费发布房源</a>
            </li>
        </ul>
        <b style="width:1px;height:100%;background-color:#f00;display:block;"></b>
    </div>

</div>
<!--公共头部结束-->
<div class="alert-box1">
    <div class="surveYY1"></div>
    <div class="offmax_no">
        <div class="alert_tit1">温馨提示</div>
        <p class="frozeninfo">对不起，房东账号被封禁</p>
        <p>如有疑问，请联系蚂蚁短租客服400-069-6060</p>
        <div class="close-alert1">我知道了</div>
    </div>
</div>
<input  type="hidden" name="subdomain" id="subdomain" value="" />
<input  type="hidden" name="mainsite" id="mainsite" value="" />
<input  type="hidden" name="ctx" id="ctx" value="" />
<input  type="hidden" name="ctx1" id="ctx1" value="http://staticnew.mayi.com" />
<input  type="hidden" name="uid" id="uid" value="851688281" />
<input  type="hidden" name="loginurl" id="loginurl" value="none" />
<input type="hidden" name="head_userName" id="head_userName" value="生活很黑白">
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><html xmlns:wb="http://open.weibo.com/wb">
<head>
    <script type="text/javascript" src="http://staticnew.mayi.com/resourcesWeb/js/c.js"></script>
    <script type="text/javascript" src="http://staticnew.mayi.com/resourcesWeb/im/im_n.js"></script>

    <link rel="stylesheet" href="http://staticnew.mayi.com/resourcesWeb/im/css/IM.css" />
</head>
<body>
<input type="hidden" id="MAYIUID" value="851688281" />
<div id="point" class="contacts_landlord clearfloat IM_content ui-draggable" style="display:none;">
    <span class="right_open_btn"></span>
</div>
<a class='IM_btn' style='display:none;' href='javascript:;'><span class='IM_btn_span' ><i style="display:none;">0</i></span>站内信</a>
<div class="IM_cancel" style="display:none;">
    <div class="IM_cancel_bg"></div>
    <div class="IM_cancel_box">
        <p class="c322c27 f18 lineht45 t-center mb10">即日起，PC端IM功能暂停使用</p>
        <p class="c777776 t-center lineheight20 mt10 mb5">扫描下方二维码，下载APP查看消息。<br>随时随地沟通，不再错过。</p>
        <ul class="IM_to_app mt10 clearfloat">
            <li class="fl t-center">
                <img src="http://staticnew.mayi.com/resourcesWeb/im/images/dz_pcim.png" alt="">
                <p class="lineht45 c322c27">我是房客</p>
            </li>
            <li class="fr t-center">
                <img src="http://staticnew.mayi.com/resourcesWeb/im/images/zs_pcim.png" alt="">
                <p class="lineht45 c322c27">我是房东</p>
            </li>
        </ul>
        <i class="close_imapp"></i>

    </div>
</div>
<style>
    .c322c27{color:#322c27;}
    .lineheight20{line-height:20px;}
    .IM_cancel_bg{z-index:100000; background-color:#000; opacity:0.3; filter:alpha(opacity=30);position:fixed;width:100%;height:100%;top:0;left:0;}
    .IM_cancel_box{width:442px;position:fixed;background-color:#fff;top:50%;left:50%;margin-left:-221px;margin-top:-165px;z-index:100001;padding:30px 70px;box-sizing:border-box;}
    .IM_to_app img{width:121px;height:121px;display:inline-block;vertical-align:middle;}
    .close_imapp{background:url(http://staticnew.mayi.com/resourcesWeb/im/images/close_icon.png) no-repeat center center;background-size:18px 18px;position: absolute;display:inline-block;width: 28px;height: 28px;cursor:pointer;top:5px;right:5px;}
    .close_imapp:hover{background-color:#f2f2f2;border-radius:50%;}
</style>
</body>

</html><!-- Header END -->
<!-- Content -->
<div class="main">
    <input type="hidden" value="850455036" id="roomId"/>
    <link href="http://staticnew.mayi.com/resourcesWeb/css/flow_chart.css" rel="stylesheet"  type="text/css">
    <div class='one_workflow yes_person'>
        <div class='workflow relave'>
            <div class='progress progress_5'></div>
            <b class='workflow1'>房源信息</b>
            <b class='workflow2'>房源描述</b>
            <b class='workflow3'>房源图片</b>
            <b class='workflow4'>价格要求</b>
            <b class='workflow5'>个人信息</b>
            <b class='workflow6'>发布成功</b>
            <span class='workflow1_1'><a href="/room/publish/basicinfo/850455036" class='a_after'>1</a></span>
            <span class='workflow1_2'><a href="/room/publish/detailinfo/850455036" class='a_after'>2</a></span>
            <span class='workflow1_3'><a href="/room/publish/imageinfo/850455036" class='a_after'>3</a></span>
            <span class='workflow1_4'><a href="/room/publish/priceinfo/850455036" class='a_after'>4</a></span>
            <span class='workflow1_5'><a href="/room/publish/userinfo/850455036" class='a_after'>5</a></span>
            <span class='workflow1_6'><a href="javascript:;" class='duigo'></a></span>
        </div>
    </div>
    <!--增加房东上传头像功能开始-->
    <div class="homes-con">
        <div class="homesTitle" >
            <div class="homesTitlebg">个人信息</div>
            <p class="beizhu">个人信息首次填写成功，下次发布无需填写</p>
        </div>
    </div>
    <!--增加房东上传头像功能结束-->
    <!--当前头像-->
	<form autocomplete="off" name="roomform" action="{{URL('room/personages')}}"  method = "post">
		<input type="hidden" name="_token" value="{{csrf_token()}}"/>
    <p class='tips'>小贴士：填写真实的头像和昵称可以增加房客信任感，对提高订单有很大的帮助</p>
    <dl class='clearfloat bas_content'>
        <dt class='fl phone_fl'><span class="fr">当前头像：</span><em class="notNull"></em></dt>
        <dd class='fl relave'>
            <img id="headimage" style="width:100px;height:100px;" src="http://i1.mayi.com/gjfs21/M00/B2/D6/CgEHFVcxdQeR0,YLAABZ61lXbWE653.jpg_110x110c.jpg" alt=""/>
            <p style=" width:100px; text-align:center; "><a id="upheadimgdo" class="alertAvatar" rel="nofollow"href="javascript:void(0)">[修改头像]</a></p>
            <input type="hidden" id="isHavePic" value="http://i1.mayi.com/gjfs21/M00/B2/D6/CgEHFVcxdQeR0,YLAABZ61lXbWE653.jpg_110x110c.jpg">
        </dd>
    </dl>
    <!--增加房东上传头像功能结束-->
    <!--昵称-->
    <dl class='clearfloat bas_content'>
        <dt class='fl'><span class="fr">昵称：</span><em class="notNull"></em></dt>
        <dd class='fl phone_fr'>
            <div>
                <input id="nickname" type="text" class='nickname' name="nickname" value="生活很黑白"/><span class='nickname_prompt C_777776'>一个悦耳昵称可以大大提升您的亲切值呢，若您实在没有好的想法，试试下面的吧</span>

            </div>
        </dd>
    </dl>
    <!--个性化描述-->
    <dl class='clearfloat bas_content'>
        <dt class='fl'><span class="fr">个性化描述：</span><em class="notNull"></em></dt>
        <dd class='fl'>
            <textarea name="introduce" id="introduce" class='describes'></textarea><span class='describes_prompt C_777776'>为了让房客更好的认识你，说点什么吧，300字之内</span>

        </dd>
    </dl>
    <!--手机号-->
    <dl class='clearfloat bas_content'>
        <dt class='fl'><span class="fr">手机号：</span><em class="notNull"></em></dt>
        <dd class='fl'>
            <input class="tel_phone" type="text" name="mobile" id="mobile" value=""  />
            <span style="margin-left:50px;padding:1px 10px;left:351px;">此为用作接单的手机号码</span>
        </dd>
    </dl>
	 <!--QQ号-->
    <dl class='clearfloat bas_content'>
        <dt class='fl'><span class="fr">QQ号：</span><em class="notNull"></em></dt>
        <dd class='fl'>
            <input class="tel_phone" type="text" name="qq" id="qq" value=""  />
        </dd>
    </dl>
    <!--身份证号码-->
    <dl class='clearfloat bas_content'>
        <dt class='fl'><span class="fr">身份证号码：</span></dt>
        <dd class='fl'>
            <input type="text" class='tel_phone' value="" id="paperno" name="paperno"/><span class='tel_span C_777776'>为了保障您和房客的安全，请填写本人真实身份证号码</span>
        </dd>
    </dl>
	<div class="submit-wrap">
				<input type="submit" value="保存，下一步" title="保存，下一步" class="save" id="baseSave" />
			</div>
   	</form>
    
</div>
<!-- 修改头像 -->
<div id="headimagediv" class="smallalert-box" style="display: none;" >
    <div class="alert-title">
        修改头像
        <a id="headimagedivclose" class="alert-close" href="javascript:void(0)"></a>
    </div>
    <div class="alert-con">
        <div class="alteravatar">
            <!-- 图像裁剪层 start  -->
            <div id="Canvas" class="uploaddiv">
                <div id="ImageDragContainer">
                    <img id="ImageDrag" class="imagePhoto"  style="border-width:0px;" />
                </div>
                <div id="IconContainer">
                    <img id="ImageIcon" class="imagePhoto" style="border-width:0px;" />
                </div>
            </div>
            <!-- 图像裁剪层  end -->
        </div>
        <div class="uploaddiv">
            <table>
                <tr>
                    <td id="Min">
                        <img alt="缩小" src="http://staticnew.mayi.com/resourcesWeb/images/account/_c.gif" onmouseover="this.src='http://staticnew.mayi.com/resourcesWeb/images/account/_c.gif';" onmouseout="this.src='http://staticnew.mayi.com/resourcesWeb/images/account/_h.gif';" id="moresmall" class="smallbig" />
                    </td>
                    <td>
                        <div id="bar">
                            <div class="child"></div>
                        </div>
                    </td>
                    <td id="Max">
                        <img alt="放大" src="http://staticnew.mayi.com/resourcesWeb/images/account/c.gif" onmouseover="this.src='http://staticnew.mayi.com/resourcesWeb/images/account/c.gif';" onmouseout="this.src='http://staticnew.mayi.com/resourcesWeb/images/account/h.gif';" id="morebig" class="smallbig" />
                    </td>
                </tr>
            </table>
        </div>
        <div class="btn-box pdtop20">
            <input class="small-btn fontsize12 mglt20 uploadinput" id="imageupload" type="file" value="选取照片" name="imageupload" accept="image/jpg,image/png,image/gif,image/bmp,image/jpeg" onchange="ajaxFileUpload(this);"  />
            <input id="cancelUpdateHeadImage" class="blue mglt110 btn" type="button" value="取消" name=""/>

            <div id="headimageparamImage"  style="display: none;">
                <input name="picture"  type="hidden" value="" id="picture" /> <!--   图片url-->
                <input name="txt_width"  type="hidden"  value="1" id="txt_width" /> <!-- 图片实际宽度-->
                <input name="txt_height"  type="hidden"  value="1" id="txt_height" /> <!-- 图片实际高度-->
                <input name="txt_top"  type="hidden" value="82" id="txt_top" /><!-- 距离顶部-->
                <input name="txt_left"  type="hidden"  value="73" id="txt_left" /><!--  距离左边-->
                <input name="txt_DropWidth"  type="hidden"  value="120" id="txt_DropWidth" /><!--  截取框的宽-->
                <input name="txt_DropHeight"  type="hidden"  value="120" id="txt_DropHeight" /><!--  截取框的高-->
                <input name="txt_Zoom"  type="hidden"  id="txt_Zoom" /><!--  放大倍数-->
            </div>
        </div>
    </div>
</div>
<!-- 修改头像 END -->
<!-- Footer -->


<div class="foot index-foot clearfloat">
	<div class="w1190 pb20 clearfloat">
        	<div class="link_end">
    <p class="t-center f12 c777776">客户服务：400-069-6060&nbsp;&nbsp;010-60642468&nbsp;&nbsp;010-89177759 |<a href="http://www.mayi.com/tenantlogin/" target="_blank" class="c777776">&nbsp;帮助中心&nbsp;|</a><a href="http://www.mayi.com/aboutcompany/" target="_blank" class="c777776">&nbsp;公司信息&nbsp;|</a><a href="http://www.mayi.com/activity/app50" target="_blank" class="c777776">&nbsp;app下载&nbsp;|</a>关注我们
        <span class="mr10 cursorpt showinfo relave" style="display:inline-block;vertical-align:middle;">
            <img src="http://staticnew.mayi.com/resourcesWeb/images/weixin_logo_s.png">
            <img src="http://staticnew.mayi.com/resourcesWeb/v201510/images/index_own/weixin.jpg" class="head_pop absot" style="bottom:24px;left:-32px;">
        </span>
        <span class="cursorpt" style="display:inline-block;vertical-align:middle;">
            <img src="http://staticnew.mayi.com/resourcesWeb/images/xinlang_logo_s.png" onclick="sinaWeibo();">
        </span>
    </p>
    <p class="t-center f12 c777776">网站备案/许可证号：京ICP证130021号 易云游网络技术（北京）有限公司</p>
    <p class="t-center f12 c777776">京公网安备11010802018218号</p>
</div>
     </div>
</div>

</body>
</html>