<!--MENU MOBILE-->
<?php include_once DIR_MENU."MS_MENU_XDSHOP_0002.php"; ?>
<!-- End menu mobile-->

<!--MENU DESTOP-->
<header>
    <div class="gb-header_xdshop sticky-menu">
        <div class="gb-header_xdshop-topbar">
            <div class="container">
                <div class="logo_xdshop">
                    <h1><a href="/"><img src="/images/<?= $rowConfig['web_logo'] ?>" alt=""></a></h1>
                </div>
                <div class="gb-header_xdshop-topbar-right">
                    <ul>
                        <li class="header-topbar-email_xdshop"><a href=""><i class="fa fa-envelope-o" aria-hidden="true"></i> <?= $rowConfig['content_home2'] ?></a></li>
                        <?php
                            if(isset($_SESSION['user_name_gbvn'])){
                        ?>
                        <li class="item_account">
                            <i style="margin-right: 5px;display: inline-block;" class="fa fa-user-circle-o" aria-hidden="true"></i>Xin chào 
                                <a class="user" href="/thong-tin-ca-nhan">
                                    <strong style="font-weight: bold;"><?= $_SESSION['user_name_gbvn']?></strong>
                                </a>
                                <a class="user" href="/logout">
                                    <i style="margin-left: 10px;margin-right: 5px;" class="fa fa-sign-out" aria-hidden="true"></i>Đăng xuất
                                </a>
                        </li>
                        <?php }else{ ?>
                            <li class="header-topbar-login_xdshop"><a href="/login"><i class="fa fa-user-times" aria-hidden="true"></i> Đăng nhập</a></li>
                            <li class="header-topbar-register_xdshop"><a href="/register"><i class="fa fa-key" aria-hidden="true"></i> Đăng ký</a></li>
                        <?php } ?>

                      
                        <li class="header-topbar-search_xdshop">
                            <?php include DIR_SEARCH."MS_SEARCH_XDSHOP_0001.php";?>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="gb-header-bottom_xdshop">
            <div class="container">
                <div class="row">
                    <div class="col-md-10">
                        <div class="gb-header_xdshop-menu_xdshop">
                            <?php include DIR_MENU."MS_MENU_XDSHOP_0001.php";?>
                        </div>
                    </div>
                    <div class="col-md-2">
                         <?php include DIR_CART."MS_CART_XDSHOP_0004.php";?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<script src="./plugin/sticky/jquery.sticky.js"></script>
<script>
    $(document).ready(function () {
        $(".sticky-menu").sticky({topSpacing:0});
    });
</script>