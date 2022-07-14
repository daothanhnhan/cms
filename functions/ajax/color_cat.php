<?php 
	// echo 'color1';
	$id = $_GET['id'];
	include_once dirname(__FILE__).'/../database.php';
	$sql = "SELECT * FROM color WHERE color_id = $id";
	$result = mysqli_query($conn_vn, $sql);
	$row = mysqli_fetch_assoc($result);
	$arr_img = $row['color_img_sub'];
	$arr_img = json_decode($arr_img);
	$img = $arr_img[0];
	$img = json_decode($img);
	// echo $img->image;
?>
<img class="wp-post-image img-responsive" src="/images/<?= $img->image ?>" alt="">