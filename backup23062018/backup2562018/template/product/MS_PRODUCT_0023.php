<?php 
    $action_product = new action_product(); 
    $slug = isset($_GET['slug']) ? $_GET['slug'] : '';

    $rowLang = $action_product->getProductLangDetail_byUrl($slug,$lang);
    $row = $action_product->getProductDetail_byId($rowLang[$nameColIdProduct_productLanguage],$lang);
    $_SESSION['productcat_id_relate'] = $row[$nameColIdProductCat_product];
    $_SESSION['sidebar'] = 'productDetail';
    $arr_id = $row['productcat_ar'];
    $arr_id = explode(',', $arr_id);
    $productcat_id = (int)$arr_id[0];
    $product_breadcrumb = $action_product->getProductCatLangDetail_byId($productcat_id, $lang);
    $breadcrumb_url = $product_breadcrumb['friendly_url'];
    $breadcrumb_name = $product_breadcrumb['lang_productcat_name'];
    $use_breadcrumb = true;

    $img_sub = json_decode($row['product_sub_img']);
    $product_gift = $action_product->getProductLangDetail_byId($row['product_gift_id'], $lang);
?>
<?php 
    $action_lang = new action_lang();
    $url_lang = $action_lang->get_url_lang_productDetail($slug, $lang);
?>
<script type="text/javascript">
   $(document).ready(function(data){  
      $('.btn_addCart').click(function(){  
         // var product_id = $(this).attr("id");
           var product_id = $('#product_id').val();
           var product_name = $('#product_name').val();  
           var product_price = $('#product_price').val();  
           var product_quantity = $('.number_cart').val();
           var product_gift = $('#product_gift').val();
           var action = "add";
           // var a = {a : 'a'};
           if(product_quantity > 0)  
           {                  
                 $.ajax({  
                     url:"/functions/ajax.php?action=add_cart4",  
                     method:"POST",  
                     dataType:"json",  
                     data:{  
                          product_id:product_id,   
                          product_name:product_name,   
                          product_price:product_price,   
                          product_quantity:product_quantity,
                          product_gift:product_gift, 
                          action:action  
                     },  
                     success:function(data)  
                     {  
                          // $('#order_table').html(data.order_table);  
                          // $('.badge').text(data.cart_item);  
                          if (confirm('Thêm sản phẩm thành công, bạn có muốn thanh toán luôn không')) {
                              window.location = '/gio-hang';
                          }else{
                              location.reload();
                          }  
                     },
                     error: function () {
                        alert('loi');
                     }  
                });  

           }  
           else  
           {  
                alert("Please Enter Number of Quantity")  
           }  
      });
   });
 </script>
<link href="/plugin/vidu/jQueryZoomImageonMouseOver/jQuery.fancybox.css" />
<link rel="stylesheet" href="/plugin/slickNav/slicknav.css"/>
<link rel="stylesheet" href="/plugin/slick/slick.css"/>
<link rel="stylesheet" href="/plugin/slick/slick-theme.css"/>

<div class="gb-chitiet_sanpham-cms">

    <?php include_once DIR_BREADCRUMS.'MS_BREADCRUM_0005.php';?>

    <div class="gb-chitiet_sanpham-cms-body">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <div class="gb-chitiet_sanpham-cms-left">
                        <input type="hidden" name="lang_current" id="lang_current" value="<?php echo $lang;?>">
                        <input type="hidden" name="url_lang" value="<?php echo $url_lang;?>" id="url_lang">
                        <!--chi titest sản phẩm-->
                        <div class="row">
                            <div class="col-md-6">
                                <div class="gb-chitiet_sanpham-cms_left-img">
                                    <div class="uni-single-car-gallery-images">
                                        <div class="slider slider-for">
                                            <div class="slide-item"><img src="/images/<?= $row['product_img'] ?>" alt="" class="img-responsive img1" data-zoom-image="/images/<?= $row['product_img'] ?>"></div>
                                            <?php 
                                            $d = 1;
                                            foreach ($img_sub as $item) {
                                                $d++;
                                                $image = json_decode($item, true);?>
                                                <div class="slide-item"><img src="/images/<?= $image['image'] ?>" alt="" class="img-responsive img<?= $d ?>" data-zoom-image="/images/<?= $image['image'] ?>"></div>
                                            <?php } ?>
                                           
                                        </div>
                                        <div class="slider slider-nav">
                                            <div class="slide-item-nav"><img src="/images/<?= $row['product_img'] ?>" alt="" class="img-responsive" data-zoom-image="/images/<?= $row['product_img'] ?>"></div>
                                            <?php foreach ($img_sub as $item) {?>
                                                <?php $image = json_decode($item, true);?>
                                                <div class="slide-item-nav"><img src="/images/<?= $image['image'] ?>" alt="" class="img-responsive" data-zoom-image="/images/<?= $image['image'] ?>"></div>
                                            <?php } ?>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="gb-chitiet_sanpham-cms_left-info">
                                    <h1 class="product_title entry-title"><?= $rowLang[$nameColLangProductName_productLanguage] ?></h1>

                                    <?php include_once DIR_PRODUCT.'MS_PRODUCT_0004.php';?>
                                    <?php include_once DIR_PRODUCT.'MS_PRODUCT_0005.php';?>
                                    <p style="font-weight: bold;">Tặng phẩm: <?= $product_gift['lang_product_name'] ?></p>
                                    <div class="description">
                                        <p><?= $rowLang['lang_product_des'] ?></p>
                                    </div>
                                    <!-- .description -->

                                    <?php include_once DIR_PRODUCT.'MS_PRODUCT_0024.php';?>


                                </div>
                            </div>
                        </div>

                        <!--THÔNG SỐ VÀ MÔ TẢ-->
                        <div class="gb-thongso-mota-cms">
                            <div class="uni-shortcode-tabs-default-cms">
                                <div class="uni-shortcode-tab-3-cms">
                                    <div class="tabbable-panel">
                                        <div class="tabbable-line">
                                            <ul class="nav nav-tabs ">
                                                <li class="active">
                                                    <a href="#tab_default_31" data-toggle="tab">
                                                        Thông số sản phẩm</a>
                                                </li>
                                                <li>
                                                    <a href="#tab_default_32" data-toggle="tab">
                                                        Mô tả sản phẩm</a>
                                                </li>
                                                <li>
                                                    <a href="#tab_default_33" data-toggle="tab">
                                                        Bình luận</a>
                                                </li>
                                            </ul>
                                            <div class="tab-content">
                                                <div class="tab-pane active" id="tab_default_31">
                                                    <div class="table-responsive">
                                                        <table class="table">
                                                            <tr>
                                                                <td>Mã sản phẩm</td>
                                                                <td><?= $row['product_code'] ?></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Mẫu mã, kiểu dáng</td>
                                                                <td><?= $row['product_shape'] ?></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Hãng sản xuất</td>
                                                                <td><?= $row['product_expiration'] ?></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Xuất sứ</td>
                                                                <td><?= $row['product_material'] ?></td>
                                                            </tr>
                                                            
                                                        </table>
                                                    </div>
                                                </div>
                                                <div class="tab-pane" id="tab_default_32">
                                                    <?= $rowLang['lang_product_content'] ?>
                                                </div>
                                                <div class="tab-pane" id="tab_default_33">
                                                    <!-- <div class="fb-comments" data-href="https://developers.facebook.com/docs/plugins/comments#configurator" data-width="100%" data-numposts="1"></div> -->
                                                    <?php include_once DIR_PRODUCT.'MS_PRODUCT_0014.php'; ?>
                                                    <?php include_once DIR_SOCIAL . "MS_SOCIAL_0002.php";  ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <!--SẢN PHẨM LIÊN QUAN-->
                        <?php include_once DIR_PRODUCT.'MS_PRODUCT_0003.php'; ?>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="gb-chitiet_sanpham-cms-right">

                        <!--CHÍNH SÁCH GIAO HÀNG-->
                        <?php include_once DIR_SIDEBAR.'MS_SIDEBAR_0007.php';?>

                        <!--SẢN PHẨM LIÊN QUAN-->
                        <?php include_once DIR_SIDEBAR.'MS_SIDEBAR_0008.php';?>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="/plugin/slick/scripts.js"></script>
<script src="/plugin/slick/slick.js"></script>
<script src="/plugin/slickNav/jquery.slicknav.js"></script>
<script src="/plugin/vidu/jQueryZoomImageonMouseOver/js/jquery.elevatezoom.min.js" type="text/javascript"></script>

<script type="text/javascript">
    $(document).ready(function() {
        $(".img1").elevateZoom({ gallery: 'gallery_01', cursor: 'pointer', galleryActiveClass: "active" });
        $(".img1").bind("click", function(e) {
            var ez = $('.img1').data('elevateZoom');
            ez.closeAll();
            $.fancybox(ez.getGalleryList());
            return true;
        });

         //---------------------SLIDE GALLERY IMAGE--------------------
    $('.slider-for').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        speed: 500,
        arrows: false,
        fade: true,
        asNavFor: '.slider-nav'
    });
    $('.slider-nav').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        speed: 500,
        asNavFor: '.slider-for',
        dots: false,
        focusOnSelect: true,
        slide: 'div'
    });
    });
</script>