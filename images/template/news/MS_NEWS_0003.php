<?php 
    $path = dirname(__FILE__) . '/..';
    // // echo $path;
    $directories = glob($path . '/*' , GLOB_ONLYDIR);
    // echo '<pre>';
    // // var_dump($directories);
    $folder = array();
    foreach ($directories as $item) {
        $folder[] = substr($item, 79);
    }
    // var_dump($folder);
    // $str = "asdfgsfdg ";
    // echo $str;
    // echo substr($str, 0, 5);
?>
<!--ICONS BOX-->
<div class="gb-content-box-cms">
    <div class="container">

        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="title">
                    <h2>ICONS BOX</h2>
                    <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames
                        ac turpis egestas. Vestibulum tortor quam. Pellentesque habitant morbi tristique senectus et netus et malesuada fames
                        ac turpis egestas. Vestibulum tortor quam.</p>
                </div>
            </div>
        </div>

        <div class="row">
            <?php foreach ($folder as $item) { ?>
            <div class="col-md-3">
                <a href="/list-file/<?= $item ?>" class="gb-icons-box-item">
                    <div class="item-content">
                        <h4><?= $item ?></h4>
                        <div class="uni-line"></div>
                    </div>
                </a>
            </div>
            <?php } ?>
        </div>
    </div>
</div>