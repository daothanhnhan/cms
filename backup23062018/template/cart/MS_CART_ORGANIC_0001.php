<!-- <button class="btn btn-addtocart_organic">Add to cart</button> -->
<button type="button" name="add-to-cart" class="btn btn-addtocart_organic btn_addCart" onclick="load_url('<?php echo $row1['product_id'];?>', '<?php echo $rowLang1['lang_product_name'];?>', '<?php echo $row1['product_price']-($row1['product_price']*($row1['product_price_sale']/100));?>')">
	Cho vào giỏ hàng

</button>