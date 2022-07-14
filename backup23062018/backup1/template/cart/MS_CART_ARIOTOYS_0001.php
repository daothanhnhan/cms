<link rel="stylesheet" href="./plugin/slickNav/slicknav.css"/>
<link rel="stylesheet" href="./plugin/slick/slick.css"/>
<link rel="stylesheet" href="./plugin/slick/slick-theme.css"/>

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
           var action = "add";
           // var a = {a : 'a'};
           if(product_quantity > 0)  
           {                  
                 $.ajax({  
                     url:"/functions/ajax.php?action=add_cart",  
                     method:"POST",  
                     dataType:"json",  
                     data:{  
                          product_id:product_id,   
                          product_name:product_name,   
                          product_price:product_price,   
                          product_quantity:product_quantity,   
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



<div id="WrapperContent_ariotoys">
    <div id="Content-Product-Category_ariotoys">
        <div class="container">
            <div class="box_pro_cate_ariotoys">
                <div class="row">

                    <div class="col-md-3">

                        <?php include_once DIR_SIDEBAR."MS_SIDEBAR_ARIOTOYS_0001.php";?>

                    </div>

                    <div class="col-md-9 content">
                        <div class="header_detail_ariotoys">
                           <div class="row">
                                <div class="col-md-6">
                                    <div class="gb-chitiet_sanpham_left-img_ariotoys">
                                        <div class="uni-single-car-gallery-images_ariotoys">
                                            <div class="slider slider-for">                                                
                                                <div class="slide-item"><img src="images/<?= $row['product_img'] ?>" alt="" class="img-responsive img1" data-zoom-image="images/<?= $row['product_img'] ?>"></div>
                                                 <?php 
                                                  $d = 1;
                                                  foreach ($img_sub as $item) {
                                                      $d++;
                                                      $image = json_decode($item, true);?>
                                                      <div class="slide-item"><img src="/images/<?= $image['image'] ?>" alt="" class="img-responsive img<?= $d ?>" data-zoom-image="/images/<?= $image['image'] ?>"></div>
                                                  <?php } ?>
                                                <!-- <div class="slide-item"><img src="images/singler-car/img2.jpg" alt="" class="img-responsive img2" data-zoom-image="images/singler-car/img2.jpg"></div>
                                                <div class="slide-item"><img src="images/singler-car/img3.jpg" alt="" class="img-responsive img3" data-zoom-image="images/singler-car/img3.jpg"></div>
                                                <div class="slide-item"><img src="images/singler-car/img4.jpg" alt="" class="img-responsive img4" data-zoom-image="images/singler-car/img4.jpg"></div>
                                                <div class="slide-item"><img src="images/singler-car/img5.jpg" alt="" class="img-responsive img5" data-zoom-image="images/singler-car/img5.jpg"></div>
                                                <div class="slide-item"><img src="images/singler-car/img1.jpg" alt=""  class="img-responsive img6" data-zoom-image="images/singler-car/img1.jpg"></div> -->
                                            </div>
                                            <div class="slider slider-nav">
                                                <div class="slide-item-nav"><img src="images/<?= $row['product_img'] ?>" alt="" class="img-responsive" data-zoom-image="images/<?= $row['product_img'] ?>"></div>
                                                <?php foreach ($img_sub as $item) {?>
                                                    <?php $image = json_decode($item, true);?>
                                                    <div class="slide-item-nav"><img src="/images/<?= $image['image'] ?>" alt="" class="img-responsive" data-zoom-image="/images/<?= $image['image'] ?>"></div>
                                                <?php } ?>
                                                <!-- <div class="slide-item-nav"><img src="images/singler-car/img2.jpg" alt="" class="img-responsive" data-zoom-image="images/singler-car/img2.jpg"></div>
                                                <div class="slide-item-nav"><img src="images/singler-car/img3.jpg" alt="" class="img-responsive" data-zoom-image="images/singler-car/img3.jpg"></div>
                                                <div class="slide-item-nav"><img src="images/singler-car/img4.jpg" alt="" class="img-responsive" data-zoom-image="images/singler-car/img4.jpg"></div>
                                                <div class="slide-item-nav"><img src="images/singler-car/img5.jpg" alt="" class="img-responsive" data-zoom-image="images/singler-car/img5.jpg"></div>
                                                <div class="slide-item-nav"><img src="images/singler-car/img1.jpg" alt="" class="img-responsive" data-zoom-image="images/singler-car/img1.jpg"></div> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="gb-chitiet_sanpham_left-info_ariotoys">
                                        <div class="box_caption">
                                            <h1><?= $rowLang[$nameColLangProductName_productLanguage] ?></h1>
                                            <div class="rating">
                                                <i class="iconfont-top4"></i>
                                                <i class="iconfont-top4"></i>
                                                <i class="iconfont-top4"></i>
                                                <i class="iconfont-top4"></i>
                                                <i class="iconfont-top4"></i>
                                                <!-- <a href="#">0 bình luận</a> -->
                                            </div>
                                            <div class="caption_info">
                                              <div class="table-responsive">
                                                  <table class="table">
                                                    <tr>
                                                      <th>Nhà sản xuất :</th>
                                                      <td><a href="#" title=""><?= $row['product_expiration'] ?></a></td>
                                                    </tr>
                                                    <tr>
                                                      <th>Dòng sản phẩm :</th>
                                                      <td><?= $row['product_shape'] ?></td>
                                                    </tr>
                                                    <tr>
                                                      <th>Mã sản phẩm: </th>
                                                      <td><?= $row['product_code'] ?></td>
                                                    </tr>
                                                    <tr>
                                                      <th>Giá cũ:</th>
                                                      <td><span class="old_price"> <?= number_format($row['product_price']) ?> VNĐ</span></td>
                                                    </tr>
                                                    <tr>
                                                      <th>Giá mới:</th>
                                                      <td><span class="current_price"> <?= number_format($row['product_price']-($row['product_price']*($row['product_price_sale']/100))) ?> VNĐ</span></td>
                                                    </tr>
                                                  </table>
                                                </div>  
                                            
                                            </div>

                                            <?php include_once  DIR_CART."MS_CART_ARIOTOYS_0002.php";?>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- <div class="row">
                                <div class="box_image">
                                    <div class="main_image">
                                        <img src="/images/<?= $row['product_img'] ?>"/>
                                    </div>
                                    <div class="sub_image">
                                        <ul class="list_sub_image">
                                            <?php 
                                                $d = 1;
                                                foreach ($img_sub as $item) {
                                                    $d++;
                                                    $image = json_decode($item, true);
                                            ?>
                                            <li class="item_sub_image">
                                                <div class="cover_sub_image">
                                                    <img src="/images/<?= $image['image'] ?>"/>
                                                </div>
                                            </li>
                                            <?php } ?>
                                        </ul>
                                    </div>
                                </div>

                                <div class="box_caption">
                                    <h1><?= $rowLang[$nameColLangProductName_productLanguage] ?></h1>
                                    <div class="rating">
                                        <i class="iconfont-top4"></i>
                                        <i class="iconfont-top4"></i>
                                        <i class="iconfont-top4"></i>
                                        <i class="iconfont-top4"></i>
                                        <i class="iconfont-top4"></i>
                                        <a href="#">0 bình luận</a>
                                    </div>
                                    <div class="caption_info">
                                        <span>Nhà sản xuất : <a href="#" title=""><?= $row['product_expiration'] ?></a></span>
                                        <span>Dòng sản phẩm : <?= $row['product_shape'] ?></span>
                                        <span>Mã sản phẩm: <?= $row['product_code'] ?></span>
                                        <span class="old_price"><?= number_format($row['product_price']) ?> VNĐ</span>
                                        <span class="current_price"><?= number_format($row['product_price']-($row['product_price']*($row['product_price_sale']/100))) ?> VNĐ</span>
                                    </div>

                                    <?php include_once  DIR_CART."MS_CART_ARIOTOYS_0002.php";?>

                                </div>
                            </div> -->
                        </div> <!-- end header_detail_ariotoys -->

                        <div class="box_des_rating_ariotoys">

                          <div class="tabbable-panel">
                                    <div class="tabbable-line">
                                      <ul class="nav nav-tabs span-tab">
                                        <li class="active">
                                          <span class="span-tab1 span_tab"><a href="#tab_1" data-toggle="tab">Mô tả</a></span>
                                        </li>
                                        <li>
                                          <span class="span-tab2 span_tab"><a href="#tab_2" data-toggle="tab">Đánh giá (0)</a></span>
                                        </li>
                                      </ul>
                                      <div class="tab-content">
                                        <div class="tab-pane active" id="tab_1">
                                          <div class="span_tab_content">
                                              <?= $rowLang['lang_product_content'] ?>
                                          </div>
                                        </div>
                                        <div class="tab-pane" id="tab_2">

                                          <!-- <div class="fb-comments" data-href="https://developers.facebook.com/docs/plugins/comments#configurator" data-numposts="1"></div> -->
                                          <div class="fb-comments" data-href="<?= $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"] ?>" data-numposts="1"></div>

                                          <div id="fb-root"></div>
                                          <script>(function(d, s, id) {
                                                  var js, fjs = d.getElementsByTagName(s)[0];
                                                  if (d.getElementById(id)) return;
                                                  js = d.createElement(s); js.id = id;
                                                  js.src = 'https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.12&appId=220693348668109&autoLogAppEvents=1';
                                                  fjs.parentNode.insertBefore(js, fjs);
                                              }(document, 'script', 'facebook-jssdk'));
                                            </script>
                                          
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                        
                        </div>

                        <?php include_once DIR_PRODUCT."MS_PRODUCT_ARIOTOYS_0002.php";?>

                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

<script src="./plugin/slick/scripts.js"></script>
<script src="./plugin/slick/slick.js"></script>

<script type="text/javascript">
    $(document).ready(function() {
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