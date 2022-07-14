<?php
	$send_mail = new action_email();
	$send_mail->gui_email();
?>
<div class="box_send_email_ldp_diamond">
    <h3 class="header_send_email_ldp_diamond">Đăng ký nhận tin và nhận ưu đãi</h3>

    <div class="cover_send_email_ldp_diamond">
        <form style="width:100%; position:relative;float:left; border: 1px solid #ccc;" method="post" action="">
            <input type="text" value="" placeholder="Nhập email của bạn" name="email">
            <button type="submit" name="send_email">Đăng ký</button>
        </form>
    </div>
</div>