<div class="menu-mobile-nav">
    <span class="icon-bar"><i class="fa fa-bars" aria-hidden="true"></i></span>
</div>

<div class="gb-bottom-header_ldplearning sticky-menu">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="gb-bottom-header_ldplearning-text">
                    <ul>
                        <li><a href="#gioithieu"  class="slide-section">Giới thiệu</a></li>
                        <li><a href="#doituongthamgia"  class="slide-section">Đối tượng tham gia</a></li>
                        <li><a href="#cackhoahoc"  class="slide-section">Các khóa học</a></li>
                        <li><a href="#diemdocdao"  class="slide-section">Điểm đọc đáo</a></li>
                        <li><a href="#phuongphap"  class="slide-section">Phương pháp</a></li>
                        <li><a href="#banggia"  class="slide-section">Bảng giá</a></li>
                        <li><a href="#dangkyhoc"  class="slide-section">Đăng ký</a></li>
                        <li><a href="#chinhanh"  class="slide-section">Chi nhánh</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3 border-line">
                <div class="gb-bottom-header_ldplearning-hotline">
                    <i class="fa fa-phone" aria-hidden="true"></i> Hotline: <span><?= $rowConfig['content_home3'] ?></span>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function () {
        //-----------------Sticky memu-----------------
        $(".sticky-menu").sticky({topSpacing:0});

        //-----------------scroll-------------------------------------
        var headerHeight = $('.gb-bottom-header_ldplearning').outerHeight();

        $('.slide-section').click(function (e) {
            var linkHref = $(this).attr('href');
            $('html, body').animate({
                scrollTop: $(linkHref).offset().top - headerHeight
            }, 1000);
        });

        $('.menu-mobile-nav').click(function () {
            $('.gb-bottom-header_ldplearning').slideToggle();
        });
    });
</script>