<?php 
// var_dump($_GET['slug']);die();
    $action = new action();
    $action_service = new action_service();     
    if (isset($_GET['slug']) && $_GET['slug'] != '') {
        $slug = $_GET['slug'];                    
        $rowCatLang = $action_service->getServiceCatLangDetail_byUrl($slug,$lang);//var_dump($rowCatLang);die();
        $rowCat = $action_service->getServiceCatDetail_byId($rowCatLang['servicecat_id'],$lang);//var_dump($rowCat['servicecat_id']);die();
        // if ($rowCat['newscat_id'] > 1) $rowsCatSub = $action->getList('newscat','newscat_parent',$rowCatLang['newscat_id'],'newscat_id','desc',$trang,12,'newsCat-cat');
        $rows = $action_service->getServiceList_byMultiLevel_orderServiceId($rowCat['servicecat_id'],'desc',$trang,12,$rowCat['friendly_url']);
    }
    else $rows = $action->getList('service','','','service_id','desc',$trang,12,$_GET['page']); 

    $action_lang = new action_lang();
    $url_lang = $action_lang->get_url_lang_serviceCat($slug, $lang);
?>
<div class="gb-dichvu-cms-body-cms">
    <div class="container">
        <input type="hidden" name="lang_current" id="lang_current" value="<?php echo $lang;?>">
        <input type="hidden" name="url_lang" value="<?php echo $url_lang;?>" id="url_lang">
        <div class="row">
            <div class="col-md-9">
                <?php $dem = 0; 
                foreach ($rows['data'] as $row) {
                    $dem++;
                    $action_service1 = new action_service(); 
                    $rowLang1 = $action_service1->getServiceLangDetail_byId($row['service_id'],$lang);
                    $row1 = $action_service1->getServiceDetail_byId($row['service_id'],$lang);
                ?>
                <div class="col-md-4">
                    <div class="gb-dichvu-cms-item-cms">
                        <div class="item-img-cms">
                            <a href="/<?= $rowLang1['friendly_url'] ?>"><img src="/images/<?= $row1['service_img'] ?>" alt="<?= $rowLang1['lang_service_name'] ?>" class="img-responsive"></a>
                        </div>
                        <div class="item-content">
                            <h2><a href="/<?= $rowLang1['friendly_url'] ?>"><?= $rowLang1['lang_service_name'] ?></a></h2>
                            <div class="gb-divider"></div>
                            <p><?= $rowLang1['lang_service_des'] ?></p>
                        </div>
                    </div>
                </div>
                <?php 
                    if ($dem%3 == 0) {
                        echo '<hr style="width:100%;" />';
                    }
                } 
                ?>
                <!-- <div class="col-md-4">
                    <div class="gb-dichvu-cms-item-cms">
                        <div class="item-img-cms">
                            <a href=""><img src="images/dichvu/chụp-anh1.jpg" alt="" class="img-responsive"></a>
                        </div>
                        <div class="item-content">
                            <h2><a href="">Dịch vụ chụp ảnh nghệ thuật</a></h2>
                            <div class="gb-divider"></div>
                            <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis
                                egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="gb-dichvu-cms-item-cms">
                        <div class="item-img-cms">
                            <a href=""><img src="images/dichvu/facebook1.jpg" alt="" class="img-responsive"></a>
                        </div>
                        <div class="item-content">
                            <h2><a href="">Dịch vụ facebook fanpage</a></h2>
                            <div class="gb-divider"></div>
                            <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis
                                egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="gb-dichvu-cms-item-cms">
                        <div class="item-img-cms">
                            <a href=""><img src="images/dichvu/qtw1.jpg" alt="" class="img-responsive"></a>
                        </div>
                        <div class="item-content">
                            <h2><a href="">Dịch vụ quản trị website</a></h2>
                            <div class="gb-divider"></div>
                            <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis
                                egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="gb-dichvu-cms-item-cms">
                        <div class="item-img-cms">
                            <a href=""><img src="images/dichvu/quangcao1.jpg" alt="" class="img-responsive"></a>
                        </div>
                        <div class="item-content">
                            <h2><a href="">Dịch vụ quảng cáo online</a></h2>
                            <div class="gb-divider"></div>
                            <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis
                                egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget.</p>
                        </div>
                    </div>

                </div>
                <div class="col-md-4">
                    <div class="gb-dichvu-cms-item-cms">
                        <div class="item-img-cms">
                            <a href=""><img src="images/dichvu/seo1.jpg" alt="" class="img-responsive"></a>
                        </div>
                        <div class="item-content">
                            <h2><a href="">Dịch vụ seo website</a></h2>
                            <div class="gb-divider"></div>
                            <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis
                                egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="gb-dichvu-cms-item-cms">
                        <div class="item-img-cms">
                            <a href=""><img src="images/dichvu/thietkedohoa1.jpg" alt="" class="img-responsive"></a>
                        </div>
                        <div class="item-content">
                            <h2><a href="">Dịch vụ thiết kế đồ họa</a></h2>
                            <div class="gb-divider"></div>
                            <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis
                                egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="gb-dichvu-cms-item-cms">
                        <div class="item-img-cms">
                            <a href=""><img src="images/dichvu/tvc1.jpg" alt="" class="img-responsive"></a>
                        </div>
                        <div class="item-content">
                            <h2><a href="">Dịch vụ quay TVC quảng cáo</a></h2>
                            <div class="gb-divider"></div>
                            <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis
                                egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="gb-dichvu-cms-item-cms">
                        <div class="item-img-cms">
                            <a href=""><img src="images/dichvu/viet-content1.jpg" alt="" class="img-responsive"></a>
                        </div>
                        <div class="item-content">
                            <h2><a href="">Dịch vụ viết content</a></h2>
                            <div class="gb-divider"></div>
                            <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis
                                egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="gb-dichvu-cms-item-cms">
                        <div class="item-img-cms">
                            <a href=""><img src="images/dichvu/web1.jpg" alt="" class="img-responsive"></a>
                        </div>
                        <div class="item-content">
                            <h2><a href="">Dịch vụ Thiết kế website</a></h2>
                            <div class="gb-divider"></div>
                            <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis
                                egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget.</p>
                        </div>
                    </div>
                </div> -->
            </div>
            <div class="col-md-3">
                <?php include_once DIR_SIDEBAR."MS_SIDEBAR_0010.php";  ?>
            </div>
        </div>
        <!--PAGINATION-->
        <?php include_once DIR_TEMPLATES_PAGINATION."MS_PAGINATION_0001.php";?>
    </div>
</div>