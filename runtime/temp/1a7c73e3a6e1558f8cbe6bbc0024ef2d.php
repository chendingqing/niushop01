<?php if (!defined('THINK_PATH')) exit(); /*a:18:{s:39:"template/shop\blue\Goods\goodsList.html";i:1553151902;s:28:"template/shop\blue\base.html";i:1553151902;s:32:"template/shop\blue\urlModel.html";i:1553151902;s:34:"template/shop\blue\controlTop.html";i:1553157362;s:41:"template/shop\blue\controlHeadSerach.html";i:1553151902;s:43:"template/shop\blue\controlHeadGoodType.html";i:1553151902;s:40:"template/shop\blue\controlCommonNav.html";i:1553151902;s:43:"template/shop\blue\controlRightSidebar.html";i:1553151902;s:60:"template/shop\blue\Goods\controlGoodsCategoryConditions.html";i:1553151902;s:46:"template/shop\blue\Goods\controlGoodsLeft.html";i:1553151902;s:45:"template/shop\blue\Goods\controlGoodList.html";i:1553151902;s:59:"template/shop\blue\Goods\controlPopUpGoodsSkuAttribute.html";i:1553151902;s:41:"template/shop\blue\controlCommonPage.html";i:1553151902;s:44:"template/shop\blue\controlLoveOrHistory.html";i:1553151902;s:45:"template/shop\blue\controlBottomLinkHelp.html";i:1553151902;s:37:"template/shop\blue\controlBottom.html";i:1553151902;s:36:"template/shop\blue\controlLogin.html";i:1553151902;s:37:"template/shop\blue\baidu_js_push.html";i:1553151902;}*/ ?>
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

<!-- 添加css、字体文件文件 -->
<link rel="stylesheet" type="text/css" href="__TEMP__/<?php echo $style; ?>/public/css/ns_shop_common.css">
<style>
.crumbs-arrow{font-family: simsun;font-style: normal;}
.recommend{position: absolute;width: 40px;margin-top: -5px;}
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
		<span class="last js-nav">
		<?php if(is_array($category_name)): foreach($category_name as $vo): ?>
				&nbsp;<span class="crumbs-arrow">></span>&nbsp;<a href="<?php echo __URL('SHOP_MAIN/goods/goodslist','category_id='.$vo['category_id']); ?>"><?php echo $vo['category_name']; ?></a>
			<?php endforeach; else: ?>
			&nbsp;<span class="crumbs-arrow">></span>&nbsp;<?php echo $category_name; endif; ?>
		</span>	
	</div>
	<?php if($category_id!=0): ?>
	<script src="__TEMP__/<?php echo $style; ?>/public/js/goodsCategoryConditions/conditions.js"></script>
<link rel="stylesheet" type="text/css" href="__STATIC__/css/font-awesome.min.css">
<!-- 商品列表筛选 -->
<?php if($max_height > 0): ?>
<div class="goodslist-screen-condition" style="height: <?php echo $max_height; ?>px;">
<?php else: ?>
<div class="goodslist-screen-condition">
<?php endif; ?>
	<div class="title">
		<h4>分类<b>“<?php echo $curr_category_name; ?>”</b>筛选结果</h4>
	</div>

	<!-- 已选条件 -->
	<?php if($brand_name!='' || $min_price!=''|| count($attr_array) > 0  || count($spec_array) > 0): ?>
	<dl class="condition-item" style="height: auto;">
		<dt><span class="condition-type"><?php echo lang('goods_selected_condition'); ?>：</span></dt>
		<dd class="screen-condition">
			<ul class="selected-condition">		
				<!-- 已选择的筛选属性、品牌、价格 -->
				<?php if($brand_name!=''): ?>
				<li><a href="<?php echo __URL('SHOP_MAIN/goods/goodslist',$url_parameter_not_brand); ?>" ><?php echo lang('goods_brand'); ?>：<b class="color"><?php echo $brand_name; ?></b><i>×</i></a></li>
				<?php endif; if($max_price!=''): ?>
				<li><a href="<?php echo __URL('SHOP_MAIN/goods/goodslist',$url_parameter_not_price); ?>" ><?php echo lang('goods_price'); ?>：<b class="color"><?php echo $min_price; ?>-<?php echo $max_price; ?></b><i>×</i></a></li>
				<?php endif; ?>
				<!-- 取消属性 -->
				<?php if(is_array($attr_array) || $attr_array instanceof \think\Collection || $attr_array instanceof \think\Paginator): if( count($attr_array)==0 ) : echo "" ;else: foreach($attr_array as $key=>$attr_item_vo): ?>
					<li><a onclick="removeAttr(this);"data-attr-value="<?php echo $attr_item_vo[0]; ?>"data-attr-value-name="<?php echo $attr_item_vo[1]; ?>" data-attr-value-id="<?php echo $attr_item_vo[2]; ?>"><?php echo $attr_item_vo[0]; ?>：<b class="color"><?php echo $attr_item_vo[1]; ?></b><i>×</i></a></li>
				<?php endforeach; endif; else: echo "" ;endif; ?>
				<!-- 取消规格 -->
				<?php if(is_array($spec_array) || $spec_array instanceof \think\Collection || $spec_array instanceof \think\Paginator): if( count($spec_array)==0 ) : echo "" ;else: foreach($spec_array as $key=>$spec_item_vo): ?>
					<li><a onclick="removeSpec(this);"data-spec_id="<?php echo $spec_item_vo[0]; ?>"data-spec_value_id="<?php echo $spec_item_vo[1]; ?>"><?php echo $spec_item_vo[2]; ?>：<b class="color"><?php echo $spec_item_vo[3]; ?></b><i>×</i></a></li>
				<?php endforeach; endif; else: echo "" ;endif; ?>
			</ul>
		</dd>
	</dl>
	<?php endif; ?>
	
	<!-- 品牌筛选 start-->
	<?php if($brand_name==''&& $category_count>0  && count($category_brands) > 0): ?>
		<!-- <?php echo $curr += 1; ?> -->
		<dl class="condition-item brand" id="attr-group-dl-brand">
			<dt><span class="condition-type"><?php echo lang('goods_brand'); ?>：</span></dt>
			<dd class="screen-condition">
				<ul class="brand_list" id="brand-abox">
					<?php if(is_array($category_brands) || $category_brands instanceof \think\Collection || $category_brands instanceof \think\Paginator): if( count($category_brands)==0 ) : echo "" ;else: foreach($category_brands as $k=>$brand): ?>
					<li title="<?php echo $brand['brand_name']; ?>" data-brand-id="<?php echo $brand['brand_id']; ?>" data-brand-name="<?php echo $brand['brand_name']; ?>">
						<a href="javascript:;"  onclick="selectBrand(this,<?php echo $brand['brand_id']; ?>,'<?php echo $brand['brand_name']; ?>')">
							<?php if($brand['brand_pic'] != ''): ?>
							<img src="<?php echo __IMG($brand['brand_pic']); ?>" class="brand_pic">
							<?php endif; ?>
							<span><?php echo $brand['brand_name']; ?></span>
							<i></i>
						</a>
					</li>
					<?php endforeach; endif; else: echo "" ;endif; ?>
				</ul>
			</dd>
			<!-- 更多 与 多选 -->
			<div class="moreAndmulti">
				<?php if(count($category_brands) > 7): ?>
				<span class="select-more" is-show="0" data-height="57" onclick="showMore(this);">
					<i class="fa fa-chevron-down"></i><?php echo lang('goods_more'); ?>
				</span>
				<?php endif; ?>
				<span class="select-multi" onclick="showDuoXuan('#attr-group-dl-brand');">
					<i class="fa fa-plus" aria-hidden="true"></i> <?php echo lang('goods_multiselect'); ?>
				</span>
			</div>
			<dd>
				<div class="duoxuan-btnbox">
					<!--当没有选中任何品牌时，确定按钮为禁用状态disabled;当选中品牌后，确定按钮添加select-button-sumbit样式-->
					<a id="button-brand"></a>
					<a class="select-button disabled js-brand-select-button" onclick="brandMoreSearch(this);"><?php echo lang('goods_determine'); ?></a>
					<a href="javascript:hiddenDuoXuan('#attr-group-dl-brand',this)" class="select-button"><?php echo lang('goods_cancel'); ?></a>
				</div>
			</dd>
		</dl>
	<?php endif; ?>
	<!-- 品牌筛选 end-->
	
	<!-- 规格筛选 start-->
	<?php if(count($goods_spec_array) > 0): if(is_array($goods_spec_array) || $goods_spec_array instanceof \think\Collection || $goods_spec_array instanceof \think\Paginator): if( count($goods_spec_array)==0 ) : echo "" ;else: foreach($goods_spec_array as $key=>$vo): ?>
			<!-- <?php echo $curr += 1; ?> -->
			<?php if($vo['is_screen'] == 1 and $vo['spec_name'] != ''): ?>
			<dl class="condition-item" <?php if($curr > 4): ?>style="display:none";<?php endif; ?>>
				<dt><span class="condition-type"><?php echo $vo['spec_name']; ?>：</span></dt>
				<dd class="screen-condition">
					<ul>
						<?php if(is_array($vo['values']) || $vo['values'] instanceof \think\Collection || $vo['values'] instanceof \think\Paginator): if( count($vo['values'])==0 ) : echo "" ;else: foreach($vo['values'] as $k=>$value): ?>
						<li title="<?php echo $value['spec_value_name']; ?>" data-spec = "spec<?php echo $key; ?>" data-spec_value_id="<?php echo $value['spec_value_id']; ?>" data-spec_id="<?php echo $value['spec_id']; ?>" onclick="specSelect(this);"><a href="javascript:;"><?php echo $value['spec_value_name']; ?></a></li>
						<?php endforeach; endif; else: echo "" ;endif; ?>
					</ul>
				</dd>
				<!-- 更多 -->
				<div class="moreAndmulti">
					<span class="select-more" is-show="0" data-height="37" onclick="showMore(this);">
						<i class="fa fa-chevron-down"></i><?php echo lang('goods_more'); ?>
					</span>
				</div>
			</dl>
			<?php endif; endforeach; endif; else: echo "" ;endif; endif; ?>
	<!-- 规格筛选 end-->

	<!-- 属性筛选 start -->
	<?php if(count($attr_or_spec) > 0): if(is_array($attr_or_spec) || $attr_or_spec instanceof \think\Collection || $attr_or_spec instanceof \think\Paginator): if( count($attr_or_spec)==0 ) : echo "" ;else: foreach($attr_or_spec as $key=>$vo): if($vo['type'] != 1 and $vo['value'] != ''): if($vo['is_search'] == '1'): ?>
					<!-- <?php echo $curr += 1; ?> -->
					<dl class="condition-item" <?php if($curr > 4): ?>style="display:none";<?php endif; ?>>
						<dt><span class="condition-type"><?php echo $vo['attr_value_name']; ?>：</span></dt>
						<dd class="screen-condition">
							<ul>
								<?php if(is_array($vo['value_items']) || $vo['value_items'] instanceof \think\Collection || $vo['value_items'] instanceof \think\Paginator): if( count($vo['value_items'])==0 ) : echo "" ;else: foreach($vo['value_items'] as $k=>$value): ?>
								<li title="<?php echo $value; ?>" data-attr = "attr<?php echo $key; ?>" data-attr_value_id ="<?php echo $vo['attr_value_id']; ?>" data-attr-value="<?php echo $vo['attr_value_name']; ?>" data-attr-value-name="<?php echo $value; ?>" onclick="attrSelect(this);"><a href="javascript:;"><?php echo $value; ?></a></li>
								<?php endforeach; endif; else: echo "" ;endif; ?>
							</ul>
						</dd>
						<!-- 更多 -->
						<div class="moreAndmulti">
							<span class="select-more"  is-show="0" data-height="37" onclick="showMore(this);">
								<i class="fa fa-chevron-down"></i><?php echo lang('goods_more'); ?>
							</span>
						</div>
					</dl>
				<?php endif; endif; endforeach; endif; else: echo "" ;endif; endif; ?>
	<!-- 属性筛选 end -->

	<!--价格筛选 start-->
	<?php if($max_price=='' && $category_count>0): ?>
		<!-- <?php echo $curr += 1; ?> -->
		<dl class="condition-item" <?php if($curr > 4): ?>style="display:none";<?php endif; ?>>
			<dt><span class="condition-type"><?php echo lang('goods_price'); ?>：</span></dt>
			<dd class="screen-condition">
				<ul>
					<?php if(is_array($category_price_grades) || $category_price_grades instanceof \think\Collection || $category_price_grades instanceof \think\Paginator): if( count($category_price_grades)==0 ) : echo "" ;else: foreach($category_price_grades as $k=>$price_grades): if($price_grades[1] != 0): ?>
							<li><a href="<?php echo __URL('SHOP_MAIN/goods/goodslist?'.$url_parameter.'&min_p_jg='.$price_grades[0].'&max_p_jg='.$price_grades[1].$attr_url); ?>"><?php echo $price_grades[0]; ?>&nbsp;-&nbsp;<?php echo $price_grades[1]; ?></a></li>
						<?php endif; endforeach; endif; else: echo "" ;endif; ?>
				</ul>
			</dd>
			<!-- 更多 -->
			<div class="moreAndmulti">
				<span class="select-more"  is-show="0" data-height="37" onclick="showMore(this);">
					<i class="fa fa-chevron-down"></i><?php echo lang('goods_more'); ?>
				</span>
			</div>
		</dl>
	<?php endif; ?>
	<!--价格筛选 end-->
</div>
<!-- 更多筛选条件 -->
<?php if($curr > 4): ?>
<div class="more-screen-condition">
	<a href="javascript:;" class="more-option" is-show="0">更多选项<i class="fa fa-angle-double-down" style="font-size: 20px;margin-top: -5px;"></i></a>
</div>
<?php endif; ?>
<div class="blank15"></div>

<input type="hidden" id="hidden_category_id" value="<?php echo $category_id; ?>"/>
<input type="hidden" id="hidden_brand_id" value="<?php echo $brand_id; ?>"/>
<input type="hidden" id="hidden_brand_name" value="<?php echo $brand_name; ?>"/>
<input type="hidden" id="hidden_min_price" value="<?php echo $min_price; ?>"/>
<input type="hidden" id="hidden_max_price" value="<?php echo $max_price; ?>"/>
<input type="hidden" id="hidden_url_parameter" value="<?php echo $url_parameter; ?>"/>
	
	<?php endif; ?>
	<div class="content-wrap category-wrap clearfix">
	<!--功能：左侧新品推荐、销售排行榜-->
<!--创建人：李志伟-->
<!--时间：2017年2月7日11:57:58-->
<div class="aside">
	<span class="slide-aside"></span>
	<div class="aside-inner">
		<?php if(1 != '0'): if(count($goods_new_list)): ?>
		<!--新品推荐-->
		<div class="aside-con">
			<h2 class="aside-tit"><?php echo lang('goods_new_arrivals'); ?></h2>
			<ul class="aside-list">
			<?php if(is_array($goods_new_list) || $goods_new_list instanceof \think\Collection || $goods_new_list instanceof \think\Paginator): if( count($goods_new_list)==0 ) : echo "" ;else: foreach($goods_new_list as $k=>$goodsinfo): ?>
				<li>
					<?php if($goodsinfo['stock']==0): ?>
					<!--售罄显示-->
<!-- 					<div class="sell-out"></div> -->
					<?php endif; ?>
					<div class="p-img">
						<a target="_blank" title="<?php echo $goodsinfo['goods_name']; ?>" href="<?php echo __URL('SHOP_MAIN/goods/goodsinfo','goodsid='.$goodsinfo['goods_id']); ?>">
							<img src="<?php echo __IMG($default_goods_img); ?>" class="lazy_load" data-original="<?php echo __IMG($goodsinfo['pic_cover_mid']); ?>" >
						</a>
					</div>
					<div class="p-name">
						<a target="_blank" title="<?php echo $goodsinfo['goods_name']; ?>" href="<?php echo __URL('SHOP_MAIN/goods/goodsinfo','goodsid='.$goodsinfo['goods_id']); ?>"><?php echo $goodsinfo['goods_name']; ?></a>
					</div>
					<div class="p-price">
						<span class="sale-price money-color">￥<?php echo $goodsinfo['promotion_price']; ?></span>
						<span class="sale-num"><?php echo lang('goods_sales_volume'); ?>：<?php echo $goodsinfo['sales']; ?></span>
					</div>
				</li>
			<?php endforeach; endif; else: echo "" ;endif; ?>
			</ul>
		</div>
		<?php endif; endif; if(1 != 0): if(count($goods_sales_list)): ?>
		<!--销量排行榜-->
		<div class="aside-con">
			<h2 class="aside-tit"><?php echo lang('goods_sales_charts'); ?></h2>
			<ul class="aside-list">
			<?php if(is_array($goods_sales_list) || $goods_sales_list instanceof \think\Collection || $goods_sales_list instanceof \think\Paginator): if( count($goods_sales_list)==0 ) : echo "" ;else: foreach($goods_sales_list as $k=>$goodsinfo): ?>
				<li>
					<?php if($goodsinfo['stock']==0): ?>
					<!--售罄显示-->
<!-- 					<div class="sell-out"></div> -->
					<?php endif; ?>
					<div class="p-img">
						<a target="_blank" title="<?php echo $goodsinfo['goods_name']; ?>" href="<?php echo __URL('SHOP_MAIN/goods/goodsinfo','goodsid='.$goodsinfo['goods_id']); ?>">
							<img src="<?php echo __IMG($default_goods_img); ?>" class="lazy_load" data-original="<?php echo __IMG($goodsinfo['pic_cover_mid']); ?>" >
						</a>
					</div>
					<div class="p-name">
						<a target="_blank" title="<?php echo $goodsinfo['goods_name']; ?>" href="<?php echo __URL('SHOP_MAIN/goods/goodsinfo','goodsid='.$goodsinfo['goods_id']); ?>"><?php echo $goodsinfo['goods_name']; ?></a>
					</div>
					<div class="p-price">
						<span class="sale-price money-color">￥<?php echo $goodsinfo['promotion_price']; ?></span>
						<span class="sale-num"><?php echo lang('goods_sales_volume'); ?>：<?php echo $goodsinfo['sales']; ?></span>
					</div>
				</li>
			<?php endforeach; endif; else: echo "" ;endif; ?>
			</ul>
		</div>
		<?php endif; endif; ?>
	</div>
</div>
	<!--is_new_recommend新品推荐显示 is_sale_ranking销售排行显示-->
	<!--功能：商品列表可块级显示也可条状显示-->
<!--创建人：李志伟-->
<!--时间：2017年2月7日11:57:58-->
<script src="__TEMP__/<?php echo $style; ?>/public/js/goods/controlGoods.js"></script>
<script src="__TEMP__/<?php echo $style; ?>/public/js/ns_collections.js" type="text/javascript"></script>
<!-- 地址选择 _start -->
<script type="text/javascript" src="__TEMP__/<?php echo $style; ?>/public/js/ns_select_region.js"></script>
<input type="hidden" id="hidden_province" value="<?php echo $user_location['province']; ?>" />
<input type="hidden" id="hidden_city" value="<?php echo $user_location['city']; ?>" />
<div class="main">
	<div id="filter">
		<!--排序-->
		<form method="get" name="listform" action="" style="position: relative;">
			<div class="fore1">
				<dl class="order">
				<!-- 默认 -->
				<?php if($order==''): ?><dd class="first curr"><?php else: ?><dd><?php endif; ?>
					<a href="<?php echo __URL('SHOP_MAIN/goods/goodslist',$url_parameter_not_order); ?>"><?php echo lang('goods_comprehensive'); ?></a>
					</dd>
				<!-- 销量 -->
				<?php if($order=='sales'): ?>
					<dd class="curr">
					<?php if($sort=='asc'): ?>
						<a href="<?php echo __URL('SHOP_MAIN/goods/goodslist?'.$url_parameter_not_order.'&obyzd=sales&sort=desc'.$attr_url); ?>"><?php echo lang('goods_sales_volume'); ?>
						<b style="background-position:-23px -169px"></b>
					<?php else: ?>
						<a href="<?php echo __URL('SHOP_MAIN/goods/goodslist?'.$url_parameter_not_order.'&obyzd=sales&sort=asc'.$attr_url); ?>"><?php echo lang('goods_sales_volume'); ?>
						<b class="icon-order-DESCending"></b>
					<?php endif; else: ?>
					<dd>
						<a href="<?php echo __URL('SHOP_MAIN/goods/goodslist?'.$url_parameter_not_order.'&obyzd=sales&sort=desc'.$attr_url); ?>"><?php echo lang('goods_sales_volume'); ?>
						<b class="icon-order-DESCending"></b>
				<?php endif; ?>
						</a>
					</dd>
					
				<!-- 新品 -->
				<?php if($order=='is_new'): ?>
					<dd class="curr">
						<?php if($sort=='asc'): ?>
							<a href="<?php echo __URL('SHOP_MAIN/goods/goodslist?'.$url_parameter_not_order.'&obyzd=is_new&sort=desc'.$attr_url); ?>"><?php echo lang('goods_new'); ?>
							<b style="background-position:-23px -169px"></b>
						<?php else: ?>
							<a href="<?php echo __URL('SHOP_MAIN/goods/goodslist?'.$url_parameter_not_order.'&obyzd=is_new&sort=asc'.$attr_url); ?>"><?php echo lang('goods_new'); ?>
							<b class="icon-order-DESCending"></b>
						<?php endif; else: ?>
					<dd>
						<a href="<?php echo __URL('SHOP_MAIN/goods/goodslist?'.$url_parameter_not_order.'&obyzd=is_new&sort=desc'.$attr_url); ?>"><?php echo lang('goods_new'); ?>
							<b class="icon-order-DESCending"></b>
				<?php endif; ?>
						</a>
					</dd>
				
				<!-- 价格 -->
				
				<?php if($order=='price'): ?>
					<dd class="curr">
						<?php if($sort=='asc' && $order=='price'): ?>
							<a href="<?php echo __URL('SHOP_MAIN/goods/goodslist?'.$url_parameter_not_order.'&obyzd=price&sort=desc'.$attr_url); ?>"><?php echo lang('goods_price'); ?>
							<b style="background-position:-23px -169px"></b>
							
						<?php else: ?>
							<a href="<?php echo __URL('SHOP_MAIN/goods/goodslist?'.$url_parameter_not_order.'&obyzd=price&sort=asc'.$attr_url); ?>"><?php echo lang('goods_price'); ?>
							<b class="icon-order-DESCending"></b>
						<?php endif; else: ?>
					<dd>
							<a href="<?php echo __URL('SHOP_MAIN/goods/goodslist?'.$url_parameter_not_order.'&obyzd=price&sort=desc'.$attr_url); ?>"><?php echo lang('goods_price'); ?>
							<b class="icon-order-DESCending"></b>
					<?php endif; ?>
						</a>
					</dd>
				</dl>
				<div class="total"><?php echo lang('goods_total'); ?> <span class="color" id="shops_count"><?php echo $total_count; ?></span><?php echo lang('goods_goods'); ?>&nbsp;</div>
				<dl class="order f-right">
					<!-- <dd class="first">
						<a href="javascript:;" style="position: relative;" onmouseout="hideAddress(this)" onmousemove="showAddress(this)">所在地<i class="address_home_down"></i> </a>
					</dd> -->
				</dl> 
			</div>
			 <div class="fore2">
				<div class="filter-btn">
					<span class="distribution"><?php echo lang('goods_delivery_to'); ?></span>
					<div class="region-chooser-container region-chooser" style="z-index: 3">
						<div class="region-chooser-selected">
							<div class="region js-region">
								<font><?php echo $user_location['province']; ?><?php echo $user_location['city']; ?><i></i></font>
							</div>
						</div>
						<div class="region-chooser-box" id="region-chooser-box" style="display: none;">
							<div class="region-chooser-close"></div>
							<div class="region-tabs">
								<div class="region-tab selected" data-region-level="1" style="display: block">
									<?php echo $user_location['province']; ?><i></i>
								</div>
								<div class="region-tab" data-region-level="2" style="display: block">
									<?php echo $user_location['city']; ?><i></i>
								</div>
								<div class="region-tab " data-region-level="3" style="display: block">
									<?php echo lang('goods_select_district_or_county'); ?><i></i>
								</div>
							</div>
							<div class="region-items" data-region-level="1" style="display: block;"></div>
							<div class="region-items" data-region-level="2" style="display: none;"></div>
							<div class="region-items" data-region-level="3" style="display: none;"></div>
						</div>
						<div style="clear: both;"></div>
					</div>
					
					<?php if($shipping_fee !='' && $shipping_fee ==0): ?>
					<a href="<?php echo __URL('SHOP_MAIN/goods/goodslist?'.$url_parameter_not_shipping.$attr_url); ?>" class="filter-tag curr">
					<?php else: ?>
					<a href="<?php echo __URL('SHOP_MAIN/goods/goodslist?'.$url_parameter.'&fee=0'.$attr_url); ?>" class="filter-tag">
					<?php endif; ?>
						<i class="icon"></i><span class="text"><?php echo lang('goods_free_shipping'); ?></span>
					</a>
					
					<?php if($stock !='' && $stock>=0): ?>
					<a href="<?php echo __URL('SHOP_MAIN/goods/goodslist?'.$url_parameter_not_stock.$attr_url); ?>" class="filter-tag curr">
					<?php else: ?>
					<a href="<?php echo __URL('SHOP_MAIN/goods/goodslist?'.$url_parameter.'&jxsyh=0'.$attr_url); ?>" class="filter-tag ">
					<?php endif; ?>
						<i class="icon"></i><span class="text"><?php echo lang('goods_show_only_goods'); ?></span>
					</a>
				</div>
				<div class="filter-mod">
					<!-- 选中样式为a标签添加curr样式 -->
					<div class="nch-sortbar-location"><?php echo lang('goods_location'); ?>：
						<div class="select-layer">
							<div class="holder">
								<em nc_type="area_name">
								<?php if($province_name == ''): ?>
								<?php echo lang('goods_unlimited_area'); else: ?>
								<?php echo $province_name; endif; ?>
								</em>
							</div>
							<div class="selected">
								<a nc_type="area_name">
								<?php if($province_name == ''): ?>
								<?php echo lang('goods_unlimited_area'); else: ?>
								<?php echo $province_name; endif; ?>
								</a>
							</div>
							<i class="direction"></i>
						</div>
					</div>
					<a href="javascript:;"  data-type="1" title="<?php echo lang('list_model'); ?>" class="filter-type filter-type-list js-filter-type">
						<span class="filter-type-icon"></span>
					</a>
					<a href="javascript:;" data-type="0" title="<?php echo lang('big_picture_mode'); ?>" class="filter-type filter-type-grid curr js-filter-type">
						<span class="filter-type-icon"></span>
					</a>
				</div>
			</div>
			<ul class="options">
				<div class="filter-detailc" id="addressDraw">
					<dl class="location-hots">
						<dt><?php echo lang('goods_common_area'); ?></dt>
						<dd><a href="<?php echo __URL('SHOP_MAIN/goods/goodslist?',$url_parameter_not_province_id.'&province_id=1&province_name='.lang('beijing').$attr_url); ?>">北京</a></dd>
						<dd><a href="<?php echo __URL('SHOP_MAIN/goods/goodslist?',$url_parameter_not_province_id.'&province_id=2&province_name='.lang('tianjin').$attr_url); ?>"><?php echo lang('tianjin'); ?></a></dd>
						<dd><a href="<?php echo __URL('SHOP_MAIN/goods/goodslist?',$url_parameter_not_province_id.'&province_id=9&province_name='.lang('shanghai').$attr_url); ?>"><?php echo lang('shanghai'); ?></a></dd>
					</dl>
					<dl class="location-all">
						<dt><?php echo lang('goods_province'); ?></dt>
						<dd>
							<ul>
								<li>
									<p class="lt">A</p>
									<p class="lc"> 
										<span><a href="<?php echo __URL('SHOP_MAIN/goods/goodslist?',$url_parameter_not_province_id.'&province_id=12&province_name='.lang('anhui').$attr_url); ?>"><?php echo lang('anhui'); ?></a></span> 
										<span><a href="<?php echo __URL('SHOP_MAIN/goods/goodslist?',$url_parameter_not_province_id.'&province_id=33&province_name='.lang('aomen').$attr_url); ?>"><?php echo lang('aomen'); ?></a></span> 
									</p>
								</li>
								<li>
									<p class="lt">C</p>
									<p class="lc"> 
										<span><a href="<?php echo __URL('SHOP_MAIN/goods/goodslist?',$url_parameter_not_province_id.'&province_id=22&province_name='.lang('chongqing').$attr_url); ?>"><?php echo lang('chongqing'); ?></a></span> 
									</p>
								</li>
								<li>
									<p class="lt">F</p>
									<p class="lc"> 
										<span><a href="<?php echo __URL('SHOP_MAIN/goods/goodslist?',$url_parameter_not_province_id.'&province_id=13&province_name='.lang('fujian').$attr_url); ?>"><?php echo lang('fujian'); ?></a></span> 
									</p>
								</li>
								<li>
									<p class="lt">G</p>
									<p class="lc"> 
										<span><a href="<?php echo __URL('SHOP_MAIN/goods/goodslist?',$url_parameter_not_province_id.'&province_id=19&province_name='.lang('guangdong').$attr_url); ?>"><?php echo lang('guangdong'); ?></a></span> 
										<span><a href="<?php echo __URL('SHOP_MAIN/goods/goodslist?',$url_parameter_not_province_id.'&province_id=28&province_name='.lang('gansu').$attr_url); ?>"><?php echo lang('gansu'); ?></a></span> 
										<span><a href="<?php echo __URL('SHOP_MAIN/goods/goodslist?',$url_parameter_not_province_id.'&province_id=20&province_name='.lang('guangxi').$attr_url); ?>"><?php echo lang('guangxi'); ?></a></span> 
										<span><a href=""><?php echo lang('guizhou'); ?></a></span> 
									</p>
								</li>
							</ul>
							<ul>
								<li>
									<p class="lt">H</p>
									<p class="lc"> 
										<span><a href="<?php echo __URL('SHOP_MAIN/goods/goodslist?',$url_parameter_not_province_id.'&province_id=21&province_name='.lang('hainan').$attr_url); ?>"><?php echo lang('hainan'); ?></a></span> 
										<span><a href="<?php echo __URL('SHOP_MAIN/goods/goodslist?',$url_parameter_not_province_id.'&province_id=3&province_name='.lang('hebei').$attr_url); ?>"><?php echo lang('hebei'); ?></a></span> 
										<span><a href="<?php echo __URL('SHOP_MAIN/goods/goodslist?',$url_parameter_not_province_id.'&province_id=16&province_name='.lang('henan').$attr_url); ?>"><?php echo lang('henan'); ?></a></span> 
										<span><a href="<?php echo __URL('SHOP_MAIN/goods/goodslist?',$url_parameter_not_province_id.'&province_id=8&province_name='.lang('heilongjiang').$attr_url); ?>"><?php echo lang('heilongjiang'); ?></a></span> 
										<span><a href="<?php echo __URL('SHOP_MAIN/goods/goodslist?',$url_parameter_not_province_id.'&province_id=17&province_name='.lang('hebei').$attr_url); ?>"><?php echo lang('hebei'); ?></a></span> 
										<span><a href="<?php echo __URL('SHOP_MAIN/goods/goodslist?',$url_parameter_not_province_id.'&province_id=18&province_name='.lang('hunan').$attr_url); ?>"><?php echo lang('hunan'); ?></a></span> 
									</p>
								</li>
								<li>
									<p class="lt">J</p>
									<p class="lc"> 
										<span><a href="<?php echo __URL('SHOP_MAIN/goods/goodslist?',$url_parameter_not_province_id.'&province_id=10&province_name='.lang('jiangsu').$attr_url); ?>"><?php echo lang('jiangsu'); ?></a></span> 
										<span><a href="<?php echo __URL('SHOP_MAIN/goods/goodslist?',$url_parameter_not_province_id.'&province_id=14&province_name='.lang('jiangxi').$attr_url); ?>"><?php echo lang('jiangxi'); ?></a></span> 
										<span><a href="<?php echo __URL('SHOP_MAIN/goods/goodslist?',$url_parameter_not_province_id.'&province_id=7&province_name='.lang('jilin').$attr_url); ?>"><?php echo lang('jilin'); ?></a></span> 
									</p>
								</li>
							</ul>
							<ul>
								<li>
									<p class="lt">N</p>
									<p class="lc"> 
										<span><a href="<?php echo __URL('SHOP_MAIN/goods/goodslist?',$url_parameter_not_province_id.'&province_id=6&province_name='.lang('liaoning').$attr_url); ?>"><?php echo lang('liaoning'); ?></a></span> 
										<span><a href="<?php echo __URL('SHOP_MAIN/goods/goodslist?',$url_parameter_not_province_id.'&province_id=5&province_name='.lang('neimenggu').$attr_url); ?>"><?php echo lang('neimenggu'); ?></a></span> 
										<span><a href="<?php echo __URL('SHOP_MAIN/goods/goodslist?',$url_parameter_not_province_id.'&province_id=30&province_name='.lang('ningxia').$attr_url); ?>"><?php echo lang('ningxia'); ?></a></span> 
									</p>
								</li>
								<li>
									<p class="lt">Q</p>
									<p class="lc"><span><a href="<?php echo __URL('SHOP_MAIN/goods/goodslist?',$url_parameter_not_province_id.'&province_id=29&province_name='.lang('qinghai').$attr_url); ?>"><?php echo lang('qinghai'); ?></a></span> 
									</p>
								</li>
								<li>
									<p class="lt">S</p>
									<p class="lc"> 
										<span><a href="<?php echo __URL('SHOP_MAIN/goods/goodslist?',$url_parameter_not_province_id.'&province_id=15&province_name='.lang('shandong').$attr_url); ?>"><?php echo lang('shandong'); ?></a></span> 
										<span><a href="<?php echo __URL('SHOP_MAIN/goods/goodslist?',$url_parameter_not_province_id.'&province_id=4&province_name='.lang('shanxi').$attr_url); ?>"><?php echo lang('shanxi'); ?></a></span> 
										<span><a href="<?php echo __URL('SHOP_MAIN/goods/goodslist?',$url_parameter_not_province_id.'&province_id=27&province_name='.lang('shan_xi').$attr_url); ?>"><?php echo lang('shan_xi'); ?></a></span> 
										<span><a href="<?php echo __URL('SHOP_MAIN/goods/goodslist?',$url_parameter_not_province_id.'&province_id=23&province_name='.lang('sichuan').$attr_url); ?>"><?php echo lang('sichuan'); ?></a></span> 
									</p>
								</li>
							</ul>
							<ul>
								<li>
									<p class="lt">T</p>
									<p class="lc"> 
										<span><a href="<?php echo __URL('SHOP_MAIN/goods/goodslist?',$url_parameter_not_province_id.'&province_id=34&province_name='.lang('taiwan').$attr_url); ?>"><?php echo lang('taiwan'); ?></a></span> 
									</p>
								</li>
								<li>
									<p class="lt">X</p>
									<p class="lc"> 
										<span><a href="<?php echo __URL('SHOP_MAIN/goods/goodslist?',$url_parameter_not_province_id.'&province_id=26&province_name='.lang('xizang').$attr_url); ?>"><?php echo lang('xizang'); ?></a></span> 
										<span><a href="<?php echo __URL('SHOP_MAIN/goods/goodslist?',$url_parameter_not_province_id.'&province_id=31&province_name='.lang('xinjiang').$attr_url); ?>"><?php echo lang('xinjiang'); ?></a></span> 
										<span><a href=""><?php echo lang('hongkong'); ?></a></span> 
									</p>
								</li>
								<li>
									<p class="lt">Y</p>
									<p class="lc"> 
										<span><a href="<?php echo __URL('SHOP_MAIN/goods/goodslist?',$url_parameter_not_province_id.'&province_id=25&province_name='.lang('yunnan').$attr_url); ?>"><?php echo lang('yunnan'); ?></a></span> 
									</p>
								</li>
								<li>
									<p class="lt">Z</p>
									<p class="lc"> 
										<span><a href="<?php echo __URL('SHOP_MAIN/goods/goodslist?',$url_parameter_not_province_id.'&province_id=11&province_name='.lang('zhejiang').$attr_url); ?>"><?php echo lang('zhejiang'); ?></a></span> 
									</p>
								</li>
							</ul>
						</dd>
					</dl>
					<p class="oreder-default"><a href="<?php echo __URL('SHOP_MAIN/goods/goodslist?',$url_parameter_not_province_id.$attr_url); ?>"><?php echo lang('goods_unlimited_area'); ?></a></p>
				</div>
			</ul>
		</form>
	</div>
	<!--主体商品内容展示-->
	<form name="compareForm" action="" method="post" onsubmit="" id="table_list">
		<div class="goodsList js-list-type" style="display: none;">
		<!-- JS加载商品列表数据【列表模式】 -->
		<?php if(is_array($goods_list['data']) || $goods_list['data'] instanceof \think\Collection || $goods_list['data'] instanceof \think\Paginator): if( count($goods_list['data'])==0 ) : echo "" ;else: foreach($goods_list['data'] as $key=>$goods): ?> 
			<ul class="clearfix">
				<li class="thumb">
					<a href="<?php echo __URL('SHOP_MAIN/goods/goodsinfo','goodsid='.$goods['goods_id']); ?>" target="_blank" title="<?php echo $goods['goods_name']; ?>">
						<img src="<?php echo __IMG($default_goods_img); ?>" data-original="<?php echo __IMG($goods['pic_cover_mid']); ?>" class="pic_img_206 lazy_load" style="display: inline;">
					</a>
				</li>
				<li class="goodsName">
					<a href="<?php echo __URL('SHOP_MAIN/goods/goodsinfo','goodsid='.$goods['goods_id']); ?>" target="_blank" title="<?php echo $goods['goods_name']; ?>"><?php echo $goods['goods_name']; ?></a>
				</li>
				<li class="list_price"><?php echo lang('goods_market_value'); ?>： <font class="market">￥<?php echo $goods['market_price']; ?></font><br> <?php echo lang('goods_shop_price'); ?>： <font class="shop"><?php echo $goods['display_price']; ?></font> <br></li>
				<li class="action">
					<a href="javascript:;" class="action-btn collet-btn  curr" onclick="collectionGoods(<?php echo $goods['goods_id']; ?>,'goods','<?php echo $goods['goods_name']; ?>',this,true)"> 
					<?php if($goods['is_favorite']>0): ?><?php echo lang('goods_collected'); else: ?>
					<?php echo lang('goods_collection'); endif; ?>
					</a>
					<?php if(in_array(($goods['point_exchange_type']), explode(',',"0,2"))): if($goods['goods_type'] == 1): ?>
						<!-- 实物商品 -->
							<!-- 是否支持预售 -->
							<?php if($goods['is_open_presell'] == 0): if($goods['stock'] != '0'): ?>
									<a href="javascript:ShowGoodsAttribute(<?php echo $goods['goods_id']; ?>,'<?php echo $goods['goods_name']; ?>',<?php echo $goods['pic_id']; ?>,this,<?php if($goods['max_buy']==0): ?><?php echo $goods['stock']; else: ?><?php echo $goods['max_buy']; endif; ?>,<?php echo $goods['state']; ?>);" class="action-btn addcart-btn add-cart"><?php echo lang('goods_add_cart'); ?></a>
								<?php else: ?>
									<a href="javascript:;" class="action-btn addcart-btn add-cart" style="background: #bbb;"><?php echo lang('goods_add_cart'); ?></a>
								<?php endif; else: ?>
								<a href="<?php echo __URL('SHOP_MAIN/goods/goodsinfo','goodsid='.$goods['goods_id']); ?>" target="_blank" class="action-btn addcart-btn add-cart" title="<?php echo lang('view_details'); ?>"><?php echo lang('view_details'); ?></a>
							<?php endif; else: ?>
							<!-- 虚拟商品，没有加入购物车 -->
							<a href="<?php echo __URL('SHOP_MAIN/goods/goodsinfo','goodsid='.$goods['goods_id']); ?>" target="_blank" class="action-btn addcart-btn add-cart" title="<?php echo lang('view_details'); ?>"><?php echo lang('view_details'); ?></a>
						<?php endif; else: ?>
						<a href="<?php echo __URL('SHOP_MAIN/goods/goodsInfoPointExchange','goodsid='.$goods['goods_id']); ?>" target="_blank" class="action-btn addcart-btn add-cart" title="<?php echo lang('goods_exchange'); ?>"><?php echo lang('goods_exchange'); ?></a>
					<?php endif; ?>
				</li>
			</ul>
		<?php endforeach; endif; else: echo "" ;endif; ?>
		</div>
		<ul class="list-grid clearfix js-list-grid">
			<?php if(is_array($goods_list['data']) || $goods_list['data'] instanceof \think\Collection || $goods_list['data'] instanceof \think\Paginator): if( count($goods_list['data'])==0 ) : echo "" ;else: foreach($goods_list['data'] as $k=>$goods): ?>
			<li class="item <?php if($k != 0 && ($k+1)%4==0): ?>last<?php endif; ?>">
				<div class="item-con">
					<?php if($goods['is_hot'] == 1): ?>
						<img src="__TEMP__/<?php echo $style; ?>/public/images/hot.png" alt="" class="recommend">
					<?php endif; if($goods['is_recommend'] == 1): ?>
						<img src="__TEMP__/<?php echo $style; ?>/public/images/recommend.png" alt="" class="recommend">
					<?php endif; if($goods['is_new'] == 1): ?>
						<img src="__TEMP__/<?php echo $style; ?>/public/images/new.png" alt="" class="recommend">
					<?php endif; ?>
					<div class="item-pic">
						<a href="<?php echo __URL('SHOP_MAIN/goods/goodsinfo','goodsid='.$goods['goods_id']); ?>" title="<?php echo $goods['goods_name']; ?>" target="_blank">
							<img src="<?php echo __IMG($default_goods_img); ?>" class="lazy_load" data-original="<?php echo __IMG($goods['pic_cover_mid']); ?>">
						</a>
					</div>
					<div class="item-info">
						<div class="item-price"><em class="sale-price money-color"><?php echo $goods['display_price']; ?></em></div>
						<div class="item-name"><a href="<?php echo __URL('SHOP_MAIN/goods/goodsinfo','goodsid='.$goods['goods_id']); ?>" target="_blank" title="<?php echo $goods['goods_name']; ?>"><?php echo $goods['goods_name']; ?></a></div>
						<div class="item-con-info">
							<div class="fr" style="float: left;margin-right: 5px;">
								<div class="item-add-cart">
									<?php if(in_array(($goods['point_exchange_type']), explode(',',"0,2"))): if($goods['goods_type'] == 1): ?>
											<!-- 实物商品 -->
											<?php if($goods['is_open_presell'] == 0): if($goods['stock'] != '0'): ?>
													<a href="javascript:ShowGoodsAttribute(<?php echo $goods['goods_id']; ?>,'<?php echo $goods['goods_name']; ?>',<?php echo $goods['pic_id']; ?>,this,<?php if($goods['max_buy']==0): ?><?php echo $goods['stock']; else: ?><?php echo $goods['max_buy']; endif; ?>,<?php echo $goods['state']; ?>);" class="add-cart" title="<?php echo lang('goods_add_cart'); ?>"><i class="icon-cart"></i><?php echo lang('goods_add_cart'); ?></a>
												<?php else: ?>
													<a href="javascript:;" class="add-cart" title="<?php echo lang('goods_add_cart'); ?>" style="background: #bbb;"><i class="icon-cart"></i><?php echo lang('goods_add_cart'); ?></a>
												<?php endif; else: ?>
												<a href="<?php echo __URL('SHOP_MAIN/goods/goodsinfo','goodsid='.$goods['goods_id']); ?>" target="_blank" class="add-cart" title="<?php echo lang('view_details'); ?>"><?php echo lang('view_details'); ?></a>
											<?php endif; else: ?>
											<!-- 虚拟商品，没有加入购物车 -->
											<a href="<?php echo __URL('SHOP_MAIN/goods/goodsinfo','goodsid='.$goods['goods_id']); ?>" target="_blank" class="add-cart" title="<?php echo lang('view_details'); ?>"><?php echo lang('view_details'); ?></a>
										<?php endif; else: ?>
										<a href="<?php echo __URL('SHOP_MAIN/goods/goodsInfoPointExchange','goodsid='.$goods['goods_id']); ?>" target="_blank" class="add-cart" title="<?php echo lang('goods_exchange'); ?>"><?php echo lang('goods_exchange'); ?></a>
									<?php endif; ?>
								</div>
							</div>
							<div class="fl">
								<div class="item-operate <?php if($goods['is_favorite']>0): ?>is_favorite<?php endif; ?>">
										<a href="javascript:;" class="operate-btn collet-btn  goods-collect" onclick="collectionGoods(<?php echo $goods['goods_id']; ?>,'goods','<?php echo $goods['goods_name']; ?>',this,false)">
										<i <?php if($goods['is_favorite']>0): ?>style="background-position:-107px -11px;"<?php endif; ?> data-log-id="<?php echo $goods['is_favorite']; ?>"></i>
										<span> <?php if($goods['is_favorite']>0): ?><?php echo lang('goods_collected'); else: ?><?php echo lang('goods_collection'); endif; ?>
					 					</span>
									</a>
								</div>
							</div>
							<?php if($custom_service['value']['service_addr'] != ''): ?>
							<a href="<?php echo $custom_service['value']['service_addr']; ?>" title="<?php echo lang('contact_customer_service'); ?>" target="_blank" class="customerService">
								<i class="kefu"></i>
							</a>
							<?php endif; ?>
						</div>
					</div>
				</div>
			</li>
			<?php endforeach; endif; else: echo "" ;endif; ?>
		<!-- JS加载商品列表数据【大图模式】 -->
		</ul>
		<?php if($total_count==0): ?>
		<div class="tip-box">
			<i class="tip-icon"></i>
			<div class="tip-text">Sorry！<?php echo lang('goods_no_goods_you_want'); ?>……</div>
		</div>
		<?php endif; ?>
		
		<script src="__TEMP__/<?php echo $style; ?>/public/js/goods/popupGoodsSkuAttribute.js" type="text/javascript"></script>
<style>
#mask{display: none; position: fixed; z-index: 9999; width: 1903px; height: 1097px; top: 0px; left: 0px; opacity: 0.15; background: rgb(0, 0, 0);}
</style>
<div id="speDiv" style="display: none;">
	<div class="pop-header">
		<span><?php echo lang('goods_select_commodity_attribute'); ?></span> <a href="javascript:closeBuy()" title="<?php echo lang('goods_close'); ?>" class="spe-close"></a>
	</div>
	<div class="attr-list js-sku-list" style="margin: 0;"><!-- ajax 加载sku属性--></div>
	<div class="spe-btn">
		<a href="javascript:addToCart()" class="sure-btn"><?php echo lang('goods_add_cart'); ?></a>
		<a href="javascript:closeBuy()" class="cancel-btn"><?php echo lang('goods_cancel'); ?></a>
	</div>
	<input type="hidden" id="hidden_goodsid" />
	<input type="hidden" id="hidden_goods_name" />
	<input type="hidden" id="hidden_skuid" />
	<input type="hidden" id="hidden_skuname" />
	<input type="hidden" id="hidden_sku_price" />
	<input type="hidden" id="hidden_default_img_id" />
	<input type="hidden" id="hidden_max_buy" />
	<div id="sku_list"></div>
</div>
<div id="mask"></div>
		<!--分页-->
		<div class="js-show-page">
		<?php if($total_count != 0): ?>
<div id="pagination" class="page" >
	<div class="page-wrap fr">
		<div class="total"><?php echo lang('goods_total'); ?><span id="totalcount"><?php echo $total_count; ?></span><?php echo lang('strip'); ?></div>
	</div>
	<div class="page-num fr">
		<?php if($page == 1): ?>
			<span id="home_page"><a href="javascript:;" class="num prev disabled" data-go-page="1" title="<?php echo lang('home_page'); ?>" ><?php echo lang('home_page'); ?></a></span>
			<span id="pre_page"><a href="javascript:;" class="num prev disabled " title="<?php echo lang('goods_previous_page'); ?>" ><?php echo lang('goods_previous_page'); ?></a></span>
		<?php else: ?>
			<span id="home_page"><a href="<?php echo __URL('SHOP_MAIN/'.$path_info.'?page=1'.$query_string); ?>"  class="num prev" data-go-page="1" title="<?php echo lang('home_page'); ?>" ><?php echo lang('home_page'); ?></a></span>
			<span id="pre_page"><a href="<?php echo __URL('SHOP_MAIN/'.$path_info.'?page='.($page-1).$query_string); ?>"  class="num prev " title="goods_previous_page" ><?php echo lang('goods_previous_page'); ?></a></span>
		<?php endif; ?>
		<div id="page_list" style="float: left;<?php echo $path_info; ?>">
			<!-- 分页页码显示计算 -->
			
			<!-- 总页数小于总页码时就都显示 -->
			<?php if($page_count <= $page_num): $__FOR_START_26140__=1;$__FOR_END_26140__=$page_count+1;for($i=$__FOR_START_26140__;$i < $__FOR_END_26140__;$i+=1){ if($i == $page): ?>
						<span class="num curr"><a href="javascript:;" data-cur-page="<?php echo $i; ?>"><?php echo $i; ?></a></span>
					<?php else: ?>
						<span class="num"><a href="<?php echo __URL('SHOP_MAIN/'.$path_info.'?page='.$i.$query_string); ?>" data-cur-page="<?php echo $i; ?>"><?php echo $i; ?></a></span>
					<?php endif; } ?>
			<!-- 当前页小于页码的页码的平均两面的值时显示 -->
			<?php elseif($page <= ($page_num-1)/2): $__FOR_START_9103__=1;$__FOR_END_9103__=$page_num+1;for($i=$__FOR_START_9103__;$i < $__FOR_END_9103__;$i+=1){ if($i == $page): ?>
						<span class="num curr"><a href="javascript:;" data-cur-page="<?php echo $i; ?>"><?php echo $i; ?></a></span>
					<?php else: ?>
						<span class="num"><a href="<?php echo __URL('SHOP_MAIN/'.$path_info.'?page='.$i.$query_string); ?>" data-cur-page="<?php echo $i; ?>"><?php echo $i; ?></a></span>
					<?php endif; } ?>
			<!-- 如果总页数等于当前页 或者 总页数小于当前页加上页码总数平均值显示 -->
			<?php elseif($page_count == $page or $page_count <= $page+($page_num-1)/2): $__FOR_START_29422__=$page_count-$page_num+1;$__FOR_END_29422__=$page_count+1;for($i=$__FOR_START_29422__;$i < $__FOR_END_29422__;$i+=1){ if($i == $page): ?>
						<span class="num curr"><a href="javascript:;" data-cur-page="<?php echo $i; ?>"><?php echo $i; ?></a></span>
					<?php else: ?>
						<span class="num"><a href="<?php echo __URL('SHOP_MAIN/'.$path_info.'?page='.$i.$query_string); ?>" data-cur-page="<?php echo $i; ?>"><?php echo $i; ?></a></span>
					<?php endif; } ?>
			<!-- 否则就正常显示 -->
			<?php else: $__FOR_START_30825__=$page-($page_num-1)/2;$__FOR_END_30825__=$page+($page_num-1)/2+1;for($i=$__FOR_START_30825__;$i < $__FOR_END_30825__;$i+=1){ if($i == $page): ?>
						<span class="num curr"><a href="javascript:;" data-cur-page="<?php echo $i; ?>"><?php echo $i; ?></a></span>
					<?php else: ?>
						<span class="num"><a href="<?php echo __URL('SHOP_MAIN/'.$path_info.'?page='.$i.$query_string); ?>" data-cur-page="<?php echo $i; ?>"><?php echo $i; ?></a></span>
					<?php endif; } endif; ?>
			
		</div>
		
		<?php if($page != $page_count): ?>
			<span id="next_page"><a href="SHOP_MAIN/<?php echo $path_info; ?>?page=<?php echo $page+1; ?><?php echo $query_string; ?>" class="num next" title="<?php echo lang('no_article'); ?>" ><?php echo lang('goods_next_page'); ?></a></span>
			<span id="last_page"><a href="SHOP_MAIN/<?php echo $path_info; ?>?page=<?php echo $page_count; ?><?php echo $query_string; ?>" class="num next" title="<?php echo lang('no_article'); ?>" ><?php echo lang('shadowe'); ?></a></span>
		<?php else: ?>
			<span id="next_page"><a href="javascript:;" class="num next disabled" title="<?php echo lang('goods_next_page'); ?>" ><?php echo lang('goods_next_page'); ?></a></span>
			<span id="last_page"><a href="javascript:;" class="num next disabled" title="<?php echo lang('shadowe'); ?>" ><?php echo lang('shadowe'); ?></a></span>
		<?php endif; ?>
		
	</div>
</div>
<?php endif; ?>
		</div>
	</form>
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
var attr_item = "";
var spec_item = "";
$(function() {
	if('<?php echo $attr_str; ?>' != ""){
		attr_item = '<?php echo $attr_str; ?>';
	}
	if('<?php echo $spec_str; ?>' != ""){
		spec_item = '<?php echo $spec_str; ?>'
	}
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