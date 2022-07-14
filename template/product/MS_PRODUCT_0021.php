<?php 
	$price_sub = json_decode($row['product_price_sub']);
	$material = json_decode($row['product_material']);
?>
<div class="">
	<!-- <input type="radio" name="product_price_sub" value="<?= $row['product_price'] ?>" checked><?= $row['product_price'] ?> đ<br> -->
	<?php
	$d = 0; 
	foreach ($price_sub as $k => $item) { 
		$d++;
		$ojpro->price = $item;
		$ojpro->material = $material[$k];
		$json = json_encode($ojpro);
		if ($d == 1) { 
	?>
	<input type="radio" name="product_price_sub" value='<?= $json ?>' checked><?= $item ?> đ (<?= $material[$k] ?>)<br>
	<?php } else { ?>
	<input type="radio" name="product_price_sub" value='<?= $json ?>'><?= $item ?> đ (<?= $material[$k] ?>)<br>
	<?php } ?>
	<?php } ?>
</div>