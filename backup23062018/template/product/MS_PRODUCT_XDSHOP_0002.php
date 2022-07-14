<?php
    $product = new action_product();
    $list_product_hot = $product->getListProductHot_hasLimit(8);
    
?>
<div class="gb-sanphamvuanhap_xdshop">
    <div class="titleCategoryProduct_xdshop">Sản phẩm vừa nhập</div>

    <div class="row">
        <?php
            foreach ($list_product_hot as $item) {
                $rowLang = $product->getProductLangDetail_byId($item['product_id'],$lang);
                $row1 = $product->getProductDetail_byId($item['product_id'],$lang);
        ?>
            <div class="col-md-3  col-sm-6">
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
    <div class="more_CategoryProduct_Home_1_xdshop">
        <a href="/san-pham">Xem Tất Cả</a>
    </div>
</div>
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