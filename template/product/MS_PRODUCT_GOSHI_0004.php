
<div class="gb-home-product_goshi gb-home-product-tab_goshi">
    <div class="container">
        <div class="tabbable-panel">
            <div class="tabbable-line">
                <ul class="nav nav-tabs ">
                    <li class="active">
                        <a href="#tab_default_1" data-toggle="tab">Sản phẩm nổi bật </a>
                    </li>
                    <li>
                        <a href="#tab_default_2" data-toggle="tab">Sản phẩm phổ biến </a>
                    </li>
                    <li>
                        <a href="#tab_default_3" data-toggle="tab">Sản phẩm mới </a>
                    </li>
                </ul>
                <div class="tab-content">
                    <!-- SAN PHAM NOI BAT -->
                    <div class="tab-pane active" id="tab_default_1">
                        <div class="row">
                            <?PHP
                                $list_product_hot_tab = $product->getListProductHot_hasLimit(4);
                                foreach ($list_product_hot_tab as $item) {
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
                            <?PHP } ?>
                        </div>
                    </div>

                    <!-- SAN PHAM PHO BIEN -->
                    <div class="tab-pane" id="tab_default_2">
                        <div class="row">
                            <?php
                                $list_product_new_tab = $product->getListProductNew_hasLimit(4);
                                foreach ($list_product_new_tab as $item) {
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
                    <!-- SAN PHAM MOI -->
                    <div class="tab-pane" id="tab_default_3">
                        <div class="row">
                            <?php
                                $list_product_hot_tab = $product->getListProductHot_hasLimit(4);
                                foreach ($list_product_hot_tab as $item) {
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
            </div>
        </div>
    </div>
</div>