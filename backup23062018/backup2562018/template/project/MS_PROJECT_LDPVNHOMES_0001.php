<!-- Mô tả Code: Hiển thị danh sách CÁC DỰ ÁN VINPEARL COMDOTEL NỔI BẬT (id = 231). Nếu có thay đổi hoặc thêm mới chỉ cần thay IdCat-->
<?php
    $project = new action_product();
    $list_project1 = $project->getSomeLastProduct_byIdCat(231,1,0);
    $list_project2 = $project->getSomeLastProduct_byIdCat(231,2,1);
?>
<div class="gb-vinpearlcomdotelnoibat_ldpvinhomes">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="gb-vinpearlcomdotelnoibat_ldpvinhomes-left">
                    <div class="gb-vinpearlcomdotelnoibat_ldpvinhomes-left-title">
                        <h2>Các dự án vinpearl comdotel nổi bật</h2>
                    </div>
                    <div class="gb-vinpearlcomdotelnoibat_ldpvinhomes-left-body">
                        <div class="row">
                            <div class="col-sm-8">
                                <?php
                                    foreach ($list_project1 as $item) {
                                ?>
                                    <div class="gb-vinpearlcomdotelnoibat_ldpvinhomes-left-big">
                                        <div class="gb-vinpearlcomdotelnoibat_ldpvinhomes-left-item">
                                            <a href="/<?= $item['friendly_url'] ?>">
                                                <img src="/images/<?= $item['product_img'] ?>" alt="" class="img-responsive">
                                            </a>
                                            <div class="gb-vinpearlcomdotelnoibat_ldpvinhomes-left-item-info">
                                                <a href="/<?= $item['friendly_url'] ?>">Chi tiết</a>
                                                <p><?= $item['product_des'] ?></p>
                                            </div>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>
                            <div class="col-sm-4">
                                <div class="gb-vinpearlcomdotelnoibat_ldpvinhomes-left-small">
                                    <?php
                                        foreach ($list_project2 as $item) {
                                    ?>
                                        <div class="gb-vinpearlcomdotelnoibat_ldpvinhomes-left-item">
                                            <a href="/<?= $item['friendly_url'] ?>">
                                                <img src="/images/<?= $item['product_img'] ?>" alt="" class="img-responsive">
                                            </a>
                                            <div class="gb-vinpearlcomdotelnoibat_ldpvinhomes-left-item-info">
                                                <a href="/<?= $item['friendly_url'] ?>">Chi tiết</a>
                                                <p><?= $item['product_des'] ?></p>
                                            </div>
                                        </div>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="gb-vinpearlcomdotelnoibat_ldpvinhomes-right">
                    <?php include DIR_BANNER."MS_BANNER_LDPVNHOMES_0003.php";?>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- End Code -->