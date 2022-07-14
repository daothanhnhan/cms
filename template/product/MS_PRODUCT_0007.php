
<?php if ($row1['product_price_sale']!=0) { ?>
<div class="box-price-cms">
    <div class="box-price-cms">
        <span class="price-old"><?= number_format($row1['product_price']) ?> đ</span>
        <span class="price-sale"><?= number_format($row1['product_price']-($row1['product_price']*($row1['product_price_sale']/100))) ?> đ</span>
    </div>
</div>
<?php } else { ?>
<div class="box-price-cms">
    <span class="price-sale">$ <?= number_format($row1['product_price']) ?></span>
</div>
<?php } ?>