<?php 
 $news_related = $action_news->getListNewsRelate_byIdCat_hasLimit($row['newscat_id'], 3);
?>
<div class="gb-relate-post-cms">
    <h2 class="title-blog">Relate post</h2>
    <div class="gb-relate-post-cms-body">
        <div class="row">
        <?php 
        foreach ($news_related as $item) { 
            $action_news1 = new action_news(); 
            $rowLang1 = $action_news1->getNewsLangDetail_byId($item['news_id'],$lang);
            $row1 = $action_news1->getNewsDetail_byId($item['news_id'],$lang);
        ?>
            <div class="col-md-4">
                <div class="grid-item-cms">
                    <!--===========================================-->
                    <div class="blog-grid-item-cms">
                        <article class="post type-post">
                            <div class="content-inner">
                                <div class="uni-entry-top-cms">
                                    <div class="thumbnail-img">
                                        <a href="/<?= $rowLang1['friendly_url'] ?>" title="">
                                            <img src="/images/<?= $row1['news_img'] ?>" alt="" title="" class="img-responsive">
                                        </a>
                                    </div>
                                </div>

                                <div class="uni-entry-body-cms">
                                    <div class="uni-entry-content-cms">

                                        <header class="uni-entry-header">
                                            <h2 class="uni-entry-title">
                                                <a href="/<?= $rowLang1['friendly_url'] ?>" rel=""><?= $rowLang1['lang_news_name'] ?></a>
                                            </h2>
                                        </header>

                                        <div class="uni-entry-meta">
                                                                <span class="uni-author">
                                                                    <a href="/<?= $rowLang1['friendly_url'] ?>" rel="author"><i class="fa fa-calendar" aria-hidden="true"></i> <?= substr($row1['news_created_date'], 0, 10) ?></a>
                                                                </span>
                                        </div>
                                        <div class="uni-entry-summary">
                                            <p<?= $rowLang1['lang_news_des'] ?>
                                                <span class="readmore"><a href="/<?= $rowLang1['friendly_url'] ?>">[ Read More ]</a></span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
            <?php } ?>
            
        </div>
    </div>
</div>