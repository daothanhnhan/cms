<!-- <button class="btn btn-addtocart_naustore">Add to cart</button>
<div class="gb-addtocart"> -->
    <button type="button" name="add-to-cart" class="btn btn-addtocart_naustore add_cart" onclick="load_url('<?php echo $row1['product_id'];?>', '<?php echo $row1['product_name'];?>', '<?php echo $row1['product_price']-($row1['product_price']*($row1['product_price_sale']/100));?>')">
    	Add to cart
    </button>
<!-- </div> -->