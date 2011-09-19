<?php
?>
<div class="cart_one"> <!-- begin cart_one -->
	<ul class="cart_subject" id="cart_title">
		<li class="title_row1">商品名称</li>
		<li class="title_row2">积分</li>
		<li class="title_row3">单价</li>
		<li class="title_row4">优惠</li>
		<li class="title_row5">数量</li>
		<li class="title_row6">操作</li>
	</ul>
	<div class="cart_one_content"> <!-- begin cart_one_content -->
		<ul class="cart_rows">
		<?php foreach ($array_data['lists'] as $key=>$value): ?>
			<li class="row0"><a name="productpic" href="#" target="_blank"
				title="<?php $value['name']; ?>"><img
					src="<?php echo $value['img']; ?>"> </a></li>
			<li class="row1">
				<p>
					<i></i> <span class="name"> <a name="product" target="_blank"
						href="#" title="<?php echo $value['name']; ?>"><?php echo $value['name']; ?></a> </span>
				</p>
			</li>
			<li class="row2"><?php echo $value['numtotal']; ?></li>
			<li class="row3"><span>￥<?php echo $value['price']; ?></span></li>
			<li class="row4"><span><?php echo $value['savemoney']; ?></span></li>
			<li class="row5"><input type="text" name="number" value="<?php echo $value['num']; ?>"></li>
			<li class="row6"><a name="movetofavorite" href="###2"
				title="<?php echo __('此商品将移至“我的收藏”并从购物车中删除'); ?>" id="move_<?php echo $value['id']; ?>"><?php echo __('移入收藏'); ?></a> <a
				name="delete" href="javascript:for_99click();"">删除</a>
			</li>
			<?php endforeach; ?>
		</ul>
			
	</div> <!-- end cart_ont_content -->
	<div class="clearfix"></div>
</div> <!-- end cart_one -->

<div class="cart_total" id="div_total" style="display: block; ">
                <p class="price"><?php echo __('商品总数'); ?>: <span> <?php echo $array_data['status']['rowcount']; ?> </span>  个，
                    <?php echo __('商品金额总计');?> ：
                    <span>￥</span>
                    <span id="total_account"><?php echo $array_data['status']['total']; ?></span>元
                </p>
                <p id="balance">
                    <a name="checkout" id="checkout_btn" href="/cart/step/2" class="clearing" title="结算"><?php echo __('去结算'); ?></a>
                    <a href="<?php echo $array_data['status']['return_url'] ?>" target="_blank" name="goon" class="goon"> << <?php echo __('继续购物'); ?> </a>
                </p>
</div>
