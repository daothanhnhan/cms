<?php 
	// $path = dirname(__FILE__) . '/../../template/' . $_GET['trang'];
	// $files = array_diff(scandir($path), array('.', '..'));
	// $loc = $_GET['search'];//echo $loc;
	// $arr = array();
	// foreach ($files as $item) {
	// 	if (strpos($item, $loc)) {
	// 		$arr[] = $item;
	// 	}
	// }
	// // echo '<pre>';
	// // var_dump($arr);die;
	// if (isset($_GET['search']) && $_GET['search'] != '') {
	// 	$files = $arr;
	// }
	
	// // var_dump($files);die;
?>
<?php 
	$path = dirname(__FILE__) . '/../../template/' . $_GET['trang'];
	$files = array_diff(scandir($path), array('.', '..'));
	$limit = 5;
	if (isset($_GET['search'])) {
		$trang = $_GET['search'];//echo $loc;
	} else {
		$trang = 1;
	}

	if (isset($_GET['phan'])) {
		$phan = $_GET['phan'];
	} else {
		$phan = '';
	}
	
	$arr = array();
	foreach ($files as $item) {
		if ($phan=='') {
			$arr[] = $item;
		} else {
			if (strpos($item, $phan)) {
				$arr[] = $item;
			}
		}		
	}

	$count = count($arr);
	$list = array();
	$start = ($trang - 1) * $limit;
	$end = $start + $limit;
	if ($end > $count) {
		$end = $count;
	}
	for ($i=$start; $i < $end; $i++) { 
		$list[] = $arr[$i];
	}
	// var_dump($arr);die;
?>
<style type="text/css">
    .list-group-cms .breadcrum-title{
    	margin: 30px 0;
    	border-bottom: 1px solid #ccc;
    }
	.list-group-cms .breadcrum-title li{
		display: inline-block;
		border-right: 1px solid #fff;
	}
	.list-group-cms .breadcrum-title li:last-child{
		border-right: none;
		text-transform: capitalize;
	}
	.list-group-cms .breadcrum-title ul{
	    background: #fcae1d;
	    display: inline-block;
	    min-width: 360px;
	    position: relative;
	    border-left: 4px solid #fff;
	}
	.list-group-cms .breadcrum-title ul:after{
		content: '';
		width: 44px;
		height: 44px;
	    background: #fcae1d;
	    position: absolute;
	    transform: skew(45deg);
	        right: -23px;
        top: 0;
	}
	.list-group-cms .breadcrum-title li a{
		display: inline-block;
		padding: 15px;
		font-size: 14px;
		color: #fff;
		font-weight: 600;
	}
	.breadcrum-title-background {
		background-color: #0c4384;
	}
	body{
		background: #f1f1f1; 
	}
</style>
<div class="list-group-cms">
	<?php foreach ($list as $item) { ?>
	<div class="breadcrum-title-background">
		<div class="container">
		 <!-- class="list-group-cms-item" -->
		 <div class="breadcrum-title">
		 	<ul>
				<li><a href="/show-code/<?= $_GET['trang'] ?>/<?= substr($item, 0, -4) ?>"><?= $item ?></a></li>
				<li><?php echo '<a href="/template/' . $_GET['trang'] . '/' . $item . '" download>download</a>'; ?></li>
			</ul> 	
		 </div>
	</div>
	</div>
	
	<iframe src="/show-code1/<?= $_GET['trang'] ?>/<?= substr($item, 0, -4) ?>" frameborder="0" scrolling="no" onload="resizeIframe(this)" style="width: 100%; margin: 20px 0; background-clip: content-box;box-shadow: inset 0 0 0 20px white;"></iframe>
	<?php } ?>
</div>
<?php 
                    $config = array(
                        'current_page'  => $trang, // Trang hi???n t???i
                        'total_record'  => $count, // T???ng s??? record
                        'total_page'    => 1, // T???ng s??? trang
                        'limit'         => $limit,// limit
                        'start'         => 0, // start
                        'link_full'     => '',// Link full c?? d???ng nh?? sau: domain/com/page/{page}
                        'link_first'    => '',// Link trang ?????u ti??n
                        'range'         => 9, // S??? button trang b???n mu???n hi???n th??? 
                        'min'           => 0, // Tham s??? min
                        'max'           => 0,  // tham s??? max, min v?? max l?? 2 tham s??? private
                        'search'        => $phan

                    );

                    $pagination = new Pagination;
                    $pagination->init($config);
                    $link = $_GET['trang'];
                    echo $pagination->htmlPaging_cms($link);
                ?>
<script>
  function resizeIframe(obj) {
  	var height = obj.contentWindow.document.body.scrollHeight;
  	if (height < 100) {
  		// height = 10;
  		sleep(1000);
  	}
    obj.style.height = height + 'px';
  }
</script>