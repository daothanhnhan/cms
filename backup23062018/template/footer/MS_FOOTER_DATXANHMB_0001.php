<footer class="site-footer footer-default">
    <div class="footer-main-content_datxanhmienbac">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="footer-main-content_datxanhmienbac-element">
                        <aside class="widget-footer">
                            <h3 class="widget-title uni-uppercase">&nbsp;</h3>
                            <div class="widget-content">
                                <div class="footer-about">
                                    <a href="/"><img src="/images/<?= $rowConfig['icon_web'] ?>" alt="" class="img-responsive"></a>
                                </div>
                            </div>
                        </aside>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="footer-main-content_datxanhmienbac-element">
                        <aside class="widget-footer">
                            <h3 class="widget-title uni-uppercase"><?= $rowConfig['web_name'] ?></h3>
                            <div class="widget-content">
                                <?php include DIR_CONTACT."MS_CONTACT_DATXANHMB_0001.php";?>
                            </div>
                        </aside>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="footer-main-content_datxanhmienbac-element">
                        <aside class="widget-footer">
                            <h3 class="widget-title uni-uppercase">Danh mục nội dung</h3>
                            <div class="widget-content">
                                <div class="foot-danhmuc-noidung">
                                    <ul class="foot-danhmuc-noidung-list">
                                        <li><a href="">Tel: <?= $rowConfig['content_home3'] ?></a></li>
                                        <li><a href="">Fax: (04) 62688811</a></li>
                                        <li>Website: <a href="">datxanhmienbac.com.vn</a></li>
                                        <li>Email:<a href=""> <?= $rowConfig['content_home2'] ?></a></li>
                                        <li><a href="">Chính sách bảo mật</a></li>
                                    </ul>
                                </div>
                            </div>
                        </aside>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright-area">
        <div class="container">
            <div class="copyright-content">
                <div class="row">
                    <div class="col-md-6">
                        <div class="footer-social">
                            <?php include DIR_SOCIAL."MS_SOCIAL_DATXANHMB_0001.php";?>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <p class="copyright-text">© Copyright 2017. All rights reserved. Design by Goldbridge</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>