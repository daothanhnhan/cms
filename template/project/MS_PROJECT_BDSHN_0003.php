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
            foreach ($rows['data'] as $row) {
                $d++;
                $action_product1 = new action_product(); 
                $rowLang1 = $action_product1->getProductLangDetail_byId($row['product_id'],$lang);
                $row1 = $action_product1->getProductDetail_byId($row['product_id'],$lang); 
        ?>
            <tr>
                <td class="col-1"><?= $row1['product_price_sale'] ?></td>
                <td class="col-2">
                    <p>
                        <?= date('d-m-Y', strtotime($row1['product_created_date']))  ?>
                        <a href="/<?= $rowLang1['friendly_url'] ?>">
                            <img class="img_1 img-responsive" src="/images/<?= $row1['product_img'] ?>">
                        </a>
                    </p>
                </td>
                <td class="col-3">
                    <a href="/<?= $rowLang1['friendly_url'] ?>">
                        <?= $rowLang1['lang_product_name'] ?>
                        <img src="/images/vip.gif" alt="">
                    </a>
                </td>
                <td class="col-4">
                    <?= $row1['product_material'] ?>
                </td>
                <td class="col-5">
                    <?= $row1['product_expiration'] ?>
                </td>
            </tr>
        <?php } ?>
    </table>
    <?php 
        $config = array(
            'current_page'  => $trang+1, // Trang hiện tại
            'total_record'  => $rows['count'], // Tổng số record
            'total_page'    => 1, // Tổng số trang
            'limit'         => $limit,// limit
            'start'         => 0, // start
            'link_full'     => '',// Link full có dạng như sau: domain/com/page/{page}
            'link_first'    => '',// Link trang đầu tiên
            'range'         => 9, // Số button trang bạn muốn hiển thị 
            'min'           => 0, // Tham số min
            'max'           => 0,  // tham số max, min và max là 2 tham số private

        );

        $pagination = new Pagination;
        $pagination->init($config);
        echo $pagination->htmlPaging1();
    ?>
</div>