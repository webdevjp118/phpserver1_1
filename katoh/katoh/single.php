<?php
get_header();
?>
<?php 
global $wp_query;
$query = $wp_query;
$category_id = 0;
$catpage_title = "";
if(is_category() || is_single()){
	$category_id = get_query_var('cat');
    $category_all = get_the_category();
    foreach($category_all as $cd){
        $catpage_title = $cd->cat_name;
        break;
    }
}
$this_postid = 0;
?>
<!-- CONTAIN_START -->
<section id="contain">
    <div class="instead_head"></div>
    <div class="pg_fv">
        <div class="pgfv_img" style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/images/pg_blog.jpg);"></div>
        <div class="cwidth12">
            <div class="under_fvlogo"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/under_fvlogo.svg"></div>
            <div class="pbreadcrumb">
                <p class="pbreadcrumb_a">
                    <a href="<?php echo get_site_url(); ?>/">ホーム</a>
<?php if(!empty($catpage_title)){ ?>               
                    &nbsp;＞&nbsp;
                    <a href="<?php echo get_site_url(); ?>/blog/">スタッフブログ</a>
                    &nbsp;＞&nbsp;
                    <span><?php echo $catpage_title; ?></span>
<?php } else { ?>
                    &nbsp;＞&nbsp;
                    <span>スタッフブログ</span>
<?php } ?>
                </p>
            </div>
            <div class="pgfv_title">
                <div class="pgfv_title1">
                    <h1>スタッフブログ</h1>
                    <p>BLOG</p>
                </div>
            </div>
        </div>
    </div>
    <div class="hx6"></div>
    <div class="cwidth12">
        <div class="page_row">
            <div class="page_main">
<?php
if ( $query->have_posts() ) :
    while ( $query->have_posts() ) :
        $query->the_post();
        $loop_id = get_the_id();
        $this_postid = $loop_id;
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
                <div class="blog_title">
                    <div class="brod_top">
                        <div class="brod_date"><?php echo $loop_date; ?></div>
                        <div class="brod_cat"><?php echo $loop_category_name; ?></div>
                    </div>
                    <div class="hx2"></div>
                    <h1><?php echo $loop_title; ?></h1>
                </div>
                <div class="hx4"></div>
                <div class="blog_content">
                    <div class="pmhwp">
						<?php the_content(); ?>
					</div>
                </div>
<?php
	endwhile;
endif;
?>	                
                <div class="hx10"></div>
                <div class="prev_next">
<?php
$prev_post = get_adjacent_post(false, '', true);
if(!empty($prev_post)) {
// echo '<a href="' . get_permalink($prev_post->ID) . '" title="' . $prev_post->post_title . '">' . $prev_post->post_title . '</a>'; }
?>                    
                    <a class="prev_post" href="<?php echo get_permalink($prev_post->ID); ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/prev_post.svg"><span>前の記事へ</span></a>
<?php
} else { 
    echo "<div>&nbsp;</div>"; 
}
?>
                    <a class="post_list" href="<?php echo get_site_url(); ?>/blog/">スタッフブログ⼀覧へ</a>
<?php
$next_post = get_adjacent_post(false, '', false);
if(!empty($next_post)) {
// echo '<a href="' . get_permalink($next_post->ID) . '" title="' . $next_post->post_title . '">' . $next_post->post_title . '</a>'; }
?>                    
                    <a class="next_post" href="<?php echo get_permalink($next_post->ID); ?>"><span>次の記事へ</span><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/next_post.svg"></a>
<?php
} else { 
    echo "<div>&nbsp;</div>"; 
}
?>                    
                </div>
                <div class="hx8"></div>
                <div class="pgtitle1">
                    <h2>関連記事</h2>
                    <div class="hx2"></div>
                    <div class="pgtitle1_line"></div>
                </div>
                <div class="hx4"></div>
                <div class="brod_list">
<?php
$terms = get_the_terms( get_the_ID(), 'category' );
$term_list = wp_list_pluck( $terms, 'slug' );
$related_args = array(
	'post_type' => 'post',
	'posts_per_page' => 3,
	'post_status' => 'publish',
	'post__not_in' => array( get_the_ID() ),
	'orderby' => 'rand',
	'tax_query' => array(
		array(
			'taxonomy' => 'category',
			'field' => 'slug',
			'terms' => $term_list
		)
	)
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
                    <a class="brod_item" href="<?php echo $loop_permalink; ?>">
                        <div class="brod_img">
                            <img src="<?php echo $loop_thumb_url; ?>">
                        </div>                        
                        <div class="brod_right">
                            <div class="brod_top">
                                <div class="brod_date"><?php echo $loop_date; ?></div>
                                <div class="brod_cat"><?php echo $loop_category_name; ?></div>
                            </div>
                            <div class="hx2"></div>
                            <div class="brod_title"><?php echo $loop_title; ?></div>
                            <div class="brod_text">
                                <?php echo $loop_content; ?>
                            </div>
                        </div>
                    </a>
<?php
    endwhile;
endif;	
?>                      
                </div>                
            </div>		
            <?php get_template_part('template-parts/blog-side'); ?>
        </div>
    </div>
    <div class="hx10"></div>
</section>
<!-- CONTAIN_END -->
<?php
get_footer();
