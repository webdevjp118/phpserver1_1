<?php
get_header();
global $wp_query;
$query = $wp_query;
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
                                	<a><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/banner_img2.png" alt="" /></a>
                                </div>
                            </div>			     
                        </div>                                               
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>            
            <div class="clearfix"></div>
        </div>  	        
    	<div class="real_block_rp">                     	
            <div class="container">
                <div class="row">
                    <div class="col real_block_in_rp">                    	
                        <div class="real_middle_rp"> 
                        	<div class="real_info_rp">
                            	<div class="real_title_rp">
                                	売買仲介
                                </div>
                                <div class="real_subinfo_rp">
                                	豊富な経験と知識を持つスタッフが、お客様のご希望に沿った物件探しをお手伝いします。また、物件の内見や契約手続きに関しても、親切丁寧にご案内いたします。当社のサービスにより、お客様の不動産取引がスムーズに進むよう、全力でサポートいたします。 実績は現在準備中です。
                                </div>
                            </div>
                      		<div class="real_boxes_rp">  
<?php
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
                            	<div class="real_box_rp">
                                	<a href="<?php echo $loop_permalink; ?>">
                                        <div class="real_img_rp">
                                            <img src="<?php echo $loop_thumb_url; ?>" alt="" />
                                        </div>
                                        <div class="real_subtitle_rp">
                                            <?php echo $loop_title; ?>
                                        </div>
                                    </a>
                                </div>
<?php
    endwhile;
endif;	
?>								
                            </div>
                            <div class="real_bottom_rp">
                            	<div class="real_pagination_rp">
									<div class="pagination_wrap">
        								<?php wp_pagenavi(array('query' => $query)); ?>
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
                                                <a href="<?php echo get_site_url(); ?>/sale/" class="common_btn_hp">お問い合わせ<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/common_btn_icon.svg" alt="" /></a>
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
