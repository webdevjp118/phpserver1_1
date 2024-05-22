<?php
get_header();
?>
<!-- CONTAIN_START -->
<section id="contain">    	        
    <div class="banner_block_rp">                     	
        <div class="container-fluid">
            <div class="row">
                <div class="col banner_block_in_rp">                    	
                    <div class="banner_middle_rp"> 
                        <div class="banner_top_rp">
                            <div class="banner_left_rp">
                                <div class="banner_left_title_rp">
                                    <h1>お知らせ</h1>
                                    <h3>News</h3>
                                </div>
                            </div>
                            <div class="banner_right_rp">
                                <a><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/banner_img7.png" alt="" /></a>
                            </div>
                        </div>			     
                    </div>                                               
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>            
        <div class="clearfix"></div>
    </div>
    <div class="profile_block_pp">                     	
        <div class="container">
            <div class="row">
                <div class="col profile_block_in_pp">                    	
                    <div class="pmhwp">
						<?php
							if ( have_posts() ) :
								while ( have_posts() ) :
									the_post();
									echo "<h1>".get_the_title()."</h1>";
									the_content();
									echo "<p>&nbsp;</p>";
								endwhile;
							endif;
						?>
					</div>                                              
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>            
        <div class="clearfix"></div>
    </div>
    <div class="contact_block_cp" style="background:url(<?php echo get_stylesheet_directory_uri(); ?>/images/contact_img.png) no-repeat center center; background-size:cover;">                     	
        <div class="container">
            <div class="row">
                <div class="col contact_block_in_cp"> 
                    <div class="common_title_hp">
                            <h2>Contact</h2>
                            <p>お問い合わせ</p>
                        </div>                   	
                    <div class="contact_middle_cp">  
                            <div class="contact_top_cp">
                            <div class="contact_box_cp">
                                <div class="contact_box_info_cp">
                                    各種相談無料ですので、お気軽にお問い合わせ下さい。
                                </div>
                                <div class="contact_box_in_cp">
                                    <div class="contact_left_cp">
                                        <div class="contact_left_grid_cp">
                                            <div class="contact_grid_icon_cp">
                                                <a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/phone_icon.svg" alt="" /></a>
                                            </div>
                                            <div class="contact_grid_number_cp">
                                                0980-75-0720
                                            </div>
                                        </div>
                                    </div>
                                    <div class="contact_right_cp">
                                        <div class="contact_btn_cp">
                                            <a href="<?php echo get_site_url(); ?>/contact/" class="common_btn_hp">お問い合わせ<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/common_btn_icon.svg" alt="" /></a>
                                            <div class="contact_icon_cp">
                                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/file_icon.svg" alt="" />
                                            </div>
                                        </div>
                                    </div>
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
</section>
<!-- CONTAIN_END -->
<?php
get_footer();