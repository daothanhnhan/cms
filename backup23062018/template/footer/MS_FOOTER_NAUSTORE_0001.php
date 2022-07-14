<footer class="site-footer footer-default">
    <div class="footer-main-content_naustore">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="footer-main-content_naustore-element">
                        <aside class="widget-footer">
                            <h3 class="widget-title-footer-naustore uni-uppercase">Connect with us</h3>
                            <div class="widget-content">
                                <div class="footer-about-naustore">
                                    <p><?= $rowConfig['web_email'] ?></p>
                                    <?php include DIR_SOCIAL."MS_SOCIAL_NAUSTORE_0002.php";?>
                                </div>
                            </div>
                        </aside>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="footer-main-content_naustore-element">
                        <aside class="widget-footer">
                            <h3 class="widget-title-footer-naustore uni-uppercase">Recent post</h3>
                            <div class="widget-content">
                                <div class="footer-recentpost-naustore">
                                    <?php
                                        $action = new action_news();
                                        $list_news_recent = $action->getListNewsNew_hasLimit(2);
                                        foreach ($list_news_recent as $item) {
                                    ?>
                                        <div class="footer-recentpost-naustore-item">
                                            <div class="footer-recentpost-naustore-item-img">
                                                <a href="/<?= $item['friendly_url'] ?>">
                                                    <img src="/images/<?= $item['news_img'] ?>" alt="" class="img-responsive">
                                                </a>
                                            </div>
                                            <div class="footer-recentpost-naustore-item-text">
                                                <h5><a href="/<?= $item['friendly_url'] ?>"><?= $item['news_name'] ?></a></h5>
                                            </div>
                                        </div>
                                    <?php } ?>
                                </div>
                            </div>
                        </aside>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="footer-main-content_naustore-element">
                        <aside class="widget-footer">
                            <h3 class="widget-title-footer-naustore uni-uppercase">Newsletter</h3>
                            <div class="widget-content">
                                <?php include DIR_EMAIL."MS_EMAIL_NAUSTORE_0001.php";?>
                            </div>
                        </aside>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="footer-main-content_naustore-element">
                        <aside class="widget-footer">
                            <h3 class="widget-title-footer-naustore uni-uppercase">Fanpage</h3>
                            <div class="widget-content">
                                <div class="footer-fanpage-naustore">
                                    <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Ffacebook&tabs=timeline&width=262&height=202&small_header=true&adapt_container_width=true&hide_cover=false&show_facepile=true&appId=220693348668109" width="262" height="202" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
                                </div>
                            </div>
                        </aside>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright-area_naustore">
        <div class="container">
            <div class="copyright-content_naustore">
                <p class="copyright-text_naustore">© Copyright 2017. All rights reserved. Design by Goldbridge</p>
            </div>
        </div>
    </div>
</footer>