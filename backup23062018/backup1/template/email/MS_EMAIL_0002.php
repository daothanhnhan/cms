<?php 
    $send_email = new action_email();

    $send_email->gui_email();
?>
<div class="uni-footer-newletter-cms">
    <aside class="widget">
        <h3 class="widget-title-cms uni-uppercase">Newsletter</h3>
        <div class="widget-content">
            <div class="input-group">
                <form action="" method="post">
                    <input type="email" class="form-control" name="email" placeholder="Enter your email" required style="width: 83%;">
                    <span class="input-group-btn">
                        <button class="btn btn-theme" type="submit" name="send_email"><i class="fa fa-paper-plane" aria-hidden="true"></i></button>
                    </span>
                </form>
                
            </div>
            <p>Subscribe to newsletter and promotions.</p>
        </div>
    </aside>
</div>