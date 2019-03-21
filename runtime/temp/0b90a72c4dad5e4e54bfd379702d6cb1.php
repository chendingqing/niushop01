<?php if (!defined('THINK_PATH')) exit(); /*a:17:{s:41:"template/wap\default_new\Index\index.html";i:1553151902;s:34:"template/wap\default_new\base.html";i:1553151902;s:38:"template/wap\default_new\urlModel.html";i:1553151903;s:35:"template/wap\default_new\share.html";i:1553151903;s:48:"template/wap\default_new\Index\controlSlide.html";i:1553151902;s:49:"template/wap\default_new\Index\controlSearch.html";i:1553151902;s:46:"template/wap\default_new\Index\controlNav.html";i:1553151902;s:49:"template/wap\default_new\Index\controlNotice.html";i:1553151902;s:49:"template/wap\default_new\Index\controlCoupon.html";i:1553151902;s:56:"template/wap\default_new\Index\controlPromotionGame.html";i:1553151902;s:52:"template/wap\default_new\Index\controlFigureAdv.html";i:1553151902;s:51:"template/wap\default_new\Index\controlDiscount.html";i:1553151902;s:59:"template/wap\default_new\Index\AdminRecommendGoodsList.html";i:1553151902;s:46:"template/wap\default_new\controlCopyRight.html";i:1553151902;s:82:"template/wap\default_new\CustomTemplate\controlCommonCustomTemplateBaseFooter.html";i:1553151902;s:36:"template/wap\default_new\footer.html";i:1553151902;s:43:"template/wap\default_new\shareContents.html";i:1553151903;}*/ ?>
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

<link rel="stylesheet" type="text/css" href="__TEMP__/<?php echo $style; ?>/public/css/control_type.css">
<link rel="stylesheet" type="text/css" href="__TEMP__/<?php echo $style; ?>/public/css/goods_list.css">
<link rel="stylesheet" type="text/css" href="__TEMP__/<?php echo $style; ?>/public/css/group_buy.css">
<link rel="stylesheet" type="text/css" href="__TEMP__/<?php echo $style; ?>/public/css/spelling_list.css">
<style type="text/css">
.custom-search-button{top: 1px;}
.sliding {overflow-y: auto;background: #ffffff;}
.sliding::-webkit-scrollbar {display: none;}
.sliding ul {white-space: nowrap;text-align: center;}
.sliding ul li {padding: 10px 10px 0 10px;display: inline-block;background: #ffffff;border-right: 2px solid #f8f8f8;width:25%;}
.sliding ul li img{width:60px;height:60px;}
.members_goodspic{border-bottom:1px solid #f3f3f3;}
.info p.goods-title{padding-top:5px;}
.info p.goods-price{margin:0;margin-bottom:8px;}
.info .goods-info .goods_price{float: none;}
.controltype{height:35px;margin:0;width:100%;line-height:32.5px;}
.controltype>.control_l_content{top:0;background: none;}
.info p.goods-price>em{font-size:12px;font-weight:bold;color:#f23030;}
.popup{background: none;padding:0;}
.code{width: 60%;margin: 0 auto;background: #fff;border-radius: 13px;}
.controltype>.control_l_content {width: 22%;left:39%;display: inline-block;background:#F3F5F7;}
.members_goodspic>ul>li.gooditem>div.info {margin-top: 0;height: 70px;}
.com-content{min-height:600px;}
.category_name{height: 30px;line-height: 30px;padding: 5px 10px;background: #fff;}
.imgs{height:150px;}
.floor{margin-top:10px;}
.floor-right-nav{float:right;font-size:12px;color:#FF4E00;font-weight:bold;}
.floor-left-nav{float:left;font-size:15px;}
.floor .members_goodspic ul li:nth-child(1),.floor .members_goodspic ul li:nth-child(2){margin-top:0;}
.floor .category_name{border-bottom:1px solid #eee;}
i.title-border{display: inline-block;width: 3px;height: 20px;vertical-align: middle;margin-right: 5px;margin-top: -3px;}
i.goods_tab{font-style: normal;font-size: 12px!important;;background: #f44;color: #fff;padding: 1px 3px;margin-right: 2px;border-radius: 2px;font-weight: normal!important;}
i.shipping_fee{font-style: normal;font-size: 12px!important;;background: #fff;color: #f44;padding: 1px 3px;margin-left: 5px;border-radius: 2px;border:1px solid #f44;display: inline-block;line-height: 1!important;font-weight: normal!important;}
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
	
<!-- 标识：是否显示顶部关注  0：[隐藏]，1：[显示]-->
<?php if($is_subscribe == 1): ?>
<div class="fixed-focus-on">
	<i class="close" onclick="$('.fixed-focus-on').hide();">x</i>
	<div class="foucs-on-block">
		<div class="foucs-block">
		<?php if($source_img_url != ''): ?>
			<img class="user-bg" src="<?php echo __IMG($source_img_url); ?>">
			<?php else: ?>
			<img class="user-bg" src="<?php echo __IMG($web_info['web_wechat_share_logo']); ?>">
		<?php endif; ?>
		</div>
		<?php if($source_user_name != ''): ?>
		<p><?php echo lang("i_am_your_best_friend"); ?><span><?php echo $source_user_name; ?></span>,<?php echo lang("recommended_to_you_business_from_now"); ?></p>
		<?php else: ?>
		<p><?php echo lang("you_are_not_currently_concerned_about_the_WeChat_public_account"); ?>，<?php echo lang("click_on_the_attention"); ?></p>
		<?php endif; ?>
		<button id="subscribe"><?php echo lang("click_on_the_attention"); ?></button>
	</div>
</div>
<?php endif; ?>

<!-- 遮罩层 -->
<div class="shade" style="position:fixed;top:0px;left:0;width:100%;height:100%;margin-top:0;background: rgba(0, 0, 0, 0.7);z-index: 999;display:none;"><span style="float: right; padding: 15px;font-size: 22px;color: #fff;background: transparent;" id="close">X</span></div>
<!-- 弹出层 --> 
<div class="popup" style="position:fixed;top: 36%;left: 0;width: 100%;height: 100%;margin-left:0;display:none;">
	<div class="code">
		<div style="overflow: hidden;">
			<img src="<?php echo __IMG($web_info['web_qrcode']); ?>"  style="max-width: 100%;margin-top: 10px;"/>
			<div style="color:#666; margin-bottom: 10px;"><?php echo lang("press_two_dimensional_code_public_concern_WeChat"); ?></div>
		</div>
	</div>
</div>

	<!-- showBox弹出框 -->
	<div class="motify" style="display: none;">
		<i class="show_type warning"></i>
		<div class="motify-inner"><?php echo lang('pop_up_prompt'); ?></div>
	</div>

	
<!-- <script language="javascript" src="https://res.wx.qq.com/open/js/jweixin-1.0.0.js"> </script> -->
<script language="javascript" src="https://res.wx.qq.com/open/js/jweixin-1.2.0.js"> </script>
<input type="hidden" id="appId" value="<?php echo $signPackage['appId']; ?>">
<input type="hidden" id="jsTimesTamp" value="<?php echo $signPackage['jsTimesTamp']; ?>">
<input type="hidden" id="jsNonceStr"  value="<?php echo $signPackage['jsNonceStr']; ?>">
<input type="hidden" id="jsSignature" value="<?php echo $signPackage['jsSignature']; ?>">

<div class="com-content">

	<!-- 轮播图 -->
	<link rel="stylesheet" type="text/css" href="__TEMP__/<?php echo $style; ?>/public/css/slick.css">
<link rel="stylesheet" type="text/css" href="__TEMP__/<?php echo $style; ?>/public/css/components.css">
<script src="__TEMP__/<?php echo $style; ?>/public/js/slick.js"></script>
<div class="index_slide">
<?php if($plat_adv_list['is_use'] == 1): if($plat_adv_list['adv_list'][0]['adv_image'] != ''): ?>
	<div class="slick">
		<?php if(is_array($plat_adv_list['adv_list']) || $plat_adv_list['adv_list'] instanceof \think\Collection || $plat_adv_list['adv_list'] instanceof \think\Paginator): if( count($plat_adv_list['adv_list'])==0 ) : echo "" ;else: foreach($plat_adv_list['adv_list'] as $key=>$v): ?>
		<div style="display:block;text-align:center;width:100%;height:<?php echo $plat_adv_list['ap_height']; ?>px;line-height:<?php echo $plat_adv_list['ap_height']; ?>px;">
			<a href="<?php echo $v['adv_url']; ?>">
				<img src="<?php echo __IMG($v['adv_image']); ?>" alt="<?php echo lang('carousel_figure'); ?>" style="height:100%;max-width:100%;display: inline-block !important;vertical-align: middle !important;">
			</a>
		</div>
	<?php endforeach; endif; else: echo "" ;endif; ?>
	</div>
	
	<?php endif; endif; ?>
<div class="shade"></div>
</div>

<script>
$('.slick').slick({
	slidesToShow: 1,
	slidesToScroll: 1,
	autoplay: true,
	arrows:false,
	autoplaySpeed: 2000,
});
</script>

	<!-- 搜索栏 -->
	<script src="__TEMP__/<?php echo $style; ?>/public/js/public_assembly.js"></script>
<div class="controlSearch" onclick="location.href='<?php echo __URL("APP_MAIN/index/search"); ?>'">
	<div class="control-search-input">
		<input type="text" class="search-input custom-search-input" placeholder="<?php echo lang('search_goods'); ?>">
		<button type="button" class="search-button custom-search-button"><?php echo lang('search'); ?></button>
		<input type="hidden" value="<?php echo $shop_id; ?>" id="hidden_shop_id"/>
	</div>
</div>


	<!-- 导航 -->
	<link rel="stylesheet" type="text/css" href="__TEMP__/<?php echo $style; ?>/public/css/navi.css">
<div class="navi">
	<div class="navi-item">
		<nav class="navi-item_row">
			<?php if(count($navigation_list) > 0): if(is_array($navigation_list) || $navigation_list instanceof \think\Collection || $navigation_list instanceof \think\Paginator): if( count($navigation_list)==0 ) : echo "" ;else: foreach($navigation_list as $key=>$vo): if($vo['nav_type'] == 0): ?>
					<a href="<?php echo __URL('APP_MAIN'.$vo['nav_url']); ?>">
					<?php else: ?>
					<a href="<?php echo $vo['nav_url']; ?>">
					<?php endif; ?>
						<span>
							<img src="<?php echo __IMG($vo['nav_icon']); ?>"><span><?php echo $vo['nav_title']; ?></span>
						</span>
					</a>
				<?php endforeach; endif; else: echo "" ;endif; endif; ?>
		</nav>
	</div>
</div>

	<!-- 公告 -->
	<?php if(count($notice) > 0): ?>
		<link rel="stylesheet" type="text/css" href="__TEMP__/<?php echo $style; ?>/public/css/liMarquee.css">
<script src="__TEMP__/<?php echo $style; ?>/public/js/jquery.liMarquee.js"></script>
<style>
.hot {
	width: 100%;
	height: 44px;
	background: #FFF;
	border-top: 1px solid #eee;
}

.hot .notice-img {
	float: left;
	width: 40px;
	height: 40px;
	margin: 2px 20px 2px 20px;
	position: relative;
}

.hot .notice-img img {
	display: block;
	height: 25px;
	margin:8px auto;
}

.hot .notice-img:after {
	content: '';
	display: block;
	width: 1px;
	height: 44px;
	background-color: #eee;
	position: absolute;
	right: -20px;
	top: 0;
}
.dowebok-block ul li{
	padding: 0px;
	margin: 0px;
	line-height: 49px;
}

</style>
<div class="hot" style="position: relative; overflow: hidden;border-bottom: 1px solid #eee;">
	<div class="notice-img">
		<a href="javascript:;"><img src="__TEMP__/<?php echo $style; ?>/public/images/H.png"></a>
	</div>
	<div style="width:70%;overflow:hidden;font-size:13px;color: #666;">
		<div class="dowebok dowebok-block" style="font-size: 13px;"> 
		<ul style="position: relative;">
		     <?php if(is_array($notice) || $notice instanceof \think\Collection || $notice instanceof \think\Paginator): if( count($notice)==0 ) : echo "" ;else: foreach($notice as $key=>$vo): ?>
			 <a href="APP_MAIN/index/noticeContent?id=<?php echo $vo['id']; ?>"> <li> &nbsp;&nbsp;&nbsp;&nbsp;<?php echo $vo['notice_title']; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li></a>
			 <?php endforeach; endif; else: echo "" ;endif; ?>
		</ul>	 
		</div>
	</div>
</div>


<script type="text/javascript">

<?php if(count($notice) > 1): ?>
	var notice_index = 0;
	var notice_autoTimer = 0;//全局变量目的实现左右点击同步

	//自动轮播
	if($(".dowebok-block ul li").length>1){
		$(".dowebok-block ul li:eq(0)").clone(true).appendTo($(".dowebok-block ul"));//克隆第一个放到最后(实现无缝滚动)
		var liHeight = $(".dowebok-block li").height();//一个li的高度
		//获取li的总高度再减去一个li的高度(再减二个Li是因为克隆了多出了一个Li的高度)
		var li_sum = $(".dowebok-block ul li").length;
		$(".dowebok-block ul").height(liHeight);//给ul赋值高度
		notice_autoTimer = setInterval(function(){
	
			notice_index++;

			if(notice_index > Number(li_sum) -1) {
				notice_index = 0;
			}
			$(".dowebok-block ul").stop().animate({
	
				top: -notice_index * liHeight
	
			},500,function(){
				if(notice_index == Number(li_sum) -1) {
					$(".dowebok-block ul").css({top:0});
					notice_index = 0;
				}
	
			});
	
		},5000);
	}
<?php else: ?>
	$(function(){
	    $('.dowebok').liMarquee({
	       hoverstop: false
	    });
	});
<?php endif; ?>	
</script>

	<?php endif; ?>

	<!-- 优惠券领取 -->
	<?php if(count($coupon_list) > '0'): ?>
	<style>
.coupon-container{
	padding:10px 0;
	background: #fff;
	margin: 10px 0;
}
.coupon-container .coupon-title{
	width: 70%;
	text-align: center;
	margin: 0 auto;
}

.coupon-container .coupon-title img{
	width: 100%;
}
.coupon-container .coupon-all{   
    white-space: nowrap;
    overflow-y: auto;
    padding: 10px 0 0 0;
}
.coupon-container .coupon-all::-webkit-scrollbar {
	display: none;
}
.coupon-container .coupon-all .receive-coupons{
	width: 31.3%;
	height: 70px;
	display: inline-block;
	float: left;
	background: #f23c3c url("__TEMP__/<?php echo $style; ?>/public/images/index_coupon_bg.png") no-repeat;
	background-size:  100% 100%;
	margin-left: 1.5%;
	color: #fff;
	text-align: center;
}
.coupon-container .coupon-all .receive-coupons.received{
	background: #aaa url("__TEMP__/<?php echo $style; ?>/public/images/index_coupon_bg.png") no-repeat;
	background-size:  100% 100%;
}
.coupon-container .coupon-all .receive-coupons big.money-number{
    display: block;
    margin: 0;
    padding-top: 8px;
    line-height: 22px;
    font-size: 21px;
    color: #fff;
    text-align: center;
}
.coupon-container .coupon-all .receive-coupons p.explanation{
	display: block;
    margin: 0;
    font-size: 12px;
    color: rgba(255,255,255,.7);
    text-align: center;
}

.coupon-container .coupon-all .receive-coupons span.get{    
	line-height: 16px;
    font-size: 14px;
    position: relative;
    color: rgba(255,255,255,.7);
}
.coupon-container .coupon-all .receive-coupons span.get:before,
.coupon-container .coupon-all .receive-coupons span.get:after{
	content: "";
	background: rgba(255,255,255,.7);
	width: 8px;
	height: 1px;
	position: absolute;
	top: 50%;
	
}
.coupon-container .coupon-all .receive-coupons span.get:before{
	left: -10px;
}
.coupon-container .coupon-all .receive-coupons span.get:after{
	right: -10px;
}
</style>

<div class="coupon-container">
	<div class="coupon-title">
		<img src="__TEMP__/<?php echo $style; ?>/public/images/coupon_title_bg.png" alt="">
	</div>
	<div  class="coupon-all">
		<?php if(is_array($coupon_list) || $coupon_list instanceof \think\Collection || $coupon_list instanceof \think\Paginator): $i = 0; $__LIST__ = $coupon_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
		<div class="receive-coupons" data-max-fetch="<?php echo $vo['max_fetch']; ?>" data-received-num="<?php if(!empty($uid)): ?><?php echo $vo['received_num']; else: ?>0<?php endif; ?>" onclick="coupon_receive(this,<?php echo $vo['coupon_type_id']; ?>)">
			<big class="money-number">￥<?php echo $vo['money']; ?></big>
			<p class="explanation">满<?php echo $vo['at_least']; ?>可用</p>
			<span class="get">领取</span>
		</div>
		<?php endforeach; endif; else: echo "" ;endif; ?>
	</div>
</div>

<script type="text/javascript">
var is_have = true;
function coupon_receive(event,coupon_type_id){
	var info = new Array();
		info['maxFetch'] = $(event).attr("data-max-fetch");
		info['receivedNum'] = $(event).attr("data-received-num");
		
	if(is_have){
		is_have = false;
		$.ajax({
			type:"post",
			url : "<?php echo __URL('APP_MAIN/index/getCoupon'); ?>",
			async: false,
			dataType:"json",
			data:{ 'coupon_type_id' : coupon_type_id },
			success : function(data){
				if(data['code']>0){
					showBox("恭喜您，领取成功！","success");
					is_have = true;
					var received_num = parseInt(info['receivedNum']) + 1; // 该用户已领取数
					$(event).attr("data-received-num", received_num);
					
					if(info['maxFetch'] > 0 && received_num >= info['maxFetch']){
						$(event).find(".get").text("已领取");
						$(event).addClass("received");
					}
				}else if(data['code'] == -2009){
					location.href="<?php echo __URL('APP_MAIN/login/index'); ?>";
				}else{
					showBox(data['message'],"warning");
					is_have = true;
				}
			}
		})
	} 
}
</script>
	<?php endif; ?> 

	<!-- 游戏入口 -->
	<?php if(count($gameList["data"]) > 0): ?>
		<!-- 功能介绍：游戏入口 -->
<style>
	.promotion_game_content{
		width: 100%;
		height: auto;
		background: #fff;
		margin: 10px 0;
	}
	.promotion_game_content img.promotion_game_adv{
		max-width: 100%;
	}
	.promotion_game_content ul.gameList{
		width: 100%;
		overflow: hidden; 
	}
	.promotion_game_content ul.gameList li{
		display: inline-block;
		width: 50%;
		float: left;
	}
	.promotion_game_content ul.gameList li a{
		display: block;
	}
	.promotion_game_content ul.gameList li a img{
		max-width: 100%;
	}
</style>
<div class="promotion_game_content">
	<img src="__TEMP__/<?php echo $style; ?>/public/images/promotion_game.png" alt="" class="promotion_game_adv">
	<?php if(count($gameList["data"]) > 0): ?>
	<ul class="gameList">
		<?php if(is_array($gameList['data']) || $gameList['data'] instanceof \think\Collection || $gameList['data'] instanceof \think\Paginator): $i = 0; $__LIST__ = $gameList['data'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
		<li><a href="<?php echo __URL('APP_MAIN/promotionGame/index?gid='.$vo['game_id']); ?>"><img src="<?php echo __IMG($vo['activity_images']); ?>" alt=""></a></li>
		<?php endforeach; endif; else: echo "" ;endif; ?>
	</ul>
	<?php endif; ?>
</div>
	<?php endif; ?>
	<!-- <<div class="figure_adv">
	<div class="data-top-content">
		<div class="data-left">
			<a href=""><img src="__TEMP__/<?php echo $style; ?>/public/images/temporary/adv1.png" alt="" class="img_common"></a>
		</div>
		<div class="data-right">
			<div class="adv" style="border-bottom: 1px solid #eee;margin-bottom: -1px;">
				<a href=""><img src="__TEMP__/<?php echo $style; ?>/public/images/temporary/adv2.png" alt="" class="img_common"></a>
			</div>
			<div class="adv">
				<a href=""><img src="__TEMP__/<?php echo $style; ?>/public/images/temporary/adv2.png" alt="" style="margin-top: 1px;" class="img_common"></a>
			</div>
		</div>
	</div>
	<div class="data-bottom-content">
		<div class="adv">
			<a href="">
				<img src="__TEMP__/<?php echo $style; ?>/public/images/temporary/adv3.png" alt="" class="img_common">
			</a>
		</div>
		<div class="adv">
			<a href="">
				<img src="__TEMP__/<?php echo $style; ?>/public/images/temporary/adv3.png" alt="" class="img_common">
			</a>
		</div>
		<div class="adv">
			<a href="">
				<img src="__TEMP__/<?php echo $style; ?>/public/images/temporary/adv3.png" alt="" class="img_common">
			</a>
		</div>
		<div class="adv">
			<a href="">
				<img src="__TEMP__/<?php echo $style; ?>/public/images/temporary/adv3.png" alt="" class="img_common">
			</a>
		</div>
	</div>
</div>> -->

	<?php if(count($discount_list) >0): ?>
	<style type="text/css">
.group-list-box{
	width:100%;
	margin: 10px 0;
	padding: 0 0 10px 0;
	background:#fff;
	overflow:hidden;
	float: none;
}
.group-list-box .controltype{
	width: 100%;
	text-align: center;
	margin: 0;
	line-height: 35px;
}
.group-list-box .controltype span.title{
	padding-left: 20px;
	font-weight: normal;
	color: #333;
	background: url("__TEMP__/<?php echo $style; ?>/public/images/recommended.png") no-repeat left;
	background-size: 15px 15px;
}
.group-list-box .discount-list{
	width: 100%;
}
.group-list-box .discount-list ul{
	width:100%;
	display:-webkit-box;
}
.group-list-box .discount-list ul li{
	border: 1px solid #eee;
	box-sizing: border-box;
	height: 110px;
	-webkit-box-flex:1;
	margin: 0 5px;
	overflow:hidden;
	width: 100%;
}
.group-list-box .discount-list ul li:first-child{
	margin: 0 5px 0 1px;
}
.group-list-box .discount-list ul li:last-child{
	margin: 0 1px 0 0;
}
.group-list-box .discount-list ul li div.goods_info{
	display: inline-block;
	width: 60%;
	float: left;
	height: 110px;
}
.group-list-box .discount-list ul li div.goods_info p.discount-title{
	margin:5px 0 0 5px;
	padding-left:20px;
	background: url("__TEMP__/<?php echo $style; ?>/public/images/discount_icon.png") no-repeat left;
	background-size: auto 15px;
	color: #FF4E00;
}
.group-list-box .discount-list ul li div.goods_info .remaining_time{
	margin:5px 0 0 5px;
	font-size: 12px;
	display: block;
	height: 18px;
	overflow: hidden;
}
.group-list-box .discount-list ul li div.goods_info .remaining_time span.hours,
.group-list-box .discount-list ul li div.goods_info .remaining_time span.min,
.group-list-box .discount-list ul li div.goods_info .remaining_time span.seconds{
	background: #898989;
    color: #fff;
    border-radius: 3px;
    display: inline-block;
    width: 16px;
    height: 17px;
    line-height: 17px;
    text-align: center;
}
.group-list-box .discount-list ul li div.goods_info .goods_name{
	color: #666;
	margin:5px 0 0 5px;
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
}
.group-list-box .discount-list ul li div.goods_info .goods_price{
	background: #f44;
	color: #fff;
	border-radius: 3px;
	margin: 5px 0 0 5px;
	padding:1px 3px;
	display: inline-block;
	font-size: 13px;
}
.group-list-box .discount-list ul li div.goods_info .goods_price i{
	font-size: 12px;
	font-style: normal;
}
.group-list-box .discount-list ul li div.goods_pic{
	display: inline-block;
	width: 40%;
	position: relative;
	float: left;
	height: 110px;
}
.group-list-box .discount-list ul li div.goods_pic a
{
	display: block;
	width: 96%;
	position: absolute;
	top: 50%;
	transform: translateY(-50%);
}
.group-list-box .discount-list ul li div.goods_pic a img{
	max-width: 100%;
	max-height: 100%;
}
</style>
<div class="group-list-box">
	<div class="controltype" onclick="location.href='<?php echo __URL("APP_MAIN/index/discount"); ?>'">
		<span class="title">限时折扣</span>
	</div>
	<div class="discount-list">
		<ul>
			<?php if(is_array($discount_list) || $discount_list instanceof \think\Collection || $discount_list instanceof \think\Paginator): $k = 0; $__LIST__ = $discount_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k % 2 );++$k;if($k < 3): ?>
					<li>
						<a href="<?php echo __URL('APP_MAIN/goods/goodsdetail?id='.$vo['goods_id']); ?>">
							<div class="goods_info">
								<p class="discount-title">限时折扣</p>
								<time class="remaining_time" starttime="<?php echo getTimeStampTurnTime($vo['start_time'] ); ?>" endtime="<?php echo getTimeStampTurnTime($vo['end_time'] ); ?>">
									<span class="day">5天</span>
									<span class="hours">05</span>
									<em>:</em>
									<span class="min">25</span>
									<em>:</em>
									<span class="seconds">36</span>
								</time>
								<p class="goods_name"><?php echo $vo['goods_name']; ?></p>
								<span class="goods_price"><i>￥</i><?php echo $vo['promotion_price']; ?></span>
							</div>
							<div class="goods_pic">
								<a href="<?php echo __URL('APP_MAIN/goods/goodsdetail?id='.$vo['goods_id']); ?>">
									<img src="<?php echo __IMG($default_goods_img); ?>" class="lazy_load" data-original="<?php echo __IMG($vo['picture']['pic_cover_small']); ?>" alt="">
								</a>
							</div>
						</a>
					</li>
				<?php endif; endforeach; endif; else: echo "" ;endif; ?>
		</ul>
	</div>
</div>

<!-- <?php if(is_array($discount_list) || $discount_list instanceof \think\Collection || $discount_list instanceof \think\Paginator): $i = 0; $__LIST__ = $discount_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
			<li>
				<div class="goods_img">
					<a href="<?php echo __URL('APP_MAIN/goods/goodsdetail?id='.$vo['goods_id']); ?>" title="<?php echo $vo['goods_name']; ?>">
					    <img src="<?php echo __IMG($default_goods_img); ?>" class="lazy_load" data-original="<?php echo __IMG($vo['picture']['pic_cover_small']); ?>">
						<div class="brand-time" >
							<i></i>
							<span class="settime" starttime="<?php echo getTimeStampTurnTime($vo['start_time'] ); ?>" endtime="<?php echo getTimeStampTurnTime($vo['end_time'] ); ?>" ></span>
						</div>
					</a>
				</div>
				<a href="<?php echo __URL('APP_MAIN/goods/goodsdetail?id='.$vo['goods_id']); ?>" title="<?php echo $vo['goods_name']; ?>"><div class="goods-name"><?php echo $vo['goods_name']; ?></div></a>
				<div class="brand-info" style="height:initial;">
					<div class="brand-info-left" style="float:none;">
						<span class="b-price" style="float:left;margin:5px 0">
						<p>￥<?php echo $vo['promotion_price']; ?></p>
						</span>
						<em></em>
						<span class="buyer" style="float:left;line-height:31px;"><s style="margin-left: 10px;">
						<?php if($vo['market_price'] > 0): ?>
							￥<?php echo $vo['market_price']; endif; ?>
						</s></span>
					</div>
				</div>
			</li>
			<?php endforeach; endif; else: echo "" ;endif; ?> -->

<script type="text/javascript">
$().ready(function() {
	updateEndTime();
});
//倒计时函数
function updateEndTime() {
	var date = new Date();
	var time = date.getTime(); //当前时间距1970年1月1日之间的毫秒数

	$(".remaining_time").each(function(i) {
		var endDate = this.getAttribute("endTime"); //结束时间字符串
		
		//转换为时间日期类型
		var endDate1 = eval('new Date(' + endDate.replace(/\d+(?=-[^-]+$)/, function(a) {
			return parseInt(a, 10) - 1;
		}).match(/\d+/g) + ')');
		
		var endTime = endDate1.getTime(); //结束时间毫秒数

		var lag = (endTime - time) / 1000; //当前时间和结束时间之间的秒数
		if (lag > 0) {
			var second = Math.floor(lag % 60);
			var minite = Math.floor((lag / 60) % 60);
			var hour = Math.floor((lag / 3600) % 24);
			var day = Math.floor((lag / 3600) / 24);
			$(this).find(".day").html(day + "<?php echo lang('days'); ?>");
			$(this).find(".hours").html(hour);
			$(this).find(".min").html(minite);
			$(this).find(".seconds").html(second);
		} else{
			$(this).html("<?php echo lang('activity_over'); ?>！");
		}
	});
	setTimeout("updateEndTime()", 1000);
}
</script>
	<?php endif; if($is_support_pintuan == 1): $service = new data\service\Pintuan;$list = $service->getTuangouGoodsList("1","5", "npg.is_open=1 and npg.is_show=1","npg.create_time desc","*");$list = json_encode($list);$list = json_decode($list, ture); if($list['data']): ?>
	<div class="spelling-block">
		<header>
			<h3>拼团推荐</h3>
			<a href="<?php echo __URL('APP_MAIN/goods/spellingGroupZone'); ?>">查看更多</a>
		</header>
		<ul>
			<?php if(is_array($list['data']) || $list['data'] instanceof \think\Collection || $list['data'] instanceof \think\Paginator): if( count($list['data'])==0 ) : echo "" ;else: foreach($list['data'] as $k=>$vo): ?>
			<li onclick="location.href='<?php echo __URL('APP_MAIN/goods/goodsdetail?id='.$vo['goods_id']); ?>'">
				<div>
					<img src="<?php echo __IMG($default_goods_img); ?>" class="lazy_load pic" data-original="<?php echo __IMG($vo['pic_cover_mid']); ?>">
				</div>
				
				<footer>
					<p><?php echo $vo['goods_name']; ?></p>
					<div>
					<span class="tuangou-money">￥<?php echo $vo['tuangou_money']; ?></span><br>
					<span class="original-money">单买价&nbsp;<?php echo $vo['promotion_price']; ?>元</span>
					<button>去拼单&nbsp;&gt;</button>
					</div>
				</footer>
			</li>
			<?php endforeach; endif; else: echo "" ;endif; ?>
		</ul>
	</div>
	<?php endif; endif; ?>
	
	<!-- 新品 精品 热卖等推荐商品-->
	<!-- 新品 -->
<?php if(count($recommend_goods_list['goods_new_list'])): ?>
	<div class="floor">
		<div class="category_name">
			<span class="floor-left-nav"><i class="title-border"></i>新品</span>
			<!-- <a class="floor-right-nav" href="<?php echo __URL('APP_MAIN/goods/goodslist?category_id='.$class['category_id']); ?>">查看更多</a> -->
		</div>
		<section class="members_goodspic">
			<ul>
				<?php if(is_array($recommend_goods_list['goods_new_list']) || $recommend_goods_list['goods_new_list'] instanceof \think\Collection || $recommend_goods_list['goods_new_list'] instanceof \think\Paginator): if( count($recommend_goods_list['goods_new_list'])==0 ) : echo "" ;else: foreach($recommend_goods_list['goods_new_list'] as $k=>$list): ?>
					<li class="gooditem">
						<div class="imgs">
							<a href="<?php echo __URL('APP_MAIN/goods/goodsdetail?id='.$list['goods_id']); ?>">
								<img src="<?php echo __IMG($default_goods_img); ?>" class="lazy_load" data-original="<?php echo __IMG($list['pic_cover_mid']); ?>" >
							</a>
						</div>
						<div class="info">
							<p class="goods-title">
								<a href="<?php echo __URL('APP_MAIN/goods/goodsdetail?id='.$list['goods_id']); ?>">
									<?php echo $list['goods_name']; ?>
								</a>
							</p>
							<div class="goods-info">
								<span class="goods_price">
									<?php if(in_array(($list['point_exchange_type']), explode(',',"0,2"))): ?>
									<em style="color: #fb3a2f;">￥<?php echo $list['promotion_price']; ?></em>
									<?php else: if($list['point_exchange_type'] == 1 && $list['promotion_price'] > 0): ?>
											<em style="color: #fb3a2f;">￥<?php echo $list['promotion_price']; ?>+<?php echo $list['point_exchange']; ?>积分</em>
										<?php else: ?>
											<em style="color: #fb3a2f;"><?php echo $list['point_exchange']; ?>积分</em>
										<?php endif; endif; if($list['shipping_fee'] == 0): ?>
									<i class="shipping_fee">包邮</i>
								<?php endif; ?>
								</span>
							</div>
						</div>
					</li>
				<?php endforeach; endif; else: echo "" ;endif; ?>
			</ul>
		</section>
	</div>
<?php endif; ?>
<!-- 精品 -->
<?php if(count($recommend_goods_list['goods_recommend_list'])): ?>
	<div class="floor">
		<div class="category_name">
			<span class="floor-left-nav"><i class="title-border"></i>精品</span>
			<!-- <a class="floor-right-nav" href="<?php echo __URL('APP_MAIN/goods/goodslist?category_id='.$class['category_id']); ?>">查看更多</a> -->
		</div>
		<section class="members_goodspic">
			<ul>
				<?php if(is_array($recommend_goods_list['goods_recommend_list']) || $recommend_goods_list['goods_recommend_list'] instanceof \think\Collection || $recommend_goods_list['goods_recommend_list'] instanceof \think\Paginator): if( count($recommend_goods_list['goods_recommend_list'])==0 ) : echo "" ;else: foreach($recommend_goods_list['goods_recommend_list'] as $k=>$list): ?>
					<li class="gooditem">
						<div class="imgs">
							<a href="<?php echo __URL('APP_MAIN/goods/goodsdetail?id='.$list['goods_id']); ?>">
								<img src="<?php echo __IMG($default_goods_img); ?>" class="lazy_load" data-original="<?php echo __IMG($list['pic_cover_mid']); ?>" >
							</a>
						</div>
						<div class="info">
							<p class="goods-title">
								<a href="<?php echo __URL('APP_MAIN/goods/goodsdetail?id='.$list['goods_id']); ?>">
									<?php echo $list['goods_name']; ?>
								</a>
							</p>
							<div class="goods-info">
								<span class="goods_price">
									<?php if(in_array(($list['point_exchange_type']), explode(',',"0,2"))): ?>
									<em style="color: #fb3a2f;">￥<?php echo $list['promotion_price']; ?></em>
									<?php else: if($list['point_exchange_type'] == 1 && $list['promotion_price'] > 0): ?>
											<em style="color: #fb3a2f;">￥<?php echo $list['promotion_price']; ?>+<?php echo $list['point_exchange']; ?>积分</em>
										<?php else: ?>
											<em style="color: #fb3a2f;"><?php echo $list['point_exchange']; ?>积分</em>
										<?php endif; endif; if($list['shipping_fee'] == 0): ?>
									<i class="shipping_fee">包邮</i>
								<?php endif; ?>
								</span>
							</div>
						</div>
					</li>
				<?php endforeach; endif; else: echo "" ;endif; ?>
			</ul>
		</section>
	</div>
<?php endif; ?>
<!-- 热卖 -->
<?php if(count($recommend_goods_list['goods_hot_list'])): ?>
	<div class="floor">
		<div class="category_name">
			<span class="floor-left-nav"><i class="title-border"></i>热卖</span>
			<!-- <a class="floor-right-nav" href="<?php echo __URL('APP_MAIN/goods/goodslist?category_id='.$class['category_id']); ?>">查看更多</a> -->
		</div>
		<section class="members_goodspic">
			<ul>
				<?php if(is_array($recommend_goods_list['goods_hot_list']) || $recommend_goods_list['goods_hot_list'] instanceof \think\Collection || $recommend_goods_list['goods_hot_list'] instanceof \think\Paginator): if( count($recommend_goods_list['goods_hot_list'])==0 ) : echo "" ;else: foreach($recommend_goods_list['goods_hot_list'] as $k=>$list): ?>
					<li class="gooditem">
						<div class="imgs">
							<a href="<?php echo __URL('APP_MAIN/goods/goodsdetail?id='.$list['goods_id']); ?>">
								<img src="<?php echo __IMG($default_goods_img); ?>" class="lazy_load" data-original="<?php echo __IMG($list['pic_cover_mid']); ?>" >
							</a>
						</div>
						<div class="info">
							<p class="goods-title">
								<a href="<?php echo __URL('APP_MAIN/goods/goodsdetail?id='.$list['goods_id']); ?>">
									<?php echo $list['goods_name']; ?>
								</a>
							</p>
							<div class="goods-info">
								<span class="goods_price">
									<?php if(in_array(($list['point_exchange_type']), explode(',',"0,2"))): ?>
									<em style="color: #fb3a2f;">￥<?php echo $list['promotion_price']; ?></em>
									<?php else: if($list['point_exchange_type'] == 1 && $list['promotion_price'] > 0): ?>
											<em style="color: #fb3a2f;">￥<?php echo $list['promotion_price']; ?>+<?php echo $list['point_exchange']; ?>积分</em>
										<?php else: ?>
											<em style="color: #fb3a2f;"><?php echo $list['point_exchange']; ?>积分</em>
										<?php endif; endif; if($list['shipping_fee'] == 0): ?>
									<i class="shipping_fee">包邮</i>
								<?php endif; ?>
								</span>
							</div>
						</div>
					</li>
				<?php endforeach; endif; else: echo "" ;endif; ?>
			</ul>
		</section>
	</div>
<?php endif; ?>

	<!-- 标签版块 -->
	<?php if(is_array($goods_platform_list) || $goods_platform_list instanceof \think\Collection || $goods_platform_list instanceof \think\Paginator): if( count($goods_platform_list)==0 ) : echo "" ;else: foreach($goods_platform_list as $key=>$class): if(!empty($class['goods_list'])): ?>
		<div class="controltype" style="position: relative;">
			<div style="width: 60%;border-top: 1px solid #FF4E01;margin:17px 20%;vertical-align: middle;position: absolute;"></div>
			<span class="control_l_content" style="color:#FF4E01;"><?php echo mb_substr($class['group_name'],0,12); ?></span>
		</div>
		<section class="members_goodspic">
			<ul>
			<?php if(!empty($class['goods_list'])): if(is_array($class['goods_list']) || $class['goods_list'] instanceof \think\Collection || $class['goods_list'] instanceof \think\Paginator): if( count($class['goods_list'])==0 ) : echo "" ;else: foreach($class['goods_list'] as $k=>$goods): ?>
					<li class="gooditem">
						<div class="imgs">
							<a href="<?php echo __URL('APP_MAIN/goods/goodsdetail?id='.$goods['goods_id']); ?>">
							<img src="<?php echo __IMG($default_goods_img); ?>" class="lazy_load" data-original="<?php echo __IMG($goods['pic_cover_small']); ?>">
							</a>
						</div>
						<div class="info">
							<p class="goods-title">
								<a href="<?php echo __URL('APP_MAIN/goods/goodsdetail?id='.$goods['goods_id']); ?>"><?php echo $goods['goods_name']; ?></a>
							</p>
							<div class="goods-info">
								<span class="goods_price"><em style="color: #fb3a2f;">￥<?php echo $goods['promotion_price']; ?></em></span>
								<a href="javascript:CartGoodsInfo(<?php echo $goods['goods_id']; ?>,<?php echo $goods['state']; ?>)" class="add-cart"></a>
							</div>
						</div>
					</li>
				<?php endforeach; endif; else: echo "" ;endif; else: ?>
				<li style="text-align:center;height: 130px;">
					<img src="__TEMP__/<?php echo $style; ?>/public/images/commend-type.png" style="max-width: 80px;vertical-align: middle;margin: 10px 0 2px 0;"/>
					<div style="text-align:center;color:#666;margin-top: 10px;"><?php echo lang("shop_name"); ?></div>
				</li>
			<?php endif; ?>
			</ul>
		</section>
		<?php endif; endforeach; endif; else: echo "" ;endif; ?>

	<!-- 楼层版块 -->
	<?php if(is_array($block_list) || $block_list instanceof \think\Collection || $block_list instanceof \think\Paginator): if( count($block_list)==0 ) : echo "" ;else: foreach($block_list as $key=>$class): if(!empty($class['goods_list'])): ?>
		<div class="floor">
			<div class="category_name">
				<span class="floor-left-nav"><i class="title-border" style="background: <?php echo $class['color']; ?>;"></i><?php echo $class['category_alias']; ?></span>
				<a class="floor-right-nav" href="<?php echo __URL('APP_MAIN/goods/goodslist?category_id='.$class['category_id']); ?>">查看更多</a>
			</div>
			<section class="members_goodspic">
				<ul>
					<?php if(is_array($class['goods_list']) || $class['goods_list'] instanceof \think\Collection || $class['goods_list'] instanceof \think\Paginator): if( count($class['goods_list'])==0 ) : echo "" ;else: foreach($class['goods_list'] as $k=>$list): ?>
						<li class="gooditem">
							<div class="imgs">
								<a href="<?php echo __URL('APP_MAIN/goods/goodsdetail?id='.$list['goods_id']); ?>">
									<img src="<?php echo __IMG($default_goods_img); ?>" class="lazy_load" data-original="<?php echo __IMG($list['pic_cover_small']); ?>" >
								</a>
							</div>
							<div class="info">
								<p class="goods-title">
									<a href="<?php echo __URL('APP_MAIN/goods/goodsdetail?id='.$list['goods_id']); ?>">
										<?php if(count($list['group_list']) > 0 && $list['group_list'][0]->group_name != ""): ?>
											<i class="goods_tab"><?php echo $list['group_list'][0]->group_name; ?></i>
										<?php endif; ?>
										<?php echo $list['goods_name']; ?>
									</a>
								</p>
								<div class="goods-info">
									<span class="goods_price">
										<?php if(in_array(($list['point_exchange_type']), explode(',',"0,2"))): ?>
										<em style="color: #fb3a2f;">￥<?php echo $list['promotion_price']; ?></em>
										<?php else: if($list['point_exchange_type'] == 1 && $list['promotion_price'] > 0): ?>
												<em style="color: #fb3a2f;">￥<?php echo $list['promotion_price']; ?>+<?php echo $list['point_exchange']; ?>积分</em>
											<?php else: ?>
												<em style="color: #fb3a2f;"><?php echo $list['point_exchange']; ?>积分</em>
											<?php endif; endif; if($list['shipping_fee'] == 0): ?>
										<i class="shipping_fee">包邮</i>
									<?php endif; ?>
									</span>
								</div>
							</div>
						</li>
					<?php endforeach; endif; else: echo "" ;endif; ?>
				</ul>
			</section>
		</div>
		<?php endif; endforeach; endif; else: echo "" ;endif; ?>
</div>
<div class="foot-nav">
	<div class="nav">
		<?php if(empty($uid) || (($uid instanceof \think\Collection || $uid instanceof \think\Paginator ) && $uid->isEmpty())): ?>
		<a href="<?php echo __URL('APP_MAIN/login/index'); ?>"><?php echo lang("login"); ?></a>
		<a href="<?php echo __URL('APP_MAIN/login/register'); ?>"><?php echo lang("register"); ?></a>
		<?php endif; ?>
		<a href="javascript:;" onclick="locationShop();"><?php echo lang("pc_version"); ?></a>
		<a href="<?php echo __URL('APP_MAIN/member/index'); ?>"><?php echo lang("member_member_center"); ?></a>
	</div>
	<style>
.footer {
	margin: 0;
	padding: 0;
	min-height: 1px;
	text-align: center;
	line-height: 16px;
	/*background-color: #f8f8f8;*/
}
.ft-copyright {
	padding: 10px 0 10px;
	margin: 0 15px;
	font-size: 12px;
}

.ft-copyright img {
	width: 110px;
	display: block;
	margin: 0 auto;
}
.ft-copyright a{
	color: #ccc;
}
</style>
<div class="footer">
	<div class="copyright" id="bottom_copyright">
		<div class="ft-copyright">
			<img src="__TEMP__/<?php echo $style; ?>/public/images/logo_copy.png" id="copyright_logo_wap">
			<a href="javascript:;" target="_blank" id="copyright_companyname"></a>
		</div>
		<?php echo $web_info['third_count']; ?>
	</div>
</div>
</div>

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
	
<script>
$(function(){
	//关注微信公众号弹出
	$("#subscribe").click(function(){
		
		$(".shade").show();
		$(".popup").show();
	})
	//关注微信公众号关闭
	$("#close").click(function(){
		$(".shade").hide();
		$(".popup").hide();
	})
	
	$.ajax({
		type:"post",
		url : "<?php echo __URL('APP_MAIN/index/getShareContents'); ?>",
		data : {"shop_id" : "<?php echo $shop_id; ?>" , "flag" : "shop" },
		success : function(data){
			wx.config({
	debug: false, // 开启调试模式,调用的所有api的返回值会在客户端alert出来，若要查看传入的参数，可以在pc端打开，参数信息会通过log打出，仅在pc端时才会打印。
	appId: $("#appId").val(), // 必填，公众号的唯一标识
	timestamp: $("#jsTimesTamp").val(), // 必填，生成签名的时间戳
	nonceStr:  $("#jsNonceStr").val(), // 必填，生成签名的随机串
	signature: $("#jsSignature").val(),// 必填，签名，见附录1
	jsApiList: ['onMenuShareTimeline', 'onMenuShareAppMessage', 'onMenuShareQQ', 'onMenuShareWeibo'] // 必填，需要使用的JS接口列表，所有JS接口列表见附录2
});

wx.ready(function() {

	var title = data['share_title'];
	var share_contents = data['share_contents']+'\r\n';
	var share_nick_name = data['share_nick_name']+'\r\n';
	var desc2 = share_contents+ share_nick_name + "收藏热度：★★★★★";
	var share_url = data['share_url'];
	var img_url = data['share_img'];
	wx.onMenuShareAppMessage({
		title: title,
		desc: desc2,
		link: share_url,
		imgUrl: img_url,
		trigger: function (res) {
			//alert('用户点击发送给朋友');
		},
		success: function (res) {
			//alert('已分享213');
			
			$.ajax({
				type : "post",
				url : "<?php echo __URL('APP_MAIN/index/sharegivepoint'); ?>",
				data : {
					"share" : true,"share_url":share_url
				},
				success : function(data){
					
				}
			});
		},
		cancel: function (res) {
			//alert('已取消');
		},
		fail: function (res) {
			//alert(JSON.stringify(res));
		}
	});
	
	// 2.2 监听“分享到朋友圈”按钮点击、自定义分享内容及分享结果接口
	wx.onMenuShareTimeline({
		title: title,
		link: share_url,
		imgUrl: img_url,
		trigger: function (res) {
			// alert('用户点击分享到朋友圈');
		},
		success: function (res) {
		//alert('已分享');
			$.ajax({
				type : "post",
				url : "<?php echo __URL('APP_MAIN/index/sharegivepoint'); ?>",
				data : {
					"share" : true,"share_url":share_url
				},
				success : function(data){
					
				}
			});
		},
		cancel: function (res) {
			//alert('已取消');
		},
		fail: function (res) {
			// alert(JSON.stringify(res));
		}
	});
	
	// 2.3 监听“分享到QQ”按钮点击、自定义分享内容及分享结果接口
	wx.onMenuShareQQ({
		title: title,
		desc: desc2,
		link: share_url,
		imgUrl: img_url,
		trigger: function (res) {
			//alert('用户点击分享到QQ');
		},
		complete: function (res) {
			//alert(JSON.stringify(res));
		},
		success: function (res) {
			//alert('已分享');
			$.ajax({
				type : "post",
				url : "<?php echo __URL('APP_MAIN/index/sharegivepoint'); ?>",
				data : {
					"share" : true,"share_url":share_url
				},
				success : function(data){
					
				}
			});
		},
		cancel: function (res) {
			//alert('已取消');
		},
		fail: function (res) {
			//alert(JSON.stringify(res));
		}
	});
	
	// 2.4 监听“分享到微博”按钮点击、自定义分享内容及分享结果接口
	wx.onMenuShareWeibo({
		title: title,
		desc: desc2,
		link: share_url,
		imgUrl: img_url,
		trigger: function (res) {
			//alert('用户点击分享到微博');
		},
		complete: function (res) {
			//alert(JSON.stringify(res));
		},
		success: function (res) {
			//alert('已分享');
			$.ajax({
				type : "post",
				url : "<?php echo __URL('APP_MAIN/index/sharegivepoint'); ?>",
				data : {
					"share" : true,"share_url":share_url
				},
				success : function(data){
					
				}
			});
		},
		cancel: function (res) {
			//alert('已取消');
		},
		fail: function (res) {
			//alert(JSON.stringify(res));
		}
	});
});
		}
	})
})
//跳转到电脑端
function locationShop(){
	$.ajax({
		type : "post",
		url : "<?php echo __URL('APP_MAIN/index/setClientCookie'); ?>",
		data : { "client" : "shop"},
		success : function(data){
			if(data['code'] > 0){
				location.href= __URL("SHOP_MAIN");
			}
		}
	})
}
</script>

</body>
</html>