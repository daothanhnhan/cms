<?php
echo '<a href="/template/' . $_GET['trang'] . '/' . $_GET['search'] . '.php' . '" download>download</a>';
$path = dirname(__FILE__) . '/../../template/' . $_GET['trang'] . '/' . $_GET['search'] . '.php';
// $path = "http://cms.webmienphi.org.vn/ajax/filter_price.php";
$data = htmlentities(file_get_contents($path));
echo '<pre style="min-height:400px;"><code>';
echo $data;
echo '</code></pre>';
if ($_GET['trang']=='menu') {
	echo '<style>
		.uni-main-menu-cms { 
			float: none;
		}	
		</style>';
}
if ($_GET['trang']=='news') {
	$action_news = new action_news();
	$row['newscat_id'] = 58;
	$rows['data'] = array(['news_id' => 25],['news_id' => 26]);
	$rows['count'] = 10;
	$limit = 2;
}
if ($_GET['search']=='MS_NEWS_0005') {
	$rowLang['lang_news_name'] = 'ten tin tuc.';
	$row['news_img'] = 'n3.jpg';
	$rowLang['lang_news_content'] = 'fdsafsdf';
}
if ($_GET['trang']=='others') {
	$_GET['slug'] = 'gioi-thieu-vn';
}
if ($_GET['trang']=='page') {
	$_GET['slug'] = 'gioi-thieu-vn';
}
if ($_GET['trang']=='pagination') {
	$rows['paging'] = '<ul class="pagination"><li><span>1</span></li><li><a href="/danh-muc-san-pham-2/2">2</a></li><li><a href="/danh-muc-san-pham-2/2">Next</a></li><li><a href="/danh-muc-san-pham-2/2">Last</a></li></ul>';
}
if ($_GET['trang']=='product') {
	$action_product = new action_product();	
}
if ($_GET['search']=='MS_PRODUCT_0008') {
	$tong_rating4['tong'] = 3;
}
if ($_GET['search']=='MS_PRODUCT_0009') {
	$row1['product_price_sale'] = 1;
}
if ($_GET['search']=='MS_SERVICE_0003') {
	$rowLang['lang_service_name'] = 'ten dich vu.';
	$row['service_img'] = 'sv4.jpg';
	$rowLang['lang_service_content'] = 'dde mo ta or day.';
}
if ($_GET['search']=='MS_SIDEBAR_0008') {
	$action_product = new action_product();
}
if ($_GET['search']=='MS_VIDEO_0002') {
	$_GET['slug'] = 'phuong-thuc-thanh-toan';
}

include $path;
?>