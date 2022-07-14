<?php 
	include_once dirname(__FILE__) . "/../functions/database.php";
	$sql = "SELECT * FROM keyword_1 WHERE check_name = 1";
	$result = mysqli_query($conn_vn, $sql);
	$rows = array();
	$num = mysqli_num_rows($result);
	if ($num > 0) {
		while ($row = mysqli_fetch_assoc($result)) {
			$obj = new stdClass();
			$obj->id = $row['id'];
			$obj->name = $row['name'];

			$arr_domain = array();
			if ($row['check_0']==1) {
				$arr_domain[] = $row['domain'];
			}
			if ($row['check_1']==1) {
				$arr_domain[] = $row['domain1'];
			}
			if ($row['check_2']==1) {
				$arr_domain[] = $row['domain2'];
			}
			if ($row['check_3']==1) {
				$arr_domain[] = $row['domain3'];
			}
			$obj->domain = $arr_domain;
			$rows[] = $obj;
		}
	}

	echo json_encode($rows);

?>