<div class="gb-breadcrum-cms">
    <div class="container">
        <!-- Page title -->
        <div class="page-title-cms">
            <div class="page-title-cms-inner-cms">
                <h1><?= $title ?></h1>
            </div>
        </div>
        <!-- End page title -->
        <?php if ($use_breadcrumb) { ?>
        <!-- Breadcrumbs -->
        <ul class="breadcrumbs">
            <li><a href="/">Trang chủ</a></li>
            <li><a href="/<?= $breadcrumb_url ?>"><?= $breadcrumb_name ?></a></li>
            <li><a href="#"><?= $title ?></a></li>
        </ul>
        <!-- End breadcrumbs -->
        <?php } else { ?>
        <!-- Breadcrumbs -->
        <ul class="breadcrumbs">
            <li><a href="/">Trang chủ</a></li>
            <li><a href="#"><?= $title ?></a></li>
        </ul>
        <!-- End breadcrumbs -->
        <?php } ?>
    </div>
</div>