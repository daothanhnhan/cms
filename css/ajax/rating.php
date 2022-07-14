<?php 
	$id = $_GET['id'];
	$ip = $_GET['ip'];
	$star = $_GET['star'];
	include_once dirname(__FILE__) . '/../functions/database.php';
	$sql = "SELECT * FROM rating Where address_ip = '$ip' And product_id = $id";
	$result = mysqli_query($conn_vn, $sql) or die('error: ');
	$num = mysqli_num_rows($result);
	// echo $num;
	if ($num == 0) {
		$star_1 = 0;
		$star_2 = 0;
		$star_3 = 0;
		$star_4 = 0;
		$star_5 = 0;
		if ($star == 'star_1') {
			$star_1 = 1;
		}
		if ($star == 'star_2') {
			$star_2 = 1;
		}
		if ($star == 'star_3') {
			$star_3 = 1;
		}
		if ($star == 'star_4') {
			$star_4 = 1;
		}
		if ($star == 'star_5') {
			$star_5 = 1;
		}
		$sql = "INSERT INTO rating (star_1, star_2, star_3, star_4, star_5, address_ip, product_id) VALUES ($star_1, $star_2, $star_3, $star_4, $star_5, '$ip', $id)";
		$result = mysqli_query($conn_vn, $sql);
	}
	
?>