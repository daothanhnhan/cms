<?php 
    $action_product = new action_product(); 
    $slug = isset($_GET['slug']) ? $_GET['slug'] : '';

    $rowLang = $action_product->getProductLangDetail_byUrl($slug,$lang);
    $row = $action_product->getProductDetail_byId($rowLang[$nameColIdProduct_productLanguage],$lang);
    $_SESSION['productcat_id_relate'] = $row[$nameColIdProductCat_product];
    $_SESSION['sidebar'] = 'productDetail';
    $arr_id = $row['productcat_ar'];
    $arr_id = explode(',', $arr_id);
    $productcat_id = (int)$arr_id[0];
    $product_breadcrumb = $action_product->getProductCatLangDetail_byId($productcat_id, $lang);
    $breadcrumb_url = $product_breadcrumb['friendly_url'];
    $breadcrumb_name = $product_breadcrumb['lang_productcat_name'];
    $use_breadcrumb = true;

    $img_sub = json_decode($row['product_sub_img']);
?>
<?php 
    $action_lang = new action_lang();
    $url_lang = $action_lang->get_url_lang_productDetail($slug, $lang);
?>
<div class="gb-chitietduan-body_bdshn">
    <div class="sanpham-title_bdshn">
        <h2><?= $rowLang['lang_product_name'] ?></h2>
    </div>
    <div class="row">
        <div class="col-md-6 col-sm-6">
            <div class="gb-sanpham-cate-left_bdshn">
                <div class="gb-sanpham-cate-left_bdshn-img">
                    <img id="expandedImg" src="/images/<?= $row['product_img'] ?>" alt="" class="img-responsive">
                </div>
                <div id="imgtext"></div>
                <div class="gb-sanpham-cate-left_bdshn-text">
                    <ul>
                        <li><span>Tên dự án: </span> <?= $rowLang['lang_product_name'] ?></li>
                        <li> <span>Mã:</span> <?= $row['product_price_sale'] ?></li>
                        <li> <span>Diện tích: </span> <?= $row['product_code'] ?></li>
                        <li> <span>Tỉnh/Huyện: </span> <?= $row['product_shape'] ?> </li>
                        <li> <span>Đơn giá (/m2):</span> <?= $row['product_price'] ?></li>
                        <li> <span>Loại tin: </span> <?= $row['product_expiration'] ?></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-6  col-sm-6 gb-sanpham-cate-right_bdshn">
            <div class="">
                <div class="row">
                    <?php 
                        $d = 0;
                        foreach ($img_sub as $item) {
                            $d++;
                            $image = json_decode($item, true);
                    ?>
                        <div class="col-md-4 col-sm-4 col-xs-6">
                            <div class="item">
                                <img src="/images/<?= $image['image'] ?>" alt="" class="img-responsive" onclick="myFunction(this);">
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="box_des_bdshn">
                <div class=" title_des_bdshn">Mô tả sản phẩm</div>
                <div class="content_des_bdshn">
                    <?= $rowLang['lang_product_des'] ?>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function myFunction(imgs) {
        var expandImg = document.getElementById("expandedImg");
        var imgText = document.getElementById("imgtext");
        expandImg.src = imgs.src;
        imgText.innerHTML = imgs.alt;
        expandImg.parentElement.style.display = "block";
    }
</script>