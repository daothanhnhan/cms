<?php 
	$total_cart = 0;
	if (isset($_SESSION['shopping_cart'])) {
		$total = $_SESSION['total'];
		foreach ($_SESSION['shopping_cart'] as $v) {
			$total_cart++;
		}
	}
?>
<a href="/cart" title="">
	<div class="gb-header-cart_naustore">
	    <button class="btn btn-cart-naustore"><i class="fa fa-shopping-bag" aria-hidden="true"></i> Sản phẩm (<?= $total_cart ?>)</button>
	</div>
</a>