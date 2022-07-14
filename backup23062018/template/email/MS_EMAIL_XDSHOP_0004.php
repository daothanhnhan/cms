<?php
	$send_email = new action_email();
	$send_email->gui_email();
?>
<div class="gb-news-letter_xdshop">
    <div class="uni-footer-newletter_xdshop">
        <p>Nhận tin khuyến mãi sản phẩm mới nhất từ chúng tôi. Hãy nhập email của bạn vào bên dưới</p>
        <div class="input-group">
        	<form action="" method="post" accept-charset="utf-8">
        		<input type="email" class="form-control" placeholder="Nhập email của bạn">
	            <span  class="input-group-btn">
	                <button style="position: absolute;" class="btn btn-theme" type="submit" name="send_email">
	                	<i class="fa fa-paper-plane" aria-hidden="true"></i>
	                </button>
	            </span>
        	</form>
        </div>
    </div>
</div>