<?php
    $action = new action();
    $action_news = new action_news();     
    if (isset($_GET['slug']) && $_GET['slug'] != '') {
        $slug = $_GET['slug'];//echo 'tuan';die;                    
        $rowCatLang = $action_news->getNewsCatLangDetail_byUrl($slug,$lang);
        $rowCat = $action_news->getNewsCatDetail_byId($rowCatLang[$nameColIdNewsCat_newsCatLanguage],$lang);
        if (newsCatPageHasSub) {
            $rows = $action_news->getNewsList_byMultiLevel_orderNewsId($rowCat[$nameColId_newsCat],'desc',$trang,6,$slug);
        } else {
            $rows = $action_news->getNewsCat_byNewsCatIdParentHighest($rowCat[$nameColId_newsCat],'desc');//var_dump($rows);die;
        }        
    }
    else $rows = $action->getList($nameTable_news,'','',$nameColId_news,'desc',$trang,6,'news-cat'); 
    // var_dump($rows);die;
?>
<?php 
    $action_lang = new action_lang();
    $url_lang = $action_lang->get_url_lang_newscat($slug, $lang);
?>

<div class="gb-tintuc-sukien-right_ariotoys">
<?php if (newsCatPageHasSub) { ?>
    <input type="hidden" name="lang_current" id="lang_current" value="<?php echo $lang;?>">
    <input type="hidden" name="url_lang" value="<?php echo $url_lang;?>" id="url_lang"> 
    <div class="row">
        <?php 
        $d = 0;
        foreach ($rows['data'] as $item) { 
            $d++;
        	$action_news1 = new action_news(); 
            $rowLang1 = $action_news1->getNewsLangDetail_byId($item['news_id'],$lang);
            $row1 = $action_news1->getNewsDetail_byId($item['news_id'],$lang);
        ?>
        <div class="grid-item_ariotoys col-md-4">
            <!--===========================================-->
            <div class="blog-grid-item_ariotoys">
                <article class="post type-post">
                    <div class="content-inner">
                        <div class="uni-entry-top_ariotoys">
                            <div class="thumbnail-img">
                                <a href="/<?= $rowLang1[$nameColUrlNews_newsLanguage] ?>" title="">
                                    <img src="/images/<?= $row1['news_img'] ?>" alt="" title="" class="img-responsive">
                                </a>
                            </div>
                        </div>

                        <div class="uni-entry-body">
                            <div class="uni-entry-content_ariotoys">

                                <header class="uni-entry-header_ariotoys">
                                    <h2 class="uni-entry-title_ariotoys">
                                        <a href="/<?= $rowLang1[$nameColUrlNews_newsLanguage] ?>" rel=""><?= $rowLang1[$nameColLangNewsName_newsLanguage] ?></a>
                                    </h2>
                                </header>

                                <div class="uni-entry-meta_ariotoys">
                                    <span class="uni-author_ariotoys">
                                        <a href="/<?= $rowLang1[$nameColUrlNews_newsLanguage] ?>" rel="author"><i class="fa fa-calendar" aria-hidden="true"></i><?= substr($row1['news_created_date'], 0 ,10) ?></a>
                                    </span>
                                    <span class="uni-comment-total_ariotoys">
                                        <a href="/<?= $rowLang1[$nameColUrlNews_newsLanguage] ?>" class="comments-link"><i class="fa fa-user" aria-hidden="true"></i> admin</a>
                                    </span>
                                   <!--  <span class="uni-entry-folder"><a href="/<?= $rowLang1[$nameColUrlNews_newsLanguage] ?>"><i class="fa fa-comment" aria-hidden="true"></i> 2 comments</a></span> -->
                                </div>
                                <div class="uni-entry-summary_ariotoys">
                                    <p><?= $rowLang1['lang_news_des'] ?></p>
                                    <span class="readmore"><a href="/<?= $rowLang1[$nameColUrlNews_newsLanguage] ?>">[ Read More ]</a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </article>
            </div>
        </div>
        <?php //if ($d%2==0) {echo '<hr style="width:100%;">';} ?>
        <?php } ?>
    </div>
<?php } else { ?>
    <div class="row">
        <?php 
        $d = 0;
        foreach ($rows as $item) { 
            $d++;
            $action_news1 = new action_news(); 
            $rowLang1 = $action_news1->getNewsCatLangDetail_byId($item,$lang);
            $row1 = $action_news1->getNewsCatDetail_byId($item,$lang);
        ?>
        <div class="grid-item_ariotoys col-md-6">
            <!--===========================================-->
            <div class="blog-grid-item_ariotoys">
                <article class="post type-post">
                    <div class="content-inner">
                        <div class="uni-entry-top_ariotoys">
                            <div class="thumbnail-img">
                                <a href="/<?= $rowLang1['friendly_url'] ?>" title="">
                                    <img src="/images/<?= $row1['newscat_img'] ?>" alt="" title="" class="img-responsive">
                                </a>
                            </div>
                        </div>

                        <div class="uni-entry-body">
                            <div class="uni-entry-content_ariotoys">
                                <header class="uni-entry-header_ariotoys">
                                    <h2 class="uni-entry-title_ariotoys">
                                        <a href="/<?= $rowLang1['friendly_url'] ?>" rel=""><?= $rowLang1['lang_newscat_name'] ?></a>
                                    </h2>
                                </header>

                               <!--  <div class="uni-entry-meta_ariotoys">
                                    <span class="uni-author_ariotoys">
                                        <a href="/<?= $rowLang1['friendly_url'] ?>" rel="author"><i class="fa fa-calendar" aria-hidden="true"></i> june 21, 2017</a>
                                    </span>
                                    <span class="uni-comment-total_ariotoys">
                                        <a href="/<?= $rowLang1['friendly_url'] ?>" class="comments-link"><i class="fa fa-user" aria-hidden="true"></i> admin</a>
                                    </span>
                                    <span class="uni-entry-folder"><a href="/<?= $rowLang1['friendly_url'] ?>"><i class="fa fa-comment" aria-hidden="true"></i> 2 comments</a></span>
                                </div> -->
                                <div class="uni-entry-summary_ariotoys">
                                    <p></p>
                                </div>
                                 <span class="readmore"><a href="/<?= $rowLang1['friendly_url'] ?>">[ Read More ]</a></span>
                            </div>
                        </div>
                    </div>
                </article>
            </div>
        </div>
        <?php if ($d%2==0) {echo '<hr style="width:100%;">';} ?>
        <?php } ?>
    </div>
<?php } ?>

    <!--PAGINATION-->
    <?php include_once DIR_TEMPLATES_PAGINATION."MS_PAGINATION_ARIOTOYS_0001.php";?>
</div>