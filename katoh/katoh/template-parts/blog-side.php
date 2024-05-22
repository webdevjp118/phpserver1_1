<div class="page_side">
    <div class="side_title">カテゴリー</div>
    <div class="side_title1">CATEGORY</div>
    <div class="side_cats">
<?php
$categories = get_categories();
foreach($categories as $category) {
    echo '<p><a href="' . get_category_link($category->term_id) . '"><span>-</span>' . $category->name . '</a></p>';
}
?>
    </div>
    <div class="side_title">最新の記事</div>
    <div class="side_title1">TOPIC</div>
    <div class="trop_list">
<?php
$related_args = array(
	'post_type' => 'post',
    'posts_per_page' => 5,
);
$query = new WP_Query( $related_args );
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
        <a class="trop_item" href="<?php echo $loop_permalink; ?>">
            <div class="trop_img">
                <img src="<?php echo $loop_thumb_url; ?>">
            </div>
            <div class="trop_right">
                <div class="trop_date"><?php echo $loop_date; ?></div>
                <div class="trop_cat"><?php echo $loop_category_name; ?></div>
                <div class="hx2"></div>
                <div class="trop_title"><?php echo $loop_title; ?></div>
            </div>
        </a>
<?php
    endwhile;
endif;	
?> 
    </div>
</div>