
<link rel="stylesheet" href="/plugin/owl-carouse/owl.carousel.min.css">
<link rel="stylesheet" href="/plugin/owl-carouse/owl.theme.default.min.css">
<?php
    $action_news_relative = new action_news();
    $list_news_relative = $action_news_relative->getListNewsRelate_byIdCat_hasLimit($row['newscat_id'], 6);
?>
<div class="gb-tintuc-lienquan-vyhofoco">
    <!--HEADER PRODUICT TOP-->
    <div class="gb-product-top">
        <div class="gb-tintuc-lienquan-vyhofoco-title">Tin tức liên quan</div>
    </div>
    <!--SHOW PRODUCT ITEM-->
    <div class="gb-product-show">
        <div class="gb-tintuc-lienquan-vyhofoco-three-item owl-carousel owl-theme">
            <?php
                foreach ($list_news_relative as $item) {
                    $rowLang = $action_news_relative->getNewsLangDetail_byId($item['news_id'],$lang);
                    $row = $action_news_relative->getNewsDetail_byId($item['news_id'],$lang);
            ?>
                <div class="item">
                    <div class="gb-tintuc-item">
                        <div class="item-img">
                            <a href="/<?= $rowLang['friendly_url'] ?>">
                                <img src="/images/<?= $row['news_img'] ?>" alt="" class="img-responsive">
                            </a>
                        </div>
                        <div class="item-text">
                            <h2> <a href="/<?= $rowLang['friendly_url'] ?>">
                                    <?= $rowLang['lang_news_name'] ?>
                                </a></h2>
                            <time> <i class="fa fa-calendar-plus-o" aria-hidden="true"></i> <?= date('M, d, Y', strtotime($row['news_created_date']))?></time>
                            <p>
                                 <?= $rowLang['lang_news_des'] ?>
                            </p>
                            <div class="btn-doctiep">
                                <a href="/<?= $rowLang['friendly_url'] ?>">Đọc tiếp</a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</div>

<script src="/plugin/owl-carouse/owl.carousel.min.js"></script>
<script>
    $(document).ready(function () {
        $('.gb-tintuc-lienquan-vyhofoco-three-item').owlCarousel({
            loop:true,
            autoplay: true,
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
    });
</script>