<?php
    $news = new action_news();
    $list_news_home = $news->getListNewsNew_hasLimit(4);
?>
<div class="gb-tinthoitrang_vyhofoco">
    <div class="container">
        <div class="gb-tinthoitrang-title_vyhofoco">
            <h4>Blog mới</h4>
            <p>Liên tục cập nhật nhúng thông tin mới nhất</p>
        </div>
        <div class="gb-tinthoitrang-body_vyhofoco">
            <div class="row">
                <?php
                    foreach ($list_news_home as $item) {
                        $rowLang = $news->getNewsLangDetail_byId($item['news_id'],$lang);
                        $row1 = $news->getNewsDetail_byId($item['news_id'],$lang);
                ?>
                <div class="col-md-6">
                    <div class="gb-tinthoitrang_vyhofoco-item">
                        <div class="gb-tinthoitrang_vyhofoco-img">
                            <a href="/<?= $rowLang['friendly_url'] ?>">
                                <img src="/images/<?= $row1['news_img']?>" alt="" class="img-responsive">
                            </a>
                        </div>
                        <div class="gb-tinthoitrang_vyhofoco-text">
                            <h3><a href="/<?= $rowLang['friendly_url'] ?>"><?= $rowLang['lang_news_name'] ?></a></h3>
                            <div class="time_vyhofoco">
                                <ul>
                                    <li><i class="fa fa-clock-o" aria-hidden="true"></i> <?= date('d-m-Y', strtotime($row1['news_created_date'])) ?></li>
                                    <li><i class="fa fa-commenting-o" aria-hidden="true"></i> admin</li>
                                </ul>
                            </div>
                            <div class="des_vyhofoco">
                                <?= $rowLang['lang_news_des'] ?>
                            </div>
                        </div>
                    </div>
                </div>
                <?PHP } ?>
            </div>
        </div>
    </div>
</div>