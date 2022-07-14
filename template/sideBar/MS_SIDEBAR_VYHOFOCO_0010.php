<?php
    $news = new action_news();
    $list_news_new = $news->getListNewsNew_hasLimit(3);
?>
<div class="gb-baivietmoinhat_vyhofoco">
    <aside class="widget">
        <h3 class="widget_sidebar-title">Bài viết mới nhất</h3>
        <div class="widget-content">
            <div class="gb-blog-left-recent-posts">
                <ul>
                    <?php
                        foreach ($list_news_new as $item) {
                            $rowLang = $news->getNewsLangDetail_byId($item['news_id'], $lang);
                            $row1 = $news->getNewsDetail_byId($item['news_id'], $lang);
                    ?>
                        <li>
                            <div class="gb-item-recent-posts">
                                <div class="gb-item-recent-posts-img">
                                    <a href="/<?= $rowLang['friendly_url'] ?>">
                                        <img src="/images/<?= $row1['news_img'] ?>" alt="">
                                    </a>
                                </div>
                                <div class="gb-item-recent-posts-text">
                                    <h2>
                                        <a href="/<?= $rowLang['friendly_url'] ?>"><?= $rowLang['lang_news_name'] ?></a>
                                    </h2>
                                    <div class="gb-item-recent-post-time">
                                        <span>
                                            <i class="fa fa-calendar" aria-hidden="true"></i>
                                            <?= date('M , d, Y', strtotime($row1['news_created_date']))  ?>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </aside>
</div>