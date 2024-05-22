<?php
get_header();
?>
<!-- CONTAIN_START -->
<section id="contain">
    <div class="instead_head"></div>
    <div class="pg_fv">
        <div class="pgfv_bg" style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/images/pg_homt.jpg);"></div>
        <div class="pgfv_front">
            <div class="pgfv_title">
                <h1 class="lang_en">HOME TOWN</h1>
                <p>ホームタウン</p>
            </div>
        </div>
    </div>
    <div class="hx10"></div>
    <div class="news_width">
        <div class="homt_title pioup">
            <div class="homt_title1">ホームタウン</div>
            <div class="homt_title2">兵庫県西宮市</div>
        </div>
        <div class="hx3"></div>
        <div class="homt_img pioup">
            <a href="<?php echo get_stylesheet_directory_uri(); ?>/images/homt_img.jpg" data-fancybox="home-town" data-caption="">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/homt_img.jpg" alt="" />
            </a>
            <div class="homt_imgplus"></div>
        </div>
    </div>    
    <div class="hx10"></div>
    <div class="homt_idea">
        <div class="news_width">
            <p class="pioup">
                西宮に関わるすべてのみなさまを中心に、<br>
                西宮に思い入れがあるみなさまがプレーヤーとなって、<br>
                私達FC西宮は構成されています。
            </p>
            <div class="hx2"></div>
            <div class="homtidea_img pioup">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/homt_idea.svg">
            </div>
        </div>
    </div>
    <div class="hx10"></div>
    <div class="news_width">
        <div class="homt_title2 pioup">ホームタウン活動</div>
        <div class="hx2"></div>
        <div class="homt_subtle lang_en pioup">PICK UP</div>
        <div class="hx1"></div>
        <div class="news_list">
<?php
$related_args = array(
	'post_type' => 'post',
	'posts_per_page' => 9,
	'post_status' => 'publish',
	'tax_query' => array(
		array(
			'taxonomy' => 'category',
			'field' => 'slug',
			'terms' => 'town',
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
            <a class="news_item pioup" href="<?php echo $loop_permalink; ?>">
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
    </div>    
    <div class="hx6"></div>
    <?php get_template_part('template-parts/compartner'); ?>
    <div class="hx10"></div>
</section>
<!-- CONTAIN_END -->
<?php
get_footer();
