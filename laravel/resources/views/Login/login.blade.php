<!DOCTYPE HTML>
<html>
<head>
    <meta http-equiv="Cache-Control" content="no-transform" />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>
    用户登录- 蜗牛短租网
</title>
    <meta name="description" content="蜗牛短租网" />
    <meta name="keywords" content="" />
    <!--meta http-equiv="X-UA-Compatible" content="IE=8,IE=9" /-->
    <meta property="qc:admins" content="27330065376452116375" />
    <meta property="wb:webmaster" content="791d1c6849c2b026" />
    <link rel="shortcut icon" href="https://staticfiles.tujia.com/PortalSite/Images/favicon.ico" type="image/x-icon" />
    <link rel="bookmark" href="https://staticfiles.tujia.com/PortalSite/Images/favicon.ico" type="image/x-icon" />
    
    
    <link rel="stylesheet" type="text/css" href="https://staticfiles.tujia.com/portalsite2/styles/css_global?v=6b40c9a" />
    <script type="text/javascript" src="https://staticfiles.tujia.com/portalsite2/scripts/base/jquery.js?v=6b40c9a"></script>
    <script type="text/javascript" src="https://staticfiles.tujia.com/portalsite2/scripts/base/tujiacodecookie.js?v=6b40c9a"></script>
    <script type="text/javascript">
        var staticFileRoot = "https://staticfiles.tujia.com",
             minDate = "2016-05-16",
              maxDate = "2017-04-16",
              houseId,
              ServerDomain = "tujia.com",
              TUJIA_CLIENTID = '9fef15df-a955-42d0-9c6c-0e611b0f7d50';

        var portalUrl = "http://www.tujia.com";
        var imUrl = "http://im.tujia.com";
        var customerUrl = "http://vip.tujia.com";

    </script>
    
    <link rel="stylesheet" type="text/css" href="https://staticfiles.tujia.com/PortalSite2/Styles/Login.css" media="all" />

    <link rel="stylesheet" type="text/css" href="https://staticfiles.tujia.com/portalsite2/styles/im.css?v=6b40c9a" />
    <script type="text/javascript" src="https://staticfiles.tujia.com/portalsite2/scripts/base/jquery.js?v=6b40c9a"></script>
    
    <script type="text/javascript" src="https://staticfiles.tujia.com/portalsite2/scripts/js_account_head?v=6b40c9a"></script>
    

    
    <script type="text/javascript">
        function qqLogin() {
            window.location = "https://passport.tujia.com/PortalSite/QQLogin?srcUrl=http%3a%2f%2fwww.tujia.com%2fbeijing_gongyu%2fse0%2f";
        }

        function sinaLogin() {
            window.location = "https://passport.tujia.com/PortalSite/SinaLogin?srcUrl=http%3a%2f%2fwww.tujia.com%2fbeijing_gongyu%2fse0%2f";
        }

        function wechatLogin() {
            window.location = "https://passport.tujia.com/PortalSite/WeChatLogin?srcUrl=http%3a%2f%2fwww.tujia.com%2fbeijing_gongyu%2fse0%2f";
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

    <!--PASSPORT-81-30-->
<div class="hd-wrap-fluid ">
    <div class="m-hd">
        <div class="site-logo-cont">
            <img src="images/logo1.png" width="150px" height="50px"/>
            <span class="logo-text">旅途中的家</span>
        </div>
        <div class="nav-list">
            <ul>
                <li class="first"><a href="{{URL('index')}}" class="home-link " >首页</a></li>
                <li><a href="http://www.tujia.com/changzu/se0/"  target="_blank">周租月租</a></li>
                <li><a href="http://www.tujia.com/Experience/"  target="_blank">体验房</a></li>
                <li><a href="http://www.tujia.com/photowall/" target="_blank" >特色房</a></li>
                <li><a href="http://travel.tujia.com" target="_blank">社区</a></li>
                <li><a href="http://www.tujia.com/EntrustTreasure/"  target="_blank">买楼收租</a></li>
                <li><a href="http://www.tujia.com/TuYuan/"  target="_blank">途远度假</a></li>
            </ul>
        </div>

    </div>
</div>
    <div class="wrap-large">
        <div class="banner-box">
             <a href="http://go.tujia.com/3270/?code=2016dsndly" target="_blank" rel="nofollow"><img src="https://staticfiles.tujia.com/upload/config/day_160503/20160503175358635.jpg" alt="" width="880" height="450" /></a>
        </div>
        <div class="sidebar-box">
            <div class="login-hd">
                <h2>会员登录</h2>
                (<a href="javascript:;" class="link-btn" data-accountIdentity="2">会员</a>
                <a href="javascript:;" class="link-btn" data-accountIdentity="8">企业客户</a>
                <a href="javascript:;" class="link-btn" data-accountIdentity="4">房东</a>
                <a href="javascript:;" class="link-btn" data-accountIdentity="1">业主</a>)
            </div>
           <div class="login-tab">
                <a href="#usernamepwdLoginContainer" class=current><i class="icon-radio"></i>普通登录</a>
                <a href="#smscodeLoginContainer" class=><i class="icon-radio"></i>手机动态密码登录</a>
           </div>
            <div class="login-cont">
                <div class="lgoin-group" style=display:block id="usernamepwdLoginContainer">
                    <div class="error-info" data-error="" data-eleid="username" style=display:none><i class="icon-hint"></i><span></span></div>
                    <form action="{{URL('login/register')}}" method="post" id="userloginform">
                        <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                        <input type="hidden" name="accountIdentity" value="2" />
                    <input id="source" name="source" type="hidden" value="http://www.tujia.com/beijing_gongyu/se0/" />
                    
                    <div class="control-group">
                        <div class="controls">
                            <label for="username">
                                <input class="ipt-text" id="username" name="username" type="text" value="" autocomplete="off" />
                                <span class="text-watermark">邮箱/手机号/用户名</span>
                            </label>
                        </div>
                    </div>
                    <input type="text" style="display:none" />
                    <div class="control-group">
                        <div class="controls">
                            <label for="pwd">
                                <input class="ipt-text" id="pwd" name="pwd" type="password" value="" autocomplete="off" />
                                <span class="text-watermark">密码</span>
                            </label>
                             
                        </div>
                    </div>
                    
                    <div class="control-group verifycode-group">
                        <div class="controls">
                            <input class="ipt-text verify-text" data-message="请输入验证码" id="verifycode" name="verifycode" type="text" value="" />
                            <img id="verifyImage" src="images/code.gif" alt="看不清楚，换一张" class="verify-image">
                            <a id="verifyImageLink" href="javascript:void(0)" class="change-rand">看不清，换一张</a>
                        </div>
                    </div>
                    
                    <div class="control-group t-control-group">
                        <label for="saveUserLongTime">
                            <input type="checkbox" class="check-btn" id="saveUserLongTime" />保存登录状态2周<input type="hidden" name="userExpiresHours" id="userExpiresHours" value="">
                        </label>
                        <a href="/PortalSite/FetchPassword" class="forget-pwd">忘记密码？</a>
                    </div>
                    <div class="control-group button-group">
                        <input type="submit" value="登录" title="登录" class="login-btn" />
                    </div>
                </form>
                </div>

                

<div class="lgoin-group" style=display:none id="smscodeLoginContainer">
    <div id="smsLoginErrorTip" class="error-info" data-eleid="Mobile" data-error="" style="display:none;"><i class="icon-hint"></i><span></span></div>
   <form action="{{URL('login/cellphone')}}" method="post" id="smsCodeloginform"> 
   <input type="hidden" name="_token" value="{{csrf_token()}}"/>
        <input id="source" name="source" type="hidden" value="http://www.tujia.com/beijing_gongyu/se0/" />
        <input type="hidden" name="accountIdentity" value="2"/>
        <div class="control-group">
            <div class="controls">
                <label for="Mobile">
                    <input class="ipt-text" id="Mobile" name="Mobile" type="text" value="" autocomplete="off" maxlength="11" />
                    <span class="text-watermark">请输入手机号</span>
                </label>
            </div>
        </div>
        <div class="control-group verifycode-group" style="" id="verifyImageContainer">
            <div class="controls">
                <input class="ipt-text verify-text" data-message="请输入验证码" id="verifyCodePic" name="verifyCodePic" type="text" value="" maxlength="4" />
                <img id="smsverifyImage" src="/PortalSite/VerifyImage" alt="看不清楚，换一张" class="verify-image">
            </div>
        </div>
        <div class="control-group">
            <div class="controls">
                <label for="username">
                    <input class="ipt-text pwd-text" id="smsCode" name="smsCode" type="text" value="" autocomplete="off" maxlength="4" />
                    <span class="text-watermark" style="width:125px">动态密码</span>
                </label>
                <input type="button" id="btnGetVerifyCode" value="获取动态密码" class="verify-btn" onclick="pwd()" />
				<input type="button" id="huoqu" style="display:none" value="发送成功" class="verify-btn"  />
				

            </div>
        </div>
        <span id="errorMsgCode"></span>
        <div class="control-group t-control-group">
            <label for="smssaveUserLongTime">
                <input type="checkbox" class="check-btn" id="smssaveUserLongTime" />保存登录状态2周
                <input type="hidden" name="userExpiresHours" value="">
            </label>

        </div>
        <div class="control-group button-group">
            <input type="submit" value="登录" title="登录" class="login-btn" />
        </div>
 </form> 
</div>
               
                <div class="column-box"><a href="/PortalSite/Register">我要注册！</a>注册立送<span class="h-text">100元</span>+1000积分(抵<span class="h-text">10元</span>)</div>
            </div>
            <div class="coagent-cont">
                <div class="coagent-tit"><span>合作网站账号登录</span></div>
                <div class="link-btn-cont">
                     <a href="javascript:;" id="qqLogin" title="QQ账户登录" onclick="qqLogin();return false;"  class="qq-login-btn">QQ</a>
                     <a href="javascript:;" id="sinaLogin" title="新浪微博账户登录" onclick="sinaLogin();return false;" class="sian-login-btn">新浪微博</a>
                     <a href="javascript:;" id="" title="微信账户登录" onclick="wechatLogin();return false;" class="weixin-login-btn">微信</a>
                </div>
            </div>
        </div>
    </div>
    <div class="clear"></div>

   
    
        <div class="m-footer-link-list">
            <a href="http://content.tujia.com/tujiajianjie.htm" target="_blank" class="forst" rel="nofollow">关于我们</a>|
            <a href="http://content.tujia.com/youkebangzhu.htm" target="_blank" rel="nofollow">我是房客</a>|
            <a href="http://content.tujia.com/qiyewenhua.htm" target="_blank" rel="nofollow">加入蜗牛短租</a>|
            <a href="http://www.tujia.com/SiteMap/UnitDestination" target="_blank">网站地图</a>|
            <a href="http://www.tujia.com/SiteMap/Default" target="_blank">城市地图</a>
        </div>
<!--引入js文件 -->   
<script type="text/javascript">
function  pwd(){
      var phone=document.getElementById('Mobile').value;
	 
		  $.ajax({
            type:'get',
            url:"{{URL('login/phone')}}",
           data:'phone='+phone,
           success:function(msg){
                if(msg==1){
					$("#btnGetVerifyCode").val("动态密码已发送");
					//$("#btnGetVerifyCode").hide();
					//$("#btnGetVerifyCode").css('display','none'); 
					// $('#huoqu').css("display","block");

				}else{
					$('#btnGetVerifyCode').val("动态密码失败");
				}
            }
        })  
	  // var date={'phone':phone}
	   //   $.get("{{URL('login/phone')}}",date,function(msg){
	   //     alert(msg);
	   //  });

             
}
</script>
     

<script type="text/javascript">
    var staticFileRoot = "https://staticfiles.tujia.com",
         minDate = "2016-05-16",
         mindate =  new Date(2016,4,16),
         maxDate = "2016-11-12",
         maxdate= new Date(2016,10,12),
         houseId,
         ServerDomain = "tujia.com",
         TUJIA_CLIENTID = '7db170bc-5a2e-4800-921c-43665d4ebd72';

    var portalUrl = "http://www.tujia.com";
    var favoriteUrl = "http://vip.tujia.com";
    var customerUrl =  "http://vip.tujia.com";
    var imUrl = "http://im.tujia.com";

</script>

    
    
    <script type="text/javascript">
        var currentPage = "login";

        // 初始化验证码
        var verifyimagesrc = '/PortalSite/VerifyImage?r=' + Math.random();
        $("#verifyImage").attr("src", verifyimagesrc);

        // 更改验证码
        $("#verifyImage,#verifyImageLink,#smsverifyImage").click(function () {
            var verifyimagesrc = 'https://passport.tujia.com/PortalSite/VerifyImage?r=' + Math.random();
            if(this.id == "smsverifyImage"){
                $(this).attr("src", verifyimagesrc);
            }
            else{
                $("#verifyImage").attr("src", verifyimagesrc);
            }
            
            return false;
        });

        $("#saveUserLongTime,#smssaveUserLongTime").click(function () {
            var nextInput = $(this).next("input");
            if (this.checked) {
                nextInput.val(350);
            } else {
                nextInput.val("");
            }
        });
        
        // $("#footer").parent(.attr("id", "SmplifyFooter");
        $('#username,#pwd,#Mobile,#smsCode').focus(function () {
            $(this).next().hide();
        }).blur(function () {
            if ($.trim($(this).val()) == "") {
                $(this).next().show();
            }
        });

        //fix bug 11269
        $(function(){
            if($('#username').val() !== "" || $("#pwd").val() !== ""){
                $('#username').focus();
                $("#pwd").focus();
            }
            /*fix bug 25492 chrome 记住密码导致文字重复*/
            var $pwd = $('<input type="password" style="display:none">');
            $("#pwd").before($pwd);
            setTimeout(function(){
                $pwd.remove();
            },5000);
            
        });
    </script>
    <script type="text/javascript" src="https://staticfiles.tujia.com/portalsite2/scripts/js_account_foot?v=6b40c9a"></script>

    
    
</body>
</html>


