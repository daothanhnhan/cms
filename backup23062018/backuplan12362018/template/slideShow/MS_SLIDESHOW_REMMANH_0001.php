<link rel="stylesheet" href="/plugin/owl-carouse/owl.carousel.min.css">
<link rel="stylesheet" href="/plugin/owl-carouse/owl.theme.default.min.css">
<div class="gb-slideshow_remmanh wow slideInRight" data-wow-duration="2s">
    <div class="gb-slideshow_remmanh-slide owl-carousel owl-theme">
       <?php
            $array = json_decode($rowConfig['slideshow_home'], true);
            foreach ($array as $key => $val) {
                $img = json_decode($val, true);
                if ($img != '') {
        ?>
        <div class="item">
            <img src="/images/<?= $img['image']?>" alt="" class="img-responsive">
        </div>
        <?php } } ?>
    </div>
</div>

<script src="/plugin/owl-carouse/owl.carousel.min.js"></script>
<script>
    $(document).ready(function () {
        $('.gb-slideshow_remmanh-slide').owlCarousel({
            loop:true,
            responsiveClass:true,
            autoplay:true,
            nav:true,
            navText:[],
            dots:false,
            responsive:{
                0:{
                    items:1
                }
            }
        });
    });
</script>