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

<div class="gb-tintuc-sukien-cms-right-cms">
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
        <div class="grid-item-cms col-md-6">
            <!--===========================================-->
            <div class="blog-grid-item-cms">
                <article class="post type-post">
                    <div class="content-inner">
                        <div class="uni-entry-top-cms">
                            <div class="thumbnail-img">
                                <a href="/<?= $rowLang1[$nameColUrlNews_newsLanguage] ?>" title="">
                                    <img src="/images/<?= $row1['news_img'] ?>" alt="" title="" class="img-responsive">
                                </a>
                            </div>
                        </div>

                        <div class="uni-entry-body-cms">
                            <div class="uni-entry-content-cms">

                                <header class="uni-entry-header">
                                    <h2 class="uni-entry-title">
                                        <a href="/<?= $rowLang1[$nameColUrlNews_newsLanguage] ?>" rel=""><?= $rowLang1[$nameColLangNewsName_newsLanguage] ?></a>
                                    </h2>
                                </header>

                                <div class="uni-entry-meta">
                                                <span class="uni-author">
                                                    <a href="/<?= $rowLang1[$nameColUrlNews_newsLanguage] ?>" rel="author"><i class="fa fa-calendar" aria-hidden="true"></i> june 21, 2017</a>
                                                </span>
                                    <span class="uni-comment-total">
                                                    <a href="/<?= $rowLang1[$nameColUrlNews_newsLanguage] ?>" class="comments-link"><i class="fa fa-user" aria-hidden="true"></i> admin</a>
                                                </span>
                                    <span class="uni-entry-folder"><a href="/<?= $rowLang1[$nameColUrlNews_newsLanguage] ?>"><i class="fa fa-comment" aria-hidden="true"></i> 2 comments</a></span>
                                </div>
                                <div class="uni-entry-summary">
                                    <p><?= $rowLang1['lang_news_des'] ?>
                                        <span class="readmore"><a href="/<?= $rowLang1[$nameColUrlNews_newsLanguage] ?>">[ Read More ]</a></span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </article>
            </div>
        </div>
        <?php if ($d%2==0) {echo '<hr style="width:100%;">';} ?>
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
        <div class="grid-item-cms col-md-6">
            <!--===========================================-->
            <div class="blog-grid-item-cms">
                <article class="post type-post">
                    <div class="content-inner">
                        <div class="uni-entry-top-cms">
                            <div class="thumbnail-img">
                                <a href="/<?= $rowLang1['friendly_url'] ?>" title="">
                                    <img src="/images/<?= $row1['newscat_img'] ?>" alt="" title="" class="img-responsive">
                                </a>
                            </div>
                        </div>

                        <div class="uni-entry-body-cms">
                            <div class="uni-entry-content-cms">

                                <header class="uni-entry-header">
                                    <h2 class="uni-entry-title">
                                        <a href="/<?= $rowLang1['friendly_url'] ?>" rel=""><?= $rowLang1['lang_newscat_name'] ?></a>
                                    </h2>
                                </header>

                                <div class="uni-entry-meta">
                                                <span class="uni-author">
                                                    <a href="/<?= $rowLang1['friendly_url'] ?>" rel="author"><i class="fa fa-calendar" aria-hidden="true"></i> june 21, 2017</a>
                                                </span>
                                    <span class="uni-comment-total">
                                                    <a href="/<?= $rowLang1['friendly_url'] ?>" class="comments-link"><i class="fa fa-user" aria-hidden="true"></i> admin</a>
                                                </span>
                                    <span class="uni-entry-folder"><a href="/<?= $rowLang1['friendly_url'] ?>"><i class="fa fa-comment" aria-hidden="true"></i> 2 comments</a></span>
                                </div>
                                <div class="uni-entry-summary">
                                    <p><?= $rowLang1['lang_news_des'] ?>
                                        <span class="readmore"><a href="/<?= $rowLang1['friendly_url'] ?>">[ Read More ]</a></span>
                                    </p>
                                </div>
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
    <?php include_once DIR_TEMPLATES_PAGINATION."MS_PAGINATION_0001.php";?>
</div>