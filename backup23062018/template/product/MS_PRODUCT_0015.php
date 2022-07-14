<?php
    $action = new action();
    $action_product = new action_product();    
    $rows = $action_product->getListProductNew_hasLimit(3);//var_dump($rows);die;
    // if (isset($_GET['slug']) && $_GET['slug'] != '') {
    //     $slug = $_GET['slug'];

    //     $rowCatLang = $action_product->getProductCatLangDetail_byUrl($slug,$lang);
    //     $rowCat = $action_product->getProductCatDetail_byId($rowCatLang[$nameColIdProductCat_productCatLanguage],$lang);
    //     $rows = $action_product->getProductList_byMultiLevel_orderProductId($rowCat[$nameColId_productCat],'desc',$trang,9,$slug);
    // }else{
    //     $rows = $action->getList($nameTable_product,'','',$nameColId_product,'desc',$trang,9,'san-pham');
        
    // }
    // $_SESSION['sidebar'] = 'productCat';//var_dump($rows);die;

?>  
<?php 
    // $action_lang = new action_lang();
    // $url_lang = $action_lang->get_url_lang_productcat($slug, $lang);
?>
<?php 
    function rating4 ($id) {
        global $conn_vn;
        $sql = "SELECT * FROM rating Where product_id = $id";//echo $sql;
        $result = mysqli_query($conn_vn, $sql) or die('error: ');
        $num = mysqli_num_rows($result);//echo $num;
        if ($num > 0) {
            $tong = 0;
            $star_1 = 0;
            $star_2 = 0;
            $star_3 = 0;
            $star_4 = 0;
            $star_5 = 0;
            while ($row = mysqli_fetch_assoc($result)) {
                $star_1 += $row['star_1'];
                $star_2 += $row['star_2'];
                $star_3 += $row['star_3'];
                $star_4 += $row['star_4'];
                $star_5 += $row['star_5'];
            }
            $tong = (($star_1*1) + ($star_2*2) + ($star_3*3) + ($star_4*4) + ($star_5*5)) / $num;
            $return = array(
                    'tong' => round($tong),
                    'count' => $num
                );
            return $return;
        } else {
            $return = array(
                    'tong' => 0,
                    'count' => 0
                );
            return $return;
        }
    }
    
?>
<div class="uni-shop-siderbar-right-cms">

    <?php //include_once DIR_SEARCH.'MS_SEARCH_0004.php' ;?>
    <div>Sản Phẩm Mới</div>


    <!-- .product item -->
    <div class="category-product-cms uni-product-wapper-cms">
        <input type="hidden" name="lang_current" id="lang_current" value="<?php echo $lang;?>">
        <input type="hidden" name="url_lang" value="<?php echo $url_lang;?>" id="url_lang">
        <div class="row">
            <?php 
            foreach ($rows as $row) {
                $action_product1 = new action_product(); 
                $rowLang1 = $action_product1->getProductLangDetail_byId($row['product_id'],$lang);
                $row1 = $action_product1->getProductDetail_byId($row['product_id'],$lang); 
                $tong_rating4 = rating4($row['product_id']);
            ?>
            <div class="col-md-4 col-sm-6">
                <div class="product-item-cms">
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
    <!-- <div><?= $rows['paging'] ?></div> -->


    <!--PAGINATION-->
    <?php //include_once DIR_PAGINATION.'MS_PAGINATION_0001.php';?>

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