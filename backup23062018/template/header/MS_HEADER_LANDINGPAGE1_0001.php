<link rel="stylesheet" href="/plugin/animsition/css/animate.css">
<header>
    <div class="gb-header_ldplearning">
        <!--TOP HEADER-->
        <div class="gb-top-header_ldplearning">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <?php include DIR_CONTACT."MS_CONTACT_LANDINGPAGE1_0001.php";?>
                    </div>
                    <div class="col-md-4">
                        <?php include DIR_SOCIAL."MS_SOCIAL_LANDINGPAGE1_0001.php";?>
                    </div>
                </div>
            </div>
        </div>

        <!--BETWEEN HEADER-->
        <div class="gb-between-header_ldplearning">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3">
                        <h1><a href=""><img src="/images/<?= $rowConfig['web_logo']?>" alt="" class="img-responsive"></a></h1>
                    </div>
                </div>
            </div>
        </div>

        <!--B0TTOM HEADER-->
        <?php include DIR_MENU."MS_MENU_LANDINGPAGE1_0001.php";?>
    </div>
</header>

<script>
    $(document).ready(function(e){
        $('.search-panel .dropdown-menu').find('a').click(function(e) {
            e.preventDefault();
            var param = $(this).attr("href").replace("#","");
            var concept = $(this).text();
            $('.search-panel span#search_concept').text(concept);
            $('.input-group #search_param').val(param);
        });
    });
</script>