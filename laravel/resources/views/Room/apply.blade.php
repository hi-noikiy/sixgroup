<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">  
<html>
<head>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=9,IE=8" />
    <link rel="shortcut icon" href="//staticfile.tujia.com/PortalSite/Images/favicon.ico" type="image/x-icon" />
    <link rel="bookmark" href="//staticfile.tujia.com/PortalSite/Images/favicon.ico" type="image/x-icon" />
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <title>申请开店-蜗牛网</title>

	<link href="//staticfile.tujia.com/Landlord/styles/powerFloat.css" rel="stylesheet" type="text/css"></link>
    <link href="//staticfile.tujia.com/Landlord/styles/common.css" rel="stylesheet" type="text/css"></link>
	<link href="//staticfile.tujia.com/Landlord/styles/landlord.login.css" rel="stylesheet" type="text/css"></link>
	
    <script src="//staticfile.tujia.com/Landlord/Scripts/jquery1.8.3.js" type="text/javascript"></script>
    <script src="//staticfile.tujia.com/Landlord/Scripts/overlay.js" type="text/javascript"></script>
    <script src="//staticfile.tujia.com/Landlord/Scripts/jquery.validate.min.1.11.0.js" type="text/javascript"></script>
    <script src="//staticfile.tujia.com/Common/Scripts/jquery.validate.unobtrusive.min.js" type="text/javascript"></script>
    <script src="//staticfile.tujia.com/Landlord/Scripts/select.js" type="text/javascript"></script>
    <script src="//staticfile.tujia.com/LandLord/Scripts/jquery-powerFloat.js" type="text/javascript"></script>
    <script src="//staticfile.tujia.com/Common/Scripts/JSON.stringify.js" type="text/javascript"></script>
    <script src="//staticfile.tujia.com/Landlord/Scripts/expose.js" type="text/javascript"></script>
    <script src="//staticfile.tujia.com/Landlord/Scripts/jquery.scrollTo.min.js" type="text/javascript"></script>

    <script type="text/javascript">
    var modelerrors = null;
    </script>    
           
    <script>
        $(function() {
            $(".apply_group").not("#addressDiv").click(function() {
                $(this).find(".input-w200").focus();
            });
            $(".apply_group").not("#addressDiv").find(".input-w200").bind("focus change", function() {
                $(this).parent().find(".text_prompt").remove();
            });

            $(".apply_group .input-w200").not(":disabled").each(function() {
                if ($(this).val().length > 0) {
                    $(this).next(".text_prompt").remove();
                }
            });
            (function clearValidationResults(){
                var selector = ".field-validation-error";
                $(selector).map(function(index,element){
                    $(element).text("");
                    $(element).addClass("hide");
                    $(element).addClass("field-validation-valid");
                    $(element).removeClass("field-validation-error");
                })          
            })();
            (function setValidationResults(){
            	if(modelerrors==null){
            		return;
            	}
            	var viewerrors = modelerrors.viewerrors;
            	if (viewerrors != null){
            		$.each(viewerrors,function (index,value){
            			if (value.target == null||$.trim(value.target)==''){
            				return;
            			}
            			var selector = ".field-validation-valid[data-valmsg-for="+value.target+"]";
            			$(selector).map(function(index,element){
            				$(element).text(value.errorMessage);
            				$(element).removeClass("hide");
            				$(element).removeClass("field-validation-valid");
            				$(element).addClass("field-validation-error");
            			})
            		})
            	}
            })();
            (function checkButtonAvailable() {
                var active = true;
                $(".input-w200").not(":disabled").each(function() {
                    if ($(this).val().length == 0) {
                        active = false;
                        return false;
                    }
                });
                if (active) {
                    $("#applySubmit").removeAttr("disabled").removeClass("btn-disable-m").addClass("btn-primary-m");
                } else {
                    $("#applySubmit").attr("disabled", "disabled").removeClass("btn-primary-m").addClass("btn-disable-m");
                }

                setTimeout(checkButtonAvailable, 1000);
            })();

            function autoCompleteEmail(email) {
                $("#FakeEmail").show().val(email);
                $("#Email").hide().val(email);
                $("#Email").next(".text_prompt").remove();
                $("#EmailAutoCompleted").val(true);
            }

            function cancelEmailAutoComplete() {
                $("#FakeEmail").hide();
                $("#Email").show();
                if ($("#Email").val().indexOf("*") > 0) {
                    $("#Email").val("");
                }
                $("#EmailAutoCompleted").val(false);
            }

            function autoCompleteMobile(mobile) {
                $("#FakeMobile").show().val(mobile);
                $("#Mobile").hide().val(''+mobile);
                $("#Mobile").next(".text_prompt").remove();
                $("#MobileAutoCompleted").val(true);
            }

            function cancelMobileAutoComplete() {
                $("#FakeMobile").hide();
                $("#Mobile").show();
                if ($("#Mobile").val().indexOf("*") > 0) {
                    $("#Mobile").val("");
                }
                $("#MobileAutoCompleted").val(false);
            }

            function checkEmailAutoComplete() {
                var reg = /[0-9,+,-]{7,}/ig;
                var mobile = $("#Mobile").val();
                if (!reg.test(mobile)) {
                    cancelEmailAutoComplete();
                    return;
                }
                $.ajax({
                    url: "/merchant-web/StoreApply/GetMaskedEmailByMobile",
                    type: "POST",
                    data: { mobile: mobile },
                    cache: false,
                    dataType : 'json',
                    success: function(res) {
                        if (res.IsSuccess && res.Email.length > 4) {
                            autoCompleteEmail(res.Email);
                        } else {
                            cancelEmailAutoComplete();
                        }
                    },
                    error: cancelEmailAutoComplete
                });
            }
            $("#Mobile").change(checkEmailAutoComplete);

            function checkMobileAutoComplete() {
                var reg = /[\w-]+(\.[\w-]+)*@[\w-]+(\.[\w-]+)+/ig;
                var email = $("#Email").val();
                if (!reg.test(email)) {
                    cancelMobileAutoComplete();
                    return;
                }
                $.ajax({
                    url: "/merchant-web/StoreApply/GetMaskedMobileByEmail",
                    type: "POST",
                    data: { email: email },
                    cache: false,
                    dataType : 'json',
                    success: function (res) {
                        if (res.IsSuccess && res.Mobile.length > 4) {
                            autoCompleteMobile(res.Mobile);
                        } else {
                            cancelMobileAutoComplete();
                        }
                    },
                    error: cancelMobileAutoComplete
                });
            }
            $("#Email").change(checkMobileAutoComplete);

            (function() {
                if ($("#MobileAutoCompleted").val() == "true") {
                    checkMobileAutoComplete();
                } else if ($("#EmailAutoCompleted").val() == "true") {
                    checkEmailAutoComplete();
                }
            })();
        })
    </script>
    
    <script>
        $(function() {
            $("#applySubmit").click(function() {
                $(".text_prompt").remove();
            });
        });
    </script>
    <style>
    .hide{
        display:none
    }
    .field-validation-error {
        margin-left: 10px;
        padding-left: 20px;
        color: #f00;
        background: url(../../Images/error.jpg) no-repeat left center;
    }    
    </style>    
   	</head>  
    
    <body>
    <!-- 172.31.11.117 -->


	<div class="header">
	    <div class="wrap-lg">
	         <img  height="45px" width="130px" src="images/logo1.png" alt="蜗牛logo">
	        <div class="welcome-info">欢迎加入蜗牛平台</div>
	    </div>
	</div>

  
</div>

        <div class="body wrap-lg">
            <div class="detailTitle">商户申请</div>
            <div class="detailWraper">
    			
    			<!-- 对应StoreApplyController.cs中的[HttpPost] -->
                <form action="{{URL('room/store')}}" id="mainForm" method="post" ENCTYPE="multipart/form-data">
                 <input type="hidden" name="_token"  value="<?php echo csrf_token() ?>"/>

                    <div class="rowItem">
                        <span class="col_1"><i class="ui_important">*</i>房源标题：</span>
                        <div class="col_1_box">
                            <div class="apply_group">
                                <!-- @Html.TextBoxFor(m => m.DetailAddress, new { @class = "input-w200", maxlength = 50 }) -->
                                <input class="input-w200" data-val="true" data-val-length="不能超过50个字符" data-val-length-max="50" value=""
                                    data-val-required="请输入房源标题" id="roomTitle" maxlength="50" name="roomTitle" type="text" />
                                <span class="text_prompt">请填写房源标题</span>
                            </div>
                           
                        </div>
                    </div>

                    <div class="rowItem">
                        <span class="col_1"><i class="ui_important">*</i>详细地址：</span>
                        <div class="col_1_box">
                            <div class="apply_group">
                                <!-- @Html.TextBoxFor(m => m.DetailAddress, new { @class = "input-w200", maxlength = 50 }) -->
                                <input class="input-w200" data-val="true" data-val-length="不能超过50个字符" data-val-length-max="50" value=""
                                	data-val-required="请输入详细地址" id="roomAddress" maxlength="50" name="roomAddress" type="text" />
                                <span class="text_prompt">请填写门店的详细地址</span>
                            </div>
                            
                        </div>
                    </div>

                    <div class="rowItem">
                        <span class="col_1"><i class="ui_important">*</i>房源格局：</span>
                        <div class="col_1_box">
                            <div class="apply_group">
                                <input class="input-w200" data-val="true" data-val-length="联系人不能超过20个字" data-val-length-max="20" 
                                	data-val-required="请填写房源格局" id="roomPattern" maxlength="50" name="roomPattern" type="text" value="" />
                                <span class="text_prompt">请填写房源格局</span>
                            </div>
                            <span class="field-validation-valid" data-valmsg-for="ContactName" data-valmsg-replace="true"></span>
                        </div>
                    </div>
                     <div class="rowItem">
                        <span class="col_1"><i class="ui_important">*</i>可住人数：</span>
                        <div class="col_1_box">
                            <div class="apply_group">
                                <input class="input-w200" data-val="true" data-val-length="可住人数不能超过20个字" data-val-length-max="20" 
                                    data-val-required="请填写可住人数" id="peopleNumber" maxlength="50" name="peopleNumber" type="text" value="" />
                                <span class="text_prompt">请填写可住人数</span>
                            </div>
                            <span class="field-validation-valid" data-valmsg-for="ContactName" data-valmsg-replace="true"></span>
                        </div>
                    </div>
                    <div class="rowItem">
                        <span class="col_1"><i class="ui_important">*</i>房源价格：</span>
                        <div class="col_1_box">
                            <div class="apply_group">
                                <input class="input-w200" data-val="true" data-val-length="房源价格不能超过20个字" data-val-length-max="20" 
                                    data-val-required="请填写房源价格" id="roomPrice" maxlength="50" name="roomPrice" type="text" value="" />
                                <span class="text_prompt">请填写房源价格</span>
                            </div>
                            <span class="field-validation-valid" data-valmsg-for="ContactName" data-valmsg-replace="true"></span>
                        </div>
                    </div>
                    <div class="rowItem">
                        <span class="col_1"><i class="ui_important">*</i>房源地标：</span>
                        <div class="col_1_box">
                            <div class="apply_group">
                                <input class="input-w200" data-val="true" data-val-length="房源地标不能超过20个字" data-val-length-max="20" 
                                    data-val-required="请填写房源地标" id="roomLandmark" maxlength="50" name="roomLandmark" type="text" value="" />
                                <span class="text_prompt">请填写房源地标</span>
                            </div>
                            <span class="field-validation-valid" data-valmsg-for="ContactName" data-valmsg-replace="true"></span>
                        </div>
                    </div>
                     <div class="rowItem">
                        <span class="col_1"><i class="ui_important">*</i>房源主题：</span>
                        <div class="col_1_box">
                            <div class="apply_group">
                                <input class="input-w200" data-val="true" data-val-length="房源主题不能超过20个字" data-val-length-max="20" 
                                    data-val-required="请填写房源主题" id="roomTheme" maxlength="50" name="roomTheme" type="text" value="" />
                                <span class="text_prompt">请填写房源主题</span>
                            </div>
                            <span class="field-validation-valid" data-valmsg-for="ContactName" data-valmsg-replace="true"></span>
                        </div>
                    </div>
                    <div class="rowItem">
                        <span class="col_1"><i class="ui_important">*</i>房源面积：</span>
                        <div class="col_1_box">
                            <div class="apply_group">
                                <input class="input-w200" data-val="true" data-val-length="房源面积不能超过20个字" data-val-length-max="20" 
                                    data-val-required="请填写房源面积" id="roomSize" maxlength="50" name="roomSize" type="text" value="" />
                                <span class="text_prompt">请填写房源面积</span>
                            </div>
                            <span class="field-validation-valid" data-valmsg-for="ContactName" data-valmsg-replace="true"></span>
                        </div>
                    </div>
                    <div class="rowItem">
                        <span class="col_1"><i class="ui_important">*</i>房源图片：</span>
                        <div class="col_1_box">
                            <div class="apply_group">
                                <input type="file" name="roomImg[]" multiple /> 
                            </div>
                        </div>
                    </div>
                    <div class="rowItem">
                        <span class="col_1"><i class="ui_important">*</i>空调是否配置：</span>
                        <div class="col_1_box">
                            <div class="apply_group">
                                <input type="radio" name="roomCond" value="0">是 <input type="radio" name="roomCond" value="1">否
                            </div>
                        </div>
                    </div>
                    <div class="rowItem">
                        <span class="col_1"><i class="ui_important">*</i>电梯是否配置：</span>
                        <div class="col_1_box">
                            <div class="apply_group">
                                <input type="radio" name="roomEle" value="0">是 <input type="radio" name="roomEle" value="1">否
                            </div>
                        </div>
                    </div>
                    <div class="rowItem">
                        <span class="col_1"><i class="ui_important">*</i>房源介绍：</span>
                        <div class="col_1_box">
                            <textarea class="ui_textarea" cols="20" id="roomIntroduce" maxlength="1000" name="roomIntroduce" rows="2"></textarea>
                            <span class="field-validation-valid" data-valmsg-for="Description" data-valmsg-replace="true"></span>
                        </div>
                    </div>
                    <div class="detailSubmit">
                        <input id="applySubmit" type="submit" class="btn-disable-m" disabled="disabled" value="自主开店" />
                    </div>
                </form>
            </div>
            <div class="detailWraper">
                <div class="chooseTujia">
                    <div class="left">
                        <h2>为什么选择蜗牛</h2>
                        <p>作为中国住宿分享的引领者，蜗牛凭借其创新的商业模式、强大的品牌优势和专业的运营能力，目前已与国内近200个政府机构签约，并与TOP100的大部分房地产开发企业达成战略合作，签约管理资产超过1000亿人民币，签约储备房源超60万套。</p>
                        <p>
                            2015年8月3日，蜗牛宣布完成D及D+轮融资。新一轮融资3亿美元，估值超10亿美元，正式进入代表“独角兽”互联网公司的10亿美元俱乐部。雅诗阁、无忧我房等众多产业链合作伙伴的携手，标志着蜗牛致力打造的中国民宅分享生态圈正在逐步形成。
                        </p>
                    </div>
                    <div class="right">
                        <h2>加入条件</h2>
                        <p>房屋硬件品质较好，能提供较完善的客房服务。<br>有一定经营理念，能提供可经营的闲置房屋和有效经营资质。<br>接受蜗牛的合作模式并能在具体操作时积极跟进配合。</p>
                    </div>
                </div>
            </div>
        </div>
        
		<div class="m-footer-link-list">
		    
		    <a href="http://content.tujia.com/tujiajianjie.htm" target="_blank" class="forst" rel="nofollow">关于我们</a>|
		    <a href="http://content.tujia.com/youkebangzhu.htm" target="_blank" rel="nofollow">我是房客</a>|
		    <a href="http://content.tujia.com/qiyewenhua.htm" target="_blank" rel="nofollow">加入蜗牛</a>|
		   
		    <a href="http://www.tujia.com/SiteMap/UnitDestination/" target="_blank">网站地图</a>|
		    <a href="http://www.tujia.com/SiteMap/Default/" target="_blank">城市地图</a>
		    <p>&copy; Copyright  tujia.com 蜗牛&nbsp;&nbsp;&nbsp;&nbsp;版权所有&nbsp;&nbsp;&nbsp;&nbsp;不得转载<br /><a href="http://www.miitbeian.gov.cn/" target="_blank">京ICP证120277号</a><span style="display:inline-block; margin-left:10px">京公网安备11010502027120</span></p>
		</div>
        <script type="text/javascript">
    
        var staticFileRoot = "//staticfile.tujia.com",
            minDate = "2016-05-19",
            maxDate = "2017-04-19",
            houseId,
            ServerDomain = "tujia.com",
            TUJIA_CLIENTID = '9127141e-3d4e-4df2-8431-089de9c13c3a';
            
            var CURRENT_MERCHANT_ID = '0';
            var MERCHANT_COOKIE_NAME = "tujia.com_PortalContext_SMerchantID";
        </script>
		
        <!--底部 Google analytics访问分析代码/ 百度统计 -->
        <script type="text/javascript">
            var _gaq = _gaq || [];
            var _bdhmProtocol = (("https:" == document.location.protocol) ? " https://" : " http://");
            _gaq.push(['_setAccount', 'UA-30952525-1']);
            _gaq.push(['_setDomainName', 'tujia.com']);
            _gaq.push(['_setAllowHash', false]);
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
            _gaq.push(['_trackPageview']);
            _gaq.push(['_trackPageLoadTime']);
            if (typeof (trackTrans) != "undefined") { trackTrans(); }
            setTimeout(function () {
                var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
                ga.src = ('https:' == document.location.protocol ? ' https://ssl' : ' http://www') + '.google-analytics.com/ga.js';
                var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);

                var bd = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
                bd.src = unescape(_bdhmProtocol + "hm.baidu.com/h.js%3F6eaa65998325d9d0388d5784285942eb");
                var b = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(bd, b);
            }, 1500);
        </script>
    
    </body>  
</html>  