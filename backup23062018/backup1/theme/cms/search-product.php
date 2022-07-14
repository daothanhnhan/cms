<?php
	echo "aa";
	$limit = 9;

	function search ($lang, $trang, $limit) {
		if (isset($_POST['q'])) {
			$q = $_POST['q'];
			$q = trim($q);
	        $q = vi_en1($q);	        
		} else {
			$q = $_GET['search'];
        	// $q = str_replace('-', ' ', $q);
		}

		$start = $trang * $limit;
		global $conn_vn;
		$sql = "SELECT * FROM product_languages INNER JOIN product ON product_languages.product_id = product.product_id WHERE product_languages.friendly_url like '%$q%' And product_languages.languages_code = '$lang'";
		$result = mysqli_query($conn_vn, $sql);
		$count = mysqli_num_rows($result);

		$sql = "SELECT * FROM product_languages INNER JOIN product ON product_languages.product_id = product.product_id WHERE product_languages.friendly_url like '%$q%' And product_languages.languages_code = '$lang' LIMIT $start,$limit";
		$result = mysqli_query($conn_vn, $sql);
		$rows = array();
		while ($row = mysqli_fetch_assoc($result)) {
			$rows[] = $row;
		}
		$return = array(
				'data' => $rows,
				'count' => $count,
				'q' => $q
			);
		return $return;
	}
	$rows = search($lang, $trang, $limit);//var_dump($rows['count']);die;
?>
<div class="gb-sanpham-cms">

    <?php include_once DIR_BREADCRUMS.'MS_BREADCRUM_0001.php';?>

    <div class="gb-sanpham-cms-body">
        <div class="container">

            <!--FILTER SẢN PHẨM-->
            <div class="gb-sanpham-cms-filter">
                <?php include_once DIR_SEARCH."MS_SEARCH_0001.php";?>
                <?php include_once DIR_SEARCH."MS_SEARCH_0002.php";?>
                <?php include_once DIR_SEARCH."MS_SEARCH_0003.php";?>
            </div>

            <div class="row">
                <div class="col-md-9">
                   <?php include_once DIR_PRODUCT."MS_PRODUCT_0011.php";  ?>
                </div>
                <div class="col-md-3">
                    <?php include_once DIR_SIDEBAR."MS_SIDEBAR_0009.php";  ?>
                </div>
            </div>
        </div>
    </div>
</div>