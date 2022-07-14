<nav class="gb-main-menu_banhatgiong" >
    <div class="main-navigation_banhatgiong uni-menu-text_banhatgiong">
        <div class="cssmenu">
            <?php
                $list_menu = $menu->getListMainMenu_byOrderASC();
                $menu->showMenu_byMultiLevel_mainMenuHatGiong($list_menu,0,$lang,0);
            ?>
        </div>
    </div>
</nav>