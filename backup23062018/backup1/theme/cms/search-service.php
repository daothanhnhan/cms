<?php 
	$limit = 12;

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
		$sql = "SELECT * FROM service_languages INNER JOIN service ON service_languages.service_id = service.service_id WHERE service_languages.friendly_url like '%$q%' And service_languages.languages_code = '$lang'";
		$result = mysqli_query($conn_vn, $sql);
		$count = mysqli_num_rows($result);

		$sql = "SELECT * FROM service_languages INNER JOIN service ON service_languages.service_id = service.service_id WHERE service_languages.friendly_url like '%$q%' And service_languages.languages_code = '$lang' LIMIT $start,$limit";
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
<?php include_once DIR_BREADCRUMS.'MS_BREADCRUM_0001.php';?>
<div class="gb-dichvu-cms-body-cms">
    <div class="container">
		<div class="row">
            <div class="col-md-9">
                <?php $dem = 0; 
                foreach ($rows['data'] as $row) {
                    $dem++;
                    $action_service1 = new action_service(); 
                    $rowLang1 = $action_service1->getServiceLangDetail_byId($row['service_id'],$lang);
                    $row1 = $action_service1->getServiceDetail_byId($row['service_id'],$lang);
                ?>
                <div class="col-md-4">
                    <div class="gb-dichvu-cms-item-cms">
                        <div class="item-img-cms">
                            <a href="/<?= $rowLang1['friendly_url'] ?>"><img src="/images/<?= $row1['service_img'] ?>" alt="<?= $rowLang1['lang_service_name'] ?>" class="img-responsive"></a>
                        </div>
                        <div class="item-content">
                            <h2><a href="/<?= $rowLang1['friendly_url'] ?>"><?= $rowLang1['lang_service_name'] ?></a></h2>
                            <div class="gb-divider"></div>
                            <p><?= $rowLang1['lang_service_des'] ?></p>
                        </div>
                    </div>
                </div>
                <?php 
                    if ($dem%3 == 0) {
                        echo '<hr style="width:100%;" />';
                    }
                } 
                ?>
            </div>
            <div class="col-md-3">
                <?php include_once DIR_SIDEBAR."MS_SIDEBAR_0010.php";  ?>
            </div>
        </div>
        <div>
        	<?php 
                    $config = array(
                        'current_page'  => $trang+1, // Trang hi???n t???i
                        'total_record'  => $rows['count'], // T???ng s??? record
                        'total_page'    => 1, // T???ng s??? trang
                        'limit'         => $limit,// limit
                        'start'         => 0, // start
                        'link_full'     => '',// Link full c?? d???ng nh?? sau: domain/com/page/{page}
                        'link_first'    => '',// Link trang ?????u ti??n
                        'range'         => 9, // S??? button trang b???n mu???n hi???n th??? 
                        'min'           => 0, // Tham s??? min
                        'max'           => 0,  // tham s??? max, min v?? max l?? 2 tham s??? private
                        'search'        => str_replace(' ', '-', $rows['q'])

                    );

                    $pagination = new Pagination;
                    $pagination->init($config);
                    echo $pagination->htmlPaging3();
                ?>
        </div>
    </div>
</div>
