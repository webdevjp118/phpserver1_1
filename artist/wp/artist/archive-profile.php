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
    	<div class="breadcrumb_block_sdp">             
            <div class="container container_inner">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 breadcrumb_block_in_sdp">
                        <div class="breadcrumb_middle_sdp">
                        	<ol class="breadcrumb">
                           		<li class="breadcrumb-item"><a href="<?php echo get_site_url(); ?>/">HOME</a></li>
                           		<li class="breadcrumb-item"><a href="javascript:void(0)">ARTIST</a></li>                                                              
                        	</ol>                                                                                             
                        </div>                       
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>            
            <div class="clearfix"></div>
        </div>
        <div class="management_block_pp"> 
        	<div class="common_shadow_2_hp">
          		<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/shadow3.png" alt="">
        	</div>
            <div class="common_shadow_1_hp">
            	<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/shadow2.png" alt="">
            </div>
            <div class="common_shadow_3_hp">
          		<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/shadow3.png" alt="">
        	</div>
            <div class="common_shadow_4_hp">
            	<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/shadow2.png" alt="">
            </div>
        	<div class="common_ab_title_hp">
             	<h2>INFO</h2>
            </div>            
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 management_block_in_pp">
                    	<div class="page_common_title_sdp text-center">
                        	<h2>MANAGEMENT ARTIST</h2>
                        </div>
                        <div class="schedule_middle_pp">                        		
                        	<div class="schedule_logo_pp">
                            	<a href="javascript:void(0)"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo1.svg" alt=""></a>
                            </div> 
                            <div class="schedule_img_pp">
                            	<a href="javascript:void(0)"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/Management_img1.png" alt=""></a>
                            </div>  
                            <div class="schedule_top_pp">
<?php
if ( have_posts() ) :
    while ( have_posts() ) :
        the_post();
        $loop_id = get_the_id();
        $loop_title = get_the_title();
        $loop_photo = get_field('full_photo');
        $loop_date_birth = get_field('date_birth');
        $loop_blood_type = get_field('blood_type');
        $loop_birth_state = get_field('birth_state');
        $loop_tall = get_field('tall');
        $loop_shoe_size = get_field('shoe_size');
        $loop_twitter = get_field('twitter');
        if(empty($loop_twitter)) $loop_twitter = "javascript:void(0)";
        $loop_insta = get_field('insta');
        if(empty($loop_insta)) $loop_insta = "javascript:void(0)";
        $loop_tiktok = get_field('tiktok');
        if(empty($loop_tiktok)) $loop_tiktok = "javascript:void(0)";
?>
                            <div class="schedule_box_pp">
                                	<div class="schedule_left_img_pp">
                                    	<a href="javascript:void(0)"><img src="<?php echo $loop_photo; ?>" alt=""></a>
                                    </div>
                                    <div class="schedule_right_pp">
                                    	<div class="schedule_right_title_pp">
                                        	<?php echo $loop_title; ?>
                                        </div>
                                        <div class="schedule_right_row_pp">
                                        	<div class="schedule_right_info_pp">
                                            	誕生日
                                            </div>
                                            <div class="schedule_right_subinfo_pp">
                                            	<?php echo $loop_date_birth; ?>
                                            </div>
                                        </div>
                                        <div class="schedule_right_row_pp">
                                        	<div class="schedule_right_info_pp">
                                            	血液型
                                            </div>
                                            <div class="schedule_right_subinfo_pp">
                                                <?php echo $loop_blood_type; ?>
                                            </div>
                                        </div>
                                        <div class="schedule_right_row_pp">
                                        	<div class="schedule_right_info_pp">
                                            	出身
                                            </div>
                                            <div class="schedule_right_subinfo_pp">
                                                <?php echo $loop_birth_state; ?>
                                            </div>
                                        </div>
                                        <div class="schedule_right_row_pp">
                                        	<div class="schedule_right_info_pp">
                                            	身長
                                            </div>
                                            <div class="schedule_right_subinfo_pp">
                                            	<?php echo $loop_tall; ?>
                                            </div>
                                        </div>
                                        <div class="schedule_right_row_pp">
                                        	<div class="schedule_right_info_pp">
                                            	靴のサイズ
                                            </div>
                                            <div class="schedule_right_subinfo_pp">
                                            	<?php echo $loop_shoe_size; ?>
                                            </div>
                                        </div>
                                        <div class="schedule_right_grid_pp">
                                        	<div class="schedule_right_img_pp">
                                            	<a href="<?php echo $loop_twitter; ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/twitter_icon.svg" alt=""></a>
                                            </div>
                                            <div class="schedule_right_img_pp">
                                            	<a href="<?php echo $loop_insta; ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/insta_icon.svg" alt=""></a>
                                            </div>
                                            <div class="schedule_right_img_pp">
                                            	<a href="<?php echo $loop_tiktok; ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/tiktok_icon.svg" alt=""></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
<?php
	endwhile;
endif;
?>
                            	<!-- <div class="schedule_box_pp">
                                	<div class="schedule_left_img_pp">
                                    	<a href="javascript:void(0)"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/Management_img_1.png" alt=""></a>
                                    </div>
                                    <div class="schedule_right_pp">
                                    	<div class="schedule_right_title_pp">
                                        	JUNYA
                                        </div>
                                        <div class="schedule_right_row_pp">
                                        	<div class="schedule_right_info_pp">
                                            	誕生日
                                            </div>
                                            <div class="schedule_right_subinfo_pp">
                                            	1993.11.26
                                            </div>
                                        </div>
                                        <div class="schedule_right_row_pp">
                                        	<div class="schedule_right_info_pp">
                                            	血液型
                                            </div>
                                            <div class="schedule_right_subinfo_pp">
                                            	A
                                            </div>
                                        </div>
                                        <div class="schedule_right_row_pp">
                                        	<div class="schedule_right_info_pp">
                                            	出身
                                            </div>
                                            <div class="schedule_right_subinfo_pp">
                                            	東京都
                                            </div>
                                        </div>
                                        <div class="schedule_right_row_pp">
                                        	<div class="schedule_right_info_pp">
                                            	身長
                                            </div>
                                            <div class="schedule_right_subinfo_pp">
                                            	172
                                            </div>
                                        </div>
                                        <div class="schedule_right_row_pp">
                                        	<div class="schedule_right_info_pp">
                                            	靴のサイズ
                                            </div>
                                            <div class="schedule_right_subinfo_pp">
                                            	26.5
                                            </div>
                                        </div>
                                        <div class="schedule_right_grid_pp">
                                        	<div class="schedule_right_img_pp">
                                            	<a href="javascript:void(0)"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/twitter_icon.svg" alt=""></a>
                                            </div>
                                            <div class="schedule_right_img_pp">
                                            	<a href="javascript:void(0)"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/insta_icon.svg" alt=""></a>
                                            </div>
                                            <div class="schedule_right_img_pp">
                                            	<a href="javascript:void(0)"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/tiktok_icon.svg" alt=""></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="schedule_box_pp">
                                	<div class="schedule_left_img_pp">
                                    	<a href="javascript:void(0)"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/Management_img_2.png" alt=""></a>
                                    </div>
                                    <div class="schedule_right_pp">
                                    	<div class="schedule_right_title_pp">
                                        	KTA
                                        </div>
                                        <div class="schedule_right_row_pp">
                                        	<div class="schedule_right_info_pp">
                                            	誕生日
                                            </div>
                                            <div class="schedule_right_subinfo_pp">
                                            	1994.4.29
                                            </div>
                                        </div>
                                        <div class="schedule_right_row_pp">
                                        	<div class="schedule_right_info_pp">
                                            	血液型
                                            </div>
                                            <div class="schedule_right_subinfo_pp">
                                            	AB
                                            </div>
                                        </div>
                                        <div class="schedule_right_row_pp">
                                        	<div class="schedule_right_info_pp">
                                            	出身
                                            </div>
                                            <div class="schedule_right_subinfo_pp">
                                            	北海道
                                            </div>
                                        </div>
                                        <div class="schedule_right_row_pp">
                                        	<div class="schedule_right_info_pp">
                                            	身長
                                            </div>
                                            <div class="schedule_right_subinfo_pp">
                                            	183
                                            </div>
                                        </div>
                                        <div class="schedule_right_row_pp">
                                        	<div class="schedule_right_info_pp">
                                            	靴のサイズ
                                            </div>
                                            <div class="schedule_right_subinfo_pp">
                                            	29
                                            </div>
                                        </div>
                                        <div class="schedule_right_grid_pp">
                                        	<div class="schedule_right_img_pp">
                                            	<a href="javascript:void(0)"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/twitter_icon.svg" alt=""></a>
                                            </div>
                                            <div class="schedule_right_img_pp">
                                            	<a href="javascript:void(0)"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/insta_icon.svg" alt=""></a>
                                            </div>
                                            <div class="schedule_right_img_pp">
                                            	<a href="javascript:void(0)"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/tiktok_icon.svg" alt=""></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="schedule_box_pp">
                                	<div class="schedule_left_img_pp">
                                    	<a href="javascript:void(0)"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/Management_img_3.png" alt=""></a>
                                    </div>
                                    <div class="schedule_right_pp">
                                    	<div class="schedule_right_title_pp">
                                        	NAO
                                        </div>
                                        <div class="schedule_right_row_pp">
                                        	<div class="schedule_right_info_pp">
                                            	誕生日
                                            </div>
                                            <div class="schedule_right_subinfo_pp">
                                            	1997.3.13
                                            </div>
                                        </div>
                                        <div class="schedule_right_row_pp">
                                        	<div class="schedule_right_info_pp">
                                            	血液型
                                            </div>
                                            <div class="schedule_right_subinfo_pp">
                                            	A
                                            </div>
                                        </div>
                                        <div class="schedule_right_row_pp">
                                        	<div class="schedule_right_info_pp">
                                            	出身
                                            </div>
                                            <div class="schedule_right_subinfo_pp">
                                            	大分県
                                            </div>
                                        </div>
                                        <div class="schedule_right_row_pp">
                                        	<div class="schedule_right_info_pp">
                                            	身長
                                            </div>
                                            <div class="schedule_right_subinfo_pp">
                                            	175
                                            </div>
                                        </div>
                                        <div class="schedule_right_row_pp">
                                        	<div class="schedule_right_info_pp">
                                            	靴のサイズ
                                            </div>
                                            <div class="schedule_right_subinfo_pp">
                                            	27.5
                                            </div>
                                        </div>
                                        <div class="schedule_right_grid_pp">
                                        	<div class="schedule_right_img_pp">
                                            	<a href="javascript:void(0)"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/twitter_icon.svg" alt=""></a>
                                            </div>
                                            <div class="schedule_right_img_pp">
                                            	<a href="javascript:void(0)"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/insta_icon.svg" alt=""></a>
                                            </div>
                                            <div class="schedule_right_img_pp">
                                            	<a href="javascript:void(0)"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/tiktok_icon.svg" alt=""></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="schedule_box_pp">
                                	<div class="schedule_left_img_pp">
                                    	<a href="javascript:void(0)"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/Management_img_4.png" alt=""></a>
                                    </div>
                                    <div class="schedule_right_pp">
                                    	<div class="schedule_right_title_pp">
                                        	SHURU
                                        </div>
                                        <div class="schedule_right_row_pp">
                                        	<div class="schedule_right_info_pp">
                                            	誕生日
                                            </div>
                                            <div class="schedule_right_subinfo_pp">
                                            	1999.3.11
                                            </div>
                                        </div>
                                        <div class="schedule_right_row_pp">
                                        	<div class="schedule_right_info_pp">
                                            	血液型
                                            </div>
                                            <div class="schedule_right_subinfo_pp">
                                            	O
                                            </div>
                                        </div>
                                        <div class="schedule_right_row_pp">
                                        	<div class="schedule_right_info_pp">
                                            	出身
                                            </div>
                                            <div class="schedule_right_subinfo_pp">
                                            	熊本県
                                            </div>
                                        </div>
                                        <div class="schedule_right_row_pp">
                                        	<div class="schedule_right_info_pp">
                                            	身長
                                            </div>
                                            <div class="schedule_right_subinfo_pp">
                                            	176
                                            </div>
                                        </div>
                                        <div class="schedule_right_row_pp">
                                        	<div class="schedule_right_info_pp">
                                            	靴のサイズ
                                            </div>
                                            <div class="schedule_right_subinfo_pp">
                                            	28.5
                                            </div>
                                        </div>
                                        <div class="schedule_right_grid_pp">
                                        	<div class="schedule_right_img_pp">
                                            	<a href="javascript:void(0)"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/twitter_icon.svg" alt=""></a>
                                            </div>
                                            <div class="schedule_right_img_pp">
                                            	<a href="javascript:void(0)"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/insta_icon.svg" alt=""></a>
                                            </div>
                                            <div class="schedule_right_img_pp">
                                            	<a href="javascript:void(0)"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/tiktok_icon.svg" alt=""></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="schedule_box_pp">
                                	<div class="schedule_left_img_pp">
                                    	<a href="javascript:void(0)"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/Management_img_5.png" alt=""></a>
                                    </div>
                                    <div class="schedule_right_pp">
                                    	<div class="schedule_right_title_pp">
                                        	KANNA
                                        </div>
                                        <div class="schedule_right_row_pp">
                                        	<div class="schedule_right_info_pp">
                                            	誕生日
                                            </div>
                                            <div class="schedule_right_subinfo_pp">
                                            	2000.7.6
                                            </div>
                                        </div>
                                        <div class="schedule_right_row_pp">
                                        	<div class="schedule_right_info_pp">
                                            	血液型
                                            </div>
                                            <div class="schedule_right_subinfo_pp">
                                            	AB
                                            </div>
                                        </div>
                                        <div class="schedule_right_row_pp">
                                        	<div class="schedule_right_info_pp">
                                            	出身
                                            </div>
                                            <div class="schedule_right_subinfo_pp">
                                            	宮崎県
                                            </div>
                                        </div>
                                        <div class="schedule_right_row_pp">
                                        	<div class="schedule_right_info_pp">
                                            	身長
                                            </div>
                                            <div class="schedule_right_subinfo_pp">
                                            	180
                                            </div>
                                        </div>
                                        <div class="schedule_right_row_pp">
                                        	<div class="schedule_right_info_pp">
                                            	靴のサイズ
                                            </div>
                                            <div class="schedule_right_subinfo_pp">
                                            	26.5
                                            </div>
                                        </div>
                                        <div class="schedule_right_grid_pp">
                                        	<div class="schedule_right_img_pp">
                                            	<a href="javascript:void(0)"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/twitter_icon.svg" alt=""></a>
                                            </div>
                                            <div class="schedule_right_img_pp">
                                            	<a href="javascript:void(0)"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/insta_icon.svg" alt=""></a>
                                            </div>
                                            <div class="schedule_right_img_pp">
                                            	<a href="javascript:void(0)"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/tiktok_icon.svg" alt=""></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="schedule_box_pp">
                                	<div class="schedule_left_img_pp">
                                    	<a href="javascript:void(0)"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/Management_img_6.png" alt=""></a>
                                    </div>
                                    <div class="schedule_right_pp">
                                    	<div class="schedule_right_title_pp">
                                        	RYUSEI
                                        </div>
                                        <div class="schedule_right_row_pp">
                                        	<div class="schedule_right_info_pp">
                                            	誕生日
                                            </div>
                                            <div class="schedule_right_subinfo_pp">
                                            	2000.8.17
                                            </div>
                                        </div>
                                        <div class="schedule_right_row_pp">
                                        	<div class="schedule_right_info_pp">
                                            	血液型
                                            </div>
                                            <div class="schedule_right_subinfo_pp">
                                            	B
                                            </div>
                                        </div>
                                        <div class="schedule_right_row_pp">
                                        	<div class="schedule_right_info_pp">
                                            	出身
                                            </div>
                                            <div class="schedule_right_subinfo_pp">
                                            	神奈川県
                                            </div>
                                        </div>
                                        <div class="schedule_right_row_pp">
                                        	<div class="schedule_right_info_pp">
                                            	身長
                                            </div>
                                            <div class="schedule_right_subinfo_pp">
                                            	169
                                            </div>
                                        </div>
                                        <div class="schedule_right_row_pp">
                                        	<div class="schedule_right_info_pp">
                                            	靴のサイズ
                                            </div>
                                            <div class="schedule_right_subinfo_pp">
                                            	27
                                            </div>
                                        </div>
                                        <div class="schedule_right_grid_pp">
                                        	<div class="schedule_right_img_pp">
                                            	<a href="javascript:void(0)"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/twitter_icon.svg" alt=""></a>
                                            </div>
                                            <div class="schedule_right_img_pp">
                                            	<a href="javascript:void(0)"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/insta_icon.svg" alt=""></a>
                                            </div>
                                            <div class="schedule_right_img_pp">
                                            	<a href="javascript:void(0)"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/tiktok_icon.svg" alt=""></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="schedule_box_pp">
                                	<div class="schedule_left_img_pp">
                                    	<a href="javascript:void(0)"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/Management_img_7.png" alt=""></a>
                                    </div>
                                    <div class="schedule_right_pp">
                                    	<div class="schedule_right_title_pp">
                                        	GEN
                                        </div>
                                        <div class="schedule_right_row_pp">
                                        	<div class="schedule_right_info_pp">
                                            	誕生日
                                            </div>
                                            <div class="schedule_right_subinfo_pp">
                                            	2000.9.4
                                            </div>
                                        </div>
                                        <div class="schedule_right_row_pp">
                                        	<div class="schedule_right_info_pp">
                                            	血液型
                                            </div>
                                            <div class="schedule_right_subinfo_pp">
                                            	B
                                            </div>
                                        </div>
                                        <div class="schedule_right_row_pp">
                                        	<div class="schedule_right_info_pp">
                                            	出身
                                            </div>
                                            <div class="schedule_right_subinfo_pp">
                                            	大阪府
                                            </div>
                                        </div>
                                        <div class="schedule_right_row_pp">
                                        	<div class="schedule_right_info_pp">
                                            	身長
                                            </div>
                                            <div class="schedule_right_subinfo_pp">
                                            	175
                                            </div>
                                        </div>
                                        <div class="schedule_right_row_pp">
                                        	<div class="schedule_right_info_pp">
                                            	靴のサイズ
                                            </div>
                                            <div class="schedule_right_subinfo_pp">
                                            	28
                                            </div>
                                        </div>
                                        <div class="schedule_right_grid_pp">
                                        	<div class="schedule_right_img_pp">
                                            	<a href="javascript:void(0)"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/twitter_icon.svg" alt=""></a>
                                            </div>
                                            <div class="schedule_right_img_pp">
                                            	<a href="javascript:void(0)"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/insta_icon.svg" alt=""></a>
                                            </div>
                                            <div class="schedule_right_img_pp">
                                            	<a href="javascript:void(0)"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/tiktok_icon.svg" alt=""></a>
                                            </div>
                                        </div>
                                    </div>
                                </div> -->
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
        <div class="clearfix"></div>
    </section>
<!-- CONTAIN_END -->
<?php
get_footer();
