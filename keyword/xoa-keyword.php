<?php 
	include_once dirname(__FILE__) . "/../functions/database.php";
	$id = $_GET['id'];
	$sql = "DELETE FROM keyword WHERE id = $id";
	$result = mysqli_query($conn_vn, $sql);
	header('location: /keyword');
?>