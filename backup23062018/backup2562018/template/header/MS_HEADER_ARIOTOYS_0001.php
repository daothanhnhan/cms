<header>
    <div id="WrapperHeader_ariotoys">

        <!--HEADER TOP-->
        <div id="Header-HeaderTop_ariotoys">
            <div class="container">
                <ul class="list_header_bar">
                    <li class="item_bar">
                       <?php include_once DIR_CART."MS_CART_ARIOTOYS_0003.php";?>
                    </li>
                </ul>
            </div>
        </div>

        <!--====================================================================-->
        <div id="Header-HeaderTop_ariotoys2">
            <div class="container">
                <div class="Center-Width_ariotoys">
                    <div class="Infor-Width_ariotoys">
                        <div class="box_cover_header2_ariotoys">
                            <div class="row">

                                <div class="col-md-4">
                                    <div class="box_logo_ariotoys">
                                        <div class="box_cover_logo_ariotoys">
                                            <a href="/">
                                                <img src="/images/<?= $rowConfig['web_logo'] ?>" alt="Logo"/>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <?php include_once DIR_SEARCH."MS_SEARCH_ARIOTOYS_0001.php";?>
                                </div>
                                <div class="col-md-4">
                                    <?php include_once DIR_SOCIAL."MS_SOCIAL_ARIOTOYS_0001.php" ;?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--=====================================================================-->
        <?php include_once DIR_MENU."Core_MS_MENU_0001.php";?>
    </div>
</header>