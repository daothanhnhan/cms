<?php 
    $action_lang = new action_lang();
    $url_lang = $action_lang->get_url_lang_newsDetail($slug, $lang);
?>
<input type="hidden" name="lang_current" id="lang_current" value="<?php echo $lang;?>">
<input type="hidden" name="url_lang" value="<?php echo $url_lang;?>" id="url_lang">

<div class="gb-single-blog-right_vyhofoco">
    <div class="gb-single-blog-right_vyhofoco-img">
        <img src="/images/<?= $row['news_img'] ?>" alt="" class="img-responsive">
    </div>
    <div class="gb-single-blog-right_vyhofoco-title">
        <h2><?= $rowLang['lang_news_name'] ?></h2>
    </div>
    <div class="gb-single-blog-right_vyhofoco-info">
        <ul>
            <li><i class="fa fa-user" aria-hidden="true"></i><a href="#"> Admin</a></li>
            <li><i class="fa fa-clock-o" aria-hidden="true"></i><a href="#">
                <?= date('M, d, Y', strtotime($row['news_created_date']))  ?></a></li>
            <li><i class="fa fa-folder-open-o" aria-hidden="true"></i><a href="#"> <?= $news_cat['newscat_name'] ?></a></li>
        </ul>
    </div>
    <div class="gb-single-blog-right_vyhofoco-text">
         <?= $rowLang['lang_news_content'] ?>
    </div>

    <div class="gb-single-blog-share">
        <div class="row">
            <div class="col-md-12">
                <?php include DIR_SOCIAL."MS_SOCIAL_VYHOFOCO_0002.php";?>
            </div>
        </div>
    </div>
</div>