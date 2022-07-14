<nav class="gb-main-menu_remmanh sticky-menu" >
    <div class="container">
        <nav class="main-navigation uni-menu-text_remmanh">
            <div class="cssmenu">
                <!-- <ul>
                    <li><a href="" class="slide-section">Trang chủ</a></li>
                    <li><a href="#hinh-anh"  class="slide-section">Hình ảnh</a></li>
                    <li><a href="#nhung-loi-ich-chi-co-tai-tlc"  class="slide-section">Rèm cửa TLC</a></li>
                    <li><a href="#cac-du-an-tieu-bieu"  class="slide-section">Dự án tiêu biểu</a></li>
                    <li><a href="#quy-trinh"  class="slide-section">Quy trình đặt hàng</a></li>
                    <li><a href="#chia-se-tu-khach-hang"  class="slide-section">Cảm nhận khách hàng</a></li>
                    <li><a href="#lien-he"  class="slide-section">Liên hệ</a></li>
                </ul> -->
                <?php 
                    $list_menu = $menu->getListMainMenu_byOrderASC();
                    $menu->showMenu_byMultiLevel_mainMenuRemManh($list_menu,0,$lang,0);
                ?>
            </div>
        </nav>
    </div>
</nav>

<script src="./plugin/sticky/jquery.sticky.js"></script>
<script>
    $(document).ready(function () {
       var headerHeight = $('.gb-main-menu_remmanh').outerHeight();

        $('.slide-section').click(function () {
           var linkHref = $(this).attr('href');
           $('html, body').animate({
               scrollTop: $(linkHref).offset().top - headerHeight
           }, 1000);
           e.preventDefault();
        });

        $(".sticky-menu").sticky({topSpacing:0});
    });
</script>