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
<div class="gb-page-product_vyhofoco">
    <div class="container">
        <div class="row">
            <div class="col-md-9 col-md-push-3">
                <div class="row">
                    <?php 
                        $d = 0;
                        foreach ($rows['data'] as $row) {
                            $d++;
                            $action_product1 = new action_product(); 
                            $rowLang = $action_product1->getProductLangDetail_byId($row['product_id'],$lang);
                            $row1 = $action_product1->getProductDetail_byId($row['product_id'],$lang); 
                    ?>
                        <div class="col-md-4 col-sm-6">
                            <div class="product_item_vyhofoco">
                                <div class="product_item_img_vyhofoco">
                                    <a href="/<?= $rowLang['friendly_url'] ?>">
                                        <img src="/images/<?= $row1['product_img'] ?>" alt="" class="img-responsive">
                                    </a>
                                </div>
                                <div class="product_item_text_vyhofoco">
                                    <h2><a href="/<?= $rowLang['friendly_url'] ?>"><?= $rowLang['lang_product_name'] ?></a></h2>
                                    <div class="product_item_price_chitiet_vyhofoco">
                                        <!--PRICES-->
                                        <?php include DIR_PRODUCT."MS_PRODUCT_VYHOFOCO_0003.php";?>
                                        <a href="/<?= $rowLang['friendly_url'] ?>" class="btn-productxemchitiet_vyhofoco">Chi tiết</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
                <?php include DIR_PAGINATION."MS_PAGINATION_VYHOFOCO_0001.php";?>
            </div>
            <div class="col-md-3 col-md-pull-9">
                <?php include DIR_SIDEBAR."MS_SIDEBAR_VYHOFOCO_0002.php";?>
                <?php include DIR_SIDEBAR."MS_SIDEBAR_VYHOFOCO_0003.php";?>
                <?php include DIR_SIDEBAR."MS_SIDEBAR_VYHOFOCO_0011.php";?>
                <?php include DIR_SIDEBAR."MS_SIDEBAR_VYHOFOCO_0005.php";?>
            </div>
        </div>
    </div>
</div>
