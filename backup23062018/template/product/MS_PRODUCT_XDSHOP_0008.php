<?php
    $product_relative = new action_product();
    $list_product_relative = $product_relative->getListProductRelate_byIdCat_hasLimit($productcat_id,8);
?>
<link rel="stylesheet" href="/plugin/owl-carouse/owl.carousel.min.css">
<link rel="stylesheet" href="/plugin/owl-carouse/owl.theme.default.min.css">
<div class="gb-home-product gb-home-product-relate">
    <div class="container">
        <div class="titleCategoryProduct_xdshop">SẢN PHẨM LIÊN QUAN</div>
        <div class="gb-home-product-relate-slide owl-carousel owl-theme">
            <?php
                foreach ($list_product_relative as $item) {
                    $rowLang = $product_relative->getProductLangDetail_byId($item['product_id'],$lang);
                    $row1 = $product_relative->getProductDetail_byId($item['product_id'],$lang);
            ?>
                <div class="item">
                    <div class="gb-sanphamvuanhap_xdshop_item">
                        <a href="/<?= $rowLang['friendly_url'] ?>" class="img_CategoryProduct_Home_1_xdshop">
                            <img src="/images/<?= $row1['product_img'] ?>" title="name" alt="name" class="img-responsive">
                        </a>
                        <!--SALE-->
                        <?php include DIR_PRODUCT."MS_PRODUCT_XDSHOP_0005.php";?>
                        <!--PRICE-->
                        <?php include DIR_PRODUCT."MS_PRODUCT_XDSHOP_0004.php";?>
                        <a href="/<?= $rowLang['friendly_url'] ?>" class="name_CategoryProduct_Home_1_xdshop" title="name">
                            <?= $rowLang['lang_product_name'] ?>
                        </a>
                        <div class="des_CategoryProduct_Home_1_xdshop">
                            <?= $rowLang['lang_product_des'] ?>
                        </div>
                        <!--add to cart-->
                        <?php include DIR_CART."MS_CART_XDSHOP_0001.php";?>
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
<script type="text/javascript">
    function load_url (id, name, price) {
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
          if (this.readyState == 4 && this.status == 200) {
           if (confirm('Thêm sản phẩm thành công, bạn có muốn thanh toán luôn không')) {
              window.location = '/cart';
          }else{
              location.reload();
          }  
          }
        };
        xhttp.open("POST", "/functions/ajax-add-cart.php", true);
        xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhttp.send("product_id="+id+"&product_name="+name+"&product_price="+price+"&product_quantity=1&action=add");
        xhttp.send();        
    }
</script>