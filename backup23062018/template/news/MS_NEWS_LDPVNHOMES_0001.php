<?php include DIR_BREADCRUMBS."MS_BREADCRUMS_LDPVNHOMES_0001.php";?>
<div class="gb-page-blog_ldpvinhome">
    <div class="container">
        <div class="row">
            <?php 
                $action = new action();
                $action_news = new action_news();     
                if (isset($_GET['slug']) && $_GET['slug'] != '') {
                    $slug = $_GET['slug'];
                    $rowCatLang = $action_news->getNewsCatLangDetail_byUrl($slug,$lang);
                    $rowCat = $action_news->getNewsCatDetail_byId($rowCatLang[$nameColIdNewsCat_newsCatLanguage],$lang);
                    if (newsCatPageHasSub) {
                        $rows = $action_news->getNewsList_byMultiLevel_orderNewsId($rowCat[$nameColId_newsCat],'desc',$trang,6,$slug);
                    } else {
                        $rows = $action_news->getNewsCat_byNewsCatIdParentHighest($rowCat[$nameColId_newsCat],'desc');
                    }
                }
                else $rows = $action->getList($nameTable_news,'','',$nameColId_news,'desc',$trang,6,'news-cat'); 
            ?>
                <?php if (newsCatPageHasSub) { ?>
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
                            <div class="gb-news-blog_ldpvinhome-item">
                                <div class="gb-news-blog_ldpvinhome-item-img">
                                    <a href="/<?= $rowLang1['friendly_url'] ?>">
                                        <img src="/images/<?= $row1['news_img'] ?>" class="img-responsive">
                                    </a>
                                    <div class="caption caption-large">
                                        <time class="the-date"><?= date('d/m/Y', strtotime( $row1['news_created_date'])) ?></time>
                                    </div>
                                </div>
                                <div class="gb-news-blog_ldpvinhome-item-text">
                                    <div class="gb-news-blog_ldpvinhome-item-title">
                                        <h3><a href="/<?= $rowLang1['friendly_url'] ?>"><?= $rowLang1['lang_news_name'] ?></a></h3>
                                    </div>
                                    <div class="gb-news-blog_ldpvinhome-item-text-des">
                                        <p><?= $rowLang1['lang_news_des'] ?></p>
                                    </div>
                                </div>
                                <div class="gb-news-blog_ldpvinhome-item-button">
                                    <a href="/<?= $rowLang1['friendly_url'] ?>">
                                        <button type="button" class="btn gb-btn-readmore">ĐỌC TIẾP</button>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                </div>
            <?php }else{ ?>
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
                            <div class="gb-news-blog_ldpvinhome-item">
                                <div class="gb-news-blog_ldpvinhome-item-img">
                                    <a href="/<?= $rowLang1['friendly_url'] ?>">
                                        <img src="/images/<?= $row1['news_img'] ?>" class="img-responsive">
                                    </a>
                                    <div class="caption caption-large">
                                        <time class="the-date"><?= date('d/m/Y', strtotime( $row1['news_created_date'])) ?></time>
                                    </div>
                                </div>
                                <div class="gb-news-blog_ldpvinhome-item-text">
                                    <div class="gb-news-blog_ldpvinhome-item-title">
                                        <h3><a href="/<?= $rowLang1['friendly_url'] ?>"><?= $rowLang1['lang_news_name'] ?></a></h3>
                                    </div>
                                    <div class="gb-news-blog_ldpvinhome-item-text-des">
                                        <p><?= $rowLang1['lang_news_des'] ?></p>
                                    </div>
                                </div>
                                <div class="gb-news-blog_ldpvinhome-item-button">
                                    <a href="/<?= $rowLang1['friendly_url'] ?>">
                                        <button type="button" class="btn gb-btn-readmore">ĐỌC TIẾP</button>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                </div>
            <?php } ?>
            <div class="col-md-4">
                <?php include DIR_SIDEBAR."MS_SIDEBAR_VNHOMES_0001.php";?>
                <?php include DIR_SIDEBAR."MS_SIDEBAR_LDPVNHOMES_0002.php";?>
                <?php include DIR_SIDEBAR."MS_SIDEBAR_LDPVNHOMES_0003.php";?>
                <?php include DIR_BANNER."MS_BANNER_LDPVNHOMES_0003.php";?>
            </div>
        </div>
    </div>
</div>