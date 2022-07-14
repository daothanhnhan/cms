<?php 
	$total_cart = 0;
	if (isset($_SESSION['shopping_cart'])) {
		foreach ($_SESSION['shopping_cart'] as $v) {
			$total_cart++;
		}
	}
?>
<a href="/gio-hang">
	<i class="fa fa-shopping-cart" aria-hidden="true"></i>
	Giỏ hàng(<?= $total_cart ;?>)
</a>