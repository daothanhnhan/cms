<link rel="stylesheet" href="/plugin/owl-carouse/owl.carousel.min.css">
<link rel="stylesheet" href="/plugin/owl-carouse/owl.theme.default.min.css">
<div class="gb-new-product_organic">
    <div class="container">
        <div class="gb-product_organic-title">
            SẢN PHẨM MỚI
        </div>
        <div class="gb-new-product_organic-slide owl-carousel owl-theme">
            <?php
                $product = new action_product();
                $list_product_new = $product->getListProductNew_hasLimit(6);
                foreach ($list_product_new as $item) {
                    $rowLang1 = $product->getProductLangDetail_byId($item['product_id'],$lang);
                    $row1 = $product->getProductDetail_byId($item['product_id'],$lang); 
            ?>
                <div class="item">
                    <div class="gb-product_organic-item">
                        <div class="gb-product_organic-item-img">
                            <a href="/<?= $rowLang1['friendly_url'] ?>"><img src="/images/<?= $row1['product_img'] ?>" alt="" class="img-responsive"></a>
                            <!--ADD TO CART-->
                            <?php include DIR_CART."MS_CART_ORGANIC_0001.php";?>
                        </div>
                        <div class="gb-product_organic-item-text">
                            <h2><a href="/<?= $rowLang1['friendly_url'] ?>"><?= $rowLang1['lang_product_name'] ?></a></h2>
                            <!--PRICE-->
                            <?php include DIR_PRODUCT."MS_PRODUCT_ORGANIC_0002.php";?>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
        <div class="gb-divider"></div>
    </div>
</div>
<script src="/plugin/owl-carouse/owl.carousel.min.js"></script>
<script>
    $(document).ready(function (){
        $('.gb-new-product_organic-slide').owlCarousel({
            loop:true,
            margin:10,
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
                },
                1199:{
                    items:5
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