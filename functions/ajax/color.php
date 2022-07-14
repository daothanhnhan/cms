<?php 
	// echo 'color1';
	$id = $_GET['id'];
	include_once dirname(__FILE__).'/../database.php';
	$sql = "SELECT * FROM color WHERE color_id = $id";
	$result = mysqli_query($conn_vn, $sql);
	$row = mysqli_fetch_assoc($result);
	$arr_img = $row['color_img_sub'];
	$arr_img = json_decode($arr_img);
	// $img = $arr_img[0];
	// $img = json_decode($img);
	// echo $img->image;
?>
<div class="slider slider-for">
<?php 
$i = 0;
foreach ($arr_img as $item) { 
	$i++;
	$img = $item;
	$img = json_decode($img);
	?>
	<div class="slide-item"><img src="/images/<?= $img->image ?>" alt="" class="img-responsive img<?= $i ?>" data-zoom-image="/images/<?= $img->image ?>"></div>
<?php } ?>
</div>
<div class="slider slider-nav">
<?php 
$i = 0;
foreach ($arr_img as $item) { 
	$i++;
	$img = $item;
	$img = json_decode($img);
	?>
	<div class="slide-item-nav"><img src="/images/<?= $img->image ?>" alt="<?= $i ?>" class="img-responsive" data-zoom-image="/images/<?= $img->image ?>"></div>
<?php } ?>
</div>