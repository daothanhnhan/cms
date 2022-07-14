<link rel="stylesheet" href="/plugin/slickNav/slicknav.css"/>
<link rel="stylesheet" href="/plugin/slick/slick.css"/>
<link rel="stylesheet" href="/plugin/slick/slick-theme.css"/>

<div class="gb-custommer_organic">
    <div class="container">
        <div class="gb-news-blog_organic-title">
            Ý KIẾN KHÁCH HÀNG
        </div>
        <div class="gb-custommer_organic-content-text">
            <div class="slider slider-for">
                <div class="slide-item">
                    <div class="gb-custommer_organic-content">
                        <p>
                            Ngay trong lần đầu tiên sử dụng tôi đã cảm nhận được sự khác biệt của sản phẩm. Đầu mát xa nhẹ nhàng cùng cảm giác ấm nóng với nhiệt lượng thấm sâu qua làn da vừa tạo ra sự thư giãn cho người sử dụng vừa có tác dụng kích thích quá trình trẻ hóa và săn chắc làn da. Sau một tháng sử dụng OF'H COSMETIC làn da của tôi đã trở nên căng mịn, tôi cảm thấy làn da mịn màng và "mướt" hơn, ngoài ra các lỗ chân lông cũng se khít hơn.
                        </p>
                    </div>
                </div>
                <div class="slide-item">
                    <div class="gb-custommer_organic-content">
                        <p>
                            Bạn xem có sự thay đổi nào trên khuôn mặt của tôi không? Mặt tôi lúc trước khi massage với OF'H COSMETIC trông thật tệ. Thường xuyên sử dụng chắc chắn hiệu quả sẽ tốt hơn và kết quả thấy được ngay những lần sử dụng đầu tiên thật tuyệt.
                        </p>
                    </div>
                </div>
                <div class="slide-item">
                    <div class="gb-custommer_organic-content">
                        <p>
                            Sau khi sử dụng OF'H COSMETIC, rửa sạch mặt và ngắm mình trong gương, tôi nghĩ mặt mình trông thật là hấp dẫn. Các điểm đen trên da chưa thể hết ngay. Tuy nhiên vào sáng hôm sau làn da sẽ đẹp và trắng sáng hơn hẳn.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="gb-custommer_organic-content-img">
            <div class="slider slider-nav">
                <div class="slide-item-nav"><img src="/images/custommer/testi-1-130x130.jpg" alt="" class="img-responsive img-circle"></div>
                <div class="slide-item-nav"><img src="/images/custommer/testi-2-130x130.jpg" alt="" class="img-responsive img-circle"></div>
                <div class="slide-item-nav"><img src="/images/custommer/testi-3-130x130.jpg" alt="" class="img-responsive img-circle"></div>
                <div class="slide-item-nav"><img src="/images/custommer/testi-4-130x130.jpg" alt="" class="img-responsive img-circle"></div>
                <div class="slide-item-nav"><img src="/images/custommer/testi-5-130x130.jpg" alt="" class="img-responsive img-circle"></div>
                <div class="slide-item-nav"><img src="/images/custommer/testi-6-130x130.jpg" alt="" class="img-responsive img-circle"></div>
                <div class="slide-item-nav"><img src="/images/custommer/testi-7-130x130.jpg" alt="" class="img-responsive img-circle"></div>
            </div>
        </div>
    </div>
</div>

<script src="/plugin/slick/scripts.js"></script>
<script src="/plugin/slick/slick.js"></script>
<script src="/plugin/slickNav/jquery.slicknav.js"></script>

<script type="text/javascript">
    $(document).ready(function() {
        $('.slider-for').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            speed: 500,
            arrows: false,
            fade: true,
            asNavFor: '.slider-nav'
        });
        $('.slider-nav').slick({
            slidesToShow: 4,
            slidesToScroll: 1,
            speed: 500,
            asNavFor: '.slider-for',
            dots: false,
            focusOnSelect: true,
            slide: 'div'
        });
    });
</script>