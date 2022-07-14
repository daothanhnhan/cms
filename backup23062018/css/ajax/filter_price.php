<?php 
	session_start();
	if (!isset($_SESSION['filter_price'])) {
		$data = $_GET['data'];
		$data = (string)$data;
		$filter_price = array($data);
		$_SESSION['filter_price'] = serialize($filter_price);
	} else {
		$data = $_GET['data'];
		$data = (string)$data;
		$arr = unserialize($_SESSION['filter_price']);
		if (in_array($data, $arr)) {			
			$arr1 = array($data);
			$arr = array_diff($arr, $arr1);
			$_SESSION['filter_price'] = serialize($arr);
		} else {
			array_push($arr, $data);
			$_SESSION['filter_price'] = serialize($arr);
		}
	}

	echo $_SESSION['filter_price'];
	// echo serialize($arr1);
?>