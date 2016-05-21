
















<!DOCTYPE html>
<html lang="US-en">
    
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <link rel="shortcut icon" href="//staticfile.tujia.com/PortalSite/Images/favicon.ico" type="image/x-icon" />
    <link rel="bookmark" href="//staticfile.tujia.com/PortalSite/Images/favicon.ico" type="image/x-icon" />
   	<title>创建门店 - 途家网</title>
 
    <link href="//staticfile.tujia.com/Landlord/styles/common.css" rel="stylesheet" type="text/css" ></link>
    <link href="//staticfile.tujia.com/Landlord/styles/landlord2.house.css" rel="stylesheet" type="text/css" ></link>
    <link href="//staticfile.tujia.com/Landlord/styles/ui-calendar.css" rel="stylesheet" type="text/css" ></link>
    <link href="//staticfile.tujia.com/PortalSite2/styles/im.css" rel="stylesheet" type="text/css"></link>
    
    <link href="//staticfile.tujia.com/Landlord/styles/jquery-ui-1.10.1.autocomplete.min.css" rel="stylesheet" type="text/css" ></link>
    <link href="//staticfile.tujia.com/Landlord/styles/powerFloat.css" rel="stylesheet" type="text/css" ></link>
    <link href="//staticfile.tujia.com/Landlord/styles/landlord.storeDetail.css" rel="stylesheet" type="text/css"></link>


	<script src="//staticfile.tujia.com/Landlord/Scripts/jquery1.8.3.js" type="text/javascript"></script>
    <script src="//staticfile.tujia.com/Landlord/Scripts/jquery.validate.min.1.11.0.js" type="text/javascript"></script>
    <script src="//staticfile.tujia.com/Landlord/Scripts/common.js" type="text/javascript"></script>
    <script src="//staticfile.tujia.com/Common/Scripts/jquery.validate.unobtrusive.min.js" type="text/javascript"></script>
    <script src="//staticfile.tujia.com/Common/Scripts/jquery.watermark.js" type="text/javascript"></script>
    <script src="//staticfile.tujia.com/Common/Scripts/jquery.numeric.js" type="text/javascript"></script>
    <script src="//staticfile.tujia.com/LandLord/Scripts/jquery.alerts.js" type="text/javascript"></script>
    <script src="//staticfile.tujia.com/Landlord/Scripts/expose.js" type="text/javascript"></script>
    <script src="//staticfile.tujia.com/Landlord/Scripts/overlay.js" type="text/javascript"></script>
    <script src="//staticfile.tujia.com/portalsite2/scripts/js_common_head" type="text/javascript"></script>
    
    <script src="//staticfile.tujia.com/portalsite2/scripts/base/lazyload.js" type="text/javascript"></script>
    <script src="//staticfile.tujia.com/portalsite2/scripts/base/jquery.lazyload.js" type="text/javascript"></script>
    <script src="//staticfile.tujia.com/portalsite2/scripts/base/tabs.js" type="text/javascript"></script>
    <script src="//staticfile.tujia.com/portalsite2/Scripts/Base/jquery.powerFloat.js" type="text/javascript"></script>
    <script src="//staticfile.tujia.com/portalsite2/scripts/base/menu.js" type="text/javascript"></script>
    <script src="//staticfile.tujia.com/portalsite2/scripts/base/dateinput.js" type="text/javascript"></script>
    <script src="//staticfile.tujia.com/portalsite2/scripts/base/select.js" type="text/javascript"></script>
    <script src="//staticfile.tujia.com/portalsite2/scripts/base/select.enter.js" type="text/javascript"></script>
    <script src="//staticfile.tujia.com/portalsite2/scripts/base/tooltip.js" type="text/javascript"></script>
    <script src="//staticfile.tujia.com/portalsite2/scripts/base/easing.js" type="text/javascript"></script>
    <script src="//staticfile.tujia.com/portalsite2/scripts/base/cookie.js" type="text/javascript"></script>
    <script src="//staticfile.tujia.com/portalsite2/scripts/base/TuJiaCodeCookie.js" type="text/javascript"></script>
    <script src="//staticfile.tujia.com/portalsite2/scripts/base/jquery-ui-1.10.1.custom.js" type="text/javascript"></script>
    
    <script src="//staticfile.tujia.com/Common/Scripts/JSON.stringify.js" type="text/javascript"></script>
    <script src="//staticfile.tujia.com/Landlord/Scripts/dateinput.js" type="text/javascript"></script>
    <script src="//staticfile.tujia.com/Landlord/Scripts/jquery.scrollTo.min.js" type="text/javascript"></script>

    

<script type="text/javascript">
var Sys = new Object();
Sys.ie 		= navigator.userAgent.indexOf("MSIE") > 0 ? true : false;
Sys.firefox = navigator.userAgent.indexOf("Firefox") > 0 ? true : false;
Sys.chrome 	= navigator.userAgent.indexOf("Chrome") > 0 ? true : false;
Sys.opera 	= navigator.userAgent.indexOf("Opera") > 0 ? true : false;
Sys.safari 	= navigator.userAgent.indexOf("Safari") > 0 ? true : false;

String.prototype.trim = function() { return this.replace(/(^\s*)|(\s*$)/g,""); }
String.prototype.ltrim = function() { return this.replace(/(^\s*)/g, ""); }
String.prototype.rtrim = function() { return this.replace(/(\s*$)/g, ""); }

//页面加载完成  
$(document).ready(function(){  
    //禁止退格键 作用于Firefox、Opera   
    document.onkeypress = banBackSpace;  
    //禁止退格键 作用于IE、Chrome  
    document.onkeydown = banBackSpace;  
});
//处理键盘事件 禁止后退键（Backspace）密码或单行、多行文本框除外   
function banBackSpace(e){  
    //alert(event.keyCode)  
    var ev = e || window.event;//获取event对象     
    var obj = ev.target || ev.srcElement;//获取事件源       
    var t = obj.type || obj.getAttribute('type');//获取事件源类型       
    //获取作为判断条件的事件类型   
    var vReadOnly = obj.readOnly;  
    var vDisabled = obj.disabled;  
    //处理undefined值情况   
    vReadOnly = (vReadOnly == undefined) ? false : vReadOnly;  
    vDisabled = (vDisabled == undefined) ? true : vDisabled;  
    //当敲Backspace键时，事件源类型为密码或单行、多行文本的，    
    //并且readOnly属性为true或disabled属性为true的，则退格键失效    
    var flag1 = ev.keyCode == 8 && (t == "password" || t == "text" || t == "textarea") && (vReadOnly == true || vDisabled == true);  
    //当敲Backspace键时，事件源类型非密码或单行、多行文本的，则退格键失效      
    var flag2 = ev.keyCode == 8 && t != "password" && t != "text" && t != "textarea";  
    //判断      
    if (flag2 || flag1)   
        event.returnValue = false;//这里如果写 return false 无法实现效果   
}

function StringBuffer() {
  this._strings_ = new Array();
}
StringBuffer.prototype.append = function(str) {
  this._strings_.push(str);
  return this;
}
StringBuffer.prototype.toString = function() {
  return this._strings_.join("");
}

function stringToJson(str) {
    return eval('(' + str + ')');
}
function jsonToString(obj) {
    return JSON.stringify(obj);
}

function getURLParams() {
	
    var args = new Object();
    var query = location.search.substring(1);
    var pairs = query.split("&"); 
    
    for (var i=0; i<pairs.length; i++) {
        var pos = pairs[i].indexOf('=');
        if (pos == -1) { 
        	continue;
        }
        var argname = pairs[i].substring(0, pos); 
        var value = pairs[i].substring(pos + 1);
        value = decodeURIComponent(value);
        args[argname] = value;
    }
    return args;
}

function getURLParam(name) {
    var args = getURLParams();
    return args[name];
}

function appendURLParam(url, name, value) {
	
	var stringBuffer = new StringBuffer();
	
	stringBuffer.append(url);
	
	if (url.indexOf('?') == -1) {
		stringBuffer.append('?')
	} else {
		stringBuffer.append('&')
	}
	
	stringBuffer.append(name)
				.append('=')
				.append(encodeURIComponent(value));
	
	return stringBuffer.toString();
}

function getURLParamObject(urlParam) {
	
	if (urlParam == null) {
		urlParam = 'urlParam';
	}
	
	var urlParam = getURLParam(urlParam);
	if (urlParam != null) {				
		var urlParamObject = stringToJson(urlParam);
		return urlParamObject;
	}
	
	return null;
}

function JsonSet() {
	
	this.entry = new Object();

	this.put = function (key , value) {
		this.entry[key] = value;
	}
 
	this.get = function (key) {
		return key in this.entry ? this.entry[key] : null;
	}
	
	this.remove = function (key) {
		delete this.entry[key];
	}
	
	this.containsKey = function (key) {
		return (key in this.entry);
	}
 
	this.getKeys = function () {
		var keys = new Array();
		for(var key in this.entry) {
			keys.push(key);
		}
		return keys;
	}
	
	this.clean = function () {
		for(var key in this.entry) {
			delete this.entry[key];
		}
	}
	
	this.toString = function () {
		var allArray = new Array();
		for(var key in this.entry) {
			var singleArray = new Array();
			singleArray.push(key);
			singleArray.push('=');
			if (this.entry[key] instanceof Object) {
				singleArray.push(encodeURIComponent(jsonToString(this.entry[key])));
			} else {
				singleArray.push(this.entry[key]);
			}
			allArray.push(singleArray.join(''));
		}
		return allArray.join('&');
	}
}

function Map() {
	
	this.entry = new Object();
	
	this.put = function (key , value) {
		this.entry[key] = value;
	}
 
	this.get = function (key) {
		return key in this.entry ? this.entry[key] : null;
	}
	
	this.remove = function (key) {
		delete this.entry[key];
	}
	
	this.containsKey = function (key) {
		return (key in this.entry);
	}
 
	this.getKeys = function () {
		var keys = new Array();
		for(var key in this.entry) {
			keys.push(key);
		}
		return keys;
	}
	
	this.clean = function () {
		for(var key in this.entry) {
			delete this.entry[key];
		}
	}
	
	this.getEntry = function () {
		return this.entry;
	}
	
	this.setEntry = function (entry) {
		this.entry = entry;
	}
}

function transaction(obj) {
	
	/*
	 * obj.id
	 * obj.url
	 * obj.jsonSet
	 * obj.param
	 * obj.type
	 * obj.cache
	 * obj.async
	 * obj.other
	 * obj.timeout
	*/
	
	if (obj.param != undefined) {
		obj.url = appendURLParam(obj.url, obj.param);
	}
	
	$.ajax({
		
		url: obj.url,
		data: obj.jsonSet == undefined ? '' : obj.jsonSet.toString(),
		type: obj.type == undefined ? 'POST' : obj.type,
		cache: obj.cache == undefined ? false : obj.cache,
		async: obj.async == undefined ? true : obj.async,
		dataType: obj.dataType == undefined ? 'json' : obj.dataType,
		contentType: "application/x-www-form-urlencoded; charset=utf-8", 
		timeout: obj.timeout == undefined ? 20000 : obj.timeout,
		
		success: function(data, textStatus, jqXHR) {
			if (obj.callback == undefined) {
				callback(obj.id, data, obj.other);
			} else {
				obj.callback(data, obj.other);
			}
		},

		complete: function(jqXHR, textStatus) {
		},
		
		error: function(jqXHR, textStatus, errorThrown) {
			if (textStatus == 'parsererror') {
				alert('error return value!');
				return;
			} else {
				alert('ajax error info: ' + textStatus);
			}
			var data = new Object();
			data['result'] = 'false';
			if (obj.callback == undefined) {
				callback(obj.id, data, obj.other);
			} else {
				obj.callback(data, obj.other);
			}
		}
	});
}

Date.prototype.Format = function (fmt) {
	if (fmt == null) {
		fmt = "yyyy-MM-dd HH:mm:ss";
	}
    var o = {
        "M+": this.getMonth() + 1,
        "d+": this.getDate(),
        "H+": this.getHours(),
        "m+": this.getMinutes(),
        "s+": this.getSeconds(),
        "q+": Math.floor((this.getMonth() + 3) / 3),
        "S": this.getMilliseconds()
    };
    if (/(y+)/.test(fmt)) fmt = fmt.replace(RegExp.$1, (this.getFullYear() + "").substr(4 - RegExp.$1.length));
    for (var k in o)
		    if (new RegExp("(" + k + ")").test(fmt))
		    	fmt = fmt.replace(RegExp.$1, (RegExp.$1.length == 1) ? (o[k]) : (("00" + o[k]).substr(("" + o[k]).length)));
    return fmt;
}

function createGrid(obj) {
	
	/*
	 * obj.list
	 * obj.page
	 * obj.url
	 * obj.colNames
	 * obj.colModel
	 * obj.height
	 * obj.width
	 * obj.button
	 * obj.query
	*/
	
	// 遍历列集合，处理时间，但列中formatter属性为function时，不做处理
	for(var i = 0; i < obj.colModel.length; i++){
		var col = obj.colModel[i];
		if(col == null) continue;
		if(typeof col.formatter != 'function'){
			if (col.index.substr(col.index.length - 4, 4) == 'Date') {
				col.formatter = function(cellvalue, options, row){
					if(cellvalue == null || cellvalue == '1900-01-01 00:00:00.000' || cellvalue == '1900-01-01 00:00:00'){
						return "";
					}else{
						return cellvalue.substr(0, 10);
					}
				}
			} else if(col.index.substr(col.index.length - 4, 4) == 'Time') {
				col.formatter = function(cellvalue, options, row){
					if(cellvalue == null || cellvalue == '1900-01-01 00:00:00.000' || cellvalue == '1900-01-01 00:00:00'){
						return "";
					}else{
						return cellvalue;
					}
				}
			}
		}
	}
	
	$('#' + obj.list).jqGrid({
		url: obj.url != null ? obj.url : null,
		datatype: 'local',
		mtype: 'post',
		colNames: obj.colNames,
		colModel: obj.colModel,
		grouping: obj.grouping,
		groupingView: obj.groupingView,
		rowNum: obj.rowNum != null ? obj.rowNum : 10,
		rowList: obj.rowList != null ? obj.rowList : [10,20,30,50,100],
		pager: '#' + obj.page,
		sortname: 'id',
		autowidth: false,
		shrinkToFit: true,
		width: obj.width != null ? obj.width : $(window).width() - 208,
		height: obj.height != null ? obj.height : 'auto',
		altRows: obj.altRows != null ? obj.altRows : false, // 是否为交替行表格
		//显示记录数信息，如果这里设置为false,下面的不会显示 recordtext: "第{0}到{1}条, 共{2}条记录",
		//默认显示为{0}-{1} 共{2}条 scroll: false, //滚动翻页，设置为true时翻页栏将不显示  
		viewrecords: obj.viewrecords != null ? obj.viewrecords : true,
		/**这里是排序的默认设置，这些值会根据列表header点击排序时覆盖*/
		sortable: obj.sortable != null ? obj.sortable : false,
//		sortname: 'userRegionMappingId',
//		sortorder: obj.sortorder != null ? obj.sortorder : "desc",
		rownumbers: obj.rownumbers != null ? obj.rownumbers : true, //设置列表显示序号,需要注意在colModel中不能使用rn作为index
		rownumWidth: obj.rownumWidth != null ? obj.rownumWidth : 20, //设置显示序号的宽度，默认为25  
		multiselect: obj.multiselect != null ? obj.multiselect : true , // 是否多选，默认false
		multiboxonly: obj.multiboxonly != null ? obj.multiboxonly : true , //在点击表格row时只支持单选，只有当点击checkbox时才多选，需要multiselect=true是有效
		jsonReader: {
			repeatitems : false
		},
		ondblClickRow: false,
		caption: obj.caption != null ? obj.caption : '查询结果',
		onSelectRow: obj.onSelectRow,
		afterInsertRow:obj.afterInsertRow,
		gridComplete:function(){
			//repaintGrid(obj.height, obj.query, obj.list, obj.button);
			if(obj.width == null){
				$("#" + obj.list).setGridWidth($(window).width() - 208);
				window.setTimeout(function(){
					$("#" + obj.list).setGridWidth($(window).width() - 208);
				}, 1000);
				window.setTimeout(function(){
					$("#" + obj.list).setGridWidth($(window).width() - 208);
				}, 5000);
			}
			if (obj.gridComplete != undefined) {
				obj.gridComplete();
			}
			// grid页码输入域设为只读
			var pages = $(".ui-pg-input");
			if (pages.length > 0) {
				$(".ui-pg-input").attr("readonly","readonly");
			}
		}
	});
	
	$('#' + obj.list).jqGrid('navGrid', '#' + obj.page, {search:false, edit:false, add:false, del:false});
	
	$(window).resize(function(){ 
		if(obj.width == null){
			$("#" + obj.list).setGridWidth($(window).width() - 208);
		}
	});
	
	function repaintGrid(defaultHeight, expander, list, queryDiv, expanderChangeSize) {
		var listHeight = $("#" + list).height();
		var queryHeight = queryDiv != null ? $("#" + queryDiv).height() : 27;
		var expanderHeight = expanderChangeSize != null ? $("#" + expander).height() + expanderChangeSize : $("#" + expander).height();
		//var maxHeight = $(parent.$("iframe")[parent.$("iframe").size()-1]).height() - queryHeight - 98 - expanderHeight;
		var maxHeight = $(document.body).height();
		var maxHeight = $(document.body).height() - queryHeight - 88 - expanderHeight;
		
		var rowNum = $("#" + list).jqGrid('getGridParam', 'rowNum');
		var records = $("#" + list).jqGrid('getGridParam', 'records');
		var page = $("#" + list).jqGrid('getGridParam', 'page');
		
		var actual = rowNum * page > records ? records - rowNum * (page - 1) : rowNum
		
		var beyondRowNum = actual > 10 ? actual - 10 : 0;
		
		var expectHeight = defaultHeight + beyondRowNum * 23;
		var actualHeight = expectHeight;
		
		if (expectHeight > maxHeight) {
			actualHeight = defaultHeight + Math.floor((maxHeight - defaultHeight) / 23) * 23;
		}
		
		$("#" + list + "_div .ui-jqgrid-bdiv").height(actualHeight);
	}
}

function queryGrid(obj) {
	
	/*
	 * obj.list
	 * obj.url
	 * obj.postData
	*/
	
	$('#' + obj.list).jqGrid('setGridParam', {   
		url: obj.url,
		datatype: 'json',
		postData: obj.postData, 
		page: obj.page != null ? obj.page : 1,
		loadComplete: obj.loadComplete
	}).trigger('reloadGrid');
}

function selectedGrid(obj) {
	
	/*
	 * obj.list
	*/
	
	return jQuery('#' + obj.list).jqGrid('getGridParam', 'selarrrow');
}

function getGrid(obj) {
	
	/*
	 * obj.list
	 * obj.index
	*/
	
	return jQuery('#' + obj.list).jqGrid('getRowData', obj.index);
}

/*弹出框*/
var dialogCallback = null;

function openDialog(obj) {
	
	/*
	 * obj.title
	 * obj.url
	 * obj.urlParam
	 * obj.height
	 * obj.width
	 * obj.callback
	*/
	
	var height = obj.height != null && obj.height != '' ? obj.height : window.screen.height - 190;
	var width = obj.width != null && obj.width != '' ? obj.width : window.screen.width - 300;
	var url = obj.url;
	if (obj.urlParam != null && obj.urlParam != '') {
		url = appendURLParam(url, 'urlParam', jsonToString(obj.urlParam));
	}
	dialogCallback = obj.callback;
	$('#dialog').dialog({
		showStatus: false,
		showControlBox: false,
		autoOpen: false,
		modal: true,
		height: height,
		width: width,
		title: obj.title,
		close: function () {
			$('#dialog').empty();
		}
	});
	
	$('#dialog').append('<iframe src="'+ url +'" width="98%" height="98%" frameborder="0"></iframe>');
	$(".ui-dialog-buttonpane").hide();
	$(".ui-resizable-handle").hide();
	$('#dialog').dialog('open');
}

function closeDialog(isCallback, param) {
	$('#dialog').dialog('close');
	if (isCallback) {
		if (dialogCallback != null) {
			dialogCallback(param);
		}
	}
}
/*弹出框*/

/*回车响应*/
$(document).keydown(function(event){ 
	// 此处先注释掉，待日后统一保存和查询方法后修改
	/*if (event.keyCode == 13) {
		if (save != null) {
			save();
		} else if (query != null) {
			query();
		}
	} */
}); 
/*回车响应*/

/*文件上传*/
function fileUploadInit(obj) {
	
	/*
	 * obj.fileBrowse
	 * obj.fileUpload
	 * obj.fileName
	 * obj.fileLoading
	 * obj.fileId
	 * obj.url
	 * obj.disableList
	*/
	
	$("#"+obj.fileBrowse).button({icons: {primary: "ui-icon-folder-open"}, text: false}).click(function() {
		fileBrowseOpen(obj.fileBrowse, obj.fileUpload, obj.fileName, obj.fileLoading, obj.fileId, obj.url, obj.disableList, obj.callback);
	});
	
	function fileBrowseOpen(fileBrowse, fileUpload, fileName, fileLoading, fileId, url, disableList, callback) {
		if ($("#"+fileId).val() != null) {
			url += '?id='+ $("#"+fileId).val();
		}
		$("#"+fileUpload).unbind('change');
		$("#"+fileUpload).change(function() {
			if (!uploadfileSizeValidate(fileUpload)) return;
			fileBrowseClose(fileBrowse, fileUpload, fileName, fileLoading, disableList);
			$.ajaxFileUpload({
		        url: url,
		        secureuri: false,
		        formId:'fileForm',
		        fileElementId: fileUpload,
		        dataType: 'json',
		        success: function (data, status) {
		          if(data.result == 1){
		        	$("#"+fileId).val(data.id);
		            alert("上传成功");
		            for (var i=0; i<disableList.length; i++) {		
		            	$("#"+disableList[i]).removeAttr("disabled");
		            }
		          }else{
 					console.log(data.remark);
					alert("上传失败");
					for (var i=0; i<disableList.length; i++) {		
		            	$("#"+disableList[i]).removeAttr("disabled");
		            }
					if (callback != undefined) {
						callback();
					}
		          }
		          $("#"+fileBrowse).show();
		      	  $("#"+fileLoading).hide();
		          return false;
		        },
		        error: function (data, status, e) {
		        	console.log(data.remark);
		        	alert("上传失败");
		        	$("#"+fileBrowse).show();
		        	$("#"+fileLoading).hide();
		        	for (var i=0; i<disableList.length; i++) {		
		            	$("#"+disableList[i]).removeAttr("disabled");
		            }
		        	if (callback != undefined) {
						callback();
					}
		        	return false;
		        }
		      });
		});
		$("#"+fileUpload).click();
	}
	
	function uploadfileSizeValidate(fileName) {
        var maxsize = 5*1024*1024;  
        var errMsg = "上传文件请不要大于5M。";  
        var tipMsg = "您的浏览器暂不支持计算上传文件的大小，确保上传文件不要超过2M，建议使用IE，或FireFox、Chrome浏览器。";  
        var  browserCfg = {};  
        var ua = window.navigator.userAgent;  
        if (ua.indexOf("MSIE")>=1){  
            browserCfg.ie = true;  
        }else if(ua.indexOf("Mozilla")>=1){ 
            browserCfg.ie11 = true;  
        }else if(ua.indexOf("Firefox")>=1){  
            browserCfg.firefox = true;  
        }else if(ua.indexOf("Chrome")>=1){  
            browserCfg.chrome = true;  
        }  
        try{  
            var obj_file = document.getElementById(fileName);  
            if(obj_file.value==""){  
                alert("请先选择上传文件");  
                return false;  
            }  
            var filesize = 0;  
            if(browserCfg.firefox || browserCfg.chrome || browserCfg.ie11){  
                filesize = obj_file.files[0].size;  
            }else if(browserCfg.ie){  
                var obj_img = document.getElementById(fileName);  
                obj_img.dynsrc=obj_file.value;  
                filesize = obj_img.fileSize; 
            }else{    
                return true;  
            }  
            if(filesize==-1){  
                alert(tipMsg);  
                return false;  
            }else if(filesize>maxsize){  
                alert(errMsg);  
                return false;
            }else{   
                return true;  
            }  
        }catch(e){  
        	return false;  
        }
	}
	
	function fileBrowseClose(fileBrowse, fileUpload, fileName, fileLoading, disableList) {
		var fileUpload = $("#"+fileUpload).val();
		var start = fileUpload.lastIndexOf("\\") != -1 ? fileUpload.lastIndexOf("\\") : fileUpload.lastIndexOf("/")
		fileUpload = fileUpload.substring(start + 1, fileUpload.length);
		$("#"+fileName).val(fileUpload);
		$("#"+fileBrowse).hide();
		$("#"+fileLoading).show();
		for (var i=0; i<disableList.length; i++) {		
			$("#"+disableList[i]).attr("disabled", "disabled");
		}
	}
}
/*文件上传*/

function getInput(form) {
	
	var vo = new Object();
	$('#' + form + ' :input').each(function(i){
		// 复选框
		if ($(this).attr('type') == 'checkbox') {
			vo[$(this).attr('id')] = $(this).is(':checked');
		
		// 单选框
		} else if ($(this).attr('type') == 'radio') {
			vo[$(this).attr('name')] = $("input[name=" + $(this).attr('name') + "]:checked").val();
		
		// 正常input
		} else if ($(this).val() != null && $(this).val() != '' && $(this).attr('id') != undefined) {
			if ($(this).attr('id').indexOf('Date') != -1 && $(this).val().length == 10) {
				vo[$(this).attr('id')] = $(this).val() + ' 00:00:00';
			} else {
				vo[$(this).attr('id')] = $(this).val().trim();
			}
		}
	});
	
	return vo;
}

function setInput(form, data) {
	
	$('#' + form + ' :input').each(function(i){
		if (data[$(this).attr('id')] != null) {	
			if ($(this).attr('id').indexOf('Date') != -1) {
				$(this).val(data[$(this).attr('id')].substr(0,10));
			} else {
				$(this).val(data[$(this).attr('id')]);
			}
		}
	});
}

function emptyInput(form) {
	$('#' + form + ' :input').each(function(i){
			$(this).val(null);
	});
}
/* 按id数组校验非空 */
function notNullCheck(notNullArray) {
	
	for (var i = 0; i < notNullArray.length; i++) {
		var id = notNullArray[i];
		if ( ( $('#' + id).val().trim() == '' 
				|| $('#' + id).val() == '' 
				|| $('#' + id).val() == null
			  ) && $('#' + id).css("display") != "none") {
			alert($('#' + id + '_Label').text() + "不能为空");
			return false;
		}
	}
	return true;
}

function isIdCardCheck(isIdCardArray) {
	
	var reg = /(^\d{15}$)|(^\d{18}$)|(^\d{17}(\d|X|x)$)/;
	
	for (var i = 0; i < isIdCardArray.length; i++) {
		var id = isIdCardArray[i];
		if (!reg.test( $('#' + id).val() )) {
			alert($('#' + id + '_Label').text() + "格式错误");
			return false;
		}
	}
	
	return true;
}

// 此方法已废弃，请勿使用
/* check form中的有id属性的input元素，
 * 若其有对应id为*_Label的属性，则提示该域不能为空 */
function checkFormNotNull(form){
	var flag = true;
	$('#' + form + ' :input[id]').each(function(){
		if(($(this).val() == '' || $(this).val() == null || $(this).val().trim() == '') 
				&& $(this).css("display") != "none"
				&& $("#" + $(this).attr("id")+"_Label").length > 0){
			alert($("#" + $(this).attr("id")+"_Label").text() + "不能为空");
			flag = false;
			return false;
		}
	});
	return flag;
}
/* 日期格式校验，默认按照年-月-日格式校验，可传入自定义校验格式正则 */
function isDate(obj, format, reg){
	var str = obj.val();
	if(str.length != 0){
		if(reg == null || reg == ""){
			reg = /^(\d{4})(-|\/)(\d{2})\2(\d{2})$/;
		}
		var r = str.match(reg);
		if(r == null){
			if(format != null && format != ""){
				alert("您输入的日期格式不正确，请以"+format+"格式输入");
			}else{
				alert('您输入的日期格式不正确，请以年-月-日格式输入，如2015-01-01');
			}
			obj.val('');
			// FireFox在输入域alert后会默认点击鼠标左键，此处判断后处理
			if (Sys.firefox && window.getSelection()) {
				window.getSelection().removeAllRanges();
			}
			return false;
		}
	}
	return true;
}
/* 长度校验（包含中文） 
 * countPerChinese: 每个中文计为多少长度 */
function isOverLength (obj, maxLength, countPerChinese) {
	var realLength = 0;
	var str = obj.val();
	var len = str.length;
	if (maxLength != null && maxLength != "") {
	} else if (obj.attr("maxlength") != null && obj.attr("maxlength").length > 0) {
		maxLength = obj.attr("maxlength");
	} else {
		maxLength = 32;
	}
	for (var i = 0; i < len; i++) {
        var charCode = str.charCodeAt(i);
        if (charCode >= 0 && charCode <= 128) {
        	realLength += 1;
        } else {
        	//realLength += 3;//utf-8
        	if (countPerChinese != null && countPerChinese != "") {
        		realLength += countPerChinese;
        	} else {
        		// MYSQL 4.1 版本及以上varchar以字符为单位存储
        		realLength += 1;
        	}
        }
        if(realLength > maxLength){
        	alert("输入超过限定长度");
			obj.val(str.substr(0, i));
			// FireFox在输入域alert后会默认点击鼠标左键，此处判断后处理
			if (Sys.firefox && window.getSelection()) {
				window.getSelection().removeAllRanges();
			}
			return false;
        }
    }
	return true;
}
/* Email格式校验 */
function isEmail(obj) {
	var reg = /^([a-zA-Z0-9]+[_|\_|\.]?)*[a-zA-Z0-9]+@([a-zA-Z0-9]+[_|\_|\.]?)*[a-zA-Z0-9]+\.[a-zA-Z]{2,3}$/;
	if (obj != null && obj.val().length > 0 && !reg.test(obj.val())) {
		alert("Email输入格式错误，请重新输入");
		// FireFox在输入域alert后会默认点击鼠标左键，此处判断后处理
		if (Sys.firefox && window.getSelection()) {
			window.getSelection().removeAllRanges();
		}
		return false;
	}
	return true;
}
/* 电话号码校验 */
function isPhoneNumber(obj){
	var reg = /^[0-9,-]+$/;
	if (obj != null && obj.val().length > 0 && !reg.test(obj.val())) {
		alert("电话号码输入格式错误，请重新输入");
		// FireFox在输入域alert后会默认点击鼠标左键，此处判断后处理
		if (Sys.firefox && window.getSelection()) {
			window.getSelection().removeAllRanges();
		}
		return false;
	}
	return true;
}
/* 数字校验
 * zeroFlag：true-首位可为0,；false-首位不可为0 */
function isNumber(obj, zeroFlag, str){
	var reg;
	if (zeroFlag) {
		reg = /^[0-9]+$/;
	} else {
		reg = /^[1-9][0-9]+$/;
	}
	if (obj != null && obj.val().length > 0 && !reg.test(obj.val())) {
		if (str && str != "") {
			alert(str + "输入格式错误，请重新输入");
		} else {
			alert("电话号码输入格式错误，请重新输入");
		}
		// FireFox在输入域alert后会默认点击鼠标左键，此处判断后处理
		if (Sys.firefox && window.getSelection()) {
			window.getSelection().removeAllRanges();
		}
		return false;
	}
	return true;
}
/**
 * 国际区号
 */
function isInternationalCode(obj){
	var reg = /^[+0-9][0-9]+$/;
	if (obj != null && obj.val().length > 0 && !reg.test(obj.val())) {
		alert("国际区号输入格式错误，请重新输入");
		// FireFox在输入域alert后会默认点击鼠标左键，此处判断后处理
		if (Sys.firefox && window.getSelection()) {
			window.getSelection().removeAllRanges();
		}
		return false;
	}
	return true;
}

/* 人员姓名校验 */
function isPersonName(obj){
	var reg = /^[\da-zA-Z\u4E00-\u9FA5]{1,10}$/;
	if (obj != null && obj.val().length > 0 && !reg.test(obj.val())) {
		alert("姓名输入格式错误，请重新输入");
		// FireFox在输入域alert后会默认点击鼠标左键，此处判断后处理
		if (Sys.firefox && window.getSelection()) {
			window.getSelection().removeAllRanges();
		}
		return false;
	}
	return true;
}

function getStartUsefulTime(){
	var now = new Date(); 
	var dayOfWeek = now.getDay() != 0?now.getDay()-1 : 6;
	var endDay = new Date(now - dayOfWeek*24*60*60*1000);
	var monthCurrent = new Date();
	monthCurrent.setDate(1);
	if(monthCurrent.getTime() > endDay.getTime()){
		return monthCurrent;
	}else{
		return endDay;
	}
	
}

// 获取偏移后的日期
function getOffsetDate(offset, date){
	if(!date)
		date = new Date();
	date.setDate(date.getDate() + offset);
	return date;
}

//特殊字符校验
function isSpecialCharacterById(columnId){
	var reg = /[^\u0000-\u00ff\u4e00-\u9fa5·~！@#￥%……&*（）——+{}|“：《》？”、。，；‘【】、=-]|\t/;
	var obj = $("#" + columnId);
	if ( obj && reg.test(obj.val())) {
		alert($('#' + columnId + '_Label').text() + "不允许输入特殊字符");
		// FireFox在输入域alert后会默认点击鼠标左键，此处判断后处理
		if (Sys.firefox && window.getSelection()) {
			window.getSelection().removeAllRanges();
		}
		return false;
	}
	return true;
}

//特殊字符
function isSpecialCharacterByIdArray(columnIdArray){
	var reg = /[^\u0000-\u00ff\u4e00-\u9fa5·~！@#￥%……&*（）——+{}|“：《》？”、。，；‘【】、=-]|\t/;
	
	for(var i = 0; i < columnIdArray.length; i++){
		var obj = $("#" + columnIdArray[i]);
		if ( obj && reg.test(obj.val())) {
			alert($('#' + columnIdArray[i] + '_Label').text() + "不允许输入特殊字符");
			// FireFox在输入域alert后会默认点击鼠标左键，此处判断后处理
			if (Sys.firefox && window.getSelection()) {
				window.getSelection().removeAllRanges();
			}
			return false;
		}
	}
	return true;
}

function transactionWithValidate(obj) {
	
	/*
	 * obj.id
	 * obj.url
	 * obj.jsonSet
	 * obj.param
	 * obj.type
	 * obj.cache
	 * obj.async
	 * obj.other
	 * obj.timeout
	*/
	
	if (obj.param != undefined) {
		obj.url = appendURLParam(obj.url, obj.param);
	}
	
	$.ajax({
		
		url: obj.url,
		data: obj.jsonSet == undefined ? '' : obj.jsonSet.toString(),
		type: obj.type == undefined ? 'POST' : obj.type,
		cache: obj.cache == undefined ? false : obj.cache,
		async: obj.async == undefined ? true : obj.async,
		dataType: obj.dataType == undefined ? 'json' : obj.dataType,
		contentType: "application/x-www-form-urlencoded; charset=utf-8", 
		timeout: obj.timeout == undefined ? 20000 : obj.timeout,
		
		success: function(data, textStatus, jqXHR) {
			if (data != undefined && data.hasError) {
				$.each(data.ModelErrors, function (index, viewerror){
        			if (viewerror[0].target == null||$.trim(viewerror[0].target)==''){
        				return;
        			}
        			var selector = ".field-validation-valid[data-valmsg-for='"+viewerror[0].target+"']";
        			$(selector).map(function(index,element){
        				$(element).text(viewerror[0].errorMessage);
        				$(element).removeClass("hide");
        				$(element).removeClass("field-validation-valid");
        				$(element).addClass("field-validation-error");
        			})
        		});
			}
			if (obj.callback == undefined) {
				callback(obj.id, data, obj.other);
			} else {
				obj.callback(data, obj.other);
			}
		},

		complete: function(jqXHR, textStatus) {
		},
		
		error: function(jqXHR, textStatus, errorThrown) {
			if (textStatus == 'parsererror') {
				alert('error return value!');
				return;
			} else {
				alert('ajax error info: ' + textStatus);
			}
			var data = new Object();
			data['result'] = 'false';
			if (obj.callback == undefined) {
				callback(obj.id, data, obj.other);
			} else {
				obj.callback(data, obj.other);
			}
		}
	});
}
</script>
   
    <script type="text/javascript">
    	var BaseURL = "/merchant-web";
        staticFileRoot = "//staticfile.tujia.com";
       	PageRedirectSetting.IgnoreCookieCheck = true;
        PageRedirectSetting.UnsaveCheck = true;
        PageRedirectSetting.GotoHome = true;
        
      //模拟select控件
        $(function() {
            $("select").not("#sel_Merchants").selectinput({
                autowidth: true,
                css: {
                    headclass: "sHead",
                    rootclass: "sListBody",
                    current: "current",
                    mouseon: "mouseon"

                }
            });
        });
    </script>




</head>

<body class="">
<div class="header">
	    <div class="wrap-lg">
	        <h1 class="logo"></h1>
	        <div class="welcome-info">欢迎加入途家平台</div>
	    </div>
	</div>
	<div class="wrap-lg">
	    <div class="step-bar">
	        <ul>
	            <li class="">商户申请</li>
	            <li class="done">创建门店</li>
	            <li class="">发布房屋</li>
	            <li class="">等待审核</li>
	            <li class="">上线</li>
	        </ul>
	    </div>
	</div>
    <div style="height: 1px;" id="loginBtn"></div>
    <!-- 172.31.11.117 -->
    <div style="clear: left"></div>
    <div class="body wrap-lg" id="wrapper">
        
<form id="mainForm" action="/merchant-web/Stores/add/" method="post" novalidate="novalidate">
	
	<input id="DetailAddress" name="DetailAddress" type="hidden" value="海淀">
	
		
    <input type="hidden" id="hidIsSubmitAndPublish" name="isSubmitAndPublishUnit" value="false" />
	<input type="hidden" id="contactName" name="contactName" value="宁" />
	<input type="hidden" id="email" name="email" value="" />
    <div class="detailTitle">门店信息</div>
    <div class="detailWraper">
        <div class="rowItem">
            <span class="col_1"><i class="ui_important">*</i>门店名称：</span>
            <div class="col_1_box">
            	<input class="input-w200 valid"  value="" id="Name" maxlength="100" name="Name" type="text"
            		data-val="true" data-val-length="输入名称过长" data-val-length-max="100" data-val-remote="该名称已经存在" data-val-remote-additionalfields="" data-val-remote-url="/merchant-web/Stores/isUnique" data-val-required="请输入名称" >
            	<i class="ui_question" id="tipStoreName" data-tip-target="#StoreNameTipContent">?</i>
            	<span class="field-validation-valid" data-valmsg-for="Name" data-valmsg-replace="true"></span>
            	<!-- <span class="field-validation-valid" data-valmsg-for="ServerError" data-valmsg-replace="true"></span> -->
            </div>
            <input id="NameId" type="hidden" name="NameId" value=""/>
        </div>
        <div class="rowItem">
            <span class="col_1"><i class="ui_important">*</i>所在城市：</span>
            <div class="col_1_box">
                

















<!-- if (ViewData.ContainsKey("ShowPlaceHolder") && (bool) ViewData["ShowPlaceHolder"]) -->
    
	    
	    
	        <input type="text" class="input-w200 ui_right10" id="addressInput"  value="北京市•北京"/>
	    
    
    <input id="addressProvinceID" name="Address.AddressProvinceID" type="hidden" value="423" />
    <input id="addressCityID" name="Address.AddressCityID" type="hidden" value="48" />
    <span class="text-muted">所在城市仅限于途家服务所能覆盖的城市</span>


<input id="addressIsInternational" name="addressIsInternational" type="hidden" value="false" />
<span class="field-validation-valid" data-valmsg-for="AddressCityID" data-valmsg-replace="true"></span>

<div class="ui_popBox lg" style="display:none;" id="address-selector">
    <div class="ui_hd">选择城市</div>
    <div class="ui_body city" style="height:380px;">
        <div class="cityNav">
            <span class="floatL">省份首字母：</span>
            <ul>
            	
                    
                        <li><a href="javascript:void(0)">A</a></li>
                    
                
                    
                        <li><a href="javascript:void(0)">B</a></li>
                    
                
                    
                        <li><a href="javascript:void(0)">C</a></li>
                    
                
                    
                
                    
                
                    
                        <li><a href="javascript:void(0)">F</a></li>
                    
                
                    
                        <li><a href="javascript:void(0)">G</a></li>
                    
                
                    
                        <li><a href="javascript:void(0)">H</a></li>
                    
                
                    
                
                    
                        <li><a href="javascript:void(0)">J</a></li>
                    
                
                    
                
                    
                        <li><a href="javascript:void(0)">L</a></li>
                    
                
                    
                
                    
                        <li><a href="javascript:void(0)">N</a></li>
                    
                
                    
                
                    
                
                    
                        <li><a href="javascript:void(0)">Q</a></li>
                    
                
                    
                
                    
                        <li><a href="javascript:void(0)">S</a></li>
                    
                
                    
                        <li><a href="javascript:void(0)">T</a></li>
                    
                
                    
                
                    
                
                    
                
                    
                        <li><a href="javascript:void(0)">X</a></li>
                    
                
                    
                        <li><a href="javascript:void(0)">Y</a></li>
                    
                
                    
                        <li><a href="javascript:void(0)">Z</a></li>
                    
                
            </ul>
        </div>
        <div class="cityBody">
            <div class="cityClass">
                
                    
                        <div id="provinceA">
                            <i class="ui_letter floatL">A</i>
                            
                            	
                                <ul>
                                    <li class="province">安徽</li>
                                    <li class="city">
                                        
                                            <a href="javascript:void(0)" class="cityitem"
                                               data-province-id="416" data-city-id="227" data-address-name="安徽•安庆">安庆</a>
                                        
                                            <a href="javascript:void(0)" class="cityitem"
                                               data-province-id="416" data-city-id="225" data-address-name="安徽•蚌埠">蚌埠</a>
                                        
                                            <a href="javascript:void(0)" class="cityitem"
                                               data-province-id="416" data-city-id="236" data-address-name="安徽•亳州">亳州</a>
                                        
                                            <a href="javascript:void(0)" class="cityitem"
                                               data-province-id="416" data-city-id="237" data-address-name="安徽•池州">池州</a>
                                        
                                            <a href="javascript:void(0)" class="cityitem"
                                               data-province-id="416" data-city-id="228" data-address-name="安徽•滁州">滁州</a>
                                        
                                            <a href="javascript:void(0)" class="cityitem"
                                               data-province-id="416" data-city-id="229" data-address-name="安徽•阜阳">阜阳</a>
                                        
                                            <a href="javascript:void(0)" class="cityitem"
                                               data-province-id="416" data-city-id="50" data-address-name="安徽•合肥">合肥</a>
                                        
                                            <a href="javascript:void(0)" class="cityitem"
                                               data-province-id="416" data-city-id="234" data-address-name="安徽•淮北">淮北</a>
                                        
                                            <a href="javascript:void(0)" class="cityitem"
                                               data-province-id="416" data-city-id="233" data-address-name="安徽•淮南">淮南</a>
                                        
                                            <a href="javascript:void(0)" class="cityitem"
                                               data-province-id="416" data-city-id="6" data-address-name="安徽•黄山">黄山</a>
                                        
                                            <a href="javascript:void(0)" class="cityitem"
                                               data-province-id="416" data-city-id="232" data-address-name="安徽•六安">六安</a>
                                        
                                            <a href="javascript:void(0)" class="cityitem"
                                               data-province-id="416" data-city-id="226" data-address-name="安徽•马鞍山">马鞍山</a>
                                        
                                            <a href="javascript:void(0)" class="cityitem"
                                               data-province-id="416" data-city-id="230" data-address-name="安徽•宿州">宿州</a>
                                        
                                            <a href="javascript:void(0)" class="cityitem"
                                               data-province-id="416" data-city-id="235" data-address-name="安徽•铜陵">铜陵</a>
                                        
                                            <a href="javascript:void(0)" class="cityitem"
                                               data-province-id="416" data-city-id="53" data-address-name="安徽•芜湖">芜湖</a>
                                        
                                            <a href="javascript:void(0)" class="cityitem"
                                               data-province-id="416" data-city-id="238" data-address-name="安徽•宣城">宣城</a>
                                        
                                    </li>
                                </ul>
                                
                            
                            	
                                <ul>
                                    <li class="province">澳门</li>
                                    <li class="city">
                                        
                                            <a href="javascript:void(0)" class="cityitem"
                                               data-province-id="447" data-city-id="397" data-address-name="澳门•澳门">澳门</a>
                                        
                                    </li>
                                </ul>
                                
                            
                        </div>
                	
                
                    
                        <div id="provinceB">
                            <i class="ui_letter floatL">B</i>
                            
                            	
                                <ul>
                                    <li class="province">北京市</li>
                                    <li class="city">
                                        
                                            <a href="javascript:void(0)" class="cityitem"
                                               data-province-id="423" data-city-id="48" data-address-name="北京市•北京">北京</a>
                                        
                                    </li>
                                </ul>
                                
                            
                        </div>
                	
                
                    
                        <div id="provinceC">
                            <i class="ui_letter floatL">C</i>
                            
                            	
                                <ul>
                                    <li class="province">重庆市</li>
                                    <li class="city">
                                        
                                            <a href="javascript:void(0)" class="cityitem"
                                               data-province-id="425" data-city-id="22" data-address-name="重庆市•重庆">重庆</a>
                                        
                                    </li>
                                </ul>
                                
                            
                        </div>
                	
                
                    
                
                    
                
                    
                        <div id="provinceF">
                            <i class="ui_letter floatL">F</i>
                            
                            	
                                <ul>
                                    <li class="province">福建</li>
                                    <li class="city">
                                        
                                            <a href="javascript:void(0)" class="cityitem"
                                               data-province-id="432" data-city-id="145" data-address-name="福建•福州">福州</a>
                                        
                                            <a href="javascript:void(0)" class="cityitem"
                                               data-province-id="432" data-city-id="151" data-address-name="福建•龙岩">龙岩</a>
                                        
                                            <a href="javascript:void(0)" class="cityitem"
                                               data-province-id="432" data-city-id="152" data-address-name="福建•宁德">宁德</a>
                                        
                                            <a href="javascript:void(0)" class="cityitem"
                                               data-province-id="432" data-city-id="146" data-address-name="福建•莆田">莆田</a>
                                        
                                            <a href="javascript:void(0)" class="cityitem"
                                               data-province-id="432" data-city-id="148" data-address-name="福建•泉州">泉州</a>
                                        
                                            <a href="javascript:void(0)" class="cityitem"
                                               data-province-id="432" data-city-id="147" data-address-name="福建•三明">三明</a>
                                        
                                            <a href="javascript:void(0)" class="cityitem"
                                               data-province-id="432" data-city-id="62" data-address-name="福建•武夷山">武夷山</a>
                                        
                                            <a href="javascript:void(0)" class="cityitem"
                                               data-province-id="432" data-city-id="33" data-address-name="福建•厦门">厦门</a>
                                        
                                            <a href="javascript:void(0)" class="cityitem"
                                               data-province-id="432" data-city-id="149" data-address-name="福建•漳州">漳州</a>
                                        
                                    </li>
                                </ul>
                                
                            
                        </div>
                	
                
                    
                        <div id="provinceG">
                            <i class="ui_letter floatL">G</i>
                            
                            	
                                <ul>
                                    <li class="province">甘肃</li>
                                    <li class="city">
                                        
                                            <a href="javascript:void(0)" class="cityitem"
                                               data-province-id="438" data-city-id="398" data-address-name="甘肃•敦煌">敦煌</a>
                                        
                                            <a href="javascript:void(0)" class="cityitem"
                                               data-province-id="438" data-city-id="299" data-address-name="甘肃•甘南">甘南</a>
                                        
                                            <a href="javascript:void(0)" class="cityitem"
                                               data-province-id="438" data-city-id="300" data-address-name="甘肃•嘉峪关">嘉峪关</a>
                                        
                                            <a href="javascript:void(0)" class="cityitem"
                                               data-province-id="438" data-city-id="294" data-address-name="甘肃•酒泉">酒泉</a>
                                        
                                            <a href="javascript:void(0)" class="cityitem"
                                               data-province-id="438" data-city-id="287" data-address-name="甘肃•兰州">兰州</a>
                                        
                                            <a href="javascript:void(0)" class="cityitem"
                                               data-province-id="438" data-city-id="290" data-address-name="甘肃•天水">天水</a>
                                        
                                            <a href="javascript:void(0)" class="cityitem"
                                               data-province-id="438" data-city-id="292" data-address-name="甘肃•张掖">张掖</a>
                                        
                                    </li>
                                </ul>
                                
                            
                            	
                                <ul>
                                    <li class="province">广东</li>
                                    <li class="city">
                                        
                                            <a href="javascript:void(0)" class="cityitem"
                                               data-province-id="437" data-city-id="83" data-address-name="广东•潮州">潮州</a>
                                        
                                            <a href="javascript:void(0)" class="cityitem"
                                               data-province-id="437" data-city-id="73" data-address-name="广东•东莞">东莞</a>
                                        
                                            <a href="javascript:void(0)" class="cityitem"
                                               data-province-id="437" data-city-id="68" data-address-name="广东•佛山">佛山</a>
                                        
                                            <a href="javascript:void(0)" class="cityitem"
                                               data-province-id="437" data-city-id="45" data-address-name="广东•广州">广州</a>
                                        
                                            <a href="javascript:void(0)" class="cityitem"
                                               data-province-id="437" data-city-id="80" data-address-name="广东•河源">河源</a>
                                        
                                            <a href="javascript:void(0)" class="cityitem"
                                               data-province-id="437" data-city-id="72" data-address-name="广东•惠州">惠州</a>
                                        
                                            <a href="javascript:void(0)" class="cityitem"
                                               data-province-id="437" data-city-id="70" data-address-name="广东•江门">江门</a>
                                        
                                            <a href="javascript:void(0)" class="cityitem"
                                               data-province-id="437" data-city-id="84" data-address-name="广东•揭阳">揭阳</a>
                                        
                                            <a href="javascript:void(0)" class="cityitem"
                                               data-province-id="437" data-city-id="71" data-address-name="广东•茂名">茂名</a>
                                        
                                            <a href="javascript:void(0)" class="cityitem"
                                               data-province-id="437" data-city-id="78" data-address-name="广东•梅州">梅州</a>
                                        
                                            <a href="javascript:void(0)" class="cityitem"
                                               data-province-id="437" data-city-id="82" data-address-name="广东•清远">清远</a>
                                        
                                            <a href="javascript:void(0)" class="cityitem"
                                               data-province-id="437" data-city-id="69" data-address-name="广东•汕头">汕头</a>
                                        
                                            <a href="javascript:void(0)" class="cityitem"
                                               data-province-id="437" data-city-id="79" data-address-name="广东•汕尾">汕尾</a>
                                        
                                            <a href="javascript:void(0)" class="cityitem"
                                               data-province-id="437" data-city-id="75" data-address-name="广东•韶关">韶关</a>
                                        
                                            <a href="javascript:void(0)" class="cityitem"
                                               data-province-id="437" data-city-id="49" data-address-name="广东•深圳">深圳</a>
                                        
                                            <a href="javascript:void(0)" class="cityitem"
                                               data-province-id="437" data-city-id="81" data-address-name="广东•阳江">阳江</a>
                                        
                                            <a href="javascript:void(0)" class="cityitem"
                                               data-province-id="437" data-city-id="85" data-address-name="广东•云浮">云浮</a>
                                        
                                            <a href="javascript:void(0)" class="cityitem"
                                               data-province-id="437" data-city-id="76" data-address-name="广东•湛江">湛江</a>
                                        
                                            <a href="javascript:void(0)" class="cityitem"
                                               data-province-id="437" data-city-id="77" data-address-name="广东•肇庆">肇庆</a>
                                        
                                            <a href="javascript:void(0)" class="cityitem"
                                               data-province-id="437" data-city-id="74" data-address-name="广东•中山">中山</a>
                                        
                                            <a href="javascript:void(0)" class="cityitem"
                                               data-province-id="437" data-city-id="51" data-address-name="广东•珠海">珠海</a>
                                        
                                    </li>
                                </ul>
                                
                            
                            	
                                <ul>
                                    <li class="province">广西</li>
                                    <li class="city">
                                        
                                            <a href="javascript:void(0)" class="cityitem"
                                               data-province-id="442" data-city-id="251" data-address-name="广西•北海">北海</a>
                                        
                                            <a href="javascript:void(0)" class="cityitem"
                                               data-province-id="442" data-city-id="254" data-address-name="广西•崇左">崇左</a>
                                        
                                            <a href="javascript:void(0)" class="cityitem"
                                               data-province-id="442" data-city-id="252" data-address-name="广西•防城港">防城港</a>
                                        
                                            <a href="javascript:void(0)" class="cityitem"
                                               data-province-id="442" data-city-id="32" data-address-name="广西•桂林">桂林</a>
                                        
                                            <a href="javascript:void(0)" class="cityitem"
                                               data-province-id="442" data-city-id="248" data-address-name="广西•河池">河池</a>
                                        
                                            <a href="javascript:void(0)" class="cityitem"
                                               data-province-id="442" data-city-id="253" data-address-name="广西•贺州">贺州</a>
                                        
                                            <a href="javascript:void(0)" class="cityitem"
                                               data-province-id="442" data-city-id="249" data-address-name="广西•来宾">来宾</a>
                                        
                                            <a href="javascript:void(0)" class="cityitem"
                                               data-province-id="442" data-city-id="242" data-address-name="广西•柳州">柳州</a>
                                        
                                            <a href="javascript:void(0)" class="cityitem"
                                               data-province-id="442" data-city-id="250" data-address-name="广西•南宁">南宁</a>
                                        
                                            <a href="javascript:void(0)" class="cityitem"
                                               data-province-id="442" data-city-id="243" data-address-name="广西•梧州">梧州</a>
                                        
                                            <a href="javascript:void(0)" class="cityitem"
                                               data-province-id="442" data-city-id="246" data-address-name="广西•玉林">玉林</a>
                                        
                                    </li>
                                </ul>
                                
                            
                            	
                                <ul>
                                    <li class="province">贵州</li>
                                    <li class="city">
                                        
                                            <a href="javascript:void(0)" class="cityitem"
                                               data-province-id="439" data-city-id="120" data-address-name="贵州•安顺">安顺</a>
                                        
                                            <a href="javascript:void(0)" class="cityitem"
                                               data-province-id="439" data-city-id="122" data-address-name="贵州•毕节">毕节</a>
                                        
                                            <a href="javascript:void(0)" class="cityitem"
                                               data-province-id="439" data-city-id="117" data-address-name="贵州•贵阳">贵阳</a>
                                        
                                            <a href="javascript:void(0)" class="cityitem"
                                               data-province-id="439" data-city-id="118" data-address-name="贵州•六盘水">六盘水</a>
                                        
                                            <a href="javascript:void(0)" class="cityitem"
                                               data-province-id="439" data-city-id="124" data-address-name="贵州•黔东南">黔东南</a>
                                        
                                            <a href="javascript:void(0)" class="cityitem"
                                               data-province-id="439" data-city-id="125" data-address-name="贵州•黔南">黔南</a>
                                        
                                            <a href="javascript:void(0)" class="cityitem"
                                               data-province-id="439" data-city-id="123" data-address-name="贵州•黔西南">黔西南</a>
                                        
                                            <a href="javascript:void(0)" class="cityitem"
                                               data-province-id="439" data-city-id="119" data-address-name="贵州•遵义">遵义</a>
                                        
                                    </li>
                                </ul>
                                
                            
                        </div>
                	
                
                    
                        <div id="provinceH">
                            <i class="ui_letter floatL">H</i>
                            
                            	
                                <ul>
                                    <li class="province">海南</li>
                                    <li class="city">
                                        
                                            <a href="javascript:void(0)" class="cityitem"
                                               data-province-id="415" data-city-id="4052" data-address-name="海南•白沙">白沙</a>
                                        
                                            <a href="javascript:void(0)" class="cityitem"
                                               data-province-id="415" data-city-id="4054" data-address-name="海南•保亭">保亭</a>
                                        
                                            <a href="javascript:void(0)" class="cityitem"
                                               data-province-id="415" data-city-id="2" data-address-name="海南•博鳌(琼海)">博鳌(琼海)</a>
                                        
                                            <a href="javascript:void(0)" class="cityitem"
                                               data-province-id="415" data-city-id="4051" data-address-name="海南•昌江">昌江</a>
                                        
                                            <a href="javascript:void(0)" class="cityitem"
                                               data-province-id="415" data-city-id="4047" data-address-name="海南•澄迈">澄迈</a>
                                        
                                            <a href="javascript:void(0)" class="cityitem"
                                               data-province-id="415" data-city-id="3973" data-address-name="海南•儋州">儋州</a>
                                        
                                            <a href="javascript:void(0)" class="cityitem"
                                               data-province-id="415" data-city-id="4049" data-address-name="海南•定安">定安</a>
                                        
                                            <a href="javascript:void(0)" class="cityitem"
                                               data-province-id="415" data-city-id="4062" data-address-name="海南•东方">东方</a>
                                        
                                            <a href="javascript:void(0)" class="cityitem"
                                               data-province-id="415" data-city-id="255" data-address-name="海南•海口">海口</a>
                                        
                                            <a href="javascript:void(0)" class="cityitem"
                                               data-province-id="415" data-city-id="3993" data-address-name="海南•乐东">乐东</a>
                                        
                                            <a href="javascript:void(0)" class="cityitem"
                                               data-province-id="415" data-city-id="4048" data-address-name="海南•临高">临高</a>
                                        
                                            <a href="javascript:void(0)" class="cityitem"
                                               data-province-id="415" data-city-id="5" data-address-name="海南•陵水(三亚)">陵水(三亚)</a>
                                        
                                            <a href="javascript:void(0)" class="cityitem"
                                               data-province-id="415" data-city-id="407" data-address-name="海南•琼海">琼海</a>
                                        
                                            <a href="javascript:void(0)" class="cityitem"
                                               data-province-id="415" data-city-id="4053" data-address-name="海南•琼中">琼中</a>
                                        
                                            <a href="javascript:void(0)" class="cityitem"
                                               data-province-id="415" data-city-id="1" data-address-name="海南•三亚">三亚</a>
                                        
                                            <a href="javascript:void(0)" class="cityitem"
                                               data-province-id="415" data-city-id="4050" data-address-name="海南•屯昌">屯昌</a>
                                        
                                            <a href="javascript:void(0)" class="cityitem"
                                               data-province-id="415" data-city-id="43" data-address-name="海南•万宁">万宁</a>
                                        
                                            <a href="javascript:void(0)" class="cityitem"
                                               data-province-id="415" data-city-id="4" data-address-name="海南•文昌">文昌</a>
                                        
                                            <a href="javascript:void(0)" class="cityitem"
                                               data-province-id="415" data-city-id="3" data-address-name="海南•五指山">五指山</a>
                                        
                                    </li>
                                </ul>
                                
                            
                            	
                                <ul>
                                    <li class="province">河北</li>
                                    <li class="city">
                                        
                                            <a href="javascript:void(0)" class="cityitem"
                                               data-province-id="426" data-city-id="157" data-address-name="河北•保定">保定</a>
                                        
                                            <a href="javascript:void(0)" class="cityitem"
                                               data-province-id="426" data-city-id="159" data-address-name="河北•沧州">沧州</a>
                                        
                                            <a href="javascript:void(0)" class="cityitem"
                                               data-province-id="426" data-city-id="158" data-address-name="河北•承德">承德</a>
                                        
                                            <a href="javascript:void(0)" class="cityitem"
                                               data-province-id="426" data-city-id="155" data-address-name="河北•邯郸">邯郸</a>
                                        
                                            <a href="javascript:void(0)" class="cityitem"
                                               data-province-id="426" data-city-id="161" data-address-name="河北•衡水">衡水</a>
                                        
                                            <a href="javascript:void(0)" class="cityitem"
                                               data-province-id="426" data-city-id="160" data-address-name="河北•廊坊">廊坊</a>
                                        
                                            <a href="javascript:void(0)" class="cityitem"
                                               data-province-id="426" data-city-id="65" data-address-name="河北•秦皇岛">秦皇岛</a>
                                        
                                            <a href="javascript:void(0)" class="cityitem"
                                               data-province-id="426" data-city-id="153" data-address-name="河北•石家庄">石家庄</a>
                                        
                                            <a href="javascript:void(0)" class="cityitem"
                                               data-province-id="426" data-city-id="154" data-address-name="河北•唐山">唐山</a>
                                        
                                            <a href="javascript:void(0)" class="cityitem"
                                               data-province-id="426" data-city-id="156" data-address-name="河北•邢台">邢台</a>
                                        
                                            <a href="javascript:void(0)" class="cityitem"
                                               data-province-id="426" data-city-id="60" data-address-name="河北•张家口">张家口</a>
                                        
                                    </li>
                                </ul>
                                
                            
                            	
                                <ul>
                                    <li class="province">黑龙江</li>
                                    <li class="city">
                                        
                                            <a href="javascript:void(0)" class="cityitem"
                                               data-province-id="431" data-city-id="202" data-address-name="黑龙江•大庆">大庆</a>
                                        
                                            <a href="javascript:void(0)" class="cityitem"
                                               data-province-id="431" data-city-id="64" data-address-name="黑龙江•哈尔滨">哈尔滨</a>
                                        
                                            <a href="javascript:void(0)" class="cityitem"
                                               data-province-id="431" data-city-id="406" data-address-name="黑龙江•亚布力">亚布力</a>
                                        
                                    </li>
                                </ul>
                                
                            
                            	
                                <ul>
                                    <li class="province">河南</li>
                                    <li class="city">
                                        
                                            <a href="javascript:void(0)" class="cityitem"
                                               data-province-id="434" data-city-id="173" data-address-name="河南•安阳">安阳</a>
                                        
                                            <a href="javascript:void(0)" class="cityitem"
                                               data-province-id="434" data-city-id="171" data-address-name="河南•鹤壁">鹤壁</a>
                                        
                                            <a href="javascript:void(0)" class="cityitem"
                                               data-province-id="434" data-city-id="170" data-address-name="河南•焦作">焦作</a>
                                        
                                            <a href="javascript:void(0)" class="cityitem"
                                               data-province-id="434" data-city-id="176" data-address-name="河南•济源">济源</a>
                                        
                                            <a href="javascript:void(0)" class="cityitem"
                                               data-province-id="434" data-city-id="177" data-address-name="河南•开封">开封</a>
                                        
                                            <a href="javascript:void(0)" class="cityitem"
                                               data-province-id="434" data-city-id="168" data-address-name="河南•洛阳">洛阳</a>
                                        
                                            <a href="javascript:void(0)" class="cityitem"
                                               data-province-id="434" data-city-id="175" data-address-name="河南•南阳">南阳</a>
                                        
                                            <a href="javascript:void(0)" class="cityitem"
                                               data-province-id="434" data-city-id="169" data-address-name="河南•平顶山">平顶山</a>
                                        
                                            <a href="javascript:void(0)" class="cityitem"
                                               data-province-id="434" data-city-id="178" data-address-name="河南•濮阳">濮阳</a>
                                        
                                            <a href="javascript:void(0)" class="cityitem"
                                               data-province-id="434" data-city-id="172" data-address-name="河南•新乡">新乡</a>
                                        
                                            <a href="javascript:void(0)" class="cityitem"
                                               data-province-id="434" data-city-id="182" data-address-name="河南•信阳">信阳</a>
                                        
                                            <a href="javascript:void(0)" class="cityitem"
                                               data-province-id="434" data-city-id="179" data-address-name="河南•许昌">许昌</a>
                                        
                                            <a href="javascript:void(0)" class="cityitem"
                                               data-province-id="434" data-city-id="167" data-address-name="河南•郑州">郑州</a>
                                        
                                            <a href="javascript:void(0)" class="cityitem"
                                               data-province-id="434" data-city-id="184" data-address-name="河南•驻马店">驻马店</a>
                                        
                                    </li>
                                </ul>
                                
                            
                            	
                                <ul>
                                    <li class="province">湖北</li>
                                    <li class="city">
                                        
                                            <a href="javascript:void(0)" class="cityitem"
                                               data-province-id="435" data-city-id="330" data-address-name="湖北•恩施">恩施</a>
                                        
                                            <a href="javascript:void(0)" class="cityitem"
                                               data-province-id="435" data-city-id="323" data-address-name="湖北•鄂州">鄂州</a>
                                        
                                            <a href="javascript:void(0)" class="cityitem"
                                               data-province-id="435" data-city-id="327" data-address-name="湖北•黄冈">黄冈</a>
                                        
                                            <a href="javascript:void(0)" class="cityitem"
                                               data-province-id="435" data-city-id="317" data-address-name="湖北•黄石">黄石</a>
                                        
                                            <a href="javascript:void(0)" class="cityitem"
                                               data-province-id="435" data-city-id="322" data-address-name="湖北•荆门">荆门</a>
                                        
                                            <a href="javascript:void(0)" class="cityitem"
                                               data-province-id="435" data-city-id="332" data-address-name="湖北•神农架">神农架</a>
                                        
                                            <a href="javascript:void(0)" class="cityitem"
                                               data-province-id="435" data-city-id="319" data-address-name="湖北•十堰">十堰</a>
                                        
                                            <a href="javascript:void(0)" class="cityitem"
                                               data-province-id="435" data-city-id="329" data-address-name="湖北•随州">随州</a>
                                        
                                            <a href="javascript:void(0)" class="cityitem"
                                               data-province-id="435" data-city-id="55" data-address-name="湖北•武汉">武汉</a>
                                        
                                            <a href="javascript:void(0)" class="cityitem"
                                               data-province-id="435" data-city-id="4031" data-address-name="湖北•襄阳">襄阳</a>
                                        
                                            <a href="javascript:void(0)" class="cityitem"
                                               data-province-id="435" data-city-id="328" data-address-name="湖北•咸宁">咸宁</a>
                                        
                                            <a href="javascript:void(0)" class="cityitem"
                                               data-province-id="435" data-city-id="321" data-address-name="湖北•宜昌">宜昌</a>
                                        
                                    </li>
                                </ul>
                                
                            
                            	
                                <ul>
                                    <li class="province">湖南</li>
                                    <li class="city">
                                        
                                            <a href="javascript:void(0)" class="cityitem"
                                               data-province-id="436" data-city-id="338" data-address-name="湖南•常德">常德</a>
                                        
                                            <a href="javascript:void(0)" class="cityitem"
                                               data-province-id="436" data-city-id="63" data-address-name="湖南•长沙">长沙</a>
                                        
                                            <a href="javascript:void(0)" class="cityitem"
                                               data-province-id="436" data-city-id="339" data-address-name="湖南•郴州">郴州</a>
                                        
                                            <a href="javascript:void(0)" class="cityitem"
                                               data-province-id="436" data-city-id="405" data-address-name="湖南•凤凰(湘西)">凤凰(湘西)</a>
                                        
                                            <a href="javascript:void(0)" class="cityitem"
                                               data-province-id="436" data-city-id="335" data-address-name="湖南•衡阳">衡阳</a>
                                        
                                            <a href="javascript:void(0)" class="cityitem"
                                               data-province-id="436" data-city-id="344" data-address-name="湖南•怀化">怀化</a>
                                        
                                            <a href="javascript:void(0)" class="cityitem"
                                               data-province-id="436" data-city-id="336" data-address-name="湖南•邵阳">邵阳</a>
                                        
                                            <a href="javascript:void(0)" class="cityitem"
                                               data-province-id="436" data-city-id="334" data-address-name="湖南•湘潭">湘潭</a>
                                        
                                            <a href="javascript:void(0)" class="cityitem"
                                               data-province-id="436" data-city-id="337" data-address-name="湖南•岳阳">岳阳</a>
                                        
                                            <a href="javascript:void(0)" class="cityitem"
                                               data-province-id="436" data-city-id="342" data-address-name="湖南•张家界">张家界</a>
                                        
                                            <a href="javascript:void(0)" class="cityitem"
                                               data-province-id="436" data-city-id="333" data-address-name="湖南•株洲">株洲</a>
                                        
                                    </li>
                                </ul>
                                
                            
                        </div>
                	
                
                    
                
                    
                        <div id="provinceJ">
                            <i class="ui_letter floatL">J</i>
                            
                            	
                                <ul>
                                    <li class="province">江苏</li>
                                    <li class="city">
                                        
                                            <a href="javascript:void(0)" class="cityitem"
                                               data-province-id="419" data-city-id="21" data-address-name="江苏•常州">常州</a>
                                        
                                            <a href="javascript:void(0)" class="cityitem"
                                               data-province-id="419" data-city-id="140" data-address-name="江苏•淮安">淮安</a>
                                        
                                            <a href="javascript:void(0)" class="cityitem"
                                               data-province-id="419" data-city-id="46" data-address-name="江苏•昆山">昆山</a>
                                        
                                            <a href="javascript:void(0)" class="cityitem"
                                               data-province-id="419" data-city-id="39" data-address-name="江苏•连云港">连云港</a>
                                        
                                            <a href="javascript:void(0)" class="cityitem"
                                               data-province-id="419" data-city-id="9" data-address-name="江苏•南京">南京</a>
                                        
                                            <a href="javascript:void(0)" class="cityitem"
                                               data-province-id="419" data-city-id="52" data-address-name="江苏•南通">南通</a>
                                        
                                            <a href="javascript:void(0)" class="cityitem"
                                               data-province-id="419" data-city-id="142" data-address-name="江苏•宿迁">宿迁</a>
                                        
                                            <a href="javascript:void(0)" class="cityitem"
                                               data-province-id="419" data-city-id="11" data-address-name="江苏•苏州">苏州</a>
                                        
                                            <a href="javascript:void(0)" class="cityitem"
                                               data-province-id="419" data-city-id="141" data-address-name="江苏•泰州">泰州</a>
                                        
                                            <a href="javascript:void(0)" class="cityitem"
                                               data-province-id="419" data-city-id="14" data-address-name="江苏•无锡">无锡</a>
                                        
                                            <a href="javascript:void(0)" class="cityitem"
                                               data-province-id="419" data-city-id="139" data-address-name="江苏•徐州">徐州</a>
                                        
                                            <a href="javascript:void(0)" class="cityitem"
                                               data-province-id="419" data-city-id="54" data-address-name="江苏•盐城">盐城</a>
                                        
                                            <a href="javascript:void(0)" class="cityitem"
                                               data-province-id="419" data-city-id="26" data-address-name="江苏•扬州">扬州</a>
                                        
                                            <a href="javascript:void(0)" class="cityitem"
                                               data-province-id="419" data-city-id="27" data-address-name="江苏•镇江">镇江</a>
                                        
                                            <a href="javascript:void(0)" class="cityitem"
                                               data-province-id="419" data-city-id="13" data-address-name="江苏•周庄">周庄</a>
                                        
                                    </li>
                                </ul>
                                
                            
                            	
                                <ul>
                                    <li class="province">江西</li>
                                    <li class="city">
                                        
                                            <a href="javascript:void(0)" class="cityitem"
                                               data-province-id="433" data-city-id="355" data-address-name="江西•抚州">抚州</a>
                                        
                                            <a href="javascript:void(0)" class="cityitem"
                                               data-province-id="433" data-city-id="352" data-address-name="江西•赣州">赣州</a>
                                        
                                            <a href="javascript:void(0)" class="cityitem"
                                               data-province-id="433" data-city-id="353" data-address-name="江西•吉安">吉安</a>
                                        
                                            <a href="javascript:void(0)" class="cityitem"
                                               data-province-id="433" data-city-id="347" data-address-name="江西•景德镇">景德镇</a>
                                        
                                            <a href="javascript:void(0)" class="cityitem"
                                               data-province-id="433" data-city-id="349" data-address-name="江西•九江">九江</a>
                                        
                                            <a href="javascript:void(0)" class="cityitem"
                                               data-province-id="433" data-city-id="42" data-address-name="江西•庐山">庐山</a>
                                        
                                            <a href="javascript:void(0)" class="cityitem"
                                               data-province-id="433" data-city-id="346" data-address-name="江西•南昌">南昌</a>
                                        
                                            <a href="javascript:void(0)" class="cityitem"
                                               data-province-id="433" data-city-id="348" data-address-name="江西•萍乡">萍乡</a>
                                        
                                            <a href="javascript:void(0)" class="cityitem"
                                               data-province-id="433" data-city-id="356" data-address-name="江西•上饶">上饶</a>
                                        
                                            <a href="javascript:void(0)" class="cityitem"
                                               data-province-id="433" data-city-id="59" data-address-name="江西•婺源">婺源</a>
                                        
                                            <a href="javascript:void(0)" class="cityitem"
                                               data-province-id="433" data-city-id="350" data-address-name="江西•新余">新余</a>
                                        
                                            <a href="javascript:void(0)" class="cityitem"
                                               data-province-id="433" data-city-id="354" data-address-name="江西•宜春">宜春</a>
                                        
                                            <a href="javascript:void(0)" class="cityitem"
                                               data-province-id="433" data-city-id="351" data-address-name="江西•鹰潭">鹰潭</a>
                                        
                                    </li>
                                </ul>
                                
                            
                            	
                                <ul>
                                    <li class="province">吉林</li>
                                    <li class="city">
                                        
                                            <a href="javascript:void(0)" class="cityitem"
                                               data-province-id="430" data-city-id="194" data-address-name="吉林•白山">白山</a>
                                        
                                            <a href="javascript:void(0)" class="cityitem"
                                               data-province-id="430" data-city-id="408" data-address-name="吉林•长白山">长白山</a>
                                        
                                            <a href="javascript:void(0)" class="cityitem"
                                               data-province-id="430" data-city-id="189" data-address-name="吉林•长春">长春</a>
                                        
                                            <a href="javascript:void(0)" class="cityitem"
                                               data-province-id="430" data-city-id="190" data-address-name="吉林•吉林">吉林</a>
                                        
                                            <a href="javascript:void(0)" class="cityitem"
                                               data-province-id="430" data-city-id="193" data-address-name="吉林•通化">通化</a>
                                        
                                            <a href="javascript:void(0)" class="cityitem"
                                               data-province-id="430" data-city-id="197" data-address-name="吉林•延边">延边</a>
                                        
                                    </li>
                                </ul>
                                
                            
                        </div>
                	
                
                    
                
                    
                        <div id="provinceL">
                            <i class="ui_letter floatL">L</i>
                            
                            	
                                <ul>
                                    <li class="province">辽宁</li>
                                    <li class="city">
                                        
                                            <a href="javascript:void(0)" class="cityitem"
                                               data-province-id="429" data-city-id="134" data-address-name="辽宁•本溪">本溪</a>
                                        
                                            <a href="javascript:void(0)" class="cityitem"
                                               data-province-id="429" data-city-id="18" data-address-name="辽宁•大连">大连</a>
                                        
                                            <a href="javascript:void(0)" class="cityitem"
                                               data-province-id="429" data-city-id="129" data-address-name="辽宁•丹东">丹东</a>
                                        
                                            <a href="javascript:void(0)" class="cityitem"
                                               data-province-id="429" data-city-id="128" data-address-name="辽宁•抚顺">抚顺</a>
                                        
                                            <a href="javascript:void(0)" class="cityitem"
                                               data-province-id="429" data-city-id="133" data-address-name="辽宁•葫芦岛">葫芦岛</a>
                                        
                                            <a href="javascript:void(0)" class="cityitem"
                                               data-province-id="429" data-city-id="132" data-address-name="辽宁•盘锦">盘锦</a>
                                        
                                            <a href="javascript:void(0)" class="cityitem"
                                               data-province-id="429" data-city-id="126" data-address-name="辽宁•沈阳">沈阳</a>
                                        
                                            <a href="javascript:void(0)" class="cityitem"
                                               data-province-id="429" data-city-id="402" data-address-name="辽宁•绥中">绥中</a>
                                        
                                            <a href="javascript:void(0)" class="cityitem"
                                               data-province-id="429" data-city-id="35" data-address-name="辽宁•营口">营口</a>
                                        
                                    </li>
                                </ul>
                                
                            
                        </div>
                	
                
                    
                
                    
                        <div id="provinceN">
                            <i class="ui_letter floatL">N</i>
                            
                            	
                                <ul>
                                    <li class="province">内蒙古</li>
                                    <li class="city">
                                        
                                            <a href="javascript:void(0)" class="cityitem"
                                               data-province-id="446" data-city-id="267" data-address-name="内蒙古•阿拉善">阿拉善</a>
                                        
                                            <a href="javascript:void(0)" class="cityitem"
                                               data-province-id="446" data-city-id="257" data-address-name="内蒙古•包头">包头</a>
                                        
                                            <a href="javascript:void(0)" class="cityitem"
                                               data-province-id="446" data-city-id="263" data-address-name="内蒙古•巴彦淖尔">巴彦淖尔</a>
                                        
                                            <a href="javascript:void(0)" class="cityitem"
                                               data-province-id="446" data-city-id="259" data-address-name="内蒙古•赤峰">赤峰</a>
                                        
                                            <a href="javascript:void(0)" class="cityitem"
                                               data-province-id="446" data-city-id="261" data-address-name="内蒙古•鄂尔多斯">鄂尔多斯</a>
                                        
                                            <a href="javascript:void(0)" class="cityitem"
                                               data-province-id="446" data-city-id="399" data-address-name="内蒙古•额济纳">额济纳</a>
                                        
                                            <a href="javascript:void(0)" class="cityitem"
                                               data-province-id="446" data-city-id="256" data-address-name="内蒙古•呼和浩特">呼和浩特</a>
                                        
                                            <a href="javascript:void(0)" class="cityitem"
                                               data-province-id="446" data-city-id="262" data-address-name="内蒙古•呼伦贝尔">呼伦贝尔</a>
                                        
                                            <a href="javascript:void(0)" class="cityitem"
                                               data-province-id="446" data-city-id="400" data-address-name="内蒙古•满洲里">满洲里</a>
                                        
                                            <a href="javascript:void(0)" class="cityitem"
                                               data-province-id="446" data-city-id="260" data-address-name="内蒙古•通辽">通辽</a>
                                        
                                            <a href="javascript:void(0)" class="cityitem"
                                               data-province-id="446" data-city-id="258" data-address-name="内蒙古•乌海">乌海</a>
                                        
                                            <a href="javascript:void(0)" class="cityitem"
                                               data-province-id="446" data-city-id="264" data-address-name="内蒙古•乌兰察布">乌兰察布</a>
                                        
                                            <a href="javascript:void(0)" class="cityitem"
                                               data-province-id="446" data-city-id="266" data-address-name="内蒙古•锡林郭勒">锡林郭勒</a>
                                        
                                            <a href="javascript:void(0)" class="cityitem"
                                               data-province-id="446" data-city-id="265" data-address-name="内蒙古•兴安盟">兴安盟</a>
                                        
                                    </li>
                                </ul>
                                
                            
                            	
                                <ul>
                                    <li class="province">宁夏</li>
                                    <li class="city">
                                        
                                            <a href="javascript:void(0)" class="cityitem"
                                               data-province-id="444" data-city-id="285" data-address-name="宁夏•固原">固原</a>
                                        
                                            <a href="javascript:void(0)" class="cityitem"
                                               data-province-id="444" data-city-id="283" data-address-name="宁夏•石嘴山">石嘴山</a>
                                        
                                            <a href="javascript:void(0)" class="cityitem"
                                               data-province-id="444" data-city-id="284" data-address-name="宁夏•吴忠">吴忠</a>
                                        
                                            <a href="javascript:void(0)" class="cityitem"
                                               data-province-id="444" data-city-id="282" data-address-name="宁夏•银川">银川</a>
                                        
                                            <a href="javascript:void(0)" class="cityitem"
                                               data-province-id="444" data-city-id="286" data-address-name="宁夏•中卫">中卫</a>
                                        
                                    </li>
                                </ul>
                                
                            
                        </div>
                	
                
                    
                
                    
                
                    
                        <div id="provinceQ">
                            <i class="ui_letter floatL">Q</i>
                            
                            	
                                <ul>
                                    <li class="province">青海</li>
                                    <li class="city">
                                        
                                            <a href="javascript:void(0)" class="cityitem"
                                               data-province-id="440" data-city-id="311" data-address-name="青海•海北">海北</a>
                                        
                                            <a href="javascript:void(0)" class="cityitem"
                                               data-province-id="440" data-city-id="313" data-address-name="青海•海南州">海南州</a>
                                        
                                            <a href="javascript:void(0)" class="cityitem"
                                               data-province-id="440" data-city-id="403" data-address-name="青海•青海湖">青海湖</a>
                                        
                                            <a href="javascript:void(0)" class="cityitem"
                                               data-province-id="440" data-city-id="309" data-address-name="青海•西宁">西宁</a>
                                        
                                    </li>
                                </ul>
                                
                            
                        </div>
                	
                
                    
                
                    
                        <div id="provinceS">
                            <i class="ui_letter floatL">S</i>
                            
                            	
                                <ul>
                                    <li class="province">山东</li>
                                    <li class="city">
                                        
                                            <a href="javascript:void(0)" class="cityitem"
                                               data-province-id="418" data-city-id="214" data-address-name="山东•滨州">滨州</a>
                                        
                                            <a href="javascript:void(0)" class="cityitem"
                                               data-province-id="418" data-city-id="219" data-address-name="山东•德州">德州</a>
                                        
                                            <a href="javascript:void(0)" class="cityitem"
                                               data-province-id="418" data-city-id="211" data-address-name="山东•东营">东营</a>
                                        
                                            <a href="javascript:void(0)" class="cityitem"
                                               data-province-id="418" data-city-id="221" data-address-name="山东•菏泽">菏泽</a>
                                        
                                            <a href="javascript:void(0)" class="cityitem"
                                               data-province-id="418" data-city-id="19" data-address-name="山东•济南">济南</a>
                                        
                                            <a href="javascript:void(0)" class="cityitem"
                                               data-province-id="418" data-city-id="215" data-address-name="山东•济宁">济宁</a>
                                        
                                            <a href="javascript:void(0)" class="cityitem"
                                               data-province-id="418" data-city-id="213" data-address-name="山东•莱芜">莱芜</a>
                                        
                                            <a href="javascript:void(0)" class="cityitem"
                                               data-province-id="418" data-city-id="220" data-address-name="山东•聊城">聊城</a>
                                        
                                            <a href="javascript:void(0)" class="cityitem"
                                               data-province-id="418" data-city-id="218" data-address-name="山东•临沂">临沂</a>
                                        
                                            <a href="javascript:void(0)" class="cityitem"
                                               data-province-id="418" data-city-id="29" data-address-name="山东•蓬莱">蓬莱</a>
                                        
                                            <a href="javascript:void(0)" class="cityitem"
                                               data-province-id="418" data-city-id="8" data-address-name="山东•青岛">青岛</a>
                                        
                                            <a href="javascript:void(0)" class="cityitem"
                                               data-province-id="418" data-city-id="47" data-address-name="山东•栖霞(烟台)">栖霞(烟台)</a>
                                        
                                            <a href="javascript:void(0)" class="cityitem"
                                               data-province-id="418" data-city-id="217" data-address-name="山东•日照">日照</a>
                                        
                                            <a href="javascript:void(0)" class="cityitem"
                                               data-province-id="418" data-city-id="216" data-address-name="山东•泰安">泰安</a>
                                        
                                            <a href="javascript:void(0)" class="cityitem"
                                               data-province-id="418" data-city-id="212" data-address-name="山东•潍坊">潍坊</a>
                                        
                                            <a href="javascript:void(0)" class="cityitem"
                                               data-province-id="418" data-city-id="30" data-address-name="山东•威海">威海</a>
                                        
                                            <a href="javascript:void(0)" class="cityitem"
                                               data-province-id="418" data-city-id="44" data-address-name="山东•烟台">烟台</a>
                                        
                                            <a href="javascript:void(0)" class="cityitem"
                                               data-province-id="418" data-city-id="38" data-address-name="山东•枣庄">枣庄</a>
                                        
                                            <a href="javascript:void(0)" class="cityitem"
                                               data-province-id="418" data-city-id="210" data-address-name="山东•淄博">淄博</a>
                                        
                                    </li>
                                </ul>
                                
                            
                            	
                                <ul>
                                    <li class="province">上海市</li>
                                    <li class="city">
                                        
                                            <a href="javascript:void(0)" class="cityitem"
                                               data-province-id="422" data-city-id="23" data-address-name="上海市•上海">上海</a>
                                        
                                    </li>
                                </ul>
                                
                            
                            	
                                <ul>
                                    <li class="province">山西</li>
                                    <li class="city">
                                        
                                            <a href="javascript:void(0)" class="cityitem"
                                               data-province-id="427" data-city-id="272" data-address-name="山西•长治">长治</a>
                                        
                                            <a href="javascript:void(0)" class="cityitem"
                                               data-province-id="427" data-city-id="270" data-address-name="山西•大同">大同</a>
                                        
                                            <a href="javascript:void(0)" class="cityitem"
                                               data-province-id="427" data-city-id="273" data-address-name="山西•晋城">晋城</a>
                                        
                                            <a href="javascript:void(0)" class="cityitem"
                                               data-province-id="427" data-city-id="275" data-address-name="山西•晋中">晋中</a>
                                        
                                            <a href="javascript:void(0)" class="cityitem"
                                               data-province-id="427" data-city-id="278" data-address-name="山西•临汾">临汾</a>
                                        
                                            <a href="javascript:void(0)" class="cityitem"
                                               data-province-id="427" data-city-id="279" data-address-name="山西•吕梁">吕梁</a>
                                        
                                            <a href="javascript:void(0)" class="cityitem"
                                               data-province-id="427" data-city-id="37" data-address-name="山西•平遥">平遥</a>
                                        
                                            <a href="javascript:void(0)" class="cityitem"
                                               data-province-id="427" data-city-id="274" data-address-name="山西•朔州">朔州</a>
                                        
                                            <a href="javascript:void(0)" class="cityitem"
                                               data-province-id="427" data-city-id="269" data-address-name="山西•太原">太原</a>
                                        
                                            <a href="javascript:void(0)" class="cityitem"
                                               data-province-id="427" data-city-id="277" data-address-name="山西•忻州">忻州</a>
                                        
                                            <a href="javascript:void(0)" class="cityitem"
                                               data-province-id="427" data-city-id="271" data-address-name="山西•阳泉">阳泉</a>
                                        
                                            <a href="javascript:void(0)" class="cityitem"
                                               data-province-id="427" data-city-id="276" data-address-name="山西•运城">运城</a>
                                        
                                    </li>
                                </ul>
                                
                            
                            	
                                <ul>
                                    <li class="province">陕西</li>
                                    <li class="city">
                                        
                                            <a href="javascript:void(0)" class="cityitem"
                                               data-province-id="441" data-city-id="307" data-address-name="陕西•安康">安康</a>
                                        
                                            <a href="javascript:void(0)" class="cityitem"
                                               data-province-id="441" data-city-id="302" data-address-name="陕西•宝鸡">宝鸡</a>
                                        
                                            <a href="javascript:void(0)" class="cityitem"
                                               data-province-id="441" data-city-id="305" data-address-name="陕西•汉中">汉中</a>
                                        
                                            <a href="javascript:void(0)" class="cityitem"
                                               data-province-id="441" data-city-id="308" data-address-name="陕西•商洛">商洛</a>
                                        
                                            <a href="javascript:void(0)" class="cityitem"
                                               data-province-id="441" data-city-id="301" data-address-name="陕西•铜川">铜川</a>
                                        
                                            <a href="javascript:void(0)" class="cityitem"
                                               data-province-id="441" data-city-id="304" data-address-name="陕西•渭南">渭南</a>
                                        
                                            <a href="javascript:void(0)" class="cityitem"
                                               data-province-id="441" data-city-id="17" data-address-name="陕西•西安">西安</a>
                                        
                                            <a href="javascript:void(0)" class="cityitem"
                                               data-province-id="441" data-city-id="303" data-address-name="陕西•咸阳">咸阳</a>
                                        
                                            <a href="javascript:void(0)" class="cityitem"
                                               data-province-id="441" data-city-id="25" data-address-name="陕西•延安">延安</a>
                                        
                                            <a href="javascript:void(0)" class="cityitem"
                                               data-province-id="441" data-city-id="306" data-address-name="陕西•榆林">榆林</a>
                                        
                                    </li>
                                </ul>
                                
                            
                            	
                                <ul>
                                    <li class="province">四川</li>
                                    <li class="city">
                                        
                                            <a href="javascript:void(0)" class="cityitem"
                                               data-province-id="420" data-city-id="107" data-address-name="四川•阿坝">阿坝</a>
                                        
                                            <a href="javascript:void(0)" class="cityitem"
                                               data-province-id="420" data-city-id="105" data-address-name="四川•巴中">巴中</a>
                                        
                                            <a href="javascript:void(0)" class="cityitem"
                                               data-province-id="420" data-city-id="10" data-address-name="四川•成都">成都</a>
                                        
                                            <a href="javascript:void(0)" class="cityitem"
                                               data-province-id="420" data-city-id="91" data-address-name="四川•德阳">德阳</a>
                                        
                                            <a href="javascript:void(0)" class="cityitem"
                                               data-province-id="420" data-city-id="40" data-address-name="四川•峨眉山">峨眉山</a>
                                        
                                            <a href="javascript:void(0)" class="cityitem"
                                               data-province-id="420" data-city-id="108" data-address-name="四川•甘孜">甘孜</a>
                                        
                                            <a href="javascript:void(0)" class="cityitem"
                                               data-province-id="420" data-city-id="99" data-address-name="四川•广元">广元</a>
                                        
                                            <a href="javascript:void(0)" class="cityitem"
                                               data-province-id="420" data-city-id="409" data-address-name="四川•海螺沟">海螺沟</a>
                                        
                                            <a href="javascript:void(0)" class="cityitem"
                                               data-province-id="420" data-city-id="15" data-address-name="四川•九寨沟">九寨沟</a>
                                        
                                            <a href="javascript:void(0)" class="cityitem"
                                               data-province-id="420" data-city-id="93" data-address-name="四川•乐山">乐山</a>
                                        
                                            <a href="javascript:void(0)" class="cityitem"
                                               data-province-id="420" data-city-id="97" data-address-name="四川•凉山">凉山</a>
                                        
                                            <a href="javascript:void(0)" class="cityitem"
                                               data-province-id="420" data-city-id="90" data-address-name="四川•泸州">泸州</a>
                                        
                                            <a href="javascript:void(0)" class="cityitem"
                                               data-province-id="420" data-city-id="103" data-address-name="四川•眉山">眉山</a>
                                        
                                            <a href="javascript:void(0)" class="cityitem"
                                               data-province-id="420" data-city-id="92" data-address-name="四川•绵阳">绵阳</a>
                                        
                                            <a href="javascript:void(0)" class="cityitem"
                                               data-province-id="420" data-city-id="94" data-address-name="四川•南充">南充</a>
                                        
                                            <a href="javascript:void(0)" class="cityitem"
                                               data-province-id="420" data-city-id="98" data-address-name="四川•攀枝花">攀枝花</a>
                                        
                                            <a href="javascript:void(0)" class="cityitem"
                                               data-province-id="420" data-city-id="100" data-address-name="四川•遂宁">遂宁</a>
                                        
                                            <a href="javascript:void(0)" class="cityitem"
                                               data-province-id="420" data-city-id="404" data-address-name="四川•西昌">西昌</a>
                                        
                                            <a href="javascript:void(0)" class="cityitem"
                                               data-province-id="420" data-city-id="104" data-address-name="四川•雅安">雅安</a>
                                        
                                            <a href="javascript:void(0)" class="cityitem"
                                               data-province-id="420" data-city-id="95" data-address-name="四川•宜宾">宜宾</a>
                                        
                                            <a href="javascript:void(0)" class="cityitem"
                                               data-province-id="420" data-city-id="106" data-address-name="四川•资阳">资阳</a>
                                        
                                    </li>
                                </ul>
                                
                            
                        </div>
                	
                
                    
                        <div id="provinceT">
                            <i class="ui_letter floatL">T</i>
                            
                            	
                                <ul>
                                    <li class="province">台湾</li>
                                    <li class="city">
                                        
                                            <a href="javascript:void(0)" class="cityitem"
                                               data-province-id="428" data-city-id="3996" data-address-name="台湾•高雄">高雄</a>
                                        
                                            <a href="javascript:void(0)" class="cityitem"
                                               data-province-id="428" data-city-id="3997" data-address-name="台湾•花莲">花莲</a>
                                        
                                            <a href="javascript:void(0)" class="cityitem"
                                               data-province-id="428" data-city-id="4000" data-address-name="台湾•嘉义">嘉义</a>
                                        
                                            <a href="javascript:void(0)" class="cityitem"
                                               data-province-id="428" data-city-id="3998" data-address-name="台湾•基隆">基隆</a>
                                        
                                            <a href="javascript:void(0)" class="cityitem"
                                               data-province-id="428" data-city-id="4027" data-address-name="台湾•金门">金门</a>
                                        
                                            <a href="javascript:void(0)" class="cityitem"
                                               data-province-id="428" data-city-id="4001" data-address-name="台湾•苗栗">苗栗</a>
                                        
                                            <a href="javascript:void(0)" class="cityitem"
                                               data-province-id="428" data-city-id="4002" data-address-name="台湾•南投">南投</a>
                                        
                                            <a href="javascript:void(0)" class="cityitem"
                                               data-province-id="428" data-city-id="4003" data-address-name="台湾•澎湖">澎湖</a>
                                        
                                            <a href="javascript:void(0)" class="cityitem"
                                               data-province-id="428" data-city-id="4004" data-address-name="台湾•屏东（垦丁）">屏东（垦丁）</a>
                                        
                                            <a href="javascript:void(0)" class="cityitem"
                                               data-province-id="428" data-city-id="4005" data-address-name="台湾•台北">台北</a>
                                        
                                            <a href="javascript:void(0)" class="cityitem"
                                               data-province-id="428" data-city-id="4006" data-address-name="台湾•台东">台东</a>
                                        
                                            <a href="javascript:void(0)" class="cityitem"
                                               data-province-id="428" data-city-id="4007" data-address-name="台湾•台南">台南</a>
                                        
                                            <a href="javascript:void(0)" class="cityitem"
                                               data-province-id="428" data-city-id="4008" data-address-name="台湾•台中">台中</a>
                                        
                                            <a href="javascript:void(0)" class="cityitem"
                                               data-province-id="428" data-city-id="4009" data-address-name="台湾•桃园">桃园</a>
                                        
                                            <a href="javascript:void(0)" class="cityitem"
                                               data-province-id="428" data-city-id="4010" data-address-name="台湾•新北">新北</a>
                                        
                                            <a href="javascript:void(0)" class="cityitem"
                                               data-province-id="428" data-city-id="4012" data-address-name="台湾•新竹">新竹</a>
                                        
                                            <a href="javascript:void(0)" class="cityitem"
                                               data-province-id="428" data-city-id="4013" data-address-name="台湾•宜兰">宜兰</a>
                                        
                                            <a href="javascript:void(0)" class="cityitem"
                                               data-province-id="428" data-city-id="4014" data-address-name="台湾•云林">云林</a>
                                        
                                            <a href="javascript:void(0)" class="cityitem"
                                               data-province-id="428" data-city-id="4015" data-address-name="台湾•彰化">彰化</a>
                                        
                                    </li>
                                </ul>
                                
                            
                            	
                                <ul>
                                    <li class="province">天津市</li>
                                    <li class="city">
                                        
                                            <a href="javascript:void(0)" class="cityitem"
                                               data-province-id="424" data-city-id="66" data-address-name="天津市•天津">天津</a>
                                        
                                    </li>
                                </ul>
                                
                            
                        </div>
                	
                
                    
                
                    
                
                    
                
                    
                        <div id="provinceX">
                            <i class="ui_letter floatL">X</i>
                            
                            	
                                <ul>
                                    <li class="province">香港</li>
                                    <li class="city">
                                        
                                            <a href="javascript:void(0)" class="cityitem"
                                               data-province-id="448" data-city-id="396" data-address-name="香港•香港">香港</a>
                                        
                                    </li>
                                </ul>
                                
                            
                            	
                                <ul>
                                    <li class="province">西藏</li>
                                    <li class="city">
                                        
                                            <a href="javascript:void(0)" class="cityitem"
                                               data-province-id="443" data-city-id="389" data-address-name="西藏•拉萨">拉萨</a>
                                        
                                            <a href="javascript:void(0)" class="cityitem"
                                               data-province-id="443" data-city-id="395" data-address-name="西藏•林芝">林芝</a>
                                        
                                            <a href="javascript:void(0)" class="cityitem"
                                               data-province-id="443" data-city-id="392" data-address-name="西藏•日喀则">日喀则</a>
                                        
                                    </li>
                                </ul>
                                
                            
                            	
                                <ul>
                                    <li class="province">新疆</li>
                                    <li class="city">
                                        
                                            <a href="javascript:void(0)" class="cityitem"
                                               data-province-id="445" data-city-id="374" data-address-name="新疆•阿克苏">阿克苏</a>
                                        
                                            <a href="javascript:void(0)" class="cityitem"
                                               data-province-id="445" data-city-id="382" data-address-name="新疆•阿勒泰">阿勒泰</a>
                                        
                                            <a href="javascript:void(0)" class="cityitem"
                                               data-province-id="445" data-city-id="377" data-address-name="新疆•巴音郭楞">巴音郭楞</a>
                                        
                                            <a href="javascript:void(0)" class="cityitem"
                                               data-province-id="445" data-city-id="379" data-address-name="新疆•博尔塔拉">博尔塔拉</a>
                                        
                                            <a href="javascript:void(0)" class="cityitem"
                                               data-province-id="445" data-city-id="378" data-address-name="新疆•昌吉">昌吉</a>
                                        
                                            <a href="javascript:void(0)" class="cityitem"
                                               data-province-id="445" data-city-id="372" data-address-name="新疆•哈密">哈密</a>
                                        
                                            <a href="javascript:void(0)" class="cityitem"
                                               data-province-id="445" data-city-id="373" data-address-name="新疆•和田">和田</a>
                                        
                                            <a href="javascript:void(0)" class="cityitem"
                                               data-province-id="445" data-city-id="375" data-address-name="新疆•喀什">喀什</a>
                                        
                                            <a href="javascript:void(0)" class="cityitem"
                                               data-province-id="445" data-city-id="370" data-address-name="新疆•克拉玛依">克拉玛依</a>
                                        
                                            <a href="javascript:void(0)" class="cityitem"
                                               data-province-id="445" data-city-id="376" data-address-name="新疆•克孜勒苏">克孜勒苏</a>
                                        
                                            <a href="javascript:void(0)" class="cityitem"
                                               data-province-id="445" data-city-id="384" data-address-name="新疆•库尔勒">库尔勒</a>
                                        
                                            <a href="javascript:void(0)" class="cityitem"
                                               data-province-id="445" data-city-id="381" data-address-name="新疆•塔城">塔城</a>
                                        
                                            <a href="javascript:void(0)" class="cityitem"
                                               data-province-id="445" data-city-id="371" data-address-name="新疆•吐鲁番">吐鲁番</a>
                                        
                                            <a href="javascript:void(0)" class="cityitem"
                                               data-province-id="445" data-city-id="386" data-address-name="新疆•图木舒克">图木舒克</a>
                                        
                                            <a href="javascript:void(0)" class="cityitem"
                                               data-province-id="445" data-city-id="369" data-address-name="新疆•乌鲁木齐">乌鲁木齐</a>
                                        
                                            <a href="javascript:void(0)" class="cityitem"
                                               data-province-id="445" data-city-id="380" data-address-name="新疆•伊犁">伊犁</a>
                                        
                                    </li>
                                </ul>
                                
                            
                        </div>
                	
                
                    
                        <div id="provinceY">
                            <i class="ui_letter floatL">Y</i>
                            
                            	
                                <ul>
                                    <li class="province">云南</li>
                                    <li class="city">
                                        
                                            <a href="javascript:void(0)" class="cityitem"
                                               data-province-id="421" data-city-id="360" data-address-name="云南•保山">保山</a>
                                        
                                            <a href="javascript:void(0)" class="cityitem"
                                               data-province-id="421" data-city-id="36" data-address-name="云南•大理">大理</a>
                                        
                                            <a href="javascript:void(0)" class="cityitem"
                                               data-province-id="421" data-city-id="366" data-address-name="云南•德宏">德宏</a>
                                        
                                            <a href="javascript:void(0)" class="cityitem"
                                               data-province-id="421" data-city-id="364" data-address-name="云南•红河州">红河州</a>
                                        
                                            <a href="javascript:void(0)" class="cityitem"
                                               data-province-id="421" data-city-id="31" data-address-name="云南•昆明">昆明</a>
                                        
                                            <a href="javascript:void(0)" class="cityitem"
                                               data-province-id="421" data-city-id="12" data-address-name="云南•丽江">丽江</a>
                                        
                                            <a href="javascript:void(0)" class="cityitem"
                                               data-province-id="421" data-city-id="61" data-address-name="云南•普洱">普洱</a>
                                        
                                            <a href="javascript:void(0)" class="cityitem"
                                               data-province-id="421" data-city-id="56" data-address-name="云南•腾冲">腾冲</a>
                                        
                                            <a href="javascript:void(0)" class="cityitem"
                                               data-province-id="421" data-city-id="363" data-address-name="云南•文山">文山</a>
                                        
                                            <a href="javascript:void(0)" class="cityitem"
                                               data-province-id="421" data-city-id="57" data-address-name="云南•香格里拉">香格里拉</a>
                                        
                                            <a href="javascript:void(0)" class="cityitem"
                                               data-province-id="421" data-city-id="58" data-address-name="云南•西双版纳">西双版纳</a>
                                        
                                            <a href="javascript:void(0)" class="cityitem"
                                               data-province-id="421" data-city-id="359" data-address-name="云南•玉溪">玉溪</a>
                                        
                                    </li>
                                </ul>
                                
                            
                        </div>
                	
                
                    
                        <div id="provinceZ">
                            <i class="ui_letter floatL">Z</i>
                            
                            	
                                <ul>
                                    <li class="province">浙江</li>
                                    <li class="city">
                                        
                                            <a href="javascript:void(0)" class="cityitem"
                                               data-province-id="417" data-city-id="7" data-address-name="浙江•杭州">杭州</a>
                                        
                                            <a href="javascript:void(0)" class="cityitem"
                                               data-province-id="417" data-city-id="111" data-address-name="浙江•湖州">湖州</a>
                                        
                                            <a href="javascript:void(0)" class="cityitem"
                                               data-province-id="417" data-city-id="110" data-address-name="浙江•嘉兴">嘉兴</a>
                                        
                                            <a href="javascript:void(0)" class="cityitem"
                                               data-province-id="417" data-city-id="113" data-address-name="浙江•金华">金华</a>
                                        
                                            <a href="javascript:void(0)" class="cityitem"
                                               data-province-id="417" data-city-id="116" data-address-name="浙江•丽水">丽水</a>
                                        
                                            <a href="javascript:void(0)" class="cityitem"
                                               data-province-id="417" data-city-id="16" data-address-name="浙江•宁波">宁波</a>
                                        
                                            <a href="javascript:void(0)" class="cityitem"
                                               data-province-id="417" data-city-id="67" data-address-name="浙江•千岛湖">千岛湖</a>
                                        
                                            <a href="javascript:void(0)" class="cityitem"
                                               data-province-id="417" data-city-id="114" data-address-name="浙江•衢州">衢州</a>
                                        
                                            <a href="javascript:void(0)" class="cityitem"
                                               data-province-id="417" data-city-id="112" data-address-name="浙江•绍兴">绍兴</a>
                                        
                                            <a href="javascript:void(0)" class="cityitem"
                                               data-province-id="417" data-city-id="115" data-address-name="浙江•台州">台州</a>
                                        
                                            <a href="javascript:void(0)" class="cityitem"
                                               data-province-id="417" data-city-id="109" data-address-name="浙江•温州">温州</a>
                                        
                                            <a href="javascript:void(0)" class="cityitem"
                                               data-province-id="417" data-city-id="401" data-address-name="浙江•乌镇">乌镇</a>
                                        
                                            <a href="javascript:void(0)" class="cityitem"
                                               data-province-id="417" data-city-id="28" data-address-name="浙江•西塘">西塘</a>
                                        
                                            <a href="javascript:void(0)" class="cityitem"
                                               data-province-id="417" data-city-id="20" data-address-name="浙江•舟山">舟山</a>
                                        
                                    </li>
                                </ul>
                                
                            
                        </div>
                	
                
            </div>
        </div>
    </div>
    <div class="ui_btn">
        <a href="javascript:void(0)" id="address-selector-close" class="btn-primary-s">关闭</a>
    </div>
</div>

<script>
    $(function () {
        /* 国内部分 */
        //滑动定位
        $("#address-selector .cityNav li>a").click(function() {
            var target = '#province' + $(this).text();
            $("#address-selector .cityBody").scrollTo(target, 600);
        });

        //$("#address-selector .cityBody ul").hover(function() {
        //    $(this).addClass("current");
        //}, function() {
        //    $(this).removeClass("current");
        //});

        //对话框
        $("#addressInput").overlay({
            mask: {
                color: '#000',
                loadSpeed: 200,
                opacity: 0.6
            },
            closeOnClick: false,
            closeOnEsc: false,
            target: "#address-selector",
            top: "center",
            fixed: true,
            onBeforeLoad: function () {
                $("#address-selector").data("originalAddress", $("#addressInput").val());
                $("#addressInput").blur();
                $("#addressDiv>.text_prompt").remove();
            }
        });

        $("#addressDiv>.text_prompt").click(function() {
            $("#addressInput").click();
        });

        $("#address-selector-close").click(function() {
            $("#addressInput").val($("#address-selector").data("originalAddress"));
            $("#addressInput").overlay().close();
        });

        $(".cityitem").click(function () {
            $("#addressProvinceID").val($(this).data("province-id"));
            $("#addressCityID").val($(this).data("city-id"));
            $("#addressInput").val($(this).data("address-name"));
            $("#addressInput").overlay().close();
        });

        /* 海外部分 */
        var countries = null;     
        var cityCountryMap = null; 
        var provinceId = -1;
        var cityId = -1;
                
        
         
         
        
        provinceIdString = '423';
        cityIdString = '48';
        if (parseInt(provinceIdString) > 0) {
            $("#addressProvinceID").val(provinceIdString);
            getCityOptions(provinceIdString);
            if ($("#addressProvinceID").data("selectinput")){
                $("#addressProvinceID").data("selectinput").repaint();
            }            
        }
        if (parseInt(cityIdString)>0){
            $("#addressCityID").val(cityIdString);
            if ($("#addressCityID").data("selectinput")){
                $("#addressCityID").data("selectinput").repaint();
            }
        }
         
        
        function clearCityOptions() {
            $("#addressCityID").find("option[value!='']").remove();
        }

        function getCityOptions(countryId) {
            if (countryId) {
                clearCityOptions();
                if (cityCountryMap!=null && cityCountryMap[countryId]!=null) {
                	var cities = cityCountryMap[countryId];
                    var html = "";
                    for (var i = 0; i < cities.length; i++) {
                        html += "<option value='" + cities[i].cityId + "'>" + cities[i].internalName + "</option>";
                    }
                    $("#addressCityID").append($(html));
                    if ($("#addressCityID").data("selectinput")){
                        $("#addressCityID").data("selectinput").repaint();
                    }
                }
            }
        };

        $("#addressProvinceID").change(function () {
            clearCityOptions();
            if (parseInt(this.value) > 0) { // 有效的省份id
                getCityOptions(this.value);
            }
        });
    })
</script>
            </div>
        </div>
	            <!-- <input data-val="true" data-val-required="EnumCurrencyUnit 字段是必需的。" id="EnumCurrencyUnit" name="EnumCurrencyUnit" type="hidden" value="8">
	            <span class="field-validation-valid" data-valmsg-for="EnumCurrencyUnit" data-valmsg-replace="true"></span> -->
        <div class="rowItem">
            <span class="col_1">欢迎语：</span>
            <div class="col_1_box">
            	<input class="input-w450" data-val="true" data-val-length="欢迎语不能超过20字" data-val-length-max="20" id="WelcomeMessage" maxlength="20" name="WelcomeMessage" type="text" value="">
                <span class="text-muted">一段您对客人的欢迎语</span>
                <span class="field-validation-valid" data-valmsg-for="WelcomeMessage" data-valmsg-replace="true"></span>
            </div>
        </div>
        <div class="rowItem">
            <span class="col_1">介绍：</span>
            <div class="col_1_box">
            	<textarea class="ui_textarea" cols="20" id="Description" maxlength="1000" name="Description" rows="2"></textarea>
            	<span class="field-validation-valid" data-valmsg-for="Description" data-valmsg-replace="true"></span>
            </div>
        </div>
        <div class="rowItem">
            <!-- TODO: @Html.Partial("Partial/LogoUploader", Model) -->
            




<script src="//staticfile.tujia.com/Common/Scripts/swfobject.js" type="text/javascript"></script>

 
<input type="hidden" id="logoSourceUrl" name="LogoSourceUrl" value=""/>
<input type="hidden" id="logo150Url" name="Logo150Url" value="" />
<input type="hidden" id="logo90Url" name="Logo90Url" value="" />

<script>
    $(function () {
        //检查flash控件
        if (flashChecker()) {

            var UPLOAD_LOGO_URL = 'http://upload.tujia.com/StoreLogoUpload.ashx';
            
            swfobject.addDomLoadEvent(function () {
                var uploader = new fullAvatarEditor(
                		"/merchant-web/fullAvatarEditor.swf",
                		
                		"/merchant-web/expressInstall.swf",
                		
                		"swfContainer", 
                {
                    id: 'swf',
                    upload_url: UPLOAD_LOGO_URL, //上传接口
                    method: 'post', //传递到上传接口中的查询参数的提交方式。更改该值时，请注意更改上传接口中的查询参数的接收方式
                    src_upload: 1, //是否上传原图片的选项，有以下值：0-不上传；1-上传；2-显示复选框由用户选择
                    avatar_box_border_width: 1,
                    avatar_sizes: '150*150|90*90',
                    avatar_sizes_desc: '150*150像素|90*90像素',
                    avatar_intro: '请查看以下尺寸的门店标识是否符合您的要求',
                    tab_visible: false,
                    browse_box_border_width: 0,
                    browse_button: "",
                    browse_tip: "",
                    browse_box_align: "left",
                    button_visible: false,
                    isShowUploadResultIcon: false,
                    avatar_tools_brightness_text: '亮度',
                    avatar_tools_contrast_text:  '对比度',
                    avatar_tools_saturation_text: '对比度'
	                }, 
	                function callback(data) {
	                    switch (data.code) {
	                        case 2:
	                            if (data.type == 0) {
	                                showEditPanel();
	                            } else {
	                                alert("所选择的文件不符合要求");
	                                hideEditPanel();
	                            }
	                            break;
	                        case 5:
	                            if (data.type == 0) {
	                                if (!data.content.success || data.content.sourceUrl.length <= 0 || !data.content.avatarUrls || data.content.avatarUrls.length != 2) {
	                                    alert(data.content.msg);
	                                    return;
	                                }
	
	                                $("#logoSourceUrl").val(data.content.sourceUrl);
	                                $("#logo150Url").val(data.content.avatarUrls[0]);
	                                $("#logo90Url").val(data.content.avatarUrls[1]);
	
	                                setTimeout(refreshUploaderPanel, 100);
	                            }
	                            break;
	                    }
	                }
	            );

                function showEditPanel() {
                    $(".logoUploader").addClass("edit");
                    $("#uploadImgWrapper1").css({ "background-image": "" });
                }

                function hideEditPanel() {
                    $(".logoUploader").removeClass("edit");
                    var logo90Url = $("#logo90Url").val();
                    var bgImage = "url('//staticfile.tujia.com/Landlord/Images/landlord.images/uploadPhoto.png')";
                    if (logo90Url.length > 0) {
                        bgImage = "url('" + staticFileRoot + logo90Url + "')";
                        $(".logoEditButtons").removeClass("displayN");
                    } else {
                        $(".logoEditButtons").addClass("displayN");
                    }
                    $("#uploadImgWrapper1").css({ "background-image": bgImage });
                }

                hideEditPanel();

                function refreshUploaderPanel() {
                    uploader.call("changepanel", "upload");
                    hideEditPanel();
                }

                $("#uploadLogo").click(function () {
                    uploader.call("upload");
                });

                $("#cancelUploadLogo").click(function () {
                    refreshUploaderPanel();
                });

                $("#editLogo").click(function () {
                    var sourceUrl = $("#logoSourceUrl").val();
                    if (sourceUrl.length > 0) {
                    	if (staticFileRoot.length > 4 && staticFileRoot.substr(0,4) != "http") 
                        	vstaticFileRoot = "http:" + staticFileRoot;
                    	else 
                    		vstaticFileRoot = staticFileRoot;
                        uploader.call("loadpic", vstaticFileRoot + sourceUrl);
                    }
                    showEditPanel();
                });

                $("#deleteLogo").click(function () {
                    $("#logoSourceUrl, #logo90Url, #logo150Url").val("");
                    hideEditPanel();
                });
            });
        }

        
    });
</script>
<script type="text/javascript">
/* /Common/Scripts/fullAvatarEditor.js */
function fullAvatarEditor() {
	var id				= 'fullAvatarEditor'			//flash文件的ID
	var file			= 'fullAvatarEditor.swf';		//flash文件的路径
	var	version			= "10.1.0";						//播放该flash所需的最低版本
	var	expressInstall	= 'expressInstall.swf';			//expressInstall.swf的路径
	var	width			= 630;							//flash文件的宽度
	var	height			= 430;							//flash文件的高度
	var container		= id;							//装载flash文件的容器(如div)的id
	var flashvars		= {};
	var callback		= function(){};
	var heightChanged	= false;
	//智能获取参数，字符类型为装载flash文件的容器(如div)的id，第一个数字类型的为高度，第二个为宽度，第一个object类型的为参数对象，如此4个参数的顺序可随意。
	for(var i = 0; i < arguments.length; i++)
	{
		var a = arguments[i];
		if(typeof a == 'string')
		{
			if (a.substring(a.length - 'fullAvatarEditor.swf'.length) == 'fullAvatarEditor.swf')
			{
				file = a;
			}
			else if (a.substring(a.length - 'expressInstall.swf'.length) == 'expressInstall.swf')
			{
				expressInstall = a;
			}
			else
			{
				container = a;
			}
		}
		else if(typeof a == 'number')
		{
			if(heightChanged)
			{
				width = a;
			}
			else
			{
				height = a;
				heightChanged = true;
			}
		}
		else if(typeof a == 'function')
		{
			callback = a;
		}
		else
		{
			flashvars = a;
		}
	}
	var vars = {
		id : id
	};
	//合并参数
	for (var name in flashvars)
	{
		if(flashvars[name] != null)
		{
			if(name == 'upload_url' || name == 'src_url')
			{
				vars[name] = encodeURIComponent(flashvars[name]);
			}
			else
			{
				vars[name] = flashvars[name];
			}
		}
	}
	var params = {
		menu				: 'true',
		scale				: 'noScale',
		allowFullscreen		: 'true',
		allowScriptAccess	: 'always',
		wmode				: 'transparent'
	};
	var attributes = {
		id	: vars.id,
		name: vars.id
	};
	var swf = null;
	var	callbackFn = function (e) {
		swf = e.ref;
		swf.eventHandler = function(json){
			callback.call(swf, json);
		};
	};
	swfobject.embedSWF(
		file, 
		container,
		width,
		height,
		version,
		expressInstall,
		vars,
		params, 
		attributes,
		callbackFn
	);
	return swf;
}
</script>

<span class="col_1">标识：</span>
<div class="col_1_box logoUploader">
    <div class="clearFix marginB10">
        <div id="uploadImgWrapper1" class="uploadImgWrapper1">
            <div id="uploadImgWrapper2" class="uploadImgWrapper2">
                <div id="uploadImgWrapper3" class="uploadImgWrapper3">
                    <div id="swfContainer">
                    </div>
                </div>
            </div>
        </div>
        <div class="logoRequirements">
            <div class="uploadInfo">
               	上传要求：<br />
                1、文件大小：小于2M<br />
                2、支持JPG、PNG格式<br />
                3、请上传清晰的正面图片
            </div>
        </div>
    </div>
    <div class="logoEditButtons">
        <a id="editLogo" href="javascript:;" class="btn-primary-xs">编辑</a>
        <a id="deleteLogo" href="javascript:;" class="btn-primary-xs">删除</a>
        <span class="text-muted"><i class="ui_important">*</i>好的标识，可以提升商户形象，有助建立用户间的信任。</span>
    </div>
    
    <div class="logoUploadButtons">
        <a id="uploadLogo" href="javascript:;" class="btn-primary-xs marginR10">上传</a>
        <a id="cancelUploadLogo" href="javascript:;" class="btn-default-xs marginR10">取消</a>
    </div>
</div>

        </div>
    </div>
    
    <div class="detailTitle" style='' >经营信息</div>
    <div class="detailWraper" style='' >
    
    <div class="rowItem">
        <span class="col_1">是否接待外宾：</span>
        <div class="col_1_box">
        	<!-- checked="checked" 要根据Model.ReceiveForeigner而定，Model是后台传过来的一个StoreViewModel对象  -->
        	<input data-val="true" data-val-required="请选择是否接待外宾" id="ReceiveForeigner_yes" name="ReceiveForeigner" type="radio" value="true">&nbsp;是
        	<input class="ui_left10" checked="checked" id="ReceiveForeigner_no" name="ReceiveForeigner" type="radio" value="false">&nbsp;否
        	<span class="field-validation-valid" data-valmsg-for="ReceiveForeigner" data-valmsg-replace="true"></span>
        </div>
    </div>
	
            <div class="rowItem">
                <span class="col_1">是否提供发票：</span>
                <div class="col_1_box">
                    <span class="select-w100">
                		<!-- 需要选择默认值 -->
                    	<select data-val="true" data-val-required="请选择发票类型" id="EnumInvoiceType" name="EnumInvoiceType">
                    		<option selected="selected" value="None">请选择</option>
                    		<option value="1">提供发票</option>
                    		<option value="0">不提供发票</option>
                    	</select>
                    </span>
                    <span class="field-validation-valid" data-valmsg-for="EnumInvoiceType" data-valmsg-replace="true"></span>
                </div>
            </div>
    </div>
    <div class="detailTitle">联系方式</div>
    <div class="detailWraper">
        <div class="rowItem">
            <span class="col_1"><i class="ui_important">*</i>与客人联系电话：</span>
            <div class="col_1_box">
            	<input class="input-w200" id="LinkmanMobile" name="LinkmanMobile" type="text" value="13051151895" maxlength="20"
            		data-val="true" data-val-regex="联系电话为11位数字或数字与减号的组合" data-val-regex-pattern="^\s*\+?\s*(\(\s*\d+\s*\)|\d+)(\s*-?\s*(\(\s*\d+\s*\)|\s*\d+\s*))*\s*$" data-val-required="联系电话必须填写"  />
                <i class="ui_question" id="LinkmanMobileHelper" data-tip-target="#LinkmanMobileHelperContent">?</i>
                <span class="field-validation-valid" data-valmsg-for="LinkmanMobile" data-valmsg-replace="true"></span>
            </div>
        </div>
        <div class="rowItem" >
            <span class="col_1">运营QQ：</span>
            <div class="col_1_box">
            	<input class="input-w200" data-val="true" data-val-regex="QQ号码格式不对" data-val-regex-pattern="^[1-9]\d{4,19}$" id="QQ" maxlength="20" name="QQ" type="text" value="" />
                <i class="ui_question" id="QQHelper" data-tip-target="#QQHelperContent">?</i>
                <span class="field-validation-valid" data-valmsg-for="QQ" data-valmsg-replace="true"></span>
            </div>
        </div>
        <div class="rowItem" >
            <span class="col_1">Skype：</span>
            <div class="col_1_box">
            	<input class="input-w200" id="Skype" maxlength="50" name="Skype" type="text" value="">
                <i class="ui_question" id="SkypeHelper" data-tip-target="#SkypeHelperContent">?</i>
                <span class="field-validation-valid" data-valmsg-for="Skype" data-valmsg-replace="true"></span>
            </div>
        </div>
    </div>
   <!-- TODO
       Model.FinancialAccountInfo.IsC2C = Model.ViewType.IsC2CFangDong;
       Model.FinancialAccountInfo.IsInternational = Model.ViewType.IsInternational; -->
       <div class="detailTitle">
        	   结算信息
       </div>
       <div class="detailWraper">
          <!--  TODO 引入FinancialInfoEditor.jsp 用Model.FinancialAccountInfo传值 -->
          













<input id="FinancialAccountInfo_ID" name="FinancialAccountInfo.ID" type="hidden" value="0" />
<input id="FinancialAccountInfo_EnumSettlementLevel" name="FinancialAccountInfo.EnumSettlementLevel" type="hidden" value="2" />
<input id="FinancialAccountInfo_EditingMode" name="FinancialAccountInfo.EditingMode" type="hidden" value="0" />

    <div class="rowItem">
        <span class="col_1">账户设置</span>
        <div class="col_1_box">
        	
            <input checked='checked' data-val="true" data-val-required="EnumAccountType 字段是必需的。" id="zfb" name="FinancialAccountInfo.EnumAccountType" type="radio" value="Alipay" /> 支付宝
            <input  id="yhzh" name="FinancialAccountInfo.EnumAccountType" type="radio" value="Bank" /> 银行账号
        </div>
    </div>
    <div class="col_1_box390 accountInfo" id="Alipay">
        <div class="rowItem">
            <span class="col_1"><i class="ui_important">*</i>真实姓名：</span>
            <div class="col_1_box">
                <input class="input-w200" data-val="true" data-val-length="输入过长" data-val-length-max="50" 
                	id="FinancialAccountInfo_AccountName" maxlength="50" name="FinancialAccountInfo.AccountName" type="text" value="" />
                <span class="field-validation-valid" data-valmsg-for="FinancialAccountInfo.AccountName" data-valmsg-replace="true"></span>
                
            </div>
        </div>
        <div class="rowItem">
            <span class="col_1"><i class="ui_important">*</i>支付宝账号：</span>
            <div class="col_1_box">
                <input class="input-w200" data-val="true" data-val-length="输入过长" data-val-length-max="50" id="FinancialAccountInfo_AlipayAccount"
                	maxlength="50" name="FinancialAccountInfo.AlipayAccount" type="text" value="" />
                <span class="field-validation-valid" data-valmsg-for="FinancialAccountInfo.AlipayAccount" data-valmsg-replace="true"></span>
            </div>
        </div>
        <div class="rowItem">
            <span class="col_1">账号类型：</span>
            <div class="col_1_box">
                <input checked='checked' data-val="true" data-val-required="EnumAlipayAccountType 字段是必需的。" id="personal" 
                	name="FinancialAccountInfo.EnumAlipayAccountType" type="radio" value="1" />&nbsp;个人账号
                <input class="ui_left10" 
                	id="company" name="FinancialAccountInfo.EnumAlipayAccountType" type="radio" value="2" />&nbsp;企业账号
            </div>
        </div>
    </div>
    <div id="Bank" class="col_1_box390 accountInfo displayN">
        <div class="rowItem">
            <span class="col_1"><i class="ui_important">*</i>开户银行：</span>
            <div class="col_1_box">
                <span class="select-w250">
                	
                    <!-- @Html.DropDownListFor(m => m.AccountBankID, null, new {id = "BankID"})-->
                     <select data-val="true" data-val-number="字段 AccountBankID 必须是一个数字。" data-val-required="AccountBankID 字段是必需的。" id="BankID" name="FinancialAccountInfo.AccountBankID">
                     	<option value="0">请选择</option>
                     	
                     		<option value="39">成都银行</option>
                     	
                     		<option value="27">中国工商银行</option>
                     	
                     		<option value="26">中国农业银行</option>
                     	
                     		<option value="31">中国银行</option>
                     	
                     		<option value="28">中国建设银行</option>
                     	
                     		<option value="32">交通银行</option>
                     	
                     		<option value="9">招商银行</option>
                     	
                     		<option value="29">中国民生银行</option>
                     	
                     		<option value="24">中国光大银行</option>
                     	
                     		<option value="20">华夏银行</option>
                     	
                     		<option value="33">兴业银行</option>
                     	
                     		<option value="14">平安银行</option>
                     	
                     		<option value="21">浦发银行</option>
                     	
                     		<option value="5">广发银行</option>
                     	
                     		<option value="30">中国邮政储蓄银行</option>
                     	
                     		<option value="25">中国农业发展银行</option>
                     	
                     		<option value="16">渤海银行</option>
                     	
                     		<option value="13">浙商银行</option>
                     	
                     		<option value="6">徽商银行</option>
                     	
                     		<option value="2">国家开发银行</option>
                     	
                     		<option value="41">国民银行（中国）有限公司</option>
                     	
                     		<option value="42">华南商业银行股份有限公司</option>
                     	
                     		<option value="23">中信银行</option>
                     	
                     		<option value="1">上海农商银行</option>
                     	
                     		<option value="37">华一银行</option>
                     	
                     		<option value="3">城市信用社</option>
                     	
                     		<option value="34">农村信用社</option>
                     	
                     		<option value="11">村镇银行</option>
                     	
                     		<option value="35">农村合作银行</option>
                     	
                     		<option value="17">花旗银行</option>
                     	
                     		<option value="12">汇丰银行(中国)</option>
                     	
                     		<option value="15">渣打银行</option>
                     	
                     		<option value="22">东亚银行</option>
                     	
                     		<option value="38">韩亚银行</option>
                     	
                     		<option value="7">恒丰银行</option>
                     	
                     		<option value="8">恒生银行</option>
                     	
                     		<option value="10">星展银行</option>
                     	
                     		<option value="43">瑞士银行(中国)有限公司</option>
                     	
                     		<option value="44">德国北德意志州银行</option>
                     	
                     		<option value="45">中德住房储蓄银行</option>
                     	
                     		<option value="19">南洋商业银行（中国）有限公司</option>
                     	
                     		<option value="46">英国巴克莱银行有限公司</option>
                     	
                     		<option value="18">苏格兰皇家银行</option>
                     	
                     		<option value="47">三井住友银行</option>
                     	
                     		<option value="48">瑞典北欧斯安银行有限公司</option>
                     	
                     		<option value="49">瑞典商业银行公共有限公司</option>
                     	
                     		<option value="50">瑞典银行有限公司</option>
                     	
                     		<option value="52">华侨银行</option>
                     	
                     		<option value="54">南充市商业银行</option>
                     	
                     		<option value="56">台湾土地银行</option>
                     	
                     		<option value="57">合作金库商业银行</option>
                     	
                     		<option value="58">第一银行</option>
                     	
                     		<option value="59">华南商业银行</option>
                     	
                     		<option value="61">上海商业银行</option>
                     	
                     		<option value="63">国泰世华商业银行</option>
                     	
                     		<option value="64">兆丰国际商业银行</option>
                     	
                     		<option value="83">玉山银行</option>
                     	
                     		<option value="89">中国信托商业银行</option>
                     	
                     		<option value="91">亚洲商业银行</option>
                     	
                     		<option value="389">江苏如东农村商业银行</option>
                     	
                     		<option value="171">福建南平农村商业银行</option>
                     	
                     		<option value="373">四川屏山农村商业银行</option>
                     	
                     		<option value="109">沧州银行</option>
                     	
                     		<option value="110">东莞银行</option>
                     	
                     		<option value="374">江苏沛县农村商业银行</option>
                     	
                     		<option value="172">福建莆田农村商业银行</option>
                     	
                     		<option value="390">江苏如皋农村商业银行股份有限公司</option>
                     	
                     		<option value="92">鞍山银行</option>
                     	
                     		<option value="93">鞍山农村商业银行</option>
                     	
                     		<option value="391">贵州仁怀茅台农村商业银行</option>
                     	
                     		<option value="173">福建上杭农村商业银行</option>
                     	
                     		<option value="375">盘锦市商业银行</option>
                     	
                     		<option value="111">丹东银行</option>
                     	
                     		<option value="112">新疆汇和银行</option>
                     	
                     		<option value="376">攀枝花市商业银行</option>
                     	
                     		<option value="174">福建三明农村商业银行</option>
                     	
                     		<option value="392">云南瑞丽南屏农村商业银行</option>
                     	
                     		<option value="94">安顺农村商业银行</option>
                     	
                     		<option value="95">意大利联合商业银行</option>
                     	
                     		<option value="393">沧州融信农村商业银行</option>
                     	
                     		<option value="175">福建石狮农村商业银行</option>
                     	
                     		<option value="377">攀枝花农村商业银行</option>
                     	
                     		<option value="113">锦州银行</option>
                     	
                     		<option value="114">洛阳银行</option>
                     	
                     		<option value="378">江苏邳州农村商业银行</option>
                     	
                     		<option value="176">福建漳州农村商业银行</option>
                     	
                     		<option value="394">日照银行</option>
                     	
                     		<option value="96">景德镇市商业银行</option>
                     	
                     		<option value="97">潍坊银行</option>
                     	
                     		<option value="395">四川大英农村商业银行</option>
                     	
                     		<option value="177">佛山农商行</option>
                     	
                     		<option value="379">青岛银行</option>
                     	
                     		<option value="115">平顶山银行</option>
                     	
                     		<option value="116">青海银行</option>
                     	
                     		<option value="380">江苏启东农村商业银行</option>
                     	
                     		<option value="178">抚顺银行</option>
                     	
                     		<option value="396">四川简阳农村商业银行</option>
                     	
                     		<option value="98">德富泰银行有限公司</option>
                     	
                     		<option value="99">保定银行</option>
                     	
                     		<option value="397">丰业银行</option>
                     	
                     		<option value="179">阜新银行</option>
                     	
                     		<option value="381">秦皇岛银行</option>
                     	
                     		<option value="117">泉州银行</option>
                     	
                     		<option value="118">新韩银行</option>
                     	
                     		<option value="382">曲靖市商业银行</option>
                     	
                     		<option value="180">阜新农村商业银行</option>
                     	
                     		<option value="398">四川武胜农村商业银行</option>
                     	
                     		<option value="100">罗马银行</option>
                     	
                     		<option value="101">广西北部湾银行</option>
                     	
                     		<option value="399">四川威远农村商业银行</option>
                     	
                     		<option value="181">四川高县农村商业银行</option>
                     	
                     		<option value="383">齐鲁银行</option>
                     	
                     		<option value="119">苏州银行</option>
                     	
                     		<option value="120">营口银行</option>
                     	
                     		<option value="384">泉州农村商业银行</option>
                     	
                     		<option value="182">广州银行</option>
                     	
                     		<option value="400">四川宣汉农村商业银行</option>
                     	
                     		<option value="102">河北银行</option>
                     	
                     		<option value="103">北京银行</option>
                     	
                     		<option value="401">四川叙永农村商业银行</option>
                     	
                     		<option value="183">广东东源农村商业银行</option>
                     	
                     		<option value="385">韩国企业银行</option>
                     	
                     		<option value="121">广东博罗农村商业银行</option>
                     	
                     		<option value="122">包商银行</option>
                     	
                     		<option value="386">祁阳村镇银行</option>
                     	
                     		<option value="184">广东高要农村商业银行</option>
                     	
                     		<option value="402">四川仪陇农村商业银行</option>
                     	
                     		<option value="104">盘古银行</option>
                     	
                     		<option value="105">法国巴黎银行</option>
                     	
                     		<option value="403">顺德农商银行</option>
                     	
                     		<option value="185">广东惠东农村商业银行</option>
                     	
                     		<option value="387">荷兰合作银行（中国）有限公司</option>
                     	
                     		<option value="123">东京三菱银行</option>
                     	
                     		<option value="124">建东银行</option>
                     	
                     		<option value="388">珠海华润银行</option>
                     	
                     		<option value="186">广东揭东农村商业银行</option>
                     	
                     		<option value="404">辽宁沈抚农村商业银行股份有限公司</option>
                     	
                     		<option value="106">美国银行</option>
                     	
                     		<option value="107">承德银行</option>
                     	
                     		<option value="405">法国兴业银行</option>
                     	
                     		<option value="187">广东揭西农村商业银行</option>
                     	
                     		<option value="125">本溪市商业银行</option>
                     	
                     		<option value="126">长安银行</option>
                     	
                     		<option value="188">广东揭阳农村商业银行</option>
                     	
                     		<option value="406">银行间市场清算所</option>
                     	
                     		<option value="108">朝阳银行</option>
                     	
                     		<option value="407">江苏泗洪农村商业银行</option>
                     	
                     		<option value="189">广东南海农村商业银行</option>
                     	
                     		<option value="127">长白山农村商业银行</option>
                     	
                     		<option value="128">长春农村商业银行</option>
                     	
                     		<option value="190">广东清远农村商业银行</option>
                     	
                     		<option value="408">江苏沭阳农村商业银行</option>
                     	
                     		<option value="409">盛京银行</option>
                     	
                     		<option value="191">广东四会农村商业银行</option>
                     	
                     		<option value="129">城市商业银行资金清算中心</option>
                     	
                     		<option value="130">重庆三峡银行</option>
                     	
                     		<option value="192">广东阳春农村商业银行</option>
                     	
                     		<option value="410">遂宁银行</option>
                     	
                     		<option value="411">上饶银行</option>
                     	
                     		<option value="193">广东阳东农村商业银行</option>
                     	
                     		<option value="131">成都农商银行</option>
                     	
                     		<option value="132">创兴银行</option>
                     	
                     		<option value="194">广东阳江农村商业银行</option>
                     	
                     		<option value="412">汕尾农村商业银行</option>
                     	
                     		<option value="413">绍兴银行</option>
                     	
                     		<option value="195">广东华兴银行</option>
                     	
                     		<option value="133">中央国债登记结算有限责任公司</option>
                     	
                     		<option value="134">中信银行（国际）</option>
                     	
                     		<option value="196">广东河源农村商业银行</option>
                     	
                     		<option value="414">沈阳农村商业银行</option>
                     	
                     		<option value="415">江苏射阳农村商业银行</option>
                     	
                     		<option value="197">桂林银行</option>
                     	
                     		<option value="135">江苏长江商业银行</option>
                     	
                     		<option value="136">华商银行</option>
                     	
                     		<option value="198">四川古蔺农村商业银行</option>
                     	
                     		<option value="416">江苏泗阳农村商业银行</option>
                     	
                     		<option value="417">石嘴山银行</option>
                     	
                     		<option value="199">广东高明农村商业银行</option>
                     	
                     		<option value="137">德国商业银行</option>
                     	
                     		<option value="138">宜宾翠屏农村商业银行</option>
                     	
                     		<option value="200">广州农村商业银行</option>
                     	
                     		<option value="418">泰安市商业银行</option>
                     	
                     		<option value="419">天津银行</option>
                     	
                     		<option value="201">甘肃银行</option>
                     	
                     		<option value="139">重庆银行</option>
                     	
                     		<option value="140">重庆农村商业银行</option>
                     	
                     		<option value="202">甘肃会宁农村商业银行</option>
                     	
                     		<option value="420">江苏太仓农村商业银行</option>
                     	
                     		<option value="421">中国进出口银行</option>
                     	
                     		<option value="203">甘肃灵台农村商业银行</option>
                     	
                     		<option value="141">长沙银行</option>
                     	
                     		<option value="142">瑞士信贷第一波士顿银行</option>
                     	
                     		<option value="204">甘肃临洮农村商业银行</option>
                     	
                     		<option value="422">通化农村商业银行</option>
                     	
                     		<option value="423">天津市北辰村镇银行</option>
                     	
                     		<option value="205">张掖农村商业银行股份有限公司</option>
                     	
                     		<option value="143">常熟农商银行</option>
                     	
                     		<option value="144">四川苍溪农村商业银行</option>
                     	
                     		<option value="206">国泰君安证券股份有限公司</option>
                     	
                     		<option value="424">天津滨海农村商业银行</option>
                     	
                     		<option value="425">铁岭银行</option>
                     	
                     		<option value="207">四川珙县农村商业银行</option>
                     	
                     		<option value="145">集友银行</option>
                     	
                     		<option value="146">浙江稠州商业银行</option>
                     	
                     		<option value="208">贵阳银行</option>
                     	
                     		<option value="426">铜仁农村商业银行</option>
                     	
                     		<option value="427">唐山市商业银行</option>
                     	
                     		<option value="209">江苏赣榆农村商业银行</option>
                     	
                     		<option value="147">长治市商业银行</option>
                     	
                     		<option value="148">江南农村商业银行</option>
                     	
                     		<option value="210">江苏高邮农村商业银行</option>
                     	
                     		<option value="428">台州银行</option>
                     	
                     		<option value="429">海口联合农商银行</option>
                     	
                     		<option value="211">贵阳农村商业银行</option>
                     	
                     		<option value="149">龙江银行</option>
                     	
                     		<option value="150">星展银行（国际）</option>
                     	
                     		<option value="212">贵州安龙农村商业银行</option>
                     	
                     		<option value="430">中国银行间外汇交易中心</option>
                     	
                     		<option value="431">大华银行</option>
                     	
                     		<option value="213">赣州银行</option>
                     	
                     		<option value="151">丹东农村商业银行</option>
                     	
                     		<option value="152">德意志银行</option>
                     	
                     		<option value="214">贵州毕节农村商业银行</option>
                     	
                     		<option value="432">乌鲁木齐市商业银行</option>
                     	
                     		<option value="433">乌海银行</option>
                     	
                     		<option value="215">贵州凯里农村商业银行</option>
                     	
                     		<option value="153">辽宁东港农村商业银行</option>
                     	
                     		<option value="154">江苏东海农村商业银行</option>
                     	
                     		<option value="216">贵州湄潭农村商业银行</option>
                     	
                     		<option value="434">华侨永亨银行（香港）</option>
                     	
                     		<option value="435">威海市商业银行</option>
                     	
                     		<option value="217">贵州平塘农村商业银行</option>
                     	
                     		<option value="155">大连银行</option>
                     	
                     		<option value="156">大连农村商业银行</option>
                     	
                     		<option value="218">贵州黔西农村商业银行股份有限公司</option>
                     	
                     		<option value="436">吴江农村商业银行</option>
                     	
                     		<option value="437">友利银行</option>
                     	
                     		<option value="219">贵州三穗农村商业银行股份有限公司</option>
                     	
                     		<option value="157">大新银行</option>
                     	
                     		<option value="158">大同市商业银行</option>
                     	
                     		<option value="220">瓮安农村商业银行</option>
                     	
                     		<option value="438">无锡农村商业银行</option>
                     	
                     		<option value="439">武威农村商业银行</option>
                     	
                     		<option value="221">贵州兴仁农村商业银行</option>
                     	
                     		<option value="159">定西农村商业银行</option>
                     	
                     		<option value="160">德阳银行</option>
                     	
                     		<option value="222">贵州兴义农村商业银行</option>
                     	
                     		<option value="440">四川兴文石海农村商业银行</option>
                     	
                     		<option value="441">温州银行</option>
                     	
                     		<option value="223">贵州独山农村商业银行</option>
                     	
                     		<option value="161">东营银行</option>
                     	
                     		<option value="162">贵州都匀农村商业银行</option>
                     	
                     		<option value="224">贵州贞丰农村商业银行</option>
                     	
                     		<option value="442">西安银行</option>
                     	
                     		<option value="443">四川西充农村商业银行</option>
                     	
                     		<option value="225">内蒙古银行</option>
                     	
                     		<option value="163">德州银行</option>
                     	
                     		<option value="164">达州市商业银行</option>
                     	
                     		<option value="226">江苏淮安农村商业银行</option>
                     	
                     		<option value="444">厦门国际银行</option>
                     	
                     		<option value="445">厦门银行</option>
                     	
                     		<option value="227">海安农村商业银行</option>
                     	
                     		<option value="165">达州农村商业银行</option>
                     	
                     		<option value="166">电子联行转换中心</option>
                     	
                     		<option value="228">湖北银行</option>
                     	
                     		<option value="446">江苏响水农村商业银行</option>
                     	
                     		<option value="447">邢台银行</option>
                     	
                     		<option value="229">河北大厂农村商业银行</option>
                     	
                     		<option value="167">凤城市城市信用社</option>
                     	
                     		<option value="168">富滇银行</option>
                     	
                     		<option value="230">河北阜城农村商业银行</option>
                     	
                     		<option value="448">广东新兴农村商业银行</option>
                     	
                     		<option value="449">江苏新沂农村商业银行</option>
                     	
                     		<option value="231">河北井陉农村商业银行</option>
                     	
                     		<option value="169">福建福州农村商业银行</option>
                     	
                     		<option value="170">福建海峡银行</option>
                     	
                     		<option value="232">河北宽城农村商业银行</option>
                     	
                     		<option value="450">西藏银行</option>
                     	
                     		<option value="451">徐州淮海农村商业银行</option>
                     	
                     		<option value="233">河北滦平农村商业银行</option>
                     	
                     		<option value="234">河北清河农村商业银行</option>
                     	
                     		<option value="452">徐州彭城农村商业银行</option>
                     	
                     		<option value="453">雅安市商业银行</option>
                     	
                     		<option value="235">河北唐山曹妃甸农村商业银行</option>
                     	
                     		<option value="236">河北唐山农村商业银行</option>
                     	
                     		<option value="454">延边农村商业银行</option>
                     	
                     		<option value="455">雅安农村商业银行</option>
                     	
                     		<option value="237">河北文安农村商业银行</option>
                     	
                     		<option value="238">河北围场农村商业银行</option>
                     	
                     		<option value="456">宜宾市商业银行</option>
                     	
                     		<option value="457">四川宜宾金江农村商业银行</option>
                     	
                     		<option value="239">河北万全农村商业银行</option>
                     	
                     		<option value="240">湖北仙桃京都村镇银行股份有限公司</option>
                     	
                     		<option value="458">吉林永吉农村商业银行</option>
                     	
                     		<option value="459">营口农村商业银行</option>
                     	
                     		<option value="241">河北献县农村商业银行</option>
                     	
                     		<option value="242">河北正定农村商业银行</option>
                     	
                     		<option value="460">营口融生农村商业银行</option>
                     	
                     		<option value="461">营口沿海银行</option>
                     	
                     		<option value="243">河北张家口宣泰农村商业银行</option>
                     	
                     		<option value="244">邯郸银行</option>
                     	
                     		<option value="462">山口银行</option>
                     	
                     		<option value="463">阳泉市商业银行</option>
                     	
                     		<option value="245">河北邢台农村商业银行</option>
                     	
                     		<option value="246">四川合江农村商业银行</option>
                     	
                     		<option value="464">四川营山农村商业银行</option>
                     	
                     		<option value="465">烟台银行</option>
                     	
                     		<option value="247">汉口银行</option>
                     	
                     		<option value="248">海口农村商业银行</option>
                     	
                     		<option value="466">玉溪市商业银行</option>
                     	
                     		<option value="467">扬州农村商业银行</option>
                     	
                     		<option value="249">葫芦岛银行</option>
                     	
                     		<option value="250">河北怀来农村商业银行</option>
                     	
                     		<option value="468">江苏扬州农村商业银行</option>
                     	
                     		<option value="469">江苏仪征农村商业银行</option>
                     	
                     		<option value="251">哈密市商业银行</option>
                     	
                     		<option value="252">海南银行股份有限公司</option>
                     	
                     		<option value="470">齐商银行</option>
                     	
                     		<option value="471">肇庆端州农村商业银行</option>
                     	
                     		<option value="253">湖南江华农村商业银行</option>
                     	
                     		<option value="254">湖南江永农村商业银行</option>
                     	
                     		<option value="472">自贡市商业银行</option>
                     	
                     		<option value="473">珠海农村商业银行</option>
                     	
                     		<option value="255">湖南双牌农村商业银行</option>
                     	
                     		<option value="256">哈尔滨银行</option>
                     	
                     		<option value="474">四川长宁竹海农村商业银行</option>
                     	
                     		<option value="475">张家口市商业银行</option>
                     	
                     		<option value="257">华融湘江银行</option>
                     	
                     		<option value="258">衡水市商业银行</option>
                     	
                     		<option value="476">贵州织金农村商业银行</option>
                     	
                     		<option value="477">浙江泰隆商业银行</option>
                     	
                     		<option value="259">河北衡水农村商业银行</option>
                     	
                     		<option value="260">贵州花溪农村商业银行</option>
                     	
                     		<option value="478">张家港农村商业银行</option>
                     	
                     		<option value="479">中山农村商业银行</option>
                     	
                     		<option value="261">杭州银行</option>
                     	
                     		<option value="262">湖州银行</option>
                     	
                     		<option value="480">四川梓潼农村商业银行</option>
                     	
                     		<option value="481">中原银行</option>
                     	
                     		<option value="263">惠州农村商业银行</option>
                     	
                     		<option value="264">荷兰商业银行</option>
                     	
                     		<option value="482">贵州银行</option>
                     	
                     		<option value="483">贵州紫云农村商业银行</option>
                     	
                     		<option value="265">四川江安农村商业银行</option>
                     	
                     		<option value="266">金华银行</option>
                     	
                     		<option value="484">郑州银行</option>
                     	
                     		<option value="485">枣庄银行</option>
                     	
                     		<option value="267">江苏金湖农村商业银行</option>
                     	
                     		<option value="268">晋城银行</option>
                     	
                     		<option value="486">江苏盐城农村商业银行</option>
                     	
                     		<option value="487">嘉峪关农村商业银行股份有限公司</option>
                     	
                     		<option value="269">九江银行</option>
                     	
                     		<option value="270">江苏靖江农村商业银行</option>
                     	
                     		<option value="271">吉林安图农村商业银行</option>
                     	
                     		<option value="272">吉林银行</option>
                     	
                     		<option value="273">吉林敦化农村商业银行</option>
                     	
                     		<option value="274">吉林环城农村商业银行</option>
                     	
                     		<option value="275">吉林蛟河农村商业银行</option>
                     	
                     		<option value="276">吉林九台农村商业银行</option>
                     	
                     		<option value="277">四川筠连农村商业银行</option>
                     	
                     		<option value="278">吉林舒兰农村商业银行</option>
                     	
                     		<option value="279">吉林双阳农村商业银行</option>
                     	
                     		<option value="280">吉林榆树农村商业银行</option>
                     	
                     		<option value="281">江门融和农村商业银行</option>
                     	
                     		<option value="282">江门新会农村商业银行</option>
                     	
                     		<option value="283">济宁银行</option>
                     	
                     		<option value="284">摩根大通银行</option>
                     	
                     		<option value="285">酒泉农村商业银行</option>
                     	
                     		<option value="286">江苏江阴农村商业银行</option>
                     	
                     		<option value="287">晋商银行</option>
                     	
                     		<option value="288">江苏银行</option>
                     	
                     		<option value="289">江苏滨海农村商业银行</option>
                     	
                     		<option value="290">江苏宝应农村商业银行</option>
                     	
                     		<option value="291">江苏大丰农村商业银行</option>
                     	
                     		<option value="292">江苏东台农村商业银行</option>
                     	
                     		<option value="293">江苏丹阳农村商业银行</option>
                     	
                     		<option value="294">江苏阜宁农村商业银行</option>
                     	
                     		<option value="295">江苏丰县农村商业银行</option>
                     	
                     		<option value="296">江苏高淳农村商业银行</option>
                     	
                     		<option value="297">江苏灌云农村商业银行</option>
                     	
                     		<option value="298">江苏海安农村商业银行</option>
                     	
                     		<option value="299">江苏海门农村商业银行</option>
                     	
                     		<option value="300">江苏盐城黄海农村商业银行</option>
                     	
                     		<option value="301">江苏洪泽农村商业银行</option>
                     	
                     		<option value="302">江苏江都农村商业银行</option>
                     	
                     		<option value="303">江苏建湖农村商业银行</option>
                     	
                     		<option value="304">江苏句容农村商业银行</option>
                     	
                     		<option value="305">江苏姜堰农村商业银行</option>
                     	
                     		<option value="306">江苏睢宁农村商业银行</option>
                     	
                     		<option value="307">江苏泰兴农村商业银行</option>
                     	
                     		<option value="308">江苏泰州农村商业银行</option>
                     	
                     		<option value="309">江苏兴化农村商业银行</option>
                     	
                     		<option value="310">江苏盱眙农村商业银行</option>
                     	
                     		<option value="311">江苏宜兴农村商业银行</option>
                     	
                     		<option value="312">江苏扬中农村商业银行</option>
                     	
                     		<option value="313">江苏镇江农村商业银行</option>
                     	
                     		<option value="314">嘉兴银行</option>
                     	
                     		<option value="315">吉林靖宇农村商业银行</option>
                     	
                     		<option value="316">晋中银行</option>
                     	
                     		<option value="317">焦作市商业银行</option>
                     	
                     		<option value="318">江苏紫金农村商业银行</option>
                     	
                     		<option value="319">锦州天桥农村商业银行</option>
                     	
                     		<option value="320">泰华农民银行</option>
                     	
                     		<option value="321">比利时联合银行</option>
                     	
                     		<option value="322">韩国产业银行</option>
                     	
                     		<option value="323">宽甸县城市信用社</option>
                     	
                     		<option value="324">奥地利中央合作银行</option>
                     	
                     		<option value="325">昆仑银行</option>
                     	
                     		<option value="326">库尔勒市商业银行</option>
                     	
                     		<option value="327">昆山农村商业银行</option>
                     	
                     		<option value="328">廊坊银行</option>
                     	
                     		<option value="329">贵州荔波农村商业银行</option>
                     	
                     		<option value="330">法国里昂信贷银行</option>
                     	
                     		<option value="331">辽阳辽东农村商业银行</option>
                     	
                     		<option value="332">林州德丰村镇银行</option>
                     	
                     		<option value="333">四川罗江农村商业银行</option>
                     	
                     		<option value="334">广东龙门农村商业银行</option>
                     	
                     		<option value="335">辽宁桓仁农村商业银行</option>
                     	
                     		<option value="336">辽宁兴城农村商业银行股份有限公司</option>
                     	
                     		<option value="337">江苏溧水农村商业银行</option>
                     	
                     		<option value="338">莱商银行</option>
                     	
                     		<option value="339">临商银行</option>
                     	
                     		<option value="340">乐山市商业银行</option>
                     	
                     		<option value="341">江苏涟水农村商业银行</option>
                     	
                     		<option value="342">凉山州商业银行</option>
                     	
                     		<option value="343">泸州市商业银行</option>
                     	
                     		<option value="344">泸州江阳农村商业银行</option>
                     	
                     		<option value="345">辽阳银行</option>
                     	
                     		<option value="346">连云港东方农村商业银行</option>
                     	
                     		<option value="347">辽源农村商业银行</option>
                     	
                     		<option value="348">柳州银行</option>
                     	
                     		<option value="349">泸州龙马潭农村商业银行</option>
                     	
                     		<option value="350">兰州银行</option>
                     	
                     		<option value="352">首都银行及信托公司</option>
                     	
                     		<option value="353">瑞穗银行</option>
                     	
                     		<option value="354">江苏民丰农村商业银行</option>
                     	
                     		<option value="355">蒙特利尔银行</option>
                     	
                     		<option value="356">珠海南通银行</option>
                     	
                     		<option value="357">浙江民泰商业银行</option>
                     	
                     		<option value="358">绵阳市商业银行</option>
                     	
                     		<option value="359">法国外贸银行</option>
                     	
                     		<option value="360">宁波银行</option>
                     	
                     		<option value="361">宁波通商银行</option>
                     	
                     		<option value="362">南昌银行</option>
                     	
                     		<option value="363">宁波东海银行</option>
                     	
                     		<option value="364">南京银行</option>
                     	
                     		<option value="365">河北南皮农村商业银行</option>
                     	
                     		<option value="366">江苏南通农村商业银行</option>
                     	
                     		<option value="367">宁夏银行</option>
                     	
                     		<option value="368">宜宾南溪农村商业银行</option>
                     	
                     		<option value="369">广东南粤银行</option>
                     	
                     		<option value="370">鄂尔多斯银行</option>
                     	
                     		<option value="371">中国人民银行会计营业部门</option>
                     	
                     		<option value="372">中国人民银行公开市场操作室</option>
                     	
                     </select>
                    <input id="BankName" name="FinancialAccountInfo.BankName" type="hidden" value="" />
                </span>
                <span class="field-validation-valid" data-valmsg-for="FinancialAccountInfo.BankName" data-valmsg-replace="true"></span>
            </div>
        </div>
        <div class="rowItem" style="">
            <span class="col_1"><i class="ui_important">*</i>开户银行省份：</span>
            <div class="col_1_box">
                <span class="select-w250">
                	
                    <!-- @Html.DropDownListFor(m => m.ProvinceID, null, null, new {id = "BankProvinceID"})-->
                    <select data-val="true" data-val-number="字段 ProvinceID 必须是一个数字。" id="BankProvinceID" name="FinancialAccountInfo.ProvinceID">
                    	<option value="-1">请选择省份</option>
                    	
                     		<option value="416" >安徽</option>
                     	
                     		<option value="447" >澳门</option>
                     	
                     		<option value="423" selected='selected'>北京市</option>
                     	
                     		<option value="425" >重庆市</option>
                     	
                     		<option value="432" >福建</option>
                     	
                     		<option value="438" >甘肃</option>
                     	
                     		<option value="437" >广东</option>
                     	
                     		<option value="442" >广西</option>
                     	
                     		<option value="439" >贵州</option>
                     	
                     		<option value="415" >海南</option>
                     	
                     		<option value="426" >河北</option>
                     	
                     		<option value="431" >黑龙江</option>
                     	
                     		<option value="434" >河南</option>
                     	
                     		<option value="435" >湖北</option>
                     	
                     		<option value="436" >湖南</option>
                     	
                     		<option value="419" >江苏</option>
                     	
                     		<option value="433" >江西</option>
                     	
                     		<option value="430" >吉林</option>
                     	
                     		<option value="429" >辽宁</option>
                     	
                     		<option value="446" >内蒙古</option>
                     	
                     		<option value="444" >宁夏</option>
                     	
                     		<option value="440" >青海</option>
                     	
                     		<option value="418" >山东</option>
                     	
                     		<option value="422" >上海市</option>
                     	
                     		<option value="427" >山西</option>
                     	
                     		<option value="441" >陕西</option>
                     	
                     		<option value="420" >四川</option>
                     	
                     		<option value="428" >台湾</option>
                     	
                     		<option value="424" >天津市</option>
                     	
                     		<option value="448" >香港</option>
                     	
                     		<option value="443" >西藏</option>
                     	
                     		<option value="445" >新疆</option>
                     	
                     		<option value="421" >云南</option>
                     	
                     		<option value="417" >浙江</option>
                     	
                    </select>
                    <input id="FinancialAccountInfo_BankProvinceName" name="FinancialAccountInfo.ProvinceName" type="hidden" value="null" />
                </span>
                <span class="field-validation-valid" data-valmsg-for="FinancialAccountInfo.ProvinceID" data-valmsg-replace="true"></span>
            </div>
        </div>
        <div class="rowItem" style="">
            <span class="col_1"><i class="ui_important">*</i>开户银行城市：</span>
            <div class="col_1_box">
                <span class="select-w250">
                	
                    <!-- @Html.DropDownListFor(m => m.CityID, null, null, new { id = "BankCityID" }) -->
                    <select data-val="true" data-val-number="字段 CityID 必须是一个数字。" data-val-required="CityID 字段是必需的。" id="BankCityID" name="FinancialAccountInfo.CityID">
                    
                     		<option value="48" selected='selected'>北京</option>
                     	
                    </select>
                    <input id="FinancialAccountInfo_BankCityName" name="FinancialAccountInfo.CityName" type="hidden" value="null" />
                </span>
                <span class="field-validation-valid" data-valmsg-for="FinancialAccountInfo.CityName" data-valmsg-replace="true"></span>
            </div>
        </div>
        <div class="rowItem">
            <span class="col_1"><i class="ui_important">*</i>开户银行支行：</span>
            <div class="col_1_box">
                	<input class="input-w200" data-val="true" data-val-length="输入过长" data-val-length-max="50" id="SubbranchName" maxlength="50" 
                		name="FinancialAccountInfo.SubbranchName" type="text" value="" />
	                <input id="BankBranchID" name="FinancialAccountInfo.BankBranchID" type="hidden" value="0" />
                <span class="field-validation-valid" data-valmsg-for="SubbranchName" data-valmsg-replace="true"></span>
            </div>
        </div>
        <input id="SkipBankAccountValidate" name="FinancialAccountInfo.SkipBankAccountValidate" type="hidden" value="" />

        
        <div class="rowItem">
            <span class="col_1"><i class="ui_important">*</i>开户银行账号：</span>
            <div class="col_1_box">
                <input class="input-w200" data-val="true" data-val-length="输入过长" data-val-length-max="50" id="FinancialAccountInfo_BankAccount" maxlength="50" name="FinancialAccountInfo.BankAccount" type="text" value="" />
                <span class="field-validation-valid" data-valmsg-for="FinancialAccountInfo.BankAccount" data-valmsg-replace="true"></span>
            </div>
        </div>
        <div class="rowItem">
            <span class="col_1"><i class="ui_important">*</i>再次确认账号：</span>
            <div class="col_1_box">
                <input class="input-w200" data-val="true" data-val-length="输入过长" data-val-length-max="50" id="FinancialAccountInfo_RepBankAccount" maxlength="50" name="FinancialAccountInfo.RepBankAccount" type="text" value="" />
                <span class="field-validation-valid" data-valmsg-for="FinancialAccountInfo.RepBankAccount" data-valmsg-replace="true"></span>
            </div>
        </div>
        

        <div class="rowItem">
            <span class="col_1">账号公私类型：</span>
            <div class="col_1_box">
            	
                <input checked='checked' data-val="true" data-val-required="EnumBankAccountType 字段是必需的。" 
                	id="FinancialAccountInfo_EnumBankAccountType" name="FinancialAccountInfo.EnumBankAccountType" type="radio" value="2" /> &nbsp;对公
                <input  class="ui_left10" 
                	id="FinancialAccountInfo_EnumBankAccountType" name="FinancialAccountInfo.EnumBankAccountType" type="radio" value="1" /> &nbsp;对私
                <span class="field-validation-valid" data-valmsg-for="FinancialAccountInfo.EnumBankAccountType" data-valmsg-replace="true"></span>
            </div>
        </div>
        <div class="rowItem">
            <span class="col_1"><i class="ui_important">*</i>银行开户姓名：</span>
            <div class="col_1_box">
                <input class="input-w200" data-val="true" data-val-length="输入过长" data-val-length-max="50" id="FinancialAccountInfo_BankAccountName" maxlength="50" name="FinancialAccountInfo.BankAccountName" type="text" value="" />
                <span class="field-validation-valid" data-valmsg-for="FinancialAccountInfo.BankAccountName" data-valmsg-replace="true"></span>
            </div>
        </div>
    </div>
    <div class="col_1_box390 accountInfo displayN" id="Paypal">
        <div class="rowItem">
            <span class="col_1"><i class="ui_important">*</i>账户姓名：</span>
            <div class="col_1_box">
                <input class="input-w200" id="FinancialAccountInfo_PaypalUserName" maxlength="128" name="FinancialAccountInfo.PaypalUserName" type="text" value="" />
                <span class="field-validation-valid" data-valmsg-for="FinancialAccountInfo.PaypalUserName" data-valmsg-replace="true"></span>
            </div>
        </div>
        <div class="rowItem">
            <span class="col_1"><i class="ui_important">*</i>支付账号：</span>
            <div class="col_1_box">
                <input class="input-w200" id="FinancialAccountInfo_PaypalAccount" maxlength="128" name="FinancialAccountInfo.PaypalAccount" type="text" value="" />
                <span class="field-validation-valid" data-valmsg-for="FinancialAccountInfo.PaypalAccount" data-valmsg-replace="true"></span>
            </div>
        </div>
        <div class="rowItem">
            <span class="col_1">账号类型：</span>
            <div class="col_1_box">
				
                <input checked='checked' data-val="true" data-val-required="EnumPaypalAccountAttribution 字段是必需的。" 
                	id="premierAccount" name="FinancialAccountInfo.EnumPaypalAccountAttribution" type="radio" value="1" />&nbsp;高级账号
                <input  class="ui_left10" 
                	id="businessAccount" name="FinancialAccountInfo.EnumPaypalAccountAttribution" type="radio" value="2BusinessAccount" />&nbsp;企业账号
                <span class="field-validation-valid" data-valmsg-for="FinancialAccountInfo.EnumPaypalAccountAttribution" data-valmsg-replace="true"></span>
            </div>
        </div>
    </div>

    <div class="rowItem">
        <span class="col_1">是否支持当面付：</span>
        <div class="col_1_box">
            <input  data-val="true" data-val-required="IsPersonallyPay 字段是必需的。" 
            	id="invoiceNotNeeded" name="FinancialAccountInfo.IsPersonallyPay" type="radio" value="1" />&nbsp;支持
            <input checked='checked' class="ui_left10" 
            	id="invoiceNeeded" name="FinancialAccountInfo.IsPersonallyPay" type="radio" value="0" />&nbsp;不支持
            <i class="ui_question" style="margin-left: 5px;" id="IsPersonallyPayHelper" data-tip-target="#IsPersonallyPayHelperContent">?</i>
        </div>
    </div>


<div>
    <div id="IsPersonallyPayHelperContent" class="tip_questionInfo displayN">
        当面付是途家推出的一款便捷收款方式，房客入住时，可以将剩余房款很方便的打入您的钱箱中，您可以随时进行提现。
    </div>

    <div id="SettlementPhoneHelperContent" class="tip_questionInfo displayN">
        与途家核对结算相关问题的电话。
    </div>
</div>

<script>
    $(function () {
        //附加jquery的验证方法
        (function () {
            (function ($) {
                $.validator.addMethod("requireif", function (value, element, params) {
                    if ($('[name="' + params["property"] + '"]').attr("type") == "radio") {
                        var Prop = $(':radio[name="' + params["property"] + '"]:checked');
                    } else {
                        var Prop = $('#' + params["property"]);
                    }

                    if (Prop.val() != params['propertyvalue']) {

                        return true;
                    } else {
                        var isv = true;
                        if (element.nodeName.toLowerCase() == "select") {
                            isv = $.trim(element.value) != 0
                        }
                        return $.validator.methods.required.call(this, $.trim(element.value), element) && isv && $.trim(element.value) != "";
                    }
                    return true;
                });
                $.validator.unobtrusive.adapters.add("requireif", ['property', 'propertyvalue'], function (options) {
                    options.rules['requireif'] = options.params;
                    if (options.message) {
                        options.messages['requireif'] = options.message;
                    }
                });
            }(jQuery));
            (function ($) {
                $.validator.addMethod("compareif", function (value, element, params) {
                    var otherProp = $('#' + params["otherproperty"])

                    if ($('[name="' + params["property"] + '"]').attr("type") == "radio") {
                        var Prop = $(':radio[name="' + params["property"] + '"]:checked')
                    } else {
                        var Prop = $('#' + params["property"])
                    }

                    if (Prop.val() != params['propertyvalue']) {

                        return true;
                    } else {
                        return (otherProp.val() == value);
                    }
                });
                $.validator.unobtrusive.adapters.add("compareif", ['property', 'propertyvalue', 'otherproperty'], function (options) {
                    options.rules['compareif'] = options.params;
                    if (options.message) {
                        options.messages['compareif'] = options.message;
                    }
                });
            }(jQuery));
            (function ($) {
                $.validator.addMethod("bankaccountif", function (value, element, params) {
                    if ($('[name="' + params["property"] + '"]').attr("type") == "radio") {
                        var Prop = $(':radio[name="' + params["property"] + '"]:checked')
                    } else {
                        var Prop = $('#' + params["property"])
                    }

                    if (Prop.val() != params['propertyvalue']) {

                        return true;
                    } else {
                        return $.validator.methods.number.call(this, element.value, element) && element.value.length > 8;
                    }
                    return true;
                });
                $.validator.unobtrusive.adapters.add("bankaccountif", ['property', 'propertyvalue'], function (options) {
                    options.rules['bankaccountif'] = options.params;
                    if (options.message) {
                        options.messages['bankaccountif'] = options.message;
                    }
                });
            }(jQuery));
        })();

        //提示信息
        $(".ui_question, .ui_question_top").each(function () {
            var target = $(this).data("tip-target");
            $(this).powerFloat({
                eventType: "hover",
                hoverHold: false,
                position: "6-8",
                target: target,
                reverseSharp: true
            });
        });

        //账号信息从混淆文字切到编辑状态
        $(".showEditPanel").click(function () {
            var editPanel = $(this).data("edit-panel");
            $(editPanel).show();

            var concealedPanel = $(this).data("concealed-panel");
            $(concealedPanel).hide();

            $("#SkipBankAccountValidate").val("false");
        });

        //账号信息从编辑状态切回混淆文字
        $(".cancelEdit").click(function () {
            var editPanel = $(this).data("edit-panel");
            $(editPanel).hide();

            var concealedPanel = $(this).data("concealed-panel");
            $(concealedPanel).show();

            $("#SkipBankAccountValidate").val("true");
        });

        //账户类型变化
        function accountTypeChange() {
            var accountType = $("input[name='FinancialAccountInfo.EnumAccountType']:checked").val();
            var accountInfoDivs = $(".accountInfo");
            accountInfoDivs.hide();
            accountInfoDivs.find("input,select").attr("disabled", "disabled");
            accountInfoDivs.find(":radio").removeAttr("disabled");
            $("#" + accountType).find("input,select").removeAttr("disabled");
            $("#" + accountType).show();
        };

        //是否需要发票选项变化
        function needInvoiceChange() {
            var idPrefix = "#FinancialAccountInfo_InvoiceSetting_";
            if ($("input[name='FinancialAccountInfo.InvoiceSetting.IsNeedInvoice']:checked").val() == "True") {
                $("#InvoiceInfo").show();
            } else {
                $("#InvoiceInfo").hide();
                $.each(["InvoiceTitle", "Receiver", "InvoiceAddress", "InvoiceTel"], function (i, n) {
                    $(idPrefix + n).removeAttr("data-val-required");
                });
            }
        }

        $("input[name='FinancialAccountInfo.EnumAccountType']").click(accountTypeChange);
        accountTypeChange();

        $("input[name='FinancialAccountInfo.InvoiceSetting.IsNeedInvoice']").click(needInvoiceChange);
        needInvoiceChange();
        //发票验证
        (function () {
            var isNeedInvoiceInputName = 'FinancialAccountInfo.InvoiceSetting.IsNeedInvoice';
            if (!$('#mainForm').data('validator')) return;

            var settings = $('#mainForm').data('validator').settings;
            settings.ignore = ".ignore";

            settings.rules.InvoiceTitle = {};
            settings.rules.Receiver = {};
            settings.rules.InvoiceAddress = {};
            settings.rules.InvoiceTel = {};
            settings.messages.InvoiceTitle = {};
            settings.messages.Receiver = {};
            settings.messages.InvoiceAddress = {};
            settings.messages.InvoiceTel = {};

            settings.rules.InvoiceTitle.required = function () {
                return ($("input[name=" + isNeedInvoiceInputName + "]:checked").val() == "true");
            };
            settings.messages.InvoiceTitle.required = "请输入发票抬头";
            settings.rules.Receiver.required = function () {
                return ($("input[name=" + isNeedInvoiceInputName + "]:checked").val() == "true");
            };
            settings.messages.Receiver.required = "请输入收件人";

            settings.rules.InvoiceAddress.required = function () {
                return ($("input[name=" + isNeedInvoiceInputName + "]:checked").val() == "true");
            };
            settings.messages.InvoiceAddress.required = "请输入收件地址";


            settings.rules.InvoiceTel.required = function () {
                return ($("input[name=" + isNeedInvoiceInputName + "]:checked").val() == "true");
            };
            settings.messages.InvoiceTel.required = "请输入联系电话";
        })();

        var provinceSelect = $("#BankProvinceID").data("selectinput");
        if (provinceSelect) {
            provinceSelect.change(function () {
                loadCitiesOfProvince($("#BankProvinceID").val());

                if ($("#BankProvinceID").val() == "0")
                    $("#BankProvinceName").val("");
                else
                    $("#BankProvinceName").val($("#BankProvinceID").find("option:selected").text());
            });
        }

        var bankSelect = $("#BankID").data("selectinput");
        if (bankSelect) {
            bankSelect.change(function () {
                if ($("#BankID").val() == "0")
                    $("#BankName").val("");
                else
                    $("#BankName").val($("#BankID").find("option:selected").text());
                //loadBankBranch();
                clearBankBranch();
            });
        }

        var citySelect = $("#BankCityID").data("selectinput");
        if (citySelect) {
            citySelect.change(function () {
                if ($("#BankCityID").val() == "0") {
                    $("#BankCityName").val("");
                } else {
                    $("#BankCityName").val($("#BankCityID").find("option:selected").text());
                }
                //loadBankBranch();
                clearBankBranch();
            });
        }

        /* TODO: 省份城市的获取需确定是否用原有的city.js */
        //联动加载所选省份的城市
        function loadCitiesOfProvince(provinceId) {
            var url = '/merchant-web/Stores/getCitiesOfProvince';
            $.getJSON(url, { 'provinceId': provinceId}, function (data) {
                $("#BankCityName").val("");
                $("#BankCityID").html("");
                var cityidvalue = "";
                $.each(data, function (i, item) {
                    if (item.cityId != "") {
                        $("<option value='" + item.cityId + "'>" + item.name + "</option>").appendTo($("#BankCityID"));
                    } else {
                        $("<option value='" + "-1" + "'>"+item.name+"</option>").appendTo($("#BankCityID"));
                    }
                    if (i < 2) {
                        cityidvalue = item.name;
                    }
                });
                if (data.length == 2) {
                    setTimeout(function () {
                        $("#BankCityID").val(cityidvalue);
                        $("#BankCityID").data("selectinput").repaint();
                        //loadBankBranch();
                        clearBankBranch();
                    }, 1);
                    //$("#BankCityName").val(cityidvalue);
                } else {
                    $("#BankCityID").data("selectinput").repaint();
                    //loadBankBranch();
                    clearBankBranch();
                }
            });
        };

        function clearBankBranch() {
            $("#SubbranchName").val("");
            $("#BankBranchID").val(0);
        }
    });
</script>
        

    <script>
        $(function () {
            var cache = {};
            $("#SubbranchName").autocomplete({
                minLength: 0,
                source: function (request, response) {
                    request = { term: request.term, cId: $("#BankCityID").val(), bId: $("#BankID").val() };
                    var term = request.term + '-' + request.cId + '-' + request.bId;
                    if (term in cache) {
                        response(cache[term]);
                        return;
                    }
                    $.getJSON(BaseURL+"/Stores/querybankbranches", request, function (data) {
                    	//alert(JSON.stringify(data));
                        cache[term] = data;
                        response(data);
                    });
                },
                select: function (event, ui) {
                    $(this).val(ui.item.bankName);
                    return false;
                },
                response: function (event, ui) {
                },
                messages: {
                    noResults: '',
                    results: function () { }
                }

            }).each(function (i, n) {
                $(n).data("ui-autocomplete")._renderItem = function (ul, item) {
                    return $("<li>")
                        .append("<a data-id='" + item.bankId + "'>" + item.bankName + "</a>")
                        .appendTo(ul);
                };
            });

            $(".ui-autocomplete li>a").live("click", function () {
                var branchId = $(this).data("id");
                $("#BankBranchID").val(branchId);
            });
        });
    </script>

       </div>
    
     













	
	<link rel="stylesheet" type="text/css" href="//staticfile.tujia.com/Common/Uploadify/uploadify.css" />
	<script src="//staticfile.tujia.com/Common/Uploadify/swfobject.js" type="text/javascript"></script>
	<script src="//staticfile.tujia.com/Common/Uploadify/jquery.uploadify.v2.1.4.js" type="text/javascript"></script>

    <script type="text/javascript">
        $(function () {
            var isLowVersionIE = $.browser.msie && parseInt($.browser.version) < 9;
            $.each(["uploadIDCard1", "uploadIDCard2", "uploadBusinessCert1"], function (i, controlID) {
                var container = $("#photo-" + controlID);
                $("#" + controlID).uploadify({
                    'uploader': '../uploadify.cn.swf',
                    'script': '/merchant-web/file/uploads',
                    'method': 'POST',
                    'scriptAccess': 'always',
                    'cancelImg': '//staticfile.tujia.com/Common/Uploadify/cancel.png',
                    'folder': 'upload',
                    'queueID': 'fileQueue',
                    'sizeLimit': 2097152, //2M
                    'fileDesc': "jpg/png/gif Files",
                    'fileExt': '*.jpg; *.png; *.gif',
                    'buttonImg': '//staticfile.tujia.com'+'/Landlord/Images/' + controlID + '.png',
                    'auto': true,
                    'multi': false,
                    'queueSizeLimit': 1,
                    'onQueueFull': function () {
                        alert("单次最多上传1张照片, 某些图片不会上传");
                        return false;
                    },
                    'onError': function (a, b, c, d) {
                        if (d.status == 404)
                            alert('不能发现上传处理程序');
                        else if (d.type === "File Size")
                            alert('文件大小不能超过2M');
                        else
                            alert('错误 ' + d.type + ": " + d.info);
                    },
                    'onComplete': function (event, id, fileObj, response, data) {
                        var responseObj = $.parseJSON(response);
                        var responseData = responseObj[0];
                        if (responseData.result != 1) {
                            alert(responseData.remark);
                        } else {
                            container.data("file-id", responseData.id);
                            var imageUrl = BaseURL+"/file/get?id=" + responseData.id;
                            setTimeout(function () {
                                if (isLowVersionIE) {
                                    container.empty().append("<img src='"+imageUrl+ "'>");
                                } else {
                                    container.css({ "background-image": "url('" + imageUrl + "')" });
                                }
                            }, 800);
                        }
                    },
                    'onOpen': function (event, queueId, fileObj) {
                        //var picCount = that._recountPictures();
                        //var total = picCount;
                        //if (total >= 30) {
                        //    $("#photoUploadPanel").uploadifyCancel(queueId);
                        //}
                    }
                });
            });

            function refreshQualificationFileSection() {
                if ($("[name='QualificationInfo.EnumQualificationFileType']:checked").val() == "IDCard") {
                    $(".businessCertPart").hide();
                    $(".idCardPart").show();
                } else {
                    $(".businessCertPart").show();
                    $(".idCardPart").hide();
                }
            }

            $(":radio[name='QualificationInfo.EnumQualificationFileType']").click(refreshQualificationFileSection);
            refreshQualificationFileSection();
            //回显已上传的图片
            setTimeout(function () {
                var crmImageRoot = BaseURL+'/file/get?id=';
                var fileIds = $.parseJSON($("#QualificationFileIDsJson").val());
                var showImage = function (controlID, fileId) {
                    fileId = fileId.replace("'", "");
                    var container = $("#photo-" + controlID);
                    if (isLowVersionIE) {
                        container.empty().append("<img src='" + crmImageRoot + fileId + "'>");
                    } else {
                        container.css({ "background-image": "url('" + crmImageRoot + fileId + "')" });
                    }
                    container.data("file-id", fileId);
                    container.find(".btn-delete").show();
                    container.find("#" + controlID + "Uploader").css({ "visibility": "hidden" });
                }
                if ($("[name='QualificationInfo.EnumQualificationFileType']:checked").val() == "IDCard") {
                    if (fileIds != null && fileIds.length > 0) {
                        for (var i = 0; i < fileIds.length && i < 2; i++) {
                            showImage("uploadIDCard" + (i + 1), fileIds[i]);
                        }
                    }
                } else {
                    if (fileIds != null && fileIds.length >= 1) {
                        showImage("uploadBusinessCert1", fileIds[0]);
                    }
                }
            }, 500);
        });
    </script>

    <script>
        //验证资质信息
        function validateQualificationFiles() {
            var result = true;
            var idList = [];
            $("#businessCertValidationMsg, #idCardValidationMsg, #businessCertPhotoValidationMsg, #idCardPhotoValidationMsg").hide();
            if ($("[name='QualificationInfo.EnumQualificationFileType']:checked").val() == "IDCard") {
                if (!(/^(([0-9]{17}[0-9Xx]{1})|([0-9]{15}))$/.test($("#IDCardNumber").val()))) {
                    $("#idCardValidationMsg").show();
                    result = false;
                }

                $(".idCardPart .upload-item").each(function () {
                    var fileId = $(this).data("file-id");
                    if (fileId && parseInt(fileId)> 0) {
                        idList.push(fileId);
                    }
                });
                if (idList.length < 2) {
                    $("#idCardPhotoValidationMsg").show();
                    result = false;
                }
            } else {
                if ($("#BusinessCertificationNumber").val().length == 0) {
                    $("#businessCertValidationMsg").show();
                    result = false;
                }

                $(".businessCertPart .upload-item").each(function () {
                    var fileId = $(this).data("file-id");
                    if (fileId && parseInt(fileId) > 0) {
                        idList.push(fileId);
                    }
                });
                if (idList.length < 1) {
                    $("#businessCertPhotoValidationMsg").show();
                    result = false;
                }
            }

            $("#QualificationFileIDsJson").val(JSON.stringify(idList));
            return result;
        }
    </script>

    <style>
        .upload-item {
            background-position: center;
            background-repeat: no-repeat;
            background-size: 100% auto;
        }
            .upload-item > img {
                width: 100%;
                height: 100%;
            }
    </style>
   
    <div class="detailTitle">资质信息</div>
    <div class="detailWraper">
        <div class="rowItem">
            <span class="col_1"><i class="ui_important">*</i>证件类型：</span>
            
			<input id="QualificationFileIDsJson" name="QualificationInfo.QualificationFileIDsJson" type="hidden" value="" />
			
            <div class="col_1_box ">
                <input checked="checked" data-val="true" data-val-required="EnumQualificationFileType 字段是必需的。" id="QualificationInfo_EnumQualificationFileType" name="QualificationInfo.EnumQualificationFileType" type="radio" value="BusinessCertification" />&nbsp;营业执照
                <input class="ui_left10" id="QualificationInfo_EnumQualificationFileType" name="QualificationInfo.EnumQualificationFileType" type="radio" value="IDCard" />&nbsp;身份证
            </div>
        </div>
        <div class="grayBox">
            <div class="rowItem businessCertPart">
                <span class="col_1"><i class="ui_important">*</i>注册号：</span>
                <div class="col_1_box">
	   				
	                <input class="input-w200" id="BusinessCertificationNumber" maxlength="50" name="QualificationInfo.BusinessCertificationNumber" type="text" value="" />
	                <span id="businessCertValidationMsg" class="field-validation-error" style="display: none"><span>请输入营业执照注册号</span></span>
	                <span class="field-validation-valid" data-valmsg-for="QualificationInfo.BusinessCertificationNumber" data-valmsg-replace="true"></span>
                </div>
            </div>
            <div class="rowItem businessCertPart">
                <span class="col_1"><i class="ui_important">*</i>证照上传：</span>
                <div class="col_1_box">
                    <span class="text-muted">请按照示例上传您的营业执照，以便我们进行核实。</span>
                    <span id="businessCertPhotoValidationMsg" class="field-validation-error displayN"><span>请上传您的营业执照</span></span>

                    <div class="certificate-upload clearFix">
                        <div class="upload">
                            <div class="btn-upload">
                                <div id="uploadBusinessCert1"></div>
                            </div>

                            <div class="upload-item" id="photo-uploadBusinessCert1">
                            </div>
                        </div>
                        <div class="example">
                            <div class="title">示例</div>
                            <img src="//staticfile.tujia.com/Landlord/Images/certificate02.jpg" >
                        </div>
                    </div>
                    <p class="text-muted">仅支持JPG、PNG格式的图片，大小不超过2MB，图片文字清晰，无水印。</p>
                </div>
            </div>
            <div class="rowItem idCardPart">
                <span class="col_1"><i class="ui_important">*</i>身份证号：</span>
                <div class="col_1_box">
       				
                    <input class="input-w200" id="IDCardNumber" maxlength="50" name="QualificationInfo.IDCardNumber" type="text" value="" /> 
                    <span id="idCardValidationMsg" class="field-validation-error" style="display: none"><span>请输入正确的负责人身份证号</span></span>
                    <span class="field-validation-valid" data-valmsg-for="QualificationInfo.IDCardNumber" data-valmsg-replace="true"></span>
                </div>
            </div>
            <div class="rowItem idCardPart">
                <span class="col_1"><i class="ui_important">*</i>证照上传：</span>
                <div class="col_1_box">
                    <span class="text-muted">请按照示例上传您的身份证，以便我们进行核实。</span>
                    <span id="idCardPhotoValidationMsg" class="field-validation-error displayN"><span>请上传负责人身份证照片</span></span>

                    <div class="certificate-upload clearFix">
                        <div class="upload">
                            <div class="btn-upload">
                                <div id="uploadIDCard1"></div>
                            </div>
                            <div class="btn-upload2">
                                <div id="uploadIDCard2"></div>
                            </div>

                            <div class="upload-item" id="photo-uploadIDCard1"></div>
                            <div class="upload-item" id="photo-uploadIDCard2"></div>
                        </div>
                        <div class="example">
                            <div class="title">示例</div>
                            <img src="//staticfile.tujia.com/Landlord/Images/certificate02.jpg" >
                        </div>
                    </div>
                    <p class="text-muted">仅支持JPG、PNG格式的图片，大小不超过2MB，图片文字清晰，无水印。</p>
                </div>
            </div>
        </div>
    </div>
    
	


<input data-val="true" data-val-required="IsEditable 字段是必需的。" id="QualificationInfo_IsEditable" name="QualificationInfo.IsEditable" type="hidden" value="true" />

<input data-val="true" data-val-required="IsDisplay 字段是必需的。" id="QualificationInfo_IsDisplay" name="QualificationInfo.IsDisplay" type="hidden" value="true" />
     <div class="detailSubmit t_center">
         <p class="agreement">
             <input type="checkbox" name="IsAgreeClause" id="IsAgreeClause"/>&nbsp;我已阅读并同意
             <a href="http://content.tujia.com/Clause/BusinessServices.htm" class="text-standOut" target="_blank">《途家网商家服务协议》</a>
             <a href="http://content.tujia.com/Clause/AuditRule.htm" class="text-standOut ml10" target="_blank">《途家网商家入驻标准》</a>
             <a href="http://content.tujia.com/Clause/Disclaimers.htm" class="text-standOut ml10" target="_blank">《途家网预订服务条款》</a>和上述退订规则
         </p>
         <input type="button" class="btn-primary-m off" disabled="disabled" id="applySubmit" value="继续发布房屋"/>
         <input type="button" class="btn-primary-m displayN" id="fakeApplySubmit" value="继续发布房屋" />
     </div>
    
    <div>
        <div id="LinkmanMobileHelperContent" class="tip_questionInfo displayN">
        	 提供给客人与商家联系的电话，会自动关联一个途家网400分机号。
        </div>
        <div id="OperationEmailHelperContent" class="tip_questionInfo displayN">
        	途家和商户联系的邮箱，用于商户接收途家的各种通知。
        </div>
        <div id="QQHelperContent" class="tip_questionInfo displayN">
        	途家和商户联系的QQ，用于商户接收途家的各种通知。
        </div>
        <div id="SkypeHelperContent" class="tip_questionInfo displayN">
        	途家和商户联系的Skype，用于商户接收途家的各种通知。
        </div>
        <div id="TelHelperContent" class="tip_questionInfo displayN">
        	途家和商户沟通业务的联系电话。
        </div>
        <div id="WiFiHelperContent" class="tip_questionInfo displayN">
        	到店后无线端告知WiFi信息，提高游客入住体验。
        </div>
        <div id="LinkManHelperContent" class="tip_questionInfo displayN">
        	商户负责和途家联系的业务负责人。
        </div>
        <div id="CustomerServiceTipContent" class="tip_questionInfo displayN">
        	负责与游客通过消息在线交流，沟通房屋。
        </div>
        <div id="StoreNameTipContent" class="tip_questionInfo displayN">
        	门店名称会对外展示，如果您是个人房东也可以取个代表你的昵称！
        </div>
    </div>

</form>
   
        <div id="saveSucToastMessage" class="ui_pop_saveSuccess fixCenter">
            <span class="con">保存成功！</span>
            <span class="con_desc"></span>
        </div>
        <div id="savingToastMessage" class="ui_pop_saveLoading fixCenter">
            <span class="con">正在保存，请稍候</span>
        </div>

        <div id="unsaveConfirmTrigger" style="display: none"></div>
        <div id="dlgUnsaveConfirm" class="popBox-m">
            <div class="pop-hd">
                <span id="popup_titletext">确认切换门店</span><a href="#" class="closeBtn">×</a>
            </div>
            <div class="pop-bd">
                <div class="text-content">当前页面未保存！切换门店会造成本次编辑失效。是否放弃本次编辑？</div>
                <div class="btn-content">
                    <a href="javaScript:void(0)" id="cancelLeavePage" class="btn-primary-m">否，继续编辑本页</a>
                    <a href="javaScript:void(0)" id="confirmLeavePage" class="btn-default-m">是，我要切换门店</a>
                </div>
            </div>
        </div>
    </div>
    <div style="clear: left"></div>
    
<div class="m-footer-link-list">
    
    <a href="http://content.tujia.com/tujiajianjie.htm" target="_blank" class="forst" rel="nofollow">关于我们</a>|
    <a href="http://content.tujia.com/youkebangzhu.htm" target="_blank" rel="nofollow">我是房客</a>|
    <a href="http://content.tujia.com/qiyewenhua.htm" target="_blank" rel="nofollow">加入途家</a>|
   
    <a href="http://www.tujia.com/SiteMap/UnitDestination/" target="_blank">网站地图</a>|
    <a href="http://www.tujia.com/SiteMap/Default/" target="_blank">城市地图</a>
    <p>&copy; Copyright 2016 tujia.com 途家&nbsp;&nbsp;&nbsp;&nbsp;版权所有&nbsp;&nbsp;&nbsp;&nbsp;不得转载<br /><a href="http://www.miitbeian.gov.cn/" target="_blank">京ICP证120277号</a><span style="display:inline-block; margin-left:10px">京公网安备11010502027120</span></p>
</div>

	<script type="text/javascript" >
	var SuppliersFrontEndResource={
			"$language":"zh-CN",
			"DelProductConfirm":"您确定要删除此产品么?",
			"CalendarAbbrApril":"4月",
			"CalendarAbbrMarch":"3月",
			"SaveSthTip":"正在保存“{0}”，请稍后......",
			"InputPictureDescriptionTip":"请输入图片说明文字",
			"Expand":"展开",
			"UnitPictures":"房屋照片",
			"UnitAuditFailed":"房屋信息审核失败",
			"UnitSurrounding":"周边环境",
			"SaveSthSuccessTip":"保存“{0}”成功",
			"DelUnitConfirm":"您确定要删除房屋\"{0}\"(ID:{1})吗?",
			"UnActiveUnit":"房屋下架",
			"RejectOrder":"拒绝订单",
			"Delete":"删除",
			"DelUnitDraft":"删除未发布房屋",
			"ErrorOccured":"发生错误",
			"AcceptTimeAdd":"添加",
			"UnActiveUnitFailed":"房屋下架失败",
			"UnitListDelTip":"你确定要删除房屋{0}(ID:{1})吗？",
			"StillNeedPictureCount":"差{0}张",
			"StdPriceSettingTip":"由途家负责人在后台设置",
			"NoOfferToday":"当日无价",
			"UnActiveUnitSuccess":"房屋下架成功",
			"StdInventoryTip":"共享库存产品提醒",
			"SelectUnitPlease":"请选择房屋",
			"UploadifyFileCountTip":"单次最多上传{0}张照片, 某些图片不会上传",
			"DelUnitDraftFailed":"未发布房屋删除失败",
			"UploadifyError":"错误 {0}：{1}",
			"CalendarAbbrOctober":"10月",
			"ConfrimOrder":"确认订单",
			"RejectOrderSuccess":"订单拒绝成功",
			"AddDateRange":"添加日期段",
			"Select":"请选择",
			"RejectOrderCloseUnit":"拒单时，关闭当日房态",
			"DelUnitInfoConfirm":"你确定要删除选定的房屋信息吗?",
			"SetProductUnActiveTip":"设置产品无效失败，请刷新也面重试！",
			"AdaptRatioPriceTip":"折扣和价格类型请到产品设置中修改",
			"Product":"产品",
			"RejectReasonLengthTip":"拒绝原因太长超过200字符！",
			"UploadifyFileSizeTip":"文件大小不能超过{0}M",
			"SavingWait":"正在保存，请稍候......",
			"UnitAuditingTip":"修改的信息，需通过审核后，才会在外网生效，请等待。",
			"UploadifyMissHandler":"不能发现上传处理程序",
			"LoadingTip":"数据加载中，请稍候……",
			"StdInventoryTipContent":"您选择的是共享库存产品。<br/>房态、房量与房屋保持一致，无法单独修改",
			"UploadedPictureCount":"张",
			"ConfrimOrderFail":"抱歉，确认操作失败，请联系途家。",
			"LoadDataError":"加载数据出错",
			"DelProduct":"删除产品",
			"TipsPricelimit":"途家网在该地区的房屋价格普遍在{0}元以上，请您慎重考虑价格设置。",
			"CalendarAbbrJanuary":"1月",
			"SaveSthFailedTip":"保存“{0}”失败!",
			"DelUnit":"删除房屋",
			"CalendarAbbrAugust":"8月",
			"AuditFailed":"审核失败",
			"Auditing":"审核中",
			"OperationError":"操作失败！",
			"DelProductWithOrderTip":"该产品有正在执行的订单，无法删除",
			"StdPriceDlgField":"【自定义价】",
			"DelProductError":"删除产品失败！",
			"AdaptUnitInfoError":"修改房屋信息出错",
			"Hi":"你好",
			"BtnCancel":"取消",
			"NoOfferTodayTip":"您选择的日期内含有无价产品，无法修改房态、房量!<br/>如需调整，可联系途家设置当天的产品价格。",
			"ActiveUnitWorking":"房屋上架中请耐心等待",
			"ActiveUnitSuccess":"申请房屋上架成功",
			"ConfrimOrderTitle":"订单确认中请耐心等待",
			"UploadifyButtonText":"选择文件上传",
			"BtnOk":"确定",
			"LoadUnitControlDataError":"加载房控数据出错，请刷新后重试。",
			"CurrencySymbol":"￥",
			"NoRestrict":"不限",
			"InputPriceTip":"请输入有效的价格",
			"ReEditAndSubmit":"请修改信息，再次提交。",
			"RejectOrderTitle":"订单拒绝中请耐心等待",
			"RejectReason":"请在下面输入拒绝原因",
			"RequestError":"请求服务器出错，请刷新后重试!",
			"DelUnitDraftSuccess":"未发布房屋删除成功",
			"UnitInstanceCount":"同类型房屋套数",
			"UnitEditDragMapPointTip":"可以拖动，请放置在房屋所在位置。",
			"DelUnitFailed":"房屋删除失败",
			"AjaxServerError":"请求服务端出错，请刷新或重试！",
			"OpenInventoryTip":"正在打开房态，请稍候……",
			"ActiveUnitFailed":"申请房屋上架失败",
			"ActiveUnit":"房屋上架",
			"SettingErrorRefresh":"设置失败, 请刷新页面并重试",
			"UnitPosition":"房屋位置",
			"Kilometers":"公里",
			"UnitCheckinDescription":"入住说明",
			"CalendarAbbrDecember":"12月",
			"CalendarAbbrSeptember":"9月",
			"CalendarAbbrNovember":"11月",
			"PleaseSelect":"请选择",
			"DelUnitWaiting":"房屋删除中请耐心等待",
			"CalendarAbbrMay":"5月",
			"RatioPriceRatio":"【折扣价】{0}折",
			"DistanceRangeAlert":"请选择{0}公里以内的景点",
			"RejectReasonEmptyTip":"拒绝原因不能为空！",
			"DelUnitSuccess":"房屋删除成功",
			"CalendarAbbrJuly":"7月",
			"CalendarAbbrJune":"6月",
			"CalendarAbbrFebrary":"2月",
			"ActiveUnitConfirm":"你确定要上架房屋\"{0}\"(ID:{1})吗?",
			"SaveFailed":"保存失败!",
			"DelProductWaiting":"产品删除中请耐心等待",
			"SaveSthSuccess":"保存“{0}“成功",
			"UnActiveUnitConfirm":"你确定要下架房屋\"{0}\"(ID:{1})吗?",
			"UnActiveUnitWaiting":"房屋下架中请耐心等待",
			"RejectOrderFail":"抱歉，拒绝操作失败，请联系途家。",
			"UnitDescription":"描述信息",
			"DistanceValidAlert":"请输入有效的公里数",
			"SaveError":"保存出错",
			"SaveSthWait":"正在保存”{0}“，请稍候......",
			"ConfrimOrderSuccess":"订单确认成功",
			"SaveSuccess":"保存成功",
			"DelProductWorking":"正在删除产品，请稍后......",
			"DelUnitDraftWaiting":"未发布房屋删除中请耐心等待",
			"DelSuccess":"删除成功!",
			"SaveSthError":"保存“{0}“失败!",
			"UnitAuditTip":"途家将对提交信息进行审核，完成后修改内容生效",
			"UnitAuditing":"房屋信息审核中",
			"CloseInventoryTip":"正在关闭房态，请稍候……",
			"Pack":"收起",
			"PriceTypeChangeTip":"价格类型请到产品设置中修改",
			"StdPriceIsUnitPriceTip":"【标准价】同房屋价格"
		}
	</script>;

    <script type="text/javascript">
    
        var staticFileRoot = "//staticfile.tujia.com",
            minDate = "2016-05-19",
            maxDate = "2017-04-19",
            houseId,
            ServerDomain = "tujia.com",
            TUJIA_CLIENTID = '67e5d80c-4636-47b8-8cf5-cdcd8adf4300';

        var portalUrl = "http://www.tujia.com";
        
        var CURRENT_MERCHANT_ID = '1';
        var MERCHANT_COOKIE_NAME = "tujia.com_PortalContext_SMerchantID";

        $.alerts.okButton = SuppliersFrontEndResource.BtnOk;
        $.alerts.cancelButton = SuppliersFrontEndResource.BtnCancel;

        $(function () {
            window.TuJingHeader = window.TuJingHeader || {};
            $("#unsaveConfirmTrigger").overlay({
                mask: {
                    color: '#000',
                    loadSpeed: 200,
                    opacity: 0.6
                },
                close: "#cancelLeavePage,.closeBtn",
                closeOnClick: false,
                closeOnEsc: true,
                target: "#dlgUnsaveConfirm",
                top: "center",
                fixed: true
            });
            $("#confirmLeavePage").click(function () {
                //确认离开时一定是在编辑页
                PageRedirectSetting.IgnoreCookieCheck = true;
                var merchantID = $("#unsaveConfirmTrigger").data("merchantId");
                TuJingHeader.submit('http://merchant.tujia.com', merchantID);
            });
            //头部下拉菜单切换事件，定义位置在Header里
            TuJingHeader.onChanging = function (merchantId) {
                $("#unsaveConfirmTrigger").data("merchantId", merchantId);
                if (PageRedirectSetting.UnsaveCheck) {
                    //切换门店在Post之前触发，返回true正常change，返回false阻止切换
                    if (!PageRedirectSetting.IsSaved) {
                        $("#unsaveConfirmTrigger").click();
                        return false;
                    }
                }
                if (PageRedirectSetting.GotoHome) {
                    $("#hiddenReturnUrl").val('http://merchant.tujia.com');
                }
                return true;
            };
        });
    </script>
	<script src="//staticfile.tujia.com/PortalSite2/scripts/Base/common.js" type="text/javascript"></script>
    
	<script src="//staticfile.tujia.com/Landlord/Scripts/jquery-ui-1.10.1.autocomplete.min.js" type="text/javascript"></script>
    <script type="text/javascript">
        $(function () {
            var showQualificationInfo = 'true';
            //提示信息
            $(".ui_question, .ui_question_top").each(function() {
                var target = $(this).data("tip-target");
                $(this).powerFloat({
                    eventType: "hover",
                    hoverHold: false,
                    position: "6-8",
                    target: target,
                    reverseSharp: true
                });
            });

            //同意Tujia协议
            $("#IsAgreeClause").click(function() {
                var btn = $("#applySubmit");
                
                if ($("#IsAgreeClause").is(":checked")) {
                    btn.removeClass("off").removeAttr("disabled");
                } else {
                    btn.addClass("off").attr("disabled", "disabled");
                }
            });
            
            //提交前的验证
            $("#applySubmit").click(function () {
                $(this).hide();
                $("#fakeApplySubmit").show();
                if (!$(this).hasClass("off")) {
                    if ( $("#mainForm").valid() && ($("#IsAgreeClause").length == 0 || $("#IsAgreeClause").is(":checked"))
                         && (showQualificationInfo != 'true' || ($.isFunction(validateQualificationFiles) && validateQualificationFiles())) ) {
                        $.showSavingToastMessage();
                        $(".btn-upload, .btn-upload2").hide();
                        var StoreViewModel = {};
                        var LeadsVo = {};
                        LeadsVo['contactName'] = $("#contactName").val();
                        LeadsVo['email'] = $("#email").val();
                        //城市信息
                        var Address = {};
                        Address['addressProvinceID'] = $("#addressProvinceID").val();
                        Address['addressCityID'] = $("#addressCityID").val();
                        Address['isInternational'] = $("#addressIsInternational").val();
                        //logo,标识
                        StoreViewModel['logoSourceUrl'] = $("#logoSourceUrl").val();
                        StoreViewModel['logo150Url'] = $("#logo150Url").val();
                        StoreViewModel['logo90Url'] = $("#logo90Url").val();
                        //结算信息
                        var FinancialInfoViewModel = {};
                        var enumAccountType = $(":radio[name='FinancialAccountInfo.EnumAccountType']:checked").val();
                        FinancialInfoViewModel['isPersonallyPay'] = $(":radio[name='FinancialAccountInfo.IsPersonallyPay']:checked").val();//是否支持当面付
                        FinancialInfoViewModel['enumSettlementLevel'] = $("#FinancialAccountInfo_EnumSettlementLevel").val();
                        if(enumAccountType == "Alipay"){
                        	FinancialInfoViewModel['enumAccountType'] = 2;
                        	FinancialInfoViewModel['provinceID'] = 0;
                            FinancialInfoViewModel['cityID'] = 0;
                            FinancialInfoViewModel['accountName'] = $("#FinancialAccountInfo_AccountName").val();
                            FinancialInfoViewModel['alipayAccount'] = $("#FinancialAccountInfo_AlipayAccount").val();
                            FinancialInfoViewModel['enumAlipayAccountType'] = $(":radio[name='FinancialAccountInfo.EnumAlipayAccountType']:checked").val();
                        }else{
                            FinancialInfoViewModel['accountBankID'] = $("#BankID").val();
                            FinancialInfoViewModel['bankName'] = $("#BankName").val();
                            FinancialInfoViewModel['provinceID'] = $("#BankProvinceID").val();
                            FinancialInfoViewModel['skipBankAccountValidate'] = $("#SkipBankAccountValidate").val();
                            FinancialInfoViewModel['cityID'] = $("#BankCityID").val();
                            FinancialInfoViewModel['subbranchName'] = $("#SubbranchName").val();
                            FinancialInfoViewModel['bankBranchID'] = $("#BankBranchID").val();
                            FinancialInfoViewModel['bankAccount'] = $("#FinancialAccountInfo_BankAccount").val();
                            FinancialInfoViewModel['repBankAccount'] = $("#FinancialAccountInfo_RepBankAccount").val();
                            FinancialInfoViewModel['enumBankAccountType'] = $(":radio[name='FinancialAccountInfo.EnumBankAccountType']:checked").val();
                            FinancialInfoViewModel['bankAccountName'] = $("#FinancialAccountInfo_BankAccountName").val();
                            FinancialInfoViewModel['enumAccountType'] = 1;
                        }
                        //资质信息
                        var QualificationInfo = {};
                        var enumQualificationFileType = $(":radio[name='QualificationInfo.EnumQualificationFileType']:checked").val();
                        QualificationInfo['qualificationFileIDsJson'] = $("#QualificationFileIDsJson").val();
                        
                        if(enumQualificationFileType == "BusinessCertification"){
                        	QualificationInfo['enumQualificationFileType'] = 2;
                        	QualificationInfo['businessCertificationNumber'] = $("#BusinessCertificationNumber").val();
                        	
                        }else{
                        	QualificationInfo['enumQualificationFileType'] = 1;
                        	QualificationInfo['idCardNumber'] = $("#IDCardNumber").val();
                        }
                        
                        //门店信息
                        StoreViewModel['detailAddress'] = $("#DetailAddress").val();
                        StoreViewModel['name'] = $("#Name").val();
                        StoreViewModel['welcomeMessage'] = $("#WelcomeMessage").val();
                        StoreViewModel['description'] = $("#Description").val();
                        StoreViewModel['receiveForeigner'] = $(":radio[name='ReceiveForeigner']:checked").val();
                        var enumInvoiceType = $("#EnumInvoiceType").val();
                        if(enumInvoiceType != 'None'){
                        	StoreViewModel['enumInvoiceType'] = $("#EnumInvoiceType").val();
                        }
                        StoreViewModel['linkmanMobile'] = $("#LinkmanMobile").val();
                        StoreViewModel['qq'] = $("#QQ").val();
                       	StoreViewModel['skype'] = $("#Skype").val();
                        StoreViewModel['financialAccountInfo'] = FinancialInfoViewModel;
                        StoreViewModel['address'] = Address; 
                        StoreViewModel['qualificationInfo'] = QualificationInfo; 
                        //alert(JSON.stringify(StoreViewModel));
            			var jsonSet = new JsonSet();
            			jsonSet.put('newViewModel', StoreViewModel);
            			jsonSet.put('leadsVo', LeadsVo);
            			transactionWithValidate({
            				url: '/merchant-web/Stores/add',
            				jsonSet: jsonSet,
            				callback: storesAddCallBack
            			});
                    } else {
                        $.hideSavingToastMessage();
                        //滚动到出错位置上面
                        var anchor = $('.field-validation-error:visible:first').parents(".detailWraper2").last();
                        if (anchor.length > 0) {
                            var t = anchor.prev(".detailTitle");
                            anchor = t.length > 0 ? t : anchor;
                            $.scrollTo(anchor, 500, { axis: 'y' });
                        }
                    }
                }
                $(this).show();
                $("#fakeApplySubmit").hide();
            });
             
            $("#openingDate, #decorationDate").dateinput({lang:"zh-cn"});
            $("#openingDate, #decorationDate").each(function() {
                $(this).data("dateinput").setMin("1970-1-1");
            });
        });
        
        function storesAddCallBack (data) {
        	if(data.exception && data.exception == 'true'){
        		$.hideSavingToastMessage();
        		alert("创建门店失败,请联系相关人员处理失败原因");
        		return;
        	}
       		if (data.hasError) {
       			$.hideSavingToastMessage();
       		} else {
       			checkTavernIsReady(data.responseUrl, data.guid);
       		}
        }
        
        /*
         *	检查.net那边门店是否同步成功
         */
         
		function checkTavernIsReady(url,guid){
        	var count = 0;
			function checkTavern(){
				setTimeout(function(){
					$.ajax({
						url: BaseURL+"/Stores/checkTavernIsReady",
                        type: "POST",
                        data: {"guid": guid},
                        cache: false,
                        dataType : 'json',
                        success: function(res) {
                        	
                        	if(res.isSuccess){
                        		location.href = url;
                        	}else{
                        		count += 500;
                        		if(count > 2 * 60 * 1000){
                        			location.href = "../view/create_tavern_error.jsp";
                        		}
                        		checkTavern();
                        	}
                        },
                        error:function(e){
                        	checkTavern();
                        }
					});
					
				},500);
			};
			checkTavern();
        }
    </script>
    
	

    <script>
        $(function () {
            $(".navWrapper:first").addClass("first");
        });

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
    <link href="//staticfile.tujia.com/Landlord/Styles/landlord.base/common-en.css" rel="stylesheet" type="text/css" />
</body>
</html>