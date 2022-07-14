<!--HOME SLIDE-->
<link rel="stylesheet" href="/plugin/owl-carouse/owl.carousel.min.css">
<link rel="stylesheet" href="/plugin/owl-carouse/owl.theme.default.min.css">

<div class="uni-slideshow-home-cms">
    <div class="uni-slideshow-home-cms-one-item owl-carousel owl-theme">
        <?php
            $array = json_decode($rowConfig['slideshow_home'], true);
            foreach ($array as $key => $val) {
                $img = json_decode($val, true);
                if ($img != '') {
                    ?> 
                    <div class="item">
                        <a href=""><img src="/images/<?= $img['image']?>" alt="" class="img-responsive"></a>
                    </div>               
                    <?php                            
              }
          }
        ?>         
        <!-- <div class="item">
            <a href=""><img src="images/slide/background112.jpg" alt="" class="img-responsive"></a>
        </div>
        <div class="item">
            <a href=""><img src="images/slide/background111.jpg" alt="" class="img-responsive"></a>
        </div> -->
    </div>
</div>

<script src="/plugin/owl-carouse/owl.carousel.min.js"></script>
<script>
    $(document).ready(function () {
        $('.uni-slideshow-home-cms-one-item').owlCarousel({
            loop:true,
            autoplay: true,
            responsiveClass:true,
            nav:true,
            navText:[],
            dots:false,
            items:1
        });
    });
</script>