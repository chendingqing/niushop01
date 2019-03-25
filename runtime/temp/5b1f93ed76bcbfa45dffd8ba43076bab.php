<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:45:"template/wap\default_new\Pay\pcWeChatPay.html";i:1553151902;}*/ ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title><?php echo $shopname; ?>,<?php echo lang('wechat_payment'); ?></title>
<link rel="stylesheet" type="text/css"
	href="__TEMP__/<?php echo $style; ?>/public/css/pay/pay_main.css">
<script src="__TEMP__/<?php echo $style; ?>/public/js/jquery.js"></script>
<style>
</style>
</head>
<body>
	<article class="ns-pay">
		<div class="order clearfix order-noQrcode">
			<!-- 订单信息 -->
			<div class="o-left">
				<h3 class="o-title"><?php echo lang('the_order_is_submitted_successfully_please_pay_as_soon_as_possible'); ?>！<?php echo lang('payment_transaction'); ?>：<?php echo $pay_value['out_trade_no']; ?></h3>
				<p class="o-tips"></p>
			</div>
			<!-- 订单信息 end -->
			<!-- 订单金额 -->
			<div class="o-right">
				<div class="o-price">
					<em><?php echo lang('member_amount_payable'); ?></em><strong><?php echo $pay_value['pay_money']; ?></strong><em><?php echo lang('element'); ?></em>
				</div>
			</div>
			<!-- 订单金额 end -->
			<div class="o-list j_orderList" id="listPayOrderInfo">
				<!-- 单笔订单 -->
				<!-- 多笔订单 end -->
			</div>
		</div>

		<div class="payment">
			<!-- 微信支付 -->
			<div class="pay-weixin">
				<div class="p-w-hd"><?php echo lang('wechat_payment'); ?></div>
				<div class="p-w-bd" style="position: relative">
					<div class="js-weixinInfo"
						style="position: absolute; top: -36px; left: 130px;">
						<?php echo lang('the_two_dimensional_code_expires_and_remains'); ?><span class="js-qrcode-time font-bold font-red">45</span><?php echo lang('second'); ?>，<?php echo lang('after_expiration_refresh_page_get_two_dimensional_code_again'); ?>。
					</div>
					<div class="p-w-box">
						<div class="pw-box-hd">
							<!-- __UPLOAD__/qrcode/pay/1493169273641.png -->
							<img id="weixinImageURL"
								src="<?php echo $path; ?>"
								width="298" height="298">
						</div>
						<div class="pw-retry j_weixiRetry" style="display: none;">
							<a class="ui-button ui-button-gray j_weixiRetryButton"
								href="javascript:getWeixinImage2();"><?php echo lang('gets_a_fail'); ?> <?php echo lang('click_to_retrieve_the_two_dimensional_code'); ?> </a>
						</div>
						<div class="pw-box-ft">
							<p><?php echo lang('please_use_wechat_to_sweep_away'); ?></p>
							<p><?php echo lang('scan_two_dimensional_code_payment'); ?></p>
						</div>
					</div>
					<div class="p-w-sidebar"></div>
				</div>
			</div>
			<!-- 微信支付 end -->
		</div>

	</article>
	<script>
		$(function() {
			setInterval("wchatOverdue()", 1000);
		})

		function wchatOverdue() {
			var time = parseInt($(".js-qrcode-time").text());
			if (time != 0) {
				$(".js-qrcode-time").text(--time);
			} else {
				$(".js-weixinInfo").html("<span class='font-red'><?php echo lang('the_two_dimensional_code_has_expired'); ?>，<a href='' style='color:#10ADF6;'>刷新</a>页面重新获取二维码</span>");
				$("#weixinImageURL").attr("src","__TEMP__/<?php echo $style; ?>/public/images/57b51ea9Nb862ca5e.png").css({"width": "278px","height": "278px","margin": "10px 0 0 10px"});
			}
		}
		var payStatus = window.setInterval("payStatu()", 2000);

		function payStatu(){
			$.ajax({
				type : "post",
				url : "<?php echo __URL('APP_MAIN/pay/wchatPayStatu'); ?>",
				data : {
					out_trade_no : "<?php echo $pay_value['out_trade_no']; ?>"
				},
				success : function(data){
					if(data['code'] > 0){
						location.href="<?php echo __URL('APP_MAIN/pay/wchatPayResult?out_trade_no='.$pay_value['out_trade_no'].'&msg=1'); ?>";
						clearInterval(payStatus);
					}
				}
			})
		}
		
	</script>

</body>
</html>