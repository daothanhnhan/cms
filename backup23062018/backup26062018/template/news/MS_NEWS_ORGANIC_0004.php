<?php 
    $action = new action();
    $action_news = new action_news();     
    if (isset($_GET['slug']) && $_GET['slug'] != '') {
        $slug = $_GET['slug'];
        $rowCatLang = $action_news->getNewsCatLangDetail_byUrl($slug,$lang);
        $rowCat = $action_news->getNewsCatDetail_byId($rowCatLang[$nameColIdNewsCat_newsCatLanguage],$lang);
        if (newsCatPageHasSub) {
            $rows = $action_news->getNewsList_byMultiLevel_orderNewsId($rowCat[$nameColId_newsCat],'asc',$trang,6,$slug);
        } else {
            $rows = $action_news->getNewsCat_byNewsCatIdParentHighest($rowCat[$nameColId_newsCat],'asc');//var_dump($rows);die;
        }        
    }
    else $rows = $action->getList($nameTable_news,'','',$nameColId_news,'asc',$trang,6,'news-cat'); 
?>


<?php include DIR_BREADCRUMBS."MS_BREADCRUMS_ORGANIC_0001.php";?>
<div class="gb-page-blog_organic">
    <div class="container">
        <div class="row">
            <?php if(newsCatPageHasSub){?>
                <input type="hidden" name="lang_current" id="lang_current" value="<?php echo $lang;?>">
                <input type="hidden" name="url_lang" value="<?php echo $url_lang;?>" id="url_lang"> 
                <div class="col-md-8">
                    <div class="row">
                        <?php 
                            $d = 0;
                            foreach ($rows['data'] as $item) { 
                                $d++;
                                $action_news1 = new action_news(); 
                                $rowLang1 = $action_news1->getNewsLangDetail_byId($item['news_id'],$lang);
                                $row1 = $action_news1->getNewsDetail_byId($item['news_id'],$lang);
                        ?>
                            <div class="col-sm-6">
                                <div class="gb-news-blog_organic-item">
                                    <div class="gb-news-blog_organic-item-img">
                                        <a href="/<?= $rowLang1['friendly_url'] ?>">
                                            <img src="/images/<?= $row1['news_img'] ?>" class="img-responsive">
                                        </a>
                                        <div class="caption caption-large">
                                            <time class="the-date"><?= date('d-m-Y', strtotime($row1['news_created_date']))  ?></time>
                                        </div>
                                    </div>
                                    <div class="gb-news-blog_organic-item-text">
                                        <div class="gb-news-blog_organic-item-title">
                                            <h3>
                                                <a href="/<?= $rowLang1['friendly_url'] ?>">
                                                    <?= $rowLang1['lang_news_name'] ?>
                                                </a>
                                            </h3>
                                        </div>
                                        <div class="gb-news-blog_organic-item-text-des">
                                            <p><?= $rowLang1['lang_news_des'] ?></p>
                                        </div>
                                    </div>
                                    <div class="gb-news-blog_organic-item-button">
                                        <a href="/<?= $rowLang1['friendly_url'] ?>">
                                            <button type="button" class="btn gb-btn-readmore">ĐỌC TIẾP</button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                        <?php include DIR_PAGINATION."MS_PAGINATION_ORGANIC_0001.php";?>
                    </div>
                </div>
            <?php }else{?>
                <div class="col-md-8">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="gb-news-blog_organic-item">
                                <div class="gb-news-blog_organic-item-img">
                                    <a href="chi-tiet-tin-tuc"><img src="/images/image-7-770x550.jpg" class="img-responsive"></a>
                                    <div class="caption caption-large">
                                        <time class="the-date">15/4/2017</time>
                                    </div>
                                </div>
                                <div class="gb-news-blog_organic-item-text">
                                    <div class="gb-news-blog_organic-item-title">
                                        <h3><a href="chi-tiet-tin-tuc">GRAPHIC DESIGN- NGHỀ ĐANG HOT NHẤT HIỆN NAY</a></h3>
                                    </div>
                                    <div class="gb-news-blog_organic-item-text-des">
                                        <p>Let’s see what Chef Dee got that they don’t want us to eat. Eliptical talk.
                                            Hammock talk come soon. Always remember in the jungle there’s...</p>
                                    </div>
                                </div>
                                <div class="gb-news-blog_organic-item-button">
                                    <a href="chi-tiet-tin-tuc">
                                        <button type="button" class="btn gb-btn-readmore">ĐỌC TIẾP</button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
            <div class="col-md-4">
                <?php include DIR_SIDEBAR."MS_SIDEBAR_ORGANIC_0001.php";?>
                <?php include DIR_SIDEBAR."MS_SIDEBAR_ORGANIC_0002.php";?>
                <?php include DIR_SIDEBAR."MS_SIDEBAR_ORGANIC_0003.php";?>
            </div>
        </div>
    </div>
</div>