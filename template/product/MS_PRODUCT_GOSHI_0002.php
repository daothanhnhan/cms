<div class="box_price_product_goshi">
    <p class="price_product_goshi"><?= number_format($row1['product_price'])  ?> VNĐ</p>
    <p class="old_price_goshi"><?= number_format($row1['product_price']-($row1['product_price']*($row1['product_price_sale']/100))) ?>VND</p>
</div>