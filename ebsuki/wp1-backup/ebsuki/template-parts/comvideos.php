<?php 
global $query;
$category_id = 0;
$category_id = get_queried_object()->term_id;
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
<?php
if(empty($category_id)) {
    echo '<a class="tab_btn pxt_active" href="#">すべて</a>';
} else {
    echo '<a class="tab_btn" href="'.get_site_url().'/video/">すべて</a>';
}
$terms = get_terms([
    'taxonomy' => 'video_category',
    'hide_empty' => false,
]);
foreach ($terms as $term){
//   echo $term->slug." : ";
//   echo $term->name;
//   echo get_term_link($term);
//   echo $term->term_id;
    if($category_id == $term->term_id) {
        echo '<a class="tab_btn pxt_active" href="#">'.$term->name.'</a>';
    } else {
        echo '<a class="tab_btn" href="'.get_term_link($term).'">'.$term->name.'</a>';
    }
}
?>                
            </div>
            <div class="hx6"></div>
            <div class="media_row">
<?php
if ( $query->have_posts() ) :
    while ( $query->have_posts() ) :
        $query->the_post();
        $loop_id = get_the_id();
        $loop_title = get_the_title();
        $loop_content = get_the_excerpt();
        $loop_date = get_the_date('Y.m.d');
        $loop_category_name = "";
        $loop_category_objects = wp_get_post_terms( $loop_id, 'video_category', array( 'fields' => 'names' ) );
        foreach($loop_category_objects as $cd){
            $loop_category_name = $cd;
            break;
        }
        $loop_permalink = get_the_permalink($loop_id);
        $loop_thumb_url = get_thumb_url($loop_id);
?>
                <a class="media_item" href="<?php echo get_field('youtube'); ?>" data-fancybox="gallery">
                    <div class="meditem_top">
                        <div class="meditem_img"><img src="<?php echo $loop_thumb_url; ?>"></div>
                        <div class="meditem_play"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/video_play.svg"></div>
                        <div class="meditem_cat"><?php echo $loop_category_name; ?></div>
                    </div>
                    <div class="hx2"></div>
                    <div class="meditem_title"><?php echo $loop_title; ?></div>
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