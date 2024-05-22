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
                                <h1>WORKS</h1>
                                <p>林塗装店が手掛ける様々な塗装</p>
                            </div>
                            <div class="banner_img_cp">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/banner_img3.png" alt="" />
                            </div>
                        </div>                            
                    </div>                                               
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>            
        <div class="clearfix"></div>
    </div> 
    <div class="works_block_hp"> 
        <div class="works_inner_hp">                    	
            <div class="container container_banner">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 works_block_in_hp">  
                        <div class="works_middle_hp">
                            <div class="works_row_hp">
<?php
$terms = get_terms([
    'taxonomy' => 'work_cat',
    'hide_empty' => false,
]);
foreach($terms as $term) {
?>                                
                                <div class="<?php echo ($term->term_id == $category_id)?'works_tab_hp active':'works_tab_hp'; ?>">
                                    <a href="<?php echo get_term_link($term); ?>"><?php echo $term->name; ?></a>
                                </div>
<?php 
}
?>
                            </div>
                            <div class="works_top_hp">
<?php
if ( $query->have_posts() ) :
    while ( $query->have_posts() ) :
        $query->the_post();
        $loop_id = get_the_id();
        $loop_title = get_the_title();
        $loop_content = wp_strip_all_tags( get_the_content($loop_id) );
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
                                <div class="works_box_hp">
                                    <div class="works_img_hp">
                                        <a href="javascript:void(0)"><img src="<?php echo $loop_thumb_url; ?>" alt=""></a>
                                    </div>
                                    <div class="works_info_hp">
                                        <h4><?php echo $loop_title; ?></h4>
                                        <p><?php echo $loop_content; ?></p>
                                    </div>
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
        </div>                      
        <div class="clearfix"></div>
    </div> 
    <?php get_template_part('template-parts/contact-section'); ?>                            		                                                                                         
</section>