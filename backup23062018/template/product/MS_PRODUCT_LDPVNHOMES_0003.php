<?php include DIR_BREADCRUMBS."MS_BREADCRUMS_LDPVNHOMES_0001.php";?>
<!-- Dự án theo Danh mục -->
<?php 
    $action = new action();
    $action_product = new action_product();                                                                                
    if (isset($_GET['slug']) && $_GET['slug'] != '') {
        $slug = $_GET['slug'];
        $rowCatLang = $action_product->getProductCatLangDetail_byUrl($slug,$lang);
        $rowCat = $action_product->getProductCatDetail_byId($rowCatLang[$nameColIdProductCat_productCatLanguage],$lang);
        $rows = $action_product->getProductList_byMultiLevel_orderProductId($rowCat[$nameColId_productCat],'desc',$trang,9,$slug);
    }else{
        $rows = $action->getList($nameTable_product,'','',$nameColId_product,'desc',$trang,9,'san-pham');
        
    }
    $_SESSION['sidebar'] = 'productCat';
?>  
<input type="hidden" name="lang_current" id="lang_current" value="<?php echo $lang;?>">
<input type="hidden" name="url_lang" value="<?php echo $url_lang;?>" id="url_lang">
<?php 
    $action_lang = new action_lang();
    $url_lang = $action_lang->get_url_lang_productcat($slug, $lang);
?>

<div class="gb-page-product_ladpvinhomes">
    <div class="container">
        <div class="col-md-8">
            <div class="gb-page-product_ladpvinhomes-left">
                <?php 
                    $d = 0;
                    foreach ($rows['data'] as $row) {
                        $d++;
                        $action_product1 = new action_product(); 
                        $rowLang1 = $action_product1->getProductLangDetail_byId($row['product_id'],$lang);
                        $row1 = $action_product1->getProductDetail_byId($row['product_id'],$lang); 
                ?>
                    <div class="gb-bietthuvinpearl_ldpvnpearl-left-item">
                        <div class="gb-bietthuvinpearl_ldpvnpearl-left-item-img">
                            <a href="/<?= $rowLang1['friendly_url'] ?>">
                                <img src="/images/<?= $row1['product_img'] ?>" alt="" class="img-responsive">
                            </a>
                        </div>
                        <div class="gb-bietthuvinpearl_ldpvnpearl-left-item-info">
                            <h2><a href="/<?= $rowLang1['friendly_url'] ?>"><?= $rowLang1['lang_product_name'] ?></a></h2>
                            <ul>
                                <li>Diện tích: <?= $row1['product_price'] ?> m2</li>
                                <li><?php include DIR_PRODUCT."MS_PRODUCT_LDPVNHOMES_0002.php";?></li>
                                <li>Địa chỉ: <?= $row1['product_code'] ?></li>
                            </ul>
                            <a href="/<?= $rowLang1['friendly_url'] ?>" class="btn-xemchitiet">Chi tiết</a>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
        <div class="col-md-4">
            <div class="gb-page-product_ladpvinhomes-right">
                <?php include DIR_SIDEBAR."MS_SIDEBAR_VNHOMES_0001.php";?>
                <?php include DIR_SIDEBAR."MS_SIDEBAR_LDPVNHOMES_0002.php";?>
                <?php include DIR_SIDEBAR."MS_SIDEBAR_LDPVNHOMES_0003.php";?>
                <?php include DIR_BANNER."MS_BANNER_LDPVNHOMES_0003.php";?>
            </div>
        </div>
    </div>
</div>