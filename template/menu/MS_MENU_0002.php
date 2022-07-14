<!-- Mobile nav -->
<nav class="visible-sm visible-xs mobile-menu-container-cms mobile-nav-cms">
    <div class="menu-mobile-nav-cms">
        <span class="icon-bar"><i class="fa fa-bars" aria-hidden="true"></i></span>
    </div>
    <div id="cssmenu_cms" class="animated">
        <div class="uni-icons-close"><i class="fa fa-times" aria-hidden="true"></i></div>
        <!-- <ul class="nav navbar-nav animated">
            <li class="has-sub"><a href="">Home</a>
                <ul>
                    <li><a href="index.php">Home 1</a></li>
                    <li><a href="01_02_home_2.php">Home 2</a></li>
                    <li><a href="01_03_home_3.php">Home 3</a></li>
                </ul>
            </li>
            <li class="has-sub"><a href='#'>Page</a>
                <ul>
                    <li><a href="02_01_about.php">About</a></li>
                    <li class="has-sub"><a href="">doctor</a>
                        <ul>
                            <li><a href="02_02_doctor.php">Doctors </a></li>
                            <li><a href="02_03_doctor_details.php">Doctors Details</a></li>
                        </ul>
                    </li>
                    <li><a href="02_04_contact.php">Contact</a></li>
                    <li><a href="02_05_gallery.php">Gallery</a></li>
                </ul>
            </li>
            <li><a href="03_01_services.php">Services</a></li>
            <li class="has-sub"><a href="">Departments</a>
                <ul>
                    <li><a href="04_01_departments.php">Departments</a></li>
                    <li><a href="04_02_single_department.php">Single Departments</a></li>
                </ul>
            </li>
            <li class="has-sub"><a href='#'>Blog</a>
                <ul>
                    <li><a href="05_01_blog_list.php">Blog list</a></li>
                    <li><a href="05_02_blog_grid.php">Blog Grid</a></li>
                    <li><a href="05_03_single_post.php">Single post</a></li>
                </ul>
            </li>
            <li class="has-sub"><a href='#'>shop</a>
                <ul>
                    <li><a href="06_01_shop.php">Shop</a></li>
                    <li><a href="06_02_single_product.php">Single Product</a></li>
                    <li><a href="06_03_cart.php">Cart</a></li>
                    <li><a href="06_04_checkout.php">Checkout</a></li>
                </ul>
            </li>
            <li class="has-sub"><a href='#'>Element</a>
                <ul>
                    <li class="has-sub"><a href="#">Short Code 1</a>
                        <ul>
                            <li><a href="07_01_buttons.php"><i class="fa fa-plus-square" aria-hidden="true"></i>Buttons</a></li>
                            <li><a href="07_02_icons_box.php"><i class="fa fa-cube" aria-hidden="true"></i>Icon Box</a></li>
                            <li><a href="07_03_progress.php"><i class="fa fa-tasks" aria-hidden="true"></i>Process Bar</a></li>
                            <li><a href="07_04_tabs.php"><i class="fa fa-columns" aria-hidden="true"></i>Tabs</a></li>
                        </ul>
                    </li>
                    <li class="has-sub"><a href="#">Short Code 2</a>
                        <ul>
                            <li><a href="07_05_accordion.php"><i class="fa fa-list" aria-hidden="true"></i>Accordion</a></li>
                            <li><a href="07_06_counter.php"><i class="fa fa-tachometer" aria-hidden="true"></i>Counter</a></li>
                            <li><a href="07_07_testimonials.php"><i class="fa fa-comments-o" aria-hidden="true"></i>Testimonials</a></li>
                            <li><a href="07_08_typography.php"><i class="fa fa-text-width" aria-hidden="true"></i>Typography</a></li>
                        </ul>
                    </li>
                    <li class="has-sub"><a href="#">Short Code 3</a>
                        <ul>
                            <li><a href="07_09_partner.php"><i class="fa fa-handshake-o" aria-hidden="true"></i> Partner</a></li>
                            <li><a href="07_10_team.php"><i class="fa fa-users" aria-hidden="true"></i> Team</a></li>
                            <li><a href="07_11_item_list.php"><i class="fa fa-list-ol" aria-hidden="true"></i> Item List</a></li>
                            <li><a href="07_12_divider.php"><i class="fa fa-chain-broken" aria-hidden="true"></i>Dividers</a></li>
                        </ul>
                    </li>
                    <li class="has-sub"><a href="#">Short Code 4</a>
                        <ul>
                            <li><a href="07_13_columns.php"><i class="fa fa-bar-chart" aria-hidden="true"></i> Columns</a></li>
                            <li><a href="07_14_pricing_table.php"><i class="fa fa-address-card-o" aria-hidden="true"></i> Pricing table</a></li>
                            <li><a href=""><i class="fa fa-exclamation-triangle" aria-hidden="true"></i> 404 Pages</a></li>
                            <li><a href=""><i class="fa fa-repeat" aria-hidden="true"></i> Comming soon</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li><a href="02_04_contact.php">Contact</a></li>
        </ul> -->
        <?php 
                $list_menu = $menu->getListMainMenu_byOrderASC();
                $menu->showMenu_byMultiLevel_mainMenuTraiCam($list_menu,0,$lang,0);
            ?> 
        <div class="clearfix"></div>
    </div>
</nav>
<!-- End mobile menu -->

<script>
    $(document).ready(function () {
        //-----------------menu mobile---------------------
        $('.mobile-menu-container-cms .menu-mobile-nav-cms').on('click', function (e) {
            if($(e.target).is('.icon-bar i')){
                $('#cssmenu_cms').slideToggle();
                $('#cssmenu_cms ul').slideToggle();
                $('#cssmenu_cms ul ul').hide();
            }
        });
        $('.uni-icons-close'). on('click', function (e) {
            if($(e.target).is('i')){
                $('#cssmenu_cms').hide( 500);
                $('#cssmenu_cms ul').hide(500);
            }
        });

        (function($) {

            $.fn.menumaker = function(options) {

                var cssmenu_cms = $(this), settings = $.extend({
                    title: "Menu",
                    format: "dropdown",
                    sticky: false
                }, options);

                return this.each(function() {

                    cssmenu_cms.find('li ul').parent().addClass('has-sub');

                    var multiTg = function() {
                        cssmenu_cms.find(".has-sub").prepend('<span class="submenu-button"></span>');
                        cssmenu_cms.find('.submenu-button').on('click', function() {
                            $(this).toggleClass('submenu-opened');
                            $(this).toggleClass('active');
                            if ($(this).siblings('ul').hasClass('open')) {
                                $(this).siblings('ul').removeClass('open').slideToggle();
                            }
                            else {
                                $(this).siblings('ul').addClass('open').slideToggle();
                            }
                        });
                    };

                    if (settings.format === 'multitoggle') multiTg();
                    else cssmenu_cms.addClass('dropdown');

                    if (settings.sticky === true) cssmenu_cms.css('position', 'fixed');

                    var resizeFix = function() {
                        if ($( window ).width() > 768) {
                            cssmenu_cms.find('ul').show();
                        }

                        if ($(window).width() <= 768) {
                            cssmenu_cms.find('ul').hide().removeClass('open');
                        }
                    };
                    resizeFix();
                    return $(window).on('resize', resizeFix);

                });
            };
        })(jQuery);

        (function($){
            $(document).ready(function() {
                $("#cssmenu_cms").menumaker({
                    title: "",
                    format: "multitoggle"
                });

                $("#cssmenu_cms").prepend("<div id='menu-line'></div>");

                var foundActive = false, activeElement, linePosition = 0, menuLine = $("#cssmenu_cms #menu-line"), lineWidth, defaultPosition, defaultWidth;

                $("#cssmenu_cms > ul > li").each(function() {
                    if ($(this).hasClass('active')) {
                        activeElement = $(this);
                        foundActive = true;
                    }
                });

                if (foundActive === false) {
                    activeElement = $("#cssmenu_cms > ul > li").first();
                }

                defaultWidth = lineWidth = activeElement.width();

                // defaultPosition = linePosition = activeElement.position().left;

                menuLine.css("width", lineWidth);
                menuLine.css("left", linePosition);

                $("#cssmenu_cms > ul > li").on('mouseenter', function () {
                        activeElement = $(this);
                        lineWidth = activeElement.width();
                        linePosition = activeElement.position().left;
                        menuLine.css("width", lineWidth);
                        menuLine.css("left", linePosition);
                    },
                    function() {
                        menuLine.css("left", defaultPosition);
                        menuLine.css("width", defaultWidth);
                    });
            });
        })(jQuery);
    });
</script>