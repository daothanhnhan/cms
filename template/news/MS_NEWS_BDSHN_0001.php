<?php
    $news = new action_product();
    $list_news_hot = $news->getListProductHot_hasLimit(50);
?>
<div class="gb-batdongsanhanoi-tinhot_bdshn">
    <div class="row">
        <div class="col-md-8">
            <div class="gb-batdongsanhanoi-tinhot_bdshn-left">
                <div class="title_bdshn">
                    Bất động sản hà nội - Tin hot
                </div>
                <div class="gb-tieude-tinh_bdshn">
                    <div class="row">
                        <div class="col-md-8 col-sm-8 col-xs-7"> Tiêu đề</div>
                        <div class="col-md-4 col-sm-4 col-xs-5"> Tỉnh/ Huyện</div>
                    </div>
                </div>
                <div class="gb-batdongsanhanoi-tinhot_bdshn-left-content">
                    <marquee direction="up" behavior="Scroll" scrollamount="5" onmouseover="this.stop()" onmouseout="this.start()" width="100%" height="590px">
                        <ul>
                            <?php
                                foreach ($list_news_hot as $item) {
                            ?>
                                <li>
                                    <div class="gb-batdongsanhanoi-tinhot_bdshn-left-content-item">
                                        <div class="row">
                                            <div class="col-md-8 col-sm-8 col-xs-7">
                                                <a href="chi-tiet-du-an">
                                                    <?= $item['product_name'] ?>
                                                    <img src="images/hot.gif" alt=""> <img src="images/vip.gif" alt="">
                                                </a>
                                            </div>
                                            <div class="col-md-4 col-sm-4 col-xs-5"> <p><?= $item['product_material'] ?></p></div>
                                        </div>
                                    </div>
                                </li>
                            <?php } ?>
                        </ul>
                    </marquee>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="gb-batdongsanhanoi-tinhot_bdshn-right">
                <?php include DIR_BANNER."MS_BANNER_BDSHN_0020.php";?>
            </div>
        </div>
    </div>
</div>