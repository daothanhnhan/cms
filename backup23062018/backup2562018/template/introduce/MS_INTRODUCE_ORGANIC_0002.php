<?php 
     $action_page = new action_page(); 
    $slug = isset($_GET['slug']) ? $_GET['slug'] : '';

    $rowLang = $action_page->getPageLangDetail_byUrl($slug,$lang);
    $row = $action_page->getPageDetail_byId($rowLang['news_id'],$lang);
    $_SESSION['sidebar'] = 'pageDetail';

    $action_lang = new action_lang();
    $url_lang = $action_lang->get_url_lang_page($slug, $lang);
?>
<input type="hidden" name="lang_current" id="lang_current" value="<?php echo $lang;?>">
<input type="hidden" name="url_lang" value="<?php echo $url_lang;?>" id="url_lang">
<?php include DIR_BREADCRUMBS."MS_BREADCRUMS_ORGANIC_0001.php";?>
<div class="gb-home-introduce">
    <div class="container">
        <div class="row">
            <div class="content-about">
                <?= $rowLang['lang_page_content'] ?>
            </div>
        </div>
    </div>
</div>