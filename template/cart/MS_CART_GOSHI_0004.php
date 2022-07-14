<div class="action_product_goshi">
    <a class="add_cart_goshi add_cart" name="add-to-cart" onclick="load_url('<?php echo $row1['product_id'];?>', '<?php echo $row1['product_name'];?>', '<?php echo $row1['product_price']-($row1['product_price']*($row1['product_price_sale']/100));?>')">
    	<i class="iconfont-cart3"></i>Thêm vào giỏ</a>
</div>