<?php 
    function listProductTag ($lang) {
        global $conn_vn;
        $sql = "SELECT * FROM producttag INNER JOIN producttag_languages ON producttag.producttag_id = producttag_languages.producttag_id Where producttag_languages.languages_code = '$lang'";
        $result = mysqli_query($conn_vn, $sql);
        $rows = array();
        while ($row = mysqli_fetch_assoc($result)) {
            $rows[] = $row;
        }
        return $rows;
    }

    $list_producttag = listProductTag($lang);//var_dump($list_producttag);die;
?>
<div class="gb-loctheogia-cms">
    <aside class="widget">
        <h3 class="widget-title-cms">thương hiệu</h3>
        <div class="widget-content">
            <div id="filterprice" class="collapse in">
                <ul class="list-group">
                    <?php foreach ($list_producttag as $item) { ?>
                    <li class="list-group-item"><a href="/<?= $item['friendly_url'] ?>"><?= $item['lang_producttag_name'] ?></a></li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </aside>
</div>