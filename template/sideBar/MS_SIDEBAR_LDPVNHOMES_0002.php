<script>
    $(document).ready(function(){
        $('#province').change(function(){
            var id_province = $("#province").val();
            $.ajax({
                url:"/functions/ajax/ajax_province.php",
                type:"post",
                data:"province_id="+id_province,
                async:true,
                success: function(result){
                    $("#district").html(result);
                },
                error:function(error){
                    alert('Lỗi');
                }
            });
        return false;
        });
    });
</script>
<?php
    $product = new action_product();
    $list_product = $product->getListProductCat_byOrderASC();
    $list_province = $product->getListProvince_byOrderASC();
?>

<link rel="stylesheet" href="/plugin/selectboostrap/bootstrap-select.min.css">
<div class="gb-sidebar-boloc_ldpvinhome">
    <aside class="widget">
        <h3 class="widget-title_ldpvinhome">Bộ lọc</h3>
        <div class="widget-content">
            <div class="gb-sidebar-boloc_ldpvinhome_body">
                <form action="/filter-project/0" method="post">
                    <div class="form-group">
                        <label>Tìm tên dự án</label>
                        <select class="selectpicker" data-show-subtext="true" data-live-search="true" name="duan">
                            <option data-subtext="" value="">Chọn dự án bán</option>
                            <?php
                                $action = new action_product();
                                $list_product_all = $action->getListProductAll();
                                foreach ($list_product_all as $item) {
                            ?>
                                <option data-subtext="" value="<?= $item['product_name'] ?>"><?= $item['product_name'] ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Tìm danh mục</label>
                        <select class="selectpicker" data-show-subtext="true" data-live-search="true" name="danhmuc" id="id_danhmuc">
                            <option data-subtext="" value="">Chọn danh mục</option>
                            <?php
                                $action = new action_product();
                                $list_product_cat = $action->getListProductCat_byOrderASC();
                                foreach ($list_product_cat as $item) {
                            ?>
                                <option data-subtext="" value="<?= $item['productcat_id'] ?>">
                                    <?= $item['productcat_name'] ?>
                                </option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Tỉnh/ Thành phố</label>
                        <select class="selectpicker" data-show-subtext="true" data-live-search="true" name="tinh" id="province">
                            <option data-subtext="" value="">Chọn tỉnh/ thành</option>
                            <?php
                                foreach ($list_province as $item) {
                            ?>
                                <option data-subtext="" value="<?= $item['region_id'] ?>"><?= $item['region_name'] ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Quận/ Huyện</label>
                        <select id="district" name="huyen" class="form-control">
                            <option data-subtext="" value="">Chọn Quận/ Huyện</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-home-search_ldpvinhome" type="submit" name="search-project" value="s">Tìm kiếm</button>
                    </div>
                </form>
            </div>
        </div>
    </aside>
</div>
<script src="/plugin/selectboostrap/bootstrap-select.min.js"></script>

<script>
    $(document).ready(function () {
        $('.selectpicker').selectpicker({
            style: 'btn-info',
            size: 4
        });
    });
</script>