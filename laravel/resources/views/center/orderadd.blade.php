<!DOCTYPE HTML>
<html lang="en-US">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>
        填写订单信息-蜗牛短租
    </title>
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <!--meta http-equiv="X-UA-Compatible" content="IE=8,IE=9" /-->
    <meta property="qc:admins" content="27330065376452116375" />
    <meta property="wb:webmaster" content="791d1c6849c2b026" />
    <link rel="shortcut icon" href="http://staticfile.tujia.com/PortalSite/Images/favicon.ico" type="image/x-icon" />
    <link rel="bookmark" href="http://staticfile.tujia.com/PortalSite/Images/favicon.ico" type="image/x-icon" />
    <link rel="canonical" href="http://www.tujia.com/order/info"/>

    <link rel="stylesheet" type="text/css" href="http://staticfile.tujia.com/portalsite2/styles/css_global?v=405bfdc" />
    <link rel="stylesheet" href="http://staticfile.tujia.com/portalsite2/styles/base/powerFloat.css">
    <link rel="stylesheet" href="http://staticfile.tujia.com/Common/tooltip/poshytip/tip-white/tip-white.css" type="text/css" />
    <link rel="stylesheet" href="http://staticfile.tujia.com/bookingSite/Styles/common.css">
    <link rel="stylesheet" href="http://staticfile.tujia.com/bookingSite/Styles/order-info.css">

    <link rel="stylesheet" type="text/css" href="http://staticfile.tujia.com/portalsite2/styles/im.css?v=405bfdc" />
    <script type="text/javascript" src="http://staticfile.tujia.com/portalsite2/scripts/base/jquery.js?v=405bfdc"></script>

    <script type="text/javascript" src="http://staticfile.tujia.com/portalsite2/scripts/js_order_head?v=405bfdc"></script>
    <script src="http://staticfile.tujia.com/Common/tooltip/poshytip/jquery.poshytip.min.js" type="text/javascript"></script>
    <script type="text/javascript">
        var mindate =  new Date(2016,4,19);

        var maxdate= new Date('2016','10','15');
    </script>

    <script type="text/javascript">
        var MESSAGE_RADIO="http://staticfile.tujia.com/PortalSite2/radio/message.wav", ORDERNOTICE_RADIO = "http://staticfile.tujia.com/PortalSite2/radio/ordernotice.wav";
    </script>
</head>
<body>
<!--[if lt IE 8]>
<div class="ie-tips">
    <p>已经有超过90%的用户使用更高版本 <a target="_blank" title="下载Chrome" href="http://www.google.com/chrome/">Google Chrome</a> 或 <a target="_blank" href="http://www.microsoft.com/zh-cn/download/ie.aspx?q=internet+explorer">Internet Explorer</a> 体验到了更流畅更精彩的页面，您还不试试？</p>
</div>
<![endif]-->

<!--ORDER-81-47-->



<div class="m-fluid-cont">
    <div class="hd-link">
        <div class="sub-link"><a  href="{{URL('center')}}">我的蜗牛</a></div>
    </div>
</div>

<script type="text/javascript">
    var traceData = window.traceData || {};
    traceData.logService = 'http://api.tujia.com';
    traceData.prevId = '';
    traceData.pageId = '3bed8e49-dfbe-4527-848f-23404000e06c';
    traceData.url = '/order/info';
    traceData.params = 'unitid=90492&startDate=2016-05-19&endDate=2016-05-20&productId=234924&bookingCount=1&unitType=Sweetome';
</script>

<div class="m-fluid-cont t-fluid-cont">
    <div class="m-hd-cont">
        <div class="logo-cont">
            <img style="margin-top: 10px;margin-left: 17px" height="40px" width="100px" src="images/logo.jpg" alt="蜗牛logo"></a>
            <span class="logo-text">旅途中的家,全球公寓民宿预订平台</span>
        </div>
        <div class="step-cont">
            <div class="m-step-no1">
                <div class="m-step">
                    <ul class="cols3">

                        <li class="step1"><span class="s-num">1</span><span class="s-text">提交订单</span></li>
                        <li class="step3"><span class="s-num">2</span><span class="s-text">支付订金</span></li>
                        <li class="step4"><span class="s-num">3</span><span class="s-text">预订成功</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<form action="{{URL('orderad')}}" autocomplete="off" id="orderForm" method="post">
    <div class="m-wrap clearfix">
        <div class="m-cont">
            <!--预订信息-->
            <div id="outOrderBookingInfo">

                <div class="m-columns-hd new-columns-hd">
                    <h2>预订信息</h2>
                </div>

                <div class="m-form-cont booking-info">
                    <div class="control-group">
                    </div>
                    <div class="control-group">
                        <label for="" class="control-lab">预订房费：</label>
                        <div class="controls">
                            @foreach($data as $v)
                            <span class="total-picer" id="spnBookingInfoUnitAmount" rel="rateDetailLayer" ><dfn>¥</dfn><b class="picer-value" ><input type="hidden" name='r_price' value="{{$v->r_price}}"/>{{$v->r_price}}</b></span>
                            @endforeach
                            <!--房费明细-->
                            <div class="m-tips-wrap" id="rateDetailLayer" style="display: none">
                            </div>
                        </div>
                    </div>
                    <div class="control-group">
                        <label for="" class="control-lab"><b>*</b>入住人数：</label>
                        <div class="controls">
                            <div class="spinner-box">

                                <select class="oselectInput" id="PeopleCount1" name="o_people"><option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>

                <input type="hidden" id="hidGuestMaxCount" name="hidGuestMaxCount" value="0" />
                <input type="hidden" id="hidExtraBedLimit" name="hidExtraBedLimit" value="0" />
                <input type="hidden" id="hidspnProductName" name="hidspnProductName" />
                <input type="hidden" id="hidspnIsNeedConfirm" name="hidspnIsNeedConfirm" value="需要确认" />
                <input type="hidden" id="hidspnPrePayDes" name="hidspnPrePayDes" />
                <input type="hidden" id="hiddivReturnTasteVoucher" name="hiddivReturnTasteVoucher" value="288" />
                <input type="hidden" id="hiddivGiftPackage" name="hiddivGiftPackage" />
                <input type="hidden" id="hidCancelRule" name="hidCancelRule" />
                <input type="hidden" id="useFullPrepay" name="useFullPrepay" value="False" />
                <input type="hidden" id="consumptionTypeTitle" name="consumptionTypeTitle" value="不支持" />
                <input type="hidden" id="hiddivReturnCashBack" name="hiddivReturnCashBack" value=" f0" />
                <input type="hidden" id="hiddivOwnerReturnCashBack" name="hiddivOwnerReturnCashBack" value="0" />
                <input type="hidden" id="FastBooking" name="FastBooking" value="value" />
                <input type="hidden" id="TotalAmountNoChange" name="TotalAmountNoChange" value="288.0000" />
                <input type="hidden" id="TotalPrePayNoChange" name="TotalPrePayNoChange" value="288" />
                <input type="hidden" id="TotalAmount" name="TotalAmount" value="288.0000" />
                <input type="hidden" id="UnitID" name="UnitID" value="90492" />
                <input type="hidden" id="CheckInDate" name="CheckInDate" value="2016-05-19" />
                <input type="hidden" id="CheckOutDate" name="CheckOutDate" value="2016-05-20" />
                <input type="hidden" id="ConsumptionVoucherCash" name="ConsumptionVoucherCash" value="0" />
                <input type="hidden" id="TasteVoucherCash" name="TasteVoucherCash" value="0" />
                <input type="hidden" id="EnumProductType" name="EnumProductType" value="Normal" />
                <input type="hidden" id="BookingCount" name="BookingCount" value="1" />
                <input type="hidden" id="PeopleCount" name="PeopleCount" value="1" />
                <input type="hidden" id="ProductID" name="ProductID" value="234924" />
                <input type="hidden" id="UnitType" name="UnitType" value="Sweetome" />

                <div class="m-tips-wrap" id="freepickupassuredescribe-tip" style="display: none">
                </div>
            </div>

            <!--联系人信息-->

            <div class="m-columns-hd t-columns-hd">
                <h2>联系信息</h2>
            </div>

            <div class="m-form-cont contact-cont">
                <div class="control-group">
                    <label for="" class="control-lab"><b>*</b>姓名： </label>
                    <div class="controls">
                        <input class="ipt-lg" data-val="true" data-val-required="请填写真实的入住联系人姓名" id="Name" maxlength="20" name="u_name" placeholder="" type="text" value="" />
                        <div data-valmsg-for="OrderLinkmanList[0].Name" data-valmsg-replace="true"></div>
                    </div>
                </div>
                <div class="control-group">
                    <label for="" class="control-lab"><b>*</b>手机：</label>
                    <div class="controls">
                        <input class="ipt-lg" data-val="true" data-val-regex="请填写有效手机号码,我们将通过此号码与您取得联系" data-val-regex-pattern="^[1-9]\d{10}$" data-val-required="请填写有效手机号码,我们将通过此号码与您取得联系" id="Mobile" maxlength="11" name="u_phone" type="text" value="" />
                        <div data-valmsg-for="OrderLinkmanList[0].Mobile" data-valmsg-replace="true"></div>
                    </div>
                </div>

                <div class="control-group">
                    <label for="" class="control-lab">邮箱：</label>
                    <div class="controls">
                        <input class="ipt-lg" data-val="true" data-val-regex="E-mail 格式错误" data-val-regex-pattern="[A-Za-z0-9._%+-]+@([a-zA-Z0-9_-])+(\.[a-zA-Z0-9_-]+)+" id="Email" maxlength="50" name="u_email" type="text" value="" />

                        <div data-valmsg-for="OrderLinkmanList[0].Email" data-valmsg-replace="true"></div>
                    </div>
                </div>
            </div>
            <div class="m-login-wrap " id="userPop">
                <div class="login-head">

                    <h2>登录即享：积分余额抵订金，高级会员有优惠</h2>
                    <i class="close-btn  closeSubmit" title="关闭"></i>
                </div>
                <div class="login-tabs">
                    <a id="tabSmsLogin" href="javascript:;" class="phone-pwd">短信快捷登录/注册</a>
                    <a id="tabPwdLogin" href="javascript:;" class="user-pwd">普通登录</a>
                </div>
                <div class="login-body">
                    <div id="tabPwdLoginContent" class="dn">
                        <div class="column-box">
                            <p>注册立送<span class="highlight-box">100</span> 元礼品卡，预订立即可用</p>
                        </div>

                        <div class="control-group" style="margin-top:10px;">
                            <div class="controls">
                                <label for="account">
                                    <input type="text" class="ipt-text" name="username" id="account" value="" />
                                    <span class="text-watermark">用户名/手机号/邮箱</span>
                                </label>
                            </div>
                        </div>

                        <div class="control-group">
                            <div class="controls">
                                <label for="password">
                                    <input type="password" class="ipt-text" name="pwd" id="password" />
                                    <span class=" text-watermark">密码</span>
                                </label>
                            </div>
                            <div class="validationError dn" id="loginerrormsg"></div>
                        </div>

                        <div class="control-group  " id="validateArea">
                            <div class="controls">
                                <label for="verifycode">
                                    <input type="text" class="ipt-text verify-ipt" name="verifycode" id="verifycode" />
                                    <span class="text-watermark" style="width: 140px;">请输入计算结果</span>
                                    <img id="verifyImage" alt="看不清楚，换一张" class="verify-img" />
                                    <a id="verifyImageLink" href="javascript:void(0)" class="change-rand">看不清，换一张</a>
                                </label>
                            </div>
                            <div class="validationError dn" id="verifycodeErorr"></div>
                        </div>

                        <div class="control-group t-control-group">
                            <div class="controls">

                                <label for="saveUserLongTime"><input type="checkbox" name="" class="check-btn " id="saveUserLongTime">保存登录状态2周</label>

                                <a href="https://passport.tujia.com/PortalSite/FetchPassword" class="forget-pwd" target="_blank">忘记密码？</a>

                                <input type="hidden" name="userExpiresHours" id="userExpiresHours" value="" />
                            </div>
                        </div>

                        <div class="control-group btn-group">
                            <div class="controls">
                                <input type="button" value="登录" class="login-btn" id="loginSubmit" style="cursor:pointer;" />
                                <input type="button" value="登录中" class="login-btn" style="display:none;" id="loginSubmitIng" />

                            </div>

                        </div>

                        <div class="coagent-cont">
                            <div class="coagent-tit"><span>合作网站账号登录</span></div>
                            <div class="link-btn-cont">
                                <a href="javascript:;" id="qqLogin" title="QQ账户登录" onclick="qqLogin();return false;"  class="qq-login-btn">QQ</a>
                                <a href="javascript:;" id="sinaLogin" title="新浪微博账户登录" onclick="sinaLogin();return false;" class="sian-login-btn">新浪微博</a>
                                <a href="javascript:;" id="" title="微信账户登录" onclick="wechatLogin();return false;" class="weixin-login-btn">微信</a>
                            </div>
                        </div>


                        <script type="text/javascript">
                            $('#loginSubmit').bind('click', function () {
                                if (!$("#account").val() || !$("#password").val()) {
                                    $('#loginerrormsg').html("用户名或密码不能为空！").show();
                                    return;
                                }

                                $("#loginSubmit").hide();
                                $("#loginSubmitIng").show();
                                $.ajax({
                                    url: 'https://passport.tujia.com/PortalSite/AjaxLogin',
                                    data: {
                                        'username': $('#account').val()
                                        , 'pwd': $('#password').val()
                                        , 'verifycode': $('#verifycode').val()
                                        , 'userExpiresHours': $('#userExpiresHours').val()
                                        , 'currentUrl': window.location.href
                                    },
                                    type: 'post',
                                    dataType: 'jsonp',
                                    success: function (res) {
                                        if (res.IsSuccess) {
                                            if (res.RedirectUrl) {
                                                window.location.href = res.RedirectUrl;
                                                return;
                                            }

                                            if ($("#showButton").val() == "3" || $("#showButton").val() == "4") {
                                                if (window.location.href.indexOf("?") > -1) {
                                                    window.location.href = window.location.href + "&show=" + $("#showButton").val();
                                                }
                                                else {
                                                    window.location.href = window.location.href + "?show=" + $("#showButton").val();
                                                }
                                            }
                                            else {
                                                var redirectUrl = '';

                                                var href = redirectUrl == "" ? $("div.j-logon-directorder > a").attr("href") : redirectUrl;
                                                if (href) {
                                                    window.location.href = href;
                                                }
                                                else {
                                                    window.location.reload();
                                                }
                                            }

                                        } else {
                                            $("#loginSubmit").show();
                                            $("#loginSubmitIng").hide();
                                            if (res.ErrorCount >= 5) {
                                                $('#validateArea').show();
                                            }
                                            if (res.ErrorCode == 1) {
                                                $('#loginerrormsg').html(res.Message).show();
                                                $('#verifycodeErorr').hide();
                                            } else {
                                                $('#validateArea').show();
                                                $('#loginerrormsg').hide();
                                                $('#verifycodeErorr').html(res.Message).show();
                                            }
                                            $('#verifyImageLink').click();
                                        }
                                    }
                                });
                            });

                            $('#account,#password,#verifycode').focus(function () {
                                $(this).next().hide();

                                $('#loginerrormsg').hide();
                                $('#verifycodeErorr').hide();
                            }).blur(function () {
                                if ($.trim($(this).val()) == "") {
                                    $(this).next().show();
                                }
                            });

                            $("#saveUserLongTime").click(function () {
                                if (this.checked) {
                                    $("#userExpiresHours").val(350);
                                } else {
                                    $("#userExpiresHours").val("");
                                }
                            });

                            $("#verifyImage,#verifyImageLink").click(function () {
                                var verifyimagesrc = 'https://passport.tujia.com/PortalSite/VerifyImage?r=' + Math.random();
                                $("#verifyImage").attr("src", verifyimagesrc);
                                return false;
                            });

                            function qqLogin() {
                                window.location = "https://passport.tujia.com/PortalSite/QQLogin?srcUrl=http%3a%2f%2fbooking.tujia.com%2forder%2finfo%3funitid%3d90492%26startDate%3d2016-05-19%26endDate%3d2016-05-20%26productId%3d234924%26bookingCount%3d1%26unitType%3dSweetome";
                            }

                            function sinaLogin() {
                                window.location = "https://passport.tujia.com/PortalSite/SinaLogin?srcUrl=http%3a%2f%2fbooking.tujia.com%2forder%2finfo%3funitid%3d90492%26startDate%3d2016-05-19%26endDate%3d2016-05-20%26productId%3d234924%26bookingCount%3d1%26unitType%3dSweetome";
                            }

                            function wechatLogin() {
                                window.location = "https://passport.tujia.com/PortalSite/WeChatLogin?srcUrl=http%3a%2f%2fbooking.tujia.com%2forder%2finfo%3funitid%3d90492%26startDate%3d2016-05-19%26endDate%3d2016-05-20%26productId%3d234924%26bookingCount%3d1%26unitType%3dSweetome";
                            }
                        </script>

                    </div>
                    <div id="tabSmsLoginContent" class="dn">

                        <div class="column-box">
                            <p>注册立送<span class="highlight-box">100</span> 元礼品卡，预订立即可用</p>

                        </div>
                        <div class="control-group" style="margin-top:10px;">
                            <div class="controls">
                                <label for="smobile">
                                    <input type="text" class="ipt-text" name="smobile" id="smobile" value=""/>
                                    <span class="text-watermark">手机号</span>
                                </label>
                            </div>
                        </div>

                        <div class="control-group  " id="svalidatearea">
                            <div class="controls">
                                <label for="sverifycode">
                                    <input type="text" class="ipt-text verify-ipt" name="sverifycode" id="sverifycode" />
                                    <span class="text-watermark" style="width: 140px;">请输入计算结果</span>
                                    <img id="sverifyImage" alt="看不清楚，换一张" class="verify-img" />
                                    <a id="sverifyImageLink" href="javascript:void(0)" class="change-rand">看不清，换一张</a>
                                </label>
                            </div>
                        </div>

                        <div class="control-group  pwd-group">
                            <div class="controls">
                                <label for="spassword">
                                    <input type="text" class="ipt-text" name="code" id="spassword" />
                                    <span class=" text-watermark">动态密码</span>
                                </label>

                                <input type="button" id="sbtnGetVerifyCode" value="获取手机验证码" class="verify-btn" />
                            </div>
                            <div class="validationError dn" id="sloginerrormsg"></div>
                        </div>




                        <div class="control-group btn-group">
                            <div class="controls">
                                <input type="button" value="登录/注册" class="login-btn" id="sloginSubmit" style="cursor:pointer;" />
                                <input type="button" value="登录/注册中" class="login-btn" style="display:none;" id="sloginSubmitIng" />

                            </div>

                        </div>



                        <div class="coagent-cont">
                            <div class="coagent-tit"><span>合作网站账号登录</span></div>
                            <div class="link-btn-cont">
                                <a href="javascript:;" id="qqLogin" title="QQ账户登录" onclick="qqLogin();return false;"  class="qq-login-btn">QQ</a>
                                <a href="javascript:;" id="sinaLogin" title="新浪微博账户登录" onclick="sinaLogin();return false;" class="sian-login-btn">新浪微博</a>
                                <a href="javascript:;" id="" title="微信账户登录" onclick="wechatLogin();return false;" class="weixin-login-btn">微信</a>
                            </div>
                        </div>


                        <script type="text/javascript">

                            $('#sloginSubmit').click(function () {
                                if (!$("#smobile").val() || !$("#spassword").val()) {
                                    $('#sloginerrormsg').html("电话或短信验证码不能为空！").show();
                                    return;
                                }

                                $("#sloginSubmit").hide();
                                $("#sloginSubmitIng").show();


                                $.ajax({
                                    url: 'https://passport.tujia.com/PortalSite/SmsAjaxLogin',
                                    data: {
                                        'smobile': $('#smobile').val(), 'spassword': $('#spassword').val(), 'currentUrl': window.location.href
                                    },
                                    type: 'post',
                                    dataType: 'jsonp',
                                    success: function (res) {
                                        if (res.IsSuccess) {

                                            if (res.RedirectUrl) {
                                                window.location.href = res.RedirectUrl;
                                                return;
                                            }

                                            var redirectUrl = '';

                                            var href = redirectUrl == "" ? $("div.j-logon-directorder > a").attr("href") : redirectUrl;
                                            if (href) {
                                                window.location.href = href;
                                            }
                                            else {
                                                window.location.reload();
                                            }
                                        } else {
                                            $("#sloginSubmit").show();
                                            $("#sloginSubmitIng").hide();
                                            $('#sloginerrormsg').html(res.Message).show();
                                        }
                                    }
                                });

                            });

                            var countdownTimeWait = 60;
                            function CountdownTime() {

                                if (countdownTimeWait == 0) {
                                    $('#sbtnGetVerifyCode').removeAttr("disabled").val('获取动态密码');
                                    countdownTimeWait = 60;
                                } else {
                                    $('#sbtnGetVerifyCode').attr("disabled", true).val('重新发送(' + countdownTimeWait + ')');
                                    countdownTimeWait--;
                                    setTimeout(function () {
                                        CountdownTime();
                                    }, 1000)
                                }
                            }

                            $('#sbtnGetVerifyCode').click(function () {
                                var $sverifycode = $("#sverifycode");

                                if (!$("#svalidatearea").hasClass("dn") && !$sverifycode.val()) {
                                    $('#sloginerrormsg').html("验证码不能为空！").show();
                                    return;
                                }

                                var $smobile = $("#smobile");

                                if (!$smobile.val()) {
                                    $('#sloginerrormsg').html("手机号不能为空！").show();
                                    return;
                                }

                                var re = /^1\d{10}$/;
                                if (!re.test($smobile.val())) {
                                    $('#sloginerrormsg').html("手机号不正确！").show();
                                    return;
                                }

                                $('#sloginerrormsg').html("正在发送验证码至你的手机，请稍等！").show();

                                $.ajax({
                                    url: 'https://passport.tujia.com/PortalSite/SmsSendVerifyCode',
                                    data: {
                                        'smobile': $smobile.val(), 'sverifycode': $sverifycode.val()
                                    },
                                    type: 'post',
                                    dataType: 'jsonp',
                                    success: function (res) {

                                        $('#sloginerrormsg').html(res.Message).show();

                                        if (!res.IsSuccess) {
                                            $('#sverifyImageLink').click();
                                        }
                                        else {
                                            CountdownTime();
                                        }
                                    }
                                });
                            });




                            $('#smobile,#spassword,#sverifycode').focus(function () {
                                $(this).next().hide();

                                $('#sloginerrormsg').hide();
                            }).blur(function () {
                                if ($.trim($(this).val()) == "") {
                                    $(this).next().show();
                                }
                            });

                            $("#saveUserLongTime").click(function () {
                                if (this.checked) {
                                    $("#userExpiresHours").val(350);
                                } else {
                                    $("#userExpiresHours").val("");
                                }
                            });

                            $("#sverifyImage,#sverifyImageLink").click(function () {
                                var sverifyImagesrc = 'https://passport.tujia.com/PortalSite/VerifyImage?r=' + Math.random();
                                $("#sverifyImage").attr("src", sverifyImagesrc);
                                return false;
                            });


                        </script>

                    </div>
                </div>
            </div>
            <script type="text/javascript">

                $("#loginBtn").overlay({
                    top: "center",
                    mask: {
                        color: '#000',
                        loadSpeed: 100,
                        opacity: 0.5
                    },
                    target: "#userPop",
                    closeOnClick: false,
                    close: ".closeSubmit,div.link-group > a",
                    fixed: false,
                    onBeforeLoad: function () {
                        $(".login-tabs").children().first().click();
                    }

                });

                $("#tabPwdLogin").click(function () {
                    $("#tabPwdLogin").addClass("isActive");
                    $("#tabSmsLogin").removeClass("isActive");

                    $("#tabPwdLoginContent").show();
                    $("#tabSmsLoginContent").hide();
                    $("#verifyImageLink").click();

                    if ($("#account").val() !== "")
                        $("#account").focus();
                });

                $("#tabSmsLogin").click(function () {
                    $("#tabSmsLogin").addClass("isActive");
                    $("#tabPwdLogin").removeClass("isActive");

                    $("#tabPwdLoginContent").hide();
                    $("#tabSmsLoginContent").show();
                    $("#sverifyImageLink").click();

                    if ($("#smobile").val() !== "")
                        $("#smobile").focus();
                });

                $("#tabPwdLoginContent,#tabSmsLoginContent").on("keydown", "input:visible", function (event) {
                    if (event.keyCode != '13') {
                        return;
                    }

                    $(event.delegateTarget).find("input.login-btn:button:visible").click();
                    return false;
                })
            </script>


            <!--发票信息-->


            <!--可选服务-->


            <!--游客赠送保险-->

            <input id="maxInsurence" name="maxInsurence" type="hidden" value="1" />    <div id="div_Insurence" class="m-form-cont insurance-cont" style="display: none;">
                <div class="control-group">

                    <div class="controls">
                        <div class="form-inline">
                            <div class="form-group user-group">

                                <div class="form-control">

                                    <span class="field-validation-valid" data-valmsg-for="OrderInsurenceList[0].InsuredName" data-valmsg-replace="true"></span>
                                </div>
                            </div>
                            <div class="form-group certificate-type-group ">
                                <label for="" class="control-label">证件</label>
                                <div class="form-control">
                                    <div class="dorp-cont">
                                        <select class="ipt-sm oselectInput" data-val="true" data-val-required="EnumInsuredCertiType 字段是必需的。" id="insuredCertiType_0" name="OrderInsurenceList[0].EnumInsuredCertiType"><option value="1">身份证</option>
                                            <option value="2">军官证</option>
                                            <option value="3">护照</option>
                                        </select>
                                        <input class="ipt-primary" id="insuredCertiNo_0" maxlength="18" name="OrderInsurenceList[0].InsuredCertiNo" placeholder="有效证件号" type="text" value="" />
                                    </div>
                                    <span class="field-validation-valid" data-valmsg-for="OrderInsurenceList[0].InsuredCertiNo" data-valmsg-replace="true"></span>
                                </div>
                            </div>
                            <div class="form-group sex-group">
                                <label for="" class="control-label">性别</label>
                                <div class="form-control">
                                    <select class="ipt-sm oselectInput" data-val="true" data-val-required="Sex 字段是必需的。" id="insuredSex_0" name="OrderInsurenceList[0].Sex" readonly="readonly"><option value="1">男</option>
                                        <option value="2">女</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group age-group">
                                <label for="" class="control-label">生日</label>
                                <div class="form-control">
                                    <div>
                                        <input type="text" class="ipt-primary" id="insuredBirthDay_0" name="OrderInsurenceList[0].InsuredBirthDay" placeholder="YYYY-MM-DD" readonly="readonly">
                                    </div>
                                    <span class="field-validation-valid" data-valmsg-for="OrderInsurenceList[0].InsuredBirthDay" data-valmsg-replace="true"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="m-tips-wrap" id="freeInsurancetastevoucher-tip" style="display: none">
                <div class="tips-content text-description">
                    <h2>住宿意外险说明</h2>
                    <div class="tips-info">
                        途家网与众安保险公司合作推出"住宿旅客意外伤害保险"，保障您在住宿期间的人身安全。<br />
                        保险生效时间为入住前2小时，保障时长为您在线预订的入住天数。您可以随时在房客后台查看保险状态。如果您有其他保险相关问题，请拨打众安保险全国统一服务热线<br>
                        400-999-9595。
                        <a href="http://content.tujia.com/Clause/PassengerCasualty.htm" style="display: block; text-align: right; color: #5d91cd;" target="_blank">查看详情</a>

                    </div>
                </div>
            </div>
            <script type="text/javascript">


                function choiceInsuranceContact(e) {
                    //alert(e.attr("contactCardType"));
                    $("#" + e.attr("parentid")).val(e.attr("commonname"));
                    var cardType = e.attr("contactCardType");
                    $("#" + e.attr("parentid").replace("insuredName", "insuredBirthDay")).val('');
                    $("#" + e.attr("parentid").replace("insuredName", "insuredCertiType")).val(cardType);
                    $("#" + e.attr("parentid").replace("insuredName", "insuredCertiType")).data("selectinput").repaint();
                    $("#" + e.attr("parentid").replace("insuredName", "insuredSex")).val(e.attr("sex"));
                    $("#" + e.attr("parentid").replace("insuredName", "insuredSex")).data("selectinput").repaint();
                    $("#" + e.attr("parentid").replace("insuredName", "insuredCertiNo")).val(e.attr("contactCardNumber")).blur();
                    if (cardType == 1) {
                        $("#" + e.attr("parentid").replace("insuredName", "insuredBirthDay")).attr("readonly", "readonly");

                    } else if (cardType > 1) {
                        $("#" + e.attr("parentid").replace("insuredName", "insuredBirthDay")).removeAttr("readonly");
                        $("#" + e.attr("parentid").replace("insuredName", "insuredBirthDay")).val(e.attr("birthday")).blur();
                    }

                    $("#commonContacts").removeClass("dn").addClass("dn");
                }

                function clearInsurance(index) {
                    $("#insuredName_" + index).attr("value", "");;
                    $("#insuredCertiNo_" + index).attr("value", "");;
                }

                function removeInsurenceRule() {
                    $("#insuredName_0").rules("remove");
                    $("input[id^='insuredCertiNo']").each(function (i, el) {
                        $("#insuredCertiNo_" + i).rules("remove");
                    })
                    $("input[id^='insuredBirthDay']").each(function (i, el) {
                        $("#insuredBirthDay_" + i).rules("remove");
                    })
                }

                function addInsurenceRule() {
                    $("#insuredName_0").rules("add", { required: true, messages: { required: "<span class='error-info'>姓名必填</span>" } });
                    $("#insuredCertiNo_0").rules("add", {
                        required: true, messages: {
                            required: "<span class='error-info'>证件号码必填</span>"
                        }
                    });
                    $("input[id^='insuredCertiNo']").each(function (i, el) {
                        $(this).rules("add", { certiNoCheck: true, cardNoCheck: true })
                        $('#insuredCertiType_' + i).bind("change", function () {
                            if ($('#insuredCertiType_' + i).val() == "1") {
                                $("#insuredBirthDay_" + i).attr("readonly", "readonly");
                                $("#insuredBirthDay_").rules("remove");
                                $("#insuredSex_" + i).attr("readonly", "readonly");
                            }
                            else {
                                $("#insuredSex_" + i).removeAttr("readonly");
                                $("#insuredBirthDay_" + i).removeAttr("readonly");
                            }
                        });
                        $(this).bind("blur", function () {
                            var cardNo = $(this).val();
                            if ($('#insuredCertiType_' + i).val() == "1" && cardNo.length > 1) {
                                var sex = getSexByIdCard(cardNo);
                                var birthday = getBirthdayByIdCard(cardNo);
                                if (sex) {
                                    $("#insuredSex_" + i).val(sex == "man" ? "1" : "2").blur();
                                    $("#insuredSex_" + i).attr("readonly", "readonly");
                                    $("#insuredSex_" + i).data("selectinput").repaint();
                                }
                                if (birthday) {
                                    $("#insuredBirthDay_" + i).val(birthday).blur();
                                    $("#insuredBirthDay_" + i).attr("readonly", "readonly");
                                }
                            }
                        });
                    });
                    $("input[id^='insuredBirthDay']").each(function (i, el) {
                        $("#insuredBirthDay_" + i).rules("add", { required: true, dateISO: true, birthDayCheck: true, messages: { dateISO: "<span class='error-info'>格式错误</span>", required: "<span class='error-info'>出生日期必填</span>" } })
                    })

                    $("input[id^='insuredName_']").focus(function () {
                        var parentId = $(this).attr("id");

                        $.ajax({
                            type: "POST",
                            url: "/Order/GetCommonContact",
                            success: function (data) {
                                var jsonContact = new Array();
                                for (var i = 0; i < data.length; i++) {
                                    //var li = getCommonContactli(data[i].ContactName, data[i].ContactMobile);
                                    //$('#ulCommonContact')[0].appendChild(li);
                                    jsonContact.push(data[i]);
                                }
                                if (jsonContact.length > 0) {
                                    $("#commonContacts").remove();
                                    var child = getCommonContactsDiv(parentId, jsonContact);
                                    parentId = $(this)[0].id;
                                    $("body")[0].appendChild(child);
                                }
                                $('input:[commonname]').bind("click", function () {
                                    choiceInsuranceContact($(this), parentId);
                                });

                            },
                            error: function () {
                            }
                        });



                    });
                }

                jQuery.validator.addMethod("cardNoCheck", function (value, element) {
                    if (value.length > 0) {
                        var certiType = $("#" + element.id.replace("insuredCertiNo", "insuredCertiType")).val();
                        switch (certiType) {
                            case "1":
                                return checkIdCard(value).rst;
                            case "2":
                                return checkMilitaryCardNo(value).rst;
                            case "3":
                                return checkPassPortCardNo(value).rst;
                        }
                    }
                    return true;
                }, "<span class='error-info'>证件号码格式不正确</span>");

                var birthDayCheckErrStr;
                jQuery.validator.addMethod("birthDayCheck", function (value, element) {
                    if ($("#" + element.id.replace("insuredBirthDay", "insuredCertiType")).val() != "1" && value.length > 1) {
                        var ds = value.match(/\d+/g);
                        var ts = ['getFullYear', 'getMonth', 'getDate'];
                        if (ds == null || ds.length != 3) {
                            return false;
                        }
                        var d = new Date(value.replace(/-/g, '/'));
                        var i = 3;
                        var now = new Date();
                        if (d > now) {
                            return false;
                        }
                        ds[1]--;
                        while (i--) {
                            if (ds[i] * 1 != d[ts[i]]()) {
                                return false;
                            }
                        }
                    }
                    return true;
                }, "<span class='error-info'>日期错误</span>");

                jQuery.validator.addMethod("certiNoCheck", function (value, element) {
                    if ($("#" + element.id.replace("insuredCertiNo", "insuredName")).val().length > 1) {
                        return value.length > 0;
                    }
                    return true;
                }, "<span class='error-info'>证件号码必填</span>");

                $(function () {
                    insurenceTemplate = $('#div_Insurence .control-group').first().clone();
                    $("#checkboxInsurence").bind("click", function () {
                        if ($(this).is(":checked")) {
                            addInsurenceRule();
                            $("#div_Insurence").show();
                        }
                        else {
                            removeInsurenceRule();
                            $("#div_Insurence").hide();
                        }
                    });

                    $(".j-detail-freeInsurancetastevoucher").powerFloat({
                        container: "plugin",
                        reverseSharp: true,
                        position: "6-7"
                    });

                    addInsurenceRule();
                    $("#div_Insurence").show();


                });
            </script>

            <!--退订规则-->

            <div id="outUnsubscribeRule">
                <!--全额预付-->
                <div class="m-columns-hd">
                    <h2>退订规则</h2>
                </div>
                <div class="edsc-info">
                    <p>如果取消订单或没有入住，预付订金不予退还 </p>
                </div>
            </div>

            <!--预订须知-->

            <input id="CacheKey" name="CacheKey" type="hidden" value="9cf83019-a9d5-4c87-84f5-dc560ae95577" />

            <div class="buy-cont">
                <div class="agree-box">

                </div>
                <div class="btn-cont">
                    <input name="_token" value="{{csrf_token()}}" type="hidden"/>
                    <input type="submit" value="提交订单" id="ordersubmit1" class="submit-btn" onclick="_gaq.push(['_trackEvent', 'pcOrderInfo', '提交订单']);" />
                    <input type="button" value="正在提交中..." id="submitting" class="submit-btn dn" style="cursor: default; display: none;" />
                </div>
            </div>
        </div>
        <div class="side-bar-cont" id="outHouseInfo">
            @foreach($data as $v)
            <div class="side-info">

                <div class="order-cont">
                    <div class="picture-box">
                        <a href="room" target="_blank" rel="nofollow">
                            <img src="http://localhost/web/snail/laravel/public/images/{{$v->r_img}}" width="300" height="200" title="三亚瑞家公寓揽海精品两房一厅" alt="三亚瑞家公寓揽海精品两房一厅" /></a>
                        <span class="personal-tag landlord-tag">房东经营</span>

                    </div>
                    <div class="side-hd">
                        <h2><a href="room" target="_blank" onclick="_gaq.push(['_trackEvent', 'pcOrderInfo', '预订房屋点击']);">{{$v->r_title}}</a></h2>
                    </div>

                    <div class=" total-price-cont">
                        <div class="hlt-cont">

                            <div class="m-order-list price-list">
                                <ul>
                                    <li><span class="label-text">订单总价</span><span class="price-info total-price"><dfn>¥</dfn>{{$v->r_price}}</span></li>


                                </ul>
                            </div>

                            <div class="m-order-list payment-info">
                                <ul>
                                    <li class="total-payment"><span class="label-text">在线支付</span><span class="price-info total-price"><dfn>¥</dfn>{{$v->r_price}}</span></li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            @endforeach

            <div class="m-tips-wrap" id="specialreturncashback-tip" style="display: none">
                <div class="tips-content text-description">
                    <h2>额外返现说明</h2>

                </div>
            </div>


            <div class="m-tips-wrap" id="freepickupreturncashback-tip" style="display: none">
                <div class="tips-content text-description">
                    <h2>返现说明</h2>
                    <div class="tips-info">
                        该订单<span class="consumptionTypeTitle">返现</span><span class="spanReturnCashBack">0</span>元现金，入住完成并核实后的2-7个工作日内，可至您的途家账户提现！

                    </div>
                    <div style="margin-top:10px;height:10px;border-top:1px dashed  #b3b3b3;overflow:hidden;"></div>
                    <h2>提现说明</h2>
                    <div class="tips-info">
                        在“我的途家”的“账户余额”中可以查看到返现金额并进行提现，支持支付宝和银行卡两种方式，您设置好正确的账号信息后，就可以做提现申请。途家在收到提现申请后进行审核，审核通过后3-7个工作日将现金打入到您的提现账号里。

                    </div>
                </div>
            </div>

            <div class="m-tips-wrap" id="freepickupreturntastevoucher-tip" style="display: none">
                <div class="tips-content text-description">
                    <div class="tips-info">
                        下单入住后，发表含至少100字符、3张相关照片的精华点评，在系统审核通过后，便可获得途家赠送的体验券。800元（含）以下的订单按金额1：1的比例赠送体验券，800元以上的订单赠送800元体验券。
                    </div>
                </div>
            </div>

            <script type="text/javascript">
                $("#openPackageDetail").click(function () {
                    if ($(".package-list").attr("status") == "show") {
                        $('#openPackageDetail').parent().parent().attr("class", "cont-off cont-on");
                        $(".package-list").attr("status", "hidden");

                    } else {
                        $('#openPackageDetail').parent().parent().attr("class", "cont-off cont-off");
                        $(".package-list").attr("status", "show");

                    }
                });


                //抵扣
                $("#openDeductionDetail").click(function () {
                    var deductionList = $(".deduction-box") , _self = $(this);

                    if (_self.attr("data-status") == "true") {
                        deductionList.show();
                        _self.attr("data-status", "false").addClass("active");
                    } else {
                        deductionList.hide();
                        _self.attr("data-status", "true").removeClass("active");
                    }


                });
            </script>
        </div>
        <input id="IsShowPayDeduction" name="IsShowPayDeduction" type="hidden" value="False" />
    </div>


</form><div class="m-ensure-cont">
    <ul>
        <li class="first-box">
            <i class="icon-ensure"></i>
            <div class="text-cont">
                <h4>1000万<a href="http://www.tujia.com/Promotion/Tujiabaozhangjihua" target="_blank" class="link-btn" onclick="_gaq.push(['_trackEvent', 'pcDetail', '安心租100%保障']);">安心租100%保障</a></h4>
                <p>房屋描述失真、到店无房、房东加价全部退订金并补偿</p>
            </div>
        </li>
        <li>
            <i class="icon-tel"></i>
            <div class="text-cont">
                <h4>400-188-1234</h4>
                <p>7X24小时热线，30分钟保障处理响应</p>
            </div>
        </li>
    </ul>
</div>

<div id="flightNumberNotice" class="dn" style="position: relative">
    <div style="width: 220px;">
        <a href="javascript:;" class="closePowerFloat" title="关闭" style="position: absolute; top: 2px; right: 4px; width: 8px; height: 8px; font-weight: bold; line-height: 8px; text-align: center; font-size: 14px; color: #999">x</a>
        <div style="width: 206px">如航班尚未确定可不填，请最晚在航班到达前24小时致电 <span class="fw fb cf60">400-188-1234</span> 提供航班信息以便安排接机。</div>
    </div>
</div>

<div class="floatMask dn" id="div_BlackListMask">
</div>
<div class="m-elastic-layer dn" id="div_ErrorMessage">
    <div class="hd-cont">
        <a href="javascript:;" onclick="closeDiv(this)" title="关闭" class="close-btn"></a>
    </div>
    <div id="div_Error"class="bd-cont">
        <div class="verify-cont">
            <div class="control-group ">
                <span class="controls-span" id="span_Message" style="text-align:center">您已被拉入黑名单，无法下单，请联系途家客服</span>
            </div>
        </div>
    </div>
</div>
<div class="m-elastic-layer dn" id="div_ValidateCode">
    <div class="hd-cont">
        <h2>获取语音验证码</h2>
        <a href="javascript:;" onclick="closeDiv(this)" title="关闭" class="close-btn"></a>
    </div>
    <form action="/order/ConfirmValidateCode" data-ajax="true" data-ajax-complete="confirmVoiceCodeAfter" id="confirmVoiceCodeForm" method="post">
        <div id="div_VerifyCodeInfo" class="bd-cont">
            <div class="verify-cont">
                <div class="control-group ">
                    <span class="colItem">验证码将以语音形式发送至手机<span id="span_mobile" style="color:red"></span></span>
                    <div class="controls">
                        <label class="label-txt">验证码：</label>
                        <div class="colItem">
                            <input class="verify-code" data-val="true" data-val-required="请输入验证码" id="ValidateCode" maxlength="4" name="ValidateCode" type="text" value="" />
                            <input class="tel" id="ValidateTel" name="ValidateTel" type="hidden" value="" />
                            <input id="btn_SendVerifyCode" class="verifyCode" type="button" value="获取语音验证码" onclick="getVoiceCode()">
                            <br />
                            <input id="btn_ConfirmVoiceValidateCode" type="submit" value="确认" class="verify-btn" onclick="confirmVoiceCodeBefore()" style="margin: 20px 0 0 0" />
                            <input id= "btn_ConfirmWaiting" class="verify-btn" value="确认中..." style="margin: 20px 0 0 0;display:none">
                            <div class="error-cont" id="div_ValidateMessage"><span class="field-validation-valid" data-valmsg-for="ValidateCode" data-valmsg-replace="true"></span></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>

</div>

<form action="/order/IsNeedValidate" data-ajax="true" data-ajax-complete="isNeedValidateComplete" id="isNeedValidateForm" method="post"><input class="tel" id="checkMobile" name="Tel" type="hidden" value="" />
    <input id="FastBooking" name="FastBooking" type="hidden" value="True" />
    <input type="button" id="submitNeedValidate" class="dn" />
</form>

<div class="m-elastic-layer dn" id="maskLayer">
    <div class="hd-cont">
        <h2>请验证手机号码</h2>
        <a href="javascript:;" title="关闭" class="close-btn"></a>
    </div>

    <form action="/order/SendValidateCode" data-ajax="true" data-ajax-complete="sendValidateCodeComplete" id="sendValidateCodeForm" method="post">
        <div id="sendValidateCodePanel" class="bd-cont">
            <div class="verify-cont">
                <div class="control-group ">
                    <span class="controls-span">您输入的手机尚未验证：</span>
                    <div class="controls">
                        <input class="ipt-text tel" disabled="disabled" id="validateTel" name="validateTel" type="text" value="" />
                        <input class="tel" id="Vtel" name="Vtel" type="hidden" value="" />
                        <input id="SendValidateCodeBtn" type="submit" value="获取验证码" class="verify-btn" />
                    </div>
                </div>
            </div>
        </div>
    </form><form action="/order/ConfirmValidateCode" data-ajax="true" data-ajax-complete="confirmValidateCodeComplete" id="confirmValidateCodeForm" method="post">
        <div id="confirmValidateCodePanel" class="bd-cont dn">
            <div class="verify-cont">
                <div class="control-group ">
                    <span class="controls-span">请输入验证码：</span>
                    <div class="controls">
                        <input class="verify-code" data-val="true" data-val-required="请输入验证码" id="ValidateCode" maxlength="4" name="ValidateCode" type="text" value="" />
                        <input class="tel" id="ValidateTel" name="ValidateTel" type="hidden" value="" />
                        <input id="ConfirmValidateCodeBtn" type="submit" value="确认" class="verify-btn" onclick="confirmValidateCodeBefore();" />
                        <input style="display: none" hidden="hidden" id="ConfirmWaiting" class="verify-btn" value="确认">
                        <div class="error-cont"><span class="field-validation-valid" data-valmsg-for="ValidateCode" data-valmsg-replace="true"></span></div>
                        <div class="point-cont">
                            验证码已发送到您手机：<span class="tel-box"></span>  <span id="reSendWaiting"></span><a href="#" id="reSendValidateCode" class="link-btn">重新验证</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>

<script type="text/javascript">
    var houseCalendarData = {"checkin":[[[0,0,0,0],[0,0,0,0],[0,0,0,0],[0,0,0,0],[0,0,0,0],[0,0,0,0],[0,0,0,0],[0,0,0,0],[0,0,0,0],[0,0,0,0],[0,0,0,0],[0,0,0,0],[0,0,0,0],[0,0,0,0],[0,0,0,0],[0,0,0,0],[0,0,0,0],[0,0,0,0],[1,288,1,1],[1,288,2,1],[1,288,2,1],[1,288,1,1],[1,288,2,1],[1,288,3,1],[1,288,3,1],[1,288,3,1],[0,0,0,0],[0,0,0,0],[1,288,3,1],[1,288,3,1],[1,288,3,1]],[[1,288,3,1],[1,288,3,1],[1,288,3,1],[1,288,3,1],[1,288,3,1],[1,288,3,1],[1,288,3,1],[1,288,3,1],[1,288,3,1],[1,288,3,1],[1,288,3,1],[1,288,3,1],[1,288,3,1],[1,288,3,1],[1,288,3,1],[1,288,3,1],[1,288,3,1],[1,288,3,1],[1,288,3,1],[1,288,3,1],[1,288,3,1],[1,288,3,1],[1,288,3,1],[1,288,3,1],[1,288,3,1],[1,288,3,1],[1,288,3,1],[1,288,3,1],[1,288,3,1],[1,288,3,1]],[[1,288,3,1],[1,288,3,1],[1,288,3,1],[1,288,3,1],[1,288,3,1],[1,288,3,1],[1,288,3,1],[1,288,3,1],[1,288,3,1],[1,288,3,1],[1,288,3,1],[1,288,3,1],[1,288,3,1],[1,288,3,1],[1,288,3,1],[1,288,3,1],[1,288,3,1],[1,288,3,1],[1,288,3,1],[1,288,3,1],[1,288,3,1],[1,288,3,1],[1,288,3,1],[1,288,3,1],[1,288,3,1],[1,288,3,1],[1,288,3,1],[1,288,3,1],[1,288,3,1],[1,288,3,1],[1,288,3,1]],[[1,288,3,1],[1,288,3,1],[1,288,3,1],[1,288,3,1],[1,288,3,1],[1,288,3,1],[1,288,3,1],[1,288,3,1],[1,288,3,1],[1,288,3,1],[1,288,3,1],[1,288,3,1],[1,288,3,1],[1,288,3,1],[1,288,3,1],[1,288,3,1],[1,288,3,1],[1,288,3,1],[1,288,3,1],[1,288,3,1],[1,288,3,1],[1,288,3,1],[1,288,3,1],[1,288,3,1],[1,288,3,1],[1,288,3,1],[1,288,3,1],[1,288,3,1],[1,288,3,1],[1,288,3,1],[1,288,3,1]],[[1,288,3,1],[1,288,3,1],[1,288,3,1],[1,288,3,1],[1,288,3,1],[1,288,3,1],[1,288,3,1],[1,288,3,1],[1,288,3,1],[1,288,3,1],[1,288,3,1],[1,288,3,1],[1,288,3,1],[1,288,3,1],[1,288,3,1],[1,288,3,1],[1,288,3,1],[1,288,3,1],[1,288,3,1],[1,288,3,1],[1,288,3,1],[1,288,3,1],[1,288,3,1],[1,288,3,1],[1,288,3,1],[1,288,3,1],[1,288,3,1],[1,288,3,1],[1,288,3,1],[0,0,0,0]],[[0,0,0,0],[0,0,0,0],[0,0,0,0],[0,0,0,0],[0,0,0,0],[0,0,0,0],[0,0,0,0],[0,0,0,0],[0,0,0,0],[0,0,0,0],[0,0,0,0],[0,0,0,0],[0,0,0,0],[0,0,0,0],[0,0,0,0],[0,0,0,0],[0,0,0,0],[0,0,0,0],[0,0,0,0],[0,0,0,0],[0,0,0,0],[0,0,0,0],[0,0,0,0],[0,0,0,0],[0,0,0,0],[0,0,0,0],[0,0,0,0],[0,0,0,0],[0,0,0,0],[0,0,0,0],[0,0,0,0]],[[0,0,0,0],[0,0,0,0],[0,0,0,0],[0,0,0,0],[0,0,0,0],[0,0,0,0],[0,0,0,0],[0,0,0,0],[0,0,0,0],[0,0,0,0],[0,0,0,0],[0,0,0,0],[0,0,0,0],[0,0,0,0],[0,0,0,0],[0,0,0,0],[0,0,0,0],[0,0,0,0],[0,0,0,0],[0,0,0,0],[0,0,0,0],[0,0,0,0],[0,0,0,0],[0,0,0,0],[0,0,0,0],[0,0,0,0],[0,0,0,0],[0,0,0,0],[0,0,0,0],[0,0,0,0]],[[0,0,0,0],[0,0,0,0],[0,0,0,0],[0,0,0,0],[0,0,0,0],[0,0,0,0],[0,0,0,0],[0,0,0,0],[0,0,0,0],[0,0,0,0],[0,0,0,0],[0,0,0,0],[0,0,0,0],[0,0,0,0],[0,0,0,0],[0,0,0,0],[0,0,0,0],[0,0,0,0],[0,0,0,0],[0,0,0,0],[0,0,0,0],[0,0,0,0],[0,0,0,0],[0,0,0,0],[0,0,0,0],[0,0,0,0],[0,0,0,0],[0,0,0,0],[0,0,0,0],[0,0,0,0],[0,0,0,0]],[[0,0,0,0],[0,0,0,0],[0,0,0,0],[0,0,0,0],[0,0,0,0],[0,0,0,0],[0,0,0,0],[0,0,0,0],[0,0,0,0],[0,0,0,0],[0,0,0,0],[0,0,0,0],[0,0,0,0],[0,0,0,0],[0,0,0,0],[0,0,0,0],[0,0,0,0],[0,0,0,0],[0,0,0,0],[0,0,0,0],[0,0,0,0],[0,0,0,0],[0,0,0,0],[0,0,0,0],[0,0,0,0],[0,0,0,0],[0,0,0,0],[0,0,0,0],[0,0,0,0],[0,0,0,0],[0,0,0,0]],[[0,0,0,0],[0,0,0,0],[0,0,0,0],[0,0,0,0],[0,0,0,0],[0,0,0,0],[0,0,0,0],[0,0,0,0],[0,0,0,0],[0,0,0,0],[0,0,0,0],[0,0,0,0],[0,0,0,0],[0,0,0,0],[0,0,0,0],[0,0,0,0],[0,0,0,0],[0,0,0,0],[0,0,0,0],[0,0,0,0],[0,0,0,0],[0,0,0,0],[0,0,0,0],[0,0,0,0],[0,0,0,0],[0,0,0,0],[0,0,0,0],[0,0,0,0]],[[0,0,0,0],[0,0,0,0],[0,0,0,0],[0,0,0,0],[0,0,0,0],[0,0,0,0],[0,0,0,0],[0,0,0,0],[0,0,0,0],[0,0,0,0],[0,0,0,0],[0,0,0,0],[0,0,0,0],[0,0,0,0],[0,0,0,0],[0,0,0,0],[0,0,0,0],[0,0,0,0],[0,0,0,0],[0,0,0,0],[0,0,0,0],[0,0,0,0],[0,0,0,0],[0,0,0,0],[0,0,0,0],[0,0,0,0],[0,0,0,0],[0,0,0,0],[0,0,0,0],[0,0,0,0],[0,0,0,0]],[[0,0,0,0],[0,0,0,0],[0,0,0,0],[0,0,0,0],[0,0,0,0],[0,0,0,0],[0,0,0,0],[0,0,0,0],[0,0,0,0],[0,0,0,0],[0,0,0,0],[0,0,0,0],[0,0,0,0],[0,0,0,0],[0,0,0,0],[0,0,0,0],[0,0,0,0],[0,0,0,0],[0,0,0,0],[0,0,0,0],[0,0,0,0],[0,0,0,0],[0,0,0,0],[0,0,0,0],[0,0,0,0],[0,0,0,0],[0,0,0,0],[0,0,0,0],[0,0,0,0],[0,0,0,0]],[[0,0,0,0]]],"checkout":[[[0,0,0],[0,0,0],[0,0,0],[0,0,0],[0,0,0],[0,0,0],[0,0,0],[0,0,0],[0,0,0],[0,0,0],[0,0,0],[0,0,0],[0,0,0],[0,0,0],[0,0,0],[0,0,0],[0,0,0],[0,0,0],[0,288,1],[1,288,1],[1,288,1],[1,288,1],[1,288,1],[1,288,1],[1,288,1],[1,288,1],[1,0,0],[0,0,0],[0,288,1],[1,288,1],[1,288,1]],[[1,288,1],[1,288,1],[1,288,1],[1,288,1],[1,288,1],[1,288,1],[1,288,1],[1,288,1],[1,288,1],[1,288,1],[1,288,1],[1,288,1],[1,288,1],[1,288,1],[1,288,1],[1,288,1],[1,288,1],[1,288,1],[1,288,1],[1,288,1],[1,288,1],[1,288,1],[1,288,1],[1,288,1],[1,288,1],[1,288,1],[1,288,1],[1,288,1],[1,288,1],[1,288,1]],[[1,288,1],[1,288,1],[1,288,1],[1,288,1],[1,288,1],[1,288,1],[1,288,1],[1,288,1],[1,288,1],[1,288,1],[1,288,1],[1,288,1],[1,288,1],[1,288,1],[1,288,1],[1,288,1],[1,288,1],[1,288,1],[1,288,1],[1,288,1],[1,288,1],[1,288,1],[1,288,1],[1,288,1],[1,288,1],[1,288,1],[1,288,1],[1,288,1],[1,288,1],[1,288,1],[1,288,1]],[[1,288,1],[1,288,1],[1,288,1],[1,288,1],[1,288,1],[1,288,1],[1,288,1],[1,288,1],[1,288,1],[1,288,1],[1,288,1],[1,288,1],[1,288,1],[1,288,1],[1,288,1],[1,288,1],[1,288,1],[1,288,1],[1,288,1],[1,288,1],[1,288,1],[1,288,1],[1,288,1],[1,288,1],[1,288,1],[1,288,1],[1,288,1],[1,288,1],[1,288,1],[1,288,1],[1,288,1]],[[1,288,1],[1,288,1],[1,288,1],[1,288,1],[1,288,1],[1,288,1],[1,288,1],[1,288,1],[1,288,1],[1,288,1],[1,288,1],[1,288,1],[1,288,1],[1,288,1],[1,288,1],[1,288,1],[1,288,1],[1,288,1],[1,288,1],[1,288,1],[1,288,1],[1,288,1],[1,288,1],[1,288,1],[1,288,1],[1,288,1],[1,288,1],[1,288,1],[1,288,1],[1,0,0]],[[0,0,0],[0,0,0],[0,0,0],[0,0,0],[0,0,0],[0,0,0],[0,0,0],[0,0,0],[0,0,0],[0,0,0],[0,0,0],[0,0,0],[0,0,0],[0,0,0],[0,0,0],[0,0,0],[0,0,0],[0,0,0],[0,0,0],[0,0,0],[0,0,0],[0,0,0],[0,0,0],[0,0,0],[0,0,0],[0,0,0],[0,0,0],[0,0,0],[0,0,0],[0,0,0],[0,0,0]],[[0,0,0],[0,0,0],[0,0,0],[0,0,0],[0,0,0],[0,0,0],[0,0,0],[0,0,0],[0,0,0],[0,0,0],[0,0,0],[0,0,0],[0,0,0],[0,0,0],[0,0,0],[0,0,0],[0,0,0],[0,0,0],[0,0,0],[0,0,0],[0,0,0],[0,0,0],[0,0,0],[0,0,0],[0,0,0],[0,0,0],[0,0,0],[0,0,0],[0,0,0],[0,0,0]],[[0,0,0],[0,0,0],[0,0,0],[0,0,0],[0,0,0],[0,0,0],[0,0,0],[0,0,0],[0,0,0],[0,0,0],[0,0,0],[0,0,0],[0,0,0],[0,0,0],[0,0,0],[0,0,0],[0,0,0],[0,0,0],[0,0,0],[0,0,0],[0,0,0],[0,0,0],[0,0,0],[0,0,0],[0,0,0],[0,0,0],[0,0,0],[0,0,0],[0,0,0],[0,0,0],[0,0,0]],[[0,0,0],[0,0,0],[0,0,0],[0,0,0],[0,0,0],[0,0,0],[0,0,0],[0,0,0],[0,0,0],[0,0,0],[0,0,0],[0,0,0],[0,0,0],[0,0,0],[0,0,0],[0,0,0],[0,0,0],[0,0,0],[0,0,0],[0,0,0],[0,0,0],[0,0,0],[0,0,0],[0,0,0],[0,0,0],[0,0,0],[0,0,0],[0,0,0],[0,0,0],[0,0,0],[0,0,0]],[[0,0,0],[0,0,0],[0,0,0],[0,0,0],[0,0,0],[0,0,0],[0,0,0],[0,0,0],[0,0,0],[0,0,0],[0,0,0],[0,0,0],[0,0,0],[0,0,0],[0,0,0],[0,0,0],[0,0,0],[0,0,0],[0,0,0],[0,0,0],[0,0,0],[0,0,0],[0,0,0],[0,0,0],[0,0,0],[0,0,0],[0,0,0],[0,0,0]],[[0,0,0],[0,0,0],[0,0,0],[0,0,0],[0,0,0],[0,0,0],[0,0,0],[0,0,0],[0,0,0],[0,0,0],[0,0,0],[0,0,0],[0,0,0],[0,0,0],[0,0,0],[0,0,0],[0,0,0],[0,0,0],[0,0,0],[0,0,0],[0,0,0],[0,0,0],[0,0,0],[0,0,0],[0,0,0],[0,0,0],[0,0,0],[0,0,0],[0,0,0],[0,0,0],[0,0,0]],[[0,0,0],[0,0,0],[0,0,0],[0,0,0],[0,0,0],[0,0,0],[0,0,0],[0,0,0],[0,0,0],[0,0,0],[0,0,0],[0,0,0],[0,0,0],[0,0,0],[0,0,0],[0,0,0],[0,0,0],[0,0,0],[0,0,0],[0,0,0],[0,0,0],[0,0,0],[0,0,0],[0,0,0],[0,0,0],[0,0,0],[0,0,0],[0,0,0],[0,0,0],[0,0,0]],[[0,0,0]]]};
    var getHouseDataUrl = '/UnitDetail/GetUnitInventory',
        getAvailableInventoryDateRange = '/UnitDetail/GetAvailableInventoryDateRange';
    var houseId = Number('90492'), timeData = [0, 0],getPriceUrl = '/UnitDetail/GetPrice';
    var subtype = Number('16');
    var $body = (window.opera) ? (document.compatMode == "CSS1Compat" ? $('html') : $('body')) : $('html,body');
    $body.animate({ scrollTop: 150 }, 1000);
</script>



<!-- footer Start -->


<div class="m-seo-list">


</div>

<div style="display: none">SeoFooter执行时间: 0.0333</div>

<div class="m-footer-link-list" style="text-align: center;">
    <a href="http://content.tujia.com/Home/Index.htm" target="_blank" class="forst" rel="nofollow">关于我们</a>|
    <a href="http://content.tujia.com/BusinessIntro/HolidayApartment.htm" target="_blank" rel="nofollow">业务介绍</a>|
    <a href="http://content.tujia.com/Jobs/Social.htm" target="_blank" rel="nofollow">加入途家</a>|
    <a href="http://content.tujia.com/Help/Index.htm" target="_blank" rel="nofollow">帮助中心</a>|
    <a href="/SiteMap/UnitDestination" target="_blank">网站地图</a>|
    <a href="/SiteMap/Default" target="_blank">城市地图</a>
    <p class="safe-cont">
        <a href="http://www.12377.cn/" target="_blank"><img src="http://staticfile.tujia.com/PortalSite2/Images/safeImages/safe-img1.jpg" alt="互联网违法和不良信息举报中心" width="138" height="40" /></a>

        <a href="http://bj.cyberpolice.cn/" target="_blank"><img src="http://staticfile.tujia.com/PortalSite2/Images/safeImages/safe-img3.jpg" alt="北京市公安局网络违法犯罪举报"  width="98" height="40" /></a>

    </p>
</div>


<style>
    .black_overlay1 {
        display: none;
        position: absolute;
        top: 0%;
        left: 0%;
        width: 100%;
        height: 200%;
        background-color: black;
        z-index: 1001;
        -moz-opacity: 0.8;
        opacity: .80;
        filter: alpha(opacity=80);
    }

    .white_content {
        display: none;
        position: absolute;
        top: 25%;
        left: 35%;
        width: 30%;
        /*height: 45%;
            padding: 20px;*/
        border: 1px solid #ccc;
        background-color: white;
        z-index: 1002;
        overflow: auto;
    }

    .white_content li {
        font-size: 12px;
    }
</style>

<div id="light1" class="m-elastic-layer white_content">
    <div class="hd-cont">
        <h2>恭喜您</h2>
        <a href="javascript:;" onclick="closeNoticeBtn('light1','divfadebg1');" class="close-btn"></a>
    </div>




</div>

<!--弹出层时背景层DIV-->
<div id="divfadebg1" class="black_overlay1"></div>
<script type="text/javascript">

    (function () {
        if ($("#unLoginCustomerStatus").val() != null && $("#unLoginCustomerStatus").val() != "") {
            $(".highcustomerlevel-text").html($("#unLoginCustomerStatus").val());
            $(".maxrate-text").html($("#unLoginCustomerMaxRate").val());
            showDialogForBooking("light1", "divfadebg1", 0);
        } else {
            //alert('bg2');
        }
        //var CustomerInfoEnumCustomerLevel = $("#CustomerInfoEnumCustomerLevel").val();
        //alert(CustomerInfoEnumCustomerLevel);

        var highLevelCustomerNoticeStatus = $.cookie("highLevelCustomerNoticeStatus");
        if (highLevelCustomerNoticeStatus === null) {
            //alert('null1');

            setTimeout("getEnumCustomerLevel()", 1000);





        } else {
            //alert(highLevelCustomerNoticeStatus);
            //alert('already-show');
        }


    })();


    function getEnumCustomerLevel() {
        $.ajax({
            type: "Get",
            url: "/Order/GetEnumCustomerLevel/t=" + new Date().getTime(),
            success: function (data) {
                var models = data.split('|');
                var title = models[0];
                var isKA = models[1];
                if (title == "false" && isKA == "false") {
                    //alert('nohighLevel');
                } else {
                    $.cookie("highLevelCustomerNoticeStatus", 1, { expires: 100 });
                    //alert(data);
                    $(".highcustomerlevel-text").html(title);
                    if (title == "钻石会员") {
                        $(".maxrate-text").html("10");
                    } else if (title == "白金会员" || title == "途家员工") {
                        $(".maxrate-text").html("5%-10");
                    } else {
                        $(".maxrate-text").html("3%-5");
                    }
                    showDialogForBooking("light1", "divfadebg1", 0);
                }
            }
        });
    }

    function showDialogForBooking(id, bg_div, ticketCount) {
        $(".black_overlay1").height(document.body.clientHeight);
        document.getElementById(id).style.display = 'block';
        $(".black_overlay1").show();
        var topy = 300 + ticketCount * 30;
        document.getElementById(id).style.top = topy + "px";
    }
    function closeNoticeBtn(id, bg_div) {
        document.getElementById(id).style.display = 'none';
        $(".black_overlay1").hide();

    }
</script>



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
    setTimeout(function () {
        var a = document.createElement("script");
        var b = document.getElementsByTagName("script")[0];
        a.src = document.location.protocol + "//dnn506yrbagrg.cloudfront.net/pages/scripts/0025/8248.js?" + Math.floor(new Date().getTime() / 3600000);
        a.async = true; a.type = "text/javascript"; b.parentNode.insertBefore(a, b)
    }, 1);
    //var qimoClientId = "-1843556302";
</script>
<script type='text/javascript' src='http://webchat.7moor.com/javascripts/7moorInit.js?accessId=797098a0-b29d-11e5-b3b1-49764155fe50&autoShow=false' async='async'></script>


<script type="text/javascript">
    var staticFileRoot = "http://staticfile.tujia.com",
        minDate = "2016-05-19",
        maxDate = "2017-04-19",
        houseId,
        ServerDomain = "tujia.com",
        TUJIA_CLIENTID = '67f11882-b6a4-48f4-bb92-5870af62b68d';
    var imUrl = "http://im.tujia.com";
    var portalUrl = "http://www.tujia.com";
    var customerUrl =  "http://vip.tujia.com";
    var favoriteUrl = "http://vip.tujia.com";
    var MESSAGE_RADIO="http://staticfile.tujia.com/PortalSite2/radio/message.wav";
    var worldUrl = "";


</script>
<script type="text/javascript" src="http://staticfile.tujia.com/portalsite2/scripts/im_v2.js?v=405bfdc"></script>
<script type="text/javascript" src="http://cdn.ronghub.com/RongIMLib-2.0.10.min.js"></script>

<script type="text/javascript" src="http://staticfile.tujia.com/common/scripts/jquery.numeric.js?v=405bfdc"></script>
<script type="text/javascript" src="http://staticfile.tujia.com/bookingsite/scripts/js_order_foot?v=405bfdc"></script>
<!-- 携程追踪代码   -->

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

        _mvq.push(['$setGeneral', 'cartview', '', /*用户名*/ '', /*用户id*/ '']);
        _mvq.push(['$logConversion']);
        _mvq.push(['$addGoods', /*分类id*/ '', /*品牌id*/ '', /*商品名称*/ '',/*商品ID*/ $("#UnitID").val(),/*本店商品售价*/ '', /*商品图片url*/ '', /*分类名*/ '', /*品牌名*/ '', /*商品库存状态1或是0*/ '', /*市场参考价*/ '',/*收藏人数*/, /*商品下架时间*/,'']);
        _mvq.push(['$logData']);
    })();


    (function () {
        if (traceLog) {
            traceLog("Common", {
                pageName: "Booking",
                pageId: traceData.pageId,
                prevId: getPrevId(),
                url: traceData.url,
                params: traceData.params
            });
        }
    })();

</script>





<!--Donut#<ActionSettings xmlns="http://schemas.datacontract.org/2004/07/DevTrends.MvcDonutCaching" xmlns:i="http://www.w3.org/2001/XMLSchema-instance"><ActionName>TraceUser</ActionName><ControllerName i:nil="true"/><RouteValues i:nil="true" xmlns:a="http://schemas.microsoft.com/2003/10/Serialization/Arrays"/></ActionSettings>#--><script type='text/javascript'>$.post('/Home/TraceUser', {"ID":0,"CreateTime":"2016-05-19T20:04:51.1690615+08:00","UserAgent":"Mozilla/5.0 (Windows NT 6.3; WOW64; rv:46.0) Gecko/20100101 Firefox/46.0","UserBrowser":"Firefox46","PageName":"Order_TraceUser","Url":"http://booking.tujia.com/order/info?unitid=90492&startDate=2016-05-19&endDate=2016-05-20&productId=234924&bookingCount=1&unitType=Sweetome","UserIP":"114.249.221.139","SessionId":"","UserId":"e1940b87-b6c1-4d18-87cd-4c1c55cab7d3","Host":"Order-81-47","IsFirstRequest":false,"PageSessionId":"61f67f43-79e9-4107-814f-4e14df9f1a93","IsAjax":false,"OperaterName":"[guest]","ModuleName":"Web.Booking","ParentPageSessionId":"","UrlReferrer":"http://www.tujia.com/sanya_gongyu/se0/sanyawan_90492.htm","Site":2});</script><!--EndDonut-->

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

    if (typeof selectedConditionInfos != "undefined") {
        var arrList = selectedConditionInfos.split("|");
        _gaq.push(['_setCustomVar', 1, 'City', arrList[0],3]);
        _gaq.push(['_setCustomVar', 2, 'District', arrList[1],3]);
        _gaq.push(['_setCustomVar', 3, 'Circle', arrList[2],3]);
        _gaq.push(['_setCustomVar', 4, 'Price', arrList[3],3]);
    }

    if (typeof (ServerDomain) != 'undefined' && $.cookie && $.cookie(ServerDomain + "_ABTest") && $.cookie(ServerDomain + "_ABTest") != "None") {
        _gaq.push(['_trackPageview', window.location.pathname + window.location.search + (window.location.search == "" ? "?" : "&") + "abtest=" + $.cookie(ServerDomain + "_ABTest")]);
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

        //var bd = document.createElement('script'); bd.type = 'text/javascript'; bd.async = true;
        //bd.src = unescape(_bdhmProtocol + "hm.baidu.com/h.js%3F405c96e7f6bed44fb846abfe1f65c6f5");
        //var b = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(bd, b);

        var _hmt = _hmt || [];
        (function () {
            var hm = document.createElement("script");
            hm.src = "//hm.baidu.com/hm.js?405c96e7f6bed44fb846abfe1f65c6f5";
            var s = document.getElementsByTagName("script")[0];
            s.parentNode.insertBefore(hm, s);
        })();

    }, 800);
</script>


<script type="text/javascript" src="http://tajs.qq.com/gdt.php?sId=36632340" charset="UTF-8"></script>


<script type='text/javascript'>
    var _zpq = _zpq || [];
    _zpq.push(['_setPageID', '480']);
    _zpq.push(['_setPageType', 'orderInfoPage']);
    _zpq.push(['_setParams', '1','90492','288','1']);
    _zpq.push(['_setAccount', '184']);
    (function() {
        var zp = document.createElement('script'); zp.type = 'text/javascript'; zp.async = true;
        zp.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'cdn.zampda.net/s.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(zp, s);
    })();
</script>



<script  type="text/javascript" src="http://staticfile.tujia.com/statkeyword.js"></script>

<!-- Google Code for Remarketing Tag -->
<script type="text/javascript">
    var google_tag_params = {
        ecomm_prodid: '90492',
        ecomm_pagetype: 'order',
        ecomm_totalvalue: ''
    };
    var google_tag_params
    /* <![CDATA[ */
    var google_conversion_id = 964995166;
    var google_custom_params = window.google_tag_params;
    var google_remarketing_only = true;
    /* ]]> */
</script>
<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js"></script>
<noscript>
    <div style="display:inline;">
        <img height="1" width="1" style="border-style:none;" alt="" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/964995166/?value=0&amp;guid=ON&amp;script=0"/>
    </div>
</noscript>

<!--网易有道DSP跟踪代码 -->
<script type="text/javascript">var youdao_conv_id = 273380;</script>
<script type="text/javascript" src="http://conv.youdao.com/pub/conv.js"></script>




</body>
</html>
