<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:44:"template/shop\blue\Goods\couponListAjax.html";i:1534929055;}*/ ?>
	<?php if(is_array($promotion_list['data']) || $promotion_list['data'] instanceof \think\Collection || $promotion_list['data'] instanceof \think\Paginator): $i = 0; $__LIST__ = $promotion_list['data'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
		<li>
			<div class="list-top">
				<p class="coupon-value">¥&nbsp;<?php echo $vo['money']; ?></p>
				<p class="coupon-condition">满<?php echo $vo['at_least']; ?>元可用</p>
				<?php if($vo['term_of_validity_type'] == 0): ?>
				<p class="coupon-time"><?php echo date('Y.m.d',$vo['start_time']); ?>-<?php echo date('Y.m.d',$vo['end_time']); ?></p>
				<?php else: ?>
				<p class="coupon-time">领取之日起<?php echo $vo['fixed_term']; ?>日内有效</p>
				<?php endif; ?>
			</div>
			<div class="list-bottom">
				<p class="coupon-item">限商品：<?php if($vo['range_type'] == '1'): ?>全场产品使用<?php else: ?>指定产品可使用<?php endif; ?></p>
				<p class="coupon-item">限数量：<?php if($vo['max_fetch'] == '0'): ?>无领取数量限制<?php else: ?>每人最多可领取<?php echo $vo['max_fetch']; ?>张<?php endif; ?></p>
				<p class="coupon-item">领取量：<?php if($vo['surplus_percentage'] > 0): ?>还有<font color="red"><?php echo $vo['surplus_percentage']; ?>%</font>未领取<?php else: ?>该优惠券已被抢光<?php endif; ?></p>
				<p class="coupon-btn">
					<?php if($vo['surplus_percentage'] > 0): ?>
						<!-- 如果还有优惠券 -->
						<!-- 如果限领数为0 或者 领取数小于最大领取数 -->
						<?php if($vo['max_fetch'] == 0 || $vo['received_num'] < $vo['max_fetch']): ?>
							<span onclick="coupon_receive(this,<?php echo $vo['coupon_type_id']; ?>)" class="active">立即领取</span>
						<?php else: ?>
							<span>您已领取</span>
						<?php endif; else: ?>
						<span>已抢光</span>
					<?php endif; ?>
				</p>
			</div>
		</li>
	<?php endforeach; endif; else: echo "" ;endif; ?>
