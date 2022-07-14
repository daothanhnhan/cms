<?php 
	$total_cart = 0;
	if (isset($_SESSION['shopping_cart'])) {
		foreach ($_SESSION['shopping_cart'] as $v) {
			$total_cart++;
		}
	}
?>
<div class="gb-shopping-cart-cms">
    <div class="uni-right-menu-cms">
        <div class="shopping-cart">
            <a href="/gio-hang">
                <i class="fa fa-shopping-basket" aria-hidden="true"></i>
                <span class="number-item badge"><?= $total_cart ?></span>
            </a>
        </div>
    </div>
</div>