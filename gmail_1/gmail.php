<?php 
	include_once dirname(__FILE__) . "/../functions/database.php";
	$sql = "SELECT * FROM gmail_1 ORDER BY rand() LIMIT 1";
	$result = mysqli_query($conn_vn, $sql);
	$row = mysqli_fetch_assoc($result);
	// echo $row['email'].$row['password'];
	$obj = new stdClass();
	$obj->email = $row['email'];
	$obj->pass = $row['password'];
	echo json_encode($obj);
?>