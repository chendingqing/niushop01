<?php if (!defined('THINK_PATH')) exit(); /*a:6:{s:51:"template/adminblue\Config\pictureUploadSetting.html";i:1527063034;s:28:"template/adminblue\base.html";i:1526106064;s:45:"template/adminblue\controlCommonVariable.html";i:1522486340;s:32:"template/adminblue\urlModel.html";i:1510819828;s:34:"template/adminblue\pageCommon.html";i:1525347460;s:34:"template/adminblue\openDialog.html";i:1522669943;}*/ ?>
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
.ns-main{margin-top:0;}
.config-box,.qiniu-hint{display:none;}
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
			
<div class="set-style" >
	<!-- 附件上传 开始-->
	<h4>上传方式设置</h4>
	<dl>
		<dt>保存方式：</dt>
		<dd>
			<select id="type" onchange="selectConfig();" class="select-common">
				<option value="1">本地</option>
				<option value="2">七牛</option>
			</select>
			<p class="hint qiniu-hint" >七牛云构建了基于容器的计算平台，并基于容器平台构建了功能丰富且开放性的智能媒体云平台。</p>
			<p class="hint qiniu-hint" >您只需考虑怎么处理数据，而无需考虑数据的规模和系统性能。</p>
		</dd>
	</dl>
	<div class="config-box config-data2">
		<dl>
			<dt>Accesskey：</dt>
			<dd>
				<input id="Accesskey" type="text"  value="<?php echo $config_data['data']['qiniu']['Accesskey']; ?>" class="input-common long" />
				<p class="hint">用于签名的公钥</p>
			</dd>
		</dl>
		<dl>
			<dt>Secretkey：</dt>
			<dd>
				<input id="Secretkey" type="text" value="<?php echo $config_data['data']['qiniu']['Secretkey']; ?>" class="input-common long" />
				<p class="hint">用于签名的私钥</p>
			</dd>
		</dl>
		<dl>
			<dt>Bucket：</dt>
			<dd>
				<input id="Bucket" type="text"  value="<?php echo $config_data['data']['qiniu']['Bucket']; ?>" class="input-common long" />
				<p class="hint">请保证bucket为可公共读取的</p>
			</dd>
		</dl>
		<dl>
			<dt>Url：</dt>
			<dd>
				<input id="QiniuUrl" type="text"  value="<?php echo $config_data['data']['qiniu']['QiniuUrl']; ?>" class="input-common long" />
				<p class="hint">七牛支持用户自定义访问域名。注：url开头加<i class="important-note">http://</i>或<i class="important-note">https://</i>，结尾不加 ‘<i class="important-note">/</i>’，例：http://abc.com</p>
			</dd>
		</dl>
	</div>
	<!-- 附件上传 结束-->
	<h4>默认图片设置</h4>
	<dl>
		<dt>默认商品图片：</dt>
		<dd>
			<div class="upload-btn-common">
				<div>
					<input class="input-file" name="file_upload" id="uploadDefault_goods_img" type="file" onchange="imgUpload(this);">
					<input type="hidden" id="default_goods_img" value="<?php echo $info['value']['default_goods_img']; ?>" />
				</div>
				<input type="text" id="text_default_goods_img" class="input-common" readonly="readonly" value="<?php if($info['value']['default_goods_img']): ?><?php echo $info['value']['default_goods_img']; endif; ?>" />
				<em>上传</em>
				
				<img id="preview_default_goods_img" src="__STATIC__/blue/img/upload-common-select.png" <?php if($info['value']['default_goods_img']): ?>data-src="<?php echo __IMG($info['value']['default_goods_img']); ?>"<?php endif; ?> data-html="true" data-container="body" data-placement="top" data-trigger="manual"/>

			</div>

			<p class="hint">
				<span>建议使用<i class="important-note">宽360</i>像素-<i class="important-note">高360</i>像素内的<i class="important-note">GIF</i>或<i class="important-note">PNG</i>正方形图片</span>
			</p>
		</dd>
	</dl>
	<dl>
		<dt>默认会员头像：</dt>
		<dd>
			<div class="upload-btn-common">
				<div>
					<input class="input-file" name="file_upload" id="uploadDefault_headimg" type="file" onchange="imgUpload(this);">
					<input type="hidden" id="default_headimg" value="<?php echo $info['value']['default_headimg']; ?>" />
				</div>
				<input type="text" id="text_default_headimg" class="input-common" readonly="readonly" value="<?php if($info['value']['default_headimg']): ?><?php echo $info['value']['default_headimg']; endif; ?>" />
				<em>上传</em>
				
				<img id="preview_default_headimg" src="__STATIC__/blue/img/upload-common-select.png" <?php if($info['value']['default_headimg']): ?>data-src="<?php echo __IMG($info['value']['default_headimg']); ?>"<?php endif; ?> data-html="true" data-container="body" data-placement="top" data-trigger="manual"/>

			</div>

			<p class="hint">
				<span>建议使用<i class="important-note">宽120</i>像素-<i class="important-note">高120</i>像素内的<i class="important-note">JPG</i>或<i class="important-note">PNG</i>正方形图片</span>
			</p>
		</dd>
	</dl>
	<dl>
		<dt>默认文章缩略图：</dt>
		<dd>
			<div class="upload-btn-common">
				<div>
					<input class="input-file" name="file_upload" id="uploadDefault_cms_thumbnail" type="file" onchange="imgUpload(this);">
					<input type="hidden" id="default_cms_thumbnail" value="<?php echo $info['value']['default_cms_thumbnail']; ?>" />
				</div>
				<input type="text" id="text_default_cms_thumbnail" class="input-common" readonly="readonly" value="<?php if($info['value']['default_cms_thumbnail']): ?><?php echo $info['value']['default_cms_thumbnail']; endif; ?>" />
				<em>上传</em>
				
				<img id="preview_default_cms_thumbnail" src="__STATIC__/blue/img/upload-common-select.png" <?php if($info['value']['default_cms_thumbnail']): ?>data-src="<?php echo __IMG($info['value']['default_cms_thumbnail']); ?>"<?php endif; ?> data-html="true" data-container="body" data-placement="top" data-trigger="manual"/>

			</div>

			<p class="hint">
				<span>建议使用<i class="important-note">宽120</i>像素-<i class="important-note">高120</i>像素内的<i class="important-note">JPG</i>或<i class="important-note">PNG</i>正方形图片</span>
			</p>
		</dd>
	</dl>
	<h4>上传参数设置</h4>
	<dl>
		<dt>商品图片添加水印：</dt>
		<dd>
			<input id="watermark" type="checkbox" class="checkbox" <?php if($water_info['watermark']=='1'): ?>checked="checked"<?php endif; ?>/>
		</dd>
	</dl>
	<dl>
		<dt>水印图片：</dt>
		<dd>
			<div class="upload-btn-common">
				<div>
					<input class="input-file" name="file_upload" id="uploadDefault_watermark" type="file" onchange="imgUpload(this);">
					<input type="hidden" id="default_watermark" value="<?php echo $water_info['imgWatermark']; ?>" />
				</div>
				<input type="text" id="text_default_watermark" class="input-common" readonly="readonly" value="<?php if($water_info['imgWatermark']): ?><?php echo $water_info['imgWatermark']; endif; ?>" />
				<em>上传</em>
				
				<img id="preview_default_watermark" src="__STATIC__/blue/img/upload-common-select.png" <?php if($water_info['imgWatermark']): ?>data-src="<?php echo __IMG($water_info['imgWatermark']); ?>"<?php endif; ?> data-html="true" data-container="body" data-placement="top" data-trigger="manual"/>

			</div>

			<p class="hint">
				<span>建议使用<i class="important-note">宽150</i>像素-<i class="important-note">高50</i>像素内的<i class="important-note">JPG</i>或<i class="important-note">PNG</i>图片</span>
			</p>
		</dd>
	</dl>
	<dl>
		<dt>水印透明度：</dt>
		<dd>
			<input id="transparency" type="number" min="0" step="1" value="<?php echo $water_info['transparency']; ?>" class="input-common harf"/><em class="unit">%</em>
			<p class="hint">水印的透明度，可选值为0-100。当设置为100时则为不透明。</p>
		</dd>
	</dl>
	<dl>
		<dt>水印位置：</dt>
		<dd>
			<div class="controls">
			<?php if($water_info['waterPosition'] == 1): ?>
			<label class="radio inline normal">
				<i class="checkbox-common selected">
					<input type="checkbox" name="water_position" value="1" checked>
				</i>
				左上角
			</label>
			<?php else: ?>
			<label class="radio inline normal">
				<i class="checkbox-common">
					<input type="checkbox" name="water_position" value="1">
				</i>
				左上角
			</label>
			<?php endif; if($water_info['waterPosition'] == 3): ?>
			<label class="radio inline normal">
				<i class="checkbox-common selected">
					<input type="checkbox" name="water_position" value="3" checked>
				</i>
				右上角
			</label>
			<?php else: ?>
			<label class="radio inline normal">
				<i class="checkbox-common ">
					<input type="checkbox" name="water_position" value="3">
				</i>
				右上角
			</label>
			<?php endif; if($water_info['waterPosition'] == 5): ?>
			<label class="radio inline normal">
				<i class="checkbox-common selected">
					<input type="checkbox" name="water_position" value="5" checked>
				</i>
				居中
			</label>
			<?php else: ?>
			<label class="radio inline normal">
				<i class="checkbox-common">	
					<input type="checkbox" name="water_position" value="5">
				</i>
				居中
			</label>
			<?php endif; ?>
				<br/>
			<?php if($water_info['waterPosition'] == 7): ?>
			<label class="radio inline normal">
				<i class="checkbox-common selected">
					<input type="checkbox" name="water_position" value="7" checked>
				</i>
				左下角
			</label>
			<?php else: ?>
			<label class="radio inline normal">
				<i class="checkbox-common">
					<input type="checkbox" name="water_position" value="7">
				</i>
				左下角
			</label>
			<?php endif; if($water_info['waterPosition'] == 9): ?>
			<label class="radio inline normal">
				<i class="checkbox-common selected">
					<input type="checkbox" name="water_position" value="9" checked>
				</i>
				右下角
			</label>
			<?php else: ?>
			<label class="radio inline normal">
				<i class="checkbox-common">
					<input type="checkbox" name="water_position" value="9">
				</i>
				右下角
			</label>
			<?php endif; ?>
			</div>
			<p class="hint">请选择水印位置</p>
		</dd>
	</dl>
	
	<dl style="display:none;">
		<dt>支持格式后缀：</dt>
		<dd>
			<textarea rows="2" id="upload_ext" class="textarea input-common" maxlength="50"><?php echo $info["upload_ext"]; ?></textarea>
			<p class="hint">支持上传文件格式后缀(后缀之间以,隔开)。</p>
		</dd>
	</dl>
	<dl style="display:none;">
		<dt>文件大小限制：</dt>
		<dd>
			<input id="upload_size" type="number" min="0" step="1" value="<?php echo $info['upload_size']; ?>" class="input-common" />
			<p class="hint">注意考虑php.ini的配置(0为不限制)</p>
		</dd>
	</dl>
	<!-- 附近上传 开始 -->
	<!-- 图片设置 开始 -->
	<dl>
		<dt>裁剪设置：</dt>
		<dd>
			<div class="controls">
			<!-- <?php if($info['thumb_type'] == 1): ?>
			<label class="radio inline normal"><input type="checkbox" name="thumb_type" value="1" checked>等比例缩放</label>
			<?php else: ?>
			<label class="radio inline normal"><input type="checkbox" name="thumb_type" value="1">等比例缩放</label>
			<?php endif; ?> -->
			<?php if($pic_info['thumb_type'] == 2): ?>
			<label class="radio inline normal">
				<i class="checkbox-common selected">
					<input type="checkbox" name="thumb_type" value="2" checked>
				</i>
				缩放后填充
			</label>
			<?php else: ?>
			<label class="radio inline normal">
				<i class="checkbox-common">
					<input type="checkbox" name="thumb_type" value="2">
				</i>
				缩放后填充
			</label>
			<?php endif; if($pic_info['thumb_type'] == 3): ?>
			<label class="radio inline normal">
				<i class="checkbox-common selected">
					<input type="checkbox" name="thumb_type" value="3" checked>
				</i>
				居中裁剪
			</label>
			<?php else: ?>
			<label class="radio inline normal">
				<i class="checkbox-common">
					<input type="checkbox" name="thumb_type" value="3">
				</i>
				居中裁剪
			</label>
			<?php endif; if($pic_info['thumb_type'] == 4): ?>
			<label class="radio inline normal">
				<i class="checkbox-common selected">
					<input type="checkbox" name="thumb_type" value="4" checked>
				</i>
				左上角裁剪
			</label>
			<?php else: ?>
			<label class="radio inline normal">
				<i class="checkbox-common">
					<input type="checkbox" name="thumb_type" value="4">
				</i>
				左上角裁剪
			</label>
			<?php endif; ?>
				<br/>
			<?php if($pic_info['thumb_type'] == 5): ?>
			<label class="radio inline normal">
				<i class="checkbox-common selected">
					<input type="checkbox" name="thumb_type" value="5" checked>
				</i>
				右下角裁剪
			</label>
			<?php else: ?>
			<label class="radio inline normal">
				<i class="checkbox-common">
					<input type="checkbox" name="thumb_type" value="5">
				</i>
				右下角裁剪
			</label>
			<?php endif; if($pic_info['thumb_type'] == 6): ?>
			<label class="radio inline normal">
				<i class="checkbox-common selected">
					<input type="checkbox" name="thumb_type" value="6" checked>
				</i>
				固定尺寸缩放
			</label>
			<?php else: ?>
			<label class="radio inline normal">
				<i class="checkbox-common">
					<input type="checkbox" name="thumb_type" value="6">
				</i>
				固定尺寸缩放
			</label>
			<?php endif; ?>
			</div>
			<p class="hint">请选择图片裁剪类型。</p>
		</dd>
	</dl>
	<!-- 图片设置 结束-->
	<dl>
		<dt></dt>
		<dd><button class="btn-common btn-big" onclick="setConfigAjax();">保存</button></dd>
	</dl>
</div>
<script src="__STATIC__/js/ajax_file_upload.js" type="text/javascript"></script>
<script src="__STATIC__/js/file_upload.js" type="text/javascript"></script>
<script type="text/javascript">
$(function(){
	$("input[name='thumb_type']").click(function(){
		$("input[name='thumb_type']").prop("checked", false).parent("i").removeClass('selected');
		$(this).prop("checked", true).addClass('selected');
	})
	
	$("input[name='water_position']").click(function(){
		$("input[name='water_position']").prop("checked", false).parent("i").removeClass('selected');
		$(this).prop("checked", true).addClass('selected');
	})
	
});

//保存数据
function setConfigAjax(){
	var thumb_type = $("input[name='thumb_type']:checked").val();
	var type = $("type").val();
	var upload_size = $("#upload_size").val();
	var upload_ext = $("#upload_ext").val();
	
	var default_goods_img = $("#default_goods_img").val();
	var default_headimg = $("#default_headimg").val();
	var default_cms_thumbnail = $("#default_cms_thumbnail").val();
	
	var Accesskey = $("#Accesskey").val();
	var Secretkey = $("#Secretkey").val();
	var Bucket = $("#Bucket").val();
	var QiniuUrl = $("#QiniuUrl").val();
	
	var qiniUrlRex = /^(http:\/\/|https:\/\/)/;
	var slashRex = /\/$/;
	if(type == 2){
		if(!qiniUrlRex.test($("#QiniuUrl").val()) || slashRex.test($("#QiniuUrl").val())){
			showTip("url开头加http://或https://","warning");
			$("#QiniuUrl").focus();
			return;
		}
	}
	var water_position = $("input[name='water_position']:checked").val();
	var transparency = $("#transparency").val();
	var watermark = 0;
	if($("#watermark").is(":checked")){
		watermark = 1;
	}
	var default_watermark = $("#default_watermark").val();
	if(watermark == 1 && default_watermark.length == 0){
		showTip("请选择水印文件","warning");
		return;
	}
	$.ajax({
		type:"post",
		url : "<?php echo __URL('ADMIN_MAIN/config/pictureSetting'); ?>",
		data : {
			"thumb_type" : thumb_type,
			"upload_size": upload_size,
			"upload_ext" : upload_ext,
			"default_goods_img" : default_goods_img,
			"default_headimg" : default_headimg,
			"default_cms_thumbnail" : default_cms_thumbnail,
			"Accesskey" : Accesskey,
			'Secretkey' : Secretkey,
			"Bucket" : Bucket,
			"QiniuUrl" : QiniuUrl,
			'waterPosition' : water_position,
			"transparency" : transparency,
			"watermark" : watermark,
			"default_watermark" : default_watermark
		},
		success : function(data){
			if(data['code'] > 0){
				showTip(data["message"],'success');
				location.href="<?php echo __URL('ADMIN_MAIN/config/pictureUploadSetting'); ?>";
			}else{
				showTip(data["message"],'error');
			}
		}
	});
}

//附件上传
var flag = false;
$(function(){
	$("#type").val(parseInt("<?php echo $config_data['type']; ?>"));
	selectConfig();
});

function setUploadConfig(){
	var type = $("#type").val();
	$.ajax({
		type:"post",
		url : "<?php echo __URL('ADMIN_MAIN/config/copyrightinfo'); ?>",
		data : { "type" : upload_type },
		success : function(data){
			if(data['code'] > 0){
				showTip(data["message"],'success');
				location.href=__URL("ADMIN_MAIN/config/uploadtype");
			}else{
				showTip(data["message"],'error');
			}
		}
	})
}

function selectConfig(){
	var type = $("#type").val();
	$(".config-box").hide();
	$(".config-data"+type).show();
	if(type == '1'){
		$(".qiniu-hint").hide();
	}else{
		$(".qiniu-hint").show();
	}
	if(flag){
		$.ajax({
			type:"post",
			url : "<?php echo __URL('ADMIN_MAIN/config/setUploadType'); ?>",
			data : { "type" : type },
			success : function(data){
				if(data['code'] > 0){
					showTip(data.message,"success");
				}else{
					showTip(data.message,"error");
				}
			}
		})
	}else{
		flag = true;
	}
}

//图片上传
function imgUpload(event) {
	var fileid = $(event).attr("id");
	var data = { 'file_path' : UPLOADWATERMARK};
	var id = $(event).next().attr("id");
	uploadFile(fileid,data,function(res){
		if(res.code){
			$("#"+id).val(res.data);
			$("#text_" + id).val(res.data);
			$("#preview_" + id).attr("data-src",__IMG(res.data));
			showTip(res.message,"success");
		}else{
			showTip(res.message,"error");
		}
	});
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