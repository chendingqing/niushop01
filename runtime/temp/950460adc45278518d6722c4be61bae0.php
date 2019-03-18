<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:47:"template/wap\default_new\Order\myOrderList.html";i:1536221671;s:34:"template/wap\default_new\base.html";i:1530674553;s:38:"template/wap\default_new\urlModel.html";i:1510824803;}*/ ?>
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

    <link rel="stylesheet" type="text/css" href="__TEMP__/<?php echo $style; ?>/public/css/foundation.css">
    <link rel="stylesheet" type="text/css" href="__TEMP__/<?php echo $style; ?>/public/css/common-v4.4.css">
	<link rel="stylesheet" type="text/css" href="__TEMP__/<?php echo $style; ?>/public/css/person-v4.4.css">
	<link rel="stylesheet" type="text/css" href="__TEMP__/<?php echo $style; ?>/public/css/my_order_list.css">
    <script src="__TEMP__/<?php echo $style; ?>/public/js/order.js"></script>
<!-- 	<script type="text/javascript">window.onerror=function(){return true;}</script> -->
	<script type="text/javascript">
		function backPage(){
			window.location.href="<?php echo __URL('APP_MAIN/member/'); ?>";
		};
		
	</script>

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

	

    <!--topbar end-->
    <div class="main myorder">
    <section class="head">
    <a class="head_back" id="backoutapp" href="<?php echo __URL('APP_MAIN/member/index'); ?>"><i class="icon-back"></i></a>
		<div class="head-title"><?php echo lang('member_my_order'); ?></div>
		<div class="cf-container" data-reactid="2">
    		<div class="cf-edge" data-reactid="3"></div>
			<ul class="cf-content" data-reactid="4">

    			<li class="cf-tab-item" data-index="1" data-reactid="7" statusid="all"><a href="javascript:GetDataList('all',1);" ><?php echo lang('whole'); ?></a></li>
    			<li class="cf-tab-item" data-index="1" data-reactid="7" statusid="0"><a href="javascript:GetDataList(0);" ><?php echo lang('member_pending_payment'); ?></a></li>
				<li class="cf-tab-item" data-index="1" data-reactid="7" statusid="1"><a href="javascript:GetDataList(1,1);" ><?php echo lang('member_shipment_pending'); ?></a></li>
				<li class="cf-tab-item" data-index="1" data-reactid="7" statusid="2"><a href="javascript:GetDataList(2,1);" ><?php echo lang('member_goods_received'); ?></a></li>
<!-- 					<li class="cf-tab-item" data-index="1" data-reactid="7" statusid="3"><a href="javascript:GetDataList(3,1);" ><?php echo lang('member_received_goods'); ?></a></li> -->
<!-- 					<li class="cf-tab-item" data-index="1" data-reactid="7" statusid="5"><a href="javascript:GetDataList(5);" >待评价</a></li> -->
				<li class="cf-tab-item" data-index="1" data-reactid="7" statusid="4"><a href="javascript:GetDataList(4,1);" ><?php echo lang('refund_after_sale'); ?></a></li>
			
	    	</ul>
		</div>
	</section>
    	
    	

		<div class="tabs-content">
			<div class="content active" id="list_content" style="margin-top:30px;">
			</div>
		</div>
        <div id="pay" style="display: none"></div>
        
        <input type="hidden" name="status_hidden" id="status_hidden" value="<?php echo $status; ?>"/>
        <input type="hidden" name="shop_id" id="shop_id" value="<?php echo $shop_id; ?>"/>
		<input type="hidden" id="page_count"><!-- 总页数 -->
		<input type="hidden" id="page" value="1"><!-- 当前页数 -->
		<input type="hidden" id="status" value="all">
    </div>
    <script>
        $(function(){
        	$('.cf-container .cf-tab-item').click(function(){
        		$('.cf-container .cf-tab-item').removeClass('select');
        		$(this).addClass('select');
        	})
        	/* $('.cf-container .cf-tab-item.select').focus();
        	$(".cf-container .cf-content").animate({scrollLeft:$('.cf-container .cf-tab-item.select').offset().left},1000); */
        	var status_hidden=$('#status_hidden').val();
        	GetDataList(status_hidden);
        	$('.cf-container .cf-tab-item').each(function(){
        		if($(this).attr("statusid") == status_hidden){
        			$(this).addClass('select');
        		}
        	});
        })
        var is_load = false;//防止重复加载
        function GetDataList(status,page){
        	if(page == undefined || page == "") page = 1;
        	$("#page").val(page);//设置当前页
        	$("#status").val(status);//保存当前状态
        	if(is_load){
        		return false;
        	}
        	is_load = true;
        	$.ajax({
        		type:'post',
        		async:true,
        		data:{'status':status,'shop_id':$('#shop_id').val(),"page":page},
        		dataType:'json',
        		success:function(data){
        			$("#page_count").val(data['page_count']);//总页数
        			if(page == 1){
        				var datahtml="";
        			}else if(page > 1){
        				var datahtml = $('#list_content').html();
        			}
        			
        			if(data['data'].length==0){
        				datahtml+='<div class="myorder-none" ><i class="icon-none"></i><span class="none_01"><?php echo lang("member_no_order_yet"); ?></span><span class="none_02"><?php echo lang("member_go_and_see"); ?></span><span class="none_03"><a href="<?php echo __URL('APP_MAIN/goods/goodslist'); ?>"><?php echo lang("member_look_around"); ?></a></span></div>';
        			
        			}else{
        				
        				var shouhou_time = data['shouhou'] * 24*3600;
        				for(var i=0;i<data['data'].length;i++){       					
	        				var ordersitem=data['data'][i];
	        				datahtml+='<div class="list-myorder">';
	        				datahtml+='<div class="ordernumber" style="height:auto;overflow:hidden;line-height:22px;"><span class="order-num" style="font-size: 12px;">'+ordersitem['order_no']+'</span><span class="order-date" style="font-size: 12px;">'+timeStampTurnTime(ordersitem['create_time'])+'</span></div>';
	        				datahtml+='<ul class="ul-product">';
	        				
	        				for(var j=0;j<ordersitem['order_item_list'].length;j++){
	        					
	        					var goodsitem=ordersitem['order_item_list'][j];
	        					var gift_flag = ordersitem['order_item_list'][j]['gift_flag'];

	        					datahtml+='<li><a href="'+__URL('APP_MAIN/order/orderdetail?orderId='+goodsitem['order_id'])+'">';
	        					datahtml+='<span class="pic">';
	        					
	        					datahtml+='<img src="'+__IMG(goodsitem['picture']['pic_cover_micro'])+'"></span>';
	        					datahtml+='<div class="text">';
	        					datahtml+='<span class="pro-name" style="font-size: 12px;">'+goodsitem['goods_name']+'</span>';
	        					
	        					if(gift_flag > 0){
	        						datahtml+='<div class="pro-pric" style="margin-top: 5px;"><span style="font-size: 12px;"><?php echo lang("goods_price"); ?>:</span><b style="font-size:12px;font-weight:normal;">￥'+goodsitem['price']+'</b><i style="font-size:12px;padding:1px 4px;border-radius:3px;display:inline-block;color:#FFF;background-color:#de533c;height:16px;line-height: 16px;overflow:hidden;font-style:normal;margin-left:5px;position:relative;top:3px;">赠品</i></div>';
	        					}else{
	        						datahtml+='<div class="pro-pric" style="margin-top: 5px;"><span style="font-size: 12px;"><?php echo lang("goods_price"); ?>:</span><b style="font-size:12px;font-weight:normal;">￥'+goodsitem['price']+'</b></div>';
	        					}
	        					
	        					datahtml+='<div class="pro-pric" style="margin-top: 0px;"><span style="font-size: 12px;"><?php echo lang("specifications"); ?>:</span><b style="font-size:12px;font-weight:normal;">'+goodsitem['sku_name']+'</b></div>';
	        					datahtml+='<div class="pro-pric" style="margin-top: 5px;"><span style="font-size: 12px;"><?php echo lang("goods_number"); ?>:</span><b style="font-size:12px;font-weight:normal;">'+goodsitem['num']+'<?php echo lang("goods_piece"); ?></b></div>';
	        					datahtml+='</div></a>';
	        					
	        					datahtml+='<div class="" style="width:100%;float:left;color:#999999;margin-top: 5px;font-size: 12px;padding-top:5px;">';
	        					if(goodsitem['shipping_status']!=0){
	        						datahtml+='<div style="width:15%;float:left;"><?php echo lang("consign"); ?></div>';
	        					}
	        					datahtml += '<div style="width:85%;float:right;text-align:right;">';
	        					
	        					//非赠品才允许退款操作
	        					if(gift_flag == 0){
		        					if(ordersitem['payment_type']==4){
		        						if(ordersitem['is_refund']==1 && goodsitem['refund_status']==0 && ordersitem['order_status']==2){
			        						datahtml+='<input type="button" onclick="window.location.href=\''+__URL('APP_MAIN/Order/refundDetail?order_goods_id='+goodsitem['order_goods_id'])+'\'" style="-webkit-appearance: none;-webkit-border-radius:3px;-moz-border-radius:3px;-o-border-radius:3px;border-radius:3px;border:1px solid #ccc;color:#333;background-color:white;font-size: 12px;padding:5px 10px 5px 10px;" value="<?php echo lang("list_of_refund_return"); ?>" />&nbsp;&nbsp;';
		        						}
		        					}else{
		        						if(ordersitem['is_refund']==1 && goodsitem['refund_status']==0){
			        						datahtml+='<input type="button" onclick="window.location.href=\''+__URL('APP_MAIN/Order/refundDetail?order_goods_id='+goodsitem['order_goods_id'])+'\'" style="-webkit-appearance: none;-webkit-border-radius:3px;-moz-border-radius:3px;-o-border-radius:3px;border-radius:3px;border:1px solid #ccc;color:#333;background-color:white;font-size: 12px;padding:5px 10px 5px 10px;" value="<?php echo lang("list_of_refund_return"); ?>" />&nbsp;&nbsp;';
			        					}
		        					}
		        					
	        					}
	        					
	        					if(ordersitem['order_status'] == 4  && goodsitem['customer_info'] == null){	    
	        						if((data['data'][i]['finish_time'] + shouhou_time) > getCurrentTime() || data['shouhou'] == 0){
	        							datahtml+='<a href=\''+__URL('APP_MAIN/Order/customerDetail?order_goods_id='+goodsitem['order_goods_id'])+'\'"><span style="padding:5px;color: #333;border: 1px solid #ccc;border-radius: 3px;">申请售后</span></a>&nbsp;&nbsp;';	        						        						
	        						}
	        					}else if(ordersitem['order_status'] == 4 && goodsitem['customer_info']!=null){
	        						datahtml+='<a href=\''+__URL('APP_MAIN/Order/customerDetail?order_goods_id='+goodsitem['order_goods_id'])+'\'"><span style="padding:5px;color: #333;border: 1px solid #ccc;border-radius: 3px;">查看售后</span></a>&nbsp;&nbsp;';
	        					}
	        					
	        					if(goodsitem['refund_status']!=0){
	        						datahtml+='<input type="button" onclick="window.location.href=\''+__URL('APP_MAIN/Order/refundDetail?order_goods_id='+goodsitem['order_goods_id'])+'\'" style="-webkit-appearance: none;-webkit-border-radius:3px;-moz-border-radius:3px;-o-border-radius:3px;border-radius:3px;border:1px solid #ccc;color:#333;background-color:white;font-size: 12px;padding:5px 10px 5px 10px;" value="'+goodsitem['status_name']+'" />&nbsp;&nbsp;';
	        					}
	        					
	        					if(ordersitem['order_status'] == 3 || ordersitem['order_status'] == 4){
	        						if(ordersitem['is_evaluate'] == 0){
	        							datahtml += '<a href="'+__URL('APP_MAIN/order/reviewcommodity?orderId='+goodsitem['order_id'])+'"><span style="padding:5px;color: #333;border: 1px solid #ccc;border-radius: 3px;"><?php echo lang("member_i_want_evaluate"); ?></span></a>';
	        						}else if(ordersitem['is_evaluate'] == 1){
	        							datahtml += '<a href="'+__URL('APP_MAIN/order/reviewAgain?orderId='+goodsitem['order_id'])+'"><span style="padding:5px;color: #333;border: 1px solid #ccc;border-radius: 3px;"><?php echo lang("goods_additional_evaluation"); ?></span></a>';
	        						}
	        						
	        					}
	        					datahtml+='</div>';
	        					datahtml+='</div>';
	        					
	        					datahtml+='</li>';
	        				}
							datahtml+='</ul>';
							datahtml+='<div class="totle">';
							datahtml+='<span class="status">'+ordersitem['status_name']+'</span>';
							datahtml+='<span class="price">￥'+ordersitem['order_money']+'</span>';
							datahtml+='<span class="pric-lable"><?php echo lang("total_price"); ?></span>';
							datahtml+='<span class="prc-num"></span></div>';
							datahtml+='<div class="div-button">';
							if(ordersitem['member_operation']!=''){
								for(var x=0;x<ordersitem['member_operation'].length;x++){
									operationitem=ordersitem['member_operation'][x];
									datahtml+='<a href="javascript:void(0)" class="button [radius round] red" style="background-color: '+operationitem['color']+';border: 1px solid '+operationitem['color']+';" onclick="operation(\''+operationitem['no']+'\','+ordersitem['order_id']+')">'+operationitem['name']+'</a>';
								}
							}
							datahtml+='</div></div>';
	        			}
        			}
        			is_load = false;
        			$('#list_content').html(datahtml);
        		}
        	});
        }
        //app端返回值
        $("#backoutapp").click(function (){
            var json ={
            		"center" : "1",
                }
            window.webkit.messageHandlers.center.postMessage(json);
        })
        //滑动到底部加载
		$(window).scroll(function(){
			var totalheight = parseFloat($(window).height()) + parseFloat($(window).scrollTop());
			var content_box_height = parseFloat($("#list_content").height());
			if(totalheight - content_box_height >= 80 && content_box_height > 0){
				if(!is_load){
					var page = parseInt($("#page").val()) + 1;//页数
					var total_page_count = $("#page_count").val(); // 总页数
					var status = $('#status').val();
					if(page > total_page_count){
						return false;
					}else{
						GetDataList(status,page);
					}
				}
			}
		})
		
		function getCurrentTime(){
        	var d = new Date();
        	return Math.round(d.getTime()/1000);
        }
    </script>

	<!-- 微信登录弹出绑定手机号遮罩层 -->
	
	
	<input type="hidden" value="<?php echo $uid; ?>" id="uid"/>
	<!-- 加载弹出层 -->
	<div class="mask-layer-loading">
		<img src="__TEMP__/<?php echo $style; ?>/public/images/mask_load.gif"/>
	</div>
	
</body>
</html>