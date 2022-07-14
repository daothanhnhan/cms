<link rel="stylesheet" href="/plugin/owl-carouse/owl.carousel.min.css">
<link rel="stylesheet" href="/plugin/owl-carouse/owl.theme.default.min.css">
<!--PRICING TABLE 1-->
<div id="banggia" class="gb-bang-gia_ldplearning">
    <?php
        $product = new action_product();
        $pro_cat = $product->getProductCatDetail_byId(236, $lang);
    ?>

    <div class="uni-shortcode-pricing-table-1_ldplearning">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="title-center">
                        <h2><?= $pro_cat['productcat_name'] ?></h2>
                        <?= $pro_cat['productcat_des'] ?>
                    </div>
                </div>
            </div>
            <div class="gb-bang-gia_ldplearning-slide owl-carousel owl-theme">
                <?php
                    $list_product = $product->getProductList_byMultiLevel_orderProductId($pro_cat['productcat_id'],'','', '' ,'');
                    foreach ($list_product as $item) {
                ?>
                <div class="item">
                    <div class="uni-pricing-table-default_ldplearning panel panel-basic">
                        <div class="panel-heading">
                            <img src="/images/<?= $item['product_img'] ?>" alt="" class="img-responsive">
                        </div>
                        <div class="panel-body">
                            <div class="the-price">
                                <h2>
                                    $<?= $item['product_price'] ?><span class="subscript">/month</span>
                                </h2>
                            </div>
                            <div class="panel-content">
                                <h3 class="panel-title"><?= $item['product_name'] ?></h3>
                                <ul>
                                    <li>Introduce</li>
                                    <li>Leisure</li>
                                    <li>Meals</li>
                                    <li>Shopping</li>
                                </ul>
                            </div>
                        </div>
                        <div class="panel-footer">
                            <a href="#" class="btn" role="button">Register Now</a>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>
</div>
<script src="/plugin/jquery/jquery-2.0.2.min.js"></script>
<script src="/plugin/owl-carouse/owl.carousel.min.js"></script>
<script>
    $(document).ready(function () {
        $('.gb-bang-gia_ldplearning-slide').owlCarousel({
            loop:true,
            margin:30,
            autoplay:true,
            responsiveClass:true,
            nav:false,
            navText:[],
            dots:false,
            responsive:{
                0:{
                    items:1
                },
                768:{
                    items:3
                },
                992:{
                    items:4
                }
            }
        });

    });
</script>