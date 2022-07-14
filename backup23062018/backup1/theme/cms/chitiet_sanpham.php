<?php 
	if ($_SESSION['cart_type'] == '1') {
		include_once DIR_PRODUCT."MS_PRODUCT_0010.php";  
	} elseif ($_SESSION['cart_type'] == '2') {
		include_once DIR_PRODUCT."MS_PRODUCT_0018.php";  
	} elseif ($_SESSION['cart_type'] == '3') {
		include_once DIR_PRODUCT."MS_PRODUCT_0020.php";  
	} elseif ($_SESSION['cart_type'] == '4') {
		include_once DIR_PRODUCT."MS_PRODUCT_0022.php";  
	} elseif ($_SESSION['cart_type'] == '5') {
		include_once DIR_PRODUCT."MS_PRODUCT_0023.php";
	}
?>