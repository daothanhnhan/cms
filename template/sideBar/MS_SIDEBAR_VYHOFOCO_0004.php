<div class="gb-sidebar-refine-vyhofoco">
    <aside class="widget">
        <h3 class="widget_sidebar-title">Tinh chỉnh tìm kiếm</h3>
        <div class="widget-content">
            <div class="gb-sidebar-refine-vyhofoco">
                <div class="gb-list-group-item group-name">Màu sắc</div>
                <div class="gb-list-group-item">
                    <div id="filter-group1">
                        <div class="checkbox">
                            <label><input type="checkbox" name="" value="1">Gold</label>
                        </div>
                        <div class="checkbox">
                            <label><input type="checkbox" name="" value="2">Silver</label>
                        </div>
                        <div class="checkbox">
                            <label><input type="checkbox" name="" value="3">Platinum</label>
                        </div>
                    </div>
                </div>
                <div class="gb-list-group-item group-name">giá</div>
                <div class="gb-list-group-item">
                    <div id="filter-group2">
                        <div class="checkbox">
                            <label><input type="checkbox" name="" value="5">$10,000 - $20.999</label>
                        </div>
                        <div class="checkbox">
                            <label><input type="checkbox" name="" value="6">$21,000 - $30,999</label>
                        </div>
                        <div class="checkbox">
                            <label><input type="checkbox" name="" value="7">$31,000 and above</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </aside>
</div>

<script>
    $(document).ready(function () {
        $(document).ready(function () {
            $("li").click(function () {
                $('li > ul').hide();
                $(this).children("ul").toggle();
            });
        });
    });
</script>