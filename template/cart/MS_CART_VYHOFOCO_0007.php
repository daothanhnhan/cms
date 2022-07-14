<?php 
	$total_cart = 0;
	if (isset($_SESSION['shopping_cart'])) {
		$total = $_SESSION['total'];
		foreach ($_SESSION['shopping_cart'] as $v) {
			$total_cart++;
		}
	}
?>
<div class="shopping-cart_vyhofoco">
	<a href="/cart" title="">
		<i class="fa fa-shopping-bag" aria-hidden="true"></i>
    	<span class="number-item"><?= $total_cart ?></span>
	</a>
</div>