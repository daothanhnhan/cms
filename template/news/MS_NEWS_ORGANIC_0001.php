<div class="gb-category-skincare-organic">
    <div class="container">
        <div class="row">
            <?php
                $news = new action_news();
                $list_news_new = $news->getListNewsNew_hasLimit(3);
                foreach ($list_news_new as $item) {
            ?>
                <div class="col-sm-4">
                    <div class="gb-category-skincare-organic-item">
                        <div class="gb-category-skincare-organic-item-text">
                            <h5><a href="/<?= $item['friendly_url'] ?>"><?= $item['news_name'] ?></a></h5>
                            <h4><a href="/<?= $item['friendly_url'] ?>">OF'H Cosmetic</a></h4>
                        </div>
                        <div class="gb-category-skincare-organic-item-img">
                            <img src="/images/<?= $item['news_img'] ?>" alt="" class="img-responsive">
                            <a href="/<?= $item['friendly_url'] ?>" class="btndoctiep-organic">Xem thêm</a>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</div>