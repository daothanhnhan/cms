<?php 
	$action_service = new action_service(); 
    $slug = isset($_GET['slug']) ? $_GET['slug'] : '';

    $rowLang = $action_service->getServiceLangDetail_byUrl($slug,$lang);
    $row = $action_service->getServiceDetail_byId($rowLang['service_id'],$lang);
    $_SESSION['sidebar'] = 'serviceDetail';
    $service_breadcrumb = $action_service->getServiceCatLangDetail_byId($row['servicecat_id'], $lang);
    $breadcrumb_url = $service_breadcrumb['friendly_url'];
    $breadcrumb_name = $service_breadcrumb['lang_servicecat_name'];
    $use_breadcrumb = true;
?>
<div class="gb-chitiet_dichvu-cms">

    <?php include_once DIR_BREADCRUMS.'MS_BREADCRUM_0005.php';?>


    <div class="gb-chitiet_dichvu-cms-body">
        <!--GIỚI THIỆU DỊCH VỤ-->

        <?php include_once DIR_SERVICE."MS_SERVICE_0003.php";?>        

        <!--SẢN PHẨM TIÊU BIỂU-->
        <?php //include_once DIR_PRODUCT."MS_PRODUCT_0001.php";  ?>
    </div>
</div>