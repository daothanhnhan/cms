<link rel="stylesheet" href="/plugin/owl-carouse/owl.carousel.min.css">
<link rel="stylesheet" href="/plugin/owl-carouse/owl.theme.default.min.css">
<div class="gb-news-blog_organic">
    <div class="container">
        <div class="gb-news-blog_organic-title">
            TIN TỨC - BLOG
        </div>
        <div class="gb-news-blog_organic-slide owl-carousel owl-theme">
            <?php
                $news = new action_news();
                $list_news_blog = $news->getListNewsNew_hasLimit(6);
                foreach ($list_news_blog as $item) {
            ?>
                <div class="item">
                    <div class="gb-news-blog_organic-item">
                        <div class="gb-news-blog_organic-item-img">
                            <a href="/<?= $item['friendly_url'] ?>">
                                <img src="/images/<?= $item['news_img'] ?>" class="img-responsive">
                            </a>
                            <div class="caption caption-large">
                                <time class="the-date"><?= date('d/m/Y', strtotime($item['news_created_date']))  ?></time>
                            </div>
                        </div>
                        <div class="gb-news-blog_organic-item-text">
                            <div class="gb-news-blog_organic-item-title">
                                <h3>
                                    <a href="/<?= $item['friendly_url'] ?>"><?= $item['news_name'] ?></a>
                                </h3>
                            </div>
                            <div class="gb-news-blog_organic-item-text-des">
                                <p><?= $item['news_des'] ?></p>
                            </div>
                        </div>
                        <div class="gb-news-blog_organic-item-button">
                            <a href="/<?= $item['friendly_url'] ?>">
                                <button type="button" class="btn gb-btn-readmore">ĐỌC TIẾP</button>
                            </a>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
        <div class="gb-divider"></div>
    </div>
</div>
<script src="/plugin/owl-carouse/owl.carousel.min.js"></script>
<script>
    $(document).ready(function (){
        $('.gb-news-blog_organic-slide').owlCarousel({
            loop:true,
            margin:30,
            navSpeed:2000,
            nav:true,
            dots: false,
            autoplay: true,
            rewind: true,
            navText:[],
            responsive:{
                0:{
                    items:1
                },
                600:{
                    items:3
                },
                992:{
                    items:4
                }
            }
        });
    });
</script>