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
<div class="gb-tintuc-table_bdshn">
    <table class="table">
        <thead>
        <tr>
            <th class="col-1">Mã số</th>
            <th class="col-2">Ngày đăng</th>
            <th class="col-3">Tiêu đề</th>
            <th class="col-4">Tỉnh/Huyện</th>
            <th class="col-5">Loại tin</th>
        </tr>
        </thead>
        <?php
            foreach ($rows['data'] as $row) {
                $d++;
                $action_product1 = new action_product(); 
                $rowLang1 = $action_product1->getProductLangDetail_byId($row['product_id'],$lang);
                $row1 = $action_product1->getProductDetail_byId($row['product_id'],$lang); 
        ?>
            <tr>
                <td class="col-1"><?= $row1['product_price_sale'] ?></td>
                <td class="col-2">
                    <p>
                        <?= date('d-m-Y', strtotime($row1['product_created_date']))  ?>
                        <a href="/<?= $rowLang1['friendly_url'] ?>">
                            <img class="img_1 img-responsive" src="/images/<?= $row1['product_img'] ?>">
                        </a>
                    </p>
                </td>
                <td class="col-3">
                    <a href="/<?= $rowLang1['friendly_url'] ?>">
                        <?= $rowLang1['lang_product_name'] ?>
                        <img src="/images/vip.gif" alt="">
                    </a>
                </td>
                <td class="col-4">
                    <?= $row1['product_material'] ?>
                </td>
                <td class="col-5">
                    <?= $row1['product_expiration'] ?>
                </td>
            </tr>
        <?php } ?>
    </table>
</div>