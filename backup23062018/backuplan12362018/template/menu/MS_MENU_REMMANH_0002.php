<nav class="visible-sm visible-xs mobile-menu-container_remmanh mobile-nav_remmanh">
    <div class="menu-mobile-nav_remmanh">
        <span class="icon-bar"><i class="fa fa-bars" aria-hidden="true"></i></span>
    </div>
    <div id="cssmenu" class="animated">
        <div class="uni-icons-close_remmanh"><i class="fa fa-times" aria-hidden="true"></i></div>
        <ul class="nav navbar-nav animated">
            <li><a href="" class="slide-section">Trang chủ</a></li>
            <li><a href="#hinh-anh"  class="slide-section">Hình ảnh</a></li>
            <li><a href="#nhung-loi-ich-chi-co-tai-tlc"  class="slide-section">Rèm cửa TLC</a></li>
            <li><a href="#cac-du-an-tieu-bieu"  class="slide-section">Dự án tiêu biểu</a></li>
            <li><a href="#quy-trinh"  class="slide-section">Quy trình đặt hàng</a></li>
            <li><a href="#chia-se-tu-khach-hang"  class="slide-section">Cảm nhận khách hàng</a></li>
            <li><a href="#lien-he"  class="slide-section">Liên hệ</a></li>
        </ul>
        <div class="clearfix"></div>
    </div>
</nav>

<script>
    $(document).ready(function () {
        //-----------------menu mobile---------------------
        $('.mobile-menu-container_remmanh .menu-mobile-nav_remmanh').on('click', function (e) {
            if($(e.target).is('.icon-bar i')){
                $('#cssmenu').slideToggle();
                $('#cssmenu ul').slideToggle();
                $('#cssmenu ul ul').hide();
            }
        });
        $('.uni-icons-close_remmanh'). on('click', function (e) {
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
                    return $(window).on('resize', resizeFix);

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