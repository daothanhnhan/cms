<!-- Mô tả Code: Hiển thị danh sách BIỆT THỰ VINPEARK MỚI NHẤT (id = 230). Nếu có thay đổi hoặc thêm mới chỉ cần thay IdCat-->
<?php
    $project = new action_product();
    $list_project1 = $project->getSomeLastProduct_byIdCat(230,5,0);    
?>
<div class="gb-bietthuvinpearl_ldpvnpearl">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                 <div class="gb-bietthuvinpearl_ldpvnpearl-left">
                    <div class="gb-bietthuvinpearl_ldpvnpearl-left-title">
                        <h2>Biệt thự vinpeark Mới nhất</h2>
                    </div>
                     <?php
                        foreach ($list_project1 as $item) {
                            $action_product1 = new action_product(); 
                            $rowLang1 = $action_product1->getProductLangDetail_byId($item['product_id'],$lang);
                            $row1 = $action_product1->getProductDetail_byId($item['product_id'],$lang); 
                    ?>
                        <div class="gb-bietthuvinpearl_ldpvnpearl-left-item">
                             <div class="gb-bietthuvinpearl_ldpvnpearl-left-item-img">
                                 <a href="/<?= $rowLang1['friendly_url'] ?>">
                                    <img src="/images/<?= $row1['product_img'] ?>" alt="" class="img-responsive">
                                </a>
                             </div>
                             <div class="gb-bietthuvinpearl_ldpvnpearl-left-item-info">
                                 <h2><a href="/<?= $rowLang1['friendly_url'] ?>"><?= $rowLang1['lang_product_name'] ?></a></h2>
                                 <ul>
                                     <li>Diện tích: <?= $row1['product_price_sale'] ?> m2</li>
                                     <li><?php include DIR_PRODUCT."MS_PRODUCT_LDPVNHOMES_0002.php";?></li>
                                     <li>Địa chỉ: <?= $row1['product_code'] ?></li>
                                 </ul>
                                 <a href="/<?= $rowLang1['friendly_url'] ?>" class="btn-xemchitiet">Chi tiết</a>
                             </div>
                        </div>
                    <?php } ?>
                 </div>
            </div>
            <div class="col-md-4">
                <div class="gb-bietthuvinpearl_ldpvnpearl-right">
                    <?php include DIR_SIDEBAR."MS_SIDEBAR_VNHOMES_0001.php";?>
                    <?php include DIR_BANNER."MS_BANNER_LDPVNHOMES_0002.php";?>
                </div>
            </div>
        </div>
    </div>
</div>