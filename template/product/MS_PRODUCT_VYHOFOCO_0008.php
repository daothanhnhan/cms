<?php
    $product_relative = new action_product();
    $list_product_relative = $product_relative->getListProductRelate_byIdCat_hasLimit($productcat_id,8);
?>
<link rel="stylesheet" href="/plugin/owl-carouse/owl.carousel.min.css">
<link rel="stylesheet" href="/plugin/owl-carouse/owl.theme.default.min.css">
<div class="gb-home-product-vyhofoco gb-home-product-vyhofoco-relate">
    <div class="container">
        <div class="titleCategoryProduct_vyhofoco">SẢN PHẨM CÙNG DANH MỤC</div>
        <div class="gb-home-product-vyhofoco-relate-slide owl-carousel owl-theme">
            <?php
                foreach ($list_product_relative as $item) {
                    $rowLang = $product_relative->getProductLangDetail_byId($item['product_id'],$lang);
                    $row1 = $product_relative->getProductDetail_byId($item['product_id'],$lang);
            ?>
                <div class="item">
                    <div class="product_item_vyhofoco">
                        <div class="product_item_img_vyhofoco">
                            <a href="/<?= $rowLang['friendly_url'] ?>">
                            <img src="/images/<?= $row1['product_img'] ?>" title="name" alt="name" class="img-responsive">
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

<script src="/plugin/owl-carouse/owl.carousel.min.js"></script>
<script>
    $(document).ready(function (){
        var owl = $('.gb-home-product-vyhofoco-relate-slide');
        owl.owlCarousel({
            loop:true,
            margin:30,
            navSpeed:500,
            nav:true,
            dots:false,
            autoplay: true,
            rewind: true,
            navText:[],
            // items:4,
            responsiveClass:true,
            responsive:{
                0:{
                    nav:false,
                    items:1
                },
                600:{
                    nav:true,
                    items:1
                },
                1000:{
                    items:4,
                    nav:true
                }
            }
        });
    });
</script>