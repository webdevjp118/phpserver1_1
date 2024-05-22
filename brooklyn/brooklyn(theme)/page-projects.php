<?php
get_header();
global $wp_query;
$query = $wp_query;
?>
<!-- CONTAIN_START -->
<section id="contain">    	        
    <div class="instead_head"></div>
    <div class="pg_fv">
        <div class="pgfv_title">
            <h1 class="pani4 js-split">PROJECTS</h1>
            <div class="pgfv_uline"></div>
        </div>
    </div>
    <div class="cwidth14">
        <p class="pg_p1">各施工事例のブログみたいなページにして欲しいです<br>
            ここから各ページ見れる様にもして欲しいです</p>
        <div class="hx4"></div>
        <div class="proj_row">
<?php
$args = array(
    'post_type' => 'post',
    'paged' => get_query_var('paged'),
);
$query = new WP_Query( $args );
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
            <a class="proj_item" href="<?php echo $loop_permalink; ?>">
                <div class="proj_img">
                    <img src="<?php echo $loop_thumb_url; ?>">
                </div>
                <div class="hx2"></div>
                <h3><?php echo $loop_title; ?></h3>
                <div class="hx1"></div>
                <p><?php echo $loop_content; ?></p>
            </a>
<?php
    endwhile;
endif;	
?>
        </div>
        <div class="pagination_wrap">
            <?php wp_pagenavi(array('query' => $query)); ?>
        </div>
    </div>
    <div class="hx10"></div>
</section>
<!-- CONTAIN_END -->
<?php
get_footer();
