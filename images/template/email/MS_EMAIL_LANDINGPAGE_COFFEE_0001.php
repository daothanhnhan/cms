<!--ĐẶT HÀNG-->
<?php 
    $email = new action_email();
    $email->dat_hang();
?>
<div class="gb-dathang_ldpgreencoffee" id="dathang">
    <div class="container">
        <div class="gb-dathang_ldpgreencoffee-body row"  data-parallax="scroll" data-image-src="/images/slide7.jpg">
            <div class="col-md-8 col-md-offset-2">
                <div class="gb-dathang_ldpgreencoffee-tile">
                    <h2>Đặt hàng!</h2>
                </div>
            </div>
            <div class="col-md-10 col-md-offset-1">
                <div class="gb-dathang_ldpgreencoffee-content">
                    <div class="col-md-3 col-md-offset-1">
                        <?php include DIR_CART."MS_CART_LANDINGPAGE_COFFEE_0002.php";?>
                    </div>
                    <div class="col-md-4 clear-padding">
                        <div class="gb-dathang_ldpgreencoffee-form">
                            <form action="" method="post">
                                <div class="form-group">
                                    <select name="location" id="" class="form-control">
                                        <option value="">--chọn quốc gia--</option>
                                        <option value="vietnam">Việt Nam</option>
                                        <option value="lao">Lào</option>
                                        <option value="thailan">Thái lan</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Họ và tên: </label>
                                    <input type="text" class="form-control" name="name" required="">
                                </div>
                                <div class="form-group">
                                    <label>Số điện thoại: </label>
                                    <input type="phone" class="form-control" name="phone" required="">
                                </div>
                                <div class="form-group">
                                    <label>Email: </label>
                                    <input type="email" class="form-control" name="email" required="">
                                </div>
                                <?php include DIR_CART."MS_CART_LANDINGPAGE_COFFEE_0003.php";?>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="gb-dathang_ldpgreencoffee-time">
                            <h4>THỜI GIAN CÒN LẠI TRƯỚC KHI KẾT THÚC KHUYẾN MẠI:</h4>
                            <div class="vk-uu-dai-left-time">
                                            <span class="countdown-section">
                                                <span class="count-amount" id="days">12</span>
                                                <span class="countdown-period">Ngày</span>
                                            </span>
                                <span class="countdown-section">
                                                <span class="count-amount" id="hour">07</span>
                                                <span class="countdown-period">Giờ</span>
                                            </span>
                                <span class="countdown-section">
                                                <span class="count-amount" id="minutes">23</span>
                                                <span class="countdown-period">Phút</span>
                                            </span>
                                <span class="countdown-section">
                                                <span class="count-amount" id="second">45</span>
                                                <span class="countdown-period">Giây</span>
                                            </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="/plugin/parallax/parallax.min.js"></script>
<?php
    $date = $rowConfig['date_event'];
    $y = substr($date, 0, 4);
    $m = substr($date, 5, 2);
    $d = substr($date, 8, 2);
?>
<script>

    $(document).ready(function () {

        //lấy thời gian kết thúc
        var eventTime = new Date("<?= $y?>,<?= $m ?>,<?= $d ?>").getTime();
        function countdown() {


            // Get todays date and time
            var currentTime = new Date().getTime();
            var remTime = eventTime -currentTime;
            var d = Math.floor(remTime / (1000 * 60 * 60 * 24));
            var h = Math.floor((remTime % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            var m = Math.floor((remTime % (1000 * 60 * 60)) / (1000 * 60));
            var s = Math.floor((remTime % (1000 * 60)) / 1000);
            h %=24;
            m %=60;
            s %=60;
            h=(h<10)? "0" +h:h;
            m=(m<10)? "0" +m:m;
            s=(s<10)? "0" +s:s;
            document.getElementById("days").textContent=d;
            // document.getElementById("days").textContent=d;
            document.getElementById("days").innerText=d;

            document.getElementById("hour").textContent=h;
            document.getElementById("minutes").textContent=m;
            document.getElementById("second").textContent=s;
            setTimeout(countdown, 1000);
        }
        countdown();
    });
</script>