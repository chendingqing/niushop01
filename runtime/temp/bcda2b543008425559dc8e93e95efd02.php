<?php if (!defined('THINK_PATH')) exit(); /*a:12:{s:42:"template/shop\blue\Member\orderDetail.html";i:1530098025;s:28:"template/shop\blue\base.html";i:1538980491;s:32:"template/shop\blue\urlModel.html";i:1510819885;s:34:"template/shop\blue\controlTop.html";i:1511140622;s:41:"template/shop\blue\controlHeadSerach.html";i:1530169694;s:43:"template/shop\blue\controlHeadGoodType.html";i:1506594225;s:40:"template/shop\blue\controlCommonNav.html";i:1502706001;s:46:"template/shop\blue\Member\controlLeftMenu.html";i:1522143776;s:45:"template/shop\blue\controlBottomLinkHelp.html";i:1526635356;s:37:"template/shop\blue\controlBottom.html";i:1512179372;s:36:"template/shop\blue\controlLogin.html";i:1508897749;s:37:"template/shop\blue\baidu_js_push.html";i:1499844478;}*/ ?>
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

<link href="__TEMP__/<?php echo $style; ?>/public/css/order/ns_order_detail.css" rel="stylesheet">
<link href="__TEMP__/<?php echo $style; ?>/public/css/plugin/tooltips.css" rel="stylesheet">
<script src="__TEMP__/<?php echo $style; ?>/public/js/plugin/jquery.pure.tooltips.js"></script>
<style>
.goods-items td{padding:2px 5px;}
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
</style>
<div class="header-top">
	<div class="header-box">
		<font id="login-info" class="login-info"></font>
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
			<li class="menu-item">
				<div class="menu">
					<a class="menu-hd we-chat" href="javascript:;" target="_top"><!-- <i></i> --><?php echo lang('attention_mall'); ?><b></b>
					</a>
					<div id="menu-5" class="menu-bd we-chat-qrcode">
						<span class="menu-bd-mask"></span> <a target="_top"> <img src="<?php echo __IMG($web_info['web_qrcode']); ?>" alt="<?php echo lang('official_wechat'); ?>"></a>
						<p class="font-14"><?php echo lang('concerned_official_wechat'); ?></p>
					</div>
				</div>
			</li>
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
			<li class="menu-item"><a  href="<?php echo __URL('APP_MAIN'); ?>" class="menu-hd wap-nav" ><!-- <i></i> --><?php echo lang('mobile_terminal'); ?></a></li>
			<li class="menu-item"><a href="<?php echo __URL('SHOP_MAIN/helpcenter/index'); ?>" class="menu-hd site-nav" target="_blank"><?php echo lang('shop_help_center'); ?></a></li>
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

<!-- 内容 -->

<div class="margin-w1210">
	<script type="text/javascript" src="__TEMP__/<?php echo $style; ?>/public/js/shopping_cart.js"></script>
<link type="text/css" rel="stylesheet" href="__TEMP__/<?php echo $style; ?>/public/css/user.css" />
<style>
.member-menu .user-info .logo {height: 80px;line-height:80px;border-radius: 55px;overflow: hidden;text-align: center;border: 1px solid #e6e6e6;}
</style>
<div class="breadcrumb">
	<a href="<?php echo __URL('SHOP_MAIN'); ?>" class="index"><?php echo lang('home_page'); ?></a>
	<span class="crumbs-arrow">&gt;</span>
	<a href="<?php echo __URL('SHOP_MAIN/member/index'); ?>" class="js-bread-crumb"></a>
</div>
<div class="member-menu">
	<div class="user-info">
		<header>
			<span class="level-name"><?php echo $member_detail['level_name']; ?></span>
			<span class="exit" onclick="logout()" title="<?php echo lang('login_out'); ?><?php echo lang('login'); ?>"><i class="icon i-exit"></i><?php echo lang('login_out'); ?></span>
		</header>
		<div class="logo" onclick="location.href='<?php echo __URL('SHOP_MAIN/member/person'); ?>';" title="<?php echo lang('member_view_personal_data'); ?>">
			<?php if($member_detail['user_info']['user_headimg'] != '' and $member_detail['user_info']['user_headimg'] != '0'): ?>
			<img id="headImagePath" src="<?php echo __IMG($default_headimg); ?>" class="lazy_load" data-original="<?php echo __IMG($member_detail['user_info']['user_headimg']); ?>" style="border-radius: 0;display: block;"/>
			<?php else: ?>
			<img id="headImagePath" src="<?php echo __IMG($default_headimg); ?>" style="border-radius: 0;display: block;"/>
			<?php endif; ?>
		</div>
		<strong onclick="location.href='<?php echo __URL('SHOP_MAIN/member/person'); ?>';" title="<?php echo lang('member_view_personal_data'); ?>"><?php echo $member_detail['user_info']['nick_name']; ?></strong>
	</div>
	<article class="list">
		<div class="item">
			<h3>
				<i class="icon i-member-center"></i>
				<span><?php echo lang('member_member_center'); ?></span>
			</h3>
			<ul>
				<li onclick="location.href='<?php echo __URL('SHOP_MAIN/member/index'); ?>';" data-href="<?php echo __URL('SHOP_MAIN/member/index'); ?>" class="item">
					<span><?php echo lang('member_welcome_page'); ?></span>
					<i class="icon i-arrow"></i>
				</li>
				<li onclick="location.href='<?php echo __URL('SHOP_MAIN/member/person'); ?>';" data-href="<?php echo __URL('SHOP_MAIN/member/person'); ?>">
					<span><?php echo lang('member_personal_data'); ?></span>
					<i class="icon i-arrow"></i>
				</li>
				<li onclick="location.href='<?php echo __URL('SHOP_MAIN/member/usersecurity'); ?>';" data-href="<?php echo __URL('SHOP_MAIN/member/usersecurity'); ?>">
					<span><?php echo lang('member_account_security'); ?></span>
					<i class="icon i-arrow"></i>
				</li>
				<li onclick="location.href='<?php echo __URL('SHOP_MAIN/member/addresslist'); ?>';" data-href="<?php echo __URL('SHOP_MAIN/member/addresslist'); ?>">
					<span><?php echo lang('member_delivery_address'); ?></span>
					<i class="icon i-arrow"></i>
				</li>
				<li onclick="location.href='<?php echo __URL('SHOP_MAIN/member/balancelist'); ?>';" data-href="<?php echo __URL('SHOP_MAIN/member/balancelist'); ?>">
					<span><?php echo lang('member_account_balance'); ?></span>
					<i class="icon i-arrow"></i>
				</li>
				<li onclick="location.href='<?php echo __URL('SHOP_MAIN/member/balancewithdrawlist'); ?>';" data-href="<?php echo __URL('SHOP_MAIN/member/balancewithdrawlist'); ?>">
					<span><?php echo lang('member_cash_register'); ?></span>
					<i class="icon i-arrow"></i>
				</li>
				<li onclick="location.href='<?php echo __URL('SHOP_MAIN/member/vouchers'); ?>';" data-href="<?php echo __URL('SHOP_MAIN/member/vouchers'); ?>">
					<span><?php echo lang('member_my_coupon'); ?></span>
					<i class="icon i-arrow"></i>
				</li>
				<li onclick="location.href='<?php echo __URL('SHOP_MAIN/member/virtualgoodslist'); ?>';" data-href="<?php echo __URL('SHOP_MAIN/member/virtualgoodslist'); ?>">
					<span><?php echo lang('member_my_virtual_code'); ?></span>
					<i class="icon i-arrow"></i>
				</li>

				<li onclick="location.href='<?php echo __URL('SHOP_MAIN/member/integrallist'); ?>';" data-href="<?php echo __URL('SHOP_MAIN/member/integrallist'); ?>">
					<span><?php echo lang('member_my_points'); ?></span>
					<i class="icon i-arrow"></i>
				</li>
				<li onclick="location.href='<?php echo __URL('SHOP_MAIN/member/newmypath'); ?>';" data-href="<?php echo __URL('SHOP_MAIN/member/newmypath'); ?>">
					<span><?php echo lang('new_my_path'); ?></span>
					<i class="icon i-arrow"></i>
				</li>
			</ul>
		</div>
		<div class="item">
			<h3>
				<i class="icon i-trading-center"></i>
				<span><?php echo lang('member_trading_center'); ?></span>
			</h3>
			<ul>
				<li onclick="location.href='<?php echo __URL('SHOP_MAIN/member/orderlist'); ?>';" data-href="<?php echo __URL('SHOP_MAIN/member/orderlist'); ?>">
					<span><?php echo lang('member_my_order'); ?></span>
					<i class="icon i-arrow"></i>
				</li>
				<li onclick="location.href='<?php echo __URL('SHOP_MAIN/member/presellorderlist'); ?>';" data-href="<?php echo __URL('SHOP_MAIN/member/presellorderlist'); ?>">
					<span><?php echo lang('presell_my_order'); ?></span>
					<i class="icon i-arrow"></i>
				</li>
				<?php if($is_open_virtual_goods): ?>
				<li onclick="location.href='<?php echo __URL('SHOP_MAIN/member/virtualorderlist'); ?>';" data-href="<?php echo __URL('SHOP_MAIN/member/virtualorderlist'); ?>">
					<span><?php echo lang('virtual_orders'); ?></span>
					<i class="icon i-arrow"></i>
				</li>
				<?php endif; ?>
				<li onclick="location.href='<?php echo __URL('SHOP_MAIN/member/backlist'); ?>';" data-href="<?php echo __URL('SHOP_MAIN/member/backlist'); ?>">
					<span><?php echo lang('refund_return_maintenance'); ?></span>
					<i class="icon i-arrow"></i>
				</li>
				<li onclick="location.href='<?php echo __URL('SHOP_MAIN/member/goodsevaluationlist'); ?>';" data-href="<?php echo __URL('SHOP_MAIN/member/goodsevaluationlist'); ?>">
					<span><?php echo lang('commodity_evaluation_drying_list'); ?></span>
					<i class="icon i-arrow"></i>
				</li>
				<li onclick="location.href='<?php echo __URL('SHOP_MAIN/member/goodscollectionlist'); ?>';" data-href="<?php echo __URL('SHOP_MAIN/member/goodscollectionlist'); ?>">
					<span><?php echo lang('member_merchandise_collection'); ?></span>
					<i class="icon i-arrow"></i>
				</li>
			</ul>
		</div>
	</article>
</div>
<script type="text/javascript">
$(function(){
	//选中
	var path_info='<?php echo $path_info; ?>';
	if(path_info==''||path_info=="member"){
		$("li[data-href^='<?php echo __URL('SHOP_MAIN/member/index'); ?>']").addClass('current');
		$(".js-bread-crumb").attr("href",$("li[data-href^='<?php echo __URL('SHOP_MAIN/member/index'); ?>']").attr("data-href"));
		$(".js-bread-crumb").text($("li[data-href^='<?php echo __URL('SHOP_MAIN/member/index'); ?>']").text());
	}else{
		$("li[data-href^='<?php echo __URL('SHOP_MAIN/'.$path_info); ?>']").addClass('current');
		$(".js-bread-crumb").attr("href",$("li[data-href^='<?php echo __URL('SHOP_MAIN/'.$path_info); ?>").attr("data-href"));
		$(".js-bread-crumb").text($("li[data-href^='<?php echo __URL('SHOP_MAIN/'.$path_info); ?>']").text());
	}
});
</script>
	<div class="member-main">
		<div class="box">
			<div class="tabmenu">
				<ul class="tab">
					<li class="active"><?php echo lang('member_order_details'); ?></li>
				</ul>
			</div>
			<div style="float:left;width:50%;display: inline-block;">
				<table width="100%" border="0" cellpadding="10" cellspacing="1" bgcolor="#eeeeee" class="order_detail">
					<tr>
						<td width="20%" align="right" bgcolor="#ffffff"><?php echo lang('member_order_number'); ?>：</td>
						<td align="left" bgcolor="#ffffff"><?php echo $order['order_no']; ?></td>
					</tr>
					<tr>
						<td align="right" bgcolor="#ffffff"><?php echo lang('member_order_status'); ?>：</td>
						<td align="left" bgcolor="#ffffff"><?php echo $order['status_name']; ?></td>
					</tr>
					<tr>
						<td align="right" bgcolor="#ffffff"><?php echo lang('member_payment_method'); ?>：</td>
						<td align="left" bgcolor="#ffffff"><?php echo $order['payment_type_name']; ?></td>
					</tr>
					<tr>
						<td align="right" bgcolor="#ffffff"><?php echo lang('member_payment_status'); ?>：</td>
						<td align="left" bgcolor="#ffffff"><?php echo $order['pay_status_name']; ?></td>
					</tr>
					<tr>
						<td align="right" bgcolor="#ffffff"><?php echo lang('member_delivery_mode'); ?>：</td>
						<td align="left" bgcolor="#ffffff"><?php echo $order['shipping_type_name']; ?>&nbsp;&nbsp;<?php echo $order['shipping_company_name']; ?></td>
					</tr>

					<?php if($order['shipping_type'] == 1): ?>
					<tr>
						<td align="right"><?php echo lang('delivery_time'); ?>：</td>
						<?php if($order['shipping_time']>0): ?>
						<td><?php echo getTimeStampTurnTimeByYmd($order['shipping_time']); ?> <?php echo $order['distribution_time_out']; ?></td>
						<?php else: ?>
						<td><?php echo lang('days_and_holidays_can_be_delivered'); ?></td>
						<?php endif; ?>
					</tr>
					<?php elseif($order['shipping_type'] == 3 && $order['shipping_status'] == 1): ?>
					<tr>
						<td align="right">配送信息：</td>
						<td>
							<p>配送单号：<?php echo $order['distribution_info']['express_no']; ?></p>
							<p>配送人：<?php echo $order['distribution_info']['order_delivery_user_name']; ?></p>  
							<p>配送人手机号：<?php echo $order['distribution_info']['order_delivery_user_mobile']; ?></p>
							<p>备注：<?php echo $order['distribution_info']['remark']; ?> </p>
						</td>
					</tr>
					<?php endif; switch($order['shipping_type']): case "1":case "3": ?>
						<tr>
							<td align="right" bgcolor="#ffffff"><?php echo lang('member_receiving_information'); ?>：</td>
							<td align="left" bgcolor="#ffffff"><?php echo $order['receiver_name']; ?>，<?php echo $order['receiver_mobile']; ?>，<?php if(!(empty($order['fixed_telephone']) || (($order['fixed_telephone'] instanceof \think\Collection || $order['fixed_telephone'] instanceof \think\Paginator ) && $order['fixed_telephone']->isEmpty()))): ?><?php echo $order['fixed_telephone']; ?>，<?php endif; ?> <?php echo $order['address']; if($order['receiver_zip']!=''): ?>，<?php echo $order['receiver_zip']; endif; ?></td>
						</tr>
						<?php break; case "2": ?>
						<tr>
							<td align="right" bgcolor="#ffffff"><?php echo lang('member_self_addressed_address'); ?>：</td>
							<td align="left" bgcolor="#ffffff"><?php echo $order['order_pickup']['province_name']; ?>&nbsp;<?php echo $order['order_pickup']['city_name']; ?>&nbsp;<?php echo $order['order_pickup']['district_name']; ?>&nbsp;<?php echo $order['order_pickup']['address']; ?></td>
						</tr>
						<?php break; endswitch; if(!empty($order['buyer_invoice_info'])): ?>
					<tr>
						<td align="right" bgcolor="#ffffff"><?php echo lang('member_invoice_header'); ?>：</td>
						<td align="left" bgcolor="#ffffff">
							<?php if(!empty($order['buyer_invoice_info'][0])): ?>
							<?php echo $order['buyer_invoice_info'][0]; endif; ?>
						</td>
					</tr>
					<tr>
						<td align="right" bgcolor="#ffffff" style="width: 22%;"><?php echo lang('member_taxpayer_identification_number'); ?>：</td>
						<td align="left" bgcolor="#ffffff">
							<?php if(!empty($order['buyer_invoice_info'][2])): ?>
							<?php echo $order['buyer_invoice_info'][2]; else: ?>
							-
							<?php endif; ?>
						</td>
					</tr>
					<tr>
						<td align="right" bgcolor="#ffffff"><?php echo lang('member_invoice_content'); ?>：</td>
						<td align="left" bgcolor="#ffffff">
							<?php if(!empty($order['buyer_invoice_info'][1])): ?>
							<?php echo $order['buyer_invoice_info'][1]; endif; ?>
						</td>
					</tr>
					<?php endif; if($order['buyer_message'] != ''): ?>
					<tr>
						<td align="right" bgcolor="#ffffff"><?php echo lang('member_buyer_message'); ?>：</td>
						<td><?php echo $order['buyer_message']; ?></td>
					</tr>
					<?php else: ?>
					<tr>
						<td align="right" bgcolor="#ffffff"><?php echo lang('member_buyer_message'); ?>：</td>
						<td><?php echo lang('member_no_messages'); ?></td>
					</tr>
					<?php endif; ?>
					
				</table>
			</div>
		
			<?php if($order['order_status'] == 0): ?>
			<div class="tab_right">
				<dl>
					<span><img src="__TEMP__/<?php echo $style; ?>/public/images/order.jpg" style="width: 30px;height: 30px;margin-left: 30px;margin-right: 10px;"/></span>
					<dd><?php echo lang('member_order_status'); ?>： <?php echo lang('member_submitted_and_payment'); ?></dd>
				</dl>
				<ul>
					<li>1. <?php echo lang('member_no_pay_yet'); ?>。</li>
					<li>2. <?php echo lang('member_cancel_the_order'); ?>。</li>
					<li>3. <?php echo lang('member_created_order'); if($order_buy_close_time == '' || $order_buy_close_time == 0): ?>60<?php else: ?><?php echo $order_buy_close_time; endif; ?><?php echo lang('member_automatically_closes'); ?>。</li>
				</ul>
			</div>
			<?php endif; if($order['order_status'] == 1): ?>
			<div class="tab_right">
				<dl>
					<span><img src="__TEMP__/<?php echo $style; ?>/public/images/order.jpg" style="width: 30px;height: 30px;margin-left: 30px;margin-right: 10px;"/></span>
					<dd><?php echo lang('member_order_status'); ?>： <?php echo lang('member_wait_patiently_shipment'); ?>...</dd>
				</dl>
				<ul >
					<li>1. <?php echo lang('member_seven_days_return'); ?>。</li>
					<li>2. <?php echo lang('member_customer_service_required'); ?>。</li>
				</ul>
			</div>
			<?php endif; if($order['order_status'] == 2): ?>
			<div class="tab_right">
				<dl>
					<span><img src="__TEMP__/<?php echo $style; ?>/public/images/order.jpg" style="width: 30px;height: 30px;margin-left: 30px;margin-right: 10px;"/></span>
				<dd><?php echo lang('member_order_status'); ?>： <?php echo lang('member_shipment_and_patient'); ?>...</dd>
				</dl>
				<ul>
					<li>1. <?php echo lang('member_seven_days_return'); ?>。</li>
					<li>2、<?php echo lang('member_customer_service_required'); ?>。</li>
				</ul>
			</div>
			<?php endif; if($order['order_status'] == 3): ?>
			<div class="tab_right">
				<dl>
					<span><img src="__TEMP__/<?php echo $style; ?>/public/images/order.jpg" style="width: 30px;height: 30px;margin-left: 30px;margin-right: 10px;"/></span>
				<dd><?php echo lang('member_order_status'); ?>： <?php echo lang('member_received_goods'); ?></dd>
				</dl>
				<ul>
					<li>1、<?php echo lang('member_contact_the_seller'); ?>。</li>
					<li>2、<?php echo lang('member_customer_service_required'); ?>。</li>
				</ul>
			</div>
			<?php endif; if($order['order_status'] == 4): ?>
			<div class="tab_right">
				<dl>
					<span><img src="__TEMP__/<?php echo $style; ?>/public/images/order.jpg" style="width: 30px;height: 30px;margin-left: 30px;margin-right: 10px;"/></span>
				<dd><?php echo lang('member_order_status'); ?>： <?php echo lang('member_completed'); ?></dd>
				</dl>
				<ul>
					<li>1、<?php echo lang('member_contact_the_seller'); ?>。</li>
					<li>2、<?php echo lang('member_customer_service_required'); ?>。</li>
				</ul>
			</div>
			<?php endif; if($order['order_status'] == 5): ?>
			<div class="tab_right">
				<dl>
					<span><img src="__TEMP__/<?php echo $style; ?>/public/images/order.jpg" style="width: 30px;height: 30px;margin-left: 30px;margin-right: 10px;"/></span>
					<dd><?php echo lang('member_order_status'); ?>： <?php echo lang('member_closed'); ?></dd>
				</dl>
				<ul></ul>
			</div>
			<?php endif; if($order['order_status'] == -1): ?>
			<div class="tab_right">
			<dl>
				<span><img src="__TEMP__/<?php echo $style; ?>/public/images/order.jpg" style="width: 30px;height: 30px;margin-left: 30px;margin-right: 10px;"/></span>
				<dd><?php echo lang('member_order_status'); ?>：<?php echo lang('member_refund'); ?></dd>
				</dl>
				<ul>
					<li>1、<?php echo lang('member_refund_and_contact_seller'); ?>。</li>
					<li>2、<?php echo lang('member_customer_service_required'); ?>。</li>
				</ul>
			</div>
			<?php endif; if($order['order_status'] == -2): ?>
			<div class="tab_right">
				<dl>
					<span><img src="__TEMP__/<?php echo $style; ?>/public/images/order.jpg" style="width: 30px;height: 30px;margin-left: 30px;margin-right: 10px;"/></span>
				<dd><?php echo lang('member_order_status'); ?>： <?php echo lang('member_have_refunded'); ?></dd>
				</dl>
				<ul></ul>
			</div>
			<?php endif; ?>
			<br/>
			<?php if(count($order['order_goods_no_delive']) >0): ?>
			<table width="100%" border="0" cellpadding="10" cellspacing="1" bgcolor="#eeeeee" ></table>
			<div class="blank"></div>
			<div class="tabmenu">
				<ul class="tab pngFix">
					<li class="first active"><?php echo lang('member_list_of_goods'); ?></li>
				</ul>
			</div>
			<table width="100%" border="0" cellpadding="10" cellspacing="1" bgcolor="#eeeeee" class="goods-items">
				<tr>
					<th width="30%" align="center" bgcolor="#ffffff"><?php echo lang('member_commodity_name'); ?></th>
					<th width="20%" align="center" bgcolor="#ffffff"><?php echo lang('member_attribute'); ?></th>
					<th width="15%" align="center" bgcolor="#ffffff"><?php echo lang('member_commodity_price'); ?></th>
					<th width="10%" align="center" bgcolor="#ffffff"><?php echo lang('member_quantity_purchased'); ?></th>
					<th width="15%" align="center" bgcolor="#ffffff"><?php echo lang('goods_subtotal'); ?></th>
					<th width="10%" align="center" bgcolor="#ffffff"><?php echo lang('member_distribution_status'); ?></th>
				</tr>
				<?php if(is_array($order['order_goods_no_delive']) || $order['order_goods_no_delive'] instanceof \think\Collection || $order['order_goods_no_delive'] instanceof \think\Paginator): $i = 0; $__LIST__ = $order['order_goods_no_delive'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$goodsData): $mod = ($i % 2 );++$i;?>
				<tr>
					<td bgcolor="#ffffff">
						<div class="ui-centered-image" style="width: 48px; height: 48px;float: left;margin-right: 10px;">
							<img src="<?php echo __IMG($goodsData['picture_info']['pic_cover_micro']); ?>" style="max-width: 48px;max-height: 48px;">
						</div>
						<a href="<?php echo __URL('SHOP_MAIN/goods/goodsinfo','goodsid='.$goodsData['goods_id']); ?>" target="_blank"><?php echo $goodsData['goods_name']; ?></a>
						<?php if($goodsData['gift_flag'] > 0): ?>
						<br/>
						<i style="font-size:12px;margin: 5px 5px 0 0;padding:1px 4px;border-radius:3px;display: inline-block;color:#FFF;background-color:#de533c;height:16px;line-height: 16px;overflow:hidden;font-style:normal;">赠品</i>
						<?php endif; ?>
					</td>
					<td align="center" bgcolor="#ffffff">
					<?php if($goodsData['sku_name'] != ''): ?>
						<?php echo $goodsData['sku_name']; endif; ?>
					</td>
					<td align="center" bgcolor="#ffffff">￥<?php echo $goodsData['price']; ?></td>
					<td align="center" bgcolor="#ffffff"><?php echo $goodsData['num']; ?></td>
					<td align="center" bgcolor="#ffffff"><?php echo $goodsData['goods_money']; ?></td>
					<td align="center" bgcolor="#ffffff">
						<span><?php echo $goodsData['shipping_status_name']; ?></span>
						<?php if($goodsData['refund_status'] != 0): ?>
							<span style="color:#0D84D4;display:block;"><?php echo $goodsData['status_name']; ?></span>
						<?php endif; ?>
					</td>
				</tr>
				<?php endforeach; endif; else: echo "" ;endif; ?>
			</table>
			<?php endif; if(is_array($order['goods_packet_list']) || $order['goods_packet_list'] instanceof \think\Collection || $order['goods_packet_list'] instanceof \think\Paginator): if( count($order['goods_packet_list'])==0 ) : echo "" ;else: foreach($order['goods_packet_list'] as $key=>$vo): ?>
			<table width="100%" border="0" cellpadding="10" cellspacing="1" bgcolor="#eeeeee" style="margin-top:15px;">
				<tr>
					<th width="30%" align="left" >
						<span><?php echo $vo['packet_name']; ?></span>
						<?php if($vo['is_express'] == 1): ?>
						<span><?php echo $vo['express_name']; ?>：</span>
						<span><?php echo $vo['express_code']; ?></span>
						<?php endif; ?>
					</th>
					<th width="20%"></th>
					<th width="15%">
						<?php if($vo['is_express'] == 1): ?>
						<a class="js-query-logistics" data-express-code="<?php echo $vo['express_code']; ?>" data-express-name="<?php echo $vo['express_name']; ?>" data-express-id="<?php echo $vo['express_id']; ?>" href="javascript:;"><?php echo lang('member_inquiry_logistics'); ?></a>
						<?php endif; ?>
					</th>
					<th width="10%"></th>
					<th width="15%"></th>
					<th width="10%"><?php echo lang('member_distribution_status'); ?></th>
				</tr>
				<?php if(is_array($vo['order_goods_list']) || $vo['order_goods_list'] instanceof \think\Collection || $vo['order_goods_list'] instanceof \think\Paginator): $i = 0; $__LIST__ = $vo['order_goods_list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$goodsvo): $mod = ($i % 2 );++$i;?>
				<tr>
					<td bgcolor="#ffffff">
						<div class="ui-centered-image" style="width: 48px; height: 48px;float: left;margin-right: 10px;">
							<img src="<?php echo __IMG($goodsvo['picture_info']['pic_cover_micro']); ?>" style="max-width: 48px;max-height: 48px;">
						</div>
						<a href="<?php echo __URL('SHOP_MAIN/goods/goodsinfo','goodsid='.$goodsvo['goods_id']); ?>" target="_blank"><?php echo $goodsData['goods_name']; ?></a>
					</td>
					<td align="center" bgcolor="#ffffff">
					<?php if($goodsvo['sku_name'] != ''): ?>
						<?php echo $goodsvo['sku_name']; endif; ?>
					</td>
					<td align="center" bgcolor="#ffffff">￥<?php echo $goodsvo['price']; ?></td>
					<td align="center" bgcolor="#ffffff"><?php echo $goodsvo['num']; ?></td>
					<td align="center" bgcolor="#ffffff"><?php echo $goodsvo['goods_money']; ?></td>
					<td align="center" bgcolor="#ffffff"><?php echo $goodsvo['shipping_status_name']; ?></td>
				</tr>
				<?php endforeach; endif; else: echo "" ;endif; ?>
			</table>
			<?php endforeach; endif; else: echo "" ;endif; ?>
			<div class="blank"></div>
			<div class="tabmenu">
				<ul class="tab pngFix">
					<li class="first active"><?php echo lang('member_total_cost'); ?></li>
				</ul>
			</div>
			<table width="100%" border="0" cellpadding="10" cellspacing="1" bgcolor="#eeeeee">
				<tr>
					
				<td colspan="7" align="right" >
					<span><?php echo lang('member_total_commodity_value'); ?>：￥<?php echo $order['goods_money']; ?>，</span>
					
					<?php if($order['user_platform_money']>0): ?>
					<span><?php echo lang('member_balance_payment'); ?>：￥<?php echo $order['user_platform_money']; ?>，</span>
					<?php endif; if($order['coupon_money']>0): ?>
					<span><?php echo lang('member_coupons'); ?>：￥<?php echo $order['coupon_money']; ?>，</span>
					<?php endif; if($order['tax_money']>0): ?>
					<span><?php echo lang('member_invoice_tax'); ?>：￥<?php echo $order['tax_money']; ?>，</span>
					<?php endif; if($order['promotion_money']>0): switch($order['promotion_type']): case "MANJIAN": ?><span><?php echo lang('member_full_discount'); ?>：￥<?php echo $order['promotion_money']; ?>，</span><?php break; case "ZUHETAOCAN": ?><span><?php echo lang('member_taocan_discount'); ?>：￥<?php echo $order['promotion_money']; ?>，</span><?php break; endswitch; endif; if($order['point']>0): ?>
					<span><?php echo lang('member_use_integral'); ?>：<?php echo $order['point']; ?>，</span>
					<?php endif; ?>
					
					<span> <?php echo lang('member_actual_payment'); ?>：<b style="color: #f44;">￥<?php echo $order['pay_money']; ?></b></span>
					<span>（<?php echo lang('free_shipping'); ?> ￥<?php echo $order['shipping_money']; ?>）</span>
				</td>
				</tr>
			</table>
		</div>
	</div>
</div>


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



<script>
$(function(){
	
	$("li[data-href^='<?php echo __URL('SHOP_MAIN/member/orderlist'); ?>']").addClass('current');
	$(".js-bread-crumb").attr("href",'<?php echo __URL('SHOP_MAIN/member/orderlist'); ?>');
	$(".js-bread-crumb").text("<?php echo lang('member_my_order'); ?>");
	$(".js-bread-crumb").parent().append('<span class="crumbs-arrow">&gt;</span><a href="<?php echo __URL('SHOP_MAIN/member/orderdetail'); ?>"><?php echo lang('member_order_details'); ?></a>');
	
	//查询物流
	$(".js-query-logistics").mouseover(function(){
		$(".js-query-logistics").removeAttr("data-show");
		$(this).attr("data-show",1);
	});

	var html = '<div class="silider-express">';
		html += '<div class="mask-layer-loading" style="text-align:center;">';
		html += '<img src="ADMIN_IMG/mask_load.gif"/>';
		html += '<div style="text-align:center;margin-top:10px;"><?php echo lang('member_effort_loading'); ?>...</div>';
		html += '</div>';
		html += '</div>';
	$('.js-query-logistics').pt({
		content: html,
		position : 'l',
		open : function(res){
			var curr_express = $(".js-query-logistics[data-show]");
			var express_id = curr_express.attr("data-express-id");
			var express_name = curr_express.attr("data-express-name");
			var express_code = curr_express.attr("data-express-code");
			if(express_id != undefined && express_name != undefined){
				if(curr_express.attr("data-express-info") == undefined){
					$.ajax({
						type : "post",
						url : "<?php echo __URL('SHOP_MAIN/member/getordergoodsexpressmessage'); ?>",
						data : {"express_id":express_id},
						success : function(data) {
							var html = "";
							if (data["Success"]) {
								html += '<div class="logistics-tip">';
									html += '<div class="title">'+express_name+'&nbsp;&nbsp;&nbsp;<?php echo lang('member_waybill_number'); ?>：'+express_code+'</div>';
									html += '<div class="content">';
										html += '<ul>';
										for (var i = 0; i < data["Traces"].length; i++){
											if(i==0){
												html += '<li class="first">';
											}else{
												html += '<li>';
											}
												html += '<i class="node-icon"></i>';
												html += '<a href="javascript:;" target="_blank">'+data["Traces"][i]["AcceptStation"]+'</a>';
												html += '<div class="ftx-13">'+data["Traces"][i]["AcceptTime"]+'</div>';
											html += '</li>';
										}
										html += '</ul>';
									html += '</div>';
								html += '</div>';
							}else{
								html += '<div class="logistics-tip"><div class="content">'+data["Reason"]+'</div></div>';
							}
							res.html(html);
							curr_express.attr("data-express-info",html);//保存物流信息
						}
					});
				}else{
					res.html(curr_express.attr("data-express-info"));
				}
			}
		}
	});
})
</script>


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