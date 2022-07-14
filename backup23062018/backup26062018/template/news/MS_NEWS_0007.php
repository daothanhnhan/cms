<div class="gb-tintuc-sukien-cms-right-cms">
    <div class="container">
        <div class="row">
            <?php
            $d = 0;
            foreach ($rows['data'] as $item) {
                $d++;
                $action_news1 = new action_news();
                $rowLang1 = $action_news1->getNewsLangDetail_byId($item['news_id'],$lang);
                $row1 = $action_news1->getNewsDetail_byId($item['news_id'],$lang);
                ?>
                <div class="grid-item-cms col-md-6">
                    <!--===========================================-->
                    <div class="blog-grid-item-cms">
                        <article class="post type-post">
                            <div class="content-inner">
                                <div class="uni-entry-top-cms">
                                    <div class="thumbnail-img">
                                        <a href="/<?= $rowLang1[$nameColUrlNews_newsLanguage] ?>" title="">
                                            <img src="/images/<?= $row1['news_img'] ?>" alt="" title="" class="img-responsive">
                                        </a>
                                    </div>
                                </div>

                                <div class="uni-entry-body-cms">
                                    <div class="uni-entry-content-cms">

                                        <header class="uni-entry-header">
                                            <h2 class="uni-entry-title">
                                                <a href="/<?= $rowLang1[$nameColUrlNews_newsLanguage] ?>" rel=""><?= $rowLang1[$nameColLangNewsName_newsLanguage] ?></a>
                                            </h2>
                                        </header>

                                        <div class="uni-entry-meta">
                                                <span class="uni-author">
                                                    <a href="/<?= $rowLang1[$nameColUrlNews_newsLanguage] ?>" rel="author"><i class="fa fa-calendar" aria-hidden="true"></i> june 21, 2017</a>
                                                </span>
                                            <span class="uni-comment-total">
                                                    <a href="/<?= $rowLang1[$nameColUrlNews_newsLanguage] ?>" class="comments-link"><i class="fa fa-user" aria-hidden="true"></i> admin</a>
                                                </span>
                                            <span class="uni-entry-folder"><a href="/<?= $rowLang1[$nameColUrlNews_newsLanguage] ?>"><i class="fa fa-comment" aria-hidden="true"></i> 2 comments</a></span>
                                        </div>
                                        <div class="uni-entry-summary">
                                            <p><?= $rowLang1['lang_news_des'] ?>
                                                <span class="readmore"><a href="/<?= $rowLang1[$nameColUrlNews_newsLanguage] ?>">[ Read More ]</a></span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
                <?php if ($d%2==0) {echo '<hr style="width:100%;">';} ?>
            <?php } ?>
        </div>
    </div>
</div>
<?php 
                    $config = array(
				        'current_page'  => $trang+1, // Trang hiện tại
				        'total_record'  => $rows['count'], // Tổng số record
				        'total_page'    => 1, // Tổng số trang
				        'limit'         => $limit,// limit
				        'start'         => 0, // start
				        'link_full'     => '',// Link full có dạng như sau: domain/com/page/{page}
				        'link_first'    => '',// Link trang đầu tiên
				        'range'         => 9, // Số button trang bạn muốn hiển thị 
				        'min'           => 0, // Tham số min
				        'max'           => 0,  // tham số max, min và max là 2 tham số private
				        'search'        => str_replace(' ', '-', $rows['q'])

				    );

				    $pagination = new Pagination;
				    $pagination->init($config);
				    echo $pagination->htmlPaging2();
                ?>