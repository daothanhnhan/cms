<?php
    $action = new action();
    $product = new action_product();
    $rows = $action->getList1($nameTable_product,'','',$nameColId_product,'desc',$trang,20,'home');
?>
<div class="gb-tintuc-table_bdshn">
    <table class="table">
        <thead>
        <tr>
            <th class="col-1">Mã số</th>
            <th class="col-2">Ngày đăng</th>
            <th class="col-3">Tiêu đề</th>
            <th class="col-4">Tỉnh/Huyện</th>
            <th class="col-5">Loại tin</th>
        </tr>
        </thead>
        <?php
            foreach ($rows['data'] as $item) {
        ?>
            <tr>
                <td class="col-1"><?= $item['product_price_sale'] ?></td>
                <td class="col-2">
                    <p>
                        <?= date('d-m-Y', strtotime($item['product_created_date']))  ?>
                        <a href="/<?= $item['friendly_url'] ?>">
                            <img class="img_1 img-responsive" src="/images/<?= $item['product_img'] ?>">
                        </a>
                    </p>
                </td>
                <td class="col-3">
                    <a href="/<?= $item['friendly_url'] ?>">
                        <?= $item['product_name'] ?>
                        <img src="/images/vip.gif" alt="">
                    </a>
                </td>
                <td class="col-4">
                    <?= $item['product_material'] ?>
                </td>
                <td class="col-5">
                    <?= $item['product_expiration'] ?>
                </td>
            </tr>
        <?php } ?>
    </table>
    <?php include DIR_PAGINATION."MS_PAGINATION_BDSHN_0001.php";?>
</div>