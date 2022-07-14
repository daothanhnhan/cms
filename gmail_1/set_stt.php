<?php 
	include_once dirname(__FILE__) . "/../functions/database.php";

	$sql = "SELECT * FROM gmail_1";
	$result = mysqli_query($conn_vn, $sql);
	$num = mysqli_num_rows($result);
	$num--;

	$stt = $_GET['stt'];
	if ($stt > $num) {
		$stt = 0;
	}
	
	$sql = "UPDATE stt_gmail SET stt = $stt WHERE id = 2";
	$result = mysqli_query($conn_vn, $sql);
?>