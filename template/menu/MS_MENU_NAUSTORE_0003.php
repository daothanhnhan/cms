<div class="gb-sidebar-category_naustore">
    <div class="title_Module_Bar_5_naustore"> Danh mục sản phẩm <i class="fa fa-list" aria-hidden="true"></i></div>
    <div class="cssmenu">
        <ul>
            <?php
                $action = new action_product();
                $list_product_cat = $action->getListProductCat_byOrderASC();
                foreach ($list_product_cat as $item) {
            ?>
                <li><a href="/<?= $item['friendly_url'] ?>" title="name"><span><img src="/images/logo.png" alt=""></span><?= $item['productcat_name'] ?></a></li>
            <?php } ?>
        </ul>
    </div>
</div>