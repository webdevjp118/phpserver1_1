<?php 
global $query;
$category_id = 0;
if(is_category() || is_single()){
	$category_id = get_query_var('cat');
}
?>
<!-- CONTAIN_START -->
<section id="contain">
    <div class="instead_head"></div>
    <div class="pg_fv">
        <div class="pgfv_bg" style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/images/pg_news.jpg);"></div>
        <div class="pgfv_front">
            <div class="pgfv_title">
                <h1 class="lang_en">NEWS</h1>
                <p>ニュース</p>
            </div>
        </div>
    </div>
    <div class="hx10"></div>
    <div class="news_width">
        <div class="news_tabs">
<?php
    $categories = get_categories();
    if(empty($category_id)) {
        echo '<a class="news_tab X_active" href="#">ALL</a>';
    } else {
        echo '<a class="news_tab" href="'.get_site_url().'/news/">ALL</a>';
    }
    foreach($categories as $category) {
        if($category_id == $category->term_id) {
            echo '<a class="news_tab X_active" href="'.get_category_link($category->term_id).'">'.$category->name.'</a>';
        } else {
            echo '<a class="news_tab" href="'.get_category_link($category->term_id).'">'.$category->name.'</a>';
        }
    }
?>            
        </div>
        <div class="hx4"></div>
        <div class="news_list">
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
                <div class="news_img">
                    <img src="<?php echo $loop_thumb_url; ?>">
                    <span class="news_cat"><?php echo $loop_category_name; ?></span>
                </div>
                <div class="hx1"></div>
                <div class="news_ttl"><?php echo $loop_title; ?></div>
                <div class="hx1"></div>
                <div class="news_info"><span class="news_date"><?php echo $loop_date; ?></span></div>
            </a>
<?php
    endwhile;
endif;	
?>
        </div>
        <div class="news_pageination">
            <div class="pagination_wrap">
                <?php wp_pagenavi(array('query' => $query)); ?>
            </div>									
        </div>  
    </div>    
    <div class="hx6"></div>       
    <?php get_template_part('template-parts/compartner'); ?>
    <div class="hx10"></div>
</section>
<!-- CONTAIN_END -->