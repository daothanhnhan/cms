<?php 
    $product_type = new action_product();

    function listProduct_ofTag ($url, $lang) {
        global $conn_vn;
        $sql = "SELECT * FROM producttag_languages Where friendly_url = '$url' AND languages_code = '$lang'";        
        $result = mysqli_query($conn_vn, $sql);
        $row = mysqli_fetch_assoc($result);
        $id = $row['producttag_id'];


        if (!isset($_SESSION['filter_price'])) {
            $sql = "SELECT * FROM product Where producttag_arr LIKE '%$id%'";
        } else {
            $filter_price = unserialize($_SESSION['filter_price']);
            if (empty($filter_price)) {
                $sql = "SELECT * FROM product Where producttag_arr LIKE '%$id%'";
            } else {
                $count = count($filter_price);
                $dem = 0;
                $between = "And (";
                if (in_array('price_1', $filter_price)) {
                    $dem++;
                    if ($count == $dem) {
                        $between .= "(product_price BETWEEN 0 AND 10000)";
                    } else {
                        $between .= "(product_price BETWEEN 0 AND 10000) OR ";
                    }                    
                } 
                if (in_array('price_2', $filter_price)) {
                    $dem++;
                    if ($count == $dem) {
                        $between .= "(product_price BETWEEN 10000 AND 20000)";
                    } else {
                        $between .= "(product_price BETWEEN 10000 AND 20000) OR ";
                    }  
                } 
                if (in_array('price_3', $filter_price)) {
                    $dem++;
                    if ($count == $dem) {
                        $between .= "(product_price BETWEEN 20000 AND 30000)";
                    } else {
                        $between .= "(product_price BETWEEN 20000 AND 30000) OR ";
                    }  
                } 
                if (in_array('price_4', $filter_price)) {
                    $dem++;
                    if ($count == $dem) {
                        $between .= "(product_price BETWEEN 30000 AND 40000)";
                    } else {
                        $between .= "(product_price BETWEEN 30000 AND 40000) OR ";
                    }  
                } 
                if (in_array('price_5', $filter_price)) {
                    $dem++;
                    if ($count == $dem) {
                        $between .= "(product_price BETWEEN 40000 AND 50000)";
                    } else {
                        $between .= "(product_price BETWEEN 40000 AND 50000)";
                    }  
                }
                $between .= ")";

                $sql = "SELECT * FROM product Where producttag_arr LIKE '%$id%' $between";
            }
        }
        $result = mysqli_query($conn_vn, $sql);
        $rows = array();
        while ($row = mysqli_fetch_assoc($result)) {
            $rows[] = $row;
        }
        return $rows;
    }

    $list_pro_oftag = listProduct_ofTag($_GET['page'], $lang);
?>
<link rel="stylesheet" href="/plugin/owl-carouse/owl.carousel.min.css">
<link rel="stylesheet" href="/plugin/owl-carouse/owl.theme.default.min.css">

<div class="gb-product-home-cms">
    <!--HEADER PRODUICT TOP-->
    <div class="gb-product-top-cms">
        <div class="row">
            <div class="col-md-3">
                <h2>TOP SẢN PHẨM</h2>
            </div>
            <div class="col-md-8">
                <div class="gb-prodct-top-tab-cms">
                    <div class="panel-heading">
                        <!--NAV ICONS-->
                        <div class="icons-nav-product-cms">
                            <i class="fa fa-bars" aria-hidden="true"></i>
                        </div>
                        <!-- <ul class="nav nav-tabs product-menu-content">
                            <li class="active"><a href="#tab1default" data-toggle="tab">Sản phẩm khuyến mại</a></li>
                            <li><a href="#tab2default" data-toggle="tab">Sản phẩm mới</a></li>
                            <li><a href="#tab3default" data-toggle="tab">Sản phẩm nổi bật</a></li>
                        </ul> -->
                    </div>
                </div>
            </div>
            <div class="col-md-1"></div>
        </div>
    </div>


    <!--SHOW PRODUCT ITEM-->
    <div class="gb-product-show-cms">
        <div class="panel-body">
            <div class="tab-content">
                <!--SẢN PHẨM KHUYẾN MẠI-->
                <div class="tab-pane fade in active" id="tab1default">
                    <div class="gb-product-show-cms_slide list_product owl-carousel owl-theme">
                        <?php 
                        foreach ($list_pro_oftag as $item) {
                            $rowLang = $product_type->getProductLangDetail_byId($item['product_id'], $lang);
                            $row1 = $product_type->getProductDetail_byId($item['product_id'], $lang);
                        ?>
                        <div class="item">
                            <div class="product-item-cms">
                                <ul class="category-product-cms">
                                    <li>
                                        <div class="wrapper">
                                            <div class="feature-image">
                                                <a href="/<?= $rowLang['friendly_url'] ?>"><img class="wp-post-image img-responsive" src="/images/<?= $row1['product_img'] ?>" alt="<?= $rowLang['lang_product_name'] ?>"></a>
                                                <?php include DIR_PRODUCT."MS_PRODUCT_0009.php";?>
                                            </div>
                                            <!-- .feature-image -->

                                            <div class="stats">
                                                <div class="box-title">
                                                    <h2 class="title-product">
                                                        <a href="/<?= $rowLang['friendly_url'] ?>" class="product_name"><?= $rowLang['lang_product_name'] ?></a>
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
            </div>
        </div>
    </div>
</div>

<script src="/plugin/owl-carouse/owl.carousel.min.js"></script>
<script>
    $(document).ready(function () {
        $('.gb-product-show-cms_slide').owlCarousel({
            loop:true,
            responsiveClass:true,
            nav:true,
            navText:[],
            dots:false,
            margin:30,
            responsive:{
                0:{
                    items:1
                },
                768:{
                    items:3
                }
            }
        });
        $('.icons-nav-product-cms').click(function () {
            $('.product-menu-content').slideToggle();
        });
    });
</script>