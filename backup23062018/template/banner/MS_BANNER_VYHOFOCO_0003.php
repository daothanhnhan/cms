<?php
	$action_product = new action_product();
	$list_pro_new = $action_product->getListProductNew_hasLimit(3);
	$name_product = $list_pro_new[2]['product_name'];
	$url = $list_pro_new[2]['friendly_url'];
	$img = $list_pro_new[2]['product_img'];
	$name_arr = explode(" ", $name_product);
	$count = count($name_arr);
	$str2 = "";
	for ($i=2; $i < $count; $i++) { 
		$str2 .= $name_arr[$i]." ";
	}
?>
<div class="gb-banner-3_vyhofoco">
    <div class="slideSub1_vyhofoco">
        <p class="titleSlide_vyhofoco">Bộ sưu tập</p>
        <p class="noneSlide_vyhofoco"><?= $name_product ?></p>
        <a href="/<?= $url ?>" title="name">Chi Tiết</a>
    </div>
</div>