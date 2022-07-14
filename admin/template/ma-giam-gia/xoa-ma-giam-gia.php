<?php 
	$id = $_GET['id'];
	$sql = "DELETE FROM discount_code WHERE id = $id";
	$result = mysqli_query($conn_vn, $sql);
	header('location: /admin/index.php?page=ma-giam-gia');
?>