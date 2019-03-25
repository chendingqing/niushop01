<?php if (!defined('THINK_PATH')) exit(); /*a:20:{s:39:"template/shop\blue\Goods\goodsInfo.html";i:1553151902;s:28:"template/shop\blue\base.html";i:1553151902;s:32:"template/shop\blue\urlModel.html";i:1553151902;s:34:"template/shop\blue\controlTop.html";i:1553157362;s:41:"template/shop\blue\controlHeadSerach.html";i:1553151902;s:43:"template/shop\blue\controlHeadGoodType.html";i:1553151902;s:40:"template/shop\blue\controlCommonNav.html";i:1553151902;s:43:"template/shop\blue\controlRightSidebar.html";i:1553151902;s:44:"template/shop\blue\Goods\controlGallery.html";i:1553151902;s:42:"template/shop\blue\Goods\controlVideo.html";i:1553151902;s:46:"template/shop\blue\Goods\controlStoreRank.html";i:1553151902;s:49:"template/shop\blue\Goods\controlGoodEvaluate.html";i:1553151902;s:45:"template/shop\blue\controlCommonPageAjax.html";i:1553151902;s:55:"template/shop\blue\Goods\controlPurchaseConsulting.html";i:1553151902;s:44:"template/shop\blue\controlLoveOrHistory.html";i:1553151902;s:50:"template/shop\blue\Goods\controlGoodsInfoData.html";i:1553151902;s:45:"template/shop\blue\controlBottomLinkHelp.html";i:1553151902;s:37:"template/shop\blue\controlBottom.html";i:1553151902;s:36:"template/shop\blue\controlLogin.html";i:1553151902;s:37:"template/shop\blue\baidu_js_push.html";i:1553151902;}*/ ?>
<!DOCTYPE html>
<html>
<head>
<meta name="renderer" content="webkit" />
<meta http-equiv="X-UA-COMPATIBLE" content="IE=edge,chrome=1"/>
<meta charset="UTF-8">
<meta name="renderer" content="webkit"> 
<title><?php if($title_before != ''): ?><?php echo $title_before; ?>&nbsp;-&nbsp;<?php endif; ?><?php echo $title; if($seoconfig['seo_title'] != ''): ?>&nbsp;-&nbsp;<?php echo $seoconfig['seo_title']; endif; ?></title>
<meta name="keywords" content="<?php echo $seoconfig['seo_meta']; ?>" />
<meta name="description" content="<?php echo $seoconfig['seo_desc']; ?>"/>
<link rel="shortcut  icon" type="image/x-icon" href="__TEMP__/<?php echo $style; ?>/public/images/favicon.ico" media="screen"/>
<!--可共用-->
<link type="text/css" rel="stylesheet" href="__TEMP__/<?php echo $style; ?>/public/css/ns_common.css">
<link type="text/css" rel="stylesheet" href="__TEMP__/<?php echo $style; ?>/public/css/ns_color_style.css">
<link type="text/css" rel="stylesheet" href="__TEMP__/<?php echo $style; ?>/public/css/iconfont.css">
<link type="text/css" rel="stylesheet" href="__TEMP__/<?php echo $style; ?>/public/css/ns_bottom.css">
<link rel="stylesheet" href="__TEMP__/<?php echo $style; ?>/public/css/layer.css" id="layuicss-skinlayercss">
<script type="text/javascript" src="__TEMP__/<?php echo $style; ?>/public/js/jquery.js"></script>
<script type="text/javascript">
var SHOPMAIN = 'SHOP_MAIN';//外置JS调用
var APPMAIN = 'APP_MAIN';//外置JS调用
var UPLOADAVATOR = 'UPLOAD_AVATOR';//存放用户头像
var upload = "__UPLOAD__";//外置JS调用
var UPLOADCOMMON = 'UPLOAD_COMMON';//存放公共图片、网站logo、独立图片、没有任何关联的图片
var TEMP_IMG = "__TEMP__/<?php echo $style; ?>/public/images";
var temp = "__TEMP__/";//外置JS调用
var STATIC = "__STATIC__";
$(function(){
	//一级菜单选中
	$('#nav li a').removeClass('current');
	var url = window.location.href;	
	$("#nav li a").each(function(i,e){
		var nav_url = $(e).attr("href")
		if(url.indexOf(nav_url) != -1){
			$("#nav li>a[href='<?php echo __URL('SHOP_MAIN/'.$path_info); ?>']").addClass('current');
		}
	})

	img_lazyload();	
})

//图片懒加载
function img_lazyload(){
	$("img.lazy_load").lazyload({
		effect : "fadeIn", //淡入效果
		skip_invisible : false
	})
}

window.onload=function(){
	$.footer();
}

</script>
<script type="text/javascript" src="__TEMP__/<?php echo $style; ?>/public/js/ns_cart.js"></script>
<script type="text/javascript" src="__TEMP__/<?php echo $style; ?>/public/js/common.js"></script>
<script type="text/javascript" src="__TEMP__/<?php echo $style; ?>/public/js/ns_components.js"></script>
<script type="text/javascript" src="__TEMP__/<?php echo $style; ?>/public/js/jquery.fly.min.js"></script>
<script type="text/javascript" src="__TEMP__/<?php echo $style; ?>/public/js/layer.js"></script>
<script type="text/javascript" src="__TEMP__/<?php echo $style; ?>/public/js/jquery.method.js"></script>
<script type="text/javascript" src="__TEMP__/<?php echo $style; ?>/public/js/nav.js"></script>
<script type="text/javascript" src="__TEMP__/<?php echo $style; ?>/public/js/jquery.cookie.js"></script>
<script type="text/javascript" src="__TEMP__/<?php echo $style; ?>/public/js/jquery.lazyload.js"></script>
<script src="__STATIC__/js/ajax_file_upload.js" type="text/javascript"></script>
<script src="__STATIC__/js/file_upload.js" type="text/javascript"></script>
<script src="__STATIC__/js/load_task.js" type="text/javascript"></script>
<script src="__STATIC__/js/load_bottom.js" type="text/javascript"></script>
<script src="__STATIC__/js/time_common.js" type="text/javascript"></script>
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
<!-- 右侧购物车 -->

<link type="text/css" rel="stylesheet" href="__TEMP__/<?php echo $style; ?>/public/css/goods.css">
<script type="text/javascript" src="__TEMP__/<?php echo $style; ?>/public/js/jquery.lazyload.js"></script>
<style>
.info-other .other li{width:49%;}
.info-other .other li:last-child{border-right:0;}
.rightshow{content: '';display: inline-block;clear: both;float:right;}
.crumbs-arrow{font-family: simsun;font-style: normal;}
.receive-coupons .coupon{width:auto;float:left;width:88%;}
.receive-coupons{content: '';clear: both;display: inline-block;}
.detail-info h1.goods-name{font-size: 16px;color: #555555;}
.goods-price .show-price .market-price{font-size:18px;margin-left:0;}
.goods-price .price{width:10%;float:left;}
.realy-price .second-color{font-size: 22px;font-weight: normal;}
.goods-price .realy-price .price{width:11%;line-height:30px;}
.shop-prom .shop-prom-title dt{width:10%;}
.shop-prom .shop-prom-title dd{width: 88%;float: right;}
.shop-prom .shop-prom-title dd .i-activity-flag{padding: 0 3px;border: 1px solid #0689e1;color: #0689e1;border-radius: 2px;font-size: 12px;line-height: 14px;margin-right: 5px;white-space: nowrap;}
.receive-coupons .title{width:10%;}
.freight .dt{width:10%;}
.now-prices{width:100%;}
.show-price{width:100%;}
.choose dl.attr dt{width:75px;}
.choose dl.amount dt{width:75px;}
.merchant-service img{width:15px;height:15px;}
.i-activity-go{padding: 8px 15px;border: 1px solid #0689e1;color: #0689e1;border-radius: 2px;font-size: 12px;line-height: 14px;margin-right: 5px;white-space: nowrap;float: right;}
</style>

</head>
<body>
<input type="hidden" id="hidden_uid" value="<?php echo $uid; ?>" />
<!-- 头部广告 -->



<!-- 公共的顶部（部分界面不用，例如，商家入驻） -->

	<!--
	创建时间：2017年2月7日 12:08:45
	功能描述： 顶部， 
-->
<style>
#menu-login{text-align:center;}
#menu-login .register{margin-right:10px;}
.header-box{text-align: center;}
.top-choose{display: inline-block;margin: 10px auto;}
.top-choose select{min-width: 90px;}
.top-choose select:first-of-type{margin-right: 20px;}
</style>
<div class="header-top">
	<div class="header-box">
		<font id="login-info" class="login-info">您好！欢迎访问我要买烟网</font>
		<div class="top-choose">
			<select name="" id="choosemoney">
				<option value="1">人民币</option>
			</select>
			<select name="" id="chooselang">
				<option value="1">中文</option>
			</select>
		</div>
		<ul>
<!-- 			<li><a class="menu-hd home" href="<?php echo __URL('SHOP_MAIN'); ?>" target="_top"><i></i><?php echo lang('shop_index'); ?></a></li> -->
			<li class="menu-item">
				<div class="menu" id="menu-login" data-flag="login">
					<a class="login color js-login-flag" href="<?php echo __URL('SHOP_MAIN/login/index'); ?>" target="_top"><?php echo lang('login'); ?></a>
					<span class="js-login-flag" style="color:#e2e2e2;border-left:1px solid #e2e2e2;width:1px;height:18px;margin:0 7px 0 5px;"></span>
					<a class="register js-login-flag" href="<?php echo __URL('SHOP_MAIN/login/registerbox'); ?>" target="_top"><?php echo lang('free_registration'); ?></a>
					
					<a class="menu-hd myinfo" href="<?php echo __URL('SHOP_MAIN/member/index'); ?>" target="_blank" style="display:none;"><b></b></a>
					<div id="menu-2" class="menu-bd">
						<span class="menu-bd-mask"></span>
						<div class="menu-bd-panel">
							<a href="<?php echo __URL('SHOP_MAIN/member/index'); ?>" target="_blank"><?php echo lang('member_center'); ?></a>
							<a href="<?php echo __URL('SHOP_MAIN/member/orderlist'); ?>" target="_blank"><?php echo lang('member_buy_treasure'); ?></a>
							<a href="<?php echo __URL('SHOP_MAIN/member/addresslist'); ?>" target="_blank"><?php echo lang('member_address_management'); ?></a>
							<a href="<?php echo __URL('SHOP_MAIN/member/goodscollectionlist'); ?>" target="_blank"><?php echo lang('member_baby_collection'); ?></a>
							<a href="javascript:logout();"><?php echo lang('loginout'); ?></a>
						</div>
					</div>
				</div>
			</li>
			<!-- <li class="menu-item cartbox"><a class="menu-hd cart" href="<?php echo __URL('SHOP_MAIN/goods/cart'); ?>" target="_top"><i></i>&nbsp;<?php echo lang('goods_cart'); ?></a></li> -->
			<!-- <li class="menu-item">
				<div class="menu">
					<a class="menu-hd we-chat" href="javascript:;" target="_top"><?php echo lang('attention_mall'); ?><b></b>
					</a>
					<div id="menu-5" class="menu-bd we-chat-qrcode">
						<span class="menu-bd-mask"></span> <a target="_top"> <img src="<?php echo __IMG($web_info['web_qrcode']); ?>" alt="<?php echo lang('official_wechat'); ?>"></a>
						<p class="font-14"><?php echo lang('concerned_official_wechat'); ?></p>
					</div>
				</div>
			</li> -->
<!-- 			<li class="menu-item"> -->
<!-- 				<div class="menu"> -->
<!-- 					<a href="<?php echo __URL('SHOP_MAIN/helpcenter/index'); ?>" class="menu-hd site-nav" target="_blank"> 商家支持 <b></b></a> -->
<!-- 					<div id="menu-7" class="menu-bd site-nav-main"> -->
<!-- 						<span class="menu-bd-mask"></span> -->
<!-- 						<div class="menu-bd-panel"> -->
<!-- 							<div class="site-nav-con"> -->
<!-- 								<a href="<?php echo __URL('SHOP_MAIN/helpcenter/index','id=2'); ?>" target="_blank" title="常见问题">常见问题</a> -->
<!-- 								<a href="<?php echo __URL('SHOP_MAIN/helpcenter/index','id=7'); ?>" target="_blank" title="网上支付">网上支付</a> -->
<!-- 								<a href="<?php echo __URL('SHOP_MAIN/helpcenter/index','id=5'); ?>" target="_blank" title="验货与签收">验货与签收</a> -->
<!-- 								<a href="<?php echo __URL('SHOP_MAIN/helpcenter/index','id=9'); ?>" target="_blank" title="退款说明">退款说明</a> -->
<!-- 							</div> -->
<!-- 						</div> -->
<!-- 					</div> -->
<!-- 				</div> -->
<!-- 			</li> -->
			<li class="menu-item"><a  href="<?php echo __URL('SHOP_MAIN/member/goodscollectionlist'); ?>" class="menu-hd wap-nav" >收藏夹（0）</a></li>
			<li class="menu-item"><a href="<?php echo __URL('SHOP_MAIN/helpcenter/index'); ?>" class="menu-hd site-nav" target="_blank">联系我们</a></li>
			<!-- 手机端，帮助中心 -->
			<!-- <li class="menu-item"><a  href="<?php echo __URL('APP_MAIN'); ?>" class="menu-hd wap-nav" ><i></i><?php echo lang('mobile_terminal'); ?></a></li>
			<li class="menu-item"><a href="<?php echo __URL('SHOP_MAIN/helpcenter/index'); ?>" class="menu-hd site-nav" target="_blank"><?php echo lang('shop_help_center'); ?></a></li> -->
		</ul>
	</div>
</div>

<script type="text/javascript">
getTopLoginInfo();
function getTopLoginInfo(){
	$.ajax({
		type:"post",
		url:"<?php echo __URL('SHOP_MAIN/components/getlogininfo'); ?>",
		success:function(data){
			if(data!=null && data!=""){
				$(".myinfo").html(data["user_info"]["nick_name"]+'<b></b>').show();
				$("#hidden_uid").val(data["uid"]);
				$("#menu-login .js-login-flag").hide();
			}else{
				$(".myinfo").hide();
				$("#menu-login .js-login-flag").show();
			}
		}
	});
}
function logout(){
	$.ajax({
		url: "<?php echo __URL('SHOP_MAIN/member/logout'); ?>",
		type: "post",
		success: function (res) {
			if (res['code'] > 0) {
				$.msg("<?php echo lang('quit_successfully'); ?>！");
				window.location.reload();
			} else {
				if(res["message"]!=null){
					$.msg(res["message"]);
				}
			}
		}
	})
}
</script>


<!-- 头部，菜单栏、搜索、导航栏 -->

	<!--
	创建人：王永杰
	创建时间：2017年2月7日 12:09:42
	功能描述：顶部logo、搜索 
-->
<script type="text/javascript">
	//显示搜索历史
	function SearRecord(){
		var arrSear=new Array();
		var strSear = $.cookie("searchRecord");
		var sear_html="<span><?php echo lang('recent_search'); ?></span>";
		if(typeof(strSear)!='undefined' && strSear!='null'){
			var arrSear=JSON.parse(strSear);
			sear_html+='<a href="javascript:clearSearRecord();" class="clear-history"> <i></i><?php echo lang("empty"); ?></a><br/>';
			for(var i=0;i<arrSear.length;i++){
				sear_html+='<a href="'+__URL('SHOP_MAIN/goods/goodslist?keyword='+arrSear[i])+'" style="display:inline-block;">'+arrSear[i]+'</a>';
			}
		}
		$('#search_titles').html(sear_html);
	}
	//清除搜索历史
	function clearSearRecord(){
		clear = JSON.stringify(new Array());
		$.cookie("searchRecord", clear);
		SearRecord();
	}
	
	$(function(){
		SearRecord();
	});
</script>
<div class="as-shelter"></div>
<div class="follow-box">
	<div class="follow-box-con">
		<a href="<?php echo __URL('SHOP_MAIN'); ?>" class="logo"><img src="<?php echo __IMG($web_info['logo']); ?>"/></a>
		<div class="search NS-SEARCH-BOX-TOP">
			<form class="search-form NS-SEARCH-BOX-FORM" method="get"  onsubmit="return false">
				<div class="search-info">
					<div class="search-type-box">
						<ul class="search-type" style="height: 36px; overflow: hidden;">
							<li class="search-li-top curr" num="0"><?php echo lang('baby'); ?></li>
<!-- 							<li class="search-li-top" num="1" >店铺</li> -->
						</ul>
<!-- 						<i></i> -->
					</div>
					<div class="search-box">
						<div class="search-box-con">
							<input type="text" class="search-box-input NS-SEARCH-BOX-KEYWORD" name="keyword" tabindex="9" autocomplete="off" data-searchwords="<?php echo $default_keywords; ?>" placeholder="<?php echo $default_keywords; ?>"  value="<?php if($keyword !=''): ?><?php echo $keyword; endif; ?>">
						</div>
					</div>
					<input type="hidden" id="searchtypeTop" name="type" value="0" class="searchtype">
					<input type="button" id="btn_search_box_submit_top" value="<?php echo lang('search'); ?>" class="button NS-SEARCH-BOX-SUBMIT-TOP">
				</div>
			</form>
		</div>
		<div class="login-info"></div>
	</div>
</div>
<div class="header">
	<div class="w1210">
		<div class="logo-info">
			<a href="<?php echo __URL('SHOP_MAIN'); ?>" class="logo"> <img src="<?php echo __IMG($web_info['logo']); ?>"/></a>
			<?php $service = new data\service\Platform;$logo_right_nav = $service->getPlatformAdvPositionDetail("1052", "*");$logo_right_nav = json_encode($logo_right_nav);$logo_right_nav = json_decode($logo_right_nav, ture); if(!(empty($logo_right_nav['adv_list'][0]['adv_image']) || (($logo_right_nav['adv_list'][0]['adv_image'] instanceof \think\Collection || $logo_right_nav['adv_list'][0]['adv_image'] instanceof \think\Paginator ) && $logo_right_nav['adv_list'][0]['adv_image']->isEmpty()))): ?>
					<a href="<?php echo $logo_right_nav['adv_list'][0]['adv_url']; ?>" class="logo-right"> <img src="<?php echo __IMG($logo_right_nav['adv_list'][0]['adv_image']); ?>" style="max-width:<?php echo $logo_right_nav['adv_list'][0]['adv_width']; ?>px;max-height:<?php echo $logo_right_nav['adv_list'][0]['adv_height']; ?>px;"> </a>
				<?php endif; ?>
			
		</div>
		<div class="search NS-SEARCH-BOX">
			<form class="search-form NS-SEARCH-BOX-FORM" method="get"  onsubmit="return false">
				<div class="search-info">
					<div class="search-type-box">
						<ul class="search-type">
							<li class="search-li curr" num="0"><?php echo lang('baby'); ?></li>
<!-- 							<li class="search-li" num="1">店铺</li> -->
						</ul>
<!-- 						<i></i> -->
					</div>
					<div class="search-box">
						<div class="search-box-con">
							<input type="text" class="keyword search-box-input NS-SEARCH-BOX-KEYWORD" name="keyword" tabindex="9" autocomplete="off" data-searchwords="<?php echo $default_keywords; ?>" placeholder="<?php echo $default_keywords; ?>" value="<?php if($keyword !=''): ?><?php echo $keyword; endif; ?>" />
						</div>
					</div>
					<!-- <input type="hidden" id="searchtype" name="type" value="0" class="searchtype"> --> 
					<input type="button" id="btn_search_box_submit" value="<?php echo lang('search'); ?>" class="button btn_search_box_submit NS-SEARCH-BOX-SUBMIT">
				</div>
				<!-- -热门搜索热搜词显示 -->
				<div class="search-results hide NS-SEARCH-BOX-HELPER" style="display: none;">
					<ul class="history-results">
						<li class="title" id="search_titles" style="word-wrap:break-word "></li>
						
					</ul>
					<ul class="rec-results">
						<li class="title"><span><?php echo lang('hot_search'); ?></span> <i class="close"></i></li>
						<?php if(is_array($hot_keys) || $hot_keys instanceof \think\Collection || $hot_keys instanceof \think\Paginator): $i = 0; $__LIST__ = $hot_keys;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$hot_key): $mod = ($i % 2 );++$i;?>
						<li><a  href="<?php echo __URL('SHOP_MAIN/goods/goodslist','keyword='.$hot_key); ?>" title="<?php echo $hot_key; ?>"><?php echo $hot_key; ?></a></li>
						<?php endforeach; endif; else: echo "" ;endif; ?>
					</ul>
				</div>
			</form>
			<ul class="hot-query">
				<!-- 默认搜索词 -->
				<li class="first"><a href="javascript:void(0);"></a></li>
			</ul>
		</div>
		<!-- 搜索框右侧小广告 _start -->
		<div class="header-right">
			<a href="javascript:void(0);" class="my-cart"><span class="ico"></span><?php echo lang('shopping_cart_settlement'); ?><span class="right_border"></span></a>
<!-- 			<a href="<?php echo __URL('SHOP_MAIN/member'); ?>" class="my-mall"><span class="ico"></span><?php echo lang('my_mall'); ?><span class="right_border"></span></a> -->
			<div class="cart-box-mask-layer">
				<i class="line"></i>
				<div class="cart_title">最新加入的商品</div>
				<div class="cart_goods_info">
					<ul id="js_cart">
						<p class="cart_empty">您的购物车中暂无商品</p>
					</ul>
					<!-- <p class="cart_empty">您的购物车中暂无商品</p> -->
				</div>
				<div class="cart-box-bottom">
					<span class="total"></span><a href="<?php echo __URL('SHOP_MAIN/goods/cart'); ?>" class="cart_btn">去购物车结算</a>
				</div>
			</div>
		</div>
		<!-- 搜索框右侧小广告 _end -->
	</div>
</div>
<!-- logo栏小广告  -->
<script type="text/javascript">
$(document).ready(function() {
	// 搜索框提示显示
	$('.NS-SEARCH-BOX .NS-SEARCH-BOX-KEYWORD').focus(function() {
		$(".NS-SEARCH-BOX .NS-SEARCH-BOX-HELPER").show();
	});
	// 搜索框提示隐藏
	$(".NS-SEARCH-BOX-HELPER .close").on('click',function() {
		$(".NS-SEARCH-BOX .NS-SEARCH-BOX-HELPER").hide();
	});
	// 清除记录
	$(".NS-SEARCH-BOX-HELPER .clear").click(function() {
		var url = '/search/clear-record.html';
		$.post(
			url,
			{},
			function(result) {
				if (result.code == 0) {
					$(".history-results .active").empty();
				} else {
				}
			},
			'json');
	});
});
function search_box_remove(key) {
	var url = '/search/delete-record.html';
	$.post(url, {
		data : key
	}, function(result) {
		if (result.code == 0) {
			$("#" + key).css("display", "none");
		} else {

		}
	}, 'json');
}
$(document).on("click", function(e) {
	var target = $(e.target);
	if (target.closest(".NS-SEARCH-BOX").length == 0) {
		$('.NS-SEARCH-BOX-HELPER').hide();
	}
})
// 鼠标移上时显示
$(".header-right").hover(
	function(){
		refreshShopCartBlue();
		$(".cart-box-mask-layer").show();
		$(".header .header-right a.my-cart span.right_border").css({
			"transform" :"rotate(225deg)",
			"marginTop" : "1px"
		})
	},
	function(){
		refreshShopCartBlue();
		$(".cart-box-mask-layer").hide();
		$(".header .header-right a.my-cart span.right_border").css({
			"transform" : "rotate(45deg)",
			"marginTop" : "-8px"
		});
	}
)
</script>
<script type="text/javascript">
//固定搜索
$(document).ready(function() {
	$(".NS-SEARCH-BOX .NS-SEARCH-BOX-SUBMIT").click(function() {
		var keyword_obj = $(this).parents(".NS-SEARCH-BOX").find(".NS-SEARCH-BOX-KEYWORD");
		var keywords = keyword_obj.val();
		if ($.trim(keywords).length == 0 || $.trim(keywords) == "<?php echo lang('please_input_keywords'); ?>") {
			keywords = keyword_obj.attr("data-searchwords");
		}
		keywords = keywords.replace(/</g,"&lt;").replace(/>/g,"&gt;");
		$(keyword_obj).val(keywords);
		if(keywords==null)
		{
			keywords = "";
		}

		if($.cookie("searchRecord") != undefined){
			var arr = eval($.cookie("searchRecord"));
		}else{
			var arr = new Array();
		}
		if(arr.length >0 ){
			if($.inArray(keywords,arr)< 0){
				arr.push(keywords);
			}
		}else{
			arr.push(keywords);
		}
		$.cookie("searchRecord",JSON.stringify(arr));

		if ($(".search-li.curr").attr('num') == 0) {
			window.location.href = __URL('SHOP_MAIN/goods/goodslist?keyword='+keywords);
		}else{
			window.location.href = __URL('SHOP_MAIN/shop/shopstreet?shopname='+keywords);
		}
	});
});
//浮动搜索
$(document).ready(function() {
	$(".NS-SEARCH-BOX-TOP .NS-SEARCH-BOX-SUBMIT-TOP").click(function() {
		var keyword_obj = $(this).parents(".NS-SEARCH-BOX-TOP").find(".NS-SEARCH-BOX-KEYWORD");
		var keywords = $(keyword_obj).val();
		if ($.trim(keywords).length == 0
				|| $.trim(keywords) == "<?php echo lang('please_input_keywords'); ?>") {
			keywords = $(keyword_obj).attr("data-searchwords");
		}
		keywords = keywords.replace(/</g,"&lt;").replace(/>/g,"&gt;");
		if($.cookie("searchRecord") != undefined){
			var arr = eval($.cookie("searchRecord"));
		}else{
			var arr = new Array();
		}
		if(arr.length >0 ){
			if($.inArray(keywords,arr)< 0){
				arr.push(keywords);
			}
		}else{
			arr.push(keywords);
		}
		$.cookie("searchRecord",JSON.stringify(arr));

		$(keyword_obj).val(keywords);
		if ($(".search-li-top.curr").attr('num') == 0) {
			window.location.href = __URL('SHOP_MAIN/goods/goodslist?keyword='+keywords);
		}else{
			window.location.href = __URL('SHOP_MAIN/shop/shopstreet?shopname='+keywords);
		}
	});
});

//回车键搜索
$('.NS-SEARCH-BOX-KEYWORD').bind('keypress', function (event) {
	if (event.keyCode == 13) { 
		var keyword_obj = $(this).parents(".NS-SEARCH-BOX").find(".NS-SEARCH-BOX-KEYWORD");
		var keywords = keyword_obj.val();
		if ($.trim(keywords).length == 0 || $.trim(keywords) == "<?php echo lang('please_input_keywords'); ?>") {
			keywords = keyword_obj.attr("data-searchwords");
		}
		
		$(keyword_obj).val(keywords);
		if(keywords==null)
		{
			keywords = "";
		}

		if($.cookie("searchRecord") != undefined){
			var arr = eval($.cookie("searchRecord"));
		}else{
			var arr = new Array();
		}
		if(arr.length >0 ){
			if($.inArray(keywords,arr)< 0){
				arr.push(keywords);
			}
		}else{
			arr.push(keywords);
		}
		$.cookie("searchRecord",JSON.stringify(arr));

		if ($(".search-li.curr").attr('num') == 0) {
			window.location.href = __URL('SHOP_MAIN/goods/goodslist?keyword='+keywords);
		}else{
			window.location.href = __URL('SHOP_MAIN/shop/shopstreet?shopname='+keywords);
		}
	}
})
</script>


<!--头部商品分类 start-->

	<!--
	创建人：李志伟
	创建时间：2017年2月7日 12:22:28
	功能描述：导航栏、菜单栏 、商品分类（与首页的样式不同，没有轮播图）
-->
<?php if($is_head_goods_nav == 1): ?>
<div class="category-box">
<?php else: ?>
<div class="category-box category-box-border">
<?php endif; ?>
	<div class="w1210">
		<div class="home-category fl">
			<a href="<?php echo __URL('SHOP_MAIN/goods/category'); ?>" class="menu-event" title="查看全部商品分类"><i></i>全部商品分类</a>
			<?php if($is_head_goods_nav == 1): ?>
			<div class="category-layer" style="display: block;">
			<?php else: ?>
			<div class="expand-menu category-layer" style="display: none;">
			<?php endif; ?>
				<!-- 公共的菜单栏-->
				<div class="category-layer">
					<span class="category-layer-bg"></span>
					<?php foreach($goods_category_one as $k=>$vo): if($k < 13): ?>
					<div class="list">
						<dl class="cat">
							<dt class="cat-name">
								<a href="<?php echo __URL('SHOP_MAIN/goods/goodslist','category_id='.$vo['category_id']); ?>" target="_blank" title="<?php echo $vo['category_name']; ?>"><?php echo $vo['category_name']; ?></a>
							</dt>
							<?php if($vo['count'] >0): ?>
							<i class="right-arrow">&gt;</i>
							<?php endif; ?>
						</dl>
						<div class="categorys" style="display: none;">
							<div class="item-left fl">
								<div class="subitems">
								<?php if($vo['child_list'] != null): foreach($vo['child_list'] as $vo2): ?>
									
									<dl class="fore1">
										<dt style="width: 5em;">
											<a href="<?php echo __URL('SHOP_MAIN/goods/goodslist','category_id='.$vo2['category_id']); ?>" target="_blank" title="<?php echo $vo2['category_name']; ?>">
												<em><?php echo $vo2['category_name']; ?></em>
												<?php if($vo2['count'] >0): ?>
												<i>&gt;</i>
												<?php endif; ?>
											</a>
										</dt>
										<dd>
										<?php if($vo2['child_list'] != null): foreach($vo2['child_list'] as $vo3): ?>
												<a href="<?php echo __URL('SHOP_MAIN/goods/goodslist','category_id='.$vo3['category_id']); ?>" target="_blank" title="<?php echo $vo3['category_name']; ?>"><?php echo $vo3['category_name']; ?></a>
											<?php endforeach; endif; ?>
										</dd>
									</dl>
									
								<?php endforeach; endif; ?>
								</div>
							</div>
						</div>
					</div>
					<?php endif; endforeach; ?>
				</div>
			</div>
		</div>
		<!-- 公共的菜单栏-->
	<div class="all-category fl" id="nav">
	<ul>
	<?php if(is_array($navigation_list) || $navigation_list instanceof \think\Collection || $navigation_list instanceof \think\Paginator): if( count($navigation_list)==0 ) : echo "" ;else: foreach($navigation_list as $k=>$nav): ?>
		<li class="fl" >
			<?php if($nav['nav_type'] == 0): if($nav['is_blank'] == 1): ?>
					<a class="nav" target="_blank" href="<?php echo __URL('SHOP_MAIN'.$nav['nav_url']); ?>"  title="<?php echo $nav['nav_title']; ?>"><?php echo $nav['nav_title']; ?></a>
				<?php else: ?>
					<a class="nav" href="<?php echo __URL('SHOP_MAIN'.$nav['nav_url']); ?>"  title="<?php echo $nav['nav_title']; ?>"><?php echo $nav['nav_title']; ?></a>
				<?php endif; else: if($nav['is_blank'] == 1): ?>
					<a class="nav" target="_blank" href="<?php echo $nav['nav_url']; ?>"  title="<?php echo $nav['nav_title']; ?>"><?php echo $nav['nav_title']; ?></a>
				<?php else: ?>
					<a class="nav" href="<?php echo $nav['nav_url']; ?>"  title="<?php echo $nav['nav_title']; ?>"><?php echo $nav['nav_title']; ?></a>
				<?php endif; endif; ?>
		</li>
	<?php endforeach; endif; else: echo "" ;endif; ?>
	</ul>
	<div class="wrap-line">
		<span style="left: 15px;"></span>
	</div>
</div>
	</div>
</div>

<!--头部商品分类 end-->

<!-- 右侧固定购物车 -->

	<script type="text/javascript" src="__TEMP__/<?php echo $style; ?>/public/js/shopping_cart.js"></script>
<script src="__TEMP__/<?php echo $style; ?>/public/js/ns_collections.js" type="text/javascript"></script>
<!-- common.js 刷新了<?php echo lang('goods_cart'); ?>数据 -->
<script>
//当浏览器窗口大小改变时，设置显示内容的高度  
window.onresize = function(){
	$(".sidebar-cartbox").find('.cart-panel-content').height($(window).height() - 90);
	$(".sidebar-cartbox").find('.bonus-panel-content').height($(window).height() - 40);
}
$(function() {
	$(".quick-links").css("top",($(window).height())/2);
	$.ajax({
		type:"post",
		url:"<?php echo __URL('SHOP_MAIN/components/getlogininfo'); ?>",
		success:function(data){
			if(data != null && data != ""){
				var img = data["user_info"]["user_headimg"];
				var name = data["user_info"]["nick_name"];
				$("#not_logged").css("display","none");
				$("#right_login_info").css("display","block");
				$("#right_login_info_name").text(name);
				if(img == '' ||img == null){
					$("#login_member_logo").attr('src',"<?php echo __IMG($default_headimg); ?>"); 
				}else{
					img = __IMG(img);
					$("#login_member_logo").attr('src',img);
				}
			}else{
				$("#not_logged").css("display","block");
				$("#right_login_info").css("display","none");
			}
		}
	})

	$('.layui-layer-close.layui-layer-close1').click(function(){
		$('#mask-layer-login').hide();
		$('#layui-layer').hide();
	})
	refreshShopCart();
	refreshShopCartBlue();
});
 
function showLoginLayer(){
	$('#mask-layer-login').show();
	$('#layui-layer').show();
}
</script>
<div class="right-sidebar-con">
	<div class="right-sidebar-main">
		<div class="right-sidebar-panel">
			<div id="quick-links" class="quick-links">
				<ul>
					<li class="quick-area quick-login sidebar-user-trigger">
						<a href="javascript:void(0);" class="quick-links-a" title="个人中心<?php echo lang('member_center'); ?>"><i class="user"></i></a>
						<div class="sidebar-user quick-sidebar">
							<i class="arrow-right"></i>
							<div class="sidebar-user-info">
								<!-- 没有<?php echo lang('login'); ?>的情况 _start -->
								<div class="NS-USER-NOT-LOGIN">
										<a href="<?php echo __URL('SHOP_MAIN/member/index'); ?>">
									<div class="user-pic">
										<div class="user-pic-mask"></div>
										<img id="login_member_logo" src="<?php echo __IMG($default_headimg); ?>" />
									</div>
									</a>
									<br>
									<p id="not_logged"><?php echo lang('hello'); ?>！<?php echo lang('please'); ?><a href="javascript:void(0);" onclick="tiaozhuan()" class="quick-login-a color ajax-login"><?php echo lang('login'); ?></a> | <a href="<?php echo __URL('SHOP_MAIN/login/registerbox'); ?>" class="color"><?php echo lang('register'); ?></a></p>
									<p id="right_login_info"><?php echo lang('hello'); ?>！<span id="right_login_info_name"></span></p>
								</div>
								<!-- 没有<?php echo lang('login'); ?>的情况 _end -->
								<!-- 有<?php echo lang('login'); ?>的情况 _start -->
								<div class="js-user-already-login" style="display: none;">
									<div class="user-have-login">
										<div class="user-pic">
											<div class="user-pic-mask"></div>
											<img src="" class="NS-USER-PIC">
										</div>
										<div class="user-info">
											<p>
												<?php echo lang('user'); ?>&nbsp;&nbsp;&nbsp;<?php echo lang('name'); ?>： <span class="NS-USER-NAME"></span>
											</p>
										</div>
									</div>
									<p class="m-t-10">
										<span class="prev-login"> <?php echo lang('last_login_time'); ?>： 
											<span class="NS-USER-LAST-LOGIN"></span>
										</span>
										<a href="<?php echo __URL('SHOP_MAIN/member/index'); ?>" class="btn account-btn" target="_blank"><?php echo lang('member_center'); ?></a>
										<a href="<?php echo __URL('SHOP_MAIN/member/orderlist'); ?>" class="btn order-btn" target="_blank"><?php echo lang('order_center'); ?></a>
									</p>
								</div>
								<!-- 有<?php echo lang('login'); ?>的情况 _end -->
							</div>
						</div>
					</li>
					<li class="sidebar-tabs" data-ns-flag="shopping_cart">
						<!-- 购物车 -->
						<div class="cart-list quick-links-a sidebar-cartbox-trigger" title="<?php echo lang('goods_cart'); ?>">
							<i class="cart"></i>
							<span class="cart_num js-cart-count">0</span>
						</div>
					</li>
					<li id="collectGoods" class="sidebar-tabs" data-ns-flag="collections_goods" title="<?php echo lang('my_collection'); ?>">
						<a href="javascript:;" class="mpbtn_collect quick-links-a">
							<i class="collection"></i>
						</a>
					</li>
					<li class="quick-area">
						<a class="quick-links-a" href="<?php echo $custom_service['value']['service_addr']; ?>" title="<?php echo lang('contact_customer_service'); ?>" target="_blank">
							<!-- http://wpa.qq.com/msgrd?v=3&uin=<?php echo $web_info['web_qq']; ?>&site=qq&menu=yes -->
							<i class="customer-service"></i>
						</a>
					</li>
					
					<li class="quick-area">
						<a class="quick-links-a" href="javascript:void(0);" title="<?php echo lang('mall_code'); ?>"><i class="qr-code"></i></a>
						<div class="sidebar-code quick-sidebar" style="display: none;">
							<i class="arrow-right"></i> 
							<img src="<?php echo __IMG($web_info['web_qrcode']); ?>">
						</div>
					</li>
					<li class="returnTop" style="display: none;background: #0689e1;">
						<a href="javascript:void(0);" class="return_top quick-links-a">
							<i class="top"></i>
						</a>
						<div class="popup" style="left: -121px; visibility: hidden;">
							<?php echo lang('back_top'); ?> <i class="arrow-right"></i>
						</div>
					</li>
				</ul>
			</div>
		</div>
	</div>
</div>

<!-- 内容 -->

<div class="w1210">
	<div class="breadcrumb clearfix">
		<a href="<?php echo __URL('SHOP_MAIN'); ?>" class="index"><?php echo lang('home_page'); ?></a>
		<span class="last" style="cursor: pointer;">
		<?php if(is_array($category_name)): foreach($category_name as $vo): ?>
				&nbsp;<span class="crumbs-arrow">></span>&nbsp;<a href="<?php echo __URL('SHOP_MAIN/goods/goodslist','category_id='.$vo['category_id']); ?>"><?php echo $vo['category_name']; ?></a>
			<?php endforeach; else: ?>
			&nbsp;<span class="crumbs-arrow">></span>&nbsp;<?php echo $category_name; endif; ?>
			<span class="crumbs-arrow">></span>
			<a href="<?php echo __URL('SHOP_MAIN/goods/goodsinfo','goodsid='.$goods_info['goods_id']); ?>"><?php echo $goods_info['goods_name']; ?></a>
		</span>
	</div>
	<!-- 商品详细信息 -->
	<div class="goods-info">
	<!-- 商品图片以及相册 _star-->
		<div id="preview" class="preview">
			<div class="goodsgallery"><!-- 商品相册容器 --><link rel="stylesheet" href="__TEMP__/<?php echo $style; ?>/public/css/gallery/gallery.css">
<script type="text/javascript" src="__TEMP__/<?php echo $style; ?>/public/js/gallery/gallery.js"></script>
<link rel="stylesheet" href="__TEMP__/<?php echo $style; ?>/public/css/plyr.css">
<script type="text/javascript" src="__TEMP__/<?php echo $style; ?>/public/js/plyr.js"></script>
<style>
.magnifying-glass{position: absolute;bottom: 0;right: 0;cursor:pointer;z-index:999;}
</style>

<div id="MagnifierWrap">
	<div class="MagnifierMain">
		<?php if(!(empty($goods_info['sku_picture_list']) || (($goods_info['sku_picture_list'] instanceof \think\Collection || $goods_info['sku_picture_list'] instanceof \think\Paginator ) && $goods_info['sku_picture_list']->isEmpty()))): ?>
		<img class="MagTargetImg" src="" data_big_img=""/>
		<?php else: ?>
		<img class="MagTargetImg" src="<?php echo __IMG($default_gallery_img); ?>" data_big_img="<?php echo __IMG($default_gallery_img); ?>"/>
		<?php endif; if(!empty($goods_info['goods_video_address'])): ?>
		<i class="goods-video-pause" onclick="goods_video_pause()"></i>
		<i class="goods-video-play" onclick="goods_video_play()"></i>
		<div class="goods-video-box">
			<video preload controls loop>
				<source src="<?php echo __IMG($goods_info['goods_video_address']); ?>" type="video/mp4" />
			</video>
		</div>
		<input id="video-is-play" value="1" type="hidden"/>
		<?php else: ?>
		<input id="video-is-play" value="0" type="hidden"/>
		<?php endif; ?>
		<script>
	
	plyr.setup();
	
	function goods_video_pause(){
		
		$(".goods-video-pause").hide();
		$(".goods-video-box").remove();
		$(".goods-video-play").show();
		$("#video-is-play").val('0');
	}
	
	function goods_video_play(){
		$(".goods-video-play").hide();
		$(".goods-video-pause").show();
		$("#video-is-play").val('1');
		$(".MagnifierDrag").remove();
		$(".MagnifierPop").remove();
		
		var html = '';
		html += '<div class="goods-video-box">';
			html += '<video autoplay controls loop >';
			html += '<source src="<?php echo __IMG($goods_info['goods_video_address']); ?>" type="video/mp4" />';
			html += '</video>';
		html += '</div>';
		
		$(".MagnifierMain").append(html);
	}
</script>
	</div>
	<span class="spe_leftBtn on">&lt;</span>
	<span class="spe_rightBtn on">&gt;</span>
	<div class="spec-items">
		<ul>
		<!-- 如果sku组图存在则显示sku组图 -->
		<?php if(!(empty($goods_info['sku_picture_list']) || (($goods_info['sku_picture_list'] instanceof \think\Collection || $goods_info['sku_picture_list'] instanceof \think\Paginator ) && $goods_info['sku_picture_list']->isEmpty()))): ?>
			<input type="hidden" id="hide_spec_id" value="<?php echo $goods_info['sku_picture_list'][0]['spec_id']; ?>">
			<?php if(is_array($goods_info['sku_picture_list']) || $goods_info['sku_picture_list'] instanceof \think\Collection || $goods_info['sku_picture_list'] instanceof \think\Paginator): if( count($goods_info['sku_picture_list'])==0 ) : echo "" ;else: foreach($goods_info['sku_picture_list'] as $key=>$img): if(is_array($img['album_picture_list']) || $img['album_picture_list'] instanceof \think\Collection || $img['album_picture_list'] instanceof \think\Paginator): if( count($img['album_picture_list'])==0 ) : echo "" ;else: foreach($img['album_picture_list'] as $k=>$p): if($k==0): ?>
						<li class="on" style="display: none;" id="sku_pic_<?php echo $img['spec_value_id']; ?>">
					<?php else: ?>
						<li style="display: none;" id="sku_pic_<?php echo $img['spec_value_id']; ?>">
					<?php endif; ?>
							<img src="<?php echo __IMG($p['pic_cover_micro']); ?>" data_big_img="<?php echo __IMG($p['pic_cover_big']); ?>" data-picture-id="<?php echo $p['pic_id']; ?>" data-pic-cover="<?php echo __IMG($p['pic_cover']); ?>"/>
						</li>
				<?php endforeach; endif; else: echo "" ;endif; endforeach; endif; else: echo "" ;endif; else: ?>
		<!-- 否则显示商品组图 -->
			<?php if(is_array($goods_info['img_list']) || $goods_info['img_list'] instanceof \think\Collection || $goods_info['img_list'] instanceof \think\Paginator): if( count($goods_info['img_list'])==0 ) : echo "" ;else: foreach($goods_info['img_list'] as $k=>$img): if($k==0): ?>
				<li class="on">
				<?php else: ?>
				<li>
				<?php endif; ?>
					<img src="<?php echo __IMG($img['pic_cover_micro']); ?>" data_big_img="<?php echo __IMG($img['pic_cover_big']); ?>" data-picture-id="<?php echo $img['pic_id']; ?>" data-pic-cover="<?php echo __IMG($img['pic_cover']); ?>" />
				</li>
			<?php endforeach; endif; else: echo "" ;endif; endif; ?>
		</ul>
	</div>
</div></div>
			<div class="goods-gallery-bottom">
				<!-- <a href="javascript:;" class="goods-compare compare-btn fr add-compare"><i></i> 对比</a> -->
				<a href="javascript:;" class="goods-col fr collect-goods">
					<i <?php if($is_member_fav_goods>0): ?>style="background-position: -112px -91px;"<?php endif; ?>></i>
					<span data-collects="<?php echo $goods_info['collects']; ?>"><?php echo lang('goods_collection_goods'); ?>  (<?php echo $goods_info['collects']; ?><?php echo lang('goods_popularity'); ?>)</span>
				</a>
<!-- 				<div class="bdsharebuttonbox fr bdshare-button-style0-16"> -->
<!-- 					<a class="bds_more" href="#" data-cmd="more" style="background: none; color: #999; line-height: 25px; height: 25px; margin: 0px 10px; padding-left: 20px; display: block;"> -->
<!-- 						<i style="width: 13px; height: 13px; background: transparent url(__TEMP__/<?php echo $style; ?>/public/images/goods-icon.png) no-repeat -113px -65px; vertical-align: middle; display: inline-block;"></i> 分享 -->
<!-- 					</a> -->
<!-- 				</div> -->
			</div>
		</div>
		<!-- 商品图片以及相册 _end-->
		<!-- 商品详细信息 _star-->
		<div class="detail-info">
			<!-- 商品名称 -->
			<h1 class="goods-name js-goods-name"><?php echo $goods_info['goods_name']; ?></h1>
			<!-- 商品简单描述、促销语 -->
			<p class="goods-brief color"><?php echo $goods_info['introduction']; ?></p>
			<!-- 商品团购倒计时 -->
			<div class="goods-price">
				<!-- 商品不同的价格 -->
				
				<!-- 是否为预售不同的显示方式 -->
				<?php if($goods_info['is_open_presell'] == 1): ?>
				<div class="realy-price">
					<div class="now-prices">
						<span class="price"><?php echo lang('goods_deposit'); ?></span>
						<strong class="p-price second-color">￥<?php echo $goods_info['presell_price']; ?></strong>
						<?php if($goods_info['point_exchange_type']==1 && $goods_info['point_exchange']>0): ?>
							<strong class="p-price second-color" style="font-size:15px;" id="member_point">+<?php echo $goods_info['point_exchange']; ?><?php echo lang('goods_integral'); ?></strong>
						<?php endif; ?>
					</div>
					<!-- <div class="depreciate">
						<a href="" title="">（降价通知）</a>
					</div> -->
					
				</div>
				<div class="show-price">
						<span class="price" style="display:block;"><?php echo lang('goods_selling_price'); ?> </span>
						<font class="presell-price"  id="price" data-price="<?php echo $goods_info['promotion_price']; ?>">￥<?php echo $goods_info['promotion_price']; ?></font>
						<!-- 单位 -->
						<?php if(!empty($goods_info['goods_unit'])): ?>
							<span class="p-price second-color">/<?php echo $goods_info['goods_unit']; ?></span>
						<?php endif; ?>
					</div>
				<?php else: ?>
				
				<div class="show-price" <?php if($goods_info['market_price'] == 0 || $goods_info['market_price'] == $goods_info['promotion_price']): ?>style="display:none;"<?php endif; ?>>
						<span class="price" style="display:block;"><?php echo lang('original_cost'); ?></span>
						<font class="market-price">￥<?php echo $goods_info['market_price']; ?></font>
				</div>
				
					<div class="realy-price">
					<div class="now-prices">
						<span class="price"><?php echo lang('goods_selling_price'); ?></span>
						<strong class="p-price second-color" id="price" data-price="<?php echo $goods_info['promotion_price']; ?>">￥<?php echo $goods_info['promotion_price']; ?></strong>
						<!-- 单位 -->
						<?php if(!empty($goods_info['goods_unit'])): ?>
							<span class="p-price second-color">/<?php echo $goods_info['goods_unit']; ?></span>
						<?php endif; ?>
					</div>
				</div>
				<?php endif; if($goods_info['is_show_member_price'] == 1): ?>
				<div class="realy-price">
					<div class="now-prices">
						<span class="price"><?php echo lang('goods_membership_price'); ?></span>
						<strong class="p-price second-color" id="member_price">￥<?php echo $goods_info['member_price']; ?></strong>
						<?php if($goods_info['point_exchange_type']==1 && $goods_info['point_exchange']>0): ?>
							<strong class="p-price second-color" style="font-size:15px;" id="member_point">+<?php echo $goods_info['point_exchange']; ?><?php echo lang('goods_integral'); ?></strong>
						<?php endif; ?>
					</div>
				</div>
				<?php endif; if($goods_info['give_point'] != 0): ?>
					<div class="realy-price">
						<div class="now-prices">
							<span class="price"><?php echo lang('goods_gift_points'); ?></span>
							<strong class="p-price second-color" style="font-size:12px;line-height:30px;padding: 1px 5px;color: #fff;margin-left: 5px;background-color: #E31939;"><span id="give_point"><?php echo $goods_info['give_point']; ?></span>&nbsp;<?php echo lang('points'); ?></strong>
						</div>
					</div>
				<?php endif; ?>
				<input type="hidden" id="hidden_give_point" value="<?php echo $goods_info['give_point']; ?>">
				<input type="hidden" id="integral_give_type" value="<?php echo $goods_info['integral_give_type']; ?>">
				
				<?php if($goods_info['point_exchange_type'] == 2): ?>
					<div class="realy-price">
						<div class="now-prices">
							<span class="price">积分兑换</span>
							<p style="line-height: 30px;">本商品可使用积分进行兑换，<a href="<?php echo __URL('SHOP_MAIN/goods/goodsInfoPointExchange','goodsid='.$goods_info['goods_id']); ?>" target="_blank" style="color: #0D84D4;">前去兑换</a></p>
						</div>
					</div>
				<?php endif; if(in_array(($goods_info['point_exchange_type']), explode(',',"0,2"))): ?>
					<!-- 积分抵现 -->
					<?php if($integral_balance > 0): ?>
						<div class="realy-price">
							<div class="now-prices">
								<span class="price">积分抵现</span>
								<p style="line-height: 30px;">积分可抵 <b><?php echo $integral_balance; ?></b> 元</p>
							</div>
						</div>
					<?php endif; endif; if($goods_info['max_buy']!=0): ?>
				<!-- 限购 -->
				<div class="prom-gift" >
					<div class="dt"><?php echo lang('goods_quantity_purchased'); ?></div>
					<div class="dd">
						<span class="prom-gift-label">
							<em><?php echo $goods_info['max_buy']; if(empty($goods_info['goods_unit'])): ?>件<?php else: ?><?php echo $goods_info['goods_unit']; endif; ?></em>
						</span>
					</div>
				</div>
				<?php endif; if($goods_info['min_buy']!=0): ?>
				<!-- 最小购买数量 -->
				<div class="prom-gift" >
					<div class="dt"><?php echo lang('minimum_purchase_quantity'); ?></div>
					<div class="dd">
						<span class="prom-gift-label">
							<em><?php echo $goods_info['min_buy']; if(empty($goods_info['goods_unit'])): ?>件<?php else: ?><?php echo $goods_info['goods_unit']; endif; ?></em>
						</span>
					</div>
				</div>
				<?php endif; if($goods_info['goods_type'] == 1): ?>
				
					<!-- 实物商品 -->
					<?php if($goods_info['mansong_name'] != '' || $goods_info['baoyou_name'] != ''): ?>
					<div class="shop-prom">
						<div class="shop-prom-title">
							<dt class="dt"><?php echo lang('goods_shop_activities'); ?></dt>
							<?php if($goods_info['mansong_name'] != ''): ?>
							<dd><i class="i-activity-flag"><?php echo lang('goods_manjian'); ?></i><?php echo $goods_info['mansong_name']; ?></dd>
							<?php endif; if($goods_info['baoyou_name'] != ''): ?>
							<dd><i class="i-activity-flag"><?php echo lang('goods_free_shipping'); ?></i><?php echo $goods_info['baoyou_name']; ?></dd>
							<?php endif; ?>
<!-- 							<a class="more">更多活动<i></i></a> -->
						</div>
<!-- 						<div class="shop-prom-Box"> -->
<!-- 							<div class="floater"> -->
<!-- 								<div class="hd"> -->
<!-- 									<em class="title">本店活动</em> -->
<!-- 									<ul class="bd"> -->
<!-- 										<li><a href="" target="_blank" title=""><?php echo $goods_info['mansong_name']; ?></a></li> -->
<!-- 									</ul> -->
<!-- 									<a class="more unmore">收起<i></i></a> -->
<!-- 								</div> -->
<!-- 							</div> -->
<!-- 						</div> -->
					</div>
					<?php endif; else: ?>
					
					<!-- 虚拟商品 -->
					<?php if($goods_info['mansong_name'] != ''): ?>
					<div class="shop-prom">
						<div class="shop-prom-title">
							<dt class="dt"><?php echo lang('goods_shop_activities'); ?></dt>
							<?php if($goods_info['mansong_name'] != ''): ?>
							<dd><i class="i-activity-flag"><?php echo lang('goods_manjian'); ?></i><?php echo $goods_info['mansong_name']; ?></dd>
							<?php endif; ?>
						</div>
					</div>
					<?php endif; endif; ?>
			</div>
			
			<!-- 优惠劵 -->
			<?php if(!(empty($goods_coupon_list) || (($goods_coupon_list instanceof \think\Collection || $goods_coupon_list instanceof \think\Paginator ) && $goods_coupon_list->isEmpty()))): ?>
			<div class="receive-coupons" id="selectbtnno" style="position: relative;">
				<span class="title" style="line-height:30px;float:left;"><?php echo lang('discount'); ?></span>
					<?php if(!(empty($goods_coupon_list) || (($goods_coupon_list instanceof \think\Collection || $goods_coupon_list instanceof \think\Paginator ) && $goods_coupon_list->isEmpty()))): ?>
					<div class="coupon" style="position:absolute;">
					<?php if(is_array($goods_coupon_list) || $goods_coupon_list instanceof \think\Collection || $goods_coupon_list instanceof \think\Paginator): $k = 0; $__LIST__ = $goods_coupon_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($k % 2 );++$k;if($k==1): ?>
						<i>优惠券</i><p><?php echo $v['money']; ?><?php echo lang('shop_coupon_full'); ?><?php echo $v['at_least']; ?><?php echo lang('meta_utility'); ?><a href="javascript:;" onclick="coupon_receive(this,<?php echo $v['coupon_type_id']; ?>)" data-money="<?php echo $v['money']; ?>" data-at-least="<?php echo $v['at_least']; ?>" data-start-time="<?php echo date('Y.m.d',$v['start_time']); ?>"  data-end-time="<?php echo date('Y.m.d',$v['end_time']); ?>" data-max-fetch="<?php echo $v['max_fetch']; ?>" data-receive-quantity="<?php echo $v['receive_quantity']; ?>" class="coupon<?php echo $v['coupon_type_id']; ?>">  <?php echo lang('receive'); ?></a></p>
					<?php endif; endforeach; endif; else: echo "" ;endif; if($coupon_count > 1): ?>
						<div class="rightshow" id="show_coupons"><img src="__TEMP__/<?php echo $style; ?>/public/images/jiantou.png" style="margin: 13px 15px 0 5px;float:right;cursor: pointer;"/><span style="float:right;cursor: pointer;">展开</span></div>
					<?php endif; ?>
							<div class="receive-coupons" style="line-height: 30px;display:none;padding:0 0 5px;left: -90px;z-index: 9999999;position: relative;" id="coupons_detail">
	<!-- 							<span class="title"><?php echo lang('discount'); ?></span>	 -->
								<?php if(is_array($goods_coupon_list) || $goods_coupon_list instanceof \think\Collection || $goods_coupon_list instanceof \think\Paginator): $k = 0; $__LIST__ = $goods_coupon_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k % 2 );++$k;if(!(empty($vo) || (($vo instanceof \think\Collection || $vo instanceof \think\Paginator ) && $vo->isEmpty()))): if($k > 1): ?>
								<div class="coupon" style="float: right;">
									<i>优惠券</i><p><?php echo $vo['money']; ?><?php echo lang('shop_coupon_full'); ?><?php echo $vo['at_least']; ?><?php echo lang('meta_utility'); ?><a href="javascript:;" onclick="coupon_receive(this,<?php echo $vo['coupon_type_id']; ?>)" data-money="<?php echo $vo['money']; ?>" data-at-least="<?php echo $vo['at_least']; ?>" data-start-time="<?php echo date('Y.m.d',$vo['start_time']); ?>"  data-end-time="<?php echo date('Y.m.d',$vo['end_time']); ?>" data-max-fetch="<?php echo $vo['max_fetch']; ?>" data-receive-quantity="<?php echo $vo['receive_quantity']; ?>" class="coupon<?php echo $vo['coupon_type_id']; ?>">  <?php echo lang('receive'); ?></a></p>
								</div>
								<?php endif; endif; endforeach; endif; else: echo "" ;endif; ?>
								<div style="clear: both;"></div>
							</div>
						
					</div>
					<?php endif; ?>
			</div>
			<?php endif; ?>
			<!-- 发货时间 -->
			<?php if($goods_info['is_open_presell'] == 1): ?>
			<div class="freight">
				<div class="dt"><?php echo lang('goods_delivery_time'); ?></div>
				<div class="dd">
					<?php if($goods_info['presell_delivery_type'] == 1): ?>
					<?php echo getTimeStampTurnTime($goods_info['presell_time']); ?>发货
					<?php else: ?>
					付款<?php echo $goods_info['presell_day']; ?>天后发货
					<?php endif; ?>
				</div>
			</div>
			<?php endif; ?>
			<!-- 发货时间 -->
			<?php if($goods_info['goods_type'] == 1): ?>
			<!-- 运费 -->
			<div class="freight">
				<div class="dt"><?php echo lang('goods_delivery_to'); ?></div>
				<div class="dd">
					<div class="post-age">
						<div class="region-chooser-container region-chooser" style="z-index: 3">
							<div class="region-chooser-selected">
								<!-- 定位城市 -->
								<div class="region js-region">请选择地区</div>
							</div>
							<div class="region-chooser-box" id="region-chooser-box" style="display: none;">
								<div class="region-chooser-close"></div>
								<div class="region-tabs">
									<div class="region-tab selected" data-region-level="1" style="display: block"></div>
									<div class="region-tab" data-region-level="2" style="display: block"></div>
									<div class="region-tab" data-region-level="3" style="display: block"><?php echo lang('goods_select_district_or_county'); ?><i></i></div>
								</div>
								<div class="region-items" data-region-level="1" style="display: block;"></div>
								<div class="region-items" data-region-level="2" style="display: none;"></div>
								<div class="region-items" data-region-level="3" style="display: none;"></div>
							</div>
							<div style="clear: both;"></div>
						</div>
						<!-- 显示物流运费 -->
						<div class="post-age-info js-shipping-name"></div>
					</div>
				</div>
			</div>
			<?php endif; ?>
			
			<!-- 服务 -->
			<div class="freight">
				<div class="dt">服务</div>
				<div class="dd">
					由&nbsp;&nbsp;<a href="javascript:;" style="color:#0689e1;"><?php echo $title; ?></a>&nbsp;&nbsp;发货并提供售后服务
				</div>
			</div>
			
			<!-- 阶梯优惠 -->
			<?php if(!(empty($goodsLadderPreferentialList) || (($goodsLadderPreferentialList instanceof \think\Collection || $goodsLadderPreferentialList instanceof \think\Paginator ) && $goodsLadderPreferentialList->isEmpty()))): ?>
			<div class="freight">
				<div class="dt">阶梯优惠</div>
				<div class="dd">
					<?php if(is_array($goodsLadderPreferentialList) || $goodsLadderPreferentialList instanceof \think\Collection || $goodsLadderPreferentialList instanceof \think\Paginator): if( count($goodsLadderPreferentialList)==0 ) : echo "" ;else: foreach($goodsLadderPreferentialList as $key=>$vo): ?>
						满<span class="second-color" style="font-size:18px;"><?php echo $vo['quantity']; ?></span><?php if(empty($goods_info['goods_unit'])): ?>件<?php else: ?><?php echo $goods_info['goods_unit']; endif; ?>，每<?php if(empty($goods_info['goods_unit'])): ?>件<?php else: ?><?php echo $goods_info['goods_unit']; endif; ?>降<span class="second-color" style="font-size:18px;"><?php echo $vo['price']; ?></span>元&nbsp;&nbsp;&nbsp;&nbsp;
					<?php endforeach; endif; else: echo "" ;endif; ?>
				</div>
			</div>
			<?php endif; ?>

			<!-- 评价、销量、积分 -->
			<div class="info-other">
				<ul class="other">
					<li><p><?php echo lang('goods_cumulative_evaluation'); ?><span><a id="evaluate_num" href="#" class="color"><?php echo $evaluates_count['evaluate_count']; ?></a></span></p></li>
					<li><p><?php echo lang('goods_cumulative_sales'); ?><span class="color"><?php echo $goods_info['sales']; ?></span></p></li>
<!-- 						<li class="last"><p><?php echo lang('goods_gift_points'); ?><span class="color"><?php echo $goods_info['give_point']; ?></span></p></li> -->
				</ul>
			</div>
			
			<div class="choose js-skulist">
				<p class="choose-title"><?php echo lang('goods_want_information'); ?><b onclick="closePrompt(this)">x</b></p><br/>
				<input type="hidden" id="goods_id" name="" value="<?php echo $goods_info['goods_id']; ?>" />
				<input type="hidden" id="goods_sku_count" value="<?php echo $goods_sku_count; ?>"/>
				<input type="hidden" id="attribute_list" value="<?php echo $spec_list; ?>"/>
				<?php if(is_array($goods_info['sku_list']) || $goods_info['sku_list'] instanceof \think\Collection || $goods_info['sku_list'] instanceof \think\Paginator): if( count($goods_info['sku_list'])==0 ) : echo "" ;else: foreach($goods_info['sku_list'] as $k=>$pro_skus): ?>
				<input type="hidden" id="goods_sku<?php echo $k; ?>" value="<?php echo $pro_skus['attr_value_items']; ?>;" stock="<?php echo $pro_skus['stock']; ?>" <?php if($pro_skus['promote_price'] < $pro_skus['member_price']): ?>price="<?php echo $pro_skus['promote_price']; ?>" <?php else: ?>price="<?php echo $pro_skus['member_price']; ?>"<?php endif; ?> promotion_price="<?php echo $pro_skus['promote_price']; ?>" member_price="<?php echo $pro_skus['member_price']; ?>" skuid="<?php echo $pro_skus['sku_id']; ?>" skuname="<?php echo $pro_skus['sku_name']; ?>" original_price="<?php echo $pro_skus['market_price']; ?>" Js-sku="sku"/>
				<?php endforeach; endif; else: echo "" ;endif; if(is_array($goods_info['spec_list']) || $goods_info['spec_list'] instanceof \think\Collection || $goods_info['spec_list'] instanceof \think\Paginator): if( count($goods_info['spec_list'])==0 ) : echo "" ;else: foreach($goods_info['spec_list'] as $k=>$spec): ?>
					<dl class="attr">
						<dt class="dt"><?php echo $spec['spec_name']; ?></dt>
						<dd class="dd">
							<ul>
							<?php if(is_array($spec['value']) || $spec['value'] instanceof \think\Collection || $spec['value'] instanceof \think\Paginator): if( count($spec['value'])==0 ) : echo "" ;else: foreach($spec['value'] as $key=>$spec_value): if($spec_value['spec_id'] == $spec['spec_id']): ?>
								<!-- && count($goods_info['spec_list'])==1 -->
								<li class="goods-spec-item">
									<?php switch($spec_value['spec_show_type']): case "1": ?>
											<a href="javascript:;" title="<?php echo $spec_value['spec_value_name']; ?>">
												<span class="value-label" name="Span<?php echo $key; ?>" id="<?php echo $spec['spec_id']; ?>:<?php echo $spec_value['spec_value_id']; ?>"><?php echo $spec_value['spec_value_name']; ?></span>
												<i></i>
											</a>
											<?php break; case "2": ?>
											<!-- 颜色 -->
											<a href="javascript:;" title="<?php echo $spec_value['spec_value_name']; ?>">
												<?php if($spec_value['spec_value_data'] == ''): ?>
												<span class="value-label" name="Span<?php echo $key; ?>" id="<?php echo $spec['spec_id']; ?>:<?php echo $spec_value['spec_value_id']; ?>"><?php echo $spec_value['spec_value_name']; ?></span>
												<?php else: ?>
												<span id="<?php echo $spec['spec_id']; ?>:<?php echo $spec_value['spec_value_id']; ?>">
													<b style="background: <?php echo $spec_value['spec_value_data']; ?>;"></b>
													<?php echo $spec_value['spec_value_name']; ?>
												</span>
												<?php endif; ?>
												<i></i>
											</a>
											<?php break; case "3": ?>
											<a href="javascript:;" title="<?php echo $spec_value['spec_value_name']; ?>">
												<?php if($spec_value['spec_value_data'] == ''): ?>
												<span class="value-label" name="Span<?php echo $key; ?>" id="<?php echo $spec['spec_id']; ?>:<?php echo $spec_value['spec_value_id']; ?>"><?php echo $spec_value['spec_value_name']; ?></span>
												<?php else: ?>
												<img src="<?php echo __IMG($spec_value['spec_value_data']); ?>">
												<span class="value-label" name="Span<?php echo $key; ?>" id="<?php echo $spec['spec_id']; ?>:<?php echo $spec_value['spec_value_id']; ?>" data-show-big-pic="<?php echo __IMG($spec_value['spec_value_data_big_src']); ?>" data-picture-id="<?php echo $spec_value['picture_id']; ?>"><?php echo $spec_value['spec_value_name']; ?></span>
												<?php endif; ?>
												<i></i><!-- 第一个选中 -->
											</a>
											<?php break; endswitch; ?>
								</li>
								<?php endif; endforeach; endif; else: echo "" ;endif; ?>
							</ul>
						</dd>
					</dl>
				<?php endforeach; endif; else: echo "" ;endif; ?>
				<!-- 购买数量 -->
				<dl class="amount">
					<dt class="dt"><?php echo lang('goods_number'); ?></dt>
					<dd class="dd">
						<span class="amount-widget">
							<input type="text" class="amount-input" data-max="<?php if($goods_info['max_buy']==0 || $goods_info['max_buy']>$goods_info['stock']): ?><?php echo $goods_info['stock']; else: ?><?php echo $goods_info['max_buy']; endif; ?>" data-min="<?php echo $goods_info['min_buy']; ?>" title="<?php echo lang('goods_purchase_quantity'); ?>" id="num" value="<?php if($goods_info['min_buy'] > 0): ?><?php echo $goods_info['min_buy']; else: ?>1<?php endif; ?>" />
							<span class="amount-btn">
								<span class="amount-plus"  onselectstart="return false;"><i>+</i></span>
								<span class="amount-minus"  onselectstart="return false;"><i>-</i></span>
							</span>
							<span class="amount-unit"><?php if(empty($goods_info['goods_unit'])): ?>件<?php else: ?><?php echo $goods_info['goods_unit']; endif; ?></span>
						</span>
						<?php if($goods_info['is_stock_visible'] == 1): ?>
						<em class="stock js-goods-number"><?php echo lang('goods_stock'); ?><?php echo $goods_info['stock']; if(empty($goods_info['goods_unit'])): ?>件<?php else: ?><?php echo $goods_info['goods_unit']; endif; ?></em>
						<?php endif; if($goods_info['max_buy']!=0): ?>
						<!-- 限购 -->
						<em style="vertical-align: middle;">(<?php echo lang('goods_restriction_per_person'); ?><?php echo $goods_info['max_buy']; if(empty($goods_info['goods_unit'])): ?>件<?php else: ?><?php echo $goods_info['goods_unit']; endif; ?>)</em>
						<?php endif; if($goods_purchase_restriction['code'] == 0): ?>
						<div style="color:red;"><?php echo lang('goods_restriction_per_person'); ?><?php echo $goods_info['max_buy']; if(empty($goods_info['goods_unit'])): ?>件<?php else: ?><?php echo $goods_info['goods_unit']; endif; ?>，<?php echo lang('goods_exceeded_the_limit_number'); ?></div>
						<?php endif; if($goods_info['group_info'] != ''): ?>
						<a href="<?php echo __URL('SHOP_MAIN/goods/grouppurchase','goodsid='.$goods_info['goods_id']); ?>" target="_blank"" class="i-activity-go">去团购</a>
						<?php endif; ?>
					</dd>
				</dl>
				<!-- 限购提示语 -->
				<!-- 加入<?php echo lang('goods_cart'); ?>按钮、手机购买 -->
				<div class="action">
					
					<?php if($goods_info['is_open_presell'] == 1): ?>
					<div class="btn-buy">
					<a href="javascript:;" class="buy-goods color js-buy-now" data-tag="presell_buy">
						<span class="buy-goods-bg"></span>
										<span class="buy-goods-border"></span>
					立即预定</a> 
					</div>
					<?php else: if($goods_info['state'] == 1): ?>
						<div class="btn-buy">
							<!-- 限购判断 -->
							<?php if($goods_purchase_restriction['code'] == 0): ?>
							<a href="javascript:;" class="buy-goods purchase-restriction js-buy-now" data-tag="buy_now">
							<?php else: ?>
							<a href="javascript:;" class="buy-goods color js-buy-now" data-tag="buy_now">
							<?php endif; ?>
								<span class="buy-goods-bg"></span>
								<span class="buy-goods-border"></span>
								<?php if($integral_flag == 1): ?>
								<?php echo lang('goods_exchange'); else: ?>
								<?php echo lang('goods_buy_now'); endif; ?>
							</a>
						</div>
						
						<?php if($goods_info['goods_type'] == 1): if($goods_purchase_restriction['code'] == 0): ?>
							<div class="btn-buy"><a href="javascript:;" class="add-cart purchase-restriction" data-tag="to_cart"><i></i><?php echo lang('goods_add_cart'); ?></a></div>
							<?php else: ?>
							<div class="btn-buy"><a href="javascript:;" class="add-cart bg-color" data-tag="to_cart"><i></i><?php echo lang('goods_add_cart'); ?></a></div>
							<?php endif; endif; else: ?>
						<div class="btn-buy"><a href="javascript:;" class="no-auth "><?php echo lang('goods_laid_off'); ?></a></div>
					<?php endif; if($goods_info['QRcode'] != ''): ?>
					<div class="btn-phone">
						<a href="javascript:;" class="go-phone">
<!-- 								<span>手机购买</span> -->
							<i></i>
							<div id="phone-tan" style="left:53px;">
								<span class="arr"></span>
								<div class="m-qrcode-wrap">
									<img src="<?php echo __IMG($goods_info['QRcode']); ?>" alt="<?php echo lang('goods_code_picture'); ?>" width="100" height="100">
								</div>
							</div>
						</a>
					</div>
					<?php endif; endif; ?>
				</div>
				
				<?php if($merchant_service_list): ?>
				<!-- 商家服务 -->
				<div class="merchant-service">
					<span><?php echo lang('merchant_service'); ?></span>
					<ul>
						<?php if(is_array($merchant_service_list) || $merchant_service_list instanceof \think\Collection || $merchant_service_list instanceof \think\Paginator): if( count($merchant_service_list)==0 ) : echo "" ;else: foreach($merchant_service_list as $key=>$vo): ?>
						<li>
							<span title="<?php echo $vo['describe']; ?>"><?php echo $vo['title']; ?></span>
						</li>
						<?php endforeach; endif; else: echo "" ;endif; ?>
					</ul>
				</div>
				<?php endif; ?>
			</div>
		</div>
	<!-- 商品详细信息 _end-->
	</div>
	<!-- 搭配套餐 -->
	<?php if(!(empty($comboPackageGoodsArray) || (($comboPackageGoodsArray instanceof \think\Collection || $comboPackageGoodsArray instanceof \think\Paginator ) && $comboPackageGoodsArray->isEmpty()))): ?>
	<article class="combo-package-promotion">
		<nav>
			<ul>
				<?php if(is_array($comboPackageGoodsArray) || $comboPackageGoodsArray instanceof \think\Collection || $comboPackageGoodsArray instanceof \think\Paginator): if( count($comboPackageGoodsArray)==0 ) : echo "" ;else: foreach($comboPackageGoodsArray as $k=>$vo): ?>
				<li <?php if($k == 0): ?>class="selected"<?php endif; ?> data-combo-id="<?php echo $vo['id']; ?>"><?php echo $vo['combo_package_name']; ?></li>
				<?php endforeach; endif; else: echo "" ;endif; ?>
			</ul>
		</nav>
		<?php if(is_array($comboPackageGoodsArray) || $comboPackageGoodsArray instanceof \think\Collection || $comboPackageGoodsArray instanceof \think\Paginator): if( count($comboPackageGoodsArray)==0 ) : echo "" ;else: foreach($comboPackageGoodsArray as $k=>$vo): ?>
		<div class="tab-content" <?php if($k > 0): ?>style="display:none"<?php endif; ?> data-combo-id="<?php echo $vo['id']; ?>">
			<div class="master">
				<div class="p-list">
					<div class="p-img">
						<a href="<?php echo __URL('SHOP_MAIN/goods/goodsinfo','goodsid='.$vo['main_goods']['goods_id']); ?>" target="_blank">
							<img src="<?php echo __IMG($default_goods_img); ?>" class="lazy_load" data-original="<?php echo __IMG($vo['main_goods']['pic_cover_mid']); ?>" width="130" height="130" alt="" title="<?php echo $vo['main_goods']['goods_name']; ?>">
						</a>
					</div>
					<div class="p-name">
						<a href="<?php echo __URL('SHOP_MAIN/goods/goodsinfo','goodsid='.$vo['main_goods']['goods_id']); ?>" target="_blank"><?php echo $vo['main_goods']['goods_name']; ?></a>
					</div>
					<div class="p-price" style="padding:0 0 5px;">
						<strong>￥<?php echo $vo['main_goods']['price']; ?></strong>
					</div>
					<i class="plus">+</i>
				</div>
			</div>
			<div class="collocations">
				<div class="switchable-wrap" data-tab="item" style="display: block;">
					<div class="lh-wrap">
						<ul>
							<?php if(is_array($vo['goods_array']) || $vo['goods_array'] instanceof \think\Collection || $vo['goods_array'] instanceof \think\Paginator): if( count($vo['goods_array'])==0 ) : echo "" ;else: foreach($vo['goods_array'] as $key=>$to): ?>
							<li data-push="2" class="p-list">
								<div class="p-img">
									<a href="<?php echo __URL('SHOP_MAIN/goods/goodsinfo','goodsid='.$to['goods_id']); ?>" target="_blank" style="display: block;width: 130px;height: 130px;">
										<img src="<?php echo __IMG($default_goods_img); ?>" class="lazy_load" data-original="<?php echo __IMG($to['pic_cover_mid']); ?>" title="<?php echo $to['goods_name']; ?>" width="130" height="130" style="display: block;">
									</a>
								</div>
								<div class="p-name">
									<a href="<?php echo __URL('SHOP_MAIN/goods/goodsinfo','goodsid='.$to['goods_id']); ?>" target="_blank" title="<?php echo $to['goods_name']; ?>"><?php echo $to['goods_name']; ?></a>
								</div>
								<div class="p-price" style="padding:0 0 5px;">
									<strong>￥<?php echo $to['price']; ?></strong>
								</div>
							</li>
							<?php endforeach; endif; else: echo "" ;endif; ?>
						</ul>
					</div>
				</div>
			</div>
			<div class="results">
				<div class="p-price">
					<p style="line-height: 25px;">
						<span>原价</span>
						<s>￥<?php echo $vo['original_price']; ?></s>
					</p>
					<p style="line-height: 25px;">
						<span>节省</span>
						<span>￥<?php echo $vo['save_the_price']; ?></span>
					</p>
					<p style="line-height: 25px;">
						<span>套餐价</span>
						<strong>￥<?php echo $vo['combo_package_price']; ?></strong>
					</p>
				</div>
				<?php if($vo['main_goods']['stock'] > 0): ?>
				<a href="javascript:;" class="combo-package-promotion-buy" data-combo-id="<?php echo $vo['id']; ?>" data-curr-id="<?php echo $vo['main_goods']['goods_id']; ?>">立即购买</a>
				<?php else: ?>
				<a href="javascript:;" class="combo-package-promotion-disabled">立即购买</a>
				<?php endif; ?>
				<i class="equal"></i>
			</div>
		</div>
		<?php endforeach; endif; else: echo "" ;endif; ?>
	</article>
	<?php endif; ?>
	<!-- 内容 -->
	<div class="clearfix">
		<!-- 左半部分内容 提出来的  客服-->
		<div class="fl">
			<!-- 客服组 提出来的  客服，先隐藏掉
			2017年2月10日 08:40:53
			{1include file="shop/blue/Goods/controlCustomerCenter"}
			-->
			
			<!-- 排行榜 提出来的 【排行榜】-->
			<!--
	创建人：王永杰
	创建时间：2017年2月7日 12:17:11
	功能描述： 店内商品排行榜
-->
<!-- 排行榜 提出来的 【排行榜】-->
<div class="store-rank-list">
	<h3 class="left-title"><?php echo lang('goods_store_rankings'); ?></h3>
	<div class="left-content rank-list">
		<ul class="tab-nav j-tab-nav">
			<li class="current"><?php echo lang('goods_sales_volume'); ?></li>
			<li><?php echo lang('goods_collection_number'); ?></li>
		</ul>
		<div class="tab-con">
			<div class="j-tab-con">
				<ul class="goods-list" style="display: block">
				<?php if(is_array($goods_rank) || $goods_rank instanceof \think\Collection || $goods_rank instanceof \think\Paginator): if( count($goods_rank)==0 ) : echo "" ;else: foreach($goods_rank as $k=>$goods): if(($k+1) <= 5): ?>
					<li class="goods-item first">
						<div class="picture">
							<a href="<?php echo __URL('SHOP_MAIN/goods/goodsinfo','goodsid='.$goods['goods_id']); ?>" title="<?php echo $goods['goods_name']; ?>">
								<img src="<?php echo __IMG($default_goods_img); ?>" class="lazy_load" data-original="<?php echo __IMG($goods['pic_cover_mid']); ?>" />
							</a>
						</div>
						<div class="price">
							<a href="<?php echo __URL('SHOP_MAIN/goods/goodsinfo','goodsid='.$goods['goods_id']); ?>" title="<?php echo $goods['goods_name']; ?>"><?php echo $goods['goods_name']; ?></a>
							<span class="money-color">￥<?php echo $goods['promotion_price']; ?></span>
						</div>
					</li>
					<?php endif; endforeach; endif; else: echo "" ;endif; ?>
				</ul>
				<ul class="goods-list">
				<?php if(is_array($goods_collection) || $goods_collection instanceof \think\Collection || $goods_collection instanceof \think\Paginator): if( count($goods_collection)==0 ) : echo "" ;else: foreach($goods_collection as $k=>$goods): ?>
					<li class="goods-item first">
						<div class="picture">
							<a href="<?php echo __URL('SHOP_MAIN/goods/goodsinfo','goodsid='.$goods['goods_id']); ?>" title="<?php echo $goods['goods_name']; ?>">
								<img src="<?php echo __IMG($default_goods_img); ?>" class="lazy_load" data-original="<?php echo __IMG($goods['pic_cover_mid']); ?>" />
							</a>
						</div>
						<div class="price">
							<a href="<?php echo __URL('SHOP_MAIN/goods/goodsinfo','goodsid='.$goods['goods_id']); ?>" title="<?php echo $goods['goods_name']; ?>"><?php echo $goods['goods_name']; ?></a>
							<span class="money-color">￥<?php echo $goods['promotion_price']; ?></span>
						</div>
					</li>
				<?php endforeach; endif; else: echo "" ;endif; ?>
				</ul>
			</div>
		</div>
	</div>
</div>
		</div>
		<!-- 右半部分内容 -->
		<div class="right right-con">
			<div class="wrapper">
				<div id="main-nav-holder" class="goods-detail">
					<ul id="nav" class="tab">
						<li class="title-list current"><a href="javascript:;" id="goods_detail"><?php echo lang('goods_commodity_details'); ?></a></li>
					 	<li class="title-list"><a href="javascript:;" id="goods_attribute"><?php echo lang('goods_commodity_attribute'); ?></a></li>
						<li class="title-list"><a id="evaluate_count" href="javascript:;"><?php echo lang('goods_cumulative_evaluation'); ?>(<?php echo $evaluates_count['evaluate_count']; ?>)</a></li>
						<li class="title-list"><a href="javascript:;" id="goods_consultation"><?php echo lang('goods_purchase_consultation'); ?></a></li>
					</ul>
					<div class="right-side">
						<?php if($goods_purchase_restriction['code'] == 0): ?>
						<a href="javascript:void(0);" class="right-addcart js-buy-now purchase-restriction" data-tag="buy_now" style="background: #9c9c9c;">
						<?php else: ?>
						<a href="javascript:void(0);" class="right-addcart js-buy-now" data-tag="buy_now">
						<?php endif; ?>
							<i></i>
							<?php if($integral_flag == 1): ?>
							<?php echo lang('goods_exchange'); else: ?>
							<?php echo lang('goods_buy_now'); endif; ?>
						</a>
					</div>
				</div>
				<div id="main_widget">
					<!-- 规格参数 _star -->
					<div id="goods_attr_list" class="goods-detail-con goods-detail-tabs" style="display:none;">
						<?php if(count($goods_info['goods_attribute_list']) > 0): ?>
							<table cellspacing="0">
								<?php if(!(empty($goods_info['goods_attribute_list']) || (($goods_info['goods_attribute_list'] instanceof \think\Collection || $goods_info['goods_attribute_list'] instanceof \think\Paginator ) && $goods_info['goods_attribute_list']->isEmpty()))): ?>
									<tr>
										<td colspan="2" class="attr_name" style="width:965px;background: #eee;">商品属性</td>
									</tr>
									<?php foreach($goods_info['goods_attribute_list'] as $vo): if(!(empty($vo['attr_value_name']) || (($vo['attr_value_name'] instanceof \think\Collection || $vo['attr_value_name'] instanceof \think\Paginator ) && $vo['attr_value_name']->isEmpty()))): ?>
										<tr>
											<td class="attr_name"><?php echo $vo['attr_value']; ?></td>
											<td class="attr_value_name"><?php echo $vo['attr_value_name']; ?></td>
										</tr>
										<?php endif; endforeach; endif; if(!(empty($brand_detial) || (($brand_detial instanceof \think\Collection || $brand_detial instanceof \think\Paginator ) && $brand_detial->isEmpty()))): ?>
									<tr>
										<td colspan="2" class="attr_name" style="width:965px;background: #eee;">商品品牌</td>
									</tr>
									<tr>
										<td class="attr_name">品牌</td>
										<td class="attr_value_name"><?php echo $brand_detial['brand_name']; ?></td>
									</tr>
								<?php endif; ?>
							</table>	
						<?php endif; ?>
					</div>
					<!-- 商品详情 _star -->
					<div id="goods_introduce" class="goods-detail-con goods-detail-tabs">
						<!-- 推荐商品 -->
						<!-- 商品后台上传的商品描述 -->
						<div class="detail-content goods-detail-content">
						<?php echo $goods_info['description']; ?></div>
					</div>
					<!-- 商品详情 end -->
					<!-- 商品评价 start -->
					<div class="goods-detail-con goods-detail-tabs" id="goods_evaluate" style="display:none;">
					<!--
	功能：商品详情页评价
	创建人：李志伟
	创建时间：2017年2月23日9:49:12
-->
<style>
.goods-comment dl{
	margin-bottom: 20px;
	min-height: 10px;
}
</style>
<div id="goods_evaluate" class="goods-detail-con goods-detail-tabs" name="goods_evaluate">
	<div class="evaluate">
		<h3 class="color"><?php echo lang('goods_commodity_evaluation'); ?></h3>
		<div class="comment-mod">
			<!-- 总评分 -->
			<div class="comment-grade">
				<div class="rate-score">
					<h4><?php echo lang('goods_matche_description'); ?></h4>
					<strong><?php echo $goods_info['match_point']; ?></strong>
					<p>
						<span class="score-value-no"><em style="width:<?php echo $goods_info['match_ratio']; ?>%;"></em></span>
					</p>
				</div>
				<div class="rate-graph">
					<div class="graph-scroller">
						<span style="width: <?php echo $goods_info['match_ratio']; ?>%;"><em><?php echo $goods_info['match_point']; ?><i>▼</i></em></span>
					</div>
					<ul class="graph-desc">
						<li><?php echo lang('goods_very_dissatisfied'); ?></li>
						<li><?php echo lang('goods_dissatisfied'); ?></li>
						<li><?php echo lang('goods_commonly'); ?></li>
						<li><?php echo lang('goods_satisfied'); ?></li>
						<li><?php echo lang('goods_very_satisfied'); ?></li>
					</ul>
				</div>
			</div>
			
			<!-- 评论选择项 -->
			<div class="comment-type">
				<ul class="tab-nav">
					<li class="current" data-type="0"><i class="icon cur"></i>  <?php echo lang('whole'); ?><em>(<?php echo $evaluates_count['evaluate_count']; ?>)</em></li>
					<li data-type="4"><i class="icon"></i> <?php echo lang('goods_picture'); ?> <em>（<?php echo $evaluates_count['imgs_count']; ?>）</em></li>
					<li data-type="1"><i class="icon"></i> <?php echo lang('goods_praise'); ?><em>（<?php echo $evaluates_count['praise_count']; ?>）</em></li>
					<li data-type="2"><i class="icon"></i> <?php echo lang('goods_comments'); ?> <em>（<?php echo $evaluates_count['center_count']; ?>）</em></li>
					<li data-type="3"><i class="icon"></i> <?php echo lang('goods_bad'); ?><em>（<?php echo $evaluates_count['bad_count']; ?>）</em></li>
				</ul>
			</div>
			
			<!-- 有评论的的展示形式 _star -->
			<div id="comment_content">
				<div class="comment-con tablelist"></div>
			</div>
			<div id="pagination" class="page" style="display:none;">
	<div class="pagination-goto" style="display:none;">,<?php echo lang('reach'); ?><input class="ipt form-control goto-input" type="text" id="pageindex"><?php echo lang('page'); ?>
		<button class="btn btn-default goto-button" title="<?php echo lang('jump_to_specified_page'); ?>" onclick="GetDataList(0)"><?php echo lang('goods_determine'); ?></button>
		<a class="goto-link" data-go-page=""></a>
	</div>
	<div class="page-wrap fr">
		<div class="total"><?php echo lang('goods_total'); ?><span id="pagecount"></span><?php echo lang('page'); ?><span id="totalcount" style="display: none;"></span><?php echo lang('strip'); ?><?php echo lang('record'); ?>
		<input type="hidden" id="pagesize" name="pagesize" value="14"/>
		</div>
	</div>
	<div class="page-num fr">
		<span id="home_page"><a class="num prev disabled" data-go-page="1" title="<?php echo lang('home_page'); ?>" ><?php echo lang('home_page'); ?></a></span>
		<span id="pre_page"><a class="num prev disabled " title="<?php echo lang('goods_previous_page'); ?>" ><?php echo lang('goods_previous_page'); ?></a></span>
		<div id="page_list" style="float: left;"></div>
		<span id="next_page"><a class="num next disabled" title="<?php echo lang('goods_next_page'); ?>" ><?php echo lang('goods_next_page'); ?></a></span>
		<span id="last_page"><a class="num next disabled" title="<?php echo lang('shadowe'); ?>" ><?php echo lang('shadowe'); ?></a></span>
	</div>
<script type="text/javascript">
	$(function(){
		GetDataList(1);	
	})
function page_display(pagecount,pageindex){
	if(pagecount==""||pagecount==0){
			$("#pagination").hide();
	}else{	
		$("#pagination").show();
		var pagehtml='',pag_end_html='',page_start_html='';
		var page_display_num=5;  //总共显示的页的个数必须为奇数
		
		//结束页数计算
		var pageend=pagecount;
		
		//开始页面计算
		var pagestart=pageindex-(page_display_num-1)/2;
		pagestart=(pageindex==pageend)?pageend-page_display_num+1:pagestart;
		pagestart=(pageend-pageindex)<3?pageend-page_display_num+1:pagestart;
		pagestart=pagestart<1?1:pagestart;
		for(var i=pagestart;i<=pageend;i++){
			if(pageindex==i){
				pagehtml+='<span class="num curr" onclick="GetDataList('+i+')"><a data-cur-page="'+i+'" >'+i+'</a></span>	';
				var pre_page=(i==1)?1:i-1;
				var next_page=(i==pagecount)?pagecount:i+1;
				if(i==1){
					$('#home_page>a').addClass('disabled');
					$('#pre_page>a').addClass('disabled');
					$('#home_page').attr('onclick','');
					$('#pre_page').attr('onclick','');	
				}else{
					$('#home_page').attr('onclick','GetDataList(1)');
					$('#pre_page').attr('onclick','GetDataList("'+pre_page+'")');
					$('#home_page>a').removeClass('disabled');
					$('#pre_page>a').removeClass('disabled');
				}
				if(i<pagecount){
					$('#next_page').attr('onclick','GetDataList("'+next_page+'")');
					$('#last_page').attr('onclick','GetDataList("'+pagecount+'")');
					$('#last_page>a').removeClass('disabled');
					$('#next_page>a').removeClass('disabled');
				}else{
					$('#next_page').attr('onclick','');
					$('#last_page').attr('onclick','');
					$('#last_page>a').addClass('disabled');
					$('#next_page>a').addClass('disabled');
				}
				/*省略点显示*/
				if((pageend-page_display_num)>0 && i>(page_display_num/2+1)){
					page_start_html='<span class="shenglue">...</span>';
				}
				if(pageend>page_display_num){
					pageend=page_display_num;
					if((pageindex+((page_display_num-1)/2))<=pagecount && i>(page_display_num/2+1)){
						pageend=pageindex+((page_display_num-1)/2);	
					}
					if(i<pagecount){
						pag_end_html='<span class="shenglue">...</span>';
					}
					if((pagecount-pageindex)<=((page_display_num-1)/2)){
						pageend=pagecount;
						pag_end_html='';
					}
				}
			}else{
				pagehtml+='<span class="num"  onclick="GetDataList('+i+')"><a data-cur-page="'+i+'" >'+i+'</a></span>	';	
			}
		}
		if(pagehtml==''){
			$('#page_list').html('<span class="num curr"><a data-cur-page="1">1</a></span>');
		}else{
			$('#page_list').html(pagehtml);
		}
	}
}
</script>
</div>
		</div>
	</div>
</div>

<script type="text/javascript">
$(".comment-type li").click(function() {
	var type = $(this).data("type");
	var target = $(this);
	$(".comment-type").find("li").removeClass("current");
	$(".comment-type").find("i").removeClass("cur");
	$(target).addClass("current");
	$(target).children().addClass("cur");
	GetDataList(1)
})

function loadFunction(){
	$('.goods-comment-imgs>img').click(function(){
		var even=$(this);
		var viewer=even.parent().next('.photo-viewer');
		if(!even.is('.cur')){
			even.parent().children('img').removeClass('cur');
			even.addClass('cur');
			even.parent().next('.photo-viewer').html('<img src="'+$(this).attr('src')+'"/>').show('fast');	
		}else{
			even.removeClass('cur');
			even.parent().next('.photo-viewer').hide("slow").html('');
		}
	})
}

/**
* 分页显示
* @param {Object} pageindex
*/
function GetDataList(pageindex){
	var page_size=$('#pagesize').val();
	var shop_name=$('#shop_name').val();
	var pageindex=pageindex==0?$('#pageindex').val():pageindex;
	var commentsType=$(".comment-type li.current").attr('data-type');
	var goods_id=$('#hidden_goodsid').val();  //标签在info页面
	$.ajax({
		type:"post",
		url:"<?php echo __URL('SHOP_MAIN/goods/getgoodscomments'); ?>",
		data:{ 'page_index' : pageindex, 'page_size' : page_size, 'goods_id' : goods_id, 'comments_type' : commentsType },
		dataType:'json',
		beforeSend:function(){
			$.loading.start();
		},
		success:function(data){
			var listhtml='';
			if(data['data'].length==0){
				$('#comment_content .tablelist').html('<div class="tip-box" style="position:static;"><i class="tip-icon"></i><div class="tip-text"><?php echo lang('no_comment_yet'); ?></div></div>');
				$('#pagination').hide();
				return false;
			}
			for(var i=0;i<data['data'].length;i++){
				var dataitem=data['data'][i];
				var member_name=dataitem['member_name'];
				member_name=dataitem['is_anonymous']==1?member_name.replace(member_name.substring(1,member_name.length),'***')+'(<?php echo lang('anonymous'); ?>)':member_name;
				listhtml+='<div class="goods-comment">'
					+'<div class="user-info">'
					+'<div class="face">';
					if(dataitem["user_img"] != "" && dataitem['user_img'] != undefined && dataitem['user_img'] != 0){
						listhtml+='<img src="<?php echo __IMG($default_headimg); ?>" class="lazy_load" data-original="'+__IMG(dataitem['user_img'])+'">';
					}else{
						listhtml+='<img src="<?php echo __IMG($default_headimg); ?>">';
					}
					listhtml+='</div>'
					+'<div class="name-box">'
					+'<em>'+member_name+'</em>'
					+'</div>'
					+'</div>'
					+'<dl>'
					+'<dd class="goods-comment-con">'
					+'<span class="text">'+dataitem['content']+'</span>'
					+'</dd>';
				if(dataitem['image']!=''){
					var imgs_arr=dataitem['image'].split(',');
					listhtml+='<dd class="goods-comment-imgs">'
					for(var key in imgs_arr){
						listhtml+='<img src="'+__IMG(imgs_arr[key])+'" alt="" />';
					}
					listhtml+='</dd>';
					listhtml+='<dd class="photo-viewer"></dd>'
				}	
				listhtml+='<dd><div class="date"><span>'+timeStampTurnTime(dataitem['addtime'])+'</span> <span></span></div></dd></dl>';
				if(dataitem['explain_first']!=''){
					listhtml+='<div class="comment_zhuijia"><?php echo lang('goods_shopkeeper_replies'); ?>：</div>'
					+'<dl>'
					+'<dd class="goods-comment-con">'
					+'<span class="text">'+dataitem['explain_first']+'</span>'
					+'</dd></dl>';
				}
				if(dataitem['again_content']!=''){
					listhtml+='<div class="comment_zhuijia"><?php echo lang('goods_additional_evaluation'); ?>：</div>'
					+'<dl>'
					+'<dd class="goods-comment-con">'
					+'<span class="text">'+dataitem['again_content']+'</span>'
					+'</dd>';
					if(dataitem['again_image']!=''){
						var imgs_arr=dataitem['again_image'].split(',');
						listhtml+='<dd class="goods-comment-imgs">'
						for(var key in imgs_arr){
							listhtml+='<img src="'+__IMG(imgs_arr[key])+'" alt="" />';
						}
						listhtml+='</dd>';
					}
					listhtml+='<dd class="photo-viewer"></dd>'
					listhtml+='<dd><div class="date"><span>'+timeStampTurnTime(dataitem['again_addtime'])+'</span> <span></span></div></dd></dl>';
					if(dataitem['again_explain']!=''){
						listhtml+='<div class="comment_zhuijia"><?php echo lang('goods_shopkeeper_replies'); ?>：</div>'
						+'<dl>'
						+'<dd class="goods-comment-con">'
						+'<span class="text">'+dataitem['again_explain']+'</span>'
						+'</dd></dl>';
					}
				}
				listhtml+='</div>';
			}
			$('#comment_content .tablelist').html(listhtml);
			$('#totalcount').text(data['total_count']);//总条数
			$('#pagecount').text(data['page_count']);//总页数
			$('#pageindex').val(pageindex);	//当前页数
			page_display(data['page_count'],pageindex);
			$('#pagination').show();
			loadFunction();
			img_lazyload();
		}
	});
}
</script>
					</div>
					<!-- 商品评价 end -->
					<!-- 服务 start -->
					<!-- 常见问题 _star -->
					<div class="goods-detail-con goods-detail-tabs" id="goods_consult" style="display:none;">
						<link rel="stylesheet" href="__TEMP__/<?php echo $style; ?>/public/css/purchase_consulting.css">
<div class="ncs-goods_main goods-detail-con">
<div class="ncs-goods-info-content bd" id="ncGoodsConsult">
	<h3 class="color"><?php echo lang('goods_purchase_consultation'); ?></h3>
	<div id="consulting_demo" class="ncs-loading">
		<div class="top" style="overflow: hidden;">
			<div class="ncs-cosult-tips">
				<i></i>
				<p></p>
				<p><?php echo lang('goods_text'); ?>！</p>
				<p></p>
			</div>
			<div class="ncs-cosult-askbtn">
				<a href="<?php echo __URL('SHOP_MAIN/goods/goodsconsult','goodsid='.$goods_id.'#askQuestion'); ?>"
					target="_blank" class="btn btn-white"> <?php echo lang('goods_need_consult'); ?></a>
			</div>
		</div>
		<div class="ncs-goods-title-nav">
			<ul id="consulting_tab">
				<input type="hidden" id="currClassId" value="0">
				<li id="classTab0" class="current"><a
					href="javascript:;" onclick="consultType(0,this)"><?php echo lang('whole'); ?></a></li>
				<li id="classTab1"><a
					href="javascript:;" onclick="consultType(1,this)"><?php echo lang('goods_commodity_consultation'); ?></a></li>
				<li id="classTab2"><a
					href="javascript:;" onclick="consultType(2,this)"><?php echo lang('goods_payment_problem'); ?></a></li>
				<li id="classTab3"><a
					href="javascript:;" onclick="consultType(3,this)"><?php echo lang('goods_invoice_and_warranty'); ?></a></li>
			</ul>
		</div>
			<?php if(is_array($consult_list) || $consult_list instanceof \think\Collection || $consult_list instanceof \think\Paginator): $i = 0; $__LIST__ = $consult_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;if($key == 0): ?>
				<div id="ncs_main_<?php echo $key; ?>" name="nsc_main">
			<?php else: ?>
				<div style="display: none;" id="ncs_main_<?php echo $key; ?>" name="nsc_main">
			<?php endif; if($item['total_count'] == 0): ?>
				<div class="ncs-cosult-main" >
					<div class="ncs-norecord"><?php echo lang('goods_no_consultation_yet'); ?></div>
				</div>
			<?php else: ?>
				<div class="ncs-commend-main" >
					<!-- 咨询列表s -->
					<?php if(is_array($item['data']) || $item['data'] instanceof \think\Collection || $item['data'] instanceof \think\Paginator): $i = 0; $__LIST__ = $item['data'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
							<div class="ncs-cosult-list" >
								<dl class="asker">
									<dt><?php echo lang('goods_consulting_user'); ?>：</dt>
									<dd>
										<?php if($vo['member_name'] == ''): ?>
										<?php echo lang('goods_tourist'); else: ?>
										<?php echo cover_up_username($vo['member_name']); endif; ?>
										<span><?php echo lang('goods_consulting_type'); ?>：
										<?php if($vo['ct_id'] == 1): ?>
											<?php echo lang('goods_commodity_consultation'); elseif($vo['ct_id'] == 2): ?>
											<?php echo lang('goods_payment_problem'); else: ?>
											<?php echo lang('goods_invoice_and_warranty'); endif; ?>
										</span>
										<time datetime="" pubdate="pubdate" class="m-l-20">[<?php echo getTimeStampTurnTime($vo['consult_addtime'] ); ?>]</time>
									</dd>
								</dl>
								<dl class="ask-con">
									<dt><?php echo lang('goods_consultation_content'); ?>：</dt>
									<dd>
										<p><?php echo $vo['consult_content']; ?></p>
									</dd>
								</dl>
								<?php if($vo['consult_reply'] != ''): ?>
									<!-- 回复内容s -->
								<dl class="reply">
									<dt><?php echo lang('goods_merchant_reply'); ?>：</dt>
									<dd>
										<p><?php echo $vo['consult_reply']; ?></p>
										<time  pubdate="pubdate">[<?php echo getTimeStampTurnTime($vo['consult_reply_time'] ); ?>]</time>
									</dd>
								</dl>
								<!-- 回复内容e -->
								<?php endif; ?>
							</div>
							
						<?php endforeach; endif; else: echo "" ;endif; ?>
				<div class="more_Consultation">
					<a href="<?php echo __URL('SHOP_MAIN/goods/goodsconsult','goodsid='.$goods_id); ?>" target="_blank"><?php echo lang('goods_view_all_consultation'); ?>&gt;&gt;</a>
				</div>
			</div>
		<?php endif; ?>
		</div>
		<?php endforeach; endif; else: echo "" ;endif; ?>
	</div>
	</div>
	<script type="text/javascript">
		function consultType(type,eve){
			$('.current').removeClass('current');
			$(eve).parent().addClass('current');
			$('[name="nsc_main"]').hide();
			$('#ncs_main_'+Number(type)).show();
		}
	</script>
</div>
</div>
					</div>
					<!-- 常见问题 _end -->
					<!-- 服务 end -->
				</div>
			</div>
		</div>
		<link type="text/css" rel="stylesheet" href="__TEMP__/<?php echo $style; ?>/public/css/ns_category.css">
<div class="browse-history">
	<div class="browse-history-tab clearfix">
		<!--当前选中color-->
		<span class="tab-span color"><?php echo lang('guess_you_like'); ?></span>
		<span class="tab-span"><?php echo lang('browse_history'); ?></span>
		<div class="browse-history-line bg-color" style="left: 0px; width: 104px;"></div>
		<div class="browse-history-other">
			<a href="javascript:change_like()" class="history-recommend-change">
				
				<?php if($guess_member_likes_count > 6): ?>
					<i class="icon"></i>
					<em class="text"><?php echo lang('batch'); ?></em>
				<?php endif; ?>
			</a>
			<a href="javascript:clear_history();" class="clear_history none">
				<i class="icon"></i>
				<em id="del-history" class="text"><?php echo lang('empty'); ?></em>
			</a>
		</div>
	</div>
	<div class="browse-history-con">
		<div class="browse-history-inner">
			<!--猜您喜欢-->
			<ul id="user_like" class="recommend-panel">
			<?php if($guess_member_likes_count==0): ?>
			<?php echo lang('no_recommendation'); ?>！
			<?php else: if(is_array($guess_member_likes) || $guess_member_likes instanceof \think\Collection || $guess_member_likes instanceof \think\Paginator): $k = 0; $__LIST__ = $guess_member_likes;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k % 2 );++$k;if($k%6 == 1 and $k > 1): ?>
				<li style="display: none;">
			<?php else: ?>
				<li>
			<?php endif; ?>
			
				<div class="p-img">
					<a target="_blank" title="<?php echo $vo['goods_name']; ?>" href="<?php echo __URL('SHOP_MAIN/goods/goodsinfo','goodsid='.$vo['goods_id']); ?>">
						<img src="<?php echo __IMG($default_goods_img); ?>" class="lazy_load" data-original="<?php echo __IMG($vo['pic_cover_mid']); ?>">
					</a>
					</div>
					<div class="p-name">
						<a target="_blank" title="<?php echo $vo['goods_name']; ?>" href="<?php echo __URL('SHOP_MAIN/goods/goodsinfo','goodsid='.$vo['goods_id']); ?>"><?php echo $vo['goods_name']; ?></a>
					</div>
					<div class="p-comm">
						<?php if(in_array(($vo['point_exchange_type']), explode(',',"0,2"))): ?>
							<span class="p-price second-color">￥<?php echo $vo['price']; ?></span>
						<?php else: if($vo['point_exchange_type'] == 1 && $vo['promotion_price'] > 0): ?>
								<span class="p-price second-color">￥<?php echo $vo['promotion_price']; ?>+<?php echo $vo['point_exchange']; ?>积分</span>
							<?php else: ?>
								<span class="p-price second-color"><?php echo $vo['point_exchange']; ?>积分</span>
							<?php endif; endif; ?>
					</div>
				</li> 
			<?php endforeach; endif; else: echo "" ;endif; endif; ?>
			</ul>
			<!--浏览历史-->
			<ul id="history_list" class="history-panel none">
				<?php if($member_histrorys == ''): ?>
					<?php echo lang('have_not_browsed_history_yet'); ?>！
				<?php else: if(is_array($member_histrorys) || $member_histrorys instanceof \think\Collection || $member_histrorys instanceof \think\Paginator): $i = 0; $__LIST__ = $member_histrorys;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
					<li>
						<div class="p-img">
							<a target="_blank" title="<?php echo $vo['goods_name']; ?>" href="<?php echo __URL('SHOP_MAIN/goods/goodsinfo','goodsid='.$vo['goods_id']); ?>">
								<img alt="<?php echo $vo['goods_name']; ?>" src="<?php echo __IMG($default_goods_img); ?>" class="lazy_load" data-original="<?php echo __IMG($vo['pic_cover_mid']); ?>">
							</a>
						</div>
						<div class="p-name">
							<a target="_blank" title="<?php echo $vo['goods_name']; ?>" href="<?php echo __URL('SHOP_MAIN/goods/goodsinfo','goodsid='.$vo['goods_id']); ?>"><?php echo $vo['goods_name']; ?></a>
						</div>
						<div class="p-comm">
							<?php if(in_array(($vo['point_exchange_type']), explode(',',"0,2"))): ?>
								<span class="p-price money-color">￥<?php echo $vo['price']; ?></span>
							<?php else: if($vo['point_exchange_type'] == 1 && $vo['promotion_price'] > 0): ?>
									<span class="p-price money-color">￥<?php echo $vo['promotion_price']; ?>+<?php echo $vo['point_exchange']; ?>积分</span>
								<?php else: ?>
									<span class="p-price money-color"><?php echo $vo['point_exchange']; ?>积分</span>
								<?php endif; endif; ?>
						</div>
					</li>
					<?php endforeach; endif; else: echo "" ;endif; endif; ?>
				
			</ul>
		</div>
	</div>
</div>
<script type="text/javascript" src="__TEMP__/<?php echo $style; ?>/public/js/ns_category.js"></script>
	</div>
</div>
<input type="hidden" id="goodsLadderPreferentialList" value='<?php echo $goodsLadderPreferentialListStr; ?>'>
<input id="hidden_goodsid" type="hidden" value="<?php echo $goods_info['goods_id']; ?>">
<input id="hidden_skuid"   type="hidden" value="">
<input id="hidden_skuname" type="hidden" value="">
<input id="hidden_sku_price" type="hidden" value="">
<input id="hidden_default_img_id" type="hidden" value="<?php echo $goods_info['img_list'][0]['pic_id']; ?>" />
<input id="hidden_max_buy" type="hidden" value="<?php echo $goods_info['max_buy']; ?>" />
<input id="hidden_stock" type="hidden" value="<?php echo $goods_info['stock']; ?>" />
<input id="hidden_point_exchange_type" type="hidden" value="<?php echo $goods_info['point_exchange_type']; ?>"/>
<input id="hidden_point_exchange" type="hidden" value="<?php echo $goods_info['point_exchange']; ?>"/>
<input type="hidden" id="hidden_province" value="<?php echo $user_location['province']; ?>" />
<input type="hidden" id="hidden_city" />
<input type="hidden" id="hidden_shipping_fee_name" />
<input type="hidden" id="hidden_goods_type" value="<?php echo $goods_info['goods_type']; ?>" />
<!-- 头部右侧鼠标经过图片放大效果 _start -->
<script type="text/javascript" src="__TEMP__/<?php echo $style; ?>/public/js/bubbleup.js"></script>
<!-- 头部右侧鼠标经过图片放大效果 _end -->
<!-- 右侧商品信息等定位切换效果 _start -->
<script type="text/javascript" src="__TEMP__/<?php echo $style; ?>/public/js/ns_tabs_totop.js"></script>
<!-- 右侧商品信息等定位切换效果 _end -->
<!-- 放大镜 _start -->
<script type="text/javascript" src="__TEMP__/<?php echo $style; ?>/public/js/magiczoom.js"></script>
<?php if($goods_info['goods_type'] == 1): ?>
<!-- 地址选择 _start -->
<script type="text/javascript" src="__TEMP__/<?php echo $style; ?>/public/js/ns_select_region.js"></script>
<?php endif; ?>
<script type="text/javascript" src="__TEMP__/<?php echo $style; ?>/public/js/tabs.js"></script>
<script type="text/javascript" src="__TEMP__/<?php echo $style; ?>/public/js/goods.js"></script>
<script type="text/javascript">
//获取商品最小购买数量
var min_buy = parseInt($(".amount-input").attr("data-min"));
var sku_list = new Array();
var price_section_arr = {
	'promotion_price' : [],
	'member_price' : []
};
$().ready(function() {

	if($(".js-skulist input[type='hidden'][Js-sku='sku']").length > 0){
		$(".js-skulist input[type='hidden'][Js-sku='sku']").each(function(){
			sku_list.push($(this).val());
			var promotion_price = $(this).attr("promotion_price"),
				member_price = $(this).attr("member_price");
				price_section_arr.promotion_price.push(promotion_price);
				price_section_arr.member_price.push(member_price);
		})
		price_section_arr.promotion_price.sort();
		price_section_arr.member_price.sort();
	}

	// initGoodsInfo();
	initSku();//加载sku
	
	$(".magnifying-glass").click(function(){
		showPhotoSwipe();
	});
	
	$(".combo-package-promotion-buy").click(function(){
		var combo_id = $(this).attr("data-combo-id"); 
		var	curr_id = $(this).attr("data-curr-id");
		if($("#hidden_uid").val()==''){
			showPopLogin();
		}else{
			location.href = "<?php echo __URL('SHOP_MAIN/goods/comboPackagePromotionSelected','combo_id="+combo_id+"&curr_id="+curr_id+"'); ?>";
		}
	});
	
	//判断是否有总库存
	if(parseInt($("#hidden_stock").val())==0){
		$(".js-buy-now").addClass("disabled");
		$(".add-cart").addClass("disabled");
		$(".js-point-exchange").addClass("disabled");
	}

	if($("#hidden_shipping_fee_name").val() == "<?php echo lang('goods_no_goods'); ?>"){
		$(".js-buy-now").addClass("disabled");
		$(".add-cart").addClass("disabled");
		$(".js-point-exchange").addClass("disabled");
	}

	if($("#hidden_goods_type").val() == 1){
		//实物商品才会查询运费
		var goods_sku_list = $("#goods_sku0").attr("skuid") + ":1";
		//定位查询运费
		$.ajax({
			type : "post",
			data : { "goods_id" : "<?php echo $goods_info['goods_id']; ?>" ,"goods_sku_list" : goods_sku_list},
			url : "<?php echo __URL('SHOP_MAIN/goods/getShippingFeeNameByLocation'); ?>",
			success : function(data){
				if(data.user_location != null){
					$(".js-region").html("<font>" + data.user_location.province + data.user_location.city + "<i></i></font>").show();
					$(".region-tab[data-region-level=1]").html(data.user_location.province + "<i></i>");
					$(".region-tab[data-region-level=2]").html(data.user_location.city + "<i></i>");
					$("#hidden_province").val(data.user_location.province);
					$("#hidden_city").val(data.user_location.city);
					initAddress();
				}
	
				var html = "";
				if(data.express != null && data.express != ""){
					if(typeof data.express == "string"){
						html = '快递：' + data.express;
					}else if(typeof data.express == "object"){
						html = "<select>";
						for(var i=0;i<data.express.length;i++){
							html += '<option value="' + data.express[i].co_id + '">' + data.express[i].company_name + '&nbsp;&nbsp;&nbsp;¥' + data.express[i].express_fee + '</option>';
						}
						html += "</select>";
					}
				}else{
					// html = "<?php echo lang('goods_no_goods'); ?>";
					html = "本地区暂不支持配送";	
				}
				$(".js-shipping-name").html(html);
			}
		});
	}

	$("#goods_detail").click(function(){
		$(".title-list").removeClass('current');
		$(this).parent().addClass('current');
		$("#goods_introduce").show();
		$("#goods_attr_list").hide();
		$("#goods_evaluate").hide();
		$("#goods_consult").hide();
	});
	
	$("#goods_attribute").click(function(){
		$(".title-list").removeClass('current');
		$(this).parent().addClass('current');
		$("#goods_introduce").hide();
		$("#goods_attr_list").show();
		$("#goods_evaluate").hide();
		$("#goods_consult").hide();
	});
	
	$("#evaluate_count").click(function(){
		$(".title-list").removeClass('current');
		$(this).parent().addClass('current');
		$("#goods_introduce").hide();
		$("#goods_attr_list").hide();
		$("#goods_evaluate").show();
		$("#goods_consult").hide();
	});
	
	$("#goods_consultation").click(function(){
		$(".title-list").removeClass('current');
		$(this).parent().addClass('current');
		$("#goods_introduce").hide();
		$("#goods_attr_list").hide();
		$("#goods_evaluate").hide();
		$("#goods_consult").show();
	});
	
	$("#show_coupons").click(function(){
		var type = $("#show_coupons").text();
		if(type == '展开'){
			$("#show_coupons").find('span').text('收起');
			$("#show_coupons").find('img').attr('src','__TEMP__/<?php echo $style; ?>/public/images/jiantouup.png');
		}
		if(type == '收起'){
			$("#show_coupons").find('span').text('展开');
			$("#show_coupons").find('img').attr('src','__TEMP__/<?php echo $style; ?>/public/images/jiantou.png');
		}
		$("#coupons_detail").toggle();
	});

	$("#num").keyup(function(){
		var obj = $(this);
		var r = /^\d+$/;
		if(!r.test(obj.val())){
			if(min_buy > 0){
				obj.val(min_buy);
			}else{
				obj.val(1);
			}
			$.msg("<?php echo lang('goods_enter_number'); ?>");
		}else{
			if(parseInt(obj.val()) > parseInt(obj.attr("data-max"))){
				obj.val(obj.attr("data-max"));
			}
			//购买数不能小于最小购买数
			if(parseInt(obj.val()) < min_buy){
				obj.val(min_buy);
			}
			if(parseInt(obj.val()) <= 0){
				if(min_buy > 0){
					obj.val(min_buy);
				}else{
					obj.val(1);
				}
			}
		}
		calculated_price(obj.val(), "#price");
		calculated_price(obj.val(), "#member_price");
	})

	$(".amount-plus").click(function(){
		var obj = $("#num");
		var num = parseInt(obj.val());
		var max = parseInt(obj.attr("data-max"));
		var max_buy = parseInt($("#hidden_max_buy").val());
		num++;
		if(num > max) obj.val(max);
		else obj.val(num);
		calculated_price(obj.val(), "#price");
		calculated_price(obj.val(), "#member_price");
	})

	$(".amount-minus").click(function(){
		var obj = $("#num");
		var num = parseInt(obj.val());
		if(num > 1){
			num--;
			if(num < min_buy){
				$.msg("<?php echo lang('minimum_purchase_amount_of_this_commodity'); ?>"+min_buy);
				obj.val(min_buy);
			}else{
				obj.val(num);
			}
		}
		calculated_price(obj.val(), "#price");
		calculated_price(obj.val(), "#member_price");
	})
	
	//加载规格
	function initSku(){
		if(judge_is_all_selected()){
			var curr_sku = '';
			var sku_arr = $(".goods-spec-item");
			sku_arr.each(function(i) {
				var $this = $(this);
				if ($this.hasClass("selected")) {
					curr_sku += $this.find("span").attr("id") + ";";
				}
			});
			for (i = 0; i < parseInt($("#goods_sku_count").val()); i++) {

				sku_id = "#goods_sku" + i;
				goods_sku_id = $(sku_id).val();
				//修改匹配规则，不能直接等值判断。判断值是否存在即可
				var temp_curr_sku_array = curr_sku.split(";");
				var temp_goods_sku_id_array = goods_sku_id.split(";");
				var sku_count = 0;
				var curr_sku_count = 0;
				//匹配当前选中的SKU规格和商品SKU规格，检测是否都存在
				for(var j=0;j<temp_curr_sku_array.length;j++){
					sku_count++;
					if($.inArray(temp_curr_sku_array[j],temp_goods_sku_id_array) != -1) curr_sku_count++;
				}
				
				if (curr_sku_count == sku_count) {
					select_skuid = $(sku_id).attr("skuid");
					select_skuName = $(sku_id).attr("skuname");
					select_stock = $(sku_id).attr("stock");//sku商品库存
					original_price = parseFloat($(sku_id).attr("original_price")); //sku商品原价
					if(select_stock==0){
						$(".js-buy-now").addClass("disabled");
						$(".add-cart").addClass("disabled");
						$(".js-point-exchange").addClass("disabled");
					}else{
						//当最小购买数大于总库存时,不可购买
						if(min_buy > select_stock){
							$(".js-buy-now").addClass("disabled");
							$(".add-cart").addClass("disabled");
							$(".js-point-exchange").addClass("disabled");
						}else{
							$(".js-buy-now").removeClass("disabled");
							$(".add-cart").removeClass("disabled");
							$(".js-point-exchange").removeClass("disabled");
						}
					}
					$("#hidden_skuid").val(select_skuid);
					$("#hidden_skuname").val(select_skuName);
					var price = parseFloat($(sku_id).attr("price"));
					var promotion_price = parseFloat($(sku_id).attr("promotion_price"));
					var member_price = parseFloat($(sku_id).attr("member_price"));
					$("#price").text("￥" + promotion_price.toFixed(2));
					$("#price").attr("data-price", promotion_price.toFixed(2));
					$("#member_price").text("￥"+member_price.toFixed(2));
					$("#member_price").attr("data-price", member_price.toFixed(2));

					$(".market-price").text("￥" + original_price.toFixed(2));//商品原价
					$("#hidden_sku_price").val(price);
					$(".js-goods-number").text("<?php echo lang('goods_stock'); ?>"+select_stock+"<?php if(empty($goods_info['goods_unit'])): ?>件<?php else: ?><?php echo $goods_info['goods_unit']; endif; ?>");
					if($("#hidden_max_buy").val()==0 || parseInt($("#hidden_max_buy").val()) > parseInt($("#hidden_stock").val())){
						$(".amount-input").attr("data-max", select_stock);
					}else{
						$(".amount-input").attr("data-max", $("#hidden_max_buy").val());
					}
					
					//最小购买数为0时,购买数默认为1
					if(min_buy > 0) $(".amount-input").val(min_buy);
					else $(".amount-input").val(1);
					
					// 当只有一个sku时，不用验证
					if(parseInt($("#attribute_list").val()) == 0){
			 			select_specifications=true;//是否选择过规格,来源与shopping_cart.js
					}

					var integral_give_type = $("#integral_give_type").val();
					var hidden_give_point = $("#hidden_give_point").val();
					if(integral_give_type > 0 && hidden_give_point > 0){
						var sku_price = promotion_price < member_price ? promotion_price : member_price;
						var give_point = Math.round(sku_price * hidden_give_point * 0.01);
						$("#give_point").text(give_point);
					}
					break;
				}
			} 
		}else{
			$("#hidden_skuname").val("");
			$("#hidden_skuid").val("");
			var price_num = price_section_arr.promotion_price.length;
			if(price_num > 1 && price_section_arr.promotion_price[0] != price_section_arr.promotion_price[price_num -1]){
				$("#price").text("￥" + price_section_arr.promotion_price[0] + '-' + price_section_arr.promotion_price[price_num - 1]);
				$("#member_price").text("￥" + price_section_arr.member_price[0] + '-' + price_section_arr.member_price[price_num - 1]);
			}
		}
	}
	
	function initGoodsInfo(){
		//获取sku多图的主规格id
		var spec_id = $("#hide_spec_id").val();
		if(spec_id > 0){
			var firstSku = $("[id^="+spec_id+"]").eq(0);
			firstSku.parent().parent('.goods-spec-item').addClass("selected");
			if(firstSku.attr("id") != undefined){
				var sku_id = subSkuVue(firstSku.attr("id"));
				showSkuPicture(sku_id);
			}
		}
		
	}

	//截取sku属性值
	function subSkuVue(goods_sku_id){
		num = goods_sku_id.indexOf(":")+1;
		sku_vue_id = goods_sku_id.substr(num);
		return sku_vue_id;
	}

	//根据sku_id显示相册中的图片
	function showSkuPicture(sku_id){
		
		if($(".spec-items ul li#sku_pic_"+sku_id).length > 0){
			$(".spec-items ul li").hide();
			$(".spec-items ul li#sku_pic_"+sku_id).show();
			var firstPicUrl = $(".spec-items ul li img").not(":hidden").eq(0).attr("data_big_img");
			var picture_id = $(".spec-items ul li img").not(":hidden").eq(0).attr("data-picture-id");
			$(".spec-items ul li").not(":hidden").removeClass("on");
			$(".spec-items ul li").not(":hidden").eq(0).addClass("on");
			$(".MagTargetImg").attr("src",firstPicUrl);
			$(".MagTargetImg").attr("data_big_img",firstPicUrl);
			$("#hidden_default_img_id").val(picture_id);
		}
	}
	
	// 添加
	$(".add-cart,.js-buy-now,.js-point-exchange").click(function(event) {
		if($(this).hasClass("disabled") || $(this).hasClass("purchase-restriction")) return;
		if($(".amount-input").val() < min_buy){
			$.msg("<?php echo lang('shall_not_less_than'); ?>!");
			return;
		}
		var tag = $(this).attr("data-tag");
		var image_url = $("#MagnifierWrap .MagnifierMain").find("img").attr("src");
		var goodsid = <?php echo $goods_info['goods_id']; ?>;
		$.cart.add(goodsid, $(".amount-input").val(), {
			is_sku: true,
			image_url: image_url,
			event: event,
			tag : tag
		});
	});

	// 添加对比
	$(".add-compare").click(function(event) {
		var target = $(this);
		var goods_id = $(this).data("goods-id");
		var sku_id = $(this).add("sku-id");
		var image_url = $(this).data("image-url");
		$.compare.toggle(goods_id, image_url, event, function(result) {
			if(result.data == 1) {
				$(target).addClass("curr");
			} else {
				$(target).removeClass("curr");
			}
		});
	});

	var is_member_fav_goods = <?php echo $is_member_fav_goods; ?>;
	// 添加收藏
	$(".collect-goods").click(function(event) {
		var num = $(this).find("span").attr("data-collects");
		var obj = $(this).find("span");
		if(is_member_fav_goods==0){
			//点击收藏
			$.ajax({
				url: "<?php echo __URL('SHOP_MAIN/components/collectiongoodsorshop'); ?>",
				type: "post",
				data: { "fav_id":<?php echo $goods_info['goods_id']; ?>,"fav_type":"goods","log_msg":"<?php echo $goods_info['goods_name']; ?>"},
				success: function (data) {
					if(data.code>0){
						is_member_fav_goods = 1;
						num++;
						obj.attr("data-collects",num);
						obj.text("<?php echo lang('goods_collection_goods'); ?> ("+num+"<?php echo lang('goods_popularity'); ?>)");
					}else{
						$.msg("<?php echo lang('goods_already_collected'); ?>");
					}
					$(".collect-goods").find("i").css("background-position","-112px -91px");
				}
			});
		}else if (is_member_fav_goods== 1){
			//取消收藏
			$.ajax({
				url: "<?php echo __URL('SHOP_MAIN/components/cancelcollgoodsorShop'); ?>",
				type: "post",
				data: { "fav_id":<?php echo $goods_info['goods_id']; ?>,"fav_type":"goods","log_msg":"<?php echo $goods_info['goods_name']; ?>"},
				success: function (data) {
					if(data.code>0){
						num--;
						obj.attr("data-collects",num);
						obj.text("<?php echo lang('goods_collection_goods'); ?> ("+num+"<?php echo lang('goods_popularity'); ?>)");
						$(".collect-goods").find("i").css("background-position","-112px -115px");
						is_member_fav_goods = 0;
					}else{
						$.msg("<?php echo lang('goods_cancelled_collected'); ?>");
					}
				}
			});
		}else{
			location.href=__URL("SHOP_MAIN/login/index");
		}
	});

	function sku_click_action(obj){
		$(obj).attr("data-last",1);
		var this_sku_vue = $(obj).find("span").attr("id");
		sku_vue = subSkuVue(this_sku_vue);
		showSkuPicture(sku_vue);

		initSku();

		//规格图片
		var show_big_pic = $(obj).find("span").attr("data-show-big-pic");
		if(show_big_pic != undefined && show_big_pic != ""){
			$(".MagTargetImg").attr("src", show_big_pic);
			$(".MagTargetImg").attr("data_big_img", show_big_pic);
			$(".spec-items ul li").removeClass("on");
		}else{
			//如果点击了文本，则默认选中第一个
			$(".MagTargetImg").attr("src", $(".spec-items ul li img").not(":hidden").eq(0).attr("data_big_img"));
			$(".MagTargetImg").attr("data_big_img", $(".spec-items ul li img").not(":hidden").eq(0).attr("data_big_img"));
			$(".spec-items ul li").not(":hidden").eq(0).addClass("on");
		}
		MagnifierF("MagnifierWrap");
	}

	// 点击选取规格
	$(".js-skulist li.goods-spec-item").click(function(){
		if($(this).hasClass('disabled')) return;
		if($(this).hasClass('selected')){
			$(this).removeClass('selected').siblings().removeClass('selected');
		}else{
			$(this).addClass('selected').siblings().removeClass('selected');
		}

		$(".js-skulist dl.attr").each(function(){
			if($(this).find('li.goods-spec-item.selected').length > 0){
				$(this).addClass('selected')
			}else{
				$(this).removeClass('selected')
			}
		})

		var not_exit_spec = get_not_exit_spec(get_selected_arr());
		$(".js-skulist dl.attr:not('.selected')").each(function(){
			set_sku_item_disabled($(this), not_exit_spec);
		})
		
		$(".js-skulist dl.attr").each(function(){
			update_same_level($(this));
		})

		sku_click_action($(this));
	})

	// 获取已经选中的规格
	function get_selected_arr(){
		var spec_value_arr = new Array();
		if($(".js-skulist li.goods-spec-item.selected").length > 0){
			$(".js-skulist li.goods-spec-item.selected").each(function(){
				spec_value_arr.push($(this).find("span").attr("id"));
			})
		}
		return spec_value_arr;
	}

	function get_not_exit_spec(selected_arr, not_select_arr){
		// 选取出可供继续匹配的sku数组
		var matching_arr = get_matching_arr(selected_arr);
		var new_arr = [];	
		for(i in matching_arr){
			matching_arr[i] = matching_arr[i].substr(0, matching_arr[i].length -1);
			new_arr = new_arr.concat(matching_arr[i].split(';'));
		}
		return new_arr;
	}

	// 获取全部符合选中项的sku
	function get_matching_arr(arr){
		var new_arr = new Array();
		for(i in sku_list){
			var _is_add = true;
			for(j in arr){
				if(sku_list[i].indexOf(arr[j]) == -1){
					_is_add = false;
					break;
				}
			}
			if(_is_add) new_arr.push(sku_list[i]);
		}
		return new_arr;
	}

	// 设置规格是否可选
	function set_sku_item_disabled(goods_spec, not_exit_spec){
		goods_spec.find("li.goods-spec-item").each(function(){
			var spec_id = $(this).find("span").attr("id");
			if(not_exit_spec.indexOf(spec_id) == -1){
				$(this).addClass("disabled");
			}else{
				$(this).removeClass("disabled");
			}
		})
	}

	// 设置同级是否可选
	function update_same_level(goods_spec){
		var selected_arr = get_selected_arr();
		var select_id = goods_spec.find("li.selected span").attr("id");
		var selected_arr_new = del_array_val(selected_arr, select_id);
		var not_exit_spec = get_not_exit_spec(selected_arr_new);
		set_sku_item_disabled(goods_spec, not_exit_spec);
	}

	function del_array_val(arr,val){
		//去除 数组 arr中的 val ，返回一个新数组
	    var new_arr = [];
	    for(k in arr){
	        if(arr[k] != val){
	            new_arr.push(arr[k]);
	        }
	    }
	    return new_arr;
	}

	// 判断规格是否全部选择
	function judge_is_all_selected(){
		var is_all_selected = true;
		if($("#attribute_list").val() > 0 && $(".js-skulist li.goods-spec-item.selected").length != $("#attribute_list").val()){
			is_all_selected = false;
		}
		return is_all_selected;
	}

	function skuDefaultSelect(){
		$(".js-skulist dl.attr:not('.selected')").each(function(){
			$(this).find('li.goods-spec-item').each(function(){
				var not_exit_spec = get_not_exit_spec(get_selected_arr());
				var spec_id = $(this).find("span").attr("id");
				if($.inArray(spec_id, not_exit_spec) != -1){
					$(this).trigger('click');
					return false;
				}
			})
			$(this).addClass('selected');
		})
	}

	// sku默认选中
	skuDefaultSelect();
});

//领取优惠劵
function coupon_receive(event,coupon_type_id){
	if($("#hidden_uid").val()==''){
		showPopLogin();
	}else{
		var data_at_least = $(event).attr("data-at-least");
		var data_money = $(event).attr("data-money");
		var data_start_time = $(event).attr("data-start-time");
		var data_end_time = $(event).attr("data-end-time");
		var data_max_fetch = parseInt($(event).attr("data-max-fetch"));
		var data_receive_quantity = parseInt($(event).attr("data-receive-quantity"));
		if(data_max_fetch != 0 && data_receive_quantity>= data_max_fetch){
			layer.open({
				type: 1,
				skin: 'layui-layer-rim', //加上边框
				area: ['420px', '200px'], //宽高
				title : '<?php echo lang('receive_coupons'); ?>',
				content: '<div class="tip-info"><div class="left"><i class="receiveTip"></i></div><div class="right"><p class="coupon_desc"><?php echo lang('reached_the_limit'); ?>！</p><p class="my_coupon"><?php echo lang('view_the_collar_coupons'); ?>：<a href="'+__URL('SHOP_MAIN/member/vouchers')+'" target="_blank"><?php echo lang('my_discount_information'); ?></a></p></div></div>'

			});
			return false;
		}
		$.ajax({
			url : __URL("SHOP_MAIN/goods/receiveGoodsCoupon"),
			type : "post",
			data : { "coupon_type_id" : coupon_type_id},
			success : function(res){
				if(res['code']>0){
					$(".coupon"+coupon_type_id).attr("data-receive-quantity",data_receive_quantity+1);
					layer.open({
						type: 1,
						skin: 'layui-layer-rim', //加上边框
						area: ['420px', '200px'], //宽高
						title : '<?php echo lang('receive_coupons'); ?>',
						content: '<div class="tip-info"><div class="left"><i></i></div><div class="right"><p class="coupon_desc"><?php echo lang('congratulations_on_your_success'); ?><span style="color:#FF0000;"><?php echo lang('member_full'); ?>'+data_at_least+'<?php echo lang('element'); ?><?php echo lang('member_reduce'); ?>'+data_money+'<?php echo lang('element'); ?></span><?php echo lang('coupon'); ?></p><p class="use_time"><?php echo lang('use_time'); ?>：'+data_start_time+'-'+data_end_time+'</p><p class="my_coupon"><?php echo lang('view_the_collar_coupons'); ?>：<a href="'+__URL('SHOP_MAIN/member/vouchers')+'"  target="_blank"><?php echo lang('my_discount_information'); ?></a></p></div></div>'
					});
				}else if(res['code'] == -2011){
					layer.open({
						type: 1,
						skin: 'layui-layer-rim', //加上边框
						area: ['420px', '200px'], //宽高
						title : '<?php echo lang('receive_coupons'); ?>',
						content: '<div class="tip-info"><div class="left"><i class="receiveTip"></i></div><div class="right"><p class="coupon_desc"><?php echo lang('has_brought_over'); ?>！</p><p class="my_coupon"><?php echo lang('view_the_collar_coupons'); ?>：<a href="'+__URL('SHOP_MAIN/member/vouchers')+'" target="_blank"><?php echo lang('my_discount_information'); ?></a></p></div></div>'
					});
				}else{
					layer.msg(res['message']);
				}
			}
		})
	}
}

//切换组合套餐	
$(".combo-package-promotion nav ul li").click(function(){
	$(".combo-package-promotion nav ul li").removeClass("selected");
	$(this).addClass("selected");
	var data_combo_id = $(this).attr("data-combo-id");
	$(".combo-package-promotion div.tab-content").hide();
	$(".combo-package-promotion div.tab-content[data-combo-id='"+data_combo_id+"']").show();
	$(".combo-package-promotion img.lazy_load").lazyload({
		threshold : 50,
		effect : "fadeIn", //淡入效果
	})
})

//计算阶梯优惠后的价格
function calculated_price(num, obj){
	if($(obj) == undefined) return;
	var goodsLadderPreferentialList = $("#goodsLadderPreferentialList").val();
	var arr = JSON.parse(goodsLadderPreferentialList);
	var price = parseFloat($(obj).attr("data-price"));
	if(arr.length > 0){
		for (var i = 0; i < arr.length; i++) {
			if(num >= arr[i]['quantity']){
				price -= arr[i]['price'];
				break;
			}
		}
	}
	$(obj).text("￥"+price.toFixed(2));
}
</script>


<!-- 底部 -->

<!--
	创建时间：2017年2月7日 12:11:41
	功能描述： 底部，联系我们、电话 
-->
<style>
img{
	    vertical-align: top !important;
}
</style>
<div class="footer">
	<div class="dsc-service">
		<div class="w w1200 relative">
			<ul class="service-list">
			<?php if(is_array($merchant_service_list) || $merchant_service_list instanceof \think\Collection || $merchant_service_list instanceof \think\Paginator): if( count($merchant_service_list)==0 ) : echo "" ;else: foreach($merchant_service_list as $key=>$vo): ?>
				<li style="width: <?php echo 100/count($merchant_service_list)-1?>%">
					<div class="service-tit service-zheng">
					<?php if($vo['pic'] == ''): ?>
						<!-- <img src="__TEMP__/<?php echo $style; ?>/public/images/service_moren.png"> -->
					<?php else: ?>
						<img src="<?php echo __IMG($vo['pic']); ?>" style="width:28px;height:28px;">
					<?php endif; ?>
					</div>
					<div class="service-txt"><?php echo $vo['title']; ?></div>
				</li>
				<span style="width:1px;height:20px;border-left:1px solid #d2d2d2;display:inline-block;margin-bottom: 9px;"></span>
			<?php endforeach; endif; else: echo "" ;endif; ?>
				
			</ul>
		</div>
	</div>
	<div class="dsc-help">
		<div class="w w1200">
			<div class="help-list">
				<?php if(is_array($platform_help_class) || $platform_help_class instanceof \think\Collection || $platform_help_class instanceof \think\Paginator): if( count($platform_help_class)==0 ) : echo "" ;else: foreach($platform_help_class as $key=>$class_vo): ?>
				<div class="help-item">
					<h3><?php echo $class_vo['class_name']; ?></h3>
					<ul>
						<?php if(is_array($platform_help_document) || $platform_help_document instanceof \think\Collection || $platform_help_document instanceof \think\Paginator): if( count($platform_help_document)==0 ) : echo "" ;else: foreach($platform_help_document as $key=>$document_vo): if($class_vo['class_id'] == $document_vo['class_id']): ?>
						<li><a href="<?php echo __URL('SHOP_MAIN/helpcenter/index','id='.$document_vo['id']); ?>"
							title="<?php echo $document_vo['title']; ?>" target="_blank"><?php echo $document_vo['title']; ?></a></li> <?php endif; endforeach; endif; else: echo "" ;endif; ?>
					</ul>
				</div>
				<?php endforeach; endif; else: echo "" ;endif; ?>
			</div>
			<div class="help-cover">
				<div class="help-ctn">
					<div class="help-ctn-mt">
						<span><?php echo lang('hotline'); ?></span> <strong><?php echo $web_info['web_phone']; ?></strong>
					</div>
					<div class="help-ctn-mb">

						<a id="IM" im_type="dsc" href="<?php echo $custom_service['value']['service_addr']; ?>"
							target="_blank" class="btn-ctn" title="<?php echo lang('contact_customer_service'); ?>"><img
							src="__TEMP__/<?php echo $style; ?>/public/images/icon-csu.png"
							style="vertical-align: middle !important;">&nbsp;&nbsp;<?php echo lang('consulting_customer_service'); ?></a>
					</div>
				</div>
				<div class="help-scan">
					<div class="code">
						<img src="<?php echo __IMG($web_info['web_qrcode']); ?>">
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!--
	创建时间：2017年2月7日 12:13:09
	功能描述： 底部、公司信息 
-->
<div class="dsc-copyright">
	<div class="w w1200" id="bottom_copyright">
		<p class="copyright_info">
			<span id="copyright_desc"></span>
		</p>
		<p> <a href="javascript:;" target="_blank" class="copyright-logo"><?php echo $web_info['third_count']; ?></a>&nbsp;&nbsp;
			<a href="http://www.niushop.com.cn" target="_blank" class="copyright-logo" id="copyright_companyname"></a>&nbsp;&nbsp;<a href="#" id="copyright_meta"></a>
		</p>
		<p style="padding-top: 12px;display: none;" id="web_gov_record">
			<a href="javascript:;" target="_blank"><img src="__STATIC__/images/gov_record.png" alt="" style="width: 20px;height: 20px;"><span style="height: 20px;line-height: 20px;display: inline-block;margin-left: 5px"></span></a>
		</p>
	</div>
</div>



<!-- 添加js文件 -->


<?php if($uid == ''): ?>
	<style>
.verification-code{
	position:relative;
}
.verification-code img{
	position: absolute;
	top: 5px;
	right: 5px;
	z-index:101;
	width:100px;
	height:30px;
}
</style>
<script type="text/javascript"> 
$(document).ready(function(){
	$(window).on("resize",function(){
		//获取当前屏幕的宽度和高度
		var window_width = parseFloat($(window).width());
		var window_height = parseFloat($(window).height());
		//获取<?php echo lang('login'); ?>框的宽度和高度
		var div_width = parseFloat($("#layui-layer").css("width"));
		var div_height = parseFloat($("#layui-layer").css("height"));
		//确定<?php echo lang('login'); ?>框的显示位置
		var top = (window_height-div_height)/2;
		var left = (window_width-div_width)/2;
		$("#layui-layer").css({"top":top,"left":left});
	})
	//自执行一次resize函数
	$(window).trigger("resize");
});
function titleMove() {
	var moveable = true;
	var loginDiv = document.getElementById("layui-layer");
	//以下变量提前设置好
	var clientX = window.event.clientX;//鼠标水平位置
	var clientY = window.event.clientY;//鼠标垂直位置
	var moveTop = parseFloat(loginDiv.style.top);//<?php echo lang('login'); ?>框的top属性
	var moveLeft = parseFloat(loginDiv.style.left);//<?php echo lang('login'); ?>框的left属性
	var docX = parseFloat(window.innerWidth);//可视区域的宽度
	var docY = parseFloat(window.innerHeight);//可视区域的高度
	var divWidth = parseFloat(loginDiv.style.width);//<?php echo lang('login'); ?>框的宽度
	var divHeight = parseFloat(loginDiv.style.height);//<?php echo lang('login'); ?>框的高度 
	var max_width = docX-divWidth;
	var max_height = docY-divHeight;
	document.onmousemove = function MouseMove() {
		if (moveable) {
			var y = moveTop + window.event.clientY - clientY;  //当前鼠标位置减去上次鼠标位置
			var x = moveLeft + window.event.clientX - clientX;
			if (x >= 0 && y >= 0 && moveTop+divHeight<=docY &&	moveLeft+divWidth<=docX) {
				loginDiv.style.top = y + "px";
				loginDiv.style.left = x + "px";
			}else{
				if(x<0){
					loginDiv.style.left = "5px";
			}else if(y<0){
				loginDiv.style.top = "5px";
			}else if(moveTop+divHeight>docY){
				loginDiv.style.top = max_height + "px";
			}else if(moveLeft+divWidth>docX){
				loginDiv.style.left = max_width + "px";
			}
		} 
	}
}

document.onmouseup = function Mouseup() {
		moveable = false;
	}
}
</script>
<input id="goods_id" value="<?php echo $goods_info['goods_id']; ?>" type="hidden">
<div id="mask-layer-login" style="display:none;position:fixed;top:0;width:100%;height:100%;z-index:999999;background:rgba(0,0,0,0.75);"></div>
<div class="layui-layer layui-layer-page layer-anim" id="layui-layer" type="page" times="100002" showtime="0" contype="string" style="display:none;z-index: 19891015;position:fixed;width:346px;height:436px;">
	<div class="layui-layer-title" style="cursor: move;" id="control-trawaaa"  onmousedown="titleMove();"><?php echo lang('not_logged_yet'); ?><span style="width:40px;display:inline-block "></span></div>
	<div id="NS_LOGIN_LAYER_DIALOG" class="layui-layer-content">
		<div id="1487644497l6UAoM" class="login-form">
			<div class="login-con pos-r">
				<div class="login-wrap">
					<div class="login-tit">
						<?php echo lang('no_account_yet'); ?>？<a href="<?php echo __URL('SHOP_MAIN/login/registerbox'); ?>" class="regist-link color"><?php echo lang('register_immediately'); ?><i>&gt;</i></a>
					</div>
					<div class="login-radio">
						<ul>
							<li class="active" id="login2" onclick="setTab('login',2,2)"><?php echo lang('member_login'); ?></li>
						</ul>
					</div>
					<!-- 普通<?php echo lang('login'); ?> star -->
					<div id="con_login_2" class="form">
						<div class="form-group item-name">
							<!-- 错误项标注 给div另添加一个class值'error' star -->
							<div class="form-control-box">
								<i class="icon"></i>
								<input type="text" name="txtName" id="txtName" placeholder="<?php echo lang('cell_phone_number'); ?>/<?php echo lang('member_name'); ?>/<?php echo lang('mailbox'); ?>" class="text" tabindex="1" autocomplete="off" aria-required="true" />
							</div>
							<!-- 错误项标注 给div另添加一个class值'error' end -->
						</div>
						<div class="form-group item-password">
							<div class="form-control-box">
								<i class="icon"></i>
								<input type="password" name="txtPWD" id="txtPWD" placeholder="<?php echo lang('please_input_password'); ?>" class="text" tabindex="2"  autocomplete="off" aria-required="true" />
							</div>
						</div>
						<?php if($login_verify_code['pc'] == 1): ?>
						<div class="form-group verification-code">
							<div class="form-control-box">
								<input type="text" id="vertification" class="text vertification" name="vertification" placeholder="<?php echo lang('please_enter_verification_code'); ?> " />
								<img id="verify_img" src="<?php echo __URL('SHOP_MAIN/captcha'); ?>" alt="captcha" onclick="this.src='<?php echo __URL('SHOP_MAIN/captcha?tag=1'); ?>'+'&send='+Math.random()" />
							</div>
						</div>
						<input type="hidden" id="hidden_captcha_src" value="<?php echo __URL('SHOP_MAIN/captcha?tag=1'); ?>" />
						<?php endif; ?>
<!-- 						<div class="safety"> -->
<!-- 							<label for="remember"> -->
<!-- 								<input type="checkbox" name="expire" checked="checked" type="checkbox" value="1"> -->
<!-- 								<span style="display:inline-block;padding-bottom:7px;">7天内自动<?php echo lang('login'); ?></span> -->
<!-- 							</label> -->
<!-- 							<a class="forget-password fr" href="<?php echo __URL('SHOP_MAIN/login/findpasswd'); ?>" style="margin-top:2px;">忘记密码？</a> -->
<!-- 						</div> -->
						<div class="login-btn">
							<input type="hidden" name="act" value="act_login" />
							<input type="hidden" name="back_act" />
							<input type="button" name="buttom" class="btn-img btn-entry bg-color" id="loginsubmit" onclick="btnlogin(this)" value="<?php echo lang('logon_immediately'); ?>" />
						</div>
						<div class="item-coagent">
							<?php if($Wchat_info['is_use'] == 1): ?>
								<a href="<?php echo __URL('APP_MAIN/login/oauthlogin','type=WCHAT'); ?>" data-id="wchat" class="website-login"><i class="weixin"></i></a>
							<?php endif; if($qq_info['is_use'] == 1): ?>
								<a href="<?php echo __URL('APP_MAIN/login/oauthlogin','type=QQLOGIN'); ?>" data-id="qq" class="website-login"><i class="qq"></i></a>
							<?php endif; ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<span class="layui-layer-setwin"><a class="layui-layer-ico layui-layer-close layui-layer-close1" href="javascript:;"></a></span><span class="layui-layer-resize"></span>
</div>
<!-- 验证码脚本 -->
<script type="text/javascript">
// 登陆 <?php echo lang('login'); ?>时 <?php echo lang('login'); ?>按钮"变暗"
function btnlogin(event) {
	var goodsid = $("#goods_id").val();
	var userName = $('#txtName').val();
	var password = $('#txtPWD').val();
	var vertification = "";
	if(userName==''){
		$.msg('<?php echo lang('username_cannot_be_empty'); ?>');
		$('#txtName').select();
		return;
	}
	if(password==''){
		$.msg('<?php echo lang('password_must_not_be_empty'); ?>');
		$('#txtPWD').select();
		return;
	}
	if("<?php echo $login_verify_code['pc']; ?>" == 1){
		vertification = $('#vertification').val();
		if(vertification == undefined || vertification==''){
			$.msg('<?php echo lang('verification_code_must_not_be_null'); ?>');
			$("#vertification").select();
			return;
		}
	}
	$.ajax({
		type:"post",
		url:"<?php echo __URL('SHOP_MAIN/login/login'); ?>",
		data:{"userName" : userName,"password" : password,"vertification" : vertification},
		success : function(data){
			if(data['code']>0){
				$("#hidden_uid").val(data['code']);
				var tag = $('#mask-layer-login').attr("data-tag");
				if(goodsid == '' || tag==undefined){
					$.msg('<?php echo lang('login_successful'); ?>！');
					window.location.reload();
				}else{
					login_buy_goods(event);
				}
			}else{
				$.msg(data['message']);
				$("#verify_img").attr("src",'<?php echo __URL('SHOP_MAIN/captcha?tag=1'); ?>&send='+Math.random());
			}
		}
	});
}
function login_buy_goods(event){
	var image_url = "";
	var goodsid =  $("#goods_id").val();
	var tag = $('#mask-layer-login').attr("data-tag");
	 $.cart.add(goodsid, $(".amount-input").val(), {
		is_sku: true,
		image_url: image_url,
		event: event,
		tag : tag
	})
}
</script>
<?php endif; ?>

<script>
(function(){
	var bp = document.createElement('script');
	var curProtocol = window.location.protocol.split(':')[0];
	if (curProtocol === 'https') {
		bp.src = 'https://zz.bdstatic.com/linksubmit/push.js';
	}
	else {
		bp.src = 'http://push.zhanzhang.baidu.com/push.js';
	}
	var s = document.getElementsByTagName("script")[0];
	s.parentNode.insertBefore(bp, s);
})();
</script>
<?php if($default_client): ?>
<div style="position:fixed;right:0;bottom:10%;z-index:999999;" onclick="locationWap()" id="go_mobile">
	<img src="__TEMP__/<?php echo $style; ?>/public/images/go_mobile.png"/>
</div>
<script>
$(function(){
	checkTerminal();
});
window.onresize = function(){
	checkTerminal();
}
function checkTerminal(){
	if ((navigator.userAgent.match(/(iPhone|iPod|Android|ios|iPad)/i)) && window.screen.availWidth<768){
		//跳到手机端
		$("#go_mobile").show();
	}else{
		$("#go_mobile").hide();
	}
}
//跳转到wap端
function locationWap(){
	$.ajax({
		type : "post",
		url : "<?php echo __URL('SHOP_MAIN/index/deleteClientCookie'); ?>",
		success : function(data){
			location.href= __URL("SHOP_MAIN");
		}
	})
}

</script>
<?php endif; ?>
<script>
function tiaozhuan(){
	location.href= __URL("SHOP_MAIN/login/index");
}
</script>
</body>
</html>