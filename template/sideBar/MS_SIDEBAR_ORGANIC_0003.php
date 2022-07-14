<div class="gb-recenpost-sidebar-organic widget-sidebar">
    <aside class="widget">
        <h3 class="widget-title-sidebar-organic">Bài viết mới nhất</h3>
        <div class="widget-content">
            <div class="gb-blog-left-recent-posts_organic">
                <ul>
                    <?php
                        $news = new action_news();
                        $list_news_new_sidebar = $news->getListNewsNew_hasLimit(4);
                        foreach ($list_news_new_sidebar as $item) {
                    ?>
                        <li>
                            <div class="gb-item-recent-posts_organic">
                                <div class="gb-item-recent-posts_organic-img">
                                    <a href="/<?= $item['friendly_url'] ?>">
                                        <img src="/images/<?= $item['news_img'] ?>" alt="">
                                    </a>
                                </div>
                                <div class="gb-item-recent-posts_organic-text">
                                    <h2><a href="/<?= $item['friendly_url'] ?>"><?= $item['news_name'] ?></a></h2>
                                    <div class="gb-item-recent-post-time_organic">
                                        <span><i class="fa fa-calendar" aria-hidden="true"></i> <?= date('d-m-Y', strtotime($item['news_created_date']))  ?></span>
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