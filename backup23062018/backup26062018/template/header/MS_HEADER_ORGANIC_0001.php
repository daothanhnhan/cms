<!--MENU MOBILE-->
<?php include_once DIR_MENU."MS_MENU_ORGANIC_0002.php"; ?>
<!-- End menu mobile-->

<!--MENU DESTOP-->
<header>
    <div class="gb-top-header_organic">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="gb-top-header_organic-left">
                        <ul>
                            <li><a href="/gioi-thieu">Giới thiệu</a></li>
                            <li><a href="/lien-he">Liên hệ</a></li>
                            <li><a href="/tin-tuc">Tin tức</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="gb-top-header_organic-right">
                        <div class="gb-top-header_organic-right-resginterlogin">
                            <ul>
                                <?php include DIR_CART."MS_CART_ORGANIC_0005.php";?>
                                <li><a href="/thanh-toan"><i class="fa fa-usd" aria-hidden="true"></i> Thanh toán</a></li>
                                <?php
                                    if(isset($_SESSION['user_name_gbvn'])){
                                ?>
                                    <li><a href="/thong-tin-ca-nhan"><i class="fa fa-user" aria-hidden="true"></i> <?= $_SESSION['user_name_gbvn'] ?></a></li>  
                                <?php
                                    }else{
                                ?>
                                    <li><a href="/register"><i class="fa fa-pencil" aria-hidden="true"></i> Register</a></li>
                                    <li><a href="/login"><i class="fa fa-user" aria-hidden="true"></i>Login</a></li>
                                <?php } ?>
                            </ul>
                        </div>
                        <?php include DIR_SOCIAL."MS_SOCIAL_ORGANIC_0001.php";?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="gb-header-between_organic">
        <div class="container">
            <h1>
                <a href="/"><img src="/images/<?= $rowConfig['web_logo'] ?>" alt="" class="img-responsive"></a>
            </h1>
        </div>
    </div>
    <div class="gb-header-bottom_organic">
        <div class="container">
            <?php include DIR_MENU."MS_MENU_ORGANIC_0001.php";?>
        </div>
    </div>
</header>

<script src="/plugin/sticky/jquery.sticky.js"></script>
<script>
    $(document).ready(function () {
        $(".sticky-menu").sticky({topSpacing:0});
    });
</script>