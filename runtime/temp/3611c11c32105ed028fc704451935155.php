<?php if (!defined('THINK_PATH')) exit(); /*a:6:{s:38:"template/adminblue\Config\shopSet.html";i:1536216630;s:28:"template/adminblue\base.html";i:1526106064;s:45:"template/adminblue\controlCommonVariable.html";i:1522486340;s:32:"template/adminblue\urlModel.html";i:1510819828;s:34:"template/adminblue\pageCommon.html";i:1525347460;s:34:"template/adminblue\openDialog.html";i:1522669943;}*/ ?>
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
	
<link rel="stylesheet" type="text/css" href="ADMIN_CSS/defau.css">
<script src="ADMIN_JS/art_dialog.source.js"></script>
<script src="ADMIN_JS/iframe_tools.source.js"></script>
<script src="ADMIN_JS/material_managedialog.js"></script>
<style>
.ns-main{margin-top:0px;}
.time-unit{position: relative;top: -2px;left: -4px;}
.selectric-items li{overflow: inherit;}
.selectric-items .selectric-scroll::-webkit-scrollbar,.selectric-items .selectric-scroll::-webkit-scrollbar{width: 2px;height: 2px;}
.selectric-items .selectric-scroll::-webkit-scrollbar-track,.selectric-items .selectric-scroll::-webkit-scrollbar-track{background-color: #fff;}
.selectric-items .selectric-scroll::-webkit-scrollbar-thumb,.selectric-items .selectric-scroll::-webkit-scrollbar-thumb{background-color: #ddd;}
.time-slot-item{padding:0 15px 0 10px;border:1px solid #ddd;margin-bottom: 10px;margin-right:10px;display: inline-block;cursor: pointer;position: relative;user-select: none;}
.time-slot-item .del{position: absolute;right: 0;top:0;display: inline-block;width: 12px;height: 12px;background: #f5f5f5;color: #666;text-align: center;line-height: 12px;font-style: normal;}
.time-slot-item.selected{border-color: #0059d6}
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
			
<div class="set-style">
	<!-- 模块一 -->
	<h4>基础设置</h4>
	<dl>
		<dt>自动收货时间：</dt>
		<dd>
			<input id="order_auto_delinery" type="number" min="0.00" step="1.00" onkeyup="value=value.replace(/[^\d+(\.\d+)?]/g,'')" value="<?php echo $shopSet['order_auto_delinery']; ?>" class="input-common harf" 
			/><em class="unit">天</em>
			<p class="hint">订单多长时间后自动收货，单位为/天(注：若为0，则订单不会自动收货)</p>
		</dd>
	</dl>
	<dl>
		<dt>订单自动关闭时间：</dt>
		<dd>
			<input id="order_buy_close_time" type="number" min="0.00" step="1.00" onkeyup="value=value.replace(/[^\d+(\.\d+)?]/g,'')" value="<?php echo $shopSet['order_buy_close_time']; ?>" class="input-common harf" 
			/><em class="unit">分钟</em>
			<p class="hint">订单开始后多长时间未付款自动关闭，单位为/分钟(注：不填写或0订单将不会自动关闭)</p>
		</dd>
	</dl>
	<dl>
		<dt>是否开启余额支付：</dt>
		<dd>
			<div class="controls">
				<p>
					<input id="order_balance_pay" type="checkbox"  class="checkbox" <?php if($shopSet['order_balance_pay'] == 1): ?>checked<?php endif; ?>/>
				</p>
			</div>
			<p class="hint">是否启用余额支付功能</p>
		</dd>
	</dl>
	<dl>
		<dt>是否开启货到付款：</dt>
		<dd>
			<div class="controls">
				<p>
					<input id="order_delivery_pay" type="checkbox"  class="checkbox" <?php if($shopSet['order_delivery_pay'] == 1): ?>checked<?php endif; ?>/>
				</p>
			</div>
			<p class="hint">是否开启货到付款功能</p>
		</dd>
	</dl>
	<dl>
		<dt>订单完成时间：</dt>
		<dd>
			<p style="height: 30px;">
				<select id="order_delivery_complete_time" class="select-common">
					<option value="0" <?php if($shopSet['order_delivery_complete_time'] == 0): ?>selected<?php endif; ?>>立即</option>
					<option value="1" <?php if($shopSet['order_delivery_complete_time'] == 1): ?>selected<?php endif; ?>>1天</option>
					<option value="2" <?php if($shopSet['order_delivery_complete_time'] == 2): ?>selected<?php endif; ?>>2天</option>
					<option value="3" <?php if($shopSet['order_delivery_complete_time'] == 3): ?>selected<?php endif; ?>>3天</option>
					<option value="4" <?php if($shopSet['order_delivery_complete_time'] == 4): ?>selected<?php endif; ?>>4天</option>
					<option value="5" <?php if($shopSet['order_delivery_complete_time'] == 5): ?>selected<?php endif; ?>>5天</option>
					<option value="6" <?php if($shopSet['order_delivery_complete_time'] == 6): ?>selected<?php endif; ?>>6天</option>
					<option value="7" <?php if($shopSet['order_delivery_complete_time'] == 7): ?>selected<?php endif; ?>>7天</option>
				</select>
			</p>
			<input type="hidden" id="closeday" value="<?php echo $shopSet['order_delivery_complete_time']; ?>">
			<p class="hint">收货后，多少时间订单自动完成，单位为/天</p>
		</dd>
	</dl>
	<dl>
		<dt>购物返积分设置：</dt>
		<dd>
			<p style="height: 30px;">
				<select id="shopping_back_points" class="select-common">
					<option value="1" <?php if($shopSet['shopping_back_points'] == 1): ?>selected<?php endif; ?>>订单已完成</option>
					<option value="2" <?php if($shopSet['shopping_back_points'] == 2): ?>selected<?php endif; ?>>已收货</option>
					<option value="3" <?php if($shopSet['shopping_back_points'] == 3): ?>selected<?php endif; ?>>支付完成</option>
				</select>
			</p>
			<p class="hint">在什么时间将购物返积分添加到会员账户</p>
		</dd>
	</dl>	
	<dl>
		<dt>是否显示购买记录：</dt>
		<dd>
			<div class="controls">
				<p>
					<input id="order_show_buy_record" type="checkbox"  class="checkbox" <?php if($shopSet['order_show_buy_record'] == 1): ?>checked<?php endif; ?>/>
				</p>
			</div>
			<p class="hint">是否显示购买记录</p>
		</dd>
	</dl>
	<dl>
		<dt>是否开启虚拟商品：</dt>
		<dd>
			<div class="controls">
				<p>
					<input id="is_open_virtual_goods" type="checkbox"  class="checkbox" <?php if($shopSet['is_open_virtual_goods'] == 1): ?>checked<?php endif; ?>/>
				</p>
			</div>
			<p class="hint">是否开启虚拟商品</p>
		</dd>
	</dl>
	<dl>
		<dt>系统默认评价设置：</dt>
		<dd>
			<div class="controls">
				<input type="number" class="input-common harf" value="<?php echo $shopSet['system_default_evaluate']['day']; ?>" id="evaluate_day" min="0"><em class="unit">天</em>
			</div>
			<p class="hint">订单完成达到设置天数后，用户仍未进行评价，则系统进行默认评价</p>
		</dd>
	</dl>
	<dl>
		<dt>售后设置：</dt>
		<dd>
			<div class="controls">
				<input type="number" class="input-common harf" value="<?php echo $shopSet['shouhou_day_number']; ?>" id="shouhoudate" min="0"><em class="unit">天</em>
			</div>
			<p class="hint">订单完成多少天之内可以售后</p>
		</dd>
	</dl>
	<dl>
		<dt>默认评价语：</dt>
		<dd>
			<div class="controls">
				<textarea class="textarea-common" id="evaluate"><?php echo $shopSet['system_default_evaluate']['evaluate']; ?></textarea>
			</div>
		</dd>
	</dl>
	<!-- 模块二 -->
	<h4>配送设置</h4>
	<dl>
		<dt>是否开启买家自提：</dt>
		<dd>
			<div class="controls">
				<p>
					<input id="buyer_self_lifting" type="checkbox"  class="checkbox" <?php if($shopSet['buyer_self_lifting'] == 1): ?>checked<?php endif; ?>/>
				</p>
			</div>
			<p class="hint">是否启用买家自提</p>
		</dd>
	</dl>
	
	<dl>
		<dt>是否开启商家配送：</dt>
		<dd>
			<div class="controls">
				<p>
					<input id="seller_dispatching" type="checkbox"  class="checkbox" <?php if($shopSet['seller_dispatching'] == 1): ?>checked<?php endif; ?>/>
				</p>
			</div>
			<p class="hint">是否启用商家配送</p>
		</dd>
	</dl>
	
	<?php if($is_support_o2o == '1'): ?>
	<dl>
		<dt>是否开启本地配送：</dt>
		<dd>
			<div class="controls">
				<p>
					<input id="is_open_o2o" type="checkbox"  class="checkbox" <?php if($shopSet['is_open_o2o'] == 1): ?>checked<?php endif; ?>/>
				</p>
			</div>
			<p class="hint">是否开启本地配送</p>
		</dd>
	</dl>	
	<?php endif; ?>
	
	<dl>
		<dt>是否允许选择物流：</dt>
		<dd>
			<div class="controls">
				<p>
					<input id="is_logistics" type="checkbox"  class="checkbox" <?php if($shopSet['is_logistics'] == 1): ?>checked<?php endif; ?>/>
				</p>
			</div>
			<p class="hint">是否允许用户选择物流</p>
		</dd>
	</dl>
	
	<dl>
		<dt>开启指定配送时间：</dt>
		<dd>
			<div class="controls">
				<p>
					<input id="order_designated_delivery_time" type="checkbox"  class="checkbox" <?php if($shopSet['order_designated_delivery_time'] == 1): ?>checked<?php endif; ?>/>
				</p>
			</div>
			<p class="hint">是否开启指定配送时间</p>
		</dd>
	</dl>

	<dl>
		<dt>设定配送时间段：</dt>
		<dd>
			<div class="time-slot">
				<?php if(!empty($shopSet['time_slot'])): if(is_array($shopSet['time_slot']) || $shopSet['time_slot'] instanceof \think\Collection || $shopSet['time_slot'] instanceof \think\Paginator): if( count($shopSet['time_slot'])==0 ) : echo "" ;else: foreach($shopSet['time_slot'] as $key=>$vo): ?>
						<span start="<?php echo $vo['start']; ?>" end="<?php echo $vo['end']; ?>" class="time-slot-item"><?php echo $vo['start']; ?>:00-<?php echo $vo['end']; ?>:00<i class="del" onclick="delTimeSlotItem(this)">×</i></span>
					<?php endforeach; endif; else: echo "" ;endif; endif; ?>
			</div>
			<div class="controls">
				<p>
					<select class="select-common short start">
						<option value="00">00</option>
						<option value="01">01</option>
						<option value="02">02</option>
						<option value="03">03</option>
						<option value="04">04</option>
						<option value="05">05</option>
						<option value="06">06</option>
						<option value="07">07</option>
						<option value="08">08</option>
						<option value="09">09</option>
						<option value="10">10</option>
						<option value="11">11</option>
						<option value="12">12</option>
						<option value="13">13</option>
						<option value="14">14</option>
						<option value="15">15</option>
						<option value="16">16</option>
						<option value="17">17</option>
						<option value="18">18</option>
						<option value="19">19</option>
						<option value="20">20</option>
						<option value="21">21</option>
						<option value="22">22</option>
						<option value="23">23</option>
					</select>
					<em class="unit time-unit">：00</em>
					<span>-</span>
					<select class="select-common short end">
						<option value="00">00</option>
						<option value="01">01</option>
						<option value="02">02</option>
						<option value="03">03</option>
						<option value="04">04</option>
						<option value="05">05</option>
						<option value="06">06</option>
						<option value="07">07</option>
						<option value="08">08</option>
						<option value="09">09</option>
						<option value="10">10</option>
						<option value="11">11</option>
						<option value="12">12</option>
						<option value="13">13</option>
						<option value="14">14</option>
						<option value="15">15</option>
						<option value="16">16</option>
						<option value="17">17</option>
						<option value="18">18</option>
						<option value="19">19</option>
						<option value="20">20</option>
						<option value="21">21</option>
						<option value="22">22</option>
						<option value="23">23</option>
					</select>
					<em class="unit time-unit">：00</em>
					<button class="btn-common" style="top: -2px;position: relative;" onclick="addTimeSlot(this);">添加</button>
				</p>
			</div>
			<p class="hint">商家设定配送时间段</p>
		</dd>
	</dl>
	
	<!-- 模块三 -->
	<h4>发票设置</h4>
	<dl>
		<dt>发票税率：</dt>
		<dd>
			<input id="order_invoice_tax" type="number" min="0.00" step="0.01" value="<?php echo $shopSet['order_invoice_tax']; ?>" class="input-common harf" /><em class="unit">%</em>
			<p class="hint">设置开发票的税率，单位为%</p>
		</dd>
	</dl>
	<dl>
		<dt>发票内容：</dt>
		<dd>
			<textarea rows="2" id="order_invoice_content" class="textarea-common" maxlength="50"><?php echo $shopSet['order_invoice_content']; ?></textarea>
			<p class="hint">客户要求开发票时可以选择的内容，逗号分格代表一个选项，例如：办公用品,明细</p>
		</dd>
	</dl>
	<dl>
		<dt></dt>
		<dd><button class="btn-common btn-big" onclick="setConfigAjax();">保存</button></dd>
	</dl>
</div>
<script src="__STATIC__/js/ajax_file_upload.js" type="text/javascript"></script>
<script src="__STATIC__/js/file_upload.js" type="text/javascript"></script>
<script>
var validation = true;//验证余额输入
$("#order_invoice_tax").live("keyup",function(){
	var reg = /^\d+(.{0,1})(\d{0,2})$/;
	if(!reg.test($(this).val())){
		showTip("请输入大于0的数字，并且保留两位小数","warning");
		validation = false;
	}else{
		validation = true;
	}
})

function setConfigAjax(){
	var order_delivery_complete_time = $('#order_delivery_complete_time').val();
	var order_buy_close_time = $('#order_buy_close_time').val();
	var order_auto_delinery = $("#order_auto_delinery").val();
	
	var order_invoice_tax = $("#order_invoice_tax").val();
	var order_invoice_content = $("#order_invoice_content").val();
	var shopping_back_points = $("#shopping_back_points").val();
	
	var order_balance_pay = $("#order_balance_pay").prop('checked') ? 1 : 0 ;
	var order_show_buy_record = $("#order_show_buy_record").prop('checked') ? 1 : 0 ;
	var buyer_self_lifting = $("#buyer_self_lifting").prop('checked') ? 1 : 0 ;
	var seller_dispatching = $("#seller_dispatching").prop('checked') ? 1 : 0 ;
	var is_open_o2o = $("#is_open_o2o").prop('checked') ? 1 : 0 ;
	var is_logistics = $("#is_logistics").prop('checked') ? 1 : 0 ;
	var is_open_virtual_goods = $("#is_open_virtual_goods").prop('checked') ? 1 : 0 ;//是否开启虚拟商品
	var order_designated_delivery_time = $("#order_designated_delivery_time").prop('checked') ? 1 : 0 ;//是否开启指定配送时间
	var order_delivery_pay = $("#order_delivery_pay").prop('checked') ? 1 : 0 ;
	var time_slot_arr = new Array();
	$(".time-slot .time-slot-item").each(function(){
		var time_slot = {
			'start': $(this).attr('start'),
			'end': $(this).attr('end')
		};
		time_slot_arr.push(time_slot);
	})
	var evaluate_day = $("#evaluate_day").val();
	var shouhoudate = $("#shouhoudate").val();
	var evaluate = $("#evaluate").val();
	if(evaluate_day > 0 && evaluate == ""){
		showTip("请设置系统默认评价语");
		return;
	}

	if(validation){
		$.ajax({
			type:"post",
			url : "<?php echo __URL('ADMIN_MAIN/config/shopset'); ?>",
			data : {
				"order_delivery_complete_time" : order_delivery_complete_time,
				"order_buy_close_time":order_buy_close_time,
				"order_balance_pay" : order_balance_pay,
				"order_delivery_pay" : order_delivery_pay,
				"order_auto_delinery" : order_auto_delinery,
				"order_show_buy_record" : order_show_buy_record,
				"buyer_self_lifting" : buyer_self_lifting,
				"seller_dispatching" : seller_dispatching,
				"is_open_o2o" : is_open_o2o,
				"is_logistics" : is_logistics,
				"order_invoice_tax" : order_invoice_tax,
				"order_invoice_content" : order_invoice_content,
				"shopping_back_points" : shopping_back_points,
				"is_open_virtual_goods" : is_open_virtual_goods,
				"order_designated_delivery_time" : order_designated_delivery_time,
				"time_slot" : JSON.stringify(time_slot_arr),
				"evaluate_day" : evaluate_day,
				"evaluate" : evaluate,
				"shouhoudate" : shouhoudate
			},
			success : function(data){
				if(data['code'] > 0){
					showTip(data["message"],"success");
					location.href="<?php echo __URL('ADMIN_MAIN/config/shopset'); ?>";
				}else{
					showTip(data["message"],"error");
				}
			}
		});
	}else{
		showTip("请输入大于0的数字，并且保留两位小数","warning");
	}
}

$(".time-slot .time-slot-item").live('click', function(){
	var start = $(this).attr("start"),
	    end = $(this).attr("end");
   	initTimeSelect(start, end);
	$(this).addClass('selected').siblings().removeClass('selected');
})

function addTimeSlot(obj){
	var start = $(obj).parents("dd").find(".start").val(),
		end = $(obj).parents("dd").find(".end").val(),
		html = $(".time-slot").html();
		if($(".time-slot .time-slot-item.selected").length > 0){
			$(".time-slot .time-slot-item.selected").attr({'start':start, 'end':end}).text(start + ':00-' + end + ':00').removeClass('selected');
			initTimeSelect('00', '00')
		}else{
			html += '<span start="' + start + '" end="' + end + '" class="time-slot-item">' + start + ':00-' + end + ':00<i class="del" onclick="delTimeSlotItem(this)">×</i></span>';
			$(".time-slot").html(html);
			initTimeSelect('00', '00')
		}
}

function delTimeSlotItem(obj){
	$(obj).parent('span').remove();
	initTimeSelect('00', '00')
}

function initTimeSelect(start, end){
	$(".start option[value='" + start + "']").attr('selected', true);
   	$(".end option[value='" + end + "']").attr('selected', true);
   	$(".start,.end").selectric()
}
</script>

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

</body>
</html>