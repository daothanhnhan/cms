<?php 
     $action_page = new action_page(); 
    $slug = isset($_GET['slug']) ? $_GET['slug'] : '';

    $rowLang = $action_page->getPageLangDetail_byUrl($slug,$lang);
    $row = $action_page->getPageDetail_byId($rowLang['news_id'],$lang);
    $_SESSION['sidebar'] = 'pageDetail';

    $action_lang = new action_lang();
    $url_lang = $action_lang->get_url_lang_page($slug, $lang);
?>
<!--WHO WE ARE-->
<div class="uni-about-cms-who-are-you-cms">
    <input type="hidden" name="lang_current" id="lang_current" value="<?php echo $lang;?>">
    <input type="hidden" name="url_lang" value="<?php echo $url_lang;?>" id="url_lang">
    <div class="container">
        <div class="uni-services-title-cms">
            <h3><?= $rowLang['lang_page_name'] ?></h3>
        </div>
        <div class="row">
            <div class="col-md-12"><?= $rowLang['lang_page_content'] ?></div>
        </div>
    </div>
</div>