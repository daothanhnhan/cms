<nav class="gb-main-menu-xdshop" >
    <div class="main-navigation-xdshop uni-menu-text-xdshop">
        <div class="cssmenu">
            <?php
                $list_menu = $menu->getListMainMenu_byOrderASC();
                $menu->showMenu_byMultiLevel_mainMenuXD($list_menu,0,$lang,0);
            ?>
        </div>
    </div>
</nav>