<?php 
	$limit = 6;

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
		$sql = "SELECT * FROM news_languages INNER JOIN news ON news_languages.news_id = news.news_id WHERE news_languages.friendly_url like '%$q%' And news_languages.languages_code = '$lang'";
		$result = mysqli_query($conn_vn, $sql);
		$count = mysqli_num_rows($result);

		$sql = "SELECT * FROM news_languages INNER JOIN news ON news_languages.news_id = news.news_id WHERE news_languages.friendly_url like '%$q%' And news_languages.languages_code = '$lang' LIMIT $start,$limit";
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
	$rows = search($lang, $trang, $limit);//var_dump($rows['data']);die;
?>
<div class="gb-tintuc-sukien-cms">
    
    <?php include_once DIR_BREADCRUMS.'MS_BREADCRUM_0001.php';?>

    <div class="gb-tintuc-sukien-cms-body">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <?php include_once DIR_NEWS.'MS_NEWS_0007.php'; ?>
                </div>
                <div class="col-md-4">
                    <?php include_once DIR_SIDEBAR.'MS_SIDEBAR_0001.php';?>
                    <?php include_once DIR_SIDEBAR.'MS_SIDEBAR_0002.php';?>
                    <?php include_once DIR_SIDEBAR.'MS_SIDEBAR_0003.php';?>
                    <?php //include_once DIR_SIDEBAR.'MS_SIDEBAR_0004.php';?>
                    <?php //include_once DIR_SIDEBAR.'MS_SIDEBAR_0005.php';?>
                    <?php //include_once DIR_SIDEBAR.'MS_SIDEBAR_0006.php';?>                  
                </div>
            </div>
        </div>
    </div>
</div>