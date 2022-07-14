<!-- Mô tả Code: Hiển thị danh sách NHỮNG CĂN HỘ ĐANG ĐƯỢC MỞ BÁN (id = 229). Nếu có thay đổi hoặc thêm mới chỉ cần thay IdCat-->
<?php
    $project = new action_product();
    $list_project_open = $project->getSomeLastProduct_byIdCat(229,4,0);
?>
<div class="gb-nhungcanhodangduocmoban-ldpvinhomes">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="gb-nhungcanhodangduocmoban-ldpvinhomes-title">
                    <h2>Những căn hộ đang được mở bán</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <?php
                foreach ($list_project_open as $item) {
            ?>
                <div class="col-sm-6">
                    <div class="gb-nhungcanhodangduocmoban-ldpvinhomes-item">
                        <a href="/<?= $item['friendly_url'] ?>">
                            <img src="/images/<?= $item['product_img'] ?>" alt="" class="img-responsive">
                        </a>
                        <div class="gb-nhungcanhodangduocmoban-ldpvinhomes-item-info">
                            <a href="/<?= $item['friendly_url'] ?>">Chi tiết</a>
                            <p><?= $item['product_des'] ?></p>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</div>