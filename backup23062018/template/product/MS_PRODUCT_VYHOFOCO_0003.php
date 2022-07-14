<div class="prices_vyhofoco">
    <p class="prices-news_vyhofoco"><?= number_format($row1['product_price']) ?><span> VNĐ</span></p>
    <p class="prices-old_vyhofoco"><?= number_format($row1['product_price'] - ($row1['product_price']*$row1['product_price_sale'])/100 ) ?> <span> VNĐ</span></p>
</div>