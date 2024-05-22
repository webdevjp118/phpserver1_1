<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package artist
 */

get_header();
?>
<!-- CONTAIN_START -->
    <section id="contain">    	  
    	<div class="banner_block_sdp banner_block_change_tp" style="background:url(<?php echo get_stylesheet_directory_uri(); ?>/images/banner_bg.png) no-repeat top center; background-size:cover;">             
        	<div class="banner_svg_sdp">
            	<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/banner_svg1.svg" alt="">
            </div>
            <div class="container container_inner">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 banner_block_in_sdp">                    	                    	
                        <div class="banner_middle_sdp">                        		
                        	<div class="banner_title_sdp">
                            	INFO
                            </div>	
                            <div class="banner_img_sdp">
                            	<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/management.png" alt="">
                            </div> 	                                                                                                                 
                        </div>                       
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>            
            <div class="clearfix"></div>
        </div>                              
    	<div class="breadcrumb_block_sdp">             
            <div class="container container_inner">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 breadcrumb_block_in_sdp">
                        <div class="breadcrumb_middle_sdp">
                        	<ol class="breadcrumb">
                           		<li class="breadcrumb-item"><a href="<?php echo get_site_url(); ?>/">HOME</a></li>
                           		<li class="breadcrumb-item"><a href="javascript:void(0)">INFO</a></li>                                                              
                        	</ol>                                                                                             
                        </div>                       
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>            
            <div class="clearfix"></div>
        </div>
        <div class="topic_block_tp">
        	<div class="common_shadow_2_hp">
          		<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/shadow2.png" alt="">
        	</div>
            <div class="common_shadow_1_hp">
          		<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/shadow2.png" alt="">
        	</div>
        	<div class="common_ab_title_hp">
             	<h2>INFO</h2>
            </div>
            <div class="container container_inner">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 topic_block_in_tp">
                    	<div class="topic_middle_tp">  
                        	<div class="topic_boxes_tp">
<?php
if ( have_posts() ) :
    while ( have_posts() ) :
        the_post();
        $loop_id = get_the_id();
        $loop_title = get_the_title();
        $loop_content = get_the_excerpt();
        $loop_date = get_the_date('Y/m/d');
        $loop_terms = get_the_terms($loop_id, 'info_cat');
        $loop_cat = $loop_terms[0]->name;
        $loop_permalink = get_the_permalink($loop_id);
        $loop_thumb_id = get_post_thumbnail_id($loop_id);
        $thumb_url_array = wp_get_attachment_image_src($loop_thumb_id, 'thumbnail-size', true);
        $loop_thumb_url = $thumb_url_array[0];
?>
                            	<div class="topic_box_tp">
                                	<a href="<?php echo $loop_permalink; ?>">
                                    	<div class="topic_left_tp">
                                        	<div class="topic_img_tp">
                                            	<img src="<?php echo $loop_thumb_url; ?>" alt="">
                                            </div>
                                        </div>
                                        <div class="topic_right_tp">
                                        	<div class="topic_right_row_tp">
                                            	<div class="topic_right_date_tp">
                                            		<?php echo $loop_date; ?>
                                            	</div>
                                                <?php if(!empty($loop_cat)): ?>
                                                <div class="topic_right_category_tp">
                                            		<?php echo $loop_cat; ?>
                                            	</div>
                                                <?php endif; ?>
                                            </div>
                                            <div class="topic_right_info_tp">
                                            	<h3><?php echo $loop_title; ?></h3>
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
<?php if(have_posts()): ?>
                            <div class="container mt-50" data-aos="fade-up">
                                <div class="pagination">
                                    <?php wp_pagenavi(); ?>
                                </div>
                            </div>
<?php endif; ?>                                                	
							<div class="clearfix"></div>
                        </div>
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
        <div class="clearfix"></div>
   </section>
<!-- CONTAIN_END -->
<?php
get_footer();
