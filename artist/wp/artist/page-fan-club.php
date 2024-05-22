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
                           		<li class="breadcrumb-item"><a href="javascript:void(0)">FAN CLUB</a></li>                                                              
                        	</ol>                                                                                             
                        </div>                       
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>            
            <div class="clearfix"></div>
        </div>         
        <div class="fan_block_fp">
            <div class="common_ab_title_hp">
             	<h2>FAN CLUB</h2>
            </div>
            <div class="common_shadow_2_hp">
            	<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/shadow2.png" alt="">
            </div>
            <div class="common_shadow_1_hp">
          		<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/shadow2.png" alt="">
        	</div>  
            <div class="container container_inner">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 fan_block_in_fp">
                    	<div class="page_common_title_sdp">
                        	<h2>FAN CLUB</h2>
                        </div>
                        <div class="fan_middle_fp">  
                            <div class="fan_top_fp">
                                <div class="fan_title_fp">
                                    <h3>coming soon</h3>
                                </div> 
<!--                                 <div class="fan_top_inner_fp">
                                    <div class="fan_box_hp">
                                        <div class="fan_submit_btn_fp">
                                            <form action="<?php echo get_site_url(); ?>/fan-club-login/">
                                                <input type="submit" value="ログイン">
                                            </form>
                                        </div> 	                               		
                                   </div>
                                   <div class="fan_subinfo_fp">アカウントをお持ちでない場合</div>
                                   <div class="fan_text_btn_fp">
                                      <a href="javascript:void(0)">会員登録はこちら</a>  
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
