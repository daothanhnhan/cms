<?php 
	include_once dirname(__FILE__) . "/../functions/database.php";
	$sql = "SELECT * FROM keyword_1";
	$result = mysqli_query($conn_vn, $sql);
	$rows = array();
	$num = mysqli_num_rows($result);
	if ($num > 0) {
		while ($row = mysqli_fetch_assoc($result)) {
			$rows[] = $row;
		}
	}
	echo json_encode($rows);
?>