<!--TIM KIẾM-->
<?php
    $news = new action_news();
    $list_news1 = $news->getListNewsNew_hasLimit(10);
?>
<div class="gb-tintucbatdongsan-sidebar_bdshn">
    <aside class="widget_sidebar">
        <h3 class="widget-title_bdshn">Tin tức bất động sản</h3>
        <div class="widget-content">
            <div class="gb-tintucbatdongsan-sidebar-body_bdshn">
                <marquee behavior="Scroll" scrollamount="3" direction="up" scrolldelay="1" onmouseover="this.stop()" onmouseout="this.start()" style="height:336px">
                    <?php
                        foreach ($list_news1 as $item) {
                            $rowLang = $news->getNewsLangDetail_byId($item['news_id'],$lang);
                            $row1 = $news->getNewsDetail_byId($item['news_id'],$lang);
                    ?>
                        <div class="gb-tintucbatdongsan-sidebar_bdshn-item">
                            <a href="/<?= $rowLang['friendly_url'] ?>">
                                <img src="/images/<?= $row1['news_img'] ?>" alt="" class="img-responsive">
                            </a>
                            <h4>
                                <a href="/<?= $rowLang['friendly_url'] ?>">
                                    <?= $rowLang['lang_news_name'] ?>
                                </a>
                            </h4>
                        </div>
                    <?php } ?>
                </marquee>
            </div>
        </div>
    </aside>
</div>