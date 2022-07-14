<?php 
	include_once dirname(__FILE__) . "/../functions/database.php";
	$sql = "SELECT * FROM stt_gmail WHERE id = 3";
	$result = mysqli_query($conn_vn, $sql);
	$row = mysqli_fetch_assoc($result);
	echo $row['stt'];
?>