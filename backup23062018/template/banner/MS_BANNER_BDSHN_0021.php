<?php
    $product = new action_product();
    $list_project_left = $product->getListProductRelate_byIdCat_hasLimit(236, 10);
?>
<div class="gb-banner-sidebarleft_gbshn">
    <ul>
        <?php
            foreach ($list_project_left as $item) {
        ?>
            <li>
                <?php include DIR_BANNER."MS_BANNER_BDSHN_0002.php";?>
            </li>
        <?php } ?>
    </ul>
</div>