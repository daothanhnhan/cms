<?php 
    $lien_he1 = new action_email();
    $lien_he1->lien_he();
?>
<div id="WrapperContent_ariotoys">
    <div id="Content-mainContact_ariotoys">
        <?php include DIR_BREADCRUMS."MS_BREADCRUMS_ARIOTOYS_0001.php";?>
        <div class="container">
            <div class="Infor-Width_ariotoys">
                <p class="subNamePage_ariotoys">Liên hệ</p>
                <h1 class="titleMainPage_ariotoys">Liên Hệ Ngay Với Chúng Tôi</h1>
                <div class="row">
                    <div class="col-md-6">
                        <div class="leftContactPage_ariotoys">
                            <h1>Công ty TNHH TMĐT Phân Phối RIO</h1>
                            <h2 class="desContactPage_ariotoys">Mọi ý kiến đóng góp, thắc mắc xin quý khách vui lòng liên hệ theo thông tin dưới đây đễ nhận được sự hỗ trợ nhanh và chính xác nhất.<br /><br />Chúng tôi luôn coi trọng đánh giá từ phía các bạn, đây là cơ sở để chúng tôi cải thiện và hoàn thiện hệ thống dịch vụ của mình.</h2>
                            <div class="rowPageContact_ariotoys"><i class="fa fa-map-signs" aria-hidden="true"></i><h3><?= $rowConfig['content_home1'] ?></h3></div>
                            <div class="rowPageContact_ariotoys"><i class="fa fa-phone" aria-hidden="true"></i><h3>Hotline: <strong><?= $rowConfig['content_home3'] ?></strong> (24/7)<br />Điện thoại: <strong><?= $rowConfig['content_home6'];?></strong> (Hành chính)<!-- <br />Kỹ Thuật: <strong><?= $rowConfig['content_home10'];?></strong> (Hành chính) --></h3></div>
                            <div class="rowPageContact_ariotoys"><i class="fa fa-envelope-o" aria-hidden="true"></i><h3><?= $rowConfig['content_home2'];?><br /><?= $rowConfig['content_home5'];?></h3></div>
                            <div class="rowPageContact_ariotoys"><i class="fa fa-calendar" aria-hidden="true"></i><h3><strong style="color:#0F8C97;">Thứ 2 - Thứ 7: </strong>7h30 - 17h30<br /><strong style="color:#0F8C97;">Chủ Nhật:</strong> 8h00 - 16h00</h3></div>

                            <?php include_once DIR_SOCIAL."MS_SOCIAL_ARIOTOYS_0002.php" ;?>

                        </div>
                    </div>
                    <div class="col-md-6">
                        <form action="" method="post">
                            <div class="rightContactPage_ariotoys form-group">
                                <input type="text" name="name" class="txtCT form-control" placeholder="Họ Tên" />
                                <input type="text" name="phone" class="txtCT form-control" placeholder="Điện Thoại" />
                                <input type="text" name="email" class="txtCT form-control" placeholder="Email" />
                                <textarea class="longTXTCT" name="note" placeholder="Nội dung...."></textarea>
                                <button class="btnCT" name="lien_he">Gửi Yêu Cầu</button>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- <div class="rowMap">
                    <?= $rowConfig['content_home9'];?>
                </div> -->
            </div><!--end Infor-Width_ariotoys-->
        </div><!--end Center-Width_ariotoys-->
    </div><!--end Content-mainContact_ariotoys-->
</div>