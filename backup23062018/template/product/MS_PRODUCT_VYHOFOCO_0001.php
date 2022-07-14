<!-- SẢN PHẨM NỔI BẬT -->
<?php
    $product = new action_product();
    $list_product_hot = $product->getListProductHot_hasLimit(3);
?>
<div class="gb-mathanguachuong_vyhofoco">
    <div class="container">
        <div class="titleCategoryProduct_vyhofoco">
            <h4>Sản phẩm <span>Nổi bật</span></h4>
            <p>Danh sách sản phẩm được nhiều khách hàng lựa chọn</p>
            <a href="/san-pham" class="btn-xemchitiet_vyhofoco">Xem tất cả</a>
        </div>

        <div class="categoryProduct_vyhofoco">
            <div class="row">
                <?php
                    foreach ($list_product_hot as $item) {
                    $rowLang = $product->getProductLangDetail_byId($item['product_id'],$lang);
                    $row1 = $product->getProductDetail_byId($item['product_id'],$lang);
                ?>
                    <div class="col-md-4 col-sm-4">
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
        </div>
    </div>
</div>