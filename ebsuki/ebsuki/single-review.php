<?php
get_header();
?>
<?php 
global $wp_query;
$query = $wp_query;
$category_id = 0;
if(is_category() || is_single()){
	$category_id = get_query_var('cat');
}
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
            <div class="sreview_head">
                <div class="sreview_img">
                    <img src="<?php echo $loop_thumb_url; ?>">
                </div>
                <div class="sreview_info">
                    <dl>
                        <dt>氏名:</dt><dd><?php echo get_field('氏名'); ?></dd>
                    </dl>
                    <dl>
                        <dt>年齢:</dt><dd><?php echo get_field('年齢'); ?></dd>
                    </dl>
                    <dl>
                        <dt>前職:</dt><dd><?php echo get_field('前職'); ?></dd>
                    </dl>
                </div>
            </div>
			<div class="hx6"></div>
            <div class="review_qas">
<?php
        if( have_rows('qa') ):
            $qa_list = get_field('qa');
            foreach($qa_list as $qa_item) {
                echo '<div class="review_qa"><div class="review_q"><div>'.$qa_item['q'].'</div></div><div class="review_a">'.$qa_item['a'].'</div></div>';
            }
        endif;
?>
            </div>
<?php if(!empty(get_field('youtube'))): ?>
            <div class="hx6"></div>
            <div class="sreview_yutitle">紹介動画はこちら</div>
            <div class="hx4"></div>
            <div class="sreview_youtube">
                <?php echo get_field('youtube'); ?>
            </div>
<?php endif; ?>            
        </div>
        <div class="hx7"></div>
    </div>
    <?php get_template_part('template-parts/comtact'); ?>
</section>
<?php
    endwhile;
endif;	
?>
<!-- CONTAIN_END -->
<?php
get_footer();
