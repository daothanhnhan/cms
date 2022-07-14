<?php 
    $product_related2 = $action_product->getListProductRelate_byIdCat_hasLimit($productcat_id, 5);//var_dump($product_related1);die;
?>
<?php 
    function rating3 ($id) {
        global $conn_vn;
        $sql = "SELECT * FROM rating Where product_id = $id";
        $result = mysqli_query($conn_vn, $sql);
        $num = mysqli_num_rows($result);
        if ($num > 0) {
            $tong = 0;
            $star_1 = 0;
            $star_2 = 0;
            $star_3 = 0;
            $star_4 = 0;
            $star_5 = 0;
            while ($row = mysqli_fetch_assoc($result)) {
                $star_1 += $row['star_1'];
                $star_2 += $row['star_2'];
                $star_3 += $row['star_3'];
                $star_4 += $row['star_4'];
                $star_5 += $row['star_5'];
            }
            $tong = (($star_1*1) + ($star_2*2) + ($star_3*3) + ($star_4*4) + ($star_5*5)) / $num;
            $return = array(
                    'tong' => round($tong),
                    'count' => $num
                );
            return $return;
        } else {
            $return = array(
                    'tong' => 0,
                    'count' => 0
                );
            return $return;
        }
    }
    
?>
<div class="gb-sanpham-cmslienquan-cms-sidebar">
    <div class="sanpham-title-cms">
        <h3>SẢN Phẩm liên quan</h3>
    </div>
    <?php 
    foreach ($product_related2 as $row) { 
        $action_product2 = new action_product(); 
        $rowLang2 = $action_product2->getProductLangDetail_byId($row['product_id'],$lang);
        $row2 = $action_product2->getProductDetail_byId($row['product_id'],$lang); 
        $tong_rating3 = rating3($row['product_id']);
    ?>
    <div class="vk-newlist-details-newlist1 vk-book-details">
        <div class="vk-best-seller-img">
            <a href="/<?= $rowLang2['friendly_url'] ?>"><img src="/images/<?= $row2['product_img'] ?>" alt="review" class="img-responsive"></a>
        </div>
        <div class="vk-best-seller-info">
            <h4><a href="/<?= $rowLang2['friendly_url'] ?>"><?= $rowLang2['lang_product_name'] ?></a></h4>
            <ul>
                <li><i class="fa <?= ($tong_rating3['tong']>=1) ? 'fa-star' : 'fa-star-o' ?>" aria-hidden="true"></i></li>
                <li><i class="fa <?= ($tong_rating3['tong']>=2) ? 'fa-star' : 'fa-star-o' ?>" aria-hidden="true"></i></li>
                <li><i class="fa <?= ($tong_rating3['tong']>=3) ? 'fa-star' : 'fa-star-o' ?>" aria-hidden="true"></i></li>
                <li><i class="fa <?= ($tong_rating3['tong']>=4) ? 'fa-star' : 'fa-star-o' ?>" aria-hidden="true"></i></li>
                <li><i class="fa <?= ($tong_rating3['tong']>=5) ? 'fa-star' : 'fa-star-o' ?>" aria-hidden="true"></i></li>
            </ul>
            <div class="prices-cms">
                <p class="percent-sale">-<?= $row2['product_price_sale'] ?>%</p>
                <p class="price-old-sale">
                    <span class="price-old"><?= number_format($row2['product_price']) ?> đ</span>
                    <span class="price-sale"><?= number_format($row2['product_price']-($row2['product_price']*($row2['product_price_sale']/100))) ?> đ</span>
                </p>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
    <?php } ?>
    
</div>