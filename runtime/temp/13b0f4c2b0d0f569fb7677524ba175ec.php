<?php if (!defined('THINK_PATH')) exit(); /*a:6:{s:41:"template/adminblue\Member\memberList.html";i:1553151902;s:28:"template/adminblue\base.html";i:1553151902;s:45:"template/adminblue\controlCommonVariable.html";i:1553151902;s:32:"template/adminblue\urlModel.html";i:1553151902;s:34:"template/adminblue\pageCommon.html";i:1553151902;s:34:"template/adminblue\openDialog.html";i:1553151902;}*/ ?>
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
	
<link rel="stylesheet" type="text/css" href="ADMIN_CSS/member_list.css" />
<script type="text/javascript" src="__STATIC__/My97DatePicker/WdatePicker.js"></script>
<style>
.head-portrait{
	margin-top:15px;
}
.mytable th {
    padding-left: 0px;
}
.btn-common-white{
	line-height:20px;
}
.member-div label{
	font-size:12px;
}
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
			
<table class="mytable">
	
	<tr>
		<th style="text-align: left;width: 20%;">
			<button class="btn-common-delete" onclick="batchDelete()" >批量删除</button>
			<button class="btn-common" onclick="add_user()" >添加会员</button>
			<button onclick="dataExcel()" value="导出数据" class="btn-common-white"  >导出数据</button>
		</th>
		<th style="width:50%;"> 
			<span>注册时间：</span>
			<input type="text" id="startDate" class="input-common middle" placeholder="请选择开始日期" onclick="WdatePicker()" />
			&nbsp;-&nbsp;
			<input type="text" id="endDate" placeholder="请选择结束日期" class="input-common middle" onclick="WdatePicker()" />
			<!-- 更多搜索按钮 -->
			<button class="btn-common-white more-search"><i class="fa fa-chevron-down"></i></button>
			<button onclick="searchData()" value="搜索" class="btn-common" >搜索</button>
			<!-- 更多搜索下拉框 -->
			<div class="more-search-container">
				<dl>
					<dt>搜索内容：</dt>
					<dd>
						<input type="text" id ='search_text' placeholder="手机号/邮箱/会员昵称" class="input-common middle" />
					</dd>
				</dl>
				<dl>
					<dt>会员等级：</dt>
					<dd>
						<select id="level_name" class="select-common middle">
							<option value ="-1">请选择会员等级</option>
							<?php if(is_array($level_list['data']) || $level_list['data'] instanceof \think\Collection || $level_list['data'] instanceof \think\Paginator): $i = 0; $__LIST__ = $level_list['data'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
							<option value ="<?php echo $vo['level_id']; ?>"><?php echo $vo['level_name']; ?></option>
							<?php endforeach; endif; else: echo "" ;endif; ?>
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
<table class="table-class">
	<colgroup>
	<col style="width: 2%;">
	<col style="width: 25%;">
	<col style="width: 7%;">
	<col style="width: 10%;">
	<col style="width: 10%;">
	<col style="width: 20%;">
	<col style="width: 6%;">
	<col style="width: 20%;">
	</colgroup>
	<thead>
		<tr align="center">
			<th><i class="checkbox-common"><input type="checkbox" onclick="CheckAll(this)"></i></th>
			<th style="text-align:left;">会员</th>
			<th style="text-align:left;">会员等级</th>
			<th style="text-align:right;">积分</th>
			<th style="text-align:right;">账户余额</th>
			<th>注册&登录</th>
			<th>状态</th>
			<th>操作</th>
		</tr>
	</thead>
	<tbody id="productTbody"></tbody>
</table>

<!-- 余额调整 -->
<div class="modal fade hide" id="recharge_balance" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h3>调整余额</h3>
			</div>
			<div class="modal-body">
				<div class="modal-infp-style">
					<table>
						<tr>
							<td>当前余额</td>
							<td colspan='3' id="current_balance" class="input-common" ></td>
						</tr>
						<tr>
							<td>调整金额</td>
							<td colspan='3' id="time">
								<input type="number" id="balance" class="input-common harf" /><em class="unit">元</em>
								<p class="hint">输入负数表示为减少</p>
							</td>
						</tr>
						<tr>
							<td>备注</td>
							<td colspan='3' id="time"><textarea id="remark_balance" class="textarea-common"></textarea></td>
						</tr>
					</table>
				</div>
			</div>
			
			<div class="modal-footer">
				<input type="hidden" id="balance_id" />
				<button class="btn-common btn-big" onclick="addAccount(2)">保存</button>
				<button class="btn-common-cancle btn-big" data-dismiss="modal">关闭</button>
			</div>
		</div>
	</div>
	
</div>

<!-- 积分调整 -->
<div class="modal fade hide" id="recharge_point" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h3>调整积分</h3>
			</div>
			<div class="modal-body">
				<div class="modal-infp-style">
					<table>
						<tr>
							<td>当前积分</td>
							<td colspan='3' id="current_point" class="input-common"></td>
						</tr>
						<tr>
							<td>调整积分</td>
							<td colspan='3' id="time">
								<input type="number" id="point" class="input-common harf"><em class="unit">分</em>
								<p class="hint">输入负数表示为减少</p>
							</td>
						</tr>
						<tr>
							<td>备注</td>
							<td colspan='3' id="time"><textarea id="remark_point" class="textarea-common"></textarea></td>
						</tr>
					</table>
					
				</div>
			</div>
			<div class="modal-footer">
				<input type="hidden" id="point_id" />
				<button class="btn-common btn-big" onclick="addAccount(1)">保存</button>
				<button class="btn-common-cancle btn-big" data-dismiss="modal">关闭</button>
			</div>
		</div>
	</div>
	
</div>

<!-- 添加会员 -->
<div class="modal fade hide" id="add_user" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h3>添加会员</h3>
			</div>
			<div class="modal-body">
				<div class="modal-infp-style">
					<table class="modal-tab">
						<tr>
							<td style="width:20%;"><span class="required">*</span>用户名</td>
							<td colspan='3'>
								<input type="text" id="username" class="input-common" />
								<span id="usernameyz"></span>
								<input type="hidden" value="不存在" id="isset_username" class="input-common" />
							</td>
						</tr>
						<tr>
							<td><span class="required">*</span>登录密码</td>
							<td colspan='3'><input type="password" id="password" class="input-common"></td>
						</tr>
						<tr>
							<td style="width:22%;"><span class="required">*</span>昵称</td>
							<td colspan='3'>
								<input type="text" id="nickname" class="input-common" />
							</td>
						</tr>
						<tr>
							<td>会员等级</td>
							<td colspan='3'>
								<?php if($level_list['data']): ?>
								<select id="member_level" class="select-common">
									<?php if(is_array($level_list['data']) || $level_list['data'] instanceof \think\Collection || $level_list['data'] instanceof \think\Paginator): if( count($level_list['data'])==0 ) : echo "" ;else: foreach($level_list['data'] as $key=>$vo): ?>
									<option value="<?php echo $vo['level_id']; ?>"><?php echo $vo['level_name']; ?></option>
									<?php endforeach; endif; else: echo "" ;endif; ?>
								</select>
								<?php else: ?>
								<span>暂无会员等级分类</span>
								<?php endif; ?>
							</td>
						</tr>
						<tr>
							<td>手机号码</td>
							<td colspan='3'><input type="text" id="telephone" class="input-common"/><span id="telephoneyz"></span></td>
						</tr>
						<tr>
							<td>邮箱地址</td>
							<td colspan='3'><input type="text" id="member_email" class="input-common" /><span id="member_emailyz"></span></td>
						</tr>
						<tr>
							<td>性别</td>
						
							<td>				
							<label class="radio inline normal"><i class="radio-common selected"><input type="radio" checked="checked" name="sex" value="1"/></i>
							<span>男</span></label>
							<label class="radio inline normal"><i class="radio-common"><input name="sex" type="radio" value="2"/></i>
							<span>女</span></label>
							<label class="radio inline normal"><i class="radio-common"><input name="sex" type="radio" value="0"/></i>
							<span>保密</span></label>
							</td>
						</tr>
						<tr>
							<td>账户状态</td>
							<td>
							<label  class="radio inline normal"><i class="radio-common selected"><input type="radio" checked="checked" name="status" value="1"/></i>
							<span>正常</span></label>
							<label  class="radio inline normal"><i class="radio-common"><input name="status" type="radio" value="0"/></i>
							<span>锁定</span></label>
							</td>
						</tr>
					</table>
				</div>
			</div>
			
			<div class="modal-footer">
				<button class="btn-common btn-big" onclick="addUser()">保存</button>
				<button class="btn-common-cancle btn-big" data-dismiss="modal">关闭</button>
			</div>
		</div>
	</div>
	
</div>

<input type="hidden" id="modify_uid"/>
<!-- 修改会员 -->
<div class="modal fade hide" id="modify_user" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

	<div class="modal-dialog" >
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h3 class="modal-title" id="myModalLabel">编辑会员</h3>
			</div>
			<div class="modal-body" style="min-height: 360px;">
				<div class="modal-infp-style">
					<table class="modal-tab">
						<tr style="height: 32px;">
							<td style="width:20%"><span class="required">*</span>用户名</td>
							<td colspan='3'>
<!-- 								<span id="modify_username"></span> -->
								<input type="text" id="modify_username" class="input-common" />
								<span id="modify_usernameyz"></span>
								<input type="hidden" value="不存在" id="modify_isset_username"/>
							</td>
						</tr>
						<tr>
							<td style="width:20%">昵称</td>
							<td colspan='3'><input type="text" id="modify_nickname" class="input-common"/></td>
						</tr>
						<tr>
							<td>会员等级</td>
							<td colspan='3' style="padding-bottom: 0;">
								<p>
									<?php if($level_list['data']): ?>
									<select id="modify_member_level" class="select-common">
										<?php if(is_array($level_list['data']) || $level_list['data'] instanceof \think\Collection || $level_list['data'] instanceof \think\Paginator): if( count($level_list['data'])==0 ) : echo "" ;else: foreach($level_list['data'] as $key=>$vo): ?>
										<option value="<?php echo $vo['level_id']; ?>"><?php echo $vo['level_name']; ?></option>
										<?php endforeach; endif; else: echo "" ;endif; ?>
									</select>
									<?php else: ?>
									<span>暂无会员等级分类</span>
									<?php endif; ?>
								</p>
							</td>
						</tr>
						<tr>
							<td>手机号码</td>
							<td colspan='3'><input type="text" id="modify_telephone" value="" class="input-common"/><span id="modify_telephoneyz"></td>
						</tr>
						<tr>
							<td>邮箱地址</td>
							<td colspan='3'><input type="text" id="modify_member_email" class="input-common"/><span id="modify_member_emailyz"></td>
						</tr>
				
						<tr>
							<td>性别</td>
						
							<td id="sex">				
							<label class="radio inline normal"><i class="radio-common"><input type="radio" checked="checked" name="sex" value="1"/></i>
							<span>男</span></label>
							<label class="radio inline normal"><i class="radio-common"><input name="sex" type="radio" value="2"/></i>
							<span>女</span></label>
							<label class="radio inline normal"><i class="radio-common"><input name="sex" type="radio" value="0"/></i>
							<span>保密</span></label>
							</td>
						</tr>
						<tr>
							<td>账户状态</td>
							<td  id="status">
							<label  class="radio inline normal"><i class="radio-common"><input type="radio" checked="checked" name="status" value="1"/></i>
							<span>正常</span></label>
							<label  class="radio inline normal"><i class="radio-common"><input name="status" type="radio" value="0"/></i>
							<span>锁定</span></label>
							</td>
						</tr>
					</table>
				</div>
			</div>
			
			<div class="modal-footer">
				<input type="hidden" id="modify_username_hidden" />
				<input type="hidden" name="" id="hidden_old_username" value="">
				<button class="btn-common btn-big" onclick="modifyUser()" id="butSubmit"  >保存</button>
				<button class="btn-common-cancle btn-big" data-dismiss="modal">关闭</button>
			</div>
		</div>
	</div>
	
</div>

<!-- 修改会员密码 -->
<div class="modal fade hide" id="modify_password" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h3 id="myModalLabel">重置密码</h3>
			</div>
			<div class="modal-body">
				<div class="modal-infp-style">
					<table class="modal-tab">
						<tr>
							<td style="width:20%">密码</td>
							<td colspan='3'><input type="text" id="modify_passwords" class="input-common"/></td>
						</tr>
					</table>
				</div>
			</div>
			
			<div class="modal-footer">
				<input type="hidden" id="modify_userid" />
				<button class="btn-common btn-big" onclick="modifypassword()">保存</button>
				<button class="btn-common-cancle btn-big" data-dismiss="modal">关闭</button>
			</div>
		</div>
	</div>
	
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

<script type="text/javascript">
function LoadingInfo(page_index) {
	var search_text = $("#search_text").val();
	var levelid = $("#level_name").val();
	var start_date = $("#startDate").val();
	var end_date = $("#endDate").val();
	var status = $("#status_search").val();
	$.ajax({
		type : "post",
		url : "<?php echo __URL('ADMIN_MAIN/member/memberlist'); ?>",
		data : {
			"page_index" : page_index, "page_size" : $("#showNumber").val(), "search_text" : search_text,"levelid":levelid, 
			"start_date" : start_date, "end_date" : end_date, "status" : status
		},
		success : function(data) {
			if (data["data"].length > 0) {
				$(".table-class tbody").empty();
				for (var i = 0; i < data["data"].length; i++) {
					var html = '';
					html += '<tr align="center">';
					html += '<td><i class="checkbox-common"><input name="sub" type="checkbox" value="'+ data["data"][i]["uid"]+'"></i></td>';
					html += '<td align="left">';
						
					if(data["data"][i]["user_headimg"] ==""){
						html += '<img src="<?php echo __IMG($default_headimg); ?>" class="head-portrait"/>';
						html += '<div style="float:left;" class="member-div">';
						if(data["data"][i]["user_name"] == '' || data["data"][i]["user_name"] == null){
// 							html+='用户名:'+'--'+'<br/>';
							html += '<label style="float:none;width:100%">用户名：<span>--</span></label>';
						}else{
// 							html+='用户名:'+data["data"][i]["user_name"] +'<br/>';
							html += '<label style="float:none;width:100%">用户名：<span>' + data["data"][i]["user_name"] + '</span></label>';
						}
						if (data["data"][i]["user_tel"] == null || "" == data["data"][i]["user_tel"]) {
							if (data["data"][i]["user_email"] == null || "" == data["data"][i]["user_email"]) {
// 								html += '昵称 : '+data["data"][i]["nick_name"] +'<br/>'+'手机 :'+'--'+'<br/>'+'邮箱 : '+'--';
								html += '<label style="float:none;width:100%">昵称: <span>' + data["data"][i]["nick_name"] + '</span></label>';
								html += '<label style="float:none;width:100%"><span>手机：--</span></label>';
								html += '<label style="float:none;width:100%"><span>邮箱：--</span></label>';
							} else {
// 								html += '昵称 : '+data["data"][i]["nick_name"] +'<br/>'+'手机 : '+'--'+'<br/>'+'邮箱 : '+data["data"][i]["user_email"];
								html += '<label style="float:none;width:100%">昵称 :<span>' + data["data"][i]["nick_name"] + '</span></label>';
								html += '<label style="float:none;width:100%"><span>手机：--</span></label>';
								html += '<label style="float:none;width:100%"><span>邮箱：' + data["data"][i]["user_email"] + "</span></label>";
							}
						} else {
							if (data["data"][i]["user_email"] == null || "" == data["data"][i]["user_email"]) {
// 								html += '昵称 : '+data["data"][i]["nick_name"] +'<br/>'+'手机 : '+data["data"][i]["user_tel"]+'<br/>'+'邮箱 : '+'--';
								html += '<label style="float:none;width:100%">昵称：<span>' + data["data"][i]["nick_name"] + "</span></label>";
								html += '<label style="float:none;width:100%">手机：<span>' + data["data"][i]["user_tel"] + "</span></label>";
								html += '<label style="float:none;width:100%">邮箱：<span>--</span></label>';
							} else {
// 								html += '昵称 : '+data["data"][i]["nick_name"] +'<br/>'+'手机 : '+data["data"][i]["user_tel"]+'<br/>'+'邮箱 : '+data["data"][i]["user_email"];
								html += '<label style="float:none;width:100%">昵称：<span>' + data["data"][i]["nick_name"] + '</span></label>';
								html += '<label style="float:none;width:100%">手机：<span>' + data["data"][i]["user_tel"] + '</span></label>';
								html += '<label style="float:none;width:100%">邮箱：<span>' + data["data"][i]["user_email"] + "</span></label>";
							}
						}
					}else{
						html += '<img src="'+__IMG(data["data"][i]["user_headimg"])+'" class="head-portrait"  onerror="this.src=\'<?php echo __IMG($default_headimg); ?>\'"/>';
						if (data["data"][i]["user_tel"] == null || "" == data["data"][i]["user_tel"]) {
							if (data["data"][i]["user_email"] == null || "" == data["data"][i]["user_email"]) {
// 								html += '昵称 : '+data["data"][i]["nick_name"] +'<br/>'+'手机 : '+'--'+'<br/>'+'邮箱 : '+'--';
								html += '<label style="float:none;width:100%">昵称：<span>' + data["data"][i]["nick_name"] + '</span></label>';
								html += '<label style="float:none;width:100%">手机：<span>--</span></label>';
								html += '<label style="float:none;width:100%">邮箱：<span>--</span></label>';
							} else {
// 								html += '昵称 : '+data["data"][i]["nick_name"] +'<br/>'+'手机 : '+'--'+'<br/>'+'邮箱 : '+data["data"][i]["user_email"];
								html += '<label style="float:none;width:100%">昵称：<span>' + data["data"][i]["nick_name"] + '</span></label>';
								html += '<label style="float:none;width:100%">手机：<span>--</span></label>';
								html += '<label style="float:none;width:100%">邮箱：<span>' + data["data"][i]["user_email"] + '</span></label>';
							}
						} else {
							if (data["data"][i]["user_email"] == null || "" == data["data"][i]["user_email"]) {
// 								html += '昵称 : '+data["data"][i]["nick_name"] +'<br/>'+'手机 : '+data["data"][i]["user_tel"]+'<br/>'+'邮箱 : '+'--';
								html += '<label style="float:none;width:100%">昵称：<span>' + data["data"][i]["nick_name"] + '</span></label>';
								html += '<label style="float:none;width:100%">手机：<span>' + data["data"][i]["user_tel"] + '</span></label>';
								html += '<label style="float:none;width:100%">邮箱：<span>--</span></label>';
							} else {
// 								html += '昵称 : '+data["data"][i]["nick_name"] +'<br/>'+'手机 : '+data["data"][i]["user_tel"]+'<br/>'+'邮箱 : '+data["data"][i]["user_email"];
								html += '<label style="float:none;width:100%">昵称：<span>' + data["data"][i]["nick_name"] + '</span></label>';
								html += '<label style="float:none;width:100%">手机：<span>' + data["data"][i]["user_tel"] + '</span></label>';
								html += '<label style="float:none;width:100%">邮箱：<span>' + data["data"][i]["user_email"] + '</span></label>';
							}
						}
					}
					html += '</div>';
					html += '</td>';
					if(data["data"][i]["level_name"]==null || data["data"][i]["level_name"]==undefined){
						html += '<td >--</td>';
					}else{
						html += '<td style="text-align:left;">' + data["data"][i]["level_name"] + '</td>';
					}
					html += '<td style="text-align:right;">' + data["data"][i]["point"] + '</td>';
					html += '<td style="text-align:right;">'+'¥'+ data["data"][i]["balance"] +'</td>';
					html += '<td>' +'注册时间 : '+ timeStampTurnTime(data["data"][i]["reg_time"]) +'<br>'+'最后登录 : '+ timeStampTurnTime(data["data"][i]["current_login_time"])+'</td>';
					html += data["data"][i]["user_status"] == 0 ? '<td style="color:red;">锁定</td>' : '<td style="color:green;">正常</td>';
					html += '<td>';
					//html += '<a href="'+__URL('ADMIN_MAIN/member/pointdetail?member_id='+ data['data'][i]['uid'])+'">积分明细</a>&nbsp;&nbsp;';
					//html += '<a href="'+__URL('ADMIN_MAIN/member/balancedetail?member_id='+ data['data'][i]['uid'])+'">余额明细</a><br/>';
					html += '<a href="'+__URL('ADMIN_MAIN/member/accountdetail?member_id='+ data['data'][i]['uid'])+'">账户明细</a><br/>';
					html += '<a onclick="recharge_point('+ data["data"][i]["uid"]+','+ data["data"][i]["point"] +')">积分调整</a>&nbsp;&nbsp;';
					html += '<a onclick="recharge_balance('+ data["data"][i]["uid"]+','+data["data"][i]["balance"]+')">余额调整</a><br/>';
					
					if(data["data"][i]["is_system"] != 1){
						if(data["data"][i]["user_status"] == 0){
							html += '<a onclick="unlockuser('+ data["data"][i]["uid"]+')">设置解锁&nbsp;&nbsp;&nbsp;</a>';
						}else{
							html += '<a onclick="lockuser('+ data["data"][i]["uid"]+')">设置锁定&nbsp;&nbsp;&nbsp;</a>';
						}
						html += '<a onclick="modify_password('+ data["data"][i]["uid"]+')">重置密码</a><br/>';
						html += '<a href="'+__URL('ADMIN_MAIN/member/newpath?member_id='+ data['data'][i]['uid'])+'">查看足迹</a>';
						
						html += '<a onclick="modify_user('+ data["data"][i]["uid"]+')">修改</a>&nbsp;<a onclick="delete_user('+ data["data"][i]["uid"]+')">删除</a><br/>';
						
					}
					html += '</td>'
					html += '</tr>';
					$(".table-class tbody").append(html);
				}
			} else {
				var html = '<tr align="center"><td colspan="9">暂无符合条件的数据记录</td></tr>';
				$(".table-class tbody").html(html);
			}
			initPageData(data["page_count"],data['data'].length,data['total_count']);
			$("#pageNumber").html(pagenumShow(jumpNumber,$("#page_count").val(),<?php echo $pageshow; ?>));
		}
	});
}
	
//全选
function CheckAll(event){
	var checked = event.checked;
	$("#productTbody input[type = 'checkbox']").prop("checked",checked);
	if(checked) $(".table-class tbody input[type = 'checkbox']").parent().addClass("selected");
	else $(".table-class tbody input[type = 'checkbox']").parent().removeClass("selected");
}

function searchData(){
	$(".more-search-container").slideUp();
	LoadingInfo(1);
}
	
//锁定会员
function lockuser(uid){
	$.ajax({
		type : "post",
		url : "<?php echo __URL('ADMIN_MAIN/member/memberlock'); ?>",
		data : { "id" : uid },
		success : function(data) {
			if (data["code"] > 0) {
				LoadingInfo(getCurrentIndex(uid,'#productTbody'));
				showTip(data['message'],'success');
			}else{
				showTip(data['message'],'error');
			}
		}
	});
}

//解锁会员
function unlockuser(uid){
	$.ajax({
		type : "post",
		url : "<?php echo __URL('ADMIN_MAIN/member/memberunlock'); ?>",
		data : { "id" : uid },
		success : function(data) {
			if (data["code"] > 0) {
				LoadingInfo(getCurrentIndex(uid,'#productTbody'));
				showTip(data['message'],'success');
			}else{
				showTip(data['message'],'error');
			}
		}
	});
}
	
//添加会员弹出
function add_user(){
	$("#add_user").modal("show");
}

//积分充值
function recharge_point(uid,point){
	$("#recharge_point").modal("show");
	$("#point_id").val(uid);
	$("#current_point").text(point);
}
//余额充值
function recharge_balance(uid,balance){
	$("#recharge_balance").modal("show");
	$("#balance_id").val(uid);
	$("#current_balance").text(balance);
}

//充值
function addAccount(type){
	var curr_obj = "";
	if(type == 1){
		var id = $("#point_id").val();
		var num = $("#point").val();
		var current_point = $("#current_point").text();
		var point = (parseInt(current_point) + parseInt(num));
		if(num == ''){
			showTip('积分不能为空','warning');
			return false;
		}
		var text = $("#remark_point").val();
		if(parseInt(point) < 0){
			showTip('积分不能为负数','warning');
			return false;
		}
		curr_obj = "recharge_point";
	}else{
		var id = $("#balance_id").val();
		var num = $("#balance").val();
		var current_balance = $("#current_balance").text();
		var balance = (parseInt(current_balance) + parseInt(num));
		if(num == ''){
			showTip('余额不能为空','warning');
			return false;
		}
		var text = $("#remark_balance").val();
		if(parseInt(balance) < 0){
			showTip('余额不能为负数','warning');
			return false;
		}
		curr_obj = "recharge_balance";
	}
	$.ajax({
		type : "post",
		url : "<?php echo __URL('ADMIN_MAIN/member/addmemberaccount'); ?>",
		data : {
			"id" : id,
			"type" : type,
			"num" : num,
			"text" : text
		},
		success : function(data) {
			if (data["code"] > 0) {
				LoadingInfo(getCurrentIndex(id,'#productTbody'));
				showTip(data['message'],'success');
				$("#"+curr_obj).modal("hide");
			}else{
				showTip(data['message'],'error');
			}
		}
	});
}

function checkUserName(username){
	var flag = true;
	$.ajax({
		type: "GET",
		url: "<?php echo __URL('ADMIN_MAIN/member/check_username'); ?>",
		async : false,
		data: {"username":username},
		success: function(data){
			if(data){
				flag = false;
				$("#username").css("border","1px solid red");
				$("#usernameyz").css("color","red").text("用户名已存在");
				$("#isset_username").attr("value","存在");
			}
		} 
	});
	return flag;
}

function checkMobile(mobile){
	var flag = false;
	$.ajax({
		type: "post",
		url: "<?php echo __URL('ADMIN_MAIN/member/checkUserInfoIsExist'); ?>",
		async : false,
		data: {"info":mobile,"type":"mobile"},
		success: function(data){
			if(data){
				flag = true;
			}
		} 
	});
	return flag;
}

function checkEmail(email){
	var flag = false;
	$.ajax({
		type: "post",
		url: "<?php echo __URL('ADMIN_MAIN/member/checkUserInfoIsExist'); ?>",
		async : false,
		data: {"info":email,"type":"email"},
		success: function(data){
			if(data){
				flag = true;
			}
		} 
	});
	return flag;
}

//添加会员
function addUser(){
	var username = $("#username").val();
	var nickname = $("#nickname").val();
	var password = $("#password").val();
	var level_name = $("#member_level").val();
	var tel = $("#telephone").val();
	var email = $("#member_email").val();
	var sex = $("input[name='sex']:checked").val();
	var status = $("input[name='status']:checked").val();
	
	if (username == '') {
		showTip('用户名不能为空','warning');
		return;
	}
	if(!checkUserName(username)){
		showTip('用户名已存在','warning');
		return;
	}

	if (password == null || password.length < 6) {
		showTip('密码必须不小于6位！','warning');
		return;
	}
	if (nickname == '') {
		showTip('昵称不能为空','warning');
		return;
	}
	if(tel.length > 0){
		if(!(/^(13[0-9]|14[579]|15[0-3,5-9]|16[6]|17[0135678]|18[0-9]|19[89])\d{8}$/.test(tel))){ 
			showTip("手机号码有误，请重填",'warning');
			return; 
		}
		if(checkMobile(tel)){
			showTip('该手机号码已存在','warning');
			return; 
		}
	}
	if(email.length > 0){
		if(!(/^(\w-*\.*)+@(\w-?)+(\.\w{2,})+$/.test(email))){ 
			showTip('邮箱错误,请重填','warning');
			return; 
		}
		if(checkEmail(email)){
			showTip('该邮箱已存在','warning');
			return; 
		}
	}
	$.ajax({
		type : "post",
		url : __URL("ADMIN_MAIN/member/addmember"),
		data : {
			'username' : username,
			'nickname' :nickname,
			'password' : password,
			'level_name' : level_name,
			'tel' : tel,
			'email' : email,
			'sex' : sex,
			'status' : status
		},
		success : function(data) {
			if (data['code'] > 0) {
				showTip(data['message'],'success');
				$("#add_user").modal("hide");
				LoadingInfo(getCurrentIndex(1,'#productTbody'));
			} else {
				showTip(data['message'],'error');
				flag = false;
			}
		}
	});
}
//修改会员弹出
function modify_user(uid){
	var id = parseInt(uid);
	$("#modify_user").modal("show");
	$.ajax({
		type : "post",
		url : "<?php echo __URL('ADMIN_MAIN/member/getmemberdetail'); ?>",
		data : { 'uid':id, },
		success : function(data) {
			//alert(JSON.stringify(data['user_name']));
			$("#modify_uid").val(data.uid);
			if(data['user_name']!=''){
				$("#modify_username,#hidden_old_username").val(data.user_name);
				$("#modify_username").attr('disabled',true);
			}else{
				$("#hidden_old_username").val("");
			}
			
			$("#modify_nickname").val(data.nick_name);
			//$("#modify_password").val(data.user_password);
			$("#modify_username_hidden").val(data.user_name);
			$("#modify_telephone").val(data.user_tel);
			$("#modify_member_email").val(data.user_email);

			$("#modify_telephone").attr("old-value", data.user_tel);
			$("#modify_member_email").attr("old-value", data.user_email);

			$("#modify_member_level").find("option[value="+data.member.member_level+"]").attr("selected",true);
			
			$("#sex").find("input[value="+data.sex+"]").attr("checked",true);
			$("#status").find("input[value="+data.user_status+"]").attr("checked",true);
			
			$("#modify_user").find("input[name='status']").parent().removeClass("selected");
			$("#modify_user").find("input[name='sex']").parent().removeClass("selected");
			$("#sex").find("input[value="+data.sex+"]").parent().addClass("selected");
			$("#status").find("input[value="+data.user_status+"]").parent().addClass("selected");
		}
	});
}

	//重置密码弹出
function modify_password(uid){
	$("#modify_password").modal("show");
	$("#modify_userid").val(uid);
}

//修改密码提交
function modifypassword(){
	var uid = $("#modify_userid").val();
	var password = $("#modify_passwords").val(); 
	if (password == null || password.length < 6) {
		showTip('密码必须不小于6位！','warning');
		return false;
	}
	$.ajax({
		type : "post",
		url : "<?php echo __URL('ADMIN_MAIN/member/updatememberpassword'); ?>",
		data : {
			'uid':uid,
			'user_password' :password
		},
		success : function(data) {
			if (data['code'] > 0) {
				showTip('修改成功','success');
				LoadingInfo(getCurrentIndex(uid,'#productTbody'));
				$("#modify_password").modal("hide");
			} else {
				showTip('修改失败','error');
				flag = false;
			}
		}
	});
}

function delete_user(uid){
	$( "#dialog" ).dialog({
		buttons: {
			"确定": function() {
				$.ajax({
					type : "post",
					url : "<?php echo __URL('ADMIN_MAIN/member/deletemember'); ?>",
					data : { "uid" : uid.toString() },
					dataType : "json",
					success : function(data) {
						if(data["code"] > 0 ){
							LoadingInfo(getCurrentIndex(uid.toString(),'#productTbody'));
							showTip(data["message"],'success');
							$("#chek_all").prop("checked", false);
						}else{
							showTip(data["message"],'error');
						}
					}
				});
				$(this).dialog('close');
			},
			"取消,#f5f5f5,#666": function() {
				$(this).dialog('close');
			},
		},
		contentText:"删除会员同时会删除会员相关账户信息，确定要删除吗？",
	});
}

////修改会员
function modifyUser(){
	var uid = $("#modify_uid").val();
	var nickname = $("#modify_nickname").val();
	var username = $("#modify_username").val();

	var tel = $("#modify_telephone").val();
	var old_tel = $("#modify_telephone").attr("old-value");

	var email = $("#modify_member_email").val();
	var old_email = $("#modify_member_email").attr("old-value");

	var level_name = $("#modify_member_level").val();
	var sex = $("input[name='sex']:checked").val();
	var status = $("input[name='status']:checked").val();
	
	if(nickname == ""){
		showTip("昵称不能为空","warning");
		$("#modify_nickname").focus();
		return;
	}
	
	if (username == '') {
		showTip('用户名不能为空','warning');
		return;
	}

	if(tel.length > 0){
		if(!(/^(13[0-9]|14[579]|15[0-3,5-9]|16[6]|17[0135678]|18[0-9]|19[89])\d{8}$/.test(tel))){ 
			showTip("手机号码有误，请重填",'warning');
			return false; 
		}
		if(tel != old_tel){
			if(checkMobile(tel)){
				showTip('该手机号码已存在','warning');
				return; 
			}
		}
	}
	 if(email.length > 0){
		if(!(/^(\w-*\.*)+@(\w-?)+(\.\w{2,})+$/.test(email))){ 
			showTip('邮箱错误,请重填','warning');
			return false; 
		}
		if(email != old_email){
			if(checkEmail(email)){
				showTip('该邮箱已存在','warning');
				return; 
			}
		}
	}

	var user_data = {
		'uid':uid,
		'nick_name' : nickname,
		'level_name' : level_name,
		'tel' : tel,
		'email' : email,
		'sex' : sex,
		'status' : status
	};

	if($("#hidden_old_username").val() == ""){
		user_data.user_name = username;
	}

	$.ajax({
		type : "post",
		url : "<?php echo __URL('ADMIN_MAIN/member/updatemember'); ?>",
		data : user_data,
		success : function(data) {
			if (data['code'] > 0) {
				showTip(data['message'],'success');
				LoadingInfo(getCurrentIndex(uid,'#productTbody'));
				$("#modify_user").modal("hide");
			} else {
				showTip(data['message'],'error');
				flag = false;
			}
		}
	});
}
//批量删除
function batchDelete() {
	var uid= new Array();
	$("#productTbody input[type='checkbox']:checked").each(function() {
		if (!isNaN($(this).val())) {
			uid.push($(this).val());
		}
	});
	if(uid.length ==0){
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
	delete_user(uid);
}

/**
 * 会员数据导出
 */
function dataExcel(){
	var search_text = $("#search_text").val();
	var levelid = $("#level_name").val();
	$.ajax({
		url : "<?php echo __URL('ADMIN_MAIN/member/memberExcellist'); ?>",
		type : "post",
		data : {
			"search_text" : search_text,
			"levelid" : levelid
		},
		success : function (data){
			console.log(data);
			if(data['data'] != ""){
				window.location.href=__URL("ADMIN_MAIN/member/memberDataExcel?search_text="+search_text+"&levelid="+levelid); 	
			}else{
				showTip("没有导出的会员数据",'error');
			}
		}
	})	
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