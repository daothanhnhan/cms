<?php 
    $lien_he1 = new action_email();
    $lien_he1->lien_he();
?>
<div class="uni-send-a-message-cms">
    <div class="uni-contact-title-cms">
        <h3>Send a message</h3>
        <div class="uni-line"></div>
    </div>
    <div class="uni-send-a-message-cms-body">
        <form action="" method="post">
            <div class="input-group form-group">
                <span class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i></span>
                <input type="text" class="form-control" name="name" value="" placeholder="your name" required>
            </div>
            <div class="input-group form-group">
                <span class="input-group-addon"><i class="fa fa-phone" aria-hidden="true"></i></span>
                <input type="number" class="form-control" name="phone" value="" placeholder="phone number" required>
            </div>
            <div class="input-group form-group">
                <span class="input-group-addon"><i class="fa fa-envelope" aria-hidden="true"></i></span>
                <input type="email" class="form-control" name="email" value="" placeholder="email" required>
            </div>
            <div class="input-group form-group">
                <textarea id="message" name="note" class="form-control" placeholder="note"></textarea>
            </div>

            <button class="vk-btn vk-btn-send" type="submit" name="lien_he">send</button>
        </form>
    </div>
</div>