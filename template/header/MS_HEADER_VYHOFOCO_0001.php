<!--MENU MOBILE-->
<?php include_once DIR_MENU."MS_MENU_VYHOFOCO_0002.php"; ?>
<!-- End menu mobile-->

<!--MENU DESTOP-->
<header>
    <div class="gb-header_vyhofoco sticky-menu">
        <?php include DIR_MENU."MS_MENU_VYHOFOCO_0003.php";?>
    </div>
</header>

<script src="/plugin/sticky/jquery.sticky.js"></script>
<script>
    $(document).ready(function () {
        $(".sticky-menu").sticky({topSpacing:0});
    });
</script>