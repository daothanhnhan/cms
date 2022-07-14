<script src="./plugin/sticky/jquery.sticky.js"></script>
<nav class="gb-header_ldpgreencoffee sticky-menu row">
    <!--icons mobiles-->
    <div class="icons-nav-mobile_ldpgreencoffee">
        <i class="fa fa-bars" aria-hidden="true"></i>
    </div>

    <!--MENU TEXT-->
    <div class="gb-menu-text_ldpgreencoffee">
        <ul>
            <li><a href="#trangchu" class="slide-section">Trang chủ</a></li>
            <li><a href="#tacdung" class="slide-section">Tác dụng</a></li>
            <li><a href="#giatridinhduong" class="slide-section">Giá trị dinh dưỡng</a></li>
            <li><a href="#nghiencuulamsang" class="slide-section">Nghiên cứu</a></li>
            <li><a href="#danhgia" class="slide-section">Đánh giá</a></li>
            <li><a href="#dathang" class="slide-section">Đặt hàng ngay</a></li>
        </ul>
    </div>
</nav>

<script>
    $(document).ready(function () {
       $('.icons-nav-mobile_ldpgreencoffee').click(function () {
           $('.gb-menu-text_ldpgreencoffee ul').slideToggle();
       });
    });
    //-----------------Sticky memu-----------------
    $(".sticky-menu").sticky({topSpacing:0});

    //--------------menu scroll-----------
    var headerHeight = $('.gb-header_ldpgreencoffee').outerHeight();
    $('.slide-section').click(function (e) {
       var linkHref= $(this).attr('href');
       $('html, body').animate({
          scrollTop: $(linkHref).offset().top -headerHeight
       }, 1000);
       e.preventDefault();
    });
</script>