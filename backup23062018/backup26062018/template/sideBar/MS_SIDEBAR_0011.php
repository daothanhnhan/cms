<?php 
    $sidebar_procat = new action_product();
    $list_productcat = $sidebar_procat->getListProductCat_byOrderASC();
?>
<div class="side_bar-cms widget">
    <div class="box_category-cms">
        <h2 class="header_category">
            <i class="fa fa-th-list" aria-hidden="true"></i>
            <span>Danh mục sản phẩm</span>
        </h2>
        <ul class="list_category-cms">
            <?php 
            foreach ($list_productcat as $item) { 
                $action_product = new action_product();
                // $row = $action_product->getProductCatDetail_byId($item['productcat_id'], $lang);
                $rowLang = $action_product->getProductCatLangDetail_byId($item['productcat_id'], $lang);
            ?>
            <li class="item_category-cms"><a href="/<?= $rowLang['friendly_url'] ?>" class="link_category"><?= $rowLang['lang_productcat_name'] ?></a></li>
            <?php } ?>
            <!-- <li class="item_category-cms"><a href="" class="link_category">Sản phẩm bán chạy</a></li>
            <li class="item_category-cms"><a href="" class="link_category">Kính trẻ em</a></li>
            <li class="item_category-cms"><a href="" class="link_category">Kính nữ</a></li>
            <li class="item_category-cms"><a href="" class="link_category">Kính cận</a></li>
            <li class="item_category-cms"><a href="" class="link_category">Kính dùng máy tính</a></li>
            <li class="item_category-cms"><a href="" class="link_category">Kính loạn thị</a></li>
            <li class="item_category-cms"><a href="" class="link_category">Swiss eye</a></li>
            <li class="item_category-cms"><a href="" class="link_category">Khuyến mãi</a></li>
            <li class="item_category-cms"><a href="" class="link_category">Sản phẩm khác</a></li> -->
        </ul>
    </div>
</div>