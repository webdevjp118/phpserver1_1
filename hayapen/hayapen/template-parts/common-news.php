<?php
global $query;
global $category_id;
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
    <div class="news_block_hp news_change_np">         	               	
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 news_block_in_hp">                     	
                    <div class="news_middle_hp">                        	                                                    
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
                        <div class="news_row_hp">
                            <a href="<?php echo $loop_permalink; ?>">
                                <div class="news_date_hp">
                                    <?php echo $loop_date; ?>
                                </div>
                                <div class="news_title_hp">
                                    <?php echo $loop_category_name; ?>
                                </div>
                                <div class="news_info_hp">
                                    <?php echo $loop_title; ?>
                                </div>
                            </a>
                        </div>
<?php
    endwhile;
endif;
?>
                    </div>  
                    <div class="news_pagination_np">
                        <div class="pagination_wrap">
                            <?php wp_pagenavi(array('query' => $query)); ?>
                        </div>									
                    </div>   
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>                                 
        <div class="clearfix"></div>
    </div>        
<?php get_template_part('template-parts/contact-section'); ?>
    
</section>