<?php 
    $action_lang = new action_lang();
    $url_lang = $action_lang->get_url_lang_serviceDetail($slug, $lang);
?>
<input type="hidden" name="lang_current" id="lang_current" value="<?php echo $lang;?>">
<input type="hidden" name="url_lang" value="<?php echo $url_lang;?>" id="url_lang">
<div class="gb-chitietblog-content-cms">
    <h1><?= $rowLang['lang_service_name'] ?></h1>

    <div class="gb-chitietblog-content-cms-video">
        <!-- <iframe width="100%" height="500" src="https://www.youtube.com/embed/g20t_K9dlhU" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe> -->
        <img src="/images/<?= $row['service_img'] ?>" alt="<?= $rowLang['lang_service_name'] ?>" width="50%">
    </div>
    <!-- <p>
        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
        been the industry's standard dummy text ever since the 1500s, when an unknown printer took a
        galley of type and scrambled it to make a type specimen book. It has survived not only five
        centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It
        was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages,
        and more recently with desktop publishing software like Aldus PageMaker including versions of
        Lorem Ipsum. <br> <br>

        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
        been the industry's standard dummy text ever since the 1500s, when an unknown printer took a
        galley of type and scrambled it to make a type specimen book. It has survived not only five
        centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It
        was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages,
        and more recently with desktop publishing software like Aldus PageMaker including versions of
        Lorem Ipsum. <br> <br>

        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
        been the industry's standard dummy text ever since the 1500s, when an unknown printer took a
        galley of type and scrambled it to make a type specimen book. It has survived not only five
        centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It
        was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages,
        and more recently with desktop publishing software like Aldus PageMaker including versions of
        Lorem Ipsum.
    </p> -->
    <div>
        <?= $rowLang['lang_service_content'] ?>
    </div>

    <?php include_once DIR_SOCIAL.'MS_SOCIAL_0002.php';?>

</div>