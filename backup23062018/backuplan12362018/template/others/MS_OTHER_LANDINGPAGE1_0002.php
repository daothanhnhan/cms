<div id="phuongphap" class="gb-phuong-phap-toi-uu_ldplearning">
    <div class="container">
        <div class="title-center">
            <h2>Phương pháp tối ưu</h2>
            <div class="under-line2"></div>
        </div>

        <div class="gb-phuong-phap-toi-uu_ldplearning-item">
            <?php
                $news = new action_news();
                $news1 = $news->getNewsDetail_byId(54,$lang)
            ?>
            <div class="row">
                <div class="col-md-6">
                    <div class="gb-phuong-phap-toi-uu_ldplearning-item-text">
                        <h2><?= $news1['news_name'] ?></h2>
                        <?= $news1['news_content'] ?>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="gb-phuong-phap-toi-uu_ldplearning-item-img">
                        <img src="/images/<?= $news1['news_img'] ?>" alt="" class="img-responsive">
                    </div>
                </div>
            </div>
        </div>
        <div class="gb-phuong-phap-toi-uu_ldplearning-item">
             <?php
                $news = new action_news();
                $news2 = $news->getNewsDetail_byId(55,$lang)
            ?>
            <div class="row">
                <div class="col-md-6">
                    <div class="gb-phuong-phap-toi-uu_ldplearning-item-img">
                        <img src="/images/<?= $news2['news_img'] ?>" alt="" class="img-responsive">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="gb-phuong-phap-toi-uu_ldplearning-item-text">
                        <h2><?= $news2['news_name'] ?></h2>
                        <?= $news2['news_content'] ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="gb-phuong-phap-toi-uu_ldplearning-item">
             <?php
                $news = new action_news();
                $news3 = $news->getNewsDetail_byId(56,$lang)
            ?>
            <div class="row">
                <div class="col-md-6">
                    <div class="gb-phuong-phap-toi-uu_ldplearning-item-text">
                        <h2><?= $news3['news_name'] ?></h2>
                        <?= $news3['news_content'] ?>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="gb-phuong-phap-toi-uu_ldplearning-item-img">
                        <img src="/images/<?= $news3['news_img'] ?>" alt="" class="img-responsive">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>