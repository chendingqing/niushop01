<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:49:"template/wap\default_new\Member\personalData.html";i:1534563167;s:34:"template/wap\default_new\base.html";i:1530674553;s:38:"template/wap\default_new\urlModel.html";i:1510824803;}*/ ?>
<!DOCTYPE html>
<html>
<head>
<meta name="renderer" content="webkit" />
<meta http-equiv="X-UA-COMPATIBLE" content="IE=edge,chrome=1"/>
<meta content="text/html; charset=UTF-8">
<meta name="viewport" content="initial-scale=1.0,maximum-scale=1.0,user-scalable=no">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<meta name="format-detection" content="telephone=no">
<title><?php if($title_before != ''): ?><?php echo $title_before; ?>&nbsp;-&nbsp;<?php endif; ?><?php echo $platform_shopname; if($seoconfig['seo_title'] != ''): ?>-<?php echo $seoconfig['seo_title']; endif; ?></title>
<meta name="keywords" content="<?php echo $seoconfig['seo_meta']; ?>" />
<meta name="description" content="<?php echo $seoconfig['seo_desc']; ?>"/>
<link rel="shortcut  icon" type="image/x-icon" href="__TEMP__/<?php echo $style; ?>/public/images/favicon.ico" media="screen"/>
<link rel="stylesheet" type="text/css" href="__TEMP__/<?php echo $style; ?>/public/css/pre_foot.css">
<link rel="stylesheet" type="text/css" href="__TEMP__/<?php echo $style; ?>/public/css/pro-detail.css">
<link rel="stylesheet" type="text/css" href="__TEMP__/<?php echo $style; ?>/public/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="__TEMP__/<?php echo $style; ?>/public/css/showbox.css">
<link rel="stylesheet" href="__TEMP__/<?php echo $style; ?>/public/css/layer.css" id="layuicss-skinlayercss">
<script src="__TEMP__/<?php echo $style; ?>/public/js/showBox.js"></script>
<script src="__TEMP__/<?php echo $style; ?>/public/js/jquery.js"></script>
<script src="__TEMP__/<?php echo $style; ?>/public/js/jquery.lazyload.js"></script>
<script type="text/javascript" src="__TEMP__/<?php echo $style; ?>/public/js/layer.js"></script>
<script src="__STATIC__/js/load_task.js" type="text/javascript"></script>
<script src="__STATIC__/js/load_bottom.js" type="text/javascript"></script>
<script src="__STATIC__/js/time_common.js" type="text/javascript"></script>
<script type="text/javascript">
var CSS = "__TEMP__/<?php echo $style; ?>/public/css";
var APPMAIN='APP_MAIN';
var UPLOADAVATOR = 'UPLOAD_AVATOR';//存放用户头像
var UPLOADCOMMON = 'UPLOAD_COMMON';
var SHOPMAIN = "SHOP_MAIN";
var UPLOADCOMMENT = '<?php echo UPLOAD_COMMENT; ?>';// 存放评论
var temp = "__TEMP__/";//外置JS调用
var STATIC = "__STATIC__";
$(function(){
	img_lazyload();
});

//页面底部选中
function bottomActive(event){
	clearButton();
	if(event == "#bottom_home"){
		$("#bottom_home").find("img").attr("src","__TEMP__/<?php echo $style; ?>/public/images/home_check.png");
	}else if(event == "#bottom_classify"){
		$("#bottom_classify").find("img").attr("src","__TEMP__/<?php echo $style; ?>/public/images/classify_check.png");
	}else if(event == "#bottom_stroe"){
		$("#bottom_stroe").find("img").attr("src","__TEMP__/<?php echo $style; ?>/public/images/store_check.png");
	}else if(event == "#bottom_cart"){
		$("#bottom_cart").find("img").attr("src","__TEMP__/<?php echo $style; ?>/public/images/cart_check.png");
	}else if(event == "#bottom_member"){
		$("#bottom_member").find("img").attr("src","__TEMP__/<?php echo $style; ?>/public/images/user_check.png");
	}
}

function clearButton(){
	$("#bottom_home").find("img").attr("src","__TEMP__/<?php echo $style; ?>/public/images/home_uncheck.png");
	$("#bottom_classify").find("img").attr("src","__TEMP__/<?php echo $style; ?>/public/images/classify_uncheck.png");
	$("#bottom_stroe").find("img").attr("src","__TEMP__/<?php echo $style; ?>/public/images/store_uncheck.png");
	$("#bottom_cart").find("img").attr("src","__TEMP__/<?php echo $style; ?>/public/images/cart_uncheck.png");
	$("#bottom_member").find("img").attr("src","__TEMP__/<?php echo $style; ?>/public/images/user_uncheck.png");
}

//图片懒加载
function img_lazyload(){
	$("img.lazy_load").lazyload({
		threshold : 0,
		effect : "fadeIn", //淡入效果
		skip_invisible : false
	})
}
</script>
<style>
body{max-width: 640px;}
body .sub-nav.nav-b5 dd i {margin: 3px auto 5px auto;}
body .fixed.bottom {bottom: 0;}
.mask-layer-loading{position: fixed;width: 100%;height: 100%;z-index: 999999;top: 0;left: 0;text-align: center;display: none;}
.mask-layer-loading i,.mask-layer-loading img{text-align: center;color:#000000;font-size:50px;position: relative;top:50%;}
.sub-nav.nav-b5 dd{width:25%;font-size:14px;}
*{user-select: text;-webkit-user-select: text;-moz-user-select: text;}
</style>

<link rel="stylesheet" type="text/css" href="__TEMP__/<?php echo $style; ?>/public/css/foundation.css">
<link rel="stylesheet" type="text/css" href="__TEMP__/<?php echo $style; ?>/public/css/normalize.css">
<link rel="stylesheet" type="text/css" href="__TEMP__/<?php echo $style; ?>/public/css/common-v4.4.css">
<meta class="foundation-data-attribute-namespace">
<meta class="foundation-mq-xxlarge">
<meta class="foundation-mq-xlarge">
<meta class="foundation-mq-large">
<meta class="foundation-mq-medium">
<meta class="foundation-mq-small">
<style  type="text/css">
.button-submit{width:90%;margin:50px auto 0;}
.button-submit button{color:#FFF;background-color:#E03115;font-size:15px;border:none;line-height:40px;height:40px;}
.personal-center .side-nav{margin-top:68px;}
#divInfo>.side-nav>li{margin:0 7px 0 5px;padding:0 0 0 5px;height: 35px;line-height: 30px;min-height: 35px;border-bottom: 1px solid #f1f1f1;}
#divInfo>.side-nav>li:first-child{padding-bottom: 8px;margin-top: 0;padding:0 0 8px;height: 44px;}
.value.touxiang{float: left;}
.personal-center .side-nav{margin-top:45px;padding-top:7px;}
.personal-center .text{font-size: 13px;}
#divInfo>.side-nav>li.border-bottom-none{border-bottom: none;}
#divInfo>.side-nav>li.border-bottom-none img{margin-right: 0;border-radius: 0;width: 32px;height: auto;}
.body-gray{background:#f5f5f5;}
.mt-55.mlr-15 input{box-shadow: none;margin: 0;height: 35px;border: none;max-width: 72%;min-width: 60%;display: inline-block;font-size: 14px;}
.mt-55.mlr-15>div{line-height:50px;padding-left:15px;overflow: hidden;background: #fff;}
.mt-55.mlr-15>div:first-child{margin-top:45px;}
.mt-55.mlr-15>div>span{width: 28%;font-size: 14px;display: block;float:left;}
.mt-55.mlr-15>div>span.left-img{width: 16%;}
.mt-55.mlr-15>div>span>img{width: 26px;height:auto;float: left;margin-top: 16px;}
.border_right{border-right: 1px solid #ddd;height: 24px;width: 2px;float: left;margin-top: 16px;margin-left: 14px;}
.mt-55.mlr-15 input:focus{background: #fff;}
.personal-center .value{font-size: 12px;color: #999;}
.personal-center .value.touxiang{display: block;width: 40px;height: 40px;line-height: 40px;text-align: center;border-radius: 50%;border: 1px solid #e6e6e6;overflow: hidden;}
.personal-center .value img{max-width:100%;max-height: 100%;width:auto;height:auto;vertical-align: middle;    display: block;}
.personal-center .arrow, .personal-center .head-arrow{margin-top: 10px;}
.personal-center .set_a{color: #29afe4;}
.mt-55.mlr-15>div.threeBind{padding-left: 0;border-bottom: 1px solid #ddd;border-top: 1px solid #ddd;margin-top: 54px;}
.mt-55.mlr-15>div.threeBind ul{overflow: hidden;margin:0 0 0 0.5rem;}
.mt-55.mlr-15>div.threeBind ul li{overflow: hidden;line-height: 35px;margin-bottom: 0;}
.mt-55.mlr-15>div.threeBind ul li>img:first-child{float: left;margin-top: 9px;max-width: 26px;height: auto;}
.mt-55.mlr-15>div.threeBind ul li>a{display: block;float: left;border-bottom: 1px solid #ddd;width: 91%;color: #333;font-size: 14px;padding-left: 6px;height: 42px;line-height: 42px;}
.mt-55.mlr-15>div.threeBind ul li>a:after{clear: both;}
.mt-55.mlr-15>div.threeBind ul li:last-child>a{border-bottom:0px;}
.mt-55.mlr-15>div.threeBind ul li>a>div{float: right;}
.mt-55.mlr-15>div.threeBind ul li>a>div>span:first-child{color: #999;}
.mt-55.mlr-15>div.threeBind ul li>a>div>span:first-child.wei_span{color: #00A0E9;}
.mt-55.mlr-15>div.threeBind ul li>a>div>span:last-child{border-right: 1px solid #ddd;border-bottom: 1px solid #ddd;transform: rotate(-46deg);-ms-transform: rotate(-46deg);-moz-transform: rotate(-46deg);-webkit-transform: rotate(-46deg);-o-transform: rotate(-46deg);width: 12px;height: 12px;display: block;float: right;margin: 13px 8px 10px 0;}
.sendOutCode{border: 1px solid #E03115!important;color: #E03115;padding:0;width: 30px;background: #fff;border-radius: 4px;min-width: 25% !important;height: 25px;font-size: 12px;margin-left: 20px;}
</style>

</head>
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
<body class="body-gray" style="margin:auto;">
	
<section class="head">
	<a class="head_back" id="backoutapp" onclick="backPage()" href="javascript:void(0)"><i class="icon-back"></i></a>
	<div class="head-title" id="title"><?php echo lang('member_personal_data'); ?></div>
</section>

	<!-- showBox弹出框 -->
	<div class="motify" style="display: none;">
		<i class="show_type warning"></i>
		<div class="motify-inner"><?php echo lang('pop_up_prompt'); ?></div>
	</div>

	
<div class="personal-complete">
	<div class="personal-complete-tip" id="personaltip"></div>
	<div class="personal-center" id="divInfo">
		<ul class="side-nav" id="list">
			<li>
				<div class="cont-value" style="padding:0;">
					<a href="<?php echo __URL('APP_MAIN/member/modifyface'); ?>">
						<?php if($member_img != '' and $member_img != '0'): ?>
							<span class="value touxiang"><img src="<?php echo __IMG($default_headimg); ?>" class="lazy_load" data-original="<?php echo __IMG($member_img); ?>" /></span>
						<?php else: ?>
							<span class="value touxiang"><img src="<?php echo __IMG($default_headimg); ?>" /></span>
						<?php endif; ?>
						
					</a>
				</div>
			</li>
			
			<li isnew="False">
				<a href="javascript:void(0)">
					<div class="title">
						<i></i>
						<span class="text"><?php echo lang('account_number'); ?></span>
					</div>
					<div class="cont-value">
						<i></i><span class="value"><?php echo $member_info['user_info']['user_name']; ?></span>
					</div>
				</a>
			</li>
			
			<li isnew="False">
				<a href="javascript:void(0)">
					<div class="title">
						<i></i>
						<span class="text" tage="nickname"><?php echo lang('member_nickname'); ?></span>
					</div>
					<div class="cont-value">
						<i class="arrow"></i><span class="value"  id="nickname"><?php echo $member_info['user_info']['nick_name']; ?></span>
					</div>
				</a>
			</li>
			<li isnew="False">
				<a href="javascript:void(0)">
					<div class="title">
						<i></i>
						<span class="text" tage="password"><?php echo lang('password'); ?></span>
					</div>
					<div class="cont-value">
						<i class="arrow"></i><span class="value set_a"  id="password"><?php echo lang('member_modify'); ?></span>
					</div>
				</a>
			</li>
			<li >
				<a href="javascript:void(0)">
					<div class="title">
						<i></i>
						<span class="text" tage="mobilephone"><?php echo lang('member_phone'); ?></span>
					</div>
					<div class="cont-value">
						<i class="arrow"></i>
						<?php if($member_info['user_info']['user_tel'] != ''): ?>
							<span class="value" id="mobilephone"><?php echo $member_info['user_info']['user_tel']; ?>&nbsp;</span>
						<?php else: ?>
							<span class="value set_a" id="mobilephone"><?php echo lang('bind_mobile_phone_number'); ?></span>
						<?php endif; ?>
					</div>
				</a>
			</li>
			<li>
				<a href="javascript:void(0)">
					<div class="title">
						<i></i>
					<span class="text" tage="qqno">QQ</span>
					</div>
					<div class="cont-value">
						<i class="arrow"></i><span class="value" id="qqno"><?php echo $member_info['user_info']['user_qq']; ?>&nbsp;</span>
					</div>
				</a>
			</li>

			<li>
				<a href="javascript:void(0)">
					<div class="title">
						<i></i>
					<span class="text" tage="email"><?php echo lang('mailbox'); ?></span>
					</div>
					<div class="cont-value">
						<i class="arrow"></i><span class="value" id="emailno"><?php echo $member_info['user_info']['user_email']; ?>&nbsp;</span>
						<input type="hidden" id="oldEmail" value="<?php echo $member_info['user_info']['user_email']; ?>">
					</div>
				</a>
			</li>
			<li class="border-bottom-none">
				<a href="javascript:void(0)">
					<div class="title">
						<i></i>
					<span class="text" tage="threeBind"><?php echo lang('third_party_account_binding'); ?></span>
					</div>
					<div class="cont-value">
						<i class="arrow"></i><span class="value" id="threeBindno">
							<!--<img src="__TEMP__/<?php echo $style; ?>/public/images/personalData_weixin.png" alt="" />-->
							<img src="__TEMP__/<?php echo $style; ?>/public/images/personalData_qq.png" alt="" />
						</span>
					</div>
				</a>
			</li>
		</ul>
		
		<div class="button-submit">
			<a id="logout" href="javascript:void(0)"><button onclick="logout()" ><?php echo lang('member_log_out'); ?></button></a>
		</div>
	</div>
</div>

<!-- 第三方绑定 -->
<form class="mt-55 mlr-15" id="edit" style="display: none;margin:45px 0 0 0;width:100%;">
	<div class="threeBind">
		<ul>
			<!-- <li><img src="__TEMP__/<?php echo $style; ?>/public/images/personalData_weixin.png" alt="" /><a href="javascript:;"><span>微信</span> <div><span class="wei_span">未绑定</span><span class="right_border">&nbsp;</span></div></a> </li> -->
			<?php if($qq_openid != ''): ?>
			<li>
				<img src="__TEMP__/<?php echo $style; ?>/public/images/personalData_qq.png"/>
					<a href="<?php echo __URL('APP_MAIN/member/removebindqq'); ?>">
						<span>QQ</span>
						<div><span><?php echo lang('member_unbound'); ?></span><span class="right_border">&nbsp;</span></div>
					</a>
				</li>
			<?php else: ?>
			<li>
				<img src="__TEMP__/<?php echo $style; ?>/public/images/personalData_qq.png" />
				<a href="<?php echo __URL('APP_MAIN/login/oauthlogin?type=QQLOGIN'); ?>">
					<span>QQ</span>
					<div><span class="wei_span"><?php echo lang('member_no_bound'); ?></span><span class="right_border">&nbsp;</span></div>
				</a>
			</li>
				
			<?php endif; ?>
			
			<!-- <li><img src="__TEMP__/<?php echo $style; ?>/public/images/personalData_weibo.png" alt="" /><a href=""><span>微博</span> <div><span class="wei_span" >未绑定</span><span class="right_border">&nbsp;</span></div></a> </li> -->
		</ul>
	</div>
</form>

<!-- 密码修改 -->
<form class="mt-55 mlr-15" id="editpassword" style="display: none;background-color:#fff;margin:45px 0 0 0;">
	<div><span><?php echo lang('current_password'); ?>：</span>
		<input type="text" id="oldpassword" style="margin:0;height:50px;border-bottom:none;" placeholder="<?php echo lang('dreambox'); ?>" onfocus="$(this).attr('type','password')">
	</div>
	
	<div><span><?php echo lang('member_new_password'); ?>：</span>
		<input type="text" id="newpassword" style="box-shadow:none;margin:0;height:35px;border:none;width:auto;display:inline-block;" placeholder="<?php echo lang('member_new_password'); ?>" onfocus="$(this).attr('type','password')"/>
		<span><?php echo lang('confirm_new_password'); ?>：</span><input type="text" id="newpassword2" placeholder="<?php echo lang('confirm_new_password'); ?>" onfocus="$(this).attr('type','password')">
	</div>
</form>

<!-- 手机号绑定 -->
<form class="mt-55 mlr-15" id="edit_mobile" style="display: none;background-color:#fff;margin-top: 10px;margin:0;margin-top: 8px;">
	<div>
		<span><?php echo lang('cell_phone_number'); ?></span>
		<input type="text" id="mobile" placeholder="<?php echo lang('please_enter_your_cell_phone_number'); ?>" value='<?php echo $member_info['user_info']['user_tel']; ?>'/>
		<input type="hidden" id="oldMobile" value="<?php echo $member_info['user_info']['user_tel']; ?>">
	</div>
	<?php if($login_verify_code['pc'] == 1): ?>
	<div>
		<span><?php echo lang('member_verification_code'); ?></span>
		<input type="text" id="input_mobile_code" placeholder="<?php echo lang('please_enter_verification_code'); ?>" style="max-width: 32%;min-width: 30%;"/>
		<img id="verify_img" src="<?php echo __URL('SHOP_MAIN/captcha'); ?>" alt="captcha" onclick="this.src='<?php echo __URL('SHOP_MAIN/captcha?tag=1'); ?>'+'&send='+Math.random()" />
	</div>
	<?php endif; if($notice['noticeMobile'] == 1): ?>
	<div>
		<span><?php echo lang('mobile_phone_dynamic_code'); ?></span>
		<input type="text" id="mobile_code" placeholder="<?php echo lang('please_enter_the_mobile_phone_dynamic_code'); ?>" style="max-width: 32%;min-width: 30%;"/>
		<input type="button" class="sendOutCode" id="send_mobile" value="<?php echo lang('get_dynamic_code'); ?>" style="height: 30px;margin-left: 20px;">
	</div>
	<?php endif; ?>
</form>

<!-- 修改昵称 -->
<form class="mt-55 mlr-15" id="edit_nick_name" style="display: none;background-color:#fff;margin-top: 10px;margin:0;margin-top: 8px;">
	<div><span><?php echo lang('member_nickname'); ?></span>
		<input type="text" id="input_nick_name" placeholder="<?php echo lang('please_enter_your_nickname'); ?>" value='<?php echo $member_info['user_info']['nick_name']; ?>'/>
	</div>
</form>

<!-- 修改邮箱 -->
<form class="mt-55 mlr-15" id="edit_email" style="display: none;background-color:#fff;margin-top: 10px;margin:0;margin-top: 8px;">
	<div><span><?php echo lang('mailbox'); ?></span>
		<input type="text" id="email" placeholder="<?php echo lang('please_enter_the_mailbox'); ?>" value='<?php echo $member_info['user_info']['user_email']; ?>'/>
	</div>
	<?php if($login_verify_code['pc'] == 1): ?>
	<div>
		<span><?php echo lang('member_verification_code'); ?></span>
		<input type="text" id="input_email_code" placeholder="<?php echo lang('please_enter_verification_code'); ?>" style="max-width: 32%;min-width: 30%;" />
		<img id="verify_img" src="<?php echo __URL('SHOP_MAIN/captcha'); ?>" alt="captcha" onclick="this.src='<?php echo __URL('SHOP_MAIN/captcha?tag=1'); ?>'+'&send='+Math.random()" />
	</div>
	<?php endif; if($notice['noticeEmail'] == 1): ?>
	<div>
		<span><?php echo lang('member_mailbox_authentication_code'); ?></span>
		<input type="text" id="email_code"  placeholder="<?php echo lang('member_enter_mailbox_verification_code'); ?>" style="max-width: 32%;min-width: 30%;" />
		<input type="button" class="sendOutCode" id="send_email" value="<?php echo lang('get_validation_code'); ?>" style="height: 30px;margin-left: 20px;">
	</div>
	<?php endif; ?>
</form>

<div id="saveBtn"class="button-submit" style="display: none;">
	<a href="javascript:void(0)" onclick="btnsave()">
		<button><?php echo lang('member_preservation'); ?></button>
	</a>
</div>

	<!-- 微信登录弹出绑定手机号遮罩层 -->
	
	
	<input type="hidden" value="<?php echo $uid; ?>" id="uid"/>
	<!-- 加载弹出层 -->
	<div class="mask-layer-loading">
		<img src="__TEMP__/<?php echo $style; ?>/public/images/mask_load.gif"/>
	</div>
	
<script type="text/javascript">
var title = "";
var value = "";
var type = "";
$(function () {
	bottomActive('#bottom_member');
	$("#list li").click(function () {
		var titleTag = this.children[0].children[0].children[1];
		if (titleTag == undefined) {
			titleTag = this.children[0].children[1].children[1];
		}
		title = titleTag.innerHTML;
		type = $(titleTag).attr("tage");
		value = this.children[0].children[1].children[1];
		if (value == undefined) {
			value = this.children[0].children[2].children[1]
		}
		value = value.innerHTML;
		value = value.replace("&nbsp;", "");
		$("#value").attr("placeholder", "");
		$("#personaltip").toggle()
		if (title == "<?php echo lang('account_number'); ?>") {
			if ($(this).attr("isnew") == "False") {
				return;
			} else {
				$("#value").attr("placeholder", "<?php echo lang('please_enter_member_name'); ?>");
				$("#title").html(title);
				$("#saveBtn").toggle();
				$("#divInfo").toggle();
				$("#exit").toggle();
				$("#edit").toggle();
				return;
			}
		}
		if (title == "<?php echo lang('password'); ?>") {
			$("#title").html("<?php echo lang('change_password'); ?>");
			$("#saveBtn").toggle();
			$("#divInfo").toggle();
			$("#exit").toggle();
			$("#editpassword").toggle();
		}else if(title == "<?php echo lang('member_phone'); ?>"){
			$("#value").attr("placeholder", "<?php echo lang('please_enter_your_cell_phone_number'); ?>!");
			$("#title").html("<?php echo lang('bind_mobile_phone_number'); ?>");
			$("#saveBtn").toggle();
			$("#divInfo").toggle();
			$("#exit").toggle();
			$("#edit_mobile").toggle();
		}else if(title == "<?php echo lang('member_nickname'); ?>"){
			$("#value").attr("placeholder", "<?php echo lang('please_enter_your_nickname'); ?>");
			$("#title").html("<?php echo lang('modify_nickname'); ?>");
			$("#saveBtn").toggle();
			$("#divInfo").toggle();
			$("#exit").toggle();
			$("#edit_nick_name").toggle();
		}else if(title == "<?php echo lang('mailbox'); ?>"){
			$("#edit_email").toggle();
			$("#title").html(title);
			$("#saveBtn").toggle();
			$("#divInfo").toggle();
			$("#exit").toggle();
			$("#value").attr("placeholder", "<?php echo lang('please_enter_the_mailbox'); ?>!");
			$("#input_ico").attr("src","__TEMP__/<?php echo $style; ?>/public/images/center_email.png");
		} else {
			$("#title").html(title);
			$("#value").val(value);
			$("#saveBtn").toggle();
			$("#divInfo").toggle();
			$("#exit").toggle();
			$("#edit").toggle();
			if(title=="<?php echo lang('third_party_account_binding'); ?>"){
				$('.button-submit').hide();
			}
			if(title == "<?php echo lang('member_real_name'); ?>"){
				$("#value").attr("placeholder", "<?php echo lang('member_enter_your_real_name'); ?>!");
				$("#input_ico").attr("src","__TEMP__/<?php echo $style; ?>/public/images/center_user.png");
			}else if(title == "QQ<?php echo lang(''); ?>"){
				$("#value").attr("placeholder", "<?php echo lang('please_enter_qq_number'); ?>");
				$("#input_ico").attr("src","__TEMP__/<?php echo $style; ?>/public/images/center_qq.png");
			}else if(title == "<?php echo lang('wechat'); ?>"){
				$("#value").attr("placeholder", "<?php echo lang('please_enter_a_micro_signal'); ?>");
				$("#input_ico").attr("src","__TEMP__/<?php echo $style; ?>/public/images/center_weixn.png");
			}
		}
	});
});
	
//点击返回
function backPage(){
	var title=$("#title").html();
	if(title=="<?php echo lang('member_personal_data'); ?>"){
		var shop_id = "<?php echo $shop_id; ?>";
		if(shop_id == 0){
			window.location.href=__URL("APP_MAIN/member/index");
		}
		else{
			window.location.href=__URL("APP_MAIN/member/index?shop_id="+shop_id);
		}
	}else{
		window.location.href=window.location.href;
	}
}

function logout(){
	$.ajax({
		url: "<?php echo __URL('APP_MAIN/member/logout'); ?>",
		type: "post",
		success: function (res) {
			if (res['code'] > 0) {
				window.location.href=__URL("APP_MAIN/login/index");
			} else if(res["message"]!=null){
				showBox(res["message"],"error");
			}
		}
	})
}

$("#logout").click(function (){
	var json ={ "logout" : "1" }
	window.webkit.messageHandlers.logout.postMessage(json);
});

$("#backoutapp").click(function (){
	var json ={ "center" : "1" }
	window.webkit.messageHandlers.center.postMessage(json);
});

function btnsave() {
	var url = "APP_MAIN";
	var value = "";
	switch (type) {
		case "password":
			//密码(6-16)位
			var oldpassword = $("#oldpassword").val();
			var newpassword = $("#newpassword").val();
			var newpassword2 = $("#newpassword2").val();
			var reg = /^[\@A-Za-z0-9\!\#\$\%\^\&\*\.\~]{6,16}$/;
 			if (oldpassword.length == 0) {
				showBox("<?php echo lang('please_enter_the_original_password'); ?>","warning");
				return false;
			}
			if (!reg.test(newpassword)) {
				showBox("<?php echo lang('please_enter_6_20_new_passwords'); ?>","warning");
				return false;
			}
			if(newpassword2!=newpassword){
				showBox("<?php echo lang('the_two_password_is_inconsistent'); ?>","warning");
	 			return false;
			}
			$.ajax({
				url: "<?php echo __URL('APP_MAIN/member/modifypassword'); ?>",
				data: { "new_password":newpassword,"old_password":oldpassword },
				type: "post",
				success: function (res) {
					if (res['code']> 0) {
						backPage();
					} else {
						showBox("<?php echo lang('original_password_error'); ?>","error");
					}
				}
			});
		break;
		case "truename":
			var truename = $.trim($("#truename").text());
			value = $.trim($("#value").val());
			if (value == "") {
				showBox("<?php echo lang('real_name_cannot_empty'); ?>","warning");
				return false;
			}
			if (truename == value) {
				showBox("<?php echo lang('consistent_with_the_original_real_name_without_modification'); ?>","warning");
	 			return false;
			}
			$.ajax({
				url: "<?php echo __URL('APP_MIAN/member/updaterealname'); ?>",
				data: { "truename": value },
				type: "post",
				success: function (res) {
					if (res["retval"]  == 1) {
						$("#truename").text(value);
						backPage();
					} else {
						showBox("<?php echo lang('unable_to_change'); ?>","error");
					}
				}
			});
		break;
		case "mobilephone":
			var oldMobile = $.trim($("#oldMobile").val());
			var value = $.trim($("#mobile").val());
			var vertification = $("#input_mobile_code").val();
			var code = $("#mobile_code").val();
			var result = '';
			var res ='';
			var mobile_not_exits = 0;
			if (value == oldMobile) {
				showBox("<?php echo lang('consistent_with_the_original_mobile_phone_number_without_modification'); ?>","warning");
				return false;
			}
			if (value == "") {
				showBox("<?php echo lang('mobile_phones_must_not_be_empty'); ?>","warning");
	 			return false;
			}else{

				if(value.search(/^(13[0-9]|14[579]|15[0-3,5-9]|16[6]|17[0135678]|18[0-9]|19[89])\d{8}$/) == -1){
					$("#mobile").trigger("focus");
					showBox("<?php echo lang('phone_is_not_right_format'); ?>","warning");
					return false;
				}
				<?php if($notice['noticeMobile'] != 1): ?>
					$.ajax({
						type: "post",
						url: "<?php echo __URL('APP_MAIN/login/mobile'); ?>",
						data: {"mobile":value},
						async: false,
						success: function(data){
							if(data) mobile_not_exits = 1;
						}
					});
				<?php endif; ?>
			}
			<?php if($login_verify_code['pc'] == 1): ?>
				if (vertification == "") {
					showBox("<?php echo lang('please_enter_verification_code'); ?>","warning");
					return false;
				}
				<?php if($notice['noticeMobile'] != 1): ?>
					$.ajax({
						url: "<?php echo __URL('APP_MAIN/member/check_code'); ?>",
						data: { "vertification": vertification},
						type: "post",
						async : false,
						success : function(data){
							if(data['code'] < 0){
								showBox(data['message'],"warning");
								res = true;
							}
							return res;
						}
					});
					if(res){
						return false;
					}
				<?php endif; endif; ?>
			//判断手机号是否已被绑定
			if(mobile_not_exits == 1){
				showBox("<?php echo lang('the_phone_number_already_exists'); ?>","warning");
				return false;
			}
			<?php if($notice['noticeMobile'] == 1): ?>
				if(code.length == 0){
					showBox("<?php echo lang('member_enter_mobile_verification_code'); ?>","warning");
					return false;
				}else{
					$.ajax({
						url: "<?php echo __URL('APP_MAIN/member/check_dynamic_code'); ?>",
						data: { "vertification": code },
						type: "post",
						async : false,
						success : function(data){
							if(data['code'] < 0){
								showBox(data['message'],"success");
								result = true;
							}
							return result;
						}
					})
					if(result){
						return false;
					}
				}
		<?php endif; ?>
			$.ajax({
				url: "<?php echo __URL('APP_MAIN/member/modifymobile'); ?>",
				data: { "mobilephone": value },
				type: "post",
				success: function (res) {
					if (res["code"] > 0) {
						$("#mobilephone").text(value);
						backPage();
					} else {
						showBox(res["message"],"error");
					}
				}
			});
		break;
		case "qqno":
			value = $.trim($("#value").val());
			if (value == "") {
				showBox("QQ<?php echo lang('can_not_be_empty'); ?>");
				return false;
			}
			$.ajax({
				url: "<?php echo __URL('APP_MAIN/member/modifyqq'); ?>",
				data: {"qqno": value },
				type: "post",
				success: function (res) {
					if (res["code"] > 0) {
						backPage();
						$("#qqno").text(value);
					} else {
						showBox(res["message"],"error");
					}
				}
			});
		break;
		case "wxno":
			value = $.trim($("#value").val());
			if (value == "") {
				showBox("<?php echo lang('wechat_can_not_be_empty'); ?>","warning");
				return false;
			}
			$.ajax({
				url: "<?php echo __URL('APP_MAIN/member/modifyqq'); ?>",
				data: { "wxno": value },
				type: "post",
				success: function (res) {
					if (res["retval"]== 1) {
						backPage();
						$("#wxno").text(value);
					} else {
						showBox("<?php echo lang('unable_to_change'); ?>","error");
					}
				}
			});
		break;
		case 'email':
			var oldEmail = $("#oldEmail").val();
			var value = $("#email").val();
			var vertification = $("#input_email_code").val();
			var code = $("#email_code").val();
			var result = '';
			var res ='';
			var email_not_exits = 0;
			if(value == oldEmail){
				showBox("<?php echo lang('consistent_with_the_original_mailbox_no_change_required'); ?>","warning");
				return false;
			}
			if (value == "") {
				showBox("<?php echo lang('mailbox_cannot_be_empty'); ?>","warning");
				return false;
			}else{
				$.ajax({
					type: "post",
					url: "<?php echo __URL('APP_MAIN/login/email'); ?>",
					data: {"email":value},
					async: false,
					success: function(data){
						if(data) email_not_exits = 1;
					}
				});
			}
			<?php if($login_verify_code['pc'] == 1): ?>
				if (vertification == "") {
					showBox("<?php echo lang('please_enter_verification_code'); ?>","warning");
					return false;
				}
				<?php if($notice['noticeEmail'] != 1): ?>
				$.ajax({
					url: "<?php echo __URL('APP_MAIN/member/check_code'); ?>",
					data: { "vertification": vertification},
					type: "post",
					async : false,
					success : function(data){
						if(data['code'] < 0){
							showBox(data['message'],"warning");
							res = true;
						}
						return res;
					}
				});
				if(res){
					return false;
				}
				<?php endif; endif; ?>
			if(email_not_exits == 1){
				showBox("<?php echo lang('mailbox_already_exists'); ?>","warning");
				return false;
			}
			<?php if($notice['noticeEmail'] == 1): ?>
				if(code.length == 0){
					showBox("<?php echo lang('member_enter_mailbox_verification_code'); ?>","warning");
					return false;
				}else{
					$.ajax({
						url: "<?php echo __URL('APP_MAIN/member/check_dynamic_code'); ?>",
						data: { "vertification": code },
						type: "post",
						async : false,
						success : function(data){
							if(data['code'] < 0){
								showBox(data['message'],"success");
								result = true;
							}
							return result;
						}
					});
					if(result){
						return false;
					}
				}
			<?php endif; ?>
			$.ajax({
				url: "<?php echo __URL('APP_MAIN/member/modifyemail'); ?>",
				data: { "email": value },
				type: "post",
				success: function (res) {
					if (res["code"]== 1) {
						backPage();
						$("#emailno").text(value);
					} else {
						showBox("<?php echo lang('unable_to_change'); ?>","error");
					}
				}
			});
			break;
		case "nickname":
			var nickname = $("#nickname").text();
			value = $.trim($("#input_nick_name").val());
			if(nickname == value){
				showBox("<?php echo lang('consistent_with_the_original_nickname_without_modification'); ?>","warning");
				return false;
			}
			if(value == ""){
				showBox("<?php echo lang('member_nicknames_cannot_empty'); ?>","warning");
				return false;
			}
			$.ajax({
				url: "<?php echo __URL('APP_MAIN/member/modifynickname'); ?>",
				data: { "nickname": value },
				type: "post",
				success: function (res) {
					if(res.code >0){
						$("#emailno").text(value);
						backPage();
					}else{
						showBox(res.message,"error");
					}
				}
			});
		break;
	}
}

//发送邮箱验证码
$("#send_email").click(function (){
	var email = $("#email").val();
	var email_code = $("#input_email_code").val();
	//验证邮箱格式是否正确
	if(email.search(/\w+([-+.]\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*/) == -1){
		$("#email").trigger("focus");
		showBox("<?php echo lang('mailbox_format_is_incorrect'); ?>","warning");
		return false;
	}
	//验证手机号是否已经注册
	$.ajax({
		type: "post",
		url: "<?php echo __URL('APP_MAIN/login/email'); ?>",
		data: {"email":email},
		async: false,
		success: function(data){
			if(data){
				showBox("<?php echo lang('mailbox_already_exists'); ?>","warning");
				return false;
			}else{
				//判断输入的验证码是否正确 
				$.ajax({
					type: "post",
					url: "<?php echo __URL('APP_MAIN/member/sendbindcode'); ?>",
					data: {"email":email,"vertification":email_code,"type":"email"},
					success: function(data){
						if(data['code']== 0){
							time();
						}else{
							showBox(data["message"],"warning");
							$(".verifyimg").attr("src","<?php echo __URL('SHOP_MAIN/captcha'); ?>");
							return false;
						}
					}
				});
			}
		}
	});
});

//发送短信验证码
$("#send_mobile").click(function (){
	var mobile = $("#mobile").val();
	var mobile_code = $("#input_mobile_code").val();
	//验证手机格式是否正确
	if(mobile.search(/^(13[0-9]|14[579]|15[0-3,5-9]|16[6]|17[0135678]|18[0-9]|19[89])\d{8}$/) == -1){
		$("#mobile").trigger("focus");
		shoxBox("<?php echo lang('phone_is_not_right_format'); ?>","warning");
		return false;
	}
	//验证手机号是否已经注册
	$.ajax({
		type: "post",
		url: "<?php echo __URL('APP_MAIN/login/mobile'); ?>",
		data: {"mobile":mobile},
		async: false,
		success: function(data){
			if(data){
				showBox("<?php echo lang('the_phone_number_already_exists'); ?>","error");
				return false;
			}else{
		 		//判断输入的验证码是否正确 
				$.ajax({
					type: "post",
					url: "<?php echo __URL('APP_MAIN/member/sendbindcode'); ?>",
					data: {"mobile":mobile,"vertification":mobile_code,"type":"mobile"},
					success: function(data){
						if(data['code']== 0){
							time();
						}else{
							layer.msg(data["message"]);
							$(".verifyimg").attr("src","<?php echo __URL('SHOP_MAIN/captcha'); ?>");
							return false;
						}
					}
				});
			}
		}
	});
});

var wait=120;
function time() {
	if (wait == 0) {
		$(".sendOutCode").removeAttr("disabled");
		$(".sendOutCode").val("<?php echo lang('get_validation_code'); ?>");
		wait = 120; 
	} else { 
		$(".sendOutCode").attr("disabled", 'disabled');
		$(".sendOutCode").val(wait+"s<?php echo lang('post_resend'); ?>");
		wait--; 
		setTimeout(function() {
			time();
		},1000);
	}
}
</script>

</body>
</html>