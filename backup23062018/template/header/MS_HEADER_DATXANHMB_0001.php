<!--MENU MOBILE-->
<?php include_once DIR_MENU."MS_MENU_DATXANHMB_0002.php"; ?>
<!-- End menu mobile-->

<!--MENU DESTOP-->
<header>
    <div class="gb-header_datxanhmienbac">
        <div class="gb-header-logo_datxanhmienbac">
            <h1>
                <a href="/"><img src="/images/<?= $rowConfig['web_logo'] ?>" alt="" class="img-responsive"></a>
            </h1>
        </div>
        <div class="gb-header-menu_datxanhmienbac">
            <?php include DIR_MENU."MS_MENU_DATXANHMB_0001.php";?>
        </div>
        <div class="gb-header-social_datxanhmienbac">
            <ul>
                <li><a href="<?= $rowConfig['facebook'] ?>"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                <li><a href="<?= $rowConfig['youtube'] ?>"><i class="fa fa-play" aria-hidden="true"></i></a></li>
            </ul>
        </div>
    </div>
</header>

<script src="/plugin/sticky/jquery.sticky.js"></script>
<script>
    $(document).ready(function () {
        $(".sticky-menu").sticky({topSpacing:0});
    });
</script>