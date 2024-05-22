<?php
get_header();
?>
<!-- CONTAIN_START -->
<section id="contain">    	                                
        <div class="banner_block_hp">
        	<div class="common_shadow_1_hp">
            	<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/shadow2.png" alt="">
            </div>            
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 banner_block_in_hp">
                    	<div class="banner_middle_hp">                                                    	
							<div class="banner_img_hp">
                            	<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/banner1.png" alt="">
                            </div>
                            <div class="banner_title_hp">OHL inc.</div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="company_block_main_hp">
        	<div class="common_shadow_2_hp">
            	<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/shadow2.png" alt="">
            </div>
            <div class="company_block_hp">  
                <div class="common_ab_title_hp">
                    <h2>TOPICS</h2>
                </div>          
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 company_block_in_hp">
                            <div class="common_title_main_hp">
                                <div class="common_title_left_hp">
                                    <div class="common_title_hp">
                                        <h2>TOPICS</h2>
                                    </div>
                                </div>                                                                                    
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 company_block_in_hp">
                            <div class="company_middle_hp">                                                    								
                                <div class="company_boxes_hp">
                                    <div class="owl-carousel owl-theme owl-loaded owl-drag">
                                        <div class="owl-stage-outer">
                                            <div class="owl-stage" style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s; width: 3094px; padding-left: 40px; padding-right: 40px;">
<?php
$query = new WP_Query([
    'post_type'      => 'info',
    'posts_per_page' => 10,
    'tax_query' => array(
        array (
            'taxonomy' => 'info_cat',
            'field' => 'slug',
            'terms' => 'topics',
        )
    ),
]);
if($query->have_posts() ) :
    while ( $query->have_posts() ) :
        $query->the_post();
        $loop_content = get_the_excerpt();
        $loop_thumb_id = get_post_thumbnail_id($loop_id);
        $thumb_url_array = wp_get_attachment_image_src($loop_thumb_id, 'thumbnail-size', true);
        $loop_thumb_url = $thumb_url_array[0];
        $loop_permalink = get_the_permalink($loop_id);
?>
                                                <div class="owl-item active" style="width: 366.667px; margin-right: 10px;">
                                                    <a href="<?php echo $loop_permalink; ?>">
                                                        <div class="company_box_hp">
                                                            <div class="company_img_hp">
                                                                <img src="<?php echo $loop_thumb_url; ?>" alt="">
                                                            </div>
                                                            <div class="company_text_hp">
                                                                <?php the_title(); ?>
                                                            </div>
                                                            <div class="company_title_hp">
                                                                <p><?php echo $loop_content; ?></p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
<?php
    endwhile;
endif;
?>                                                
                                            </div>
                                        </div>
                                        <div class="owl-nav">
                                            <button type="button" role="presentation" class="owl-prev disabled">
                                                <span aria-label="Previous">‹</span>
                                            </button>
                                            <button type="button" role="presentation" class="owl-next">
                                                <span aria-label="Next">›</span>
                                            </button>
                                        </div>
                                        <div class="owl-dots">
                                            <button role="button" class="owl-dot active">
                                                <span></span>
                                            </button>
                                            <button role="button" class="owl-dot">
                                                <span></span>
                                            </button>
                                            <button role="button" class="owl-dot">
                                                <span></span>
                                            </button>
                                        </div>
                                    </div>
                                </div>    
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
        <div class="profile_block_hp">
        	<div class="common_shadow_2_hp">
            	<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/shadow2.png" alt="">
            </div>  
            <div class="common_ab_title_hp">
             	<h2>PROFILE</h2>
            </div>          
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 profile_block_in_hp">
                    	<div class="profile_middle_hp">                                                    	
							<div class="profile_title_hp">PROFILE</div>
                            <div class="profile_top_hp">
<?php
$query = new WP_Query([
    'post_type'      => 'profile',
    'nopaging'       => true,
    'posts_per_page' => -1,
]);
if($query->have_posts() ) {
    while ( $query->have_posts() ){
        $query->the_post();
?>
                            	<div class="profile_img_hp">
                                	<a href="<?php echo get_site_url(); ?>/profile/">
                                		<img src="<?php echo get_field('half_photo'); ?>" alt="">
                                    </a>
                                </div>
<?php
    }
}
?>
                            </div>
                            <div class="profile_btn_hp">
                                <a class="common_btn_hp" href="<?php echo get_site_url(); ?>/profile/">MORE DETAIL<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/btn_arrow.svg" alt=""></a>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="schedule_block_hp fan_info_change_hp">
        	<div class="common_shadow_1_hp">
            	<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/shadow3.png" alt="">
            </div>
            <div class="common_shadow_2_hp">
            	<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/shadow2.png" alt="">
            </div>
            <div class="common_ab_title_hp">
             	<h2>SCHEDULE</h2>
            </div> 
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 schedule_block_in_hp">
                    	<div class="common_title_main_hp">
                        	<div class="common_title_left_hp">
                            	<div class="common_title_hp">
                                	<h2>Schedule</h2>
                                </div>
                            </div>
                            <div class="common_title_right_hp">
                            	<a class="common_btn_hp common_btn_white_hp" href="<?php echo get_site_url(); ?>/schedule/">MORE DETAIL<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/arrow_right.svg" alt=""></a>
                            </div>                                                        
                        </div>
                    	<div class="schedule_middle_hp">    
                        <div class="owl-carousel owl-theme owl-loaded owl-drag">
                                        <div class="owl-stage-outer">
                                            <div class="owl-stage" style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s; width: 3094px; padding-left: 40px; padding-right: 40px;">
<?php
$query = new WP_Query([
    'post_type'      => 'info',
    'posts_per_page' => 10,
    'tax_query' => array(
        array (
            'taxonomy' => 'info_cat',
            'field' => 'slug',
            'terms' => 'topics',
        )
    ),
]);
if($query->have_posts() ) :
    while ( $query->have_posts() ) :
        $query->the_post();
        $loop_content = get_the_excerpt();
        $loop_thumb_id = get_post_thumbnail_id($loop_id);
        $thumb_url_array = wp_get_attachment_image_src($loop_thumb_id, 'thumbnail-size', true);
        $loop_thumb_url = $thumb_url_array[0];
        $loop_permalink = get_the_permalink($loop_id);
?>
                                                <div class="owl-item active" style="width: 366.667px; margin-right: 10px;">
                                                    <a href="<?php echo $loop_permalink; ?>">
                                                        <div class="company_box_hp">
                                                            <div class="company_img_hp">
                                                                <img src="<?php echo $loop_thumb_url; ?>" alt="">
                                                            </div>
                                                            <div class="company_text_hp">
                                                                <?php the_title(); ?>
                                                            </div>
                                                            <div class="company_title_hp">
                                                                <p><?php echo $loop_content; ?></p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
<?php
    endwhile;
endif;
?>                                                
                                            </div>
                                        </div>
                                        <div class="owl-nav">
                                            <button type="button" role="presentation" class="owl-prev disabled">
                                                <span aria-label="Previous">‹</span>
                                            </button>
                                            <button type="button" role="presentation" class="owl-next">
                                                <span aria-label="Next">›</span>
                                            </button>
                                        </div>
                                        <div class="owl-dots">
                                            <button role="button" class="owl-dot active">
                                                <span></span>
                                            </button>
                                            <button role="button" class="owl-dot">
                                                <span></span>
                                            </button>
                                            <button role="button" class="owl-dot">
                                                <span></span>
                                            </button>
                                        </div>
                                    </div>                                                							
                        	<div class="fan_boxes_fcp">  
<?php
    $loop_live = new WP_Query(array(
        'post_type' => 'scheduler',
        'posts_per_page' => -1
    ));
	while($loop_live->have_posts()): 
		$loop_live->the_post();
?>
                            	<div class="fan_box_fcp">
                                	<a href="<?php echo get_field('リンク') ?>">
                                    	<div class="fan_img_fcp">
                                        	<img src="<?php echo get_field('イメージ') ?>" alt="">                                            
                                        </div>
                                        <div class="fan_info_fcp ">
                                        	<h3><?php echo get_field('会社名') ?></h3>
                                            <p><?php echo get_field('テキスト') ?></p>
                                        </div>
                                        
                                    </a>
                                </div>
<?php
	endwhile;						
?>
                            </div>    
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>  
        <div class="discography_block_hp discography_pd_hp"> 
        	<div class="common_ab_title_hp">
             	<h2>DISCOGRAPHY</h2>
            </div>       	
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 discography_block_in_hp">
                    	<div class="common_title_main_hp">
                        	<div class="common_title_left_hp">
                            	<div class="common_title_hp">
                                	<h2>DISCOGRAPHY</h2>
                                </div>
                            </div>
                            <div class="common_title_right_hp">
                            	<a class="common_btn_hp common_btn_white_hp" href="<?php echo get_site_url(); ?>/discography/">MORE DETAIL<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/arrow_right.svg" alt=""></a>
                            </div>                                                        
                        </div>
                    	<div class="discography_middle_hp">                                                    	
							<div class="discography_boxes_dp">
<?php
$query = new WP_Query([
    'post_type'      => 'discography',
    'posts_per_page' => 3,
]);
if($query->have_posts() ) :
    while ( $query->have_posts() ) :
        $query->the_post();
        $loop_date = get_the_date('Y/m/d');
        $loop_content = get_the_excerpt();
        $loop_thumb_id = get_post_thumbnail_id($loop_id);
        $thumb_url_array = wp_get_attachment_image_src($loop_thumb_id, 'thumbnail-size', true);
        $loop_thumb_url = $thumb_url_array[0];
        $loop_terms = get_the_terms($loop_id, 'disco_cat');
        $loop_cat = $loop_terms[0]->name;
        $loop_permalink = get_the_permalink($loop_id);
?>
                            	<div class="discography_box_dp">
                                	<a href="<?php echo $loop_permalink; ?>">
                                    	<div class="discography_left_dp">
                                        	<img src="<?php echo $loop_thumb_url; ?>" alt="">
                                        </div>
                                        <div class="discography_right_dp">
                                        	<div class="discography_right_row_dp">
                                            	<div class="discography_right_date_dp">
                                            		<?php echo $loop_date; ?>
                                            	</div>
                                                <?php if(!empty($loop_cat)): ?>
                                                <div class="discography_right_category_dp">
                                            		<?php echo $loop_cat; ?>
                                            	</div>
                                                <?php endif; ?>
                                            </div>
                                            <div class="discography_right_info_dp">
                                            	<h3><?php the_title(); ?></h3>
                                                <p><?php echo $loop_content; ?></p>
                                            </div>                                            
                                        </div>
                                    </a>
                                </div>
<?php
    endwhile;
endif;
?>
                            </div>		                           
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="goods_block_sdp">             
        	<div class="goods_svg_sdp">
            	<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/banner_svg1.svg" alt="">
            </div>
            <div class="common_shadow_1_hp">
            	<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/shadow2.png" alt="">
            </div>
            <div class="common_ab_title_hp">
             	<h2>GOODS</h2>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 goods_block_in_sdp">                    	                    	
                        <div class="goods_middle_sdp">                        		                        		
                        	<div class="goods_top_sdp">
                            	<div class="goods_left_img_sdp">
                                	<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/artist_img1.png" alt="">
                                </div> 
                                <div class="goods_middle_box_sdp">
                                	<div class="goods_middle_title_sdp">
                                    	GOODS
                                    </div>
                                    <div class="goods_middle_btn_sdp">
                                    	<a class="common_btn_hp common_btn_black_hp" href="<?php echo get_site_url(); ?>/goods/">MORE DETAIL<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/right_arrow.svg" alt=""></a>
                                    </div>
                                </div>
                                <div class="goods_right_img_sdp">
                                	<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/artist_img2.png" alt="">
                                </div>
                            </div>  	                                                                                                                 
                        </div>                       
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>            
            <div class="clearfix"></div>
        </div>
        <div class="contact_block_sdp"> 
        	<div class="common_ab_title_hp">
             	<h2>CONTACT</h2>
            </div>            
        	<div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 contact_block_in_sdp">                    	                    	
                        <div class="contact_middle_sdp">                        		                        		
                        	<div class="contact_svg_sdp">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/banner_svg1.svg" alt="">
                            </div>
                        	<div class="contact_top_sdp">                            	 
                                <div class="contact_left_sdp">
                                	<div class="goods_middle_title_sdp">
                                    	CONTACT
                                    </div>
                                    <div class="goods_middle_btn_sdp">
                                    	<a class="common_btn_hp common_btn_black_hp" href="<?php echo get_site_url(); ?>/contact/">お問い合わせ<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/right_arrow.svg" alt=""></a>
                                    </div>
                                </div>
                                <div class="contact_right_img_sdp">
                                	<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/artist_img3.png" alt="">
                                </div>
                            </div>  	                                                                                                                 
                        </div>                       
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>            
            <div class="clearfix"></div>
        </div>
<!--         <div class="fanclub_block_sdp" style="background:url(<?php //echo get_stylesheet_directory_uri(); ?>/images/artist_img4.png) no-repeat top center; background-size:cover;"> 
        	<div class="common_shadow_1_hp">
           		<img src="<?php //echo get_stylesheet_directory_uri(); ?>/images/shadow2.png" alt="">
       	 	</div> 
            <div class="common_ab_title_hp">
             	<h2>FAN CLUB</h2>
            </div>           
        	<div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 fanclub_block_in_sdp">                    	                    	
                        <div class="fanclub_middle_sdp">
                        	<div class="fanclub_svg_sdp">
                                <img src="<?php // echo get_stylesheet_directory_uri(); ?>/images/banner_svg1.svg" alt="">
                            </div>
                        	<div class="contact_top_sdp fanclub_top_sdp">                            	 
                                <div class="contact_left_sdp">
                                	<div class="goods_middle_title_sdp">
                                    	FANCLUB
                                    </div>
                                    <div class="goods_middle_btn_sdp">
                                    	<a class="common_btn_hp common_btn_black_hp" href="<?php // echo get_site_url(); ?>/contact/">お問い合わせ<img src="<?php //echo get_stylesheet_directory_uri(); ?>/images/right_arrow.svg" alt=""></a>
                                    </div>
                                </div>
                                <div class="contact_right_img_sdp">                                	
                                </div>
                            </div>
                         </div>                                                                                                                          
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>            
            <div class="clearfix"></div>
        </div>                                                                                   -->
        <div class="clearfix"></div>
    </section>
<!-- CONTAIN_END -->
<?php
get_footer();
