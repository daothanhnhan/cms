<div class="uni-main-menu-cms">
    <nav class="main-navigation-cms uni-menu-text-cms">
        <div class="cssmenu_cms">
            <!-- <ul>
                <li><a href="">Trang chủ</a></li>
                <li class="has-sub"><a href='#'>Page</a>
                    <ul>
                        <li><a href="gioi-thieu-vn"> Giới Thiệu</a></li>
                        <li><a href="tuyen-dung">Tuyển dụng</a></li>
                        <li><a href="chi-tiet-tuyen-dung">Chi tiết tuyển dụng</a></li>
                    </ul>
                </li>
                <li class="has-sub"><a href="">Tất cả bài News</a>
                    <ul>
                        <li><a href="tin-tuc">Trang Catalog Chính sách</a></li>
                        <li><a href="tin-tuc">Trang Catalog Tin tức</a></li>
                        <li><a href="tin-tuc">Trang Catalog Lao động</a></li>
                        <li><a href="chi-tiet-tin-tuc">Chi tiết bài viết News</a></li>
                    </ul>
                </li>
                <li class="has-sub"><a href="">Dịch vụ</a>
                    <ul>
                        <li><a href="dichvu">Catalog Dịch vụ</a></li>
                        <li><a href="chi-tiet-dich-vu">Chi Tiết dịch vụ</a></li>
                    </ul>
                </li>
                <li class="has-sub"><a href=''>Sản phẩm</a>
                    <ul>
                        <li><a href="/danh-muc-san-pham-2">Sản Phẩm</a></li>
                        <li><a href="chi-tiet-san-pham">Chi tiết sản phẩm</a></li>
                        <li><a href="gio-hang">Giỏ Hàng</a></li>
                        <li><a href="thanh-toan">Thanh Toán</a></li>
                        <li><a href="xac-nhan-don-hang">Xác nhận đơn hàng</a></li>
                        <li><a href="huy-don-hang">Hủy Đơn hàng</a></li>
                    </ul>
                </li>
                <li><a href='lien-he-1'>Liên hệ</a></li>
            </ul> -->
            <?php 
                // $list_menu = $menu->getListMainMenu_byOrderASC();
                // $menu->showMenu_byMultiLevel_mainMenuTraiCam($list_menu,0,$lang,0);
                $main_menu = $menu->main_menu(213, $lang);//var_dump($main_menu);die;
                $menu->show_menu1($main_menu, $lang);
            ?> 
        </div>
    </nav>
</div>