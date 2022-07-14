<?php 
    $action_product = new action_product(); 
    $slug = isset($_GET['slug']) ? $_GET['slug'] : '';

    $rowLang = $action_product->getProductLangDetail_byUrl($slug,$lang);
    $row = $action_product->getProductDetail_byId($rowLang[$nameColIdProduct_productLanguage],$lang);
    $_SESSION['productcat_id_relate'] = $row[$nameColIdProductCat_product];
    $_SESSION['sidebar'] = 'productDetail';
    $arr_id = $row['productcat_ar'];
    $arr_id = explode(',', $arr_id);
    $productcat_id = (int)$arr_id[0];
    $product_breadcrumb = $action_product->getProductCatLangDetail_byId($productcat_id, $lang);
    $breadcrumb_url = $product_breadcrumb['friendly_url'];
    $breadcrumb_name = $product_breadcrumb['lang_productcat_name'];
    $use_breadcrumb = true;

    $img_sub = json_decode($row['product_sub_img']);
?>
<?php 
    $action_lang = new action_lang();
    $url_lang = $action_lang->get_url_lang_productDetail($slug, $lang);
?>
<link rel="stylesheet" href="/plugin/slickNav/slicknav.css"/>
<link rel="stylesheet" href="/plugin/slick/slick.css"/>
<link rel="stylesheet" href="/plugin/slick/slick-theme.css"/>
<div class="gb-chitiet-duan_datxanhmienbac">
    <div class="gb-chitiet-duan-body_datxanhmienbac">
        <!--TỔNG QUAN -->
        <div class="container">
            <div class="gb-chitiet-duan-body-top_datxanhmienbac">
                <div class="row">
                    <div class="col-md-8">
                        <div class="gb-chitiet-duan-body-top-left_datxanhmienbac">
                            <div class="slider slider-for">
                                <?php 
                                    $d = 0;
                                    foreach ($img_sub as $item) {
                                        $d++;
                                        $image = json_decode($item, true);
                                ?>
                                    <div class="slide-item">
                                        <img src="/images/<?= $image['image'] ?>" alt="" class="img-responsive">
                                    </div>
                                <?php } ?>
                            </div>
                            <div class="slider slider-nav">
                                <?php 
                                    $d = 0;
                                    foreach ($img_sub as $item) {
                                        $d++;
                                        $image = json_decode($item, true);
                                ?>
                                    <div class="slide-item-nav">
                                        <img src="/images/<?= $image['image'] ?>" alt="" class="img-responsive">
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="gb-chitiet-duan-body-top-right_datxanhmienbac">
                            <h3><?= $row['product_name'] ?></h3>
                            <?php include DIR_PRODUCT."MS_PRODUCT_DATXANHMB_0002.php";?>
                            <div class="gb-line"></div>
                            <?= $row['product_des'] ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--LANGDINGPAGE-->
        <div class="gb-chitiet_duan-landingpage_datxanhmienbac">
            <div class="gb-chitiet_duan-landingpage-body_datxanhmienbac">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="gb-chitiet_duan-landingpage-left_datxanhmienbac">
                                <?= $row['product_content'] ?>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <?php include DIR_EMAIL."MS_EMAIL_DATXANHMB_0006.php";?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="/plugin/slick/scripts.js"></script>
<script src="/plugin/slick/slick.js"></script>
<script src="/plugin/slickNav/jquery.slicknav.js"></script>

<div id="fb-root"></div>
<script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.6";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>

<script type="text/javascript">
    $(document).ready(function() {
        $('.slider-for').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            speed: 500,
            arrows: false,
            fade: true,
            asNavFor: '.slider-nav'
        });
        $('.slider-nav').slick({
            slidesToShow: 5,
            slidesToScroll: 1,
            speed: 500,
            asNavFor: '.slider-for',
            dots: false,
            focusOnSelect: true,
            slide: 'div'
        });
    });
</script>

<script>
    $(document).ready(function () {
        var headerHeight = $('.gb-chitiet_duan-landingpage-nav_datxanhmienbac').outerHeight();

        $('.slide-section').click(function () {
            var linkHref = $(this).attr('href');
            $('html, body').animate({
                scrollTop: $(linkHref).offset().top - headerHeight
            }, 1000);
            e.preventDefault();
        });

        $(".sticky-menu-duan").sticky({topSpacing:0});
    });
</script>