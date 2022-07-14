<!--MENU MOBILE-->
<?php include_once DIR_MENU."MS_MENU_NAUSTORE_0002.php"; ?>
<!-- End menu mobile-->

<!--MENU DESTOP-->
<header>
    <div class="gb-header-naustore">
        <div class="gb-top-header_naustore">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-4">
                        <?php include DIR_SOCIAL."MS_SOCIAL_NAUSTORE_0001.php";?>
                    </div>
                    <div class="col-md-8 col-sm-8">
                        <div class="gb-top-header_naustore-right">
                            <ul>
                                <?php
                                    if(isset($_SESSION['user_name_gbvn'])){
                                ?>
                                    <li><a href="/thong-tin-ca-nhan"><i class="fa fa-user" aria-hidden="true"></i> <?= $_SESSION['user_name_gbvn'] ?></a></li>
                                <?php
                                    }else{
                                ?>
                                <li><a href="/login"><i class="fa fa-user" aria-hidden="true"></i> Tài khoản</a></li>
                                <?php } ?>
                                <li><a href="tel:0966245515"><i class="fa fa-phone" aria-hidden="true"></i> Bạn cần tư vấn ? Liên hệ chúng tôi <?= $rowConfig['content_home3'] ?></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="gb-header-between_naustore">
            <div class="container">
                <div class="row">
                    <div class="col-md-2 col-sm-12">
                        <div class="gb-header-between_naustore-left">
                            <h1>
                                <a href="/"><img src="/images/<?= $rowConfig['web_logo'] ?>" alt="" class="img-responsive"></a>
                            </h1>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-7">
                        <?php include DIR_CONTACT."MS_CONTACT_NAUSTORE_0004.php";?>
                    </div>
                    <div class="col-md-4  col-sm-5">
                        <div class="gb-header-between_naustore-right">
                            <ul>
                                <li>
                                    <?php include DIR_CART."MS_CART_NAUSTORE_0003.php";?>
                                </li>
                                <li>
                                    <?php include DIR_CART."MS_CART_NAUSTORE_0004.php";?>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="gb-header-bottom_naustore">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <div class="gb-header-bottom_naustore-menu">
                            <?php include DIR_MENU."MS_MENU_NAUSTORE_0001.php";?>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="gb-header-bottom_naustore-search">
                            <?php include DIR_SEARCH."MS_SEARCH_NAUSTORE_0002.php"?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<script src="/plugin/sticky/jquery.sticky.js"></script>
<script>
    $(document).ready(function () {
        $(".sticky-menu").sticky({topSpacing:0});
    });
</script>