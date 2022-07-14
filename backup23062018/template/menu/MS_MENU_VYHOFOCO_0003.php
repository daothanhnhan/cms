<div class="gb-header-center_vyhofoco">
        <div class="uni-main-menu-center_vyhofoco">
            <div class="container">
                <div class="main-menu css">
                    <div class="wrapper-logo">
                        <h1><a href="/" class="logo-default"><img src="/images/<?= $rowConfig['web_logo'] ?>" alt style="width: 70%;    margin-left: 50px;"></a></h1>
                        <div class="clearfix"></div>
                    </div>
                    <nav class="main-navigation uni-menu-text">
                        <div class="cssmenu">
                            <ul class="vk-navbar-nav vk-navbar-left nav-bar">
                                <li><a href="gioi-thieu">Giới thiệu</a></li>
                                <li class="has-sub"><a href="san-pham">Sản phẩm</a>
                                    <ul>
                                        <?php
                                            $action = new action_product();
                                            $list_menu_product = $action->getProductCat_byProductCatIdParent(0, '');
                                            foreach ($list_menu_product as $item) {
                                                $rowLang = $action->getProductCatLangDetail_byId($item['productcat_id'], $lang);
                                                $row1 = $action->getProductCatDetail_byId($item['productcat_id'], $lang);
                                        ?>
                                            <li class="has-sub"><a href="/<?= $rowLang['friendly_url'] ?>">
                                                <?= $rowLang['lang_productcat_name'] ?></a>
                                                <ul>
                                                    <?php
                                                        $list_menu_product_sub = $action->getProductCat_byProductCatIdParent($item['productcat_id'],'');
                                                        foreach ($list_menu_product_sub as $item_sub) {
                                                            $rowLang = $action->getProductCatLangDetail_byId($item_sub['productcat_id'], $lang);
                                                            $row1 = $action->getProductCatDetail_byId($item_sub['productcat_id'], $lang);
                                                    ?>
                                                    <li><a href="/<?= $rowLang['friendly_url'] ?>"><?= $rowLang['lang_productcat_name'] ?></a></li>
                                                    <?php } ?>
                                                </ul>
                                            </li>
                                        <?php } ?>
                                    </ul>
                                </li>
                                <li><a href='cua-hang'>Hệ thống cửa hàng</a></li>
                            </ul>
                            <ul class="vk-navbar-nav vk-navbar-right nav-bar">
                                <li class="has-sub"><a href='/tin-tuc'>Blog</a>
                                    <ul>
                                        <?php
                                            $menu_news = new action_news();
                                            $list_menu_news = $menu_news->getNewsCat_byNewsCatIdParent(0,'');
                                            foreach ($list_menu_news as $item_news) {
                                                $rowLang = $menu_news->getNewsCatLangDetail_byId($item_news['newscat_id'], $lang);
                                                $row1 = $menu_news->getNewsCatDetail_byId($item_news['newscat_id'], $lang);
                                        ?>
                                            <li><a href="/<?= $rowLang['friendly_url'] ?>"><?= $rowLang['lang_newscat_name'] ?></a></li>
                                        <?php } ?>
                                    </ul>
                                </li>
                                <li class="has-sub"><a href='#'>Dịch vụ</a>
                                    <ul>
                                        <li><a href="/dat-giay-theo-yeu-cau">Đóng giày theo yêu cầu</a></li>
                                        <li><a href="/thay-de-giay">Thay đế giày</a></li>
                                        <li class="has-sub"><a href="#">Bảo hành</a>
                                            <ul>
                                                <li><a href="/chinh-sach-bao-hanh">Điều kiện bảo hành</a></li>
                                            </ul>
                                        </li>
                                        <li class="has-sub"><a href="hau-mai">Hậu mãi</a>
                                            <ul>
                                                <li><a href="/phuc-hoi-giay-6-buoc">Chăm sóc giày</a></li>
                                                <li><a href="/chinh-sach-doi-tra">Đổi trả</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href="/lien-he">Liên hệ</a></li>
                                <li class="home-car-services-search">
                                    <?php include DIR_SEARCH."MS_SEARCH_VYHOFOCO_0003.php";?>
                                </li>

                                <!--shoppong cart-->
                                <li class="uni-right-menu_center_vyhofoco">
                                    <?php include DIR_CART."MS_CART_VYHOFOCO_0007.php";?>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>