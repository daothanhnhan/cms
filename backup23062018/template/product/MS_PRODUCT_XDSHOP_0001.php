<!-- MẶT HÀNG ƯA CHUỘNG -->
<?PHP
    $product_home = new action_product();
    $list_product_level1 = $product_home->getProductList_byMultiLevel_orderProductId(243,'DESC',1, 2, '');
    $list_product_level2 = $product_home->getProductList_byMultiLevel_orderProductId(243,'DESC',3, 1, '');
    $list_product_level3 = $product_home->getSomeLastProduct_byIdCat_XD(243,2, 3);
    $list_product_level4 = $product_home->getSomeLastProduct_byIdCat_XD(243,2, 5);
?>
<div class="gb-mathanguachuong_xdshop">
    <div class="titleCategoryProduct_xdshop">Mặt Hàng ưa chuộng</div>
    <div class="categoryProduct_xdshop">
        <div class="col1">
            <?php
                foreach ($list_product_level1['data'] as $item) {
                    $rowLang = $product_home->getProductLangDetail_byId($item['product_id'],$lang);
                    $row1 = $product_home->getProductDetail_byId($item['product_id'],$lang);
            ?>
                <div class="categoryProduct-item_xdshop">
                    <a href="/<?= $rowLang['friendly_url'] ?>" title="name">
                        <img src="/images/<?= $row1['product_img'] ?>" alt="name" class="img-responsive">
                        <div class="item-text_xdshop">
                            <p class="des_xdshop"><?= $rowLang['lang_product_name'] ?></p>
                            <!--PRICE-->
                            <?php include DIR_PRODUCT."MS_PRODUCT_XDSHOP_0004.php";?>
                        </div>
                    </a>
                </div>
            <?php } ?>
        </div><!--end col1-->
        <div class="col2">
            <?php
                foreach ($list_product_level2['data'] as $item) {
                    $rowLang = $product_home->getProductLangDetail_byId($item['product_id'],$lang);
                    $row1 = $product_home->getProductDetail_byId($item['product_id'],$lang);
            ?>
                <div class="categoryProduct-item_xdshop">
                    <a href="/<?= $rowLang['friendly_url'] ?>" title="name">
                        <img src="/images/<?= $row1['product_img'] ?>" alt="name" class="img-responsive">
                        <div class="item-text_xdshop">
                            <p class="des_xdshop"><?= $rowLang['lang_product_name'] ?></p>
                            <!--PRICE-->
                            <?php include DIR_PRODUCT."MS_PRODUCT_XDSHOP_0004.php";?>
                        </div>
                    </a>
                </div>
            <?php } ?>
        </div><!--end col2-->
        <div class="col3">
            <?php
                foreach ($list_product_level3 as $item) {
                    $rowLang = $product_home->getProductLangDetail_byId($item['product_id'],$lang);
                    $row1 = $product_home->getProductDetail_byId($item['product_id'],$lang);
            ?>
                <div class="categoryProduct-item_xdshop">
                    <a href="/<?= $rowLang['friendly_url'] ?>" title="name">
                        <img src="/images/<?= $row1['product_img'] ?>" alt="name" class="img-responsive">
                        <div class="item-text_xdshop">
                            <p class="des_xdshop"><?= $rowLang['lang_product_name'] ?></p>
                            <!--PRICE-->
                            <?php include DIR_PRODUCT."MS_PRODUCT_XDSHOP_0004.php";?>
                        </div>
                    </a>
                </div>
            <?php } ?>
        </div><!--end col3-->
        <div class="col4">
            <?php
                foreach ($list_product_level4 as $item) {
                    $rowLang = $product_home->getProductLangDetail_byId($item['product_id'],$lang);
                    $row1 = $product_home->getProductDetail_byId($item['product_id'],$lang);
            ?>
                <div class="categoryProduct-item_xdshop">
                    <a href="/<?= $rowLang['friendly_url'] ?>" title="name">
                        <img src="/images/<?= $row1['product_img'] ?>" alt="name" class="img-responsive">
                        <div class="item-text_xdshop">
                            <p class="des_xdshop"><?= $rowLang['lang_product_name'] ?></p>
                            <!--PRICE-->
                            <?php include DIR_PRODUCT."MS_PRODUCT_XDSHOP_0004.php";?>
                        </div>
                    </a>
                </div>
            <?php } ?>
        </div><!--end col3-->
    </div>
</div>