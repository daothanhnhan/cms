<!--TIM KIẾM-->
<script>
    $(document).ready(function(){
        $('#province').change(function(){
            id_province = $("#province").val();
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
<div class="gb-timkiem-sidebar_bdshn">
    <aside class="widget_sidebar">
        <h3 class="widget-title_bdshn">Tìm kiếm</h3>
        <div class="widget-content">
            <div class="gb-timkiem-sidebar-body_bdshn">
                <form action="/search-project/0" class="form_search" method="post">
                    <span>Từ khóa</span>
                    <input class="form-control" type="text" name="key" id="">
                    <select name="danhmuc" id="id_danhmuc" class="form-control">
                        <option value="">Chọn danh mục</option>
                        <?php
                            foreach ($list_product as $item) {
                                $rowLang = $product->getProductCatLangDetail_byId($item['productcat_id'],$lang);
                                $row1 = $product->getProductCatDetail_byId($item['productcat_id'],$lang);
                        ?>
                            <option value="<?= $row1['productcat_id'] ?>">
                                --
                                <?= $rowLang['lang_productcat_name'] ?>
                            </option>
                        <?php } ?>
                    </select>
                    <select name="hinhthuc" id="id_hinhthuc" class="form-control">
                        <option select="selected" value="">Chọn hình thức</option>
                        <option value="Cần bán">--Cần bán</option>
                        <option value="Cần mua">--Cần mua</option>
                        <option value="Cần cho thuê">--Cần cho thuê</option>
                        <option value="Cần thuê">--Cần thuê</option>
                        <option value="Cần nhượng">--Cần nhượng</option>
                        <option value="Bán nhà đất">--Bán nhà đất</option>
                    </select>
                    <select name="tinh" id="province" class="form-control">
                        <option value="">Chọn Tỉnh thành</option>
                        <?php
                            foreach ($list_province as $item) {
                        ?>
                            <option value="<?= $item['region_id'] ?>">
                                --
                                <?= $item['region_name'] ?>
                            </option>
                        <?php } ?>
                    </select>
                    <input type="hidden" name="">
                    <select name="huyen" id="district" class="form-control">
                        <option value="">--Quận/Huyện--</option>
                    </select>
                    <select name="gia" id="id_gia" class="form-control">
                        <option value="">Khoảng giá</option>
                        <option value="0-500">Nhỏ hơn 500tr</option>
                        <option value="500-1000">500tr đến 1 tỷ</option>
                        <option value="1000-2000">1 tỷ đến 2 tỷ</option>
                        <option value="2000-5000">2 tỷ đến 5 tỷ</option>
                        <option value="5000-10000">5 tỷ đến 10 tỷ</option>
                        <option value="10000-20000">10 tỷ đến 20 tỷ</option>
                        <option value="20000">Trên 20 tỷ</option>
                    </select>
                    <select name="dientich" id="id_dientich" class="form-control">
                        <option value="">Diện tích</option>
                        <option value="0-50">Nhỏ hơn 50m2</option>
                        <option value="50-100">50m2 đến 100m2</option>
                        <option value="100-150">100m2 đến 150m2</option>
                        <option value="150-300">150m2 đến 300m2</option>
                        <option value="300">Lớn hơn 300m2</option>
                    </select>
                    <button type="submit" class="input_button_timkiem" name="search" value="s">Tìm kiếm</button>
                </form>
            </div>
        </div>
    </aside>
</div>