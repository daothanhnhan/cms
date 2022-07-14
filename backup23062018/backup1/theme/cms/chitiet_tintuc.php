<?php 
    $action_news = new action_news(); 
    $slug = isset($_GET['slug']) ? $_GET['slug'] : '';

    $rowLang = $action_news->getNewsLangDetail_byUrl($slug,$lang);
    $row = $action_news->getNewsDetail_byId($rowLang['news_id'],$lang);
    $_SESSION['sidebar'] = 'newsDetail';
    $news_breadcrumb = $action_news->getNewsCatLangDetail_byId($row['newscat_id'], $lang);
    $breadcrumb_url = $news_breadcrumb['friendly_url'];
    $breadcrumb_name = $news_breadcrumb['lang_newscat_name'];
    $use_breadcrumb = true;
?>
<div class="gb-chitiet_tintuc-cms">

    <?php include_once DIR_BREADCRUMS.'MS_BREADCRUM_0005.php';?>

    <div class="gb-chitiet_tintuc-cms-content">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="gb-chitiet-tintuc-body-cms">

                        <?php include_once DIR_NEWS.'MS_NEWS_0005.php';?>


                        <!--RELATED POST-->
                        <?php include_once DIR_NEWS.'MS_NEWS_0006.php';?>

                    </div>
                </div>
                <div class="col-md-4">
                    <?php include_once DIR_SIDEBAR.'MS_SIDEBAR_0001.php';?>
                    <?php include_once DIR_SIDEBAR.'MS_SIDEBAR_0002.php';?>
                    <?php include_once DIR_SIDEBAR.'MS_SIDEBAR_0003.php';?>
                    <?php //include_once DIR_SIDEBAR.'MS_SIDEBAR_0004.php';?>
                    <?php //include_once DIR_SIDEBAR.'MS_SIDEBAR_0005.php';?>
                    <?php //include_once DIR_SIDEBAR.'MS_SIDEBAR_0006.php';?>
                </div>
            </div>
        </div>
    </div>
</div>