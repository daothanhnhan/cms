<div class="uni-shop-siderbar-right-cms">

    <?php include_once DIR_SEARCH.'MS_SEARCH_0004.php' ;?>


    <!-- .product item -->
    <div class="category-product-cms uni-product-wapper-cms">
        <div class="row">
            <?php 
            foreach ($rows['data'] as $row) {
                $action_product1 = new action_product(); 
                $rowLang1 = $action_product1->getProductLangDetail_byId($row['product_id'],$lang);
                $row1 = $action_product1->getProductDetail_byId($row['product_id'],$lang); 
            ?>
            <div class="col-md-4 col-sm-6">
                <div class="product-item-cms-cms">
                    <ul class="category-product-cms">
                        <li>
                            <div class="wrapper">
                                <div class="feature-image">
                                    <a href="/<?= $rowLang1[$nameColUrlProduct_productLanguage] ?>"><img class="wp-post-image img-responsive" src="/images/<?= $row1['product_img'] ?>" alt=""></a>
                                    <?php include DIR_PRODUCT."MS_PRODUCT_0009.php";?>
                                </div>
                                <!-- .feature-image -->

                                <div class="stats">
                                    <div class="box-title">
                                        <h2 class="title-product">
                                            <a href="/<?= $rowLang1[$nameColUrlProduct_productLanguage] ?>" class="product_name"><?= $rowLang1[$nameColLangProductName_productLanguage] ?></a>
                                        </h2>
                                        <!-- .title-product -->
                                    </div>
                                    <!-- .box-title -->
                                    <div class="price-add-cart-cms">
                                       
                                        <?php include DIR_PRODUCT."MS_PRODUCT_0008.php";?>

                                        <?php include DIR_PRODUCT."MS_PRODUCT_0007.php";?>
                                        
                                        <?php include DIR_CART."MS_CART_0008.php";?>
                                        
                                        <div class="clearfix"></div>
                                    </div>
                                    <!-- .box-price-cms -->
                                </div>
                                <!-- .stats -->
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>

    <!--PAGINATION-->
    <?php //include_once DIR_PAGINATION.'MS_PAGINATION_0001.php';?>
    <?php 
                    $config = array(
                        'current_page'  => $trang+1, // Trang hiện tại
                        'total_record'  => $rows['count'], // Tổng số record
                        'total_page'    => 1, // Tổng số trang
                        'limit'         => $limit,// limit
                        'start'         => 0, // start
                        'link_full'     => '',// Link full có dạng như sau: domain/com/page/{page}
                        'link_first'    => '',// Link trang đầu tiên
                        'range'         => 9, // Số button trang bạn muốn hiển thị 
                        'min'           => 0, // Tham số min
                        'max'           => 0,  // tham số max, min và max là 2 tham số private
                        'search'        => str_replace(' ', '-', $rows['q'])

                    );

                    $pagination = new Pagination;
                    $pagination->init($config);
                    echo $pagination->htmlPaging1();
                ?>

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
           window.location.href = "/gio-hang";
          }
        };
        xhttp.open("POST", "/functions/ajax-add-cart.php", true);
        xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhttp.send("product_id="+id+"&product_name="+name+"&product_price="+price+"&product_quantity=1&action=add");
        xhttp.send();        
    }
</script>