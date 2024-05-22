<?php
get_header();
?>
<!-- CONTAIN_START -->
<section id="contain">    	        
    <div class="pgtitle_block">
        <div class="container">
            <div class="pgtitle_aline">
                <div class="pgtitle initani initani_wbk">
                    <h1>WORKS</h1>
                    <p>事業実績</p>
                </div>
            </div>
        </div>
    </div>
    <div class="cwidth12">
        <a class="fvrot_line" href="<?php echo get_site_url(); ?>/contact/">
            <div class="fvrot_shape">
                <img class="rot360" src="<?php echo get_stylesheet_directory_uri(); ?>/images/fvrot01.svg">
                <div class="fvrot_center">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/fvrot02.svg">
                </div>
                <div class="fvrot_center1">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/fvrot03.svg">
                </div>
            </div>
        </a>
    </div>
<?php
$related_args = array(
	'post_type' => 'work',
	'posts_per_page' => -1,
);
$youtube_ids = [];
$query = new WP_Query( $related_args );
if ( $query->have_posts() ) :
    while ( $query->have_posts() ) :
        $query->the_post();
        $loop_id = get_the_id();
        array_push($youtube_ids, $loop_id);
    endwhile;
endif;
?>    
    <div class="works_block">
<?php
$cur_index = -1;
while($cur_index < count($youtube_ids)) {
?>        
        <div class="works_row">
            <div class="works_full">
                <?php 
                    echo_videoblock($cur_index, $youtube_ids);
                    $cur_index++;
                ?>
            </div>
            <div class="works_two">
                <div class="works_one">
                    <?php 
                        echo_videoblock($cur_index, $youtube_ids);
                        $cur_index++;
                    ?>
                </div>
                <div class="works_one">
                    <?php 
                        echo_videoblock($cur_index, $youtube_ids);
                        $cur_index++;
                    ?>
                </div>
            </div>
        </div>
<?php
    if($cur_index < count($youtube_ids)) {
?>        
        <div class="works_row">
            <div class="works_two">
                <div class="works_one">
                    <?php 
                        echo_videoblock($cur_index, $youtube_ids);
                        $cur_index++;
                    ?>
                </div>
                <div class="works_one">
                    <?php 
                        echo_videoblock($cur_index, $youtube_ids);
                        $cur_index++;
                    ?>
                </div>
            </div>
            <div class="works_full">
                <?php 
                    echo_videoblock($cur_index, $youtube_ids);
                    $cur_index++;
                ?>
            </div>
        </div>
<?php
    }
}
?>
    </div>
    <?php get_template_part('template-parts/com-contact'); ?>
</section>
<!-- CONTAIN_END -->
<?php
get_footer();
