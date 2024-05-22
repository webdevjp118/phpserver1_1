<?php
get_header();
?>
<div class="hx10"></div>
<div class="newsd_width">
<?php
if ( have_posts() ) :
    while ( have_posts() ) :
        the_post();
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
	<div class="fullw_img"><img src="<?php echo $loop_thumb_url; ?>"></div>
	<div class="hx4"></div>
	<div class="newsd_title"><h1><?php echo $loop_title; ?></h1></div>
	<div class="hx2"></div>
	<div class="newsd_info">
		<div class="newsd_cat"><?php echo $loop_category_name; ?></div>
		<div class="newsd_date"><?php echo $loop_date; ?></div>
	</div>
	<div class="hx2"></div>
	<div class="pmhwp">
		<article id="post-<?php the_ID(); ?>" class="article" <?php post_class(); ?>>
			<div class="pmhwp_content">
				<?php the_content(); ?>
			</div>
		</article><!-- #post-xxx -->
	</div>
	<div class="prev_next">
		<a href="<?php echo get_site_url(); ?>/news/" class="prevnext_c">NEWS一覧</a>
<?php
		the_post_navigation(
			array(
				'prev_text' => '<img src="'.get_stylesheet_directory_uri().'/images/newsd_prev.svg"><span>前のNEWS</span>',
				'next_text' => '<span>次のNEWS</span><img src="'.get_stylesheet_directory_uri().'/images/newsd_next.svg">',
			)
		);
?>
	</div>
<?php
    endwhile;
endif;	
?>
</div>
<div class="hx6"></div>       
<?php get_template_part('template-parts/compartner'); ?>
<div class="hx10"></div>
<?php
get_footer();
