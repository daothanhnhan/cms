<div class="uni-main-menu-cms">
    <nav class="main-navigation-cms uni-menu-text-cms">
        <div class="cssmenu_cms">
           
            <?php 
                // $list_menu = $menu->getListMainMenu_byOrderASC();
                // $menu->showMenu_byMultiLevel_mainMenuTraiCam($list_menu,0,$lang,0);
                $main_menu = $menu->main_menu(215, $lang);//var_dump($main_menu);die;
                $menu->show_menu1($main_menu, $lang);
            ?> 
        </div>
    </nav>
</div>