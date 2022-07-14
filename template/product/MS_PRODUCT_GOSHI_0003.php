<?php
    $product = new action_product();
    $list_product_hot = $product->getListProductHot_hasLimit(8);
?>
<div class="gb-home-product2_goshi">
    <div class="container">
        <div class="product-home-title_goshi">
            <h2>Sản phẩm nổi bật</h2>
            <a href="/san-pham">Xem thêm</a>
        </div>
        <div class="row">
            <?php
                foreach ($list_product_new as $item) {
                    $rowLang1 = $product->getProductLangDetail_byId($item['product_id'],$lang);
                    $row1 = $product->getProductDetail_byId($item['product_id'],$lang);
            ?>
                <div class="col-md-3 col-sm-6">
                    <div class="product-item_goshi">
                        <div class="product-item-img_goshi">
                            <a href="/<?= $rowLang1['friendly_url'] ?>" class="img-product_goshi">
                                <img src="/images/<?= $row1['product_img'] ?>" alt="" class="img-responsive">
                            </a>
                            <!--Compare-->
                            <?php include DIR_CART."MS_CART_GOSHI_0002.php";?>
                            <!--whislist-->
                            <?php include DIR_CART."MS_CART_GOSHI_0003.php";?>
                            <!--Add to cart-->
                            <?php include DIR_CART."MS_CART_GOSHI_0004.php";?>
                        </div>
                        <div class="box_info_product_goshi">
                            <h3>
                                <a class="link_name_product_goshi" href="/<?= $rowLang1['friendly_url'] ?>">
                                    <?= $rowLang1['lang_product_name']?>
                                </a>
                            </h3>
                            <!--PRICE-->
                            <?php include DIR_PRODUCT."MS_PRODUCT_GOSHI_0002.php";?>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</div>