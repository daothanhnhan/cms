<?php
    $product = new action_product();
    $list_project_left = $product->getListProductRelate_byIdCat_hasLimit(236, 10);
?>
<div class="gb-banner-tinhhot_bdshn">
    <marquee direction="up" behavior="Scroll" scrollamount="5" onmouseover="this.stop()" onmouseout="this.start()" width="100%" height="686px">
        <ul>
            <?php
                foreach ($list_project_left as $item) {
            ?>
                <li>
                    <?php include DIR_BANNER."MS_BANNER_BDSHN_0002.php";?>
                </li>
            <?php } ?>
        </ul>
    </marquee>
</div>