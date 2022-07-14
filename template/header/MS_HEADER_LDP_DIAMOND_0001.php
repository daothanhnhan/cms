<link rel="stylesheet" href="/plugin/animsition/css/animate.css">
<header>
    <div class="gb-header_ldp_diamond sticky-menu">
        <!--TOP HEADER-->
        <div class="gb-top-header_ldp_diamond">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="gb-top-header-left_ldp_diamond">
                            Hotline: <?= $rowConfig['content_home3'] ?> (24/7)
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="gb-top-header-logo_ldp_diamond">
                            <h1><a href=""><img src="/images/<?= $rowConfig['web_logo'] ?>" alt="" class="img-responsive"></a></h1>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="gb-top-header-right_ldp_diamond">
                            <ul>
                                <li>
                                    <div class="gb-top-header-right-search_ldp_diamond">
                                        <form class="navbar-form" role="search">
                                            <div class="input-group">
                                                <input type="text" class="form-control" placeholder="Search" name="">
                                                <div class="input-group-btn">
                                                    <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </li>
                                <li>
                                    <div class="gb-top-header-cart_ldp_diamond">
                                        <a href="">
                                            <i class="fa fa-shopping-bag" aria-hidden="true"></i>
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--B0TTOM HEADER-->
        <?php include DIR_MENU."MS_MENU_LDP_DIAMOND_0001.php";?>
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

    $(document).ready(function () {
        //-----------------Sticky memu-----------------
        $(".sticky-menu").sticky({topSpacing:0});
    });
</script>