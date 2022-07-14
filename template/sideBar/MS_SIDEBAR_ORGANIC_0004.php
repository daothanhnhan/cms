<div class="gb-danhmuc-sidebar-organic widget-sidebar">
    <aside class="widget">
        <h3 class="widget-title-sidebar-organic">Danh mục sản phẩm</h3>
        <div class="widget-content">
            <ul>
                <?php
                    $product_cat = new action_product();
                    $list_product_cat = $product_cat->getListProductCat_byOrderASC();
                    foreach ($list_product_cat as $item) {
                ?>
                    <li>
                        <a href="/<?= $item['friendly_url'] ?>">
                            <i class="fa fa-angle-right" aria-hidden="true"></i>
                            <?= $item['productcat_name'] ?>
                        </a>
                    </li>
                <?php } ?>
            </ul>
        </div>
    </aside>
</div>