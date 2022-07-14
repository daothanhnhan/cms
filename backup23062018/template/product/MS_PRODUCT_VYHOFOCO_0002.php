<div class="gb-tabproduct-home_vyhofoco">
    <div class="container">
        <div class="tabbable-panel">
            <div class="tabbable-line">
                <div class="gb-tabproduct-home-title_vyhofoco">
                    <div class="item-tab-text">
                        <?php
                            $product = new action_product();
                            $product_cat = $product->getProductCat_byProductCatIdParent_Limit(0, '', 4);
                        ?>
                        <ul class="nav nav-tabs ">
                            <?php
                                $i = 1;
                                foreach ($product_cat as $item) {
                            ?>
                                <li class="<?php if($i ==1){echo "active";}?>">
                                    <a href="#tab_default_<?= $i++ ?>" data-toggle="tab"><?= $item['productcat_name'] ?></a>
                                </li>
                            <?php } ?>
                        </ul>
                    </div>
                </div>

                <div class="tab-content">
                    <?php
                        $i = 1;
                        foreach ($product_cat as $item) {
                            $id_productcat = $item['productcat_id'];
                            $list_product_item = $product->getProductList_byMultiLevel_orderProductId($id_productcat, 'desc','1',6,'');
                    ?>
                        <div class="tab-pane <?php if($i ==1){echo "active";}?>" id="tab_default_<?= $i++ ?>">
                            <div class="row">
                                <?php
                                    foreach ($list_product_item['data'] as $item) {
                                        $rowLang = $product->getProductLangDetail_byId($item[0], $lang);
                                        $row1 = $product->getProductDetail_byId($item[0], $lang);
                                ?>
                                    <div class="col-md-3 col-sm-6">
                                        <div class="tabproduct_item_vyhofoco">
                                            <div class="product_item_img_vyhofoco">
                                                <a href="<?= $rowLang['friendly_url'] ?>">
                                                    <img src="/images/<?= $row1['product_img'] ?>" alt="" class="img-responsive">
                                                </a>
                                            </div>
                                            <div class="product_item_text_vyhofoco">
                                                <h2><a href="<?= $rowLang['friendly_url'] ?>"><?= $rowLang['lang_product_name'] ?></a></h2>
                                                <div class="product_item_price_chitiet_vyhofoco">
                                                    <!--PRICES-->
                                                    <?php include DIR_PRODUCT."MS_PRODUCT_VYHOFOCO_0003.php";?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                               <?php } ?>
                            </div>
                        </div>
                   <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>