<?php 

    $list = $action->getList('productcat','','','productcat_id','desc','','','');
    $list_tag = $action->getList('producttag','','','producttag_id','desc','','','');
    $list_product_gift = $action->listProductGift();
?>

<script src="js/previewImage.js"></script>

<script>



    function addMoreSize(self){

        var total = $(self).parents('.colorProduct').data('total');

        $.ajax({

            url: "ajax.php",

            data: {'action': 'addMoreSize', 'total': total },

            type: "post",

            success:function(html){

                $(self).parent('.size_section').append(html);

                //$("#size_section").append(html);

            }

        })

    }



    function deleteColor(val){

        $(val).parent().remove();

    }

    

    $(document).ready(function() {



        $('#addMoreSales').on('click',function(e){

            e.preventDefault();

            var total = $('.salesProduct').length;

            $.ajax({

                url: "ajax.php",

                data: {'action': 'addMoreSales', 'total': total },

                type: "post",

                success:function(html){

                    $("#sales_section").append(html);

                }

            })

        })



        $("#addMoreColor").on("click",function(e){

            e.preventDefault();

            var total = $('.colorProduct').length;

            $.ajax({

                url: "ajax.php",

                data: {'action': 'addMoreColor', 'total': total },

                type: "post",

                success:function(html){

                    $("#color_section").append(html);

                }

            })

        })



        $('#addSalePrice').on('click',function(e){

            e.preventDefault();

        })





        $("input[id=fileUpload2").previewimage({

            div: "#preview2",

            imgwidth: 90,

            imgheight: 90

        });



    });



    

</script>

<form action="" method="post" enctype="multipart/form-data" id="addProduct">

    <button class="btnAddTop" type="submit" style="position: fixed;top: 0;right: 220px;z-index: 9">L??u</button>

    <input type="hidden" name="action" value="addProduct">

    <input type="hidden" name="table" id="table" value="product">

    <div class="rowNodeContentPage">

        <div class="leftNCP">

            <span class="titLeftNCP">Th??ng tin s???n ph???m</span>

            <p class="subLeftNCP">Cung c???p th??ng tin v??? t??n, m?? t??? lo???i s???n ph???m v?? nh?? s???n xu???t ????? ph??n lo???i s???n ph???m</p>   

            <p class="titleRightNCP">Ch???n ???nh ?????i di???n cho s???n ph???m</p>

            <div id="wrapper">

                <input id="fileUpload" type="file" name="fileUpload1" onchange="showImage(this)" />

                <br />

                <div id="image-holder">

                 </div>

            </div> 

        </div>

        <div class="boxNodeContentPage">



            <p class="titleRightNCP">T??n s???n ph???m</p>

            <input type="text" id="title" onchange="ChangeToSlug()" class="txtNCP1" value="" name="product_name" required/>

            <!-- <p class="titleRightNCP">Danh m???c</p>
            <select class="sltBV" name="productcat_id" size="10">
                <?php $action->showCategoriesSelect($list, 'productcat_parent', 0, '', 'productcat_id', 'productcat_name', 0); ?>
            </select> -->

            <p class="titleRightNCP">Danh m???c</p>
            <div class="sltBV" name="productcat_id" size="10">
                <?php $action->showProductCategoriesSelect($list, 'productcat_parent', 0, $row['productcat_id'], 'productcat_id', 'productcat_name', 0, $row['productcat_ar']); ?>
            </div>

            <p class="titleRightNCP">Th??? Tag</p>
            <select name="producttag_id[]" class="selectpicker" multiple>
            <?php foreach ($list_tag as $item) {?>
                <option value="<?php echo $item['producttag_id'];?>"><?php echo $item['producttag_name'];?></option>
            <?php } ?>
            </select>

            <p class="titleRightNCP">T???ng ph???m ??i k??m</p>
            <select name="product_gift_id" class="txtNCP1">
                <option value="0">Ch???n t???ng ph???m</option>
                <?php foreach ($list_product_gift as $item) { ?>
                <option value="<?= $item['product_id'] ?>"><?= $item['product_name'] ?></option>
                <?php }  ?>
            </select>
            <!-- <p class="titleRightNCP">T??n r??t g???n</p>

            <input type="text" class="txtNCP1" name="shortName1_service3" value="<?php //echo $rowPro['shortName1_service3'];?>" /> -->

            <p class="titleRightNCP">M?? t??? ng???n:</p>

            <p style="width:100%;margin-top:5px;"><textarea class="longtxtNCP2 ckeditor" id="editor0" name="product_des"><?php echo $rowPro['product_des'];?></textarea></p>

            

            <p class="titleRightNCP">N???i dung:</p>

            <p style="width:100%;margin-top:5px;"><textarea class="longtxtNCP1 ckeditor" id="editor1" name="product_content"><?php echo $rowPro['product_content'];?></textarea></p>

           

        </div>

    </div><!--end rowNodeContentPage-->



    <div class="rowNodeContentPage">

        <div class="leftNCP">

            <span class="titLeftNCP">???nh s???n ph???m</span>

            <p class="subLeftNCP">Thi???t l???p ???nh s???n ph???m</p>

        </div>

        <div class="boxNodeContentPage">

            <h3>???nh ph??? s???n ph???m</h3>

            <input type="file" name="fileUpload2" id="fileUpload2">

            <div class="preview2" id="preview2"> 

            </div>

        </div>

    </div><!--end rowNodeContentPage-->



    <!-- <div class="rowNodeContentPage">

        <div class="leftNCP">

            <span class="titLeftNCP">Thi???t l???p k??ch c??? v?? m??u s???c</span>

            <p class="subLeftNCP">Thi???t l???p k??ch c??? v?? m??u s???c</p>

        </div>

        <div class="boxNodeContentPage">

            <div class="rowNCP" id="color_section">

            </div>

            <a href="#" id="addMoreColor" class="addMoreColor">Th??m t??y ch???n m??u</a>

        </div>

    </div> --><!--end rowNodeContentPage-->

    <div class="rowNodeContentPage">

        <div class="leftNCP">

            <span class="titLeftNCP">Qu???n l?? k??ch c???</span>

            <p class="subLeftNCP">B???n c?? th??? c???u h??nh v?? qu???n l?? kho cho t???ng lo???i c???a s???n ph???m n??y</p>

        </div>

        <div class="boxNodeContentPage">

            <button type="button" onclick="add_size()">Th??m</button>

            <div class="rowNCP">

                <div class="subColContent">

                    <p class="titleRightNCP">K??ch c???</p>
                    <div id="size">
                                
                    </div>                    

                </div>    

            </div><!--end rowNCP-->

        </div>

    </div>

    <script type="text/javascript">
        function add_size () {
            var size = document.getElementById('size').innerHTML;
            document.getElementById('size').innerHTML = size + '<div class="del-input"><input type="text" class="txtNCP1" value="" name="product_size[]"/><button type="button" onclick="del_size(this)">X??a</button></div>';
        }

        function del_size (input) {
            document.getElementById('size').removeChild(input.parentNode);
        }
    </script>

    <div class="rowNodeContentPage">

        <div class="leftNCP">

            <span class="titLeftNCP">Qu???n l?? m??u s???c</span>

            <p class="subLeftNCP">B???n c?? th??? c???u h??nh v?? qu???n l?? kho cho t???ng lo???i c???a s???n ph???m n??y</p>

        </div>

        <div class="boxNodeContentPage">

            <button type="button" onclick="add_color()">Th??m</button>

            <div class="rowNCP">

                <div class="subColContent">

                    <p class="titleRightNCP">M??u s???c</p>
                    <div id="color">
                                
                    </div>                    

                </div>    

            </div><!--end rowNCP-->

        </div>

    </div>

    <script type="text/javascript">
        function add_color () {
            var size = document.getElementById('color').innerHTML;
            document.getElementById('color').innerHTML = size + '<div class="del-input"><input type="text" class="txtNCP1" value="" name="product_color[]"/><button type="button" onclick="del_color(this)">X??a</button></div>';
        }

        function del_color (input) {
            document.getElementById('color').removeChild(input.parentNode);
        }
    </script>

    <div class="rowNodeContentPage">

        <div class="leftNCP">

            <span class="titLeftNCP">Qu???n l?? Gi?? ph??? C??ng ch???t li???u</span>

            <p class="subLeftNCP">B???n c?? th??? c???u h??nh v?? qu???n l?? kho cho t???ng lo???i c???a s???n ph???m n??y</p>

        </div>

        <div class="boxNodeContentPage">

            <button type="button" onclick="add_price()">Th??m</button>

            <div class="rowNCP">

                <div class="subColContent">

                    <p class="titleRightNCP">Gi?? ph???</p>
                    <div id="price_sub">
                        <?php foreach ($price_sub_pro as $k => $item) { ?>
                        <div class="del-input">
                            <input type="number" class="txtNCP1" value="<?php echo $item;?>" name="product_price_sub[]" placeholder="Gi??" />
                            <input type="text" class="txtNCP1" value="<?php echo $product_material[$k];?>" name="product_material[]" placeholder="Ch??t li???u" />
                            <button type="button" onclick="del_price(this)">X??a</button>
                        </div>
                        <?php } ?>         
                    </div>                    

                </div>    

            </div><!--end rowNCP-->

        </div>

    </div>

    <script type="text/javascript">
        function add_price () {
            var size = document.getElementById('price_sub').innerHTML;
            document.getElementById('price_sub').innerHTML = size + '<div class="del-input"><input type="number" class="txtNCP1" value="" name="product_price_sub[]" placeholder="Gi??" /><input type="text" class="txtNCP1" value="" name="product_material[]" placeholder="Ch??t li???u" /><button type="button" onclick="del_price(this)">X??a</button></div>';
        }

        function del_price (input) {
            document.getElementById('price_sub').removeChild(input.parentNode);
        }
    </script>

    <div class="rowNodeContentPage">

        <div class="leftNCP">

            <span class="titLeftNCP">Qu???n l?? kho v?? t??y ch???n</span>

            <p class="subLeftNCP">B???n c?? th??? c???u h??nh v?? qu???n l?? kho cho t???ng lo???i c???a s???n ph???m n??y</p>

        </div>

        <div class="boxNodeContentPage">

            <div class="rowNCP">

                <div class="subColContent">

                    <p class="titleRightNCP">Gi??</p>

                    <input type="number" class="txtNCP1" value="<?php echo $rowPro['product_price'];?>" name="product_price"/>

                </div>                                      

                <div class="subColContent" >

                    <p class="titleRightNCP">Gi?? tr?????c khuy???n m??i</p>

                    <input type="number" class="txtNCP1" value="<?php echo $rowPro['product_price_sale'];?>" name="product_price_sale"/>

                </div>         

                

                

            </div><!--end rowNCP-->

            <div class="rowNCP">

                <div class="subColContent">

                    <p class="titleRightNCP">M?? s???n ph???m</p>

                    <input type="text" class="txtNCP1" value="<?php echo $rowPro['product_code'];?>" name="product_code"/>

                </div>                                      

                <!-- <div class="subColContent" >

                    <p class="titleRightNCP">Xu???t x???</p>

                    <input type="text" class="txtNCP1" value="<?php echo $rowPro['product_original'];?>" name="product_original"/>

                </div> -->           

                <div class="subColContent" >

                    <p class="titleRightNCP">M???u m??, ki???u d??ng</p>

                    <input type="text" class="txtNCP1" value="<?php echo $rowPro['product_shape'];?>" name="product_shape"/>

                </div>    

            </div><!--end rowNCP-->

            <div class="rowNCP">

                <!-- <div class="subColContent">

                    <p class="titleRightNCP">K??ch c???</p>

                    <input type="text" class="txtNCP1" value="<?php echo $rowPro['product_size'];?>" name="product_size"/>

                </div>                                      

                <div class="subColContent" >

                    <p class="titleRightNCP">????ng g??i</p>

                    <input type="text" class="txtNCP1" value="<?php echo $rowPro['product_package'];?>" name="product_package"/>

                </div>  -->

                <div class="subColContent">

                    <p class="titleRightNCP">H??ng s???n xu???t</p>

                    <input type="text" class="txtNCP1" value="<?php echo $rowPro['product_expiration'];?>" name="product_expiration"/>

                </div>

                <!-- <div class="subColContent" >

                    <p class="titleRightNCP">Xu???t x???</p>

                    <input type="text" class="txtNCP1" value="<?php echo $rowPro['product_material'];?>" name="product_material"/>

                </div>   -->              

            </div><!--end rowNCP-->

            <!-- <div class="rowNCP">

                <div class="subColContent">

                    <p class="titleRightNCP">Giao h??ng</p>

                    <input type="text" class="txtNCP1" value="<?php echo $rowPro['product_delivery'];?>" name="product_delivery"/>

                </div>                                      

                <div class="subColContent" >

                    <p class="titleRightNCP">Th???i gian giao h??ng</p>

                    <input type="text" class="txtNCP1" value="<?php echo $rowPro['product_delivery_time'];?>" name="product_delivery_time"/>

                </div>               

            </div> --><!--end rowNCP-->

            <!-- <div class="rowNCP">

                <div class="subColContent">

                    <p class="titleRightNCP">H??nh th???c thanh to??n</p>

                    <input type="text" class="txtNCP1" value="<?php echo $rowPro['product_payment'];?>" name="product_payment"/>

                </div>                                      

                           

            </div> --><!--end rowNCP-->

        </div>

    </div>



    <div class="rowNodeContentPage">

        <div class="leftNCP">

            <span class="titLeftNCP">T???i ??u SEO</span>

            <p class="subLeftNCP">Thi???t l???p th??? ti??u ?????, th??? m?? t???, ???????ng d???n. Nh???ng th??ng tin n??y x??c ?????nh c??ch danh m???c xu???t hi???n tr??n c??ng c??? t??m ki???m.</p>                

        </div>

        <div class="boxNodeContentPage">

            <div>

                <p class="titleRightNCP">Ti??u ????? trang</p>

                <p class="subRightNCP"> <strong class="text-character"></strong>/70 k?? t???</p>

                <input type="text" class="txtNCP1" placeholder="??i???u kho???n d???ch v???" name="title_seo" id="title_seo" value="<?php echo $rowPro['title_seo'];?>" onkeyup="countChar(this)"/>

            </div>

            <div>

                <p class="titleRightNCP">Th??? m?? t???</p>

                <p class="subRightNCP"><strong class="text-character"></strong>/160 k?? t???</p>

                <textarea class="longtxtNCP2" name="des_seo" onkeyup="countChar(this)"><?php echo $rowPro['des_seo'];?></textarea>

            </div>

            <p class="titleRightNCP">???????ng d???n</p>

            <div class="coverLinkNCP">

                <p class="nameLinkNCP"><?php echo $_SERVER['SERVER_NAME']?>/</p>

                <div id="slug">

                    <input type="text" id="slug1" class="txtLinkNCP" name="friendly_url" value="<?php echo $rowPro['friendly_url'];?>" />     

                </div>

            </div>

            <p class="titleRightNCP">Keyword</p>

            <input type="text" class="txtNCP1" placeholder="Nh???p keyword" name="keyword" value="<?php echo $rowPro['keyword'];?>"/>

        </div>

    </div><!--end rowNodeContentPage-->

    <div class="rowNodeContentPage">

        <div class="leftNCP">

            <span class="titLeftNCP">Tr???ng th??i</span>

        </div>

        <div class="boxNodeContentPage">

            <div>
                <label class="selectCate">
                    <input type="checkbox" value="1" name="product_gift">T???ng ph???m
                </label>
            </div>

            <div>

                <label class="selectCate">

                    <input type="checkbox" value="1" name="product_new" <?= $rowPro['product_new'] == 1 ? 'checked' : '' ?>>S???n ph???m m???i

                </label>

            </div>

            <div>

                <label class="selectCate">

                    <input type="checkbox" value="1" name="product_hot" <?= $rowPro['product_hot'] == 1 ? 'product_hot' : '' ?>>S???n ph???m hot

                </label>

            </div>

            <div>

                <label class="selectCate">

                    <input type="checkbox" value="1" name="state" <?= $rowPro['state'] == 1 ? 'checked' : '' ?>>Tr???ng th??i hi???n th???

                </label>

            </div>

            

        </div>

    </div><!--end rowNodeContentPage-->

    

    <button type="submit" class="btn btnSave">L??u</button>

            

</form>