<?php
    $product_type = new action_product();
    $product_hot = $product_type->getListProductHot_hasLimit(12);
    $product_promotions = $product_type->getListProductSaleOff_hasLimit(12);
    $product_new = $product_type->getListProductNew_hasLimit(12);
?>
<div class="box_list_pro_ariotoysduct_ariotoys">
    <div class="cover_list_product_ariotoys">
        <h2 class="header_list_product">
            <span>Sản phẩm khuyến mãi</span>
            <a href="/tat-ca-san-pham">Xem tất cả</a>
        </h2>
        <div class="row pro-home_ariotoys">
            <?php 
                foreach ($product_promotions as $row) {
                    $rowLang1 = $product_type->getProductLangDetail_byId($row['product_id'], $lang);
                    $row1 = $product_type->getProductDetail_byId($row['product_id'], $lang);
            ?>
            <div class="col-md-3">
                <div class="item_product_ariotoys">
                    <div class="cover_item_product_ariotoys">
                        <div class="box_image_product_ariotoys">
                            <a href="/<?= $rowLang1['friendly_url'] ?>">
                                <img src="/images/<?= $row1['product_img'] ?>" alt="<?= $rowLang1['lang_product_name'] ?>"/>
                            </a>
                            <div class="box_action_ariotoys">
                                <?php include DIR_CART."MS_CART_ARIOTOYS_0005.php";?>
                                <?php include DIR_CART."MS_CART_ARIOTOYS_0006.php";?>
                                <?php include DIR_CART."MS_CART_ARIOTOYS_0007.php";?>
                            </div>
                        </div>
                        <div class="box_caption_product_ariotoys">
                            <h3 class=""><a href="/<?= $rowLang1['friendly_url'] ?>" class=""><?= $rowLang1['lang_product_name'] ?></a></h3>
                            <?php include DIR_CART."MS_CART_ARIOTOYS_0010.php";?>
                        </div>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
    <?php include DIR_BANNER."MS_BANNER_ARIOTOYS_0001.php";?>
    <div class="clearfix"></div>
    <div class="cover_list_product_ariotoys">
        <h2 class="header_list_product">
            <span>Sản phẩm mới</span>
            <a href="/tat-ca-san-pham">Xem tất cả</a>
        </h2>
        <div class="row pro-home_ariotoys">
            <?php 
            foreach ($product_new as $item) {
                $rowLang1 = $product_type->getProductLangDetail_byId($item['product_id'], $lang);
                $row1 = $product_type->getProductDetail_byId($item['product_id'], $lang);
            ?>
            <div class="col-md-3">
                <div class="item_product_ariotoys">
                    <div class="cover_item_product_ariotoys">
                        <div class="box_image_product_ariotoys">
                            <a href="/<?= $rowLang1['friendly_url'] ?>">
                                <img src="/images/<?= $row1['product_img'] ?>" alt="<?= $rowLang1['lang_product_name'] ?>"/>
                            </a>
                            <div class="box_action_ariotoys">
                                <?php include DIR_CART."MS_CART_ARIOTOYS_0005.php";?>
                                <?php include DIR_CART."MS_CART_ARIOTOYS_0006.php";?>
                                <?php include DIR_CART."MS_CART_ARIOTOYS_0007.php";?>
                            </div>
                        </div>
                        <div class="box_caption_product_ariotoys">
                            <h3 class=""><a href="/<?= $rowLang1['friendly_url'] ?>" class=""><?= $rowLang1['lang_product_name'] ?></a></h3>
                            <?php include DIR_CART."MS_CART_ARIOTOYS_0011.php";?>
                        </div>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
    <?php include DIR_BANNER."MS_BANNER_ARIOTOYS_0002.php";?>
    <div class="clearfix"></div>
    <div class="cover_list_product_ariotoys">
        <h2 class="header_list_product">
            <span>Sản phẩm hot</span>
            <a href="/tat-ca-san-pham">Xem tất cả</a>
        </h2>
        <div class="row pro-home_ariotoys">
            <?php
                foreach ($product_hot as $item) { 
                    $rowLang1 = $product_type->getProductLangDetail_byId($item['product_id'], $lang);
                    $row1 = $product_type->getProductDetail_byId($item['product_id'], $lang);
            ?>
            <div class="col-md-3">
                <div class="item_product_ariotoys">
                    <div class="cover_item_product_ariotoys">
                        <div class="box_image_product_ariotoys">
                            <a href="/<?= $rowLang1['friendly_url'] ?>">
                                <img src="/images/<?= $row1['product_img'] ?>" alt="<?= $rowLang1['lang_product_name'] ?>"/>
                            </a>
                            <div class="box_action_ariotoys">
                                <?php include DIR_CART."MS_CART_ARIOTOYS_0005.php";?>
                                <?php include DIR_CART."MS_CART_ARIOTOYS_0006.php";?>
                                <?php include DIR_CART."MS_CART_ARIOTOYS_0007.php";?>
                            </div>
                        </div>
                        <div class="box_caption_product_ariotoys">
                            <h3 class=""><a href="/<?= $rowLang1['friendly_url'] ?>" class=""><?= $rowLang1['lang_product_name'] ?></a></h3>
                            <?php include DIR_CART."MS_CART_ARIOTOYS_0011.php";?>
                        </div>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</div>
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