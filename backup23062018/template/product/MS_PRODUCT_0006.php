<form class="cart" method="post" enctype="multipart/form-data">
    <div class="quantity">
        <div class="form-group">
            <label>Sô lượng: (<span>Còn 2 sản phẩm</span>)</label>
            <input type="number" class="form-control qty number_cart" id="pwd" min="0" value="1">
            <input type="hidden" name="id" id="product_id" value="<?php echo $rowLang['product_id'];?>">
		    <input type="hidden" name="name" id="product_name" value="<?= $rowLang['lang_product_name'];?>">
		    <input type="hidden" name="price" id="product_price" value="<?php echo $row['product_price']-($row['product_price']*($row['product_price_sale']/100));?>">
        </div>
    </div>
   <?php include_once DIR_CART.'MS_CART_0007.php'; ?>
    <div class="clearfix"></div>
</form>