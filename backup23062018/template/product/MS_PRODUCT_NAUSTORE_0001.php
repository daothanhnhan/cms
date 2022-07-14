<link rel="stylesheet" href="/plugin/owl-carouse/owl.carousel.min.css">
<link rel="stylesheet" href="/plugin/owl-carouse/owl.theme.default.min.css">
<?php
    $product = new action_product();
    $list_product_new = $product->getListProductNew_hasLimit(8);
    $list_product_hot = $product->getListProductHot_hasLimit(8);
    $list_product_sales = $product->getListProductSaleOff_hasLimit(8);
?>
<div class="gb-tab-product_naustore">
    <div class="tabbable-panel">
        <div class="tabbable-line">
            <ul class="nav nav-tabs ">
                <li class="active">
                    <a href="#tab_default_1" data-toggle="tab">Sản phẩm nổi bật </a>
                </li>
                <li>
                    <a href="#tab_default_2" data-toggle="tab">Sản phẩm phổ biến </a>
                </li>
                <li>
                    <a href="#tab_default_3" data-toggle="tab">Sản phẩm mới </a>
                </li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane active" id="tab_default_1">
                    <div class="gb-tab-product_naustore-slide owl-carousel owl-theme">
                        <?php
                            foreach ($list_product_hot as $item) {
                                $rowLang1 = $product->getProductLangDetail_byId($item['product_id'],$lang);
                                $row1 = $product->getProductDetail_byId($item['product_id'],$lang); 
                        ?>
                            <div class="item">
                                <div class="gb-product_naustore-item">
                                    <div class="gb-product_naustore-item-img">
                                        <a href="/<?= $rowLang1['friendly_url'] ?>">
                                            <img src="/images/<?= $row1['product_img'] ?>" alt="" class="img-responsive">
                                        </a>
                                        <!--ADD TO CART-->
                                        <?php include DIR_CART."MS_CART_NAUSTORE_0001.php";?>
                                    </div>
                                    <div class="gb-product_naustore-item-text">
                                        <h2><a href="/<?= $rowLang1['friendly_url'] ?>"><?= $rowLang1['lang_product_name'] ?></a></h2>
                                        <!--PRICE-->
                                        <?php include DIR_PRODUCT."MS_PRODUCT_NAUSTORE_0002.php";?>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
                <div class="tab-pane" id="tab_default_2">
                    <div class="gb-tab-product_naustore-slide owl-carousel owl-theme">
                        <?php
                            foreach ($list_product_sales as $item) {
                                $rowLang1 = $product->getProductLangDetail_byId($item['product_id'],$lang);
                                $row1 = $product->getProductDetail_byId($item['product_id'],$lang); 
                        ?>
                            <div class="item">
                                <div class="gb-product_naustore-item">
                                    <div class="gb-product_naustore-item-img">
                                        <a href="/<?= $rowLang1['friendly_url'] ?>">
                                            <img src="/images/<?= $row1['product_img'] ?>" alt="" class="img-responsive">
                                        </a>
                                        <!--ADD TO CART-->
                                        <?php include DIR_CART."MS_CART_NAUSTORE_0001.php";?>
                                    </div>
                                    <div class="gb-product_naustore-item-text">
                                        <h2><a href="/<?= $rowLang1['friendly_url'] ?>"><?= $rowLang1['lang_product_name'] ?></a></h2>
                                        <!--PRICE-->
                                        <?php include DIR_PRODUCT."MS_PRODUCT_NAUSTORE_0002.php";?>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
                <div class="tab-pane" id="tab_default_3">
                    <div class="gb-tab-product_naustore-slide owl-carousel owl-theme">
                        <?php
                            foreach ($list_product_hot as $item) {
                                $rowLang1 = $product->getProductLangDetail_byId($item['product_id'],$lang);
                                $row1 = $product->getProductDetail_byId($item['product_id'],$lang); 
                        ?>
                            <div class="item">
                                <div class="gb-product_naustore-item">
                                    <div class="gb-product_naustore-item-img">
                                        <a href="/<?= $rowLang1['friendly_url'] ?>">
                                            <img src="/images/<?= $row1['product_img'] ?>" alt="" class="img-responsive">
                                        </a>
                                        <!--ADD TO CART-->
                                        <?php include DIR_CART."MS_CART_NAUSTORE_0001.php";?>
                                    </div>
                                    <div class="gb-product_naustore-item-text">
                                        <h2><a href="/<?= $rowLang1['friendly_url'] ?>"><?= $rowLang1['lang_product_name'] ?></a></h2>
                                        <!--PRICE-->
                                        <?php include DIR_PRODUCT."MS_PRODUCT_NAUSTORE_0002.php";?>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="/plugin/owl-carouse/owl.carousel.min.js"></script>
<script>
    $(document).ready(function (){
        $('.gb-tab-product_naustore-slide').owlCarousel({
            loop:true,
            margin:30,
            navSpeed:1000,
            nav:true,
            dots: false,
            autoplay: true,
            rewind: true,
            navText:[],
            responsive:{
                0:{
                    items:1
                },
                600:{
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