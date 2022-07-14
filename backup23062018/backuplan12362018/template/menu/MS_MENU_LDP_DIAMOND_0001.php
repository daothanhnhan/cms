<div class="menu-mobile-nav_ldp_daimond">
    <span class="icon-bar"><i class="fa fa-bars" aria-hidden="true"></i></span>
</div>

<div class="gb-bottom-header">
    <div class="container">
        <div class="gb-bottom-header-text">
            <!-- <ul>
                <li><a href="#" class="slide-section">Trang chủ</a></li>
                <li><a href="#gioithieu" class="slide-section">Giới thiệu</a></li>
                <li><a href="#sanpham" class="slide-section">Sản phẩm</a></li>
                <li><a href="#baogia" class="slide-section">Báo giá</a></li>
                <li><a href="#solieu" class="slide-section">Số liệu</a></li>
                <li><a href="#camnang" class="slide-section">Cẩm nang</a></li>
                <li><a href="#hinhanh" class="slide-section">Hình ảnh</a></li>
                <li><a href="#lienhe" class="slide-section">Liên hệ</a></li>
            </ul> -->
             <?php
                $list_menu = $menu->getListMainMenu_byOrderASC();
                $menu->showMenu_byMultiLevel_mainMenuKC($list_menu,0,$lang,0);
            ?>
        </div>
    </div>
</div>

<script>
    $(document).ready(function () {
        //-----------------scroll-------------------------------------
        var headerHeight = $('.gb-header_ldp_diamond').outerHeight();

        $('.slide-section').click(function (e) {
            var linkHref = $(this).attr('href');
            $('html, body').animate({
                scrollTop: $(linkHref).offset().top - headerHeight
            }, 1000);
        });

        $('.menu-mobile-nav_ldp_daimond').click(function () {
            $('.gb-bottom-header').slideToggle();
        });
    });
</script>