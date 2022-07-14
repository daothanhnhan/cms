<?php 
    function listColor ($id) {
        global $conn_vn;
        $sql = "SELECT * FROM color WHERE product_id = $id";
        $result = mysqli_query($conn_vn, $sql);
        $rows = array();
        $num = mysqli_num_rows($result);
        if ($num > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                $rows[] = $row;
            }
        }
        return $rows;
    }
    $list_color = listColor($row['product_id']);//var_dump($list_color);
?>
<style type="text/css">
    .single_add_to_cart_button-cms {
        position: relative;
        left: 0px;
    }
    .quantity input {
        width: auto;
    }
</style>
<form class="cart" method="post" enctype="multipart/form-data">
    <div class="quantity">
        <div class="form-group">
            <label>Sô lượng: (<span>Còn 2 sản phẩm</span>)</label>
            <input type="number" class="form-control qty number_cart" id="pwd" min="0" value="1">
            <input type="hidden" name="id" id="product_id" value="<?php echo $rowLang['product_id'];?>">
		    <input type="hidden" name="name" id="product_name" value="<?= $rowLang['lang_product_name'];?>">
		    <input type="hidden" name="price" id="product_price" value="<?php echo $row['product_price']-($row['product_price']*($row['product_price_sale']/100));?>">
            <label>Màu sắc</label>
            <?php 
            foreach ($list_color as $item) { 
            ?>
            <img src="/images/<?= $item['color_img'] ?>" width="30" height="30" color="<?= $item['color_id'] ?>" onclick="color(this)">
            <?php } ?>
        </div>
    </div>
   <?php include_once DIR_CART.'MS_CART_0007.php'; ?>
    <div class="clearfix"></div>
</form>
<script type="text/javascript">
    function color (data) {
        var id = data.getAttribute("color");
        // alert(mau);
        var xhttp = new XMLHttpRequest();
          xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
             var bien = this.responseText;
             // alert(bien);
             document.getElementsByClassName("uni-single-car-gallery-images")[0].innerHTML = bien;
             ////////////
             $(document).ready(function() {
                    $(".img1").elevateZoom({ gallery: 'gallery_01', cursor: 'pointer', galleryActiveClass: "active" });
                    $("img").click(function(){
                      var bien = $(this).attr("alt");
                      $(".img"+bien).elevateZoom({ gallery: 'gallery_01', cursor: 'pointer', galleryActiveClass: "active" });
                    });


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
            /////////////
            }
          };
          xhttp.open("GET", "/functions/ajax/color.php?id="+id, true);
          xhttp.send();
    }
</script>