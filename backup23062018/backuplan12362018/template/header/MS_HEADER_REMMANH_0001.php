<!--MENU MOBILE-->
<?php include_once DIR_MENU."MS_MENU_REMMANH_0002.php"; ?>
<!-- End menu mobile-->

<!--MENU DESTOP-->
<link rel="stylesheet" href="/plugin/animsition/css/animate.css">
<header>
    <div class="gb-header-between_remmanh">
        <div class="container">
            <div class="row">
                <div class="col-md-2 col-sm-4">
                    <div class="gb-header-between_remmanh-logo">
                        <h1><a href=""><img src="/images/<?= $rowConfig['web_logo'] ?>" alt="" class="img-responsive"></a></h1>
                    </div>
                </div>
                <div class="col-md-10  col-sm-8 col-xs-12 pull-right">
                    <div class="gb-header-between_remmanh-right">
                        <div class="gb-header-hotline_remmanh">
                            <div class="icons">
                                <i class="fa fa-phone" aria-hidden="true"></i>
                            </div>
                            <p>
                                Hotline hỗ trợ tư vấn <br>
                                <span><?= $rowConfig['content_home3']?></span>
                            </p>

                        </div>
                        <div class="gb-header-dathang_remmanh">
                            <a href="">Đặt hàng</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include_once DIR_MENU."MS_MENU_REMMANH_0001.php"; ?>
</header>