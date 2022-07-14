<?php 
	if ($_SESSION['cart_type']=='1') {
		include_once DIR_CART."MS_CART_0002.php"; 
	} elseif ($_SESSION['cart_type']=='2') {
		include_once DIR_CART."MS_CART_0009.php"; 
	} elseif ($_SESSION['cart_type']=='3') {
		include_once DIR_CART."MS_CART_0010.php"; 
	} elseif ($_SESSION['cart_type']=='4') {
		include_once DIR_CART."MS_CART_0002.php"; 
	} elseif ($_SESSION['cart_type']=='5') {
		include_once DIR_CART."MS_CART_0011.php";
	}
?>