<?php 
    $product_related1 = $action_product->getListProductRelate_byIdCat_hasLimit($productcat_id, 3);//var_dump($product_related1);die;
?>
<?php 
    function rating2 ($id) {
        global $conn_vn;
        $sql = "SELECT * FROM rating Where product_id = $id";
        $result = mysqli_query($conn_vn, $sql);
        $num = mysqli_num_rows($result);
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
<div class="gb-sanpham-cmslienquan-cms">

    <div class="title">
        <h3>SẢN PHẨM LIÊN QUAN</h3>
    </div>

    <div class="row">
        <?php 
        foreach ($product_related1 as $row) { 
            $action_product1 = new action_product(); 
            $rowLang1 = $action_product1->getProductLangDetail_byId($row['product_id'],$lang);
            $row1 = $action_product1->getProductDetail_byId($row['product_id'],$lang); 
            $tong_rating2 = rating2($row['product_id']);
        ?>
        <div class="col-md-4">
            <div class="product-item-cms">
                <ul class="category-product-cms">
                    <li>
                        <div class="wrapper">
                            <div class="feature-image">
                                <a href="/<?= $rowLang1['friendly_url'] ?>"><img class="wp-post-image img-responsive" src="/images/<?= $row1['product_img'] ?>" alt="<?= $rowLang1['lang_product_name'] ?>"></a>
                                <?php include DIR_PRODUCT."MS_PRODUCT_0009.php";?>
                            </div>
                            <!-- .feature-image -->

                            <div class="stats">
                                <div class="box-title">
                                    <h2 class="title-product">
                                        <a href="/<?= $rowLang1['friendly_url'] ?>" class="product_name"><?= $rowLang1['lang_product_name'] ?></a>

                                    </h2>
                                    <!-- .title-product -->
                                </div>
                                <!-- .box-title -->
                                <div class="price-add-cart-cms">
                                    <div class="vote-star-cms">
                                        <ul>
                                            <li><i class="fa <?= ($tong_rating2['tong']>=1) ? 'fa-star' : 'fa-star-o' ?>" aria-hidden="true"></i></li>
                                            <li><i class="fa <?= ($tong_rating2['tong']>=2) ? 'fa-star' : 'fa-star-o' ?>" aria-hidden="true"></i></li>
                                            <li><i class="fa <?= ($tong_rating2['tong']>=3) ? 'fa-star' : 'fa-star-o' ?>" aria-hidden="true"></i></li>
                                            <li><i class="fa <?= ($tong_rating2['tong']>=4) ? 'fa-star' : 'fa-star-o' ?>" aria-hidden="true"></i></li>
                                            <li><i class="fa <?= ($tong_rating2['tong']>=5) ? 'fa-star' : 'fa-star-o' ?>" aria-hidden="true"></i></li>
                                        </ul>
                                    </div>
                                    <!-- <div class="box-price-cms">
                                        <span class="price-sale">$ <?= number_format($row1['product_price']) ?></span>
                                    </div> -->
                                    <?php include DIR_PRODUCT."MS_PRODUCT_0007.php";?>
                                    <div class="box-add-cms">
                                        <a href="" onclick="load_url('<?php echo $row1['product_id'];?>', '<?php echo $rowLang1['lang_product_name'];?>', '<?php echo $row1['product_price']-($row1['product_price']*($row1['product_price_sale']/100));?>')">Add to cart</a>
                                    </div>
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