<?php
global $query;
?>
<!-- CONTAIN_START -->
<div class="site_bg"></div>
<section id="contain">    	        
    <div class="pg_fv">
        <div class="pgfv_layer0">
            <div class="pgfv_title">
                <h1>Graduation</h1>
                <p>卒業生の声</p>
            </div>
        </div>
        <div class="pgfv_layer1">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/net.svg">
        </div>
        <div class="pgfv_bg"></div>
        <div class="breadcrumb_block">
            <a href="<?php echo get_site_url(); ?>/">HOME</a>
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/bread_line.svg">
            <span>卒業生の声</span>
        </div>
    </div>
    <div class="pg_news">
        <div class="hx3"></div>
        <div class="cwidth14">
            <div class="news_row">
<?php
if ( $query->have_posts() ) :
    while ( $query->have_posts() ) :
        $query->the_post();
        $loop_id = get_the_id();
        $loop_title = get_the_title();
        $loop_content = get_the_excerpt();
        $loop_date = get_the_date('Y.m.d');
        $loop_category_name = "";
        $loop_category_objects = get_the_category($loop_id);
        foreach($loop_category_objects as $cd){
            $loop_category_name = $cd->cat_name;
            break;
        }
        $loop_permalink = get_the_permalink($loop_id);
        $loop_thumb_url = get_thumb_url($loop_id);
?>                
                <a class="news_item" href="<?php echo $loop_permalink; ?>">
                    <div class="newsitem_top">
                        <div class="newsitem_img"><img src="<?php echo $loop_thumb_url; ?>"></div>
                    </div>
                    <div class="newsitem_bottom">
                        <div class="newsitem_review">
                            <div class="newsitem_job"><?php echo '前職：'.get_field('前職'); ?></div>
                            <div class="newsitem_age"><?php echo get_field('年齢'); ?></div>
                        </div>
                        <div class="hx2"></div>
                        <div class="newsitem_title"><?php echo $loop_title; ?></div>
                    </div>
                </a>
<?php
    endwhile;
endif;	
?>                
            </div>
        </div>
        <div class="news_pageination">
            <div class="pagination_wrap">
                <?php wp_pagenavi(array('query' => $query)); ?>
            </div>									
        </div> 
        <div class="hx7"></div>
    </div>
    <?php get_template_part('template-parts/comtact'); ?>
</section>
<!-- CONTAIN_END -->