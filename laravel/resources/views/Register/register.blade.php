<!DOCTYPE HTML>
<html>
<head>
    <meta http-equiv="Cache-Control" content="no-transform" />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>
    会员注册- 蜗牛网
</title>
    <meta name="description" content="
" />
    <meta name="keywords" content="
" />
    <!--meta http-equiv="X-UA-Compatible" content="IE=8,IE=9" /-->
    <meta property="qc:admins" content="27330065376452116375" />
    <meta property="wb:webmaster" content="791d1c6849c2b026" />
    <link rel="shortcut icon" href="https://staticfiles.tujia.com/PortalSite/Images/favicon.ico" type="image/x-icon" />
    <link rel="bookmark" href="https://staticfiles.tujia.com/PortalSite/Images/favicon.ico" type="image/x-icon" />
    
    
    <link rel="stylesheet" type="text/css" href="https://staticfiles.tujia.com/portalsite2/styles/css_common?v=6b40c9a" />
    <link rel="stylesheet" type="text/css" href="https://staticfiles.tujia.com/PortalSite2/Styles/register.css" media="all" />
    <script type="text/javascript" src="https://staticfiles.tujia.com/portalsite2/scripts/base/tujiacodecookie.js?v=6b40c9a"></script>

    <link rel="stylesheet" type="text/css" href="https://staticfiles.tujia.com/portalsite2/styles/im.css?v=6b40c9a" />
    <script type="text/javascript" src="https://staticfiles.tujia.com/portalsite2/scripts/base/jquery.js?v=6b40c9a"></script>
    
    <script type="text/javascript" src="https://staticfiles.tujia.com/portalsite2/scripts/js_account_head?v=6b40c9a"></script>
    
    <script type="text/javascript">
        function qqLogin() {
            window.location = "https://passport.tujia.com/PortalSite/QQLogin?srcUrl=http://www.tujia.com/beijing_gongyu/chaoyangqu_3581.htm";
        }

        function sinaLogin() {
            window.location = "https://passport.tujia.com/PortalSite/SinaLogin?srcUrl=http://www.tujia.com/beijing_gongyu/chaoyangqu_3581.htm";
        }
    </script>

    <script type="text/javascript">
        var MESSAGE_RADIO="https://staticfiles.tujia.com/PortalSite2/radio/message.wav", ORDERNOTICE_RADIO = "https://staticfiles.tujia.com/PortalSite2/radio/ordernotice.wav";
    </script>
</head>
<body>
<!--[if lt IE 8]>
<div class="ie-tips">
<span> 您使用的IE浏览器版本较低！</span>本站已不再支持较低版本的IE浏览器，已为您启用了精简版。为了更好的体验本站内容，建议您升级<a target="_blank" href="http://www.microsoft.com/zh-cn/download/ie.aspx?q=internet+explorer">Internet Explorer浏览器</a>或安装非IE内核浏览器。请下载 <a href="http://down.360safe.com/se/360se7.1.1.556.exe" class="link-btn" target="_blank">360浏览器</a>或<a href="http://dldir1.qq.com/invc/tt/QQBrowser_Setup_Wireless.exe" class="link-btn" target="_blank">QQ浏览器</a>。</div>
<![endif]-->

    <!--PASSPORT-81-29-->
    
         



         
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

        </div>
        <div class="nav-list">
            <ul>
                <li class="first"><a href="{{URL('index')}}" class="home-link " >首页</a></li>

                <li><a href="http://www.tujia.com/changzu/"  target="_blank">周租月租</a></li>
                <li><a href="http://www.tujia.com/Experience/"  target="_blank">体验房</a></li>
                <li><a href="http://www.tujia.com/photowall/" target="_blank" >特色房</a></li>
                
                <li><a href="http://travel.tujia.com" target="_blank">社区</a></li>
                <li><a href="http://www.tujia.com/EntrustTreasure/"  target="_blank">买楼收租</a></li>
                <li><a href="http://www.tujia.com/TuYuan/"  target="_blank">途远度假</a></li>
            </ul>
        </div>

    </div>
</div>

    
    
    
    
    <div class="wrap-large" id="registerMainWrap">
        <div class="column-wrap">
            <div class="column-head">

                <a href="/PortalSite/Register"   class="current">普通会员注册</a>
                
            </div>
            <div class="main-box">

                <div class="my-form-wrap">
                    <form action="{{URL('register/reg')}}"  onsubmit="return ckeckAll()" autocomplete="off" id="registerForm" method="post">
                    <input type="hidden" name="_token"    value="<?php echo csrf_token() ?>"/>
                    <input id="Source" name="Source" type="hidden" value="" />
                    <input id="EncryptMobile" name="EncryptMobile" type="hidden" value="" />
                    <div class="control-group">
                        <label class="controls-label" for="Mobile"><b>*</b>手机号：</label>
                        <div class="controls">
                            <input class="ipt-text" data-val="true" data-val-regex="您输入的手机号格式不正确" data-val-regex-pattern="^1\d{10,10}$" data-val-required="手机号不能为空" id="Mobile" maxlength="11" name="Mobile" type="text" value="" /> <span id="errorMsgMobile"></span>
                            
                        </div>
                    </div>

                    
                    <div class="control-group">
                        <label class="controls-label"><b>*</b>手机验证码：</label>
                        <div class="controls">
                            <input class="ipt-text-verify verification" value=""  onblur="key()" data-message="请输入验证码" data-val="true" data-val-required="验证码不能为空" id="verifycode" maxlength="4" name="verifycode" type="text"  />
                            <span id="errorMsgCode">
                                
                            </span>
                            <span id="sp">
                            <input  type="button" onclick="lick()" value="获取手机验证码" class="verify-code-btn" />
                            <span class="lab-text">手机验证成功，可获得<b class="h-text">200</b>积分，抵<b class="h-text">2元</b>订金</span>
                            </span>
                        </div>
                        <div class="controls" style="display:none;">
                            <span class="lab-text"></span>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="controls-label" for="Password"><b>*</b>登录密码：</label>
                        <div class="controls">
                            <input class="ipt-text" data-val="true" data-val-length="请输入长度为6到16的密码" data-val-length-max="16" data-val-length-min="6" data-val-required="请输入密码" id="Password" name="Password" type="password" value="" />
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="controls-label"><b>*</b>确认密码：</label>
                        <div class="controls">
                            <input class="ipt-text" data-val="true" data-val-equalto="两次输入的密码必须一致" data-val-equalto-other="*.Password" data-val-length="请输入长度为6到16的密码" data-val-length-max="16" data-val-length-min="6" id="Repwd" name="Repwd" type="password" />
                        </div>
                    </div>

                    
                    <div class="control-group">
                        <label class="controls-label">常用邮箱：</label>
                        <div class="controls">
                            <label for="Email" class="lab-cont">
                                <input class="ipt-text" data-val="true" data-val-regex="电子邮件地址无效" data-val-regex-pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}" id="Email" name="Email" type="text" value="" />
                                <span class="text-watermark">可作为登录账号</span>
                            </label>
                             <input  type="button" id="sendEmail" onclick="lickEmail()" value="验证邮箱" class="verify-code-btn" />
                            <span id="sp1" class="lab-text">填写邮箱，并通过验证，可获得<b class="h-text">800</b>积分，抵<b class="h-text">8元</b>订金</span>
                        </div>
                    </div>
                     <div class="control-group agree-group">
                         <div class="controls">
                             <label for="chkFW">
                                <input id="chkFW" type="checkbox" checked="checked" /><a href="http://content.tujia.com/Clause/index.htm" target="_blank" class="link-btn">《蜗牛网服务协议》</a>
                             </label>
                         </div>
                     </div>

                

                    <div class="control-group submit-group" id="submitWrap">
                        <div class="controls">
                            <input type='hidden' name='_token' value="{{csrf_token()}}"/>
                            <input id="registerSumbit" type="submit" value="注册" title="注册" onclick="return checkValid();" class="register-btn" />
                            <input id="registerGoing" type="button" value="注册中" title="注册中" class="register-btn" style="display: none;" />
                        </div>
                    </div>

                    </form>
                </div>
            </div>
            <div class="sidebar-box">
               <img src="https://staticfiles.tujia.com/PortalSite2/Images/registerinfo.jpg" style="display:block; margin-top:86px;" />

            </div>
        </div>
        <div id="validateArea" class="dn">
            <span data-for="verifycode"></span>
            <span data-for="Mobile"></span>
            <span data-for="Email"></span>
            <span data-for="Password"></span>
            <span data-for="Repwd"></span>
            <span data-for="EnterpriceCode"></span>
        </div>
    </div>

   
    
        <div class="m-footer-link-list">
            <a href="http://content.tujia.com/tujiajianjie.htm" target="_blank" class="forst" rel="nofollow">关于我们</a>|
            <a href="http://content.tujia.com/youkebangzhu.htm" target="_blank" rel="nofollow">我是房客</a>|
            <a href="http://content.tujia.com/qiyewenhua.htm" target="_blank" rel="nofollow">加入蜗牛</a>|
            <a href="http://www.tujia.com/SiteMap/UnitDestination" target="_blank">网站地图</a>|
            <a href="http://www.tujia.com/SiteMap/Default" target="_blank">城市地图</a>
        </div>
        

     




<script type="text/javascript">
    var staticFileRoot = "https://staticfiles.tujia.com",
         minDate = "2016-05-16",
         mindate =  new Date(2016,4,16),
         maxDate = "2016-11-12",
         maxdate= new Date(2016,10,12),
         houseId,
         ServerDomain = "tujia.com",
         TUJIA_CLIENTID = '5fa55fa1-1abd-45ae-be4b-29f54192db41';

    var portalUrl = "http://www.tujia.com";
    var favoriteUrl = "http://vip.tujia.com";
    var customerUrl =  "http://vip.tujia.com";
    var imUrl = "http://im.tujia.com";

</script>

<script>
    /*发送短信验证码*/
    var code='';
    function lick()
    {
        var Mobile=$('#Mobile').val();
        var yz=Math.floor(Math.random()*10000);
        code=yz;
        //alert(yz);
        $.ajax({
            type:'get',
            url:"{{URL('/register/phone')}}",
            data:'phone='+Mobile+'&yz='+code,
            success:function(msg){
                if (msg==1) {
                    alert('短信已发送');
                    return true;
                }else{
                    return false;
                }
            }
        })     
    }

    /*短信验证码验证*/
    function key()
    {
        var verifycode=$('#verifycode').val();
        if (verifycode!=code) {
            $('#sp').attr('style','display:none');
            $('#errorMsgCode').html('<font style="color:red">验证码错误</font>');
            return false;
        }else{
            return true;
        }
    }

    /*邮件发送*/
    function lickEmail()
    {
        var email=$('#Email').val();
        $.ajax({
            type:'get',
            url:"{{URL('register/send')}}",
            data:'email='+email,
            success:function(msg){
                if (msg==1) {
                    $('#sp1').attr('style','display:none');
                    $("#sendEmail").val('邮件已发送');
                    return true;
                }else{
                    return false;
                }
            }
        })     

    }


    /*验证提交*/
    // function ckeckAll()
    // {
    //     if (lick()&key()) {
    //         return true;
    //     }else{
    //         return false;
    //     }
    // }

</script>

        
    <script type="text/javascript">
        var currentPage = "register";
        var cookieName = 'tujia.com_PortalContext_' + "vcm";

        function checkValid() {
            if (!$("#chkFW").attr("checked")) {
                alert("请先勾选《蜗牛网服务协议》");
                return false;
            }
            return true;
        }

    </script>
    <script type="text/javascript" src="https://staticfiles.tujia.com/portalsite2/scripts/js_account_foot?v=6b40c9a"></script>    

    
    
</body>
</html>
