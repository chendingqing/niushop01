<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:35:"template/shop\blue\Login\login.html";i:1532672419;s:32:"template/shop\blue\urlModel.html";i:1510819885;}*/ ?>
<!DOCTYPE html>
<html>
<head>
	<meta name="renderer" content="webkit" />
	<meta http-equiv="X-UA-COMPATIBLE" content="IE=edge,chrome=1"/>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="renderer" content="<?php echo $platform_shopname; ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta name="keywords" content="<?php echo $seoconfig['seo_meta']; ?>" />
	<meta name="description" content="<?php echo $seoconfig['seo_desc']; ?>"/>
	<meta name="author" content="<?php echo $platform_shopname; ?>" />
	<title><?php if($title_before != ''): ?><?php echo $title_before; ?>&nbsp;-&nbsp;<?php endif; ?><?php echo $title; if($seoconfig['seo_title'] != ''): ?>-<?php echo $seoconfig['seo_title']; endif; ?></title>
	<link rel="shortcut icon" type="image/x-icon" href="__TEMP__/<?php echo $style; ?>/public/images/favicon.ico" media="screen"/>
	<link href="__TEMP__/<?php echo $style; ?>/public/css/member_login.css" rel="stylesheet" type="text/css"/>
	<link type="text/css" rel="stylesheet" href="__TEMP__/<?php echo $style; ?>/public/css/ns_default.css" />
	<script src="__STATIC__/js/jquery-1.8.1.min.js"></script>
	<script src="__STATIC__/bootstrap/js/bootstrap.js"></script>
	<link type="text/css" rel="stylesheet" href="__TEMP__/<?php echo $style; ?>/public/css/login.css"/>
	<script src="__STATIC__/js/load_bottom.js" type="text/javascript"></script>
	<!-- logo样式 -->
	<link type="text/css" rel="stylesheet" href="__STATIC__/shop_css_logo/shop_logo.css" />
	<script type="text/javascript">
	var SHOPMAIN='SHOP_MAIN';//外置JS调用
	var APPMAIN='APP_MAIN';//外置JS调用
	var STATIC = "__STATIC__";
	</script>
	<style>
		/* 项目logo统一样式 */
		.web-logo{max-width: 100%;max-height: 100%;}
		#web_gov_record a span{ position: relative; top:-5px;}
	</style>
</head>
<body>
<input type="hidden" id="niushop_rewrite_model" value="<?php echo rewrite_model(); ?>">
<input type="hidden" id="niushop_url_model" value="<?php echo url_model(); ?>">
<script>
function __URL(url)
{
    url = url.replace('SHOP_MAIN', '');
    url = url.replace('APP_MAIN', 'wap');
    if(url == ''|| url == null){
        return 'SHOP_MAIN';
    }else{
        var str=url.substring(0, 1);
        if(str=='/' || str=="\\"){
            url=url.substring(1, url.length);
        }
        if($("#niushop_rewrite_model").val()==1 || $("#niushop_rewrite_model").val()==true){
            return 'SHOP_MAIN/'+url;
        }
        var action_array = url.split('?');
        //检测是否是pathinfo模式
        url_model = $("#niushop_url_model").val();
        if(url_model==1 || url_model==true)
        {
            var base_url = 'SHOP_MAIN/'+action_array[0];
            var tag = '?';
        }else{
            var base_url = 'SHOP_MAIN?s=/'+ action_array[0];
            var tag = '&';
        }
        if(action_array[1] != '' && action_array[1] != null){
            return base_url + tag + action_array[1];
        }else{
        	 return base_url;
        }
    }
}
/**
 * 处理图片路径
 */
function __IMG(img_path){
	var path = "";
	if(img_path != undefined && img_path != ""){
		if(img_path.indexOf("http://") == -1 && img_path.indexOf("https://") == -1){
			path = "__UPLOAD__\/"+img_path;
		}else{
			path = img_path;
		}
	}
	return path;
}
</script>
<div class="header_min" id="header"></div>
<div class="user_head_bg">
	<div class="user_head">
		<div class="logobox" style="padding-top:20px;">
			<a href="<?php echo __URL('SHOP_MAIN'); ?>" class="web-logo-a">
				<img src="<?php echo __IMG($web_info['logo']); ?>" border="0" class="weblogo">
			</a>
		</div>
		<div class="reg">
			<span style="float:right;">
				<span><?php echo lang('no_account'); ?>？</span>
				<a href="<?php echo __URL('SHOP_MAIN/login/registerbox'); ?>" style="color:white; text-decoration: none;line-height: 40px;">
					<span style="display:inline-block;color:#0689e1;line-height:43px;"><?php echo lang('register_immediately'); ?></span>
				</a>
			</span>
		</div>
		<div class="clear"></div>
	</div>
</div>
<div class="ban_box">
	<div class="banner" >
		<ul class="full-screen-slides" id="fullScreenSlides">
			<?php $service = new data\service\Platform;$list = $service->getPlatformAdvPositionDetail("1103", "*");$list = json_encode($list);$list = json_decode($list, ture); if(!(empty($list) || (($list instanceof \think\Collection || $list instanceof \think\Paginator ) && $list->isEmpty()))): if($list['adv_list'][0]['adv_image'] ==''): ?>
						<li style="display: list-item;background: url(__TEMP__/<?php echo $style; ?>/public/images/blue_login_banner.png) no-repeat center;background-size: auto">
							<a href="javascript:;" target="_blank">&nbsp;</a>
						</li>
					<?php else: if(is_array($list['adv_list']) || $list['adv_list'] instanceof \think\Collection || $list['adv_list'] instanceof \think\Paginator): if( count($list['adv_list'])==0 ) : echo "" ;else: foreach($list['adv_list'] as $key=>$vo): if($vo['adv_image'] != ''): if($k == 0): ?>
									<li style="display: list-item;background: url(<?php echo __IMG($vo['adv_image']); ?>) no-repeat center;background-color:<?php echo $vo['background']; ?>;background-size: auto">
										<?php if(!(empty($vo['adv_url']) || (($vo['adv_url'] instanceof \think\Collection || $vo['adv_url'] instanceof \think\Paginator ) && $vo['adv_url']->isEmpty()))): ?>
											<a href="<?php echo __URL($vo['adv_url']); ?>" target="_blank" >&nbsp;</a> 
										<?php endif; ?>
									</li>
								<?php else: ?>
									<li style="display: none;background: url(<?php echo __IMG($vo['adv_image']); ?>) no-repeat center;background-color:<?php echo $vo['background']; ?>;background-size: auto">
										<?php if(!(empty($vo['adv_url']) || (($vo['adv_url'] instanceof \think\Collection || $vo['adv_url'] instanceof \think\Paginator ) && $vo['adv_url']->isEmpty()))): ?>
											<a href="<?php echo __URL($vo['adv_url']); ?>" target="_blank" >&nbsp;</a> 
										<?php endif; ?>
									</li>
								<?php endif; endif; endforeach; endif; else: echo "" ;endif; endif; endif; ?>
			
		</ul>
	</div>
	<div class="maind">
		<?php $service = new data\service\Platform;$list = $service->getPlatformAdvPositionDetail("1103", "*");$list = json_encode($list);$list = json_decode($list, ture); if(!(empty($list) || (($list instanceof \think\Collection || $list instanceof \think\Paginator ) && $list->isEmpty()))): ?>
				<div class="login js-login" style="background: transparent">
			<?php else: ?>
				<div class="login js-login" style="background:url(__TEMP__/<?php echo $style; ?>/public/images/blue_login_banner.png) no-repeat 0 30px;">
			<?php endif; ?>
		
			<!--用户名密码 -->
			<div class="mob j_mob_show" style="background:#fff;">
<!-- 				<?php if($Wchat_info['is_use'] == 1): ?> -->
<!-- 				<div class="righttab J_hoverbut J_mob" title="微信扫码<?php echo lang('login'); ?>"></div> -->
<!-- 				<?php endif; ?> -->
				<div class="tit">
					<span class="switch_txt active"><?php echo $title; ?><?php echo lang('user_login'); ?></span>
					<div id="forAccountLogin" class="switch_account link_blue" data-index="0"><a href="javascript:;"><?php echo lang('switch_account_login'); ?></a></div>
				</div>
				<div class="type_box active">
					<div class="err J_errbox" id="hint" style="display:none;"></div>
					<div class="inputbox J_focus">
						<div class="imgbg"></div>
						<input type="text" class="input_login" name="txtName" id="txtName" placeholder="<?php echo lang('cell_phone_number'); ?>/<?php echo lang('member_name'); ?>/<?php echo lang('mailbox'); ?>" /> 
					</div>
					<div class="inputbox J_focus">
						<div class="imgbg pwd"></div>
						<input type="password" class="input_login pwd J_loginword" name="txtPWD" id="txtPWD" placeholder="<?php echo lang('please_input_password'); ?>" />
					</div>
					
					<div class="inputbox J_focus verification-code" <?php if(!$is_need_verification): ?>style="display:none;"<?php endif; ?>>
<!-- 						<div class="imgbg"></div> -->
						<input type="text" id="vertification" class="input_login vertification" name="vertification" placeholder="<?php echo lang('please_enter_verification_code'); ?>" style="padding-left:15px;width:285px;" />
						<img id="verify_img" src="<?php echo __URL('SHOP_MAIN/captcha'); ?>" alt="captcha" onclick="this.src='<?php echo __URL('SHOP_MAIN/captcha?tag=1'); ?>'+'&send='+Math.random()" />
					</div>
					
					<div class="txtbox link_gray6">
						<!-- <div class="td1"><label><input  class="J_expire" name="expire" checked="checked" type="checkbox" value="1">7天内自动<?php echo lang('login'); ?></label></div> -->
						<div class="td2" style="float: right;text-align: left;"><a href="<?php echo __URL('SHOP_MAIN/login/findpasswd'); ?>"><?php echo lang('forgot_password'); ?>?</a></div>
					</div>
					<div class="btnbox"><input class="btn_login J_hoverbut" type="button" id="btnLogin" onclick="btnlogin();" value="<?php echo lang('login'); ?>"></div>
					
			 		<?php if($qq_info['is_use'] != 0 || $Wchat_info['is_use'] != 0): ?>
					<div class="qqbox">
						<div class="qtit">
							<span class="qtit_left" style=""><?php echo lang('use_cooperative_account'); ?></span>
							<div class="clear"></div>
						</div>
						<div class="appsparent" style="display: inline-block; float: right;margin-top: -55px;margin-right: 18px;">
							<div class="apps">
							<?php if($qq_info['is_use'] == 1): ?><a class="ali qq" href="<?php echo __URL('APP_MAIN/login/oauthlogin','type=QQLOGIN'); ?>" title="<?php echo lang('qq_account_login'); ?>"></a><?php endif; if($Wchat_info['is_use'] == 1): ?><a class="ali taobao" href="<?php echo __URL('APP_MAIN/login/oauthlogin','type=WCHAT'); ?>"  title="<?php echo lang('wechat_authorized_login'); ?>"></a><?php endif; ?>
							</div>
						</div>
						<div class="clear"></div>
					</div>
					<?php endif; ?>
				</div>
			</div>
			<!--二维码的 -->
			<div class="qr_code J_qr_code_show">
				<div class="righttab J_hoverbut J_qr_code" title="<?php echo lang('account_password_login'); ?>"></div>
				<div class="tit"><?php echo lang('wechat_scan_code_secure_login'); ?></div>
				<div id="J_weixinQrCode" class="code"><img width="140" height="140" src="ADMIN_IMG/icon-code.png"></div>
				<div class="txt" style="margin-left:60px;"><?php echo lang('wechat_sweep'); ?></div>
			</div>
		</div>
	</div>
</div>
<input type="hidden" id="J_loginType" value="0" />
<input type="hidden" id="verify_userlogin" value="0" />
<input type="button" id="origin_btnCheck" style="display:none;"/>
<input type="button" id="btnCheck" style="display:none;"/>
<input type="hidden" id="J_sendVerifyType" value="0"/>
<div id="popup-captcha">
	<div class="gt_input">
		<input class="geetest_challenge" type="hidden" name="geetest_challenge"/>
		<input class="geetest_validate" type="hidden" name="geetest_validate"/>
		<input class="geetest_seccode" type="hidden" name="geetest_seccode"/>
	</div>
</div>
<div class="footer_min" id="footer">
	<div class="links link_gray6">
		<a target="_blank" href="<?php echo __URL('SHOP_MAIN/index/index'); ?>"><?php echo lang('home'); ?></a>|
		<a target="_blank" href="<?php echo __URL('SHOP_MAIN/helpcenter/index','id=2'); ?>"><?php echo lang('common_problem'); ?></a>|
		<a target="_blank" href="<?php echo __URL('SHOP_MAIN/helpcenter/index','id=1'); ?>"><?php echo lang('shopping_process'); ?></a>|
		<a target="_blank" href="<?php echo __URL('SHOP_MAIN/helpcenter/index','id=9'); ?>"><?php echo lang('refund_description'); ?></a>|
		<a target="_blank" href="http://www.5law.cn/"><?php echo lang('legal_declaration'); ?></a>|
		<a target="_blank" href="<?php echo __URL('SHOP_MAIN/helpcenter/index','id=10'); ?>"><?php echo lang('refund_process'); ?></a>|
		<a target="_blank" href="<?php echo __URL('SHOP_MAIN/helpcenter/index','id=12'); ?>"><?php echo lang('merchants_settled'); ?></a>|
		<a target="_blank" href="<?php echo __URL('SHOP_MAIN/helpcenter/index','id=11'); ?>"><?php echo lang('refund_policy'); ?></a> 
	</div>
	<div class="txt" id="bottom_copyright">
		<p>
			<span id="copyright_desc" style="font-size: 12px;"></span>
			<br/>
			<a href="http://www.niushop.com.cn" target="_blank" id="copyright_companyname"></a>
			<span id="copyright_meta"></span>
			<p style="display: none;" id="web_gov_record">
                <a href="javascript:;" target="_blank"><img src="__STATIC__/images/gov_record.png" alt="" style="width: 20px;height: 20px;"><span style="height: 20px;line-height: 20px;display: inline-block;margin-left: 5px;font-size: 12px;"></span></a>
            </p>
		</p>
	</div>
</div>
<!--[if lt IE 9]>
	<script type="text/javascript" src="/Application/Home/View/default/public/js/PIE.js"></script>
<![endif]-->
<div class="disappear_tooltip pie_about" style="left: 634.5px; top: 286.5px;">
	<div class="icon"></div>
	<div class="content"></div>
</div>
<script type="text/javascript" src="__TEMP__/<?php echo $style; ?>/public/js/ns_components.js"></script>
<script type="text/javascript" src="__TEMP__/<?php echo $style; ?>/public/js/ns_index.js"></script>
<script type="text/javascript">
var global = {
	h:$(window).height(),
	st: $(window).scrollTop(),
	backTop:function(){
		global.st > (global.h*0.5) ? $("#backtop").show() : $("#backtop").hide();
	}
}
$('#backtop').on('click',function(){
	$("html,body").animate({"scrollTop":0},500);
});

global.backTop();

$(window).scroll(function(){
	global.h = $(window).height();
	global.st = $(window).scrollTop();
	global.backTop();
});

$(window).resize(function(){
	global.h = $(window).height();
	global.st = $(window).scrollTop();
	global.backTop();
})

$(function() {
	$.pie = function(name, v){
		// 如果没有加载 PIE 则直接终止
		if (! PIE) return false;
		// 是否 jQuery 对象或者选择器名称
		var obj = typeof name == 'object' ? name : $(name);
		// 指定运行插件的 IE 浏览器版本
		var version = 9;
		// 未指定则默认使用 ie10 以下全兼容模式
		if (typeof v != 'number' && v < 9) {
			version = v;
		}
		// 可对指定的多个 jQuery 对象进行样式兼容
		if ($.browser.msie && obj.size() > 0) {
			if ($.browser.version*1 <= version*1) {
				obj.each(function(){
					PIE.attach(this);
				});
			}
		}
	}
	if ($.browser.msie) {
		$.pie('.pie_about');
	};
	var url = window.location.host;
	if (url.indexOf('autoscript') != -1) {
			$("#hm_img").remove();
	}
	// 显示隐藏 请输入密码、请输入帐号
	innitEvent();
	var Sys = {};
	var ua = navigator.userAgent.toLowerCase();
	var s;
	(s = ua.match(/(msie |trident\/)([\d.]+)/)) ? Sys.ie = s[1] : (s = ua.match(/firefox\/([\d.]+)/)) ? Sys.firefox = s[1] : (s = ua.match(/chrome\/([\d.]+)/)) ? Sys.chrome = s[1] : (s = ua.match(/opera.([\d.]+)/)) ? Sys.opera = s[1] : (s = ua.match(/version\/([\d.]+).*safari/)) ? Sys.safari = s[1] : 0;
	if (Sys.chrome) {
		//$("#chromealert").hide();
		$("#chromealert").css("display", "none");
	} else {
		//$("#chromealert").show();
		$("#chromealert").css("display", "block");
	}
	if (Sys.ie) {
		$("#explorer").text("Internet Explorer");
	} else if (Sys.firefox) {
		$("#explorer").text("Firefox");
	} else if (Sys.opera) {
		$("#explorer").text("Opera");
	} else if (Sys.safari) {
		$("#explorer").text("Safari");
	} else {
		$("#explorer").text("<?php echo lang('member_other'); ?>");
	}
});

// 显示隐藏 请输入密码、请输入帐号 
function innitEvent() {
	$("#btnLogin").removeAttr("disabled");
	var $hidpwd = $("#hidpwd");
	var $pwd = $("#txtPWD");
	var $txtName = $("#txtName");
	var $hidpwd = $("#hidpwd");
	$txtName.focusin(function() {
	$("#namedel").css("display", "block");
		$("#pwddel").css("display", "none");
	})
	$hidpwd.focusin(function() {
		$("#namedel").css("display", "none");
		$("#pwddel").css("display", "block");
	})
	$pwd.focusin(function() {
		$("#pwddel").css("display", "block");
		$("#namedel").css("display", "none");
	})
	$("#namedel").click(function() {
		$(this).siblings("input").val("");
	});
	$("#pwddel").click(function() {
		$(this).siblings("input").val("");
	});
	$("#hidpwd").focus(function() {
		$("#hidpwd").css("display", "none");
		$("#txtPWD").css("display", "block");
		$("#txtPWD").focus();
	})
};

// enter
document.onkeypress = function() {
	var iKeyCode = -1;
	if (arguments[0]) {
		iKeyCode = arguments[0].which;
	} else {
		iKeyCode = event.keyCode;
	}
	if (iKeyCode == 13) {
		$("#btnLogin").click();
	}
}

// 登陆 按钮"变暗"
function btnlogin() {
	ClearCookie(); //时清除之前的cookie
	var userName = $.trim($('#txtName').val());
	var password = $.trim($('#txtPWD').val());
	var vertification = $.trim($('#vertification').val());
	if(userName == "<?php echo lang('enter_your_account_number'); ?>" || userName == "" || userName == null || userName == undefined) {
		$("#hint").css("display", "block");
		$("#hint").text("<?php echo lang('enter_your_account_number'); ?>");
		$("#txtName").focus();
		return false;
	}else if (password == "") {
		$("#hint").css("display", "block");
		$("#hint").text("<?php echo lang('please_input_password'); ?>");
		$("#hidpwd").focus();
		return false;
	}
	if(!$(".verification-code").is(":hidden")){
		if(vertification == undefined || vertification == ""){
			$("#hint").css("display", "block");
			$("#hint").text("<?php echo lang('please_enter_verification_code'); ?>");
			$("#vertification").focus();
			return false;
		}
	}
	// 后台验证
	$.post("<?php echo __URL('SHOP_MAIN/login/index'); ?>", {
		"username" : userName,
		"password" : password,
		"vertification" : vertification
	}, function(data) {
		if (data['code'] == 1) {
			window.location.href = data['url'];
		}else if(data['code'] == 2){
			window.location.href =__URL("SHOP_MAIN/index/index");
		}else {
			$("#hint").css("display", "block");
			$("#hint").text(data['message']); //  用户名密码提示
			var error_num = <?php echo $login_verify_code['error_num']; ?>;
			if(error_num != 0 && data['error_num'] >= error_num){
				$(".verification-code").show();
				$("#verify_img").attr("src",'<?php echo __URL('SHOP_MAIN/captcha?tag=1'); ?>&send='+Math.random());
			}
		}
	});
};

function ClearCookie() {
	var expires = new Date();
	expires.setTime(expires.getTime() - 1000);
	document.cookie = "appCode='';path=/;expires=" + expires.toGMTString() + "";
	document.cookie = "roleID='';path=/;expires=" + expires.toGMTString() + "";
	document.cookie = "parentMenuID='';path=/;expires=" + expires.toGMTString() + "";
	document.cookie = "currentMenuName='';path=/;expires=" + expires.toGMTString() + "";
}

//生成快捷方式
function shortcut() {
	$.ajax({
		url : "/login/shortcut",
		type : "post",
		success : function(data) {
		}
	});
}

//加入收藏
function AddFavorite(sURL, sTitle) {
	try {
		window.external.addFavorite(sURL, sTitle);
	} catch (e) {
		try {
			window.sidebar.addPanel(sTitle, sURL, "");
		} catch (e) {
			alert("<?php echo lang('failed_collection'); ?>");
		}
	}
}

//生成快捷方式
function toDesktop(sUrl, sName) {
	try {
		var WshShell = new ActiveXObject("WScript.Shell");
		var oUrlLink = WshShell.CreateShortcut(WshShell.SpecialFolders("Desktop") + "\\" + sName + ".url");
		oUrlLink.TargetPath = sUrl;
		oUrlLink.Save();
	} catch (e) {
		alert("<?php echo lang('not_allowed_operation'); ?>！");
	}
}

//给所有J_hoverbut的元素增加hover样式
$(".J_hoverbut").hover(function(){
		$(this).addClass("hover");
	},function(){
		$(this).removeClass("hover");
	}
);

//会员手机和二维码的路切换
$(".J_mob,.J_qr_code").click( function () {
	$(".j_mob_show").toggle();
	$(".J_qr_code_show").toggle();
});
$('.J_mob,#J_weixinQrCode').click(function(){
	get_weixin_qrcode();
});
var qrcode_time,
waiting_weixin_scan = function(){
	$.getJSON(qscms.root + '?m=Home&c=Members&a=waiting_weixin_login',function(result){
		if(result.status == 1){
			window.location.href = result.data;
		}
	});
},

get_weixin_qrcode = function(){
	clearInterval(qrcode_time);
	$.getJSON(qscms.root + '?m=Home&c=Qrcode&a=get_weixin_qrcode',{type:'login'},function(result){
		if(result.status == 1){
			$('#J_weixinQrCode').empty().append(result.data);
			qrcode_time=setInterval(waiting_weixin_scan,5000);
		}else{
			$('#J_weixinQrCode').empty().html(result.msg);
		}
	});
};

//个人注册方式选项卡切换
$(".regtab .tabli").click( function () {
	$(this).addClass("select").siblings(".tabli").removeClass("select");
	var index = $(".regtab .tabli").index(this);
	$('.tabshow').eq(index).show().siblings(".tabshow").hide();
	$('.tabshow').eq(index).find('input').eq(0).focus().addClass('input_focus');
});

//给符合条件的的文本框增加获取焦点的边框和背景变化	
$(".J_focus input[type='text'][dir!='no_focus'],.J_focus textarea[dir!='no_focus'],.J_focus input[type='password']").focus(function(){
	$(this).addClass("input_focus");
});

$(".J_focus input[type='text'][dir!='no_focus'],.J_focus textarea[dir!='no_focus'],.J_focus input[type='password']").blur(function(){
	$(this).removeClass("input_focus");
});
</script>
</body>
</html>