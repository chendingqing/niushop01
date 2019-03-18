<?php if (!defined('THINK_PATH')) exit(); /*a:5:{s:51:"template/wap\default_new\Member\memberIndexB2C.html";i:1540606367;s:34:"template/wap\default_new\base.html";i:1530674553;s:38:"template/wap\default_new\urlModel.html";i:1510824803;s:82:"template/wap\default_new\CustomTemplate\controlCommonCustomTemplateBaseFooter.html";i:1520390541;s:36:"template/wap\default_new\footer.html";i:1510195126;}*/ ?>
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

<link rel="stylesheet" type="text/css" href="__TEMP__/<?php echo $style; ?>/public/css/member_index.css">
<style>
.head{border-bottom:0;}
.member{width: 64%;float: right;margin-top: 26px;color:#fff;}
.img{width:100%;margin: 5px 0;}
.code{background: #fff;overflow: hidden;}
.rec{height: 17px;padding: 10px 20px;border-bottom: 1px solid #E2E1E1;line-height:17px;}
.module-icon.memberCoupon {
background:url(__TEMP__/<?php echo $style; ?>/public/images/Coupon.png) no-repeat;width: 22px;height: 22px;float: left;margin-top: 9px;margin-right: 10px;display: inline-block;background-size:100% 100%;}
.member-info{background: rgba(255,79,79, 0.8);float:left;width:33%;color: #fff;text-align: center;line-height:41px;}
.vertical-bar{border-left: 1px solid rgba(250,250,250,0.6);height: 32px;vertical-align: middle;display: inline-block;margin-top:5px;}
.namer{position: absolute;left: 103px;top: 30px;}
.signin{border-radius: 3px;font-size: 10px;line-height: 14px;padding: 2px 9px;float: left;position: absolute;left: 20px;top: 5px;}
.no{color: #F93F40;background: yellow;border: 1px solid yellow;}
.yes{color: yellow;border: 1px solid yellow;}
.last a{position: relative;}
.tips{width: 16px;height: 16px;background: #F93F40;border:1px solid #F93F40;border-radius: 50%;font-size: 12px;line-height: 16px;text-align: center;color: #fff;position: absolute;z-index: 10;right: -10px;top: -6px;}
.member_foot{width: 100%;height: 20px;background: url("__TEMP__/<?php echo $style; ?>/public/images/member_foot.png") center no-repeat;background-size: 100% 20px;}
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
	
	<!-- showBox弹出框 -->
	<div class="motify" style="display: none;">
		<i class="show_type warning"></i>
		<div class="motify-inner"><?php echo lang('pop_up_prompt'); ?></div>
	</div>

	
<?php $service = new data\service\Member;$member_info = $service->getMemberDetail(0);$member_info = json_encode($member_info);$member_info = json_decode($member_info, ture); ?>
<div class="panel memberhead">
	<div class="member_head">
		<a href="javascript:;">
			<p style="margin: 20px 0 10px 0;position:relative;">
				<?php $service = new data\service\Config;$integralconfig = $service->getIntegralConfig("0");$integralconfig = json_encode($integralconfig);$integralconfig = json_decode($integralconfig, ture); if($integralconfig['sign_integral'] == 1): $service = new data\service\Member;$isSign = $service->getIsMemberSign("$uid","0");$isSign = json_encode($isSign);$isSign = json_decode($isSign, ture); if($isSign == 0): ?>
					<span class="signin no" onclick="signIn();"><?php echo lang('sign_in'); ?></span>
					<?php else: ?>
					<span class="signin yes"><?php echo lang('signed_in'); ?></span>
					<?php endif; endif; ?>
				
				<i class="face_img" onclick="location.href='<?php echo __URL('APP_MAIN/member/personaldata?shop_id='.$shop_id); ?>'">
				<?php if($member_info['user_info']['user_headimg'] == ''): ?>
					<img src="<?php echo __IMG($default_headimg); ?>" />
				<?php else: ?>
					<img src="<?php echo __IMG($default_headimg); ?>" class="lazy_load" data-original="<?php echo __IMG($member_info['user_info']['user_headimg']); ?>"/>
				<?php endif; ?>
				</i>
				<span class="account_management" onclick="location.href='<?php echo __URL('APP_MAIN/member/personaldata?shop_id='.$shop_id); ?>'">账户管理<i class="data-go"></i></span>
			</p>
		</a>
		<p class="info-content-top">
			<span><?php echo lang('member_balance'); ?></span>
			<span><?php echo $member_info["user_info"]['nick_name']; ?></span>
			<span><?php echo lang('goods_integral'); ?></span>
		</p>
		<p class="info-content-bottom">
			<a href="<?php echo __URL('APP_MAIN/member/balancewater?shop_id='.$shop_id); ?>"><span><?php echo $member_info['balance']; ?></span></a>
			<span><mark class="level"><?php echo $member_info['level_name']; ?></mark></span>
			<a href="<?php echo __URL('APP_MAIN/member/integralwater?shop_id='.$shop_id); ?>"><span><?php echo $member_info['point']; ?></span></a>
		</p>
	</div>
	<div class="member_foot"></div>
</div>
<div class="control">
	<div class="control_l">
		<span class="control_l_content selected" data-flag="regular-orders"><?php echo lang('regular_orders'); ?></span>
	</div>
	<div class="control_r"><a href="<?php echo __URL('APP_MAIN/order/myorderlist?shop_id='.$shop_id); ?>" class="right_href"><?php echo lang('member_view_all_orders'); ?></a></div>
</div>

<div class="panel member-nav js-regular-orders">
	<ul class="fu clear" >
		<li class="last" >
			<a href="<?php echo __URL('APP_MAIN/order/myorderlist?status=0&shop_id='.$shop_id); ?>">
				<img src="__TEMP__/<?php echo $style; ?>/public/images/member_icon/pay.png">
				
				<?php $service = new data\service\Order;$unpaidOrder = $service->getOrderNumByOrderStatu("order_status=0 and order_type in(1,3) and buyer_id=$uid");$unpaidOrder = json_encode($unpaidOrder);$unpaidOrder = json_decode($unpaidOrder, ture); if($unpaidOrder != 0): ?>
					<div class="tips"><?php echo $unpaidOrder; ?></div>
				<?php endif; ?>
				
				<p><?php echo lang('member_pending_payment'); ?></p>
			</a>
		</li>
		<li class="last">
			<a href="<?php echo __URL('APP_MAIN/order/myorderlist?status=1&shop_id='.$shop_id); ?>">
				<img src="__TEMP__/<?php echo $style; ?>/public/images/member_icon/send.png">
				<?php $service = new data\service\Order;$shipmentPendingOrder = $service->getOrderNumByOrderStatu("order_status=1 and order_type in(1,3) and buyer_id=$uid");$shipmentPendingOrder = json_encode($shipmentPendingOrder);$shipmentPendingOrder = json_decode($shipmentPendingOrder, ture); if($shipmentPendingOrder != 0): ?>
				<div class="tips"><?php echo $shipmentPendingOrder; ?></div>
				<?php endif; ?>
				
				<p><?php echo lang('member_shipment_pending'); ?></p>
			</a>
		</li>
		<li class="last">
			<a href="<?php echo __URL('APP_MAIN/order/myorderlist?status=2&shop_id='.$shop_id); ?>">
				<img src="__TEMP__/<?php echo $style; ?>/public/images/member_icon/recieve.png">
				<?php $service = new data\service\Order;$goodsNotReceivedOrder = $service->getOrderNumByOrderStatu("order_status=2 and order_type in(1,3) and buyer_id=$uid");$goodsNotReceivedOrder = json_encode($goodsNotReceivedOrder);$goodsNotReceivedOrder = json_decode($goodsNotReceivedOrder, ture); if($goodsNotReceivedOrder != 0): ?>
				<div class="tips"><?php echo $goodsNotReceivedOrder; ?></div>
				<?php endif; ?>
				
				<p><?php echo lang('member_goods_received'); ?></p>
			</a>
		</li>
		<li class="last">
			<a href="<?php echo __URL('APP_MAIN/order/myorderlist?status=3&shop_id='.$shop_id); ?>">
				<img src="__TEMP__/<?php echo $style; ?>/public/images/member_icon/received.png">
				<p><?php echo lang('member_received_goods'); ?></p>
			</a>
		</li>
		<li class="last">
			<a href="<?php echo __URL('APP_MAIN/order/myorderlist?status=4&shop_id='.$shop_id); ?>">
				<img src="__TEMP__/<?php echo $style; ?>/public/images/member_icon/reback.png"/>
				<?php $service = new data\service\Order;$refundOrder = $service->getOrderNumByOrderStatu("order_status in(-1,-2) and order_type in(1,3) and buyer_id=$uid");$refundOrder = json_encode($refundOrder);$refundOrder = json_decode($refundOrder, ture); if($refundOrder != 0): ?>
				<div class="tips"><?php echo $refundOrder; ?></div>
				<?php endif; ?>
				
				<p><?php echo lang('refund_after_sale'); ?></p>
			</a>
		</li>
	</ul>
</div>
<?php if($is_open_virtual_goods): ?>
<div class="panel member-nav js-virtual-orders" style="display:none;">
	<ul class="fu clear" style="background: #ffffff;">
		<li class="last" >
			<a href="<?php echo __URL('APP_MAIN/order/myvirtualorderlist?status=0&shop_id='.$shop_id); ?>">
				<img src="__TEMP__/<?php echo $style; ?>/public/images/pay.png">
				<?php $service = new data\service\Order;$unpaidOrder = $service->getOrderNumByOrderStatu("order_status=0 and order_type=2 and buyer_id=$uid");$unpaidOrder = json_encode($unpaidOrder);$unpaidOrder = json_decode($unpaidOrder, ture); if($unpaidOrder != 0): ?>
					<div class="tips"><?php echo $unpaidOrder; ?></div>
				<?php endif; ?>
				
				<p><?php echo lang('member_pending_payment'); ?></p>
			</a>
		</li>
		<li class="last">
			<a href="<?php echo __URL('APP_MAIN/order/myvirtualorderlist?status=5&shop_id='.$shop_id); ?>">
				<img src="__TEMP__/<?php echo $style; ?>/public/images/recieved.png">
				<?php $service = new data\service\Order;$virtual_wait_evaluate = $service->getOrderNumByOrderStatu("order_status in(3,4) and order_type=2 and buyer_id=$uid and is_evaluate=0");$virtual_wait_evaluate = json_encode($virtual_wait_evaluate);$virtual_wait_evaluate = json_decode($virtual_wait_evaluate, ture); if($virtual_wait_evaluate != 0): ?>
					<div class="tips"><?php echo $virtual_wait_evaluate; ?></div>
				<?php endif; ?>
				
				<p><?php echo lang('member_pending_evaluation'); ?></p>
			</a>
		</li>
	</ul>
</div>
<?php endif; ?>


<div class='member_list'>
<?php if(is_array($menu_arr) || $menu_arr instanceof \think\Collection || $menu_arr instanceof \think\Paginator): $i = 0; $__LIST__ = $menu_arr;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$arr_item): $mod = ($i % 2 );++$i;?>
	<ul>
		<?php if(is_array($arr_item) || $arr_item instanceof \think\Collection || $arr_item instanceof \think\Paginator): $i = 0; $__LIST__ = $arr_item;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;if(!(empty($vo['url']) || (($vo['url'] instanceof \think\Collection || $vo['url'] instanceof \think\Paginator ) && $vo['url']->isEmpty()))): ?>
			<li>
				<a href="<?php echo __URL('APP_MAIN/'.$vo['url']); ?>">
					<i class="member-icon icon_<?php echo $vo['class']; ?>"></i>
					<span ><?php echo $vo['title']; ?></span>
				</a>
			</li>
			<?php endif; endforeach; endif; else: echo "" ;endif; ?> 
	</ul>
<?php endforeach; endif; else: echo "" ;endif; ?>
</div>

<script type="text/javascript">
$(function(){
	bottomActive('#bottom_member');
	//$("#wchat_binding").css("display":"none;");

	$(".control_l_content").click(function(){
		var flag = $(this).attr("data-flag");
		$(".js-regular-orders").hide();
		$(".js-virtual-orders").hide();
		$(".js-" + flag).show();
		$(".control_l_content").removeClass("selected");
		$(this).addClass("selected");
		if(flag == "regular-orders"){
			$(".right_href").attr("href","<?php echo __URL('APP_MAIN/order/myorderlist?shop_id='.$shop_id); ?>");
		}else{
			$(".right_href").attr("href","<?php echo __URL('APP_MAIN/order/myvirtualorderlist?shop_id='.$shop_id); ?>");
		}
	});
})	
function signIn(){
	$.ajax({
		type : "post",
		url : "<?php echo __URL('APP_MAIN/member/signIn'); ?>",
		data : { "sign" : true },
		success : function(data){
			if(data['code']>0){
				$(".signin").not(":hidden").removeClass("no").addClass("yes").text("已签到");
			}
		}
	})
}
</script>

	<!-- 微信登录弹出绑定手机号遮罩层 -->
	
	
		<?php if($custom_template_is_enable == 1): ?>
		
			<div class="js-bottom-blank" style="height:56px;"></div>
			<!-- 底部菜单 -->
<style>
.control-footer{border-top:1px solid #e5e5e5;}
.control-footer ul li{float: left;text-align: center;cursor: pointer;padding:5px 0;background: #ffffff;font-family: "微软雅黑", "Helvetica Neue", "Helvetica", Helvetica, Arial,sans-serif;}
.control-footer ul li img {width: 25px;}
.control-footer ul li label {overflow: hidden;text-overflow: ellipsis;white-space: nowrap;margin: 2px 0 0;display: block;font-size:12px;}
</style>
<div class="fixed bottom control-footer js-base-footer">
	<ul>
		<?php foreach($custom_footer as $k=>$footer_val): ?>
		<li style="width: <?php echo 1/count($custom_footer)*100; ?>%" onclick="location.href='<?php echo $footer_val['href']; ?>'">
			<?php if($footer_val['img_src'] !=''): if($k==$select_footer_index): ?>
			<img src="<?php echo __IMG($footer_val['img_src_hover']); ?>"/>
			<?php else: ?>
			<img src="<?php echo __IMG($footer_val['img_src']); ?>"/>
			<?php endif; endif; if($footer_val['menu_name'] !=''): ?>
			<label style="color:<?php echo $footer_val['color']; ?>;"><?php echo $footer_val['menu_name']; ?></label>
			<?php endif; ?>
		</li>
		<?php endforeach; ?>
	</ul>
</div>
			
		<?php else: ?>
		
			<div style="height:58px;"></div>
			<!-- 底部菜单 -->
<div class="fixed bottom">
	<div class="distribution-tip" id="distribution-tip" style="display: none;"></div>
	<dl class="sub-nav nav-b5">
		<dd id="bottom_home">
			<a href="<?php echo __URL('APP_MAIN'); ?>">
				<div class="nav-b5-relative">
					<img src="__TEMP__/<?php echo $style; ?>/public/images/home_check.png"/>
					<span><?php echo lang('home_page'); ?></span>
				</div>
			</a>
		</dd>
		<dd id="bottom_classify">
			<a href="<?php echo __URL('APP_MAIN/goods/goodsclassificationlist'); ?>">
				<div class="nav-b5-relative">
					<img src="__TEMP__/<?php echo $style; ?>/public/images/classify_uncheck.png"/>
					<span><?php echo lang('category'); ?></span>
				</div>
			</a>
		</dd>
		<dd id="bottom_cart">
			<a href="<?php echo __URL('APP_MAIN/goods/cart'); ?>">
				<div class="nav-b5-relative">
					<img src="__TEMP__/<?php echo $style; ?>/public/images/cart_uncheck.png"/>
					<span><?php echo lang('goods_cart'); ?></span>
				</div>
			</a>
		</dd>
		<dd id="bottom_member">
			<a href="<?php echo __URL('APP_MAIN/member/index'); ?>">
				<div class="nav-b5-relative">
					<img src="__TEMP__/<?php echo $style; ?>/public/images/user_uncheck.png"/>
					<span><?php echo lang('member_member_center'); ?></span>
				</div>
			</a>
		</dd>
	</dl>
</div>
			
		<?php endif; ?>

	
	
	<input type="hidden" value="<?php echo $uid; ?>" id="uid"/>
	<!-- 加载弹出层 -->
	<div class="mask-layer-loading">
		<img src="__TEMP__/<?php echo $style; ?>/public/images/mask_load.gif"/>
	</div>
	
</body>
</html>