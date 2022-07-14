<div class="gb-home-product_remmanh" data-parallax="scroll" data-image-src="/images/back-2.jpg">
    <div class="container">
        <h2>CHÀO MỪNG BẠN ĐẾN VỚI <?= $rowConfig['web_name'] ?></h2>
        <div class="row">
            <?php
                $action = new action_product();
                $list_cat_product = $action->getListProductCat_byOrderASC();
                $i = 0;
                foreach ($list_cat_product as $item) {
            ?>
                <div class="col-md-4 col-sm-6 wow slideInDown " data-wow-duration="<?= $item['keyword'] ?>s">
                    <div class="product-item_remmanh">
                        <img src="/images/<?= $item['productcat_img'] ?>" alt="" class="img-responsive">
                    </div>
                </div>
            <?php
                }
            ?>
          
            <!-- <div class="col-md-4 col-sm-6 wow slideInDown " data-wow-duration="1.5s">
                <div class="product-item_remmanh">
                    <img src="/images/anh-3.png" alt="" class="img-responsive">
                </div>
            </div>
            <div class="col-md-4 col-sm-6 wow slideInDown " data-wow-duration="2s">
                <div class="product-item_remmanh">
                    <img src="/images/anh-5.png" alt="" class="img-responsive">
                </div>
            </div>
            <div class="col-md-4 col-sm-6 wow slideInUp " data-wow-duration="1s">
                <div class="product-item_remmanh">
                    <img src="/images/anh-2.png" alt="" class="img-responsive">
                </div>
            </div>
            <div class="col-md-4 col-sm-6 wow slideInUp " data-wow-duration="1.5s">
                <div class="product-item_remmanh">
                    <img src="/images/anh-4.png" alt="" class="img-responsive">
                </div>
            </div>
            <div class="col-md-4 col-sm-6 wow slideInUp " data-wow-duration="2s">
                <div class="product-item_remmanh">
                    <img src="/images/anh-6.png" alt="" class="img-responsive">
                </div>
            </div> -->
        </div>
    </div>
</div>
<script src="/plugin/parallax/parallax.min.js"></script>