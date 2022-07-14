<?php 
	include_once dirname(__FILE__) . "/../functions/database.php";
	$id = $_GET['id'];

	$sql = "SELECT * FROM keyword_1 WHERE id = $id";
	$result = mysqli_query($conn_vn, $sql);
	$row = mysqli_fetch_assoc($result);

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

	$check_name = $row['check_name'];

	if ($count == 4 && $check_name == 0) {
		echo 'fail';
	} else {
		$check_name = $row['check_name'];
		if ($check_name == 0) {
			$sql = "UPDATE keyword_1 SET check_name = 1 WHERE id = $id";
		} else {
			$sql = "UPDATE keyword_1 SET check_name = 0 WHERE id = $id";
		}
		mysqli_query($conn_vn, $sql);
		echo 'ok';
	}

	

?>