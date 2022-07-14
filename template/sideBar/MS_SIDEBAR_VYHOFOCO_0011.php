<div class="gb-sidebar-category_vyhofoco">
    <aside class="widget">
        <h3 class="widget_sidebar-title">Phân loại dòng sản phẩm</h3>
        <div class="widget-content">
            <div id="cssmenu2">
                <ul>
                    <?php
                        $action = new action_product();
                        $list_menu_product = $action->getProductCat_byProductCatIdParent(246, '');
                        foreach ($list_menu_product as $item) {
                            $rowLang = $action->getProductCatLangDetail_byId($item['productcat_id'], $lang);
                            $row1 = $action->getProductCatDetail_byId($item['productcat_id'], $lang);

                            $list_product1 = $action->countListProduct_byIdCat($item['productcat_id']);

                            $count1 = count($list_product1);
                            $list_product_count = $action->getProductCat_byProductCatIdParent($item['productcat_id'],'');
                            $count2 = 0;
                            foreach ($list_product_count as $item_sub) {
                                $list_product2 = $action->countListProduct_byIdCat($item_sub['productcat_id']);
                                $count2 += count($list_product2); 
                            }
                    ?>
                        <li class="has-sub"><a style="font-weight: 600;" href="/<?= $rowLang['friendly_url'] ?>">
                            <?= $rowLang['lang_productcat_name'] ?> (<?= $count1 + $count2 ?>)</a>
                            <ul>
                                <?php
                                    $list_menu_product_sub = $action->getProductCat_byProductCatIdParent($item['productcat_id'],'');
                                    foreach ($list_menu_product_sub as $item_sub) {
                                        $rowLang = $action->getProductCatLangDetail_byId($item_sub['productcat_id'], $lang);
                                        $row1 = $action->getProductCatDetail_byId($item_sub['productcat_id'], $lang);
                                ?>
                                    <li class="has-sub">
                                        <a href="/<?= $rowLang['friendly_url'] ?>">
                                            <?= $rowLang['lang_productcat_name'] ?>
                                        </a>
                                    </li>
                                <?php } ?>
                            </ul>
                        </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </aside>
</div>

<script>
    $(document).ready(function () {

        (function($) {

            $.fn.menumaker = function(options) {

                var cssmenu2 = $(this), settings = $.extend({
                    title: "Menu",
                    format: "dropdown",
                    sticky: false
                }, options);

                return this.each(function() {

                    cssmenu2.find('li ul').parent().addClass('has-sub');

                    var multiTg = function() {
                        cssmenu2.find(".has-sub").prepend('<span class="submenu-button"></span>');
                        cssmenu2.find('.submenu-button').on('click', function() {
                            $(this).toggleClass('submenu-opened');
                            $(this).toggleClass('active');
                            if ($(this).siblings('ul').hasClass('open')) {
                                $(this).siblings('ul').removeClass('open').slideToggle();
                            }
                            else {
                                $(this).siblings('ul').addClass('open').slideToggle();
                            }
                        });
                    };

                    if (settings.format === 'multitoggle') multiTg();
                    else cssmenu2.addClass('dropdown');

                    if (settings.sticky === true) cssmenu2.css('position', 'fixed');

                    var resizeFix = function() {
                        if ($( window ).width() > 768) {
                            cssmenu2.find('ul').show();
                            cssmenu2.find('ul ul').hide();
                        }

                        if ($(window).width() <= 768) {
                            cssmenu2.find('ul').hide().removeClass('open');
                        }
                    };
                    resizeFix();
                    return $(window).on('resize', resizeFix);

                });
            };
        })(jQuery);

        (function($){
            $(document).ready(function() {
                $("#cssmenu2").menumaker({
                    title: "",
                    format: "multitoggle"
                });

                $("#cssmenu2").prepend("<div id='menu-line'></div>");

                var foundActive = false, activeElement, linePosition = 0, menuLine = $("#cssmenu2 #menu-line"), lineWidth, defaultPosition, defaultWidth;

                $("#cssmenu2 > ul > li").each(function() {
                    if ($(this).hasClass('active')) {
                        activeElement = $(this);
                        foundActive = true;
                    }
                });

                if (foundActive === false) {
                    activeElement = $("#cssmenu2 > ul > li").first();
                }

                defaultWidth = lineWidth = activeElement.width();

                // defaultPosition = linePosition = activeElement.position().left;

                menuLine.css("width", lineWidth);
                menuLine.css("left", linePosition);

                $("#cssmenu2 > ul > li").on('mouseenter', function () {
                        activeElement = $(this);
                        lineWidth = activeElement.width();
                        linePosition = activeElement.position().left;
                        menuLine.css("width", lineWidth);
                        menuLine.css("left", linePosition);
                    },
                    function() {
                        menuLine.css("left", defaultPosition);
                        menuLine.css("width", defaultWidth);
                    });
            });
        })(jQuery);
    });
</script>