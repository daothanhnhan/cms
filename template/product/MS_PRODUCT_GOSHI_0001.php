<?php
    $product = new action_product();
    $list_product_new = $product->getListProductNew_hasLimit(8);
?>
<link rel="stylesheet" href="/plugin/owl-carouse/owl.carousel.min.css">
<link rel="stylesheet" href="/plugin/owl-carouse/owl.theme.default.min.css">
<div class="gb-product-home_goshi">
    <div class="container">
        <div class="product-home-title_goshi">
            <h2>Sản phẩm mới nhất</h2>
            <a href="/san-pham">Xem thêm</a>
        </div>
        <div class="owl-carousel-four-item owl-carousel owl-theme">
            <?php
                foreach ($list_product_new as $item) {
                    $rowLang1 = $product->getProductLangDetail_byId($item['product_id'],$lang);
                    $row1 = $product->getProductDetail_byId($item['product_id'],$lang);
            ?>
                <div class="item">
                    <div class="product-item_goshi">
                        <div class="product-item-img_goshi">
                            <a href="/<?= $rowLang1['friendly_url'] ?>" class="img-product_goshi">
                                <img src="/images/<?= $row1['product_img'] ?>" alt="" class="img-responsive">
                            </a>
                            <!--Compare-->
                            <?php include DIR_CART."MS_CART_GOSHI_0002.php";?>
                            <!--whislist-->
                            <?php include DIR_CART."MS_CART_GOSHI_0003.php";?>
                            <!--Add to cart-->
                            <?php include DIR_CART."MS_CART_GOSHI_0004.php";?>
                        </div>
                        <div class="box_info_product_goshi">
                            <h3>
                                <a class="link_name_product_goshi" href="/<?= $rowLang1['friendly_url'] ?>">
                                    <?= $rowLang1['lang_product_name'] ?>
                                </a>
                            </h3>
                            <!--PRICE-->
                            <?php include DIR_PRODUCT."MS_PRODUCT_GOSHI_0002.php";?>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</div>

<script src="/plugin/owl-carouse/owl.carousel.min.js"></script>
<script>
    $(document).ready(function () {
        $('.owl-carousel-four-item').owlCarousel({
            loop:true,
            margin:30,
            nav:false,
            navText:[],
            dots:false,
            autoplay:false,
            responsive:{
                0:{
                    items:1
                },

                768:{
                    items:3
                },
                992:{
                    items:4
                }
            }
        });
    });
</script>
<script type="text/javascript">
    function load_url (id, name, price) {
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
          if (this.readyState == 4 && this.status == 200) {
           if (confirm('Thêm sản phẩm thành công, bạn có muốn thanh toán luôn không')) {
              window.location = '/gio-hang';
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