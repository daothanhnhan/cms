<?php
    $product = new action_product();
    $list_product_new_1 = $product->getListProductNew_hasLimit(5);
?>
<div class="gb-sidebar-featured-vyhofoco">
    <aside class="widget">
        <h3 class="widget_sidebar-title"> Sản phẩm mới nhất</h3>
        <div class="widget-content">
            <ul>
                <?php
                    foreach ($list_product_new_1 as $item) {
                        $rowLang = $product->getProductLangDetail_byId($item['product_id'],$lang);
                        $row1 = $product->getProductDetail_byId($item['product_id'],$lang);
                ?>
                    <li>
                        <div class="item">
                            <div class="item-img">
                                <a href="/<?= $rowLang['friendly_url'] ?>">
                                    <img src="/images/<?= $row1['product_img'] ?>" alt="" class="img-responsive">
                                </a>
                            </div>
                            <div class="item-text">
                                <h2><a href="/<?= $rowLang['friendly_url'] ?>"><?= $rowLang['lang_product_name'] ?></a></h2>
                                <!--price-->
                                <?php include DIR_PRODUCT."MS_PRODUCT_VYHOFOCO_0003.php";?>
                            </div>
                        </div>
                    </li>
                <?php } ?>
            </ul>
        </div>
    </aside>
</div>