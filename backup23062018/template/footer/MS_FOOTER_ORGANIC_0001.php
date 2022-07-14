<footer class="site-footer footer-default">
    <div class="footer-main-content_organic">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="footer-main-content_organic-element">
                        <aside class="widget-footer">
                            <h3 class="widget-title-footer-organic uni-uppercase">OF'H Cosmetic</h3>
                            <div class="widget-content">
                                <div class="footer-about-organic">
                                    <p><?= $rowConfig['web_email'] ?></p>
                                    <?php include DIR_SOCIAL."MS_SOCIAL_ORGANIC_0002.php";?>
                                </div>
                            </div>
                        </aside>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="footer-main-content_organic-element">
                        <aside class="widget-footer">
                            <h3 class="widget-title-footer-organic uni-uppercase">Thông tin liên hệ</h3>
                            <div class="widget-content">
                                <div class="footer-recentpost-organic">
                                    <!-- <?php
                                        $news = new action_news();
                                        $list_news_new = $news->getListNewsNew_hasLimit(2);
                                        foreach ($list_news_new as $item) {
                                    ?>
                                        <div class="footer-recentpost-organic-item">
                                            <div class="footer-recentpost-organic-item-img">
                                                <a href="/<?= $item['friendly_url'] ?>">
                                                    <img src="/images/<?= $item['news_img'] ?>" alt="" class="img-responsive">
                                                </a>
                                            </div>
                                            <div class="footer-recentpost-organic-item-text">
                                                <h5><a href="/<?= $item['friendly_url'] ?>"><?= $item['news_name'] ?></a></h5>
                                            </div>
                                        </div>
                                    <?php } ?> -->
                                    <ul>
                                        <li><span>Trụ sở: </span> <br><?= $rowConfig['content_home1'] ?></li>
                                        <li><span>Hotline: </span> <br><?= $rowConfig['content_home3'] ?> </li>
                                        <li><span>Zalo</span> <br><?= $rowConfig['content_home3'] ?></li>
                                        <li><span>Email: </span> <?= $rowConfig['content_home2'] ?></li>
                                    </ul>
                                </div>
                            </div>
                        </aside>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="footer-main-content_organic-element">
                        <aside class="widget-footer">
                            <h3 class="widget-title-footer-organic uni-uppercase">Đăng ký nhận tin</h3>
                            <div class="widget-content">
                                <?php include DIR_EMAIL."MS_EMAIL_ORGANIC_0001.php";?>
                            </div>
                        </aside>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="footer-main-content_organic-element">
                        <aside class="widget-footer">
                            <h3 class="widget-title-footer-organic uni-uppercase">Fanpage</h3>
                            <div class="widget-content">
                                <div class="footer-fanpage-organic">
                                    <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fofhcosmetics%2F&tabs=timeline&width=263&height=300&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId=115637562511563" width="263" height="300" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
                                </div>
                            </div>
                        </aside>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright-area_organic">
        <div class="container">
            <div class="copyright-content_organic">
                <p class="copyright-text_organic">© Copyright 2017. All rights reserved. Design by Goldbridge</p>
            </div>
        </div>
    </div>
</footer>