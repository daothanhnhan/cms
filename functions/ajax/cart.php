<?php 
	session_start();
	// echo $_GET['str'];
	$cart = $_GET['str'];
	if ($cart == 'cart1') {
		$_SESSION['cart_type'] = '1';
	}
	if ($cart == 'cart2') {
		$_SESSION['cart_type'] = '2';
	}
	if ($cart == "cart3") {
		$_SESSION['cart_type'] = '3';
	}
	if ($cart == 'cart4') {
		$_SESSION['cart_type'] = '4';
	}
	if ($cart == 'cart5') {
		$_SESSION['cart_type'] = '5';
	}
?>