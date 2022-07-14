<div class="action_form_ariotoys">
    <!-- <h3>Tùy chọn đang có</h3>
    <span class="color">Màu sắc</span>
    <select name="">
        <option value="0">---Chọn---</option>
        <option value="1">Vàng</option>
        <option value="2">Trắng</option>
        <option value="3">Đen</option>
    </select> -->
    <!-- <div class="action_favorite_compare">
        <span class="add_favorite_ariotoys1"><i class="iconfont-heart1"></i></span>
        <span class="add_compare_ariotoys1"><i class="iconfont-compare1"></i></span>
    </div> -->
    <div class="action_cart">
        <label>Số lượng:</label>
        <input type="number" style="float: left;margin-right: 20px;" class="form-control qty number_cart" name="" value="1">
        <input type="hidden" name="id" id="product_id" value="<?php echo $rowLang['product_id'];?>">
        <input type="hidden" name="name" id="product_name" value="<?= $rowLang['lang_product_name'];?>">
        <input type="hidden" name="price" id="product_price" value="<?php echo $row['product_price']-($row['product_price']*($row['product_price_sale']/100));?>">
        <button type="button" name="add-to-cart" class="single_add_to_cart_button button alt btn_addCart">Thêm vào giỏ hàng</button>
    </div>
</div>