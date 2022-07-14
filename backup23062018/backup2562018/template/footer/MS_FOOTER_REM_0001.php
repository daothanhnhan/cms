<footer class="site-footer footer-default">
    <div class="footer-main-content_naustore">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="footer-main-content_naustore-element">
                        <aside class="widget-footer">
                            <h3 class="widget-title-footer-naustore uni-uppercase">About Us</h3>
                            <div class="widget-content">
                                <div class="footer-about-naustore">
                                    <p>
                                        Chào mừng bạn đã ghé thăm Amazing Art. Đây là website chuyên bán các loại tranh in trên vải (canvas), tất cả các mẫu đưa lên đây đều được mua lại từ những nơi bán hình ảnh chất lượng và có bản quyền dùng để in tranh với kích thước lớn. Chúng tôi luôn cập nhất những mẫu mới nhất, thịnh hành và xu hướng theo thời đại.
                                    </p>
                                    <?php include DIR_SOCIAL."MS_SOCIAL_REM_0002.php";?>
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
                                        $news = new action_news();
                                        $list_news_bot = $news->getListNewsNew_hasLimit(2);
                                        foreach ($list_news_bot as $item) {
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
                                <?php include DIR_EMAIL."MS_EMAIL_REM_0001.php";?>
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
                                    <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Ftranhtrangtrihiendai&tabs=timeline&width=340&height=300px&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId=176177179839531" width="340" height="250" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
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
                <p class="copyright-text_naustore">© Copyright 2017. All rights reserved. Designed by Goldbridge</p>
            </div>
        </div>
    </div>
</footer>