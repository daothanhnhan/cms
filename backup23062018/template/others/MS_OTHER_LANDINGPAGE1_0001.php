
<div id="doituongthamgia" class="gb-doituongthamgia_ldplearning">
    <div class="container">
        <div class="title-center">
            <h2>Đối tượng tham gia</h2>
            <div class="under-line2"></div>
        </div>
        <div class="gb-doituongthamgia_ldplearning-item">
            <?php
                $action_home = new action_news();
                $list_news1 = $action_home->getNewsDetail_byId(52, $lang);
            ?>
            <div class="row">
                <div class="col-md-6">
                    <div class="gb-doituongthamgia_ldplearning-item-img">
                        <img src="/images/<?= $list_news1['news_img'] ?>" alt="" class="img-responsive">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="gb-doituongthamgia_ldplearning-item-text">
                        <h3><?= $list_news1['news_name'] ?></h3>
                        <?= $list_news1['news_content'] ?>
                        <div class="btn-dangky">
                            <a href="">Register Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="gb-doituongthamgia_ldplearning-item">
            <?php
                $action_home = new action_news();
                $list_news2 = $action_home->getNewsDetail_byId(53, $lang);
            ?>
            <div class="row">
                <div class="col-md-6">
                    <div class="gb-doituongthamgia_ldplearning-item-text">
                        <h3><?= $list_news2['news_name'] ?></h3>
                        <?= $list_news2['news_content'] ?>
                        <div class="btn-dangky">
                            <a href="">Register Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="gb-doituongthamgia_ldplearning-item-img">
                        <img src="/images/<?= $list_news2['news_img'] ?>" alt="" class="img-responsive">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>