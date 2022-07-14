<div class="gb-breadcrum-cms">
    <div class="container">
        <!-- Page title -->
        <div class="page-title-cms">
            <div class="page-title-cms-inner-cms">
                <h1><?= $title ?></h1>
            </div>
        </div>
        <!-- End page title -->

        <!-- Breadcrumbs -->
        <ul class="breadcrumbs">
            <li><a href="/">Trang chủ</a></li>            
            <li><a href="/<?= $news_breadcrumb['friendly_url'] ?>"><?= $news_breadcrumb['lang_newscat_name'] ?></a></li>
            <li><a href="#"><?= $title ?></a></li>
        </ul>
        <!-- End breadcrumbs -->
    </div>
</div>