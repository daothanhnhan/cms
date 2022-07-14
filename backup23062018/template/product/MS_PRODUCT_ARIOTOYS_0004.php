<div class="gb-danhmuc-sanpham-body_ariotoys">
    <?php include DIR_SEARCH."MS_SEARCH_ARIOTOYS_0002.php";?>
    <div class="row">
        <?php
            $action = new action();
            $action_product = new action_product();                                                                                
            if (isset($_GET['slug']) && $_GET['slug'] != '') {
                $slug = $_GET['slug'];

                $rowCatLang = $action_product->getProductCatLangDetail_byUrl($slug,$lang);
                $rowCat = $action_product->getProductCatDetail_byId($rowCatLang[$nameColIdProductCat_productCatLanguage],$lang);
                $rows = $action_product->getProductList_byMultiLevel_orderProductId($rowCat[$nameColId_productCat],'desc',$trang,9,$slug);
            }else{
                $rows = $action->getList($nameTable_product,'','',$nameColId_product,'desc',$trang,9,'san-pham');
                
            }
            $_SESSION['sidebar'] = 'productCat';//var_dump($rows);die;
        ?>  
        <?php 
            $action_lang = new action_lang();
            $url_lang = $action_lang->get_url_lang_productcat($slug, $lang);
        ?>
        <div class="list_product">
            <?php 
            foreach ($rows['data'] as $row) {
                $action_product1 = new action_product(); 
                $rowLang1 = $action_product1->getProductLangDetail_byId($row['product_id'],$lang);
                $row1 = $action_product1->getProductDetail_byId($row['product_id'],$lang); 
            ?>
            <div class="col-md-4">
                <div class="item_product_ariotoys">
                    <div class="cover_item_product_ariotoys">
                        <div class="box_image_product_ariotoys">
                            <a href="/<?= $rowLang1[$nameColUrlProduct_productLanguage] ?>">
                                <img src="/images/<?= $row1['product_img'] ?>" alt=""/>
                            </a>
                            <div class="box_action_ariotoys">
                                <?php include DIR_CART."MS_CART_ARIOTOYS_0005.php";?>
                                <?php include DIR_CART."MS_CART_ARIOTOYS_0006.php";?>
                                <?php include DIR_CART."MS_CART_ARIOTOYS_0007.php";?>
                            </div>
                        </div>
                        <div class="box_caption_product_ariotoys">
                            <h3 class=""><a href="/<?= $rowLang1[$nameColUrlProduct_productLanguage] ?>" class=""><?= $rowLang1[$nameColLangProductName_productLanguage] ?></a></h3>
                            <?php include DIR_CART."MS_CART_ARIOTOYS_0004.php";?>
                        </div>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
    <?php include_once DIR_PAGINATION.'MS_PAGINATION_ARIOTOYS_0001.php';?>
</div>
<script type="text/javascript">
    function load_url (id, name, price) {
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
          if (this.readyState == 4 && this.status == 200) {
           // document.getElementById("demo").innerHTML = this.responseText;
           // alert(this.responseText);
           // alert('thanh cong.');
           window.location.href = "/gio-hang";
          }
        };
        xhttp.open("POST", "/functions/ajax-add-cart.php", true);
        xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhttp.send("product_id="+id+"&product_name="+name+"&product_price="+price+"&product_quantity=1&action=add");
        xhttp.send();        
    }
</script>