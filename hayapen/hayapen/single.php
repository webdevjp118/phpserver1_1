<?php
get_header();
?>

<section id="contain">    	        
    <div class="banner_block_cp">             
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 banner_block_in_cp">                    	
                    <div class="banner_middle_cp"> 
                        <div class="banner_top_cp">		     
                            <div class="banner_title_cp">
                                <h1>NEWS</h1>
                                <p>お知らせ</p>
                            </div>
                            <div class="banner_img_cp">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/banner_6.png" alt="" />
                            </div>
                        </div>                            
                    </div>                                               
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>            
        <div class="clearfix"></div>
    </div>  
    <div class="detached_block_sdp" id="tab1">             
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 detached_block_in_sdp">                    	
					<div class="detached_middle_sdp">
						<div class="detached_top_sdp">
							<div class="detached_grid_sdp">
								<div class="detached_title_sdp">
									<?php the_title(); ?>
								</div>
								<div class="blog_content">
									<div class="pmhwp">
										<?php the_content(); ?>
									</div> 
								</div>
							</div>
						</div>
						<div class="detached_btn_sdp"> 
							<a href="<?php echo get_site_url(); ?>/news/">  
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/btn_svg.svg" alt="">                    
								Back
							</a>
						</div>
					</div>                                               
					<div class="clearfix"></div>
				</div>
			</div>
		</div>            
		<div class="clearfix"></div>
	</div>     
	<div style="width:100%; height:60px;"></div>
	<?php get_template_part('template-parts/contact-section'); ?>
</section>

<?php
get_footer();
