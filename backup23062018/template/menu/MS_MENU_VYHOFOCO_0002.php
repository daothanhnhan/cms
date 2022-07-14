<nav class="visible-sm visible-xs mobile-menu-container mobile-nav">
    <div class="menu-mobile-nav">
        <span class="icon-bar"><i class="fa fa-bars" aria-hidden="true"></i></span>
    </div>
    <div id="cssmenu" class="animated">
        <div class="uni-icons-close"><i class="fa fa-times" aria-hidden="true"></i></div>
            <ul class="nav navbar-nav animated" style="display: block;">
                <li><a href="/">Trang chủ</a></li>
                <li><a href="/gioi-thieu">Giới thiệu</a></li>
                <li class="has-sub">
                    <a href="/san-pham">Sản phẩm</a>
                    <ul>
                         <?php
                            $action = new action_product();
                            $list_menu_product = $action->getProductCat_byProductCatIdParent(0, '');
                            foreach ($list_menu_product as $item) {
                                $rowLang = $action->getProductCatLangDetail_byId($item['productcat_id'], $lang);
                                $row1 = $action->getProductCatDetail_byId($item['productcat_id'], $lang);
                        ?>
                            <li class="has-sub">
                                <a href="/<?= $rowLang['friendly_url'] ?>"><?= $rowLang['lang_productcat_name'] ?></a>
                                <ul>
                                    <?php
                                        $list_menu_product_sub = $action->getProductCat_byProductCatIdParent($item['productcat_id'],'');
                                        foreach ($list_menu_product_sub as $item_sub) {
                                            $rowLang = $action->getProductCatLangDetail_byId($item_sub['productcat_id'], $lang);
                                            $row1 = $action->getProductCatDetail_byId($item_sub['productcat_id'], $lang);
                                    ?>
                                    <li><a href="/<?= $rowLang['friendly_url'] ?>"><?= $rowLang['lang_productcat_name'] ?></a></li>
                                    <?php } ?>
                                </ul>
                            </li>
                        <?php } ?>
                    </ul>
                </li>
                <li><a href="/cua-hang">Hệ thống cửa hàng</a></li>
                <li class="has-sub">
                    <a href="/tin-tuc">Blog</a>
                    <ul>
                        <?php
                            $menu_news = new action_news();
                            $list_menu_news = $menu_news->getNewsCat_byNewsCatIdParent(0,'');
                            foreach ($list_menu_news as $item_news) {
                                $rowLang = $menu_news->getNewsCatLangDetail_byId($item_news['newscat_id'], $lang);
                                $row1 = $menu_news->getNewsCatDetail_byId($item_news['newscat_id'], $lang);
                        ?>
                            <li><a href="/<?= $rowLang['friendly_url'] ?>"><?= $rowLang['lang_newscat_name'] ?></a></li>
                        <?php } ?>
                    </ul>
                </li>
                <li class="has-sub"><a href='#'>Dịch vụ</a>
                    <ul>
                        <li><a href="/dat-giay-theo-yeu-cau">Đóng giày theo yêu cầu</a></li>
                        <li><a href="/thay-de-giay">Thay đế giày</a></li>
                        <li class="has-sub"><a href="#">Bảo hành</a>
                            <ul>
                                <li><a href="/chinh-sach-bao-hanh">Điều kiện bảo hành</a></li>
                            </ul>
                        </li>
                        <li class="has-sub"><a href="hau-mai">Hậu mãi</a>
                            <ul>
                                <li><a href="/phuc-hoi-giay-6-buoc">Chăm sóc giày</a></li>
                                <li><a href="/chinh-sach-doi-tra">Đổi trả</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li><a href="/lien-he">Liên hệ</a></li>
            </ul>
        <div class="clearfix"></div>
    </div>
</nav>

<script>
    $(document).ready(function () {
        //-----------------menu mobile---------------------
        $('.mobile-menu-container .menu-mobile-nav').on('click', function (e) {
            if($(e.target).is('.icon-bar i')){
                $('#cssmenu').slideToggle();
                $('#cssmenu ul').slideToggle();
                $('#cssmenu ul ul').hide();
            }
        });
        $('.uni-icons-close'). on('click', function (e) {
            if($(e.target).is('i')){
                $('#cssmenu').hide( 500);
                $('#cssmenu ul').hide(500);
            }
        });

        (function($) {

            $.fn.menumaker = function(options) {

                var cssmenu = $(this), settings = $.extend({
                    title: "Menu",
                    format: "dropdown",
                    sticky: false
                }, options);

                return this.each(function() {

                    cssmenu.find('li ul').parent().addClass('has-sub');

                    var multiTg = function() {
                        cssmenu.find(".has-sub").prepend('<span class="submenu-button"></span>');
                        cssmenu.find('.submenu-button').on('click', function() {
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
                    else cssmenu.addClass('dropdown');

                    if (settings.sticky === true) cssmenu.css('position', 'fixed');

                    var resizeFix = function() {
                        if ($( window ).width() > 768) {
                            cssmenu.find('ul').show();
                        }

                        if ($(window).width() <= 768) {
                            cssmenu.find('ul').hide().removeClass('open');
                        }
                    };
                    resizeFix();
                    // return $(window).on('resize', resizeFix);

                });
            };
        })(jQuery);

        (function($){
            $(document).ready(function() {
                $("#cssmenu").menumaker({
                    title: "",
                    format: "multitoggle"
                });

                $("#cssmenu").prepend("<div id='menu-line'></div>");

                var foundActive = false, activeElement, linePosition = 0, menuLine = $("#cssmenu #menu-line"), lineWidth, defaultPosition, defaultWidth;

                $("#cssmenu > ul > li").each(function() {
                    if ($(this).hasClass('active')) {
                        activeElement = $(this);
                        foundActive = true;
                    }
                });

                if (foundActive === false) {
                    activeElement = $("#cssmenu > ul > li").first();
                }

                defaultWidth = lineWidth = activeElement.width();

                // defaultPosition = linePosition = activeElement.position().left;

                menuLine.css("width", lineWidth);
                menuLine.css("left", linePosition);

                $("#cssmenu > ul > li").on('mouseenter', function () {
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