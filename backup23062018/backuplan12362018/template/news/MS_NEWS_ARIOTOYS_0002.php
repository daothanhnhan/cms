<?php 
    $action_lang = new action_lang();
    $url_lang = $action_lang->get_url_lang_newsDetail($slug, $lang);
?>
<input type="hidden" name="lang_current" id="lang_current" value="<?php echo $lang;?>">
<input type="hidden" name="url_lang" value="<?php echo $url_lang;?>" id="url_lang">
<div class="gb-chitietblog-content_ariotoys">
    <h1><?= $rowLang['lang_news_name'] ?></h1>

    <div class="gb-chitietblog-content_ariotoys-video">
        <!-- <iframe width="100%" height="500" src="https://www.youtube.com/embed/g20t_K9dlhU" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe> -->
        <!-- <img src="/images/<?= $row['news_img'] ?>" alt="<?= $rowLang['lang_news_name'] ?>" width="100%"> -->
    </div>

    <div class="news-content_ariotoys">
        <?= $rowLang['lang_news_content'] ?>
    </div>

    <?php include_once DIR_SOCIAL.'MS_SOCIAL_0002.php';?>

</div>