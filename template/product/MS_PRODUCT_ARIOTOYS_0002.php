<?php 
    $product_relate_ariotoysd1 = $action_product->getListProductRelate_byIdCat_hasLimit($row['productcat_id'], 3);//var_dump($product_relate_ariotoysd1);die;
?>
<div class="product_relate_ariotoys">
    <div class="title_pro_relate_ariotoys">
        <h2>Sản phẩm liên quan</h2>
    </div>
    <div class="box_list_pro_ariotoys">
        <div class="row">
            <div class="list_product">
                <?php 
                    foreach ($product_relate_ariotoysd1 as $row) {
                        $action_product1 = new action_product(); 
                        $rowLang1 = $action_product1->getProductLangDetail_byId($row['product_id'],$lang);
                        $row1 = $action_product1->getProductDetail_byId($row['product_id'],$lang); 
                ?>
                <div class="col-md-3">
                    <div class="item_product_ariotoys">
                        <div class="cover_item_product_ariotoys">
                            <div class="box_image_product_ariotoys">
                                <a href="<?= $rowLang1['friendly_url'] ?>">
                                    <img src="/images/<?= $row1['product_img'] ?>" alt="<?= $rowLang1['lang_product_name'] ?>"/>
                                </a>
                                <div class="box_action_ariotoys">
                                <?php include DIR_CART."MS_CART_ARIOTOYS_0005.php";?>
                                <?php include DIR_CART."MS_CART_ARIOTOYS_0006.php";?>
                                <?php include DIR_CART."MS_CART_ARIOTOYS_0007.php";?>
                            </div>
                            </div>
                            <div class="box_caption_product_ariotoys">
                                <h3 class=""><a href="/<?= $rowLang1['friendly_url'] ?>" class=""><?= $rowLang1['lang_product_name'] ?></a></h3>
                                <?php include DIR_CART."MS_CART_ARIOTOYS_0004.php";?>
                            </div>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>
</div>