<?php 
	include_once dirname(__FILE__) . "/../functions/database.php";

	$pos = $_GET['pos'];
	$id = $_GET['id'];

	$sql = "SELECT * FROM keyword_2 WHERE id = $id";
	$result = mysqli_query($conn_vn, $sql);
	$row = mysqli_fetch_assoc($result);

	$domain = 'check_'.$pos;
	$check = $row['check_'.$pos];

	$count = 0;
	if ($row['check_0']==0) {
		$count++;
	}
	if ($row['check_1']==0) {
		$count++;
	}
	if ($row['check_2']==0) {
		$count++;
	}
	if ($row['check_3']==0) {
		$count++;
	}

	if ($count == 3 && $check == 1) {
		echo 'fail';
	} else {
		if ($check == 0) {
			$sql = "UPDATE keyword_2 SET $domain = 1 WHERE id = $id";
		} else {
			$sql = "UPDATE keyword_2 SET $domain = 0 WHERE id = $id";
		}
		$result1 = mysqli_query($conn_vn, $sql);

		echo 'ok';
	}
	

?>