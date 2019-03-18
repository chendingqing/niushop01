<?php
//000000000000a:3:{s:11:"orderAction";s:47683:"<style>
.modal-body{max-height:none;overflow-y: visible;}
.editprice-input{width:100px;}
.pick_title{float: left;line-height: 32px; width: 140px;text-align:right;}
.pick_title .required{color:red;margin-right:10px;}
textarea{width: 350px;}  
#pickup_name,#pickup_mobile{width: 350px;}
.address_choice select{width:118px}
.modal-backdrop{background-color: #000000;}
.form-group:after{content:"";display:block;clear:both;}
</style>

<!-- 模态框（Modal） -->
<div id="edit-price" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="width: 650px;overflow: overlay;">
	<div class="modal-header">
		<button type="button" class="close" data-dismiss="modal" aria-hidden="true" style="margin-right: 10px;">×</button>
		<h3 id="H1">修改价格</h3>
	</div>
	<div class="modal-body">
		<table class="table table-striped table-main table-order-header">
			<colgroup>
				<col style="width: 40%;">
				<col style="width: 20%;">	
				<col style="width: 25%;">
				<col style="width: 15%;">
			</colgroup>
			<tbody>
				<tr>
					<td>商品信息</td>
					<td>商品清单</td>
					<td>
						<div class="editprice-tiptxt">涨价或减价<i class="icon-tip"></i>
							<p class="text-tip">-表示减价<i class="icon-down-pic"></i></p>
						</div>
					</td>
					<td>邮费</td>
				</tr>
			</tbody>
		</table>
		<table class="table table-bordered table-order-list">
			<colgroup>
				<col style="width: 40%;">
				<col style="width: 20%;">
				<col style="width: 25%;">
				<col style="width: 15%;">
			</colgroup>
			<tbody id="OrderCommodity"></tbody>
		</table>
		<ul class="edit-price-amountpay">
			<li>
				<span class="amountpay-label">商品总价：</span>
				<span class="amountpay-price" id="goodsmoney"></span>元&nbsp;&nbsp;&nbsp;
				<span class="amountpay-label">商品优惠：</span>
				<span class="amountpay-price" id="discountmoney"></span>元&nbsp;&nbsp;&nbsp;
				<span class="amountpay-label">运费：</span>
				<span class="amountpay-price" id="modifiedFreight"></span>元
			</li>
			<li>
				<div>
					实收款： <span class="amountpay-price reality-price" id="changeTotal"></span>元
					<input type="hidden" id="hiedchangeTotal" />
				</div>
			</li>
		</ul>
	</div>
	<div class="modal-footer">
		<button class="btn-common btn-big" onclick="updPrice()" id="butSubmit">保存</button>
		<button class="btn-common-cancle btn-big" data-dismiss="modal" aria-hidden="true">关闭</button>
	</div>
</div>

<div class="modal hide fade" id="Delivery" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="left:32%">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				<h3>商品发货</h3>
			</div>
			<div class="modal-body">
				<!-- 主要内容 -->
				<div style="padding: 0 0 10px 0;">待发货(<span id="no_shipping_num"></span>)，已选<span id="checkedbox">0</span></div>
				<table class="table-class" style="margin-bottom:10px;">
					<thead>
						<tr>
							<th>
								<i class="checkbox-common"><input type="checkbox" id="inlineCheckbox1" onclick="deliveryCheckAll(this)"></i>
							</th>
							<th></th>
							<th>商品</th>
							<th>数量</th>
							<th>物流 | 单号</th>
							<th>状态</th>
						</tr>
					</thead>
					<colgroup>
						<col style="width: 5%;">
						<col style="width: 10%;">
						<col style="width: 40%;">
						<col style="width: 10%;">
						<col style="width: 20%;">
						<col style="width: 15%;">
					<colgroup>
					<tbody></tbody>
				</table>
				<div>
					<div style="margin-bottom:5px;">发货方式：</div>
					<label class="checkbox-inline" style="float:left;margin-right:30px;">
						<i class="radio-common">
							<input type="radio" name="shipping_type" id="shipping_type0" value="0">
						</i>
						<span>无需物流</span>
					</label>
					<label class="checkbox-inline" style="float:left;">
						<i class="radio-common selected">
							<input type="radio" name=shipping_type id="shipping_type1" value="1" checked="checked">
						</i>
						<span>需要物流</span>
					</label>
				</div>
				<div style="clear:both;"></div>
				<div class="form-group" id="express_input" style="margin:5px 0 10px 0;">
					<select class="form-control" id="divlogistics_express_company" ></select>
					<input type="text" id="divlogistics_express_no" class="input-common" placeholder="请填写快递单号" style="vertical-align:2px;">
				</div>
				<div id="receiver_info" style="clear:both;"></div>
			</div>
			
			<div class="modal-footer">
				<input type="hidden" id="o2o_delivery_order_id"/>
				<button class="btn-common btn-big" onclick="orderDeliverySubmit()">保存</button>
				<button class="btn-common-cancle btn-big" data-dismiss="modal">关闭</button>
			</div>
		</div>
	</div>
</div>

<!-- 本地配送模态框 -->
<div class="modal hide fade" id="o2o_Delivery" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="left:32%">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				<h3>商品发货</h3>
			</div>
			<div class="modal-body">
				<!-- 主要内容 -->
				<div>待发货(<span id="o2o_shipping_num"></span>)</div>
				<table class="table table-hover" style="margin-bottom:10px;">
					<thead>
						<tr>
							<td>商品</td>
							<td>数量</td>
						</tr>
					</thead>
					<colgroup>
						<col style="width: 60%;">
						<col style="width: 40%;">
					<colgroup>
					<tbody></tbody>
				</table>
				<div>
					<div style="margin-bottom:5px;">配送人员：</div>
				</div>
				<div style="clear:both;"></div>
				<div class="form-group" id="express_input">
					<select class="form-control input-lg" id="o2o_delivery_user" ></select>
					<input type="text" id="o2o_delivery_no" class="input-common" placeholder="请填写配送单号" style="vertical-align:2px;">
				</div>
				<div id="receiver_info"></div>
				<div>
					<div style="margin-bottom:5px;">备注：</div>
					<textarea class="remark textarea-common" style=" width: 440px;height: 80px;" maxlength="500"></textarea>
				</div>
			</div>
			
			<div class="modal-footer">
				<input type="hidden" id="delivery_order_id"/>
				<button class="btn-common btn-big" onclick="o2oDeliverySubmit()">提交更改</button>
				<button class="btn-common-cancle btn-big" data-dismiss="modal">关闭</button>
			</div>
		</div>
	</div>
</div>


<!-- 自提模态 -->
<div class="modal hide fade" id="pickup" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="margin-left:-365px; width: 700px;">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				<h3>商品提货</h3>
			</div>
			<div class="modal-body">
				<!-- 主要内容 -->
				<table class="table table-hover" style="margin-bottom:10px;">
					<thead></thead>
					<colgroup><colgroup>
					<tbody></tbody>
				</table>
				
				<div class="form-group">
					<div class="pick_title"><span class="required">*</span>提货人：</div>
					<div class="col-lg-4"><input type="text" id="pickup_name" class="form-control input-common" placeholder="请填写提货人姓名"></div>
				</div>
				<div class="form-group">
					<div class="pick_title"><span class="required">*</span>提货人手机号：</div>
					<div class="col-lg-4"><input type="text" id="pickup_mobile" class="form-control input-common" placeholder="请填写提货人手机号"></div>
				</div>
				<div class="form-group">
					<div class="pick_title">备注：</div>
					<div class="col-lg-2"><textarea id="pickup_desc" class="textarea-common"></textarea></div>
				</div>
			
			</div>
			
			<div class="modal-footer">
				<input type="hidden" id="pickup_order_id" />
				<button class="btn-common btn-big" onclick="orderPickupSubmit(pickup_order_id)">确认提货</button>
				<button class="btn-common-cancle btn-big" data-dismiss="modal">关闭</button>
			</div>
		</div>
	</div>
</div>
<!-- 修改收货地址模态 -->
<div class="modal hide fade" id="update_address" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="margin-left:-365px; width: 700px;">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				<h3>修改收货地址</h3>
			</div>
			<div class="modal-body">
				<div class="form-group">
					<div class="pick_title"><span class="required">*</span>收货人：</div>
					<div class="col-lg-4"><input type="text" id="receiver_name" class="form-control input-common" style="width:350px;margin-bottom:10px !important;"></div>
				</div>
				<div class="form-group">
					<div class="pick_title"><span class="required">*</span>收货人手机号：</div>
					<div class="col-lg-4"><input type="text" id="receiver_mobile" class="form-control input-common" style="width:350px;margin-bottom:10px !important;"></div>
				</div>
				<div class="form-group">
					<div class="pick_title">收货人固定电话：</div>
					<div class="col-lg-4"><input type="text" id="fixed_telephone" class="form-control input-common" style="width:350px;margin-bottom:10px !important;"></div>
				</div>
				<div class="form-group">
					<div class="pick_title">收货人邮编：</div>
					<div class="col-lg-4"><input type="text" id="receiver_zip" class="form-control input-common" style="width:350px;margin-bottom:10px !important;" maxlength="6" onkeyup="this.value=this.value.replace(/\D/g,'')"></div>
				</div>
				<div class="form-group" style="width:100%;margin-bottom: 10px;">
					<div class="pick_title"><span class="required">*</span>收货地址：</div>
					<div class="address_choice">
						<select name="province" id="seleAreaNext" onchange="GetProvince();" class="select-common harf">
							<option value="">请选择省</option>
						</select>
						<select name="city" id="seleAreaThird" onchange="getSelCity();" class="select-common harf">
							<option value="">请选择市</option>
						</select>
						<select name="district" id="seleAreaFouth" class="select-common harf">
							<option value="-1">请选择区/县</option>
						</select>
						<input type="hidden" id="provinceid" >
						<input type="hidden" id="cityid" >
						<input type="hidden" id="districtid" >
					</div>
				</div>
				<div class="form-group">
					<div class="pick_title"><span class="required">*</span>详细地址：</div>
					<div class="col-lg-4"><input type="text" id="address_detail" class="form-control input-common" style="width:350px"></div>
				</div>
			</div>
			
			<div class="modal-footer">
				<input type="hidden" id="update_address_id" />
				<button type="button" class="btn-common btn-big" onclick="updateAddressSubmit(update_address_id)">修改</button>
				<button type="button" class="btn-common-white btn-big" data-dismiss="modal">关闭</button>
			</div>
		</div>
	</div>
</div>

<!-- 模态框（Modal） -->
<div class="modal fade hide" id="Memobox" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="width:700px;left:45%;top:30%;">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h3>备注信息</h3>
			</div>
			<div class="set-style">
				<dl>
					<dt><span class="required">*</span>备注:</dt>
					<dd>
						<p>
							<textarea rows="3" cols="20" id="memo" class="textarea-common"></textarea>
						</p>
						<p class="error">请输入备注</p>
					</dd>
				</dl>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn-common btn-big" onclick="addMemoAjax()">保存</button>
				<button class="btn-common-cancle btn-big" data-dismiss="modal">关闭</button>
			</div>
		</div>
	</div>
</div>


<!-- 修改运单号 -->
<div class="modal hide fade" id="update_express" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="width: 700px; left: 45%; top: 30%; display: none;">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				<h3>修改运单号</h3>
			</div>
	 			<div class="modal-body">
					<div style="margin-bottom:5px;">发货方式：</div>
					<label class="checkbox-inline" style="float:left;margin-right:30px;"><input type="radio" name="shipping_type_update" id="shipping_type2" value="0"> 无需物流</label>
					<label class="checkbox-inline" style="float:left;"><input type="radio" name=shipping_type_update id="shipping_type3" value="1" checked="checked"> 需要物流</label>
				
					<div style="clear:both;"></div>
					<div class="form-group" id="update_express_input">
						<select class="form-control input-lg" id="update_divlogistics_express_company" style="margin-bottom:5px;margin-right:15px;float:left;"></select>
						<div class="col-lg-2"><input type="text" id="update_divlogistics_express_no" class="form-control" placeholder="请填写快递单号" style="height:19px;"></div>
					</div>
					<div id="receiver_infos"></div>
				</div>
			</div>
			
			<div class="modal-footer">
				<input type="hidden" id="order_goods_express_id"/>
				<button class="btn-common btn-big" onclick="updateExpressAjax()">提交更改</button>
				<button class="btn-common-cancle btn-big" data-dismiss="modal">关闭</button>
			</div>
		</div>
	</div>
</div>











<script>
$(function() {

	var selCity = $("#seleAreaNext")[0];
	for (var i = selCity.length - 1; i >= 0; i--) {
		selCity.options[i] = null;
	}
	var opt = new Option("请选择省", "-1");
	selCity.options.add(opt);
	// 添加省
	$.ajax({
		type : "post",
		url : "http://www.shop.com/index.php?s=/admin/order/getprovince",
		dataType : "json",
		success : function(data) {
			if (data != null && data.length > 0) {
				for (var i = 0; i < data.length; i++) {
					var opt = new Option(data[i].province_name,data[i].province_id);
					selCity.options.add(opt);
				}
				
				if(typeof($("#provinceid").val())!='undefined'){
					$("#seleAreaNext").val($("#provinceid").val());
					GetProvince();
					$("#provinceid").val('-1');
				}
				$("#seleAreaNext").selectric({maxHeight:500});
			} 
		}
	});

	$("#shipping_type1").focus(function(){
		$("#express_input").show();
	});

	$("#shipping_type0").focus(function(){
		$("#express_input").hide();
	});
	
	$("#shipping_type3").focus(function(){
		$("#update_express_input").show();
	});

	$("#shipping_type2").focus(function(){
		$("#update_express_input").hide();
	});
});
/*****订单相关操作函数开始*****/
function operation(operation_type, order_id){
	if(operation_type == 'pay'){
		orderOffLinePay(order_id);//线下支付
	}else if(operation_type == 'complete'){
		orderComplete(order_id);//交易完成
	}else if(operation_type == 'delivery'){
		orderDelivery(order_id);//发货
	}else if(operation_type == 'close'){
		orderClose(order_id);//交易关闭
	}else if(operation_type == 'adjust_price'){
		modifyPrice(order_id);//修改价格
	}else if(operation_type == 'pickup'){
		pickuporder(order_id);//提货
	}else if(operation_type == 'seller_memo'){
		orderSellerMemo(order_id);//备注
	}else if(operation_type == 'logistics'){
		//查看物流
		location.href = __URL(ADMINMAIN+'/order/orderdetail?order_id='+order_id);
	}else if(operation_type == 'update_express'){
		updateExpress(order_id);//修改运单号
	}else if(operation_type == 'update_address'){
		update_address(order_id);//修改收货地址
	}else if(operation_type == 'getdelivery'){
		getdelivery(order_id);//确认收货
	}else if(operation_type == 'delete_order'){
		delete_order(order_id);//删除订单
	}else if(operation_type == 'o2o_delivery'){
		o2o_delivery(order_id);//o2o发货
	}else if(operation_type == 'order_presell'){
		presellOrderOffLinePay(order_id);//预售线下支付
	}else if(operation_type == 'stocking_complete'){
		presellStockingComplete(order_id);
	}else if(operation_type == 'received_payment'){
		received_payment(order_id); // 货到付款订单已收到货款
	}
}

function orderDelivery(order_id){
	$("#Delivery").modal('show');
	$("#divlogistics_express_company option").remove();
	$("#Delivery .modal-body table tbody tr").remove();
	$.ajax({
		type : "post",
		url : "http://www.shop.com/index.php?s=/admin/order/orderdeliverydata",
		data : {'order_id':order_id},
		success : function(data) {
			$("#delivery_order_id").val(order_id);
			var receiver_info = '收货信息：'+data['order_info']['address']+'&nbsp;'+data['order_info']['receiver_address']+'&nbsp;'+data['order_info']['receiver_name']+'&nbsp;'+data['order_info']['receiver_mobile'];//收货信息
			$("#receiver_info").html(receiver_info);
			var co_html = '';
			co_html += '<option value="0">请选择物流公司</option>';
			for(var i=0;i<data['express_company_list'].length;i++){
				if(data['express_company_list'][i]['is_enabled'] == '1'){
					if(data['order_info']["shipping_company_id"] == data["express_company_list"][i]["co_id"]){
						co_html += '<option value="'+data["express_company_list"][i]["co_id"]+'" selected>'+data["express_company_list"][i]["company_name"]+'</option>';
					}else{
						co_html += '<option value="'+data["express_company_list"][i]["co_id"]+'">'+data["express_company_list"][i]["company_name"]+'</option>';
					}
				}
			} 
			$("#divlogistics_express_company").append(co_html).addClass("select-common").selectric({maxHeight:500});
			
			$("#divlogistics_express_company").val(data['order_info']["shipping_company_id"]);
			
			var go_html = '';
			var no_shipping_num = 0;
			console.log(data['order_goods_list']);
			for(var i=0;i<data['order_goods_list'].length;i++){
				if(data['order_goods_list'][i]['shipping_status'] == 0){
					no_shipping_num++;
				}
				go_html += '<tr align="center">';
				if(data['order_goods_list'][i]['shipping_status'] > 0){
					go_html += '<td><i class="checkbox-common"><input type="checkbox" value="'+data['order_goods_list'][i]['shipping_status']+'" disabled="true"></i></label></td>';
				}else{
					go_html += '<td><i class="checkbox-common"><input type="checkbox" id="'+data['order_goods_list'][i]['order_goods_id']+'" value="'+data['order_goods_list'][i]['shipping_status']+'" onclick="deliveryCheck(this)"></i></td>';
				}
				go_html += '<td><a href="'+__URL('http://www.shop.com/index.php/goods/goodsinfo?goodsid='+data['order_goods_list'][i]['goods_id'])+'" target="_blank"><img src="'+__IMG(data['order_goods_list'][i]['picture_info']['pic_cover_micro'])+'" style="width:40px;" title="'+data['order_goods_list'][i]['goods_name']+'"></a></td>';
				go_html += '<td style="text-align:left;"><a href="'+__URL('http://www.shop.com/index.php/goods/goodsinfo?goodsid='+data['order_goods_list'][i]['goods_id'])+'" target="_blank">'+data['order_goods_list'][i]['goods_name'];
				go_html += '&nbsp;' + data['order_goods_list'][i]['sku_name'];
				go_html += '</a></td>';
				go_html += '<td>'+data['order_goods_list'][i]['num']+'</td>';
				if(data['order_goods_list'][i]['shipping_status'] == 0 || data['order_goods_list'][i]['express_info']['express_company'] == undefined){
					go_html += '<td></td>';
				}else{
					go_html += '<td>'+data['order_goods_list'][i]['express_info']['express_company']+' | '+data['order_goods_list'][i]['express_info']['express_no']+'</td>';
				}
				go_html += '<td>'+data['order_goods_list'][i]['shipping_status_name']+'</td>';
				go_html += '</tr>';
			}
			$("#no_shipping_num").html(no_shipping_num);
			$("#Delivery .modal-body table tbody").append(go_html);
		}
	});
}

var flag = false;
function orderDeliverySubmit(){
	var order_id = $("#delivery_order_id").val();
	var order_goods_id_array = '';
	$("#Delivery .modal-body table tbody input[type = 'checkbox'][value = 0][checked]").each(function(i){
		if(0==i){
			order_goods_id_array = $(this).attr('id');
		}else{
			order_goods_id_array += (","+$(this).attr('id'));
		}
	});
	if(order_goods_id_array == ''){
		showTip("至少选择一个商品",'warning');
		return false;
	}
	var express_name = $("#divlogistics_express_company").find("option:selected").text();
	var shipping_type = $('#Delivery input[name="shipping_type"]:checked').val();
	var express_company_id = $("#divlogistics_express_company").val();
	var express_no = $("#divlogistics_express_no").val();
	if(shipping_type == 1){
		if(express_company_id == "0"){
			showTip("请选择物流公司",'warning');
			return false;
		}
		if(express_no == ""){
			showTip("请填写快递单号",'warning');
			$("#divlogistics_express_no").focus();
			return false;
		}
	}
	if(flag){
		return;
	}
	flag = true;
	$.ajax({
		type : "post",
		url : "http://www.shop.com/index.php?s=/admin/order/orderdelivery",
		data : {'order_id':order_id,"order_goods_id_array":order_goods_id_array,"express_name":express_name,"shipping_type":shipping_type,"express_company_id":express_company_id,"express_no":express_no},
		success : function(data) {
			
			$("#Delivery").modal('hide');
			if (data['code'] > 0) {
				showMessage('success', data["message"],window.location.reload());
			} else {
				showMessage('error', data["message"]);
				flag = false;
			}
		}
	});
}

function deliveryCheckAll(event){
	var checked = event.checked;
	$("#Delivery .modal-body table tbody input[type = 'checkbox'][value = 0]").prop("checked",checked);
	var parent = $("#Delivery .modal-body table tbody input[type = 'checkbox'][value = 0]").parent();
	if(checked) parent.addClass('selected');
	else parent.removeClass("selected");
	var obj = $("#Delivery .modal-body table tbody input[type = 'checkbox'][value = 0][checked]");
	$("#checkedbox").html(obj.length);
}

function deliveryCheck(event){
	var obj = $("#Delivery .modal-body table tbody input[type = 'checkbox'][value = 0][checked]");
	$("#checkedbox").html(obj.length);
}

//全选
function CheckAll(event){
	var checked = event.checked;
	$(".table-class tbody input[type = 'checkbox']").prop("checked",checked);
	if(checked) $(".table-class tbody input[type = 'checkbox']").parent().addClass("selected");
	else $(".table-class tbody input[type = 'checkbox']").parent().removeClass("selected");
}

function orderOffLinePay(order_id){
	$( "#dialog" ).dialog({
		buttons: {
			"确定": function() {
					$.ajax({
						type : "post",
						url : "http://www.shop.com/index.php?s=/admin/order/orderofflinepay",
						data : {'order_id':order_id},
						success : function(data) {
							if (data["code"] > 0) {
								showMessage('success', data["message"],window.location.reload());
							}else{
								showMessage('error', data["message"]);
							}
						}
					});
					$(this).dialog('close');
			},
			"取消,#f5f5f5,#666": function() {
				$(this).dialog('close');
			},
		},
		contentText:"确定线下支付吗？",
	});
}

//预售订单线下支付
function presellOrderOffLinePay(presell_order_id){
	$( "#dialog" ).dialog({
		buttons: {
			"确定": function() {
					$.ajax({
						type : "post",
						url : "http://www.shop.com/index.php?s=/admin/orderpresell/presellOrderOffLinePay",
						data : {'presell_order_id':presell_order_id},
						success : function(data) {
							if (data["code"] > 0) {
								showMessage('success', data["message"],window.location.reload());
							}else{
								showMessage('error', data["message"]);
							}
						}
					});
					$(this).dialog('close');
			},
			"取消,#f5f5f5,#666": function() {
				$(this).dialog('close');
			},
		},
		contentText:"确定线下支付吗？",
	});
}





function orderComplete(order_id){
	$.ajax({
		type : "post",
		url : "http://www.shop.com/index.php?s=/admin/order/ordercomplete",
		data : {'order_id':order_id},
		success : function(data) {
			
			if (data["code"] > 0) {
				showMessage('success', data["message"],window.location.reload());
			}else{
				showMessage('error', data["message"]);
			}
		}
	});
}

function orderClose(order_id){
	$( "#dialog" ).dialog({
		buttons: {
			"确定": function() {
			$.ajax({
				type : "post",
				url : "http://www.shop.com/index.php?s=/admin/order/orderclose",
				data : {"order_id" : order_id},
				success : function(data) {
					if(data["code"] > 0 ){
						LoadingInfo(1);
						showMessage('success', data["message"],window.location.reload());
					}
				}
			})
			$(this).dialog('close');
			},
			"取消,#f5f5f5,#666": function() {
				$(this).dialog('close');
			},
		},
		contentText:"确定关闭订单吗？",
	});
}

//修改价格
function modifyPrice(order_id,orderFreight){
	if(orderFreight == null){
		orderFreight = 0;
	}
	orderInfo ={
		express_fee: 0,
		total: 0,
		goodsArray: new Array()
	};
	$("#butSubmit").val(order_id);
	var str = "";
	var Total = 0.00;
	var Count = 0;
	$.ajax({
		type: "post",
		url: "http://www.shop.com/index.php?s=/admin/order/getordergoods",
		data: { "order_id": order_id },
		dataType: "json",
		async: false,
		success: function (jsonData) {
			var Subtotal = 0.0;
			var order_info = jsonData[1];
			jsonData = jsonData[0];
			for (var i = 0 ; i < jsonData.length; i++) {
				Price = (jsonData[i].price * 1);
				Count = (jsonData[i].num * 1);
				Subtotal = parseFloat(Price) * parseInt(Count);//单商品总价
				Total += parseFloat(Subtotal * 1);
				str += "<tr>";
				str += "<td>";
				str += "<div class='product-img'><img src='"+__IMG(jsonData[i]['picture_info']['pic_cover_micro']) + "'></div>";
				str += "<div class='product-infor'>";
				//原总金额
				var item_now_money = parseFloat(jsonData[i].price*jsonData[i].num)+parseFloat(jsonData[i].adjust_money);
				str += "<input type='hidden' id='total"+jsonData[i].order_goods_id+"' value='"+item_now_money*(item_now_money/parseFloat(jsonData[i].goods_money))+"'>";
				str += "<a class='name' href="+__URL('http://www.shop.com/index.php/wap?id='+jsonData[i].goods_id)+" target='_blank'>" + jsonData[i].goods_name + "</a>";
				str += "<p class='specification'><span>规格:" + jsonData[i].sku_name + "</span></p>";
				str += "<div class='div-flag-style'>";
				str += "</div>";
				str += "</div>";
				str += "</td>";
				str += "<td>";
				str += "<div class='cell'><span name='Commoditymark' count='" + jsonData[i].num + "' id='" + jsonData[i].goods_id + "' dir='" + jsonData[i].price + "' value='" + jsonData[i].price + "'>￥" + jsonData[i].price + "</span></div>";
				str += "<div class='cell' id='Count" + jsonData[i].goods_id + "' value='" + jsonData[i].num + "'>" + jsonData[i].num + "件</div>";
				str += "</td>";
				str += "<td>";
				str += "<div class='editprice-discount'><input  type='hidden' id='productPrice" + jsonData[i].order_goods_id + "' value='" + jsonData[i].price + "'><input type='hidden' id='count" + jsonData[i].goods_id + "' value='" + jsonData[i].num + "'>";
				str += "<div class='editprice-minus'><input name='caculatePrice'  onchange=\"caculatePrice()\" id='" + jsonData[i].order_goods_id + "' value='"+jsonData[i].adjust_money+"'  class='editprice-input price input-common harf' type='number'  placeholder='0'  /></div>";
				str += "</td>"; 
				if (i == 0) {
					str += "<td rowspan='"+jsonData.length+"'>";
					str += "<input onchange=\"caculatePrice()\" id='Freightnumber' type='number' placeholder='0'  class='editprice-input input-common harf' value='"+order_info.shipping_money+"' ";
					if(orderFreight != 0 || orderFreight != ''){
						str += orderFreight;
					}
					str += "' min='0'/>";
					str += "<p class='muted'>直接输入邮费金额</p>";
					str += "<input type='hidden' id='hidorderNumber' value='" + jsonData[i].order_id + "'>";
					str += "<input type='hidden' id='freighthidden' value='" + orderFreight + "'>";
					str += "<input type='hidden' id='goodsmoneyhidden' value=''>";
					str += "<input type='hidden' id='favourable' value='0'>";
					str += "</td>";
					str += "</tr>";
				}
				$("#OrderCommodity").html(str);
				$("#changeTotal").html(Total.toFixed(2));
				$("#goodsmoney").html(order_info.goods_money);
				$("#goodsmoneyhidden").val(Total);
				var discount_money =order_info.point_money*1.00+order_info.coupon_money*1.00+order_info.user_money*1.00+order_info.promotion_money*1.00;
				$("#discountmoney").html(discount_money);
				$("#changeTotal").html(order_info.pay_money); 
				$("#hiedchangeTotal").html(Total);
			}
			$("#modifiedFreight").html(order_info.shipping_money);
			var freight = $("#Freightnumber").val() == 0 ? 0 : $("#Freightnumber").val(); 
			$('#edit-price').modal('show');
		}
	});
}
//重新计算
function caculatePrice(){
	//设置邮费
	if($("#Freightnumber").val() < 0 || $("#Freightnumber").val() == ''){
		showTip("邮费错误！","warning");
		return false;
	}
	var Freightnumber = $("#Freightnumber").val();//邮费input
	$("#modifiedFreight").html(Freightnumber);
	//调整金额
	var price = 0.00;
	$("input[name = 'caculatePrice']").each(function(i){
		if(0 == i){
			price = parseFloat($(this).val());
		}else{
			price = parseFloat($(this).val()) + parseFloat(price);
		}
	});
	var goods_money  = $("#goodsmoneyhidden").val();
	new_goods_money = (parseFloat(price)+parseFloat(goods_money)).toFixed(2);
	if(new_goods_money <0){
		$(".price").val(-goods_money);
		caculatePrice();
	}
	$("#goodsmoney").html(new_goods_money);
	// 获取邮费
	var modifiedFreight = $("#modifiedFreight").html(); 
	// 获取优惠金额
	var discountmoney = $("#discountmoney").html();
	//计算实收款
	new_hiedchangeTotal = (parseFloat(new_goods_money)+parseFloat(modifiedFreight)-parseFloat(discountmoney)).toFixed(2);
	$("#changeTotal").html(new_hiedchangeTotal);
}
	
/**
* 保存修改的价格
* $order_id, $goods_money, $shipping_fee
*/
function updPrice(){
	var order_id = $("#hidorderNumber").val();
	var order_goods_id_adjust_array = '';
	var shipping_fee = $("#Freightnumber").val();
	$("input[name = 'caculatePrice']").each(function(i){
		if(0 == i){
			order_goods_id_adjust_array = $(this).attr('id')+','+$(this).val();
		}else{
			order_goods_id_adjust_array += ';'+$(this).attr('id')+','+$(this).val();
		}
	});
	if(parseFloat($("#changeTotal").text()).toFixed(2) == 0.00){
		showTip("实收款最小0.01元","warning");
		return;
	}
	$.ajax({
		type: "post",
		url: "http://www.shop.com/index.php?s=/admin/order/orderadjustmoney",
		data: { "order_id": order_id, "order_goods_id_adjust_array":order_goods_id_adjust_array, "shipping_fee":shipping_fee},
		dataType: "json",
		async: false,
		success: function (data) {
		if (data["code"] > 0) {
				showMessage('success', data["message"],window.location.reload());
				$("#edit-price").modal("hide");
			}else{
				showMessage('error', data["message"]);
			}
		}
	});
}

//自提订单 进行提货
function pickuporder(order_id){
	$("#pickup .modal-body table tbody tr").remove();
	$("#pickup_order_id").val(order_id);
	$("#pickup").modal('show');
}

//查看订单备注
function orderSellerMemo(order_id){
	$.ajax({
		type : 'post',
		url : "http://www.shop.com/index.php?s=/admin/order/getordersellermemo",
		data : { "order_id" : order_id },
		success : function(res){
			$("#order_id").val(order_id);
			$("#memo").val(res);
			$("#Memobox").modal("show");
		}
	});
}

// 提货进行提交数据
function orderPickupSubmit(){
	var pickup_order_id = $("#pickup_order_id").val();
	var pickup_name = $("#pickup_name").val();
	var pickup_mobile = $("#pickup_mobile").val();
	var pickup_desc = $("#pickup_desc").val();
	if(pickup_name == ''){
		showTip("请填写提货人姓名","warning");
		$("#pickup_name").focus();
		return false;
	}
	if(pickup_mobile == ''){
		showTip("请填写提货人手机号","warning");
		$("#pickup_mobile").focus();
		return false;
	}
	if(pickup_mobile.search(/^1(3|4|5|7|8)\d{9}$/) == -1){
		showTip("请填写正确格式的手机号!","warning");
		$("#pickup_mobile").select();
		return false;
	}
	$.ajax({
		type: "post",
		url: "http://www.shop.com/index.php?s=/admin/order/pickuporder",
		data: { "order_id": pickup_order_id, "buyer_name":pickup_name, "buyer_phone":pickup_mobile, "remark":pickup_desc},
		dataType: "json",
		async: false,
		success: function (data) {
		if (data["code"] > 0) {
				showMessage('success', '提货成功',window.location.reload());
			}else{
				showMessage('error', '提货失败');
			}
		}
	});
}

//查询修改的收货地址的信息
function update_address(order_id){
	$.ajax({
		type : 'post',
		url : "http://www.shop.com/index.php?s=/admin/order/getOrderUpdateAddress",
		data : { "order_id" : order_id },
		success : function(data){
			$("#receiver_name").val(data['receiver_name']);
			$("#receiver_mobile").val(data['receiver_mobile']);
			$("#fixed_telephone").val(data['fixed_telephone']);
			$("#receiver_zip").val(data['receiver_zip']);
			var provinceid = data['receiver_province'] > 0 ? data['receiver_province'] : -1;
			var cityid = data['receiver_city'] > 0 ? data['receiver_city'] : -1;
			var districtid = data['receiver_district'] > 0 ? data['receiver_district'] : -1;
			$("#seleAreaNext").val(provinceid);
			$("#provinceid").val(provinceid);
			$("#cityid").val(cityid);
			$("#districtid").val(districtid);
			$("#seleAreaNext option[value='"+provinceid+"']").attr("selected", true);
			$("#seleAreaNext").selectric({maxHeight:500});
			GetProvince();
			getSelCity();
			var address_arr = data['receiver_address'].split('&nbsp;');
			if(address_arr[3] != undefined){
				$("#address_detail").val(address_arr[3]);
			}else{
				$("#address_detail").val("");
			}
			$("#update_address").modal('show');
			$("#update_address .modal-body table tbody tr").remove();
			$("#update_address_id").val(order_id);
		}
	});
}

//提交修改的收货地址
function updateAddressSubmit(){
	var receiver_name = $("#receiver_name").val();
	var receiver_mobile = $("#receiver_mobile").val();
	var receiver_zip = $("#receiver_zip").val();
	var seleAreaNext = $("#seleAreaNext").val();
	var seleAreaThird = $("#seleAreaThird").val();
	var seleAreaFouth = $("#seleAreaFouth").val();
	var address_detail = $("#address_detail").val();
	var order_id = $("#update_address_id").val();
	var fixed_telephone = $("#fixed_telephone").val();
	if(receiver_name == ''){
		showTip("请填写收货人姓名",'warning');
		$("#receiver_name").focus();
		return false;
	}

	if(!(/^1(3|4|5|7|8)\d{9}$/.test(receiver_mobile))){
		showTip("请填写正确格式的手机号",'warning')
		$("#receiver_mobile").focus();
		return false;
	}

	if(fixed_telephone.length > 0){
		var pattern=/(^[0-9]{3,4}\-[0-9]{3,8}$)|(^[0-9]{3,8}$)|(^\([0-9]{3,4}\)[0-9]{3,8}$)|(^0{0,1}13[0-9]{9}$)/; 
		if(!pattern.test(fixed_telephone)) { 
			showTip("请输入正确的固定电话",'warning');
			$("#fixed_telephone").focus();
			return false; 
		} 
	}

	if(seleAreaNext == '-1'){
		showTip("请选择省",'warning');
		return false;
	}

	if(seleAreaThird == '-1'){
		showTip("请选择市",'warning');
		return false;
	}
	
	if($("#seleAreaFouth option").length>1){
		if(seleAreaFouth == '-1'){
			showTip("请选择区/县",'warning');
			return false;
		}
	}
	if(address_detail == ''){
		showTip("请填写详细收货地址",'warning');
		return false;
	}
	
	$.ajax({
		type : 'post',
		url : "http://www.shop.com/index.php?s=/admin/order/updateOrderAddress",
		data : {
			"order_id" : order_id,
			"receiver_name" : receiver_name,
			"receiver_mobile" : receiver_mobile,
			"receiver_zip" : receiver_zip,
			"seleAreaNext" : seleAreaNext,
			"seleAreaThird" : seleAreaThird,
			"seleAreaFouth" : seleAreaFouth,
			"address_detail" : address_detail,
			"fixed_telephone" : fixed_telephone
		},
		success : function(data){
			if (data > 0) {
				showMessage('success', '修改收货地址成功',window.location.reload());
			}else{
				showMessage('error', '修改收货地址失败');
			}
		}
	});
}

//选择省份弹出市区
function GetProvince() {
	var id = $("#seleAreaNext").find("option:selected").val();
	var selCity = $("#seleAreaThird")[0];
	for (var i = selCity.length - 1; i >= 0; i--) {
		selCity.options[i] = null;
	}
	var opt = new Option("请选择市", "-1");
	selCity.options.add(opt);
	$.ajax({
		type : "post",
		url : "http://www.shop.com/index.php?s=/admin/order/getcity",
		dataType : "json",
		data : {
			"province_id" : id
		},
		success : function(data) {
			if (data != null && data.length > 0) {
				for (var i = 0; i < data.length; i++) {
					var opt = new Option(data[i].city_name,data[i].city_id);
					selCity.options.add(opt);
				}
				if(typeof($("#cityid").val())!='undefined'){
					$("#seleAreaThird").val($("#cityid").val());
					getSelCity();
					$("#cityid").val('-1');
				}
				$("#seleAreaThird").selectric({maxHeight:500});
			}
		}
	});
};

// 选择市区弹出区域
function getSelCity() {
	var id = $("#seleAreaThird").find("option:selected").val();
	var selArea = $("#seleAreaFouth")[0];
	for (var i = selArea.length - 1; i >= 0; i--) {
		selArea.options[i] = null;
	}
	var opt = new Option("请选择区/县", "-1");
	selArea.options.add(opt);
	$.ajax({
		type : "post",
		url : "http://www.shop.com/index.php?s=/admin/order/getdistrict",
		dataType : "json",
		data : {
			"city_id" : id
		},
		success : function(data) {
			if (data != null && data.length > 0) {
				for (var i = 0; i < data.length; i++) {
					var opt = new Option(data[i].district_name,data[i].district_id);
					selArea.options.add(opt);
				}
				if(typeof($("#districtid").val())!='undefined'){
					$("#seleAreaFouth").val($("#districtid").val());
					$("#districtid").val('-1');
				}
				$("#seleAreaFouth").selectric({maxHeight:500});
			}
		}
	});
}

//修改备注
function addMemoAjax(){
	var order_id = $("#order_id").val();
	var memo = $("#memo").val();
	if(memo == ''){
		$(".error").css("display","block");
		return false;
	}
	$.ajax({
		url: "http://www.shop.com/index.php?s=/admin/order/addmemo",
		data: { "order_id": order_id,"memo":memo },
		type : "post",
		success: function(data) {
			if (data.code > 0) {
				showMessage('success','保存成功');
				location.reload();
			}else{
				showMessage('error','保存失败');
			}
		}
	});
}

function getdelivery(order_id){
	$.ajax({
		url: "http://www.shop.com/index.php?s=/admin/order/orderTakeDelivery",
		data: { "order_id": order_id },
		type : "post",
		success: function(data) {
			if (data.code > 0) {
				showMessage('success','确认收货成功');
				location.reload();
			}else{
				showMessage('error','确认收货失败');
			}
		}
	});
}

 //删除订单
function delete_order(order_id){
	$( "#dialog" ).dialog({
		buttons: {
			"确定": function() {
			$.ajax({
				type : "post",
				url : "http://www.shop.com/index.php?s=/admin/order/deleteOrder",
				data : {"order_id" : order_id.toString()},
				success : function(data) {
					if(data["code"] > 0 ){
						if(typeof LoadingInfo !="undefined"){
							LoadingInfo(1);
							showMessage('success', data["message"], location.reload());
						}else{
							showMessage('success', data["message"], "http://www.shop.com/index.php?s=/admin/order/orderlist");
						}	
					}
				}
			})
			$(this).dialog('close');
			},
			"取消,#f5f5f5,#666": function() {
				$(this).dialog('close');
			},
		},
		contentText:"确定要删除订单吗？",
	});
}
 
//显示运单
function updateExpress(order_id){
	$.ajax({
		type : "post",
		url : "http://www.shop.com/index.php?s=/admin/order/orderdeliverydata",
		data : {'order_id':order_id},
		success : function(data) {
			$("#order_goods_express_id").val(data['order_info']['goods_packet_list'][0]['express_id']);
			var receiver_info = '收货信息：'+data['order_info']['address']+'&nbsp;'+data['order_info']['receiver_address']+'&nbsp;'+data['order_info']['receiver_name']+'&nbsp;'+data['order_info']['receiver_mobile'];//收货信息
			$("#receiver_infos").html(receiver_info);
			var express_company_id = data['order_info']['goods_packet_list'][0]['express_company_id'];
			var express_code = data['order_info']['goods_packet_list'][0]['express_code'];
			var co_html = '';
			co_html += '<option value="0">请选择物流公司</option>';
			for(var i=0;i<data['express_company_list'].length;i++){
				
				if(data['express_company_list'][i]['is_enabled'] == '1'){
					var co_id = data["express_company_list"][i]["co_id"];
					if(express_company_id == co_id){
						co_html += '<option value="'+data["express_company_list"][i]["co_id"]+'" selected >'+data["express_company_list"][i]["company_name"]+'</option>';
					}
					else
					{
						co_html += '<option value="'+data["express_company_list"][i]["co_id"]+'">'+data["express_company_list"][i]["company_name"]+'</option>';
					}
				}
			} 
			$("#update_divlogistics_express_company").html(co_html);
			$("#update_divlogistics_express_no").val(express_code);
			$("#update_express").modal("show");
			
		}
	});	
	
}
 
//修改运单
var flags = false;
function updateExpressAjax(){

		var order_goods_express_id = $("#order_goods_express_id").val();
		var express_name = $("#update_divlogistics_express_company").find("option:selected").text();
		var shipping_type = $('#update_express input[name="shipping_type_update"]:checked ').val();
		var express_company_id = $("#update_divlogistics_express_company").val();
		var express_no = $("#update_divlogistics_express_no").val();
		if(shipping_type == 1){
			if(express_company_id == "0"){
				showTip("请选择物流公司",'warning');
				return false;
			}
			if(express_no == ""){
				showTip("请填写快递单号",'warning');
				$("#update_divlogistics_express_no").focus();
				return false;
			}
		}
		if(flags){
			return;
		}
		flags = true;
		$.ajax({
			type : "post",
			url : "http://www.shop.com/index.php?s=/admin/order/updateOrderExpress",
			data : {'order_goods_express_id':order_goods_express_id,"express_name":express_name,"shipping_type":shipping_type,"express_company_id":express_company_id,"express_no":express_no},
			success : function(data) {
				$("#Delivery").modal('hide');
				if (data['code'] > 0) {
					showMessage('success', data["message"],window.location.reload());
				} else {
					showMessage('error', data["message"]);
					flags = false;
				}
			}
		});
	}

/**
 * 弹出本地配送模态框
 */
function o2o_delivery(order_id){
	$("#o2o_Delivery").modal('show');
	$("#o2o_delivery_order_id").val(order_id);
	$.ajax({
		type : "post",
		url : "http://www.shop.com/index.php?s=/admin/order/o2odeliverydata",
		data : {'order_id':order_id},
		success : function(data) {
			$("#delivery_order_id").val(order_id);
			var receiver_info = '收货信息：'+data['order_info']['address']+'&nbsp;'+data['order_info']['receiver_address']+'&nbsp;'+data['order_info']['receiver_name']+'&nbsp;'+data['order_info']['receiver_mobile'];//收货信息
			$("#receiver_info").html(receiver_info);
			var co_html = '';
			co_html += '<option value="0">请选择配送人员</option>';
			for(var i=0;i<data['o2o_delivery_user_list'].length;i++){
				co_html += '<option value="'+data["o2o_delivery_user_list"][i]["id"]+'">'+data["o2o_delivery_user_list"][i]["name"]+ "&nbsp;&nbsp;" +data["o2o_delivery_user_list"][i]["mobile"] + '</option>';
			} 
			$("#o2o_delivery_user").html(co_html).addClass('select-common').selectric({maxHeight:500});
			
			var go_html = '';
			var no_shipping_num = 0;
			for(var i=0;i<data['order_goods_list'].length;i++){
				if(data['order_goods_list'][i]['shipping_status'] == 0){
					no_shipping_num++;
				}
				go_html += '<tr>';
					go_html += '<td><a>'+data['order_goods_list'][i]['goods_name']+'</a></td>';
					go_html += '<td>'+data['order_goods_list'][i]['num']+'</td>';
				go_html += '</tr>';
			}
			$("#o2o_shipping_num").html(no_shipping_num);
			$("#o2o_Delivery .modal-body table tbody").html(go_html);
		}
	});
}

/**
 * 本地配送提交
 */
var o2o_flag = false;
function o2oDeliverySubmit(){
	var order_id = $("#o2o_delivery_order_id").val();
	var o2o_delivery_user_id = $("#o2o_delivery_user").val();
	var o2o_delivery_no = $("#o2o_delivery_no").val();
	var remark = $("#o2o_Delivery .remark").val();

	if(o2o_delivery_user_id == "0"){
		showTip("请选择配送人员",'warning');
		$("#o2o_delivery_user").focus();
		return false;
	}
	 if(o2o_delivery_no == ""){
		showTip("请填写配送单号",'warning');
		$("#o2o_delivery_no").focus();
		return false;
	} 
	
	if(o2o_flag){
		return;
	}
	o2o_flag = true;
	$.ajax({
		type : "post",
		url : "http://www.shop.com/index.php?s=/admin/order/o2odelivery",
		data : {
			'order_id':order_id,
			'o2o_delivery_user_id': o2o_delivery_user_id,
			'o2o_delivery_no':o2o_delivery_no,
			'remark' : remark
			},
		success : function(data) {
			$("#o2o_Delivery").modal('hide');
			if (data['code'] > 0) {
				showMessage('success', data["message"],window.location.reload());
			} else {
				showMessage('error', data["message"]);
				o2o_flag = false;
			}
		}
	});
}

//备货完成
function presellStockingComplete(order_id){
	$( "#dialog" ).dialog({
		buttons: {
			"确定": function() {
			$.ajax({
				type : "post",
				url : "http://www.shop.com/index.php?s=/admin/Orderpresell/orderStockingComplete",
				data : {"order_id" : order_id},
				success : function(data) {
					if(data["code"] > 0 ){
						LoadingInfo(1);
						showMessage('success', data["message"],window.location.reload());
					}
				}
			})
			$(this).dialog('close');
			},
			"取消,#f5f5f5,#666": function() {
				$(this).dialog('close');
			},
		},
		contentText:"确定设为备货完成吗？",
	});
}

// 收到货款
function received_payment(order_id){
	$( "#dialog" ).dialog({
		buttons: {
			"确定": function() {
			$.ajax({
				type : "post",
				url : "http://www.shop.com/index.php?s=/admin/order/received_payment",
				data : {"order_id" : order_id},
				success : function(data) {
					if(data["code"] > 0 ){
						LoadingInfo(1);
						showMessage('success', data["message"],window.location.reload());
					}
				}
			})
			$(this).dialog('close');
			},
			"取消,#f5f5f5,#666": function() {
				$(this).dialog('close');
			},
		},
		contentText:"您确定已经收到货款了吗？",
	});
}
 
</script>";s:16:"orderPrintAction";s:31279:"<style>
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
	background: url("/public/static/blue/img/un_checked.png") no-repeat;
}
.is_Increment:checked + label{
	background: url("/public/static/blue/img/checked.png") no-repeat;
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
										<option value="1">邮政快递</option>
										</select>
					<span class="help-block" style="display: none;">请选择快递</span>
				</div>
				<span><a href="http://www.shop.com/index.php?s=/admin/express/expresscompany" class="goToConfigure" style="text-decoration: underline;">前去配置</a></span>
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
										<option value="1">邮政快递</option>
										</select>
					<span class="help-block" style="display: none;">请选择快递</span>
				</div>
				<span><a href="http://www.shop.com/index.php?s=/admin/express/expresscompany" class="goToConfigure" style="text-decoration: underline;">前去配置</a></span>
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
		url: "http://www.shop.com/index.php?s=/admin/order/getOrderInvoiceView",
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
		url: "http://www.shop.com/index.php?s=/admin/order/getshopinfo",
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
		$("#invoicePrintingURL").attr("href", __URL("http://www.shop.com/index.php/admin/order/printdeliverypreview?order_ids=" + ids + "&ShopName=" + ShopName + ""));
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
				url: "http://www.shop.com/index.php?s=/admin/order/printpreviewvalidate",
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
		$("#expressSinglePrintURl").attr("href", __URL("http://www.shop.com/index.php/admin/order/printexpresspreview?expressIDs=" + printQueue + "&sid="+$("#expressTemplate").val()));
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
		url: "http://www.shop.com/index.php?s=/admin/order/getShippingList",
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
		window.open('http://www.shop.com/index.php?s=/admin/order/printpreviewOfInvoice&order_ids='+order_ids +'');
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
		url: "http://www.shop.com/index.php?s=/admin/order/getorderexpresspreview",
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
						str += '"><img src="/public/static/blue/img/more.png" alt=""></a></td>';
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
			url : 'http://www.shop.com/index.php?s=/admin/order/addTmpExpressInformation',
			data : {"print_order_arr" : JSON.stringify(print_order_arr)},
			success : function(data){
				//
			}
		})
		var ShopName = $("#deliveryShop option:selected").text();
		var print_order_ids = handlePrintInfo(ids);
		if (print_order_ids != "") {
			window.open(__URL("http://www.shop.com/index.php/admin/order/printexpresspreview?print_order_ids=" + print_order_ids));
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
		url: "http://www.shop.com/index.php?s=/admin/order/getNotshippedOrderList",
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
							str += '"><img src="/public/static/blue/img/more.png" alt=""></a></td>';
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
			url : 'http://www.shop.com/index.php?s=/admin/order/addTmpExpressInformation',
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
		window.open(__URL("http://www.shop.com/index.php/admin/order/printOrder?print_order_ids=" + BatchSend.toString()));
	}
})
</script>";s:17:"orderRefundAction";s:10448:"<link rel="stylesheet" href="/public/admin/css/order_refunds.css">
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
					<input type="text" id="refund_money_input" class="input-common" placeholder="请填写退款金额">
					<span class="operating-hint">请输入退款金额</span>
				</div>
				<div class="refunds-block">
					<label>退款方式：</label>
					<select id="refund_way_select" class="select-common"></select>
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
				<div class="refunds-block js-confirmation-prompt"></div>
				<div style="clear: both;"></div>
			</div>
			<div class="modal-footer">
				<!-- 温馨提示 -->
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
<script src="/public/admin/js/order/order_refunds.js"></script>
<script>
//refund_require_money 退款金额
function refundOperation(operation_type, order_id, order_goods_id,refund_require_money){
	if(operation_type == 'agree'){
		//同意退款
		showAgreeRefund(order_id, order_goods_id);
	}else if(operation_type == 'refuse'){
		//拒绝退款
		refuseRefund(order_id,order_goods_id);
	}else if(operation_type == 'confirm_receipt'){
		//确认收货
		orderGoodsConfirmRecieve(order_id,order_goods_id);
	}else if(operation_type == 'confirm_refund'){
		//确认退款
		confirmRefund(order_id,order_goods_id,refund_require_money);
	}
}

function showAgreeRefund(order_id, order_goods_id){
	$("#agreee_order_id").val(order_id);
	$("#agree_order_goods_id").val(order_goods_id);
	var left = ($(window).width()+$('#agreeRefund').outerWidth())/2;
	var top = ($(window).height()-$('#agreeRefund').outerHeight())/2;
	$("#agreeRefund").css({"left": left, "top" : top});
	$("#agreeRefund").modal("show");
}

// 拒绝退款展示
function refuseRefund(order_id,order_goods_id){
	$("#refuse_order_id").val(order_id);
	$("#refuse_order_goods_id").val(order_goods_id);
	var left = ($(window).width()+$('#refuseRefund').outerWidth())/2;
	var top = ($(window).height()-$('#refuseRefund').outerHeight())/2;
	$("#refuseRefund").css({"left": left, "top" : top});
	$("#refuseRefund").modal('show');
}

// 拒绝退款操作
function refuseRefundType(type){
	var order_id = $("#refuse_order_id").val();
	var order_goods_id = $("#refuse_order_goods_id").val();
	if(type == 1){
		refund_url = "http://www.shop.com/index.php?s=/admin/order/ordergoodsrefuseonce";
	} else{
		refund_url = "http://www.shop.com/index.php?s=/admin/order/ordergoodsrefuseforever";
	}
	$.ajax({
		type : "post",
		url : refund_url,
		data : {'order_id':order_id,"order_goods_id":order_goods_id},
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
function orderGoodsConfirmRecieve(order_id,order_goods_id){
	$("#confirm_receipt").modal("show");
	$.ajax({
		type : "post",
		url : "http://www.shop.com/index.php?s=/admin/order/getOrderGoodsDetialAjax",
		data : {"order_goods_id":order_goods_id},
		success : function(data) {
			$("#logistics_company").text(data['refund_shipping_company']);
			$("#logistics_number").text(data['refund_shipping_code']);
			goodsNum = data['num'];
			$("#storage_num input").val(data['num']);
			$("#hide_receipt_goods_id").val(data['goods_id']);
			$("#hide_receipt_sku_id").val(data['sku_id']);
		}
	});
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
	var order_id = $("#hide_order_id").val();
	var order_goods_id = $("#hide_order_goods_id").val();
	var storage_num = $("#storage_num input").val();
	var goods_id = $("#hide_receipt_goods_id").val();
	var sku_id = $("#hide_receipt_sku_id").val();
	$.ajax({
		type : "post",
		url : "http://www.shop.com/index.php?s=/admin/order/ordergoodsconfirmrecieve",
		data : { 'order_id':order_id, "order_goods_id":order_goods_id, "storage_num" : storage_num, "isStorage" : isStorage, "goods_id" : goods_id, "sku_id" : sku_id },
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
}
</script>";}
?>