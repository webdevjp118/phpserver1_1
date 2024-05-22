<?php
get_header();
?>
<section id="contain">    	        
    <div class="banner_block_op" style="background:url(<?php echo get_stylesheet_directory_uri(); ?>/images/banner_img12.png) no-repeat top center;"> 
        <div class="banner_overlay_op">            
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 banner_block_in_op">                          	                  	
                        <div class="banner_middle_op"> 
                            <div class="banner_top_op">            
                                <div class="banner_info_op">
                                    <h3>News</h3>
                                    <h2>ニュース</h2>
                                </div>
                            </div>
                        <div class="clearfix"></div>
                        </div>
                    </div> 
                </div>           
            <div class="clearfix"></div>
            </div>
        </div>
    </div>
    
    <div class="news_block_np">            
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 news_block_in_np">
                    <div class="common_title_hp common_center_hp"> 
                        <p>News</p>                   	
                        <h2>ニュース</h2>
                    </div>                    	
                    <div class="news_middle_np">            
<?php
if ( have_posts() ) :
    while ( have_posts() ) :
        the_post();
        $loop_id = get_the_id();
        $loop_title = get_the_title();
        $loop_date = get_the_date('Y/m/d');
        $loop_permalink = get_the_permalink($loop_id);
        $loop_category_objects = get_the_category($loop_id);
        $loop_category_name = "";
        foreach($loop_category_objects as $cd){
            $loop_category_name = $cd->cat_name;
            break;
        }
?>
						<div class="blog_title">
							<h1><?php echo $loop_title; ?></h1>
						</div>
						<div class="blog_datecat">
							<p><?php echo $loop_date; ?></p>
							<div class="news_box_title_np">
								<?php echo $loop_category_name; ?>
							</div>
						</div>
						
                        <div class="blog_body">
							<div class="pmhwp">
								<?php the_content(); ?>
							</div>
						</div>
<?php
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
            
    <div class="inquiry_block_hp">            
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 inquiry_block_in_hp">                    	
                    <div class="inquiry_middle_hp">
                        <a href="<?php echo get_site_url(); ?>/contact/">
                        <div class="inquiry_top_hp">
                            <div class="inquiry_left_hp">
                                <div class="inquiry_title_hp">
                                    お問い合わせ
                                </div>
                                <div class="inquiry_info_hp">
                                    Contact us
                                </div>
                            </div>
                            <div class="inquiry_right_hp">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/inquiry_icon.svg" alt="">
                            </div>  			     
                        </div></a>
                    </div>                                               
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>            
        <div class="clearfix"></div>
    </div>  
</section>

<?php
get_footer();
