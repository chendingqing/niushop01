<?php if (!defined('THINK_PATH')) exit(); /*a:8:{s:49:"template/adminblue\Order\customerServiceList.html";i:1525258792;s:28:"template/adminblue\base.html";i:1526106064;s:45:"template/adminblue\controlCommonVariable.html";i:1522486340;s:32:"template/adminblue\urlModel.html";i:1510819828;s:34:"template/adminblue\pageCommon.html";i:1525347460;s:34:"template/adminblue\openDialog.html";i:1522669943;s:49:"template/adminblue\Order\orderCustomerAction.html";i:1522665946;s:46:"template/adminblue\Order\orderPrintAction.html";i:1525258792;}*/ ?>
<!DOCTYPE html>
<html>
	<head>
	<meta name="renderer" content="webkit" />
	<meta http-equiv="X-UA-COMPATIBLE" content="IE=edge,chrome=1"/>
	<?php if($frist_menu['module_name']=='首页'): ?>
	<title><?php echo $title_name; ?> - 商家管理</title>
	<?php else: ?>
		<title><?php echo $title_name; ?> - <?php echo $frist_menu['module_name']; ?>管理</title>
	<?php endif; ?>
	<link rel="shortcut icon" type="image/x-icon" href="ADMIN_IMG/admin_icon.ico" media="screen"/>
	<link rel="stylesheet" type="text/css" href="__STATIC__/blue/bootstrap/css/bootstrap.css" />
	<link rel="stylesheet" type="text/css" href="__STATIC__/blue/css/ns_blue_common.css" />
	<link rel="stylesheet" type="text/css" href="__STATIC__/font-awesome/css/font-awesome.min.css" />
	<link rel="stylesheet" type="text/css" href="__STATIC__/simple-switch/css/simple.switch.three.css" />
	<link rel="stylesheet" type="text/css" href="ADMIN_CSS/selectric.css" />
	<style>
	.Switch_FlatRadius.On span.switch-open{background-color: #126AE4;border-color: #126AE4;}
	#copyright_meta a{color:#333;}
	.fa-wechat-applet:before{content:'';display:inline-block;width:20px;height:20px;background:#FFF url(__STATIC__/images/wechat_applet.png) no-repeat;background-size: 100%;}
	</style>
	<script src="__STATIC__/js/jquery-1.8.1.min.js"></script>
	<script src="__STATIC__/blue/bootstrap/js/bootstrap.js"></script>
	<script src="__STATIC__/bootstrap/js/bootstrapSwitch.js"></script>
	<script src="__STATIC__/simple-switch/js/simple.switch.js"></script>
	<script src="__STATIC__/js/jquery.unobtrusive-ajax.min.js"></script>
	<script src="__STATIC__/js/common.js"></script>
	<script src="__STATIC__/js/seller.js"></script>
	<script src="__STATIC__/js/load_task.js"></script>
	<script src="__STATIC__/js/load_bottom.js" type="text/javascript"></script>
	<script src="ADMIN_JS/layer/layer.js"></script>
	<script src="ADMIN_JS/jquery-ui.min.js"></script>
	<script src="ADMIN_JS/ns_tool.js"></script>
	<script src="ADMIN_JS/jquery.selectric.js"></script>
	<link rel="stylesheet" type="text/css" href="__STATIC__/blue/css/ns_table_style.css">
	
	<script>
	/**
	 * Niushop商城系统 - 团队十年电商经验汇集巨献!
	 * ========================================================= Copy right
	 * 2015-2025 山西牛酷信息科技有限公司, 保留所有权利。
	 * ---------------------------------------------- 官方网址:
	 * http://www.niushop.com.cn 这不是一个自由软件！您只能在不用于商业目的的前提下对程序代码进行修改和使用。
	 * 任何企业和个人不允许对程序代码以任何形式任何目的再发布。
	 * =========================================================
	 * 
	 * @author : 小学生王永杰 
	 * @date : 2016年12月16日 16:17:13
	 * @version : v1.0.0.0 商品发布中的第二步，编辑商品信息
	 */
	var PLATFORM_NAME = "<?php echo $title_name; ?>";
	var ADMINIMG = "ADMIN_IMG";//后台图片请求路径
	var ADMINMAIN = "ADMIN_MAIN";//后台请求路径
	var SHOPMAIN = "SHOP_MAIN";//PC端请求路径
	var APPMAIN = "APP_MAIN";//手机端请求路径
	var UPLOAD = "__UPLOAD__";//上传文件根目录
	var PAGESIZE = "<?php echo $pagesize; ?>";//分页显示页数
	var ROOT = "__ROOT__";//根目录
	var ADDONS = "__ADDONS__";
	var STATIC = "__STATIC__";
	
	//上传文件路径
	var UPLOADGOODS = 'UPLOAD_GOODS';//存放商品图片
	var UPLOADGOODSSKU = 'UPLOAD_GOODS_SKU';//存放商品SKU
	var UPLOADGOODSBRAND = 'UPLOAD_GOODS_BRAND';//存放商品品牌图
	var UPLOADGOODSGROUP = 'UPLOAD_GOODS_GROUP';////存放商品分组图片
	var UPLOADGOODSCATEGORY = 'UPLOAD_GOODS_CATEGORY';////存放商品分类图片
	var UPLOADCOMMON = 'UPLOAD_COMMON';//存放公共图片、网站logo、独立图片、没有任何关联的图片
	var UPLOADAVATOR = 'UPLOAD_AVATOR';//存放用户头像
	var UPLOADPAY = 'UPLOAD_PAY';//存放支付生成的二维码图片
	var UPLOADADV = 'UPLOAD_ADV';//存放广告位图片
	var UPLOADEXPRESS = 'UPLOAD_EXPRESS';//存放物流图片
	var UPLOADCMS = 'UPLOAD_CMS';//存放文章图片
	var UPLOADVIDEO = 'UPLOAD_VIDEO';//存放视频文件
	var UPLOADGOODSVIDEO = "<?php echo constant('GOODS_VIDEO_PATH'); ?>";//存放商品视频
	var UPLOADFILE = "<?php echo constant('UPLOAD_FILE'); ?>";//存放文件
	var UPLOADWATERMARK = "<?php echo constant('UPLOAD_WATERMARK'); ?>";//存放水印图片
</script>
	
<script type="text/javascript" src="__STATIC__/My97DatePicker/WdatePicker.js"></script>
<link href="__STATIC__/blue/css/order/ns_orderlist.css" rel="stylesheet" type="text/css" />
<style>
.mytable.select td{padding-bottom:0;}
.mytable.select #more_search{display: block;}
.table-class tbody td a {margin-left: 0;}
.to-fixed{position: fixed;width: 85.5%;top: 50px;box-shadow: 0 2px 6px 0 rgba(0,0,0,.3);z-index: 5;}
.mytable td{padding:10px 0;}
.btn-common-white{line-height: 20px;outline: none;background: white}
.ns-main{margin-top: 0;}
</style>

	</head>
<body>
<input type="hidden" id="niushop_rewrite_model" value="<?php echo rewrite_model(); ?>">
<input type="hidden" id="niushop_url_model" value="<?php echo url_model(); ?>">
<input type="hidden" id="niushop_admin_model" value="<?php echo admin_model(); ?>">
<script>
function __URL(url){
	url = url.replace('SHOP_MAIN', '');
	url = url.replace('APP_MAIN', 'wap');
	url = url.replace('ADMIN_MAIN', $("#niushop_admin_model"));
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
		if(url_model==1 || url_model==true){
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

//处理图片路径
function __IMG(img_path){
	var path = "";
	if(img_path != undefined && img_path != ""){
		if(img_path.indexOf("http://") == -1 && img_path.indexOf("https://") == -1){
			path = UPLOAD+"\/"+img_path;
		}else{
			path = img_path;
		}
	}
	return path;
}
</script>
<article class="ns-base-article">

	<header class="ns-base-header">
		<div class="ns-logo" onclick="location.href='<?php echo __URL('ADMIN_MAIN'); ?>';"></div>
		<div class="ns-search">
			<div class="nav-menu js-nav">
				<img src="__STATIC__/blue/img/nav_menu.png" title="导航管理" />
			</div>
			<div class="ns-navigation-management">
				<div class="ns-navigation-title">
					<h4>导航管理</h4>
					<span>x</span>
				</div>
				<div style="height:40px;"></div>
				<?php if(is_array($nav_list) || $nav_list instanceof \think\Collection || $nav_list instanceof \think\Paginator): if( count($nav_list)==0 ) : echo "" ;else: foreach($nav_list as $key=>$nav): ?>
				<dl>
					<dt><?php echo $nav['data']['module_name']; ?></dt>
					<?php if(is_array($nav['sub_menu']) || $nav['sub_menu'] instanceof \think\Collection || $nav['sub_menu'] instanceof \think\Paginator): if( count($nav['sub_menu'])==0 ) : echo "" ;else: foreach($nav['sub_menu'] as $key=>$nav_sub): ?>
					<dd>
						<a href="<?php echo __URL('ADMIN_MAIN/'.$nav_sub['url']); ?>"><?php echo $nav_sub['module_name']; ?></a>
					</dd>
					<?php endforeach; endif; else: echo "" ;endif; ?>
				</dl>
				<?php endforeach; endif; else: echo "" ;endif; ?>
			</div>
			<div class="ns-search-block">
				<i class="fa fa-search" title="搜索"></i>
				<span>搜索</span>
				<div class="mask-layer-search">
					<input type="text" id="search_goods" placeholder="搜索" />
					<a href="javascript:search();"><img src="__STATIC__/blue/img/enter.png"/></a>
				</div>
			</div>
		</div>
		<nav>
			<ul>
				<?php if(is_array($headlist) || $headlist instanceof \think\Collection || $headlist instanceof \think\Paginator): if( count($headlist)==0 ) : echo "" ;else: foreach($headlist as $key=>$per): if(strtoupper($per['module_id']) == $headid): ?>
				<li class="selected" onclick="location.href='<?php echo __URL('ADMIN_MAIN/'.$per['url']); ?>';">
					<span><?php echo $per['module_name']; ?></span>
					<?php if($per['module_id'] == 10000): ?>
						<span class="is-upgrade"></span>
					<?php endif; ?>
				</li>
				
				<?php else: ?>
				<li onclick="location.href='<?php echo __URL('ADMIN_MAIN/'.$per['url']); ?>';">
					<span><?php echo $per['module_name']; ?></span>
					<?php if($per['module_id'] == 10000): ?>
						<span class="is-upgrade"></span>
					<?php endif; ?>
				</li>
				<?php endif; endforeach; endif; else: echo "" ;endif; ?>
			</ul>
		</nav>
		<div class="ns-base-tool">
			<i class="i-home"  title="前台首页"><a href="<?php echo __URL('SHOP_MAIN'); ?>" target="_blank"></a></i>
			<i class="i-close" title="退出登录"><a href="<?php echo __URL('ADMIN_MAIN/login/logout'); ?>"></a></i>
			<i class="ns-vertical-bar"></i>
			<div class="ns-help">
				<div class="logo">
				<?php if($user_headimg != ''): ?>
				<img src="<?php echo __IMG($user_headimg); ?>"/>
				<?php else: ?>
				<img src="__STATIC__/blue/img/user_admin_blue.png" width="30" >
				<?php endif; ?>
				</div>
				<span><?php echo $user_name; ?></span>
				<i class="fa fa-angle-down"></i>
				<ul>
					<li>
						<img src="__STATIC__/blue/img/add_favorites.png" />
						<a href="#edit-password" data-toggle="modal" title="修改密码">修改密码</a>
					</li>
					<li title="清理缓存" onclick="delcache()">
						<img src="__STATIC__/blue/img/clear_the_cache.png"/>
						<a href="javascript:;">清理缓存</a>
					</li>
					<li title="加入收藏" onclick="addFavorite()">
						<img src="__STATIC__/blue/img/add_favorites.png" />
						<a href="javascript:;">加入收藏</a>
					</li>
				</ul>
			</div>
		</div>
	</header>
	
	<aside class="ns-base-aside">
		<div class="ns-main-block">
			
			<h3 style="margin-top:50px;">
				<?php if(is_array($headlist) || $headlist instanceof \think\Collection || $headlist instanceof \think\Paginator): if( count($headlist)==0 ) : echo "" ;else: foreach($headlist as $key=>$per): if(strtoupper($per['module_id']) == $headid): ?>
					<span class="<?php echo $per['module_name']; ?>"><?php echo $per['module_name']; ?></span>
					<i class="fa fa-caret-down"></i>
				<?php endif; endforeach; endif; else: echo "" ;endif; ?>
			</h3>
			
			<nav>
				<ul>
					<?php if(is_array($leftlist) || $leftlist instanceof \think\Collection || $leftlist instanceof \think\Paginator): if( count($leftlist)==0 ) : echo "" ;else: foreach($leftlist as $key=>$leftitem): if(strtoupper($leftitem['module_id']) == $second_menu_id): ?>
					<li class="selected" onclick="location.href='<?php echo __URL('ADMIN_MAIN/'.$leftitem['url']); ?>';" title="<?php echo $leftitem['module_name']; ?>"><?php echo $leftitem['module_name']; ?></li>
					<?php else: ?>
					<li onclick="location.href='<?php echo __URL('ADMIN_MAIN/'.$leftitem['url']); ?>';" title="<?php echo $leftitem['module_name']; ?>"><?php echo $leftitem['module_name']; ?></li>
					<?php endif; endforeach; endif; else: echo "" ;endif; ?>
					<!-- 快捷菜单列表 -->
					<?php if($is_show_shortcut_menu == 1): if(is_array($shortcut_menu_list) || $shortcut_menu_list instanceof \think\Collection || $shortcut_menu_list instanceof \think\Paginator): $i = 0; $__LIST__ = $shortcut_menu_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$menu): $mod = ($i % 2 );++$i;?>
					<li onclick="location.href='<?php echo __URL('ADMIN_MAIN/'.$menu['url']); ?>';" title="<?php echo $menu['module_name']; ?>"><?php echo $menu['module_name']; ?></li>
					<?php endforeach; endif; else: echo "" ;endif; endif; ?>
				</ul>
				<!-- 快捷菜单设置按钮 -->
				<?php if($is_show_shortcut_menu == 1): ?>
				<div class="shortcut-menu" onclick="show_shortcut_menu()">
					<span></span>
					常用功能
				</div>
				<?php endif; ?>
			</nav>
			
			<div style="height:50px;"></div>
			
			<div id="bottom_copyright">
				<footer>
					<img id="copyright_logo"/>
<!-- 					<p> -->
<!-- 						<span id="copyright_desc"></span> -->
<!-- 						<br/> -->
<!-- 						<a id="copyright_companyname" style="color: #333" target="_blank"></a> -->
<!-- 						<br/> -->
<!-- 						<span id="copyright_meta"></span> -->
<!-- 					</p> -->
				</footer>
			</div>
		</div>
	</aside>
	
	<section class="ns-base-section">
		
		
		
		<div style="position:relative;margin:0;">
			<!-- 面包屑导航 -->
			<?php if(!isset($is_index)): ?>
			<div class="breadcrumb-nav">
				<a href="<?php echo __URL('ADMIN_MAIN'); ?>"><?php echo $title_name; ?></a>
				<?php if($frist_menu['module_name'] != ''): ?>
					<i class="fa fa-angle-right"></i>
					<a href="<?php echo __URL('ADMIN_MAIN/'.$frist_menu['url']); ?>"><?php echo $frist_menu['module_name']; ?></a>
				<?php endif; if($secend_menu['module_name'] != ''): ?>
					<i class="fa fa-angle-right"></i>
					<!-- 需要加跳转链接用这个：ADMIN_MAIN/<?php echo $secend_menu['url']; ?> -->
					<a href="javascript:;" style="color:#999;"><?php echo $secend_menu['module_name']; ?></a>
				<?php endif; ?>
			</div>
			<?php endif; ?>
			<!-- 三级导航菜单 -->
			
				<?php if(count($child_menu_list) > 1): ?>
				<nav class="ns-third-menu">
					<ul>
					<?php if(is_array($child_menu_list) || $child_menu_list instanceof \think\Collection || $child_menu_list instanceof \think\Paginator): if( count($child_menu_list)==0 ) : echo "" ;else: foreach($child_menu_list as $k=>$child_menu): if($child_menu['active'] == '1'): ?>
							<li class="selected" onclick="location.href='<?php echo __URL('ADMIN_MAIN/'.$child_menu['url']); ?>';"><?php echo $child_menu['menu_name']; ?></li>
						<?php else: ?>
							<li onclick="location.href='<?php echo __URL('ADMIN_MAIN/'.$child_menu['url']); ?>';"><?php echo $child_menu['menu_name']; ?></li>
						<?php endif; endforeach; endif; else: echo "" ;endif; ?>
					</ul>
				</nav>
				<?php endif; ?>
			
			<div class="right-side-operation">
				<ul>
					
					
<!-- 					<?php if($warm_prompt_is_show == 'show'): ?>style="display:none;"<?php endif; ?> style="display:block;" -->
					<li>
						<a class="js-open-warmp-prompt" href="javascript:;" data-menu-desc=''><i class="fa fa-question-circle"></i>&nbsp;提示</a>
						<div class="popover">
							<div class="arrow"></div>
							<div class="popover-content">
								<div>
									<?php if($secend_menu['desc']): ?>
									<h4>操作提示</h4>
									<p><?php echo $secend_menu['desc']; ?></p>
									<hr/>
									<?php endif; ?>
									<h4>功能提示</h4>
									<p class="function-prompts"></p>
								</div>
							</div>
						</div>
					</li>
					
				</ul>
			</div>
		</div>
		
		<!-- 操作提示 -->
		
<!-- 		<?php if($warm_prompt_is_show == 'hidden'): ?>style="display:none;"<?php endif; ?> -->
		<div class="ns-warm-prompt" style="display:none;">
			<div class="alert alert-info">
				<button type="button" class="close">&times;</button>
				<h4>
<!-- 					{1block name="alert_info"} -->
<!-- 					<i class="fa fa-info-circle"></i> -->
<!-- 					<span class="operating-hints">操作提示</span> -->
<!-- 						<?php if($secend_menu['desc']): ?> -->
<!-- 						<span><?php echo $secend_menu['desc']; ?></span> -->
<!-- 						<?php endif; ?> -->
<!-- 					{1/block} -->
				</h4>
			</div>
		</div>
		
		
		<div class="ns-main">
			
<input type="hidden" id="order_id" />
<input type="hidden" id="print_select_ids" />

<div>	
	<table class="mytable select">
		<tr>
			<th align="left">
				<button onclick="dataExcel()" class="btn-common">导出数据</button>
		
				<a class="btn-common-white" id="PrintOrder" href="javascript:;">
					<i class="fa fa-print"></i>
					<span>打印订单</span>
				</a>
			</th>
			<th style="position: relative;">
				<span>下单时间：</span>
				<input type="text" id="startDate" class="input-common middle" placeholder="请选择开始日期" onclick="WdatePicker({dateFmt:'yyyy-MM-dd HH:mm:ss'})" />
				&nbsp;-&nbsp;
				<input type="text" id="endDate" placeholder="请选择结束日期" class="input-common middle" onclick="WdatePicker({dateFmt:'yyyy-MM-dd HH:mm:ss'})" />
				<button onclick="searchData()" class="btn-common">搜索</button>			
			</th>
		</tr>
	</table>
	
	<table class="table-class" id="ajax-orderlist">
		<colgroup>
			<col width="2%">
			<col width="34%">
			<col width="14%">
			<col width="10%">
			<col width="10%">
			<col width="10%">
			<col width="10%">
			<col width="10%">
		</colgroup>
		<thead>
			<tr align="center">
				<th>
					<i class="checkbox-common">
						<input type="checkbox" onclick="CheckAll(this)" id="check" />
					</i>
				</th>
				<th>商品信息</th>
				<th>商品清单</th>
				<th>订单金额</th>
				<th>收货信息</th>
				<th>买家</th>
				<th>交易状态</th>
				<th>操作</th>
			</tr>
		</thead>
		<tbody></tbody>
	</table>
</div>


			<script type="text/javascript" src="__STATIC__/js/jquery.cookie.js"></script>
<script src="__STATIC__/js/page.js"></script>
<div class="page" id="turn-ul" style="display: none;">
	<div class="pagination">
		<ul>
			<li class="according-number">每页显示<input type="text" class="input-medium" id="showNumber" value="<?php echo $pagesize; ?>" data-default="<?php echo $pagesize; ?>" autocomplete="off"/>条</li>
			<li><a id="beginPage" class="page-disable" style="border: 1px solid #dddddd;">首页</a></li>
			<li><a id="prevPage" class="page-disable">上一页</a></li>
			<li id="pageNumber"></li>
			<li id="JslastPage">
				
			</li>
			<li><a id="nextPage">下一页</a></li>
			<li><a id="lastPage">末页</a></li>
			<li class="total-data">共0条</li>
			<!-- <li class="page-count">共0页</li> -->
			<li class="according-number">
				跳<input type="text" class="input-medium"  id="skipPage" data-curr-page="1"/>页
			</li>
		</ul>
	</div>
</div>
<input type="hidden" id="page_count" />
<input type="hidden" id="page_size" />
<script>
/**
 * 保存当前的页面
 * 创建时间：2017年8月30日 19:29:20
 */
function savePage(index){
	var json = { page_index : index, show_number : $("#showNumber").val(), url :  window.location.href };
	$.cookie('page_cookie',JSON.stringify(json),{ path: '/' });
 	//console.log(json);
}

$(function() {
	try{
		
		$("#turn-ul").show();//显示分页
		var history_url = "";
		var json = { page_index : 1, show_number : <?php echo $pagesize; ?>, url :  window.location.href };
		var history_json = "";//用于临时保存分页数据
		if($.cookie('page_cookie') != undefined && $.cookie('page_cookie') != "" && $.cookie('page_cookie') != '""'){
			
			var cookie = eval("(" + $.cookie('page_cookie') + ")");
			if(cookie !=undefined && cookie != ""){
				json.page_index = cookie.page_index;
				if(cookie.show_number != undefined && cookie.show_number != "") json.show_number = cookie.show_number;
				else json.show_number = <?php echo $pagesize; ?>;
				history_url = cookie.url;
				history_json = cookie;
			}
			
		}else{
			
			savePage(json.page_index);
			
		}
		if(history_url != undefined && history_url != "" && history_url != json.url && json.page_index != 1){
			
			//如果页面发生了跳转，还原操作
			json.page_index = 1;
			json.show_number = <?php echo $pagesize; ?>;
			json.url = history_url;
 			//console.log("如果页面发生了跳转，还原操作");
			$.cookie('page_cookie',JSON.stringify(json),{ path: '/' });
		}

 		//console.log($.cookie('page_cookie'));
		$("#showNumber").val(json.show_number);
		if(json.page_index != 1) jumpNumber = json.page_index;
		LoadingInfo(json.page_index);//通过此方法调用分页类
		
	}catch(e){
		
		$("#turn-ul").hide();
		//当前页面没有分页，进行还原操作
		$.cookie('page_cookie',JSON.stringify(history_json),{ path: '/' });
//		console.error(e);
 		//console.log("当前页面没有分页，进行还原操作");
 		//console.log($.cookie('page_cookie'));
	}
	
	//首页
	$("#beginPage").click(function() {
		if(jumpNumber!=1){
			jumpNumber = 1;
			LoadingInfo(1);
			savePage(1);
			changeClass("begin");
		}
		return false;
	});

	//上一页
	$("#prevPage").click(function() {
		var obj = $(".currentPage");
		var index = parseInt(obj.text()) - 1;
		if (index > 0) {
			obj.removeClass("currentPage");
			obj.prev().addClass("currentPage");
			jumpNumber = index;
			LoadingInfo(index);
			savePage(index);
			//判断是否是第一页
			if (index == 1) {
				changeClass("prev");
			} else {
				changeClass();
			}
		}
		return false;
	});

	//下一页
	$("#nextPage").click(function() {
		var obj = $(".currentPage");
		//当前页加一（下一页）
		var index = parseInt(obj.text()) + 1;
		if (index <= $("#page_count").val()) {
			jumpNumber = index;
			LoadingInfo(index);
			savePage(index);
			obj.removeClass("currentPage");
			obj.next().addClass("currentPage");
			//判断是否是最后一页
			if (index == $("#page_count").val()) {
				changeClass("next");
			} else {
				changeClass();
			}
		}
		return false;
	});

	//末页
	$("#lastPage").click(function() {
		jumpNumber = $("#page_count").val();
		if(jumpNumber>1){
			LoadingInfo(jumpNumber);
			savePage(jumpNumber);
			$("#pageNumber a:eq("+ (parseInt($("#page_count").val()) - 1) + ")").text($("#page_count").val());
			changeClass("next");
		}
		return false;
	});

	//每页显示页数
	$("#showNumber").blur(function(){
		if(isNaN($(this).val())){
			$("#showNumber").val(20);
			jumpNumber = 1;
			LoadingInfo(jumpNumber);
			savePage(jumpNumber);
			return;
		}
		if($(this).val().indexOf(".") != -1){
			var index = $(this).val().indexOf(".");
			$("#showNumber").val($(this).val().substr(0,index));
			jumpNumber = 1;
			LoadingInfo(jumpNumber);
			savePage(jumpNumber);
			return;
		}
		if(parseInt($(this).val())<=0){
			jumpNumber = 1;
			LoadingInfo(jumpNumber);
			savePage(jumpNumber);
			return;
		}
		//页数没有变化的话，就不要再执行查询
		if(parseInt($(this).val()) != $(this).attr("data-default")){
// 			jumpNumber = 1;//设置每页显示的页数，并且设置到第一页
			$(this).attr("data-default",$(this).val());
			LoadingInfo(jumpNumber);
			savePage(jumpNumber);
		}
		return false;
	}).keyup(function(event){
		if(event.keyCode == 13){
			if(isNaN($(this).val())){
				$("#showNumber").val(20);
				jumpNumber = 1;
				LoadingInfo(jumpNumber);
				savePage(jumpNumber);
			}
			//页数没有变化的话，就不要再执行查询
			if(parseInt($(this).val()) != $(this).attr("data-default")){
// 				jumpNumber = 1;//设置每页显示的页数，并且设置到第一页
				$(this).attr("data-default",$(this).val());
				//总数据数量
				var total_count = parseInt($(".total-data").attr("data-total-count"));
				//计算用户输入的页数是否超过当前页数
				var curr_count = Math.ceil(total_count/parseInt($(this).val()));
				if( curr_count !=0 && curr_count < jumpNumber){
					jumpNumber = curr_count;//输入的页数超过了，没有那么多
				}
				LoadingInfo(jumpNumber);
				savePage(jumpNumber);
			}
		}
		return false;
	});

	// 跳转到某页
	$("#skipPage").blur(function(){
		if(isNaN($(this).val()) || $(this).val().length == 0){
			$("#showNumber").val(20);
			jumpNumber = 1;
			LoadingInfo(jumpNumber);
			savePage(jumpNumber);
			return;
		}
		if(parseInt($(this).val())<=0){
			jumpNumber = 1;
			LoadingInfo(jumpNumber);
			savePage(jumpNumber);
			return;
		}
		if(parseInt($(this).val()) > $("#page_count").val()){
			jumpNumber = $("#page_count").val();
			LoadingInfo(jumpNumber);
			savePage(jumpNumber);
			$(this).val(jumpNumber);
			return;
		}
		if(parseInt($(this).val()) == parseInt($(this).attr("data-curr-page"))){
			return;
		}
		jumpNumber = $(this).val();
		LoadingInfo(jumpNumber);
		savePage(jumpNumber);		
	}).keyup(function(event){
		if(event.keyCode == 13){
			if(isNaN($(this).val())){
				$("#showNumber").val(20);
				jumpNumber = 1;
				LoadingInfo(jumpNumber);
				savePage(jumpNumber);
			}
			if(parseInt($(this).val())<=0){
				jumpNumber = 1;
				LoadingInfo(jumpNumber);
				savePage(jumpNumber);
				return;
			}
			if(parseInt($(this).val()) > $("#page_count").val()){
				jumpNumber = $("#page_count").val();
				LoadingInfo(jumpNumber);
				savePage(jumpNumber);
				$(this).val(jumpNumber);
				return;
			}
			if(parseInt($(this).val()) == parseInt($(this).attr("data-curr-page"))){
				return;
			}
			jumpNumber = $(this).val();
			LoadingInfo(jumpNumber);
			savePage(jumpNumber);
		}
		return false;
	});
});

//跳转页面
function JumpForPage(obj) {
	jumpNumber = $(obj).text();
	LoadingInfo($(obj).text());
	savePage($(obj).text());
	$(".currentPage").removeClass("currentPage");
	$(obj).addClass("currentPage");
	if (jumpNumber == 1) {
		changeClass("prev");
	} else if (jumpNumber < parseInt($("#page_count").val())) {
		changeClass();
	} else if (jumpNumber == parseInt($("#page_count").val())) {
		changeClass("next");
	}
}
</script>
		</div>
		
	</section>
	
</article>

<!-- 公共的操作提示弹出框 common-success：成功，common-warning：警告，common-error：错误，-->
<div class="common-tip-message js-common-tip">
	<div class="tip-container">
		<span class="inner"></span>
	</div>
</div>

<!--修改密码弹出框 -->
<div id="edit-password" class="modal hide fade" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true" style="width:562px;top:50%;margin-top:-180.5px;">
	<div class="modal-header">
		<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
		<h3>修改密码</h3>
	</div>
	<div class="modal-body">
		<form class="form-horizontal">
			<div class="control-group">
				<label class="control-label" for="pwd0" style="width: 160px;"><span class="color-red">*</span>原密码</label>
				<div class="controls" style="margin-left: 180px;">
					<input type="password" id="pwd0" placeholder="请输入原密码" class="input-common" />
					<span class="help-block"></span>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" for="pwd1" style="width: 160px;"><span class="color-red">*</span>新密码</label>
				<div class="controls" style="margin-left: 180px;">
					<input type="password" id="pwd1" placeholder="请输入新密码" class="input-common" />
					<span class="help-block"></span>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" for="pwd2" style="width: 160px;"><span class="color-red">*</span>再次输入密码</label>
				<div class="controls" style="margin-left: 180px;">
					<input type="password" id="pwd2" placeholder="请输入确认密码" class="input-common" />
					<span class="help-block"></span>
				</div>
			</div>
			<div style="text-align: center; height: 20px;" id="show"></div>
		</form>
	</div>
	<div class="modal-footer">
		<button class="btn-common btn-big" onclick="submitPassword()" style="display:inline-block;">保存</button>
		<button class="btn-common-cancle btn-big" data-dismiss="modal" aria-hidden="true">关闭</button>
	</div>
</div>

<link rel="stylesheet" type="text/css" href="ADMIN_CSS/jquery-ui-private.css">
<script>
var platform_shopname= '<?php echo $web_popup_title; ?>';
</script>
<script type="text/javascript" src="ADMIN_JS/jquery-ui-private.js" charset="utf-8"></script>
<script type="text/javascript" src="ADMIN_JS/jquery.timers.js"></script>
<div id="dialog"></div>
<script type="text/javascript">
function showMessage(type, message,url,time){
	if(url == undefined){
		url = '';
	}
	if(time == undefined){
		time = 2;
	}
	//成功之后的跳转
	if(type == 'success'){
		$( "#dialog").dialog({
			buttons: {
				"确定,#0059d6,#fff": function() {
					$(this).dialog('close');
				}
			},
			contentText:message,
			time:time,
			timeHref: url,
			msgType : type
		});
	}
	//失败之后的跳转
	if(type == 'error'){
		$( "#dialog").dialog({
			buttons: {
				"确定,#0059d6,#fff": function() {
					$(this).dialog('close');
				}
			},
			time:time,
			contentText:message,
			timeHref: url,
			msgType : type
		});
	}
}

function showConfirm(content){
	$( "#dialog").dialog({
		buttons: {
			"确定": function() {
				$(this).dialog('close');
				return 1;
			},
			"取消,#f5f5f5,#666": function() {
				$(this).dialog('close');
				return 0;
			}
		},
		contentText:content,
	});
}
</script>
<script src="ADMIN_JS/ns_common_base.js"></script>
<script src="__STATIC__/blue/js/ns_common_blue.js"></script>
<script>
	window.onload = function(){

	}
$(function(){
	
	$(".ns-third-menu ul .btn-more").toggle(
		function(){
			$(".ns-third-menu ul").animate({height:"84px"},300);
		},
		function(){
			$(".ns-third-menu ul").animate({height:"42px"},300);
		}
	);
	
	//公共下拉框
	$('.select-common').selectric();
	
	//公共复选框点击切换样式
	$(".checkbox-common").live("click",function(){
		var checkbox = $(this).children("input");
		if(checkbox.is(":checked")) $(this).addClass("selected");
		else $(this).removeClass("selected");
	});
	
	//鼠标浮上查看预览上传的图片
	$(".upload-btn-common>img,#preview_adv").live("mouseover",function(){
		var curr = $(this);
		var src = curr.attr("data-src");
		if(src){
			//alert(src);
			var contents = '<img src="'+src+'" style="width: 100px;height: auto;display:block;margin:0 auto;">';
			//鼠标每次浮上图片时，要销毁之前的事件绑定
			curr.popover("destroy");
			
			//重新配置弹出框内容
			curr.popover({ content : contents });

			//显示
			curr.popover("show");
		}
	});
	
	//鼠标离开隐藏预览上传的图片
	$(".upload-btn-common>img,#preview_adv").live("mouseout",function(){
		var curr = $(this);
		//隐藏
		if($(".popover.top").is(":visible") && curr.attr("data-src")) curr.popover("hide");
	});

	//公共单选框点击切换样式
	$(".radio-common").live("click",function(){
		var radio = $(this).children("input");
		var name = radio.attr("name");
		if(radio.is(":checked")){
			$(".radio-common>input[type='radio'][name='" + name + "']").parent().removeClass("selected");
			$(this).addClass("selected");
		}else{
			$(this).removeClass("selected");
		}
	});

	//顶部导航管理显示隐藏
	$(".ns-navigation-title>span").click(function(){
		$(".ns-navigation-management").slideUp(400);
	});
	
	$(".js-nav").toggle(function(){
		$(".ns-navigation-management").slideDown(400);
	},function(){
		$(".ns-navigation-management").slideUp(400);
	});
	
	//搜索展开
	$(".ns-search-block").hover(function(){
		if($(this).children(".mask-layer-search").is(":hidden")) $(this).children(".mask-layer-search").fadeIn(300);
	},function(){
		if($(this).children(".mask-layer-search").is(":visible")) $(this).children(".mask-layer-search").fadeOut(300);
	});
	
	$(".ns-base-tool .ns-help").hover(function(){
		if($(this).children("ul").is(":hidden")) $(this).children("ul").fadeIn(250);
	},function(){
		if($(this).children("ul").is(":visible")) $(this).children("ul").fadeOut(250);
	});
	
});

function addFavorite() {
	var url = window.location;
	var title = document.title;
	var ua = navigator.userAgent.toLowerCase();
	if (ua.indexOf("360se") > -1) {
		alert("由于360浏览器功能限制，请按 Ctrl+D 手动收藏！");
	}else if (ua.indexOf("msie 8") > -1) {
		window.external.AddToFavoritesBar(url, title); //IE8
	}
	else if (document.all) {
		try{
			window.external.addFavorite(url, title);
		}catch(e){
			alert('您的浏览器不支持,请按 Ctrl+D 手动收藏!');
		}
	}else if (window.sidebar) {
		window.sidebar.addPanel(title, url, "");
	}else {
		alert('您的浏览器不支持,请按 Ctrl+D 手动收藏!');
	}
}

</script>



<link rel="stylesheet" href="ADMIN_CSS/order_refunds.css">
<div class="modal fade hide" id="confirmRefund" tabindex="-1" aria-labelledby="确认退款" aria-hidden="true" data-backdrop="static" style="width: 650px; overflow: overlay;top:50%;">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				<h3>确认退款</h3>
			</div>
			<div class="modal-body">
			
				<div class="refunds-block">
					<label>退款金额：</label>
					<input type="text" id="refund_money_input" class="form-control" placeholder="请填写退款金额">
					<span class="operating-hint">请输入退款金额</span>
				</div>
				<div class="refunds-block">
					<label>退款方式：</label>
					<select id="refund_way_select"></select>
				</div>
				<div class="refunds-block">
					<label class="w130">买家申请退款金额：</label>
					<span id="apply_money">0.00元</span>
				</div>
				<div class="refunds-block">
					<label class="w130">买家实际付款金额：</label>
					<span id="pay_money">0.00元</span>
				</div>
				<div class="refunds-block" style="display:none;">
					<label class="w130">自动退还余额：</label>
					<span id="balance_refund">0.00元</span>
				</div>
				
			</div>
			<div class="modal-footer">
				<!-- 温馨提示 -->
				<div class="refunds-block js-not-configured-prompt"></div>
				<input type="hidden" id="confirm_id">
				<input type="hidden" id="confirm_order_id">
				<input type="hidden" id="confirm_order_goods_id">
				<input type="hidden" id="refund_require_money">
				<button class="btn-common js-confirm-refund-ok disabled">确认</button>
				<button class="btn" data-dismiss="modal" aria-hidden="true">取消</button>
			</div>
		</div>
	</div>
</div>
<div class="modal hide fade" tabindex="-1" aria-labelledby="退款操作提醒" aria-hidden="true" data-backdrop="static" id="refundOperationReminder" style="width:600px;top: 50%;">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				<h3>退款操作提醒</h3>
			</div>
			<div class="modal-body">
				<div class="js-confirmation"></div>
				
				<label>备注：</label>
				<textarea rows="4" placeholder="退款备注，最多可输入200个字符。(如果不填，系统将会自动添加默认退款备注，格式为：订单编号:201710180000031，退款方式为:[微信支付]，退款金额:0.00元，退款余额:0.00元)" id="refund-remark"></textarea>
				
				<!-- 温馨提示 -->
				<div class="refunds-block js-confirmation-prompt"></div>
			</div>
			<div class="modal-footer">
				<button class="btn-common disabled" id="countdown_refund_confirm">确定</button>
				<button class="btn" data-dismiss="modal" aria-hidden="true">取消</button>
			</div>
		</div>
	</div>
</div>
<div class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" id="refuseRefund" style="width:300px;">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				<h3>拒绝退款</h3>
			</div>
			<div class="modal-body">
				<p>您可以拒绝本次退款或者永久拒绝</p>
			</div>
			<div class="modal-footer">
				<input type="hidden" id="refuse_id" />
				<input type="hidden" id="refuse_order_id" />
				<input type="hidden" id="refuse_order_goods_id" />
				<button class="btn-common" onclick="refuseRefundType(1)">拒绝本次</button>
				<button class="btn" onclick="refuseRefundType(2)">永久拒绝</button>
			</div>
		</div>
	</div>
</div>
<div class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" id="agreeRefund" style="width:300px;">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				<h3>同意退款</h3>
			</div>
			<div class="modal-body">
				<p>确定要同意退款吗？</p>
			</div>
			<div class="modal-footer">
				<input type="hidden" id="agreee_id" />
				<input type="hidden" id="agreee_order_id" />
				<input type="hidden" id="agree_order_goods_id" />
				<button class="btn-common" onclick="agreeRefund()">同意</button>
				<button class="btn" data-dismiss="modal" aria-hidden="true">取消</button>
			</div>
		</div>
	</div>
</div>
<div class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" id="confirm_receipt" style="width:400px;">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				<h3>确认收货</h3>
			</div>
			<div class="modal-body">
				<div style="height: 35px;line-height: 35px;">
					物流公司：<span id="logistics_company"></span>
				</div>
				<div style="height: 35px;line-height: 35px;">
					物流单号：<span id="logistics_number"></span>
				</div>
				<div style="height: 35px;line-height: 35px;">
					是否入库：
					<label for="no" style="display: inline-block;font-weight: normal;" >否</label>
					<input type="radio" name="isStorage" id="no" style="margin-top: -2px;" checked>
					<label for="yes" style="display: inline-block;font-weight: normal;margin-left: 15px;">是</label><input type="radio" name="isStorage" id="yes" style="margin-top: -2px;margin-left: 5px;">
				</div>
				<div id="storage_num" style="display: none;">
					入库件数：<input type="number">
				</div>
			</div>
			<div class="modal-footer">
				<input type="hidden" id="hide_id" />
				<input type="hidden" id="hide_order_id" />
				<input type="hidden" id="hide_order_goods_id" />
				<input type="hidden" id="hide_receipt_goods_id" />
				<input type="hidden" id="hide_receipt_sku_id">
				<button class="btn" onclick="confirm_receipt()">同意</button>
				<button class="btn" onclick="cancel_receipt()">取消</button>
			</div>
		</div>
	</div>
</div>
<script src="ADMIN_JS/order/order_customer.js"></script>
<script>
//refund_require_money 退款金额
function refundOperation(operation_type, id, order_id, order_goods_id,refund_require_money){
	if(operation_type == 'agree'){
		//同意退款
		showAgreeRefund(id, order_id, order_goods_id);
	}else if(operation_type == 'refuse'){
		//拒绝退款
		refuseRefund(id, order_id,order_goods_id);
	}else if(operation_type == 'confirm_receipt'){
		//确认收货
		orderGoodsConfirmRecieve(id, order_id,order_goods_id);
	}else if(operation_type == 'confirm_refund'){
		//确认退款
		confirmRefund(id, order_id,order_goods_id,refund_require_money);
	}
}

function showAgreeRefund(id, order_id, order_goods_id){
	$("#agreee_id").val(id);
	$("#agreee_order_id").val(order_id);
	$("#agree_order_goods_id").val(order_goods_id);
	var left = ($(window).width()+$('#agreeRefund').outerWidth())/2;
	var top = ($(window).height()-$('#agreeRefund').outerHeight())/2;
	$("#agreeRefund").css({"left": left, "top" : top});
	$("#agreeRefund").modal("show");
}

// 拒绝退款展示
function refuseRefund(id, order_id,order_goods_id){
	$("#refuse_id").val(id);
	$("#refuse_order_id").val(order_id);
	$("#refuse_order_goods_id").val(order_goods_id);
	var left = ($(window).width()+$('#refuseRefund').outerWidth())/2;
	var top = ($(window).height()-$('#refuseRefund').outerHeight())/2;
	$("#refuseRefund").css({"left": left, "top" : top});
	$("#refuseRefund").modal('show');
}

// 拒绝退款操作
function refuseRefundType(type){
	var id = $("#refuse_id").val();
	var order_id = $("#refuse_order_id").val();
	var order_goods_id = $("#refuse_order_goods_id").val();
	if(type == 1){
		refund_url = "<?php echo __URL('ADMIN_MAIN/order/ordercustomerrefuseonce'); ?>";
	} else{
		refund_url = "<?php echo __URL('ADMIN_MAIN/order/ordercustomerrefuseforever'); ?>";
	}
	$.ajax({
		type : "post",
		url : refund_url,
		data : {'id':id , 'order_id':order_id,"order_goods_id":order_goods_id},
		success : function(data) {
			if (data['code'] > 0) {
				showMessage('success', "已拒绝",window.location.reload());
			} else {
				showMessage('error', data["message"]);
			}
		}
	});
}

//确认收货
var isStorage = 0; //是否入库
$("#yes").click(function(){
	isStorage = 1;
	$("#storage_num").show();
})
$("#no").click(function(){
	isStorage = 0;
	$("#storage_num").hide();
})

var goodsNum = 0;
function orderGoodsConfirmRecieve(id, order_id,order_goods_id){
	$("#confirm_receipt").modal("show");
	$.ajax({
		type : "post",
		url : "<?php echo __URL('ADMIN_MAIN/order/getOrderCustomerDetialAjax'); ?>",
		data : {"id": id, "order_goods_id":order_goods_id},
		success : function(data) {
			$("#logistics_company").text(data['refund_shipping_company']);
			$("#logistics_number").text(data['refund_shipping_code']);
			goodsNum = data['num'];
			$("#storage_num input").val(data['num']);
			$("#hide_receipt_goods_id").val(data['goods_id']);
			$("#hide_receipt_sku_id").val(data['sku_id']);
		}
	});
	$("#hide_id").val(id);
	$("#hide_order_id").val(order_id);
	$("#hide_order_goods_id").val(order_goods_id);
}

$("#storage_num input").change(function(){
	if($(this).val()<0){
		$(this).val(1);
	}else if($(this).val()>goodsNum){
		$(this).val(goodsNum);
	}
})

function confirm_receipt(){
	var id = $("#hide_id").val();
	var order_id = $("#hide_order_id").val();
	var order_goods_id = $("#hide_order_goods_id").val();
	var storage_num = $("#storage_num input").val();
	var goods_id = $("#hide_receipt_goods_id").val();
	var sku_id = $("#hide_receipt_sku_id").val();
	$.ajax({
		type : "post",
		url : "<?php echo __URL('ADMIN_MAIN/order/ordercustomerconfirmrecieve'); ?>",
		data : { 'id': id, 'order_id':order_id, "order_goods_id":order_goods_id, "storage_num" : storage_num, "isStorage" : isStorage, "goods_id" : goods_id, "sku_id" : sku_id },
		success : function(data) {
			if (data['code'] > 0) {
				showMessage('success', data["message"],window.location.reload());
			} else {
				showMessage('error', data["message"]);
			}
		}
	});
}

function cancel_receipt(){
	$("#confirm_receipt").modal("hide");
	$("#hide_order_id").val('');
	$("#hide_order_goods_id").val('');
	$("#hide_receipt_sku_id").val('');
	$("#hide_receipt_goods_id").val('');
	$("#hide_id").val('');
}
</script>
<!-- 订单打印 -->
<style>
.cell .is_Increment{
	margin-left: 10px;
}	
.is_Increment{
	display: none;
}
.is_Increment + label{
    width: 15px;
    height: 15px;
    display: inline-block;
    margin-left: 5px;
    position: relative;
    top: 8px;
	background: url("__STATIC__/blue/img/un_checked.png") no-repeat;
}
.is_Increment:checked + label{
	background: url("__STATIC__/blue/img/checked.png") no-repeat;
}
.order_goods_name,.popover_order_goods_name{
	display: inline-block;
	width: 280px;
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
}
.popover_order_goods_name{
	width: 250px;
}
.data_more_goods{
    display: inline-block;
    width: 20px;
    position: relative;
    top: -10px;
    height: 18px;
}
input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button{
    -webkit-appearance: none !important;
    margin: 0; 
}
.form-horizontal .control-label{
	width: 80px;
}
.form-horizontal .controls{
	margin-left: 10px;
	display: inline-block;
}
.goToConfigure{
	color: red;
	text-decoration: underline;
	margin-left: 10px;
	display: none;
}
.goToConfigure:hover{
	color: red;
}
.modal-footer .tips{
	float: left;
	color: red;
}
.header-table{
    margin-bottom: 0;
    border: 1px solid #ddd;
    border-bottom: 0;
    max-width: calc(100% - 2px);
}
.table-border-row tr td:first-child{
	border-left: 1px solid #e5e5e5;
}
.body-table{
    border: solid #ddd;
    border-width: 0 1px 0 1px;
}
</style>
<!-- 打印发货单 -->
<div id="prite-send" class="modal hide fade" data-backdrop="static" role="dialog" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true" style="margin-left:-536px;border-radius: 0;">
	<div class="modal-header">
		<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
		<h3>打印发货单</h3>
	</div>
	<div class="modal-body" style="height: 282px; overflow: auto;">
		<div class="ordercontent">
			<div class="data-body-head">
				<table class="table table-border-row header-table" style="margin-bottom: 0;">
					<colgroup>
						<col style="width: 25%">
						<col style="width: 37%">
						<col style="width: 18%">
						<col style="width: 20%">
					</colgroup>
					<tr style="background: #F2F6FC;">
						<th>订单编号</th>
						<th>商品名称</th>
						<th>快递公司</th>
						<th>运单号</th>
					</tr>
				</table>
			</div>
			<div class="data-table-body" style="height: 240px;">
				<table class="table table-border-row" style="margin-bottom: 0;">
					<colgroup>
						<col style="width: 25%">
						<col style="width: 37%">
						<col style="width: 18%">
						<col style="width: 20%">
					</colgroup>
					<tbody id="InvoiceList"></tbody>
				</table>
			</div>
		</div>
		<form class="form-horizontal" style="display: none;">
			<div class="control-group">
				<label class="control-label" for="deliveryShopInfo"><span class="color-red">*</span>发件人</label>
				<div class="controls">
					<select id="deliveryShopInfo" class="input-large"></select>
					<span class="help-block" style="display: none;">请输入选择发件人</span>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label"></label>
				<div class="controls">
					<label class="checkbox"></label>
				</div>
			</div>
		</form> 
	</div>
	<a id="invoicePrintingURL" style="display: none;" target="_blank"></a>
	<div class="modal-footer">
		<button class="btn-common" id="invoicePrinPreview" aria-hidden="true">打印预览</button>
		<button class="btn-common-cancle btn-big" data-dismiss="modal" aria-hidden="true">关闭</button>
	</div>
</div>

<!-- 打印出库单 -->
<div id="print-billOfSales" class="modal hide fade" role="dialog" tabindex="-1"  aria-labelledby="myModalLabel" aria-hidden="true" style="margin-left:-536px;border-radius: 0;" data-backdrop="static">
	<div class="modal-header">
		<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
		<h3>打印出库单</h3>
	</div>
	<div class="modal-body" style="height: 282px; overflow: auto;">
		<div class="ordercontent">
			<div class="data-body-head">
				<table class="table table-border-row header-table" style="margin-bottom: 0;">
					<colgroup>
						<col style="width: 29%">
						<col style="width: 15%">
						<col style="width: 8%">
						<col style="width: 8%">
						<col style="width: 15%">
						<col style="width: 15%">
					</colgroup>
					<tr style="background: #F2F6FC;border-bottom:1px solid #ddd">
						<th>商品名称</th>
						<th>sku名称</th>
						<th style="text-align: center;">出库量</th>
						<th style="text-align: center;">库存量</th>
						<th>商品编码</th>
						<th style="text-align: center;">订单号</th>
					</tr>
				</table>
			</div>
			<div class="data-table-body" style="height: 240px;">
				<table class="body-table"> 
					<colgroup>
						<col style="width: 29%">
						<col style="width: 15%">
						<col style="width: 8%">
						<col style="width: 8%">
						<col style="width: 15%">
						<col style="width: 15%">
					</colgroup>
					<tbody id="billOfSales"></tbody>
				</table>
			</div>
		</div>
		<form class="form-horizontal" style="display: none;">
			<div class="control-group">
				<label class="control-label" for="deliveryShop"><span class="color-red">*</span>发件人</label>
				<div class="controls">
					<select id="deliveryShop" class="input-large"></select>
					<span class="help-block" style="display: none;">请输入选择发件人</span>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label"></label>
				<div class="controls">
					<label class="checkbox"></label>
				</div>
			</div>
		</form> 
	</div>
	<a id="invoicePrintingURL" style="display: none;" target="_blank"></a>
	<div class="modal-footer">
		<button class="btn-common" onclick="printpreviewOfInvoice();" aria-hidden="true">打印预览</button>
		<button class="btn-common-cancle btn-big" data-dismiss="modal" aria-hidden="true">关闭</button>
	</div>
</div>

<!-- 打印快递单-->
<div id="prite-send-express" class="modal hide fade" role="dialog" tabindex="-1"  aria-labelledby="myModalLabel" aria-hidden="true" style="margin-left:-536px;border-radius: 0;" data-backdrop="static">
	<div class="modal-header">
		<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
		<h3>打印快递单</h3>
	</div>
	<div class="modal-body" style="height: 282px; overflow: auto;">
		<form class="form-horizontal">
			<div class="control-group">
				<label class="control-label" for="express_select"><span class="color-red">*</span>选择快递</label>
				<div class="controls">
					<select id="express_select" class="select-common">
					<?php if(is_array($expressList) || $expressList instanceof \think\Collection || $expressList instanceof \think\Paginator): $i = 0; $__LIST__ = $expressList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
					<option value="<?php echo $vo['co_id']; ?>"><?php echo $vo['company_name']; ?></option>
					<?php endforeach; endif; else: echo "" ;endif; ?>
					</select>
					<span class="help-block" style="display: none;">请选择快递</span>
				</div>
				<span><a href="<?php echo __URL('ADMIN_MAIN/express/expresscompany'); ?>" class="goToConfigure" style="text-decoration: underline;">前去配置</a></span>
			</div>
		</form> 
		<div class="ordercontent">
			<div class="data-body-head">
				<table class="table table-border-row header-table" style="margin-bottom: 0;border: 1px solid #ddd;border-bottom: 0;">
					<tr style="background: #F2F6FC;">
						<th style="width: 17.5%">订单编号</th>
						<th style="width: 28%">商品名称</th>
						<th style="width: 6%">已发货</th>
						<th style="width: 6%">已打印</th>
						<th style="width: 15%">快递公司</th>
						<th style="width: 18%">运单号</th>
					</tr>		
				</table>
			</div>
			<div class="data-table-body">
				<table class="table table-border-row body-table">
					<tbody id="InvoiceList-express" colspan="3">
						
					</tbody>
				</table>
			</div>
		</div>
	</div>
	<a id="invoicePrintingURL" style="display: none;" target="_blank"></a>
	<div class="modal-footer">
		<span class="tips">提示：<span style="color: #777;">选中的订单项运单号可实现自增,已发货的订单可修改快递公司和运单号</span></span>
		<button class="btn-common" id="expressPrinPreview" aria-hidden="true">打印预览</button>
		<button class="btn-common-cancle btn-big" data-dismiss="modal" aria-hidden="true">关闭</button>
	</div>
</div>

<!-- 批量发货 -->
<div id="not-shipped-order-list" role="dialog" class="modal hide fade" tabindex="-1"  aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop="static" style="margin-left:-536px;border-radius: 0;">
	<div class="modal-header">
		<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
		<h3>批量发货</h3>
	</div>
	<div class="modal-body" style="height: 282px; overflow: auto;">
		<form class="form-horizontal">
			<div class="control-group">
				<label class="control-label" for="express_select"><span class="color-red">*</span>选择快递</label>
				<div class="controls">
					<select id="express_select_shipping" class="select-common">
					<?php if(is_array($expressList) || $expressList instanceof \think\Collection || $expressList instanceof \think\Paginator): $i = 0; $__LIST__ = $expressList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
					<option value="<?php echo $vo['co_id']; ?>"><?php echo $vo['company_name']; ?></option>
					<?php endforeach; endif; else: echo "" ;endif; ?>
					</select>
					<span class="help-block" style="display: none;">请选择快递</span>
				</div>
				<span><a href="<?php echo __URL('ADMIN_MAIN/express/expresscompany'); ?>" class="goToConfigure" style="text-decoration: underline;">前去配置</a></span>
			</div>
		</form> 
		<div class="ordercontent">
			<div class="data-body-head">
				<table class="table table-border-row header-table">
					<tr style="background: #F2F6FC;">
						<th style="width: 17.5%">订单编号</th>
						<th style="width: 32.5%">商品名称</th>
						<th style="width: 15%">快递公司</th>
						<th style="width: 18%">运单号</th>
					</tr>		
				</table>
			</div>
			<div class="data-table-body" >
				<table class="table table-border-row body-table">
					<tbody id="notShippedOrderList">
						
					</tbody>
				</table>
			</div>
		</div>
	</div>
	<div class="modal-footer">
		<button class="btn-common" id="confirm_delivery" aria-hidden="true">确认发货</button>
		<button class="btn-common-cancle btn-big" data-dismiss="modal" aria-hidden="true">关闭</button>
	</div>
</div>



<script>
// 批量打印发货单
$("#BatchPrintinvoice").click(function () {
	var BatchSend = new Array();
	$("input[name='sub']:checked").each(function () {
		BatchSend.push($(this).val());
	});
	if (BatchSend.length == 0) {
		showTip("请先勾选文本框再进行批量操作！",'warning');
	}else{
		showInvoice();
	}
});
//显示批量打印发货单
function showInvoice() {

	$('#prite-send').modal('show');
	var strIDs = "";
	$("input[name='sub']:checked").each(function () {
		var checkID = $(this).val();
		var strID = checkID.substring(checkID.indexOf('_') + 1, checkID.length);
		strIDs += strID + ",";
	});
	var str = "";
	strIDs = strIDs.substring(0, strIDs.length - 1)
	$("#print_select_ids").val(strIDs);
	$.ajax({
		url: "<?php echo __URL('ADMIN_MAIN/order/getOrderInvoiceView'); ?>",
		data: { "ids": strIDs },
		async: false, // 让它同步执行
		dataType: "json",
		success: function (invoiceDate) {
			if(invoiceDate.length > 0){
				for (var i = 0; i < invoiceDate.length; i++) {
					str += "<tr>";
					str += "<td><div class='cell'>" + invoiceDate[i].order_no + "</div></td>";
					str += "<td><div class='cell' title='" + invoiceDate[i].goods_name + "' style='width:370px;overflow:hidden;text-overflow: ellipsis;white-space: nowrap;'>" + invoiceDate[i].goods_name + "</div></td>";
					if(invoiceDate[i].express_company == null){
						str += "<td><div class='cell'></div></td>";
					}else{
						str += "<td><div class='cell'>" + invoiceDate[i].express_company + "</div></td>";
					}
					str += "<td><div class=;cell'>" + invoiceDate[i].express_no + "</div></td>";
					str += "</tr>";
				}
			}
		}
	});
	
	var deliverystr = "";
	$.ajax({
		type: "post",
		url: "<?php echo __URL('ADMIN_MAIN/order/getshopinfo'); ?>",
		dataType: "json",
		data: "oper=getType",
		success: function (deliveryDate) {

			deliverystr += "<option value='" + deliveryDate.shopId + "'>" + deliveryDate.shopName + "</option>";
			$("#deliveryShopInfo").html(deliverystr);
		}
	});
	
	$("#invoicePrinPreview").attr("onclick", "invoicePrinPreview('" + strIDs + "')");
	$("#InvoiceList").html(str);
	$('#prite-send').modal('show');
 
}

//打印预览 发货单
function invoicePrinPreview(ids) {
	var ShopName = $("#deliveryShopInfo option:selected").text();
	if (ids != "") {
		$("#invoicePrintingURL").attr("href", __URL("ADMIN_MAIN/order/printdeliverypreview?order_ids=" + ids + "&ShopName=" + ShopName + ""));
		document.getElementById("invoicePrintingURL").click();
	}
}

// 打印预览
function printPreview() {
	var printQueue = new Array();
	var checks = $("#contentForCheck input[type=checkbox]");

	// 将要打印的orderID 加入打印队列
	for (var i = 0; i < checks.length; i++) {
	
		var check = $("#" + checks[i].id).prop("checked");
	
		if (check == true) {
			var checkID = $(checks[i]).val();
			var strID = checkID.substring(checkID.indexOf('_') + 1, checkID.length);
			//printQueue.push(strID); //  将要打印的orderID 加入打印队列
			$.ajax({
				url: "<?php echo __URL('ADMIN_MAIN/order/printpreviewvalidate'); ?>",
				data: { "id": strID, "condition": "checkIsCanPrtint" },
				dataType: "json",
				async : false, // 让它同步执行
				success: function (returnData) {
					//	alert(returnData.retval);
					//	alert(returnData.outmessage);
					if (returnData.retval == "1") {
						printQueue.push(strID); //  将要打印的orderID 加入打印队列
					} else if (returnData.retval == "-2") {
						Show(returnData.outmessage, "prompt");
					} else if (returnData.retval == '-1') {
						Show(returnData.outmessage, "prompt");
						// alert('要打印的订单号为 ' + strID + ' 没有找到对应的快递公司');
					}
				}
			});
		}
	}
	if (printQueue.length > 0) {
		$("#expressSinglePrintURl").attr("href", __URL("ADMIN_MAIN/order/printexpresspreview?expressIDs=" + printQueue + "&sid="+$("#expressTemplate").val()));
		document.getElementById("expressSinglePrintURl").click();
	} else {
		Show("没有符合打印的订单！", "prompt");
	}
}


//打印出库单
$("#PrintShipping").click(function(){
	var BatchSend = new Array();
	$("input[name='sub']:checked").each(function () {
		BatchSend.push($(this).val());
	});
	if (BatchSend.length == 0) {
		showTip("请先勾选文本框再进行批量操作！",'warning');
	}else{
		printShipping();
	}
})
//显示出库单列表
function printShipping(){
	var strIDs = "";
	$("input[name='sub']:checked").each(function () {
		var checkID = $(this).val();
		var strID = checkID.substring(checkID.indexOf('_') + 1, checkID.length);
		strIDs += strID + ",";
	});
	var str = "";
	strIDs = strIDs.substring(0, strIDs.length - 1)
	$("#print_select_ids").val(strIDs);
	$.ajax({
		type : "post",
		url: "<?php echo __URL('ADMIN_MAIN/order/getShippingList'); ?>",
		data: { "order_ids": strIDs },
		async: false, // 让它同步执行
		dataType: "json",
		success: function (data) {
			var str = "";
			if(data.length > 0){
				for (var i = 0; i < data.length; i++) {
					var item = data[i];
					str += '<tr style="border-bottom:1px solid #ddd;">';
					str += '<td><div class="cell">'+item['goods_name']+'</div></td>';
					str += '<td><div class="cell">'+item['sku_name']+'</div></td>';
					str += '<td align="center"><div class="cell">'+item['num']+'件</div></td>';
					if(item['stock'] == null){
						str += '<td align="center"><div class="cell">0件</div></td>';
					}else{
						str += '<td align="center"><div class="cell">'+item['stock']+'件</div></td>';
					}
					if(item['code'] == null){
						str += '<td><div class="cell"></div></td>';
					}else{
						str += '<td><div class="cell">'+item['code']+'</div></td>';
					}
					str += '<td class="right_border_none"><div class="cell" style="text-align:center;">';
					for (var t = 0; t < item["order_list"].length; t++ ){
							str += item["order_list"][t]["order_no"]+'<br>';
					}
					str += '</div></td>';
					str += '</tr>';
				}
			}
			$("#billOfSales").html(str);
		}
	})
	$('#print-billOfSales').modal('show');
}
//打印预览出库单
function printpreviewOfInvoice(){
	var order_ids = $("#print_select_ids").val();
	var ShopName = $("#deliveryShop option:selected").text();
	if (order_ids != "") {
		window.open('<?php echo __URL("ADMIN_MAIN/order/printpreviewOfInvoice?order_ids='+order_ids +'"); ?>');
	}
}


//批量打印快递单
$("#BatchPrint").click(function () {
	var BatchSend = new Array();
	$("input[name='sub']:checked").each(function () {
		BatchSend.push($(this).val());
	});
	if (BatchSend.length == 0) {
		showTip("请先勾选文本框再进行批量操作！",'warning');
	}else{
		showExpress();
	}
})
var invoiceDate = "";
//显示批量打印快递单
function showExpress() {
	var strIDs = "";
	$("input[name='sub']:checked").each(function () {
		var checkID = $(this).val();
		var strID = checkID.substring(checkID.indexOf('_') + 1, checkID.length);
		strIDs += strID + ",";
	});
	var str = "";
	strIDs = strIDs.substring(0, strIDs.length - 1)
	$("#print_select_ids").val(strIDs);
	$.ajax({
		url: "<?php echo __URL('ADMIN_MAIN/order/getorderexpresspreview'); ?>",
		data: { "ids": strIDs },
		async: false, // 让它同步执行
		dataType: "json",
		success: function (data) {
			invoiceDate = data;
			if(data.length > 0){
				for(var i = 0; i < data.length; i++){
					var item =  data[i];
					str += '<tr>';
					str += '<td style="width: 16.5%"><div class="cell">' + item['order_no'] + '</div></td>';
					str += '<td style="width: 29%"><div class="cell order_goods_name">' + item['goods_array']['0']['goods_name'] + '</div>';
					if(item['goods_array'].length > 1){
						str += '<a href="javascript:;" class="data_more_goods" data-html="true" data-placement="bottom" data-toggle="popover" data-trigger="click" title="全部商品" data-content="';
						for(var v = 0; v < item['goods_array'].length; v++){
							var vo = item['goods_array'][v];
							str += '<p class=\'popover_order_goods_name\' title=\''+ vo['goods_name'] +'\'>' + vo['goods_name'] + '</p>';
						}
						str += '"><img src="__STATIC__/blue/img/more.png" alt=""></a></td>';
					}
					if(item['is_devlier'] == 0){
						str += '<td style="width: 6%;text-align: center;">否</td>';
					}else{
						str += '<td style="width: 6%;text-align: center;">是</td>';
					}
					if(item['is_print'] == 0){
						str += '<td style="width: 6%;text-align: center;">否</td>';
					}else{
						str += '<td style="width: 6%;text-align: center;">是</td>';
					}
					//未发货
					if(item['is_devlier'] == 0){
						str += '<td style="width: 15%"><div class="cell data_express_company express_company_empty" data_express_company_id="' + item['express_company_id'] + '" order_id="'+ item['order_id'] +'">' + item['express_company_name'] + '</div></td>';
						str += '<td style="width: 18%">';
						str += '<div class="cell"><input type="text" class="input-common middle express_no_empty" style="margin-bottom: 0;width: 150px;" value="' + item['express_no'] + '" onkeyup="this.value=this.value.replace(/\\D/g,\'\')" maxlength="15" >';
						str += '<input type="checkbox" class="is_Increment" id="is_Increment_'+ i +'" checked ><label for="is_Increment_'+ i +'"></label>';
					}else{
					//已发货
						str += '<td style="width: 15%"><div class="cell cell_' + item['order_id'] + ' data_express_company"  data_express_company_id="' + item['express_company_id'] + '" order_id="'+ item['order_id'] +'" >' + item['express_company_name'] + '</div></td>';
						str += '<td style="width: 18%">';
						str += '<div class="cell"><input type="text" class="input-common middle" style="margin-bottom: 0;width: 150px;" value="' + item['express_no'] + '" onkeyup="this.value=this.value.replace(/\\D/g,\'\')" maxlength="15">';
						str += '<input type="checkbox" class="is_Increment" data_order_id="'+ item['order_id']+'" id="is_Increment_'+ i +'"><label for="is_Increment_'+  i +'"></label>';
					}
					str += '</div></td></tr>';
				}
			}
		}
	});
	$("#expressPrinPreview").attr("onclick","expressPrinPreview('" + strIDs + "')");
	$("#InvoiceList-express").html(str);
	$('[data-toggle="popover"]').popover();
	// //初始化默认快递公司信息
	var express_company_id = $("#express_select").val();
	var express_name = $("#express_select option:selected").text();

	if(express_company_id == null || express_company_id == 0){
		$(".goToConfigure").show();
		$("#express_select").html('<option value="0">暂未配置快递公司</option>');
		$("#expressPrinPreview").css({"background":"#ddd","color":"#777"});
	}else{
		$(".goToConfigure").hide();
		$("#expressPrinPreview").css({"background":"#006dcc","color":"#fff"});
		$(".express_company_empty").text(express_name);
		$(".express_company_empty").attr("data_express_company_id",express_company_id);
	}

	$('#prite-send-express').modal('show');
}

function express_no_is_empty(){
	var is_have_empty = true;
	var express_company_id = $("#express_select").val();
	if(express_company_id == null || express_company_id == 0){
		showTip("请配置物流公司",'error');
		$(".goToConfigure").show();
		return false;
	}else{
		$(".goToConfigure").hide();
	}
	$("#InvoiceList-express tr input[type='text']").each(function(i,e){
		if($(e).val().length == 0){
			$(e).focus();
			$(e).css({"border-color":"red", "box-shadow" : "inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 8px rgba(255, 0, 0, 0.6)"});
			showTip("快递单号不可为空",'warning');
			is_have_empty =  false;
			return false;
		}else{
			$(e).css({"border-color":"#ccc","box-shadow":"none"});
			is_have_empty = true;
		}
	})
	return is_have_empty;
}

//打印预览 快递单
function expressPrinPreview(ids) {
	var print_order_arr = handle();
	var expressno_is_empty = express_no_is_empty();
	if(expressno_is_empty){
		$.ajax({
			type : "post",
			url : '<?php echo __URL("ADMIN_MAIN/order/addTmpExpressInformation"); ?>',
			data : {"print_order_arr" : JSON.stringify(print_order_arr)},
			success : function(data){
				//
			}
		})
		var ShopName = $("#deliveryShop option:selected").text();
		var print_order_ids = handlePrintInfo(ids);
		if (print_order_ids != "") {
			window.open(__URL("ADMIN_MAIN/order/printexpresspreview?print_order_ids=" + print_order_ids));
		}
	}
}  

function handlePrintInfo(ids){
	var arr = ids.split(",");
	var print_order_ids = "";
	for(var i = 0; i < arr.length; i++ ){
		var temp = new Array();
		$('[order_id="' + arr[i] + '"]').each(function(a,e){
			var vo_id = $(e).attr("data_express_company_id");
			if(vo_id != undefined && vo_id != ""){
				temp.push(vo_id);
			}
		})
		temp_str = temp.join(",");
		if(i == 0){
			print_order_ids += arr[i]+':'+temp_str
		}else{
			print_order_ids += ';'+arr[i]+':'+temp_str
		}
	}
	return print_order_ids;
}

//快递单自增
$(".express_no_empty:first-child").live("change", function(){
	var express_no = Number($(".express_no_empty:first-child").val());
	$(".express_no_empty").each(function(i,e){
		var order_id = $(e).attr("order_id");
		$(e).val(express_no + i);
		$('[data-order-id="'+order_id+'"]').val(express_no + i);
	})
})
//打印获取订单项临时快递单号
function handle(){
	$("#InvoiceList-express tr").each(function(i,e){
		var tmp_express_company_name = $(e).find(".data_express_company").text();
		var tmp_express_company_id = $(e).find(".data_express_company").attr("data_express_company_id");
		var tmp_express_no = $(e).find("input[type='text']").val();
		invoiceDate[i]["tmp_express_company_name"] = tmp_express_company_name;
		invoiceDate[i]["tmp_express_company_id"] = tmp_express_company_id;
		invoiceDate[i]["tmp_express_no"] = tmp_express_no;
	})
	return invoiceDate;
}
//快递单号是否参与自增
$(".is_Increment").live("click",function(){
	var order_id = $(this).attr("data_order_id");
	if($(this).is(":checked")){
		$(this).prev("input").addClass("express_no_empty");
		$(".cell_"+order_id).addClass("express_company_empty");
	}else{
		$(this).prev("input").removeClass("express_no_empty");
		$(".cell_"+order_id).removeClass("express_company_empty");
	}
})

//批量发货
$("#BatchShipment").click(function(){
	var BatchSend = new Array();
	$("input[name='sub']:checked").each(function () {
		BatchSend.push($(this).val());
	});
	if (BatchSend.length == 0) {
		showTip("请先勾选文本框再进行批量操作！",'warning');
	}else{
		showNotShippingOrderList();
	}
})

function showNotShippingOrderList(){
	var strIDs = "";
	$("input[name='sub']:checked").each(function () {
		var checkID = $(this).val();
		var strID = checkID.substring(checkID.indexOf('_') + 1, checkID.length);
		strIDs += strID + ",";
	});
	var str = "";
	strIDs = strIDs.substring(0, strIDs.length - 1)
	$("#print_select_ids").val(strIDs);
	$.ajax({
		type : "post",
		url: "<?php echo __URL('ADMIN_MAIN/order/getNotshippedOrderList'); ?>",
		data: { "ids": strIDs },
		async: false, // 让它同步执行
		dataType: "json",
		success: function (data) {
			invoiceDate = data;
			if(data.length > 0){
				for(var i = 0; i < data.length; i++){
					var item =  data[i];
					if(item['goods_array'].length > 0){
						str += '<tr>';
						str += '<td style="width: 17.5%"><div class="cell">' + item['order_no'] + '</div></td>';
						str += '<td style="width: 32%"><div class="cell order_goods_name">' + item['goods_array']['0']['goods_name'] + '</div>';
						if(item['goods_array'].length > 1){
							str += '<a href="javascript:;" class="data_more_goods" data-html="true" data-placement="bottom" data-toggle="popover" data-trigger="click" title="全部商品" data-content="';
							for(var v = 0; v < item['goods_array'].length; v++){
								var vo = item['goods_array'][v];
								str += '<p class=\'popover_order_goods_name\' title=\''+ vo['goods_name'] +'\'>' + vo['goods_name'] + '</p>';
							}
							str += '"><img src="__STATIC__/blue/img/more.png" alt=""></a></td>';
						}
						str += '<td style="width: 15%"><div class="cell data_express_company express_company_empty" data_express_company_id="' + item['express_company_id'] + '" order_id="'+ item['order_id'] +'">' + item['express_company_name'] + '</div></td>';
						str += '<td style="width: 18%">';
						str += '<div class="cell"><input type="text" style="margin-bottom: 0;width: 150px;" value="' + item['express_no'] + '" onkeyup="this.value=this.value.replace(/\\D/g,\'\')" maxlength="15" class="express_no_empty input-common middle">';
						str += '</div></td></tr>';
					}
				}
			}
		}
	});
	$("#notShippedOrderList").html(str);
	// //初始化默认快递公司信息
	var express_company_id = $("#express_select_shipping").val();
	var express_name = $("#express_select_shipping option:selected").text();
	if(express_company_id == null || express_company_id == 0){
		$(".goToConfigure").show();
		$("#confirm_delivery").css({"background":"#ddd","color":"#777"});
		$("#express_select_shipping").html('<option value="0">暂未配置快递公司</option>');
	}else{
		$(".goToConfigure").hide();
		$("#confirm_delivery").css({"background":"#006dcc","color":"#fff"});
		$(".express_company_empty").text(express_name);
		$(".express_company_empty").attr("data_express_company_id",express_company_id);
	}

	$('[data-toggle="popover"]').popover();
	$('#not-shipped-order-list').modal('show');
}

//选择快递
$("#express_select").change(function(){
	var express_name = $("#express_select option:selected").text();
	var express_company_id = $("#express_select").val();
	$(".express_company_empty").text(express_name);
	$(".express_company_empty").attr("data_express_company_id",express_company_id);
})

$("#express_select_shipping").change(function(){
	var express_name = $("#express_select_shipping option:selected").text();
	var express_company_id = $("#express_select_shipping").val();
	$(".express_company_empty").text(express_name);
	$(".express_company_empty").attr("data_express_company_id",express_company_id);
})


//判断发货时订单号是否有空
function shipping_express_no_is_empty(){
	var is_have_empty = "";
	var express_company_id = $("#express_select_shipping").val();
	if(express_company_id == null || express_company_id == 0){
		showTip("请配置物流公司",'error');
		$(".goToConfigure").show();
		return false;
	}else{
		$(".goToConfigure").hide();
	}
	$("#notShippedOrderList tr input[type='text']").each(function(i,e){
		if($(e).val().length == 0){
			$(e).focus();
			$(e).css({"border-color":"red", "box-shadow" : "inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 8px rgba(255, 0, 0, 0.6)"});
			showTip("快递单号不可为空",'warning');
			is_have_empty =  false;
			return false;
		}else{
			$(e).css({"border-color":"#ccc","box-shadow":"none"});
			is_have_empty = true;
		}
	})
	return is_have_empty;
}
//确认发货
$("#confirm_delivery").click(function(){
	var print_order_arr = handling_delivery_data();
	var expressno_is_empty = shipping_express_no_is_empty();
	if(expressno_is_empty){
		$.ajax({
			type : "post",
			url : '<?php echo __URL("ADMIN_MAIN/order/addTmpExpressInformation"); ?>',
			data : {"print_order_arr" : JSON.stringify(print_order_arr),"deliver_goods" : 1},
			success : function(data){
				$('#not-shipped-order-list').modal('hide');
				if(data["code"] == 1){
					showMessage("success","发货成功",location.href);
				}else{
					showMessage("error",data['message']);
				}
			}
		})
	}
})
//处理发货数据
function handling_delivery_data(){
	$("#notShippedOrderList tr").each(function(i,e){
		var tmp_express_company_name = $(e).find(".data_express_company").text();
		var tmp_express_company_id = $(e).find(".data_express_company").attr("data_express_company_id");
		var tmp_express_no = $(e).find("input[type='text']").val();
		invoiceDate[i]["tmp_express_company_name"] = tmp_express_company_name;
		invoiceDate[i]["tmp_express_company_id"] = tmp_express_company_id;
		invoiceDate[i]["tmp_express_no"] = tmp_express_no;
	})
	return invoiceDate;
}

//打印订单
$("#PrintOrder").click(function(){
	var BatchSend = new Array();
	$("input[name='sub']:checked").each(function () {
		BatchSend.push($(this).val());
	});
	if (BatchSend.length == 0) {
		showTip("请先勾选文本框再进行批量操作！",'warning');
	}else{
		window.open(__URL("ADMIN_MAIN/order/printOrder?print_order_ids=" + BatchSend.toString()));
	}
})
</script>
<script type="text/javascript">


$(window).scroll(function(){
	var scrollTop = $(window).scrollTop();
	if(scrollTop > 140){
		$("nav.order-nav").addClass("to-fixed").css("width",$(".ns-main").width()-2);
	}else{
		$("nav.order-nav").removeClass("to-fixed").css("width","");
	}
});


$(function () { 
	$("[data-toggle='popover']").popover();
});
function searchData(){
	$(".more-search-container").slideUp();
	LoadingInfo(1);
}


function LoadingInfo(page_index) {
	var start_date = $("#startDate").val();
	var end_date = $("#endDate").val();
	$.ajax({
		type : "post",
		url : "<?php echo __URL('ADMIN_MAIN/order/customerServiceList'); ?>",
		data : {
			"page_index" : page_index,
			"page_size" : $("#showNumber").val(),
			"start_date" : start_date,
			"end_date" : end_date
		},
		success : function(data) {
		//	alert(JSON.stringify(data["data"][0]));
			if (data["data"].length > 0) {
				$("#ajax-orderlist tbody").empty();
				for (var i = 0; i < data["data"].length; i++) {
					var html = '';
					var out_trade_no = data["data"][i]["out_trade_no"];//交易号
					var id = data["data"][i]["id"];//id
					var order_id = data["data"][i]["order_id"];//订单id
					var order_no = data["data"][i]["order_no"];//订单编号
					var create_time = timeStampTurnTime(data["data"][i]["create_time"]);//下单时间
					var pic_cover_micro = data["data"][i]["picture"]['pic_cover_micro'];//商品图
					var goods_id = data["data"][i]["goods_id"];//商品id
					var goods_name = data["data"][i]["goods_name"];
					var sku_name = data["data"][i]["sku_name"];//商品sku
					var price = data["data"][i]["price"];//商品价格
					var num = data["data"][i]["num"];//购买数量
					var goods_money = data["data"][i]["goods_money"];//订单金额
					var shipping_money = data["data"][i]["shipping_money"];//运费
					var seller_memo = '';//订单备注
					var goods_code = data["data"][i]["code"];
					var gift_flag = data['data'][i]['gift_flag'];//赠品标识，0：不是赠品，1：是赠品
			
					var row=1;//订单数量，用于设置跨行
					if(data["data"][i].length!=null){
						row=data["data"][i].length;
					}

					html += '<tr>';
					
					html += '<td rowspan="'+row+'"><i class="checkbox-common"><input id="'+out_trade_no+'" type="checkbox"  value="'+order_id+'" name="sub"></i></td>';
					
					html += '<td>';
					
					html += '<div style="font-size: 12px;color: #126AE4;margin-bottom:5px;">';

					html +='<span>订单编号：'+order_no+'</span>&nbsp;<span>下单时间：'+create_time+'</span>';
					if(seller_memo.length > 0){
						html += '&nbsp;<span title="查看备注"><i class="fa fa-flag" aria-hidden="true" style="color:red;" title="查看备注" onclick="operation(\'seller_memo\','+data["data"][i]["order_id"]+')"></i></span>';
					}
					html += '</div>';
					
					html += '<div class="product-img"><img src="'+__IMG(pic_cover_micro)+'"></div>';
					html += '<div class="product-infor">';
					html += '<a href="'+__URL('SHOP_MAIN/goods/goodsinfo?goodsid='+goods_id)+'" target="_blank" style="color:#333;">'+goods_name+'</a>';
					if(sku_name != null && sku_name != ""){
						html += '<p class="specification" style="margin-bottom: 0px;"><span style="color:#8e8c8c;font-size:12px;">'+sku_name+'</span></p>';
					}
					if(goods_code != null && goods_code != ""){
						html += '<p class="specification"><span style="color:#8e8c8c;font-size:12px;">编码&nbsp;&nbsp;'+goods_code+'</span></p></div>';
					}
					
					html += '</div></td>';
					
					//订单数量大于1个，调整样式
					html += '<td>';
						html += '<div class="cell" style="display: inline-block;"><span>'+price+'元</span></div>';
						html += '<div class="cell" style="display: inline-block;float:right;">'+num+'件</div>';
					
					if(	data["data"][i]['audit_status'] != 0){
						//退款
						var order_goods_id = data["data"][i]["order_goods_id"];//订单项id
						var status_name = data["data"][i]["status_name"];//状态

						//订单数量大于1个，调整样式
						if(data["data"][i].length>1){
							html +='<a href="'+__URL('ADMIN_MAIN/order/ordercustomerdetail?id='+id+'&itemid='+order_goods_id)+'" style="margin:5px 0 10px 0;display:block;text-align:center;">'+status_name+'</a>';
						}else{
							html +='<a href="'+__URL('ADMIN_MAIN/order/ordercustomerdetail?id='+id+'&itemid='+order_goods_id)+'" style="margin:5px 0 10px 0;display:block;">'+status_name+'</a>';
						}
						for(var m = 0; m < data["data"][i]["refund_operation"].length; m++){
							var operation_type = data["data"][i]["refund_operation"][m]['no'];//选项类型
							var color = data["data"][i]["refund_operation"][m]['color'];
							var order_goods_id = data["data"][i]['order_goods_id'];//订单项id
							var refund_money = data["data"][i]["refund_money"];//退款金额
							var name = data["data"][i]["refund_operation"][m]['name'];//退款状态
							html += '<a style="display:block;margin-bottom:5px;color:'+color+';text-align:center;" href="javascript:refundOperation(\''+operation_type+'\','+id+','+order_id+','+order_goods_id+','+refund_money+')">'+name+'</a>';
						}
					}
					html += '</td>';
					
					html += '<td rowspan="'+row+'" style="text-align:center">';
					html += '<div class="cell"><b class="netprice" style="color: #FF6600;font-size: 14px;font-weight: normal;">'+goods_money+'</b><br/>';
				
					html += '<span class="expressfee">'+data["data"][i]["pay_type_name"]+'</span></div></td>';
					
					html += '<td rowspan="'+row+'" style="text-align:center">';
					
					//地址
					var address = data["data"][i]["receiver_address"];
					html += '<div style="text-align:left;"><span class="expressfee">'+data["data"][i]["receiver_name"]+'</span><br/><span class="expressfee">'+data["data"][i]["receiver_mobile"]+'</span>';
					if(data["data"][i]["fixed_telephone"] != ""){
						html += '<br><span>'+data["data"][i]["fixed_telephone"]+'</span>';
					}
					html += '<br/><span class="expressfee">'+address+'</span>';
					html += '</div></td>';
					
					html += '<td rowspan="'+row+'" style="text-align:center"><div class="cell">'+data["data"][i]["user_name"]+'<br/>';
					html += '<i class="'+data["data"][i]["order_from_tag"]+'" style="color:#666;"><i></div></td>';
					
					html += '<td rowspan="'+row+'"><div class="business-status" style="text-align:center">'+data["data"][i]["status_name"]+'<br></div></td>';
				
					html += '<td rowspan="'+row+'" style="text-align:center;">';
					html += '<a style="display:block;margin-bottom:5px;" href="'+__URL('ADMIN_MAIN/order/orderdetail?order_id='+order_id)+'">订单详情</a>';
				
					html +='</td></tr>';
					$("#ajax-orderlist tbody").append(html);
					
				}
			} else {
				var html = '<tr align="center"><td colspan="10">暂无符合条件的订单</td></tr>';
				$("#ajax-orderlist tbody").html(html);
			}
			initPageData(data["page_count"],data['data'].length,data['total_count']);
			$("#pageNumber").html(pagenumShow(jumpNumber,$("#page_count").val(),<?php echo $pageshow; ?>));
		}
	});
}

function addmemo(order_id,memo){
	$("#order_id").val(order_id);
	$("#memo").val(memo);
	$("#Memobox").modal("show");
}
/**
 * 订单数据导出
 */
function dataExcel(){
	var start_date = $("#startDate").val();
	var end_date = $("#endDate").val();
	var order_ids= new Array();
	$(".table-class tbody input[type = 'checkbox']:checked").each(function() {
		if (!isNaN($(this).val())) {
			order_ids.push($(this).val());
		}
	});
	window.location.href=__URL("ADMIN_MAIN/order/orderDataExcel?start_date="+start_date+"&end_date="+end_date+"&order_ids="+order_ids.toString()); 	
}

/**
* 批量删除已关闭订单
*/
function batchDelete(){
	var order_ids= new Array();
	$(".table-class tbody input[type = 'checkbox']:checked").each(function() {
		if (!isNaN($(this).val())) {
			order_ids.push($(this).val());
		}
	});
	if(order_ids.length ==0){
		$( "#dialog" ).dialog({
			buttons: {
				"确定,#0059d6,#fff": function() {
					$(this).dialog('close');
				}
			},
			contentText:"请选择需要操作的记录",
			title:"消息提醒",
		});
		return false;
	}
	delete_order(order_ids);
}

// 点击显示更多搜索
$(".more-search").click(function(){
	$(".more-search-container").slideToggle();
})

function CheckAll(event){
	var checked = $(event).is(":checked");
	if(checked) $("#ajax-orderlist tbody tr input[name='sub']").prop("checked", true).parent().addClass("selected");
	else $("#ajax-orderlist tbody tr input[name='sub']").prop("checked", false).parent().removeClass("selected");
}
</script>

</body>
</html>