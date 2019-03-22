<?php if (!defined('THINK_PATH')) exit(); /*a:6:{s:39:"template/adminblue\Order\orderList.html";i:1553151902;s:28:"template/adminblue\base.html";i:1553151902;s:45:"template/adminblue\controlCommonVariable.html";i:1553151902;s:32:"template/adminblue\urlModel.html";i:1553151902;s:34:"template/adminblue\pageCommon.html";i:1553151902;s:34:"template/adminblue\openDialog.html";i:1553151902;}*/ ?>
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
.seller_memo{background: #FFF9DF!important;color: #D09B4C;}
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
<input type="hidden" id="order_status" value="<?php echo $status; ?>" />
<div>	
	<table class="mytable select">
		<tr>
			<th align="left">
				<button onclick="dataExcel()" class="btn-common">导出数据</button>
		
				<a class="btn-common-white" id="PrintOrder" href="javascript:;">
					<i class="fa fa-print"></i>
					<span>打印订单</span>
				</a>
				<?php if($status != '' && $status != 0): if($status == 1): ?>
					<a class="btn-common-white" id="BatchShipment" href="javascript:;">
						<span>批量发货</span>
					</a>
					<?php endif; if(in_array(($status), explode(',',"1,2"))): ?>
					<a class="btn-common-white" id="PrintShipping" href="javascript:;">
						<i class="fa fa-print"></i>
						<span>打印出库单</span>
					</a>
					<a class="btn-common-white" id="BatchPrint" href="javascript:;">
						<i class="fa fa-print"></i>
						<span>批量打印快递单</span>
					</a>
					<a class="btn-common-white" id="BatchPrintinvoice" href="javascript:;">
						<i class="fa fa-print"></i>
						<span>批量打印发货单</span>
					</a>
					<?php endif; if($status == 5): ?>
					<a class="btn-common-white" href="javascript:batchDelete();">
						<i class="fa fa-trash"></i>
						<span>批量删除</span>
					</a>
					<?php endif; endif; ?>
			</th>
			<th style="position: relative;">
				<span>下单时间：</span>
				<input type="text" id="startDate" class="input-common middle" placeholder="请选择开始日期" onclick="WdatePicker({dateFmt:'yyyy-MM-dd HH:mm:ss'})" />
				&nbsp;-&nbsp;
				<input type="text" id="endDate" placeholder="请选择结束日期" class="input-common middle" onclick="WdatePicker({dateFmt:'yyyy-MM-dd HH:mm:ss'})" />
				<button class="btn-common-white more-search"><i class="fa fa-chevron-down"></i></button>
				<button onclick="searchData()" class="btn-common">搜索</button>

				<!-- 更多搜索 -->
				<div class="more-search-container">
					<dl>
						<dt>订单编号：</dt>
						<dd>
							<input id="orderNo" class="input-common middle" type="text" />
						</dd>
					</dl>
					<dl>
						<dt>收货人姓名：</dt>
						<dd>
							<input id="userName" class="input-common middle" type="text" />
						</dd>
					</dl>
					<dl>
						<dt>收货人手机号：</dt>
						<dd>
							<input id="receiverMobile" class="input-common middle" type="text" />
						</dd>
					</dl>
					<dl>
						<dt>支付方式：</dt>
						<dd>
							<select id="payment_type" class="select-common middle">
								<option value="">全部</option>
								<option value="0">在线支付</option>
								<option value="1">微信</option>
								<option value="2">支付宝</option>
								<option value="7">信用卡支付</option>
								<option value="8">微信线下支付</option>
								<option value="9">支付宝线下支付</option>
								<option value="10">线下支付</option>
								<option value="4">货到付款</option>
							</select>
						</dd>
					</dl>
					<dl>
						<dt>配送方式：</dt>
						<dd>
							<select id="shipping_type" class="select-common middle">
								<option value="0">全部</option>
								<option value="1">物流配送</option>
								<option value="2">买家自提</option>
								<option value="3">本地配送</option>
							</select>
						</dd>
					</dl>
					<dl>
						<dt></dt>
						<dd><button onclick="searchData()" class="btn-common">搜索</button></dd>
					</dl>
				</div>
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
			<col width="6%">
			<col width="7%">
			<col width="7%">
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
				<th>配送方式</th>
				<th>操作</th>
			</tr>
		</thead>
		<tbody id="ajax-orderlist"></tbody>
	</table>
</div>


<div id="orderAction"></div>


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


<script type="text/javascript">

var order_type = '<?php echo $order_type; ?>';
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
var is_load_orderaction = 0;
function LoadingInfo(page_index) {
	var start_date = $("#startDate").val();
	var end_date = $("#endDate").val();
	var user_name = $("#userName").val();
	var order_no = $("#orderNo").val();
	var receiver_mobile = $("#receiverMobile").val();
	var order_status = $("#order_status").val();
	var payment_type = $("#payment_type").val();
	var shipping_type = $("#shipping_type").val();
	$.ajax({
		type : "post",
		url : "<?php echo __URL('ADMIN_MAIN/order/orderlist'); ?>",
		data : {
			"page_index" : page_index,
			"page_size" : $("#showNumber").val(),
			"start_date" : start_date,
			"end_date" : end_date,
			"user_name" : user_name,
			"order_no" : order_no,
			"order_status" : order_status,
			"receiver_mobile" : receiver_mobile,
			"order_status" : order_status,
			"payment_type" : payment_type,
			"shipping_type" : shipping_type,
			"order_type" : order_type
		},
		success : function(data) {
			if (data["data"].length > 0) {

				$("#ajax-orderlist tbody").empty();
				for (var i = 0; i < data["data"].length; i++) {

					var html = '';
					var out_trade_no = data["data"][i]["out_trade_no"];//交易号
					var order_id = data["data"][i]["order_id"];//订单id
					var order_no = data["data"][i]["order_no"];//订单编号
					var create_time = timeStampTurnTime(data["data"][i]["create_time"]);//下单时间
					var pic_cover_micro = data["data"][i]["order_item_list"][0]["picture"]['pic_cover_micro'];//商品图
					var goods_id = data["data"][i]["order_item_list"][0]["goods_id"];//商品id
					var goods_name = data["data"][i]["order_item_list"][0]["goods_name"];
					var sku_name = data["data"][i]["order_item_list"][0]["sku_name"];//商品sku
					var price = data["data"][i]["order_item_list"][0]["price"];//商品价格
					var num = data["data"][i]["order_item_list"][0]["num"];//购买数量
					var order_money = data["data"][i]["order_money"];//订单金额
					var shipping_money = data["data"][i]["shipping_money"];//运费
					var seller_memo = data["data"][i]["seller_memo"];//订单备注
					var goods_code = data["data"][i]["order_item_list"][0]["code"];
					var gift_flag = data['data'][i]['order_item_list'][0]['gift_flag'];//赠品标识，0：不是赠品，1：是赠品
					var shipping_type_name = data['data'][i]['shipping_type_name']['type_name'];//配送方式

					var row=1;//订单数量，用于设置跨行
					if(data["data"][i]["order_item_list"].length!=null){
						row=data["data"][i]["order_item_list"].length;
					}

					html += '<tr>';
					
					html += '<td rowspan="'+row+'"><i class="checkbox-common"><input id="'+out_trade_no+'" type="checkbox"  value="'+order_id+'" name="sub"></i></td>';
					
					html += '<td>';
					
					html += '<div style="font-size: 12px;color: #126AE4;margin-bottom:5px;">';
// 					html +='<span>订单编号：'+order_no+' 交易号：'+out_trade_no+'</span><span>下单时间：'+create_time+'</span>';
					html +='<span>订单编号：'+order_no+'</span>&nbsp;<span>下单时间：'+create_time+'</span>';
					
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
					
					//添加赠品标识
					if(gift_flag > 0){
						html += '<i style="font-size:12px;margin:5px 5px 0 0;padding:1px 4px;border-radius:3px;display:inline-block;color:#FFF;background-color:#FF6600;height:16px;line-height: 16px;overflow:hidden;font-style:normal;">赠品</i>';
					}
					
					html += '</div></td>';
					
					//订单数量大于1个，调整样式
					html += '<td>';
						html += '<div class="cell" style="display: inline-block;"><span>'+price+'元</span></div>';
						html += '<div class="cell" style="display: inline-block;float:right;">'+num+'件</div>';
					
					//

					if(data["data"][i]["order_item_list"][0]['adjust_money'] != 0){
						var adjust_money = data["data"][i]["order_item_list"][0]["adjust_money"];//调教
						html += '<div class="cell" style="display: inline-block;"><span>(调价：'+adjust_money+'元)</span></div>';
					}
					if(	data["data"][i]["order_item_list"][0]['refund_status'] != 0){
						//退款
						var order_goods_id = data["data"][i]["order_item_list"][0]["order_goods_id"];//订单项id
						var status_name = data["data"][i]["order_item_list"][0]["status_name"];//状态

						//订单数量大于1个，调整样式
						if(data["data"][i]["order_item_list"].length>1){
							html +='<a href="'+__URL('ADMIN_MAIN/order/orderrefunddetail?itemid='+order_goods_id)+'" style="margin:5px 0 10px 0;display:block;text-align:center;">'+status_name+'</a>';
						}else{
							html +='<a href="'+__URL('ADMIN_MAIN/order/orderrefunddetail?itemid='+order_goods_id)+'" style="margin:5px 0 10px 0;display:block;">'+status_name+'</a>';
						}
						for(var m = 0; m < data["data"][i]["order_item_list"][0]["refund_operation"].length; m++){
							var operation_type = data["data"][i]["order_item_list"][0]["refund_operation"][m]['no'];//选项类型
							var color = data["data"][i]["order_item_list"][0]["refund_operation"][m]['color'];
							var order_goods_id = data["data"][i]["order_item_list"][0]['order_goods_id'];//订单项id
							var refund_require_money = data["data"][i]['order_item_list'][0]["refund_require_money"];//退款金额
							var name = data["data"][i]["order_item_list"][0]["refund_operation"][m]['name'];//退款状态
							html += '<a style="display:block;margin-bottom:5px;color:'+color+';text-align:center;" href="javascript:refundOperation(\''+operation_type+'\','+order_id+','+order_goods_id+','+refund_require_money+')">'+name+'</a>';
						}
					}
					html += '</td>';
					
					html += '<td rowspan="'+row+'" style="text-align:center">';
					html += '<div class="cell"><b class="netprice" style="color: #FF6600;font-size: 14px;font-weight: normal;">'+order_money+'</b><br/>';
					html += '<span class="expressfee">(含配送费:'+shipping_money+'元)</span><br/>';
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
					html += '<td rowspan="'+row+'"><div class="business-status" style="text-align:center">'+ shipping_type_name +'<br></div></td>';
					html += '<td rowspan="'+row+'" style="text-align:center;">';
					
					if(order_type == '7'){
						html += '<a style="display:block;margin-bottom:5px;" href="'+__URL('ADMIN_MAIN/order/bargainOrderDetail?order_id='+order_id)+'">订单详情</a>';
					}else{
						html += '<a style="display:block;margin-bottom:5px;" href="'+__URL('ADMIN_MAIN/order/orderdetail?order_id='+order_id)+'">订单详情</a>';	
					}
					/*if(order_type == '7'){
						html += '<a style="display:block;margin-bottom:5px;"onclick="operation(\'update_pay_status\',14)" >修改订单状态</a>';
					}else{
						html += '<a style="display:block;margin-bottom:5px;" onclick="operation(\'update_pay_status\',14)">修改订单状态</a>';
					}*/
				/*	if(order_type == '7'){
						html += '<a style="display:block;margin-bottom:5px;" href="'+__URL('ADMIN_MAIN/order/bargainOrderDetail?order_id='+order_id)+'">修改支付状态</a>';
					}else{
						html += '<a style="display:block;margin-bottom:5px;" href="'+__URL('ADMIN_MAIN/order/orderdetail?order_id='+order_id)+'">修改支付状态</a>';
					}
					if(order_type == '7'){
						html += '<a style="display:block;margin-bottom:5px;" href="'+__URL('ADMIN_MAIN/order/bargainOrderDetail?order_id='+order_id)+'">修改发货状态</a>';
					}else{
						html += '<a style="display:block;margin-bottom:5px;" href="'+__URL('ADMIN_MAIN/order/orderdetail?order_id='+order_id)+'">修改发货状态</a>';
					}*/

					if(data["data"][i]["operation"] != ''){
						for(var m = 0; m < data["data"][i]["operation"].length; m++){
							if(data["data"][i]["operation"][m]['no'] == "seller_memo"){
								html += '<a style="display:block;margin-bottom:5px;color:'+data["data"][i]["operation"][m]["color"]+'" href="javascript:operation(\''+data["data"][i]["operation"][m]['no']+'\','+data["data"][i]["order_id"]+')" >'+data["data"][i]["operation"][m]['name']+'</a>';
							}else{
								html += '<a style="display:block;margin-bottom:5px;color:'+data["data"][i]["operation"][m]["color"]+'" href="javascript:operation(\''+data["data"][i]["operation"][m]['no']+'\','+data["data"][i]["order_id"]+')" >'+data["data"][i]["operation"][m]['name']+'</a>';
							}
						}
					}
					html +='</td></tr>';
					//循环订单项
					//前边已经加载过一次了，所以从第二次开始循环
					for(var j = 1; j < data["data"][i]["order_item_list"].length; j++){
						var pic_cover_micro = data["data"][i]["order_item_list"][j]["picture"]['pic_cover_micro'];//商品图
						var goods_id = data["data"][i]["order_item_list"][j]["goods_id"];//商品id
						var goods_name = data["data"][i]["order_item_list"][j]["goods_name"];//商品名称
						var sku_name = data["data"][i]["order_item_list"][j]["sku_name"];//sku名称
						var price = data["data"][i]["order_item_list"][j]["price"];//价格
						var num = data["data"][i]["order_item_list"][j]["num"];//购买数量
						var gift_flag = data["data"][i]["order_item_list"][j]["gift_flag"];//赠品标识，0：不是赠品，1：是赠品
						
						var goods_code = data["data"][i]["order_item_list"][j]["code"];
						html += '<tr calss="js-child-order">';
						html += '<td colspan="1">';
						html += '<div class="product-img"><img src="'+__IMG(pic_cover_micro)+'"></div>';
						html += '<div class="product-infor">';
						html += '<a class="name" href="'+__URL('SHOP_MAIN/goods/goodsinfo?goodsid='+goods_id)+'" target="_blank" style="color:#333;">'+goods_name+'</a>';
						if(sku_name != null && sku_name != ''){
							html += '<p class="specification" style="margin-bottom: 0px;"><span style="color:#8e8c8c;font-size:12px;">'+sku_name+'</span></p>';
						}
						if(goods_code != null && goods_code != ''){
							html += '<p class="specification"><span style="color:#8e8c8c;font-size:12px;">'+goods_code+'</span></p>';
						}
						
						//添加赠品标识
						if(gift_flag > 0){
							html += '<i style="font-size:12px;margin:5px 5px 0 0;padding:1px 4px;border-radius:3px;display:inline-block;color:#FFF;background-color:#FF6600;height:16px;line-height: 16px;overflow:hidden;font-style:normal;">赠品</i>';
						}
						html += '</div></td>';

						//只给中间的商品加
						if((j+1) != data["data"][i]["order_item_list"].length){
							html += '<td style="border-left:0px solid #fff;border-bottom:1px solid #e5e5e5;">';//商品信息与商品清单的分割线
						}else{
							html += '<td style="border-left:0px solid #fff;">';//商品信息与商品清单的分割线
						}

						//添加赠品标识
						html += '<div class="cell" style="display: inline-block;"><span>'+price+'元</span></div>';
						html += '<div class="cell" style="display: inline-block;float:right">'+num+'件</div>';
						//调价
						if(data["data"][i]["order_item_list"][j]['adjust_money'] != 0){
							var adjust_money = data["data"][i]["order_item_list"][j]["adjust_money"];
							html += '<div class="cell" style="display: inline-block;"><span>(调价：'+adjust_money+'元)</span></div>';
						}
						if(data["data"][i]["order_item_list"][j]['refund_status'] != 0){
							//退款
							var order_goods_id = data["data"][i]["order_item_list"][j]["order_goods_id"];//订单项id
							var status_name = data["data"][i]["order_item_list"][j]["status_name"];//订单状态
							html +='<br><a href="'+__URL('ADMIN_MAIN/order/orderrefunddetail?itemid='+order_goods_id)+'" style="margin:5px 0 5px 0;display:block;text-align:center;text-align:center;">'+status_name+'</a>';
							for(var m = 0; m < data["data"][i]["order_item_list"][j]["refund_operation"].length; m++){
								var operation_type = data["data"][i]["order_item_list"][j]["refund_operation"][m]['no'];//选项类型
								var color = data["data"][i]["order_item_list"][j]["refund_operation"][m]['color'];
								var order_goods_id = data["data"][i]["order_item_list"][j]['order_goods_id'];//订单项id
								var refund_require_money = data["data"][i]['order_item_list'][j]["refund_require_money"];//退款金额
								var name = data["data"][i]["order_item_list"][j]["refund_operation"][m]['name'];//退款状态
								html += '<a style="display:block;margin-bottom:5px;color:'+color+';text-align:center;" href="javascript:refundOperation(\''+operation_type+'\','+order_id+','+order_goods_id+','+refund_require_money+')" >'+name+'</a>';
							}
						}
						html += '</td>';
						html += '</tr>';
					}
					if(seller_memo.length > 0){
						html += '<tr><td colspan="10" class="seller_memo">卖家备注：'+seller_memo+'</td></tr>';
					}
					if(i < data["data"].length - 1){
						html += '<tr style="height:10px;"><td style="border-bottom:solid #E1E6F0;border-width:0 0 1px 0;" colspan="10"></td></tr>';
					}
					$("#ajax-orderlist tbody").append(html);
				}
			} else {
				var html = '<tr align="center"><td colspan="10">暂无符合条件的订单</td></tr>';
				$("#ajax-orderlist tbody").html(html);
			}

			if(is_load_orderaction == 0){
				var action = "";
				$.each(data["action"], function(i, n){
					action += n; 
				})
				$("#orderAction").append(action);
				is_load_orderaction = 1;
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
	var user_name = $("#userName").val();
	var order_no = $("#orderNo").val();
	var receiver_mobile = $("#receiverMobile").val();
	var order_status = $("#order_status").val();
	var payment_type = $("#payment_type").val();
	var order_ids= new Array();
	$(".table-class tbody input[type = 'checkbox']:checked").each(function() {
		if (!isNaN($(this).val())) {
			order_ids.push($(this).val());
		}
	});
	window.location.href=__URL("ADMIN_MAIN/order/orderDataExcel?start_date="+start_date+"&end_date="+end_date+"&user_name="+user_name+"&order_no="+order_no+"&order_status="+order_status+"&receiver_mobile="+receiver_mobile+"&payment_type="+payment_type+"&order_ids="+order_ids.toString()); 	
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
$(".more-search").on("click", function(e){
	$(".more-search-container").slideToggle();
	$(document).one("click", function(){
        $(".more-search-container").slideUp();
    });
    e.stopPropagation();
})

$(".more-search-container").on("click", function(e){
    e.stopPropagation();
});

</script>

</body>
</html>