<link rel="stylesheet" href="/plugin/owl-carouse/owl.carousel.min.css">
<link rel="stylesheet" href="/plugin/owl-carouse/owl.theme.default.min.css">
<div id="Content-Partner_ariotoys">
    <div class="container">
        <div class="box_partner_ariotoys" >
            <div class="cover_box_partner_ariotoys owl-carousel owl-theme"  id="partner" >
                <div class="item partner">
                    <a href="cat.html">
                        <img src="/images/logobrand.jpg" alt=""/>
                    </a>
                </div>
                <div class="item partner">
                    <a href="cat.html">
                        <img src="/images/logobrand-1.jpg" alt=""/>
                    </a>
                </div>
                <div class="item partner">
                    <a href="cat.html">
                        <img src="/images/logobrand-2.jpg" alt=""/>
                    </a>
                </div>
                <div class="item partner">
                    <a href="cat.html">
                        <img src="/images/logobrand-3.jpg" alt=""/>
                    </a>
                </div>
                <div class="item partner">
                    <a href="cat.html">
                        <img src="/images/logobrand-4.jpg" alt=""/>
                    </a>
                </div>
                <div class="item partner">
                    <a href="cat.html">
                        <img src="/images/logobrand-5.jpg" alt=""/>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="/plugin/owl-carouse/owl.carousel.min.js"></script>
<script>
    $(document).ready(function () {
        $('.cover_box_partner_ariotoys').owlCarousel({
            loop:true,
            margin:30,
            responsiveClass:true,
            nav:true,
            navText:[],
            dots:false,
            responsive:{
                0:{
                    items:1
                },
                600:{
                    items:4
                }
            }
        });
    });
</script>
