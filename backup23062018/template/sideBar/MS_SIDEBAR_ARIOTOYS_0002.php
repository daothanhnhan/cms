<link rel="stylesheet" href="/plugin/owl-carouse/owl.carousel.min.css">
<link rel="stylesheet" href="/plugin/owl-carouse/owl.theme.default.min.css">
<?php
    $pro_sale = new action_product();
    $list_pro_sale = $pro_sale->getListProductSaleOff_hasLimit(4);
?>
<div class="side_bar_ariotoys">
    <div class="feature_product">
        <div class="list_product_slide list_product owl-carousel owl-theme">
            <?php
                foreach($list_pro_sale as $row){
                    $rowLang1 = $pro_sale->getProductLangDetail_byId($row['product_id'], $lang);
                    $row1 = $pro_sale->getProductDetail_byId($row['product_id'], $lang);
            ?>
            <div class="item">
                <div class="item_product_ariotoys">
                    <div class="cover_item_product_ariotoys">
                        <div class="box_image_product_ariotoys">
                            <a href="/<?= $rowLang1['friendly_url'] ?>">
                                <img src="/images/<?= $row1['product_img'] ?>" alt="">
                            </a>
                            <div class="box_action_ariotoys">
                                <a href="#" class="add_favorite_ariotoys" title="Thêm yêu thích"><i class="fa fa-heart" aria-hidden="true"></i> </a>
                                <a href="#" class="add_compare_ariotoys" title="Thêm so sánh"><i class="fa fa-refresh" aria-hidden="true"></i> </a>
                                <!-- <a href="#" class="add_cart" title="Thêm giỏ hàng"><i class="fa fa-shopping-bag" aria-hidden="true"></i> </a> -->
                                <?php include DIR_CART."MS_CART_ARIOTOYS_0007.php";?>
                            </div>
                        </div>
                        <div class="box_caption_product_ariotoys">
                            <h3 class=""><a href="<?= $item_pro_sale['friendly_url'];?>" class=""><?= $rowLang1['lang_product_name'] ?></a></h3>
                            <!-- <div class="box_price_product_ariotoys">
                                <span class="current_price"><?= $item_pro_sale['product_price']; ?> VNĐ</span>
                                <span class="old_price"><?= $item_pro_sale['product_price_sale']; ?> VNĐ</span>
                            </div> -->
                            <?php include DIR_CART."MS_CART_ARIOTOYS_0004.php";?>
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
    $(document).ready(function () {
        $('.list_product_slide').owlCarousel({
            loop:true,
            responsiveClass:true,
            nav:false,
            navText:[],
            dots:true,
            responsive:{
                0:{
                    items:1
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
           // document.getElementById("demo").innerHTML = this.responseText;
           // alert(this.responseText);
           // alert('thanh cong.');
           // window.location.href = "/gio-hang";
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