<?php 
    // $list = $action->getList('productcat','','','productcat_id','desc','','','');
    if (isset($_POST['them_tag'])) {
        $image = ($_POST['fileUpload1']==NULL) ? '' : $_POST['fileUpload1'];
        $name = ($_POST['producttag_name']==NULL) ? '' : $_POST['producttag_name'];
        $des = ($_POST['producttag_des']==NULL) ? '' : $_POST['producttag_des'];
        $content = ($_POST['producttag_content']==NULL) ? '' : $_POST['producttag_content'];
        $title_seo = ($_POST['title_seo']==NULL) ? '' : $_POST['title_seo'];
        $des_seo = ($_POST['des_seo']==NULL) ? '' : $_POST['des_seo'];
        $keyword = ($_POST['keyword']==NULL) ? '' : $_POST['keyword'];
        $url = ($_POST['friendly_url']==NULL) ? '' : $_POST['friendly_url'];
        $state = ($_POST['state']==NULL) ? 0 : (int)$_POST['state'];
        $date = date('Y-m-d H:m:s');
        $created_id = (int)$_SESSION['admin_id'];
        // var_dump($_POST['producttag_des']);die();

        $sql_ins_protag = "INSERT INTO producttag (producttag_name, producttag_des, producttag_content, producttag_created_date, producttag_update_date, title_seo, des_seo, keyword, friendly_url, state, created_id) VALUES ('$name', '$des', '$content', '$date', '$date', '$title_seo', '$des_seo', '$keyword', '$url', $state, $created_id)";
        $result_ins_protag = mysqli_query($conn_vn, $sql_ins_protag) or die('error: ' . mysqli_error($conn_vn));

        $sql_sel_protag = "SELECT * From producttag Where created_id = $created_id Order By producttag_id DESC Limit 1";
        $result_sel_protag = mysqli_query($conn_vn, $sql_sel_protag);
        $row_sel_protag = mysqli_fetch_assoc($result_sel_protag);
        $protag_id = $row_sel_protag['producttag_id'];

        $sql_ins_vn = "INSERT INTO producttag_languages (producttag_id, languages_code, lang_producttag_name, lang_producttag_des, lang_producttag_content, title_seo, des_seo, keyword, friendly_url, edit_state) VALUES ('$protag_id', 'vn', '$name', '$des', '$content', '$title_seo', '$des_seo', '$keyword', '$url', $state)";
        $result_ins_vn = mysqli_query($conn_vn, $sql_ins_vn);

        $sql_ins_en = "INSERT INTO producttag_languages (producttag_id, languages_code, lang_producttag_name, lang_producttag_des, lang_producttag_content, title_seo, des_seo, keyword, friendly_url, edit_state) VALUES ('$protag_id', 'en', '$name', '$des', '$content', '$title_seo', '$des_seo', '$keyword', '$url', $state)";
        $result_ins_en = mysqli_query($conn_vn, $sql_ins_en);
        echo '<script type="text/javascript">alert(\'Th??m th??nh c??ng.\'); window.location.href = "/admin/index.php?page=loai-san-pham";</script>';
    }
?>
<form action="" method="post" accept-charset="utf-8" id="addProductTag">
    <button class="btnAddTop" type="submit" style="position: fixed;top: 0;right: 220px;z-index: 9">L??u</button>
    <input type="hidden" name="action" value="addProductTag">
    <div class="rowNodeContentPage">
        <div class="leftNCP">
            <span class="titLeftNCP">N???i dung trang</span>
            <p class="subLeftNCP">Nh???p ti??u ????? v?? n???i dung cho trang</p>      
            <p class="titleRightNCP">Ch???n ???nh</p>
            <div id="wrapper">
                <input id="fileUpload" type="file" name="fileUpload1"/>
                <br />
                <div id="image-holder">
                    
                </div>
            </div> 
        </div>
        <div class="boxNodeContentPage">
            <p class="titleRightNCP">Ti??u ?????</p>
            <input type="text" class="txtNCP1" id="title" onchange="ChangeToSlug()" value="<?= $row['producttag_name'];?>" name="producttag_name" required />
           <!--  <div class="subColContent">
                <p class="titleRightNCP">Danh m???c cha</p>
                <select class="sltBV" name="productcat_parent" size="10">
                    <option value="0" selected>C???p cha</option>
                    <?php $action->showCategoriesSelect($list, 'productcat_parent', 0, '', 'productcat_id', 'productcat_name', 0); ?>
                </select>
            </div> -->
            <p class="titleRightNCP">M?? t???</p>
            <p style="width:100%;margin-top:5px;"><textarea class="longtxtNCP1 ckeditor" id="editor1" name="producttag_des" ></textarea></p>
            <p class="titleRightNCP">Chi ti???t</p>
            <p style="width:100%;margin-top:5px;"><textarea class="longtxtNCP1 ckeditor" id="editor2" name="producttag_content" ><?= $row['producttag_content'];?></textarea></p>
            
        </div>
    </div><!--end rowNodeContentPage-->
    <div class="rowNodeContentPage">
        <div class="leftNCP">
            <span class="titLeftNCP">T???i ??u SEO</span>
            <p class="subLeftNCP">Thi???t l???p th??? ti??u ?????, th??? m?? t???, ???????ng d???n. Nh???ng th??ng tin n??y x??c ?????nh c??ch danh m???c xu???t hi???n tr??n c??ng c??? t??m ki???m.</p>                
        </div>
        <div class="boxNodeContentPage">
            <div>
                <p class="titleRightNCP">Ti??u ????? trang</p>
                <p class="subRightNCP"> <strong class="text-character">0</strong>/70 k?? t???</p>
                <input type="text" class="txtNCP1" placeholder="??i???u kho???n d???ch v???" name="title_seo" id="title_seo" value="<?php echo $row['title_seo'];?>" onkeyup="countChar(this)"/>
            </div>
            <div>
                <p class="titleRightNCP">Th??? m?? t???</p>
                <p class="subRightNCP"><strong class="text-character">0</strong>/160 k?? t???</p>
                <textarea class="longtxtNCP2" name="des_seo" onkeyup="countChar(this)"><?php echo $row['des_seo'];?></textarea>
            </div>
            <p class="titleRightNCP">Keyword</p>
            <input type="text" class="txtNCP1"  name="keyword" value="<?php echo $row['keyword']?>"/>
            <p class="titleRightNCP">???????ng d???n</p>
            <div class="coverLinkNCP">
                <div id="slug">
                    <input type="text" id="slug1" class="txtLinkNCP" name="friendly_url" value="<?php echo $row['friendly_url']?>"/> 
                </div>    
            </div>
        </div>
    </div><!--end rowNodeContentPage-->
    <div class="rowNodeContentPage">
        <div class="leftNCP">
            <span class="titLeftNCP">Tr???ng th??i</span>
            <p class="subLeftNCP">Thi???t l???p ch??? ????? hi???n th??? cho trang n???i dung</p>                
        </div>
        <div class="boxNodeContentPage">
            <label class="selectTag">
                <input type="checkbox" value="1" name="state" checked>
                Ho???t ?????ng
            </label>
        </div>
    </div><!--end rowNodeContentPage-->
    <button type="submit" name="them_tag" class="btn btnSave">L??u</button>

</form>


