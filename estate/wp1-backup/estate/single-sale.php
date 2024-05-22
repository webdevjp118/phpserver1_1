<?php
get_header();
global $wp_query;
$query = $wp_query;
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
        $loop_photos = get_field('写真');
        if(empty($loop_photos)) $loop_photos = [];
        $loop_info = get_field('物件情報');
        if(empty($loop_info)) $loop_info = [];
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
                                    <h1>売買仲介</h1>
                                    <h3>Sale</h3>
                                </div>
                            </div>
                            <div class="banner_right_rp">
                                <a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/banner_img4.png" alt="" /></a>
                            </div>
                        </div>			     
                    </div>                                               
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>            
        <div class="clearfix"></div>
    </div>  	        
    <div class="estate_block_rep">                     	
        <div class="container">
            <div class="row">
                <div class="col estate_block_in_rep">                    	
                    <div class="estate_middle_rep">                         	                      		
                        <div class="estate_top_rep">
                            <div class="estate_title_rep">
                                <?php echo $loop_title; ?>
                            </div>
                            <div class="estate_img_rep sync1 owl-carousel owl-theme">
                                <?php
                                    foreach($loop_photos as $each_photo) {        
                                ?>
                                <div class="estate_box_img_rep">
                                    <img src="<?php echo $each_photo['url']; ?>" alt="" />
                                </div>
                                <?php        
                                    }
                                ?>
                            </div>
                            <div class="estate_boxes_rep sync2 owl-carousel owl-theme">
                                <?php
                                    foreach($loop_photos as $each_photo) {        
                                ?>
                                <div class="estate_box_img_rep">
                                    <img src="<?php echo $each_photo['sizes']['thumbnail']; ?>" alt="" />
                                </div>
                                <?php        
                                    }
                                ?>
                            </div>
                        </div>
                    </div>                                               
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>            
        <div class="clearfix"></div>
    </div>
    <div class="property_block_rep">                     	
        <div class="container">
            <div class="row">
                <div class="col property_block_in_rep">                    	
                    <div class="property_middle_rep">                         	                      		
                        <div class="property_top_rep">                            	                                
                            <div class="property_title_rep">
                                物件情報
                            </div>
                            <div class="property_list">
                                <?php
                                    foreach($loop_info as $each_info) {
                                ?>
                                <div class="property_row_rep">
                                    <div class="property_row_left_rep">
                                        <?php echo $each_info['属性名']; ?>
                                    </div>
                                    <div class="property_row_right_rep">
                                        <?php echo $each_info['属性値']; ?>
                                    </div>
                                </div>
                                <?php 
                                    }
                                ?>
                            </div>
                        </div>
                    </div>                                               
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>            
        <div class="clearfix"></div>
    </div>
    <div class="map_block_rep">                     	
        <div class="container">
            <div class="row">
                <div class="col map_block_in_rep">                    	
                    <div class="map_middle_rep"> 
                        <div class="property_title_rep">
                            地図
                        </div>                        	                      		
                        <div class="map_top_rep">
                            <div class="map_img_rep">
                                <?php echo get_field('地図'); ?>
                            </div>                            	                                
                        </div>
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
<?php
    endwhile;
endif;	
?>
<!-- CONTAIN_END -->
<?php
get_footer();
