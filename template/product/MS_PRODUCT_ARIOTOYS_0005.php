<?php
    $product_type = new action_product();
    $product_hot = $product_type->getListProductHot_hasLimit(12);
    $product_promotions = $product_type->getListProductSaleOff_hasLimit(12);
    $product_new = $product_type->getListProductNew_hasLimit(1);
    // print_r($product_new);die;
?>
<div class="uni-shop-siderbar-right_ariotoys">

    <?php include_once DIR_SEARCH.'MS_SEARCH_ARIOTOYS_0004.php' ;?>


    <!-- .product item -->
    <div class="category-product_ariotoys uni-product-wapper_ariotoys">
        <input type="hidden" name="lang_current" id="lang_current" value="<?php echo $lang;?>">
        <input type="hidden" name="url_lang" value="<?php echo $url_lang;?>" id="url_lang">
        <div class="row">

            <?php
            $d=0;
            foreach ($product_new as $item) {
                $d++;
                $rowLang = $product_type->getProductLangDetail_byId($item['product_id'], $lang);
                $row1 = $product_type->getProductDetail_byId($item['product_id'], $lang);
                // $action_product1 = new action_product(); 
                // $rowLang1 = $action_product1->getProductLangDetail_byId($row['product_id'],$lang);
                // $row1 = $action_product1->getProductDetail_byId($row['product_id'],$lang); 
            ?>
            <div class="col-md-4">
                <div class="item_product_ariotoys">
                    <div class="cover_item_product_ariotoys">
                        <div class="box_image_product_ariotoys">
                            <a href="/<?= $rowLang['friendly_url'] ?>">
                                <img src="/images/<?= $row1['product_img'] ?>" alt="<?= $rowLang['lang_product_name'] ?>"/>
                            </a>
                            <div class="box_action_ariotoys">
                                <?php include DIR_CART."MS_CART_ARIOTOYS_0005.php";?>
                                <?php include DIR_CART."MS_CART_ARIOTOYS_0006.php";?>
                                <?php include DIR_CART."MS_CART_ARIOTOYS_0007.php";?>
                            </div>
                        </div>
                        <div class="box_caption_product_ariotoys">
                            <h3 class=""><a href="/<?= $rowLang['friendly_url'] ?>" class=""><?= $rowLang['lang_product_name'] ?></a></h3>
                            <?php include DIR_CART."MS_CART_ARIOTOYS_0004.php";?>
                        </div>
                    </div>
                </div>
            </div>
            <?php if($d%3==0){echo '<hr style="width:100%; border:1px solid #fff;" >'; } } ?>
        </div>
    </div>
    <!--PAGINATION-->
    <?php
    echo $rows['paging'];
     include_once DIR_PAGINATION.'MS_PAGINATION_ARIOTOYS_0001.php';?>

    <div class="clearfix"></div>
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