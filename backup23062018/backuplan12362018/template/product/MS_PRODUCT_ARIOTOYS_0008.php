<div class="uni-shop-siderbar-right_ariotoys">

    <?php include_once DIR_SEARCH.'MS_SEARCH_0004.php' ;?>


    <!-- .product item -->
    <div class="category-product_ariotoys uni-product-wapper_ariotoys">
        <div class="row">
            <?php 
            foreach ($rows['data'] as $row) {
                $action_product1 = new action_product(); 
                $rowLang1 = $action_product1->getProductLangDetail_byId($row['product_id'],$lang);
                $row1 = $action_product1->getProductDetail_byId($row['product_id'],$lang); 
            ?>
            <div class="col-md-4">
                <div class="item_product_ariotoys">
                    <div class="cover_item_product_ariotoys">
                        <div class="box_image_product_ariotoys">
                            <a href="/<?= $rowLang1[$nameColUrlProduct_productLanguage] ?>">
                                <img src="/images/<?= $row1['product_img'] ?>" alt=""/>
                            </a>
                            <div class="box_action_ariotoys">
                                <?php include DIR_CART."MS_CART_ARIOTOYS_0005.php";?>
                                <?php include DIR_CART."MS_CART_ARIOTOYS_0006.php";?>
                                <?php include DIR_CART."MS_CART_ARIOTOYS_0007.php";?>
                            </div>
                        </div>
                        <div class="box_caption_product_ariotoys">
                            <h3 class=""><a href="/<?= $rowLang1[$nameColUrlProduct_productLanguage] ?>" class=""><?= $rowLang1[$nameColLangProductName_productLanguage] ?></a></h3>
                            <?php include DIR_CART."MS_CART_ARIOTOYS_0004.php";?>
                        </div>
                    </div>
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