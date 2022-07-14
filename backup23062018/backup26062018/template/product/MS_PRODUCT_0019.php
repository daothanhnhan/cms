<style type="text/css">
    .single_add_to_cart_button-cms {
        position: relative;
        left: 0px;
    }
    .quantity input {
        width: auto;
    }
</style>
<form class="cart" method="post" enctype="multipart/form-data">
    <div class="quantity" style="float: none;">
        <div class="form-group">
            <label>Sô lượng: (<span>Còn 2 sản phẩm</span>)</label>
            <input type="number" class="form-control qty number_cart" id="pwd" min="0" value="1">
            <input type="hidden" name="id" id="product_id" value="<?php echo $rowLang['product_id'];?>">
		    <input type="hidden" name="name" id="product_name" value="<?= $rowLang['lang_product_name'];?>">
		    <input type="hidden" name="price" id="product_price" value="<?php echo $row['product_price']-($row['product_price']*($row['product_price_sale']/100));?>">
            <label>Màu sắc</label>
            <?php 
                $d = 0;
                $color = json_decode($row['product_color']);
                foreach ($color as $item) {
                    $d++;
                    if ($d == 1) {
                        echo '<input type="radio" name="color" value="'.$item.'" checked>'.$item;
                    } else {
                        echo '<input type="radio" name="color" value="'.$item.'">'.$item;
                    }                    
                }
            ?>
            <br>
            <label>Kích cỡ</label>
            <?php 
                $d = 0;
                $size = json_decode($row['product_size']);
                foreach ($size as $item) {
                    $d++;
                    if ($d == 1) {
                        echo '<input type="radio" name="size" value="'.$item.'" checked>'.$item;
                    } else {
                        echo '<input type="radio" name="size" value="'.$item.'">'.$item;
                    }                    
                }
            ?>
        </div>
    </div>
   <?php include_once DIR_CART.'MS_CART_0007.php'; ?>
    <div class="clearfix"></div>
</form>