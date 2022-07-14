<div class="side_bar_ariotoys">
    <div class="box_category_ariotoys">
        <h2 class="header_category_ariotoys">
            <i class="fa fa-th-list" aria-hidden="true"></i>
            <span>Danh mục sản phẩm</span>
        </h2>
        <?php
            $sidebar = new action_product();
            $list_sidebar = $sidebar->getListProductCat_byOrderASC();
        ?>
        <ul class="list_category">
            <?php foreach($list_sidebar as $item_sidebar){?>
                <li class="item_category"><a href="<?= $item_sidebar['friendly_url'] ?>" class="link_category"><?= $item_sidebar['productcat_name'];?></a></li>
            <?php
                }
            ?>
        </ul>
    </div>
</div>