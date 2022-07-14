<?php 
    $send_email = new action_email();

    $send_email->gui_email();
?>
<div id="Content-Email_ariotoys">
    <div class="container">
        <div class="Infor-Width_ariotoys">
            <h2 class="header_send_email_ariotoys">Đăng ký nhận tin</h2>
            <h3 class="sub_send_email_ariotoys">Vui lòng nhập Email của bạn</h3>
            <div class="box_email_ariotoys">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <form action="" method="post">
                            <div class="input-group">
                                <input type="email" name="email" class="form-control" placeholder="NHẬP EMAIL CỦA BẠN">
                                <span class="input-group-btn">
                                    <button class="btn btn-default" type="submit" name="send_email">ĐĂNG KÝ</button>
                                  </span>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div><!--end Infor-Width_ariotoys-->
    </div><!--end Center-Width_ariotoys-->
</div>