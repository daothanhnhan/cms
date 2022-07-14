<?php
echo '<a href="/theme/cms/' . $_GET['trang'] . '.php' . '" download>download</a>';
$path = dirname(__FILE__) . '/' . $_GET['trang'] . '.php';
// $path = "http://cms.webmienphi.org.vn/ajax/filter_price.php";
$data = htmlentities(file_get_contents($path));
echo '<pre style="min-height:400px;"><code>';
echo $data;
echo '</code></pre>';
?>