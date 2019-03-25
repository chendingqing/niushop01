<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:55:"template/wap\default_new\Pay\pcOptionPaymentMethod.html";i:1553248161;s:38:"template/wap\default_new\urlModel.html";i:1553151903;}*/ ?>
<!DOCTYPE html>
<html>
	<head>
	<meta charset="UTF-8">
	<title><?php echo lang('choose_payment_method'); ?>-<?php echo $title; ?></title>
		<link type="text/css" rel="stylesheet" href="__TEMP__/<?php echo $style; ?>/public/css/pay/pcPayValue.css">
	</head>
	<body class="body">
		<div class="header">
			<div class="container">
				<div class="logo fl">
					<img alt="<?php echo $web_info['title']; ?><?php echo lang('cashier_desk'); ?>" src="<?php echo __IMG($web_info['logo']); ?>" />
				</div>
			</div>
		</div>
		<!-- 订单支付内容区域 -->
		<div class="pay-body">
			<div class="payment-wrap">
				<!-- 支付详情 -->
				<div class="order-detail">
					<dl>
						<dt>支付流水号：</dt>
						<dd><?php echo $pay_value['out_trade_no']; ?></dd>
					</dl>
					<div class="order-pay-money">
						<span>
							支付金额：
							<em class="rmb"><i>￥</i><?php echo $pay_value['pay_money']; ?></em>
						</span>
						<!-- <a href="" class="show-order-detail">订单详情</a> -->
					</div>
					<div class="order-info">
						<dl>
							<dt>支付主体：</dt>
							<dd><?php echo $pay_value['pay_body']; ?></dd>
						</dl>
						<dl>
							<dt>支付人：</dt>
							<dd><?php echo $member_info['user_info']['nick_name']; ?></dd>
						</dl>
						<dl>
							<dt>支付金额：</dt>
							<dd>￥<?php echo $pay_value['pay_money']; ?></dd>
						</dl>
						<!--TODO 订单关闭时间-->
						<!--<dl>
							<dt>订单关闭时间：</dt>
							<dd>请尽快进行支付，订单会在<time class="close-time">00:00:00</time>之后进行关闭</dd>
						</dl>-->
					</div>
				</div>
				<!-- 支付方式 -->
				<div class="pay-type">
					<p class="pay-type-tit">支付方式：</p>
					<?php if($pay_config['wchat_pay_config']['is_use'] ==1 || $pay_config['ali_pay_config']['is_use'] == 1 || $pay_config['union_pay_config']['is_use'] == 1): ?>
					<ul class="pay-type-list">
						<?php if($pay_config['wchat_pay_config']['is_use']==1): ?>
						<li data-pay="wchat">
							<img src="__TEMP__/<?php echo $style; ?>/public/images/pay/wechat_qr.png">
							<i class="select-icon"></i>
						</li>
						<?php endif; if($pay_config['ali_pay_config']['is_use']==1): ?>
					 	<li data-pay="alipay">
					 		<img src="__TEMP__/<?php echo $style; ?>/public/images/pay/alipay.png">
					 		<i class="select-icon"></i>
					 	</li>
					 	<?php endif; if($pay_config['union_pay_config']['is_use']==1): ?>
					 	<li data-pay="unionpay">
					 		<img src="__TEMP__/<?php echo $style; ?>/public/images/pay/unionpay_card.png">
					 		<i class="select-icon"></i>
					 	</li> 
					 	<?php endif; ?>	
					</ul>
					<?php else: ?>
					<p class="no-payment-type"><?php echo lang('not_yet_open_payment_background'); ?></p>
					<?php endif; ?>
				</div>
			
				<?php if($pay_config['wchat_pay_config']['is_use'] ==1 || $pay_config['ali_pay_config']['is_use'] == 1 || $pay_config['union_pay_config']['is_use'] == 1): ?>
				<a href="javascript:;" class="payment-btn" id="pay">立即支付</a>
				<?php else: ?>
				<a href="javascript:;" class="payment-btn disabled" id="pay">立即支付</a>
				<?php endif; ?>
			</div>
		</div>
		
		<!-- 点击支付之后弹出 -->
		<div class="layer-shade">
			<div class="layer">
				<div class="layer-content">
					<div class="control">
						<p class="title">请在新开的支付页面上完成付款</p>
						<p class="tip">支付完成前请勿关闭页面！</p>
					</div>
				</div>
				<div class="layer-foot">
					<a href="<?php echo __URL('SHOP_MAIN/member/index'); ?>" class="payment-completion"><?php echo lang('payment_has_been_completed_check_my_membership_center'); ?></a>
				</div>
			</div>
		</div>
		

		<input type="hidden" value="<?php echo getTimeStampTurnTime($pay_value['create_time'] ); ?>" id="create_time" />
		<input type="hidden" value="<?php echo $shop_config['order_buy_close_time']; ?>" id="buy_close_time" />
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
		
		<script src="__TEMP__/<?php echo $style; ?>/public/js/jquery.js"></script>
		<script src="__STATIC__/js/load_bottom.js" type="text/javascript"></script>
		<script type="text/javascript">
			var APPMAIN='APP_MAIN';
			var STATIC = "__STATIC__";
			var interval = null;
			function countdown(){
				var date = new Date($("#create_time").val().replace(/\-/g, "\/"));//订单创建时间
				var buy_close_time = parseFloat($("#buy_close_time").val())*60*1000;//订单关闭时间
				date.setDate(date.getDate()+1);
				var date_now = new Date($.ajax({async: false}).getResponseHeader("Date"));//当前时间
				var end_time = date.getTime()+buy_close_time; //结束时间毫秒数
				var lag = (end_time - date_now.getTime()) / 1000; //当前时间和结束时间之间的秒数
				if (lag > 0) {
					var hour = Math.floor((lag / 3600) % 24);
					var minute = Math.floor((lag / 60) % 60);
					var second = Math.floor(lag % 60);
					if(hour == 0 && second == 0 && minute == 0){
						clearInterval(interval);
						window.history.go(-1);
					}
					if(second<10){
						second = "0"+second;
					}
					if(minute<10){
						minute = "0"+minute;
					}
					if(hour<10){
						hour = "0"+hour;
					}
					$(".close-time").text(hour+":"+minute+":"+second);
				}
			}

			$(function() {					
				//设置时间倒计时
				countdown();
				interval = setInterval("countdown()",1000);

				//如果有支付方式则默认选中第一个支付方式
				if($(".pay-type-list li").length > 0){
					$(".pay-type-list li").eq(0).addClass("selected");
					$("#pay").removeClass("disabled");
				}

				$(".pay-type-list li").click(function() {
					$(this).addClass("selected").siblings("li").removeClass("selected");
					$("#pay").removeClass("disabled");
				})

				//去支付
				$("#pay").click(function() {
					if ($('.pay-type-list li.selected').attr("data-pay") != null) {
						
						switch ($('.pay-type-list li.selected').attr("data-pay")) {
						case "wchat":
							url = '<?php echo __URL('APP_MAIN/pay/wchatpay?no='.$pay_value['out_trade_no']); ?>';
							break;
						case "alipay":
							//跳转到支付宝
							url = '<?php echo __URL('APP_MAIN/pay/alipay?no='.$pay_value['out_trade_no']); ?>';
							break;
						case "unionpay":
							//跳转到银联卡
							url = '<?php echo __URL('APP_MAIN/pay/unionpay?no='.$pay_value['out_trade_no']); ?>';
							break;
						}
						window.open(url);
						$(".layer-shade").fadeIn(300);
					}
				});
				
			})
		</script>
	</body>
</html>