<?php include DIR_BREADCRUMBS."MS_BREADCRUMS_LDPVNHOMES_0001.php";?>
<?php 
    $action_news = new action_news(); 
    $slug = isset($_GET['slug']) ? $_GET['slug'] : '';

    $rowLang = $action_news->getNewsLangDetail_byUrl($slug,$lang);
    $row_news = $action_news->getNewsDetail_byId($rowLang['news_id'],$lang);
    $_SESSION['sidebar'] = 'newsDetail';
    $news_breadcrumb = $action_news->getNewsCatLangDetail_byId($row_news['newscat_id'], $lang);
    $breadcrumb_url = $news_breadcrumb['friendly_url'];
    $breadcrumb_name = $news_breadcrumb['lang_newscat_name'];
    $use_breadcrumb = true;

    $action_lang = new action_lang();
    $url_lang = $action_lang->get_url_lang_newsDetail($slug, $lang);
?>
<input type="hidden" name="lang_current" id="lang_current" value="<?php echo $lang;?>">
<input type="hidden" name="url_lang" value="<?php echo $url_lang;?>" id="url_lang">
<div class="gb-single-blog_ldpvinhome">
    <div class="container">
        <div class="row">
            <div class="col-md-8 gb-single-blog_ldpvinhome-right">
                <div class="gb-single-blog_ldpvinhome-right-img">
                    <img src="/images/<?= $row_news['news_img'] ?>" alt="" class="img-responsive">
                </div>
                <div class="gb-single-blog_ldpvinhome-right-title">
                    <h2><?= $rowLang['lang_news_name'] ?></h2>
                </div>
                <div class="gb-single-blog_ldpvinhome-right-info">
                    <ul>
                        <li><i class="fa fa-user" aria-hidden="true"></i><a href="#"> Admin</a></li>
                        <li><i class="fa fa-clock-o" aria-hidden="true"></i><a href="#"> <?= date('d/m/Y', strtotime($row_news['news_created_date']))  ?></a></li>
                        <li><i class="fa fa-folder-open-o" aria-hidden="true"></i><a href="#"> Design, Graphic</a></li>
                        <li><i class="fa fa-comment-o" aria-hidden="true"></i><a href="#"> 5 comments</a></li>
                    </ul>
                </div>
                <div class="gb-single-blog_ldpvinhome-right-text">
                    <?= $rowLang['lang_news_content'] ?>
                </div>
                <div class="gb-single-blog_ldpvinhome-share">
                    <div class="row">
                        <div class="col-md-5 gb-single-blog_ldpvinhome-share-left">
                            <ul>
                                <li><a href="#">Finance</a></li>
                                <li><a href="#">Business</a></li>
                                <li><a href="#">Photo</a></li>
                            </ul>
                        </div>
                        <div class="col-md-5 col-md-offset-2 gb-single-blog_ldpvinhome-share-right">
                            <ul>
                                <li><span><i class="fa fa-share-alt" aria-hidden="true"></i> share</span></li>
                                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!--bình luận-->
                <?php include DIR_EMAIL."MS_EMAIL_LDPVINHOMES_0003.php";?>

                <!--tin tức liên quan-->
                <?php include DIR_NEWS."MS_NEWS_LDPVINHOMES_0003.php";?>

            </div>
            <div class="col-md-4 gb-blog-left">
                <?php include DIR_SIDEBAR."MS_SIDEBAR_VNHOMES_0001.php";?>
                <?php include DIR_SIDEBAR."MS_SIDEBAR_LDPVNHOMES_0002.php";?>
                <?php include DIR_SIDEBAR."MS_SIDEBAR_LDPVNHOMES_0003.php";?>
                <?php include DIR_BANNER."MS_BANNER_LDPVNHOMES_0003.php";?>
            </div>
        </div>
    </div>
</div>