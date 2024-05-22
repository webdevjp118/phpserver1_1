<?php
get_header();
?>
<!-- CONTAIN_START -->
<div class="site_bg"></div>
<section id="contain">    	        
    <div class="pg_fv">
        <div class="pgfv_layer0">
            <div class="pgfv_title">
                <h1>News</h1>
                <p>ニュース</p>
            </div>
        </div>
        <div class="pgfv_layer1">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/net.svg">
        </div>
        <div class="pgfv_bg"></div>
        <div class="breadcrumb_block">
            <a href="<?php echo get_site_url(); ?>/">HOME</a>
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/bread_line.svg">
            <span>ニュース</span>
        </div>
    </div>
    <div class="pg_news">
        <div class="hx3"></div>
        <div class="cwidth14">
            <div class="tabs_row">
                <div class="tab_btn pxt_active" href="#">すべて</div>
                <a class="tab_btn" href="#">お知らせ</a>
                <a class="tab_btn" href="#">メディア掲載</a>
            </div>
            <div class="hx6"></div>
            <div class="news_row">
                <a class="news_item" href="#">
                    <div class="newsitem_img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/news_sample.jpg"></div>
                    <div class="newsitem_bottom">
                        <div class="newsitem_info">
                            <div class="newsitem_date">2020.20.20</div>
                            <div class="newsitem_cat">お知らせ</div>
                        </div>
                        <div class="hx2"></div>
                        <div class="newsitem_title">無料セミナー開催！</div>
                    </div>
                </a>
                <a class="news_item" href="#">
                    <div class="newsitem_img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/news_sample.jpg"></div>
                    <div class="newsitem_bottom">
                        <div class="newsitem_info">
                            <div class="newsitem_date">2020.20.20</div>
                            <div class="newsitem_cat">お知らせ</div>
                        </div>
                        <div class="hx2"></div>
                        <div class="newsitem_title">無料セミナー開催！</div>
                    </div>
                </a>
                <a class="news_item" href="#">
                    <div class="newsitem_img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/news_sample.jpg"></div>
                    <div class="newsitem_bottom">
                        <div class="newsitem_info">
                            <div class="newsitem_date">2020.20.20</div>
                            <div class="newsitem_cat">お知らせ</div>
                        </div>
                        <div class="hx2"></div>
                        <div class="newsitem_title">無料セミナー開催！</div>
                    </div>
                </a>
                <a class="news_item" href="#">
                    <div class="newsitem_img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/news_sample.jpg"></div>
                    <div class="newsitem_bottom">
                        <div class="newsitem_info">
                            <div class="newsitem_date">2020.20.20</div>
                            <div class="newsitem_cat">お知らせ</div>
                        </div>
                        <div class="hx2"></div>
                        <div class="newsitem_title">無料セミナー開催！</div>
                    </div>
                </a>
                <a class="news_item" href="#">
                    <div class="newsitem_img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/news_sample.jpg"></div>
                    <div class="newsitem_bottom">
                        <div class="newsitem_info">
                            <div class="newsitem_date">2020.20.20</div>
                            <div class="newsitem_cat">お知らせ</div>
                        </div>
                        <div class="hx2"></div>
                        <div class="newsitem_title">無料セミナー開催！</div>
                    </div>
                </a>
                <a class="news_item" href="#">
                    <div class="newsitem_img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/news_sample.jpg"></div>
                    <div class="newsitem_bottom">
                        <div class="newsitem_info">
                            <div class="newsitem_date">2020.20.20</div>
                            <div class="newsitem_cat">お知らせ</div>
                        </div>
                        <div class="hx2"></div>
                        <div class="newsitem_title">無料セミナー開催！</div>
                    </div>
                </a>
            </div>
        </div>
        <div class="hx7"></div>
    </div>
    <?php get_template_part('template-parts/comtact'); ?>
</section>
<!-- CONTAIN_END -->
<?php
get_footer();
