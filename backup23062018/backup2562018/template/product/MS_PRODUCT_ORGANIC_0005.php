<link rel="stylesheet" href="/plugin/owl-carouse/owl.carousel.min.css">
<link rel="stylesheet" href="/plugin/owl-carouse/owl.theme.default.min.css">


<?php
    $action_relative = new action_product();
    $list_pro_relative = $action_relative->getListProductRelate_byIdCat_hasLimit($row['productcat_id'], 3);
?>
<div class="gb-home-product gb-home-product-relate">
    <div class="container">
        <div class="titleCategoryProduct_sakura">Relate product</div>
        <div class="gb-home-product-relate-slide owl-carousel owl-theme">
            <?php
                foreach ($list_pro_relative as $item) {
                    $rowLang1 = $action_relative->getProductLangDetail_byId($item['product_id'],$lang);
                    $row1 = $action_relative->getProductDetail_byId($item['product_id'],$lang); 
            ?>
                <div class="item">
                    <div class="gb-product_organic-item">
                        <div class="gb-product_organic-item-img">
                            <a href="/<?= $rowLang1['friendly_url'] ?>">
                                <img src="/images/<?= $row1['product_img'] ?>" alt="" class="img-responsive">
                            </a>
                            <!--ADD TO CART-->
                            <?php include DIR_CART."MS_CART_ORGANIC_0001.php";?>
                        </div>
                        <div class="gb-product_organic-item-text">
                            <h2>
                                <a href="/<?= $rowLang1['friendly_url'] ?>">
                                <?= $rowLang1['lang_product_name'] ?></a>
                            </h2>
                            <!--PRICE-->
                            <?php include DIR_PRODUCT."MS_PRODUCT_ORGANIC_0002.php";?>
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
        var owl = $('.gb-home-product-relate-slide');
        owl.owlCarousel({
            loop:true,
            margin:30,
            navSpeed:500,
            nav:true,
            dots:false,
            autoplay: true,
            rewind: true,
            navText:[],
            items:4
        });
    });
</script>