<div class="gb-sidebar-danhmucsanpham-vyhofoco">
    <aside class="widget">
        <h3 class="widget_sidebar-title">Chuyên mục</h3>
        <div class="widget-content">
            <div class="gb-sidebar-danhmucsanpham-vyhofoco-list">
                <ul>
                    <?php
                        $action = new action_news();
                        $list_blog_cat = $action->getListNewsCat_byOrderASC();
                        foreach ($list_blog_cat as $item_news_cat) {
                            $rowLang = $action->getNewsCatLangDetail_byId($item_news_cat['newscat_id'], $lang);
                            $row1 = $action->getNewsCatDetail_byId($item_news_cat['newscat_id'], $lang);

                            $list_news_count = $action->countListNews_byIdCat($item_news_cat['newscat_id']);
                            $count_news = count($list_news_count);

                    ?>
                        <li><a href="/<?= $rowLang['friendly_url'] ?>"><i class="fa fa-caret-right" aria-hidden="true"></i> 
                            <?= $rowLang['lang_newscat_name'] ?> (<?= $count_news ?>) </a></li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </aside>
</div>