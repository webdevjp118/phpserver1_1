<?php
get_header();
?>
<!-- CONTAIN_START -->
<div class="site_bg"></div>
<section id="contain">    	        
    <div class="pg_fv">
        <div class="pgfv_layer0">
            <div class="pgfv_title">
                <h1>Media</h1>
                <p>動画メディア</p>
            </div>
        </div>
        <div class="pgfv_layer1">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/net.svg">
        </div>
        <div class="pgfv_bg"></div>
        <div class="breadcrumb_block">
            <a href="<?php echo get_site_url(); ?>/">HOME</a>
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/bread_line.svg">
            <span>動画メディア</span>
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
            <div class="media_row">
                <a class="media_item" href="#">
                    <div class="meditem_top">
                        <div class="meditem_img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/news_sample.jpg"></div>
                        <div class="meditem_play"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/video_play.svg"></div>
                        <div class="meditem_cat">目標設定編</div>
                    </div>
                    <div class="hx2"></div>
                    <div class="meditem_title">広告の特徴</div>
                </a>
                <a class="media_item" href="#">
                    <div class="meditem_top">
                        <div class="meditem_img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/news_sample.jpg"></div>
                        <div class="meditem_play"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/video_play.svg"></div>
                        <div class="meditem_cat">目標設定編</div>
                    </div>
                    <div class="hx2"></div>
                    <div class="meditem_title">広告の特徴</div>
                </a>
                <a class="media_item" href="#">
                    <div class="meditem_top">
                        <div class="meditem_img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/news_sample.jpg"></div>
                        <div class="meditem_play"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/video_play.svg"></div>
                        <div class="meditem_cat">目標設定編</div>
                    </div>
                    <div class="hx2"></div>
                    <div class="meditem_title">広告の特徴</div>
                </a>
                <a class="media_item" href="#">
                    <div class="meditem_top">
                        <div class="meditem_img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/news_sample.jpg"></div>
                        <div class="meditem_play"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/video_play.svg"></div>
                        <div class="meditem_cat">目標設定編</div>
                    </div>
                    <div class="hx2"></div>
                    <div class="meditem_title">広告の特徴</div>
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
