<?php 
    $sidebar_news_recent = new action_news();
    $list_news_recent = $sidebar_news_recent->getListNewsNew_hasLimit(4);//var_dump($list_news_recent);die;
?>
<div class="uni-widget-popular-posts-cms">
    <aside class="widget">
        <h3 class="widget-title-cms">Recent posts</h3>
        <div class="uni-divider"></div>
        <div class="widget-content">
            <ul>
            <?php 
            foreach ($list_news_recent as $item) { 
                $action_news2 = new action_news(); 
                $rowLang2 = $action_news2->getNewsLangDetail_byId($item['news_id'],$lang);
                $row2 = $action_news2->getNewsDetail_byId($item['news_id'],$lang);
            ?>
                <li>
                    <div class="item-widget-popular-post-cms">
                        <div class="item-img-cms">
                            <a href="/<?= $row2['friendly_url'] ?>"><img src="/images/<?= $row2['news_img'] ?>" alt=""></a>
                        </div>
                        <div class="item-caption">
                            <h4><a href="/<?= $row2['friendly_url'] ?>"><?= $rowLang2['lang_news_name'] ?></a></h4>
                            <div class="time"><i class="fa fa-calendar" aria-hidden="true"></i><?= substr($row2['news_created_date'], 0, 10) ?></div>
                        </div>
                    </div>
                </li>
            <?php } ?>
                <!-- <li>
                    <div class="item-widget-popular-post-cms">
                        <div class="item-img-cms">
                            <a href="chitiet-tintuc.php"><img src="images/best-seller/2.jpg" alt=""></a>
                        </div>
                        <div class="item-caption">
                            <h4><a href="chitiet-tintuc.php">New surgical technology</a></h4>
                            <div class="time"><i class="fa fa-calendar" aria-hidden="true"></i>  June 12, 2017</div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="item-widget-popular-post-cms">
                        <div class="item-img-cms">
                            <a href="chitiet-tintuc.php"><img src="images/best-seller/3.jpg" alt=""></a>
                        </div>
                        <div class="item-caption">
                            <h4><a href="chitiet-tintuc.php">Treatment for cancer patients</a></h4>
                            <div class="time"><i class="fa fa-calendar" aria-hidden="true"></i>  June 12, 2017</div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="item-widget-popular-post-cms">
                        <div class="item-img-cms">
                            <a href="chitiet-tintuc.php"><img src="images/best-seller/4.jpg" alt=""></a>
                        </div>
                        <div class="item-caption">
                            <h4><a href="chitiet-tintuc.php">Benefits of regular checkups</a></h4>
                            <div class="time"><i class="fa fa-calendar" aria-hidden="true"></i>  June 12, 2017</div>
                        </div>
                    </div>
                </li> -->
            </ul>
        </div>
    </aside>
</div>