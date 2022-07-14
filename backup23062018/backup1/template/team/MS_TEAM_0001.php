
<link rel="stylesheet" href="./plugin/owl-carouse/owl.carousel.min.css">
<link rel="stylesheet" href="./plugin/owl-carouse/owl.theme.default.min.css">

<!--Team 2-->
<div class="uni-shortcode-team-2-cms">
    <div class="container">
        <div class="uni-services-title-cms">
            <h3>Team Leader</h3>
        </div>
        <div class="uni-owl-four-item owl-carousel owl-theme">
            <div class="item">
                <div class="uni-team-default">
                    <div class="item-img-cms">
                        <img src="images/person/6.jpg" alt="" class="img-responsive">
                    </div>
                    <div class="item-caption">
                        <div class="item-title">
                            <h4>henrik larsson</h4>
                            <span>neurologist</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="uni-team-default">
                    <div class="item-img-cms">
                        <img src="images/person/10.jpg" alt="" class="img-responsive">
                    </div>
                    <div class="item-caption">
                        <div class="item-title">
                            <h4>henrik larsson</h4>
                            <span>neurologist</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="uni-team-default">
                    <div class="item-img-cms">
                        <img src="images/person/8.jpg" alt="" class="img-responsive">
                    </div>
                    <div class="item-caption">
                        <div class="item-title">
                            <h4>henrik larsson</h4>
                            <span>neurologist</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="uni-team-default">
                    <div class="item-img-cms">
                        <img src="images/person/7.jpg" alt="" class="img-responsive">
                    </div>
                    <div class="item-caption">
                        <div class="item-title">
                            <h4>henrik larsson</h4>
                            <span>neurologist</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="uni-team-default">
                    <div class="item-img-cms">
                        <img src="images/person/10.jpg" alt="" class="img-responsive">
                    </div>
                    <div class="item-caption">
                        <div class="item-title">
                            <h4>henrik larsson</h4>
                            <span>neurologist</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="uni-team-default">
                    <div class="item-img-cms">
                        <img src="images/person/7.jpg" alt="" class="img-responsive">
                    </div>
                    <div class="item-caption">
                        <div class="item-title">
                            <h4>henrik larsson</h4>
                            <span>neurologist</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="./plugin/owl-carouse/owl.carousel.min.js"></script>
<script>
    $(document).ready(function () {
        $('.uni-owl-four-item').owlCarousel({
            loop:true,
            margin:30,
            responsiveClass:true,
            nav:false,
            navText:[],
            dots:false,
            responsive:{
                0:{
                    items:1
                },
                600:{
                    items:2
                },
                992:{
                    items:4
                }
            }
        });
    });
</script>