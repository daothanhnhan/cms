<div class="side_bar_ariotoys">
    <div class="box_category_ariotoys">
        <h2 class="header_category_ariotoys">
            <i class="fa fa-th-list" aria-hidden="true"></i>
            <span>Danh mục tin tức</span>
        </h2>
        <?php
           $sidebar_news_cat = new action_news();
            $list_newscat_all = $sidebar_news_cat->getListNewsCatAll($lang);//var_dump($list_newscat_all);die;
        ?>
        <ul class="list_category">
            <?php foreach ($list_newscat_all as $item) { ?>
                <li class="item_category"><a href="/<?= $item['friendly_url'] ?>" class="link_category"><?= $item['lang_newscat_name'] ?></a></li>
            <?php
                }
            ?>
        </ul>
    </div>
</div>