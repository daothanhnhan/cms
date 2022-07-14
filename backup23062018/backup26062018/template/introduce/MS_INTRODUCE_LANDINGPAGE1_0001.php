<?php
    $action = new action_news();
    $post_introduce = $action->getNewsDetail_byId(51, $lang);
?>
<div id="gioithieu" class="gb-vechusngtoi-home_ldplearning">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="gb-vechusngtoi-home_ldplearning-left">
                    <div class="title-left">
                        <h4>Welcome To</h4>
                        <h3><?= $post_introduce['news_name'] ?></h3>
                    </div>
                    <?= $post_introduce['news_content'] ?>
                    <!-- <p>One of the world's leading hospitals providing safe &
                        compassionate care at its best for everyone. Atque
                        commodi molestiae consectetur..
                    </p>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        Atque commodi molestiae autem fugit consectetur dolor
                        ullam illo ipsa numquam, quod iusto enim ipsum amet
                        iusto amet consec.Lorem ipsum dolor sit amet,
                        consectetur adipisicing elit. Atque commodi
                        molestiae autem fugit consectetur dolor ullam
                        illo ipsa numquam, quod iusto enim ipsum amet
                        iusto amet consec
                    </p> -->
                    <img src="/images/signature.png" alt="" class="img-responsive">
                    <div class="btn-dangky">
                        <a href="">Register Now</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="gb-vechusngtoi-home_ldplearning-right">
                    <img src="/images/<?= $post_introduce['news_img'] ?>" alt="" class="img-responsive">
                </div>
            </div>
        </div>
    </div>
</div>