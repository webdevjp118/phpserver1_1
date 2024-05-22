<?php
get_header();
?>
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
		<div class="blog_h2">
			<h2><?php echo $loop_title; ?></h2>
		</div>
		<div class="hx4"></div>
        <div class="pmhwp">
			<?php the_content(); ?>	
		</div>
    </div>
    <div class="hx10"></div>
</section>
<?php
endwhile;
endif;	
?>
<!-- CONTAIN_END -->
<?php
get_footer();
