<?php 
	include_once dirname(__FILE__) . "/../functions/database.php";
	$sql = "SELECT * FROM gmail_1";
	$result = mysqli_query($conn_vn, $sql);
	$num = mysqli_num_rows($result);
	echo $num;
?>