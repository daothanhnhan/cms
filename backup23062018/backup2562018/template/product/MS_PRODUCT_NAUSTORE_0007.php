<div class="gb-col-4-news-product_naustore">
    <div class="row">
        <div class="col-md-4">
            <div class="gb-col-4-news-product_naustore-item">
                <div class="gb-col-4-news-product_naustore-item-item">
                    Bánh kẹo nhập khẩu
                </div>
                <div class="gb-newlist-details">
                    <?php
                        $product = new action_product();
                        $list_product_231 = $product->getListProductRelate_byIdCat_hasLimit(231, 4);
                        foreach ($list_product_231 as $item) {
                            $rowLang1 = $product->getProductLangDetail_byId($item['product_id'],$lang);
                            $row1 = $product->getProductDetail_byId($item['product_id'],$lang); 
                    ?>
                    <div class="gb-product-sidebar_naustore-item">
                        <div class="gb-product-sidebar_naustore-item-img">
                            <a href="/<?= $rowLang1['friendly_url'] ?>">
                                <img src="/images/<?= $row1['product_img'] ?>" alt="review" class="img-responsive">
                            </a>
                        </div>
                        <div class="gb-product-sidebar_naustore-item-info">
                            <h4><a href="/<?= $rowLang1['friendly_url'] ?>"><?= $rowLang1['lang_product_name'] ?></a></h4>
                            <!--PRICE-->
                            <?php include DIR_PRODUCT."MS_PRODUCT_NAUSTORE_0002.php";?>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="gb-col-4-news-product_naustore-item">
                <div class="gb-col-4-news-product_naustore-item-item">
                    Hàng tiêu dùng Thái Lan
                </div>
                <div class="gb-newlist-details">
                    <?php
                        $product = new action_product();
                        $list_product_230 = $product->getListProductRelate_byIdCat_hasLimit(230, 4);
                        foreach ($list_product_230 as $item) {
                            $rowLang1 = $product->getProductLangDetail_byId($item['product_id'],$lang);
                            $row1 = $product->getProductDetail_byId($item['product_id'],$lang); 
                    ?>
                    <div class="gb-product-sidebar_naustore-item">
                        <div class="gb-product-sidebar_naustore-item-img">
                            <a href="/<?= $rowLang1['friendly_url'] ?>">
                                <img src="/images/<?= $row1['product_img'] ?>" alt="review" class="img-responsive">
                            </a>
                        </div>
                        <div class="gb-product-sidebar_naustore-item-info">
                            <h4><a href="/<?= $rowLang1['friendly_url'] ?>"><?= $rowLang1['lang_product_name'] ?></a></h4>
                            <!--PRICE-->
                            <?php include DIR_PRODUCT."MS_PRODUCT_NAUSTORE_0002.php";?>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="gb-col-4-news-product_naustore-item">
                <div class="gb-col-4-news-product_naustore-item-item">
                    Quần áo thời trang nữ
                </div>
                <div class="gb-newlist-details">
                    <?php
                        $product = new action_product();
                        $list_product_229 = $product->getListProductRelate_byIdCat_hasLimit(229, 4);
                        foreach ($list_product_229 as $item) {
                            $rowLang1 = $product->getProductLangDetail_byId($item['product_id'],$lang);
                            $row1 = $product->getProductDetail_byId($item['product_id'],$lang); 
                    ?>
                    <div class="gb-product-sidebar_naustore-item">
                        <div class="gb-product-sidebar_naustore-item-img">
                            <a href="/<?= $rowLang1['friendly_url'] ?>">
                                <img src="/images/<?= $row1['product_img'] ?>" alt="review" class="img-responsive">
                            </a>
                        </div>
                        <div class="gb-product-sidebar_naustore-item-info">
                            <h4><a href="/<?= $rowLang1['friendly_url'] ?>"><?= $rowLang1['lang_product_name'] ?></a></h4>
                            <!--PRICE-->
                            <?php include DIR_PRODUCT."MS_PRODUCT_NAUSTORE_0002.php";?>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>